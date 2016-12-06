# simple-laravel-jwt
Implement Laravel and JSON Web Token

# Install

```
composer install
php artisan db:seed
```
# Manual Install

## Install tymon/jwt-auth
```
composer require "tymon/jwt-auth"
```
## Add to provider and alias config/app.php
```
//Provider
Tymon\JWTAuth\Providers\JWTAuthServiceProvider::class,

//Alias
'JWTAuth'   => Tymon\JWTAuth\Facades\JWTAuth::class,
'JWTFactory' => Tymon\JWTAuthFacades\JWTFactory::class,
```
## Add vendor and generate secret key
```
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\JWTAuthServiceProvider"

php artisan jwt:generate
```
## Add middleware
```
'jwt.auth' => \Tymon\JWTAuth\Middleware\GetUserFromToken::class,
'jwt.refresh' => \Tymon\JWTAuth\Middleware\RefreshToken::class
```
