php artisan make:migration create_menus_table --create="menus"
php artisan make:migration create_pages_table
php artisan make:migration create_blocks_table
php artisan make:migration create_posts_table
php artisan make:migration create_labels_table
php artisan make:migration create_settings_table
php artisan make:migration create_label_detail_table

php artisan make:model Menu
php artisan make:model Page
php artisan make:model Block
php artisan make:model Post
php artisan make:model Label
php artisan make:model Setting
php artisan make:model LabelDetail

php artisan make:seeder MenusTableSeeder
php artisan make:seeder PagesTableSeeder
php artisan make:seeder BlocksTableSeeder
php artisan make:seeder PostsTableSeeder
php artisan make:seeder LabelsTableSeeder
php artisan make:seeder SettingsTableSeeder
php artisan make:seeder LabelDetailTableSeeder

http://three-oh.com/blog/2015-06-30/custom-migration-columns-in-laravel-5
https://coderwall.com/p/mo1gew/custom-datatype-in-laravel-schema-builder
