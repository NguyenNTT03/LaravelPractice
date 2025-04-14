<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            @if(Auth::user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}" class="text-green-500">Go to Admin Panel</a>
            @elseif(Auth::user()->role === 'user')
            <a href="{{ route('user.dashboard') }}" class="text-green-500">Go to User Dashboard</a>
            <br>
            <a href="{{ route('user.show', Auth::user()->id) }}" class="text-green-500">View User Details</a>
            <br>
            <a href="{{ route ('products.show')}}" class="text-green-500">View all products </a>
            @endif
        </div>
    </div>
</x-app-layout>