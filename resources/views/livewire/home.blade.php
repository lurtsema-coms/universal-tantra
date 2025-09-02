<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Home')] 
class extends Component {
    //
}; ?>

<div>
    <section class="pt-35 sm:pt-52 px-5 relative">
        <div class="relative z-20">
            <x-frontend.c-header-lg 
                :class="'text-white !text-center text-shadow-lg font-cormorant font-normal text-2xl sm:!text-7xl'" 
                :message="'Welcome to Universal Tantra'" 
            />
            <x-frontend.c-paragraph 
                :class="'text-white max-w-[50rem] !text-center m-auto text-shadow-sm'"
                :message="
                    '
                        where breath becomes invitation, skin becomes scripture, and presence becomes the first taste
                        of sacred union. Think of this page not as a mission statement, but as a foreplay. Spark your 
                        curiosity, ignite the longing, and invite you into the edge of what it means to be fully alive.
                    '
                " 
            />
            {{-- <div class="h-80 rounded-3xl w-full border-2 border-gray-200 max-w-2xl m-auto mt-16 bg-white/30">
            </div> --}}
            <div class="rounded-3xl w-full border-2 border-gray-200 max-w-2xl m-auto mt-16 bg-white/30 overflow-hidden">
                <video 
                    class="w-full h-85 object-cover object-[center_52%] rounded-3xl"
                    autoplay 
                    muted 
                    loop 
                    playsinline 
                    preload="none"
                >
                    <source src="{{ asset('video/vajra_bell.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="flex gap-8 mt-12 justify-center">
                <x-frontend.c-button class="bg-gradient-to-b from-red-700 to-red-900 w-89" text="LOGIN ACCOUNT" :link="'/login'"  />
                <x-frontend.c-button class="bg-gradient-to-b from-yellow-500 to-yellow-900 w-89" text="ENTER THE TEMPLE"/>
            </div>
        </div>
        <div class="absolute left-0 top-0 md:-top-30 w-full overflow-hidden">
            <img class="opacity-35 sm:opacity-100 w-full object-cover" 
                src="{{ asset('img/love.webp') }}" 
                alt="fire-overlay">
        </div>
        <div class="absolute left-0 top-20 md:-bottom-70 w-full overflow-hidden">
            <img class="opacity-35 sm:opacity-60 w-full scale-125 object-cover mix-blend-screen select-none" 
                src="{{ asset('img/fire-overlay.webp') }}" 
                alt="fire-overlay">
        </div>
        <div class="sm:hidden absolute left-0 -bottom-190 inset-0 overflow-hidden">
            <img 
                class="opacity-60 w-full h-full object-scale-down lg:object-cover mix-blend-screen select-none"
                src="{{ asset('img/fire-bg1.webp') }}" 
                alt="fire-overlay"
            >
        </div>
    </section>
    <br>
    <br>
    <div class="relative">
        <div class="absolute top-30 inset-0 w-full h-full overflow-hidden z-10">
            <img 
                class="opacity-60 w-full h-full object-cover mix-blend-screen select-none"
                src="{{ asset('img/fire-bg.webp') }}" 
                alt="fire-overlay"
            >
        </div>
        <x-frontend.c-section cardClass="relative w-full z-10" :gridColumn="2">
            <div class="absolute inset-0 h-[43rem]">
                <div class="absolute inset-0 bg-gradient-to-b from-black-100 via-red-600/70 to-black-100 opacity-80 mix-blend-screen select-none">
                </div>
            </div>
            <div class="relative z-10">
                <x-frontend.c-header-lg 
                    :class="'text-white text-shadow-lg text-left sm:text-center'" 
                    :message="'A Pulse Beneath the Pavement'" 
                />
                <x-frontend.c-paragraph 
                    :class="'text-white text-shadow-sm'"
                    :message="
                        'You know that flutter behind the breastbone, a soft flare of heat that arrives uninvited, just 
                        before your mind quiets and something opens. That\'s Tantra—not yoga-class meditation, but the 
                        liturgy of living skin. Universal Tantra invites you into your body, not out of it. We call that 
                        pulse God. Goddess, Love, Life—but there, we let touch, breath, and ritual speak.'
                    " 
                />
            </div>
            <div class="mt-16 lg:mt-0 flex justify-center lg:justify-end relative z-10">
                <x-frontend.c-rounded-img 
                    src="{{ asset('img/love-1.webp') }}" 
                    alt="Profile Picture"
                    hasBorder="true"
                    imgClass="object-cover mx-auto"
                    imgMaxWidth="370px"
                />
            </div>
        </x-frontend.c-section>
        <x-frontend.c-section classCard="relative z-10" :gridGap="0">
            <div class="relative z-10">
                <x-frontend.c-header-lg 
                    :class="'text-header text-shadow-lg m-auto max-w-4xl !text-center'" 
                    :message='"More Than Mind Porn: Flesh Light"'
                />
                <x-frontend.c-paragraph 
                    :class="'text-header text-shadow-sm max-w-3xl m-auto !text-center'"
                    :message="'Our Culture is built on distraction: screens, outrage loops, identity slogans. We elevate victimhood, worship performance-
                    until the body is just infrastucture for the story. Universal Tantra is the other story. We can\'t offer another ideology. Instead, we offer:'"
                />
                <br>
                <br>
                <x-frontend.c-grid-card 
                    :color="'#FEBB37'"
                    :bgColor="'bg-[#FEBB37]/20'"
                    :maxWidth="'max-w-5xl m-auto'"
                    :contets="[
                        ['title' => 'Tantric Breathing', 'description' => 'Rituals that guide you into altered presence'],
                        ['title' => 'Tantra-Reiki and Massage', 'description' => 'Touch that heals, clears trauma, awakens your edge'],
                        ['title' => 'Somatic Workshops', 'description' => 'Learn to hold your center through breath, consent, ritual'],
                        ['title' => 'Embodied Retreats & Seminars', 'description' => 'Days immersed in sacred architecture of the body. This isn\'t spirituality. It\'s renegade ritual rooted in skin'],
                    ]" 
                />
            </div>
        </x-frontend.c-section>
        <x-frontend.c-section cardClass="relative z-10" :gridGap="0" :gridColumn="2">
            <div class="flex justify-center lg:justify-start order-2 lg:order-1 mt-16 lg:mt-0">
                <x-frontend.c-rounded-img 
                    src="{{ asset('img/love-2.webp') }}" 
                    alt="Profile Picture"
                    hasBorder="true"
                    imgClass="object-cover mx-auto"
                    imgMaxWidth="370px"
                />
            </div>
            <div class="flex flex-col justify-center order-1 lg:order-2">
                <x-frontend.c-header-lg 
                    :class="'text-white text-shadow-lg'" 
                    :message="'Desire is Devotion'" 
                />
                <x-frontend.c-paragraph 
                    :class="' text-white text-shadow-sm text-center sm:text-left'"
                    :message="
                        'Let\'s drop the spiritual platitudes: we don\'t fear desire. We honor it. We spiral it into prayer. A sigh becomes mantra. 
                        Tantric breathing takes you deeper; reiki touch warms your center; massage opens your edges; ritual holds your boundaries. 
                        The erotic is not a glitch-it is the current.'
                    " 
                />
            </div>
        </x-frontend.c-section>
    </div>
    <br>
    <br>
    <x-frontend.c-section :cardClass="'bg-gradient-to-r from-[#571212] via-[#6d1616] to-[#571212] relative z-10'" :gridGap="0">
        <x-frontend.c-header-lg 
            :class="'text-white text-shadow-lg m-auto max-w-3xl !text-center'" 
            :message='"Why \"Universal\"? Because Every Path Can Pass Through the Body"'
        />
        <x-frontend.c-paragraph 
            :class="' text-white text-shadow-sm !text-center'"
            :message="'We don\'t reject any tradition: Chtristianity, Islam, Buddhism, atheism, science-all pass through this one altar: 
            your body, your breath, your presence. Whether you wear a rosary or a lab coat-or nothing at all-you canarrive. The only entry 
            ticket we deman is your presence.'"
        />
    </x-frontend.c-section>
    <div class="relative">
        <br>
        <br>
        <div class="absolute inset-0 overflow-hidden">
            <img 
                class="opacity-60 w-full h-full object-scale-down lg:object-cover mix-blend-screen select-none"
                src="{{ asset('img/fire-bg1.webp') }}" 
                alt="fire-overlay"
            >
        </div>
        <div class="absolute left-0 bottom-0 w-full overflow-hidden">
            <img class="h-[35rem] w-full object-cover object-top mix-blend-screen select-none" 
                src="{{ asset('img/love-4.webp') }}" 
                alt="fire-overlay">
        </div>
        <x-frontend.c-section cardClass="relative z-10" :gridGap="0">
            <x-frontend.c-header-lg 
                :class="'text-[#fe8337] text-shadow-lg m-auto max-w-3xl !text-center'" 
                :message='"The Anatomy of Presence"'
            />
            <x-frontend.c-paragraph 
                :class="' text-[#fe8337] text-shadow-sm max-w-3xl m-auto !text-center'"
                :message="'Here\'s what we ofer-and how you become this practice:'"
            />
            <br>
            <br>
            <x-frontend.c-grid-card 
                :color="'#fe8337'"
                :bgColor="'bg-[#fe8337]/20'"
                :maxWidth="'max-w-5xl m-auto'"
                :contets="[
                    ['title' => 'Consent as Core', 'description' => 'Rituals that guide you into altered presence'],
                    ['title' => 'Tantra-Reiki and Massage', 'description' => 'Touch that heals, clears trauma, awakens your edge'],
                    ['title' => 'Somatic Workshops', 'description' => 'Learn to hold your center through breath, consent, ritual'],
                    ['title' => 'Embodied Retreats & Seminars', 'description' => 'Days immersed in sacred architecture of the body. This isn\'t spirituality. It\'s renegade ritual rooted in skin'],
                    ['title' => 'Embodied Retreats & Seminars', 'description' => 'Days immersed in sacred architecture of the body. This isn\'t spirituality. It\'s renegade ritual rooted in skin'],
                ]" 
            />
        </x-frontend.c-section>
        <x-frontend.c-section cardClass="relative z-10" :gridColumn="2">
            <div class="flex justify-center lg:justify-start order-2 lg:order-1 mt-16 lg:mt-0">
                <x-frontend.c-rounded-img 
                    src="{{ asset('img/love-3.webp') }}" 
                    alt="Profile Picture"
                    hasBorder="true"
                    imgClass="object-cover mx-auto"
                    imgMaxWidth="370px"
                />
            </div>
            <div class="flex flex-col justify-center order-1 lg:order-2">
                <x-frontend.c-header-lg 
                    :class="'text-white text-shadow-lg text-left lg:max-w-sm sm:text-center lg:text-left'" 
                    :message="'For the Warriors and Lovers'" 
                />
                <x-frontend.c-paragraph 
                    :class="'font-raleway text-white/70 text-shadow-sm sm:text-center lg:text-left'"
                    :message="'We are not inviting the spiritual tourists. This path is for:'"
                />
                <br>
                <ul class="font-raleway text-white list-disc list-inside text-md sm:text-center lg:text-left">
                    <li>The heart-scarred who refuse to play broken</li>
                    <li>The hungry truth-seekers craving more than stories</li>
                    <li>The sovereign souls are tired of outsourcing freedom</li>
                    <li>The erotic ancients who choose devotion to this skin</li>
                </ul>
                <br>
                <x-frontend.c-paragraph 
                    :class="'font-raleway text-white/70 text-shadow-sm sm:text-center lg:text-left'"
                    :message="'This is a field of consecrated experience, your breath, your claim.'"
                />
            </div>
        </x-frontend.c-section>
        <x-frontend.c-section cardClass="relative z-10" :gridGap="0">
            <div class="relative z-10">
                <x-frontend.c-header-lg 
                    :class="'text-header text-shadow-lg m-auto max-w-3xl !text-center'" 
                    :message="'What You\'ll Find Here'"
                />
                <x-frontend.c-paragraph 
                    :class="'text-header text-shadow-sm max-w-3xl m-auto !text-center'"
                    :message="'Here\'s what we ofer-and how you become this practice:'"
                />
                <br>
                <br>
                <x-frontend.c-grid-card 
                    :color="'#febb37'"
                    :bgColor="'bg-[#FEBB37]/20'"
                    :maxWidth="'max-w-5xl m-auto'"
                    :contets="[
                        ['title' => 'Consent as Core', 'description' => 'Rituals that guide you into altered presence'],
                        ['title' => 'Tantra-Reiki and Massage', 'description' => 'Touch that heals, clears trauma, awakens your edge'],
                        ['title' => 'Somatic Workshops', 'description' => 'Learn to hold your center through breath, consent, ritual'],
                        ['title' => 'Embodied Retreats & Seminars', 'description' => 'Days immersed in sacred architecture of the body. This isn\'t spirituality. It\'s renegade ritual rooted in skin'],
                        ['title' => 'Embodied Retreats & Seminars', 'description' => 'Days immersed in sacred architecture of the body. This isn\'t spirituality. It\'s renegade ritual rooted in skin'],
                        ['title' => 'Embodied Retreats & Seminars', 'description' => 'Days immersed in sacred architecture of the body. This isn\'t spirituality. It\'s renegade ritual rooted in skin'],
                    ]" 
                />
            </div>
        </x-frontend.c-section>
        <x-frontend.c-section cardClass="relative z-10 py-20" class="lg:!max-w-4xl" :gridGap="0">
            <div class="z-10 relative">
                <x-frontend.c-header-lg 
                    :class="'text-white text-shadow-lg max-w-xl sm:mx-auto lg:mx-0 text-left sm:text-center lg:!text-left'" 
                    :message="'This Isn\'t a Comfort Zone - It\'s a Fire Zone'"
                />
                <x-frontend.c-paragraph 
                    :class="'font-raleway text-white/70 text-shadow-sm sm:text-center lg:text-left'"
                    :message="'Expect fo feel:'"
                />
                <br>
                <ul class="font-raleway text-white list-disc list-inside text-md sm:text-center lg:text-left">
                    <li>The tremor of permission when you speak your truth</li>
                    <li>The burn of ritual when breath meets boundary</li>
                    <li>The rush of initiation when edges release</li>
                    <li>The sweetness of embodiment when presents holds you</li>
                </ul>
                <br>
                <div class="sm:text-center lg:text-left">
                    <span class="text-white/70 text-md">We won't promise comfort. We offer <span class="text-white">clarity, sovereignty, ressurection</span></span>
                </div>
            </div>
        </x-frontend.c-section>
    </div>
    <x-frontend.c-section :cardClass="'bg-gradient-to-r from-[#571212] via-[#6d1616] to-[#571212]'" :gridGap="0">
        <x-frontend.c-header-lg 
            :class="'text-[#F6B7B7] text-shadow-lg m-auto max-w-3xl !text-center'" 
            :message='"A Whisper of Invitation"'
        />
        <x-frontend.c-paragraph 
            :class="'font-raleway text-[#F6B7B7] text-shadow-sm !text-center'"
            :message="'Imagine waking not to an alarm but to your body\'s yes. Imagine breath that stops the story. Imagine touch that reveals, not ertertains.
            Imagine gathering where consent is sacred communication, not checkbox.'"
        />
        <br>
        <div class="!text-center">
            <x-frontend.c-paragraph 
                :class="'font-raleway text-[#F6B7B7] text-shadow-sm !text-center inline-block'"
                :message="'That\'s the foreplay. That\'s the moment you lean into'"
            />
            <x-frontend.c-paragraph 
                :class="'font-raleway text-[#F6B7B7] font-bold text-shadow-sm !text-center inline-block'"
                :message="'the edge of who you were told to be, and who you are untethered.'"
            />
        </div>
    </x-frontend.c-section>
    <div class="relative">
        <div class="absolute top-0 inset-0 overflow-hidden">
            <img 
                class="opacity-60 w-full h-full object-scale-down lg:object-cover mix-blend-screen select-none"
                src="{{ asset('img/fire-bg2.webp') }}" 
                alt="fire-overlay"
            >
        </div>
        <div class="relative z-10">
            <div class="relative">
                <div class="absolute inset-0 w-full h-full overflow-hidden z-10">
                    <img 
                        class="opacity-60 w-full h-full object-cover mix-blend-screen select-none"
                        src="{{ asset('img/fire-spark-bg.webp') }}" 
                        alt="fire-overlay"
                    >
                </div>
                <x-frontend.c-section class="!max-w-6xl py-20 relative z-10" :gridGap="8" :gridColumn="2">
                    <div>
                        <x-frontend.c-header-lg 
                            :class="'text-white text-shadow-lg text-left sm:text-center'" 
                            :message="'Ready to Step In? Here\'s Where You Begin'" 
                        />
                        <div class="grid gap-8 mx-auto sm:text-center lg:text-left">
                            <div>
                                <x-frontend.c-header-md 
                                    :class="'text-white text-shadow-lg'" 
                                    :message="'Start the Daily Tantric Breath'" 
                                />
                                <x-frontend.c-paragraph 
                                    :class="'font-raleway text-white/70 text-shadow-sm'"
                                    :message="
                                        'Sign up for our free breathing altar-30seconds of ritual delivered every morning'
                                    " 
                                />
                            </div>
                            <div>
                                <x-frontend.c-header-md 
                                    :class="'text-white text-shadow-lg'" 
                                    :message="'Book a Tantric-Reiki & Massage Session'" 
                                />
                                <x-frontend.c-paragraph 
                                    :class="'font-raleway text-white/70 text-shadow-sm'"
                                    :message="
                                        'Available online or in-person, for trauma clearing, pleasure activation, or sacred reset'
                                    " 
                                />
                            </div>
                            <div>
                                <x-frontend.c-header-md 
                                    :class="'text-white text-shadow-lg'" 
                                    :message="'Join an Upcoming Retreat or Seminar'" 
                                />
                                <x-frontend.c-paragraph 
                                    :class="'font-raleway text-white/70 text-shadow-sm'"
                                    :message="
                                        'Deep dives into tirual structure and embodiment across days, not hours'
                                    " 
                                />
                            </div>
                            <div>
                                <x-frontend.c-header-md 
                                    :class="'text-white text-shadow-lg'" 
                                    :message="'Enlist in The Liberation Covenant'" 
                                />
                                <x-frontend.c-paragraph 
                                    :class="'font-raleway text-white/70 text-shadow-sm'"
                                    :message="
                                        'Ongoing membership for warriors of presence, devotion, and radical clarity'
                                    " 
                                />
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-8 lg:mt-0 items-center lg:justify-end">
                        <img
                            class="max-w-96 object-contain"
                            src="{{ asset('img/bell.webp') }}" 
                            alt="bell"
                        />
                    </div>
                </x-frontend.c-section>
            </div>
            <x-frontend.c-section :cardClass="'bg-gradient-to-b from-[#6A0404] to-[#D0090900]'" :gridGap="0">
                <x-frontend.c-header-lg 
                    :class="'text-[#F6B7B7] text-shadow-lg m-auto max-w-4xl !text-center'" 
                    :message='"Universal Tantra: Ritualizing the Body, Reclaiming the Soul"'
                />
                <x-frontend.c-paragraph 
                    :class="'font-raleway text-[#F6B7B7] max-w-3xl mx-auto text-shadow-sm !text-center'"
                    :message="'You were taught spirituality must be fragile, ascetic, quiet. You may have believed that wouds are you. You may\'ve hidden behind roles.'"
                />
                <br>
                <br>
                <div class="!text-center">
                    <x-frontend.c-header-md
                        :class="'text-[#F6B7B7] text-shadow-lg m-auto max-w-4xl !text-center'" 
                        :message='"Show me your skin."'
                    />
                    <x-frontend.c-header-md
                        :class="'text-[#F6B7B7] text-shadow-lg m-auto max-w-4xl !text-center'" 
                        :message='"Show me your breath."'
                    />
                    <x-frontend.c-header-md
                        :class="'text-[#F6B7B7] text-shadow-lg m-auto max-w-4xl !text-center'" 
                        :message='"Show me your clarity-your control and your collapse."'
                    />
                    <x-frontend.c-header-md
                        :class="'text-[#F6B7B7] text-shadow-lg m-auto max-w-4xl !text-center'" 
                        :message="'Show me you\'re still standing.'"
                    />
                </div>
                <br>
                <br>
                <x-frontend.c-paragraph 
                    :class="'font-raleway text-[#F6B7B7] max-w-3xl mx-auto text-shadow-sm !text-center'"
                    :message="'Here, in this temple of presence, we remember who we are beneath every story. We stir the embers of sovereignty, stoking breath to fire and flesh to flame.'"
                />
                <br>
                <x-frontend.c-paragraph
                    :class="'font-raleway text-[#F6B7B7] font-bold text-shadow-lg m-auto max-w-4xl !text-center'" 
                    :message="'Welcome to your body\'s resolution.'"
                />
            </x-frontend.c-section>
        </div>
    </div>

</div>
