@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="min-h-screen">
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-semibold text-gray-800">Activity MVC</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">{{ $user->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-200">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex items-center justify-center py-16">
        <div class="max-w-2xl mx-auto text-center px-4">
            <div class="bg-white rounded-2xl shadow-xl p-12">
                <div class="mb-8">
                    <div class="w-20 h-20 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-800 mb-4">
                        Welcome, {{ $user->name }}! 🎉
                    </h1>
                    <p class="text-gray-600 text-lg">
                        You have successfully logged in to your account.
                    </p>
                </div>

                <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6 mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-3">Account Information</h2>
                    <div class="space-y-2 text-left">
                        <p><span class="font-medium text-gray-700">Name:</span> {{ $user->name }}</p>
                        <p><span class="font-medium text-gray-700">Email:</span> {{ $user->email }}</p>
                        <p><span class="font-medium text-gray-700">Member since:</span> {{ $user->created_at->format('F j, Y') }}</p>
                    </div>
                </div>

                <div class="text-gray-600">
                    <p class="mb-4">This is your secure home page. Only authenticated users can access this area.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
