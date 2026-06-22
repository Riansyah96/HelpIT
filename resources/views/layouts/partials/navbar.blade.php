<nav x-data="{ mobileMenuOpen: false, atTop: true }" 
     @scroll.window="atTop = (window.pageYOffset > 10 ? false : true)"
     :class="{ 
         'bg-white/10 dark:bg-surface/30 backdrop-blur-xl border-b border-white/10 dark:border-surface/50 shadow-sm py-2': !atTop, 
         'bg-transparent py-4': atTop 
     }"
     class="fixed w-full top-0 z-[100] transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-14">
            
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="group flex items-center gap-2.5">
                <div class="p-2 bg-gradient-to-r from-primary to-secondary rounded-xl group-hover:rotate-12 transition-transform duration-300 shadow-lg shadow-primary/30 neon-glow">
                    <i class="fas fa-laptop-medical text-white text-lg"></i>
                </div>
                <span class="font-black text-2xl tracking-tighter text-gray-900 dark:text-white">
                    HelpIT<span class="text-neon-light">.ID</span>
                </span>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 
                          {{ request()->routeIs('home') ? 'text-primary bg-white/20 dark:bg-surface/50 shadow-[0_0_20px_rgba(255,42,84,0.1)]' : 'text-gray-600 dark:text-text/70 hover:text-primary hover:bg-white/10 dark:hover:bg-surface/30' }}">
                    Home
                </a>
                <a href="{{ route('services.index') }}" 
                   class="px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 
                          {{ request()->routeIs('services.*') ? 'text-primary bg-white/20 dark:bg-surface/50 shadow-[0_0_20px_rgba(255,42,84,0.1)]' : 'text-gray-600 dark:text-text/70 hover:text-primary hover:bg-white/10 dark:hover:bg-surface/30' }}">
                    Layanan
                </a>
                
                @auth
                    <div class="h-6 w-[1px] bg-gray-300/50 dark:bg-surface/50 mx-2"></div>
                    
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" 
                           class="px-4 py-2 text-sm font-black text-neon-light hover:bg-white/10 dark:hover:bg-surface/30 rounded-xl transition">
                            Admin Panel
                        </a>
                    @else
                        <a href="{{ route('customer.dashboard') }}" 
                           class="px-4 py-2 text-sm font-bold text-gray-600 dark:text-text/80 hover:bg-white/10 dark:hover:bg-surface/30 rounded-xl transition">
                            Dashboard
                        </a>
                    @endif

                    {{-- Profile Dropdown --}}
                    <div x-data="{ open: false }" class="relative ml-2">
                        <button @click="open = !open" @click.away="open = false" 
                                class="flex items-center gap-2 px-3 py-1.5 rounded-full border border-white/10 dark:border-surface/50 hover:shadow-md transition bg-white/10 dark:bg-surface/30 backdrop-blur-sm">
                            <div class="w-7 h-7 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center text-white text-[10px] font-black shadow-[0_0_15px_rgba(255,42,84,0.2)]">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <span class="text-xs font-bold text-gray-800 dark:text-text">{{ explode(' ', Auth::user()->name)[0] }}</span>
                            <i class="fas fa-chevron-down text-[10px] text-gray-400 dark:text-text/50"></i>
                        </button>
                        
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:leave="transition ease-in duration-75"
                             class="absolute right-0 mt-3 w-48 bg-white/80 dark:bg-surface/90 backdrop-blur-xl rounded-2xl shadow-2xl py-2 z-50 border border-white/10 dark:border-surface/50">
                            <div class="px-4 py-2 mb-2 border-b border-gray-200/50 dark:border-surface/50">
                                <p class="text-[10px] font-black text-gray-500 dark:text-text/50 uppercase tracking-widest">Akun Saya</p>
                            </div>
                            <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 dark:text-text hover:bg-primary/10 hover:text-primary transition">
                                <i class="fas fa-user-circle opacity-50"></i> Profil
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-primary hover:bg-primary/10 transition font-bold">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" 
                       class="ml-4 px-6 py-2.5 rounded-xl bg-gradient-to-r from-primary to-secondary text-white text-sm font-black shadow-lg shadow-primary/30 neon-glow hover:shadow-primary/50 hover:-translate-y-0.5 transition-all">
                        Login
                    </a>
                @endauth
            </div>

            {{-- Mobile Toggle --}}
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-gray-700 dark:text-text">
                <i :class="mobileMenuOpen ? 'fas fa-times' : 'fas fa-bars'" class="text-2xl"></i>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileMenuOpen" x-transition 
         class="md:hidden bg-white/90 dark:bg-surface/90 backdrop-blur-xl border-t border-white/10 dark:border-surface/50 px-4 py-6 space-y-4">
        <a href="{{ route('home') }}" 
           class="block px-4 py-3 rounded-xl font-bold text-gray-700 dark:text-text hover:bg-white/10 dark:hover:bg-surface/30 transition {{ request()->routeIs('home') ? 'bg-white/20 dark:bg-surface/50 text-primary' : '' }}">
            Home
        </a>
        <a href="{{ route('services.index') }}" 
           class="block px-4 py-3 rounded-xl font-bold text-gray-700 dark:text-text hover:bg-white/10 dark:hover:bg-surface/30 transition {{ request()->routeIs('services.*') ? 'bg-white/20 dark:bg-surface/50 text-primary' : '' }}">
            Layanan
        </a>
        @auth
            <div class="h-[1px] bg-gray-200/50 dark:bg-surface/50"></div>
            @if(auth()->user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-3 font-black text-neon-light">Admin Panel</a>
            @else
                <a href="{{ route('customer.dashboard') }}" class="block px-4 py-3 font-bold text-gray-700 dark:text-text">Dashboard</a>
            @endif
            <a href="{{ route('profile.edit') }}" class="block px-4 py-3 font-bold text-gray-700 dark:text-text">Profil</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-3 font-bold text-primary">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="block w-full py-4 bg-gradient-to-r from-primary to-secondary text-white text-center rounded-xl font-black neon-glow">Login</a>
        @endauth
    </div>
</nav>