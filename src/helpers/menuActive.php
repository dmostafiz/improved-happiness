<?php

function setActive($route = array(), $class = false)
{
    // return (request()->route()->getName() == $route) ? $class : '';

    $request = request()->route()->getName();

    if (in_array($request, $route)) {
        return $class;
    } else {
        return '';
    }
}

function setActiveUrl($route = array(), $class = false)
{
    // return (request()->route()->getName() == $route) ? $class : '';

    $request = request()->path();
    $request = trim($request, '/');

    if (in_array($request, $route)) {
        return $class;
    } else {
        return '';
    }
}

function any()
{
    return "i am form helper function";
}