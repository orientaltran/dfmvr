<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Laravelium\Sitemap\Sitemap;

class SitemapService
{
    /**
     * Generate sitemap
     */
    public function generate()
    {
        // create new sitemap object
        $sitemap = app()->make("sitemap");

        // add items to the sitemap (url, date, priority, freq)

        // get all resources from db

        // add every resource to the sitemap

        // generate your sitemap (format, filename)
        $sitemap->store('xml', 'sitemap');
        // this will generate file sitemap.xml to your public folder
    }

    /**
     * Add items to the sitemap
     *
     * @param Sitemap $sitemap
     * @param Collection $data
     * @param string $route
     */
    private function _add(&$sitemap, $data, $route)
    {
        foreach ($data as $datum) {
            $translations = [
                ['language' => 'en', 'url' => '']
            ];

            $images = [
                ['url' => '', 'title' => '', 'caption' => '']
            ];

            $sitemap->add(route($route, $datum->slug), $datum->created_at, '1.0', 'daily', $images, null, $translations);
        }
    }
}
