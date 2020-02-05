<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\HtmlEscaper;

abstract class BaseHtmlEscaper
{

    public static function encode($string, $encoding = 'utf-8', $specialCharsFlags = ENT_QUOTES | ENT_SUBSTITUTE)
    {
        return htmlspecialchars($string, $specialCharsFlags, $encoding);
    }

}