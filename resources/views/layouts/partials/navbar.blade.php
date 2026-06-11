<nav x-data="{ mobileMenuOpen: false, atTop: true }" 
     @scroll.window="atTop = (window.pageYOffset > 10 ? false : true)"
     :class="{ 'bg-surface/80 backdrop-blur-xl shadow-lg py-3': !atTop, 'bg-transparent py-5': atTop }"
     class="fixed w-full top-0 z-[100] transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            
            <a href="{{ route('home') }}" class="group flex items-center gap-2">
                <div class="p-2 bg-primary rounded-xl group-hover:rotate-12 transition-transform duration-300 shadow-lg shadow-primary/30">
                    <i class="fas fa-laptop-medical text-white text-xl"></i>
                </div>
                <span class="font-black text-2xl tracking-tighter text-white">
                    HelpIT<span class="text-primary">.ID</span>
                </span>
            </a>

            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="px-4 py-2 rounded-xl text-sm font-bold {{ request()->routeIs('home') ? 'text-primary bg-surface' : 'text-text/70 hover:text-primary hover:bg-surface/50' }} transition">Home</a>
                <a href="{{ route('services.index') }}" class="px-4 py-2 rounded-xl text-sm font-bold {{ request()->routeIs('services.*') ? 'text-primary bg-surface' : 'text-text/70 hover:text-primary hover:bg-surface/50' }} transition">Layanan</a>
                
                @auth
                    <div class="h-6 w-[1px] bg-surface mx-2"></div>
                    
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 text-sm font-black text-primary hover:bg-surface/50 rounded-xl transition">Admin Panel</a>
                    @else
                        <a href="{{ route('customer.dashboard') }}" class="px-4 py-2 text-sm font-bold text-text/80 hover:bg-surface/50 rounded-xl transition">Dashboard</a>
                    @endif

                    <div x-data="{ open: false }" class="relative ml-2">
                        <button @click="open = !open" @click.away="open = false" 
                                class="flex items-center gap-2 px-3 py-1.5 rounded-full border border-surface hover:shadow-md transition bg-surface">
                            <div class="w-7 h-7 bg-primary/20 rounded-full flex items-center justify-center text-primary text-[10px] font-black">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <span class="text-xs font-bold text-text">{{ explode(' ', Auth::user()->name)[0] }}</span>
                            <i class="fas fa-chevron-down text-[10px] text-text/50"></i>
                        </button>
                        
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:leave="transition ease-in duration-75"
                             class="absolute right-0 mt-3 w-48 bg-surface rounded-2xl shadow-2xl py-2 z-50 border border-surface/50">
                            <div class="px-4 py-2 mb-2 border-b border-surface">
                                <p class="text-[10px] font-black text-text/50 uppercase tracking-widest">Akun Saya</p>
                            </div>
                            <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-2 text-sm text-text hover:bg-primary/10 hover:text-primary transition">
                                <i class="fas fa-user-circle opacity-50"></i> Profil
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-accent hover:bg-accent/10 transition font-bold">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="ml-4 px-6 py-2.5 rounded-xl bg-primary text-white text-sm font-black shadow-lg shadow-primary/30 hover:bg-primary/80 hover:-translate-y-0.5 transition-all">Login</a>
                @endauth
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-text">
                <i :class="mobileMenuOpen ? 'fas fa-times' : 'fas fa-bars'" class="text-2xl"></i>
            </button>
        </div>
    </div>

    <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-surface border-t border-surface px-4 py-6 space-y-4">
        <a href="{{ route('home') }}" class="block px-4 py-3 rounded-xl font-bold text-text hover:bg-surface/50">Home</a>
        <a href="{{ route('services.index') }}" class="block px-4 py-3 rounded-xl font-bold text-text hover:bg-surface/50">Layanan</a>
        @auth
            <div class="h-[1px] bg-surface"></div>
            <a href="{{ route('profile.edit') }}" class="block px-4 py-3 font-bold text-text">Profil</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-3 font-bold text-accent">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="block w-full py-4 bg-primary text-white text-center rounded-xl font-black">Login</a>
        @endauth
    </div>
</nav>