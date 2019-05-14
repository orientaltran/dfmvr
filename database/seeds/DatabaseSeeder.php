<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class DatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = __DIR__.'/';

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(VoyagerDummyDatabaseSeeder::class);
        
        $this->call(\Database\Seeds\ProjectCategoriesTableSeeder::class);
        $this->call(\Database\Seeds\ProjectsTableSeeder::class);
        $this->call(\Database\Seeds\NewsCategoriesTableSeeder::class);
        $this->call(\Database\Seeds\NewsTableSeeder::class);
        $this->call(\Database\Seeds\ServicesTableSeeder::class);
        $this->call(\Database\Seeds\ServiceModelsTableSeeder::class);
        $this->call(\Database\Seeds\SeoTableSeeder::class);
        $this->call(\Database\Seeds\SeoUrlsTableSeeder::class);
    }
}
