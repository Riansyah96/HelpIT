@extends('layouts.app')

@section('title', 'Detail User - ' . $user->name)

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
    .avatar-gradient {
        background: linear-gradient(135deg, #FF2A54, #7B2FBE);
        box-shadow: 0 0 30px rgba(255, 42, 84, 0.3);
    }
    .neon-glow-hover:hover {
        box-shadow: 0 0 40px rgba(123, 47, 190, 0.3);
    }
    .status-badge {
        box-shadow: 0 0 15px rgba(255, 42, 84, 0.1);
    }
    .status-badge:hover {
        box-shadow: 0 0 30px rgba(255, 42, 84, 0.2);
    }
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8" data-aos="fade-down">
        <a href="{{ route('admin.users.index') }}" class="text-[#FF2A54] hover:text-[#7B2FBE] text-sm font-medium flex items-center mb-2 transition-all hover:drop-shadow-[0_0_10px_rgba(255,42,84,0.3)]">
            <i class="fas fa-arrow-left mr-2"></i> Kembali ke Daftar User
        </a>
        <h1 class="text-3xl font-bold text-[#E2E8F0] tracking-tight">Profil Pelanggan</h1>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="space-y-6" data-aos="fade-right">
            <div class="bg-[#1E293B] rounded-2xl shadow-xl p-6 border border-[#1E293B] neon-border">
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 avatar-gradient rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-[0_0_30px_rgba(255,42,84,0.3)] mb-4">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <h2 class="text-xl font-bold text-[#E2E8F0]">{{ $user->name }}</h2>
                    <p class="text-[#E2E8F0]/60 text-sm">{{ $user->email }}</p>
                    
                    <div class="mt-4 flex gap-2 flex-wrap justify-center">
                        <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest border 
                            {{ $user->is_active ? 'bg-green-500/20 text-green-500 border-green-500/30 shadow-[0_0_15px_rgba(34,197,94,0.2)]' : 'bg-red-500/20 text-red-500 border-red-500/30 shadow-[0_0_15px_rgba(239,68,68,0.2)]' }}">
                            {{ $user->is_active ? 'Aktif' : 'Nonaktif' }}
                        </span>
                        <span class="px-3 py-1 bg-[#7B2FBE]/20 text-[#7B2FBE] border border-[#7B2FBE]/30 rounded-full text-[10px] font-black uppercase tracking-widest shadow-[0_0_15px_rgba(123,47,190,0.2)]">
                            {{ $user->role }}
                        </span>
                    </div>
                </div>

                <div class="mt-8 pt-8 border-t border-[#1E293B] space-y-4">
                    <div>
                        <label class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">No. Telepon</label>
                        <p class="text-[#E2E8F0]">{{ $user->phone ?? 'Tidak tersedia' }}</p>
                    </div>
                    <div>
                        <label class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">Perusahaan</label>
                        <p class="text-[#E2E8F0]">{{ $user->company ?? 'Individu' }}</p>
                    </div>
                    <div>
                        <label class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">Alamat</label>
                        <p class="text-[#E2E8F0] text-sm">{{ $user->address ?? 'Alamat belum diisi' }}</p>
                    </div>
                    <div>
                        <label class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest">Member Sejak</label>
                        <p class="text-[#E2E8F0] text-sm">{{ $user->created_at->format('d F Y') }}</p>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="{{ route('admin.users.edit', $user) }}" 
                       class="w-full inline-flex justify-center items-center px-4 py-3 bg-[#0F172A] border border-[#7B2FBE]/30 hover:border-[#7B2FBE] text-[#E2E8F0] hover:text-white rounded-xl font-bold transition-all hover:bg-[#7B2FBE] hover:shadow-[0_0_40px_rgba(123,47,190,0.4)]">
                        <i class="fas fa-edit mr-2"></i> Edit Profil
                    </a>
                </div>
            </div>
        </div>

        <div class="lg:col-span-2 space-y-6" data-aos="fade-left">
            <div class="bg-[#1E293B] rounded-2xl shadow-xl border border-[#1E293B] overflow-hidden neon-border">
                <div class="px-6 py-4 border-b border-[#1E293B] bg-[#0F172A]/50">
                    <h3 class="font-bold text-[#E2E8F0] flex items-center">
                        <i class="fas fa-shopping-bag mr-2 text-[#FF2A54] drop-shadow-[0_0_10px_rgba(255,42,84,0.3)]"></i> Riwayat Pesanan
                    </h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-[10px] font-black text-[#E2E8F0]/50 uppercase tracking-widest border-b border-[#1E293B]">
                                <th class="px-6 py-4">ID Pesanan</th>
                                <th class="px-6 py-4">Layanan</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#1E293B]">
                            @forelse($user->orders as $order)
                            <tr class="hover:bg-[#FF2A54]/5 transition-all group">
                                <td class="px-6 py-4 font-mono text-xs text-[#FF2A54] drop-shadow-[0_0_10px_rgba(255,42,84,0.1)] group-hover:drop-shadow-[0_0_20px_rgba(255,42,84,0.3)] transition-all">
                                    #{{ $order->id }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-[#E2E8F0] group-hover:text-[#FF2A54] transition-colors">
                                    {{ $order->service->title }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-md text-[10px] font-black uppercase tracking-widest border
                                        @if($order->status === 'completed') bg-green-500/20 text-green-500 border-green-500/30 shadow-[0_0_15px_rgba(34,197,94,0.2)]
                                        @elseif($order->status === 'pending') bg-[#7B2FBE]/20 text-[#7B2FBE] border-[#7B2FBE]/30 shadow-[0_0_15px_rgba(123,47,190,0.2)]
                                        @elseif($order->status === 'processing') bg-[#FF2A54]/20 text-[#FF2A54] border-[#FF2A54]/30 shadow-[0_0_15px_rgba(255,42,84,0.2)]
                                        @else bg-red-500/20 text-red-500 border-red-500/30 shadow-[0_0_15px_rgba(239,68,68,0.2)] @endif
                                    ">
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm font-bold text-[#E2E8F0] group-hover:text-[#FF2A54] transition-colors">
                                    Rp {{ number_format($order->total_price, 0, ',', '.') }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-12 text-center text-[#E2E8F0]/50">
                                    <i class="fas fa-box-open text-3xl mb-3 block opacity-20"></i>
                                    User ini belum pernah melakukan pemesanan.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection