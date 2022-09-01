<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kost;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'ervina hardiyat',
            'email' => 'ervinamagang@gmail.com',
            'password' => bcrypt('katasandiku1')
        ]);

        Category::create([
            'name' => 'kosttt',
            'slug' => 'kost-putra'
        ]);

        Category::create([
            'name' => 'kost',
            'slug' => 'kost-putri'
        ]);

        Kost::create([
            'title' => 'pondok putri 42',
            'slug' => 'pondok-putri',
            'excerpt' => 'kost untuk putri',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officia beatae eligendi, minima odit aliquam quisquam, voluptate quod vel, laboriosam obcaecati quas. Porro odit quos voluptatum,</p><p> impedit ea ipsam aliquid provident neque excepturi sequi quaerat, fugit tenetur ad? Ipsum, ullam <doloremque </p><p> Atque tempore quae mollitia laudantium nulla beatae dolores rem porro sunt, exercitationem laborum similique alias tempora saepe facere! Beatae?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Kost::create([
            'title' => 'kost bu yanti',
            'slug' => 'kost-bu-yanti',
            'excerpt' => 'kost untuk putri',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officia beatae eligendi, minima odit aliquam quisquam, voluptate quod vel, laboriosam obcaecati quas. Porro odit quos voluptatum,</p><p> impedit ea ipsam aliquid provident neque excepturi sequi quaerat, fugit tenetur ad? Ipsum, ullam <doloremque </p><p> Atque tempore quae mollitia laudantium nulla beatae dolores rem porro sunt, exercitationem laborum similique alias tempora saepe facere! Beatae?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Kost::create([
            'title' => 'kost putra',
            'slug' => 'kos-putra',
            'excerpt' => 'kost untuk putri',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officia beatae eligendi, minima odit aliquam quisquam, voluptate quod vel, laboriosam obcaecati quas. Porro odit quos voluptatum,</p><p> impedit ea ipsam aliquid provident neque excepturi sequi quaerat, fugit tenetur ad? Ipsum, ullam <doloremque </p><p> Atque tempore quae mollitia laudantium nulla beatae dolores rem porro sunt, exercitationem laborum similique alias tempora saepe facere! Beatae?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
