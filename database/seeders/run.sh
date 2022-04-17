#!/usr/bin/env bash
PHP=`which php`

# Seed Database Tables using data from external API

# Seed PropertyTypes table
if $PHP -r 'include "DatabaseSeeder.php"; DatabaseSeeder::run();'
  then echo 'DatabaseSeeder seeded successfully!'
  else echo 'Something went wrong with seeding the DatabaseSeeder!'
fi
