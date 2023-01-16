<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Illuminate\Database\Seeder;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate();
        Cgy::create([
            'id' => 1,
            'parent_id' => null,
            'title' => '最新消息',
            'pic' => null,
            'desc' => null,
            'enabled' => 1,
            'sort' => 0,
            'type' => null,
        ]);
        Cgy::create([
            'id' => 2,
            'parent_id' => null,
            'title' => '時事',
            'pic' => null,
            'desc' => null,
            'enabled' => 1,
            'sort' => 0,
            'type' => null,
        ]);
        Cgy::create([
            'id' => 3,
            'parent_id' => null,
            'title' => '運動',
            'pic' => null,
            'desc' => null,
            'enabled' => 1,
            'sort' => 0,
            'type' => null,
        ]);
        Cgy::create([
            'id' => 4,
            'parent_id' => null,
            'title' => '美食',
            'pic' => null,
            'desc' => null,
            'enabled' => 1,
            'sort' => 0,
            'type' => null,
        ]);
        Cgy::create([
            'id' => 5,
            'parent_id' => null,
            'title' => '新奇',
            'pic' => null,
            'desc' => null,
            'enabled' => 1,
            'sort' => 0,
            'type' => null,
        ]);
        Cgy::create([
            'id' => 6,
            'parent_id' => null,
            'title' => '科技',
            'pic' => null,
            'desc' => null,
            'enabled' => 1,
            'sort' => 0,
            'type' => null,
        ]);

    }
}