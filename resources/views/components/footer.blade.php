<footer class="bg-ink text-white">
    <div
        class="site-container grid gap-12 py-14 md:grid-cols-[1.25fr_.75fr_.75fr]"
    >
        {{-- Brand --}}
        <div>
            <a
                href="{{ route('home') }}"
                class="inline-flex items-center gap-2"
            >
                <span class="text-3xl font-extrabold tracking-[-0.05em] text-orange">
                    407
                </span>

                <span class="text-2xl font-extrabold tracking-[-0.04em] text-white">
                    DIGITAL
                </span>
            </a>

            <p class="mt-5 max-w-md leading-relaxed text-white/60">
                Lead-generating websites and practical software for
                contractors and local service businesses.
            </p>

            <p class="mt-5 text-sm font-bold text-orange">
                Massachusetts · New Hampshire · Remote
            </p>
        </div>

        {{-- Navigation --}}
        <div>
            <h2 class="text-xs font-extrabold uppercase tracking-[0.18em] text-orange">
                Navigation
            </h2>

            <nav
                class="mt-5 grid gap-3 text-sm font-medium text-white/65"
                aria-label="Footer navigation"
            >
                <a
                    href="{{ route('services') }}"
                    class="transition hover:text-white"
                >
                    Services
                </a>

                <a
                    href="{{ route('work.index') }}"
                    class="transition hover:text-white"
                >
                    Our Work
                </a>

                <a
                    href="{{ route('about') }}"
                    class="transition hover:text-white"
                >
                    About
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="transition hover:text-white"
                >
                    Contact
                </a>
            </nav>
        </div>

        {{-- Contact --}}
        <div>
            <h2 class="text-xs font-extrabold uppercase tracking-[0.18em] text-orange">
                Start a project
            </h2>

            <p class="mt-5 text-sm leading-relaxed text-white/60">
                Tell me about your business, current website, and what you want
                to improve.
            </p>

            <a
                href="{{ route('contact') }}"
                class="mt-5 inline-flex items-center gap-2 text-sm font-extrabold text-white transition hover:text-orange"
            >
                Project inquiry

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

    <div class="border-t border-white/10">
        <div
            class="site-container flex flex-col gap-3 py-5 text-xs text-white/40 sm:flex-row sm:items-center sm:justify-between"
        >
            <p>
                © {{ now()->year }} Project 407. All rights reserved.
            </p>

            <a
                href="{{ route('privacy') }}"
                class="transition hover:text-white"
            >
                Privacy Policy
            </a>
        </div>
    </div>
</footer>
