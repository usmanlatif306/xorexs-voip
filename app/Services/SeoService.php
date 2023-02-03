<?php

namespace App\Services;

use App\Models\Setting;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;

class SeoService
{
    /**
     * Getting seo input field.
     *
     * @return array
     */
    public function seoInputFields($page)
    {

        $meta_tags = ['title', 'description', 'keywords'];

        foreach ($meta_tags as $tag) {
            $field = 'seo_' . $tag . '_' . $page;
            $data[$page][$tag] = $field;
        }

        return $data;
    }

    /**
     * Getting seo input field.
     *
     * @param  string
     * @return array
     */
    public function load($page)
    {
        $tags = ['title', 'description', 'keywords'];
        $fields = [];
        foreach ($tags as $tag) {
            $fields[] = 'seo_' . $tag . '_' . $page;
        }
        $meta = Setting::whereIn('key', $fields)->pluck('value', 'key');

        if ($meta->count() > 0) {

            if (setting('show_app_name_in_title') === 'yes') {
                $title = $meta['seo_title_' . $page] . ' ' . setting('title_separator') . ' ' . setting('app_name');
            } else {
                $title = $meta['seo_title_' . $page];
            }

            // $title = $meta['seo_title_' . $page];

            SEOTools::setTitle($title, false);
            SEOMeta::setDescription($meta['seo_description_' . $page], false);
            SEOTools::opengraph()->addProperty('type', 'product');
            SEOTools::opengraph()->setUrl(url()->current());
            SEOTools::setDescription($meta['seo_description_' . $page], false);
            $keyword = $meta['seo_keywords_' . $page];

            if ($keyword) {
                SEOMeta::addKeyword(explode(',', $keyword));
            }

            request()->session()->flash('seo_was_set', TRUE);
        }
    }
}
