<?php

require __DIR__ . '/../../bootstrap/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

class PropertyTypesMigration
{
    public static function up()
    {
        Capsule::schema()->create('property_types', function ($table) {
            $table->id();
            $table->string('title', 255)->nullable()->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public static function down()
    {
        Capsule::schema()->dropIfExists('property_types');
    }
}