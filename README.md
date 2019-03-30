# laravel-uk-county-migration-seeder
Laravel model, migration and seeder

A quick way to add the Counties of England, Scotland, Wales, Republic of Ireland and Northern Ireland to a Laravel
project, creating the County Model, Migration and Seeder, you may wish to change the model name depending on the naming
 convention of your database tables. 

run command php artisan make:model County -m 

this will make the County model and migration

please read the County.php to see how you want the counties sorting or 
you may wish to remove some counties that you do not need

1) replace the PHP in the model generated with this County.php
2) replace the PHP in the migration with the code from your_county_migration_replace_with_this.php
3) run command PHP artisan migrate 
4) run command PHP artisan make:seeder County
5) replace the PHP in the seeded with the code from your_county_seeder_replace_with_this.php
6) run command php artisan db:seed --class=County
