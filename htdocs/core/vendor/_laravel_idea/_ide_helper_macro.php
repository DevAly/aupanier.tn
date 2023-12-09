<?php //7a170e744d8b4214f8977d50d5e7383a
/** @noinspection all */

namespace Illuminate\Database\Eloquent {
    
    /**
     * @method $this onlyTrashed(Builder $builder)
     * @method int restore(Builder $builder)
     * @method $this withTrashed(Builder $builder, $withTrashed = true)
     * @method $this withoutParentModel(Builder $builder)
     * @method $this withoutTenancy(Builder $builder)
     * @method $this withoutTrashed(Builder $builder)
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method $this domain(string $domain)
     */
    class RedirectResponse {}
    
    /**
     * @method bool hasValidRelativeSignature()
     * @method bool hasValidSignature($absolute = true)
     * @method bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method array validate(array $rules, ...$params)
     * @method array validateWithBag(string $errorBag, array $rules, ...$params)
     */
    class Request {}
}

namespace Illuminate\Routing {
    
    /**
     * @method $this permission($permissions = [])
     * @method $this role($roles = [])
     */
    class Route {}
}

namespace Illuminate\Support {
    
    /**
     * @method $this debug()
     */
    class Collection {}
}

namespace Illuminate\Support\Facades {
    
    /**
     * @method void auth($options = [])
     * @method void confirmPassword()
     * @method void emailVerification()
     * @method void resetPassword()
     */
    class Route {}
}

namespace Stancl\Tenancy {

    use Stancl\Tenancy\Contracts\Tenant;
    use Stancl\Tenancy\Database\Models\ImpersonationToken;
    
    /**
     * @method ImpersonationToken impersonate(Tenant $tenant, string $userId, string $redirectUrl, string $authGuard = null)
     */
    class Tenancy {}
}