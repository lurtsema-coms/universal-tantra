<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Login')] 
class extends Component {
    
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function login(Request $request) {

        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $request->session()->regenerate();
            $this->redirect('/dashboard', navigate: true);
        }

        $this->addError('record', 'The provided credentials do not match our records.');
    }
}; ?>

<div class="pt-20 sm:pt-40 relative">
    <img class="object-cover h-full w-full absolute top-0" src="{{ asset('img/fire-bg.webp') }}" alt="">
    <x-frontend.c-section class="relative z-10" gridGap="8">
        <x-frontend.c-header-lg 
            :class="'text-[#E30E00] text-shadow-lg text-3xl lg:!text-6xl !mb-0 sm:!text-center'" 
            :message="'Enter The Temple'" 
        />
        <x-frontend.c-paragraph
            :class="'text-neutral-300 text-shadow-sm !text-center !px-0 mx-auto !gap-1 sm:!px-12'"
            :message="'This is your gateway into the living field of Universal Tantra. Members receive access to exclusive rituals, ongoing practices, and a community devoted to breath, touch, and presence.'"
        />
        <form wire:submit="login">
            <div class="grid gap-2 mx-auto max-w-sm">
                <x-frontend.c-input
                    wire:model="email" 
                    :placeholder="'Email'"
                    :id="'login-email'"
                    :error="$errors->first('email')"
                />
                <x-frontend.c-input 
                    wire:model="password"
                    autocomplete="current-password webauthn"
                    :placeholder="'Password'"
                    :id="'login-password'"
                    :type="'password'"
                    :error="$errors->first('password')"
                />
                <x-frontend.c-checkbox
                    wire:model="remember"
                    :label="'Stay Logged In'"
                    :id="'login-remember'"
                />
                <x-frontend.c-button type="submit" class="mt-4 w-full bg-gradient-to-b from-red-700 to-red-900" text="ENTER THE TEMPLE" />
                @if (session('status'))
                    <div class="mt-2 text-center text-sm text-green-400">
                        {{ session('status') }}
                    </div>
                @endif
                @error('record')
                    <div class="text-red-500 text-sm mt-2 text-center">{{ $message }}</div>
                @enderror
                <a wire:navigate class="text-center text-white mt-4 hover:underline" href="/forgot-password">I forgot my password</a>
            </div>
        </form>
        <div class="my-4 w-full h-[1px] bg-white"></div>
        <x-frontend.c-header-md 
            :class="'text-white text-shadow-lg text-center'" 
            :message="'New to the temple? Sign up and begin your initiation.'" 
        />
        <x-frontend.c-button :link="'/register'" class="!text-black mx-auto w-full max-w-sm bg-gradient-to-b from-[#FEBB37] to-[#FF8400]" text="CREATE AN ACCOUNT" />
    </x-frontend.c-section>
</div>
