<?php
namespace Application\Theme\Smeg;

use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\Page\Theme\BedrockThemeTrait;

class PageTheme extends Theme
{
    use BedrockThemeTrait;


    public function getThemeName()
    {
        return t('Smeg');
    }

    public function getThemeDescription()
    {
        return t('Jolly times with webpack.js');
    }

}
