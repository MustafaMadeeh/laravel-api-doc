<?php
use MyApiDocs\Controllers\ApiDocsController;
use Illuminate\Support\Facades\Route;

Route::get('/api-docs', [ApiDocsController::class, 'index'])->name('api.docs');

?>