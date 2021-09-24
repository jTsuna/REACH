<?php

namespace Database\Seeders;

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
    $this->call([DepartmentSeeder::class, ProgramSeeder::class, RoleSeeder::class, AssessmentType::class, AssessmentSeeder::class, UserSeeder::class, NeedsAnalysisSeeder::class]);
  }
}
