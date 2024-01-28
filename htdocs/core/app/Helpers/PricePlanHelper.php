<?php

namespace App\Helpers;

use App\Models\PricePlan;
use App\Models\ProductOrder;
use Spatie\LaravelPackageTools\Package;

class PricePlanHelper
{
    const FREE_PLAN_ORDERS_LIMIT = 500;

    /**
     * Retrieves the active plan for a tenant.
     *
     * @return PricePlan|null The package associated with the payment log of the tenant, or null if no active plan is found.
     */
    public static function getActivePlan()
    {
        return tenant()->payment_log->package;
    }

    /**
     * Checks if a plan is a free plan.
     *
     * @param PricePlan $plan The plan to check.
     * @return bool Returns true if the plan is a free plan, false otherwise.
     */
    public static function isFreePlan(PricePlan $plan): bool
    {
        return $plan->price == 0;
    }

    /**
     * Checks if the current active plan is a free plan.
     *
     * @return bool Returns true if the current active plan is a free plan, false otherwise.
     */
    public static function hasFreePlan(): bool
    {
        $activePlan = self::getActivePlan();
        return self::isFreePlan($activePlan);
    }

    /**
     * Retrieves the non-disabled order IDs for free plan users.
     *
     * @return \Illuminate\Support\Collection|array The collection of non-disabled order IDs.
     */
    public static function getNonDisabledOrderIdsForFreePlan()
    {
        return ProductOrder::query()
            ->orderBy('created_at', 'asc')
            ->take(self::FREE_PLAN_ORDERS_LIMIT)
            ->get()
            ->pluck('id')->toArray();
    }


}
