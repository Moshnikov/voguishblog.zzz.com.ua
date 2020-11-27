<?php
define("DEFAULT_TEMPLATE_PATH", '/local/templates/.default');

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}
function cutStr($str, $length=50, $postfix='...')
{
    if ( strlen($str) <= $length)
        return $str;

    $temp = substr($str, 0, $length);
    return substr($temp, 0, strrpos($temp, ' ') ) . $postfix;
}
function mbCutString($str, $length, $postfix='...', $encoding='UTF-8')
{
    if (mb_strlen($str, $encoding) <= $length) {
        return $str;
    }

    $tmp = mb_substr($str, 0, $length, $encoding);
    return $tmp = mb_substr($tmp, 0, mb_strripos($tmp, '', 0,
            $encoding), $encoding) . $postfix;
}