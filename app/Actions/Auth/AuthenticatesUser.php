<?php


namespace App\Actions\Auth;


use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthenticatesUser
{

    protected $data;


    public function execute(array $data)
    {
        $this->data = $data;

        return $this->authenticate($this->data);

    }


    private function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::guard('doctor')->attempt([
            $this->data['email'],
            $this->data['password']], $this->data['remember'])) {

            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }


    private function ensureIsNotRateLimited(): void
    {
        if ( !RateLimiter::tooManyAttempts($this->throttleKey(), 5) ) {
            return;
        }

        //event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }


    private function throttleKey(): string
    {
        return Str::lower($this->data['email']).'|'.request()->ip();
    }
}
