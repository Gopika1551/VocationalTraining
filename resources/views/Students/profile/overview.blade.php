@extends('Students.layout.app')

@section('content')
<div class="bg-gray-100 min-h-screen p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">
            Profile Overview
        </h1>

        <div class="space-x-2">
            <a href="{{ route('profile.edit') }}" class="px-4 py-2 border rounded-md text-sm">
                Edit Profile
            </a>

            <button class="px-4 py-2 bg-black text-white rounded-md text-sm">
                Share QR Code
            </button>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4">

        <!-- LEFT -->
        <div class="col-span-8 space-y-4">

            <!-- Profile -->
            <div class="bg-white rounded-lg shadow p-5">

                <div class="flex items-center gap-4">

                    <div class="w-16 h-16 bg-gray-200 rounded-md"></div>

                    <div>
                        <h2 class="font-bold text-lg">
                            Ahmed Hassan
                        </h2>

                        <p class="text-sm text-gray-600">
                            Computer Science Student
                        </p>

                        <p class="text-xs text-gray-500">
                            King Saud University | STU-2021-0012
                        </p>
                    </div>

                </div>

                <div class="mt-4 border-t pt-4">

                    <h3 class="font-semibold mb-2">
                        About Me
                    </h3>

                    <p class="text-sm text-gray-600">
                        Final year Computer Science student with a passion
                        for web development and software engineering.
                    </p>

                </div>

            </div>

            <!-- Personal Details -->
            <div class="bg-white rounded-lg shadow p-5">

                <h3 class="font-semibold mb-4">
                    Personal Details
                </h3>

                <div class="grid grid-cols-2 gap-2 text-sm">

                    <span class="text-gray-500">Nationality</span>
                    <span class="text-right font-medium">Saudi Arabia</span>

                    <span class="text-gray-500">Gender</span>
                    <span class="text-right font-medium">Male</span>

                    <span class="text-gray-500">Date of Birth</span>
                    <span class="text-right font-medium">May 15, 1998</span>

                    <span class="text-gray-500">National ID</span>
                    <span class="text-right font-medium">1234567890</span>

                </div>

            </div>

            <!-- Academic -->
            <div class="bg-white rounded-lg shadow p-5">

                <h3 class="font-semibold mb-4">
                    Academic Information
                </h3>

                <div class="grid grid-cols-2 gap-2 text-sm">

                    <span class="text-gray-500">GPA</span>
                    <span class="text-right font-medium">3.75 / 4.00</span>

                    <span class="text-gray-500">Year</span>
                    <span class="text-right font-medium">4th Year</span>

                    <span class="text-gray-500">Graduation</span>
                    <span class="text-right font-medium">June 2026</span>

                    <span class="text-gray-500">Status</span>
                    <span class="text-right font-medium">Active</span>

                </div>

            </div>

            <!-- Skills -->
            <div class="bg-white rounded-lg shadow p-5">

                <h3 class="font-semibold mb-4">
                    Top Skills
                </h3>

                <div class="flex flex-wrap gap-2">

                    <span class="px-3 py-1 bg-gray-100 rounded text-sm">JavaScript</span>
                    <span class="px-3 py-1 bg-gray-100 rounded text-sm">Python</span>
                    <span class="px-3 py-1 bg-gray-100 rounded text-sm">SQL</span>
                    <span class="px-3 py-1 bg-gray-100 rounded text-sm">Git</span>
                    <span class="px-3 py-1 bg-gray-100 rounded text-sm">Communication</span>
                    <span class="px-3 py-1 bg-gray-100 rounded text-sm">React</span>

                </div>

            </div>

            <!-- Education -->
            <div class="bg-white rounded-lg shadow p-5">

                <h3 class="font-semibold mb-4">
                    Education
                </h3>

                <div class="flex justify-between">
                    <div>
                        <h4 class="font-medium">
                            Bachelor of Computer Science
                        </h4>

                        <p class="text-sm text-gray-500">
                            King Saud University
                        </p>
                    </div>

                    <span class="text-sm">
                        2021 - 2026
                    </span>
                </div>

            </div>

            <!-- Experience -->
            <div class="bg-white rounded-lg shadow p-5">

                <h3 class="font-semibold mb-4">
                    Experience
                </h3>

                <div class="flex justify-between">
                    <div>
                        <h4 class="font-medium">
                            Junior Developer Intern
                        </h4>

                        <p class="text-sm text-gray-500">
                            Tech Solutions Inc.
                        </p>
                    </div>

                    <span class="text-sm">
                        Summer 2025
                    </span>
                </div>

            </div>

            <!-- Documents -->
            <div class="bg-white rounded-lg shadow p-5">

                <h3 class="font-semibold mb-4">
                    Documents
                </h3>

                <div class="border rounded p-3 mb-2">
                    📄 Ahmed CV
                </div>

                <div class="border rounded p-3">
                    📄 Cover Letter
                </div>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="col-span-4 space-y-4">

            <!-- Completion -->
            <div class="bg-white rounded-lg shadow p-5">

                <h2 class="text-3xl font-bold">
                    85%
                </h2>

                <p class="font-medium mb-3">
                    Profile Completion
                </p>

                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-yellow-500 h-2 rounded-full w-[85%]"></div>
                </div>

                <button class="mt-4 bg-black text-white px-4 py-2 rounded text-sm">
                    Complete Profile
                </button>

            </div>

            <!-- Social -->
            <div class="bg-white rounded-lg shadow p-5">

                <h3 class="font-semibold mb-4">
                    Social & Professional Links
                </h3>

                <div class="space-y-2 text-sm">
                    <p>linkedin.com/in/ahmed-hassan</p>
                    <p>github.com/ahmedh</p>
                    <p>ahmed-hassan.com</p>
                    <p>@ahmed_dev</p>
                </div>

            </div>

            <!-- Contact -->
            <div class="bg-white rounded-lg shadow p-5">

                <h3 class="font-semibold mb-4">
                    Contact Information
                </h3>

                <div class="space-y-2 text-sm">
                    <p>ahmed@example.com</p>
                    <p>+966500000000</p>
                    <p>Riyadh, Saudi Arabia</p>
                    <p>Riyadh Region</p>
                    <p>12345</p>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection