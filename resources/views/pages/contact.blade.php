@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="relative min-h-screen bg-gray-50 dark:bg-background overflow-hidden pt-32 pb-20">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none">
        <div class="absolute top-[20%] right-[-10%] w-[40%] h-[40%] bg-primary/20 blur-[120px] rounded-full animate-pulse"></div>
        <div class="absolute bottom-[20%] left-[-10%] w-[40%] h-[40%] bg-secondary/20 blur-[120px] rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/50 dark:bg-surface/50 border border-gray-200 dark:border-surface text-primary text-xs font-black uppercase tracking-widest mb-6 neon-border">
                Hubungi Kami
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white tracking-tighter">
                Butuh Bantuan <span class="text-neon-light">Teknis?</span>
            </h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-white/50 dark:bg-surface/50 backdrop-blur-xl border border-gray-200 dark:border-surface rounded-3xl p-8 shadow-xl neon-border hover:neon-glow transition-all">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-gradient-to-r from-primary to-secondary rounded-xl text-white shadow-lg shadow-primary/30 neon-glow">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-gray-900 dark:text-white text-lg">Alamat Kantor</h3>
                            <p class="text-gray-600 dark:text-text/70 mt-2 italic">Jl. Teknologi No. 123, Jakarta, Indonesia.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/50 dark:bg-surface/50 backdrop-blur-xl border border-gray-200 dark:border-surface rounded-3xl p-8 shadow-xl neon-border hover:neon-glow transition-all">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-gradient-to-r from-secondary to-primary rounded-xl text-white shadow-lg shadow-secondary/30 neon-glow">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-gray-900 dark:text-white text-lg">Email Support</h3>
                            <p class="text-gray-600 dark:text-text/70 mt-2">cs@helpit.id</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <form action="#" class="bg-white/50 dark:bg-surface/50 backdrop-blur-xl border border-gray-200 dark:border-surface rounded-3xl p-8 md:p-10 shadow-2xl neon-border hover:neon-glow transition-all">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-gray-500 dark:text-text/50 mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full bg-white dark:bg-surface border border-gray-200 dark:border-surface rounded-2xl px-5 py-4 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary outline-none transition-all neon-border focus:neon-glow">
                        </div>
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-gray-500 dark:text-text/50 mb-2">Email</label>
                            <input type="email" class="w-full bg-white dark:bg-surface border border-gray-200 dark:border-surface rounded-2xl px-5 py-4 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary outline-none transition-all neon-border focus:neon-glow">
                        </div>
                    </div>
                    <div class="mb-8">
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-500 dark:text-text/50 mb-2">Pesan Anda</label>
                        <textarea rows="5" class="w-full bg-white dark:bg-surface border border-gray-200 dark:border-surface rounded-2xl px-5 py-4 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary outline-none transition-all neon-border focus:neon-glow"></textarea>
                    </div>
                    <button type="submit" class="w-full py-5 bg-gradient-to-r from-primary to-secondary text-white rounded-2xl font-black shadow-xl hover:shadow-xl hover:shadow-primary/30 hover:scale-[1.02] active:scale-95 transition-all neon-glow">
                        Kirim Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection