<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('makanans')->insert([
        	'nama_makanan' => 'Nasi Goreng',
        	'harga' => '15.000',
        	'stok' => '100',
        	'keterangan' => 'Nasi Goreng dengan aneka toping, seperti Sosis, Telur, Pentol dan juga masih banyak lainnya'
        	'gambar' => 'nasg.jpeg',
        ]);

        DB::table('makanans')->insert([
        	'nama_makanan' => 'Ayam Panggang',
        	'harga' => '22.000',
        	'stok' => '100',
        	'keterangan' => 'Satu Potong Ayam Panggang dengan rasa yang nikmat dan dapat satu porsi nasi panas'
        	'gambar' => 'am.jpeg',
        ]);

        DB::table('makanans')->insert([
        	'nama_makanan' => 'Nasi Kuning',
        	'harga' => '15.000',
        	'stok' => '100',
        	'keterangan' => 'Nasi Kuning dengan cita rasa yang khas, dilengkapi dengan ayam, kering tempe, telur dan masih banyak lainnya '
        	'gambar' => 'nasg.jpeg',
        ]);

        DB::table('makanans')->insert([
        	'nama_makanan' => 'Sate',
        	'harga' => '15.000',
        	'stok' => '100',
        	'keterangan' => 'Daging Sate yang dibakar hingga juice membuat anda ketagihan'
        	'gambar' => 'nasg.jpeg',
        ]);

        DB::table('makanans')->insert([
        	'nama_makanan' => 'Capcay',
        	'harga' => '18.000',
        	'stok' => '100',
        	'keterangan' => 'Capcay dilengkapi oleh sayur brokoli, sawi putih, kembang kol, tongkol jagung, wortel, udang, irisan sosis, dan jamur'
        	'gambar' => 'cc.jpeg',
        ]);

        DB::table('makanans')->insert([
        	'nama_makanan' => 'Dessert Box',
        	'harga' => '35.000',
        	'stok' => '100',
        	'keterangan' => 'Dessert Box yang sangat nikmat, krimnya lumer, brownisnya lembut, topping yang melimpah'
        	'gambar' => 'bx.jpeg',
        ]);

        DB::table('makanans')->insert([
        	'nama_makanan' => 'Kue Sus',
        	'harga' => '4.000',
        	'stok' => '100',
        	'keterangan' => 'Kue Tradisional yang masih sangat banyak dicari karena rasanya yang nikmat'
        	'gambar' => 'ss.jpeg',
        ]);



    }
}
