@extends('layouts.app')

@section('title', 'Tambah Layanan Baru')

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

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8" data-aos="fade-down">
        <a href="{{ route('admin.services.index') }}" class="group text-[#FF2A54] hover:text-[#7B2FBE] text-sm font-medium transition flex items-center mb-2">
            <i class="fas fa-arrow-left mr-2 transition-transform group-hover:-translate-x-1"></i> 
            Kembali ke Daftar Layanan
        </a>
        <h1 class="text-3xl font-bold text-[#E2E8F0] tracking-tight">Tambah Layanan Baru</h1>
        <p class="text-[#E2E8F0]/60 mt-1">Lengkapi informasi di bawah untuk menambahkan jenis jasa baru ke sistem.</p>
    </div>

    <div class="bg-[#1E293B] rounded-2xl shadow-xl border border-[#1E293B] overflow-hidden neon-border" data-aos="fade-up">
        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" class="p-6 lg:p-8 space-y-8">
            @csrf

            <div>
                <h3 class="text-lg font-semibold text-[#E2E8F0] mb-4 flex items-center">
                    <i class="fas fa-info-circle mr-2 text-[#FF2A54]"></i> Informasi Utama
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-2">
                        <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Nama Layanan</label>
                        <input type="text" name="title" placeholder="Misal: Instalasi Windows 11" 
                            class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] transition" required>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Kategori</label>
                        <input type="text" name="category" placeholder="Contoh: Software, Hardware" 
                            class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] transition" required>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Harga (Rp)</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#E2E8F0]/50 font-medium">Rp</span>
                            <input type="number" name="price" placeholder="0" 
                                class="input-neon w-full pl-12 rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] transition" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Estimasi Durasi</label>
                        <input type="text" name="duration" placeholder="Contoh: 1-2 Jam" 
                            class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] transition">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Status Visibilitas</label>
                        <select name="is_active" class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] transition">
                            <option value="1">Aktif (Tampilkan di Website)</option>
                            <option value="0">Draft (Sembunyikan)</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="pt-6 border-t border-[#1E293B]">
                <h3 class="text-lg font-semibold text-[#E2E8F0] mb-4 flex items-center">
                    <i class="fas fa-align-left mr-2 text-[#7B2FBE]"></i> Detail & Media
                </h3>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">Deskripsi Layanan</label>
                        <textarea name="description" rows="4" placeholder="Jelaskan secara detail mengenai layanan ini..." 
                            class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] transition" required></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2">
                            Fitur Utama (Satu per baris)
                        </label>
                        <textarea name="features" rows="3" placeholder="Contoh:&#10;Gratis Konsultasi&#10;Bergaransi 7 Hari" 
                            class="input-neon w-full rounded-xl bg-[#0F172A] border border-[#1E293B] text-[#E2E8F0] focus:ring-2 focus:ring-[#FF2A54] focus:border-[#FF2A54] transition"></textarea>
                        <p class="text-xs text-[#E2E8F0]/40 mt-2 italic">*Fitur akan ditampilkan sebagai list poin di halaman detail.</p>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#E2E8F0]/80 mb-2 text-[#FF2A54]">Unggah Gambar Produk</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-[#1E293B] border-dashed rounded-xl hover:border-[#FF2A54] transition cursor-pointer neon-border">
                            <div class="space-y-1 text-center">
                                <i class="fas fa-image text-[#E2E8F0]/30 text-3xl mb-2"></i>
                                <div class="flex text-sm text-[#E2E8F0]/60">
                                    <label class="relative cursor-pointer bg-transparent rounded-md font-medium text-[#FF2A54] hover:text-[#7B2FBE] focus-within:outline-none">
                                        <span>Klik untuk upload</span>
                                        <input type="file" name="image" class="sr-only" onchange="previewImage(event)">
                                    </label>
                                    <p class="pl-1">atau drag and drop</p>
                                </div>
                                <p class="text-xs text-[#E2E8F0]/40">PNG, JPG, JPEG up to 2MB</p>
                            </div>
                        </div>
                        <img id="img-preview" class="mt-4 hidden h-32 rounded-lg border border-[#1E293B] shadow-[0_0_20px_rgba(255,42,84,0.1)]">
                    </div>
                </div>
            </div>

            <div class="pt-6">
                <button type="submit" class="w-full bg-[#FF2A54] hover:bg-[#FF2A54]/80 text-white font-extrabold py-4 rounded-xl transition duration-300 shadow-lg shadow-[#FF2A54]/30 hover:shadow-[0_0_40px_rgba(255,42,84,0.4)] transform hover:-translate-y-1 active:scale-95 flex items-center justify-center border border-[#FF2A54]/50">
                    <i class="fas fa-save mr-2"></i> Simpan Layanan Sekarang
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const output = document.getElementById('img-preview');
            output.src = reader.result;
            output.classList.remove('hidden');
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@if ($errors->any())
    <div class="bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded relative mb-4 shadow-[0_0_20px_rgba(239,68,68,0.1)]">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endpush
@endsection