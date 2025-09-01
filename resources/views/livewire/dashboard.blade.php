<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Dashboard')] 
class extends Component {
    
}; ?>

<div>
    <x-frontend.c-header-md
        :message="'Dashboard'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                Your dashboard provides a centralized view to manage users, posts, and system activity efficiently.
            '
        " 
    />
    <div>
        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
            <div class="overflow-hidden border border-black/20 rounded-lg bg-white px-4 py-5 sm:p-6">
                <dt class="truncate text-sm font-medium text-gray-500">Total Subscribers</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">71,897</dd>
            </div>
            <div class="overflow-hidden border border-black/20 rounded-lg bg-white px-4 py-5 sm:p-6">
                <dt class="truncate text-sm font-medium text-gray-500">Avg. Open Rate</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">58.16%</dd>
            </div>
            <div class="overflow-hidden border border-black/20 rounded-lg bg-white px-4 py-5 sm:p-6">
                <dt class="truncate text-sm font-medium text-gray-500">Avg. Click Rate</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">24.57%</dd>
            </div>
        </dl>
    </div>
</div>

