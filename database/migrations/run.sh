#!/usr/bin/env bash
PHP=`which php`

# Migrate Property Types table
if $PHP -r 'include "create_property_types_table.php"; PropertyTypesMigration::down(); PropertyTypesMigration::up();'
  then echo 'create_property_types_table migrated successfully!'
  else echo 'Something went wrong with migrating the create_property_types_table!'
fi

# Migrate Countries table
if $PHP -r 'include "create_countries_table.php"; CountriesMigration::down(); CountriesMigration::up();'
  then echo 'create_countries_table migrated successfully!'
  else echo 'Something went wrong with migrating the create_countries_table!'
fi

# Migrate Counties table
if $PHP -r 'include "create_counties_table.php"; CountiesMigration::down(); CountiesMigration::up();'
  then echo 'create_counties_table migrated successfully!'
  else echo 'Something went wrong with migrating the create_counties_table!'
fi

# Migrate Towns table
if $PHP -r 'include "create_towns_table.php"; TownsMigration::down(); TownsMigration::up();'
  then echo 'create_towns_table migrated successfully!'
  else echo 'Something went wrong with migrating the create_towns_table!'
fi

# Migrate Properties table
if $PHP -r 'include "create_properties_table.php"; PropertiesMigration::down(); PropertiesMigration::up();'
  then echo 'create_properties_table migrated successfully!'
  else echo 'Something went wrong with migrating the create_properties_table!'
fi