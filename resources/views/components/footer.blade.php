<footer
    data-analytics-level1="footer"
    class="bg-gradient-blue-double text-white">
    <div class="flex flex-col gap-5 py-20 container-medium">
        <div class="flex flex-col gap-y-7 justify-between lg:gap-y-0 lg:flex-row">
            <a
                class="w-56"
                data-analytics-name="logo | .com"
                href="{{ route('index') }}">
                <img class="w-full" src="{{ asset('images/logo-com-white.svg') }}" alt="OnlineBersama">
            </a>
            <div class="flex flex-col gap-8 md:flex-row lg:justify-between lg:w-132.5">
                <div class="flex flex-col lg:w-full lg:max-w-75.5">
                    <a
                        data-analytics-name="{{ request()->routeIs('index') ? 'anchor | Why .com?' : 'text | Why .com?' }}"
                        href="{{ request()->routeIs('index') ? '' : route('index') }}#mengapa-com"
                        class="footer-link">
                        Mengapa .com?
                    </a>
                    <a
                        data-analytics-name="text | For Websites"
                        href="{{ route('websites') }}"
                        class="footer-link">
                        Untuk Situs Web
                    </a>
                    <a
                        data-analytics-name="text | For Email"
                        href="{{ route('email') }}"
                        class="footer-link">
                        Untuk Email
                    </a>
                    <a
                        data-analytics-name="text | For Social Media & E-Commerce"
                        href="{{ route('social-media') }}"
                        class="footer-link">
                        Untuk Media Sosial dan <span class="block">E-Commerce</span>
                    </a>
                    <a
                        data-analytics-name="text | Learning Hub"
                        href="{{ route('resources.index') }}"
                        class="footer-link">
                        Panduan Belajar
                    </a>
                    <a
                        data-analytics-name="text | Find a .com"
                        href="{{ route('find') }}"
                        class="footer-link">
                        Temukan .com Anda
                    </a>
                </div>
                <div class="flex flex-col gap-y-10 md:gap-y-2.5">
                    <div class="flex flex-col lg:w-full lg:max-w-48.5">
                        <a
                            data-analytics-name="text | Privacy Statement"
                            href="https://www.verisign.com/id-id/privacy/"
                            class="footer-link">
                            Pernyataan Privasi
                        </a>
                        <a
                            data-analytics-name="text | Conditions of Use"
                            href="https://www.verisign.com/id-id/privacy/legal-notices/"
                            class="footer-link">
                            Ketentuan Penggunaan
                        </a>
                        <button
                            x-data="{ clicked: false }"
                            @click.prevent="clicked = !clicked"
                            data-analytics-name="text | Cookie Settings"
                            type="button"
                            class="footer-link cursor-pointer optanon-show-settings">
                            Pengaturan Cookie
                        </button>
                        <a
                            data-analytics-name="text | Verisign.com"
                            href="https://www.verisign.com/"
                            class="footer-link">
                            Verisign.com
                        </a>
                    </div>
                    <div class="flex gap-5">
                        <a
                            data-analytics-name="icon | Facebook"
                            href="https://www.facebook.com/yourdotcom"
                            target="_blank"
                            class="py-2">
                            <x-icons.facebook width="24" height="24" fill="#fff" />
                        </a>
                        <a
                            data-analytics-name="icon | LinkedIn"
                            href="https://www.linkedin.com/showcase/your-dot-com"
                            target="_blank"
                            class="py-2">
                            <x-icons.linkedin width="24" height="24" fill="#fff" />
                        </a>
                        <a
                            data-analytics-name="icon | X"
                            href="https://x.com/YourDotCom"
                            target="_blank"
                            class="py-2">
                            <x-icons.x width="24" height="24" fill="#fff" />
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
