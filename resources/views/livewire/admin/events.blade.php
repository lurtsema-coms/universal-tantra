<?php

use Livewire\WithPagination;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;
use App\Models\Event;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Events')] 
class extends Component 
{
    use WithPagination;

    public function with() : array
    {
        return [
            'events' => $this->loadEvent()
        ];
    }
    
    public function loadEvent() 
    {
        return Event::orderBy('id', 'desc')->paginate(10);
    }
}; ?>


<div>
    <x-frontend.c-header-md
        :message="'Events'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                Easily add new events, view details, and delete those no longer needed.
            '
        " 
    />
    <div class="mt-4 flex items-center gap-4">
        <x-frontend.c-input 
            :class="'w-full max-w-sm shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
            :placeholder="'Search events...'"
            :id="'donate-amount'"
        />
        <x-backend.c-button
            :class="'bg-black text-white shrink-0'"
            :text="'Add Event'"
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
                            <x-table.th class="py-3.5 pr-3 pl-4 sm:pl-6" :text="'Title'" />
                            <x-table.th :text="'Description'" />
                            <x-table.th :text="'Event Date'" />
                            <x-table.th :text="'Created At'" />
                            <th scope="col" class="py-3.5 pr-4 pl-3 sm:pr-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @if ($events->isEmpty())
                            <tr>
                                <td colspan="5" class="pt-4 text-sm text-center">
                                    No events at the moment...
                                </td>
                            </tr>
                        @else
                            @foreach ($events as $event)                        
                                <tr>
                                    <x-table.td :first="true" :text="$event->title" />
                                    <x-table.td :text="$event->description" />
                                    <x-table.td :text="\Carbon\Carbon::parse($event->date)->format('D, F Y')" />
                                    <x-table.td :text="$event->created_at->format('D, F Y')" />
                                    <x-table.td :last="true">
                                        <a href="#" class="text-slate-600 hover:text-slate-900">Edit</a>
                                        <a href="#" class="ml-4 text-red-600 hover:text-red-900">Delete</a>
                                    </x-table.td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $events->links() }}
            </div>
        </div>
        </div>
    </div>
</div>
