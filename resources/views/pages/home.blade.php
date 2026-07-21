<x-layout
    title="Websites and Software for Service Businesses | 407 Digital"
    description="407 Digital builds lead-generating websites and practical software for contractors and local service businesses."
>
    {{-- Hero --}}
    <section class="relative overflow-hidden bg-cream">
        <div
            aria-hidden="true"
            class="absolute -left-32 top-12 h-80 w-80 rounded-full bg-orange/10 blur-3xl"
        ></div>

        <div
            aria-hidden="true"
            class="absolute -right-32 bottom-0 h-96 w-96 rounded-full bg-navy/10 blur-3xl"
        ></div>

        <div class="site-container relative py-16 sm:py-20 lg:py-28">
            <div class="grid items-center gap-16 lg:grid-cols-[0.9fr_1.1fr] lg:gap-12 xl:gap-20">

                {{-- Hero copy --}}
                <div class="relative z-10">
                    <p class="eyebrow">
                        Websites and software for service businesses
                    </p>

                    <h1 class="display-title mt-6 max-w-3xl">
                        Your business does real work.
                        <span class="text-orange">
                            Your website should too.
                        </span>
                    </h1>

                    <p class="lead mt-6 max-w-2xl">
                        We build lead-generating websites and practical software
                        for contractors and local service businesses.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                        <a
                            href="{{ route('contact') }}"
                            class="button-primary justify-center"
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

                        <a
                            href="{{ route('work.index') }}"
                            class="button-secondary justify-center"
                        >
                            See Our Work
                        </a>
                    </div>

                    <ul
                        aria-label="407 Digital benefits"
                        class="mt-8 grid gap-3 text-sm font-semibold text-slate sm:grid-cols-3 lg:grid-cols-1 xl:grid-cols-3"
                    >
                        <li class="flex items-center gap-2">
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange/15 text-orange-dark">
                                <svg
                                    aria-hidden="true"
                                    class="h-3 w-3"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="m3 8 3 3 7-7"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </span>

                            Built to generate leads
                        </li>

                        <li class="flex items-center gap-2">
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange/15 text-orange-dark">
                                <svg
                                    aria-hidden="true"
                                    class="h-3 w-3"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="m3 8 3 3 7-7"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </span>

                            Mobile-first
                        </li>

                        <li class="flex items-center gap-2">
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange/15 text-orange-dark">
                                <svg
                                    aria-hidden="true"
                                    class="h-3 w-3"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="m3 8 3 3 7-7"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </span>

                            No agency runaround
                        </li>
                    </ul>
                </div>

                {{-- Project presentation --}}
                <div class="relative mx-auto w-full max-w-3xl pb-12 sm:pb-16 lg:mx-0">
                    {{-- Decorative wide screenshot --}}
                    <div
                        aria-hidden="true"
                        class="absolute -right-10 -top-8 hidden w-[82%] rotate-3 overflow-hidden rounded-panel border border-navy/10 opacity-[0.08] shadow-card sm:block"
                    >
                        <img
                            src="{{ asset('images/work/407-haul-away/homepage-wide.png') }}"
                            alt=""
                            class="aspect-[2.29/1] w-full object-cover"
                        >
                    </div>

                    {{-- Browser window --}}
                    <div class="relative overflow-hidden rounded-panel border border-navy/15 bg-white p-2 shadow-card sm:p-3">
                        <div class="flex items-center gap-2 border-b border-navy/10 px-2 pb-2 sm:px-3 sm:pb-3">
                            <div class="flex gap-1.5" aria-hidden="true">
                                <span class="h-2.5 w-2.5 rounded-full bg-[#ff6b5f]"></span>
                                <span class="h-2.5 w-2.5 rounded-full bg-[#f6bd4f]"></span>
                                <span class="h-2.5 w-2.5 rounded-full bg-[#62c554]"></span>
                            </div>

                            <div class="mx-auto h-6 w-[55%] rounded-full bg-mist"></div>

                            <div class="w-10" aria-hidden="true"></div>
                        </div>

                        <div class="overflow-hidden rounded-[calc(var(--radius-panel)-0.75rem)] bg-mist">
                            <img
                                src="{{ asset('images/work/407-haul-away/homepage-desktop.png') }}"
                                alt="The 407 Haul Away website displayed on desktop"
                                class="aspect-[16/10] w-full object-cover object-top"
                            >
                        </div>
                    </div>

                    {{-- Mobile preview --}}
                    <div class="absolute -bottom-2 -left-2 w-[25%] min-w-24 max-w-40 rounded-[1.5rem] border-[5px] border-ink bg-ink p-1 shadow-card sm:-bottom-4 sm:-left-5 sm:border-[7px] lg:-left-8">
                        <div class="relative overflow-hidden rounded-[1rem] bg-white">
                            <div
                                aria-hidden="true"
                                class="absolute left-1/2 top-1.5 z-10 h-2.5 w-10 -translate-x-1/2 rounded-full bg-ink"
                            ></div>

                            <img
                                src="{{ asset('images/work/407-haul-away/homepage-mobile.png') }}"
                                alt="The 407 Haul Away website displayed on mobile"
                                class="aspect-[390/844] w-full object-cover object-top"
                            >
                        </div>
                    </div>

                    {{-- Results card --}}
                    <div class="absolute -bottom-5 right-2 max-w-[72%] rounded-2xl border border-navy/10 bg-white px-4 py-3 shadow-card sm:bottom-0 sm:right-5 sm:max-w-xs sm:px-5 sm:py-4 lg:-right-4">
                        <div class="flex items-center gap-3">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-orange/15 text-orange-dark">
                                <svg
                                    aria-hidden="true"
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="M5 16.5 10 12l3 3 6-7"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />

                                    <path
                                        d="M15 8h4v4"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </span>

                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-slate">
                                    Featured project
                                </p>

                                <p class="mt-1 text-sm font-bold leading-tight text-ink sm:text-base">
                                    Built for a real service business.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Credibility strip --}}
    <section class="border-y border-navy/10 bg-white">
        <div class="site-container py-7 sm:py-8">
            <div class="grid items-center gap-6 lg:grid-cols-[1.2fr_1fr]">
                <div class="flex items-start gap-4 sm:items-center">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-navy text-white">
                        <svg
                            aria-hidden="true"
                            class="h-6 w-6"
                            viewBox="0 0 24 24"
                            fill="none"
                        >
                            <path
                                d="M8 18V8a4 4 0 0 1 8 0v10"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                            />

                            <path
                                d="M5 11h14M5 18h14M6 18v2M18 18v2"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                            />
                        </svg>
                    </span>

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange-dark">
                            Built from firsthand experience
                        </p>

                        <p class="mt-1 max-w-2xl text-base font-bold leading-snug text-ink sm:text-lg">
                            Built by a software engineer who also runs a local
                            service business.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-3 divide-x divide-navy/10 rounded-2xl bg-cream px-2 py-4 text-center">
                    <div class="px-2">
                        <p class="text-lg font-extrabold text-ink sm:text-xl">
                            Fast
                        </p>

                        <p class="mt-1 text-xs font-medium text-slate">
                            Responsive builds
                        </p>
                    </div>

                    <div class="px-2">
                        <p class="text-lg font-extrabold text-ink sm:text-xl">
                            Clear
                        </p>

                        <p class="mt-1 text-xs font-medium text-slate">
                            Straightforward process
                        </p>
                    </div>

                    <div class="px-2">
                        <p class="text-lg font-extrabold text-ink sm:text-xl">
                            Useful
                        </p>

                        <p class="mt-1 text-xs font-medium text-slate">
                            Built around results
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services overview --}}
    <section class="section-space bg-cream">
        <div class="site-container">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_auto]">
                <div>
                    <p class="eyebrow">
                        What we build
                    </p>

                    <h2 class="section-title mt-5 max-w-3xl">
                        Digital tools designed to help your business grow.
                    </h2>

                    <p class="lead mt-5 max-w-2xl">
                        From your public-facing website to the software behind your
                        daily operations, everything is built around a real business need.
                    </p>
                </div>

                <a
                    href="{{ route('services') }}"
                    class="button-secondary justify-center"
                >
                    Explore Our Services

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

            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                {{-- Websites --}}
                <article class="interactive-card group flex h-full flex-col p-7 sm:p-8">
                    <div class="flex items-start justify-between gap-4">
                        <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-orange/15 text-orange-dark">
                            <svg
                                aria-hidden="true"
                                class="h-7 w-7"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <rect
                                    x="3"
                                    y="4"
                                    width="18"
                                    height="15"
                                    rx="2"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                />

                                <path
                                    d="M3 8h18"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                />

                                <path
                                    d="M7 6h.01M10 6h.01"
                                    stroke="currentColor"
                                    stroke-width="2.2"
                                    stroke-linecap="round"
                                />

                                <path
                                    d="m8 15 2.5-2.5L13 15l3.5-3.5"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </span>

                        <span class="text-sm font-bold text-slate/60">
                            01
                        </span>
                    </div>

                    <h3 class="card-title mt-7">
                        Lead-generating websites
                    </h3>

                    <p class="mt-4 leading-7 text-slate">
                        Fast, credible websites that clearly explain what you do,
                        build trust, and make it easy for customers to contact you.
                    </p>

                    <ul class="mt-6 space-y-3 text-sm font-semibold text-ink">
                        <li class="flex items-center gap-2">
                            <span class="text-orange" aria-hidden="true">✓</span>
                            Mobile-first design
                        </li>

                        <li class="flex items-center gap-2">
                            <span class="text-orange" aria-hidden="true">✓</span>
                            Clear calls to action
                        </li>

                        <li class="flex items-center gap-2">
                            <span class="text-orange" aria-hidden="true">✓</span>
                            Local search foundations
                        </li>
                    </ul>

                    <a
                        href="{{ route('services') }}#websites"
                        class="mt-auto inline-flex items-center gap-2 pt-8 text-sm font-bold text-ink transition-colors hover:text-orange-dark"
                    >
                        Website services

                        <svg
                            aria-hidden="true"
                            class="h-4 w-4 transition-transform group-hover:translate-x-1"
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
                </article>

                {{-- Software --}}
                <article class="interactive-card group flex h-full flex-col p-7 sm:p-8">
                    <div class="flex items-start justify-between gap-4">
                        <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-navy text-white">
                            <svg
                                aria-hidden="true"
                                class="h-7 w-7"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="m8 9-3 3 3 3M16 9l3 3-3 3M14 5l-4 14"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </span>

                        <span class="text-sm font-bold text-slate/60">
                            02
                        </span>
                    </div>

                    <h3 class="card-title mt-7">
                        Practical custom software
                    </h3>

                    <p class="mt-4 leading-7 text-slate">
                        Focused software that replaces repetitive tasks, scattered
                        spreadsheets, and awkward processes with a simpler workflow.
                    </p>

                    <ul class="mt-6 space-y-3 text-sm font-semibold text-ink">
                        <li class="flex items-center gap-2">
                            <span class="text-orange" aria-hidden="true">✓</span>
                            Internal business tools
                        </li>

                        <li class="flex items-center gap-2">
                            <span class="text-orange" aria-hidden="true">✓</span>
                            Customer portals
                        </li>

                        <li class="flex items-center gap-2">
                            <span class="text-orange" aria-hidden="true">✓</span>
                            Workflow automation
                        </li>
                    </ul>

                    <a
                        href="{{ route('services') }}#software"
                        class="mt-auto inline-flex items-center gap-2 pt-8 text-sm font-bold text-ink transition-colors hover:text-orange-dark"
                    >
                        Software services

                        <svg
                            aria-hidden="true"
                            class="h-4 w-4 transition-transform group-hover:translate-x-1"
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
                </article>

                {{-- Support --}}
                <article class="interactive-card group flex h-full flex-col p-7 sm:p-8 md:col-span-2 lg:col-span-1">
                    <div class="flex items-start justify-between gap-4">
                        <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-orange/15 text-orange-dark">
                            <svg
                                aria-hidden="true"
                                class="h-7 w-7"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="M4 13a8 8 0 0 1 16 0"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                />

                                <path
                                    d="M4 13v3a2 2 0 0 0 2 2h1v-6H6a2 2 0 0 0-2 1ZM20 13v3a2 2 0 0 1-2 2h-1v-6h1a2 2 0 0 1 2 1Z"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linejoin="round"
                                />

                                <path
                                    d="M17 18c0 1.1-.9 2-2 2h-3"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </span>

                        <span class="text-sm font-bold text-slate/60">
                            03
                        </span>
                    </div>

                    <h3 class="card-title mt-7">
                        Ongoing support and improvements
                    </h3>

                    <p class="mt-4 leading-7 text-slate">
                        Reliable help after launch, whether you need content
                        updates, new features, maintenance, or continued guidance.
                    </p>

                    <ul class="mt-6 space-y-3 text-sm font-semibold text-ink">
                        <li class="flex items-center gap-2">
                            <span class="text-orange" aria-hidden="true">✓</span>
                            Updates and maintenance
                        </li>

                        <li class="flex items-center gap-2">
                            <span class="text-orange" aria-hidden="true">✓</span>
                            Performance monitoring
                        </li>

                        <li class="flex items-center gap-2">
                            <span class="text-orange" aria-hidden="true">✓</span>
                            New features as you grow
                        </li>
                    </ul>

                    <a
                        href="{{ route('services') }}#support"
                        class="mt-auto inline-flex items-center gap-2 pt-8 text-sm font-bold text-ink transition-colors hover:text-orange-dark"
                    >
                        Ongoing support

                        <svg
                            aria-hidden="true"
                            class="h-4 w-4 transition-transform group-hover:translate-x-1"
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
                </article>
            </div>
        </div>
    </section>

    {{-- Featured case study --}}
    <section class="section-space bg-white">
        <div class="site-container">
            <div class="dark-panel relative overflow-hidden px-6 py-8 sm:px-10 sm:py-12 lg:px-14 lg:py-16">
                {{-- Decorative background --}}
                <div
                    aria-hidden="true"
                    class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-orange/15 blur-3xl"
                ></div>

                <div
                    aria-hidden="true"
                    class="absolute -bottom-40 -left-24 h-80 w-80 rounded-full bg-navy-light blur-3xl"
                ></div>

                <div class="relative">
                    {{-- Section heading --}}
                    <div class="grid items-end gap-8 lg:grid-cols-[1fr_auto]">
                        <div>
                            <p class="eyebrow !border-white/15 !bg-white/10 !text-orange">
                                Featured project
                            </p>

                            <h2 class="section-title mt-5 max-w-3xl text-white">
                                A better digital presence for a real local business.
                            </h2>

                            <p class="mt-5 max-w-2xl text-base leading-7 text-white/70 sm:text-lg">
                                407 Haul Away needed a website that felt trustworthy,
                                looked professional, and made requesting a quote simple
                                from any device.
                            </p>
                        </div>

                        <a
                            href="{{ route('work.407-haul-away') }}"
                            class="button-primary justify-center"
                        >
                            View the Case Study

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

                    {{-- Website preview --}}
                    <div class="relative mt-10 sm:mt-12">
                        <div
                            aria-hidden="true"
                            class="absolute inset-4 translate-y-5 rounded-panel border border-orange/20"
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

                            <div class="overflow-hidden rounded-[calc(var(--radius-panel)-0.75rem)] bg-cream">
                                <img
                                    src="{{ asset('images/work/407-haul-away/homepage-wide.png') }}"
                                    alt="The redesigned 407 Haul Away website"
                                    class="aspect-[2.29/1] w-full object-cover object-top"
                                    loading="lazy"
                                >
                            </div>
                        </div>
                    </div>

                    {{-- Project details --}}
                    <div class="mt-12 grid gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:gap-16">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange">
                                407 Haul Away
                            </p>

                            <h3 class="mt-3 text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
                                From functional to memorable.
                            </h3>

                            <p class="mt-4 leading-7 text-white/70">
                                The redesign gave the company a clearer identity,
                                stronger service messaging, and a smoother path from
                                first visit to quote request.
                            </p>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-3">
                            {{-- Outcome 1 --}}
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-orange/15 text-orange">
                                    <svg
                                        aria-hidden="true"
                                        class="h-5 w-5"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="M4 12h16M12 4v16"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />

                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="9"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />
                                    </svg>
                                </span>

                                <h4 class="mt-4 font-bold text-white">
                                    Clear positioning
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-white/60">
                                    Visitors immediately understand the business,
                                    service area, and next step.
                                </p>
                            </div>

                            {{-- Outcome 2 --}}
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-orange/15 text-orange">
                                    <svg
                                        aria-hidden="true"
                                        class="h-5 w-5"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <rect
                                            x="7"
                                            y="2.5"
                                            width="10"
                                            height="19"
                                            rx="2"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                        <path
                                            d="M10 18h4"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                </span>

                                <h4 class="mt-4 font-bold text-white">
                                    Mobile-first experience
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-white/60">
                                    Quote and call actions remain easy to find on
                                    the devices customers use most.
                                </p>
                            </div>

                            {{-- Outcome 3 --}}
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-orange/15 text-orange">
                                    <svg
                                        aria-hidden="true"
                                        class="h-5 w-5"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="M12 3 5 6v5c0 4.6 2.9 8.2 7 10 4.1-1.8 7-5.4 7-10V6l-7-3Z"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linejoin="round"
                                        />

                                        <path
                                            d="m9 12 2 2 4-4"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </span>

                                <h4 class="mt-4 font-bold text-white">
                                    Stronger credibility
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-white/60">
                                    Real photography and direct messaging make the
                                    company feel established and trustworthy.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Project services --}}
                    <div class="mt-10 flex flex-wrap items-center gap-2 border-t border-white/10 pt-8">
                        <span class="mr-2 text-xs font-bold uppercase tracking-[0.16em] text-white/45">
                            Project scope
                        </span>

                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-semibold text-white/70">
                            Strategy
                        </span>

                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-semibold text-white/70">
                            Copywriting
                        </span>

                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-semibold text-white/70">
                            Web Design
                        </span>

                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-semibold text-white/70">
                            Laravel Development
                        </span>

                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-semibold text-white/70">
                            Responsive Design
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why 407 Digital --}}
    <section class="section-space bg-cream">
        <div class="site-container">
            <div class="grid items-center gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-20">
                {{-- Story panel --}}
                <div class="dark-panel relative overflow-hidden p-7 sm:p-10">
                    <div
                        aria-hidden="true"
                        class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-orange/20 blur-3xl"
                    ></div>

                    <div
                        aria-hidden="true"
                        class="absolute -bottom-24 -left-20 h-64 w-64 rounded-full bg-navy-light blur-3xl"
                    ></div>

                    <div class="relative">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange">
                            Two perspectives. One partner.
                        </p>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2">
                            {{-- Software engineer --}}
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
                                <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange/15 text-orange">
                                    <svg
                                        aria-hidden="true"
                                        class="h-6 w-6"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="m8 9-3 3 3 3M16 9l3 3-3 3M14 5l-4 14"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </span>

                                <p class="mt-5 text-xs font-bold uppercase tracking-[0.16em] text-white/45">
                                    Perspective one
                                </p>

                                <h3 class="mt-2 text-xl font-extrabold text-white">
                                    Software engineer
                                </h3>

                                <p class="mt-3 text-sm leading-6 text-white/65">
                                    Technical experience to build fast, reliable,
                                    maintainable websites and software.
                                </p>
                            </div>

                            {{-- Business owner --}}
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
                                <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange/15 text-orange">
                                    <svg
                                        aria-hidden="true"
                                        class="h-6 w-6"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="M4 10h16M6 10v9h12v-9M8 10V7a4 4 0 0 1 8 0v3"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />

                                        <path
                                            d="M9 14h6"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                </span>

                                <p class="mt-5 text-xs font-bold uppercase tracking-[0.16em] text-white/45">
                                    Perspective two
                                </p>

                                <h3 class="mt-2 text-xl font-extrabold text-white">
                                    Service-business owner
                                </h3>

                                <p class="mt-3 text-sm leading-6 text-white/65">
                                    Firsthand experience generating leads, quoting
                                    jobs, serving customers, and managing the work.
                                </p>
                            </div>
                        </div>

                        <div class="mt-4 rounded-2xl bg-orange p-6 text-ink">
                            <div class="flex items-start gap-4">
                                <svg
                                    aria-hidden="true"
                                    class="mt-1 h-6 w-6 shrink-0"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="m5 12 4 4L19 6"
                                        stroke="currentColor"
                                        stroke-width="2.2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>

                                <p class="font-extrabold leading-6">
                                    Technology decisions grounded in how local
                                    service businesses actually operate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Main copy --}}
                <div>
                    <p class="eyebrow">
                        Why 407 Digital
                    </p>

                    <h2 class="section-title mt-5 max-w-3xl">
                        Your developer should understand more than code.
                    </h2>

                    <p class="lead mt-5 max-w-2xl">
                        I’m a software engineer who also owns and operates a local
                        junk removal company. That means I understand both sides of
                        the work: building the technology and running the business
                        it needs to support.
                    </p>

                    <div class="mt-8 space-y-6">
                        {{-- Difference 1 --}}
                        <div class="flex gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange/15 text-orange-dark">
                                <svg
                                    aria-hidden="true"
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="M4 18v-5M10 18V8M16 18V4M22 18H2"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </span>

                            <div>
                                <h3 class="text-lg font-extrabold text-ink">
                                    Focused on business results
                                </h3>

                                <p class="mt-2 leading-7 text-slate">
                                    A website isn’t useful just because it looks
                                    polished. It needs to build trust, generate
                                    inquiries, and help turn visitors into customers.
                                </p>
                            </div>
                        </div>

                        {{-- Difference 2 --}}
                        <div class="flex gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange/15 text-orange-dark">
                                <svg
                                    aria-hidden="true"
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="M7 8h10M7 12h7M7 16h4"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                    />

                                    <rect
                                        x="3"
                                        y="3"
                                        width="18"
                                        height="18"
                                        rx="3"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    />
                                </svg>
                            </span>

                            <div>
                                <h3 class="text-lg font-extrabold text-ink">
                                    Clear, practical communication
                                </h3>

                                <p class="mt-2 leading-7 text-slate">
                                    You’ll get straightforward explanations,
                                    realistic recommendations, and a clear process
                                    without unnecessary technical jargon.
                                </p>
                            </div>
                        </div>

                        {{-- Difference 3 --}}
                        <div class="flex gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange/15 text-orange-dark">
                                <svg
                                    aria-hidden="true"
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="M12 3 5 6v5c0 4.6 2.9 8.2 7 10 4.1-1.8 7-5.4 7-10V6l-7-3Z"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linejoin="round"
                                    />

                                    <path
                                        d="m9 12 2 2 4-4"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </span>

                            <div>
                                <h3 class="text-lg font-extrabold text-ink">
                                    Built for the long term
                                </h3>

                                <p class="mt-2 leading-7 text-slate">
                                    Your site or software will be built on a solid
                                    foundation that can be maintained and expanded
                                    as your business grows.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-9">
                        <a
                            href="{{ route('about') }}"
                            class="button-secondary justify-center"
                        >
                            More About 407 Digital

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
        </div>
    </section>

    {{-- Our process --}}
    <section class="section-space bg-white">
        <div class="site-container">
            <div class="mx-auto max-w-3xl text-center">
                <p class="eyebrow">
                    A straightforward process
                </p>

                <h2 class="section-title mt-5">
                    From first conversation to launch.
                </h2>

                <p class="lead mx-auto mt-5">
                    You’ll always know what we’re working on, what happens next,
                    and what we need from you.
                </p>
            </div>

            <ol class="relative mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                {{-- Connecting line on desktop --}}
                <div
                    aria-hidden="true"
                    class="absolute left-[12.5%] right-[12.5%] top-8 hidden h-px bg-navy/15 lg:block"
                ></div>

                {{-- Step 1 --}}
                <li class="relative">
                    <article class="surface-card h-full p-6 sm:p-7">
                        <div class="relative z-10 flex items-center justify-between">
                            <span class="flex h-16 w-16 items-center justify-center rounded-2xl bg-navy text-xl font-extrabold text-white shadow-card">
                                01
                            </span>

                            <svg
                                aria-hidden="true"
                                class="h-6 w-6 text-orange"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="M8 10h8M8 14h5"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                />

                                <path
                                    d="M21 11.5a8.5 8.5 0 0 1-12.8 7.3L3 20l1.3-4.6A8.5 8.5 0 1 1 21 11.5Z"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>

                        <p class="mt-7 text-xs font-bold uppercase tracking-[0.16em] text-orange-dark">
                            Discovery
                        </p>

                        <h3 class="card-title mt-2">
                            We talk about your business.
                        </h3>

                        <p class="mt-4 leading-7 text-slate">
                            We discuss your goals, customers, current challenges,
                            and what a successful project needs to accomplish.
                        </p>
                    </article>
                </li>

                {{-- Step 2 --}}
                <li class="relative">
                    <article class="surface-card h-full p-6 sm:p-7">
                        <div class="relative z-10 flex items-center justify-between">
                            <span class="flex h-16 w-16 items-center justify-center rounded-2xl bg-navy text-xl font-extrabold text-white shadow-card">
                                02
                            </span>

                            <svg
                                aria-hidden="true"
                                class="h-6 w-6 text-orange"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="M6 4h12a2 2 0 0 1 2 2v14H4V6a2 2 0 0 1 2-2Z"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linejoin="round"
                                />

                                <path
                                    d="M8 9h8M8 13h8M8 17h5"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </div>

                        <p class="mt-7 text-xs font-bold uppercase tracking-[0.16em] text-orange-dark">
                            Strategy
                        </p>

                        <h3 class="card-title mt-2">
                            We define the right solution.
                        </h3>

                        <p class="mt-4 leading-7 text-slate">
                            You receive a clear project scope, recommendations,
                            timeline, and price before development begins.
                        </p>
                    </article>
                </li>

                {{-- Step 3 --}}
                <li class="relative">
                    <article class="surface-card h-full p-6 sm:p-7">
                        <div class="relative z-10 flex items-center justify-between">
                            <span class="flex h-16 w-16 items-center justify-center rounded-2xl bg-navy text-xl font-extrabold text-white shadow-card">
                                03
                            </span>

                            <svg
                                aria-hidden="true"
                                class="h-6 w-6 text-orange"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="m8 9-3 3 3 3M16 9l3 3-3 3M14 5l-4 14"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>

                        <p class="mt-7 text-xs font-bold uppercase tracking-[0.16em] text-orange-dark">
                            Design and build
                        </p>

                        <h3 class="card-title mt-2">
                            We bring the project to life.
                        </h3>

                        <p class="mt-4 leading-7 text-slate">
                            We design, write, and develop your project while keeping
                            you involved at the important review points.
                        </p>
                    </article>
                </li>

                {{-- Step 4 --}}
                <li class="relative">
                    <article class="surface-card h-full p-6 sm:p-7">
                        <div class="relative z-10 flex items-center justify-between">
                            <span class="flex h-16 w-16 items-center justify-center rounded-2xl bg-orange text-xl font-extrabold text-ink shadow-card">
                                04
                            </span>

                            <svg
                                aria-hidden="true"
                                class="h-6 w-6 text-orange"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="M12 3v12M7 10l5 5 5-5"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <path
                                    d="M5 19h14"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </div>

                        <p class="mt-7 text-xs font-bold uppercase tracking-[0.16em] text-orange-dark">
                            Launch and support
                        </p>

                        <h3 class="card-title mt-2">
                            We launch it—and stay available.
                        </h3>

                        <p class="mt-4 leading-7 text-slate">
                            After testing and approval, we launch your project and
                            remain available for support, updates, and improvements.
                        </p>
                    </article>
                </li>
            </ol>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 text-center sm:flex-row">
                <p class="font-semibold text-slate">
                    Have a project in mind?
                </p>

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 font-bold text-ink transition-colors hover:text-orange-dark"
                >
                    Let’s talk about it

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
    </section>

    {{-- Final call to action --}}
    <section class="bg-cream pb-16 sm:pb-20 lg:pb-28">
        <div class="site-container">
            <div class="relative overflow-hidden rounded-panel bg-orange px-6 py-12 sm:px-10 sm:py-16 lg:px-16">
                {{-- Decorative elements --}}
                <div
                    aria-hidden="true"
                    class="absolute -right-20 -top-24 h-72 w-72 rounded-full border-[48px] border-white/10"
                ></div>

                <div
                    aria-hidden="true"
                    class="absolute -bottom-28 -left-20 h-64 w-64 rounded-full bg-white/10 blur-2xl"
                ></div>

                <div class="relative grid items-center gap-10 lg:grid-cols-[1fr_auto] lg:gap-16">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-ink/65">
                            Have a project in mind?
                        </p>

                        <h2 class="mt-4 max-w-3xl text-3xl font-extrabold tracking-tight text-ink sm:text-4xl lg:text-5xl">
                            Let’s build something that works as hard as your business.
                        </h2>

                        <p class="mt-5 max-w-2xl text-base leading-7 text-ink/70 sm:text-lg">
                            Tell me about your business, what isn’t working, and
                            what you’d like to improve. We’ll start with a
                            straightforward conversation about the right next step.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
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

                        <a
                            href="{{ route('services') }}"
                            class="inline-flex items-center justify-center rounded-full border border-ink/20 px-6 py-3 text-sm font-bold text-ink transition hover:border-ink hover:bg-ink/5"
                        >
                            Explore Services
                        </a>
                    </div>
                </div>

                {{-- Reassurance --}}
                <div class="relative mt-10 flex flex-wrap gap-x-7 gap-y-3 border-t border-ink/15 pt-7 text-sm font-semibold text-ink/70">
                    <span class="flex items-center gap-2">
                        <svg
                            aria-hidden="true"
                            class="h-4 w-4"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                            <path
                                d="m3 8 3 3 7-7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>

                        No-pressure first conversation
                    </span>

                    <span class="flex items-center gap-2">
                        <svg
                            aria-hidden="true"
                            class="h-4 w-4"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                            <path
                                d="m3 8 3 3 7-7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>

                        Clear scope and pricing
                    </span>

                    <span class="flex items-center gap-2">
                        <svg
                            aria-hidden="true"
                            class="h-4 w-4"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                            <path
                                d="m3 8 3 3 7-7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>

                        Practical recommendations
                    </span>
                </div>
            </div>
        </div>
    </section>
</x-layout>
