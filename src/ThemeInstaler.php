<?php

namespace davidjeddy;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class ThemeInstaller
{
    public static function postPackageInstall(Event $event)
    {
        $composer = $event->getComposer();
        echo 'asdf';
        exec('ln -sfn frontent/web/theme/pieces vendor/davidjeddy/yii2-pieces-theme/src/');
    }
}
