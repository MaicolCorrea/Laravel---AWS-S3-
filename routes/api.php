<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProveAWS;
use Illuminate\Support\Facades\Route;

Route::post('/upload-image', [ProveAWS::class, 'uploadImage']);

?>