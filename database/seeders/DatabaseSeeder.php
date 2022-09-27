<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kost;
use App\Models\Category;
// use App\Models\Fasilitas;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::create([
        //     'name' => 'ervina hardiyat',
        //     'email' => 'ervinamagang@gmail.com',
        //     'password' => bcrypt('katasandiku1'),
        //     'level' => 'admin'
        // ]);

        // User::create([
        //     'name' => 'pinokkk',
        //     'email' => 'pinok1213@gmail.com',
        //     'password' => bcrypt('pinokio'),
        //     'level' => 'customer'
        // ]);

        Category::create([
            'name' => 'kitchen',
            'slug' => 'khusus-putri'
        ]);

        Category::create([
            'name' => 'room',
            'slug' => 'khusus-putra'
        ]);

        Category::create([
            'name' => 'cat',
            'slug' => 'kontrakan'
        ]);

        // Fasilitas::create([
        //     'fasilitas' => '<p><i class="fa fa-bath" aria-hidden="true"></i>kamar mandi dalam</p>
        //                     <p><i class="fa fa-television" aria-hidden="true"></i>TV</p>
        //                     <p><i class="fa fa-bed" aria-hidden="true"></i>Kasur</p>',
        //     'harga' => 'Rp. 500.000',
        //     'alamat' => 'jogja'
        // ]);

        // Fasilitas::create([
        //     'fasilitas' => '<p><i class="fa fa-bath" aria-hidden="true"></i>kamar mandi dalam</p>
        //                     <p><i class="fa fa-television" aria-hidden="true"></i>TV</p>
        //                     <p><i class="fa fa-bed" aria-hidden="true"></i>Kasur</p>',
        //     'harga' => 'Rp. 1.000.00',
        //     'alamat' => 'jepara'
        // ]);

        Kost::factory(26)->create([
            'price' => 850000,
        ]);

        // Kost::create([
        //     'title' => 'pondok putri 42',
        //     'slug' => 'pondok-putri',
        //     'excerpt' => 'kost untuk putri',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officia beatae eligendi, minima odit aliquam quisquam, voluptate quod vel, laboriosam obcaecati quas. Porro odit quos voluptatum,</p><p> impedit ea ipsam aliquid provident neque excepturi sequi quaerat, fugit tenetur ad? Ipsum, ullam <doloremque </p><p> Atque tempore quae mollitia laudantium nulla beatae dolores rem porro sunt, exercitationem laborum similique alias tempora saepe facere! Beatae?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Kost::create([
        //     'title' => 'kost bu yanti',
        //     'slug' => 'kost-bu-yanti',
        //     'excerpt' => 'kost untuk putri',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officia beatae eligendi, minima odit aliquam quisquam, voluptate quod vel, laboriosam obcaecati quas. Porro odit quos voluptatum,</p><p> impedit ea ipsam aliquid provident neque excepturi sequi quaerat, fugit tenetur ad? Ipsum, ullam <doloremque </p><p> Atque tempore quae mollitia laudantium nulla beatae dolores rem porro sunt, exercitationem laborum similique alias tempora saepe facere! Beatae?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Kost::create([
        //     'title' => 'kost putra',
        //     'slug' => 'kos-putra',
        //     'excerpt' => 'kost untuk putri',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officia beatae eligendi, minima odit aliquam quisquam, voluptate quod vel, laboriosam obcaecati quas. Porro odit quos voluptatum,</p><p> impedit ea ipsam aliquid provident neque excepturi sequi quaerat, fugit tenetur ad? Ipsum, ullam <doloremque </p><p> Atque tempore quae mollitia laudantium nulla beatae dolores rem porro sunt, exercitationem laborum similique alias tempora saepe facere! Beatae?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
