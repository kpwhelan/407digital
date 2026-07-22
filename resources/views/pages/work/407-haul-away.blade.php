<x-layout
    title="407 Haul Away Website Case Study | Project 407"
    description="See how Project 407 redesigned the 407 Haul Away website with clearer messaging, stronger credibility, and a mobile-first quote experience."
>
    {{-- Case-study hero --}}
    <section class="relative overflow-hidden bg-ink">
        <div
            aria-hidden="true"
            class="absolute -left-40 top-0 h-96 w-96 rounded-full bg-navy-light blur-3xl"
        ></div>

        <div
            aria-hidden="true"
            class="absolute -right-28 top-20 h-80 w-80 rounded-full bg-orange/15 blur-3xl"
        ></div>

        <div class="site-container relative py-16 sm:py-20 lg:py-28">
            <a
                href="{{ route('work.index') }}"
                class="inline-flex items-center gap-2 text-sm font-bold text-white/60 transition hover:text-orange"
            >
                <svg
                    aria-hidden="true"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="none"
                >
                    <path
                        d="M16 10H4M9 5l-5 5 5 5"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>

                Back to Our Work
            </a>

            <div class="mt-12 grid items-end gap-10 lg:grid-cols-[1fr_0.55fr] lg:gap-20">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange">
                        Website redesign · Featured case study
                    </p>

                    <h1 class="mt-5 max-w-5xl text-5xl font-extrabold leading-[0.95] tracking-[-0.045em] text-white sm:text-6xl lg:text-7xl">
                        A better digital presence for
                        <span class="text-orange">407 Haul Away.</span>
                    </h1>

                    <p class="mt-7 max-w-2xl text-lg leading-8 text-white/70">
                        A complete redesign focused on clear positioning,
                        stronger credibility, and making it easier for customers
                        to request a junk removal quote.
                    </p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
                    <dl class="space-y-5">
                        <div>
                            <dt class="text-xs font-bold uppercase tracking-[0.16em] text-white/40">
                                Business
                            </dt>

                            <dd class="mt-1 font-bold text-white">
                                407 Haul Away LLC
                            </dd>
                        </div>

                        <div>
                            <dt class="text-xs font-bold uppercase tracking-[0.16em] text-white/40">
                                Industry
                            </dt>

                            <dd class="mt-1 font-bold text-white">
                                Junk removal and cleanouts
                            </dd>
                        </div>

                        <div>
                            <dt class="text-xs font-bold uppercase tracking-[0.16em] text-white/40">
                                Service area
                            </dt>

                            <dd class="mt-1 font-bold text-white">
                                Northern MA and Southern NH
                            </dd>
                        </div>

                        <div>
                            <dt class="text-xs font-bold uppercase tracking-[0.16em] text-white/40">
                                Services provided
                            </dt>

                            <dd class="mt-2 flex flex-wrap gap-2">
                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs font-semibold text-white/70">
                                    Strategy
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs font-semibold text-white/70">
                                    Copywriting
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs font-semibold text-white/70">
                                    Design
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs font-semibold text-white/70">
                                    Development
                                </span>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            {{-- Wide preview --}}
            <div class="relative mt-14">
                <div
                    aria-hidden="true"
                    class="absolute inset-4 translate-y-6 rounded-panel border border-orange/20"
                ></div>

                <div class="relative overflow-hidden rounded-panel border border-white/15 bg-white p-2 shadow-card sm:p-3">
                    <div class="flex items-center gap-2 border-b border-navy/10 px-2 pb-2 sm:px-3 sm:pb-3">
                        <div class="flex gap-1.5" aria-hidden="true">
                            <span class="h-2.5 w-2.5 rounded-full bg-[#ff6b5f]"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-[#f6bd4f]"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-[#62c554]"></span>
                        </div>

                        <div class="mx-auto flex h-6 w-[55%] items-center justify-center rounded-full bg-mist">
                            <span class="hidden text-[0.625rem] font-semibold text-slate/70 sm:block">
                                407haulaway.com
                            </span>
                        </div>

                        <div class="w-10" aria-hidden="true"></div>
                    </div>

                    <div class="overflow-hidden rounded-[calc(var(--radius-panel)-0.75rem)]">
                        <img
                            src="{{ asset('images/work/407-haul-away/homepage-wide.png') }}"
                            alt="The redesigned 407 Haul Away homepage"
                            class="aspect-[2.29/1] w-full object-cover object-top"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Project overview --}}
    <section class="section-space bg-white">
        <div class="site-container">
            <div class="grid gap-12 lg:grid-cols-[0.7fr_1.3fr] lg:gap-24">
                <div>
                    <p class="eyebrow">
                        The business
                    </p>

                    <h2 class="section-title mt-5">
                        Local, family-owned, and built on trust.
                    </h2>
                </div>

                <div>
                    <p class="text-xl font-semibold leading-8 text-ink sm:text-2xl sm:leading-9">
                        407 Haul Away helps homeowners, landlords, contractors,
                        and businesses remove unwanted items without the hassle
                        of renting a dumpster or handling disposal themselves.
                    </p>

                    <div class="mt-8 grid gap-6 sm:grid-cols-2">
                        <p class="leading-7 text-slate">
                            The business serves customers across the Merrimack
                            Valley, Northern Massachusetts, and Southern New
                            Hampshire. Its work ranges from individual furniture
                            pickups to full property cleanouts.
                        </p>

                        <p class="leading-7 text-slate">
                            Because customers are inviting a crew onto their
                            property, trust matters. The website needed to feel
                            approachable, capable, and professional from the
                            first visit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Challenge --}}
    <section class="section-space bg-cream">
        <div class="site-container">
            <div class="grid items-start gap-12 lg:grid-cols-[0.85fr_1.15fr] lg:gap-20">
                <div>
                    <p class="eyebrow">
                        The challenge
                    </p>

                    <h2 class="section-title mt-5">
                        The website worked, but it wasn’t doing enough.
                    </h2>

                    <p class="lead mt-5">
                        The original site contained the necessary information,
                        but it lacked the visual confidence and focused customer
                        journey the business needed.
                    </p>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <article class="surface-card p-6 sm:p-7">
                        <span class="text-sm font-extrabold text-orange-dark">
                            01
                        </span>

                        <h3 class="mt-4 text-xl font-extrabold text-ink">
                            Generic presentation
                        </h3>

                        <p class="mt-3 leading-7 text-slate">
                            The previous design didn’t communicate much about
                            the personality or local character of the business.
                        </p>
                    </article>

                    <article class="surface-card p-6 sm:p-7">
                        <span class="text-sm font-extrabold text-orange-dark">
                            02
                        </span>

                        <h3 class="mt-4 text-xl font-extrabold text-ink">
                            Weak visual hierarchy
                        </h3>

                        <p class="mt-3 leading-7 text-slate">
                            Important information and customer actions didn’t
                            stand apart clearly enough.
                        </p>
                    </article>

                    <article class="surface-card p-6 sm:p-7">
                        <span class="text-sm font-extrabold text-orange-dark">
                            03
                        </span>

                        <h3 class="mt-4 text-xl font-extrabold text-ink">
                            Limited differentiation
                        </h3>

                        <p class="mt-3 leading-7 text-slate">
                            The experience didn’t fully explain why a customer
                            should choose 407 Haul Away over another company.
                        </p>
                    </article>

                    <article class="surface-card p-6 sm:p-7">
                        <span class="text-sm font-extrabold text-orange-dark">
                            04
                        </span>

                        <h3 class="mt-4 text-xl font-extrabold text-ink">
                            Missed conversion opportunities
                        </h3>

                        <p class="mt-3 leading-7 text-slate">
                            Requesting a quote needed to be more prominent and
                            easier, especially for customers using phones.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- Goals --}}
    <section class="section-space bg-white">
        <div class="site-container">
            <div class="mx-auto max-w-3xl text-center">
                <p class="eyebrow">
                    Project goals
                </p>

                <h2 class="section-title mt-5">
                    Make the right things obvious.
                </h2>

                <p class="lead mx-auto mt-5">
                    The redesign centered on the questions customers need
                    answered before they feel comfortable reaching out.
                </p>
            </div>

            <div class="relative mt-14 grid gap-5 md:grid-cols-3">
                <div
                    aria-hidden="true"
                    class="absolute left-[16.5%] right-[16.5%] top-7 hidden h-px bg-navy/15 md:block"
                ></div>

                <article class="surface-card relative p-7">
                    <span class="relative z-10 flex h-14 w-14 items-center justify-center rounded-2xl bg-navy text-lg font-extrabold text-white">
                        01
                    </span>

                    <h3 class="mt-6 text-xl font-extrabold text-ink">
                        What does the company do?
                    </h3>

                    <p class="mt-3 leading-7 text-slate">
                        Explain the services clearly without making visitors
                        dig through the site.
                    </p>
                </article>

                <article class="surface-card relative p-7">
                    <span class="relative z-10 flex h-14 w-14 items-center justify-center rounded-2xl bg-navy text-lg font-extrabold text-white">
                        02
                    </span>

                    <h3 class="mt-6 text-xl font-extrabold text-ink">
                        Can I trust this business?
                    </h3>

                    <p class="mt-3 leading-7 text-slate">
                        Reinforce local ownership, insurance, real experience,
                        service quality, and professional standards.
                    </p>
                </article>

                <article class="surface-card relative p-7">
                    <span class="relative z-10 flex h-14 w-14 items-center justify-center rounded-2xl bg-orange text-lg font-extrabold text-ink">
                        03
                    </span>

                    <h3 class="mt-6 text-xl font-extrabold text-ink">
                        How do I get a quote?
                    </h3>

                    <p class="mt-3 leading-7 text-slate">
                        Keep texting photos and calling accessible throughout
                        the experience.
                    </p>
                </article>
            </div>
        </div>
    </section>

    {{-- Design direction --}}
    <section class="section-space bg-ink">
        <div class="site-container">
            <div class="grid items-start gap-12 lg:grid-cols-[0.75fr_1.25fr] lg:gap-20">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange">
                        Design direction
                    </p>

                    <h2 class="mt-5 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                        Professional without feeling corporate.
                    </h2>

                    <p class="mt-6 text-lg leading-8 text-white/65">
                        The final direction combines an established, dependable
                        dark green with warm neutral surfaces and straightforward,
                        confident typography.
                    </p>
                </div>

                <div class="grid gap-5 sm:grid-cols-3">
                    <article class="rounded-2xl border border-white/10 bg-white/5 p-6">
                        <span class="block h-12 w-12 rounded-full bg-[#0d3f2d] ring-4 ring-white/10"></span>

                        <h3 class="mt-5 font-extrabold text-white">
                            Grounded color
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-white/60">
                            Deep green connects the visual identity to the
                            company’s real truck and equipment.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-white/10 bg-white/5 p-6">
                        <span class="flex h-12 w-12 items-center justify-center rounded-full bg-[#f5f2e9] text-xl font-extrabold text-[#0d3f2d]">
                            Aa
                        </span>

                        <h3 class="mt-5 font-extrabold text-white">
                            Confident typography
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-white/60">
                            Bold headings create personality while remaining
                            clear and easy to scan.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-white/10 bg-white/5 p-6">
                        <span class="flex h-12 w-12 items-center justify-center rounded-full bg-[#dbe8dd] text-[#0d3f2d]">
                            <svg
                                aria-hidden="true"
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="M5 12h14M14 7l5 5-5 5"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </span>

                        <h3 class="mt-5 font-extrabold text-white">
                            Obvious actions
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-white/60">
                            Quote and call buttons use contrast and repetition
                            to remain easy to find.
                        </p>
                    </article>
                </div>
            </div>

            {{-- Desktop and mobile --}}
            <div class="mt-16 grid items-end gap-8 lg:grid-cols-[1fr_0.32fr]">
                <div>
                    <p class="mb-4 text-xs font-bold uppercase tracking-[0.16em] text-white/40">
                        Desktop experience
                    </p>

                    <div class="overflow-hidden rounded-panel border border-white/15 bg-white p-2 shadow-card sm:p-3">
                        <img
                            src="{{ asset('images/work/407-haul-away/homepage-desktop.png') }}"
                            alt="Desktop version of the redesigned 407 Haul Away website"
                            class="aspect-[16/10] w-full object-cover object-top"
                            loading="lazy"
                        >
                    </div>
                </div>

                <div class="mx-auto w-full max-w-64 lg:max-w-none">
                    <p class="mb-4 text-xs font-bold uppercase tracking-[0.16em] text-white/40">
                        Mobile experience
                    </p>

                    <div class="rounded-[2rem] border-[7px] border-navy-light bg-navy-light p-1.5 shadow-card">
                        <div class="relative overflow-hidden rounded-[1.4rem] bg-white">
                            <div
                                aria-hidden="true"
                                class="absolute left-1/2 top-2 z-10 h-3 w-14 -translate-x-1/2 rounded-full bg-ink"
                            ></div>

                            <img
                                src="{{ asset('images/work/407-haul-away/homepage-mobile.png') }}"
                                alt="Mobile version of the redesigned 407 Haul Away website"
                                class="aspect-[390/844] w-full object-cover object-top"
                                loading="lazy"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Key decisions --}}
    <section class="section-space bg-cream">
        <div class="site-container">
            <div class="grid gap-12 lg:grid-cols-[0.65fr_1.35fr] lg:gap-20">
                <div>
                    <p class="eyebrow">
                        Key decisions
                    </p>

                    <h2 class="section-title mt-5">
                        Designed around how customers actually choose.
                    </h2>
                </div>

                <div class="divide-y divide-navy/10 border-y border-navy/10">
                    <article class="grid gap-4 py-7 sm:grid-cols-[3rem_1fr] sm:gap-6">
                        <span class="font-extrabold text-orange-dark">01</span>

                        <div>
                            <h3 class="text-xl font-extrabold text-ink">
                                Lead with the result, not a list of services.
                            </h3>

                            <p class="mt-3 leading-7 text-slate">
                                “Junk gone. Space reclaimed.” communicates the
                                customer’s desired outcome before explaining
                                how the service works.
                            </p>
                        </div>
                    </article>

                    <article class="grid gap-4 py-7 sm:grid-cols-[3rem_1fr] sm:gap-6">
                        <span class="font-extrabold text-orange-dark">02</span>

                        <div>
                            <h3 class="text-xl font-extrabold text-ink">
                                Use the actual truck instead of stock imagery.
                            </h3>

                            <p class="mt-3 leading-7 text-slate">
                                Real business photography adds credibility and
                                helps customers recognize the company they’re
                                hiring.
                            </p>
                        </div>
                    </article>

                    <article class="grid gap-4 py-7 sm:grid-cols-[3rem_1fr] sm:gap-6">
                        <span class="font-extrabold text-orange-dark">03</span>

                        <div>
                            <h3 class="text-xl font-extrabold text-ink">
                                Repeat the easiest conversion paths.
                            </h3>

                            <p class="mt-3 leading-7 text-slate">
                                Customers can text photos or call without
                                hunting for a contact page, particularly on mobile.
                            </p>
                        </div>
                    </article>

                    <article class="grid gap-4 py-7 sm:grid-cols-[3rem_1fr] sm:gap-6">
                        <span class="font-extrabold text-orange-dark">04</span>

                        <div>
                            <h3 class="text-xl font-extrabold text-ink">
                                Answer trust questions early.
                            </h3>

                            <p class="mt-3 leading-7 text-slate">
                                Insurance, local ownership, upfront pricing,
                                service area, and customer expectations appear
                                before uncertainty can become friction.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- Outcome --}}
    <section class="section-space bg-white">
        <div class="site-container">
            <div class="dark-panel relative overflow-hidden px-6 py-10 sm:px-10 sm:py-14 lg:px-14">
                <div
                    aria-hidden="true"
                    class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-orange/15 blur-3xl"
                ></div>

                <div class="relative">
                    <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange">
                                The outcome
                            </p>

                            <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                                A website that better represents the business.
                            </h2>
                        </div>

                        <div>
                            <p class="text-xl font-semibold leading-8 text-white/80">
                                The redesigned site gives 407 Haul Away a clearer,
                                more distinctive, and more credible digital presence.
                            </p>

                            <p class="mt-5 leading-7 text-white/60">
                                It communicates the company’s services and values
                                more effectively, creates a smoother experience
                                across devices, and gives prospective customers
                                an obvious way to request help.
                            </p>
                        </div>
                    </div>

                    <div class="mt-12 grid gap-4 sm:grid-cols-3">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
                            <p class="text-2xl font-extrabold text-orange">
                                Clear
                            </p>

                            <p class="mt-2 text-sm leading-6 text-white/60">
                                Stronger messaging and information hierarchy.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
                            <p class="text-2xl font-extrabold text-orange">
                                Credible
                            </p>

                            <p class="mt-2 text-sm leading-6 text-white/60">
                                Real photography and visible trust signals.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
                            <p class="text-2xl font-extrabold text-orange">
                                Actionable
                            </p>

                            <p class="mt-2 text-sm leading-6 text-white/60">
                                Quote and call paths throughout the experience.
                            </p>
                        </div>
                    </div>

                    <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                        <a
                            href="https://407haulaway.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="button-primary justify-center"
                        >
                            Visit the Live Website

                            <svg
                                aria-hidden="true"
                                class="h-4 w-4"
                                viewBox="0 0 20 20"
                                fill="none"
                            >
                                <path
                                    d="M7 13 13 7M8 7h5v5"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </a>

                        <a
                            href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center rounded-full border border-white/20 px-6 py-3 text-sm font-bold text-white transition hover:border-white/40 hover:bg-white/5"
                        >
                            Start a Similar Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="bg-cream py-16 sm:py-20 lg:py-24">
        <div class="site-container">
            <div class="relative overflow-hidden rounded-panel bg-orange px-6 py-14 shadow-card sm:px-10 sm:py-16 lg:px-16">
                <div
                    aria-hidden="true"
                    class="absolute -right-20 -top-24 h-72 w-72 rounded-full border-[48px] border-white/10"
                ></div>

                <div class="relative grid items-center gap-10 lg:grid-cols-[1fr_auto]">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-ink/60">
                            Your business deserves the same care
                        </p>

                        <h2 class="mt-4 max-w-3xl text-3xl font-extrabold tracking-tight text-ink sm:text-4xl lg:text-5xl">
                            Ready for a website that better reflects your business?
                        </h2>

                        <p class="mt-5 max-w-2xl text-base leading-7 text-ink/70 sm:text-lg">
                            Let’s talk about where your current website falls
                            short and what a stronger version should accomplish.
                        </p>
                    </div>

                    <a
                        href="{{ route('contact') }}"
                        class="button-dark justify-center"
                    >
                        Start a Project

                        <svg
                            aria-hidden="true"
                            class="h-4 w-4"
                            viewBox="0 0 20 20"
                            fill="none"
                        >
                            <path
                                d="M4 10h12M11 5l5 5-5 5"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
