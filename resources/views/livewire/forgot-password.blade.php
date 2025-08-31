<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Livewire\Forms\RegisterForm;
use Illuminate\Support\Facades\Password;
use App\Models\User;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Forgot Password')] 
class extends Component {
    
    public string $email = '';

    public function  sendResetLink() 
    {
        $this->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $status = Password::sendResetLink(
            ['email' => $this->email]
        );

        if ($status === Password::RESET_LINK_SENT) {
            session()->flash('status', __($status));
        } else {
            $this->addError('email', __($status));
        }
    }
}; ?>

<div class="py-20 h-full w-full sm:pt-40 relative">
    <img class="object-cover h-full w-full absolute top-0" src="{{ asset('img/fire-bg.webp') }}" alt="">
    <x-frontend.c-section class="z-10 !pb-10 relative">
        <x-frontend.c-header-lg 
            :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
            :message="'Reset Password'"
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm !text-center max-w-md mx-auto'"
            :message="'Enter your user account\'s verified email address and we will send you a password reset link.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section class="!pt-0 z-10 relative" gridGap="8">
        <form wire:submit="sendResetLink">
            <div class="grid gap-4 mx-auto max-w-md">
                <x-frontend.c-input 
                    wire:model="email"
                    :placeholder="'Enter your Email'"
                    :id="'register-fn'"
                    :error="$errors->first('email')"
                />
            </div>
            <div class="flex mt-4">
                <x-frontend.c-button 
                    type="submit" 
                    class="!text-black mx-auto mt-4 w-full max-w-sm sm:max-w-md bg-gradient-to-b from-[#FEBB37] to-[#FF8400]"
                    wire:loading.attr="disabled"
                >
                    <span wire:loading.remove>
                        SEND PASSWORD RESET EMAIL
                    </span>

                    <span wire:loading>
                        <span class="flex items-center justify-center">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Processing...
                        </span>
                    </span>
                </x-frontend.c-button>
       
            </div>
            @if (session()->has('status'))
                <p class="mt-4 text-green-400 text-center">
                    {{ session('status') }}
                </p>
            @endif
        </form>
    </x-frontend.c-section>
</div>
