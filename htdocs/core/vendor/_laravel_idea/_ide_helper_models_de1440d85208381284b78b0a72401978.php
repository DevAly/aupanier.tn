<?php //128fdbcccd0e2d1fe5111d3d33756d9e
/** @noinspection all */

namespace Modules\Campaign\Entities {

    use App\Models\Admin;
    use App\Models\MediaUploader;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Admin_QB;
    use LaravelIdea\Helper\App\Models\_IH_MediaUploader_QB;
    use LaravelIdea\Helper\Modules\Campaign\Entities\_IH_CampaignProduct_C;
    use LaravelIdea\Helper\Modules\Campaign\Entities\_IH_CampaignProduct_QB;
    use LaravelIdea\Helper\Modules\Campaign\Entities\_IH_CampaignSoldProduct_C;
    use LaravelIdea\Helper\Modules\Campaign\Entities\_IH_CampaignSoldProduct_QB;
    use LaravelIdea\Helper\Modules\Campaign\Entities\_IH_Campaign_C;
    use LaravelIdea\Helper\Modules\Campaign\Entities\_IH_Campaign_QB;
    use LaravelIdea\Helper\Modules\Product\Entities\_IH_Product_QB;
    use Modules\Product\Entities\Product;

    /**
     * @property int $id
     * @property string $title
     * @property string|null $subtitle
     * @property int|null $image
     * @property Carbon|null $start_date
     * @property Carbon|null $end_date
     * @property string|null $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $admin_id
     * @property int|null $vendor_id
     * @property string|null $type
     * @property Admin|null $admin
     * @method HasOne|_IH_Admin_QB admin()
     * @property MediaUploader|null $campaignImage
     * @method HasOne|_IH_MediaUploader_QB campaignImage()
     * @property _IH_CampaignProduct_C|CampaignProduct[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_CampaignProduct_QB products()
     * @method static _IH_Campaign_QB onWriteConnection()
     * @method _IH_Campaign_QB newQuery()
     * @method static _IH_Campaign_QB on(null|string $connection = null)
     * @method static _IH_Campaign_QB query()
     * @method static _IH_Campaign_QB with(array|string $relations)
     * @method _IH_Campaign_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Campaign_C|Campaign[] all()
     * @ownLinks admin_id,\App\Models\Admin,id
     * @foreignLinks id,\Modules\Campaign\Entities\CampaignProduct,campaign_id
     * @mixin _IH_Campaign_QB
     */
    class Campaign extends Model {}

    /**
     * @property int $id
     * @property int $product_id
     * @property int|null $campaign_id
     * @property float|null $campaign_price
     * @property int|null $units_for_sale
     * @property Carbon|null $start_date
     * @property Carbon|null $end_date
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Campaign|null $campaign
     * @method BelongsTo|_IH_Campaign_QB campaign()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_CampaignProduct_QB onWriteConnection()
     * @method _IH_CampaignProduct_QB newQuery()
     * @method static _IH_CampaignProduct_QB on(null|string $connection = null)
     * @method static _IH_CampaignProduct_QB query()
     * @method static _IH_CampaignProduct_QB with(array|string $relations)
     * @method _IH_CampaignProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CampaignProduct_C|CampaignProduct[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id|campaign_id,\Modules\Campaign\Entities\Campaign,id
     * @mixin _IH_CampaignProduct_QB
     */
    class CampaignProduct extends Model {}

    /**
     * @property int $id
     * @property int|null $product_id
     * @property int|null $sold_count
     * @property float|null $total_amount
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_CampaignSoldProduct_QB onWriteConnection()
     * @method _IH_CampaignSoldProduct_QB newQuery()
     * @method static _IH_CampaignSoldProduct_QB on(null|string $connection = null)
     * @method static _IH_CampaignSoldProduct_QB query()
     * @method static _IH_CampaignSoldProduct_QB with(array|string $relations)
     * @method _IH_CampaignSoldProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CampaignSoldProduct_C|CampaignSoldProduct[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id
     * @mixin _IH_CampaignSoldProduct_QB
     */
    class CampaignSoldProduct extends Model {}
}
