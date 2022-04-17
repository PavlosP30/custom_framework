<?php

require __DIR__ . '/../../bootstrap/database.php';

use app\Helpers\ConnectToAPI;

class DatabaseSeeder
{
    public static function run()
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->safeLoad();

        $config = [
            'method' => 'GET',
            'url' => 'https://trial.craig.mtcserver15.com/api/',
            'data' => false,
            'endpoint' => 'properties',
            'api_key' => $_ENV['API_KEY']
        ];
        $response = (new ConnectToAPI())->callAPI($config);
        $properties = $response->data;

        foreach($properties as $property)
        {
            // Seed Property Types
            $propertyType = $property->property_type;
            // check if exists
            $count = PropertyType::where('title', $propertyType->title)->count();
            if ($count == 0)
            {
                PropertyType::Create([
                    'title' => $propertyType->title,
                    'description' => $propertyType->description
                ]);
            }

            // Seed Countries
            $country = $property->country;
            // check if exists
            $count = Country::where('name', $country)->count();
            if ($count == 0)
            {
                Country::Create([
                    'name' => $country
                ]);
            }

            // Seed Counties
            $county = $property->county;
            // check if exists
            $count = County::where('name', $county)->count();
            if ($count == 0)
            {
                County::Create([
                    'name' => $county
                ]);
            }

            // Seed Towns
            $town = $property->town;
            // check if exists
            $count = Town::where('name', $town)->count();
            if ($count == 0)
            {
                Town::Create([
                    'name' => $town
                ]);
            }

            // Seed Properties
            // Get foreign keys
            $countryID = (Country::where('name', $country)->get())[0]->id;
            $countyID = (County::where('name', $county)->get())[0]->id;
            $town = (Town::where('name', $town)->get())[0]->id;

            $propertyUUID = $property->uuid;
            // check if exists
            $count = Property::where('uuid', $propertyUUID)->count();
            if ($count == 0)
            {
                Property::Create([
                    'uuid' => $propertyUUID,
                    'county_id' => $countyID,
                    'country_id' => $countryID,
                    'town_id' => $town,
                    'description' => $property->description,
                    'address' => $property->address,
                    'image' => $property->image_full,
                    'thumbnail' => $property->image_thumbnail,
                    'latitude' => $property->latitude,
                    'longitude' => $property->longitude,
                    'num_bedrooms' => $property->num_bedrooms,
                    'num_bathrooms' => $property->num_bathrooms,
                    'price' => $property->price,
                    'type' => $property->type
                ]);
            }
        }
    }
}