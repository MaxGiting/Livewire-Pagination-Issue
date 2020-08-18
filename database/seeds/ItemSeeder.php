<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 5) as $key => $id) {
            DB::table('items')->insert([
                'id' => $id,
            ]);
        }
    }
}
