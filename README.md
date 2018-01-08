#yii2-pieces-theme

## About
Yii2 Custom Theme for pieces-compendium.com

## Badges
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e45f66cb-8718-4dee-9597-d40b745aeb29/mini.png)](https://insight.sensiolabs.com/projects/e45f66cb-8718-4dee-9597-d40b745aeb29)
[![Latest Stable Version](https://poser.pugx.org/davidjeddy/yii2-pieces-them/v/stable)](https://packagist.org/packages/davidjeddy/yii2-pieces-them)
[![Total Downloads](https://poser.pugx.org/davidjeddy/yii2-pieces-them/downloads)](https://packagist.org/packages/davidjeddy/yii2-pieces-them)
[![Latest Unstable Version](https://poser.pugx.org/davidjeddy/yii2-pieces-them/v/unstable)](https://packagist.org/packages/davidjeddy/yii2-pieces-them)
[![License](https://poser.pugx.org/davidjeddy/yii2-pieces-them/license)](https://packagist.org/packages/davidjeddy/yii2-pieces-them)
[![Monthly Downloads](https://poser.pugx.org/davidjeddy/yii2-pieces-them/d/monthly)](https://packagist.org/packages/davidjeddy/yii2-pieces-them)
[![Daily Downloads](https://poser.pugx.org/davidjeddy/yii2-pieces-them/d/daily)](https://packagist.org/packages/davidjeddy/yii2-pieces-them)


## Credit
Based on https://github.com/sheillendra/yii2-theme

## Installing

- Run `php composer.phar require davidjeddy/yii2-pieces-theme` on the terminal in your {project root}
- Or add `"davidjeddy/yii2-pieces-theme": "^2"` to your projects composer.json in the "required": [...] section,
 then execute a  `php composer.phar update -o` command.

Next edit /application/root/path.env (or create if one does not exist). Edit the proper values for `STORAGE_HOST_INFO`.
Example: `STORAGE_HOST_INFO = https://storage.pieces-compendium.`

Then edit the applications ./config/web.php (or similar):
```
    'components' => [
    ...
        'assetManager' => ['linkAssets' => true],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/davidjeddy/yii2-pieces-theme/src/views',
                ],
            ],
        ],
    ...
],
```

# Structure:
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

# Usage
In your application's view layout file, initialize the theme.

```
public function init()
{
    parent::init();
    \Yii::$app->view->theme->pathMap[your_module_name.'/views'] = [your_module_name.'/themes/'.\Yii::$app->view->theme->active.'/views'];
    // custom initialization code goes here
}
```