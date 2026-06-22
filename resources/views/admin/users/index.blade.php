@extends('layouts.app')

@section('title', 'Manajemen User')

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
    .neon-glow {
        box-shadow: 0 0 20px rgba(123, 47, 190, 0.2);
    }
    .neon-glow:hover {
        box-shadow: 0 0 40px rgba(123, 47, 190, 0.4);
    }
    .avatar-gradient {
        background: linear-gradient(135deg, #FF2A54, #7B2FBE);
        box-shadow: 0 0 20px rgba(255, 42, 84, 0.3);
    }
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4" data-aos="fade-down">
        <div>
            <h1 class="text-3xl font-bold text-[#E2E8F0] tracking-tight">Manajemen User</h1>
            <p class="text-[#E2E8F0]/60 mt-2">Daftar pelanggan yang terdaftar di TechEase ID.</p>
        </div>
        <div class="bg-[#1E293B] border border-[#FF2A54]/20 rounded-xl px-5 py-3 neon-border">
            <span class="text-[#FF2A54] font-bold drop-shadow-[0_0_10px_rgba(255,42,84,0.3)]">
                <i class="fas fa-users mr-2"></i> Total: {{ $users->total() }} User
            </span>
        </div>
    </div>

    <div class="bg-[#1E293B] rounded-2xl shadow-xl border border-[#1E293B] overflow-hidden neon-border" data-aos="fade-up">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#0F172A]/50 text-[#E2E8F0]/50 uppercase text-[10px] font-black tracking-widest border-b border-[#1E293B]">
                        <th class="px-6 py-4">Nama Pelanggan</th>
                        <th class="px-6 py-4">Kontak</th>
                        <th class="px-6 py-4">Bergabung Pada</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#1E293B]">
                    @forelse($users as $user)
                    <tr class="hover:bg-[#FF2A54]/5 transition-all group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 avatar-gradient rounded-full flex items-center justify-center text-white font-bold shadow-[0_0_15px_rgba(255,42,84,0.3)] group-hover:shadow-[0_0_30px_rgba(255,42,84,0.5)] transition-all">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                                <div class="font-bold text-[#E2E8F0] group-hover:text-[#FF2A54] transition-colors">{{ $user->name }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-[#E2E8F0]">{{ $user->email }}</div>
                            <div class="text-xs text-[#E2E8F0]/50">{{ $user->phone ?? '-' }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-[#E2E8F0]/70">
                            {{ $user->created_at->format('d M Y') }}
                            <span class="text-[10px] block opacity-50">{{ $user->created_at->diffForHumans() }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('admin.users.show', $user) }}" 
                                   class="p-2 bg-[#0F172A] border border-[#7B2FBE]/30 text-[#7B2FBE] rounded-lg hover:bg-[#7B2FBE] hover:text-white hover:border-[#7B2FBE] transition-all hover:shadow-[0_0_30px_rgba(123,47,190,0.4)]">
                                    <i class="fas fa-eye text-sm"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-[#E2E8F0]/50">
                            <i class="fas fa-users-slash text-4xl mb-3 block opacity-20"></i>
                            Belum ada pelanggan terdaftar.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($users->hasPages())
        <div class="px-6 py-4 bg-[#0F172A]/50 border-t border-[#1E293B]">
            {{ $users->links() }}
        </div>
        @endif
    </div>
</div>
@endsection