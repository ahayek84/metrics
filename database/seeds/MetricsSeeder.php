<?php

use Illuminate\Database\Seeder;

class MetricsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mertics')->insert([
            'from_date' => Str::random(10),
            'to_date' => Str::random(10).'@gmail.com',
            'metric_name' => bcrypt('password'),
            'metric_value' => bcrypt('password'),
        ]);
    }
}
