<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resets tables
        DB::statement('SET FOREIGN_KEY_CHECKS=0');  
        DB::table('modules')->truncate();

        //  insert modules/targets 
        DB::table('modules')->insert(array(
            array(
                'subject' => 'Math',
                'grade' => 5,
                'name' => 'A',
                'description' => 'Write and interpret numerical expressions.'
            ),
            array(
                'subject' => 'Math',
                'grade' => 5,
                'name' => 'B',
                'description' => 'Analyze patterns and relationships.'
            ),
            array(
                'subject' => 'Math',
                'grade' => 5,
                'name' => 'C',
                'description' => 'Understand the place value system.'
            ),
            array(
                'subject' => 'Math',
                'grade' => 5,
                'name' => 'D',
                'description' => 'Perform operations with multi‐digit whole numbers and with decimals to hundredths.'
            ),
            array(
                'subject' => 'Math',
                'grade' => 5,
                'name' => 'E',
                'description' => 'Use equivalent fractions as a strategy to add and subtract fractions.'
            ),
            array(
                'subject' => 'Math',
                'grade' => 5,
                'name' => 'F',
                'description' => 'Apply and extend previous understandings of multiplication and division to multiply and divide fractions.'
            )
        ));
    }
}
