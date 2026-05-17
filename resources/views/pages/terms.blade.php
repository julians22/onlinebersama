@extends('app')

@section('title', 'Persyaratan Layanan')

@section('content')

<main>
    <section class="lg:py-11 py-10 px-4 md:px-0">
        <div class="container-extra-smaller lg:space-y-8 space-y-6 text-deep-blue-300">
            <h1 class="headline-1 text-navy-blue-300">VERISIGN® KETENTUAN LAYANAN DARI JASA PENCARIAN NAMA DOMAIN</h1>

            <p class="paragraph-sm text-deep-blue-300">Terakhir diperbarui: 27 September 2021</p>

            <p class="paragraph-md text-deep-blue-300">Jika terjadi konflik ataupun perbedaan tafsir antara versi Bahasa
                Indonesia dengan Bahasa Inggris, maka yang berlaku adalah <a class="text-magenta-300 link-decoration"
                    href="https://www.verisign.com/en_US/legal-notices/domain-name-search-terms-of-service/index.xhtml"
                    target="_blank">versi dalam Bahasa Inggris</a></p>

            <p class="paragraph-md text-deep-blue-300">Ketentuan Layanan ini (secara kolektif, "<b>Ketentuan</b>" ini)
                merupakan perjanjian hukum antara VeriSign, Inc. (disebut sebagai "<u>Verisign</u>,"
                "<b><u>kami</u></b>", "<b><u>kami</u></b>" atau "<b><u>kami</u></b>") dan Anda (disebut sebagai
                "<b><u>Anda</u></b>", "<b><u>milik Anda</u></b>" atau "<b><u>pengguna akhir</u></b>") yang mengatur
                akses Anda ke, dan penggunaan layanan pencarian nama domain Verisign yang ditawarkan melalui situs web
                verisign.com atau situs Verisign lainnya yang mereferensikan Ketentuan ini ("<b><u>Layanan</u></b>").
                Layanan tersebut memungkinkan Anda untuk (i) terhubung langsung ke layanan dan memasukkan permintaan
                pencarian ke Verisign, yang mungkin termasuk namun tidak terbatas pada, Informasi Pribadi (seperti yang
                dijelaskan di Pasal 4 (Privasi) di bawah), yang Anda pilih untuk diberikan, seperti nama depan dan nama
                belakang Anda, dan/atau (ii) terhubung ke layanan menggunakan kredensial Anda dari aplikasi media sosial
                pihak ketiga seperti Facebook, Instagram, LinkedIn, atau Twitter, jika fungsi masuk tersebut disediakan
                oleh Verisign (masing-masing, "<b><u>Aplikasi Media Sosial</u></b>"), untuk mengizinkan Verisign
                menggunakan berbagai informasi yang terdapat di informasi profil Aplikasi Media Sosial Anda. Setiap data
                yang disediakan: langsung melalui koneksi ke Layanan yang dijelaskan di (i) di atas, dan (ii) melalui
                koneksi ke Aplikasi Media Sosial yang dijelaskan di (ii) di atas secara kolektif disebut sebagai
                "<b><u>Data Pencarian Nama Domain</u></b>" dan akan digunakan untuk mengizinkan Anda untuk: (a)
                memeriksa ketersediaan nama domain dalam satu atau beberapa domain level teratas .com, .net, dan/atau
                .cc, dan/atau domain level teratas lainnya, yang mungkin disediakan oleh Verisign dari waktu ke waktu;
                dan (b) menerima daftar saran nama domain berdasarkan Data Pencarian Nama Domain (secara kolektif,
                "<b><u>Data Hasil Pencarian Nama Domain</u></b>").</p>

            <p class="paragraph-md text-deep-blue-300">INI ADALAH KONTRAK HUKUM. HARAP BACA KETENTUAN INI DENGAN
                SEKSAMA. DENGAN MENGAKSES ATAU MENGGUNAKAN LAYANAN ANDA MENGAKUI BAHWA ANDA TELAH MEMBACA, MEMAHAMI, DAN
                SETUJU UNTUK TERIKAT SECARA HUKUM OLEH KETENTUAN INI, SERTA SETIAP DAN SELURUH PERJANJIAN LAIN YANG
                SECARA TEGAS DIMASUKKAN SEBAGAI REFERENSI DAN SETIAP SERTA SEMUA KEBIJAKAN ATAU PEMBERITAHUAN HUKUM YANG
                KAMI PUBLIKASIKAN ATAU SEDIAKAN TENTANG LAYANAN.</p>

            <p class="paragraph-md text-deep-blue-300">KETENTUAN INI MEMERLUKAN PENGGUNAAN ARBITRASE YANG MENGIKAT
                DENGAN DASAR INDIVIDU UNTUK MENYELESAIKAN SEMUA SENGKETA YANG TIMBUL DARINYA, BUKAN DARI PERADILAN HUKUM
                ATAU TINDAKAN KELAS.</p>

            <p class="paragraph-md text-deep-blue-300">JIKA ANDA TIDAK SETUJU DENGAN KETENTUAN INI, JANGAN MENGAKSES
                ATAU MENGGUNAKAN LAYANAN. PENGGUNAAN LAYANAN TIDAK BERLAKU JIKA DILARANG SECARA HUKUM.</p>

            <div class="flex lg:py-6 lg:px-6 py-6 px-4 flex-col gap-4 lg:gap-8 rounded-[10px] bg-light-gray-100">
                <h2 class="subheadline-2 text-deep-blue-300">Daftar Isi</h2>

                <div
                    x-data="{ openDropdown: false }"
                    class="lg:hidden block relative">
                    <button
                        @click="openDropdown = !openDropdown"
                        type="button"
                        class="max-w-100.5 w-full flex items-center justify-between gap-x-2.5 font-sans text-left font-semibold text-xl rounded-[10px] text-deep-blue-300 leading-7.5 cursor-pointer bg-white px-4 py-3">
                        Navigasi halaman
                        <span>
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.41 3.42706e-05L-2.62268e-07 1.41003L6 7.41003L12 1.41003L10.59 3.38694e-05L6 4.58003L1.41 3.42706e-05Z" fill="#2A3C46"/>
                            </svg>
                        </span>
                    </button>
                    <div x-show="openDropdown"
                        @click.outside="openDropdown = false"
                        class="top-full bg-white rounded-[10px] z-10 inset-x-0 shadow min-h-10 absolute">
                        <ol class="flex gap-3 flex-col px-4 py-2">
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-1"><span>1. </span>Persyaratan</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-2"><span>2. </span>Pemberian
                                    Lisensi</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-3"><span>3. </span>Pembatasan Pemberian
                                    Lisensi</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-4"><span>4. </span>Privasi</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-5"><span>5. </span>Aplikasi Media
                                    Sosial</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-6"><span>6. </span>Tanggung Jawab
                                    Pengguna</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-7"><span>7. </span>Kekayaan
                                    Intelektual</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-8"><span>8. </span>Jangka Waktu;
                                    Penghentian; Modifikasi; Penangguhan; Pemutusan</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-9"><span>9. </span>Tanggapan Umpan
                                    Balik</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-10"><span>10. </span>Perubahan
                                    Ketentuan Layanan</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-11"><span>11. </span>Penyangkalan</a>
                            </li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-12"><span>12. </span>Batasan
                                    Kewajiban</a></li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-13"><span>13. </span>Ganti Rugi</a>
                            </li>
                            <li><a class="paragraph-steps" data-scroll="" @click="openDropdown = false" href="#section-14"><span>14. </span>Lain-lain</a></li>
                        </ol>
                    </div>
                </div>

                <ol class="hidden lg:flex gap-3 flex-col">
                    <li><a class="paragraph-steps" data-scroll="" href="#section-1"><span>1. </span>Persyaratan</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-2"><span>2. </span>Pemberian
                            Lisensi</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-3"><span>3. </span>Pembatasan Pemberian
                            Lisensi</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-4"><span>4. </span>Privasi</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-5"><span>5. </span>Aplikasi Media
                            Sosial</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-6"><span>6. </span>Tanggung Jawab
                            Pengguna</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-7"><span>7. </span>Kekayaan
                            Intelektual</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-8"><span>8. </span>Jangka Waktu;
                            Penghentian; Modifikasi; Penangguhan; Pemutusan</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-9"><span>9. </span>Tanggapan Umpan
                            Balik</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-10"><span>10. </span>Perubahan
                            Ketentuan Layanan</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-11"><span>11. </span>Penyangkalan</a>
                    </li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-12"><span>12. </span>Batasan
                            Kewajiban</a></li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-13"><span>13. </span>Ganti Rugi</a>
                    </li>
                    <li><a class="paragraph-steps" data-scroll="" href="#section-14"><span>14. </span>Lain-lain</a></li>
                </ol>
            </div>

            <h2 id="section-1" class="subheadline-2 scroll-m-16 lg:scroll-m-28">1. Persyaratan</h2>

            <p class="paragraph-md">Layanan ini ditujukan hanya untuk pengguna yang berusia 18 tahun atau lebih. Dengan
                mengakses atau
                menggunakan Layanan, Anda menyatakan dan menjamin bahwa: (i) Anda berusia 18 tahun atau lebih dan
                memiliki kapasitas untuk kontrak; dan (ii) jika Anda mengakses atau menggunakan Layanan atas nama
                entitas, Anda memiliki kewenangan untuk mengikat entitas tersebut ke Ketentuan ini. Layanan dikontrol
                dan ditawarkan oleh Verisign dari Amerika Serikat. Verisign tidak membuat pernyataan, dan secara tegas
                menyangkal, bahwa Layanan sesuai atau tersedia untuk digunakan di yurisdiksi atau lokasi lain.</p>

            <h2 id="section-2" class="subheadline-2 scroll-m-16 lg:scroll-m-28">2. Pemberian Lisensi</h2>

            <p class="paragraph-md"><strong>2.1 Akses ke dan Penggunaan Layanan.</strong></p>

            <p class="paragraph-md">Tunduk pada ketentuan ini, Verisign dengan ini memberi akses kepada Anda lisensi
                terbatas, non-eksklusif,
                tidak dapat dipindahtangankan, tidak dapat disublisensikan, dapat dibatalkan, dan terbatas untuk
                mengakses dan menggunakan Layana hanya untuk: (i) mengirimkan Data Pencarian Nama Domain ke Layanan;
                dan(ii) menggunakan, menyalin ke komputer Anda dan/atau perangkat seluler Anda yang didukung atau
                mengirim email kepada Anda sendiri Data Hasil Pencarian Nama Domain dengan tujuan semata-mata untuk
                mendaftarkan satu atau lebih nama domain.</p>

            <p class="paragraph-md"><strong>2.2 Penggunaan Data Pencarian Nama Domain.</strong></p>

            <p class="paragraph-md">Anda memberi Verisign lisensi yang tidak dapat dibatalkan, terus-menerus,
                non-eksklusif, tidak dapat
                dipindahtangankan, tidak dapat disublisensikan untuk menggunakan, mereproduksi, dan mengirimkan Data
                Pencarian Nama Domain (termasuk Informasi Pribadi apa pun (sebagaimana dijelaskan di <a class="text-magenta-300 link-decoration"
                    href="https://www.verisign.com/in_ID/verisign-privacy-statement/index.xhtml?loc=in_ID"
                    target="_blank">Pernyataan Privasi</a> kami) yang terkandung di dalamnya) dan dijelaskan di pasal 4
                (Privasi) di bawah sehubungan dengan: (i) penyediaan Layanan, termasuk, namun tidak terbatas pada,
                pembuatan Data Hasil Pencarian Nama Domain; dan (ii) Penggunaan Data (sebagaimana dijelaskan di Pasal 4
                (Privasi) di bawah).</p>

            <h2 id="section-3" class="subheadline-2 scroll-m-16 lg:scroll-m-28">3. Pembatasan Pemberian Lisensi</h2>

            <p class="paragraph-md">Dengan ini Anda menyatakan, menjamin, dan setuju bahwa Anda akan: (i) menggunakan
                Layanan hanya untuk
                penggunaan pribadi dan non-komersial jika tidak dilarang secara hukum dan sesuai dengan Pasal 2.1 di
                atas; dan (ii) TIDAK menggunakan layanan untuk tujuan lain, termasuk namun tidak terbatas pada (a)
                menyewakan, menyewa-gunakan, mensublisensikan, menjual, mentransfer, mengalihkan, mendistribusikan
                kembali, menyelenggarakan, atau mengeksploitasi Layanan secara komersial, atau bagian apa pun darinya;
                (b) memodifikasi, membuat karya turunan, membongkar, mengkompilasi balik, berupaya menemukan kode
                sumber, atau merekayasa balik bagian mana pun dari Layanan; (c) mengakses Layanan untuk membangun
                layanan yang serupa atau kompetitif; (d) kecuali jika secara tegas disediakan di sini, menyalin,
                mereproduksi, mendistribusikan, menerbitkan ulang, mengunduh, memposting, menampilkan atau mengirimkan
                bagian apa pun dari Layanan, termasuk namun tidak terbatas pada Data Hasil Pencarian Nama Domain; (e)
                mengunggah, mengirimkan, atau mendistribusikan virus komputer, worm, atau perangkat lunak apa pun atau
                berupaya mendapatkan akses tidak sah untuk mengganggu, menonaktifkan, merusak atau mengubah, atau
                mengganggu komputer atau jaringan komunikasi, perangkat genggam, perangkat seluler, data, bagian mana
                pun dari Layanan, server tempat Layanan disimpan, server, komputer, atau basis data apa pun yang
                terhubung ke Layanan, atau sistem, perangkat, atau properti lainnya; (f) mengakses (atau mencoba
                mengakses) Layanan dengan cara selain melalui antarmuka situs web yang disediakan oleh Verisign; (g)
                menghapus, mengaburkan, atau mengubah pemberitahuan hak kepemilikan (termasuk pemberitahuan hak cipta
                dan merek dagang); (h) mengakali, menonaktifkan, atau mengganggu keamanan atau fungsionalitas Layanan
                atau fitur-fitur yang memberlakukan batasan pada penggunaan Layanan; (i) melanggar atau menyalahi hak
                kekayaan intelektual atau hak milik, hak publisitas atau privasi, atau hak lain dari pihak ketiga mana
                pun; (j) melanggar hukum, undang-undang, peraturan, atau regulasi apa pun, termasuk namun tidak terbatas
                pada undang-undang dan peraturan kontrol ekspor dan ekspor kembali yang berlaku; atau (k) menjalankan
                proses apa pun yang mengganggu kerja Layanan yang benar (termasuk dengan menempatkan beban yang tidak
                wajar pada infrastruktur Layanan).</p>

            <h2 id="section-4" class="subheadline-2 scroll-m-16 lg:scroll-m-28">4. Privasi</h2>

            <p class="paragraph-md">Kami menghormati privasi Anda dan berkomitmen untuk melindunginya. <a class="text-magenta-300 link-decoration"
                    href="https://www.verisign.com/en_US/privacy-center/index.xhtml?loc=in_ID"
                    target="_blank">Pernyataan Privasi</a> kami mengatur pemrosesan dari semua Informasi Pribadi yang
                dikumpulkan dari Anda sehubungan dengan penggunaan Anda atas Layanan, yang mungkin termasuk nama depan,
                nama belakang, tanggal dan waktu permintaan pencarian nama domain, alamat IP, informasi geolokasi,
                informasi Aplikasi Media Sosial (termasuk preferensi pengguna, data kategori bisnis, email, jenis
                kelamin, keterampilan, dan nama media sosial), bersama dengan Informasi Pribadi lainnya yang terkandung
                dalam Data Pencarian Nama Domain yang dapat diperoleh Verisign melalui Aplikasi Media Sosial (jika
                fungsi masuk tersebut disediakan oleh Verisign). Data Pencarian Nama Domain adalah informasi gabungan
                dan tidak ditautkan ke Informasi Pribadi apa pun selain informasi yang mungkin telah Anda kirimkan
                sebagai bagian dari pencarian nama domain (seperti nama depan dan nama belakang) atau informasi yang
                diperoleh melalui Aplikasi Media Sosial (jika fungsi masuk tersebut disediakan oleh Verisign).</p>

            <p class="paragraph-md">Harap tinjau dengan saksama Pernyataan Privasi kami untuk mempelajari tentang
                bagaimana kami mengumpulkan
                dan menggunakan Informasi Pribadi Anda sebelum mengakses Layanan.</p>

            <p class="paragraph-md">Data Pencarian Nama Domain dikumpulkan melalui Layanan digunakan seperti yang
                dijelaskan secara umum
                dalam Pernyataan Privasi kami dan lebih khusus lagi untuk (secara kolektif "<b><u>Penggunaan
                        Data</u></b>"):</p>

            <ul class="list-disc list-outside ml-6 space-y-4">
                <li>
                    <p class="paragraph-md">
                        Memberikan Data Hasil Pencarian Nama Domain yang relevan dan dipersonalisasi sebagai tanggapan
                        atas
                        Data Pencarian Nama Domain yang diberikan ke Layanan atau diakses oleh Layanan melalui Aplikasi
                        Media Sosial (jika fungsi masuk tersebut disediakan oleh Verisign);
                </li>
                <li>
                    <p class="paragraph-md">Mendiagnosa masalah dengan dan/atau meningkatkan Layanan;</p>
                    </p>
                </li>
                <li>
                    <p class="paragraph-md">Mengumpulkan informasi gabungan yang luas untuk membantu Verisign memahami
                        minat pengguna akhir;</p>
                </li>
                <li>
                    <p class="paragraph-md">Memasarkan Layanan ke pengguna akhir potensial lainnya;</p>
                </li>
                <li>
                    <p class="paragraph-md">Meningkatkan kinerja Layanan;</p>
                </li>
                <li>
                    <p class="paragraph-md">
                        Memvalidasi, memodifikasi, meningkatkan, dan/atau memperbaiki produk, layanan, dan/atau data
                        Verisign, termasuk Layanan dan Data Hasil Pencarian Nama Domain; dan
                    </p>
                </li>
                <li>
                    <p class="paragraph-md">
                        Mengevaluasi apakah pendaftaran nama domain baru diselesaikan sebagai hasil penggunaan Anda atas
                        Layanan.
                    </p>
                </li>
            </ul>

            <p class="paragraph-md">Kami tidak dengan sengaja mengumpulkan atau meminta Informasi Pribadi dari siapa pun
                yang berusia di
                bawah 13 tahun atau dengan sengaja mengizinkan orang tersebut untuk menggunakan Layanan. Jika Anda yakin
                bahwa kami mungkin memiliki Informasi Pribadi apa pun dari atau tentang seorang anak berusia di bawah 13
                tahun, harap hubungi kami di <a class="text-magenta-300 link-decoration" href="mailto:privacystatement@verisign.com"
                    target="_self">privacystatement@verisign.com</a>.</p>

            <h2 id="section-5" class="subheadline-2 scroll-m-16 lg:scroll-m-28">5. Aplikasi Media Sosial</h2>

            <p class="paragraph-md">Layanan mungkin mengandung tautan ke dan/atau menggunakan fungsi dari Aplikasi Media
                Sosial (jika fungsi
                masuk tersebut disediakan oleh Verisign), termasuk fungsi yang memungkinkan Anda tehubung ke Layanan
                menggunakan kredensial nama pengguna dan kata sandi untuk Aplikasi Media Sosial agar Layanan dapat
                memberikan Anda Data Hasil Pencarian Nama Domain yang diperoleh Verisign melalui data profil yang
                terdapat dalam Aplikasi Media Sosial. Anda mengerti dan setuju bahwa: (i) Verisign tidak mengontrol
                fungsi Aplikasi Media Sosial apa pun; (ii) setiap penggunaan informasi yang dikumpulkan oleh Aplikasi
                Media Sosial dari Anda diatur oleh kebijakan privasi, ketentuan layanan, dan pengaturan Anda pada
                Aplikasi Media Sosial; (iii) Anda bertanggung jawab sepenuhnya untuk meninjau kebijakan privasi,
                ketentuan layanan, dan pengaturan Anda pada Aplikasi Media Sosial; dan (iv) Verisign tidak bertanggung
                jawab atas kebijakan dan praktik privasi, syarat, ketentuan atau aktivitas lainnya, atau fungsi yang
                disediakan oleh Aplikasi Media Sosial apa pun.</p>

            <h2 id="section-6" class="subheadline-2 scroll-m-16 lg:scroll-m-28">6. Tanggung Jawab Pengguna</h2>

            <p class="paragraph-md">Anda sepenuhnya bertanggung jawab untuk: (i) membuat semua pengaturan yang
                diperlukan untuk mengakses dan
                menggunakan Layanan, termasuk, sebagaimana berlaku, memastikan komputer dan/atau perangkat seluler Anda
                yang didukung termasuk perangkat lunak atau koneksi internet yang memadai; (ii) setiap dan semua biaya,
                termasuk namun tidak terbatas pada, biaya internet atau data seluler, yang mungkin Anda keluarkan saat
                mengakses dan menggunakan Layanan; (iii) segala biaya atau kewajiban yang timbul dari, atau terkait
                dengan, pendaftaran nama domain yang disarankan atau tercantum dalam Data Hasil Pencarian Nama Domain
                atau penggunaan Anda atas Layanan; dan (iv) memastikan bahwa setiap nama domain yang Anda daftarkan
                sebagai hasil dari Data Hasil Pencarian Nama Domain atau penggunaan Anda atas Layanan tidak melanggar
                merek dagang pihak ketiga mana pun atau kekayaan intelektual lainnya.</p>

            <p class="paragraph-md">Layanan mungkin mengandung tautan ke situs pihak ketiga lainnya dan layanan yang
                tidak dikontrol atau
                dipelihara oleh Verisign. Kami tidak bertanggung jawab atas praktik privasi atau aktivitas lain apa pun
                dari situs atau layanan pihak ketiga mana pun.</p>

            <h2 id="section-7" class="subheadline-2 scroll-m-16 lg:scroll-m-28">7. Kekayaan Intelektual</h2>

            <p class="paragraph-md">Anda mengakui dan menyetujui bahwa Verisign dan pemberi lisensinya memiliki segala
                hak, kepemilikan dan
                kepentingan, termasuk semua hak kekayaan intelektual dan hak kepemilikan lainnya, termasuk, namun tidak
                terbatas pada, terdaftar dan tidak terdaftar, hak cipta Amerika Serikat dan asing, merek dagang, merek
                jasa, desain dagang, nama dagang, nama perusahaan, logo, penemuan, paten, aplikasi paten, perangkat
                lunak, pengetahuan, dan semua kekayaan intelektual dan hak milik lainnya (dari setiap jenis dan sifat di
                seluruh alam semesta dan bagaimanapun ditentukan) di dalam dan pada Layanan, Data Pencarian Nama Domain,
                Data Hasil Pencarian Nama Domain, dan seluruh isinya, materi, fitur, fungsi (termasuk namun tidak
                terbatas pada semua informasi, perangkat lunak, teknologi, metodologi, teks, tampilan, gambar, video,
                dan audio, serta desain, pemilihan dan penyusunannya), dan layanan lain yang disertakan atau disediakan
                untuk Anda melalui Layanan atau Verisign ("<b><u>Karya Verisign</u></b>") dan Tanggapan Umpan Balik
                (sebagaimana dijelaskan di pasal 9 di bawah), dan tidak ada hak yang disebutkan sebelumnya yang
                dialihkan kepada Anda di bawah ini.</p>

            <h2 id="section-8" class="subheadline-2 scroll-m-16 lg:scroll-m-28">8. Jangka Waktu; Penghentian; Modifikasi; Penangguhan; Pemutusan
            </h2>

            <p class="paragraph-md">Ketentuan ini akan berlaku efektif pada hari pertama Anda mengakses dan/atau
                menggunakan Layanan dan akan
                tetap berlaku sepenuhnya selama Anda terus mengakses dan/atau menggunakan Layanan, kecuali jika diakhiri
                sebagaimana ditetapkan dalam Pasal ini. <b>Verisign dapat menghentikan lisensi Anda berdasarkan Pasal
                    2.1 di atas kapan saja, tanpa pemberitahuan, atas kebijakannya sendiri, untuk alasan apa pun,
                    termasuk namun tidak terbatas pada kegagalan Anda untuk mematuhi Ketentuan ini, setiap dan semua
                    perjanjian lain yang secara tegas dimasukkan sebagai referensi, serta setiap dan semua kebijakan
                    atau pemberitahuan hukum lain yang kami publikasikan terkait Layanan.</b> Ketentuan di Pasal 4, 7,
                8, 9, dan 11 sampai 14 dari Ketentuan ini akan tetap berlaku setelah lisensi Anda dihentikan berdasarkan
                Pasal 2.1. Verisign berhak, kapan saja, untuk memodifikasi, menangguhkan, atau memutuskan Layanan, atau
                bagian apa pun darinya, atas kebijakannya sendiri dengan atau tanpa pemberitahuan kepada Anda.</p>

            <h2 id="section-9" class="subheadline-2 scroll-m-16 lg:scroll-m-28">9. Tanggapan Umpan Balik</h2>

            <p class="paragraph-md">Anda dapat memilih untuk, atau kami dapat mengundang Anda untuk, mengirimkan
                komentar, saran, atau ide
                tentang Layanan, termasuk bagaimana cara meningkatkan Layanan ("Tanggapan Umpan Balik"). Dengan
                mengirimkan Tanggapan Umpan Balik apapun, Anda setuju bahwa pengajuan Anda bersifat sukarela, tanpa
                alasan, tidak diminta, dan tanpa batasan, dan tidak akan menempatkan Verisign di bawah jaminan fidusia
                atau kewajiban lainnya.</p>

            <h2 id="section-10" class="subheadline-2 scroll-m-16 lg:scroll-m-28">10. Perubahan Ketentuan Layanan</h2>

            <p class="paragraph-md">Verisign dapat memperbarui Ketentuan ini dari waktu ke waktu. Saat kami
                melakukannya, kami akan merevisi
                tanggal "pembaruan terakhir" di bagian atas Ketentuan ini. Verisign tidak bertanggung jawab untuk
                memberi tahu Anda tentang perubahan ketentuan ini. Anda bertanggung jawab untuk memeriksa Ketetentuan
                ini dan semua dokumen lain yang digabungkan sebagai referensi, untuk pembaruan secara berkala. Untuk
                perubahan pada Ketentuan ini yang kami anggap material, kami akan berusaha untuk menempatkan
                pemberitahuan yang jelas di halaman beranda Layanan mengenai perubahan tersebut. Jika suatu saat Anda
                tidak menyetujui Ketentuan ini, jangan mengakses atau menggunakan Layanan.</p>

            <h2 id="section-11" class="subheadline-2 scroll-m-16 lg:scroll-m-28">11. Penyangkalan</h2>

            <p class="paragraph-md">SEJAUH DIIZINKAN OLEH HUKUM YANG BERLAKU, KARYA VERISIGN (TERMASUK LAYANAN)
                DISEDIAKAN OLEH VERISIGN ATAS
                DASAR "SEBAGAIMANA ADANYA," "DI MANA ADANYA," DAN "SEBAGAIMANA TERSEDIA", TANPA PERNYATAAN DAN JAMINAN
                APA PUN. VERISIGN MENYANGKAL SETIAP DAN SEMUA JAMINAN, TERSURAT, TERSIRAT, ATAU UNDANG-UNDANG, TERMASUK,
                TANPA BATAS, JAMINAN TERSIRAT ATAS DAPAT DIPERDAGANGKAN, KESESUAIAN UNTUK TUJUAN TERTENTU, NON
                PELANGGARAN, KETEPATAN ATAU KELENGKAPAN TANGGAPAN, HASIL KINERJA (TERMASUK KETERSEDIAAN NAMA DOMAIN),
                USAHA KERAS, ATAU BAHWA KARYA VERISIGN (TERMASUK LAYANAN) AKAN: (A) BEBAS DARI VIRUS ATAU KOMPONEN
                BERBAHAYA LAINNYA; (B) TIDAK TERGANGGU ATAU BEBAS DARI KESALAHAN; ATAU (C) BEBAS DARI KONTEN YANG
                MENGGANGGU, TIDAK BENAR, ATAU KONTEN YANG TIDAK PANTAS, ATAU BAHWA PENDAFTARAN ANDA ATAS NAMA DOMAIN
                BERDASARKAN DATA PENELUSURAN NAMA DOMAIN TIDAK AKAN MELANGGAR MEREK DAGANG PIHAK KETIGA MANA PUN ATAU
                KEKAYAAN INTELEKTUAL LAINNYA.</p>

            <h2 id="section-12" class="subheadline-2 scroll-m-16 lg:scroll-m-28">12. Batasan Kewajiban</h2>

            <p class="paragraph-md">12.1 SEJAUH DIIZINKAN OLEH HUKUM YANG BERLAKU, DALAM KEADAAN APA PUN VERISIGN,
                AFILIASINYA, PEJABATNYA,
                ANGGOTA, DIREKSI, KARYAWAN, PENYEDIA LAYANAN, AGEN, PEMBERI LISENSI, PEMASOK, PENERUS DAN PENERIMA TUGAS
                (SECARA KOLEKTIF, "PIHAK VERISIGN") BERTANGGUNG JAWAB KEPADA ANDA ATAS KERUSAKAN TIDAK LANGSUNG, TIDAK
                TERDUGA, KHUSUS, GANTI RUGI, ATAU KONSEKUENSIAL APA PUN YANG TMBUL DALAM ATAU TERKAIT DENGAN KARYA
                VERISIGN (TERMASUK LAYANAN) ATAU KETENTUAN INI (TERMASUK, TANPA BATAS, KEHILANGAN BISNIS, KEUNTUNGAN,
                ASET TAK BERWUJUD, PENGGUNAAN, DATA, ATAU KEUNGGULAN EKONOMI LAINNYA), DALAM SETIAP KASUS BAIK
                BERDASARKAN UNDANG-UNDANG, JAMINAN, KONTRAK, PERBUATAN MELAWAN HUKUM, ATAU TEORI HUKUM LAINNYA, DAN
                APAKAH VERISIGN DISARANKAN ATAU TIDAK TENTANG KEMUNGKINAN KERUSAKAN TERSEBUT.</p>

            <p class="paragraph-md">12.2 SEJAUH DIIZINKAN OLEH HUKUM YANG BERLAKU, DALAM KEADAAN APA PUN VERISIGN ATAU
                PIHAK VERISIGN
                BERTANGGUNG JAWAB ATAS KERUSAKAN LANGSUNG YANG TIMBUL DALAM ATAU TERKAIT DENGAN KARYA VERISIGN (TERMASUK
                LAYANAN) ATAU KETENTUAN INI MELEBIHI SERATUS DOLAR AMERIKA SERIKAT ($100 USD).</p>

            <p class="paragraph-md">12.3 ANDA SETUJU BAHWA VERISIGN TIDAK BERTANGGUNG JAWAB KEPADA ANDA ATAU PIHAK
                KETIGA MANA PUN ATAS
                PENGHENTIAN, MODIFIKASI, PENANGGUHAN, ATAU PEMUTUSAN LAYANAN, ATAU BAGIAN APA PUN DARINYA.</p>

            <h2 id="section-13" class="subheadline-2 scroll-m-16 lg:scroll-m-28">13. Ganti Rugi</h2>

            <p class="paragraph-md">Anda setuju untuk mengganti rugi, membela, dan membebaskan Pihak Verisign dari dan
                terhadap klaim,
                kewajiban, kerusakan, penilaian, penghargaan, kerugian, biaya, pengeluaran, atau ongkos (termasuk biaya
                pengacara yang wajar) yang timbul dari atau terkait dengan: (i) pelanggaran terhadap Ketentuan ini; (ii)
                penggunaan Layanan (termasuk, namun tidak terbatas pada pengiriman Data Pencarian Nama Domain), (iii)
                penggunaan Karya Verisign (termasuk Layanan), selain yang diizinkan secara tersurat dalam Ketentuan ini;
                dan (iv) penggunaan informasi apa pun yang diperoleh dari Layanan, termasuk Data Hasil Pencarian Nama
                Domain.</p>

            <h2 id="section-14" class="subheadline-2 scroll-m-16 lg:scroll-m-28">14. Lain-lain</h2>

            <p class="paragraph-md"><strong>14.1 Keadaan Kahar</strong></p>

            <p class="paragraph-md">Tanpa membatasi Pasal 11, 12, dan 13 di atas, Verisign tidak berkewajiban atau
                bertanggung jawab kepada
                Anda sejauh kegagalan atau penundaan disebabkan oleh atau hasil dari tindakan atau keadaan di luar
                kendali Verisign yang wajar, termasuk, tanpa batasan, tindakan Tuhan, banjir, kebakaran, gempa bumi,
                serangan siber, ledakan, tindakan pemerintah, perang, invasi atau permusuhan (baik perang dideklarasikan
                atau tidak), ancaman atau tindakan teroris, kerusuhan atau kerusuhan sipil lainnya, darurat nasional,
                revolusi, pemberontakan, epidemi, larangan bekerja, pemogokan atau perselisihan perburuhan lainnya (baik
                yang berhubungan dengan tenaga kerja kita maupun tidak), atau pembatasan serta penundaan yang
                mempengaruhi pengangkut, produsen, atau ketidakmampuan atau keterlambatan dalam memperoleh pasokan bahan
                yang sesuai dan memadai, kerusakan material atau telekomunikasi atau pemadaman listrik.</p>

            <p class="paragraph-md"><strong>14.2 Peraturan Pemerintah; Sengketa</strong></p>

            <p class="paragraph-md">Ketentuan ini akan diatur oleh hukum Persemakmuran Virginia, tidak termasuk aturan
                konflik hukumnya.</p>

            <p class="paragraph-md">ANDA DAN VERISIGN SETUJU BAHWA FORUM SATU-SATUNYA DAN EKSKLUSIF DAN PENYELESAIAN
                UNTUK SETIAP DAN SEMUA
                SENGKETA DAN KLAIM YANG BERKAITAN DENGAN CARA APA PUN UNTUK ATAU YANG MUNCUL DARI KETENTUAN INI ADALAH
                ARBITRASE YANG BERSIFAT FINAL DAN MENGIKAT, BUKAN GUGATAN PENGADILAN ATAU CLASS ACTION.</p>

            <p class="paragraph-md">Baik Verisign atau Anda dapat menuntut setiap sengketa antara Verisign dengan Anda
                tentang atau
                melibatkan penggunaan Layanan oleh Anda, termasuk Karya Verisign dan/atau Ketentuan ini harus
                diselesaikan dengan arbitrase menggunakan Aturan Arbitrase Komersial dari American Arbitration
                Association (AAA) di New York, New York, AS, dengan ketentuan bahwa hal tersebut di atas tidak
                menghalangi Verisign untuk meminta putusan ganti rugi di pengadilan dengan yurisdiksi yang kompeten.
                Penerapan putusan tersebut dapat dilakukan di pengadilan manapun dalam yurisdiksi yang kompeten.</p>

            <p class="paragraph-md">SEJAUH DIIZINKAN OLEH HUKUM YANG BERLAKU, ARBITRASE ATAU KLAIM BERDASARKAN KETENTUAN
                INI TIDAK DAPAT
                DIGABUNGKAN KE ARBITRASE ATAU KLAIM LAIN APA PUN, DAN TIDAK ADA PROSES CLASS ARBITRATION YANG
                DIPERBOLEHKAN.</p>

            <p class="paragraph-md"><strong>14.3 Tidak ada Pengalihan</strong></p>

            <p class="paragraph-md">Ketentuan ini, dan semua hak dan lisensi yang diberikan di bawah ini, tidak dapat
                dialihkan atau
                ditetapkan oleh Anda tanpa persetujuan tertulis sebelumnya dari Verisign, tetapi dapat ditetapkan oleh
                Verisign tanpa batasan. Percobaan pengalihan apa pun oleh Anda tanpa persetujuan tertulis sebelumnya
                dari Verisign akan batal dan tidak berlaku.</p>

            <p class="paragraph-md"><strong>14.4 Tidak ada Pihak Ketiga Penerima Manfaat</strong></p>

            <p class="paragraph-md">Ketentuan ini jangan dan tidak ditujukan untuk memberi hak atau upaya hukum apa pun
                kepada orang atau
                entitas mana pun selain Anda.</p>

            <p class="paragraph-md"><strong>14.5 Pemberitahuan</strong></p>

            <p class="paragraph-md"><b><u><i>Untuk Anda</i></u></b>. Kami dapat memberikan pemberitahuan apa pun kepada
                Anda berdasarkan
                Ketentuan ini dengan memposting ke situs web yang menghosting Layanan. Pemberitahuan yang kami posting
                akan berlaku efektif pada hari kami mempostingnya.</p>

            <p class="paragraph-md"><b><u><i>Untuk Kami</i></u></b>. Untuk memberi kami pemberitahuan berdasarkan
                Ketentuan ini, Anda harus
                menghubungi kami sebagai berikut: Pemberitahuan semacam itu dapat disampaikan secara pribadi atau
                melalui surat resmi (prangko terbayar), layanan pengiriman semalam yang diakui secara internasional dan
                secara komersial (seperti Federal Express atau DHL), atau kurir. Pemberitahuan akan dianggap telah
                diberikan setelah pengiriman pribadi atau pengiriman melalui kurir, pada hari kerja kedua setelah
                tanggal pengiriman untuk pemberitahuan yang dikirim melalui pengiriman semalam, atau pada hari kerja
                kelima setelah tanggal pengiriman untuk pemberitahuan yang dikirim melalui surat resmi. Salah satu Pihak
                dapat mengubah alamat tujuan pengiriman pemberitahuan melalui pemberitahuan tertulis (tidak termasuk
                email) kepada Pihak lainnya.</p>

            <p class="paragraph-md"><i>Notice to VeriSign, Inc.<br>
                    Attn: General Counsel<br>
                    12061 Bluemont Way<br>
                    Reston, VA 20190<br>
                    United States of America</i></p>

            <p class="paragraph-md"><strong>14.6 Seluruh Perjanjian; Keterpisahan; Tanpa Pengesampingan</strong></p>

            <p class="paragraph-md">Ketentuan ini, serta setiap dan semua perjanjian lain yang secara tegas dimasukkan
                sebagai referensi, dan
                setiap serta semua kebijakan lain atau pemberitahuan hukum lainnya yang kami terbitkan terkait dengan
                Layanan merupakan keseluruhan perjanjian antara Anda dan Verisign terkait penggunaan Anda atas Layanan.
                Jika ada ketetapan dari Ketentuan ini yang dianggap tidak berlaku, tidak dapat diberlakukan atau
                dibatalkan oleh pengadilan dengan yurisdiksi yang kompeten, ketidakberlakuan ketetapan tersebut tidak
                akan mempengaruhi berlakunya ketetapan lainnya dari Ketentuan ini, yang akan tetap berlaku dan memiliki
                kekuatan hukum penuh. Tidak ada pengesampingan ketentuan apa pun dari Ketentuan ini yang akan dianggap
                sebagai pengesampingan lebih lanjut atau berkelanjutan atas ketentuan tersebut atau ketentuan lainnya,
                dan kegagalan Verisign untuk menegaskan hak atau ketetapan apa pun berdasarkan Ketentuan ini tidak akan
                dianggap sebagai pengesampingan hak atau ketetapan tersebut. Pengesampingan hak atau ketetapan apa pun
                hanya akan berlaku efektif jika dibuat secara tertulis dan ditandatangani oleh perwakilan resmi
                Verisign.</p>
            <p class="paragraph-md">© Hak Cipta 2026 VeriSign, Inc. Seluruh hak dilindungi undang-undang.</p>

        </div>
    </section>
</main>

@endsection
