<?php //7c66c9495880bf9036774dc27fa5878e
/** @noinspection all */

namespace Stancl\Tenancy\Database\Models {

    use App\Models\Tenant as Tenant1;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Tenant_QB;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_Domain_C;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_Domain_QB;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_ImpersonationToken_C;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_ImpersonationToken_QB;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_TenantPivot_C;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_TenantPivot_QB;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_Tenant_C;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_Tenant_QB as _IH_Tenant_QB1;

    /**
     * @property int $id
     * @property string $domain
     * @property string $tenant_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Tenant1 $tenant
     * @method BelongsTo|_IH_Tenant_QB tenant()
     * @method static _IH_Domain_QB onWriteConnection()
     * @method _IH_Domain_QB newQuery()
     * @method static _IH_Domain_QB on(null|string $connection = null)
     * @method static _IH_Domain_QB query()
     * @method static _IH_Domain_QB with(array|string $relations)
     * @method _IH_Domain_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Domain_C|Domain[] all()
     * @ownLinks tenant_id,\App\Models\Tenant,id
     * @mixin _IH_Domain_QB
     */
    class Domain extends Model {}

    /**
     * @method static _IH_ImpersonationToken_QB onWriteConnection()
     * @method _IH_ImpersonationToken_QB newQuery()
     * @method static _IH_ImpersonationToken_QB on(null|string $connection = null)
     * @method static _IH_ImpersonationToken_QB query()
     * @method static _IH_ImpersonationToken_QB with(array|string $relations)
     * @method _IH_ImpersonationToken_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ImpersonationToken_C|ImpersonationToken[] all()
     * @mixin _IH_ImpersonationToken_QB
     */
    class ImpersonationToken extends Model {}

    /**
     * @property string $id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property array|null $data
     * @property int|null $user_id
     * @property string|null $theme_slug
     * @method static _IH_Tenant_QB1 onWriteConnection()
     * @method _IH_Tenant_QB1 newQuery()
     * @method static _IH_Tenant_QB1 on(null|string $connection = null)
     * @method static _IH_Tenant_QB1 query()
     * @method static _IH_Tenant_QB1 with(array|string $relations)
     * @method _IH_Tenant_QB1 newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tenant_C|Tenant[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks id,\Stancl\Tenancy\Database\Models\Domain,tenant_id|id,\App\Models\PaymentLogs,tenant_id
     * @mixin _IH_Tenant_QB1
     */
    class Tenant extends Model {}

    /**
     * @method static _IH_TenantPivot_QB onWriteConnection()
     * @method _IH_TenantPivot_QB newQuery()
     * @method static _IH_TenantPivot_QB on(null|string $connection = null)
     * @method static _IH_TenantPivot_QB query()
     * @method static _IH_TenantPivot_QB with(array|string $relations)
     * @method _IH_TenantPivot_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TenantPivot_C|TenantPivot[] all()
     * @mixin _IH_TenantPivot_QB
     */
    class TenantPivot extends Model {}
}
