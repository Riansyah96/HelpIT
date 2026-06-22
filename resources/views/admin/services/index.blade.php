@extends('layouts.app')

@section('title', 'Daftar Layanan')

@section('content')
<style>
    .neon-border {
        border: 1px solid rgba(255, 42, 84, 0.2);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.05);
    }
    .neon-border:hover {
        border-color: #FF2A54;
        box-shadow: 0 0 40px rgba(255, 42, 84, 0.15);
    }
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-[#E2E8F0] mb-4">Layanan Profesional</h1>
        <p class="text-xl text-[#E2E8F0]/60">Solusi IT terbaik untuk Anda.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($services as $service)
            <div class="bg-[#1E293B] rounded-2xl shadow-xl overflow-hidden border border-[#1E293B] neon-border transition-all hover:shadow-[0_0_40px_rgba(255,42,84,0.1)]">
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-[#0F172A] flex items-center justify-center">
                        <i class="fas fa-tools text-4xl text-[#E2E8F0]/20"></i>
                    </div>
                @endif

                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="px-3 py-1 bg-[#FF2A54]/20 text-[#FF2A54] text-xs font-semibold rounded-full uppercase border border-[#FF2A54]/30 shadow-[0_0_15px_rgba(255,42,84,0.1)]">
                            {{ $service->category }}
                        </span>
                        <span class="text-lg font-bold text-[#FF2A54] drop-shadow-[0_0_10px_rgba(255,42,84,0.2)]">
                            Rp {{ number_format($service->price, 0, ',', '.') }}
                        </span>
                    </div>
                    
                    <h3 class="text-xl font-bold text-[#E2E8F0] mb-2">{{ $service->title }}</h3>
                    <p class="text-[#E2E8F0]/60 text-sm mb-4 line-clamp-2">
                        {{ $service->description }}
                    </p>

                    <a href="{{ route('services.show', $service->id) }}" class="block w-full text-center bg-[#FF2A54] hover:bg-[#FF2A54]/80 text-white font-bold py-3 rounded-xl transition shadow-lg shadow-[#FF2A54]/30 hover:shadow-[0_0_40px_rgba(255,42,84,0.4)] border border-[#FF2A54]/50">
                        Detail Layanan
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <p class="text-[#E2E8F0]/50 text-lg">Belum ada layanan yang aktif.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-12">
        {{ $services->links() }}
    </div>
</div>
@endsection