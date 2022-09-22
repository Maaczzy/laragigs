<?php

namespace App\Models;

class Listing
{
    public static function all(){
    return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. Nunc id faucibus ex, 
                ultricies rutrum ex. Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. Etiam quis sollicitudin 
                ligula, vehicula feugiat ligula.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. Nunc id faucibus ex, 
                ultricies rutrum ex. Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. Etiam quis sollicitudin 
                ligula, vehicula feugiat ligula.'
            ]
            ];
    }

    public static function find($id){
        $listings = self::all();

        foreach ($listings as $listing){
            if ($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
