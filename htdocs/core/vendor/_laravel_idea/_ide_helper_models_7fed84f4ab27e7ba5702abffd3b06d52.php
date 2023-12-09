<?php //eaa2bf7d588d5e1fb26b726c7151b6d3
/** @noinspection all */

namespace Gloudemans\Tests\Shoppingcart\Fixtures {

    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\Gloudemans\Tests\Shoppingcart\Fixtures\_IH_BuyableProductTrait_C;
    use LaravelIdea\Helper\Gloudemans\Tests\Shoppingcart\Fixtures\_IH_BuyableProductTrait_QB;
    use LaravelIdea\Helper\Gloudemans\Tests\Shoppingcart\Fixtures\_IH_BuyableProduct_C;
    use LaravelIdea\Helper\Gloudemans\Tests\Shoppingcart\Fixtures\_IH_BuyableProduct_QB;

    /**
     * @method static _IH_BuyableProduct_QB onWriteConnection()
     * @method _IH_BuyableProduct_QB newQuery()
     * @method static _IH_BuyableProduct_QB on(null|string $connection = null)
     * @method static _IH_BuyableProduct_QB query()
     * @method static _IH_BuyableProduct_QB with(array|string $relations)
     * @method _IH_BuyableProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BuyableProduct_C|BuyableProduct[] all()
     * @mixin _IH_BuyableProduct_QB
     */
    class BuyableProduct extends Model {}

    /**
     * @method static _IH_BuyableProductTrait_QB onWriteConnection()
     * @method _IH_BuyableProductTrait_QB newQuery()
     * @method static _IH_BuyableProductTrait_QB on(null|string $connection = null)
     * @method static _IH_BuyableProductTrait_QB query()
     * @method static _IH_BuyableProductTrait_QB with(array|string $relations)
     * @method _IH_BuyableProductTrait_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BuyableProductTrait_C|BuyableProductTrait[] all()
     * @mixin _IH_BuyableProductTrait_QB
     */
    class BuyableProductTrait extends Model {}
}
