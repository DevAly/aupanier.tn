<?php //a676c9f39612abcbf8d849d22f819970
/** @noinspection all */

namespace Modules\Product\Entities {

    use App\Models\MediaUploader;
    use App\Models\MetaInfo;
    use App\Models\ProductReviews;
    use App\Models\Status;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasManyThrough;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\HasOneThrough;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_MediaUploader_C;
    use LaravelIdea\Helper\App\Models\_IH_MediaUploader_QB;
    use LaravelIdea\Helper\App\Models\_IH_MetaInfo_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductReviews_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductReviews_QB;
    use LaravelIdea\Helper\App\Models\_IH_Status_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Brand_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Category_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_ChildCategory_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_ChildCategory_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Color_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Color_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Size_C;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_Size_QB;
    use LaravelIdea\Helper\Modules\Attributes\Entities\_IH_SubCategory_QB;
    use LaravelIdea\Helper\Modules\Badge\Entities\_IH_Badge_QB;
    use LaravelIdea\Helper\Modules\Campaign\Entities\_IH_CampaignProduct_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductAttribute_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductAttribute_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductCategory_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductCategory_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductChildCategory_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductChildCategory_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductColor_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductColor_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductCreatedBy_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductCreatedBy_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductDeliveryOption_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductDeliveryOption_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductGallery_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductGallery_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductInventoryDetailAttribute_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductInventoryDetailAttribute_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductInventoryDetail_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductInventoryDetail_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductInventory_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductInventory_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductMetaInfo_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductMetaInfo_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductSellInfo_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductSellInfo_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductShippingReturnPolicy_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductShippingReturnPolicy_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductSize_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductSize_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductSubCategory_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductSubCategory_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductTag_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductTag_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductUnit_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductUnit_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductUom_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_ProductUom_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_Product_C;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_Product_QB;
    use Modules\Attributes\Entities\Brand;
    use Modules\Attributes\Entities\Category;
    use Modules\Attributes\Entities\ChildCategory;
    use Modules\Attributes\Entities\Color;
    use Modules\Attributes\Entities\Size;
    use Modules\Attributes\Entities\SubCategory;
    use Modules\Badge\Entities\Badge;
    use Modules\Campaign\Entities\CampaignProduct;

    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property string|null $summary
     * @property string|null $description
     * @property string|null $image_id
     * @property float|null $price
     * @property float|null $sale_price
     * @property float|null $cost
     * @property int|null $badge_id
     * @property int|null $brand_id
     * @property int $status_id
     * @property int $product_type
     * @property int|null $sold_count
     * @property int|null $min_purchase
     * @property int|null $max_purchase
     * @property bool|null $is_refundable
     * @property bool $is_in_house
     * @property bool|null $is_inventory_warn_able
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property Badge|null $badge
     * @method HasOne|_IH_Badge_QB badge()
     * @property Brand|null $brand
     * @method HasOne|_IH_Brand_QB brand()
     * @property CampaignProduct $campaign_product
     * @method BelongsTo|_IH_CampaignProduct_QB campaign_product()
     * @property Category $category
     * @method HasOneThrough|_IH_Category_QB category()
     * @property _IH_ChildCategory_C|ChildCategory[] $childCategory
     * @property-read int $child_category_count
     * @method HasManyThrough|_IH_ChildCategory_QB childCategory()
     * @property _IH_Color_C|Color[] $color
     * @property-read int $color_count
     * @method HasManyThrough|_IH_Color_QB color()
     * @property _IH_ProductDeliveryOption_C|ProductDeliveryOption[] $delivery_option
     * @property-read int $delivery_option_count
     * @method HasMany|_IH_ProductDeliveryOption_QB delivery_option()
     * @property _IH_MediaUploader_C|MediaUploader[] $gallery_images
     * @property-read int $gallery_images_count
     * @method HasManyThrough|_IH_MediaUploader_QB gallery_images()
     * @property ProductInventory $inventory
     * @method HasOne|_IH_ProductInventory_QB inventory()
     * @property _IH_ProductInventoryDetail_C|ProductInventoryDetail[] $inventoryDetail
     * @property-read int $inventory_detail_count
     * @method HasMany|_IH_ProductInventoryDetail_QB inventoryDetail()
     * @property MetaInfo $metaData
     * @method MorphToMany|_IH_MetaInfo_QB metaData()
     * @property ProductCategory $product_category
     * @method HasOne|_IH_ProductCategory_QB product_category()
     * @property _IH_ProductChildCategory_C|ProductChildCategory[] $product_child_category
     * @property-read int $product_child_category_count
     * @method HasMany|_IH_ProductChildCategory_QB product_child_category()
     * @property _IH_ProductGallery_C|ProductGallery[] $product_gallery
     * @property-read int $product_gallery_count
     * @method HasMany|_IH_ProductGallery_QB product_gallery()
     * @property ProductSubCategory $product_sub_category
     * @method HasOne|_IH_ProductSubCategory_QB product_sub_category()
     * @property ProductShippingReturnPolicy $return_policy
     * @method HasOne|_IH_ProductShippingReturnPolicy_QB return_policy()
     * @property _IH_ProductReviews_C|ProductReviews[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_ProductReviews_QB reviews()
     * @property Size $size
     * @method HasOneThrough|_IH_Size_QB size()
     * @property _IH_Size_C|Size[] $sizes
     * @property-read int $sizes_count
     * @method HasManyThrough|_IH_Size_QB sizes()
     * @property Status $status
     * @method HasOne|_IH_Status_QB status()
     * @property SubCategory $subCategory
     * @method HasOneThrough|_IH_SubCategory_QB subCategory()
     * @property _IH_ProductTag_C|ProductTag[] $tag
     * @property-read int $tag_count
     * @method HasMany|_IH_ProductTag_QB tag()
     * @property ProductUom $uom
     * @method HasOne|_IH_ProductUom_QB uom()
     * @method static _IH_Product_QB onWriteConnection()
     * @method _IH_Product_QB newQuery()
     * @method static _IH_Product_QB on(null|string $connection = null)
     * @method static _IH_Product_QB query()
     * @method static _IH_Product_QB with(array|string $relations)
     * @method _IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @ownLinks badge_id,\Modules\Badge\Entities\Badge,id|brand_id,\Modules\Attributes\Entities\Brand,id|status_id,\App\Models\Status,id
     * @foreignLinks id,\Modules\Product\Entities\ProductCategory,product_id|id,\Modules\Product\Entities\ProductSubCategory,product_id|id,\Modules\Product\Entities\ProductChildCategory,product_id|id,\Modules\Product\Entities\ProductTag,product_id|id,\Modules\Product\Entities\ProductDeliveryOption,product_id|id,\Modules\Product\Entities\ProductUom,product_id|id,\Modules\Product\Entities\ProductInventory,product_id|id,\Modules\Product\Entities\ProductInventoryDetail,product_id|id,\Modules\Product\Entities\ProductGallery,product_id|id,\Modules\Product\Entities\ProductInventoryDetailAttribute,product_id|id,\Modules\Product\Entities\ProductCreatedBy,product_id|id,\App\Models\ProductReviews,product_id|id,\Modules\Product\Entities\ProductShippingReturnPolicy,product_id|id,\Modules\Campaign\Entities\CampaignProduct,product_id|id,\Modules\Campaign\Entities\CampaignSoldProduct,product_id
     * @mixin _IH_Product_QB
     */
    class Product extends Model {}

    /**
     * @property int $id
     * @property string|null $title
     * @property string|null $terms
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ProductAttribute_QB onWriteConnection()
     * @method _IH_ProductAttribute_QB newQuery()
     * @method static _IH_ProductAttribute_QB on(null|string $connection = null)
     * @method static _IH_ProductAttribute_QB query()
     * @method static _IH_ProductAttribute_QB with(array|string $relations)
     * @method _IH_ProductAttribute_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductAttribute_C|ProductAttribute[] all()
     * @mixin _IH_ProductAttribute_QB
     */
    class ProductAttribute extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property int $category_id
     * @method static _IH_ProductCategory_QB onWriteConnection()
     * @method _IH_ProductCategory_QB newQuery()
     * @method static _IH_ProductCategory_QB on(null|string $connection = null)
     * @method static _IH_ProductCategory_QB query()
     * @method static _IH_ProductCategory_QB with(array|string $relations)
     * @method _IH_ProductCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductCategory_C|ProductCategory[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id|category_id,\Modules\Attributes\Entities\Category,id
     * @mixin _IH_ProductCategory_QB
     */
    class ProductCategory extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property int $child_category_id
     * @method static _IH_ProductChildCategory_QB onWriteConnection()
     * @method _IH_ProductChildCategory_QB newQuery()
     * @method static _IH_ProductChildCategory_QB on(null|string $connection = null)
     * @method static _IH_ProductChildCategory_QB query()
     * @method static _IH_ProductChildCategory_QB with(array|string $relations)
     * @method _IH_ProductChildCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductChildCategory_C|ProductChildCategory[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id|child_category_id,\Modules\Attributes\Entities\ChildCategory,id
     * @mixin _IH_ProductChildCategory_QB
     */
    class ProductChildCategory extends Model {}

    /**
     * @method static _IH_ProductColor_QB onWriteConnection()
     * @method _IH_ProductColor_QB newQuery()
     * @method static _IH_ProductColor_QB on(null|string $connection = null)
     * @method static _IH_ProductColor_QB query()
     * @method static _IH_ProductColor_QB with(array|string $relations)
     * @method _IH_ProductColor_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductColor_C|ProductColor[] all()
     * @mixin _IH_ProductColor_QB
     */
    class ProductColor extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property int $created_by_id
     * @property string $guard_name
     * @property int|null $updated_by
     * @property string|null $updated_by_guard
     * @property int|null $deleted_by
     * @property string|null $deleted_by_guard
     * @method static _IH_ProductCreatedBy_QB onWriteConnection()
     * @method _IH_ProductCreatedBy_QB newQuery()
     * @method static _IH_ProductCreatedBy_QB on(null|string $connection = null)
     * @method static _IH_ProductCreatedBy_QB query()
     * @method static _IH_ProductCreatedBy_QB with(array|string $relations)
     * @method _IH_ProductCreatedBy_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductCreatedBy_C|ProductCreatedBy[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id
     * @mixin _IH_ProductCreatedBy_QB
     */
    class ProductCreatedBy extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property int $delivery_option_id
     * @method static _IH_ProductDeliveryOption_QB onWriteConnection()
     * @method _IH_ProductDeliveryOption_QB newQuery()
     * @method static _IH_ProductDeliveryOption_QB on(null|string $connection = null)
     * @method static _IH_ProductDeliveryOption_QB query()
     * @method static _IH_ProductDeliveryOption_QB with(array|string $relations)
     * @method _IH_ProductDeliveryOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductDeliveryOption_C|ProductDeliveryOption[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id|delivery_option_id,\Modules\Attributes\Entities\DeliveryOption,id
     * @mixin _IH_ProductDeliveryOption_QB
     */
    class ProductDeliveryOption extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property int $image_id
     * @method static _IH_ProductGallery_QB onWriteConnection()
     * @method _IH_ProductGallery_QB newQuery()
     * @method static _IH_ProductGallery_QB on(null|string $connection = null)
     * @method static _IH_ProductGallery_QB query()
     * @method static _IH_ProductGallery_QB with(array|string $relations)
     * @method _IH_ProductGallery_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductGallery_C|ProductGallery[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id
     * @mixin _IH_ProductGallery_QB
     */
    class ProductGallery extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property string $sku
     * @property int|null $stock_count
     * @property int|null $sold_count
     * @property _IH_ProductInventoryDetail_C|ProductInventoryDetail[] $inventoryDetails
     * @property-read int $inventory_details_count
     * @method HasMany|_IH_ProductInventoryDetail_QB inventoryDetails()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_ProductInventory_QB onWriteConnection()
     * @method _IH_ProductInventory_QB newQuery()
     * @method static _IH_ProductInventory_QB on(null|string $connection = null)
     * @method static _IH_ProductInventory_QB query()
     * @method static _IH_ProductInventory_QB with(array|string $relations)
     * @method _IH_ProductInventory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductInventory_C|ProductInventory[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id
     * @foreignLinks id,\Modules\Product\Entities\ProductInventoryDetail,product_inventory_id
     * @mixin _IH_ProductInventory_QB
     */
    class ProductInventory extends Model {}

    /**
     * @property int $id
     * @property int $product_inventory_id
     * @property int $product_id
     * @property string|null $color
     * @property string|null $size
     * @property string|null $hash
     * @property float $additional_price
     * @property float|null $add_cost
     * @property int|null $image
     * @property int $stock_count
     * @property int $sold_count
     * @property MediaUploader|null $attr_image
     * @method HasOne|_IH_MediaUploader_QB attr_image()
     * @property _IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] $attribute
     * @property-read int $attribute_count
     * @method HasMany|_IH_ProductInventoryDetailAttribute_QB attribute()
     * @property Color|null $productColor
     * @method HasOne|_IH_Color_QB productColor()
     * @property Size|null $productSize
     * @method HasOne|_IH_Size_QB productSize()
     * @method static _IH_ProductInventoryDetail_QB onWriteConnection()
     * @method _IH_ProductInventoryDetail_QB newQuery()
     * @method static _IH_ProductInventoryDetail_QB on(null|string $connection = null)
     * @method static _IH_ProductInventoryDetail_QB query()
     * @method static _IH_ProductInventoryDetail_QB with(array|string $relations)
     * @method _IH_ProductInventoryDetail_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductInventoryDetail_C|ProductInventoryDetail[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id|product_inventory_id,\Modules\Product\Entities\ProductInventory,id
     * @foreignLinks id,\Modules\Product\Entities\ProductInventoryDetailAttribute,inventory_details_id
     * @mixin _IH_ProductInventoryDetail_QB
     */
    class ProductInventoryDetail extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property int $inventory_details_id
     * @property string|null $attribute_name
     * @property string|null $attribute_value
     * @method static _IH_ProductInventoryDetailAttribute_QB onWriteConnection()
     * @method _IH_ProductInventoryDetailAttribute_QB newQuery()
     * @method static _IH_ProductInventoryDetailAttribute_QB on(null|string $connection = null)
     * @method static _IH_ProductInventoryDetailAttribute_QB query()
     * @method static _IH_ProductInventoryDetailAttribute_QB with(array|string $relations)
     * @method _IH_ProductInventoryDetailAttribute_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductInventoryDetailAttribute_C|ProductInventoryDetailAttribute[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id|inventory_details_id,\Modules\Product\Entities\ProductInventoryDetail,id
     * @mixin _IH_ProductInventoryDetailAttribute_QB
     */
    class ProductInventoryDetailAttribute extends Model {}

    /**
     * @method static _IH_ProductMetaInfo_QB onWriteConnection()
     * @method _IH_ProductMetaInfo_QB newQuery()
     * @method static _IH_ProductMetaInfo_QB on(null|string $connection = null)
     * @method static _IH_ProductMetaInfo_QB query()
     * @method static _IH_ProductMetaInfo_QB with(array|string $relations)
     * @method _IH_ProductMetaInfo_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductMetaInfo_C|ProductMetaInfo[] all()
     * @mixin _IH_ProductMetaInfo_QB
     */
    class ProductMetaInfo extends Model {}

    /**
     * @method static _IH_ProductSellInfo_QB onWriteConnection()
     * @method _IH_ProductSellInfo_QB newQuery()
     * @method static _IH_ProductSellInfo_QB on(null|string $connection = null)
     * @method static _IH_ProductSellInfo_QB query()
     * @method static _IH_ProductSellInfo_QB with(array|string $relations)
     * @method _IH_ProductSellInfo_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSellInfo_C|ProductSellInfo[] all()
     * @mixin _IH_ProductSellInfo_QB
     */
    class ProductSellInfo extends Model {}

    /**
     * @property int $id
     * @property int|null $product_id
     * @property string|null $shipping_return_description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ProductShippingReturnPolicy_QB onWriteConnection()
     * @method _IH_ProductShippingReturnPolicy_QB newQuery()
     * @method static _IH_ProductShippingReturnPolicy_QB on(null|string $connection = null)
     * @method static _IH_ProductShippingReturnPolicy_QB query()
     * @method static _IH_ProductShippingReturnPolicy_QB with(array|string $relations)
     * @method _IH_ProductShippingReturnPolicy_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductShippingReturnPolicy_C|ProductShippingReturnPolicy[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id
     * @mixin _IH_ProductShippingReturnPolicy_QB
     */
    class ProductShippingReturnPolicy extends Model {}

    /**
     * @method static _IH_ProductSize_QB onWriteConnection()
     * @method _IH_ProductSize_QB newQuery()
     * @method static _IH_ProductSize_QB on(null|string $connection = null)
     * @method static _IH_ProductSize_QB query()
     * @method static _IH_ProductSize_QB with(array|string $relations)
     * @method _IH_ProductSize_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSize_C|ProductSize[] all()
     * @mixin _IH_ProductSize_QB
     */
    class ProductSize extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property int $sub_category_id
     * @method static _IH_ProductSubCategory_QB onWriteConnection()
     * @method _IH_ProductSubCategory_QB newQuery()
     * @method static _IH_ProductSubCategory_QB on(null|string $connection = null)
     * @method static _IH_ProductSubCategory_QB query()
     * @method static _IH_ProductSubCategory_QB with(array|string $relations)
     * @method _IH_ProductSubCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSubCategory_C|ProductSubCategory[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id|sub_category_id,\Modules\Attributes\Entities\SubCategory,id
     * @mixin _IH_ProductSubCategory_QB
     */
    class ProductSubCategory extends Model {}

    /**
     * @property int $id
     * @property string $tag_name
     * @property int $product_id
     * @method static _IH_ProductTag_QB onWriteConnection()
     * @method _IH_ProductTag_QB newQuery()
     * @method static _IH_ProductTag_QB on(null|string $connection = null)
     * @method static _IH_ProductTag_QB query()
     * @method static _IH_ProductTag_QB with(array|string $relations)
     * @method _IH_ProductTag_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductTag_C|ProductTag[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id
     * @mixin _IH_ProductTag_QB
     */
    class ProductTag extends Model {}

    /**
     * @method static _IH_ProductUnit_QB onWriteConnection()
     * @method _IH_ProductUnit_QB newQuery()
     * @method static _IH_ProductUnit_QB on(null|string $connection = null)
     * @method static _IH_ProductUnit_QB query()
     * @method static _IH_ProductUnit_QB with(array|string $relations)
     * @method _IH_ProductUnit_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductUnit_C|ProductUnit[] all()
     * @mixin _IH_ProductUnit_QB
     */
    class ProductUnit extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property int $unit_id
     * @property float $quantity
     * @method static _IH_ProductUom_QB onWriteConnection()
     * @method _IH_ProductUom_QB newQuery()
     * @method static _IH_ProductUom_QB on(null|string $connection = null)
     * @method static _IH_ProductUom_QB query()
     * @method static _IH_ProductUom_QB with(array|string $relations)
     * @method _IH_ProductUom_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductUom_C|ProductUom[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id|unit_id,\Modules\Attributes\Entities\Unit,id
     * @mixin _IH_ProductUom_QB
     */
    class ProductUom extends Model {}
}
