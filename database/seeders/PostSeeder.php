<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Article Data
        // 1. Apa Itu Penerusan Nama Domain?
        // 2. Cara Memilih Pembuat Situs Web
        // 3. Daftar Periksa: Membuat Situs Web
        // 4. Manfaat Alamat Email Bisnis Khusus
        // 5. Lima Manfaat Situs Web Bisnis
        // 6. Cara Membuat Alamat Email Bisnis Khusus
        // 7. Empat Cara Untuk Menggunakan Penerusan Nama Domain
        // 8. Bagaimana Cara Memilih dan Mendaftarkan Nama Domain .com untuk Bisnis Anda dalam Tiga Langkah
        // 9. Sepuluh Cara Memasarkan Bisnis Dengan Nama Domain .com
        // 10. Pertanyaan Usaha Kecil Tentang Membangun Kehadiran Online

        $post_category = PostCategory::create([
            'name' => 'Artikel'
        ]);

        $articles = [
            'Apa Itu Penerusan Nama Domain?',
            'Cara Memilih Pembuat Situs Web',
            'Daftar Periksa: Membuat Situs Web',
            'Manfaat Alamat Email Bisnis Khusus',
            'Lima Manfaat Situs Web Bisnis',
            'Cara Membuat Alamat Email Bisnis Khusus',
            'Empat Cara Untuk Menggunakan Penerusan Nama Domain',
            'Bagaimana Cara Memilih dan Mendaftarkan Nama Domain .com untuk Bisnis Anda dalam Tiga Langkah',
            'Sepuluh Cara Memasarkan Bisnis Dengan Nama Domain .com',
            'Pertanyaan Usaha Kecil Tentang Membangun Kehadiran Online'
        ];

        foreach ($articles as $article) {
            Post::create([
                'title' => $article,
                'type' => 'article',
                'post_category_id' => $post_category->id,
                'status' => 'published',
                'read_time' => rand(1, 10) . ' menit',
                'meta_title' => $article,
                'meta_description' => $article . ' description',
                'meta_keywords' => $article . ', keyword'
            ]);
        }

        // update article post template view path, use slug of the post title
        $posts = $post_category->posts()->where('type', 'article')->get();
        foreach ($posts as $post) {

            // create view file for the post template view path
            $view_path = resource_path('views/articles/' . $post->slug . '.blade.php');
            if (!file_exists($view_path)) {

                Artisan::call('make:view', [
                    'name' => 'contents.articles.dynamic.' . $post->slug,
                    '--force' => true
                ]);
                // update the post template view path to use the new view file
                $post->update([
                    'template-view-path' => $post->slug
                ]);
            }
        }
    }
}
