<?php //e7e562af09d74a4d33c4bfef4229190b
/** @noinspection all */

namespace LaravelIdea\Helper\Modules\Product\Entities {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Modules\Product\Entities\Product;
    use Modules\Product\Entities\ProductAttribute;
    use Modules\Product\Entities\ProductCategory;
    use Modules\Product\Entities\ProductChildCategory;
    use Modules\Product\Entities\ProductColor;
    use Modules\Product\Entities\ProductCreatedBy;
    use Modules\Product\Entities\ProductDeliveryOption;
    use Modules\Product\Entities\ProductGallery;
    use Modules\Product\Entities\ProductInventory;
    use Modules\Product\Entities\ProductInventoryDetail;
    use Modules\Product\Entities\ProductInventoryDetailAttribute;
    use Modules\Product\Entities\ProductMetaInfo;
    use Modules\Product\Entities\ProductSellInfo;
    use Modules\Product\Entities\ProductShippingReturnPolicy;
    use Modules\Product\Entities\ProductSize;
    use Modules\Product\Entities\ProductSubCategory;
    use Modules\Product\Entities\ProductTag;
    use Modules\Product\Entities\ProductUnit;
    use Modules\Product\Entities\ProductUom;

    /**
     * @method ProductAttribute|null getOrPut($key, $value)
     * @method ProductAttribute|$this shift(int $count = 1)
     * @method ProductAttribute|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttribute|$this pop(int $count = 1)
     * @method ProductAttribute|null pull($key, \Closure $default = null)
     * @method ProductAttribute|null last(callable $callback = null, \Closure $default = null)
     * @method ProductAttribute|$this random(callable|int|null $number = null)
     * @method ProductAttribute|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttribute|null get($key, \Closure $default = null)
     * @method ProductAttribute|null first(callable $callback = null, \Closure $default = null)
     * @method ProductAttribute|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductAttribute|null find($key, $default = null)
     * @method ProductAttribute[] all()
     */
    class _IH_ProductAttribute_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductAttribute[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductAttribute_QB whereId($value)
     * @method _IH_ProductAttribute_QB whereTitle($value)
     * @method _IH_ProductAttribute_QB whereTerms($value)
     * @method _IH_ProductAttribute_QB whereCreatedAt($value)
     * @method _IH_ProductAttribute_QB whereUpdatedAt($value)
     * @method ProductAttribute baseSole(array|string $columns = ['*'])
     * @method ProductAttribute create(array $attributes = [])
     * @method _IH_ProductAttribute_C|ProductAttribute[] cursor()
     * @method ProductAttribute|null|_IH_ProductAttribute_C|ProductAttribute[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductAttribute_C|ProductAttribute[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductAttribute|_IH_ProductAttribute_C|ProductAttribute[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttribute|_IH_ProductAttribute_C|ProductAttribute[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductAttribute|_IH_ProductAttribute_C|ProductAttribute[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductAttribute first(array|string $columns = ['*'])
     * @method ProductAttribute firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttribute firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductAttribute firstOrFail(array|string $columns = ['*'])
     * @method ProductAttribute firstOrNew(array $attributes = [], array $values = [])
     * @method ProductAttribute firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductAttribute forceCreate(array $attributes)
     * @method _IH_ProductAttribute_C|ProductAttribute[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductAttribute_C|ProductAttribute[] get(array|string $columns = ['*'])
     * @method ProductAttribute getModel()
     * @method ProductAttribute[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductAttribute_C|ProductAttribute[] hydrate(array $items)
     * @method ProductAttribute make(array $attributes = [])
     * @method ProductAttribute newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductAttribute[]|_IH_ProductAttribute_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductAttribute[]|_IH_ProductAttribute_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductAttribute sole(array|string $columns = ['*'])
     * @method ProductAttribute updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductAttribute_QB extends _BaseBuilder {}

    /**
     * @method ProductCategory|null getOrPut($key, $value)
     * @method ProductCategory|$this shift(int $count = 1)
     * @method ProductCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategory|$this pop(int $count = 1)
     * @method ProductCategory|null pull($key, \Closure $default = null)
     * @method ProductCategory|null last(callable $callback = null, \Closure $default = null)
     * @method ProductCategory|$this random(callable|int|null $number = null)
     * @method ProductCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategory|null get($key, \Closure $default = null)
     * @method ProductCategory|null first(callable $callback = null, \Closure $default = null)
     * @method ProductCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductCategory|null find($key, $default = null)
     * @method ProductCategory[] all()
     */
    class _IH_ProductCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductCategory_QB whereId($value)
     * @method _IH_ProductCategory_QB whereProductId($value)
     * @method _IH_ProductCategory_QB whereCategoryId($value)
     * @method ProductCategory baseSole(array|string $columns = ['*'])
     * @method ProductCategory create(array $attributes = [])
     * @method _IH_ProductCategory_C|ProductCategory[] cursor()
     * @method ProductCategory|null|_IH_ProductCategory_C|ProductCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductCategory first(array|string $columns = ['*'])
     * @method ProductCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCategory firstOrFail(array|string $columns = ['*'])
     * @method ProductCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCategory forceCreate(array $attributes)
     * @method _IH_ProductCategory_C|ProductCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCategory_C|ProductCategory[] get(array|string $columns = ['*'])
     * @method ProductCategory getModel()
     * @method ProductCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] hydrate(array $items)
     * @method ProductCategory make(array $attributes = [])
     * @method ProductCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCategory[]|_IH_ProductCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCategory[]|_IH_ProductCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCategory sole(array|string $columns = ['*'])
     * @method ProductCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductCategory_QB extends _BaseBuilder {}

    /**
     * @method ProductChildCategory|null getOrPut($key, $value)
     * @method ProductChildCategory|$this shift(int $count = 1)
     * @method ProductChildCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductChildCategory|$this pop(int $count = 1)
     * @method ProductChildCategory|null pull($key, \Closure $default = null)
     * @method ProductChildCategory|null last(callable $callback = null, \Closure $default = null)
     * @method ProductChildCategory|$this random(callable|int|null $number = null)
     * @method ProductChildCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductChildCategory|null get($key, \Closure $default = null)
     * @method ProductChildCategory|null first(callable $callback = null, \Closure $default = null)
     * @method ProductChildCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductChildCategory|null find($key, $default = null)
     * @method ProductChildCategory[] all()
     */
    class _IH_ProductChildCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductChildCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductChildCategory_QB whereId($value)
     * @method _IH_ProductChildCategory_QB whereProductId($value)
     * @method _IH_ProductChildCategory_QB whereChildCategoryId($value)
     * @method ProductChildCategory baseSole(array|string $columns = ['*'])
     * @method ProductChildCategory create(array $attributes = [])
     * @method _IH_ProductChildCategory_C|ProductChildCategory[] cursor()
     * @method ProductChildCategory|null|_IH_ProductChildCategory_C|ProductChildCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductChildCategory_C|ProductChildCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductChildCategory|_IH_ProductChildCategory_C|ProductChildCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductChildCategory|_IH_ProductChildCategory_C|ProductChildCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductChildCategory|_IH_ProductChildCategory_C|ProductChildCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductChildCategory first(array|string $columns = ['*'])
     * @method ProductChildCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductChildCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductChildCategory firstOrFail(array|string $columns = ['*'])
     * @method ProductChildCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductChildCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductChildCategory forceCreate(array $attributes)
     * @method _IH_ProductChildCategory_C|ProductChildCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductChildCategory_C|ProductChildCategory[] get(array|string $columns = ['*'])
     * @method ProductChildCategory getModel()
     * @method ProductChildCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductChildCategory_C|ProductChildCategory[] hydrate(array $items)
     * @method ProductChildCategory make(array $attributes = [])
     * @method ProductChildCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductChildCategory[]|_IH_ProductChildCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductChildCategory[]|_IH_ProductChildCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductChildCategory sole(array|string $columns = ['*'])
     * @method ProductChildCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductChildCategory_QB extends _BaseBuilder {}

    /**
     * @method ProductColor|null getOrPut($key, $value)
     * @method ProductColor|$this shift(int $count = 1)
     * @method ProductColor|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductColor|$this pop(int $count = 1)
     * @method ProductColor|null pull($key, \Closure $default = null)
     * @method ProductColor|null last(callable $callback = null, \Closure $default = null)
     * @method ProductColor|$this random(callable|int|null $number = null)
     * @method ProductColor|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductColor|null get($key, \Closure $default = null)
     * @method ProductColor|null first(callable $callback = null, \Closure $default = null)
     * @method ProductColor|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductColor|null find($key, $default = null)
     * @method ProductColor[] all()
     */
    class _IH_ProductColor_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductColor[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ProductColor baseSole(array|string $columns = ['*'])
     * @method ProductColor create(array $attributes = [])
     * @method _IH_ProductColor_C|ProductColor[] cursor()
     * @method ProductColor|null|_IH_ProductColor_C|ProductColor[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductColor_C|ProductColor[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductColor|_IH_ProductColor_C|ProductColor[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductColor|_IH_ProductColor_C|ProductColor[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductColor|_IH_ProductColor_C|ProductColor[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductColor first(array|string $columns = ['*'])
     * @method ProductColor firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductColor firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductColor firstOrFail(array|string $columns = ['*'])
     * @method ProductColor firstOrNew(array $attributes = [], array $values = [])
     * @method ProductColor firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductColor forceCreate(array $attributes)
     * @method _IH_ProductColor_C|ProductColor[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductColor_C|ProductColor[] get(array|string $columns = ['*'])
     * @method ProductColor getModel()
     * @method ProductColor[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductColor_C|ProductColor[] hydrate(array $items)
     * @method ProductColor make(array $attributes = [])
     * @method ProductColor newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductColor[]|_IH_ProductColor_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductColor[]|_IH_ProductColor_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductColor sole(array|string $columns = ['*'])
     * @method ProductColor updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductColor_QB extends _BaseBuilder {}

    /**
     * @method ProductCreatedBy|null getOrPut($key, $value)
     * @method ProductCreatedBy|$this shift(int $count = 1)
     * @method ProductCreatedBy|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCreatedBy|$this pop(int $count = 1)
     * @method ProductCreatedBy|null pull($key, \Closure $default = null)
     * @method ProductCreatedBy|null last(callable $callback = null, \Closure $default = null)
     * @method ProductCreatedBy|$this random(callable|int|null $number = null)
     * @method ProductCreatedBy|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCreatedBy|null get($key, \Closure $default = null)
     * @method ProductCreatedBy|null first(callable $callback = null, \Closure $default = null)
     * @method ProductCreatedBy|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductCreatedBy|null find($key, $default = null)
     * @method ProductCreatedBy[] all()
     */
    class _IH_ProductCreatedBy_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCreatedBy[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductCreatedBy_QB whereId($value)
     * @method _IH_ProductCreatedBy_QB whereProductId($value)
     * @method _IH_ProductCreatedBy_QB whereCreatedById($value)
     * @method _IH_ProductCreatedBy_QB whereGuardName($value)
     * @method _IH_ProductCreatedBy_QB whereUpdatedBy($value)
     * @method _IH_ProductCreatedBy_QB whereUpdatedByGuard($value)
     * @method _IH_ProductCreatedBy_QB whereDeletedBy($value)
     * @method _IH_ProductCreatedBy_QB whereDeletedByGuard($value)
     * @method ProductCreatedBy baseSole(array|string $columns = ['*'])
     * @method ProductCreatedBy create(array $attributes = [])
     * @method _IH_ProductCreatedBy_C|ProductCreatedBy[] cursor()
     * @method ProductCreatedBy|null|_IH_ProductCreatedBy_C|ProductCreatedBy[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductCreatedBy_C|ProductCreatedBy[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductCreatedBy|_IH_ProductCreatedBy_C|ProductCreatedBy[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCreatedBy|_IH_ProductCreatedBy_C|ProductCreatedBy[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductCreatedBy|_IH_ProductCreatedBy_C|ProductCreatedBy[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductCreatedBy first(array|string $columns = ['*'])
     * @method ProductCreatedBy firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCreatedBy firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCreatedBy firstOrFail(array|string $columns = ['*'])
     * @method ProductCreatedBy firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCreatedBy firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCreatedBy forceCreate(array $attributes)
     * @method _IH_ProductCreatedBy_C|ProductCreatedBy[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCreatedBy_C|ProductCreatedBy[] get(array|string $columns = ['*'])
     * @method ProductCreatedBy getModel()
     * @method ProductCreatedBy[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCreatedBy_C|ProductCreatedBy[] hydrate(array $items)
     * @method ProductCreatedBy make(array $attributes = [])
     * @method ProductCreatedBy newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCreatedBy[]|_IH_ProductCreatedBy_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCreatedBy[]|_IH_ProductCreatedBy_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCreatedBy sole(array|string $columns = ['*'])
     * @method ProductCreatedBy updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductCreatedBy_QB extends _BaseBuilder {}

    /**
     * @method ProductDeliveryOption|null getOrPut($key, $value)
     * @method ProductDeliveryOption|$this shift(int $count = 1)
     * @method ProductDeliveryOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductDeliveryOption|$this pop(int $count = 1)
     * @method ProductDeliveryOption|null pull($key, \Closure $default = null)
     * @method ProductDeliveryOption|null last(callable $callback = null, \Closure $default = null)
     * @method ProductDeliveryOption|$this random(callable|int|null $number = null)
     * @method ProductDeliveryOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductDeliveryOption|null get($key, \Closure $default = null)
     * @method ProductDeliveryOption|null first(callable $callback = null, \Closure $default = null)
     * @method ProductDeliveryOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductDeliveryOption|null find($key, $default = null)
     * @method ProductDeliveryOption[] all()
     */
    class _IH_ProductDeliveryOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductDeliveryOption[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductDeliveryOption_QB whereId($value)
     * @method _IH_ProductDeliveryOption_QB whereProductId($value)
     * @method _IH_ProductDeliveryOption_QB whereDeliveryOptionId($value)
     * @method ProductDeliveryOption baseSole(array|string $columns = ['*'])
     * @method ProductDeliveryOption create(array $attributes = [])
     * @method _IH_ProductDeliveryOption_C|ProductDeliveryOption[] cursor()
     * @method ProductDeliveryOption|null|_IH_ProductDeliveryOption_C|ProductDeliveryOption[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductDeliveryOption_C|ProductDeliveryOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductDeliveryOption|_IH_ProductDeliveryOption_C|ProductDeliveryOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductDeliveryOption|_IH_ProductDeliveryOption_C|ProductDeliveryOption[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductDeliveryOption|_IH_ProductDeliveryOption_C|ProductDeliveryOption[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductDeliveryOption first(array|string $columns = ['*'])
     * @method ProductDeliveryOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductDeliveryOption firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductDeliveryOption firstOrFail(array|string $columns = ['*'])
     * @method ProductDeliveryOption firstOrNew(array $attributes = [], array $values = [])
     * @method ProductDeliveryOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductDeliveryOption forceCreate(array $attributes)
     * @method _IH_ProductDeliveryOption_C|ProductDeliveryOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductDeliveryOption_C|ProductDeliveryOption[] get(array|string $columns = ['*'])
     * @method ProductDeliveryOption getModel()
     * @method ProductDeliveryOption[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductDeliveryOption_C|ProductDeliveryOption[] hydrate(array $items)
     * @method ProductDeliveryOption make(array $attributes = [])
     * @method ProductDeliveryOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductDeliveryOption[]|_IH_ProductDeliveryOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductDeliveryOption[]|_IH_ProductDeliveryOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductDeliveryOption sole(array|string $columns = ['*'])
     * @method ProductDeliveryOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductDeliveryOption_QB extends _BaseBuilder {}

    /**
     * @method ProductGallery|null getOrPut($key, $value)
     * @method ProductGallery|$this shift(int $count = 1)
     * @method ProductGallery|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductGallery|$this pop(int $count = 1)
     * @method ProductGallery|null pull($key, \Closure $default = null)
     * @method ProductGallery|null last(callable $callback = null, \Closure $default = null)
     * @method ProductGallery|$this random(callable|int|null $number = null)
     * @method ProductGallery|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductGallery|null get($key, \Closure $default = null)
     * @method ProductGallery|null first(callable $callback = null, \Closure $default = null)
     * @method ProductGallery|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductGallery|null find($key, $default = null)
     * @method ProductGallery[] all()
     */
    class _IH_ProductGallery_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductGallery[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductGallery_QB whereId($value)
     * @method _IH_ProductGallery_QB whereProductId($value)
     * @method _IH_ProductGallery_QB whereImageId($value)
     * @method ProductGallery baseSole(array|string $columns = ['*'])
     * @method ProductGallery create(array $attributes = [])
     * @method _IH_ProductGallery_C|ProductGallery[] cursor()
     * @method ProductGallery|null|_IH_ProductGallery_C|ProductGallery[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductGallery_C|ProductGallery[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductGallery|_IH_ProductGallery_C|ProductGallery[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductGallery|_IH_ProductGallery_C|ProductGallery[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductGallery|_IH_ProductGallery_C|ProductGallery[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductGallery first(array|string $columns = ['*'])
     * @method ProductGallery firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductGallery firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductGallery firstOrFail(array|string $columns = ['*'])
     * @method ProductGallery firstOrNew(array $attributes = [], array $values = [])
     * @method ProductGallery firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductGallery forceCreate(array $attributes)
     * @method _IH_ProductGallery_C|ProductGallery[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductGallery_C|ProductGallery[] get(array|string $columns = ['*'])
     * @method ProductGallery getModel()
     * @method ProductGallery[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductGallery_C|ProductGallery[] hydrate(array $items)
     * @method ProductGallery make(array $attributes = [])
     * @method ProductGallery newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductGallery[]|_IH_ProductGallery_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductGallery[]|_IH_ProductGallery_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductGallery sole(array|string $columns = ['*'])
     * @method ProductGallery updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductGallery_QB extends _BaseBuilder {}

    /**
     * @method ProductInventoryDetailAttribute|null getOrPut($key, $value)
     * @method ProductInventoryDetailAttribute|$this shift(int $count = 1)
     * @method ProductInventoryDetailAttribute|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductInventoryDetailAttribute|$this pop(int $count = 1)
     * @method ProductInventoryDetailAttribute|null pull($key, \Closure $default = null)
     * @method ProductInventoryDetailAttribute|null last(callable $callback = null, \Closure $default = null)
     * @method ProductInventoryDetailAttribute|$this random(callable|int|null $number = null)
     * @method ProductInventoryDetailAttribute|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductInventoryDetailAttribute|null get($key, \Closure $default = null)
     * @method ProductInventoryDetailAttribute|null first(callable $callback = null, \Closure $default = null)
     * @method ProductInventoryDetailAttribute|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductInventoryDetailAttribute|null find($key, $default = null)
     * @method ProductInventoryDetailAttribute[] all()
     */
    class _IH_ProductInventoryDetailAttribute_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductInventoryDetailAttribute[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductInventoryDetailAttribute_QB whereId($value)
     * @method _IH_ProductInventoryDetailAttribute_QB whereProductId($value)
     * @method _IH_ProductInventoryDetailAttribute_QB whereInventoryDetailsId($value)
     * @method _IH_ProductInventoryDetailAttribute_QB whereAttributeName($value)
     * @method _IH_ProductInventoryDetailAttribute_QB whereAttributeValue($value)
     * @method ProductInventoryDetailAttribute baseSole(array|string $columns = ['*'])
     * @method ProductInventoryDetailAttribute create(array $attributes = [])
     * @method _IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] cursor()
     * @method ProductInventoryDetailAttribute|null|_IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductInventoryDetailAttribute|_IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductInventoryDetailAttribute|_IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductInventoryDetailAttribute|_IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductInventoryDetailAttribute first(array|string $columns = ['*'])
     * @method ProductInventoryDetailAttribute firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductInventoryDetailAttribute firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductInventoryDetailAttribute firstOrFail(array|string $columns = ['*'])
     * @method ProductInventoryDetailAttribute firstOrNew(array $attributes = [], array $values = [])
     * @method ProductInventoryDetailAttribute firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductInventoryDetailAttribute forceCreate(array $attributes)
     * @method _IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] get(array|string $columns = ['*'])
     * @method ProductInventoryDetailAttribute getModel()
     * @method ProductInventoryDetailAttribute[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] hydrate(array $items)
     * @method ProductInventoryDetailAttribute make(array $attributes = [])
     * @method ProductInventoryDetailAttribute newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductInventoryDetailAttribute[]|_IH_ProductInventoryDetailAttribute_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductInventoryDetailAttribute[]|_IH_ProductInventoryDetailAttribute_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductInventoryDetailAttribute sole(array|string $columns = ['*'])
     * @method ProductInventoryDetailAttribute updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductInventoryDetailAttribute_QB extends _BaseBuilder {}

    /**
     * @method ProductInventoryDetail|null getOrPut($key, $value)
     * @method ProductInventoryDetail|$this shift(int $count = 1)
     * @method ProductInventoryDetail|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductInventoryDetail|$this pop(int $count = 1)
     * @method ProductInventoryDetail|null pull($key, \Closure $default = null)
     * @method ProductInventoryDetail|null last(callable $callback = null, \Closure $default = null)
     * @method ProductInventoryDetail|$this random(callable|int|null $number = null)
     * @method ProductInventoryDetail|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductInventoryDetail|null get($key, \Closure $default = null)
     * @method ProductInventoryDetail|null first(callable $callback = null, \Closure $default = null)
     * @method ProductInventoryDetail|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductInventoryDetail|null find($key, $default = null)
     * @method ProductInventoryDetail[] all()
     */
    class _IH_ProductInventoryDetail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductInventoryDetail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductInventoryDetail_QB whereId($value)
     * @method _IH_ProductInventoryDetail_QB whereProductInventoryId($value)
     * @method _IH_ProductInventoryDetail_QB whereProductId($value)
     * @method _IH_ProductInventoryDetail_QB whereColor($value)
     * @method _IH_ProductInventoryDetail_QB whereSize($value)
     * @method _IH_ProductInventoryDetail_QB whereHash($value)
     * @method _IH_ProductInventoryDetail_QB whereAdditionalPrice($value)
     * @method _IH_ProductInventoryDetail_QB whereAddCost($value)
     * @method _IH_ProductInventoryDetail_QB whereImage($value)
     * @method _IH_ProductInventoryDetail_QB whereStockCount($value)
     * @method _IH_ProductInventoryDetail_QB whereSoldCount($value)
     * @method ProductInventoryDetail baseSole(array|string $columns = ['*'])
     * @method ProductInventoryDetail create(array $attributes = [])
     * @method _IH_ProductInventoryDetail_C|ProductInventoryDetail[] cursor()
     * @method ProductInventoryDetail|null|_IH_ProductInventoryDetail_C|ProductInventoryDetail[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductInventoryDetail_C|ProductInventoryDetail[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductInventoryDetail|_IH_ProductInventoryDetail_C|ProductInventoryDetail[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductInventoryDetail|_IH_ProductInventoryDetail_C|ProductInventoryDetail[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductInventoryDetail|_IH_ProductInventoryDetail_C|ProductInventoryDetail[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductInventoryDetail first(array|string $columns = ['*'])
     * @method ProductInventoryDetail firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductInventoryDetail firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductInventoryDetail firstOrFail(array|string $columns = ['*'])
     * @method ProductInventoryDetail firstOrNew(array $attributes = [], array $values = [])
     * @method ProductInventoryDetail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductInventoryDetail forceCreate(array $attributes)
     * @method _IH_ProductInventoryDetail_C|ProductInventoryDetail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductInventoryDetail_C|ProductInventoryDetail[] get(array|string $columns = ['*'])
     * @method ProductInventoryDetail getModel()
     * @method ProductInventoryDetail[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductInventoryDetail_C|ProductInventoryDetail[] hydrate(array $items)
     * @method ProductInventoryDetail make(array $attributes = [])
     * @method ProductInventoryDetail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductInventoryDetail[]|_IH_ProductInventoryDetail_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductInventoryDetail[]|_IH_ProductInventoryDetail_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductInventoryDetail sole(array|string $columns = ['*'])
     * @method ProductInventoryDetail updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductInventoryDetail_QB extends _BaseBuilder {}

    /**
     * @method ProductInventory|null getOrPut($key, $value)
     * @method ProductInventory|$this shift(int $count = 1)
     * @method ProductInventory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductInventory|$this pop(int $count = 1)
     * @method ProductInventory|null pull($key, \Closure $default = null)
     * @method ProductInventory|null last(callable $callback = null, \Closure $default = null)
     * @method ProductInventory|$this random(callable|int|null $number = null)
     * @method ProductInventory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductInventory|null get($key, \Closure $default = null)
     * @method ProductInventory|null first(callable $callback = null, \Closure $default = null)
     * @method ProductInventory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductInventory|null find($key, $default = null)
     * @method ProductInventory[] all()
     */
    class _IH_ProductInventory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductInventory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductInventory_QB whereId($value)
     * @method _IH_ProductInventory_QB whereProductId($value)
     * @method _IH_ProductInventory_QB whereSku($value)
     * @method _IH_ProductInventory_QB whereStockCount($value)
     * @method _IH_ProductInventory_QB whereSoldCount($value)
     * @method ProductInventory baseSole(array|string $columns = ['*'])
     * @method ProductInventory create(array $attributes = [])
     * @method _IH_ProductInventory_C|ProductInventory[] cursor()
     * @method ProductInventory|null|_IH_ProductInventory_C|ProductInventory[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductInventory_C|ProductInventory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductInventory|_IH_ProductInventory_C|ProductInventory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductInventory|_IH_ProductInventory_C|ProductInventory[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductInventory|_IH_ProductInventory_C|ProductInventory[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductInventory first(array|string $columns = ['*'])
     * @method ProductInventory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductInventory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductInventory firstOrFail(array|string $columns = ['*'])
     * @method ProductInventory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductInventory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductInventory forceCreate(array $attributes)
     * @method _IH_ProductInventory_C|ProductInventory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductInventory_C|ProductInventory[] get(array|string $columns = ['*'])
     * @method ProductInventory getModel()
     * @method ProductInventory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductInventory_C|ProductInventory[] hydrate(array $items)
     * @method ProductInventory make(array $attributes = [])
     * @method ProductInventory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductInventory[]|_IH_ProductInventory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductInventory[]|_IH_ProductInventory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductInventory sole(array|string $columns = ['*'])
     * @method ProductInventory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductInventory_QB extends _BaseBuilder {}

    /**
     * @method ProductMetaInfo|null getOrPut($key, $value)
     * @method ProductMetaInfo|$this shift(int $count = 1)
     * @method ProductMetaInfo|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductMetaInfo|$this pop(int $count = 1)
     * @method ProductMetaInfo|null pull($key, \Closure $default = null)
     * @method ProductMetaInfo|null last(callable $callback = null, \Closure $default = null)
     * @method ProductMetaInfo|$this random(callable|int|null $number = null)
     * @method ProductMetaInfo|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductMetaInfo|null get($key, \Closure $default = null)
     * @method ProductMetaInfo|null first(callable $callback = null, \Closure $default = null)
     * @method ProductMetaInfo|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductMetaInfo|null find($key, $default = null)
     * @method ProductMetaInfo[] all()
     */
    class _IH_ProductMetaInfo_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductMetaInfo[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ProductMetaInfo baseSole(array|string $columns = ['*'])
     * @method ProductMetaInfo create(array $attributes = [])
     * @method _IH_ProductMetaInfo_C|ProductMetaInfo[] cursor()
     * @method ProductMetaInfo|null|_IH_ProductMetaInfo_C|ProductMetaInfo[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductMetaInfo_C|ProductMetaInfo[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductMetaInfo|_IH_ProductMetaInfo_C|ProductMetaInfo[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductMetaInfo|_IH_ProductMetaInfo_C|ProductMetaInfo[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductMetaInfo|_IH_ProductMetaInfo_C|ProductMetaInfo[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductMetaInfo first(array|string $columns = ['*'])
     * @method ProductMetaInfo firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductMetaInfo firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductMetaInfo firstOrFail(array|string $columns = ['*'])
     * @method ProductMetaInfo firstOrNew(array $attributes = [], array $values = [])
     * @method ProductMetaInfo firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductMetaInfo forceCreate(array $attributes)
     * @method _IH_ProductMetaInfo_C|ProductMetaInfo[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductMetaInfo_C|ProductMetaInfo[] get(array|string $columns = ['*'])
     * @method ProductMetaInfo getModel()
     * @method ProductMetaInfo[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductMetaInfo_C|ProductMetaInfo[] hydrate(array $items)
     * @method ProductMetaInfo make(array $attributes = [])
     * @method ProductMetaInfo newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductMetaInfo[]|_IH_ProductMetaInfo_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductMetaInfo[]|_IH_ProductMetaInfo_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductMetaInfo sole(array|string $columns = ['*'])
     * @method ProductMetaInfo updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductMetaInfo_QB extends _BaseBuilder {}

    /**
     * @method ProductSellInfo|null getOrPut($key, $value)
     * @method ProductSellInfo|$this shift(int $count = 1)
     * @method ProductSellInfo|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSellInfo|$this pop(int $count = 1)
     * @method ProductSellInfo|null pull($key, \Closure $default = null)
     * @method ProductSellInfo|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSellInfo|$this random(callable|int|null $number = null)
     * @method ProductSellInfo|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSellInfo|null get($key, \Closure $default = null)
     * @method ProductSellInfo|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSellInfo|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSellInfo|null find($key, $default = null)
     * @method ProductSellInfo[] all()
     */
    class _IH_ProductSellInfo_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSellInfo[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ProductSellInfo baseSole(array|string $columns = ['*'])
     * @method ProductSellInfo create(array $attributes = [])
     * @method _IH_ProductSellInfo_C|ProductSellInfo[] cursor()
     * @method ProductSellInfo|null|_IH_ProductSellInfo_C|ProductSellInfo[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSellInfo_C|ProductSellInfo[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSellInfo|_IH_ProductSellInfo_C|ProductSellInfo[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSellInfo|_IH_ProductSellInfo_C|ProductSellInfo[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSellInfo|_IH_ProductSellInfo_C|ProductSellInfo[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSellInfo first(array|string $columns = ['*'])
     * @method ProductSellInfo firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSellInfo firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSellInfo firstOrFail(array|string $columns = ['*'])
     * @method ProductSellInfo firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSellInfo firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSellInfo forceCreate(array $attributes)
     * @method _IH_ProductSellInfo_C|ProductSellInfo[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSellInfo_C|ProductSellInfo[] get(array|string $columns = ['*'])
     * @method ProductSellInfo getModel()
     * @method ProductSellInfo[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSellInfo_C|ProductSellInfo[] hydrate(array $items)
     * @method ProductSellInfo make(array $attributes = [])
     * @method ProductSellInfo newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSellInfo[]|_IH_ProductSellInfo_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductSellInfo[]|_IH_ProductSellInfo_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSellInfo sole(array|string $columns = ['*'])
     * @method ProductSellInfo updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSellInfo_QB extends _BaseBuilder {}

    /**
     * @method ProductShippingReturnPolicy|null getOrPut($key, $value)
     * @method ProductShippingReturnPolicy|$this shift(int $count = 1)
     * @method ProductShippingReturnPolicy|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductShippingReturnPolicy|$this pop(int $count = 1)
     * @method ProductShippingReturnPolicy|null pull($key, \Closure $default = null)
     * @method ProductShippingReturnPolicy|null last(callable $callback = null, \Closure $default = null)
     * @method ProductShippingReturnPolicy|$this random(callable|int|null $number = null)
     * @method ProductShippingReturnPolicy|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductShippingReturnPolicy|null get($key, \Closure $default = null)
     * @method ProductShippingReturnPolicy|null first(callable $callback = null, \Closure $default = null)
     * @method ProductShippingReturnPolicy|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductShippingReturnPolicy|null find($key, $default = null)
     * @method ProductShippingReturnPolicy[] all()
     */
    class _IH_ProductShippingReturnPolicy_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductShippingReturnPolicy[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductShippingReturnPolicy_QB whereId($value)
     * @method _IH_ProductShippingReturnPolicy_QB whereProductId($value)
     * @method _IH_ProductShippingReturnPolicy_QB whereShippingReturnDescription($value)
     * @method _IH_ProductShippingReturnPolicy_QB whereCreatedAt($value)
     * @method _IH_ProductShippingReturnPolicy_QB whereUpdatedAt($value)
     * @method ProductShippingReturnPolicy baseSole(array|string $columns = ['*'])
     * @method ProductShippingReturnPolicy create(array $attributes = [])
     * @method _IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] cursor()
     * @method ProductShippingReturnPolicy|null|_IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductShippingReturnPolicy|_IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductShippingReturnPolicy|_IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductShippingReturnPolicy|_IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductShippingReturnPolicy first(array|string $columns = ['*'])
     * @method ProductShippingReturnPolicy firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductShippingReturnPolicy firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductShippingReturnPolicy firstOrFail(array|string $columns = ['*'])
     * @method ProductShippingReturnPolicy firstOrNew(array $attributes = [], array $values = [])
     * @method ProductShippingReturnPolicy firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductShippingReturnPolicy forceCreate(array $attributes)
     * @method _IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] get(array|string $columns = ['*'])
     * @method ProductShippingReturnPolicy getModel()
     * @method ProductShippingReturnPolicy[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] hydrate(array $items)
     * @method ProductShippingReturnPolicy make(array $attributes = [])
     * @method ProductShippingReturnPolicy newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductShippingReturnPolicy[]|_IH_ProductShippingReturnPolicy_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductShippingReturnPolicy[]|_IH_ProductShippingReturnPolicy_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductShippingReturnPolicy sole(array|string $columns = ['*'])
     * @method ProductShippingReturnPolicy updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductShippingReturnPolicy_QB extends _BaseBuilder {}

    /**
     * @method ProductSize|null getOrPut($key, $value)
     * @method ProductSize|$this shift(int $count = 1)
     * @method ProductSize|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSize|$this pop(int $count = 1)
     * @method ProductSize|null pull($key, \Closure $default = null)
     * @method ProductSize|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSize|$this random(callable|int|null $number = null)
     * @method ProductSize|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSize|null get($key, \Closure $default = null)
     * @method ProductSize|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSize|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSize|null find($key, $default = null)
     * @method ProductSize[] all()
     */
    class _IH_ProductSize_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSize[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ProductSize baseSole(array|string $columns = ['*'])
     * @method ProductSize create(array $attributes = [])
     * @method _IH_ProductSize_C|ProductSize[] cursor()
     * @method ProductSize|null|_IH_ProductSize_C|ProductSize[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSize_C|ProductSize[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSize|_IH_ProductSize_C|ProductSize[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSize|_IH_ProductSize_C|ProductSize[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSize|_IH_ProductSize_C|ProductSize[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSize first(array|string $columns = ['*'])
     * @method ProductSize firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSize firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSize firstOrFail(array|string $columns = ['*'])
     * @method ProductSize firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSize firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSize forceCreate(array $attributes)
     * @method _IH_ProductSize_C|ProductSize[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSize_C|ProductSize[] get(array|string $columns = ['*'])
     * @method ProductSize getModel()
     * @method ProductSize[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSize_C|ProductSize[] hydrate(array $items)
     * @method ProductSize make(array $attributes = [])
     * @method ProductSize newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSize[]|_IH_ProductSize_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductSize[]|_IH_ProductSize_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSize sole(array|string $columns = ['*'])
     * @method ProductSize updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSize_QB extends _BaseBuilder {}

    /**
     * @method ProductSubCategory|null getOrPut($key, $value)
     * @method ProductSubCategory|$this shift(int $count = 1)
     * @method ProductSubCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSubCategory|$this pop(int $count = 1)
     * @method ProductSubCategory|null pull($key, \Closure $default = null)
     * @method ProductSubCategory|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSubCategory|$this random(callable|int|null $number = null)
     * @method ProductSubCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSubCategory|null get($key, \Closure $default = null)
     * @method ProductSubCategory|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSubCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSubCategory|null find($key, $default = null)
     * @method ProductSubCategory[] all()
     */
    class _IH_ProductSubCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSubCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductSubCategory_QB whereId($value)
     * @method _IH_ProductSubCategory_QB whereProductId($value)
     * @method _IH_ProductSubCategory_QB whereSubCategoryId($value)
     * @method ProductSubCategory baseSole(array|string $columns = ['*'])
     * @method ProductSubCategory create(array $attributes = [])
     * @method _IH_ProductSubCategory_C|ProductSubCategory[] cursor()
     * @method ProductSubCategory|null|_IH_ProductSubCategory_C|ProductSubCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSubCategory_C|ProductSubCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSubCategory|_IH_ProductSubCategory_C|ProductSubCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSubCategory|_IH_ProductSubCategory_C|ProductSubCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSubCategory|_IH_ProductSubCategory_C|ProductSubCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSubCategory first(array|string $columns = ['*'])
     * @method ProductSubCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSubCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSubCategory firstOrFail(array|string $columns = ['*'])
     * @method ProductSubCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSubCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSubCategory forceCreate(array $attributes)
     * @method _IH_ProductSubCategory_C|ProductSubCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSubCategory_C|ProductSubCategory[] get(array|string $columns = ['*'])
     * @method ProductSubCategory getModel()
     * @method ProductSubCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSubCategory_C|ProductSubCategory[] hydrate(array $items)
     * @method ProductSubCategory make(array $attributes = [])
     * @method ProductSubCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSubCategory[]|_IH_ProductSubCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductSubCategory[]|_IH_ProductSubCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSubCategory sole(array|string $columns = ['*'])
     * @method ProductSubCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSubCategory_QB extends _BaseBuilder {}

    /**
     * @method ProductTag|null getOrPut($key, $value)
     * @method ProductTag|$this shift(int $count = 1)
     * @method ProductTag|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTag|$this pop(int $count = 1)
     * @method ProductTag|null pull($key, \Closure $default = null)
     * @method ProductTag|null last(callable $callback = null, \Closure $default = null)
     * @method ProductTag|$this random(callable|int|null $number = null)
     * @method ProductTag|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTag|null get($key, \Closure $default = null)
     * @method ProductTag|null first(callable $callback = null, \Closure $default = null)
     * @method ProductTag|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductTag|null find($key, $default = null)
     * @method ProductTag[] all()
     */
    class _IH_ProductTag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductTag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductTag_QB whereId($value)
     * @method _IH_ProductTag_QB whereTagName($value)
     * @method _IH_ProductTag_QB whereProductId($value)
     * @method ProductTag baseSole(array|string $columns = ['*'])
     * @method ProductTag create(array $attributes = [])
     * @method _IH_ProductTag_C|ProductTag[] cursor()
     * @method ProductTag|null|_IH_ProductTag_C|ProductTag[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductTag_C|ProductTag[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductTag|_IH_ProductTag_C|ProductTag[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTag|_IH_ProductTag_C|ProductTag[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductTag|_IH_ProductTag_C|ProductTag[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductTag first(array|string $columns = ['*'])
     * @method ProductTag firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTag firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductTag firstOrFail(array|string $columns = ['*'])
     * @method ProductTag firstOrNew(array $attributes = [], array $values = [])
     * @method ProductTag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductTag forceCreate(array $attributes)
     * @method _IH_ProductTag_C|ProductTag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductTag_C|ProductTag[] get(array|string $columns = ['*'])
     * @method ProductTag getModel()
     * @method ProductTag[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductTag_C|ProductTag[] hydrate(array $items)
     * @method ProductTag make(array $attributes = [])
     * @method ProductTag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductTag[]|_IH_ProductTag_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductTag[]|_IH_ProductTag_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTag sole(array|string $columns = ['*'])
     * @method ProductTag updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductTag_QB extends _BaseBuilder {}

    /**
     * @method ProductUnit|null getOrPut($key, $value)
     * @method ProductUnit|$this shift(int $count = 1)
     * @method ProductUnit|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductUnit|$this pop(int $count = 1)
     * @method ProductUnit|null pull($key, \Closure $default = null)
     * @method ProductUnit|null last(callable $callback = null, \Closure $default = null)
     * @method ProductUnit|$this random(callable|int|null $number = null)
     * @method ProductUnit|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductUnit|null get($key, \Closure $default = null)
     * @method ProductUnit|null first(callable $callback = null, \Closure $default = null)
     * @method ProductUnit|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductUnit|null find($key, $default = null)
     * @method ProductUnit[] all()
     */
    class _IH_ProductUnit_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductUnit[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method ProductUnit baseSole(array|string $columns = ['*'])
     * @method ProductUnit create(array $attributes = [])
     * @method _IH_ProductUnit_C|ProductUnit[] cursor()
     * @method ProductUnit|null|_IH_ProductUnit_C|ProductUnit[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductUnit_C|ProductUnit[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductUnit|_IH_ProductUnit_C|ProductUnit[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductUnit|_IH_ProductUnit_C|ProductUnit[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductUnit|_IH_ProductUnit_C|ProductUnit[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductUnit first(array|string $columns = ['*'])
     * @method ProductUnit firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductUnit firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductUnit firstOrFail(array|string $columns = ['*'])
     * @method ProductUnit firstOrNew(array $attributes = [], array $values = [])
     * @method ProductUnit firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductUnit forceCreate(array $attributes)
     * @method _IH_ProductUnit_C|ProductUnit[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductUnit_C|ProductUnit[] get(array|string $columns = ['*'])
     * @method ProductUnit getModel()
     * @method ProductUnit[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductUnit_C|ProductUnit[] hydrate(array $items)
     * @method ProductUnit make(array $attributes = [])
     * @method ProductUnit newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductUnit[]|_IH_ProductUnit_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductUnit[]|_IH_ProductUnit_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductUnit sole(array|string $columns = ['*'])
     * @method ProductUnit updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductUnit_QB extends _BaseBuilder {}

    /**
     * @method ProductUom|null getOrPut($key, $value)
     * @method ProductUom|$this shift(int $count = 1)
     * @method ProductUom|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductUom|$this pop(int $count = 1)
     * @method ProductUom|null pull($key, \Closure $default = null)
     * @method ProductUom|null last(callable $callback = null, \Closure $default = null)
     * @method ProductUom|$this random(callable|int|null $number = null)
     * @method ProductUom|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductUom|null get($key, \Closure $default = null)
     * @method ProductUom|null first(callable $callback = null, \Closure $default = null)
     * @method ProductUom|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductUom|null find($key, $default = null)
     * @method ProductUom[] all()
     */
    class _IH_ProductUom_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductUom[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductUom_QB whereId($value)
     * @method _IH_ProductUom_QB whereProductId($value)
     * @method _IH_ProductUom_QB whereUnitId($value)
     * @method _IH_ProductUom_QB whereQuantity($value)
     * @method ProductUom baseSole(array|string $columns = ['*'])
     * @method ProductUom create(array $attributes = [])
     * @method _IH_ProductUom_C|ProductUom[] cursor()
     * @method ProductUom|null|_IH_ProductUom_C|ProductUom[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductUom_C|ProductUom[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductUom|_IH_ProductUom_C|ProductUom[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductUom|_IH_ProductUom_C|ProductUom[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductUom|_IH_ProductUom_C|ProductUom[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductUom first(array|string $columns = ['*'])
     * @method ProductUom firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductUom firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductUom firstOrFail(array|string $columns = ['*'])
     * @method ProductUom firstOrNew(array $attributes = [], array $values = [])
     * @method ProductUom firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductUom forceCreate(array $attributes)
     * @method _IH_ProductUom_C|ProductUom[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductUom_C|ProductUom[] get(array|string $columns = ['*'])
     * @method ProductUom getModel()
     * @method ProductUom[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductUom_C|ProductUom[] hydrate(array $items)
     * @method ProductUom make(array $attributes = [])
     * @method ProductUom newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductUom[]|_IH_ProductUom_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductUom[]|_IH_ProductUom_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductUom sole(array|string $columns = ['*'])
     * @method ProductUom updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductUom_QB extends _BaseBuilder {}

    /**
     * @method Product|null getOrPut($key, $value)
     * @method Product|$this shift(int $count = 1)
     * @method Product|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Product|$this pop(int $count = 1)
     * @method Product|null pull($key, \Closure $default = null)
     * @method Product|null last(callable $callback = null, \Closure $default = null)
     * @method Product|$this random(callable|int|null $number = null)
     * @method Product|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Product|null get($key, \Closure $default = null)
     * @method Product|null first(callable $callback = null, \Closure $default = null)
     * @method Product|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Product|null find($key, $default = null)
     * @method Product[] all()
     */
    class _IH_Product_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Product[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Product_QB whereId($value)
     * @method _IH_Product_QB whereName($value)
     * @method _IH_Product_QB whereSlug($value)
     * @method _IH_Product_QB whereSummary($value)
     * @method _IH_Product_QB whereDescription($value)
     * @method _IH_Product_QB whereImageId($value)
     * @method _IH_Product_QB wherePrice($value)
     * @method _IH_Product_QB whereSalePrice($value)
     * @method _IH_Product_QB whereCost($value)
     * @method _IH_Product_QB whereBadgeId($value)
     * @method _IH_Product_QB whereBrandId($value)
     * @method _IH_Product_QB whereStatusId($value)
     * @method _IH_Product_QB whereProductType($value)
     * @method _IH_Product_QB whereSoldCount($value)
     * @method _IH_Product_QB whereMinPurchase($value)
     * @method _IH_Product_QB whereMaxPurchase($value)
     * @method _IH_Product_QB whereIsRefundable($value)
     * @method _IH_Product_QB whereIsInHouse($value)
     * @method _IH_Product_QB whereIsInventoryWarnAble($value)
     * @method _IH_Product_QB whereCreatedAt($value)
     * @method _IH_Product_QB whereUpdatedAt($value)
     * @method _IH_Product_QB whereDeletedAt($value)
     * @method Product baseSole(array|string $columns = ['*'])
     * @method Product create(array $attributes = [])
     * @method _IH_Product_C|Product[] cursor()
     * @method Product|null|_IH_Product_C|Product[] find($id, array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product|_IH_Product_C|Product[] findOrFail($id, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrNew($id, array|string $columns = ['*'])
     * @method Product first(array|string $columns = ['*'])
     * @method Product firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product firstOrCreate(array $attributes = [], array $values = [])
     * @method Product firstOrFail(array|string $columns = ['*'])
     * @method Product firstOrNew(array $attributes = [], array $values = [])
     * @method Product firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product forceCreate(array $attributes)
     * @method _IH_Product_C|Product[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Product_C|Product[] get(array|string $columns = ['*'])
     * @method Product getModel()
     * @method Product[] getModels(array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] hydrate(array $items)
     * @method Product make(array $attributes = [])
     * @method Product newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Product[]|_IH_Product_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Product[]|_IH_Product_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product sole(array|string $columns = ['*'])
     * @method Product updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Product_QB withTrashed()
     * @method _IH_Product_QB onlyTrashed()
     * @method _IH_Product_QB withoutTrashed()
     * @method _IH_Product_QB restore()
     */
    class _IH_Product_QB extends _BaseBuilder {}
}
