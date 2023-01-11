<?php

namespace App\Services;

/**
 * Class ContentService
 * @package App\Services
 */
class ContentService
{
    public static function general()
    {
        $general = [
            'nav_logo' => 'file',
            'faq_heading' => 'input',
            'faq_title' => 'input',
            'faq_about' => 'textarea',
            'faq_image' => 'file',
        ];
        $hero = [
            'hero_title' => 'input',
            'hero_content' => 'textarea',
            'hero_btn1_title' => 'input',
            'hero_btn1_link' => 'input',
            'hero_btn2_title' => 'input',
            'hero_btn2_link' => 'input',
            'hero_image' => 'file',
        ];
        $services = [
            'service_heading_1' => 'input',
            'service_detail_1' => 'textarea',
            'service_heading_2' => 'input',
            'service_detail_2' => 'textarea',
            'service_1_heading' => 'input',
            'service_1_detail' => 'textarea',
            'service_2_heading' => 'input',
            'service_2_detail' => 'textarea',
            'service_image_1' => 'file',
            'service_image_2' => 'file',
        ];
        $callNews = [
            'newsletter_heading' => 'input',
            'newsletter_detail' => 'input',
            'call_heading' => 'input',
            'call_detail' => 'textarea',
        ];
        $contact = [
            'contact_email' => 'input',
            'contact_phone' => 'input',
            'contact_address_1' => 'input',
            'contact_address_2' => 'input',
        ];
        return [
            'general' => $general,
            'hero' => $hero,
            'contact' => $contact,
            'services' => $services,
            'call' => $callNews
        ];
    }
}
