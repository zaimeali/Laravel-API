1. php artisan make:controller PostsController --api
2. Route::resource('/posts', [PostsController::class])
3. php artisan route:list

## Authentication in Laravel

1. Laravel Authentication
2. Laravel Guards => JWT
3. Laravel Authorization
4. Laravel Socialite
5. Laravel Passport
6. Laravel Sanctum
7. composer require tymon/jwt-auth
8. composer require tymon/jwt-auth --ignore-platform-reqs
9. php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
10. php artisan jwt:secret

## if Problem in JWT

1. https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/
2. https://jwt-auth.readthedocs.io/en/develop/laravel-installation/
3. Header in Authorization: Bearer <Token>
