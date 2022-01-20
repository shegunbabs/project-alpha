<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginDoctor extends Component
{

    public $email;
    public $password;
    public $remember;
    private $guard = 'doctor';

    public function submit()
    {
        $data = $this->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'remember' => ['present', 'nullable', 'boolean']
        ]);

        $this->ensureIsNotRateLimited();

        if (! Auth::guard($this->guard)->attempt($this->only(['email', 'password']), $this->remember) ){
            RateLimiter::hit($this->throttleKey());

            $this->addError('email', __('auth.failed'));
            return;
        }
        RateLimiter::clear($this->throttleKey());
        request()->session()->regenerate();
        return redirect()->intended(route('doctor.dashboard'));
    }


    public function render()
    {
        return view('auth.login-doctor')
            ->layout('layouts.doctor.auth');
    }


    private function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        //event(new Lockout($this->fields()));
        $seconds = RateLimiter::availableIn($this->throttleKey());

        $this->addError('email', trans('auth.throttle', [
            'seconds' => $seconds,
            'minutes' => ceil($seconds / 60),
        ]));
    }


    private function throttleKey(): string
    {
        return Str::lower($this->email).'|'.request()->ip();
    }
}
