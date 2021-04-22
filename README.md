### Dev Resources

Tutorial that was followed: https://auth0.com/blog/build-a-laravel-6-app-with-authentication/#Installation

#### Running Locally

- get local DB running using XAMP
- seed and migrate if required
- just run `php artisan serve`

### Deploy Instructions

- Clone outside public_html as `passenger`
- Run `composer install`
- Copy `passenger/public` to `public_html` : `cp -R public/* ../public_html`
- Change paths in `index.php` from `../` to `../passenger/` (or use the index.deploy.php)
- Create `.env` file and connect database
- Migrate DB `php artisan migrate:refresh --seed`
- Create laravel symlinks to storage: `php artisan storage:link` in project root
- Create symlink in public_html: `ln -s ../passenger/storage/app/public/ -T storage`
