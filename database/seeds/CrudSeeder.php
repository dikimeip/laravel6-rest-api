<?php

use Illuminate\Database\Seeder;
use App\crud;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        crud::create([
        	'nama' => 'andi',
        	'kelas' => '4B',
        	'alamat' =>'Lamongan'
        ]);
    }
}
