<?php //d7cd99fdbbdf52656b55d37213d395ef
/** @noinspection all */

namespace Database\Factories {

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @method $this hasNotifications(int $count = 1, $attributes = [])
     * @method $this hasPermissions(int $count = 1, $attributes = [])
     * @method $this hasReadNotifications(int $count = 1, $attributes = [])
     * @method $this hasRoles(int $count = 1, $attributes = [])
     * @method $this hasUnreadNotifications(int $count = 1, $attributes = [])
     */
    class AdminFactory extends Factory {}

    /**
     * @method $this hasCustom_domains(int $count = 1, $attributes = [])
     * @method $this hasDomains(int $count = 1, $attributes = [])
     * @method $this hasNotifications(int $count = 1, $attributes = [])
     * @method $this hasPayment_log(int $count = 1, $attributes = [])
     * @method $this hasReadNotifications(int $count = 1, $attributes = [])
     * @method $this hasTenant_details(int $count = 1, $attributes = [])
     * @method $this forTenant_info($attributes = [])
     * @method $this hasUnreadNotifications(int $count = 1, $attributes = [])
     */
    class UserFactory extends Factory {}
}
