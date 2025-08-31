<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Reset Password')] 
class extends Component {

    public string $email = '';
    public string $token = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function mount() {
        $this->token = request()->route('token');
        $this->email = request()->query('email', '');
    }

    public function save() {
        $this->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            session()->flash('status', __($status));
            $this->redirectRoute('login', navigate: true);
        } else {
            $this->addError('password', __($status));
        }
    }
}; 
?>

<div class="py-20 h-full w-full sm:pt-40 relative">
    <img class="object-cover h-full w-full absolute top-0" src="{{ asset('img/fire-bg.webp') }}" alt="">
    <x-frontend.c-section class="z-10 !pb-10 relative">
        <x-frontend.c-header-lg 
            :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
            :message="'Change Password'"
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm !text-center max-w-sm mx-auto'"
            :message="'Enter your new password below to reset your account password.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section class="!pt-0 z-10 relative" gridGap="8">
        <form wire:submit="save">
            <div class="grid mx-auto max-w-md">
                <x-frontend.c-input 
                    type="password"
                    wire:model="password"
                    :placeholder="'Enter your new password'"
                    :id="'password'"
                    :error="$errors->first('password')"
                />
            </div>
            <div class="grid mt-2 mx-auto max-w-md">
                <x-frontend.c-input 
                    type="password"
                    wire:model="password_confirmation"
                    :placeholder="'Confirm your new password'"
                    :id="'password_confirmation'"
                    :error="$errors->first('password_confirmation')"
                />
            </div>
            <div class="flex mt-4">
                <x-frontend.c-button 
                    type="submit" 
                    class="!text-black mx-auto mt-4 w-full max-w-sm sm:max-w-md bg-gradient-to-b from-[#FEBB37] to-[#FF8400]" 
                    text="RESET PASSWORD" 
                />
            </div>
            @if (session()->has('status'))
                <p class="mt-4 text-green-400 text-center">
                    {{ session('status') }}
                </p>
            @endif
        </form>
    </x-frontend.c-section>
</div>
