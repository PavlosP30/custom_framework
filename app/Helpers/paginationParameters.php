<?php

if (!function_exists('paginationParameters'))
{
    function paginationParameters($request)
    {
        $request->has('page') ? $page = $request->get('page') : $page = 1;
        $request->has('perPage') ? $perPage = $request->get('perPage') : $perPage = 10;
        $request->has('order') ? $order = $request->get('order') : $order = 'desc';
        $request->has('orderBy') ? $orderBy = $request->get('orderBy') : $orderBy = 'uuid';

        return array(
            'page' => $page,
            'perPage' => $perPage,
            'order' => $order,
            'orderBy' => $orderBy
        );
    }
}