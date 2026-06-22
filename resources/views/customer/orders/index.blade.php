@extends('layouts.app')

@section('title', 'Pesanan Saya')

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
        box-shadow: 0 0 15px rgba(255, 42, 84, 0.3);
    }
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 pt-24">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-[#E2E8F0] tracking-tight">Daftar Pesanan Saya</h1>
        <p class="text-[#E2E8F0]/60">Pantau status perbaikan dan layanan IT Anda.</p>
    </div>

    <div class="bg-[#1E293B] shadow-xl rounded-2xl overflow-hidden border border-[#1E293B] neon-border">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-[#0F172A]/50 text-[#E2E8F0]/50 uppercase text-[10px] font-black tracking-widest">
                    <tr>
                        <th class="px-6 py-4">ID Order</th>
                        <th class="px-6 py-4">Layanan</th>
                        <th class="px-6 py-4">Harga</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#1E293B]">
                    @forelse($orders as $order)
                    <tr class="hover:bg-[#FF2A54]/5 transition-all group">
                        <td class="px-6 py-4 font-bold text-[#FF2A54] drop-shadow-[0_0_10px_rgba(255,42,84,0.1)] group-hover:drop-shadow-[0_0_20px_rgba(255,42,84,0.3)] transition-all">
                            #{{ $order->id }}
                        </td>
                        <td class="px-6 py-4 text-[#E2E8F0] group-hover:text-[#FF2A54] transition-colors">
                            {{ $order->service->title ?? 'Layanan Terhapus' }}
                        </td>
                        <td class="px-6 py-4 font-bold text-[#E2E8F0] group-hover:text-[#FF2A54] transition-colors">
                            Rp {{ number_format($order->total_price, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest border
                                @if($order->status == 'pending') bg-[#7B2FBE]/20 text-[#7B2FBE] border-[#7B2FBE]/30 shadow-[0_0_15px_rgba(123,47,190,0.2)]
                                @elseif($order->status == 'processing') bg-[#FF2A54]/20 text-[#FF2A54] border-[#FF2A54]/30 shadow-[0_0_15px_rgba(255,42,84,0.2)]
                                @elseif($order->status == 'completed') bg-green-500/20 text-green-500 border-green-500/30 shadow-[0_0_15px_rgba(34,197,94,0.2)]
                                @else bg-red-500/20 text-red-500 border-red-500/30 shadow-[0_0_15px_rgba(239,68,68,0.2)] @endif
                            ">
                                {{ strtoupper($order->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-[#E2E8F0]/50">{{ $order->created_at->format('d M Y') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center">
                                <i class="fas fa-box-open text-4xl text-[#E2E8F0]/20 mb-4"></i>
                                <p class="text-[#E2E8F0]/50">Anda belum memiliki pesanan.</p>
                                <a href="{{ route('services.index') }}" class="mt-4 text-[#FF2A54] font-bold hover:text-[#7B2FBE] transition-all hover:drop-shadow-[0_0_20px_rgba(255,42,84,0.3)]">
                                    Pesan Layanan Sekarang
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-6">
        {{ $orders->links() }}
    </div>
</div>
@endsection