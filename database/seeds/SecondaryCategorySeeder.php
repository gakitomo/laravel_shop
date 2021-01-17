<?php

use Illuminate\Database\Seeder;
use App\Models\SecondaryCategory;

class SecondaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SecondaryCategory::class)->create([
            'id'                  => 1,
            'name'                => 'J-POP',
            'sort_no'             => 1,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 2,
            'name'                => 'ロック／ポップス',
            'sort_no'             => 2,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 3,
            'name'                => 'ソウル／ラップ',
            'sort_no'             => 3,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 4,
            'name'                => 'クラブ',
            'sort_no'             => 4,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 5,
            'name'                => 'カントリー／ブルース',
            'sort_no'             => 5,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 6,
            'name'                => 'ジャズ／クラシック',
            'sort_no'             => 6,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 7,
            'name'                => 'サウンドトラック',
            'sort_no'             => 7,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 8,
            'name'                => 'アニメ／ゲーム',
            'sort_no'             => 8,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 9,
            'name'                => 'その他',
            'sort_no'             => 9,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 10,
            'name'                => 'コミック',
            'sort_no'             => 10,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 11,
            'name'                => '雑誌',
            'sort_no'             => 11,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 12,
            'name'                => '単行本',
            'sort_no'             => 12,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 13,
            'name'                => '文庫',
            'sort_no'             => 13,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 14,
            'name'                => '新書',
            'sort_no'             => 14,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 15,
            'name'                => '絵本',
            'sort_no'             => 15,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 16,
            'name'                => 'その他',
            'sort_no'             => 16,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 17,
            'name'                => 'テレビゲーム',
            'sort_no'             => 17,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 18,
            'name'                => 'PCゲーム',
            'sort_no'             => 18,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 19,
            'name'                => 'その他',
            'sort_no'             => 19,
            'primary_category_id' => 4,
        ]);
    }
}
