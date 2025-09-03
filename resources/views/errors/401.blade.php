@extends('layouts.app')

@section('title', '401 - Unauthorized')

@section('content')
<div class="flex items-center justify-center min-h-screen p-4">
    <div class="text-center">
        <div class="bg-white rounded-2xl shadow-xl p-12 max-w-md">
            <div class="mb-8">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-gray-800 mb-4">401</h1>
                <h2 class="text-xl font-semibold text-gray-700 mb-6">Unauthorized Access</h2>
                <p class="text-gray-600 mb-8">
                    You need to be logged in to access this page.
                </p>
            </div>

            <a href="{{ route('login') }}"
               class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                Go to Login
            </a>
        </div>
    </div>
</div>
@endsection
