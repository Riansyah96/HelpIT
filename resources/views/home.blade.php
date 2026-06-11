@extends('layouts.app')

@section('title', 'Solusi IT Profesional & Terpercaya')

@section('content')
    <header class="relative min-h-screen flex items-center justify-center bg-background overflow-hidden pt-20">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full">
            <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/20 blur-[120px] rounded-full animate-pulse"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-accent/20 blur-[120px] rounded-full animate-pulse shadow-2xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-surface/50 border border-surface text-primary text-xs font-black uppercase tracking-widest mb-8 animate-bounce">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Tersedia untuk Jabodetabek
            </div>
            
            <h1 class="text-6xl md:text-8xl font-black mb-8 text-white leading-[1.1] tracking-tighter" data-aos="zoom-out">
                Mastering Your <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-accent to-primary">Digital Needs.</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-text/80 mb-12 max-w-3xl mx-auto leading-relaxed font-medium" data-aos="fade-up" data-aos-delay="200">
                Solusi IT On-Demand tercepat untuk masalah hardware, software, dan jaringan. <br class="hidden md:block"> Kami datang, kami perbaiki, Anda kembali bekerja.
            </p>

            <div class="flex flex-col sm:flex-row gap-5 justify-center items-center" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('services.index') }}" 
                   class="group w-full sm:w-auto px-12 py-5 rounded-2xl bg-primary text-white text-lg font-black hover:bg-primary/80 shadow-2xl shadow-primary/40 transition-all duration-300 transform hover:-translate-y-2">
                    Mulai Pesanan <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="https://wa.me/6281234567890" 
                   class="w-full sm:w-auto px-12 py-5 rounded-2xl bg-surface text-white text-lg font-black border border-surface shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <i class="fab fa-whatsapp mr-2 text-accent"></i> Konsultasi Gratis
                </a>
            </div>

            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 opacity-60" data-aos="fade-up" data-aos-delay="600">
                <div class="flex flex-col items-center">
                    <span class="text-3xl font-black text-white">500+</span>
                    <span class="text-xs uppercase font-bold tracking-widest text-text/70">Klien Puas</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl font-black text-white">30mnt</span>
                    <span class="text-xs uppercase font-bold tracking-widest text-text/70">Respon Cepat</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl font-black text-white">100%</span>
                    <span class="text-xs uppercase font-bold tracking-widest text-text/70">Garansi</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl font-black text-white">24/7</span>
                    <span class="text-xs uppercase font-bold tracking-widest text-text/70">Support</span>
                </div>
            </div>
        </div>
    </header>

    <section class="py-24 bg-surface/30 border-y border-surface">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-primary font-black uppercase tracking-widest text-sm mb-4">Cara Kerja</h2>
                <h3 class="text-4xl font-black text-white">Hanya 3 Langkah Mudah</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-dashed bg-surface -z-10"></div>
                
                <div class="text-center group" data-aos="fade-up">
                    <div class="w-20 h-20 bg-primary text-white rounded-3xl flex items-center justify-center text-3xl font-black mx-auto mb-6 group-hover:rotate-12 transition-transform shadow-xl shadow-primary/30">1</div>
                    <h4 class="text-xl font-bold mb-3 text-white">Pilih Layanan</h4>
                    <p class="text-text/70">Pilih kategori perbaikan IT yang Anda butuhkan di katalog kami.</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-accent text-white rounded-3xl flex items-center justify-center text-3xl font-black mx-auto mb-6 group-hover:rotate-12 transition-transform shadow-xl shadow-accent/30">2</div>
                    <h4 class="text-xl font-bold mb-3 text-white">Isi Detail & Jadwal</h4>
                    <p class="text-text/70">Tentukan lokasi dan waktu kunjungan teknisi sesuai keinginan Anda.</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-primary/80 text-white rounded-3xl flex items-center justify-center text-3xl font-black mx-auto mb-6 group-hover:rotate-12 transition-transform shadow-xl shadow-primary/30">3</div>
                    <h4 class="text-xl font-bold mb-3 text-white">Selesai & Bayar</h4>
                    <p class="text-text/70">Teknisi kami memperbaiki masalah Anda, bayar setelah semua beres.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 bg-surface/20">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div data-aos="fade-right">
                    <h2 class="text-primary font-black uppercase tracking-widest text-sm mb-4">Layanan Kami</h2>
                    <h3 class="text-5xl font-black text-white tracking-tight">Solusi IT Terintegrasi.</h3>
                </div>
                <a href="{{ route('services.index') }}" class="group flex items-center gap-3 px-6 py-3 rounded-xl bg-surface shadow-lg font-bold text-text hover:bg-primary hover:text-white transition-all duration-300">
                    Semua Layanan <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($services as $service)
                <div class="group relative bg-surface rounded-[2.5rem] p-10 border border-surface/50 hover:border-primary/50 transition-all duration-500 shadow-sm hover:shadow-3xl hover:-translate-y-4 overflow-hidden" 
                     data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/5 rounded-full group-hover:scale-[5] transition-transform duration-700"></div>

                    <div class="relative z-10">
                        <div class="inline-flex p-4 bg-primary/10 rounded-2xl text-primary mb-8 group-hover:bg-primary group-hover:text-white transition-colors duration-300 shadow-inner">
                            <i class="fas fa-microchip text-3xl"></i>
                        </div>

                        <div class="mb-6">
                             <span class="text-[10px] font-black uppercase tracking-[0.2em] text-primary mb-2 block">{{ $service->category }}</span>
                             <h4 class="text-2xl font-black text-white leading-tight mb-4 group-hover:text-primary transition-colors">
                                {{ $service->title }}
                            </h4>
                            <p class="text-text/70 leading-relaxed line-clamp-3">
                                {{ $service->description }}
                            </p>
                        </div>
                        
                        <div class="flex items-end justify-between mb-8 border-b border-surface pb-6">
                            <div>
                                <p class="text-xs font-bold text-text/50 uppercase tracking-widest mb-1">Mulai Dari</p>
                                <p class="text-3xl font-black text-white italic">Rp {{ number_format($service->price, 0, ',', '.') }}</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <a href="{{ route('services.show', $service->id) }}" 
                               class="py-4 text-center rounded-2xl bg-surface/50 text-text font-black hover:bg-surface transition">
                                Info
                            </a>
                            @auth
                                <a href="{{ route('customer.orders.create', ['service_id' => $service->id]) }}" 
                                   class="py-4 text-center rounded-2xl bg-primary text-white font-black shadow-lg shadow-primary/20 hover:bg-primary/80 transition">
                                    Pesan
                                </a>
                            @else
                                <a href="{{ route('login') }}" 
                                   class="py-4 text-center rounded-2xl bg-primary text-white font-black shadow-lg shadow-primary/20 hover:bg-primary/80 transition">
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

    <section class="py-24 px-6 bg-background overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col items-center text-center mb-16">
                <div class="w-20 h-1 bg-primary mb-6 rounded-full"></div>
                <h3 class="text-4xl font-black text-white">Kepercayaan Pelanggan</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($reviews as $review)
                <div class="relative bg-surface p-10 rounded-[2rem] border border-surface" data-aos="zoom-in">
                    <div class="absolute top-8 right-10 opacity-10">
                        <i class="fas fa-quote-right text-6xl text-primary"></i>
                    </div>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary to-accent flex items-center justify-center text-white text-xl font-black shadow-lg">
                            {{ substr($review->user->name ?? 'U', 0, 1) }}
                        </div>
                        <div>
                            <h4 class="font-bold text-white">{{ $review->user->name ?? 'Pelanggan' }}</h4>
                            <div class="flex text-accent text-[10px] gap-1">
                                @for($i = 0; $i < 5; $i++)
                                    <i class="fas fa-star {{ $i < ($review->rating ?? 5) ? '' : 'text-text/30' }}"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <p class="text-text/80 italic leading-relaxed">
                        "{{ $review->comment }}"
                    </p>
                </div>
                @empty
                <div class="col-span-full py-20 text-center border-2 border-dashed border-surface rounded-[3rem]">
                    <p class="text-text/50 font-bold">Jadilah pelanggan pertama yang memberikan ulasan bintang 5!</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto rounded-[4rem] bg-gradient-to-br from-primary to-accent relative overflow-hidden p-12 md:p-24 shadow-[0_50px_100px_-20px_rgba(0,0,0,0.3)]">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-white/10 to-transparent skew-x-12 transform translate-x-20"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="text-left md:w-2/3">
                    <h2 class="text-4xl md:text-6xl font-black text-white mb-8 tracking-tighter leading-tight">
                        Punya masalah IT yang <br> <span class="text-accent">Menghambat Bisnis?</span>
                    </h2>
                    <p class="text-white/70 text-xl font-medium mb-0">
                        Pesan teknisi sekarang dan dapatkan diskon 15% untuk pesanan pertama Anda.
                    </p>
                </div>
                <div class="flex flex-col gap-4 w-full md:w-auto">
                    @guest
                        <a href="{{ route('register') }}" class="px-12 py-5 bg-white text-primary rounded-2xl font-black text-center shadow-2xl hover:bg-gray-100 transition-all hover:scale-105 active:scale-95">
                            Gabung Sekarang
                        </a>
                    @else
                        <a href="{{ route('services.index') }}" class="px-12 py-5 bg-white text-primary rounded-2xl font-black text-center shadow-2xl hover:bg-gray-100 transition-all hover:scale-105 active:scale-95">
                            Pesan Sekarang
                        </a>
                    @endguest
                    <a href="https://wa.me/6281234567890" class="px-12 py-5 bg-transparent border-2 border-white/20 text-white rounded-2xl font-black text-center hover:bg-white/10 transition-all">
                         Chat Admin
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection