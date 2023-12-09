<?php //0923492d0368693c6ea00f0fcab4ac13
/** @noinspection all */

namespace LaravelIdea\Helper\Modules\Service\Entities {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Modules\Service\Entities\Service;
    use Modules\Service\Entities\ServiceCategory;

    /**
     * @method ServiceCategory|null getOrPut($key, $value)
     * @method ServiceCategory|$this shift(int $count = 1)
     * @method ServiceCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ServiceCategory|$this pop(int $count = 1)
     * @method ServiceCategory|null pull($key, \Closure $default = null)
     * @method ServiceCategory|null last(callable $callback = null, \Closure $default = null)
     * @method ServiceCategory|$this random(callable|int|null $number = null)
     * @method ServiceCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ServiceCategory|null get($key, \Closure $default = null)
     * @method ServiceCategory|null first(callable $callback = null, \Closure $default = null)
     * @method ServiceCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ServiceCategory|null find($key, $default = null)
     * @method ServiceCategory[] all()
     */
    class _IH_ServiceCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ServiceCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ServiceCategory_QB whereId($value)
     * @method _IH_ServiceCategory_QB whereTitle($value)
     * @method _IH_ServiceCategory_QB whereStatus($value)
     * @method _IH_ServiceCategory_QB whereCreatedAt($value)
     * @method _IH_ServiceCategory_QB whereUpdatedAt($value)
     * @method ServiceCategory baseSole(array|string $columns = ['*'])
     * @method ServiceCategory create(array $attributes = [])
     * @method _IH_ServiceCategory_C|ServiceCategory[] cursor()
     * @method ServiceCategory|null|_IH_ServiceCategory_C|ServiceCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_ServiceCategory_C|ServiceCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ServiceCategory|_IH_ServiceCategory_C|ServiceCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ServiceCategory|_IH_ServiceCategory_C|ServiceCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method ServiceCategory|_IH_ServiceCategory_C|ServiceCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method ServiceCategory first(array|string $columns = ['*'])
     * @method ServiceCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ServiceCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ServiceCategory firstOrFail(array|string $columns = ['*'])
     * @method ServiceCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ServiceCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ServiceCategory forceCreate(array $attributes)
     * @method _IH_ServiceCategory_C|ServiceCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ServiceCategory_C|ServiceCategory[] get(array|string $columns = ['*'])
     * @method ServiceCategory getModel()
     * @method ServiceCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ServiceCategory_C|ServiceCategory[] hydrate(array $items)
     * @method ServiceCategory make(array $attributes = [])
     * @method ServiceCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ServiceCategory[]|_IH_ServiceCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ServiceCategory[]|_IH_ServiceCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ServiceCategory sole(array|string $columns = ['*'])
     * @method ServiceCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ServiceCategory_QB extends _BaseBuilder {}

    /**
     * @method Service|null getOrPut($key, $value)
     * @method Service|$this shift(int $count = 1)
     * @method Service|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Service|$this pop(int $count = 1)
     * @method Service|null pull($key, \Closure $default = null)
     * @method Service|null last(callable $callback = null, \Closure $default = null)
     * @method Service|$this random(callable|int|null $number = null)
     * @method Service|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Service|null get($key, \Closure $default = null)
     * @method Service|null first(callable $callback = null, \Closure $default = null)
     * @method Service|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Service|null find($key, $default = null)
     * @method Service[] all()
     */
    class _IH_Service_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Service[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Service_QB whereId($value)
     * @method _IH_Service_QB whereCategoryId($value)
     * @method _IH_Service_QB whereTitle($value)
     * @method _IH_Service_QB whereSlug($value)
     * @method _IH_Service_QB whereDescription($value)
     * @method _IH_Service_QB whereImage($value)
     * @method _IH_Service_QB wherePricePlan($value)
     * @method _IH_Service_QB whereMetaTag($value)
     * @method _IH_Service_QB whereMetaDescription($value)
     * @method _IH_Service_QB whereStatus($value)
     * @method _IH_Service_QB whereCreatedAt($value)
     * @method _IH_Service_QB whereUpdatedAt($value)
     * @method Service baseSole(array|string $columns = ['*'])
     * @method Service create(array $attributes = [])
     * @method _IH_Service_C|Service[] cursor()
     * @method Service|null|_IH_Service_C|Service[] find($id, array|string $columns = ['*'])
     * @method _IH_Service_C|Service[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Service|_IH_Service_C|Service[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Service|_IH_Service_C|Service[] findOrFail($id, array|string $columns = ['*'])
     * @method Service|_IH_Service_C|Service[] findOrNew($id, array|string $columns = ['*'])
     * @method Service first(array|string $columns = ['*'])
     * @method Service firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Service firstOrCreate(array $attributes = [], array $values = [])
     * @method Service firstOrFail(array|string $columns = ['*'])
     * @method Service firstOrNew(array $attributes = [], array $values = [])
     * @method Service firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Service forceCreate(array $attributes)
     * @method _IH_Service_C|Service[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Service_C|Service[] get(array|string $columns = ['*'])
     * @method Service getModel()
     * @method Service[] getModels(array|string $columns = ['*'])
     * @method _IH_Service_C|Service[] hydrate(array $items)
     * @method Service make(array $attributes = [])
     * @method Service newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Service[]|_IH_Service_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Service[]|_IH_Service_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Service sole(array|string $columns = ['*'])
     * @method Service updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Service_QB extends _BaseBuilder {}
}
