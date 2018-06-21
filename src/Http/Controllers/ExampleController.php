<?php
namespace ProcessMaker\Plugins\Example\Http\Controllers;

use Illuminate\Http\Request;
use ProcessMaker\Http\Controllers\Controller;

/**
 * An example controller that returns a simple view
 */
class ExampleController extends Controller
{

    public function index()
    {
        return view('plugins-processmaker-example::example');
    }

}