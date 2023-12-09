<?php //ee57f652600eb7aae6f5e811a3a1948a
/** @noinspection all */

namespace LaravelIdea\Helper\Modules\TaxModule\Entities {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Modules\TaxModule\Entities\CountryTax;
    use Modules\TaxModule\Entities\StateTax;

    /**
     * @method CountryTax|null getOrPut($key, $value)
     * @method CountryTax|$this shift(int $count = 1)
     * @method CountryTax|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CountryTax|$this pop(int $count = 1)
     * @method CountryTax|null pull($key, \Closure $default = null)
     * @method CountryTax|null last(callable $callback = null, \Closure $default = null)
     * @method CountryTax|$this random(callable|int|null $number = null)
     * @method CountryTax|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CountryTax|null get($key, \Closure $default = null)
     * @method CountryTax|null first(callable $callback = null, \Closure $default = null)
     * @method CountryTax|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CountryTax|null find($key, $default = null)
     * @method CountryTax[] all()
     */
    class _IH_CountryTax_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CountryTax[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_CountryTax_QB whereId($value)
     * @method _IH_CountryTax_QB whereCountryId($value)
     * @method _IH_CountryTax_QB whereTaxPercentage($value)
     * @method _IH_CountryTax_QB whereCreatedAt($value)
     * @method _IH_CountryTax_QB whereUpdatedAt($value)
     * @method CountryTax baseSole(array|string $columns = ['*'])
     * @method CountryTax create(array $attributes = [])
     * @method _IH_CountryTax_C|CountryTax[] cursor()
     * @method CountryTax|null|_IH_CountryTax_C|CountryTax[] find($id, array|string $columns = ['*'])
     * @method _IH_CountryTax_C|CountryTax[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CountryTax|_IH_CountryTax_C|CountryTax[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CountryTax|_IH_CountryTax_C|CountryTax[] findOrFail($id, array|string $columns = ['*'])
     * @method CountryTax|_IH_CountryTax_C|CountryTax[] findOrNew($id, array|string $columns = ['*'])
     * @method CountryTax first(array|string $columns = ['*'])
     * @method CountryTax firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CountryTax firstOrCreate(array $attributes = [], array $values = [])
     * @method CountryTax firstOrFail(array|string $columns = ['*'])
     * @method CountryTax firstOrNew(array $attributes = [], array $values = [])
     * @method CountryTax firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CountryTax forceCreate(array $attributes)
     * @method _IH_CountryTax_C|CountryTax[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CountryTax_C|CountryTax[] get(array|string $columns = ['*'])
     * @method CountryTax getModel()
     * @method CountryTax[] getModels(array|string $columns = ['*'])
     * @method _IH_CountryTax_C|CountryTax[] hydrate(array $items)
     * @method CountryTax make(array $attributes = [])
     * @method CountryTax newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CountryTax[]|_IH_CountryTax_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CountryTax[]|_IH_CountryTax_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CountryTax sole(array|string $columns = ['*'])
     * @method CountryTax updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CountryTax_QB extends _BaseBuilder {}

    /**
     * @method StateTax|null getOrPut($key, $value)
     * @method StateTax|$this shift(int $count = 1)
     * @method StateTax|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method StateTax|$this pop(int $count = 1)
     * @method StateTax|null pull($key, \Closure $default = null)
     * @method StateTax|null last(callable $callback = null, \Closure $default = null)
     * @method StateTax|$this random(callable|int|null $number = null)
     * @method StateTax|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method StateTax|null get($key, \Closure $default = null)
     * @method StateTax|null first(callable $callback = null, \Closure $default = null)
     * @method StateTax|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method StateTax|null find($key, $default = null)
     * @method StateTax[] all()
     */
    class _IH_StateTax_C extends _BaseCollection {
        /**
         * @param int $size
         * @return StateTax[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_StateTax_QB whereId($value)
     * @method _IH_StateTax_QB whereStateId($value)
     * @method _IH_StateTax_QB whereCountryId($value)
     * @method _IH_StateTax_QB whereTaxPercentage($value)
     * @method _IH_StateTax_QB whereCreatedAt($value)
     * @method _IH_StateTax_QB whereUpdatedAt($value)
     * @method StateTax baseSole(array|string $columns = ['*'])
     * @method StateTax create(array $attributes = [])
     * @method _IH_StateTax_C|StateTax[] cursor()
     * @method StateTax|null|_IH_StateTax_C|StateTax[] find($id, array|string $columns = ['*'])
     * @method _IH_StateTax_C|StateTax[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method StateTax|_IH_StateTax_C|StateTax[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StateTax|_IH_StateTax_C|StateTax[] findOrFail($id, array|string $columns = ['*'])
     * @method StateTax|_IH_StateTax_C|StateTax[] findOrNew($id, array|string $columns = ['*'])
     * @method StateTax first(array|string $columns = ['*'])
     * @method StateTax firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StateTax firstOrCreate(array $attributes = [], array $values = [])
     * @method StateTax firstOrFail(array|string $columns = ['*'])
     * @method StateTax firstOrNew(array $attributes = [], array $values = [])
     * @method StateTax firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method StateTax forceCreate(array $attributes)
     * @method _IH_StateTax_C|StateTax[] fromQuery(string $query, array $bindings = [])
     * @method _IH_StateTax_C|StateTax[] get(array|string $columns = ['*'])
     * @method StateTax getModel()
     * @method StateTax[] getModels(array|string $columns = ['*'])
     * @method _IH_StateTax_C|StateTax[] hydrate(array $items)
     * @method StateTax make(array $attributes = [])
     * @method StateTax newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|StateTax[]|_IH_StateTax_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|StateTax[]|_IH_StateTax_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method StateTax sole(array|string $columns = ['*'])
     * @method StateTax updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_StateTax_QB extends _BaseBuilder {}
}
