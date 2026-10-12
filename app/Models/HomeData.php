<?php

namespace App\Models;

class HomeData
{
    public static function getTextBanner()
    {
        return [
            'title' => 'A-1 PICTURES',
            'subtitle' => 'Bringing Imagination to Life',
            'description' => 'A-1 Pictures is a premier Japanese animation studio dedicated to crafting unforgettable stories and world-class animation.'
        ];
    }

    public static function getBanners()
    {
        return [
            [
                'image' => asset('images/banner1.jpg'),
                'title' => 'SWORD ART ONLINE'
            ],
            [
                'image' => asset('images/banner2.jpg'),
                'title' => '86 EIGHTY-SIX'
            ],
            [
                'image' => asset('images/banner3.jpg'),
                'title' => 'Make Heroine ga Oosugiru!'
            ]
        ];
    }
}
