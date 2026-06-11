@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="relative min-h-screen bg-background overflow-hidden pt-32 pb-20">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none">
        <div class="absolute top-[20%] right-[-10%] w-[40%] h-[40%] bg-primary/20 blur-[120px] rounded-full animate-pulse"></div>
        <div class="absolute bottom-[20%] left-[-10%] w-[40%] h-[40%] bg-accent/20 blur-[120px] rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-surface/50 border border-surface text-primary text-xs font-black uppercase tracking-widest mb-6">
                Hubungi Kami
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-white tracking-tighter">
                Butuh Bantuan <span class="text-primary">Teknis?</span>
            </h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-primary rounded-xl text-white shadow-lg shadow-primary/30">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-white text-lg">Alamat Kantor</h3>
                            <p class="text-text/70 mt-2 italic">Jl. Teknologi No. 123, Jakarta, Indonesia.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-accent rounded-xl text-white shadow-lg shadow-accent/30">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-white text-lg">Email Support</h3>
                            <p class="text-text/70 mt-2">cs@helpit.id</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <form action="#" class="bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 md:p-10 shadow-2xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-text/50 mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full bg-surface border border-surface rounded-2xl px-5 py-4 text-white focus:ring-2 focus:ring-primary outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-text/50 mb-2">Email</label>
                            <input type="email" class="w-full bg-surface border border-surface rounded-2xl px-5 py-4 text-white focus:ring-2 focus:ring-primary outline-none transition-all">
                        </div>
                    </div>
                    <div class="mb-8">
                        <label class="block text-xs font-black uppercase tracking-widest text-text/50 mb-2">Pesan Anda</label>
                        <textarea rows="5" class="w-full bg-surface border border-surface rounded-2xl px-5 py-4 text-white focus:ring-2 focus:ring-primary outline-none transition-all"></textarea>
                    </div>
                    <button type="submit" class="w-full py-5 bg-primary text-white rounded-2xl font-black shadow-xl hover:bg-primary/80 hover:scale-[1.02] active:scale-95 transition-all">
                        Kirim Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection