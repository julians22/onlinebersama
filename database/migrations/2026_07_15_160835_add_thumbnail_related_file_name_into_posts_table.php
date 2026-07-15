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
            $table->string('thumbnail_related_file_name')->nullable()->after('thumbnail_file_name');
        });

        $posts = DB::table('posts')->get();

        foreach ($posts as $post) {
            DB::table('posts')
                ->where('id', $post->id)
                ->update([
                    'thumbnail_related_file_name' => $post->thumbnail_file_name
                ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('thumbnail_related_file_name');
        });
    }
};
