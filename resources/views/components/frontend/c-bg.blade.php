<div>
    <div class="absolute left-0 top-0 md:-top-30 w-full overflow-hidden">
        <img class="w-full object-cover mix-blend-screen"
            @if (!empty($blur) && $blur == true)
                src="{{ asset('img/love-blur.webp') }}"  
                @else
                src="{{ asset('img/love.webp') }}"  
            @endif
            alt="fire-overlay">
    </div>
    <div class="hidden lg:block lg:absolute h-[170rem] w-full left-0 top-0 overflow-hidden">
        <img 
            class="opacity-60 w-full h-full object-scale-down lg:object-cover mix-blend-screen select-none"
            src="{{ asset('img/fire-bg1.webp') }}" 
            alt="fire-overlay"
        >
    </div>
    <div class="hidden lg:block lg:absolute h-[170rem] w-full left-0 top-[130rem] overflow-hidden">
        <img 
            class="opacity-60 w-full h-full object-scale-down lg:object-cover mix-blend-screen select-none"
            src="{{ asset('img/fire-bg1.webp') }}" 
            alt="fire-overlay"
        >
    </div>
    {{-- Small Screen --}}
    <div class="lg:hidden absolute left-0 top-0 overflow-hidden">
        <img 
            class="opacity-60 w-full h-full object-scale-down lg:object-cover mix-blend-screen select-none"
            src="{{ asset('img/fire-bg1.webp') }}" 
            alt="fire-overlay"
        >
    </div>
    <div class="lg:hidden absolute left-0 top-[100rem] overflow-hidden">
        <img 
            class="opacity-60 w-full h-full object-scale-down lg:object-cover mix-blend-screen select-none"
            src="{{ asset('img/fire-bg1.webp') }}" 
            alt="fire-overlay"
        >
    </div>
    <div class="lg:hidden absolute left-0 top-[200rem] overflow-hidden">
        <img 
            class="opacity-60 w-full h-full object-scale-down lg:object-cover mix-blend-screen select-none"
            src="{{ asset('img/fire-bg1.webp') }}" 
            alt="fire-overlay"
        >
    </div>
    <div class="lg:hidden absolute left-0 top-[250rem] overflow-hidden">
        <img 
            class="opacity-60 w-full h-full object-scale-down lg:object-cover mix-blend-screen select-none"
            src="{{ asset('img/fire-bg1.webp') }}" 
            alt="fire-overlay"
        >
    </div>
</div>