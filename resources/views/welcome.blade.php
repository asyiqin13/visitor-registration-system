<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Visitor Registration System</title>

        {{-- Tailwind + app assets (Laravel Vite) --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="min-h-screen bg-gradient-to-b from-slate-50 via-white to-slate-50 text-slate-900 antialiased">
        <header class="sticky top-0 z-50 border-b border-slate-200/70 bg-white/80 backdrop-blur">
            <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3">
                <div class="flex items-center gap-3">
                    <div
                        class="grid h-10 w-10 place-items-center rounded-xl bg-slate-900 text-white shadow-sm"
                        aria-hidden="true"
                    >
                        {{-- Simple brand mark --}}
                        <span class="text-sm font-semibold">VR</span>
                    </div>
                    <div>
                        <p class="text-sm font-semibold leading-5">Visitor Registration System</p>
                        <p class="text-xs text-slate-600">Secure access & streamlined registration</p>
                    </div>
                </div>

                <nav class="hidden items-center gap-6 md:flex" aria-label="Primary">
                    <a class="text-sm font-medium text-slate-700 hover:text-slate-900" href="#modules">Modules</a>
                    <a class="text-sm font-medium text-slate-700 hover:text-slate-900" href="#how-it-works">How it works</a>
                    <a class="text-sm font-medium text-slate-700 hover:text-slate-900" href="#complaints">Complaints</a>
                </nav>
            </div>
        </header>

        <main>
            {{-- Hero --}}
            <section class="relative">
                <div class="absolute inset-0 -z-10">
                    <div class="mx-auto max-w-6xl px-4">
                        <div class="h-56 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-indigo-200/40 via-transparent to-transparent"></div>
                    </div>
                </div>

                <div class="mx-auto max-w-6xl px-4 pb-12 pt-10 sm:pb-16 sm:pt-14">
                    <div class="grid items-center gap-10 lg:grid-cols-2">
                        <div>
                            <p class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-semibold text-slate-700">
                                <span class="h-2 w-2 rounded-full bg-indigo-600" aria-hidden="true"></span>
                                Visitors, hosts, and complaints in one place
                            </p>
                            <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                                Welcome to a faster, clearer way to register visitors.
                            </h1>
                            <p class="mt-4 text-base text-slate-700 sm:text-lg">
                                Reduce manual entries, keep records organized, and provide a simple path for feedback and complaints.
                            </p>

                            <div class="mt-7 flex flex-col gap-3 sm:flex-row sm:items-center">
                                <a
                                    href="#modules"
                                    class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-900/20"
                                >
                                    Explore modules
                                </a>
                                <a
                                    href="#complaints"
                                    class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-indigo-600/20"
                                >
                                    Submit a complaint
                                </a>
                            </div>

                            <div class="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-3">
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <p class="text-xs font-semibold text-slate-600">Designed for</p>
                                    <p class="mt-1 text-sm font-semibold">Security & reception teams</p>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <p class="text-xs font-semibold text-slate-600">Focus</p>
                                    <p class="mt-1 text-sm font-semibold">Clarity + traceability</p>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <p class="text-xs font-semibold text-slate-600">Coverage</p>
                                    <p class="mt-1 text-sm font-semibold">Registration, modules, feedback</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <p class="text-sm font-semibold">System at a glance</p>
                                        <p class="mt-1 text-xs text-slate-600">A quick preview of what visitors and hosts can do</p>
                                    </div>
                                    <div class="rounded-xl bg-indigo-50 px-3 py-2 text-xs font-semibold text-indigo-700">
                                        Professional UI
                                    </div>
                                </div>

                                <div class="mt-5 space-y-3">
                                    <div class="flex items-start gap-3">
                                        <div class="mt-0.5 grid h-9 w-9 place-items-center rounded-xl bg-slate-900 text-white">
                                            1
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold">Register your visit</p>
                                            <p class="text-sm text-slate-600">Capture details and visit purpose quickly.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div class="mt-0.5 grid h-9 w-9 place-items-center rounded-xl bg-slate-900 text-white">
                                            2
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold">Notify the host</p>
                                            <p class="text-sm text-slate-600">Route information to the right person/team.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div class="mt-0.5 grid h-9 w-9 place-items-center rounded-xl bg-slate-900 text-white">
                                            3
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold">Leave feedback</p>
                                            <p class="text-sm text-slate-600">Submit complaints or suggestions easily.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6 rounded-2xl bg-slate-50 p-4">
                                    <div class="flex items-center justify-between gap-3">
                                        <p class="text-sm font-semibold">Ready to get started?</p>
                                        <a
                                            href="#how-it-works"
                                            class="inline-flex items-center justify-center rounded-xl bg-white px-3 py-2 text-xs font-semibold text-slate-900 ring-1 ring-slate-200 hover:bg-slate-50"
                                        >
                                            View steps
                                        </a>
                                    </div>
                                    <p class="mt-2 text-sm text-slate-600">
                                        Scroll for a clearer overview of the modules and flow.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Modules --}}
            <section id="modules" class="mx-auto max-w-6xl px-4 pb-12">
                <div class="flex items-end justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-semibold tracking-tight sm:text-3xl">Modules</h2>
                        <p class="mt-2 text-slate-700">
                            A clean set of tools for managing visitor registration and related requests.
                        </p>
                    </div>
                    <div class="hidden sm:block rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-700">
                        Built for everyday use
                    </div>
                </div>

                <div class="mt-8 grid gap-4 md:grid-cols-3">
                    <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="flex items-center justify-between gap-4">
                            <h3 class="text-base font-semibold">Visitor Registration</h3>
                            <span class="rounded-xl bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-700">Core</span>
                        </div>
                        <p class="mt-3 text-sm text-slate-600">
                            Capture visitor details, purpose of visit, and visit timing in a consistent format.
                        </p>
                        <ul class="mt-4 space-y-2 text-sm text-slate-700">
                            <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-indigo-600" aria-hidden="true"></span>
                                Visitor info & visit purpose
                            </li>
                            <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-indigo-600" aria-hidden="true"></span>
                                Organized records
                            </li>
                        </ul>
                    </article>

                    <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="flex items-center justify-between gap-4">
                            <h3 class="text-base font-semibold">Host Management</h3>
                            <span class="rounded-xl bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Optional</span>
                        </div>
                        <p class="mt-3 text-sm text-slate-600">
                            Map visitors to the correct host and streamline communication for approvals.
                        </p>
                        <ul class="mt-4 space-y-2 text-sm text-slate-700">
                            <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-emerald-600" aria-hidden="true"></span>
                                Assign visitors to hosts
                            </li>
                            <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-emerald-600" aria-hidden="true"></span>
                                Clear visit status
                            </li>
                        </ul>
                    </article>

                    <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="flex items-center justify-between gap-4">
                            <h3 class="text-base font-semibold">Complaints & Feedback</h3>
                            <span class="rounded-xl bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">Improvement</span>
                        </div>
                        <p class="mt-3 text-sm text-slate-600">
                            Provide a structured way for visitors to raise concerns and submit feedback.
                        </p>
                        <ul class="mt-4 space-y-2 text-sm text-slate-700">
                            <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-amber-600" aria-hidden="true"></span>
                                Complaint form UI
                            </li>
                            <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-amber-600" aria-hidden="true"></span>
                                Organized submissions
                            </li>
                        </ul>
                    </article>
                </div>
            </section>

            {{-- How it works --}}
            <section id="how-it-works" class="bg-white">
                <div class="mx-auto max-w-6xl px-4 py-12">
                    <h2 class="text-2xl font-semibold tracking-tight sm:text-3xl">How it works</h2>
                    <p class="mt-2 text-slate-700">
                        A simple flow that keeps registrations consistent and easy to review.
                    </p>

                    <div class="mt-8 grid gap-4 lg:grid-cols-3">
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="flex items-center gap-3">
                                <div class="grid h-10 w-10 place-items-center rounded-2xl bg-slate-900 text-white">
                                    1
                                </div>
                                <h3 class="text-base font-semibold">Choose a module</h3>
                            </div>
                            <p class="mt-3 text-sm text-slate-600">
                                Start with the action you need: registration, host assignment, or feedback.
                            </p>
                        </div>
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="flex items-center gap-3">
                                <div class="grid h-10 w-10 place-items-center rounded-2xl bg-slate-900 text-white">
                                    2
                                </div>
                                <h3 class="text-base font-semibold">Fill in the details</h3>
                            </div>
                            <p class="mt-3 text-sm text-slate-600">
                                Use clear, structured fields so records are easy to search later.
                            </p>
                        </div>
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="flex items-center gap-3">
                                <div class="grid h-10 w-10 place-items-center rounded-2xl bg-slate-900 text-white">
                                    3
                                </div>
                                <h3 class="text-base font-semibold">Submit and track</h3>
                            </div>
                            <p class="mt-3 text-sm text-slate-600">
                                Keep the process transparent with consistent status updates and records.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Complaints --}}
            <section id="complaints" class="mx-auto max-w-6xl px-4 pb-16 pt-2">
                <div class="grid gap-8 lg:grid-cols-2 lg:items-start">
                    <div>
                        <h2 class="text-2xl font-semibold tracking-tight sm:text-3xl">Complaints & feedback</h2>
                        <p class="mt-2 text-slate-700">
                            Share concerns or suggestions. This page currently provides a professional UI preview.
                        </p>

                        <div class="mt-6 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <p class="text-sm font-semibold">What happens next?</p>
                            <ul class="mt-3 space-y-2 text-sm text-slate-700">
                                <li class="flex gap-2">
                                    <span class="mt-1 h-1.5 w-1.5 rounded-full bg-indigo-600" aria-hidden="true"></span>
                                    We collect the information you submit.
                                </li>
                                <li class="flex gap-2">
                                    <span class="mt-1 h-1.5 w-1.5 rounded-full bg-indigo-600" aria-hidden="true"></span>
                                    The host/security team reviews and responds.
                                </li>
                                <li class="flex gap-2">
                                    <span class="mt-1 h-1.5 w-1.5 rounded-full bg-indigo-600" aria-hidden="true"></span>
                                    Feedback helps improve future visits.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <form
                            class="space-y-4"
                            action="#"
                            method="POST"
                            onsubmit="return false;"
                        >
                            @csrf

                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-slate-800">Full name</label>
                                    <input
                                        id="name"
                                        name="name"
                                        type="text"
                                        autocomplete="name"
                                        required
                                        placeholder="Your name"
                                        class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm outline-none placeholder:text-slate-400 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-600/20"
                                    />
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-slate-800">Email</label>
                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        autocomplete="email"
                                        required
                                        placeholder="name@example.com"
                                        class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm outline-none placeholder:text-slate-400 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-600/20"
                                    />
                                </div>
                            </div>

                            <div>
                                <label for="topic" class="block text-sm font-semibold text-slate-800">Topic</label>
                                <select
                                    id="topic"
                                    name="topic"
                                    required
                                    class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm outline-none focus:border-indigo-600 focus:ring-2 focus:ring-indigo-600/20"
                                >
                                    <option value="" selected disabled>Select a topic</option>
                                    <option value="registration">Visitor registration issue</option>
                                    <option value="host">Host / access related</option>
                                    <option value="service">Service & support</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-semibold text-slate-800">Your message</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    required
                                    placeholder="Describe the issue or feedback..."
                                    class="mt-2 w-full resize-none rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm outline-none placeholder:text-slate-400 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-600/20"
                                ></textarea>
                            </div>

                            <div class="flex items-center justify-between gap-4 pt-2">
                                <p class="text-xs text-slate-500">
                                    Demo UI: submission is disabled until you add a backend route.
                                </p>
                                <button
                                    type="submit"
                                    disabled
                                    class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white opacity-60"
                                >
                                    Submit complaint
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-slate-200">
            <div class="mx-auto flex max-w-6xl flex-col gap-2 px-4 py-8 sm:flex-row sm:items-center sm:justify-between">
                <p class="text-sm font-semibold text-slate-800">
                    Developed by Asyiqin
                </p>
                <p class="text-sm text-slate-600">
                    © {{ date('Y') }} Visitor Registration System. All rights reserved.
                </p>
            </div>
        </footer>
    </body>
</html>