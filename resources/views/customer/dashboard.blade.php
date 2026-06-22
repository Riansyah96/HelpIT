@extends('layouts.app')

@section('title', 'Dashboard Pelanggan - TechEase ID')

@section('content')
<style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    .glass-card {
        background: rgba(15, 23, 42, 0.85);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 42, 84, 0.2);
        transition: all 0.3s ease;
    }
    .glass-card:hover {
        border-color: #FF2A54;
        box-shadow: 0 0 30px rgba(255, 42, 84, 0.15);
    }
    .neon-border {
        border: 1px solid rgba(255, 42, 84, 0.2);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.05);
    }
    .neon-border:hover {
        border-color: #FF2A54;
        box-shadow: 0 0 40px rgba(255, 42, 84, 0.15);
    }
    .avatar-gradient {
        background: linear-gradient(135deg, #FF2A54, #7B2FBE);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.3);
    }
</style>

<div class="min-h-screen bg-[#0F172A] pb-12 pt-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Header Section --}}
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-6" data-aos="fade-down">
            <div>
                <h1 class="text-3xl md:text-4xl font-black text-[#E2E8F0] tracking-tighter uppercase italic">
                    Dashboard <span class="text-[#FF2A54] drop-shadow-[0_0_20px_rgba(255,42,84,0.3)]">Pelanggan</span>
                </h1>
                <p class="text-[#E2E8F0]/60 mt-1 font-medium">
                    Selamat datang kembali, {{ Auth::user()->name }}! Pantau progres layanan IT Anda.
                </p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('services.index') }}" class="inline-flex items-center px-6 py-3 bg-[#FF2A54] text-white rounded-2xl font-black text-xs uppercase tracking-widest shadow-xl shadow-[#FF2A54]/30 hover:shadow-[0_0_40px_rgba(255,42,84,0.4)] hover:bg-[#FF2A54]/80 transition transform active:scale-95 border border-[#FF2A54]/50">
                    <i class="fas fa-plus mr-2"></i> Pesan Layanan
                </a>
            </div>
        </div>

        {{-- Statistik Singkat --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="glass-card p-6 rounded-[2rem] shadow-sm neon-border">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-[#FF2A54]/20 text-[#FF2A54] rounded-2xl flex items-center justify-center text-xl border border-[#FF2A54]/30 shadow-[0_0_15px_rgba(255,42,84,0.1)]">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">Total Pesanan</p>
                        <p class="text-2xl font-black text-[#E2E8F0]">{{ $orders->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="glass-card p-6 rounded-[2rem] shadow-sm neon-border">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-[#7B2FBE]/20 text-[#7B2FBE] rounded-2xl flex items-center justify-center text-xl border border-[#7B2FBE]/30 shadow-[0_0_15px_rgba(123,47,190,0.1)]">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">Dalam Proses</p>
                        <p class="text-2xl font-black text-[#E2E8F0]">{{ $orders->whereIn('status', ['pending', 'processing', 'cancel_pending'])->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="glass-card p-6 rounded-[2rem] shadow-sm neon-border">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-500/20 text-green-500 rounded-2xl flex items-center justify-center text-xl border border-green-500/30 shadow-[0_0_15px_rgba(34,197,94,0.1)]">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">Selesai</p>
                        <p class="text-2xl font-black text-[#E2E8F0]">{{ $orders->where('status', 'completed')->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tabel Pesanan --}}
        <div class="glass-card rounded-[2.5rem] overflow-hidden shadow-2xl neon-border" data-aos="fade-up">
            <div class="p-8 border-b border-[#1E293B]">
                <h2 class="text-lg font-black text-[#E2E8F0] uppercase tracking-tight">Riwayat Pesanan</h2>
            </div>
            <div class="overflow-x-auto hide-scrollbar">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#0F172A]/50">
                            <th class="px-8 py-5 text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-[0.2em]">Layanan</th>
                            <th class="px-8 py-5 text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-[0.2em]">Tanggal</th>
                            <th class="px-8 py-5 text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-[0.2em]">Status</th>
                            <th class="px-8 py-5 text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-[0.2em]">Total</th>
                            <th class="px-8 py-5 text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-[0.2em] text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#1E293B]">
                        @forelse($orders as $order)
                        <tr class="hover:bg-[#FF2A54]/5 transition-all group">
                            <td class="px-8 py-6">
                                <p class="font-black text-[#E2E8F0] text-sm uppercase italic group-hover:text-[#FF2A54] transition-colors">{{ $order->service->title }}</p>
                                <p class="text-xs text-[#E2E8F0]/50 font-medium">Order ID: #{{ $order->id }}</p>
                            </td>
                            <td class="px-8 py-6 text-sm font-bold text-[#E2E8F0]/70">
                                {{ $order->created_at->format('d M Y') }}
                            </td>
                            <td class="px-8 py-6">
                                @php
                                    $statusClasses = [
                                        'pending' => 'bg-[#7B2FBE]/20 text-[#7B2FBE] border border-[#7B2FBE]/30 shadow-[0_0_15px_rgba(123,47,190,0.2)]',
                                        'processing' => 'bg-[#FF2A54]/20 text-[#FF2A54] border border-[#FF2A54]/30 shadow-[0_0_15px_rgba(255,42,84,0.2)]',
                                        'completed' => 'bg-green-500/20 text-green-500 border border-green-500/30 shadow-[0_0_15px_rgba(34,197,94,0.2)]',
                                        'cancelled' => 'bg-red-500/20 text-red-500 border border-red-500/30 shadow-[0_0_15px_rgba(239,68,68,0.2)]',
                                        'cancel_pending' => 'bg-orange-500/20 text-orange-500 border border-orange-500/30 shadow-[0_0_15px_rgba(251,146,60,0.2)]',
                                    ];
                                @endphp
                                <span class="px-4 py-1.5 rounded-full text-[9px] font-black uppercase tracking-widest {{ $statusClasses[$order->status] ?? 'bg-gray-100 text-gray-700' }}">
                                    {{ str_replace('_', ' ', $order->status) }}
                                </span>
                            </td>
                            <td class="px-8 py-6 text-sm font-black text-[#FF2A54] drop-shadow-[0_0_10px_rgba(255,42,84,0.2)] group-hover:drop-shadow-[0_0_20px_rgba(255,42,84,0.4)] transition-all">
                                Rp {{ number_format($order->service->price, 0, ',', '.') }}
                            </td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex justify-end items-center gap-2">
                                    <a href="{{ route('customer.orders.show', $order->id) }}" 
                                       class="px-4 py-2 bg-[#1E293B] border border-[#1E293B] text-[#E2E8F0]/60 rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-[#FF2A54] hover:text-white hover:border-[#FF2A54] transition-all hover:shadow-[0_0_30px_rgba(255,42,84,0.3)]">
                                        <i class="fas fa-eye mr-1"></i> Detail
                                    </a>

                                    @if($order->status === 'completed' && !$order->review)
                                        <button onclick="openReviewModal('{{ $order->service->id }}', '{{ $order->id }}', '{{ $order->service->title }}')" 
                                                class="px-4 py-2 bg-[#7B2FBE] text-white rounded-xl text-[9px] font-black uppercase tracking-widest hover:bg-[#7B2FBE]/80 transition shadow-lg shadow-[#7B2FBE]/30 hover:shadow-[0_0_40px_rgba(123,47,190,0.4)] border border-[#7B2FBE]/50">
                                            <i class="fas fa-star mr-1"></i> Review
                                        </button>
                                    @elseif($order->review)
                                        <span class="text-[9px] font-black text-green-500 uppercase italic tracking-widest px-2 border border-green-500/30 bg-green-500/10 rounded-full py-1 px-3 shadow-[0_0_15px_rgba(34,197,94,0.1)]">
                                            Reviewed ✓
                                        </span>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-8 py-20 text-center">
                                <div class="opacity-20 mb-4">
                                    <i class="fas fa-box-open text-6xl text-[#E2E8F0]"></i>
                                </div>
                                <p class="text-[#E2E8F0]/50 font-bold italic uppercase tracking-widest text-xs">Belum ada pesanan layanan</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal Review --}}
<div id="reviewModal" class="fixed inset-0 z-[150] hidden overflow-y-auto" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-[#0F172A]/80 backdrop-blur-md transition-opacity" onclick="closeReviewModal()"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        
        <div id="modalContainer" class="inline-block align-middle bg-[#1E293B] rounded-[2.5rem] text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full border border-[#FF2A54]/20 opacity-0 scale-95 duration-300">
            <form action="{{ route('reviews.store') }}" method="POST" class="p-8 md:p-10">
                @csrf
                <input type="hidden" name="service_id" id="modalServiceId">
                <input type="hidden" name="order_id" id="modalOrderId">
                
                <div class="text-center mb-10">
                    <div class="w-16 h-16 bg-[#7B2FBE]/20 text-[#7B2FBE] rounded-3xl flex items-center justify-center mx-auto mb-4 text-2xl border border-[#7B2FBE]/30 shadow-[0_0_20px_rgba(123,47,190,0.2)]">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="text-2xl font-black text-[#E2E8F0] tracking-tight uppercase italic leading-tight" id="modalTitle">Beri Ulasan</h3>
                    <p class="text-[10px] text-[#E2E8F0]/50 mt-2 font-bold uppercase tracking-widest">Kepuasan Anda adalah prioritas kami</p>
                </div>

                <div class="space-y-8">
                    <div class="text-center">
                        <div class="flex flex-row-reverse justify-center gap-2">
                            @for($i = 5; $i >= 1; $i--)
                            <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" class="hidden peer" required onchange="updateRatingLabel({{ $i }})">
                            <label for="star{{ $i }}" class="cursor-pointer text-3xl md:text-4xl text-[#E2E8F0]/20 peer-hover:text-[#7B2FBE] peer-checked:text-[#FF2A54] transition-all hover:scale-125 active:scale-90 peer-checked:drop-shadow-[0_0_15px_rgba(255,42,84,0.4)]">
                                <i class="fas fa-star"></i>
                            </label>
                            @endfor
                        </div>
                        <div class="mt-4 h-6">
                            <span id="ratingLabelText" class="text-[10px] font-black uppercase tracking-[0.2em] text-[#7B2FBE] bg-[#7B2FBE]/10 border border-[#7B2FBE]/30 px-5 py-2 rounded-full shadow-[0_0_15px_rgba(123,47,190,0.1)]">
                                Pilih Bintang
                            </span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-[#E2E8F0]/50 ml-1">Ulasan Singkat</label>
                        <textarea name="comment" rows="3" required
                                  class="w-full px-5 py-4 rounded-2xl border-2 border-[#1E293B] 
                                         bg-[#0F172A] 
                                         text-[#E2E8F0] 
                                         placeholder-[#E2E8F0]/40
                                         focus:ring-4 focus:ring-[#FF2A54]/10 focus:border-[#FF2A54]
                                         transition-all duration-300 font-bold shadow-sm outline-none text-sm resize-none"></textarea>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-3">
                    <button type="button" onclick="closeReviewModal()" 
                            class="py-4 bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0]/60 rounded-2xl font-black text-[10px] uppercase tracking-widest transition hover:bg-[#1E293B] hover:text-[#E2E8F0]">
                        Nanti
                    </button>
                    <button type="submit" 
                            class="py-4 bg-[#FF2A54] text-white rounded-2xl font-black text-[10px] uppercase tracking-widest shadow-xl shadow-[#FF2A54]/30 hover:shadow-[0_0_40px_rgba(255,42,84,0.4)] hover:bg-[#FF2A54]/80 transition transform active:scale-95 flex items-center justify-center gap-2 border border-[#FF2A54]/50">
                        Kirim <i class="fas fa-paper-plane text-[9px]"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function updateRatingLabel(rating) {
        const labels = { 1: 'Buruk Sekali', 2: 'Kurang Puas', 3: 'Biasa Saja', 4: 'Puas', 5: 'Sangat Puas!' };
        document.getElementById('ratingLabelText').innerText = labels[rating];
    }

    function openReviewModal(serviceId, orderId, serviceTitle) {
        document.getElementById('modalServiceId').value = serviceId;
        document.getElementById('modalOrderId').value = orderId;
        document.getElementById('modalTitle').innerText = serviceTitle;
        const modal = document.getElementById('reviewModal');
        const container = document.getElementById('modalContainer');
        modal.classList.remove('hidden');
        setTimeout(() => {
            container.classList.remove('scale-95', 'opacity-0');
            container.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeReviewModal() {
        const modal = document.getElementById('reviewModal');
        const container = document.getElementById('modalContainer');
        container.classList.remove('scale-100', 'opacity-100');
        container.classList.add('scale-95', 'opacity-0');
        setTimeout(() => { modal.classList.add('hidden'); }, 300);
    }
</script>
@endsection