<?php

namespace App\Models;


class Product {
    public static function all(): array
    {
        return [
            [
                'name' => 'XBox',
                'price' => 300,
                'is_available' => true,
            ],
            [
                'name' => 'Playstation',
                'price' => 500,
                'is_available' => true,
            ],
            [
                'name' => 'NintendoSwitch',
                'price' => 400,
                'is_available' => false,
            ],
        ];
    }
}