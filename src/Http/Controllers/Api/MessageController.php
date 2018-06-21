<?php
namespace ProcessMaker\Plugins\Example\Http\Controllers\Api;

use Illuminate\Http\Request;
use ProcessMaker\Http\Controllers\Controller;

/**
 * An example API controller that returns a simple message
 */
class MessageController extends Controller
{
    /**
     * Sample controller that returns a translated hello world message.
     * Note, our translated string has a prefix for our package.
     * See: https://laravel.com/docs/5.6/packages#translations
     */
    public function index()
    {
        return response()->json([
            'message' => __('bpm-plugin-example:api-message')
        ]);
    }

}