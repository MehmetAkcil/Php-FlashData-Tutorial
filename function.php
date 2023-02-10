<?php

session_start();

function setFlashData($key, $value)
{
    $key = 'flashdata_' . $key;

    return $_SESSION[$key] = $value;
}
function getFlashData($key)
{
    $key = 'flashdata_' . $key;

    $res = $_SESSION[$key] ?? null;

    unset($_SESSION[$key]);

    return $res;
}

function hasFlashData($key): bool
{
    $key = 'flashdata_' . $key;

    return isset($_SESSION[$key]);
}
function removeFlashData($key): bool
{
    $key = 'flashdata_' . $key;

    unset($_SESSION[$key]);

    return true;
}

function redirect($url = '')
{
    header('Location: ' . $url);
    exit();
}