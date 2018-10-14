<?php

use Illuminate\Database\Seeder;

class RarityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rarities')->insert(
            [
                'name' => 'Common'
            ],
            [
                'name' => 'Rare'
            ],
            [
                'name' => 'Super Rare'
            ],
            [
                'name' => 'Holofoil Rare'
            ],
            [
                'name' => 'Ultra Rare'
            ],
            [
                'name' => 'Ultimate Rare'
            ],
            [
                'name' => 'Secret Rare'
            ],
            [
                'name' => 'Ultra Secret Rare'
            ],
            [
                'name' => 'Secret Ultra Rare'
            ],
            [
                'name' => 'Prismatic Secret Rare'
            ],
            [
                'name' => 'Starfoil Rare'
            ],
            [
                'name' => 'Ghost Rare'
            ],
            [
                'name' => 'Gold Ultra Rare'
            ]
        );
    }
}
