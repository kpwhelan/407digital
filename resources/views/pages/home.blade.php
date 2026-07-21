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
</x-layout>
