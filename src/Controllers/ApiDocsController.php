<?php
namespace MyApiDocs\Controllers;
use MyApiDocs\Services\ApiDocsGenerator;
use Illuminate\Routing\Controller;
class ApiDocsController extends Controller
{
    public function index(ApiDocsGenerator $apiDocsGenerator)
    {
        $routes = $apiDocsGenerator->getRoutes();
        return view('myapidocs::docs', compact('routes'));
    }
}
?>