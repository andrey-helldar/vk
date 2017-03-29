## VK API

![vk api](https://cloud.githubusercontent.com/assets/10347617/24411930/19393712-1412-11e7-8dd2-9c7da9133d59.jpg)

<p align="center">
<a href="https://packagist.org/packages/andrey-helldar/vk"><img src="https://poser.pugx.org/andrey-helldar/vk/downloads?style=flat-square" alt="Total Downloads" /></a>
<a href="https://packagist.org/packages/andrey-helldar/vk"><img src="https://poser.pugx.org/andrey-helldar/vk/v/stable?format=flat-square" alt="Latest Stable Version" /></a>
<a href="https://packagist.org/packages/andrey-helldar/vk"><img src="https://poser.pugx.org/andrey-helldar/vk/v/unstable?format=flat-square" alt="Latest Unstable Version" /></a>
<a href="https://raw.githubusercontent.com/andrey-helldar/vk/master/LICENSE"><img src="https://poser.pugx.org/andrey-helldar/vk/license?format=flat-square" alt="License" /></a>
</p>

<p align="center">
<a href="https://github.com/andrey-helldar/vk"><img src="https://scrutinizer-ci.com/g/andrey-helldar/vk/badges/quality-score.png?b=master&style=flat-square" alt="Quality Score" /></a>
<a href="https://travis-ci.org/andrey-helldar/vk"><img src="https://travis-ci.org/andrey-helldar/vk.svg?branch=master&style=flat-square" alt="Build Status" /></a>
<a href="https://styleci.io/repos/82566268"><img src="https://styleci.io/repos/86432878/shield?branch=master" alt="StyleCI" /></a>
<a href="https://php-eye.com/package/andrey-helldar/vk"><img src="https://php-eye.com/badge/andrey-helldar/vk/tested.svg?style=flat-square" alt="PHP-Eye" /></a>
</p>


## Installation

To get the latest version of package for VK API, simply require the project using [Composer](https://getcomposer.org/):

```bash
$ composer require andrey-helldar/vk
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "andrey-helldar/vk": "^1.0"
    }
}
```

Once package is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `Helldar\Vk\VkServiceProvider::class,`

Next, execute:

```bash
$ php artisan vendor:publish
$ php artisan migrate
```

Add the following lines to `.env`:

```bash
VK_CLIENT_ID=
VK_CLIENT_SECRET=
VK_SECRET_KEY=
```

when:

* `VK_CLIENT_ID` - Application ID
* `VK_CLIENT_SECRET` - Secure key
* `VK_SECRET_KEY` - Service token

See more at [vk.com/dev](https://vk.com/apps?act=manage)

Alright! Use `vk()` helper.


## Documentation

### Template

You can call the standard method for creating a button in a template:

```html
{!! vk()->authButton() !!}
```

or just use the route:
```html
{{ route('vk::auth') }}
```

### Using

To send a request, use the following structure:
```php
// vk()->{method}->...params->send();
// Example:
vk()->friends('get')->userId(14)->count(20)->send();
vk()->account('banUser')->userId(14)->send();
```

### Get response from VK

To test and receive a response from the API, use the `get()` method:
```php
// vk()->{method}->...params->get();
// Example:
vk()->friends('get')->get();
vk()->account('banUser')->get();
```

## Support Package

You can donate via [PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=94B8LCPAPJ5VG), [Yandex Money](https://money.yandex.ru/quickpay/shop-widget?account=410012608840929&quickpay=shop&payment-type-choice=on&mobile-payment-type-choice=on&writer=seller&targets=Andrey+Helldar%3A+Open+Source+Projects&targets-hint=&default-sum=&button-text=04&mail=on&successURL=), WebMoney (Z124862854284, R343524258966) and [Patreon](https://www.patreon.com/helldar)


## Copyright and License

Vk was written by Andrey Helldar for the Laravel Framework 5.4 or later, and is licensed under [The MIT License (MIT)](LICENSE).


## Translation

Translations of text and comment by Google Translate.

Help with translation +1 in karma :)
