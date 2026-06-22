@extends('layouts.app')

@section('title', 'Manage All Orders - TechEase Control')

@section('content')
<style>
    .glass-card {
        background: rgba(15, 23, 42, 0.85);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 42, 84, 0.2);
    }
    .dark .glass-card {
        background: rgba(15, 23, 42, 0.9);
        border: 1px solid rgba(255, 42, 84, 0.15);
    }
    .status-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23E2E8F0' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
    }
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .neon-border {
        border: 1px solid rgba(255, 42, 84, 0.2);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.05);
    }
    .neon-border:hover {
        border-color: #FF2A54;
        box-shadow: 0 0 40px rgba(255, 42, 84, 0.15);
    }
</style>

<div class="min-h-screen bg-[#0F172A] pb-12 pt-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Header Section --}}
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4">
            <div data-aos="fade-right">
                <h1 class="text-4xl font-black text-[#E2E8F0] tracking-tighter italic">
                    All <span class="text-[#FF2A54] drop-shadow-[0_0_20px_rgba(255,42,84,0.3)]">Orders</span>
                </h1>
                <p class="text-[#E2E8F0]/60 font-bold text-sm uppercase tracking-widest mt-2">
                    Total: {{ $orders->total() }} Pesanan Tercatat
                </p>
            </div>
            <div class="flex gap-3" data-aos="fade-left">
                <a href="{{ route('admin.dashboard') }}" class="px-6 py-3 bg-[#1E293B] border border-[#1E293B] rounded-2xl text-xs font-black uppercase tracking-widest text-[#E2E8F0] hover:bg-[#FF2A54] hover:text-white transition shadow-sm hover:shadow-[0_0_30px_rgba(255,42,84,0.3)] neon-border flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Dashboard
                </a>
            </div>
        </div>

        {{-- Flash Message --}}
        @if(session('success'))
        <div class="mb-6 p-4 glass-card border-l-4 border-green-500 rounded-2xl flex items-center gap-3 shadow-lg" data-aos="zoom-in">
            <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center flex-shrink-0 shadow-[0_0_20px_rgba(34,197,94,0.4)]">
                <i class="fas fa-check text-xs"></i>
            </div>
            <span class="text-sm font-bold text-[#E2E8F0]">{{ session('success') }}</span>
        </div>
        @endif

        {{-- Main Table Container --}}
        <div class="bg-[#1E293B] rounded-[2.5rem] border border-[#1E293B] shadow-xl overflow-hidden neon-border" data-aos="fade-up">
            
            <div class="overflow-x-auto no-scrollbar">
                <table class="w-full text-left min-w-[800px]">
                    <thead>
                        <tr class="text-[10px] font-black uppercase tracking-[0.2em] text-[#E2E8F0]/50 border-b border-[#1E293B]">
                            <th class="px-8 py-6">Order ID & Date</th>
                            <th class="px-8 py-6">Client</th>
                            <th class="px-8 py-6">Service</th>
                            <th class="px-8 py-6">Live Status</th>
                            <th class="px-8 py-6 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#1E293B]">
                        @forelse($orders as $order)
                        <tr class="hover:bg-[#FF2A54]/5 transition-colors group">
                            <td class="px-8 py-5">
                                <p class="text-xs font-black text-[#FF2A54] uppercase tracking-tighter drop-shadow-[0_0_10px_rgba(255,42,84,0.2)]">#{{ $order->order_code }}</p>
                                <p class="text-[10px] text-[#E2E8F0]/40 font-bold mt-1">
                                    <i class="far fa-clock mr-1"></i>{{ $order->created_at->format('d M Y, H:i') }}
                                </p>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#FF2A54] to-[#7B2FBE] flex items-center justify-center text-[11px] font-black text-white uppercase shadow-[0_0_15px_rgba(255,42,84,0.3)]">
                                        {{ substr($order->user->name, 0, 2) }}
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-[#E2E8F0]">{{ $order->user->name }}</p>
                                        <p class="text-[10px] text-[#E2E8F0]/50">{{ $order->user->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5">
                                <span class="text-xs font-bold text-[#E2E8F0]">
                                    {{ $order->service->title ?? 'N/A' }}
                                </span>
                            </td>
                            <td class="px-8 py-5">
                                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()" 
                                        class="status-select text-[10px] font-black uppercase tracking-widest px-4 py-2 rounded-xl border-none focus:ring-2 focus:ring-[#FF2A54] cursor-pointer transition-all
                                        @if($order->status == 'pending') bg-[#7B2FBE]/20 text-[#7B2FBE] border border-[#7B2FBE]/30
                                        @elseif($order->status == 'processing') bg-[#FF2A54]/20 text-[#FF2A54] border border-[#FF2A54]/30
                                        @elseif($order->status == 'completed') bg-green-500/20 text-green-500 border border-green-500/30
                                        @else bg-red-500/20 text-red-500 border border-red-500/30 @endif">
                                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                                        <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                </form>
                            </td>
                            <td class="px-8 py-5 text-right">
                                <a href="{{ route('admin.orders.show', $order->id) }}" class="inline-flex items-center justify-center px-4 py-2 bg-[#1E293B] rounded-xl text-[10px] font-black uppercase tracking-widest text-[#E2E8F0]/60 hover:bg-[#FF2A54] hover:text-white transition-all transform group-hover:scale-105 hover:shadow-[0_0_30px_rgba(255,42,84,0.3)] border border-[#1E293B] hover:border-[#FF2A54]">
                                    View Details
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-8 py-24 text-center">
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 bg-[#1E293B] rounded-full flex items-center justify-center mb-4 border border-[#FF2A54]/20">
                                        <i class="fas fa-box-open text-2xl text-[#E2E8F0]/30"></i>
                                    </div>
                                    <p class="text-[#E2E8F0]/50 font-bold italic">Belum ada data pesanan.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            {{-- Pagination Section --}}
            <div class="px-8 py-6 bg-[#0F172A]/50 border-t border-[#1E293B]">
                {{ $orders->links() }}
            </div>
        </div>

        {{-- Tip Footer --}}
        <div class="mt-8 text-center" data-aos="fade-up">
            <p class="text-[10px] font-black text-[#E2E8F0]/40 uppercase tracking-[0.3em]">
                <i class="fas fa-info-circle mr-2 text-[#FF2A54]"></i> Status updates will notify the customer automatically
            </p>
        </div>
    </div>
</div>
@endsection