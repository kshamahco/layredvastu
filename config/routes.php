<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\Router;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass('Route');

Router::scope('/', function ($routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index']);
    $routes->connect('/admin', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/:vastucat', ['controller' => 'VastusCategories', 'action' => 'index']);
    $routes->connect('/:vastucat/:vastuurl', ['controller' => 'Vastus', 'action' => 'view']);
    $routes->connect('/blog', ['controller' => 'Blogs', 'action' => 'index']);
    $routes->connect('/blog/:url', ['controller' => 'Blogs', 'action' => 'view']);
    $routes->connect('/disclaimer', ['controller' => 'Pages', 'action' => 'disclaimer']);
    $routes->connect('/about-us', ['controller' => 'Pages', 'action' => 'aboutus']);
    $routes->connect('/thank-you', ['controller' => 'Pages', 'action' => 'thankyou']);
    $routes->connect('/contact-us', ['controller' => 'Pages', 'action' => 'contactus']);
    $routes->connect('/SubmitPopupForm', ['controller' => 'Pages', 'action' => 'SubmitPopupForm']);
    $routes->fallbacks('InflectedRoute');
});

Router::prefix('admin', function ($routes) {
    // All routes here will be prefixed with `/admin`
    // And have the prefix => admin route element added.
    $routes->fallbacks('InflectedRoute');
});


/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
