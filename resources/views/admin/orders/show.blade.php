@extends('layouts.app')

@section('title', 'Order Details - #' . $order->order_code)

@section('content')
<style>
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
    .dark .glass-card {
        background: rgba(15, 23, 42, 0.9);
        border: 1px solid rgba(255, 42, 84, 0.15);
    }
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
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Navigation & Title --}}
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div data-aos="fade-right">
                <a href="{{ route('admin.orders.index') }}" class="text-[#FF2A54] font-bold text-xs uppercase tracking-widest flex items-center mb-2 hover:text-[#7B2FBE] transition hover:underline">
                    <i class="fas fa-arrow-left mr-2"></i> Back to All Orders
                </a>
                <h1 class="text-3xl font-black text-[#E2E8F0] tracking-tighter italic uppercase">
                    Order <span class="text-[#FF2A54] drop-shadow-[0_0_20px_rgba(255,42,84,0.3)]">Details</span>
                </h1>
            </div>
            <div class="flex gap-2" data-aos="fade-left">
                <span class="px-5 py-2 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-sm border
                    @if($order->status == 'pending') bg-[#7B2FBE]/20 text-[#7B2FBE] border-[#7B2FBE]/30 shadow-[0_0_20px_rgba(123,47,190,0.2)]
                    @elseif($order->status == 'processing') bg-[#FF2A54]/20 text-[#FF2A54] border-[#FF2A54]/30 shadow-[0_0_20px_rgba(255,42,84,0.2)]
                    @elseif($order->status == 'completed') bg-green-500/20 text-green-500 border-green-500/30 shadow-[0_0_20px_rgba(34,197,94,0.2)]
                    @else bg-red-500/20 text-red-500 border-red-500/30 shadow-[0_0_20px_rgba(239,68,68,0.2)] @endif">
                    Current Status: {{ $order->status }}
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Left Column: Info --}}
            <div class="lg:col-span-2 space-y-6" data-aos="fade-up">
                
                {{-- Order Info Card --}}
                <div class="glass-card rounded-[2.5rem] p-8 shadow-xl neon-border">
                    <div class="flex justify-between items-start mb-6 border-b border-[#1E293B] pb-6">
                        <div>
                            <p class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">Order ID</p>
                            <h2 class="text-xl font-black text-[#FF2A54] drop-shadow-[0_0_15px_rgba(255,42,84,0.2)]">#{{ $order->order_code }}</h2>
                        </div>
                        <div class="text-right">
                            <p class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">Date Created</p>
                            <p class="text-sm font-bold text-[#E2E8F0]">{{ $order->created_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xs font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-3">Service Information</h3>
                            <div class="bg-[#FF2A54]/10 p-4 rounded-2xl border border-[#FF2A54]/20">
                                <p class="text-sm font-bold text-[#E2E8F0]">{{ $order->service->title }}</p>
                                <p class="text-xs text-[#E2E8F0]/60 mt-1 uppercase font-bold">{{ $order->service->category }}</p>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xs font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-3">Problem Description</h3>
                            <p class="text-sm text-[#E2E8F0]/70 italic leading-relaxed">
                                "{{ $order->problem_description }}"
                            </p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-xs font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-3">Pickup/Visit Schedule</h3>
                        <div class="flex items-center gap-4 text-[#E2E8F0]">
                            <div class="flex items-center gap-2 bg-[#1E293B] px-4 py-2 rounded-xl border border-[#FF2A54]/20">
                                <i class="far fa-calendar-alt text-[#FF2A54]"></i>
                                <span class="text-xs font-bold">{{ \Carbon\Carbon::parse($order->preferred_date)->format('d F Y') }}</span>
                            </div>
                            <div class="flex items-center gap-2 bg-[#1E293B] px-4 py-2 rounded-xl border border-[#FF2A54]/20">
                                <i class="far fa-clock text-[#FF2A54]"></i>
                                <span class="text-xs font-bold">{{ $order->preferred_time }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Admin Notes Form --}}
                <div class="glass-card rounded-[2.5rem] p-8 shadow-xl neon-border">
                    <h3 class="text-xs font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-4">Admin Internal Notes</h3>
                    <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <textarea name="admin_notes" rows="3" class="w-full bg-[#0F172A] border border-[#1E293B] rounded-2xl text-sm focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] text-[#E2E8F0] mb-4" placeholder="Tambahkan catatan teknis di sini...">{{ $order->admin_notes }}</textarea>
                        
                        <div class="flex items-center justify-between">
                            <select name="status" class="bg-[#0F172A] border border-[#1E293B] rounded-xl text-xs font-bold text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54]">
                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                            <button type="submit" class="bg-[#FF2A54] text-white px-6 py-2 rounded-xl text-xs font-black uppercase tracking-widest hover:bg-[#FF2A54]/80 transition shadow-lg shadow-[#FF2A54]/30 hover:shadow-[0_0_30px_rgba(255,42,84,0.4)]">
                                Update Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Right Column: Client & Payment --}}
            <div class="space-y-6" data-aos="fade-left">
                {{-- Client Info --}}
                <div class="glass-card rounded-[2.5rem] p-8 shadow-xl neon-border">
                    <h3 class="text-xs font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-6">Customer Info</h3>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#FF2A54] to-[#7B2FBE] flex items-center justify-center text-white font-black shadow-[0_0_20px_rgba(255,42,84,0.3)]">
                            {{ substr($order->user->name, 0, 2) }}
                        </div>
                        <div>
                            <p class="text-sm font-black text-[#E2E8F0]">{{ $order->user->name }}</p>
                            <p class="text-[10px] text-[#E2E8F0]/50 font-bold uppercase tracking-tight">{{ $order->user->email }}</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <p class="text-[10px] font-black text-[#E2E8F0]/50 uppercase mb-1">Shipping Address</p>
                            <p class="text-xs text-[#E2E8F0]/70 leading-relaxed font-medium">{{ $order->address }}</p>
                        </div>
                    </div>
                </div>

                {{-- Payment Info --}}
                <div class="bg-gradient-to-br from-[#FF2A54] to-[#7B2FBE] rounded-[2.5rem] p-8 shadow-xl text-white relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
                    <h3 class="text-xs font-black text-white/70 uppercase tracking-widest mb-6 relative z-10">Payment Summary</h3>
                    <div class="space-y-4 relative z-10">
                        <div class="flex justify-between items-center">
                            <span class="text-xs font-bold text-white/80">Method</span>
                            <span class="text-xs font-black uppercase tracking-widest">{{ $order->payment_method }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-xs font-bold text-white/80">Status</span>
                            <span class="px-3 py-1 bg-white/20 rounded-lg text-[10px] font-black uppercase tracking-widest shadow-[0_0_15px_rgba(255,255,255,0.1)]">
                                {{ $order->payment_status }}
                            </span>
                        </div>
                        <div class="pt-4 border-t border-white/10 flex justify-between items-end">
                            <span class="text-xs font-bold text-white/80">Total Price</span>
                            <span class="text-2xl font-black italic tracking-tighter drop-shadow-[0_0_20px_rgba(255,255,255,0.2)]">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection