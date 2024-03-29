<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(CategorysTableSeeder::class);
        $this->call(SourcesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
    }
}
