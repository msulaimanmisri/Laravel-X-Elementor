<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://github.com/msulaimanmisri"><img src="https://img.shields.io/badge/Author-Sulaiman%20Misri-red" alt="Latest Stable Version"></a>
<a href="https://asiaquest.my"><img src="https://img.shields.io/badge/Owner-AsiaQuest%20Malaysia-lightgrey" alt="Latest Stable Version"></a>
</p>

## About Laravel 9 Boilerplate
This boilerplate is to give an solution to AQM developers who use Laragon as their Local Environment. FYI, if you run Laravel version ^9.18, you cannot use Laragon pretty link. You need to use `php artisan serve` in order to make it work.

But that's the problem. Using Laragon give you instant pretty link. So with that, I created this boilerplate to revert back from Laravel Vite to Laravel Mix.

This boilerplate also installed with `Laravel Breeze` for authentication and `Laravel TailwindCSS JIT` for better performance.

## Before you clone
1. Make sure you use PHP version `8.*`.
2. You use Laragon as your local development software. If you're using other than Laragon or you want to use Laravel Vite, **do not clone this boilerplate**.

## How to use
1. Clone this repository, rename as you wish (the name) and then run `composer install`.
2. Copy `.env.example` manually or by using `cp .env.example .env` terminal command.
3. Generate Laravel key by running `php artisan key:generate`.
4. Change Database value in your `.env`. 