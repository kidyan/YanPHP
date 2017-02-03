<?php
$url = 'http://www.xxx.com.cn/abc/de/pic.name.png?201710101111';

//获取文件后缀名png

function ext1($url)
{
    $arr = parse_url($url);
    $path = $arr['path'];
    $pos = strrpos($path, '.');
    $ext = substr($path, $pos + 1);
    return $ext;
}

function ext2($url)
{
    $ext = pathinfo($url, PATHINFO_EXTENSION);
    return explode('?', $ext)[0];
}

function ext3($url)
{
    $pos = strrpos($url, '.');
    $ext = substr($url, $pos + 1);
    return explode('?', $ext)[0];
}

function ext4($url)
{
    $ext = strrchr($url, '.');
    $ext = substr($ext, 1);
    return explode('?', $ext)[0];
}

function ext5($url)
{
    $start = strrpos($url, '.');
    $end = strrpos($url, '?');
    $len = $end - strlen($url);
    return substr($url, $start + 1, $len);
}

var_dump(ext1($url), ext2($url), ext3($url), ext4($url), ext5($url));
