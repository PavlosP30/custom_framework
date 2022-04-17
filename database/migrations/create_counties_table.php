<?php

require __DIR__ . '/../../bootstrap/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

class CountiesMigration
{
    public static function up()
    {
        Capsule::schema()->create('counties', function ($table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });
    }

    public static function down()
    {
        Capsule::schema()->dropIfExists('counties');
    }
}