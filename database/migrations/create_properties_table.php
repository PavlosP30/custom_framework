<?php

require __DIR__ . '/../../bootstrap/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

class PropertiesMigration
{
    public static function up()
    {
        Capsule::schema()->create('properties', function ($table) {
            $table->string('uuid')->primary();
            $table->foreignId('county_id')->nullable()->constrained('counties')->nullOnDelete();
            $table->foreignId('country_id')->nullable()->constrained('countries')->nullOnDelete();
            $table->foreignId('town_id')->nullable()->constrained('towns')->nullOnDelete();
            $table->text('description');
            $table->string('address', 255);
            $table->string('image', 2083);
            $table->string('thumbnail', 2083);
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->integer('num_bedrooms');
            $table->integer('num_bathrooms');
            $table->decimal('price', 10, 2);
            $table->string('type', 255);
            $table->foreignId('property_type_id')->nullable()->constrained('property_types')->nullOnDelete();
            $table->timestamps();
        });
    }

    public static function down()
    {
        Capsule::schema()->dropIfExists('properties');
    }
}