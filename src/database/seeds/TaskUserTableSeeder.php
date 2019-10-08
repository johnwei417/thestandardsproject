<?php

use Illuminate\Database\Seeder;

class TaskUserTableSeeder extends Seeder
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
        DB::table('task_user')->truncate();

        // score with target A
        DB::table('task_user')->insert(array(
            array('task_id' => 1, 'user_id' => 4, 'score_id' => 12),
            array('task_id' => 1, 'user_id' => 5, 'score_id' => 13),
            array('task_id' => 1, 'user_id' => 6, 'score_id' => 14),
            array('task_id' => 1, 'user_id' => 7, 'score_id' => 15),
            array('task_id' => 1, 'user_id' => 8, 'score_id' => 16),
            array('task_id' => 2, 'user_id' => 4, 'score_id' => 17),
            array('task_id' => 2, 'user_id' => 7, 'score_id' => 18),
            array('task_id' => 2, 'user_id' => 9, 'score_id' => 19),
            array('task_id' => 2, 'user_id' => 10, 'score_id' => 20),
            array('task_id' => 2, 'user_id' => 11, 'score_id' => 21)
        ));
    }
}
