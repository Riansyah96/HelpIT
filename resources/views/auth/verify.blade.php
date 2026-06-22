@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 pt-24">
    <div class="max-w-md w-full bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 text-center neon-border hover:neon-glow transition-all">
        <div class="mb-6">
            <i class="fas fa-envelope-open-text text-5xl text-neon-light"></i>
        </div>
        <h2 class="text-2xl font-black text-gray-900 dark:text-white mb-4">Verifikasi Email</h2>
        @if (session('resent'))
            <div class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 p-4 rounded-lg mb-4">
                Link verifikasi baru telah dikirim ke alamat email Anda.
            </div>
        @endif
        <p class="text-gray-600 dark:text-gray-400 mb-6">
            Sebelum melanjutkan, periksa email Anda untuk tautan verifikasi.
        </p>
        <form method="POST" action="{{ route('verification.resend') }}" class="inline">
            @csrf
            <button type="submit" class="text-primary hover:text-primary/80 font-bold underline">
                Kirim ulang verifikasi
            </button>
        </form>
        <div class="mt-4">
            <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-primary">← Kembali ke beranda</a>
        </div>
    </div>
</div>
@endsection