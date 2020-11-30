<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\prak7;

class prakk7 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        prak7::create(
			[
        	'namaproduk' => 'flashdisk 4gb kengstong',
            'id_kat' => '3',
            'qty' => '210',
            'hargajual' => '60000',
             'hargabeli' => '45000'
        	],
        	[
        	'namaproduk' => 'flashdisk 8gb kengstong',
            'id_kat' => '3',
            'qty' => '210',
            'hargajual' => '85000',
             'hargabeli' => '60000'
        	]
        );
    }
}
