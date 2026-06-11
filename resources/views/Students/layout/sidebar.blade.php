<aside class="flex h-screen w-72 shrink-0 flex-col justify-between border-r border-gray-200 bg-white">

    <div>

        <h2 class="border-b border-gray-200 px-4 py-4 text-lg font-semibold">
            Vocational Training
        </h2>

        <nav class="p-2 space-y-1">

            <!-- PROFILE -->
            <div x-data="{ open: true }">

                <button
                    @click="open = !open"
                    class="flex w-full items-center justify-between rounded px-3 py-3 hover:bg-gray-100">

                    <span>Profile</span>
                    <span x-text="open ? '−' : '+'"></span>

                </button>

                <div x-show="open" class="ml-4 space-y-1">

                    <a href="{{ route('profile.overview') }}" class="block py-2 text-sm text-gray-600">
                        Profile Overview
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Edit Profile
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Skills Management
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Education & Experience
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Documents
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Professional Passport
                    </a>

                </div>

            </div>

            <!-- BUILD CV -->

            <a href="#"
               class="block rounded px-3 py-3 hover:bg-gray-100">
                Build CV
            </a>

            <!-- APPLICATIONS -->

            <div x-data="{ open: false }">

                <button
                    @click="open = !open"
                    class="flex w-full items-center justify-between rounded px-3 py-3 hover:bg-gray-100">

                    <span>Applications</span>
                    <span x-text="open ? '−' : '+'"></span>

                </button>

                <div x-show="open" class="ml-4 space-y-1">

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        All Applications
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Job Applications
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Internship Applications
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Training Applications
                    </a>

                </div>

            </div>

            <!-- OPPORTUNITIES -->

            <div x-data="{ open: false }">

                <button
                    @click="open = !open"
                    class="flex w-full items-center justify-between rounded px-3 py-3 hover:bg-gray-100">

                    <span>Opportunities</span>
                    <span x-text="open ? '−' : '+'"></span>

                </button>

                <div x-show="open" class="ml-4 space-y-1">

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Jobs
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Internships
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Training
                    </a>

                </div>

            </div>

            <!-- EVENTS -->

            <a href="#"
               class="block rounded px-3 py-3 hover:bg-gray-100">
                Events
            </a>

            <!-- AI GUIDANCE -->

            <div x-data="{ open: false }">

                <button
                    @click="open = !open"
                    class="flex w-full items-center justify-between rounded px-3 py-3 hover:bg-gray-100">

                    <span>AI Guidance</span>
                    <span x-text="open ? '−' : '+'"></span>

                </button>

                <div x-show="open" class="ml-4 space-y-1">

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Career Path
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Skill Gap Analysis
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Recommended Jobs
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Recommended Training
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Interview Coach
                    </a>

                </div>

            </div>

            <!-- NOTIFICATIONS -->

            <a href="#"
               class="block rounded px-3 py-3 hover:bg-gray-100">
                Notifications
            </a>

            <!-- SETTINGS -->

            <div x-data="{ open: false }">

                <button
                    @click="open = !open"
                    class="flex w-full items-center justify-between rounded px-3 py-3 hover:bg-gray-100">

                    <span>Settings</span>
                    <span x-text="open ? '−' : '+'"></span>

                </button>

                <div x-show="open" class="ml-4 space-y-1">

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Account Settings
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Language (RTL/LTR)
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Privacy & Consent
                    </a>

                    <a href="#" class="block py-2 text-sm text-gray-600">
                        Notification Preferences
                    </a>

                </div>

            </div>

        </nav>

    </div>

    <div class="border-t border-gray-200 p-4">

        <p class="font-semibold text-sm">
            Ahmed Hassan
        </p>

        <p class="text-xs text-gray-500">
            Student (STU22611)
        </p>

    </div>

</aside>