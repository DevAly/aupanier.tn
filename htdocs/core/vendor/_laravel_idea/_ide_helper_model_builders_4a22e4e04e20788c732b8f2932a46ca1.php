<?php //b4ce3558dfa15febb7512b94fa4cb3b4
/** @noinspection all */

namespace LaravelIdea\Helper\Modules\NewsLetter\Entities {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Modules\NewsLetter\Entities\NewsLetter;

    /**
     * @method NewsLetter|null getOrPut($key, $value)
     * @method NewsLetter|$this shift(int $count = 1)
     * @method NewsLetter|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method NewsLetter|$this pop(int $count = 1)
     * @method NewsLetter|null pull($key, \Closure $default = null)
     * @method NewsLetter|null last(callable $callback = null, \Closure $default = null)
     * @method NewsLetter|$this random(callable|int|null $number = null)
     * @method NewsLetter|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method NewsLetter|null get($key, \Closure $default = null)
     * @method NewsLetter|null first(callable $callback = null, \Closure $default = null)
     * @method NewsLetter|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method NewsLetter|null find($key, $default = null)
     * @method NewsLetter[] all()
     */
    class _IH_NewsLetter_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NewsLetter[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_NewsLetter_QB whereId($value)
     * @method _IH_NewsLetter_QB whereEmail($value)
     * @method _IH_NewsLetter_QB whereCreatedAt($value)
     * @method _IH_NewsLetter_QB whereUpdatedAt($value)
     * @method _IH_NewsLetter_QB whereToken($value)
     * @method _IH_NewsLetter_QB whereVerified($value)
     * @method NewsLetter baseSole(array|string $columns = ['*'])
     * @method NewsLetter create(array $attributes = [])
     * @method _IH_NewsLetter_C|NewsLetter[] cursor()
     * @method NewsLetter|null|_IH_NewsLetter_C|NewsLetter[] find($id, array|string $columns = ['*'])
     * @method _IH_NewsLetter_C|NewsLetter[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method NewsLetter|_IH_NewsLetter_C|NewsLetter[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NewsLetter|_IH_NewsLetter_C|NewsLetter[] findOrFail($id, array|string $columns = ['*'])
     * @method NewsLetter|_IH_NewsLetter_C|NewsLetter[] findOrNew($id, array|string $columns = ['*'])
     * @method NewsLetter first(array|string $columns = ['*'])
     * @method NewsLetter firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NewsLetter firstOrCreate(array $attributes = [], array $values = [])
     * @method NewsLetter firstOrFail(array|string $columns = ['*'])
     * @method NewsLetter firstOrNew(array $attributes = [], array $values = [])
     * @method NewsLetter firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NewsLetter forceCreate(array $attributes)
     * @method _IH_NewsLetter_C|NewsLetter[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NewsLetter_C|NewsLetter[] get(array|string $columns = ['*'])
     * @method NewsLetter getModel()
     * @method NewsLetter[] getModels(array|string $columns = ['*'])
     * @method _IH_NewsLetter_C|NewsLetter[] hydrate(array $items)
     * @method NewsLetter make(array $attributes = [])
     * @method NewsLetter newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NewsLetter[]|_IH_NewsLetter_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|NewsLetter[]|_IH_NewsLetter_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NewsLetter sole(array|string $columns = ['*'])
     * @method NewsLetter updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_NewsLetter_QB extends _BaseBuilder {}
}
