<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use League\Fractal;


trait ApiResponse
{


    private function successResponse($data, $code)
    {
        return response()->json(['data' => $data, 'code' => $code], 200);
    }

    protected function errorResponse($message, $code)
    {
        return response()->json(['data' => $message, 'code' => $code], 200);
    }

    protected function showAll(Collection $collection, $code = 200)
    {
        if ($collection->isEmpty()) {
            return $this->successResponse(['data' => $collection, 'code' => $code], 200);
        }

        $transformer = $collection->first()->transformer;
        $collection = $this->transformData($collection, $transformer);
        return $this->successResponse($collection, $code);
    }

    protected function showOne(Model $instance, $code = 200)
    {
        $transformer = $instance->transformer;
        $instance = $this->transformData($instance, $transformer);
        return $this->successResponse($instance, $code);
    }

    protected function showOneDetail(Model $instance, $code = 200)
    {
        $transformer = $instance->transformerDetail;
        $instance = $this->transformData($instance, $transformer);
        return $this->successResponse($instance, $code);
    }

    protected function showAllDetail(Collection $collection, $code = 200)
    {
        if ($collection->isEmpty()) {
            return $this->successResponse(['data' => $collection, 'code' => $code], 200);
        }
        $transformer = $collection->first()->transformerDetail;
        $collection = $this->transformData($collection, $transformer);
        return $this->successResponse($collection, $code);
    }

    protected function showOneBackOffice(Model $instance, $code = 200)
    {
        $transformer = $instance->transformerBackOffice;
        $instance = $this->transformData($instance, $transformer);
        return $this->successResponse($instance, $code);
    }

    protected function showAllBackOffice(Collection $collection, $code = 200)
    {
        if ($collection->isEmpty()) {
            return $this->successResponse(['data' => $collection, 'code' => $code], 200);
        }
        $transformer = $collection->first()->transformerBackOffice;
        $collection = $this->transformData($collection, $transformer);
        return $this->successResponse($collection, $code);
    }

    protected function showMessage($message, $code)
    {
        return $this->successResponse(['data' => $message, 'code' => $code], 200);
    }

    protected function transformData($data, $transformer)
    {

        $transformation = fractal($data, new $transformer);
        if (isset($_GET['include']))
            $transformation->parseIncludes($_GET['include']);
        return $transformation->toArray();
    }
}