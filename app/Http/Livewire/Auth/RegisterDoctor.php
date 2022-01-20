<?php

namespace App\Http\Livewire\Auth;

use App\Models\Doctor;
use App\Support\Traits\ResetLivewireFieldValidationBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Illuminate\Validation\Rules;

class RegisterDoctor extends Component
{
    use ResetLivewireFieldValidationBag;

    public $firstname;
    public $lastname;
    public $gender;
    public $email;
    public $area_of_specialization;
    public $password;
    public $password_confirmation;
    public $mobile;
    public $formStates = [
        'showRegisterForm' => 'true',
        'showMobileValidationForm' => 'false'
    ];
    public $home;
    private $guard = 'doctor';

    public function submit()
    {
        $data = $this->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'gender' => ['required', Rule::in('female', 'male')],
            'area_of_specialization' => ['required'],
            'mobile' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns,rfc', 'max:255', 'unique:doctors'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Doctor::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'area_of_specialization' => $data['area_of_specialization'],
            'gender' => $data['gender'],
        ]);
        //event(new Registered($user));
        Auth::guard($this->guard)->login($user);

        flash()->overlay('You have been logged in successfully', 'Account created');

        return redirect()->intended($this->home);
    }


    public function mount()
    {
        $this->home = route('doctor.dashboard');
    }

    public function render()
    {
        return view('auth.register-doctor')
            ->layout('layouts.doctor.auth');
    }


    protected function fields(): array
    {
        return [
            'firstname', 'lastname', 'gender', 'email', 'area_of_specialization',
            'password', 'mobile',
        ];
    }
}
