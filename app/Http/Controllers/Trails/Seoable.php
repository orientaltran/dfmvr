<?php

namespace App\Http\Controllers\Trails;

use TCG\Voyager\Models\Translation;

trait Seoable
{
    /**
     * Save SEO.
     *
     * @param $request
     * @param $data
     */
    protected function saveSeo($request, $data)
    {
        $defaultLocale = config('voyager.multilingual.default', 'en');
        $locales = config('voyager.multilingual.locales');
        $transFields = blank($data->seo) ? ['seo_title', 'meta_description', 'meta_keywords'] : $data->seo->getTranslatableAttributes();

        $array = [];
        foreach ($transFields as $field) {
            $array[$field] = json_decode($request->get($field.'_i18n'))->{$defaultLocale};
        }
        $seo = $data->seo()->updateOrCreate([], $array);

        foreach ($locales as $locale) {
            if ($locale !== $defaultLocale) {
                foreach ($transFields as $field) {
                    $this->saveSeoTranslations([
                        'table_name'  => $seo->getTable(),
                        'column_name' => $field,
                        'foreign_key' => $seo->id,
                        'locale'      => $locale
                    ], [
                        'value'       => json_decode($request->get($field.'_i18n'))->{$locale}
                    ]);
                }
            }
        }
    }

    /**
     * Save SEO translations.
     *
     * @param array $attributes
     * @param array $values
     */
    private function saveSeoTranslations(array $attributes = [], array $values = [])
    {
        Translation::updateOrCreate($attributes, $values);
    }
}
