@extends('layouts.app')

@section('title', 'Buat Pesanan Baru')

@section('content')
<style>
    .neon-border {
        border: 1px solid rgba(255, 42, 84, 0.2);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.05);
        transition: all 0.3s ease;
    }
    .neon-border:focus-within {
        border-color: #FF2A54;
        box-shadow: 0 0 40px rgba(255, 42, 84, 0.15);
    }
    .input-neon {
        transition: all 0.3s ease;
    }
    .input-neon:focus {
        border-color: #FF2A54;
        box-shadow: 0 0 30px rgba(255, 42, 84, 0.1);
    }
    .radio-card {
        border: 2px solid #1E293B;
        transition: all 0.3s ease;
    }
    .radio-card:hover {
        border-color: rgba(255, 42, 84, 0.3);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.05);
    }
    .peer:checked ~ .radio-card {
        border-color: #FF2A54;
        background: rgba(255, 42, 84, 0.1);
        box-shadow: 0 0 30px rgba(255, 42, 84, 0.15);
    }
</style>

<div class="min-h-screen bg-[#0F172A] py-12 pt-28">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-black text-[#E2E8F0] tracking-tight">Formulir Pesanan</h1>
            <p class="text-[#E2E8F0]/60">Silakan lengkapi detail masalah IT Anda di bawah ini.</p>
        </div>

        <div class="bg-[#1E293B] rounded-3xl shadow-xl overflow-hidden border border-[#1E293B] neon-border">
            <form action="{{ route('customer.orders.store') }}" method="POST" class="p-8">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Pilih Layanan</label>
                            <select name="service_id" id="service_id" class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] @error('service_id') border-red-500 @enderror">
                                <option value="">-- Pilih Layanan --</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" 
                                        {{ (old('service_id') ?? ($selectedService->id ?? '')) == $service->id ? 'selected' : '' }}>
                                        {{ $service->title }} ({{ $service->formatted_price }})
                                    </option>
                                @endforeach
                            </select>
                            @error('service_id') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Deskripsi Masalah</label>
                            <textarea name="problem_description" rows="5" placeholder="Contoh: Laptop saya mati total setelah terkena tumpahan air..."
                                class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] placeholder-[#E2E8F0]/40 focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] @error('problem_description') border-red-500 @enderror">{{ old('problem_description') }}</textarea>
                            @error('problem_description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Tanggal Kunjungan</label>
                                <input type="date" name="preferred_date" value="{{ old('preferred_date') }}"
                                    class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] @error('preferred_date') border-red-500 @enderror">
                                @error('preferred_date') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Waktu</label>
                                <input type="time" name="preferred_time" value="{{ old('preferred_time') }}"
                                    class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] @error('preferred_time') border-red-500 @enderror">
                                @error('preferred_time') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Alamat Lengkap</label>
                            <textarea name="address" rows="3" placeholder="Jl. Merdeka No. 123, Kelurahan..."
                                class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] placeholder-[#E2E8F0]/40 focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] @error('address') border-red-500 @enderror">{{ old('address') ?? auth()->user()->address }}</textarea>
                            @error('address') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Metode Pembayaran</label>
                            <div class="grid grid-cols-3 gap-3">
                                <label class="cursor-pointer">
                                    <input type="radio" name="payment_method" value="cash" class="peer hidden" checked>
                                    <div class="radio-card text-center p-3 rounded-xl border-2 border-[#1E293B] peer-checked:border-[#FF2A54] peer-checked:bg-[#FF2A54]/10 transition-all shadow-sm peer-checked:shadow-[0_0_30px_rgba(255,42,84,0.15)]">
                                        <i class="fas fa-money-bill-wave mb-1 block text-[#E2E8F0]/60 peer-checked:text-[#FF2A54]"></i>
                                        <span class="text-xs font-bold text-[#E2E8F0]/60 peer-checked:text-[#FF2A54]">Tunai</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="payment_method" value="transfer" class="peer hidden">
                                    <div class="radio-card text-center p-3 rounded-xl border-2 border-[#1E293B] peer-checked:border-[#7B2FBE] peer-checked:bg-[#7B2FBE]/10 transition-all shadow-sm peer-checked:shadow-[0_0_30px_rgba(123,47,190,0.15)]">
                                        <i class="fas fa-university mb-1 block text-[#E2E8F0]/60 peer-checked:text-[#7B2FBE]"></i>
                                        <span class="text-xs font-bold text-[#E2E8F0]/60 peer-checked:text-[#7B2FBE]">Transfer</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="payment_method" value="qris" class="peer hidden">
                                    <div class="radio-card text-center p-3 rounded-xl border-2 border-[#1E293B] peer-checked:border-[#7B2FBE] peer-checked:bg-[#7B2FBE]/10 transition-all shadow-sm peer-checked:shadow-[0_0_30px_rgba(123,47,190,0.15)]">
                                        <i class="fas fa-qrcode mb-1 block text-[#E2E8F0]/60 peer-checked:text-[#7B2FBE]"></i>
                                        <span class="text-xs font-bold text-[#E2E8F0]/60 peer-checked:text-[#7B2FBE]">QRIS</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-6 border-t border-[#1E293B] flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="text-sm text-[#E2E8F0]/50">
                        <i class="fas fa-info-circle mr-1"></i> Estimasi biaya akan dikonfirmasi kembali oleh teknisi.
                    </div>
                    <div class="flex gap-4 w-full md:w-auto">
                        <a href="{{ route('home') }}" class="flex-1 md:flex-none text-center px-8 py-3 rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0]/60 font-bold hover:bg-[#1E293B] hover:text-[#E2E8F0] transition">
                            Batal
                        </a>
                        <button type="submit" class="flex-1 md:flex-none px-12 py-3 rounded-xl bg-[#FF2A54] text-white font-black shadow-lg shadow-[#FF2A54]/30 hover:shadow-[0_0_40px_rgba(255,42,84,0.4)] hover:bg-[#FF2A54]/80 transition transform hover:-translate-y-1 border border-[#FF2A54]/50">
                            Konfirmasi Pesanan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection