<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Register')] 
class extends Component {

}; ?>

<div x-data="{ modal: false }" class="pt-20 sm:pt-40 relative">
    <img class="object-cover h-full w-full absolute top-0" src="{{ asset('img/fire-bg.webp') }}" alt="">
    <x-frontend.c-section class="z-10 relative" gridGap="8">
        <x-frontend.c-header-lg 
            :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
            :message="'Create an Account'" 
        />
        <form action="">
            <div class="grid grid-cols-2 gap-4 mx-auto max-w-xl">
                <x-frontend.c-input 
                    :placeholder="'First Name'"
                    :id="'register-fn'"
                />
                <x-frontend.c-input 
                    :placeholder="'Last Name'"
                    :id="'register-ln'"
                />
            </div>
            <div class="mt-2 grid gap-2 m-auto max-w-xl">
                <x-frontend.c-input 
                    :placeholder="'Email'"
                    :id="'register-email'"
                    :type="'email'"
                />
                <x-frontend.c-input 
                    :placeholder="'Password'"
                    :id="'register-password'"
                    :type="'password'"
                />
                <div class="flex items-center gap-2">
                    <input x-ref="login-checkbox" type="checkbox" class="my-2 h-5 w-5 bg-white rounded-md cursor-pointer">
                    <label class="relative -top-[.5px] text-white">I agree to the <span x-on:click="modal = true" class="text-white font-bold cursor-pointer select-none">Terms & Condition</span></label>
                </div>
                <x-frontend.c-button class="mx-auto mt-4 w-full max-w-sm bg-gradient-to-b from-yellow-500 to-yellow-900" text="JOIN NOW" />
            </div>
        </form>
        <br>
        <br>
    </x-frontend.c-section>
    <x-frontend.c-modal
        x-show="modal"
        :maxWidth="'xl'"
        :title="'Terms and Conditions'" 
        :subHeader="'Please read terms and condition.'"
        :descriptions="[
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque labore obcaecati quibusdam quod soluta delectus, laboriosam, et ad optio distinctio aliquid doloribus nesciunt recusandae tenetur voluptate temporibus corrupti, esse minus',
            'hahaha'
        ]"
        :canceled="'$refs[\'login-checkbox\'].checked = false'"
        :confirmed="'$refs[\'login-checkbox\'].checked = true'"
        :src="asset('img-icon/t-and-c.png')"
        :alt="'Terms and Conditions Icon'"
    />
</div>
