<?php

use App\Caption;
use App\Content;
use App\Seo;
use App\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'naimvaiya@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $homepage = Content::firstOrCreate(['id' => 1], ['page' => 'homepage']);
        $caption = Content::firstOrCreate(['id' => 2], ['page' => 'caption']);
        $captions = Caption::latest()->get();
        $meta = Seo::firstOrCreate(['id' => 1]);
        $settings = Setting::firstOrCreate(['id' => 1]);
    }
}
