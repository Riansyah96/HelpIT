@extends('layouts.app')

@section('title', 'Detail Pesanan #' . $order->id)

@section('content')
<style>
    .neon-border {
        border: 1px solid rgba(255, 42, 84, 0.2);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.05);
        transition: all 0.3s ease;
    }
    .neon-border:hover {
        border-color: #FF2A54;
        box-shadow: 0 0 40px rgba(255, 42, 84, 0.15);
    }
    .glass-card {
        background: rgba(15, 23, 42, 0.85);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 42, 84, 0.2);
        transition: all 0.3s ease;
    }
    .glass-card:hover {
        border-color: #FF2A54;
        box-shadow: 0 0 30px rgba(255, 42, 84, 0.1);
    }
</style>

<div class="min-h-screen bg-[#0F172A] py-12 pt-28">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Navigation & Header --}}
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
            <div data-aos="fade-right">
                <a href="{{ route('customer.dashboard') }}" class="text-[#FF2A54] hover:text-[#7B2FBE] font-bold hover:underline mb-2 inline-block transition-all hover:drop-shadow-[0_0_10px_rgba(255,42,84,0.3)]">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Dashboard
                </a>
                <h1 class="text-3xl font-black text-[#E2E8F0] uppercase italic tracking-tighter">
                    Detail Pesanan <span class="text-[#FF2A54] drop-shadow-[0_0_20px_rgba(255,42,84,0.3)]">#{{ $order->id }}</span>
                </h1>
            </div>
            <div class="text-right" data-aos="fade-left">
                @php
                    $statusClasses = [
                        'pending' => 'bg-[#7B2FBE]/20 text-[#7B2FBE] border border-[#7B2FBE]/30 shadow-[0_0_20px_rgba(123,47,190,0.2)]',
                        'processing' => 'bg-[#FF2A54]/20 text-[#FF2A54] border border-[#FF2A54]/30 shadow-[0_0_20px_rgba(255,42,84,0.2)]',
                        'completed' => 'bg-green-500/20 text-green-500 border border-green-500/30 shadow-[0_0_20px_rgba(34,197,94,0.2)]',
                        'cancelled' => 'bg-red-500/20 text-red-500 border border-red-500/30 shadow-[0_0_20px_rgba(239,68,68,0.2)]',
                        'cancel_pending' => 'bg-orange-500/20 text-orange-500 border border-orange-500/30 shadow-[0_0_20px_rgba(251,146,60,0.2)]',
                    ];
                @endphp
                <span class="px-5 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-sm {{ $statusClasses[$order->status] ?? 'bg-gray-100 text-gray-700' }}">
                    {{ str_replace('_', ' ', $order->status) }}
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Kolom Kiri: Detail Layanan & Lokasi --}}
            <div class="md:col-span-2 space-y-6">
                
                {{-- Informasi Layanan --}}
                <div class="bg-[#1E293B] rounded-3xl p-8 shadow-xl border border-[#1E293B] neon-border" data-aos="fade-up">
                    <h2 class="text-xl font-bold text-[#E2E8F0] mb-6 flex items-center">
                        <i class="fas fa-tools mr-3 text-[#FF2A54]"></i> Informasi Layanan
                    </h2>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between pb-4 border-b border-[#1E293B]">
                            <span class="text-[#E2E8F0]/50 text-sm">Nama Layanan</span>
                            <span class="font-bold text-[#E2E8F0] group-hover:text-[#FF2A54] transition-colors">{{ $order->service->title ?? 'Layanan IT' }}</span>
                        </div>
                        <div class="flex justify-between pb-4 border-b border-[#1E293B]">
                            <span class="text-[#E2E8F0]/50 text-sm">Kategori</span>
                            <span class="font-bold text-[#FF2A54] uppercase text-xs drop-shadow-[0_0_10px_rgba(255,42,84,0.1)]">{{ $order->service->category ?? '-' }}</span>
                        </div>
                        <div class="pt-2">
                            <span class="text-[#E2E8F0]/50 block mb-2 text-sm">Deskripsi Masalah:</span>
                            <p class="text-[#E2E8F0]/70 bg-[#0F172A] p-4 rounded-2xl italic text-sm leading-relaxed border border-[#1E293B]">
                                "{{ $order->problem_description }}"
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Waktu & Lokasi --}}
                <div class="bg-[#1E293B] rounded-3xl p-8 shadow-xl border border-[#1E293B] neon-border" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-xl font-bold text-[#E2E8F0] mb-6 flex items-center">
                        <i class="fas fa-map-marker-alt mr-3 text-[#7B2FBE]"></i> Waktu & Lokasi Kunjungan
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <p class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-2">Jadwal Kunjungan</p>
                            <div class="space-y-1">
                                <p class="font-bold text-[#E2E8F0] flex items-center">
                                    <i class="far fa-calendar-alt mr-2 text-[#FF2A54]"></i> {{ \Carbon\Carbon::parse($order->preferred_date)->format('d M Y') }}
                                </p>
                                <p class="font-bold text-[#E2E8F0] flex items-center">
                                    <i class="far fa-clock mr-2 text-[#FF2A54]"></i> {{ $order->preferred_time }} WIB
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-2">Alamat Lengkap</p>
                            <p class="text-sm font-bold text-[#E2E8F0]/70 leading-relaxed italic">
                                {{ $order->address }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kolom Kanan: Biaya, Catatan Admin, & Aksi --}}
            <div class="space-y-6">
                
                {{-- Ringkasan Biaya --}}
                <div class="bg-gradient-to-br from-[#FF2A54] to-[#7B2FBE] rounded-3xl p-8 text-white shadow-xl relative overflow-hidden" data-aos="fade-left">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
                    <h2 class="text-xs font-black uppercase tracking-widest mb-4 opacity-70 relative z-10">Ringkasan Biaya</h2>
                    <div class="space-y-3 relative z-10">
                        <div class="flex justify-between opacity-80 text-sm">
                            <span>Biaya Layanan</span>
                            <span>Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between font-black text-2xl pt-3 border-t border-white/20 tracking-tighter italic">
                            <span>Total</span>
                            <span class="drop-shadow-[0_0_20px_rgba(255,255,255,0.2)]">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <div class="mt-6 bg-white/10 rounded-2xl p-4 border border-white/5 relative z-10">
                        <p class="text-[9px] uppercase tracking-[0.2em] font-black opacity-70 mb-1">Metode Pembayaran</p>
                        <p class="font-bold text-sm"><i class="fas fa-wallet mr-2"></i> {{ strtoupper($order->payment_method) }}</p>
                    </div>
                </div>

                {{-- Catatan Teknisi --}}
                <div class="bg-[#1E293B] rounded-3xl p-6 shadow-xl border border-[#1E293B] neon-border" data-aos="fade-left" data-aos-delay="100">
                    <h2 class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-[0.2em] mb-4 flex items-center">
                        <i class="fas fa-clipboard-list mr-2 text-[#7B2FBE]"></i> Catatan Teknisi
                    </h2>
                    @if($order->admin_notes)
                        <div class="relative p-4 rounded-2xl bg-[#0F172A] border border-[#7B2FBE]/20">
                            <i class="fas fa-quote-left absolute top-2 left-2 text-[#7B2FBE]/20 text-xl opacity-50"></i>
                            <p class="text-sm text-[#E2E8F0]/70 font-medium italic leading-relaxed pl-4">
                                {{ $order->admin_notes }}
                            </p>
                        </div>
                    @else
                        <div class="text-center py-6">
                            <div class="w-10 h-10 bg-[#0F172A] rounded-full flex items-center justify-center mx-auto mb-2 border border-[#1E293B]">
                                <i class="fas fa-comment-slash text-[#E2E8F0]/20"></i>
                            </div>
                            <p class="text-[10px] text-[#E2E8F0]/40 font-bold uppercase tracking-widest">Belum ada update</p>
                        </div>
                    @endif
                </div>

                {{-- Tombol Batal (Pending Only) --}}
                @if($order->status == 'pending')
                <div data-aos="zoom-in" data-aos-delay="200">
                    <a href="{{ route('customer.orders.cancel', $order->id) }}" 
                       class="block w-full text-center py-4 rounded-2xl bg-[#0F172A] border border-red-500/30 text-red-500 font-black text-xs uppercase tracking-[0.2em] hover:bg-red-500/10 hover:border-red-500/50 transition-all shadow-lg shadow-red-500/5 hover:shadow-[0_0_30px_rgba(239,68,68,0.2)]">
                        <i class="fas fa-times-circle mr-2"></i> Ajukan Pembatalan
                    </a>
                </div>
                @endif

                {{-- Cancel Pending Info --}}
                @if($order->status == 'cancel_pending')
                <div class="p-4 rounded-2xl bg-orange-500/10 border border-orange-500/30 text-center shadow-[0_0_20px_rgba(251,146,60,0.1)]" data-aos="fade-up">
                    <p class="text-[10px] font-black text-orange-500 uppercase tracking-widest">
                        <i class="fas fa-hourglass-half mr-1"></i> Menunggu Persetujuan Batal
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection