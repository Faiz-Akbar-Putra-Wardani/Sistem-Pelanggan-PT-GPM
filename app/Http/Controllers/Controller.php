<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @method static \Illuminate\Routing\ControllerMiddlewareOptions middleware(callable|array|string $middleware, array $options = [])
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
