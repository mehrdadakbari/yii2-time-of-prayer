Time of prayer
==============
Show time of prayer for cities of iran country.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mehrdadakbari/yii2-time-of-prayer "*"
```

or add

```
"mehrdadakbari/yii2-time-of-prayer": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \mehrdadakbari\prayerTime\PrayerTime::widget(); ?>```

and insert in to contoller

```php
public function actions()
    {
        return [
            .
            .
            .
            'prayer'=>[
                'class' => 'mehrdadakbari\prayerTime\PrayerAction'
            ]
        ];
    }```

sample
------

```php
<?= prayerTime\PrayerTime::widget([
        'method'=>'Tehran',
        'timeFormat'=>'24h',
        'city'=>'دهلران',
        'province'=>'ايلام'
    ]); ?>```