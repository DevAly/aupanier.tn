<?php //2cb0118c1399fee8beb2ce7c7f4af9c0
/** @noinspection all */

namespace Modules\Attributes\Entities {

    use App\Models\MediaUploader;
    use App\Models\Status;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_MediaUploader_QB;
    use LaravelIdea\Helper\App\Models\_IH_Status_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Brand_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Brand_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Category_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Category_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_ChildCategory_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_ChildCategory_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Color_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Color_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_DeliveryOption_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_DeliveryOption_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Size_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Size_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_SubCategory_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_SubCategory_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Tag_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Tag_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Unit_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Unit_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductCategory_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductCategory_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductInventoryDetail_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductInventoryDetail_QB;
    use Modules\Product\Entities\ProductCategory;
    use Modules\Product\Entities\ProductInventoryDetail;

    /**
     * @property int $id
     * @property string|null $url
     * @property string|null $image
     * @property int|null $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string $name
     * @property string $slug
     * @property int $image_id
     * @property int $banner_id
     * @property string|null $title
     * @property Carbon|null $deleted_at
     * @property MediaUploader $banner
     * @method HasOne|_IH_MediaUploader_QB banner()
     * @property MediaUploader $logo
     * @method HasOne|_IH_MediaUploader_QB logo()
     * @method static _IH_Brand_QB onWriteConnection()
     * @method _IH_Brand_QB newQuery()
     * @method static _IH_Brand_QB on(null|string $connection = null)
     * @method static _IH_Brand_QB query()
     * @method static _IH_Brand_QB with(array|string $relations)
     * @method _IH_Brand_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Brand_C|Brand[] all()
     * @foreignLinks id,\Modules\Product\Entities\Product,brand_id
     * @mixin _IH_Brand_QB
     */
    class Brand extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property int|null $image_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property int|null $status_id
     * @property MediaUploader|null $image
     * @method HasOne|_IH_MediaUploader_QB image()
     * @property _IH_ProductCategory_C|ProductCategory[] $product_categories
     * @property-read int $product_categories_count
     * @method HasMany|_IH_ProductCategory_QB product_categories()
     * @property Status|null $status
     * @method HasOne|_IH_Status_QB status()
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @ownLinks status_id,\App\Models\Status,id
     * @foreignLinks id,\Modules\Product\Entities\ProductCategory,category_id|id,\Modules\Blog\Entities\Blog,category_id|id,\Modules\Service\Entities\Service,category_id|id,\Modules\Attributes\Entities\SubCategory,category_id|id,\Modules\Attributes\Entities\ChildCategory,category_id
     * @mixin _IH_Category_QB
     */
    class Category extends Model {}

    /**
     * @property int $id
     * @property int $category_id
     * @property int $sub_category_id
     * @property string $name
     * @property string $slug
     * @property int|null $image_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property int|null $status_id
     * @property Category $category
     * @method HasOne|_IH_Category_QB category()
     * @property MediaUploader|null $image
     * @method HasOne|_IH_MediaUploader_QB image()
     * @property Status|null $status
     * @method HasOne|_IH_Status_QB status()
     * @property SubCategory $sub_category
     * @method HasOne|_IH_SubCategory_QB sub_category()
     * @method static _IH_ChildCategory_QB onWriteConnection()
     * @method _IH_ChildCategory_QB newQuery()
     * @method static _IH_ChildCategory_QB on(null|string $connection = null)
     * @method static _IH_ChildCategory_QB query()
     * @method static _IH_ChildCategory_QB with(array|string $relations)
     * @method _IH_ChildCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ChildCategory_C|ChildCategory[] all()
     * @ownLinks category_id,\Modules\Attributes\Entities\Category,id|sub_category_id,\Modules\Attributes\Entities\SubCategory,id|status_id,\App\Models\Status,id
     * @foreignLinks id,\Modules\Product\Entities\ProductChildCategory,child_category_id
     * @mixin _IH_ChildCategory_QB
     */
    class ChildCategory extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $color_code
     * @property string $slug
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_ProductInventoryDetail_C|ProductInventoryDetail[] $product_colors
     * @property-read int $product_colors_count
     * @method HasMany|_IH_ProductInventoryDetail_QB product_colors()
     * @method static _IH_Color_QB onWriteConnection()
     * @method _IH_Color_QB newQuery()
     * @method static _IH_Color_QB on(null|string $connection = null)
     * @method static _IH_Color_QB query()
     * @method static _IH_Color_QB with(array|string $relations)
     * @method _IH_Color_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Color_C|Color[] all()
     * @mixin _IH_Color_QB
     */
    class Color extends Model {}

    /**
     * @property int $id
     * @property string $icon
     * @property string $title
     * @property string $sub_title
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @method static _IH_DeliveryOption_QB onWriteConnection()
     * @method _IH_DeliveryOption_QB newQuery()
     * @method static _IH_DeliveryOption_QB on(null|string $connection = null)
     * @method static _IH_DeliveryOption_QB query()
     * @method static _IH_DeliveryOption_QB with(array|string $relations)
     * @method _IH_DeliveryOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DeliveryOption_C|DeliveryOption[] all()
     * @foreignLinks id,\Modules\Product\Entities\ProductDeliveryOption,delivery_option_id
     * @mixin _IH_DeliveryOption_QB
     */
    class DeliveryOption extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $size_code
     * @property string $slug
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_ProductInventoryDetail_C|ProductInventoryDetail[] $product_sizes
     * @property-read int $product_sizes_count
     * @method HasMany|_IH_ProductInventoryDetail_QB product_sizes()
     * @method static _IH_Size_QB onWriteConnection()
     * @method _IH_Size_QB newQuery()
     * @method static _IH_Size_QB on(null|string $connection = null)
     * @method static _IH_Size_QB query()
     * @method static _IH_Size_QB with(array|string $relations)
     * @method _IH_Size_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Size_C|Size[] all()
     * @mixin _IH_Size_QB
     */
    class Size extends Model {}

    /**
     * @property int $id
     * @property int $category_id
     * @property string $name
     * @property string $slug
     * @property int|null $image_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property int|null $status_id
     * @property Category $category
     * @method HasOne|_IH_Category_QB category()
     * @property MediaUploader|null $image
     * @method HasOne|_IH_MediaUploader_QB image()
     * @property Status|null $status
     * @method HasOne|_IH_Status_QB status()
     * @method static _IH_SubCategory_QB onWriteConnection()
     * @method _IH_SubCategory_QB newQuery()
     * @method static _IH_SubCategory_QB on(null|string $connection = null)
     * @method static _IH_SubCategory_QB query()
     * @method static _IH_SubCategory_QB with(array|string $relations)
     * @method _IH_SubCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SubCategory_C|SubCategory[] all()
     * @ownLinks category_id,\Modules\Attributes\Entities\Category,id|status_id,\App\Models\Status,id
     * @foreignLinks id,\Modules\Product\Entities\ProductSubCategory,sub_category_id|id,\Modules\Attributes\Entities\ChildCategory,sub_category_id
     * @mixin _IH_SubCategory_QB
     */
    class SubCategory extends Model {}

    /**
     * @property int $id
     * @property string $tag_text
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @method static _IH_Tag_QB onWriteConnection()
     * @method _IH_Tag_QB newQuery()
     * @method static _IH_Tag_QB on(null|string $connection = null)
     * @method static _IH_Tag_QB query()
     * @method static _IH_Tag_QB with(array|string $relations)
     * @method _IH_Tag_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tag_C|Tag[] all()
     * @mixin _IH_Tag_QB
     */
    class Tag extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @method static _IH_Unit_QB onWriteConnection()
     * @method _IH_Unit_QB newQuery()
     * @method static _IH_Unit_QB on(null|string $connection = null)
     * @method static _IH_Unit_QB query()
     * @method static _IH_Unit_QB with(array|string $relations)
     * @method _IH_Unit_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Unit_C|Unit[] all()
     * @foreignLinks id,\Modules\Product\Entities\ProductUom,unit_id
     * @mixin _IH_Unit_QB
     */
    class Unit extends Model {}
}
