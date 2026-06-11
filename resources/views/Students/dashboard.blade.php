@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="flex min-h-screen">
    @include('Students.layout.sidebar')

    <main class="flex-1 p-6 md:p-8">
        <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
        <p class="mt-2 text-gray-600">Welcome Student</p>
    </main>
</div>
@endsection
