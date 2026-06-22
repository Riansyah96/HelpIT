<footer class="relative bg-gray-50 dark:bg-background text-gray-600 dark:text-text/70 py-20 overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-r from-primary/10 to-secondary/10 blur-[100px] rounded-full translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
            
            <div class="md:col-span-5">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 mb-6 group">
                    <div class="p-2 bg-gradient-to-r from-primary to-secondary rounded-lg shadow-lg shadow-primary/20 neon-glow">
                        <i class="fas fa-laptop-medical text-white"></i>
                    </div>
                    <span class="text-2xl font-black text-gray-900 dark:text-white tracking-tighter">HelpIT<span class="text-neon-light">.ID</span></span>
                </a>
                <p class="text-lg leading-relaxed max-w-md mb-8">
                    Partner teknologi terpercaya untuk kebutuhan perbaikan IT, maintenance sistem, dan konsultasi perangkat keras/lunak Anda.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-white dark:bg-surface flex items-center justify-center hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition shadow-xl border border-gray-200 dark:border-surface neon-border hover:neon-glow">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white dark:bg-surface flex items-center justify-center hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition shadow-xl border border-gray-200 dark:border-surface neon-border hover:neon-glow">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white dark:bg-surface flex items-center justify-center hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition shadow-xl border border-gray-200 dark:border-surface neon-border hover:neon-glow">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <div class="md:col-span-2">
                <h4 class="text-gray-900 dark:text-white font-black uppercase tracking-widest text-xs mb-6">Navigasi</h4>
                <ul class="space-y-4 text-sm font-bold">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition">Home</a></li>
                    <li><a href="{{ route('services.index') }}" class="hover:text-primary transition">Layanan IT</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-primary transition">Tentang Kami</a></li>
                </ul>
            </div>

            <div class="md:col-span-2">
                <h4 class="text-gray-900 dark:text-white font-black uppercase tracking-widest text-xs mb-6">Bantuan</h4>
                <ul class="space-y-4 text-sm font-bold">
                    <li><a href="{{ route('contact') }}" class="hover:text-primary transition">Hubungi Kami</a></li>
                    <li><a href="{{ route('sitemap') }}" class="hover:text-primary transition">Pusat Bantuan</a></li>
                    <li><a href="{{ route('privacy') }}" class="hover:text-primary transition">Kebijakan Privasi</a></li>
                    <li><a href="{{ route('terms') }}" class="hover:text-primary transition">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <div class="md:col-span-3">
                <h4 class="text-gray-900 dark:text-white font-black uppercase tracking-widest text-xs mb-6">Berlangganan</h4>
                <p class="text-xs mb-4 italic">Dapatkan update teknologi & promo layanan kami.</p>
                <form class="relative group">
                    <input type="email" placeholder="Email Anda" 
                           class="w-full bg-white dark:bg-surface border border-gray-200 dark:border-surface rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:border-transparent transition outline-none text-gray-800 dark:text-text neon-border focus:neon-glow">
                    <button class="absolute right-2 top-2 p-1.5 bg-gradient-to-r from-primary to-secondary text-white rounded-lg hover:shadow-lg hover:shadow-primary/30 transition neon-glow">
                        <i class="fas fa-paper-plane text-xs"></i>
                    </button>
                </form>
            </div>

        </div>

        <div class="mt-20 pt-8 border-t border-gray-200 dark:border-surface flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs font-bold">
                &copy; {{ date('Y') }} HelpIT ID. Crafted with <i class="fas fa-heart text-primary animate-pulse"></i> by HelpIT Team.
            </p>
            <div class="flex gap-6 text-[10px] font-black uppercase tracking-widest">
                <span>Secure Payment</span>
                <div class="flex gap-3 grayscale opacity-50">
                    <i class="fab fa-cc-visa text-lg"></i>
                    <i class="fab fa-cc-mastercard text-lg"></i>
                    <i class="fas fa-university text-lg"></i>
                </div>
            </div>
        </div>
    </div>
</footer>