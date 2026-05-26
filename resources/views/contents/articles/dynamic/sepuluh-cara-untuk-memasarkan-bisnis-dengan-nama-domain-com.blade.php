<section class="article-outer">
    <div class="article-wrapper">
        <x-articles.intro-and-quicklinks>
            <p><em>Pelajari bagaimana nama domain .com dapat membantu Anda membangun merek dan dilihat oleh lebih banyak orang di lebih banyak tempat.</em></p>
        </x-articles.intro-and-quicklinks>
        <h3>Pemasaran Online</h3>
        <div class="article-child-wrapper md:pl-4">
            <x-articles.step-item :number="1">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Alamat Email</h4>
                    <p>Dengan alamat email .com khusus (seperti penjualan@LivingKreasi.com), Anda dapat tampil beda dan membangun kepercayaan di setiap email yang Anda kirim.</p>
                </div>
            </x-articles.step-item>
            <x-articles.step-item :number="2">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Video Bermerek</h4>
                    <p>Promosikan kehadiran online Anda dengan mencantumkan nama domain .com Anda dalam video bisnis dan melalui tautan di deskripsi video Anda.</p>
                </div>
            </x-articles.step-item>
            <x-articles.step-item :number="3">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Direktori Online</h4>
                    <p>Cantumkan nama domain .com bisnis Anda di direktori online (seperti Yelp atau Google Business Profile) untuk membantu pelanggan menemukan situs web Anda.</p>
                </div>
            </x-articles.step-item>
            <x-articles.step-item :number="4">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Profil Media Sosial</h4>
                    <p>Buat halaman media sosial Anda lebih mudah ditemukan dengan menautkan  nama domain .com khusus ke halaman tersebut.</p>
                </div>
            </x-articles.step-item>
            <x-articles.step-item :number="5">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Kampanye Pemasaran</h4>
                    <p>Soroti berbagai halaman atau produk di situs web Anda dengan mendaftarkan nama domain .com tambahan sebagai alamat web promosi.</p>
                </div>
            </x-articles.step-item>
            <img class="rounded-[10px]" src="{{ asset('images/mid-article-image-3.jpg') }}" alt="">
            <x-articles.step-item :number="6">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Profil bisnis di aplikasi pesan</h4>
                    <p>Sertakan nama domain .com Anda di profil bisnis Anda sebagai cara mudah agar pelanggan dapat menemukan situs web Anda.</p>
                </div>
            </x-articles.step-item>
        </div>
        <h3>Pemasaran Offline</h3>
        <div class="article-child-wrapper md:pl-4">
            <x-articles.step-item :number="7">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Pesan Langsung</h4>
                    <p>Dorong pelanggan untuk datang ke bisnis Anda dengan menyertakan nama domain .com Anda dalam pemasaran melalui pesan email langsung (direct mail).</p>
                </div>
            </x-articles.step-item>
            <x-articles.step-item :number="8">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Kartu Nama Bisnis</h4>
                    <p>Iklankan keberadaan online Anda dengan mencantumkan nama domain .com yang mudah diingat pada kartu nama bisnis Anda.</p>
                </div>
            </x-articles.step-item>
            <x-articles.step-item :number="9">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Label Produk / Branding</h4>
                    <p>Sertakan nama domain .com Anda pada label produk untuk membantu mengenalkan pelanggan offline Anda ke kehadiran online Anda.</p>
                </div>
            </x-articles.step-item>
            <x-articles.step-item :number="10">
                <div class="flex gap-2 flex-col flex-1">
                    <h4>Iklan Cetak</h4>
                    <p>Cantumkan nama domain .com bisnis Anda pada menu pesan-antar, barang promosi, dan pengumuman penting bisnis untuk memperkuat upaya pemasaran Anda.</p>
                </div>
            </x-articles.step-item>
        </div>
        <x-articles.callout-cta>
            <div class="flex flex-col gap-4">
                <h4>Tahukah Anda?</h4>
                <p>Anda dapat menggunakan nama domain .com Anda sebagai ajakan untuk bertindak (call-to-action) di akhir video, unggahan media sosial, atau di mana pun Anda menempatkan konten untuk membantu menghasilkan kunjungan ke situs web Anda.</p>
            </div>
        </x-articles.callout-cta>
        <x-articles.related-article :data="$post->relatedOneArticle" class="pt-4" />
    </div>
</section>
