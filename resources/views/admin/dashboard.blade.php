@extends('layouts.app')

@section('title', 'Admin Dashboard - HelpIT Control')

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
        box-shadow: 0 0 30px rgba(255, 42, 84, 0.15), inset 0 0 30px rgba(255, 42, 84, 0.05);
    }
    .status-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23E2E8F0' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
    }
    .neon-border {
        border: 1px solid rgba(255, 42, 84, 0.3);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.05);
    }
    .neon-border:hover {
        border-color: #FF2A54;
        box-shadow: 0 0 40px rgba(255, 42, 84, 0.2), inset 0 0 20px rgba(255, 42, 84, 0.05);
    }
</style>

<div class="min-h-screen bg-[#0F172A] pb-12 pt-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
            <div data-aos="fade-right">
                <nav class="flex mb-3">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs font-black uppercase tracking-widest">
                        <li class="text-[#FF2A54]">Admin</li>
                        <li class="text-[#E2E8F0]/50"><i class="fas fa-chevron-right mx-2 text-[8px]"></i></li>
                        <li class="text-[#E2E8F0]/50">Control Panel</li>
                    </ol>
                </nav>
                <h1 class="text-4xl font-black text-[#E2E8F0] tracking-tighter">
                    System <span class="text-[#FF2A54] drop-shadow-[0_0_20px_rgba(255,42,84,0.3)]">Overview</span>
                </h1>
            </div>
            <div class="flex items-center gap-4" data-aos="fade-left">
                <div class="text-right hidden sm:block">
                    <p class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">Server Status</p>
                    <p class="text-sm font-bold text-green-500 flex items-center justify-end">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span> Operational
                    </p>
                </div>
                <div class="h-10 w-[1px] bg-[#1E293B] hidden sm:block"></div>
                <span class="px-5 py-2.5 bg-[#1E293B] border border-[#1E293B] rounded-2xl text-sm font-bold text-[#E2E8F0] shadow-sm neon-border">
                    <i class="fas fa-calendar-alt mr-2 text-[#FF2A54]"></i>{{ now()->translatedFormat('d F Y') }}
                </span>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12" data-aos="fade-up">
            <div class="glass-card p-8 rounded-[2.5rem] relative overflow-hidden group transition-all hover:shadow-2xl hover:shadow-[#FF2A54]/20 neon-border">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-[#FF2A54]/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <p class="text-xs font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-2 italic">Total Revenue</p>
                <h3 class="text-2xl font-black text-[#E2E8F0] mb-4">Rp {{ number_format($stats['total_revenue'], 0, ',', '.') }}</h3>
                <div class="flex items-center text-[10px] font-black text-[#FF2A54] uppercase">
                    <i class="fas fa-wallet mr-2"></i> Paid Invoices
                </div>
            </div>
            
            <div class="glass-card p-8 rounded-[2.5rem] relative overflow-hidden group transition-all hover:shadow-2xl hover:shadow-[#7B2FBE]/20 neon-border">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-[#7B2FBE]/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <p class="text-xs font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-2 italic">Pending Orders</p>
                <h3 class="text-4xl font-black text-[#E2E8F0] mb-4">{{ number_format($stats['pending_orders']) }}</h3>
                <div class="flex items-center text-[10px] font-black text-[#7B2FBE] uppercase">
                    <i class="fas fa-clock mr-2"></i> Needs Action
                </div>
            </div>

            <div class="glass-card p-8 rounded-[2.5rem] relative overflow-hidden group transition-all hover:shadow-2xl hover:shadow-[#FF2A54]/20 neon-border">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-[#FF2A54]/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <p class="text-xs font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-2 italic">Total Customers</p>
                <h3 class="text-4xl font-black text-[#E2E8F0] mb-4">{{ number_format($stats['total_customers']) }}</h3>
                <div class="flex items-center text-[10px] font-black text-[#FF2A54] uppercase">
                    <i class="fas fa-users mr-2"></i> Registered Users
                </div>
            </div>

            <div class="glass-card p-8 rounded-[2.5rem] relative overflow-hidden group transition-all hover:shadow-2xl hover:shadow-[#7B2FBE]/20 neon-border">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-[#7B2FBE]/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <p class="text-xs font-black text-[#E2E8F0]/50 uppercase tracking-widest mb-2 italic">Today's Orders</p>
                <h3 class="text-4xl font-black text-[#E2E8F0] mb-4">{{ number_format($stats['today_orders']) }}</h3>
                <div class="flex items-center text-[10px] font-black text-[#7B2FBE] uppercase">
                    <i class="fas fa-calendar-day mr-2"></i> New Today
                </div>
            </div>
        </div>

        <!-- Tabel Orders dan Sidebar -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-[#1E293B] rounded-[2.5rem] border border-[#1E293B] shadow-xl overflow-hidden neon-border">
                    <div class="px-8 py-6 border-b border-[#1E293B] flex justify-between items-center">
                        <h2 class="text-lg font-black text-[#E2E8F0] italic tracking-tight">Recent Orders</h2>
                        <a href="{{ route('admin.orders.index') }}" class="text-[10px] font-black uppercase text-[#FF2A54] hover:text-[#7B2FBE] transition-all underline decoration-2 underline-offset-4">View All</a>
                    </div>
                    <div class="overflow-x-auto hide-scrollbar">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-[10px] font-black uppercase tracking-[0.2em] text-[#E2E8F0]/50 border-b border-[#1E293B]">
                                    <th class="px-8 py-5">Client</th>
                                    <th class="px-8 py-5">Status Management</th>
                                    <th class="px-8 py-5 text-right">Details</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-[#1E293B]">
                                @forelse($recentOrders as $order)
                                <tr class="hover:bg-[#FF2A54]/5 transition-colors">
                                    <td class="px-8 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-2xl bg-[#1E293B] flex items-center justify-center text-[#E2E8F0] text-xs font-black border border-[#FF2A54]/20">
                                                {{ substr($order->user->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold text-[#E2E8F0] leading-none">{{ $order->user->name }}</p>
                                                <p class="text-[10px] text-[#FF2A54] font-black mt-1 uppercase">{{ $order->service->title }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5">
                                        <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST" class="flex items-center gap-2">
                                            @csrf @method('PATCH')
                                            <select name="status" onchange="this.form.submit()" 
                                                class="status-select text-[10px] font-black uppercase tracking-widest px-4 py-2 rounded-xl border-none focus:ring-2 focus:ring-[#FF2A54] shadow-sm
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
                                        <a href="{{ route('admin.orders.show', $order->id) }}" class="inline-flex items-center justify-center w-8 h-8 rounded-xl bg-[#1E293B] text-[#E2E8F0]/50 hover:bg-[#FF2A54] hover:text-white transition-all hover:shadow-[0_0_20px_rgba(255,42,84,0.4)]">
                                            <i class="fas fa-arrow-right text-[10px]"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="3" class="px-8 py-10 text-center text-[#E2E8F0]/50 text-sm font-bold italic">No recent orders yet.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="space-y-6" data-aos="fade-left" data-aos-delay="200">
                <div class="glass-card p-8 rounded-[2.5rem] shadow-xl border border-[#FF2A54]/20 neon-border">
                    <h2 class="text-sm font-black text-[#E2E8F0] uppercase tracking-widest mb-6 italic">Quick Management</h2>
                    <div class="grid grid-cols-1 gap-3">
                        <a href="{{ route('admin.services.create') }}" class="flex items-center p-4 bg-[#FF2A54] text-white rounded-2xl hover:bg-[#FF2A54]/80 transition transform hover:-translate-y-1 shadow-lg shadow-[#FF2A54]/30 hover:shadow-[0_0_30px_rgba(255,42,84,0.5)] border border-[#FF2A54]/50">
                            <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-plus"></i>
                            </div>
                            <span class="font-black text-sm">Add New Service</span>
                        </a>
                        <a href="{{ route('admin.users.index') }}" class="flex items-center p-4 bg-[#1E293B] border border-[#7B2FBE]/30 text-[#E2E8F0] rounded-2xl hover:border-[#7B2FBE] transition transform hover:-translate-y-1 shadow-sm hover:shadow-[0_0_30px_rgba(123,47,190,0.2)]">
                            <div class="w-10 h-10 bg-[#1E293B] rounded-xl flex items-center justify-center mr-4 text-[#7B2FBE]">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <span class="font-black text-sm">User Directory</span>
                        </a>
                    </div>
                </div>

                <div class="bg-[#1E293B] p-8 rounded-[2.5rem] shadow-xl border border-[#1E293B] neon-border">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-sm font-black text-[#E2E8F0] uppercase tracking-widest italic">Active Catalog</h2>
                        <span class="text-[10px] font-bold text-[#FF2A54] bg-[#FF2A54]/10 px-2 py-0.5 rounded-lg border border-[#FF2A54]/20">{{ $stats['total_services'] }}</span>
                    </div>
                    <div class="space-y-3 max-h-[300px] overflow-y-auto hide-scrollbar">
                        @foreach($services as $service)
                        <div class="flex items-center justify-between p-3 rounded-2xl bg-[#0F172A]/50 border border-transparent hover:border-[#FF2A54]/30 transition-all group">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full {{ $service->is_active ? 'bg-green-500 shadow-[0_0_10px_rgba(34,197,94,0.5)]' : 'bg-red-500' }}"></div>
                                <span class="text-xs font-bold text-[#E2E8F0] truncate w-32">{{ $service->title }}</span>
                            </div>
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="text-[#E2E8F0]/30 group-hover:text-[#7B2FBE] transition-colors hover:drop-shadow-[0_0_8px_rgba(123,47,190,0.5)]">
                                <i class="fas fa-edit text-[10px]"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-6 pt-6 border-t border-[#1E293B]">
                        <a href="{{ route('admin.services.index') }}" class="block text-center py-3 rounded-xl bg-[#FF2A54] text-white text-[10px] font-black uppercase tracking-[0.2em] hover:bg-[#FF2A54]/80 transition shadow-lg shadow-[#FF2A54]/20 hover:shadow-[0_0_30px_rgba(255,42,84,0.3)]">
                            Manage All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection