<?php //eaeae7ee5bab72dbdc51302fa5c44155
/** @noinspection all */

namespace Modules\TaxModule\Entities {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Modules\CountryManage\Entities\_IH_Country_QB;
    use LaravelIdea\Helper\Modules\CountryManage\Entities\_IH_State_QB;
    use LaravelIdea\Helper\Modules\TaxModule\Entities\_IH_CountryTax_C;
    use LaravelIdea\Helper\Modules\TaxModule\Entities\_IH_CountryTax_QB;
    use LaravelIdea\Helper\Modules\TaxModule\Entities\_IH_StateTax_C;
    use LaravelIdea\Helper\Modules\TaxModule\Entities\_IH_StateTax_QB;
    use Modules\CountryManage\Entities\Country;
    use Modules\CountryManage\Entities\State;

    /**
     * @property int $id
     * @property int $country_id
     * @property float $tax_percentage
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Country $country
     * @method BelongsTo|_IH_Country_QB country()
     * @method static _IH_CountryTax_QB onWriteConnection()
     * @method _IH_CountryTax_QB newQuery()
     * @method static _IH_CountryTax_QB on(null|string $connection = null)
     * @method static _IH_CountryTax_QB query()
     * @method static _IH_CountryTax_QB with(array|string $relations)
     * @method _IH_CountryTax_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CountryTax_C|CountryTax[] all()
     * @ownLinks country_id,\Modules\CountryManage\Entities\Country,id
     * @mixin _IH_CountryTax_QB
     */
    class CountryTax extends Model {}

    /**
     * @property int $id
     * @property int $state_id
     * @property int $country_id
     * @property float $tax_percentage
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property State $state
     * @method BelongsTo|_IH_State_QB state()
     * @method static _IH_StateTax_QB onWriteConnection()
     * @method _IH_StateTax_QB newQuery()
     * @method static _IH_StateTax_QB on(null|string $connection = null)
     * @method static _IH_StateTax_QB query()
     * @method static _IH_StateTax_QB with(array|string $relations)
     * @method _IH_StateTax_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_StateTax_C|StateTax[] all()
     * @ownLinks state_id,\Modules\CountryManage\Entities\State,id|country_id,\Modules\CountryManage\Entities\Country,id
     * @mixin _IH_StateTax_QB
     */
    class StateTax extends Model {}
}
