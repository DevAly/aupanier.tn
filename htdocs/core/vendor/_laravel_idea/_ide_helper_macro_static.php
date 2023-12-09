<?php //5a9b737e94cc0c1a34262d05f9216bb2
/** @noinspection all */

namespace Illuminate\Database\Eloquent {
    
    /**
     * @method static $this onlyTrashed(Builder $builder)
     * @method static int restore(Builder $builder)
     * @method static $this withTrashed(Builder $builder, $withTrashed = true)
     * @method static $this withoutParentModel(Builder $builder)
     * @method static $this withoutTenancy(Builder $builder)
     * @method static $this withoutTrashed(Builder $builder)
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method static $this domain(string $domain)
     */
    class RedirectResponse {}
    
    /**
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidSignature($absolute = true)
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method static array validate(array $rules, ...$params)
     * @method static array validateWithBag(string $errorBag, array $rules, ...$params)
     */
    class Request {}
}

namespace Illuminate\Routing {
    
    /**
     * @method static $this permission($permissions = [])
     * @method static $this role($roles = [])
     */
    class Route {}
}

namespace Illuminate\Support {
    
    /**
     * @method static $this debug()
     */
    class Collection {}
}

namespace Illuminate\Support\Facades {
    
    /**
     * @method static void auth($options = [])
     * @method static void confirmPassword()
     * @method static void emailVerification()
     * @method static void resetPassword()
     */
    class Route {}
}

namespace Stancl\Tenancy {

    use Stancl\Tenancy\Contracts\Tenant;
    use Stancl\Tenancy\Database\Models\ImpersonationToken;
    
    /**
     * @method static ImpersonationToken impersonate(Tenant $tenant, string $userId, string $redirectUrl, string $authGuard = null)
     */
    class Tenancy {}
}