<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | About')] 
class extends Component {
    //
}; ?>


<div class="pt-10 sm:pt-20 relative overflow-hidden">
    <x-frontend.c-bg1 />
    <x-frontend.c-section class="mt-16 relative z-10">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <x-frontend.c-header-md 
                    :class="'text-white text-shadow-lg md:text-4xl'" 
                    :message="'About'" 
                />
                <x-frontend.c-header-lg
                    :class="'text-white text-shadow-lg !text-left text-4xl'" 
                    :message="'Mark Lurtsema'" 
                />
                <x-frontend.c-paragraph 
                    :class="'text-neutral-200 text-shadow-sm'"
                    :message="'I am not a noun. I am not a title, a role, or a frozen label. I am a verb—a becoming. This is not just my story, but an offering, an invocation, a quiet flare of heat along your spine. It is a call to awaken and arrive.'"
                />
                <br>
                <x-frontend.c-paragraph 
                    :class="'text-neutral-200 text-shadow-sm'"
                    :message="'I was born into structure—Jehovah’s Witnesses shaped my childhood with doctrine and dread. At ten years old, I asked the forbidden question: How could a loving God murder billions for not believing what we say?'"
                />
                <br>
                <x-frontend.c-paragraph 
                    :class="'text-neutral-200 text-shadow-sm'"
                    :message="'The thought alone terrified me. They told us such questions were dangerous, proof of sin. But I could not unask them. And when I told my mother I no longer believed, she said, “Your belief does not matter. You will believe what I tell you to believe.”'"
                />
                <br>
                <x-frontend.c-paragraph 
                    :class="'text-neutral-200 text-shadow-sm'"
                    :message="'That was the moment the mask cracked. I left home at sixteen with grief in my gut and a flickering sense of something more—something unnamable, sovereign, waiting.”'"
                />
                <br>
                <x-frontend.c-paragraph 
                    :class="'text-neutral-200 text-shadow-sm'"
                    :message="'That walk into the unknown—without ceremony, without scripture—was my first ritual of liberation.”'"
                />
            </div>
            <div class="mt-8 md:mt-0 flex justify-center lg:justify-end relative z-10">
                <x-frontend.c-rounded-img 
                    src="{{ asset('img/love-1.webp') }}" 
                    alt="Profile Picture"
                    hasBorder="true"
                    imgClass="object-cover mx-auto"
                    imgMaxWidth="360px"
                />
            </div>
        </div>
    </x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-4xl'" 
            :message="'The Crucible of Chaos: From Orders to Presence'" 
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'I went east: first into the Army, then the Marine Corps. I did not just serve—I shaped myself in the furnace of endurance. Pain, terror, brotherhood, loss. I learned how to hold presence when the world goes quiet with fear. I realized that clarity matters more than noise.”'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'That in the eye of the storm, the body knows.”'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'That was my second fire. The Crucible. The body forged by discipline—but kept alive by breath.”'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-2xl'" 
            :message="'The Illusion of the Light: '" 
        />
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-4xl'" 
            :message="'When Transcendence Becomes a Trap'" 
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'After military service, I wanted a purpose. I needed meaning. And like many who burn with longing, I walked into the spiritual fire without knowing where it would lead.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'By twenty-four, I had stepped into another system—this time cloaked in metaphysical light. Rama’s cult offered vibrational seduction through mantras, meditation, and mysticism. But beneath the robes of awakening was another form of control. Conditional love. Authority that demanded surrender. Presence twisted into power.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'And like before, I chose to walk away. Even with the threat of losing everything. Because I had been here before, and the body does not lie.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'That walk away was my third ritual of liberation—a sovereign no wrapped in sacred silence.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'I came to Alaska not to escape, but to embody. This land does not bend. It meets you exactly where you are. Cold, vast, brutally beautiful, like the soul, like the edge.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'Here I became a different kind of priest—not of theology, but of systems. I worked in enterprise IT, building code for banks, oil fields, health systems, and tribal nations. And even there, I wove intention into the machine: presence into the process. Sacred algorithms. Structured breath.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'This was not a job. It was an unspoken prayer. A ritual with keystrokes and contracts. A priesthood of presence in the secular world.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'Then came Gail, not as savior, but as a mirror. She did not rescue me. She saw me. She held the becoming without flinching.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'Together, we built a life of ceremony—retreats shaped by firelight, conversations as sacraments, wild rivers as confessional. She stood beside me not to lead, but to walk—every ritual, every edge, every rite of silence and sigh.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-4xl'" 
            :message="'Now: The Living Offering'" 
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'I hold no rank now. No badge. No religion. No cult. Only presence.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'What I offer is not therapy. It is not another ideology or an ascension program for the spiritually restless. What I present is this:'"
        />
        <br>
        <ul class="text-neutral-200 list-disc list-inside text-md">
            <li><span class="font-bold text-white">Tantric breathing</span> that cracks open the mask</li>
            <li><span class="font-bold text-white">Somatic coaching</span> grounded in consent and edge</li>
            <li><span class="font-bold text-white">Reiki and tantric massage</span> that remembers the body as temple, not machine</li>
            <li><span class="font-bold text-white">Rites and retreats</span> that are not escape—but entry</li>
            <li><span class="font-bold text-white">Technology woven with soul</span>—yes, even your business can become sacred</li>
        </ul>
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'This is for warriors of presence. For those who are done asking for permission. For those who have walked away—and are ready to walk home.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-4xl'" 
            :message="'The Invitation: Your Body Knows'" 
        />
        <br>
        <div class="text-neutral-200 text-shadow-sm text-md">
            Your invitation is not a pitch. It is a <span class="text-white font-bold">threshold.</span>
        </div>
        <br>
        <ul class="text-neutral-200 list-disc list-inside text-md">
            <li>Do you know what it means to take your first breath—unfiltered, unconditioned?</li>
            <li>Have you ever touched your own clarity, without apology?</li>
            <li>Can you feel your sovereignty in your bones?</li>
        </ul>
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'If you do, then you are already halfway here.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'If you do not, that is okay. Because this is not a test, it is a homecoming.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-4xl'" 
            :message="'Final Call: No More Scripts'" 
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'I am not here to save you. I cannot.'"
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'I am not here to convince you. That is your job.'"
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'am here to witness. To offer tools. To light the incense at the edge of your own altar.'"
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'What I give is simple:'"
        />
        <br>
        <ul class="text-neutral-200 list-disc list-inside text-md">
            <li>A <span class="font-bold text-white">ritual</span> to breathe open your edge</li>
            <li>A <span class="font-bold text-white">container</span> to hold your shape while you melt and reform</li>
            <li>A <span class="font-bold text-white">language</span> to speak no and still be loved</li>
            <li>A <span class="font-bold text-white">field</span> to remember who you were before the story was assigned</li>
        </ul>
    </x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-4xl'" 
            :message="'And Yes—Let It Flirt'" 
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'There is heat here.'"
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="' There is a pulse.'"
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="' There is the whisper behind your sternum that says, “I want.”'"
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'And for once in your life, you are allowed:'"
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'Let it be sacred. Let it be sovereign. Let it be yours.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-[#F6B7B7] text-shadow-lg text-4xl text-center'" 
            :message="'Come home.'" 
        />
        <x-frontend.c-header-md 
            :class="'text-[#F6B7B7] text-shadow-lg text-4xl text-center'" 
            :message="'Show me your skin.'" 
        />
        <x-frontend.c-header-md 
            :class="'text-[#F6B7B7] text-shadow-lg text-4xl text-center'" 
            :message="'Show me your breath.'" 
        />
        <x-frontend.c-header-md 
            :class="'text-[#F6B7B7] text-shadow-lg text-4xl text-center'" 
            :message="'Show me the clarity that survived the story.'" 
        />
        <br>
        <br>
        <x-frontend.c-header-md 
            :class="'text-[#F6B7B7] text-shadow-lg text-xl text-right'" 
            :message="'—The Mystic Occasionally Known as Mark Lurtsema'" 
        />
                <x-frontend.c-header-md 
            :class="'text-[#F6B7B7] text-shadow-lg text-xl text-right'" 
            :message="'(verb, not noun)'" 
        />
    </x-frontend.c-section>
</div>
