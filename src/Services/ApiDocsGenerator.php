<?php
namespace MyApiDocs\Services;

use Illuminate\Support\Facades\Route;

class ApiDocsGenerator
{
    public function getRoutes()
    {
        return collect(Route::getRoutes())->map(function ($route) {
            return [
                'method' => $route->methods()[0],
                'uri' => $route->uri(),
                'action' => $route->getActionName(),
            ];
        });
    }
}

?>