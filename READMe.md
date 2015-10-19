yii2-pieces-theme
=========

yii2 Custom Theme for pieces-compendium.com


Credit
------

Based on https://github.com/sheillendra/yii2-theme



Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist davidjeddy/yii2-pieces-theme "*"
```

or add

```
"davidjeddy/yii2-pieces-theme": "*"
```

to the require section of your `composer.json` file.


Application
-------

Change your application config (backend or frontend)
```
'view'=>[
	'theme' => [
		'class'=>'davidjeddy\theme\components\Theme',
		'active'=>'theme_1',
		'pathMap' => [ 
			'@app/views' => [ 
				'@webroot/themes/theme_1/views',
				...
			]
		],
	],
	...
],
```

folder structure

```
      backend/
          ...
          views/
          web/
             ...
             themes/
                 themes_1/
                     assets/
                     views/
                         layout/
                         controller_name/
                         ...
                 themes_2/
                 themes_3/
```

Module
------------

folder structure :

```
      your_module_name/
          ...
          views/
          themes/
             themes_1/
                 assets/
                 views/
                     layout/
                     controller_name/
                     ...
             themes_2/
             themes_3/
```

module init :

```
    public function init()
    {
        parent::init();
        \Yii::$app->view->theme->pathMap[your_module_name.'/views'] = [your_module_name.'/themes/'.\Yii::$app->view->theme->active.'/views'];
        // custom initialization code goes here
    }
```