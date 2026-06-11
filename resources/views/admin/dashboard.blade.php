@extends('layouts.app')

@section('title', 'Admin Dashboard - HelpIT Control')

@section('content')
<style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .glass-card {
        background: rgba(30, 41, 59, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
    .status-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
    }
</style>

<div class="min-h-screen bg-background pb-12 pt-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
            <div data-aos="fade-right">
                <nav class="flex mb-3">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs font-black uppercase tracking-widest">
                        <li class="text-primary">Admin</li>
                        <li class="text-text/50"><i class="fas fa-chevron-right mx-2 text-[8px]"></i></li>
                        <li class="text-text/50">Control Panel</li>
                    </ol>
                </nav>
                <h1 class="text-4xl font-black text-white tracking-tighter">
                    System <span class="text-primary">Overview</span>
                </h1>
            </div>
            <div class="flex items-center gap-4" data-aos="fade-left">
                <div class="text-right hidden sm:block">
                    <p class="text-[10px] font-black text-text/50 uppercase tracking-widest">Server Status</p>
                    <p class="text-sm font-bold text-green-500 flex items-center justify-end">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span> Operational
                    </p>
                </div>
                <div class="h-10 w-[1px] bg-surface hidden sm:block"></div>
                <span class="px-5 py-2.5 bg-surface border border-surface rounded-2xl text-sm font-bold text-text shadow-sm">
                    <i class="fas fa-calendar-alt mr-2 text-primary"></i>{{ now()->translatedFormat('d F Y') }}
                </span>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12" data-aos="fade-up">
            <div class="glass-card p-8 rounded-[2.5rem] relative overflow-hidden group transition-all hover:shadow-2xl hover:shadow-primary/10">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-primary/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <p class="text-xs font-black text-text/50 uppercase tracking-widest mb-2 italic">Total Revenue</p>
                <h3 class="text-2xl font-black text-white mb-4">Rp {{ number_format($stats['total_revenue'], 0, ',', '.') }}</h3>
                <div class="flex items-center text-[10px] font-black text-primary uppercase">
                    <i class="fas fa-wallet mr-2"></i> Paid Invoices
                </div>
            </div>
            <!-- Pending Orders, Customers, Today's Orders dengan warna serupa (pending gunakan accent) -->
            <div class="glass-card p-8 rounded-[2.5rem] relative overflow-hidden group transition-all hover:shadow-2xl hover:shadow-accent/10">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-accent/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <p class="text-xs font-black text-text/50 uppercase tracking-widest mb-2 italic">Pending Orders</p>
                <h3 class="text-4xl font-black text-white mb-4">{{ number_format($stats['pending_orders']) }}</h3>
                <div class="flex items-center text-[10px] font-black text-accent uppercase">
                    <i class="fas fa-clock mr-2"></i> Needs Action
                </div>
            </div>
            <!-- Sisa stat lainnya -->
        </div>

        <!-- Tabel Orders dan Sidebar -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-surface rounded-[2.5rem] border border-surface shadow-xl overflow-hidden">
                    <div class="px-8 py-6 border-b border-surface flex justify-between items-center">
                        <h2 class="text-lg font-black text-white italic tracking-tight">Recent Orders</h2>
                        <a href="{{ route('admin.orders.index') }}" class="text-[10px] font-black uppercase text-primary hover:tracking-widest transition-all underline decoration-2 underline-offset-4">View All</a>
                    </div>
                    <div class="overflow-x-auto hide-scrollbar">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-[10px] font-black uppercase tracking-[0.2em] text-text/50 border-b border-surface">
                                    <th class="px-8 py-5">Client</th>
                                    <th class="px-8 py-5">Status Management</th>
                                    <th class="px-8 py-5 text-right">Details</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-surface">
                                @forelse($recentOrders as $order)
                                <tr class="hover:bg-primary/5 transition-colors">
                                    <td class="px-8 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-2xl bg-surface/80 flex items-center justify-center text-text text-xs font-black">
                                                {{ substr($order->user->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold text-white leading-none">{{ $order->user->name }}</p>
                                                <p class="text-[10px] text-primary font-black mt-1 uppercase">{{ $order->service->title }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5">
                                        <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST" class="flex items-center gap-2">
                                            @csrf @method('PATCH')
                                            <select name="status" onchange="this.form.submit()" 
                                                class="status-select text-[10px] font-black uppercase tracking-widest px-4 py-2 rounded-xl border-none focus:ring-2 focus:ring-primary shadow-sm
                                                @if($order->status == 'pending') bg-accent/20 text-accent
                                                @elseif($order->status == 'processing') bg-primary/20 text-primary
                                                @elseif($order->status == 'completed') bg-green-500/20 text-green-500
                                                @else bg-red-500/20 text-red-500 @endif">
                                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                                                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="px-8 py-5 text-right">
                                        <a href="{{ route('admin.orders.show', $order->id) }}" class="inline-flex items-center justify-center w-8 h-8 rounded-xl bg-surface text-text/50 hover:bg-primary hover:text-white transition-all">
                                            <i class="fas fa-arrow-right text-[10px]"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="3" class="px-8 py-10 text-center text-text/50 text-sm font-bold italic">No recent orders yet.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="space-y-6" data-aos="fade-left" data-aos-delay="200">
                <div class="glass-card p-8 rounded-[2.5rem] shadow-xl border border-white/5">
                    <h2 class="text-sm font-black text-white uppercase tracking-widest mb-6 italic">Quick Management</h2>
                    <div class="grid grid-cols-1 gap-3">
                        <a href="{{ route('admin.services.create') }}" class="flex items-center p-4 bg-primary text-white rounded-2xl hover:bg-primary/80 transition transform hover:-translate-y-1 shadow-lg shadow-primary/20">
                            <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-plus"></i>
                            </div>
                            <span class="font-black text-sm">Add New Service</span>
                        </a>
                        <a href="{{ route('admin.users.index') }}" class="flex items-center p-4 bg-surface border border-surface text-text rounded-2xl hover:border-primary transition transform hover:-translate-y-1 shadow-sm">
                            <div class="w-10 h-10 bg-surface/80 rounded-xl flex items-center justify-center mr-4 text-primary">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <span class="font-black text-sm">User Directory</span>
                        </a>
                    </div>
                </div>

                <div class="bg-surface p-8 rounded-[2.5rem] shadow-xl border border-surface">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-sm font-black text-white uppercase tracking-widest italic">Active Catalog</h2>
                        <span class="text-[10px] font-bold text-primary bg-primary/10 px-2 py-0.5 rounded-lg">{{ $stats['total_services'] }}</span>
                    </div>
                    <div class="space-y-3 max-h-[300px] overflow-y-auto hide-scrollbar">
                        @foreach($services as $service)
                        <div class="flex items-center justify-between p-3 rounded-2xl bg-surface/50 border border-transparent hover:border-primary/30 transition-all group">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full {{ $service->is_active ? 'bg-green-500' : 'bg-red-500' }}"></div>
                                <span class="text-xs font-bold text-text truncate w-32">{{ $service->title }}</span>
                            </div>
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="text-text/30 group-hover:text-accent transition-colors">
                                <i class="fas fa-edit text-[10px]"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-6 pt-6 border-t border-surface">
                        <a href="{{ route('admin.services.index') }}" class="block text-center py-3 rounded-xl bg-white text-background text-[10px] font-black uppercase tracking-[0.2em] hover:opacity-80 transition">
                            Manage All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection