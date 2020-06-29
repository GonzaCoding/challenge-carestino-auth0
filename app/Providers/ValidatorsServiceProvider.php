<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


/**
 * @SWG\Get(
 *   path="/api/email-validator/{email}",
 *   summary="Email verification",
 *   security={
 *     {"passport": {}},
 *   },
 *   operationId="email-validator",
 *   @SWG\Response(response=200, description="Successful operation"),
 *   @SWG\Response(response=406, description="Not acceptable"),
 *   @SWG\Response(response=500, description="Internal server error"),
 *   @SWG\Response(response=401, description="Unauthenticated"),
 *		@SWG\Parameter(
 *          name="email",
 *          in="path",
 *          required=false, 
 *          type="string" 
 *      ),
 * )
 *
 */

class ValidatorsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path().'/Helpers/Validators.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
