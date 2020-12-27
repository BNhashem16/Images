# Hashem, Image CRUD In One Line
 [![Issues](https://img.shields.io/github/issues/BNhashem16/Images.svg?style=plastic&logo=appveyor)](https://github.com/BNhashem16/Images)

[![Forks](https://img.shields.io/github/forks/BNhashem16/Images.svg?style=plastic&logo=appveyor)](https://github.com/BNhashem16/Images)

[![Stars](https://img.shields.io/github/stars/BNhashem16/Images.svg?style=plastic&logo=appveyor)](https://github.com/BNhashem16/Images)

[![License](https://img.shields.io/github/license/BNhashem16/Images.svg?style=plastic&logo=appveyor)](https://github.com/BNhashem16/Images)

[![Twitter](https://img.shields.io/twitter/url?url=https%3A%2F%2Fgithub.com%2FBNhashem16%2FImages)](https://github.com/BNhashem16/Images)

## Installing Hashem

The recommended way to install Hashem is through
[Composer](https://getcomposer.org/).

```bash
composer require a.hashem/image
```

## Updating your Provider Array

you should Go to `config\app.php` , in Provider array you should put this Line:

```php

'providers' => [
        /*
         * Laravel Framework Service Providers...
         */
        Hashem\Image\ImageServiceProvider::class,
    ],
```

## Usage

In store Model function:

```php
    use Hashem\Image\Traits\Image;


    public function store(Request $request)
    {
        $post = new Post([
            'image' => Image::store('pages' , 'image'),
            'banner' => Image::store('pages' , 'banner'),
        ]);
        $post->save();
    }

``
