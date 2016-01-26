<?php namespace App\Exemptions;

use Config;
use MisterPhilip\MaintenanceMode\Exemptions\MaintenanceModeExemption;

/**
 * Class RouteWhitelist
 *
 * Checks to see if the Route matches any of the ROutes whitelisted in the configuration
 *
 * @package MisterPhilip\MaintenanceMode
 */
class RouteWhitelist extends MaintenanceModeExemption
{
    public function request($request)
    {
        return $request;
    }
    /**
     * Execute the exemption check
     *
     * @return bool
     */
    public function isExempt()
    {
        $exemptRoutes = $this->app['config']->get('maintenancemode.exempt-routes', []);

        if (is_array($exemptRoutes) && in_array(request()->path(), $exemptRoutes)) {
            return true;
        }

        // We did not have a match
        return false;
    }
}
