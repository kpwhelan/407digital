<x-layout
    title="Web Design and Software Services | 407 Digital"
    description="407 Digital builds lead-generating websites, practical custom software, and ongoing digital support for contractors and local service businesses."
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
            <div class="grid items-center gap-12 lg:grid-cols-[1fr_0.8fr] lg:gap-20">
                <div>
                    <p class="eyebrow">
                        Services
                    </p>

                    <h1 class="display-title mt-6 max-w-4xl">
                        Digital solutions built around
                        <span class="text-orange">real business needs.</span>
                    </h1>

                    <p class="lead mt-6 max-w-2xl">
                        Whether you need a stronger website, a better way to
                        manage part of your business, or dependable ongoing
                        support, we’ll help you build the right solution.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
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
                </div>

                {{-- Service navigation --}}
                <div class="surface-card p-6 sm:p-8">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange-dark">
                        What can we help with?
                    </p>

                    <nav aria-label="Services on this page" class="mt-5">
                        <ul class="divide-y divide-navy/10">
                            <li>
                                <a
                                    href="#websites"
                                    class="group flex items-center justify-between gap-4 py-5"
                                >
                                    <span>
                                        <span class="block text-lg font-extrabold text-ink">
                                            Lead-generating websites
                                        </span>

                                        <span class="mt-1 block text-sm text-slate">
                                            Build trust and turn visitors into leads.
                                        </span>
                                    </span>

                                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-orange/15 text-orange-dark transition group-hover:bg-orange group-hover:text-ink">
                                        ↓
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#software"
                                    class="group flex items-center justify-between gap-4 py-5"
                                >
                                    <span>
                                        <span class="block text-lg font-extrabold text-ink">
                                            Practical custom software
                                        </span>

                                        <span class="mt-1 block text-sm text-slate">
                                            Simplify workflows and repetitive tasks.
                                        </span>
                                    </span>

                                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-orange/15 text-orange-dark transition group-hover:bg-orange group-hover:text-ink">
                                        ↓
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#support"
                                    class="group flex items-center justify-between gap-4 py-5"
                                >
                                    <span>
                                        <span class="block text-lg font-extrabold text-ink">
                                            Ongoing support
                                        </span>

                                        <span class="mt-1 block text-sm text-slate">
                                            Keep improving after launch.
                                        </span>
                                    </span>

                                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-orange/15 text-orange-dark transition group-hover:bg-orange group-hover:text-ink">
                                        ↓
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    {{-- Websites --}}
    <section id="websites" class="scroll-mt-24 section-space bg-white">
        <div class="site-container">
            <div class="grid gap-12 lg:grid-cols-[0.85fr_1.15fr] lg:gap-20">
                <div>
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
                                d="M3 8h18M8 15l2.5-2.5L13 15l3.5-3.5"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </span>

                    <p class="mt-6 text-xs font-bold uppercase tracking-[0.18em] text-orange-dark">
                        Website design and development
                    </p>

                    <h2 class="section-title mt-3">
                        A website built to earn trust and generate leads.
                    </h2>

                    <p class="lead mt-5">
                        Your website should quickly tell customers what you do,
                        why they should trust you, and how to take the next step.
                    </p>

                    <p class="mt-5 leading-7 text-slate">
                        We combine clear messaging, professional design, and
                        reliable development to give your business a website
                        that looks credible and works properly on every device.
                    </p>

                    <a
                        href="{{ route('contact') }}"
                        class="button-primary mt-8 justify-center sm:justify-start"
                    >
                        Talk About Your Website
                    </a>
                </div>

                <div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <article class="surface-card p-6">
                            <h3 class="text-lg font-extrabold text-ink">
                                Strategy and structure
                            </h3>

                            <p class="mt-3 leading-7 text-slate">
                                We organize your pages and content around what
                                customers need to know before contacting you.
                            </p>
                        </article>

                        <article class="surface-card p-6">
                            <h3 class="text-lg font-extrabold text-ink">
                                Messaging and copy
                            </h3>

                            <p class="mt-3 leading-7 text-slate">
                                Clear language that explains your services,
                                differentiates your business, and guides action.
                            </p>
                        </article>

                        <article class="surface-card p-6">
                            <h3 class="text-lg font-extrabold text-ink">
                                Responsive design
                            </h3>

                            <p class="mt-3 leading-7 text-slate">
                                A polished experience across phones, tablets,
                                laptops, and desktop computers.
                            </p>
                        </article>

                        <article class="surface-card p-6">
                            <h3 class="text-lg font-extrabold text-ink">
                                Reliable development
                            </h3>

                            <p class="mt-3 leading-7 text-slate">
                                Fast-loading, maintainable code built on a solid
                                technical foundation.
                            </p>
                        </article>
                    </div>

                    <div class="mt-5 rounded-2xl bg-cream p-6 sm:p-7">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-orange-dark">
                            A good fit for
                        </p>

                        <ul class="mt-4 grid gap-3 text-sm font-semibold text-ink sm:grid-cols-2">
                            <li class="flex items-center gap-2">
                                <span class="text-orange">✓</span>
                                New service businesses
                            </li>

                            <li class="flex items-center gap-2">
                                <span class="text-orange">✓</span>
                                Outdated business websites
                            </li>

                            <li class="flex items-center gap-2">
                                <span class="text-orange">✓</span>
                                Businesses relying on social media
                            </li>

                            <li class="flex items-center gap-2">
                                <span class="text-orange">✓</span>
                                Websites that aren’t producing leads
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Software --}}
    <section id="software" class="scroll-mt-24 section-space bg-cream">
        <div class="site-container">
            <div class="grid items-start gap-12 lg:grid-cols-[1.05fr_0.95fr] lg:gap-20">
                <div class="order-2 lg:order-1">
                    <div class="dark-panel relative overflow-hidden p-7 sm:p-10">
                        <div
                            aria-hidden="true"
                            class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-orange/15 blur-3xl"
                        ></div>

                        <div class="relative">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange">
                                Examples of what we can build
                            </p>

                            <div class="mt-7 space-y-4">
                                <article class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                    <h3 class="font-extrabold text-white">
                                        Internal dashboards
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-white/65">
                                        Keep important business information and
                                        daily tasks organized in one place.
                                    </p>
                                </article>

                                <article class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                    <h3 class="font-extrabold text-white">
                                        Customer and job management
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-white/65">
                                        Manage leads, customers, quotes, jobs,
                                        notes, schedules, and follow-ups.
                                    </p>
                                </article>

                                <article class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                    <h3 class="font-extrabold text-white">
                                        Customer portals
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-white/65">
                                        Give customers a secure place to submit
                                        information, view updates, or access files.
                                    </p>
                                </article>

                                <article class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                    <h3 class="font-extrabold text-white">
                                        Workflow automation
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-white/65">
                                        Reduce repetitive administrative work
                                        and connect steps that currently require
                                        manual effort.
                                    </p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
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

                    <p class="mt-6 text-xs font-bold uppercase tracking-[0.18em] text-orange-dark">
                        Custom software
                    </p>

                    <h2 class="section-title mt-3">
                        Software shaped around the way your business works.
                    </h2>

                    <p class="lead mt-5">
                        When spreadsheets, disconnected apps, or repetitive
                        tasks start slowing you down, focused software can give
                        you a better way to work.
                    </p>

                    <p class="mt-5 leading-7 text-slate">
                        We begin with the business problem—not a list of
                        unnecessary features. The goal is to build something
                        practical that saves time, improves visibility, or
                        makes an important process easier.
                    </p>

                    <div class="mt-7 rounded-2xl border border-navy/10 bg-white p-6">
                        <p class="font-extrabold text-ink">
                            Not sure whether you need custom software?
                        </p>

                        <p class="mt-2 text-sm leading-6 text-slate">
                            We’ll help you determine whether a custom solution,
                            an existing tool, or a simpler process is the most
                            sensible option.
                        </p>
                    </div>

                    <a
                        href="{{ route('contact') }}"
                        class="button-primary mt-8 justify-center sm:justify-start"
                    >
                        Discuss a Software Idea
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Support --}}
    <section id="support" class="scroll-mt-24 section-space bg-white">
        <div class="site-container">
            <div class="mx-auto max-w-3xl text-center">
                <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-orange/15 text-orange-dark">
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

                <p class="mt-6 text-xs font-bold uppercase tracking-[0.18em] text-orange-dark">
                    Ongoing support
                </p>

                <h2 class="section-title mt-3">
                    Launch isn’t the end of the relationship.
                </h2>

                <p class="lead mx-auto mt-5">
                    Your business will change, and your website or software
                    should be able to change with it.
                </p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                <article class="surface-card p-6">
                    <p class="text-sm font-bold text-orange-dark">01</p>

                    <h3 class="mt-4 text-lg font-extrabold text-ink">
                        Content updates
                    </h3>

                    <p class="mt-3 leading-7 text-slate">
                        Update services, photos, service areas, messaging, and
                        other important business information.
                    </p>
                </article>

                <article class="surface-card p-6">
                    <p class="text-sm font-bold text-orange-dark">02</p>

                    <h3 class="mt-4 text-lg font-extrabold text-ink">
                        Maintenance
                    </h3>

                    <p class="mt-3 leading-7 text-slate">
                        Keep dependencies, integrations, security, and technical
                        foundations properly maintained.
                    </p>
                </article>

                <article class="surface-card p-6">
                    <p class="text-sm font-bold text-orange-dark">03</p>

                    <h3 class="mt-4 text-lg font-extrabold text-ink">
                        Improvements
                    </h3>

                    <p class="mt-3 leading-7 text-slate">
                        Refine existing pages and workflows as you learn what
                        your customers and team need.
                    </p>
                </article>

                <article class="surface-card p-6">
                    <p class="text-sm font-bold text-orange-dark">04</p>

                    <h3 class="mt-4 text-lg font-extrabold text-ink">
                        New features
                    </h3>

                    <p class="mt-3 leading-7 text-slate">
                        Add capabilities as your business, customer base, and
                        operating needs grow.
                    </p>
                </article>
            </div>
        </div>
    </section>

    {{-- Choosing the right service --}}
    <section class="bg-cream py-16 sm:py-20">
        <div class="site-container">
            <div class="dark-panel relative overflow-hidden px-6 py-10 sm:px-10 sm:py-12 lg:px-14">
                <div
                    aria-hidden="true"
                    class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-orange/15 blur-3xl"
                ></div>

                <div class="relative grid items-center gap-8 lg:grid-cols-[1fr_auto]">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange">
                            Start with the problem
                        </p>

                        <h2 class="mt-4 max-w-3xl text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            You don’t need to know exactly what to ask for.
                        </h2>

                        <p class="mt-4 max-w-2xl text-base leading-7 text-white/70">
                            Tell us what’s getting in the way, what you’d like
                            to improve, or what you want your business to
                            accomplish. We’ll help define the right next step.
                        </p>
                    </div>

                    <a
                        href="{{ route('contact') }}"
                        class="button-primary justify-center"
                    >
                        Tell Us About Your Project

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
