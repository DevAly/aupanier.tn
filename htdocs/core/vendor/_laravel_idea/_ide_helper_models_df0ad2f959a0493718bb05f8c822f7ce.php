<?php //6f2cca4e805412d41cfa5513b679783d
/** @noinspection all */

namespace Modules\NewsLetter\Entities {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Modules\NewsLetter\Entities\_IH_NewsLetter_C;
    use LaravelIdea\Helper\Modules\NewsLetter\Entities\_IH_NewsLetter_QB;

    /**
     * @property int $id
     * @property string $email
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $token
     * @property string|null $verified
     * @method static _IH_NewsLetter_QB onWriteConnection()
     * @method _IH_NewsLetter_QB newQuery()
     * @method static _IH_NewsLetter_QB on(null|string $connection = null)
     * @method static _IH_NewsLetter_QB query()
     * @method static _IH_NewsLetter_QB with(array|string $relations)
     * @method _IH_NewsLetter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_NewsLetter_C|NewsLetter[] all()
     * @mixin _IH_NewsLetter_QB
     */
    class NewsLetter extends Model {}
}
