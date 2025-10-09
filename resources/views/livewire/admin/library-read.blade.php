<?php

use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Events')] 
class extends Component 
{

}; ?>


<div x-data="{ modal: false, deletedId: null }">
    <x-frontend.c-header-md
        :message="'Read'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                Easily add new Read, view details, and delete those no longer needed.
            '
        " 
    />
    <div class="mt-4 flex items-center gap-4">
        <x-frontend.c-input 
            :class="'w-full max-w-sm shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
            :placeholder="'Search read...'"
            type="search"
            {{-- wire:model.live.debounce.250ms="search" --}}
        />
        <x-backend.c-button
            :class="'bg-black text-white shrink-0'"
            :text="'Add Read'"
            :link="'/admin-library-read/add'"
        />
    </div>
    <div class="mt-2 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm outline-1 outline-black/5 rounded-md">
                <table class="relative min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr>
                            <x-table.th class="py-3.5 pr-3 pl-4 sm:pl-6" :text="'Title'" />
                            <x-table.th :text="'Description'" />
                            <x-table.th :text="'Event Date'" />
                            <x-table.th :text="'Created At'" />
                            <x-table.th :text="'Action'" />
                            {{-- <th scope="col" class="py-3.5 pr-4 pl-3 sm:pr-6">
                                <span class="sr-only">Edit</span>
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        <tr>
                            <td colspan="5" class="py-4 text-sm text-center">

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
            </div>
        </div>
        </div>
    </div>
</div>
