@extends('layouts.app')

@section('title', 'Edit Layanan')

@section('content')
<style>
    .neon-border {
        border: 1px solid rgba(255, 42, 84, 0.2);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.05);
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
</style>

<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('admin.services.index') }}" class="text-[#FF2A54] hover:text-[#7B2FBE] transition">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
        <h1 class="text-2xl font-bold text-[#E2E8F0] mt-2">Edit Layanan: {{ $service->title }}</h1>
    </div>

    <div class="bg-[#1E293B] rounded-xl shadow-lg p-6 border border-[#1E293B] neon-border">
        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-[#E2E8F0]/80 mb-2">Nama Layanan</label>
                    <input type="text" name="title" value="{{ old('title', $service->title) }}" class="input-neon w-full rounded-lg bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54]" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-[#E2E8F0]/80 mb-2">Kategori</label>
                    <input type="text" name="category" value="{{ old('category', $service->category) }}" class="input-neon w-full rounded-lg bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54]" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-[#E2E8F0]/80 mb-2">Harga (Rp)</label>
                    <input type="number" name="price" value="{{ old('price', (int)$service->price) }}" class="input-neon w-full rounded-lg bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54]" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-[#E2E8F0]/80 mb-2">Durasi</label>
                    <input type="text" name="duration" value="{{ old('duration', $service->duration) }}" class="input-neon w-full rounded-lg bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54]">
                </div>

                <div>
                    <label class="block text-sm font-medium text-[#E2E8F0]/80 mb-2">Status</label>
                    <select name="is_active" class="input-neon w-full rounded-lg bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54]">
                        <option value="1" {{ $service->is_active ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ !$service->is_active ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-[#E2E8F0]/80 mb-2">Deskripsi</label>
                    <textarea name="description" rows="4" class="input-neon w-full rounded-lg bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54]" required>{{ old('description', $service->description) }}</textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-[#E2E8F0]/80 mb-2">Fitur (Satu per baris)</label>
                    <textarea name="features" rows="4" class="input-neon w-full rounded-lg bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54]">{{ old('features', is_array($service->features) ? implode("\n", $service->features) : '') }}</textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-[#E2E8F0]/80 mb-2">Gambar</label>
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" class="h-20 mb-2 rounded border border-[#FF2A54]/30 shadow-[0_0_20px_rgba(255,42,84,0.1)]">
                    @endif
                    <input type="file" name="image" class="input-neon w-full rounded-lg bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54]">
                </div>
            </div>

            <button type="submit" class="mt-6 w-full bg-[#FF2A54] hover:bg-[#FF2A54]/80 text-white py-3 rounded-lg font-bold transition shadow-lg shadow-[#FF2A54]/30 hover:shadow-[0_0_40px_rgba(255,42,84,0.4)] border border-[#FF2A54]/50">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>
@endsection