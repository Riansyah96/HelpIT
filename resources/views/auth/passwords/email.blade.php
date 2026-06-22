@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 pt-24">
    <div class="max-w-md w-full bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 neon-border hover:neon-glow transition-all">
        <h2 class="text-2xl font-black text-gray-900 dark:text-white mb-4">Reset Password</h2>
        @if (session('status'))
            <div class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 p-4 rounded-lg mb-4">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white neon-border focus:neon-glow">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full py-3 bg-gradient-to-r from-primary to-secondary text-white rounded-lg font-bold hover:shadow-xl hover:shadow-primary/30 transition neon-glow">
                Kirim Link Reset
            </button>
        </form>
        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-sm text-gray-500 hover:text-primary">← Kembali ke login</a>
        </div>
    </div>
</div>
@endsection