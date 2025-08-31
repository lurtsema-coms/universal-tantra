<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Livewire\Forms\RegisterForm;
use App\Models\User;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Register')] 
class extends Component {

    public RegisterForm $form;

    public function save() {
        $this->form->validate();

        $data = Arr::except($this->form->all(), ['registerCheckbox']);
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        $this->form->reset();

        session()->flash('message', 'You Registered Successfully!');
    }
}; ?>

<div x-data="{ modal: false }" class="pt-20 h-full w-full sm:pt-40 relative">
    <img class="object-cover h-full w-full absolute top-0" src="{{ asset('img/fire-bg.webp') }}" alt="">
    <x-frontend.c-section class="z-10 relative" gridGap="8">
        <x-frontend.c-header-lg 
            :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
            :message="'Create an Account'"
        />
        <form wire:submit="save">
            <div class="grid grid-cols-2 gap-4 mx-auto max-w-xl">
                <x-frontend.c-input 
                    wire:model="form.first_name"
                    :placeholder="'First Name'"
                    :id="'register-fn'"
                    :error="$errors->first('form.first_name')"
                />
                <x-frontend.c-input 
                    wire:model="form.last_name"
                    :placeholder="'Last Name'"
                    :id="'register-ln'"
                    :error="$errors->first('form.last_name')"
                />
            </div>
            <div class="mt-2 grid gap-2 m-auto max-w-xl">
                <x-frontend.c-input 
                    wire:model="form.email"
                    :placeholder="'Email'"
                    :id="'register-email'"
                    :type="'email'"
                    :error="$errors->first('form.email')"
                />
                <x-frontend.c-input 
                    wire:model="form.password"
                    :placeholder="'Password'"
                    :id="'register-password'"
                    :type="'password'"
                    :error="$errors->first('form.password')"
                />
                <div class="flex items-center gap-2">
                    <input wire:model="form.registerCheckbox" x-ref="login-checkbox" type="checkbox" class="my-2 h-5 w-5 bg-white rounded-md cursor-pointer">
                    <label class="relative -top-[.5px] text-white">I agree to the <span x-on:click="modal = true" class="text-white font-bold cursor-pointer select-none">Terms & Condition</span></label>
                </div>
                <div>
                    @error('form.registerCheckbox')
                        <p class="mt-1 text-red-500 text-sm">You must agree to the Terms and Conditions.</p>
                    @enderror
                </div>
                <x-frontend.c-button type="submit" class="!text-black mx-auto mt-4 w-full max-w-76 bg-gradient-to-b from-[#FEBB37] to-[#FF8400]" text="JOIN NOW" />
                <x-frontend.c-success-message class="mt-2 text-center" />
                <div class="text-white text-center mt-4">
                    Already have an account? <a class="font-bold" wire:navigate href="{{ route('login') }}">Login here</a>
                </div>
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
        :canceled="'
            $refs[\'login-checkbox\'].checked = false;
            $wire.set(\'form.registerCheckbox\', false);
        '"
        :confirmed="'
            $refs[\'login-checkbox\'].checked = true; 
            $wire.set(\'form.registerCheckbox\', true);
        '"
        :src="asset('img-icon/t-and-c.png')"
        :alt="'Terms and Conditions Icon'"
    />
</div>
