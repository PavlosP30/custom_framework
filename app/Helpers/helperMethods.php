<?php

if (!function_exists('request'))
{
    function request($key = null, $default = null)
    {
        if (is_null($key))
        {
            return app('request');
        }

        if (is_array($key))
        {
            return app('request')->only($key);
        }

        $value = app('request')->__get($key);

        return is_null($value) ? value($default) : $value;
    }
}

if (!function_exists('app'))
{
    function app($asbtract = null, array $parameters = [])
    {
        if (is_null($asbtract))
        {
            return \Illuminate\Container\Container::getInstance();
        }

        return \Illuminate\Container\Container::getInstance()->make($asbtract, $parameters);
    }
}