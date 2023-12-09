<?php //ef77d5a1aaa36b6d52a2bea1f6c91734
/** @noinspection all */

namespace LaravelIdea\Helper\Modules\CountryManage\Entities {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Modules\CountryManage\Entities\Country;
    use Modules\CountryManage\Entities\State;

    /**
     * @method Country|null getOrPut($key, $value)
     * @method Country|$this shift(int $count = 1)
     * @method Country|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Country|$this pop(int $count = 1)
     * @method Country|null pull($key, \Closure $default = null)
     * @method Country|null last(callable $callback = null, \Closure $default = null)
     * @method Country|$this random(callable|int|null $number = null)
     * @method Country|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Country|null get($key, \Closure $default = null)
     * @method Country|null first(callable $callback = null, \Closure $default = null)
     * @method Country|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Country|null find($key, $default = null)
     * @method Country[] all()
     */
    class _IH_Country_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Country[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Country_QB whereId($value)
     * @method _IH_Country_QB whereName($value)
     * @method _IH_Country_QB whereStatus($value)
     * @method _IH_Country_QB whereCreatedAt($value)
     * @method _IH_Country_QB whereUpdatedAt($value)
     * @method Country baseSole(array|string $columns = ['*'])
     * @method Country create(array $attributes = [])
     * @method _IH_Country_C|Country[] cursor()
     * @method Country|null|_IH_Country_C|Country[] find($id, array|string $columns = ['*'])
     * @method _IH_Country_C|Country[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Country|_IH_Country_C|Country[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Country|_IH_Country_C|Country[] findOrFail($id, array|string $columns = ['*'])
     * @method Country|_IH_Country_C|Country[] findOrNew($id, array|string $columns = ['*'])
     * @method Country first(array|string $columns = ['*'])
     * @method Country firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Country firstOrCreate(array $attributes = [], array $values = [])
     * @method Country firstOrFail(array|string $columns = ['*'])
     * @method Country firstOrNew(array $attributes = [], array $values = [])
     * @method Country firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Country forceCreate(array $attributes)
     * @method _IH_Country_C|Country[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Country_C|Country[] get(array|string $columns = ['*'])
     * @method Country getModel()
     * @method Country[] getModels(array|string $columns = ['*'])
     * @method _IH_Country_C|Country[] hydrate(array $items)
     * @method Country make(array $attributes = [])
     * @method Country newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Country[]|_IH_Country_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Country[]|_IH_Country_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Country sole(array|string $columns = ['*'])
     * @method Country updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Country_QB extends _BaseBuilder {}

    /**
     * @method State|null getOrPut($key, $value)
     * @method State|$this shift(int $count = 1)
     * @method State|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method State|$this pop(int $count = 1)
     * @method State|null pull($key, \Closure $default = null)
     * @method State|null last(callable $callback = null, \Closure $default = null)
     * @method State|$this random(callable|int|null $number = null)
     * @method State|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method State|null get($key, \Closure $default = null)
     * @method State|null first(callable $callback = null, \Closure $default = null)
     * @method State|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method State|null find($key, $default = null)
     * @method State[] all()
     */
    class _IH_State_C extends _BaseCollection {
        /**
         * @param int $size
         * @return State[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_State_QB whereId($value)
     * @method _IH_State_QB whereName($value)
     * @method _IH_State_QB whereCountryId($value)
     * @method _IH_State_QB whereStatus($value)
     * @method _IH_State_QB whereCreatedAt($value)
     * @method _IH_State_QB whereUpdatedAt($value)
     * @method State baseSole(array|string $columns = ['*'])
     * @method State create(array $attributes = [])
     * @method _IH_State_C|State[] cursor()
     * @method State|null|_IH_State_C|State[] find($id, array|string $columns = ['*'])
     * @method _IH_State_C|State[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method State|_IH_State_C|State[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method State|_IH_State_C|State[] findOrFail($id, array|string $columns = ['*'])
     * @method State|_IH_State_C|State[] findOrNew($id, array|string $columns = ['*'])
     * @method State first(array|string $columns = ['*'])
     * @method State firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method State firstOrCreate(array $attributes = [], array $values = [])
     * @method State firstOrFail(array|string $columns = ['*'])
     * @method State firstOrNew(array $attributes = [], array $values = [])
     * @method State firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method State forceCreate(array $attributes)
     * @method _IH_State_C|State[] fromQuery(string $query, array $bindings = [])
     * @method _IH_State_C|State[] get(array|string $columns = ['*'])
     * @method State getModel()
     * @method State[] getModels(array|string $columns = ['*'])
     * @method _IH_State_C|State[] hydrate(array $items)
     * @method State make(array $attributes = [])
     * @method State newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|State[]|_IH_State_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|State[]|_IH_State_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method State sole(array|string $columns = ['*'])
     * @method State updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_State_QB extends _BaseBuilder {}
}
