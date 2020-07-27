# lumen-maker
Lumen Maker is built for porting some of the _make_ commands from Laravel.

This package works well for 5.2.

Let me know if you have requests.

## Installation

Just run the following in the root of your project
```shell
> composer require kikocorsentino/lumen-maker
```

```php
// In bootstrap/app.php

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which {bla bla bla}
|
*/

//$app->register(App\Providers\AppServiceProvider::class);
//$app->register(App\Providers\EventServiceProvider::class);
$app->register(KikoCorsentino\LumenMaker\LumenMakerServiceProvider::class); // <- Add this
```

#### Commands
* `make:controller {name}` - Makes a new restful controller in Http/Controllers/
* `make:model {name}` - Makes a new model in App/
