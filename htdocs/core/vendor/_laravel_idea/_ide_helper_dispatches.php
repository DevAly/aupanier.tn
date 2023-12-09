<?php //e5f9ab028f8c6781882e15ce61a469f8
/** @noinspection all */

namespace App\Events {

    use App\Models\User;
    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch($message)
     * @method static PendingBroadcast broadcast($message)
     */
    class SupportMessage {}

    /**
     * @method static void dispatch(User $user, $subdomain, $theme = 'theme-1')
     * @method static PendingBroadcast broadcast(User $user, $subdomain, $theme = 'theme-1')
     */
    class TenantRegisterEvent {}
}

namespace App\Jobs {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch($details)
     * @method static void dispatchNow($details)
     */
    class PlaceOrderMailJob {}

    /**
     * @method static PendingDispatch dispatch($details)
     * @method static void dispatchNow($details)
     */
    class TenantCredentialJob {}
}

namespace Illuminate\Foundation\Console {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(array $data)
     * @method static void dispatchNow(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Laravel\SerializableClosure\SerializableClosure;

    /**
     * @method static PendingDispatch dispatch(SerializableClosure $closure)
     * @method static void dispatchNow(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace Stancl\Tenancy\Jobs {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Stancl\Tenancy\Contracts\TenantWithDatabase;

    /**
     * @method static PendingDispatch dispatch(TenantWithDatabase $tenant)
     * @method static void dispatchNow(TenantWithDatabase $tenant)
     */
    class CreateDatabase {}

    /**
     * @method static PendingDispatch dispatch(TenantWithDatabase $tenant)
     * @method static void dispatchNow(TenantWithDatabase $tenant)
     */
    class DeleteDatabase {}

    /**
     * @method static PendingDispatch dispatch(TenantWithDatabase $tenant)
     * @method static void dispatchNow(TenantWithDatabase $tenant)
     */
    class MigrateDatabase {}

    /**
     * @method static PendingDispatch dispatch(TenantWithDatabase $tenant)
     * @method static void dispatchNow(TenantWithDatabase $tenant)
     */
    class SeedDatabase {}
}

namespace Tzsk\Payu\Events {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Tzsk\Payu\Models\PayuTransaction;

    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static void dispatchNow(PayuTransaction $transaction)
     */
    class TransactionFailed {}

    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static void dispatchNow(PayuTransaction $transaction)
     */
    class TransactionInitiated {}

    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static void dispatchNow(PayuTransaction $transaction)
     */
    class TransactionInvalidated {}

    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static void dispatchNow(PayuTransaction $transaction)
     */
    class TransactionSuccessful {}
}

namespace Tzsk\Payu\Jobs {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Tzsk\Payu\Models\PayuTransaction;

    /**
     * @method static PendingDispatch dispatch(PayuTransaction $transaction)
     * @method static void dispatchNow(PayuTransaction $transaction)
     */
    class VerifyTransaction {}
}
