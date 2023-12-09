<?php //edcad5ef826d1f638a477e24d681db85
/** @noinspection all */

namespace Modules\CountryManage\Entities {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Modules\CountryManage\Entities\_IH_Country_C;
    use LaravelIdea\Helper\Modules\CountryManage\Entities\_IH_Country_QB;
    use LaravelIdea\Helper\Modules\CountryManage\Entities\_IH_State_C;
    use LaravelIdea\Helper\Modules\CountryManage\Entities\_IH_State_QB;

    /**
     * @property int $id
     * @property string $name
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_State_C|State[] $states
     * @property-read int $states_count
     * @method HasMany|_IH_State_QB states()
     * @method static _IH_Country_QB onWriteConnection()
     * @method _IH_Country_QB newQuery()
     * @method static _IH_Country_QB on(null|string $connection = null)
     * @method static _IH_Country_QB query()
     * @method static _IH_Country_QB with(array|string $relations)
     * @method _IH_Country_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Country_C|Country[] all()
     * @foreignLinks id,\Modules\CountryManage\Entities\State,country_id|id,\Modules\TaxModule\Entities\CountryTax,country_id|id,\Modules\TaxModule\Entities\StateTax,country_id
     * @mixin _IH_Country_QB
     */
    class Country extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property int $country_id
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Country $country
     * @method BelongsTo|_IH_Country_QB country()
     * @method static _IH_State_QB onWriteConnection()
     * @method _IH_State_QB newQuery()
     * @method static _IH_State_QB on(null|string $connection = null)
     * @method static _IH_State_QB query()
     * @method static _IH_State_QB with(array|string $relations)
     * @method _IH_State_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_State_C|State[] all()
     * @ownLinks country_id,\Modules\CountryManage\Entities\Country,id
     * @foreignLinks id,\Modules\TaxModule\Entities\StateTax,state_id
     * @mixin _IH_State_QB
     */
    class State extends Model {}
}
