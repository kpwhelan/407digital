<x-layout
    title="Our Work | Project 407"
    description="Explore website and software projects built by Project 407 for contractors and local service businesses."
>
    {{-- Hero --}}
    <section class="relative overflow-hidden bg-cream">
        <div
            aria-hidden="true"
            class="absolute -left-32 top-10 h-80 w-80 rounded-full bg-orange/10 blur-3xl"
        ></div>

        <div
            aria-hidden="true"
            class="absolute -right-32 bottom-0 h-96 w-96 rounded-full bg-navy/10 blur-3xl"
        ></div>

        <div class="site-container relative py-16 sm:py-20 lg:py-28">
            <div class="grid items-end gap-8 lg:grid-cols-[1fr_0.65fr] lg:gap-20">
                <div>
                    <p class="eyebrow">
                        Our work
                    </p>

                    <h1 class="display-title mt-6 max-w-4xl">
                        Built for businesses that
                        <span class="text-orange">do real work.</span>
                    </h1>
                </div>

                <div>
                    <p class="lead">
                        Thoughtful strategy, clear messaging, purposeful design,
                        and reliable development—all working toward a practical
                        business result.
                    </p>

                    <a
                        href="{{ route('contact') }}"
                        class="mt-7 inline-flex items-center gap-2 font-bold text-ink transition-colors hover:text-orange-dark"
                    >
                        Discuss your project

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

    {{-- Featured project --}}
    <section class="section-space bg-white">
        <div class="site-container">
            <div class="flex flex-wrap items-end justify-between gap-5">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange-dark">
                        Featured case study
                    </p>

                    <h2 class="section-title mt-3">
                        407 Haul Away
                    </h2>
                </div>

                <p class="max-w-lg leading-7 text-slate">
                    A complete website redesign for a family-owned junk removal
                    company serving Northern Massachusetts and Southern New Hampshire.
                </p>
            </div>

            <article class="mt-10 overflow-hidden rounded-panel bg-ink shadow-card">
                {{-- Website image --}}
                <a
                    href="{{ route('work.407-haul-away') }}"
                    class="group block overflow-hidden border-b border-white/10 bg-white p-2 sm:p-3"
                    aria-label="View the 407 Haul Away case study"
                >
                    <div class="overflow-hidden rounded-[calc(var(--radius-panel)-0.75rem)]">
                        <img
                            src="{{ asset('images/work/407-haul-away/homepage-wide.png') }}"
                            alt="The redesigned 407 Haul Away website"
                            class="aspect-[2.29/1] w-full object-cover object-top transition duration-500 group-hover:scale-[1.015]"
                        >
                    </div>
                </a>

                {{-- Project information --}}
                <div class="grid gap-10 p-7 sm:p-10 lg:grid-cols-[0.9fr_1.1fr] lg:gap-16 lg:p-14">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange">
                            Website redesign
                        </p>

                        <h3 class="mt-4 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            From functional to memorable.
                        </h3>

                        <p class="mt-5 max-w-xl text-base leading-7 text-white/70">
                            The original website provided basic information, but
                            it didn’t fully communicate the company’s personality,
                            professionalism, or customer-first approach.
                        </p>

                        <a
                            href="{{ route('work.407-haul-away') }}"
                            class="button-primary mt-8 justify-center sm:justify-start"
                        >
                            View the Full Case Study

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

                    <div>
                        <div class="grid gap-4 sm:grid-cols-3">
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                <span class="text-sm font-bold text-orange">
                                    01
                                </span>

                                <h4 class="mt-4 font-extrabold text-white">
                                    Clearer positioning
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-white/60">
                                    Stronger messaging around the company,
                                    services, and service area.
                                </p>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                <span class="text-sm font-bold text-orange">
                                    02
                                </span>

                                <h4 class="mt-4 font-extrabold text-white">
                                    Easier conversion
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-white/60">
                                    Prominent quote and phone actions across
                                    desktop and mobile.
                                </p>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                <span class="text-sm font-bold text-orange">
                                    03
                                </span>

                                <h4 class="mt-4 font-extrabold text-white">
                                    Stronger credibility
                                </h4>

                                <p class="mt-2 text-sm leading-6 text-white/60">
                                    Real photography, focused content, and a more
                                    professional visual identity.
                                </p>
                            </div>
                        </div>

                        <div class="mt-7 border-t border-white/10 pt-7">
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-white/40">
                                Project scope
                            </p>

                            <div class="mt-4 flex flex-wrap gap-2">
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
            </article>
        </div>
    </section>

    {{-- Approach --}}
    <section class="section-space bg-cream">
        <div class="site-container">
            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">
                <div>
                    <p class="eyebrow">
                        More than a screenshot
                    </p>

                    <h2 class="section-title mt-5">
                        Every project starts with the business.
                    </h2>

                    <p class="lead mt-5">
                        Good work isn’t defined by decoration alone. It should
                        solve a clear problem for the business and its customers.
                    </p>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <article class="surface-card p-6 sm:p-7">
                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange/15 font-extrabold text-orange-dark">
                            01
                        </span>

                        <h3 class="mt-5 text-xl font-extrabold text-ink">
                            Understand the goal
                        </h3>

                        <p class="mt-3 leading-7 text-slate">
                            Identify what isn’t working and what the project
                            needs to accomplish.
                        </p>
                    </article>

                    <article class="surface-card p-6 sm:p-7">
                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-navy font-extrabold text-white">
                            02
                        </span>

                        <h3 class="mt-5 text-xl font-extrabold text-ink">
                            Clarify the message
                        </h3>

                        <p class="mt-3 leading-7 text-slate">
                            Make it easy for customers to understand the
                            business, its value, and their next step.
                        </p>
                    </article>

                    <article class="surface-card p-6 sm:p-7">
                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-navy font-extrabold text-white">
                            03
                        </span>

                        <h3 class="mt-5 text-xl font-extrabold text-ink">
                            Design with purpose
                        </h3>

                        <p class="mt-3 leading-7 text-slate">
                            Use visual design to support trust, usability, and
                            the project’s business goals.
                        </p>
                    </article>

                    <article class="surface-card p-6 sm:p-7">
                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange/15 font-extrabold text-orange-dark">
                            04
                        </span>

                        <h3 class="mt-5 text-xl font-extrabold text-ink">
                            Build for the long term
                        </h3>

                        <p class="mt-3 leading-7 text-slate">
                            Create a reliable foundation that can be maintained
                            and improved as the business grows.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio note --}}
    <section class="border-y border-navy/10 bg-white">
        <div class="site-container py-10 sm:py-12">
            <div class="grid items-center gap-6 lg:grid-cols-[auto_1fr] lg:gap-8">
                <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange/15 text-orange-dark">
                    <svg
                        aria-hidden="true"
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="none"
                    >
                        <path
                            d="M12 3v18M3 12h18"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />
                    </svg>
                </span>

                <div>
                    <h2 class="text-xl font-extrabold text-ink">
                        More work is on the way.
                    </h2>

                    <p class="mt-2 max-w-3xl leading-7 text-slate">
                        Project 407 is building a focused portfolio of practical
                        websites and software for local service businesses.
                        Future projects will be added here as they launch.
                    </p>
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
                            Your project could be next
                        </p>

                        <h2 class="mt-4 max-w-3xl text-3xl font-extrabold tracking-tight text-ink sm:text-4xl lg:text-5xl">
                            Let’s build something worth showing off.
                        </h2>

                        <p class="mt-5 max-w-2xl text-base leading-7 text-ink/70 sm:text-lg">
                            Tell us about your business, what you need, and what
                            you’d like your next website or software project to accomplish.
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
