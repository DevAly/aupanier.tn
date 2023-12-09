<?php //024efaf070553c548732d1c49d298048
/** @noinspection all */

namespace Modules\Service\Entities {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Modules\Service\Entities\_IH_ServiceCategory_C;
    use LaravelIdea\Helper\Modules\Service\Entities\_IH_ServiceCategory_QB;
    use LaravelIdea\Helper\Modules\Service\Entities\_IH_Service_C;
    use LaravelIdea\Helper\Modules\Service\Entities\_IH_Service_QB;

    /**
     * @property int $id
     * @property int $category_id
     * @property string $title
     * @property string $slug
     * @property string $description
     * @property string $image
     * @property string|null $price_plan
     * @property string|null $meta_tag
     * @property string|null $meta_description
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read mixed[] $translations attribute
     * @property ServiceCategory $category
     * @method BelongsTo|_IH_ServiceCategory_QB category()
     * @method static _IH_Service_QB onWriteConnection()
     * @method _IH_Service_QB newQuery()
     * @method static _IH_Service_QB on(null|string $connection = null)
     * @method static _IH_Service_QB query()
     * @method static _IH_Service_QB with(array|string $relations)
     * @method _IH_Service_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Service_C|Service[] all()
     * @ownLinks category_id,\Modules\Attributes\Entities\Category,id
     * @mixin _IH_Service_QB
     */
    class Service extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read mixed[] $translations attribute
     * @method static _IH_ServiceCategory_QB onWriteConnection()
     * @method _IH_ServiceCategory_QB newQuery()
     * @method static _IH_ServiceCategory_QB on(null|string $connection = null)
     * @method static _IH_ServiceCategory_QB query()
     * @method static _IH_ServiceCategory_QB with(array|string $relations)
     * @method _IH_ServiceCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ServiceCategory_C|ServiceCategory[] all()
     * @mixin _IH_ServiceCategory_QB
     */
    class ServiceCategory extends Model {}
}
