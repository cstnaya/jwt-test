<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About This Project

Laravel is accessible, powerful, and provides tools required for large, robust applications.  This project will teach you how to use Authentication in **BOTH** 2 ways: <u>laravel-native token</u>, and also the package, <u>auth-jwt</u>.

## First you need to do

1. Install auth-jwt package [here](https://jwt-auth.readthedocs.io/en/develop/laravel-installation/) and follow the instruction to config your project.

2. Create new route "sub" in /routes folder.  Then register this route in app/providers/RouteServeiceProvider.php. [[See details]](https://www.itsolutionstuff.com/post/how-to-create-custom-route-file-in-laravelexample.html)

3. create new guard and provider in config/auth.php.

4. migrate subUser table and create its model.

5. create controller and authentication with auth("sub").

## Then start using Sanctum

1. Follow this [tutorial](https://laravel.com/docs/9.x/sanctum#installation) to install package sanctum.

2. create new guard in config/auth.php

3. create controller, route api and authentication with auth api.

4. you don't need to add middleware('auth:sanctum') for login and register route.

5. After you got token when logging, add key-value pair in header: (Authorization, "Bearer $token-here")

## Error

- If you faced <span style="color: #f33">Route [login] not defined.</span> error when using Sanctum, follow this [advice](https://stackoverflow.com/a/69903806) to resolve your problem.

## Resource

- https://www.youtube.com/watch?v=6eX9Pj-GhZs
- https://jwt-auth.readthedocs.io/en/develop/
- https://www.itsolutionstuff.com/post/how-to-create-custom-route-file-in-laravelexample.html
- https://www.twilio.com/blog/build-restful-api-php-laravel-sanctum