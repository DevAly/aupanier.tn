<?php //d8403df4fc7f801f30cf3b7caeea808f
/** @noinspection all */

namespace LaravelIdea\Helper\Modules\Attributes\Entities {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Modules\Attributes\Entities\Brand;
    use Modules\Attributes\Entities\Category;
    use Modules\Attributes\Entities\ChildCategory;
    use Modules\Attributes\Entities\Color;
    use Modules\Attributes\Entities\DeliveryOption;
    use Modules\Attributes\Entities\Size;
    use Modules\Attributes\Entities\SubCategory;
    use Modules\Attributes\Entities\Tag;
    use Modules\Attributes\Entities\Unit;

    /**
     * @method Brand|null getOrPut($key, $value)
     * @method Brand|$this shift(int $count = 1)
     * @method Brand|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Brand|$this pop(int $count = 1)
     * @method Brand|null pull($key, \Closure $default = null)
     * @method Brand|null last(callable $callback = null, \Closure $default = null)
     * @method Brand|$this random(callable|int|null $number = null)
     * @method Brand|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Brand|null get($key, \Closure $default = null)
     * @method Brand|null first(callable $callback = null, \Closure $default = null)
     * @method Brand|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Brand|null find($key, $default = null)
     * @method Brand[] all()
     */
    class _IH_Brand_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Brand[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Brand_QB whereId($value)
     * @method _IH_Brand_QB whereUrl($value)
     * @method _IH_Brand_QB whereImage($value)
     * @method _IH_Brand_QB whereStatus($value)
     * @method _IH_Brand_QB whereCreatedAt($value)
     * @method _IH_Brand_QB whereUpdatedAt($value)
     * @method _IH_Brand_QB whereName($value)
     * @method _IH_Brand_QB whereSlug($value)
     * @method _IH_Brand_QB whereImageId($value)
     * @method _IH_Brand_QB whereBannerId($value)
     * @method _IH_Brand_QB whereTitle($value)
     * @method _IH_Brand_QB whereDeletedAt($value)
     * @method Brand baseSole(array|string $columns = ['*'])
     * @method Brand create(array $attributes = [])
     * @method _IH_Brand_C|Brand[] cursor()
     * @method Brand|null|_IH_Brand_C|Brand[] find($id, array|string $columns = ['*'])
     * @method _IH_Brand_C|Brand[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Brand|_IH_Brand_C|Brand[] findOrFail($id, array|string $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOrNew($id, array|string $columns = ['*'])
     * @method Brand first(array|string $columns = ['*'])
     * @method Brand firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Brand firstOrCreate(array $attributes = [], array $values = [])
     * @method Brand firstOrFail(array|string $columns = ['*'])
     * @method Brand firstOrNew(array $attributes = [], array $values = [])
     * @method Brand firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Brand forceCreate(array $attributes)
     * @method _IH_Brand_C|Brand[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Brand_C|Brand[] get(array|string $columns = ['*'])
     * @method Brand getModel()
     * @method Brand[] getModels(array|string $columns = ['*'])
     * @method _IH_Brand_C|Brand[] hydrate(array $items)
     * @method Brand make(array $attributes = [])
     * @method Brand newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Brand[]|_IH_Brand_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Brand[]|_IH_Brand_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Brand sole(array|string $columns = ['*'])
     * @method Brand updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Brand_QB withTrashed()
     * @method _IH_Brand_QB onlyTrashed()
     * @method _IH_Brand_QB withoutTrashed()
     * @method _IH_Brand_QB restore()
     */
    class _IH_Brand_QB extends _BaseBuilder {}

    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, \Closure $default = null)
     * @method Category|null last(callable $callback = null, \Closure $default = null)
     * @method Category|$this random(callable|int|null $number = null)
     * @method Category|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Category|null get($key, \Closure $default = null)
     * @method Category|null first(callable $callback = null, \Closure $default = null)
     * @method Category|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereName($value)
     * @method _IH_Category_QB whereSlug($value)
     * @method _IH_Category_QB whereImageId($value)
     * @method _IH_Category_QB whereCreatedAt($value)
     * @method _IH_Category_QB whereUpdatedAt($value)
     * @method _IH_Category_QB whereDeletedAt($value)
     * @method _IH_Category_QB whereStatusId($value)
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array|string $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array|string $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Category_QB withTrashed()
     * @method _IH_Category_QB onlyTrashed()
     * @method _IH_Category_QB withoutTrashed()
     * @method _IH_Category_QB restore()
     */
    class _IH_Category_QB extends _BaseBuilder {}

    /**
     * @method ChildCategory|null getOrPut($key, $value)
     * @method ChildCategory|$this shift(int $count = 1)
     * @method ChildCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ChildCategory|$this pop(int $count = 1)
     * @method ChildCategory|null pull($key, \Closure $default = null)
     * @method ChildCategory|null last(callable $callback = null, \Closure $default = null)
     * @method ChildCategory|$this random(callable|int|null $number = null)
     * @method ChildCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ChildCategory|null get($key, \Closure $default = null)
     * @method ChildCategory|null first(callable $callback = null, \Closure $default = null)
     * @method ChildCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ChildCategory|null find($key, $default = null)
     * @method ChildCategory[] all()
     */
    class _IH_ChildCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ChildCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ChildCategory_QB whereId($value)
     * @method _IH_ChildCategory_QB whereCategoryId($value)
     * @method _IH_ChildCategory_QB whereSubCategoryId($value)
     * @method _IH_ChildCategory_QB whereName($value)
     * @method _IH_ChildCategory_QB whereSlug($value)
     * @method _IH_ChildCategory_QB whereImageId($value)
     * @method _IH_ChildCategory_QB whereCreatedAt($value)
     * @method _IH_ChildCategory_QB whereUpdatedAt($value)
     * @method _IH_ChildCategory_QB whereDeletedAt($value)
     * @method _IH_ChildCategory_QB whereStatusId($value)
     * @method ChildCategory baseSole(array|string $columns = ['*'])
     * @method ChildCategory create(array $attributes = [])
     * @method _IH_ChildCategory_C|ChildCategory[] cursor()
     * @method ChildCategory|null|_IH_ChildCategory_C|ChildCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_ChildCategory_C|ChildCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ChildCategory|_IH_ChildCategory_C|ChildCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ChildCategory|_IH_ChildCategory_C|ChildCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method ChildCategory|_IH_ChildCategory_C|ChildCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method ChildCategory first(array|string $columns = ['*'])
     * @method ChildCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ChildCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ChildCategory firstOrFail(array|string $columns = ['*'])
     * @method ChildCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ChildCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ChildCategory forceCreate(array $attributes)
     * @method _IH_ChildCategory_C|ChildCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ChildCategory_C|ChildCategory[] get(array|string $columns = ['*'])
     * @method ChildCategory getModel()
     * @method ChildCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ChildCategory_C|ChildCategory[] hydrate(array $items)
     * @method ChildCategory make(array $attributes = [])
     * @method ChildCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ChildCategory[]|_IH_ChildCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ChildCategory[]|_IH_ChildCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ChildCategory sole(array|string $columns = ['*'])
     * @method ChildCategory updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ChildCategory_QB withTrashed()
     * @method _IH_ChildCategory_QB onlyTrashed()
     * @method _IH_ChildCategory_QB withoutTrashed()
     * @method _IH_ChildCategory_QB restore()
     */
    class _IH_ChildCategory_QB extends _BaseBuilder {}

    /**
     * @method Color|null getOrPut($key, $value)
     * @method Color|$this shift(int $count = 1)
     * @method Color|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Color|$this pop(int $count = 1)
     * @method Color|null pull($key, \Closure $default = null)
     * @method Color|null last(callable $callback = null, \Closure $default = null)
     * @method Color|$this random(callable|int|null $number = null)
     * @method Color|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Color|null get($key, \Closure $default = null)
     * @method Color|null first(callable $callback = null, \Closure $default = null)
     * @method Color|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Color|null find($key, $default = null)
     * @method Color[] all()
     */
    class _IH_Color_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Color[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Color_QB whereId($value)
     * @method _IH_Color_QB whereName($value)
     * @method _IH_Color_QB whereColorCode($value)
     * @method _IH_Color_QB whereSlug($value)
     * @method _IH_Color_QB whereCreatedAt($value)
     * @method _IH_Color_QB whereUpdatedAt($value)
     * @method Color baseSole(array|string $columns = ['*'])
     * @method Color create(array $attributes = [])
     * @method _IH_Color_C|Color[] cursor()
     * @method Color|null|_IH_Color_C|Color[] find($id, array|string $columns = ['*'])
     * @method _IH_Color_C|Color[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Color|_IH_Color_C|Color[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Color|_IH_Color_C|Color[] findOrFail($id, array|string $columns = ['*'])
     * @method Color|_IH_Color_C|Color[] findOrNew($id, array|string $columns = ['*'])
     * @method Color first(array|string $columns = ['*'])
     * @method Color firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Color firstOrCreate(array $attributes = [], array $values = [])
     * @method Color firstOrFail(array|string $columns = ['*'])
     * @method Color firstOrNew(array $attributes = [], array $values = [])
     * @method Color firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Color forceCreate(array $attributes)
     * @method _IH_Color_C|Color[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Color_C|Color[] get(array|string $columns = ['*'])
     * @method Color getModel()
     * @method Color[] getModels(array|string $columns = ['*'])
     * @method _IH_Color_C|Color[] hydrate(array $items)
     * @method Color make(array $attributes = [])
     * @method Color newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Color[]|_IH_Color_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Color[]|_IH_Color_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Color sole(array|string $columns = ['*'])
     * @method Color updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Color_QB extends _BaseBuilder {}

    /**
     * @method DeliveryOption|null getOrPut($key, $value)
     * @method DeliveryOption|$this shift(int $count = 1)
     * @method DeliveryOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DeliveryOption|$this pop(int $count = 1)
     * @method DeliveryOption|null pull($key, \Closure $default = null)
     * @method DeliveryOption|null last(callable $callback = null, \Closure $default = null)
     * @method DeliveryOption|$this random(callable|int|null $number = null)
     * @method DeliveryOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DeliveryOption|null get($key, \Closure $default = null)
     * @method DeliveryOption|null first(callable $callback = null, \Closure $default = null)
     * @method DeliveryOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DeliveryOption|null find($key, $default = null)
     * @method DeliveryOption[] all()
     */
    class _IH_DeliveryOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DeliveryOption[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_DeliveryOption_QB whereId($value)
     * @method _IH_DeliveryOption_QB whereIcon($value)
     * @method _IH_DeliveryOption_QB whereTitle($value)
     * @method _IH_DeliveryOption_QB whereSubTitle($value)
     * @method _IH_DeliveryOption_QB whereCreatedAt($value)
     * @method _IH_DeliveryOption_QB whereUpdatedAt($value)
     * @method _IH_DeliveryOption_QB whereDeletedAt($value)
     * @method DeliveryOption baseSole(array|string $columns = ['*'])
     * @method DeliveryOption create(array $attributes = [])
     * @method _IH_DeliveryOption_C|DeliveryOption[] cursor()
     * @method DeliveryOption|null|_IH_DeliveryOption_C|DeliveryOption[] find($id, array|string $columns = ['*'])
     * @method _IH_DeliveryOption_C|DeliveryOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DeliveryOption|_IH_DeliveryOption_C|DeliveryOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DeliveryOption|_IH_DeliveryOption_C|DeliveryOption[] findOrFail($id, array|string $columns = ['*'])
     * @method DeliveryOption|_IH_DeliveryOption_C|DeliveryOption[] findOrNew($id, array|string $columns = ['*'])
     * @method DeliveryOption first(array|string $columns = ['*'])
     * @method DeliveryOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DeliveryOption firstOrCreate(array $attributes = [], array $values = [])
     * @method DeliveryOption firstOrFail(array|string $columns = ['*'])
     * @method DeliveryOption firstOrNew(array $attributes = [], array $values = [])
     * @method DeliveryOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DeliveryOption forceCreate(array $attributes)
     * @method _IH_DeliveryOption_C|DeliveryOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DeliveryOption_C|DeliveryOption[] get(array|string $columns = ['*'])
     * @method DeliveryOption getModel()
     * @method DeliveryOption[] getModels(array|string $columns = ['*'])
     * @method _IH_DeliveryOption_C|DeliveryOption[] hydrate(array $items)
     * @method DeliveryOption make(array $attributes = [])
     * @method DeliveryOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DeliveryOption[]|_IH_DeliveryOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DeliveryOption[]|_IH_DeliveryOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DeliveryOption sole(array|string $columns = ['*'])
     * @method DeliveryOption updateOrCreate(array $attributes, array $values = [])
     * @method _IH_DeliveryOption_QB withTrashed()
     * @method _IH_DeliveryOption_QB onlyTrashed()
     * @method _IH_DeliveryOption_QB withoutTrashed()
     * @method _IH_DeliveryOption_QB restore()
     */
    class _IH_DeliveryOption_QB extends _BaseBuilder {}

    /**
     * @method Size|null getOrPut($key, $value)
     * @method Size|$this shift(int $count = 1)
     * @method Size|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Size|$this pop(int $count = 1)
     * @method Size|null pull($key, \Closure $default = null)
     * @method Size|null last(callable $callback = null, \Closure $default = null)
     * @method Size|$this random(callable|int|null $number = null)
     * @method Size|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Size|null get($key, \Closure $default = null)
     * @method Size|null first(callable $callback = null, \Closure $default = null)
     * @method Size|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Size|null find($key, $default = null)
     * @method Size[] all()
     */
    class _IH_Size_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Size[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Size_QB whereId($value)
     * @method _IH_Size_QB whereName($value)
     * @method _IH_Size_QB whereSizeCode($value)
     * @method _IH_Size_QB whereSlug($value)
     * @method _IH_Size_QB whereCreatedAt($value)
     * @method _IH_Size_QB whereUpdatedAt($value)
     * @method Size baseSole(array|string $columns = ['*'])
     * @method Size create(array $attributes = [])
     * @method _IH_Size_C|Size[] cursor()
     * @method Size|null|_IH_Size_C|Size[] find($id, array|string $columns = ['*'])
     * @method _IH_Size_C|Size[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Size|_IH_Size_C|Size[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Size|_IH_Size_C|Size[] findOrFail($id, array|string $columns = ['*'])
     * @method Size|_IH_Size_C|Size[] findOrNew($id, array|string $columns = ['*'])
     * @method Size first(array|string $columns = ['*'])
     * @method Size firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Size firstOrCreate(array $attributes = [], array $values = [])
     * @method Size firstOrFail(array|string $columns = ['*'])
     * @method Size firstOrNew(array $attributes = [], array $values = [])
     * @method Size firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Size forceCreate(array $attributes)
     * @method _IH_Size_C|Size[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Size_C|Size[] get(array|string $columns = ['*'])
     * @method Size getModel()
     * @method Size[] getModels(array|string $columns = ['*'])
     * @method _IH_Size_C|Size[] hydrate(array $items)
     * @method Size make(array $attributes = [])
     * @method Size newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Size[]|_IH_Size_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Size[]|_IH_Size_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Size sole(array|string $columns = ['*'])
     * @method Size updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Size_QB extends _BaseBuilder {}

    /**
     * @method SubCategory|null getOrPut($key, $value)
     * @method SubCategory|$this shift(int $count = 1)
     * @method SubCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SubCategory|$this pop(int $count = 1)
     * @method SubCategory|null pull($key, \Closure $default = null)
     * @method SubCategory|null last(callable $callback = null, \Closure $default = null)
     * @method SubCategory|$this random(callable|int|null $number = null)
     * @method SubCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SubCategory|null get($key, \Closure $default = null)
     * @method SubCategory|null first(callable $callback = null, \Closure $default = null)
     * @method SubCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SubCategory|null find($key, $default = null)
     * @method SubCategory[] all()
     */
    class _IH_SubCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SubCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_SubCategory_QB whereId($value)
     * @method _IH_SubCategory_QB whereCategoryId($value)
     * @method _IH_SubCategory_QB whereName($value)
     * @method _IH_SubCategory_QB whereSlug($value)
     * @method _IH_SubCategory_QB whereImageId($value)
     * @method _IH_SubCategory_QB whereCreatedAt($value)
     * @method _IH_SubCategory_QB whereUpdatedAt($value)
     * @method _IH_SubCategory_QB whereDeletedAt($value)
     * @method _IH_SubCategory_QB whereStatusId($value)
     * @method SubCategory baseSole(array|string $columns = ['*'])
     * @method SubCategory create(array $attributes = [])
     * @method _IH_SubCategory_C|SubCategory[] cursor()
     * @method SubCategory|null|_IH_SubCategory_C|SubCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_SubCategory_C|SubCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SubCategory|_IH_SubCategory_C|SubCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubCategory|_IH_SubCategory_C|SubCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method SubCategory|_IH_SubCategory_C|SubCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method SubCategory first(array|string $columns = ['*'])
     * @method SubCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method SubCategory firstOrFail(array|string $columns = ['*'])
     * @method SubCategory firstOrNew(array $attributes = [], array $values = [])
     * @method SubCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SubCategory forceCreate(array $attributes)
     * @method _IH_SubCategory_C|SubCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SubCategory_C|SubCategory[] get(array|string $columns = ['*'])
     * @method SubCategory getModel()
     * @method SubCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_SubCategory_C|SubCategory[] hydrate(array $items)
     * @method SubCategory make(array $attributes = [])
     * @method SubCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SubCategory[]|_IH_SubCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SubCategory[]|_IH_SubCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubCategory sole(array|string $columns = ['*'])
     * @method SubCategory updateOrCreate(array $attributes, array $values = [])
     * @method _IH_SubCategory_QB withTrashed()
     * @method _IH_SubCategory_QB onlyTrashed()
     * @method _IH_SubCategory_QB withoutTrashed()
     * @method _IH_SubCategory_QB restore()
     */
    class _IH_SubCategory_QB extends _BaseBuilder {}

    /**
     * @method Tag|null getOrPut($key, $value)
     * @method Tag|$this shift(int $count = 1)
     * @method Tag|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Tag|$this pop(int $count = 1)
     * @method Tag|null pull($key, \Closure $default = null)
     * @method Tag|null last(callable $callback = null, \Closure $default = null)
     * @method Tag|$this random(callable|int|null $number = null)
     * @method Tag|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Tag|null get($key, \Closure $default = null)
     * @method Tag|null first(callable $callback = null, \Closure $default = null)
     * @method Tag|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Tag|null find($key, $default = null)
     * @method Tag[] all()
     */
    class _IH_Tag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Tag_QB whereId($value)
     * @method _IH_Tag_QB whereTagText($value)
     * @method _IH_Tag_QB whereCreatedAt($value)
     * @method _IH_Tag_QB whereUpdatedAt($value)
     * @method _IH_Tag_QB whereDeletedAt($value)
     * @method Tag baseSole(array|string $columns = ['*'])
     * @method Tag create(array $attributes = [])
     * @method _IH_Tag_C|Tag[] cursor()
     * @method Tag|null|_IH_Tag_C|Tag[] find($id, array|string $columns = ['*'])
     * @method _IH_Tag_C|Tag[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tag|_IH_Tag_C|Tag[] findOrFail($id, array|string $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOrNew($id, array|string $columns = ['*'])
     * @method Tag first(array|string $columns = ['*'])
     * @method Tag firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tag firstOrCreate(array $attributes = [], array $values = [])
     * @method Tag firstOrFail(array|string $columns = ['*'])
     * @method Tag firstOrNew(array $attributes = [], array $values = [])
     * @method Tag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tag forceCreate(array $attributes)
     * @method _IH_Tag_C|Tag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tag_C|Tag[] get(array|string $columns = ['*'])
     * @method Tag getModel()
     * @method Tag[] getModels(array|string $columns = ['*'])
     * @method _IH_Tag_C|Tag[] hydrate(array $items)
     * @method Tag make(array $attributes = [])
     * @method Tag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tag[]|_IH_Tag_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tag[]|_IH_Tag_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tag sole(array|string $columns = ['*'])
     * @method Tag updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Tag_QB extends _BaseBuilder {}

    /**
     * @method Unit|null getOrPut($key, $value)
     * @method Unit|$this shift(int $count = 1)
     * @method Unit|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Unit|$this pop(int $count = 1)
     * @method Unit|null pull($key, \Closure $default = null)
     * @method Unit|null last(callable $callback = null, \Closure $default = null)
     * @method Unit|$this random(callable|int|null $number = null)
     * @method Unit|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Unit|null get($key, \Closure $default = null)
     * @method Unit|null first(callable $callback = null, \Closure $default = null)
     * @method Unit|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Unit|null find($key, $default = null)
     * @method Unit[] all()
     */
    class _IH_Unit_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Unit[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Unit_QB whereId($value)
     * @method _IH_Unit_QB whereName($value)
     * @method _IH_Unit_QB whereCreatedAt($value)
     * @method _IH_Unit_QB whereUpdatedAt($value)
     * @method _IH_Unit_QB whereDeletedAt($value)
     * @method Unit baseSole(array|string $columns = ['*'])
     * @method Unit create(array $attributes = [])
     * @method _IH_Unit_C|Unit[] cursor()
     * @method Unit|null|_IH_Unit_C|Unit[] find($id, array|string $columns = ['*'])
     * @method _IH_Unit_C|Unit[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Unit|_IH_Unit_C|Unit[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Unit|_IH_Unit_C|Unit[] findOrFail($id, array|string $columns = ['*'])
     * @method Unit|_IH_Unit_C|Unit[] findOrNew($id, array|string $columns = ['*'])
     * @method Unit first(array|string $columns = ['*'])
     * @method Unit firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Unit firstOrCreate(array $attributes = [], array $values = [])
     * @method Unit firstOrFail(array|string $columns = ['*'])
     * @method Unit firstOrNew(array $attributes = [], array $values = [])
     * @method Unit firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Unit forceCreate(array $attributes)
     * @method _IH_Unit_C|Unit[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Unit_C|Unit[] get(array|string $columns = ['*'])
     * @method Unit getModel()
     * @method Unit[] getModels(array|string $columns = ['*'])
     * @method _IH_Unit_C|Unit[] hydrate(array $items)
     * @method Unit make(array $attributes = [])
     * @method Unit newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Unit[]|_IH_Unit_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Unit[]|_IH_Unit_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Unit sole(array|string $columns = ['*'])
     * @method Unit updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Unit_QB extends _BaseBuilder {}
}
