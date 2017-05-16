# check if symlink exists
if test -d ./frontend/web/themes/pieces/
then
    echo 'Theme already installed.'
else
    # create symlink to install theme
    mkdir ./frontend/web/themes/
    ln -sfn ../../../vendor/davidjeddy/yii2-pieces-theme/src/ frontend/web/themes/pieces
fi