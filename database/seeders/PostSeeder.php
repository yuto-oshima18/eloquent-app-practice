<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//追加
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //追加
        DB::table('posts')->insert([
            ['title'=>'はじめての投稿','content'=>'Eloquentで作成しました。','published_at'=>now(),'created_at'=>now(),'updated_at'=>now()],
            ['title'=>'2つ目の投稿','content'=>'Eloquentで作成しました。','published_at'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
