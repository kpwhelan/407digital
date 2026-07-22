<header
    x-data="{ open: false }"
    @keydown.escape.window="open = false"
    class="sticky top-0 z-50 border-b border-ink/10 bg-cream/95 backdrop-blur-xl"
>
    <nav
        class="site-container flex h-20 items-center justify-between gap-6"
        aria-label="Main navigation"
    >
        {{-- Logo --}}
        <a
            href="{{ route('home') }}"
            class="flex shrink-0 items-center gap-2"
            aria-label="Project 407 home"
        >
            <span class="text-2xl font-extrabold tracking-[-0.05em] text-orange">
                PROJECT
            </span>

            <span class="text-xl font-extrabold tracking-[-0.04em] text-ink">
                407
            </span>
        </a>

        {{-- Desktop links --}}
        <div class="hidden items-center gap-1 lg:flex">
            <a
                href="{{ route('services') }}"
                @class([
                    'rounded-full px-4 py-2 text-sm font-bold transition',
                    'bg-ink text-white' => request()->routeIs('services'),
                    'text-ink/65 hover:bg-ink/5 hover:text-ink' => ! request()->routeIs('services'),
                ])
            >
                Services
            </a>

            <a
                href="{{ route('work.index') }}"
                @class([
                    'rounded-full px-4 py-2 text-sm font-bold transition',
                    'bg-ink text-white' => request()->routeIs('work.*'),
                    'text-ink/65 hover:bg-ink/5 hover:text-ink' => ! request()->routeIs('work.*'),
                ])
            >
                Our Work
            </a>

            <a
                href="{{ route('about') }}"
                @class([
                    'rounded-full px-4 py-2 text-sm font-bold transition',
                    'bg-ink text-white' => request()->routeIs('about'),
                    'text-ink/65 hover:bg-ink/5 hover:text-ink' => ! request()->routeIs('about'),
                ])
            >
                About
            </a>

            <a
                href="{{ route('contact') }}"
                @class([
                    'rounded-full px-4 py-2 text-sm font-bold transition',
                    'bg-ink text-white' => request()->routeIs('contact'),
                    'text-ink/65 hover:bg-ink/5 hover:text-ink' => ! request()->routeIs('contact'),
                ])
            >
                Contact
            </a>
        </div>

        {{-- Desktop CTA --}}
        <a
            href="{{ route('contact') }}"
            class="button-primary hidden lg:inline-flex"
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

        {{-- Mobile button --}}
        <button
            type="button"
            class="grid h-11 w-11 place-items-center rounded-full bg-ink text-white lg:hidden"
            @click="open = !open"
            :aria-expanded="open.toString()"
            aria-controls="mobile-navigation"
            aria-label="Toggle navigation"
        >
            <svg
                x-show="! open"
                aria-hidden="true"
                class="h-5 w-5"
                viewBox="0 0 24 24"
                fill="none"
            >
                <path
                    d="M4 7h16M4 12h16M4 17h16"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                />
            </svg>

            <svg
                x-cloak
                x-show="open"
                aria-hidden="true"
                class="h-5 w-5"
                viewBox="0 0 24 24"
                fill="none"
            >
                <path
                    d="M6 6l12 12M18 6L6 18"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                />
            </svg>
        </button>
    </nav>

    {{-- Mobile menu --}}
    <div
        x-cloak
        x-show="open"
        x-transition:enter="transition duration-200 ease-out"
        x-transition:enter-start="-translate-y-2 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition duration-150 ease-in"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-2 opacity-0"
        id="mobile-navigation"
        class="border-t border-ink/10 bg-cream lg:hidden"
    >
        <div class="site-container space-y-2 py-5">
            <a
                href="{{ route('services') }}"
                @class([
                    'block rounded-xl px-4 py-3 font-bold',
                    'bg-ink text-white' => request()->routeIs('services'),
                    'text-ink hover:bg-ink/5' => ! request()->routeIs('services'),
                ])
                @click="open = false"
            >
                Services
            </a>

            <a
                href="{{ route('work.index') }}"
                @class([
                    'block rounded-xl px-4 py-3 font-bold',
                    'bg-ink text-white' => request()->routeIs('work.*'),
                    'text-ink hover:bg-ink/5' => ! request()->routeIs('work.*'),
                ])
                @click="open = false"
            >
                Our Work
            </a>

            <a
                href="{{ route('about') }}"
                @class([
                    'block rounded-xl px-4 py-3 font-bold',
                    'bg-ink text-white' => request()->routeIs('about'),
                    'text-ink hover:bg-ink/5' => ! request()->routeIs('about'),
                ])
                @click="open = false"
            >
                About
            </a>

            <a
                href="{{ route('contact') }}"
                @class([
                    'block rounded-xl px-4 py-3 font-bold',
                    'bg-ink text-white' => request()->routeIs('contact'),
                    'text-ink hover:bg-ink/5' => ! request()->routeIs('contact'),
                ])
                @click="open = false"
            >
                Contact
            </a>

            <a
                href="{{ route('contact') }}"
                class="button-primary mt-4 w-full"
                @click="open = false"
            >
                Start a Project
            </a>
        </div>
    </div>
</header>
