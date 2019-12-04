<?php

use Illuminate\Database\Seeder;

class PwebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $binaryFile = 'http://localhost/pweb/public/img/6.jpg';
        DB::table('pwebs')->insert([
            [
                'icon' => $binaryFile
            ]
        ]);
    }
    
}
