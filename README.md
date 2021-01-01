# File CRUD In One Line
 [![Issues](https://img.shields.io/github/issues/BNhashem16/Images.svg?style=plastic&logo=appveyor)](https://github.com/BNhashem16/Images)

[![Forks](https://img.shields.io/github/forks/BNhashem16/Images.svg?style=plastic&logo=appveyor)](https://github.com/BNhashem16/Images)

[![Stars](https://img.shields.io/github/stars/BNhashem16/Images.svg?style=plastic&logo=appveyor)](https://github.com/BNhashem16/Images)

[![License](https://img.shields.io/github/license/BNhashem16/Images.svg?style=plastic&logo=appveyor)](https://github.com/BNhashem16/Images)

[![Twitter](https://img.shields.io/twitter/url?url=https://twitter.com/dev_hashem%2FBNhashem16%2FImages)](https://twitter.com/dev_hashem)

## Installing File Package

The recommended way to install File Package is through
[Composer](https://getcomposer.org/).

```bash
composer require bnhashem/file
```

## Storage Link

Creating Shourtcut of storage folder , you will found shortcut by following this path `your-project/public`

```bash
php artisan storage:link
```

## Updating your Provider Array

you should Go to `config\app.php` , in Provider array you should put this Line:

```php

'providers' => [
        /*
         * Laravel Framework Service Providers...
         */
        Hashem\File\FileServiceProvider::class,
    ],
```

## Store File

```php
    use Hashem\File\Traits\File;


    public function store(Request $request)
    {
        $post = new Post([
            'image'     => File::store('posts' , 'image'),
            'banner'    => File::store('posts' , 'banner'),
        ]);
        $post->save();

        // posts is the parent Folder 
        // image and banner are the childs Folders
        // image and banner also request name , that mean image or banner is required.
    }

```


## Update File

In update Model function: 
- If `$request->image` or `$request->banner` is Equal null , that mean Nothing Will Not happen
- If `$request->image` or `$request->banner` is Not Equal null , that mean image or banner will removed from Database and Server and store New image that will comming From request 

```php
    use Hashem\File\Traits\File;


    public function update(Request $request , Post $post)
    {
        $post->update([
            'image'  = File::update('posts' , 'image' , $post),
            'banner' = File::update('posts' , 'banner' , $post),
        ]);

        // posts are the parent Folder 
        // image and banner are the childs Folders
        // image and banner also request name , that mean image or banner is required.
        // You should pass Row to function
    }

```

## Destroy File

In destroy Model function: File will removed From Database and also will Removed from server.

```php
    use Hashem\File\Traits\File;


    public function destroy(Request $request , Post $post)
    {
        File::destroy('image' , $post);
        File::destroy('banner' , $post);

        // You should pass Row to function
    }

```
