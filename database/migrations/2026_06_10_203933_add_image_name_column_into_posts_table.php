<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('thumbnail_file_name', 225)->nullable();
        });

        $posts = DB::table('posts')->get();

        foreach ($posts as $post) {
            $slug = \Illuminate\Support\Str::slug($post->title);

            DB::table('posts')
                ->where('id', $post->id)
                ->update([
                    'thumbnail_file_name' => $slug
                ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('thumbnail_file_name');
        });
    }
};
