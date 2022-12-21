<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pSchema::disableForeignKeyConstraints();
        //Student::truncate();
        //Schema::enableForeignKeyConstraints();

        //$data = [
        //['name' => 'Agung', 'gender' => 'L', 'nis' => '0110001', 'class_id' => 2],
        //['name' => 'Anita', 'gender' => 'P', 'nis' => '0110002', 'class_id' => 2],
        //['name' => 'Novia', 'gender' => 'P', 'nis' => '0110003', 'class_id' => 1],
        //['name' => 'Ega', 'gender' => 'L', 'nis' => '0110004', 'class_id' => 3],
        //];

        //foreach ($data as $value) {
        //Student::insert([
        //'name' => $value['name'],
        //'gender' => $value['gender'], 'nis' => $value['nis'],
        //'class_id' => $value['class_id'],
        //'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
        //]);
        //}

        student::factory()->create();
    }
}
