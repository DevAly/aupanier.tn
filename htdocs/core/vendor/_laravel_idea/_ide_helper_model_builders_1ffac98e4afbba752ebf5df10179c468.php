<?php //ced558fd9236d2db5ff2f06e45773a33
/** @noinspection all */

namespace LaravelIdea\Helper\Modules\Badge\Entities {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Modules\Badge\Entities\Badge;

    /**
     * @method Badge|null getOrPut($key, $value)
     * @method Badge|$this shift(int $count = 1)
     * @method Badge|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Badge|$this pop(int $count = 1)
     * @method Badge|null pull($key, \Closure $default = null)
     * @method Badge|null last(callable $callback = null, \Closure $default = null)
     * @method Badge|$this random(callable|int|null $number = null)
     * @method Badge|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Badge|null get($key, \Closure $default = null)
     * @method Badge|null first(callable $callback = null, \Closure $default = null)
     * @method Badge|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Badge|null find($key, $default = null)
     * @method Badge[] all()
     */
    class _IH_Badge_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Badge[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Badge_QB whereId($value)
     * @method _IH_Badge_QB whereName($value)
     * @method _IH_Badge_QB whereImage($value)
     * @method _IH_Badge_QB whereFor($value)
     * @method _IH_Badge_QB whereSaleCount($value)
     * @method _IH_Badge_QB whereType($value)
     * @method _IH_Badge_QB whereStatus($value)
     * @method _IH_Badge_QB whereCreatedAt($value)
     * @method _IH_Badge_QB whereUpdatedAt($value)
     * @method _IH_Badge_QB whereDeletedAt($value)
     * @method Badge baseSole(array|string $columns = ['*'])
     * @method Badge create(array $attributes = [])
     * @method _IH_Badge_C|Badge[] cursor()
     * @method Badge|null|_IH_Badge_C|Badge[] find($id, array|string $columns = ['*'])
     * @method _IH_Badge_C|Badge[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Badge|_IH_Badge_C|Badge[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Badge|_IH_Badge_C|Badge[] findOrFail($id, array|string $columns = ['*'])
     * @method Badge|_IH_Badge_C|Badge[] findOrNew($id, array|string $columns = ['*'])
     * @method Badge first(array|string $columns = ['*'])
     * @method Badge firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Badge firstOrCreate(array $attributes = [], array $values = [])
     * @method Badge firstOrFail(array|string $columns = ['*'])
     * @method Badge firstOrNew(array $attributes = [], array $values = [])
     * @method Badge firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Badge forceCreate(array $attributes)
     * @method _IH_Badge_C|Badge[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Badge_C|Badge[] get(array|string $columns = ['*'])
     * @method Badge getModel()
     * @method Badge[] getModels(array|string $columns = ['*'])
     * @method _IH_Badge_C|Badge[] hydrate(array $items)
     * @method Badge make(array $attributes = [])
     * @method Badge newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Badge[]|_IH_Badge_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Badge[]|_IH_Badge_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Badge sole(array|string $columns = ['*'])
     * @method Badge updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Badge_QB withTrashed()
     * @method _IH_Badge_QB onlyTrashed()
     * @method _IH_Badge_QB withoutTrashed()
     * @method _IH_Badge_QB restore()
     */
    class _IH_Badge_QB extends _BaseBuilder {}
}
