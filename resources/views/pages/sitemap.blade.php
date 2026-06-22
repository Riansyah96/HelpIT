@extends('layouts.app')

@section('title', 'Pusat Bantuan')

@section('content')
<div class="relative min-h-screen bg-gray-50 dark:bg-gray-950 overflow-hidden pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-black text-gray-900 dark:text-white tracking-tighter mb-4">Pusat <span class="text-neon-light">Bantuan</span></h1>
            <p class="text-gray-500 dark:text-gray-400">Navigasi cepat untuk menemukan apa yang Anda butuhkan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white/80 dark:bg-gray-900/50 backdrop-blur-xl border border-white dark:border-gray-800 rounded-3xl p-8 hover:scale-[1.02] transition-all duration-300 group neon-border hover:neon-glow">
                <div class="w-16 h-16 bg-gradient-to-r from-primary/10 to-secondary/10 dark:from-primary/20 dark:to-secondary/20 rounded-2xl flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-gradient-to-r group-hover:from-primary group-hover:to-secondary group-hover:text-white transition-all">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3 class="text-xl font-black text-gray-900 dark:text-white mb-4">FAQ Utama</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">Cari jawaban cepat untuk masalah umum IT Anda secara instan.</p>
                <a href="#" class="text-primary font-bold text-xs uppercase tracking-widest hover:underline">Lihat Semua &rarr;</a>
            </div>

            <div class="bg-white/80 dark:bg-gray-900/50 backdrop-blur-xl border border-white dark:border-gray-800 rounded-3xl p-8 hover:scale-[1.02] transition-all duration-300 group neon-border hover:neon-glow">
                <div class="w-16 h-16 bg-gradient-to-r from-secondary/10 to-primary/10 dark:from-secondary/20 dark:to-primary/20 rounded-2xl flex items-center justify-center text-secondary text-2xl mb-6 group-hover:bg-gradient-to-r group-hover:from-secondary group-hover:to-primary group-hover:text-white transition-all">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3 class="text-xl font-black text-gray-900 dark:text-white mb-4">Peta Situs</h3>
                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition">Halaman Utama</a></li>
                    <li><a href="{{ route('services.index') }}" class="hover:text-primary transition">Layanan IT</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-primary transition">Tentang Kami</a></li>
                </ul>
            </div>

            <div class="bg-white/80 dark:bg-gray-900/50 backdrop-blur-xl border border-white dark:border-gray-800 rounded-3xl p-8 hover:scale-[1.02] transition-all duration-300 group border-2 border-transparent hover:border-primary/30 neon-border hover:neon-glow">
                <div class="w-16 h-16 bg-gradient-to-r from-primary/10 to-secondary/10 dark:from-primary/20 dark:to-secondary/20 rounded-2xl flex items-center justify-center text-primary text-2xl mb-6 group-hover:bg-gradient-to-r group-hover:from-primary group-hover:to-secondary group-hover:text-white transition-all">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="text-xl font-black text-gray-900 dark:text-white mb-4">Dukungan 24/7</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 italic">Butuh bantuan darurat? Hubungi teknisi respon cepat kami sekarang.</p>
                <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-gradient-to-r from-primary to-secondary text-white rounded-xl text-xs font-black uppercase tracking-widest neon-glow">Kontak Support</a>
            </div>
        </div>
    </div>
</div>
@endsection