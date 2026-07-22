<x-layout
    title="Start a Project | Project 407"
    description="Tell Project 407 about your website or software project. Start with a straightforward, no-pressure conversation."
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

        <div class="site-container relative py-16 sm:py-20 lg:py-24">
            <div class="max-w-4xl">
                <p class="eyebrow">
                    Start a project
                </p>

                <h1 class="display-title mt-6">
                    Tell us what you’re trying to
                    <span class="text-orange">build or improve.</span>
                </h1>

                <p class="lead mt-6 max-w-2xl">
                    You don’t need a technical plan or a perfectly defined
                    project. Start by telling us about your business, the
                    problem, and what a better result would look like.
                </p>
            </div>
        </div>
    </section>

    {{-- Form and supporting information --}}
    <section class="section-space bg-white">
        <div class="site-container">
            <div class="grid items-start gap-12 lg:grid-cols-[1.15fr_0.65fr] lg:gap-20">
                <div class="surface-card p-6 sm:p-8 lg:p-10">
                    <div class="mb-8 border-b border-navy/10 pb-7">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange-dark">
                            Project inquiry
                        </p>

                        <h2 class="mt-3 text-2xl font-extrabold text-ink sm:text-3xl">
                            Let’s start with a few details.
                        </h2>

                        <p class="mt-3 leading-7 text-slate">
                            Share whatever you know right now. We can work
                            through the remaining details together.
                        </p>
                    </div>

                    <livewire:project-inquiry-form />
                </div>

                <aside class="space-y-5">
                    <div class="dark-panel relative overflow-hidden p-7 sm:p-8">
                        <div
                            aria-hidden="true"
                            class="absolute -right-20 -top-20 h-56 w-56 rounded-full bg-orange/15 blur-3xl"
                        ></div>

                        <div class="relative">
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange">
                                What happens next?
                            </p>

                            <ol class="mt-7 space-y-6">
                                <li class="flex gap-4">
                                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white/10 text-sm font-extrabold text-orange">
                                        1
                                    </span>

                                    <div>
                                        <h3 class="font-extrabold text-white">
                                            We review your inquiry
                                        </h3>

                                        <p class="mt-2 text-sm leading-6 text-white/60">
                                            We’ll look at your business, goals,
                                            and the type of help you need.
                                        </p>
                                    </div>
                                </li>

                                <li class="flex gap-4">
                                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white/10 text-sm font-extrabold text-orange">
                                        2
                                    </span>

                                    <div>
                                        <h3 class="font-extrabold text-white">
                                            We schedule a conversation
                                        </h3>

                                        <p class="mt-2 text-sm leading-6 text-white/60">
                                            We’ll discuss the project and ask
                                            any questions needed to understand it.
                                        </p>
                                    </div>
                                </li>

                                <li class="flex gap-4">
                                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white/10 text-sm font-extrabold text-orange">
                                        3
                                    </span>

                                    <div>
                                        <h3 class="font-extrabold text-white">
                                            We recommend the next step
                                        </h3>

                                        <p class="mt-2 text-sm leading-6 text-white/60">
                                            If the project is a good fit, you’ll
                                            receive a clear proposed direction.
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <div class="rounded-panel bg-cream p-7">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange-dark">
                            A good starting point
                        </p>

                        <ul class="mt-5 space-y-4 text-sm font-semibold text-ink">
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 text-orange">✓</span>
                                What your business does
                            </li>

                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 text-orange">✓</span>
                                What currently isn’t working
                            </li>

                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 text-orange">✓</span>
                                What you would like to improve
                            </li>

                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 text-orange">✓</span>
                                Any timeline you have in mind
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-panel border border-navy/10 bg-white p-7">
                        <p class="font-extrabold text-ink">
                            Not sure what you need?
                        </p>

                        <p class="mt-3 text-sm leading-6 text-slate">
                            That’s completely fine. Describe the problem or goal
                            and select “I’m not sure yet” in the form.
                        </p>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</x-layout>
