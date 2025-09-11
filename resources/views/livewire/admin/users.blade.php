<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Users')] 
class extends Component {
    
}; ?>

<div>
    <x-frontend.c-header-md
        :message="'Users'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                dasdsadasdasd users.
            '
        " 
    />
    <div class="mt-4 flex items-center gap-4">
        <x-frontend.c-input 
            :class="'w-full max-w-sm shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
            :placeholder="'Search account...'"
            type="search"
            wire:model.live.debounce.250ms="search"
        />
        <x-backend.c-button
            :class="'bg-black text-white shrink-0'"
            :text="'Add Account'"
            :link="'/admin-events/add'"
        />
    </div>
    <div class="mt-2 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle px-4 sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm outline-1 outline-black/5 rounded-md">
                    <table class="relative min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <x-table.th class="py-3.5 pr-3 pl-4 sm:pl-6" :text="'Email'" />
                                <x-table.th :text="'Name'" />
                                <x-table.th :text="'Email Verified'"/>
                                <x-table.th :text="'Created At'" />
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <x-table.td  :text="'test@example.com'" />
                                <x-table.td  :text="'Test Example'" />
                                <x-table.td  :text="'2025-08-18 18:07:07'" />
                                <x-table.td  :text="'2025-08-18 18:07:08'" />
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
