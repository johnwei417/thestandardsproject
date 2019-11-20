<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resets table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');  
        DB::table('records')->truncate();

        // records of students progress for modules
        DB::table('records')->insert(array(
            array('module_records' => '{"records":{"game_score":400,"quiz_score":7,"student_answers":[{"question_id":1,"answer":"A"},{"question_id":2,"answer":"A"},{"question_id":3,"answer":"C"},{"question_id":4,"answer":"D"}]}}'),
            array('module_records' => '{"records":{"game_score":500,"quiz_score":10,"student_answers":[{"question_id":1,"answer":"B"},{"question_id":2,"answer":"D"},{"question_id":3,"answer":"D"},{"question_id":4,"answer":"C"}]}}'),
            array('module_records' => '{"records":{"game_score":700,"quiz_score":9,"student_answers":[{"question_id":1,"answer":"B"},{"question_id":2,"answer":"A"},{"question_id":3,"answer":"D"},{"question_id":4,"answer":"B"}]}}')
        ));
    }
}