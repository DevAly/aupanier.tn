<?php //7ddcc18322daab79af4bcad18cbb0fa7
/** @noinspection all */

namespace LaravelIdea\Helper\Modules\Campaign\Entities {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Modules\Campaign\Entities\Campaign;
    use Modules\Campaign\Entities\CampaignProduct;
    use Modules\Campaign\Entities\CampaignSoldProduct;

    /**
     * @method CampaignProduct|null getOrPut($key, $value)
     * @method CampaignProduct|$this shift(int $count = 1)
     * @method CampaignProduct|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CampaignProduct|$this pop(int $count = 1)
     * @method CampaignProduct|null pull($key, \Closure $default = null)
     * @method CampaignProduct|null last(callable $callback = null, \Closure $default = null)
     * @method CampaignProduct|$this random(callable|int|null $number = null)
     * @method CampaignProduct|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CampaignProduct|null get($key, \Closure $default = null)
     * @method CampaignProduct|null first(callable $callback = null, \Closure $default = null)
     * @method CampaignProduct|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CampaignProduct|null find($key, $default = null)
     * @method CampaignProduct[] all()
     */
    class _IH_CampaignProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CampaignProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_CampaignProduct_QB whereId($value)
     * @method _IH_CampaignProduct_QB whereProductId($value)
     * @method _IH_CampaignProduct_QB whereCampaignId($value)
     * @method _IH_CampaignProduct_QB whereCampaignPrice($value)
     * @method _IH_CampaignProduct_QB whereUnitsForSale($value)
     * @method _IH_CampaignProduct_QB whereStartDate($value)
     * @method _IH_CampaignProduct_QB whereEndDate($value)
     * @method _IH_CampaignProduct_QB whereCreatedAt($value)
     * @method _IH_CampaignProduct_QB whereUpdatedAt($value)
     * @method CampaignProduct baseSole(array|string $columns = ['*'])
     * @method CampaignProduct create(array $attributes = [])
     * @method _IH_CampaignProduct_C|CampaignProduct[] cursor()
     * @method CampaignProduct|null|_IH_CampaignProduct_C|CampaignProduct[] find($id, array|string $columns = ['*'])
     * @method _IH_CampaignProduct_C|CampaignProduct[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CampaignProduct|_IH_CampaignProduct_C|CampaignProduct[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CampaignProduct|_IH_CampaignProduct_C|CampaignProduct[] findOrFail($id, array|string $columns = ['*'])
     * @method CampaignProduct|_IH_CampaignProduct_C|CampaignProduct[] findOrNew($id, array|string $columns = ['*'])
     * @method CampaignProduct first(array|string $columns = ['*'])
     * @method CampaignProduct firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CampaignProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method CampaignProduct firstOrFail(array|string $columns = ['*'])
     * @method CampaignProduct firstOrNew(array $attributes = [], array $values = [])
     * @method CampaignProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CampaignProduct forceCreate(array $attributes)
     * @method _IH_CampaignProduct_C|CampaignProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CampaignProduct_C|CampaignProduct[] get(array|string $columns = ['*'])
     * @method CampaignProduct getModel()
     * @method CampaignProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_CampaignProduct_C|CampaignProduct[] hydrate(array $items)
     * @method CampaignProduct make(array $attributes = [])
     * @method CampaignProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CampaignProduct[]|_IH_CampaignProduct_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CampaignProduct[]|_IH_CampaignProduct_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CampaignProduct sole(array|string $columns = ['*'])
     * @method CampaignProduct updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CampaignProduct_QB extends _BaseBuilder {}

    /**
     * @method CampaignSoldProduct|null getOrPut($key, $value)
     * @method CampaignSoldProduct|$this shift(int $count = 1)
     * @method CampaignSoldProduct|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CampaignSoldProduct|$this pop(int $count = 1)
     * @method CampaignSoldProduct|null pull($key, \Closure $default = null)
     * @method CampaignSoldProduct|null last(callable $callback = null, \Closure $default = null)
     * @method CampaignSoldProduct|$this random(callable|int|null $number = null)
     * @method CampaignSoldProduct|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CampaignSoldProduct|null get($key, \Closure $default = null)
     * @method CampaignSoldProduct|null first(callable $callback = null, \Closure $default = null)
     * @method CampaignSoldProduct|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CampaignSoldProduct|null find($key, $default = null)
     * @method CampaignSoldProduct[] all()
     */
    class _IH_CampaignSoldProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CampaignSoldProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_CampaignSoldProduct_QB whereId($value)
     * @method _IH_CampaignSoldProduct_QB whereProductId($value)
     * @method _IH_CampaignSoldProduct_QB whereSoldCount($value)
     * @method _IH_CampaignSoldProduct_QB whereTotalAmount($value)
     * @method _IH_CampaignSoldProduct_QB whereCreatedAt($value)
     * @method _IH_CampaignSoldProduct_QB whereUpdatedAt($value)
     * @method CampaignSoldProduct baseSole(array|string $columns = ['*'])
     * @method CampaignSoldProduct create(array $attributes = [])
     * @method _IH_CampaignSoldProduct_C|CampaignSoldProduct[] cursor()
     * @method CampaignSoldProduct|null|_IH_CampaignSoldProduct_C|CampaignSoldProduct[] find($id, array|string $columns = ['*'])
     * @method _IH_CampaignSoldProduct_C|CampaignSoldProduct[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CampaignSoldProduct|_IH_CampaignSoldProduct_C|CampaignSoldProduct[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CampaignSoldProduct|_IH_CampaignSoldProduct_C|CampaignSoldProduct[] findOrFail($id, array|string $columns = ['*'])
     * @method CampaignSoldProduct|_IH_CampaignSoldProduct_C|CampaignSoldProduct[] findOrNew($id, array|string $columns = ['*'])
     * @method CampaignSoldProduct first(array|string $columns = ['*'])
     * @method CampaignSoldProduct firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CampaignSoldProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method CampaignSoldProduct firstOrFail(array|string $columns = ['*'])
     * @method CampaignSoldProduct firstOrNew(array $attributes = [], array $values = [])
     * @method CampaignSoldProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CampaignSoldProduct forceCreate(array $attributes)
     * @method _IH_CampaignSoldProduct_C|CampaignSoldProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CampaignSoldProduct_C|CampaignSoldProduct[] get(array|string $columns = ['*'])
     * @method CampaignSoldProduct getModel()
     * @method CampaignSoldProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_CampaignSoldProduct_C|CampaignSoldProduct[] hydrate(array $items)
     * @method CampaignSoldProduct make(array $attributes = [])
     * @method CampaignSoldProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CampaignSoldProduct[]|_IH_CampaignSoldProduct_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CampaignSoldProduct[]|_IH_CampaignSoldProduct_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CampaignSoldProduct sole(array|string $columns = ['*'])
     * @method CampaignSoldProduct updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CampaignSoldProduct_QB extends _BaseBuilder {}

    /**
     * @method Campaign|null getOrPut($key, $value)
     * @method Campaign|$this shift(int $count = 1)
     * @method Campaign|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Campaign|$this pop(int $count = 1)
     * @method Campaign|null pull($key, \Closure $default = null)
     * @method Campaign|null last(callable $callback = null, \Closure $default = null)
     * @method Campaign|$this random(callable|int|null $number = null)
     * @method Campaign|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Campaign|null get($key, \Closure $default = null)
     * @method Campaign|null first(callable $callback = null, \Closure $default = null)
     * @method Campaign|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Campaign|null find($key, $default = null)
     * @method Campaign[] all()
     */
    class _IH_Campaign_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Campaign[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Campaign_QB whereId($value)
     * @method _IH_Campaign_QB whereTitle($value)
     * @method _IH_Campaign_QB whereSubtitle($value)
     * @method _IH_Campaign_QB whereImage($value)
     * @method _IH_Campaign_QB whereStartDate($value)
     * @method _IH_Campaign_QB whereEndDate($value)
     * @method _IH_Campaign_QB whereStatus($value)
     * @method _IH_Campaign_QB whereCreatedAt($value)
     * @method _IH_Campaign_QB whereUpdatedAt($value)
     * @method _IH_Campaign_QB whereAdminId($value)
     * @method _IH_Campaign_QB whereVendorId($value)
     * @method _IH_Campaign_QB whereType($value)
     * @method Campaign baseSole(array|string $columns = ['*'])
     * @method Campaign create(array $attributes = [])
     * @method _IH_Campaign_C|Campaign[] cursor()
     * @method Campaign|null|_IH_Campaign_C|Campaign[] find($id, array|string $columns = ['*'])
     * @method _IH_Campaign_C|Campaign[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Campaign|_IH_Campaign_C|Campaign[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Campaign|_IH_Campaign_C|Campaign[] findOrFail($id, array|string $columns = ['*'])
     * @method Campaign|_IH_Campaign_C|Campaign[] findOrNew($id, array|string $columns = ['*'])
     * @method Campaign first(array|string $columns = ['*'])
     * @method Campaign firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Campaign firstOrCreate(array $attributes = [], array $values = [])
     * @method Campaign firstOrFail(array|string $columns = ['*'])
     * @method Campaign firstOrNew(array $attributes = [], array $values = [])
     * @method Campaign firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Campaign forceCreate(array $attributes)
     * @method _IH_Campaign_C|Campaign[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Campaign_C|Campaign[] get(array|string $columns = ['*'])
     * @method Campaign getModel()
     * @method Campaign[] getModels(array|string $columns = ['*'])
     * @method _IH_Campaign_C|Campaign[] hydrate(array $items)
     * @method Campaign make(array $attributes = [])
     * @method Campaign newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Campaign[]|_IH_Campaign_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Campaign[]|_IH_Campaign_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Campaign sole(array|string $columns = ['*'])
     * @method Campaign updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Campaign_QB profile()
     */
    class _IH_Campaign_QB extends _BaseBuilder {}
}
