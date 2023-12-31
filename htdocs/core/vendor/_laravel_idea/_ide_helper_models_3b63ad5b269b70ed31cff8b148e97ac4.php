<?php //3974969a85d0175eefdb55817838170e
/** @noinspection all */

namespace Modules\Badge\Entities {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Modules\Badge\Entities\_IH_Badge_C;
    use LaravelIdea\Helper\Modules\Badge\Entities\_IH_Badge_QB;

    /**
     * @property int $id
     * @property string|null $name
     * @property int|null $image
     * @property string|null $for
     * @property int|null $sale_count
     * @property int|null $type
     * @property string|null $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @method static _IH_Badge_QB onWriteConnection()
     * @method _IH_Badge_QB newQuery()
     * @method static _IH_Badge_QB on(null|string $connection = null)
     * @method static _IH_Badge_QB query()
     * @method static _IH_Badge_QB with(array|string $relations)
     * @method _IH_Badge_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Badge_C|Badge[] all()
     * @foreignLinks id,\Modules\Product\Entities\Product,badge_id
     * @mixin _IH_Badge_QB
     */
    class Badge extends Model {}
}
