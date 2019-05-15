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
        
        $this->call(ProjectCategoriesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(NewsCategoriesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ServiceModelsTableSeeder::class);
        $this->call(SeoTableSeeder::class);
        $this->call(SeoUrlsTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(PartnersTableSeeder::class);

        $this->call(VoyagerDummyDatabaseSeeder::class);
    }
}
