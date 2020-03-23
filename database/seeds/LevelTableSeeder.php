<?php

use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert(
        [
        'name' 	=> 'Quản trị toàn hệ thống',
        'created_at'	=>now(),
        'updated_at'	=>now(),
        ]
    	);
    	DB::table('levels')->insert(
        [
        'name' 	=> 'Ban giám đốc',
        'created_at'	=>now(),
        'updated_at'	=>now(),
        ]
    	);
    	DB::table('levels')->insert(
        [
        'name' 	=> 'Cấp trưởng phòng',
        'created_at'	=>now(),
        'updated_at'	=>now(),
        ]
    );
    	DB::table('levels')->insert(
        [
        'name' 	=> 'NV Tư vấn',
        'created_at'	=>now(),
        'updated_at'	=>now(),
        ]
    );
    	DB::table('levels')->insert(
        [
        'name' 	=> 'NV Biên tập',
        'created_at'	=>now(),
        'updated_at'	=>now(),
        ]
    );
    	DB::table('levels')->insert(
        [
        'name' 	=> 'NV Thiết kế',
        'created_at'	=>now(),
        'updated_at'	=>now(),
        ]
    );
    	DB::table('levels')->insert(
        [
        'name' 	=> 'NV Cộng tác',
        'created_at'	=>now(),
        'updated_at'	=>now(),
        ]
    );
    }
}
