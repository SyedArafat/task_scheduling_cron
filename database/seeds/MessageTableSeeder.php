<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('message')->insert([
            'title'=>"Message-1",
            'body'=>"Greeting from Arafat @".Carbon::now('Asia/Dhaka')->format('h:i:s'),
            'time'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
        ]);
    }
}
