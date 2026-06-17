@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="relative min-h-screen bg-background overflow-hidden pt-32 pb-20">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/20 blur-[120px] rounded-full animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-accent/20 blur-[120px] rounded-full animate-pulse shadow-2xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-surface/50 border border-surface text-primary text-xs font-black uppercase tracking-widest mb-6">
                Mengenal HelpIT
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter mb-6">
                Solusi IT Tanpa <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">Ribet.</span>
            </h1>
            <p class="text-lg text-text/80 max-w-2xl mx-auto leading-relaxed">
                HelpIT ID adalah platform solusi IT yang didedikasikan untuk membantu individu, UMKM, dan kantor kecil mengatasi masalah teknologi dengan mudah, cepat, dan terpercaya.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-32">
            <div class="bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-10 shadow-2xl shadow-primary/5">
                <div class="w-12 h-12 bg-primary rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-primary/30">
                    <i class="fas fa-eye text-xl"></i>
                </div>
                <h2 class="text-2xl font-black text-white mb-4 tracking-tight">Visi Kami</h2>
                <p class="text-text/70 leading-relaxed">
                    Menjadi mitra teknologi terdepan yang membuat solusi IT dapat diakses oleh semua kalangan, tanpa harus khawatir dengan kompleksitas teknis.
                </p>
            </div>
            <div class="bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-10 shadow-2xl shadow-accent/5">
                <div class="w-12 h-12 bg-accent rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-accent/30">
                    <i class="fas fa-bullseye text-xl"></i>
                </div>
                <h2 class="text-2xl font-black text-white mb-4 tracking-tight">Misi Kami</h2>
                <p class="text-text/70 leading-relaxed">
                    Memberikan layanan perbaikan dan pemeliharaan IT yang transparan, cepat, dan berkualitas tinggi dengan dukungan teknisi tersertifikasi.
                </p>
            </div>
        </div>

        <section id="team" class="relative">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-surface/50 border border-surface text-accent text-xs font-black uppercase tracking-widest mb-4">
                    Tim Kami
                </div>
                <h2 class="text-3xl md:text-5xl font-black text-white tracking-tighter">
                    Expert <span class="text-primary">Development</span> Team
                </h2>
                <p class="text-text/70 mt-4">Berpengalaman dalam menghadirkan solusi digital yang andal.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 1. Umar Al Faruq - Senior Developer -->
                <div class="group bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 text-center shadow-xl hover:shadow-primary/10 transition-all duration-500">
                    <div class="relative mb-6 inline-block">
                        <div class="absolute inset-0 bg-primary rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                        <div class="relative w-40 h-40 rounded-2xl overflow-hidden border-2 border-surface shadow-2xl mx-auto">
                            <img src="{{ asset('assets/img/team/umar.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Umar+Al+Faruq&background=0EA5E9&color=fff&size=200'" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        </div>
                    </div>
                    <h5 class="text-xl font-black text-white mb-1">Umar Al Faruq</h5>
                    <p class="text-primary text-xs font-black uppercase tracking-widest mb-4">Senior Developer</p>
                    <p class="text-sm text-text/70">Mengarsiteki solusi teknis dan mentoring tim pengembangan.</p>
                </div>

                <!-- 2. Arief Rachman Apriansyah - Lead Developer -->
                <div class="group bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 text-center shadow-xl hover:shadow-accent/10 transition-all duration-500">
                    <div class="relative mb-6 inline-block">
                        <div class="absolute inset-0 bg-accent rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                        <div class="relative w-40 h-40 rounded-2xl overflow-hidden border-2 border-surface shadow-2xl mx-auto">
                            <img src="{{ asset('assets/img/team/arief.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Arief+Rachman+Apriansyah&background=F59E0B&color=fff&size=200'" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        </div>
                    </div>
                    <h5 class="text-xl font-black text-white mb-1">Arief Rachman Apriansyah</h5>
                    <p class="text-accent text-xs font-black uppercase tracking-widest mb-4">Lead Developer</p>
                    <p class="text-sm text-text/70">Memimpin pengembangan sistem dan memastikan kualitas kode.</p>
                </div>

                <!-- 3. Muhammad Arkan Al Hakim - Developer -->
                <div class="group bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 text-center shadow-xl hover:shadow-primary/10 transition-all duration-500">
                    <div class="relative mb-6 inline-block">
                        <div class="absolute inset-0 bg-primary rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                        <div class="relative w-40 h-40 rounded-2xl overflow-hidden border-2 border-surface shadow-2xl mx-auto">
                            <img src="{{ asset('assets/img/team/arkan.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Muhammad+Arkan+Al+Hakim&background=0EA5E9&color=fff&size=200'" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        </div>
                    </div>
                    <h5 class="text-xl font-black text-white mb-1">Muhammad Arkan Al Hakim</h5>
                    <p class="text-primary text-xs font-black uppercase tracking-widest mb-4">Developer</p>
                    <p class="text-sm text-text/70">Mengimplementasikan fitur dan melakukan perbaikan bug secara Intensif.</p>
                </div>

                <!-- 4. Muhamad Yordan Al zisky - Design -->
                <div class="group bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 text-center shadow-xl hover:shadow-accent/10 transition-all duration-500">
                    <div class="relative mb-6 inline-block">
                        <div class="absolute inset-0 bg-accent rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                        <div class="relative w-40 h-40 rounded-2xl overflow-hidden border-2 border-surface shadow-2xl mx-auto">
                            <img src="{{ asset('assets/img/team/jordan.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Muhamad+Yordan+Al+zisky&background=F59E0B&color=fff&size=200'" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        </div>
                    </div>
                    <h5 class="text-xl font-black text-white mb-1">Muhamad Yordan Al zisky</h5>
                    <p class="text-accent text-xs font-black uppercase tracking-widest mb-4">Design</p>
                    <p class="text-sm text-text/70">Merancang antarmuka pengguna yang intuitif dan estetis.</p>
                </div>

                <!-- 5. Muhammad Shofiyyurrohman - Project Manager -->
                <div class="group bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 text-center shadow-xl hover:shadow-primary/10 transition-all duration-500">
                    <div class="relative mb-6 inline-block">
                        <div class="absolute inset-0 bg-primary rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                        <div class="relative w-40 h-40 rounded-2xl overflow-hidden border-2 border-surface shadow-2xl mx-auto">
                            <img src="{{ asset('assets/img/team/shofiyurohman.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Muhammad+Shofiyyurrohman&background=0EA5E9&color=fff&size=200'" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        </div>
                    </div>
                    <h5 class="text-xl font-black text-white mb-1">Muhammad Shofiyyurrohman</h5>
                    <p class="text-primary text-xs font-black uppercase tracking-widest mb-4">Project Manager</p>
                    <p class="text-sm text-text/70">Mengelola jadwal, sumber daya, dan komunikasi proyek.</p>
                </div>

                <!-- 6. Haydar Ali Ayyubi - Design -->
                <div class="group bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 text-center shadow-xl hover:shadow-accent/10 transition-all duration-500">
                    <div class="relative mb-6 inline-block">
                        <div class="absolute inset-0 bg-accent rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                        <div class="relative w-40 h-40 rounded-2xl overflow-hidden border-2 border-surface shadow-2xl mx-auto">
                            <img src="{{ asset('assets/img/team/haydar.jpeg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Haydar+Ali+Ayyubi&background=F59E0B&color=fff&size=200'" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        </div>
                    </div>
                    <h5 class="text-xl font-black text-white mb-1">Haydar Ali Ayyubi</h5>
                    <p class="text-accent text-xs font-black uppercase tracking-widest mb-4">Design</p>
                    <p class="text-sm text-text/70">Merancang antarmuka pengguna yang intuitif dan estetis.</p>
                </div>

                <!-- 7. Ayu Nur Intany - Scrum Master -->
                <div class="group bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 text-center shadow-xl hover:shadow-primary/10 transition-all duration-500">
                    <div class="relative mb-6 inline-block">
                        <div class="absolute inset-0 bg-primary rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                        <div class="relative w-40 h-40 rounded-2xl overflow-hidden border-2 border-surface shadow-2xl mx-auto">
                            <img src="{{ asset('assets/img/team/Ayu.jpeg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Ayu+Nur+Intany&background=0EA5E9&color=fff&size=200'" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        </div>
                    </div>
                    <h5 class="text-xl font-black text-white mb-1">Ayu Nur Intany</h5>
                    <p class="text-primary text-xs font-black uppercase tracking-widest mb-4">Scrum Master</p>
                    <p class="text-sm text-text/70">Memfasilitasi proses Scrum dan kolaborasi tim.</p>
                </div>

                <!-- 8. Ammar Muhammad Khadafi - Media Kreatif -->
                <div class="group bg-surface/50 backdrop-blur-xl border border-surface rounded-3xl p-8 text-center shadow-xl hover:shadow-accent/10 transition-all duration-500">
                    <div class="relative mb-6 inline-block">
                        <div class="absolute inset-0 bg-accent rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition-opacity"></div>
                        <div class="relative w-40 h-40 rounded-2xl overflow-hidden border-2 border-surface shadow-2xl mx-auto">
                            <img src="{{ asset('assets/img/team/ammar.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Ammar+Muhammad+Khadafi&background=F59E0B&color=fff&size=200'" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        </div>
                    </div>
                    <h5 class="text-xl font-black text-white mb-1">Ammar Muhammad Khadafi</h5>
                    <p class="text-accent text-xs font-black uppercase tracking-widest mb-4">Media Kreatif</p>
                    <p class="text-sm text-text/70">Mengelola konten kreatif dan strategi promosi.</p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection