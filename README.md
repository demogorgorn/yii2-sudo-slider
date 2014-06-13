Yii2 SudoSlider jQuery widget
=====================================

This is the Yii2 SudoSlider widget that renders a nice looking slider (http://webbies.dk/SudoSlider/index.html). 


Example of ajax mode configuration:
```php
echo \demogorgorn\uikit\sudoslider\Sudoslider::widget([
   'configuration' => [
      'ajax' => [
         \Yii::$app->request->getBaseUrl() . '/images/slider/01.jpg',
         \Yii::$app->request->getBaseUrl() . '/images/slider/02.jpg',
         \Yii::$app->request->getBaseUrl() . '/images/slider/03.jpg',
      ],
      'numeric' => false,
      'continuous' => true,
      'effect' => 'fade',
      'auto' => true,
      'prevNext' => false
   ],
 ]);
```

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require demogorgorn/yii2-sudo-slider "*"
```

or add

```
"demogorgorn/yii2-sudo-slider": "*"
```

to the require section of your `composer.json` file and run `composer update`.

