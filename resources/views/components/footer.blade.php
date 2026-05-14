<footer class="bg-gradient-blue-double text-white">
    <div class="flex flex-col gap-5 py-20 container-smaller">
        <div class="flex flex-col gap-y-7 justify-between lg:gap-y-0 lg:flex-row">
            <div class="w-56">
                <img class="w-full" src="{{ asset('images/logo-com-white.svg') }}" alt="OnlineBersama">
            </div>
            <div class="flex flex-col gap-8 md:flex-row lg:justify-between lg:w-132.5">
                <div class="flex flex-col lg:w-full lg:max-w-75.5">
                    <a href="{{ route('index') }}#mengapa-com" class="footer-link">Mengapa .com?</a>
                    <a href="{{ route('websites') }}" class="footer-link">Untuk Situs Web</a>
                    <a href="{{ route('email') }}" class="footer-link">Untuk Email</a>
                    <a href="{{ route('social-media') }}" class="footer-link">Untuk Media Sosial dan <span class="block min-[400px]:inline lg:block">E-Commerce</span></a>
                    <a href="#" class="footer-link">Panduan Belajar</a>
                    <a href="{{ route('find') }}" class="footer-link">Temukan .com Anda</a>
                </div>
                <div class="flex flex-col gap-y-10 md:gap-y-2.5">
                    <div class="flex flex-col lg:gap-y-2.5 lg:w-full lg:max-w-48.5">
                        <a href="https://www.verisign.com/id-id/privacy/" class="footer-link">Pernyataan Privasi</a>
                        <a href="https://www.verisign.com/id-id/privacy/legal-notices/" class="footer-link">Ketentuan Penggunaan</a>
                        <a href="#" class="footer-link">Pengaturan Cookie</a>
                        <a href="https://www.verisign.com/" class="footer-link">Verisign.com</a>
                    </div>
                    <div class="flex gap-5">
                        <a href="#" class="py-2">
                            <img src="{{ asset('images/icons/white-facebook-icon.svg') }}" alt="">
                        </a>
                        <a href="#" class="py-2">
                            <img src="{{ asset('images/icons/white-linkedin-icon.svg') }}" alt="">
                        </a>
                        <a href="#" class="py-2">
                            <img src="{{ asset('images/icons/white-x-icon.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-4 font-sans text-[12px] leading-5">
            <p>&copy; 2026 VeriSign, Inc. Semua hak dilindungi undang-undang. VERISIGN, logo VERISIGN, serta merek dagang, merek layanan, dan desain lainnya adalah merek dagang terdaftar atau tidak terdaftar dari VeriSign, Inc. serta anak perusahaannya di Amerika Serikat dan di negara lainnya. Semua merek dagang lainnya merupakan hak milik dari pemiliknya masing-masing.</p>
            <p>Referensi terhadap X dan logo X adalah merek dagang dari X Corp atau afiliasinya.</p>
        </div>
    </div>
</footer>
