<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Property;

class PropertyController
{
    public function index()
    {
        $properties = Property::with('county', 'country', 'town', 'property_type')->get();
        echo json_encode($properties);
    }

    public function propertiesList(Request $request)
    {
//        $parameters = paginationParameters($request);
//        dd(Property::with('county', 'country', 'town', 'property_type')
//            ->orderBy($parameters['orderBy'], $parameters['order'])
//            ->paginate($parameters['perPage'])
//            ->appends(request()->query()
//        ));
    }
}