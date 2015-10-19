<?php

namespace davidjeddy\pieces;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class ThemeInstaller
{
    public static function postPackageInstall(Event $event)
    {
        $composer = $event->getComposer();
        echo('echo Attempting to creating link from theme package to Yii2 advanced frontend theme directory...')
        exec('mkdir frontend/web/themes/');
        exec('ln -sfn ../../../vendor/davidjeddy/yii2-pieces-theme/src/ frontend/web/themes/pieces');
        exec('echo ...attempt completed.');

        return true;
    }
}
