@extends('layouts.app')

@section('title', 'Solusi IT Profesional & Terpercaya')

@section('content')
    {{-- ============================================ --}}
    {{-- SECTION 1: HERO --}}
    {{-- ============================================ --}}
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 animate-slow-zoom" 
                 style="background-image: url('https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?w=1920&q=80'); background-size: cover; background-position: center 30%;">
                <div class="absolute inset-0 bg-black/60 dark:bg-black/75"></div>
            </div>
        </div>

        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full z-10 pointer-events-none">
            <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/20 blur-[120px] rounded-full animate-pulse"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-secondary/20 blur-[120px] rounded-full animate-pulse shadow-2xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-20 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/50 dark:bg-surface/50 border border-gray-200 dark:border-surface text-primary text-[10px] font-black uppercase tracking-widest mb-6 animate-bounce neon-border">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Tersedia untuk Jabodetabek
            </div>
            
            <h1 class="text-5xl sm:text-7xl md:text-8xl font-black mb-5 text-white leading-[1.05] tracking-tighter drop-shadow-[0_4px_20px_rgba(0,0,0,0.3)]" data-aos="zoom-out">
                Mastering Your <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-primary animate-gradient">Digital Needs.</span>
            </h1>
            
            <div class="max-w-3xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="200">
                <p class="text-base sm:text-lg md:text-xl text-white/90 font-medium leading-relaxed drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">
                    Solusi IT On-Demand tercepat untuk masalah
                </p>
                <div class="flex flex-wrap items-center justify-center gap-2 mt-3">
                    <span class="inline-block px-3 py-1.5 bg-primary/20 backdrop-blur-sm rounded-lg border border-primary/30 shadow-[0_0_20px_rgba(255,42,84,0.15)] hover:shadow-[0_0_30px_rgba(255,42,84,0.3)] transition-all duration-300 hover:scale-105 cursor-default text-sm sm:text-base font-bold text-white">
                        hardware
                    </span>
                    <span class="text-primary/30 text-sm select-none">•</span>
                    <span class="inline-block px-3 py-1.5 bg-secondary/20 backdrop-blur-sm rounded-lg border border-secondary/30 shadow-[0_0_20px_rgba(123,47,190,0.15)] hover:shadow-[0_0_30px_rgba(123,47,190,0.3)] transition-all duration-300 hover:scale-105 cursor-default text-sm sm:text-base font-bold text-white">
                        software
                    </span>
                    <span class="text-primary/30 text-sm select-none">•</span>
                    <span class="inline-block px-3 py-1.5 bg-green-500/20 backdrop-blur-sm rounded-lg border border-green-400/40 shadow-[0_0_20px_rgba(74,222,128,0.2)] hover:shadow-[0_0_35px_rgba(74,222,128,0.4)] transition-all duration-300 hover:scale-105 cursor-default text-sm sm:text-base font-bold text-white">
                        jaringan
                    </span>
                </div>
                
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-4 mt-5 text-white/90 text-sm sm:text-base font-medium drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">
                    <span class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-3 py-1.5 sm:px-4 sm:py-2 rounded-full border border-white/10 hover:bg-white/20 transition-all duration-300 cursor-default">
                        <i class="fas fa-bolt text-primary text-xs sm:text-sm"></i> Kami datang
                    </span>
                    <span class="text-primary/30 text-lg hidden sm:inline select-none">•</span>
                    <span class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-3 py-1.5 sm:px-4 sm:py-2 rounded-full border border-white/10 hover:bg-white/20 transition-all duration-300 cursor-default">
                        <i class="fas fa-tools text-secondary text-xs sm:text-sm"></i> Kami perbaiki
                    </span>
                    <span class="text-primary/30 text-lg hidden sm:inline select-none">•</span>
                    <span class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-3 py-1.5 sm:px-4 sm:py-2 rounded-full border border-white/10 hover:bg-white/20 transition-all duration-300 cursor-default">
                        <i class="fas fa-check-circle text-green-400 text-xs sm:text-sm"></i> Anda kembali bekerja
                    </span>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('services.index') }}" 
                   class="group w-full sm:w-auto px-8 sm:px-12 py-4 sm:py-5 rounded-2xl bg-gradient-to-r from-primary to-secondary text-white text-base sm:text-lg font-black hover:shadow-xl hover:shadow-primary/50 shadow-2xl shadow-primary/40 transition-all duration-300 transform hover:-translate-y-2 neon-glow">
                    Mulai Pesanan <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="https://wa.me/62895383271892" 
                   class="w-full sm:w-auto px-8 sm:px-12 py-4 sm:py-5 rounded-2xl bg-white/90 dark:bg-surface/90 text-gray-800 dark:text-white text-base sm:text-lg font-black border border-white/30 backdrop-blur-sm shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 neon-border hover:neon-glow">
                    <i class="fab fa-whatsapp mr-2 text-primary"></i> Konsultasi Gratis
                </a>
            </div>

            <div class="mt-14 sm:mt-20 grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 opacity-80">
                <div class="flex flex-col items-center">
                    <span class="text-2xl sm:text-3xl font-black text-white drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">500+</span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-white/70">Klien Puas</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-2xl sm:text-3xl font-black text-white drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">30mnt</span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-white/70">Respon Cepat</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-2xl sm:text-3xl font-black text-white drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">100%</span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-white/70">Garansi</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-2xl sm:text-3xl font-black text-white drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">24/7</span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-white/70">Support</span>
                </div>
            </div>
        </div>
    </header>

    {{-- ============================================ --}}
    {{-- SECTION 2: CARA KERJA --}}
    {{-- ============================================ --}}
    <section class="relative py-16 sm:py-24 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=1920&q=80'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-black/50 dark:bg-black/70"></div>
            </div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-primary font-black uppercase tracking-widest text-sm mb-3">Cara Kerja</h2>
                <h3 class="text-3xl sm:text-4xl font-black text-white drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">Hanya 3 Langkah Mudah</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-12 relative">
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-dashed bg-white/20 -z-10"></div>
                
                <div class="text-center group" data-aos="fade-up">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-r from-primary to-secondary text-white rounded-3xl flex items-center justify-center text-2xl sm:text-3xl font-black mx-auto mb-5 group-hover:rotate-12 transition-transform shadow-xl shadow-primary/30 neon-glow">1</div>
                    <h4 class="text-lg sm:text-xl font-bold mb-2 text-white drop-shadow-[0_2px_8px_rgba(0,0,0,0.3)]">Pilih Layanan</h4>
                    <p class="text-sm sm:text-base text-white/80">Pilih kategori perbaikan IT yang Anda butuhkan di katalog kami.</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-r from-secondary to-primary text-white rounded-3xl flex items-center justify-center text-2xl sm:text-3xl font-black mx-auto mb-5 group-hover:rotate-12 transition-transform shadow-xl shadow-secondary/30 neon-glow">2</div>
                    <h4 class="text-lg sm:text-xl font-bold mb-2 text-white drop-shadow-[0_2px_8px_rgba(0,0,0,0.3)]">Isi Detail & Jadwal</h4>
                    <p class="text-sm sm:text-base text-white/80">Tentukan lokasi dan waktu kunjungan teknisi sesuai keinginan Anda.</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-r from-primary to-secondary text-white rounded-3xl flex items-center justify-center text-2xl sm:text-3xl font-black mx-auto mb-5 group-hover:rotate-12 transition-transform shadow-xl shadow-primary/30 neon-glow">3</div>
                    <h4 class="text-lg sm:text-xl font-bold mb-2 text-white drop-shadow-[0_2px_8px_rgba(0,0,0,0.3)]">Selesai & Bayar</h4>
                    <p class="text-sm sm:text-base text-white/80">Teknisi kami memperbaiki masalah Anda, bayar setelah semua beres.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- SECTION 3: LAYANAN KAMI --}}
    {{-- ============================================ --}}
    <section class="relative py-16 sm:py-24 px-6 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=1920&q=80'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-black/60 dark:bg-black/75"></div>
            </div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 sm:mb-20 gap-6">
                <div data-aos="fade-right">
                    <h2 class="text-primary font-black uppercase tracking-widest text-sm mb-3">Layanan Kami</h2>
                    <h3 class="text-3xl sm:text-5xl font-black text-white tracking-tight drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">Solusi IT Terintegrasi.</h3>
                </div>
                <a href="{{ route('services.index') }}" class="group flex items-center gap-3 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl bg-white/20 backdrop-blur-sm border border-white/20 font-bold text-white hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:border-transparent transition-all duration-300 neon-border hover:neon-glow text-sm sm:text-base">
                    Semua Layanan <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-10">
                @foreach($services as $service)
                <div class="group relative bg-white/10 dark:bg-surface/30 backdrop-blur-md rounded-[2.5rem] p-6 sm:p-10 border border-white/10 hover:border-primary/50 transition-all duration-500 shadow-sm hover:shadow-3xl hover:-translate-y-4 overflow-hidden neon-border hover:neon-glow" 
                     data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-r from-primary/5 to-secondary/5 rounded-full group-hover:scale-[5] transition-transform duration-700"></div>

                    <div class="relative z-10">
                        <div class="inline-flex p-4 bg-white/10 rounded-2xl text-primary mb-6 group-hover:bg-gradient-to-r group-hover:from-primary group-hover:to-secondary group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-microchip text-2xl sm:text-3xl"></i>
                        </div>

                        <div class="mb-5">
                            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-primary/80 mb-2 block">{{ $service->category }}</span>
                            <h4 class="text-xl sm:text-2xl font-black text-white leading-tight mb-3 group-hover:text-primary transition-colors">
                                {{ $service->title }}
                            </h4>
                            <p class="text-sm sm:text-base text-white/70 leading-relaxed line-clamp-3">
                                {{ $service->description }}
                            </p>
                        </div>
                        
                        <div class="flex items-end justify-between mb-6 border-b border-white/10 pb-5">
                            <div>
                                <p class="text-[10px] font-bold text-white/50 uppercase tracking-widest mb-1">Mulai Dari</p>
                                <p class="text-2xl sm:text-3xl font-black text-white italic">Rp {{ number_format($service->price, 0, ',', '.') }}</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <a href="{{ route('services.show', $service->id) }}" 
                               class="py-3 sm:py-4 text-center rounded-2xl bg-white/10 backdrop-blur-sm text-white font-black hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition text-sm sm:text-base">
                                Info
                            </a>
                            @auth
                                <a href="{{ route('customer.orders.create', ['service_id' => $service->id]) }}" 
                                   class="py-3 sm:py-4 text-center rounded-2xl bg-gradient-to-r from-primary to-secondary text-white font-black shadow-lg shadow-primary/20 hover:shadow-primary/40 transition neon-glow text-sm sm:text-base">
                                    Pesan
                                </a>
                            @else
                                <a href="{{ route('login') }}" 
                                   class="py-3 sm:py-4 text-center rounded-2xl bg-gradient-to-r from-primary to-secondary text-white font-black shadow-lg shadow-primary/20 hover:shadow-primary/40 transition neon-glow text-sm sm:text-base">
                                    Login
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- SECTION 4: TESTIMONI --}}
    {{-- ============================================ --}}
    <section class="relative py-16 sm:py-24 px-6 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1920&q=80'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-black/60 dark:bg-black/75"></div>
            </div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="flex flex-col items-center text-center mb-12 sm:mb-16">
                <div class="w-16 h-1 bg-gradient-to-r from-primary to-secondary mb-5 rounded-full"></div>
                <h3 class="text-3xl sm:text-4xl font-black text-white drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">Kepercayaan Pelanggan</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                @forelse($reviews as $review)
                <div class="relative bg-white/10 dark:bg-surface/30 backdrop-blur-md p-6 sm:p-10 rounded-[2rem] border border-white/10 neon-border hover:neon-glow transition-all" data-aos="zoom-in">
                    <div class="absolute top-6 right-8 opacity-10">
                        <i class="fas fa-quote-right text-5xl sm:text-6xl text-primary"></i>
                    </div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white text-lg sm:text-xl font-black shadow-lg neon-glow">
                            {{ substr($review->user->name ?? 'U', 0, 1) }}
                        </div>
                        <div>
                            <h4 class="font-bold text-white">{{ $review->user->name ?? 'Pelanggan' }}</h4>
                            <div class="flex text-primary text-[10px] gap-1">
                                @for($i = 0; $i < 5; $i++)
                                    <i class="fas fa-star {{ $i < ($review->rating ?? 5) ? '' : 'text-white/20' }}"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <p class="text-white/80 italic leading-relaxed text-sm sm:text-base">
                        "{{ $review->comment }}"
                    </p>
                </div>
                @empty
                <div class="col-span-full py-16 text-center border-2 border-dashed border-white/20 rounded-[3rem]">
                    <p class="text-white/50 font-bold">Jadilah pelanggan pertama yang memberikan ulasan bintang 5!</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- SECTION 5: CTA --}}
    {{-- ============================================ --}}
    <section class="relative py-16 sm:py-24 px-6 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1556075798-4825dfaaf498?w=1920&q=80'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-black/70 dark:bg-black/80"></div>
            </div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto rounded-[3rem] sm:rounded-[4rem] bg-gradient-to-br from-primary/90 to-secondary/90 backdrop-blur-sm p-8 sm:p-12 md:p-24 shadow-[0_50px_100px_-20px_rgba(0,0,0,0.3)] neon-glow border border-white/10">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-white/5 to-transparent skew-x-12 transform translate-x-20 pointer-events-none"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8 md:gap-12">
                <div class="text-left md:w-2/3">
                    <h2 class="text-3xl sm:text-4xl md:text-6xl font-black text-white mb-5 tracking-tighter leading-tight drop-shadow-[0_2px_10px_rgba(0,0,0,0.3)]">
                        Punya masalah IT yang <br> <span class="text-accent">Menghambat Bisnis?</span>
                    </h2>
                    <p class="text-white/80 text-base sm:text-xl font-medium">
                        Pesan teknisi sekarang dan dapatkan diskon 15% untuk pesanan pertama Anda.
                    </p>
                </div>
                <div class="flex flex-col gap-3 w-full md:w-auto">
                    @guest
                        <a href="{{ route('register') }}" class="px-8 sm:px-12 py-4 sm:py-5 bg-white text-primary rounded-2xl font-black text-center shadow-2xl hover:bg-gray-100 transition-all hover:scale-105 active:scale-95 neon-border hover:neon-glow text-sm sm:text-base">
                            Gabung Sekarang
                        </a>
                    @else
                        <a href="{{ route('services.index') }}" class="px-8 sm:px-12 py-4 sm:py-5 bg-white text-primary rounded-2xl font-black text-center shadow-2xl hover:bg-gray-100 transition-all hover:scale-105 active:scale-95 neon-border hover:neon-glow text-sm sm:text-base">
                            Pesan Sekarang
                        </a>
                    @endguest
                    <a href="https://wa.me/62895383271892" class="px-8 sm:px-12 py-4 sm:py-5 bg-transparent border-2 border-white/20 text-white rounded-2xl font-black text-center hover:bg-white/10 transition-all neon-border hover:neon-glow text-sm sm:text-base">
                        Chat Admin
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    @keyframes slowZoom {
        0% { transform: scale(1); }
        100% { transform: scale(1.08); }
    }
    .animate-slow-zoom {
        animation: slowZoom 25s ease-in-out infinite alternate;
    }
    @keyframes gradientFlow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    .animate-gradient {
        background-size: 200% auto;
        animation: gradientFlow 3s ease infinite;
    }
    .neon-glow {
        transition: all 0.3s ease;
    }
    .neon-glow:hover {
        box-shadow: 0 0 40px rgba(255, 42, 84, 0.4), 0 0 80px rgba(123, 47, 190, 0.2);
    }
    .neon-border {
        border: 1px solid rgba(255, 42, 84, 0.2);
        transition: all 0.3s ease;
    }
    .neon-border:hover {
        border-color: #FF2A54;
        box-shadow: 0 0 30px rgba(255, 42, 84, 0.15);
    }
    /* Responsive line-clamp untuk text */
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    /* Glassmorphism untuk card layanan */
    .backdrop-blur-md {
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
    }
</style>
@endpush