<?php //9d2648388649e65ea0a351a1c6c83343
/** @noinspection all */

namespace LaravelIdea\Helper\Stancl\Tenancy\Database\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Stancl\Tenancy\Database\Models\Domain;
    use Stancl\Tenancy\Database\Models\ImpersonationToken;
    use Stancl\Tenancy\Database\Models\Tenant;
    use Stancl\Tenancy\Database\Models\TenantPivot;
    use Stancl\Tenancy\Database\TenantCollection;

    /**
     * @method Domain|null getOrPut($key, $value)
     * @method Domain|$this shift(int $count = 1)
     * @method Domain|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Domain|$this pop(int $count = 1)
     * @method Domain|null pull($key, \Closure $default = null)
     * @method Domain|null last(callable $callback = null, \Closure $default = null)
     * @method Domain|$this random(callable|int|null $number = null)
     * @method Domain|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Domain|null get($key, \Closure $default = null)
     * @method Domain|null first(callable $callback = null, \Closure $default = null)
     * @method Domain|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Domain|null find($key, $default = null)
     * @method Domain[] all()
     */
    class _IH_Domain_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Domain[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Domain_QB whereId($value)
     * @method _IH_Domain_QB whereDomain($value)
     * @method _IH_Domain_QB whereTenantId($value)
     * @method _IH_Domain_QB whereCreatedAt($value)
     * @method _IH_Domain_QB whereUpdatedAt($value)
     * @method Domain baseSole(array|string $columns = ['*'])
     * @method Domain create(array $attributes = [])
     * @method _IH_Domain_C|Domain[] cursor()
     * @method Domain|null|_IH_Domain_C|Domain[] find($id, array|string $columns = ['*'])
     * @method _IH_Domain_C|Domain[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Domain|_IH_Domain_C|Domain[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Domain|_IH_Domain_C|Domain[] findOrFail($id, array|string $columns = ['*'])
     * @method Domain|_IH_Domain_C|Domain[] findOrNew($id, array|string $columns = ['*'])
     * @method Domain first(array|string $columns = ['*'])
     * @method Domain firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Domain firstOrCreate(array $attributes = [], array $values = [])
     * @method Domain firstOrFail(array|string $columns = ['*'])
     * @method Domain firstOrNew(array $attributes = [], array $values = [])
     * @method Domain firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Domain forceCreate(array $attributes)
     * @method _IH_Domain_C|Domain[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Domain_C|Domain[] get(array|string $columns = ['*'])
     * @method Domain getModel()
     * @method Domain[] getModels(array|string $columns = ['*'])
     * @method _IH_Domain_C|Domain[] hydrate(array $items)
     * @method Domain make(array $attributes = [])
     * @method Domain newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Domain[]|_IH_Domain_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Domain[]|_IH_Domain_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Domain sole(array|string $columns = ['*'])
     * @method Domain updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Domain_QB extends _BaseBuilder {}

    /**
     * @method ImpersonationToken|null getOrPut($key, $value)
     * @method ImpersonationToken|$this shift(int $count = 1)
     * @method ImpersonationToken|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ImpersonationToken|$this pop(int $count = 1)
     * @method ImpersonationToken|null pull($key, \Closure $default = null)
     * @method ImpersonationToken|null last(callable $callback = null, \Closure $default = null)
     * @method ImpersonationToken|$this random(callable|int|null $number = null)
     * @method ImpersonationToken|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ImpersonationToken|null get($key, \Closure $default = null)
     * @method ImpersonationToken|null first(callable $callback = null, \Closure $default = null)
     * @method ImpersonationToken|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ImpersonationToken|null find($key, $default = null)
     * @method ImpersonationToken[] all()
     */
    class _IH_ImpersonationToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ImpersonationToken[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ImpersonationToken baseSole(array|string $columns = ['*'])
     * @method ImpersonationToken create(array $attributes = [])
     * @method _IH_ImpersonationToken_C|ImpersonationToken[] cursor()
     * @method ImpersonationToken|null|_IH_ImpersonationToken_C|ImpersonationToken[] find($id, array|string $columns = ['*'])
     * @method _IH_ImpersonationToken_C|ImpersonationToken[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ImpersonationToken|_IH_ImpersonationToken_C|ImpersonationToken[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ImpersonationToken|_IH_ImpersonationToken_C|ImpersonationToken[] findOrFail($id, array|string $columns = ['*'])
     * @method ImpersonationToken|_IH_ImpersonationToken_C|ImpersonationToken[] findOrNew($id, array|string $columns = ['*'])
     * @method ImpersonationToken first(array|string $columns = ['*'])
     * @method ImpersonationToken firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ImpersonationToken firstOrCreate(array $attributes = [], array $values = [])
     * @method ImpersonationToken firstOrFail(array|string $columns = ['*'])
     * @method ImpersonationToken firstOrNew(array $attributes = [], array $values = [])
     * @method ImpersonationToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ImpersonationToken forceCreate(array $attributes)
     * @method _IH_ImpersonationToken_C|ImpersonationToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ImpersonationToken_C|ImpersonationToken[] get(array|string $columns = ['*'])
     * @method ImpersonationToken getModel()
     * @method ImpersonationToken[] getModels(array|string $columns = ['*'])
     * @method _IH_ImpersonationToken_C|ImpersonationToken[] hydrate(array $items)
     * @method ImpersonationToken make(array $attributes = [])
     * @method ImpersonationToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ImpersonationToken[]|_IH_ImpersonationToken_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ImpersonationToken[]|_IH_ImpersonationToken_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ImpersonationToken sole(array|string $columns = ['*'])
     * @method ImpersonationToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ImpersonationToken_QB extends _BaseBuilder {}

    /**
     * @method TenantPivot|null getOrPut($key, $value)
     * @method TenantPivot|$this shift(int $count = 1)
     * @method TenantPivot|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TenantPivot|$this pop(int $count = 1)
     * @method TenantPivot|null pull($key, \Closure $default = null)
     * @method TenantPivot|null last(callable $callback = null, \Closure $default = null)
     * @method TenantPivot|$this random(callable|int|null $number = null)
     * @method TenantPivot|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TenantPivot|null get($key, \Closure $default = null)
     * @method TenantPivot|null first(callable $callback = null, \Closure $default = null)
     * @method TenantPivot|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TenantPivot|null find($key, $default = null)
     * @method TenantPivot[] all()
     */
    class _IH_TenantPivot_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TenantPivot[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method TenantPivot baseSole(array|string $columns = ['*'])
     * @method TenantPivot create(array $attributes = [])
     * @method _IH_TenantPivot_C|TenantPivot[] cursor()
     * @method TenantPivot|null|_IH_TenantPivot_C|TenantPivot[] find($id, array|string $columns = ['*'])
     * @method _IH_TenantPivot_C|TenantPivot[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TenantPivot|_IH_TenantPivot_C|TenantPivot[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TenantPivot|_IH_TenantPivot_C|TenantPivot[] findOrFail($id, array|string $columns = ['*'])
     * @method TenantPivot|_IH_TenantPivot_C|TenantPivot[] findOrNew($id, array|string $columns = ['*'])
     * @method TenantPivot first(array|string $columns = ['*'])
     * @method TenantPivot firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TenantPivot firstOrCreate(array $attributes = [], array $values = [])
     * @method TenantPivot firstOrFail(array|string $columns = ['*'])
     * @method TenantPivot firstOrNew(array $attributes = [], array $values = [])
     * @method TenantPivot firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TenantPivot forceCreate(array $attributes)
     * @method _IH_TenantPivot_C|TenantPivot[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TenantPivot_C|TenantPivot[] get(array|string $columns = ['*'])
     * @method TenantPivot getModel()
     * @method TenantPivot[] getModels(array|string $columns = ['*'])
     * @method _IH_TenantPivot_C|TenantPivot[] hydrate(array $items)
     * @method TenantPivot make(array $attributes = [])
     * @method TenantPivot newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TenantPivot[]|_IH_TenantPivot_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TenantPivot[]|_IH_TenantPivot_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TenantPivot sole(array|string $columns = ['*'])
     * @method TenantPivot updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TenantPivot_QB extends _BaseBuilder {}

    /**
     * @method Tenant|null getOrPut($key, $value)
     * @method Tenant|$this shift(int $count = 1)
     * @method Tenant|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Tenant|$this pop(int $count = 1)
     * @method Tenant|null pull($key, \Closure $default = null)
     * @method Tenant|null last(callable $callback = null, \Closure $default = null)
     * @method Tenant|$this random(callable|int|null $number = null)
     * @method Tenant|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Tenant|null get($key, \Closure $default = null)
     * @method Tenant|null first(callable $callback = null, \Closure $default = null)
     * @method Tenant|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Tenant|null find($key, $default = null)
     * @method Tenant[] all()
     * @method $this runForEach(callable $callable)
     * @mixin TenantCollection
     */
    class _IH_Tenant_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tenant[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Tenant_QB whereId($value)
     * @method _IH_Tenant_QB whereCreatedAt($value)
     * @method _IH_Tenant_QB whereUpdatedAt($value)
     * @method _IH_Tenant_QB whereData($value)
     * @method _IH_Tenant_QB whereUserId($value)
     * @method _IH_Tenant_QB whereThemeSlug($value)
     * @method Tenant baseSole(array|string $columns = ['*'])
     * @method Tenant create(array $attributes = [])
     * @method _IH_Tenant_C|Tenant[] cursor()
     * @method Tenant|null|_IH_Tenant_C|Tenant[] find($id, array|string $columns = ['*'])
     * @method _IH_Tenant_C|Tenant[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Tenant|_IH_Tenant_C|Tenant[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tenant|_IH_Tenant_C|Tenant[] findOrFail($id, array|string $columns = ['*'])
     * @method Tenant|_IH_Tenant_C|Tenant[] findOrNew($id, array|string $columns = ['*'])
     * @method Tenant first(array|string $columns = ['*'])
     * @method Tenant firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tenant firstOrCreate(array $attributes = [], array $values = [])
     * @method Tenant firstOrFail(array|string $columns = ['*'])
     * @method Tenant firstOrNew(array $attributes = [], array $values = [])
     * @method Tenant firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tenant forceCreate(array $attributes)
     * @method _IH_Tenant_C|Tenant[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tenant_C|Tenant[] get(array|string $columns = ['*'])
     * @method Tenant getModel()
     * @method Tenant[] getModels(array|string $columns = ['*'])
     * @method _IH_Tenant_C|Tenant[] hydrate(array $items)
     * @method Tenant make(array $attributes = [])
     * @method Tenant newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tenant[]|_IH_Tenant_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tenant[]|_IH_Tenant_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tenant sole(array|string $columns = ['*'])
     * @method Tenant updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Tenant_QB extends _BaseBuilder {}
}
