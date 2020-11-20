<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\produks;

class uts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	produks::create(
			[
        	'Kategori' => 'Keyboard',
            'Keterangan' => 'Segala macam keyboard PC, Laptop, TV'
        	],
        );
        produks::create(
           [
            'Kategori' => 'Mouse',
            'Keterangan' => 'Segala macam mouse Wire maupun Wireless'
            ],
        );
        produks::create(
            [
            'Kategori' => 'Flashdisk',
            'Keterangan' => 'Segala macam merek, ukuran Flashdisk'
            ]
        );
        	
        	
    	
        
    }
}
