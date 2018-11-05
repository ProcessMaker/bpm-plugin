<?php
namespace ProcessMaker\Plugins\Example\Http\Middleware;

use Closure;
use Lavary\Menu\Facade as Menu;


class AddToMenus 
{

    public function handle($request, Closure $next)
    {

        // Add a menu option to the top to point to our page
        $menu = Menu::get('topnav');

        // Add our menu item to the top nav
        $menu->add('Example Plugin', ['route' => 'plugin-example-index']);

        return $next($request);
    }
    
}