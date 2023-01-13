<?php
include_once __DIR__."/../core/routing/Route.php";
include_once __DIR__."/../core/routing/Route.php";

/**
 * manage the routes creations
 */
class Web
{
    /**
     * Set all the routes created
     * 
     * ROUTE => home
     * ROUTE => contact
     * ROUTE => E404
     */
    public static function Routes()
    {
        // Check if the routes list is set
        if (isset(Route::$routes)) 
        {
            // Set the routes to null
            Route::$routes = null;
        }
        
        /**
         * Home
         */
        // Home page
        Route::Post('/', 
            ["controller" => HomeController::class, "function" =>  'Home'],
            'home', 'Home.php'
            )->Name('home');

        // Contact page
        Route::Post('/contact/testfwkeugwkeauf', 
            ["controller" => HomeController::class, "function" => 'Contact'],
            'home', 'contact.php'
            )->Name('contact');

        /**
         * Errors
         */
        // 404 page
        Route::Post('/404', 
            ["function" => 'E404'],
            'errors', '404.php'
            )->Name('404');
    }

    /**
     * Set the groups
     * 
     * GROUP => Error
     */
    public static function Groups()
    {
        // Error group
        Route::Group(ErrorController::class,
        [
            Route::GetRouteByName("404")
        ])->Name("Error");
    }

    /**
     * Set all the middlewares
     */
    public static function Middlewares()
    {

    }

    /**
     * Set all the verifications
     */
    public static function Verifications()
    {
        
    }
}
?>