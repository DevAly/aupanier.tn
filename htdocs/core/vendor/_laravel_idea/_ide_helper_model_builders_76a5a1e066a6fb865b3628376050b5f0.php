<?php //6fa5dbe39066a31661d4f0be04d4a844
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Admin;
    use App\Models\Brand;
    use App\Models\ContactMessage;
    use App\Models\CustomDomain;
    use App\Models\FormBuilder;
    use App\Models\Language;
    use App\Models\MediaUploader;
    use App\Models\Menu;
    use App\Models\MetaInfo;
    use App\Models\Newsletter;
    use App\Models\Order;
    use App\Models\Page;
    use App\Models\PageBuilder;
    use App\Models\PaymentGateway;
    use App\Models\PaymentLogs;
    use App\Models\PlanFeature;
    use App\Models\PricePlan;
    use App\Models\ProductReviews;
    use App\Models\StaticOption;
    use App\Models\StaticOptionCentral;
    use App\Models\Status;
    use App\Models\SupportDepartment;
    use App\Models\SupportTicket;
    use App\Models\SupportTicketMessage;
    use App\Models\Tenant;
    use App\Models\Testimonial;
    use App\Models\Themes;
    use App\Models\TopbarInfo;
    use App\Models\User;
    use App\Models\UserDomain;
    use App\Models\Widgets;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role;
    use Stancl\Tenancy\Database\TenantCollection;

    /**
     * @method Admin|null getOrPut($key, $value)
     * @method Admin|$this shift(int $count = 1)
     * @method Admin|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Admin|$this pop(int $count = 1)
     * @method Admin|null pull($key, \Closure $default = null)
     * @method Admin|null last(callable $callback = null, \Closure $default = null)
     * @method Admin|$this random(callable|int|null $number = null)
     * @method Admin|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Admin|null get($key, \Closure $default = null)
     * @method Admin|null first(callable $callback = null, \Closure $default = null)
     * @method Admin|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Admin|null find($key, $default = null)
     * @method Admin[] all()
     */
    class _IH_Admin_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Admin[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Admin_QB whereId($value)
     * @method _IH_Admin_QB whereName($value)
     * @method _IH_Admin_QB whereUsername($value)
     * @method _IH_Admin_QB whereEmailVerified($value)
     * @method _IH_Admin_QB whereEmailVerifyToken($value)
     * @method _IH_Admin_QB whereMobile($value)
     * @method _IH_Admin_QB whereEmail($value)
     * @method _IH_Admin_QB whereImage($value)
     * @method _IH_Admin_QB whereEmailVerifiedAt($value)
     * @method _IH_Admin_QB wherePassword($value)
     * @method _IH_Admin_QB whereRememberToken($value)
     * @method _IH_Admin_QB whereCreatedAt($value)
     * @method _IH_Admin_QB whereUpdatedAt($value)
     * @method Admin baseSole(array|string $columns = ['*'])
     * @method Admin create(array $attributes = [])
     * @method _IH_Admin_C|Admin[] cursor()
     * @method Admin|null|_IH_Admin_C|Admin[] find($id, array|string $columns = ['*'])
     * @method _IH_Admin_C|Admin[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Admin|_IH_Admin_C|Admin[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Admin|_IH_Admin_C|Admin[] findOrFail($id, array|string $columns = ['*'])
     * @method Admin|_IH_Admin_C|Admin[] findOrNew($id, array|string $columns = ['*'])
     * @method Admin first(array|string $columns = ['*'])
     * @method Admin firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Admin firstOrCreate(array $attributes = [], array $values = [])
     * @method Admin firstOrFail(array|string $columns = ['*'])
     * @method Admin firstOrNew(array $attributes = [], array $values = [])
     * @method Admin firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Admin forceCreate(array $attributes)
     * @method _IH_Admin_C|Admin[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Admin_C|Admin[] get(array|string $columns = ['*'])
     * @method Admin getModel()
     * @method Admin[] getModels(array|string $columns = ['*'])
     * @method _IH_Admin_C|Admin[] hydrate(array $items)
     * @method Admin make(array $attributes = [])
     * @method Admin newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Admin[]|_IH_Admin_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Admin[]|_IH_Admin_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Admin sole(array|string $columns = ['*'])
     * @method Admin updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Admin_QB permission(array|Collection|int|Permission|string $permissions)
     * @method _IH_Admin_QB role(array|Collection|int|Role|string $roles, string $guard = null)
     */
    class _IH_Admin_QB extends _BaseBuilder {}

    /**
     * @method Brand|null getOrPut($key, $value)
     * @method Brand|$this shift(int $count = 1)
     * @method Brand|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Brand|$this pop(int $count = 1)
     * @method Brand|null pull($key, \Closure $default = null)
     * @method Brand|null last(callable $callback = null, \Closure $default = null)
     * @method Brand|$this random(callable|int|null $number = null)
     * @method Brand|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Brand|null get($key, \Closure $default = null)
     * @method Brand|null first(callable $callback = null, \Closure $default = null)
     * @method Brand|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Brand|null find($key, $default = null)
     * @method Brand[] all()
     */
    class _IH_Brand_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Brand[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Brand_QB whereId($value)
     * @method _IH_Brand_QB whereUrl($value)
     * @method _IH_Brand_QB whereImage($value)
     * @method _IH_Brand_QB whereStatus($value)
     * @method _IH_Brand_QB whereCreatedAt($value)
     * @method _IH_Brand_QB whereUpdatedAt($value)
     * @method _IH_Brand_QB whereName($value)
     * @method _IH_Brand_QB whereSlug($value)
     * @method _IH_Brand_QB whereImageId($value)
     * @method _IH_Brand_QB whereBannerId($value)
     * @method _IH_Brand_QB whereTitle($value)
     * @method _IH_Brand_QB whereDeletedAt($value)
     * @method Brand baseSole(array|string $columns = ['*'])
     * @method Brand create(array $attributes = [])
     * @method _IH_Brand_C|Brand[] cursor()
     * @method Brand|null|_IH_Brand_C|Brand[] find($id, array|string $columns = ['*'])
     * @method _IH_Brand_C|Brand[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Brand|_IH_Brand_C|Brand[] findOrFail($id, array|string $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOrNew($id, array|string $columns = ['*'])
     * @method Brand first(array|string $columns = ['*'])
     * @method Brand firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Brand firstOrCreate(array $attributes = [], array $values = [])
     * @method Brand firstOrFail(array|string $columns = ['*'])
     * @method Brand firstOrNew(array $attributes = [], array $values = [])
     * @method Brand firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Brand forceCreate(array $attributes)
     * @method _IH_Brand_C|Brand[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Brand_C|Brand[] get(array|string $columns = ['*'])
     * @method Brand getModel()
     * @method Brand[] getModels(array|string $columns = ['*'])
     * @method _IH_Brand_C|Brand[] hydrate(array $items)
     * @method Brand make(array $attributes = [])
     * @method Brand newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Brand[]|_IH_Brand_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Brand[]|_IH_Brand_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Brand sole(array|string $columns = ['*'])
     * @method Brand updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Brand_QB extends _BaseBuilder {}

    /**
     * @method ContactMessage|null getOrPut($key, $value)
     * @method ContactMessage|$this shift(int $count = 1)
     * @method ContactMessage|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ContactMessage|$this pop(int $count = 1)
     * @method ContactMessage|null pull($key, \Closure $default = null)
     * @method ContactMessage|null last(callable $callback = null, \Closure $default = null)
     * @method ContactMessage|$this random(callable|int|null $number = null)
     * @method ContactMessage|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ContactMessage|null get($key, \Closure $default = null)
     * @method ContactMessage|null first(callable $callback = null, \Closure $default = null)
     * @method ContactMessage|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ContactMessage|null find($key, $default = null)
     * @method ContactMessage[] all()
     */
    class _IH_ContactMessage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ContactMessage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ContactMessage_QB whereId($value)
     * @method _IH_ContactMessage_QB whereFormBuilderId($value)
     * @method _IH_ContactMessage_QB whereFields($value)
     * @method _IH_ContactMessage_QB whereAttachment($value)
     * @method _IH_ContactMessage_QB whereStatus($value)
     * @method _IH_ContactMessage_QB whereCreatedAt($value)
     * @method _IH_ContactMessage_QB whereUpdatedAt($value)
     * @method ContactMessage baseSole(array|string $columns = ['*'])
     * @method ContactMessage create(array $attributes = [])
     * @method _IH_ContactMessage_C|ContactMessage[] cursor()
     * @method ContactMessage|null|_IH_ContactMessage_C|ContactMessage[] find($id, array|string $columns = ['*'])
     * @method _IH_ContactMessage_C|ContactMessage[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ContactMessage|_IH_ContactMessage_C|ContactMessage[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ContactMessage|_IH_ContactMessage_C|ContactMessage[] findOrFail($id, array|string $columns = ['*'])
     * @method ContactMessage|_IH_ContactMessage_C|ContactMessage[] findOrNew($id, array|string $columns = ['*'])
     * @method ContactMessage first(array|string $columns = ['*'])
     * @method ContactMessage firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ContactMessage firstOrCreate(array $attributes = [], array $values = [])
     * @method ContactMessage firstOrFail(array|string $columns = ['*'])
     * @method ContactMessage firstOrNew(array $attributes = [], array $values = [])
     * @method ContactMessage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ContactMessage forceCreate(array $attributes)
     * @method _IH_ContactMessage_C|ContactMessage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ContactMessage_C|ContactMessage[] get(array|string $columns = ['*'])
     * @method ContactMessage getModel()
     * @method ContactMessage[] getModels(array|string $columns = ['*'])
     * @method _IH_ContactMessage_C|ContactMessage[] hydrate(array $items)
     * @method ContactMessage make(array $attributes = [])
     * @method ContactMessage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ContactMessage[]|_IH_ContactMessage_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ContactMessage[]|_IH_ContactMessage_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ContactMessage sole(array|string $columns = ['*'])
     * @method ContactMessage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ContactMessage_QB extends _BaseBuilder {}

    /**
     * @method CustomDomain|null getOrPut($key, $value)
     * @method CustomDomain|$this shift(int $count = 1)
     * @method CustomDomain|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CustomDomain|$this pop(int $count = 1)
     * @method CustomDomain|null pull($key, \Closure $default = null)
     * @method CustomDomain|null last(callable $callback = null, \Closure $default = null)
     * @method CustomDomain|$this random(callable|int|null $number = null)
     * @method CustomDomain|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CustomDomain|null get($key, \Closure $default = null)
     * @method CustomDomain|null first(callable $callback = null, \Closure $default = null)
     * @method CustomDomain|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CustomDomain|null find($key, $default = null)
     * @method CustomDomain[] all()
     */
    class _IH_CustomDomain_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomDomain[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_CustomDomain_QB whereId($value)
     * @method _IH_CustomDomain_QB whereUserId($value)
     * @method _IH_CustomDomain_QB whereCustomDomain($value)
     * @method _IH_CustomDomain_QB whereCustomDomainStatus($value)
     * @method _IH_CustomDomain_QB whereCreatedAt($value)
     * @method _IH_CustomDomain_QB whereUpdatedAt($value)
     * @method _IH_CustomDomain_QB whereUniqueKey($value)
     * @method _IH_CustomDomain_QB whereOldDomain($value)
     * @method CustomDomain baseSole(array|string $columns = ['*'])
     * @method CustomDomain create(array $attributes = [])
     * @method _IH_CustomDomain_C|CustomDomain[] cursor()
     * @method CustomDomain|null|_IH_CustomDomain_C|CustomDomain[] find($id, array|string $columns = ['*'])
     * @method _IH_CustomDomain_C|CustomDomain[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CustomDomain|_IH_CustomDomain_C|CustomDomain[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CustomDomain|_IH_CustomDomain_C|CustomDomain[] findOrFail($id, array|string $columns = ['*'])
     * @method CustomDomain|_IH_CustomDomain_C|CustomDomain[] findOrNew($id, array|string $columns = ['*'])
     * @method CustomDomain first(array|string $columns = ['*'])
     * @method CustomDomain firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CustomDomain firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomDomain firstOrFail(array|string $columns = ['*'])
     * @method CustomDomain firstOrNew(array $attributes = [], array $values = [])
     * @method CustomDomain firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomDomain forceCreate(array $attributes)
     * @method _IH_CustomDomain_C|CustomDomain[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomDomain_C|CustomDomain[] get(array|string $columns = ['*'])
     * @method CustomDomain getModel()
     * @method CustomDomain[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomDomain_C|CustomDomain[] hydrate(array $items)
     * @method CustomDomain make(array $attributes = [])
     * @method CustomDomain newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomDomain[]|_IH_CustomDomain_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomDomain[]|_IH_CustomDomain_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomDomain sole(array|string $columns = ['*'])
     * @method CustomDomain updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CustomDomain_QB extends _BaseBuilder {}

    /**
     * @method FormBuilder|null getOrPut($key, $value)
     * @method FormBuilder|$this shift(int $count = 1)
     * @method FormBuilder|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FormBuilder|$this pop(int $count = 1)
     * @method FormBuilder|null pull($key, \Closure $default = null)
     * @method FormBuilder|null last(callable $callback = null, \Closure $default = null)
     * @method FormBuilder|$this random(callable|int|null $number = null)
     * @method FormBuilder|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FormBuilder|null get($key, \Closure $default = null)
     * @method FormBuilder|null first(callable $callback = null, \Closure $default = null)
     * @method FormBuilder|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FormBuilder|null find($key, $default = null)
     * @method FormBuilder[] all()
     */
    class _IH_FormBuilder_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FormBuilder[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_FormBuilder_QB whereId($value)
     * @method _IH_FormBuilder_QB whereTitle($value)
     * @method _IH_FormBuilder_QB whereEmail($value)
     * @method _IH_FormBuilder_QB whereButtonText($value)
     * @method _IH_FormBuilder_QB whereFields($value)
     * @method _IH_FormBuilder_QB whereSuccessMessage($value)
     * @method _IH_FormBuilder_QB whereCreatedAt($value)
     * @method _IH_FormBuilder_QB whereUpdatedAt($value)
     * @method FormBuilder baseSole(array|string $columns = ['*'])
     * @method FormBuilder create(array $attributes = [])
     * @method _IH_FormBuilder_C|FormBuilder[] cursor()
     * @method FormBuilder|null|_IH_FormBuilder_C|FormBuilder[] find($id, array|string $columns = ['*'])
     * @method _IH_FormBuilder_C|FormBuilder[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FormBuilder|_IH_FormBuilder_C|FormBuilder[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormBuilder|_IH_FormBuilder_C|FormBuilder[] findOrFail($id, array|string $columns = ['*'])
     * @method FormBuilder|_IH_FormBuilder_C|FormBuilder[] findOrNew($id, array|string $columns = ['*'])
     * @method FormBuilder first(array|string $columns = ['*'])
     * @method FormBuilder firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormBuilder firstOrCreate(array $attributes = [], array $values = [])
     * @method FormBuilder firstOrFail(array|string $columns = ['*'])
     * @method FormBuilder firstOrNew(array $attributes = [], array $values = [])
     * @method FormBuilder firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FormBuilder forceCreate(array $attributes)
     * @method _IH_FormBuilder_C|FormBuilder[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FormBuilder_C|FormBuilder[] get(array|string $columns = ['*'])
     * @method FormBuilder getModel()
     * @method FormBuilder[] getModels(array|string $columns = ['*'])
     * @method _IH_FormBuilder_C|FormBuilder[] hydrate(array $items)
     * @method FormBuilder make(array $attributes = [])
     * @method FormBuilder newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FormBuilder[]|_IH_FormBuilder_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FormBuilder[]|_IH_FormBuilder_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormBuilder sole(array|string $columns = ['*'])
     * @method FormBuilder updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FormBuilder_QB extends _BaseBuilder {}

    /**
     * @method Language|null getOrPut($key, $value)
     * @method Language|$this shift(int $count = 1)
     * @method Language|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Language|$this pop(int $count = 1)
     * @method Language|null pull($key, \Closure $default = null)
     * @method Language|null last(callable $callback = null, \Closure $default = null)
     * @method Language|$this random(callable|int|null $number = null)
     * @method Language|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Language|null get($key, \Closure $default = null)
     * @method Language|null first(callable $callback = null, \Closure $default = null)
     * @method Language|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Language|null find($key, $default = null)
     * @method Language[] all()
     */
    class _IH_Language_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Language[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Language_QB whereId($value)
     * @method _IH_Language_QB whereName($value)
     * @method _IH_Language_QB whereSlug($value)
     * @method _IH_Language_QB whereDirection($value)
     * @method _IH_Language_QB whereStatus($value)
     * @method _IH_Language_QB whereDefault($value)
     * @method _IH_Language_QB whereCreatedAt($value)
     * @method _IH_Language_QB whereUpdatedAt($value)
     * @method Language baseSole(array|string $columns = ['*'])
     * @method Language create(array $attributes = [])
     * @method _IH_Language_C|Language[] cursor()
     * @method Language|null|_IH_Language_C|Language[] find($id, array|string $columns = ['*'])
     * @method _IH_Language_C|Language[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Language|_IH_Language_C|Language[] findOrFail($id, array|string $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOrNew($id, array|string $columns = ['*'])
     * @method Language first(array|string $columns = ['*'])
     * @method Language firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Language firstOrCreate(array $attributes = [], array $values = [])
     * @method Language firstOrFail(array|string $columns = ['*'])
     * @method Language firstOrNew(array $attributes = [], array $values = [])
     * @method Language firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Language forceCreate(array $attributes)
     * @method _IH_Language_C|Language[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Language_C|Language[] get(array|string $columns = ['*'])
     * @method Language getModel()
     * @method Language[] getModels(array|string $columns = ['*'])
     * @method _IH_Language_C|Language[] hydrate(array $items)
     * @method Language make(array $attributes = [])
     * @method Language newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Language[]|_IH_Language_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Language[]|_IH_Language_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Language sole(array|string $columns = ['*'])
     * @method Language updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Language_QB extends _BaseBuilder {}

    /**
     * @method MediaUploader|null getOrPut($key, $value)
     * @method MediaUploader|$this shift(int $count = 1)
     * @method MediaUploader|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MediaUploader|$this pop(int $count = 1)
     * @method MediaUploader|null pull($key, \Closure $default = null)
     * @method MediaUploader|null last(callable $callback = null, \Closure $default = null)
     * @method MediaUploader|$this random(callable|int|null $number = null)
     * @method MediaUploader|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method MediaUploader|null get($key, \Closure $default = null)
     * @method MediaUploader|null first(callable $callback = null, \Closure $default = null)
     * @method MediaUploader|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MediaUploader|null find($key, $default = null)
     * @method MediaUploader[] all()
     */
    class _IH_MediaUploader_C extends _BaseCollection {
        /**
         * @param int $size
         * @return MediaUploader[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_MediaUploader_QB whereId($value)
     * @method _IH_MediaUploader_QB whereTitle($value)
     * @method _IH_MediaUploader_QB wherePath($value)
     * @method _IH_MediaUploader_QB whereAlt($value)
     * @method _IH_MediaUploader_QB whereSize($value)
     * @method _IH_MediaUploader_QB whereUserType($value)
     * @method _IH_MediaUploader_QB whereUserId($value)
     * @method _IH_MediaUploader_QB whereDimensions($value)
     * @method _IH_MediaUploader_QB whereCreatedAt($value)
     * @method _IH_MediaUploader_QB whereUpdatedAt($value)
     * @method MediaUploader baseSole(array|string $columns = ['*'])
     * @method MediaUploader create(array $attributes = [])
     * @method _IH_MediaUploader_C|MediaUploader[] cursor()
     * @method MediaUploader|null|_IH_MediaUploader_C|MediaUploader[] find($id, array|string $columns = ['*'])
     * @method _IH_MediaUploader_C|MediaUploader[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MediaUploader|_IH_MediaUploader_C|MediaUploader[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MediaUploader|_IH_MediaUploader_C|MediaUploader[] findOrFail($id, array|string $columns = ['*'])
     * @method MediaUploader|_IH_MediaUploader_C|MediaUploader[] findOrNew($id, array|string $columns = ['*'])
     * @method MediaUploader first(array|string $columns = ['*'])
     * @method MediaUploader firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MediaUploader firstOrCreate(array $attributes = [], array $values = [])
     * @method MediaUploader firstOrFail(array|string $columns = ['*'])
     * @method MediaUploader firstOrNew(array $attributes = [], array $values = [])
     * @method MediaUploader firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MediaUploader forceCreate(array $attributes)
     * @method _IH_MediaUploader_C|MediaUploader[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MediaUploader_C|MediaUploader[] get(array|string $columns = ['*'])
     * @method MediaUploader getModel()
     * @method MediaUploader[] getModels(array|string $columns = ['*'])
     * @method _IH_MediaUploader_C|MediaUploader[] hydrate(array $items)
     * @method MediaUploader make(array $attributes = [])
     * @method MediaUploader newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MediaUploader[]|_IH_MediaUploader_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|MediaUploader[]|_IH_MediaUploader_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MediaUploader sole(array|string $columns = ['*'])
     * @method MediaUploader updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MediaUploader_QB extends _BaseBuilder {}

    /**
     * @method Menu|null getOrPut($key, $value)
     * @method Menu|$this shift(int $count = 1)
     * @method Menu|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Menu|$this pop(int $count = 1)
     * @method Menu|null pull($key, \Closure $default = null)
     * @method Menu|null last(callable $callback = null, \Closure $default = null)
     * @method Menu|$this random(callable|int|null $number = null)
     * @method Menu|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Menu|null get($key, \Closure $default = null)
     * @method Menu|null first(callable $callback = null, \Closure $default = null)
     * @method Menu|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Menu|null find($key, $default = null)
     * @method Menu[] all()
     */
    class _IH_Menu_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Menu[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Menu_QB whereId($value)
     * @method _IH_Menu_QB whereTitle($value)
     * @method _IH_Menu_QB whereContent($value)
     * @method _IH_Menu_QB whereStatus($value)
     * @method _IH_Menu_QB whereCreatedAt($value)
     * @method _IH_Menu_QB whereUpdatedAt($value)
     * @method Menu baseSole(array|string $columns = ['*'])
     * @method Menu create(array $attributes = [])
     * @method _IH_Menu_C|Menu[] cursor()
     * @method Menu|null|_IH_Menu_C|Menu[] find($id, array|string $columns = ['*'])
     * @method _IH_Menu_C|Menu[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Menu|_IH_Menu_C|Menu[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Menu|_IH_Menu_C|Menu[] findOrFail($id, array|string $columns = ['*'])
     * @method Menu|_IH_Menu_C|Menu[] findOrNew($id, array|string $columns = ['*'])
     * @method Menu first(array|string $columns = ['*'])
     * @method Menu firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Menu firstOrCreate(array $attributes = [], array $values = [])
     * @method Menu firstOrFail(array|string $columns = ['*'])
     * @method Menu firstOrNew(array $attributes = [], array $values = [])
     * @method Menu firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Menu forceCreate(array $attributes)
     * @method _IH_Menu_C|Menu[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Menu_C|Menu[] get(array|string $columns = ['*'])
     * @method Menu getModel()
     * @method Menu[] getModels(array|string $columns = ['*'])
     * @method _IH_Menu_C|Menu[] hydrate(array $items)
     * @method Menu make(array $attributes = [])
     * @method Menu newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Menu[]|_IH_Menu_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Menu[]|_IH_Menu_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Menu sole(array|string $columns = ['*'])
     * @method Menu updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Menu_QB extends _BaseBuilder {}

    /**
     * @method MetaInfo|null getOrPut($key, $value)
     * @method MetaInfo|$this shift(int $count = 1)
     * @method MetaInfo|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MetaInfo|$this pop(int $count = 1)
     * @method MetaInfo|null pull($key, \Closure $default = null)
     * @method MetaInfo|null last(callable $callback = null, \Closure $default = null)
     * @method MetaInfo|$this random(callable|int|null $number = null)
     * @method MetaInfo|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method MetaInfo|null get($key, \Closure $default = null)
     * @method MetaInfo|null first(callable $callback = null, \Closure $default = null)
     * @method MetaInfo|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MetaInfo|null find($key, $default = null)
     * @method MetaInfo[] all()
     */
    class _IH_MetaInfo_C extends _BaseCollection {
        /**
         * @param int $size
         * @return MetaInfo[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_MetaInfo_QB whereId($value)
     * @method _IH_MetaInfo_QB whereTitle($value)
     * @method _IH_MetaInfo_QB whereDescription($value)
     * @method _IH_MetaInfo_QB whereImage($value)
     * @method _IH_MetaInfo_QB whereFbTitle($value)
     * @method _IH_MetaInfo_QB whereFbDescription($value)
     * @method _IH_MetaInfo_QB whereFbImage($value)
     * @method _IH_MetaInfo_QB whereTwTitle($value)
     * @method _IH_MetaInfo_QB whereTwDescription($value)
     * @method _IH_MetaInfo_QB whereTwImage($value)
     * @method _IH_MetaInfo_QB whereMetainfoableId($value)
     * @method _IH_MetaInfo_QB whereMetainfoableType($value)
     * @method _IH_MetaInfo_QB whereCreatedAt($value)
     * @method _IH_MetaInfo_QB whereUpdatedAt($value)
     * @method MetaInfo baseSole(array|string $columns = ['*'])
     * @method MetaInfo create(array $attributes = [])
     * @method _IH_MetaInfo_C|MetaInfo[] cursor()
     * @method MetaInfo|null|_IH_MetaInfo_C|MetaInfo[] find($id, array|string $columns = ['*'])
     * @method _IH_MetaInfo_C|MetaInfo[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MetaInfo|_IH_MetaInfo_C|MetaInfo[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MetaInfo|_IH_MetaInfo_C|MetaInfo[] findOrFail($id, array|string $columns = ['*'])
     * @method MetaInfo|_IH_MetaInfo_C|MetaInfo[] findOrNew($id, array|string $columns = ['*'])
     * @method MetaInfo first(array|string $columns = ['*'])
     * @method MetaInfo firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MetaInfo firstOrCreate(array $attributes = [], array $values = [])
     * @method MetaInfo firstOrFail(array|string $columns = ['*'])
     * @method MetaInfo firstOrNew(array $attributes = [], array $values = [])
     * @method MetaInfo firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MetaInfo forceCreate(array $attributes)
     * @method _IH_MetaInfo_C|MetaInfo[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MetaInfo_C|MetaInfo[] get(array|string $columns = ['*'])
     * @method MetaInfo getModel()
     * @method MetaInfo[] getModels(array|string $columns = ['*'])
     * @method _IH_MetaInfo_C|MetaInfo[] hydrate(array $items)
     * @method MetaInfo make(array $attributes = [])
     * @method MetaInfo newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MetaInfo[]|_IH_MetaInfo_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|MetaInfo[]|_IH_MetaInfo_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MetaInfo sole(array|string $columns = ['*'])
     * @method MetaInfo updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MetaInfo_QB extends _BaseBuilder {}

    /**
     * @method Newsletter|null getOrPut($key, $value)
     * @method Newsletter|$this shift(int $count = 1)
     * @method Newsletter|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Newsletter|$this pop(int $count = 1)
     * @method Newsletter|null pull($key, \Closure $default = null)
     * @method Newsletter|null last(callable $callback = null, \Closure $default = null)
     * @method Newsletter|$this random(callable|int|null $number = null)
     * @method Newsletter|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Newsletter|null get($key, \Closure $default = null)
     * @method Newsletter|null first(callable $callback = null, \Closure $default = null)
     * @method Newsletter|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Newsletter|null find($key, $default = null)
     * @method Newsletter[] all()
     */
    class _IH_Newsletter_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Newsletter[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Newsletter_QB whereId($value)
     * @method _IH_Newsletter_QB whereEmail($value)
     * @method _IH_Newsletter_QB whereCreatedAt($value)
     * @method _IH_Newsletter_QB whereUpdatedAt($value)
     * @method _IH_Newsletter_QB whereToken($value)
     * @method _IH_Newsletter_QB whereVerified($value)
     * @method Newsletter baseSole(array|string $columns = ['*'])
     * @method Newsletter create(array $attributes = [])
     * @method _IH_Newsletter_C|Newsletter[] cursor()
     * @method Newsletter|null|_IH_Newsletter_C|Newsletter[] find($id, array|string $columns = ['*'])
     * @method _IH_Newsletter_C|Newsletter[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Newsletter|_IH_Newsletter_C|Newsletter[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Newsletter|_IH_Newsletter_C|Newsletter[] findOrFail($id, array|string $columns = ['*'])
     * @method Newsletter|_IH_Newsletter_C|Newsletter[] findOrNew($id, array|string $columns = ['*'])
     * @method Newsletter first(array|string $columns = ['*'])
     * @method Newsletter firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Newsletter firstOrCreate(array $attributes = [], array $values = [])
     * @method Newsletter firstOrFail(array|string $columns = ['*'])
     * @method Newsletter firstOrNew(array $attributes = [], array $values = [])
     * @method Newsletter firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Newsletter forceCreate(array $attributes)
     * @method _IH_Newsletter_C|Newsletter[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Newsletter_C|Newsletter[] get(array|string $columns = ['*'])
     * @method Newsletter getModel()
     * @method Newsletter[] getModels(array|string $columns = ['*'])
     * @method _IH_Newsletter_C|Newsletter[] hydrate(array $items)
     * @method Newsletter make(array $attributes = [])
     * @method Newsletter newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Newsletter[]|_IH_Newsletter_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Newsletter[]|_IH_Newsletter_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Newsletter sole(array|string $columns = ['*'])
     * @method Newsletter updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Newsletter_QB extends _BaseBuilder {}

    /**
     * @method Order|null getOrPut($key, $value)
     * @method Order|$this shift(int $count = 1)
     * @method Order|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Order|$this pop(int $count = 1)
     * @method Order|null pull($key, \Closure $default = null)
     * @method Order|null last(callable $callback = null, \Closure $default = null)
     * @method Order|$this random(callable|int|null $number = null)
     * @method Order|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Order|null get($key, \Closure $default = null)
     * @method Order|null first(callable $callback = null, \Closure $default = null)
     * @method Order|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Order|null find($key, $default = null)
     * @method Order[] all()
     */
    class _IH_Order_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Order[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Order_QB whereId($value)
     * @method _IH_Order_QB whereUserId($value)
     * @method _IH_Order_QB whereCheckoutType($value)
     * @method _IH_Order_QB whereStatus($value)
     * @method _IH_Order_QB wherePaymentStatus($value)
     * @method _IH_Order_QB wherePackageId($value)
     * @method _IH_Order_QB wherePackageName($value)
     * @method _IH_Order_QB wherePackagePrice($value)
     * @method _IH_Order_QB whereCustomFields($value)
     * @method _IH_Order_QB whereAttachment($value)
     * @method _IH_Order_QB whereCreatedAt($value)
     * @method _IH_Order_QB whereUpdatedAt($value)
     * @method Order baseSole(array|string $columns = ['*'])
     * @method Order create(array $attributes = [])
     * @method _IH_Order_C|Order[] cursor()
     * @method Order|null|_IH_Order_C|Order[] find($id, array|string $columns = ['*'])
     * @method _IH_Order_C|Order[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Order|_IH_Order_C|Order[] findOrFail($id, array|string $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOrNew($id, array|string $columns = ['*'])
     * @method Order first(array|string $columns = ['*'])
     * @method Order firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Order firstOrCreate(array $attributes = [], array $values = [])
     * @method Order firstOrFail(array|string $columns = ['*'])
     * @method Order firstOrNew(array $attributes = [], array $values = [])
     * @method Order firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Order forceCreate(array $attributes)
     * @method _IH_Order_C|Order[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Order_C|Order[] get(array|string $columns = ['*'])
     * @method Order getModel()
     * @method Order[] getModels(array|string $columns = ['*'])
     * @method _IH_Order_C|Order[] hydrate(array $items)
     * @method Order make(array $attributes = [])
     * @method Order newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Order[]|_IH_Order_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Order[]|_IH_Order_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Order sole(array|string $columns = ['*'])
     * @method Order updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Order_QB extends _BaseBuilder {}

    /**
     * @method PageBuilder|null getOrPut($key, $value)
     * @method PageBuilder|$this shift(int $count = 1)
     * @method PageBuilder|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PageBuilder|$this pop(int $count = 1)
     * @method PageBuilder|null pull($key, \Closure $default = null)
     * @method PageBuilder|null last(callable $callback = null, \Closure $default = null)
     * @method PageBuilder|$this random(callable|int|null $number = null)
     * @method PageBuilder|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PageBuilder|null get($key, \Closure $default = null)
     * @method PageBuilder|null first(callable $callback = null, \Closure $default = null)
     * @method PageBuilder|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PageBuilder|null find($key, $default = null)
     * @method PageBuilder[] all()
     */
    class _IH_PageBuilder_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PageBuilder[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PageBuilder_QB whereId($value)
     * @method _IH_PageBuilder_QB whereAddonName($value)
     * @method _IH_PageBuilder_QB whereAddonType($value)
     * @method _IH_PageBuilder_QB whereAddonLocation($value)
     * @method _IH_PageBuilder_QB whereAddonOrder($value)
     * @method _IH_PageBuilder_QB whereAddonPageId($value)
     * @method _IH_PageBuilder_QB whereAddonPageType($value)
     * @method _IH_PageBuilder_QB whereAddonSettings($value)
     * @method _IH_PageBuilder_QB whereAddonNamespace($value)
     * @method _IH_PageBuilder_QB whereCreatedAt($value)
     * @method _IH_PageBuilder_QB whereUpdatedAt($value)
     * @method PageBuilder baseSole(array|string $columns = ['*'])
     * @method PageBuilder create(array $attributes = [])
     * @method _IH_PageBuilder_C|PageBuilder[] cursor()
     * @method PageBuilder|null|_IH_PageBuilder_C|PageBuilder[] find($id, array|string $columns = ['*'])
     * @method _IH_PageBuilder_C|PageBuilder[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PageBuilder|_IH_PageBuilder_C|PageBuilder[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PageBuilder|_IH_PageBuilder_C|PageBuilder[] findOrFail($id, array|string $columns = ['*'])
     * @method PageBuilder|_IH_PageBuilder_C|PageBuilder[] findOrNew($id, array|string $columns = ['*'])
     * @method PageBuilder first(array|string $columns = ['*'])
     * @method PageBuilder firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PageBuilder firstOrCreate(array $attributes = [], array $values = [])
     * @method PageBuilder firstOrFail(array|string $columns = ['*'])
     * @method PageBuilder firstOrNew(array $attributes = [], array $values = [])
     * @method PageBuilder firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PageBuilder forceCreate(array $attributes)
     * @method _IH_PageBuilder_C|PageBuilder[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PageBuilder_C|PageBuilder[] get(array|string $columns = ['*'])
     * @method PageBuilder getModel()
     * @method PageBuilder[] getModels(array|string $columns = ['*'])
     * @method _IH_PageBuilder_C|PageBuilder[] hydrate(array $items)
     * @method PageBuilder make(array $attributes = [])
     * @method PageBuilder newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PageBuilder[]|_IH_PageBuilder_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PageBuilder[]|_IH_PageBuilder_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PageBuilder sole(array|string $columns = ['*'])
     * @method PageBuilder updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PageBuilder_QB extends _BaseBuilder {}

    /**
     * @method Page|null getOrPut($key, $value)
     * @method Page|$this shift(int $count = 1)
     * @method Page|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Page|$this pop(int $count = 1)
     * @method Page|null pull($key, \Closure $default = null)
     * @method Page|null last(callable $callback = null, \Closure $default = null)
     * @method Page|$this random(callable|int|null $number = null)
     * @method Page|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Page|null get($key, \Closure $default = null)
     * @method Page|null first(callable $callback = null, \Closure $default = null)
     * @method Page|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Page|null find($key, $default = null)
     * @method Page[] all()
     */
    class _IH_Page_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Page[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Page_QB whereId($value)
     * @method _IH_Page_QB whereTitle($value)
     * @method _IH_Page_QB whereSlug($value)
     * @method _IH_Page_QB wherePageContent($value)
     * @method _IH_Page_QB whereVisibility($value)
     * @method _IH_Page_QB whereBreadcrumb($value)
     * @method _IH_Page_QB wherePageBuilder($value)
     * @method _IH_Page_QB whereStatus($value)
     * @method _IH_Page_QB whereCreatedAt($value)
     * @method _IH_Page_QB whereUpdatedAt($value)
     * @method Page baseSole(array|string $columns = ['*'])
     * @method Page create(array $attributes = [])
     * @method _IH_Page_C|Page[] cursor()
     * @method Page|null|_IH_Page_C|Page[] find($id, array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Page|_IH_Page_C|Page[] findOrFail($id, array|string $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrNew($id, array|string $columns = ['*'])
     * @method Page first(array|string $columns = ['*'])
     * @method Page firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Page firstOrCreate(array $attributes = [], array $values = [])
     * @method Page firstOrFail(array|string $columns = ['*'])
     * @method Page firstOrNew(array $attributes = [], array $values = [])
     * @method Page firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Page forceCreate(array $attributes)
     * @method _IH_Page_C|Page[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Page_C|Page[] get(array|string $columns = ['*'])
     * @method Page getModel()
     * @method Page[] getModels(array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] hydrate(array $items)
     * @method Page make(array $attributes = [])
     * @method Page newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Page[]|_IH_Page_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Page[]|_IH_Page_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Page sole(array|string $columns = ['*'])
     * @method Page updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Page_QB extends _BaseBuilder {}

    /**
     * @method PaymentGateway|null getOrPut($key, $value)
     * @method PaymentGateway|$this shift(int $count = 1)
     * @method PaymentGateway|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PaymentGateway|$this pop(int $count = 1)
     * @method PaymentGateway|null pull($key, \Closure $default = null)
     * @method PaymentGateway|null last(callable $callback = null, \Closure $default = null)
     * @method PaymentGateway|$this random(callable|int|null $number = null)
     * @method PaymentGateway|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PaymentGateway|null get($key, \Closure $default = null)
     * @method PaymentGateway|null first(callable $callback = null, \Closure $default = null)
     * @method PaymentGateway|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PaymentGateway|null find($key, $default = null)
     * @method PaymentGateway[] all()
     */
    class _IH_PaymentGateway_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PaymentGateway[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PaymentGateway_QB whereId($value)
     * @method _IH_PaymentGateway_QB whereName($value)
     * @method _IH_PaymentGateway_QB whereImage($value)
     * @method _IH_PaymentGateway_QB whereDescription($value)
     * @method _IH_PaymentGateway_QB whereStatus($value)
     * @method _IH_PaymentGateway_QB whereTestMode($value)
     * @method _IH_PaymentGateway_QB whereCredentials($value)
     * @method _IH_PaymentGateway_QB whereCreatedAt($value)
     * @method _IH_PaymentGateway_QB whereUpdatedAt($value)
     * @method PaymentGateway baseSole(array|string $columns = ['*'])
     * @method PaymentGateway create(array $attributes = [])
     * @method _IH_PaymentGateway_C|PaymentGateway[] cursor()
     * @method PaymentGateway|null|_IH_PaymentGateway_C|PaymentGateway[] find($id, array|string $columns = ['*'])
     * @method _IH_PaymentGateway_C|PaymentGateway[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PaymentGateway|_IH_PaymentGateway_C|PaymentGateway[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaymentGateway|_IH_PaymentGateway_C|PaymentGateway[] findOrFail($id, array|string $columns = ['*'])
     * @method PaymentGateway|_IH_PaymentGateway_C|PaymentGateway[] findOrNew($id, array|string $columns = ['*'])
     * @method PaymentGateway first(array|string $columns = ['*'])
     * @method PaymentGateway firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaymentGateway firstOrCreate(array $attributes = [], array $values = [])
     * @method PaymentGateway firstOrFail(array|string $columns = ['*'])
     * @method PaymentGateway firstOrNew(array $attributes = [], array $values = [])
     * @method PaymentGateway firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaymentGateway forceCreate(array $attributes)
     * @method _IH_PaymentGateway_C|PaymentGateway[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PaymentGateway_C|PaymentGateway[] get(array|string $columns = ['*'])
     * @method PaymentGateway getModel()
     * @method PaymentGateway[] getModels(array|string $columns = ['*'])
     * @method _IH_PaymentGateway_C|PaymentGateway[] hydrate(array $items)
     * @method PaymentGateway make(array $attributes = [])
     * @method PaymentGateway newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaymentGateway[]|_IH_PaymentGateway_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PaymentGateway[]|_IH_PaymentGateway_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaymentGateway sole(array|string $columns = ['*'])
     * @method PaymentGateway updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PaymentGateway_QB extends _BaseBuilder {}

    /**
     * @method PaymentLogs|null getOrPut($key, $value)
     * @method PaymentLogs|$this shift(int $count = 1)
     * @method PaymentLogs|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PaymentLogs|$this pop(int $count = 1)
     * @method PaymentLogs|null pull($key, \Closure $default = null)
     * @method PaymentLogs|null last(callable $callback = null, \Closure $default = null)
     * @method PaymentLogs|$this random(callable|int|null $number = null)
     * @method PaymentLogs|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PaymentLogs|null get($key, \Closure $default = null)
     * @method PaymentLogs|null first(callable $callback = null, \Closure $default = null)
     * @method PaymentLogs|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PaymentLogs|null find($key, $default = null)
     * @method PaymentLogs[] all()
     */
    class _IH_PaymentLogs_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PaymentLogs[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PaymentLogs_QB whereId($value)
     * @method _IH_PaymentLogs_QB whereEmail($value)
     * @method _IH_PaymentLogs_QB whereName($value)
     * @method _IH_PaymentLogs_QB wherePackageName($value)
     * @method _IH_PaymentLogs_QB wherePackagePrice($value)
     * @method _IH_PaymentLogs_QB wherePackageGateway($value)
     * @method _IH_PaymentLogs_QB wherePackageId($value)
     * @method _IH_PaymentLogs_QB whereUserId($value)
     * @method _IH_PaymentLogs_QB whereStatus($value)
     * @method _IH_PaymentLogs_QB wherePaymentStatus($value)
     * @method _IH_PaymentLogs_QB whereTransactionId($value)
     * @method _IH_PaymentLogs_QB whereAttachments($value)
     * @method _IH_PaymentLogs_QB whereCustomFields($value)
     * @method _IH_PaymentLogs_QB whereTrack($value)
     * @method _IH_PaymentLogs_QB whereRenewStatus($value)
     * @method _IH_PaymentLogs_QB whereCreatedAt($value)
     * @method _IH_PaymentLogs_QB whereUpdatedAt($value)
     * @method _IH_PaymentLogs_QB whereStartDate($value)
     * @method _IH_PaymentLogs_QB whereExpireDate($value)
     * @method _IH_PaymentLogs_QB whereIsRenew($value)
     * @method _IH_PaymentLogs_QB whereTenantId($value)
     * @method PaymentLogs baseSole(array|string $columns = ['*'])
     * @method PaymentLogs create(array $attributes = [])
     * @method _IH_PaymentLogs_C|PaymentLogs[] cursor()
     * @method PaymentLogs|null|_IH_PaymentLogs_C|PaymentLogs[] find($id, array|string $columns = ['*'])
     * @method _IH_PaymentLogs_C|PaymentLogs[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PaymentLogs|_IH_PaymentLogs_C|PaymentLogs[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaymentLogs|_IH_PaymentLogs_C|PaymentLogs[] findOrFail($id, array|string $columns = ['*'])
     * @method PaymentLogs|_IH_PaymentLogs_C|PaymentLogs[] findOrNew($id, array|string $columns = ['*'])
     * @method PaymentLogs first(array|string $columns = ['*'])
     * @method PaymentLogs firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaymentLogs firstOrCreate(array $attributes = [], array $values = [])
     * @method PaymentLogs firstOrFail(array|string $columns = ['*'])
     * @method PaymentLogs firstOrNew(array $attributes = [], array $values = [])
     * @method PaymentLogs firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaymentLogs forceCreate(array $attributes)
     * @method _IH_PaymentLogs_C|PaymentLogs[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PaymentLogs_C|PaymentLogs[] get(array|string $columns = ['*'])
     * @method PaymentLogs getModel()
     * @method PaymentLogs[] getModels(array|string $columns = ['*'])
     * @method _IH_PaymentLogs_C|PaymentLogs[] hydrate(array $items)
     * @method PaymentLogs make(array $attributes = [])
     * @method PaymentLogs newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaymentLogs[]|_IH_PaymentLogs_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PaymentLogs[]|_IH_PaymentLogs_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaymentLogs sole(array|string $columns = ['*'])
     * @method PaymentLogs updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PaymentLogs_QB extends _BaseBuilder {}

    /**
     * @method PlanFeature|null getOrPut($key, $value)
     * @method PlanFeature|$this shift(int $count = 1)
     * @method PlanFeature|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PlanFeature|$this pop(int $count = 1)
     * @method PlanFeature|null pull($key, \Closure $default = null)
     * @method PlanFeature|null last(callable $callback = null, \Closure $default = null)
     * @method PlanFeature|$this random(callable|int|null $number = null)
     * @method PlanFeature|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PlanFeature|null get($key, \Closure $default = null)
     * @method PlanFeature|null first(callable $callback = null, \Closure $default = null)
     * @method PlanFeature|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PlanFeature|null find($key, $default = null)
     * @method PlanFeature[] all()
     */
    class _IH_PlanFeature_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PlanFeature[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PlanFeature_QB whereId($value)
     * @method _IH_PlanFeature_QB wherePlanId($value)
     * @method _IH_PlanFeature_QB whereFeatureName($value)
     * @method _IH_PlanFeature_QB whereStatus($value)
     * @method _IH_PlanFeature_QB whereCreatedAt($value)
     * @method _IH_PlanFeature_QB whereUpdatedAt($value)
     * @method PlanFeature baseSole(array|string $columns = ['*'])
     * @method PlanFeature create(array $attributes = [])
     * @method _IH_PlanFeature_C|PlanFeature[] cursor()
     * @method PlanFeature|null|_IH_PlanFeature_C|PlanFeature[] find($id, array|string $columns = ['*'])
     * @method _IH_PlanFeature_C|PlanFeature[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PlanFeature|_IH_PlanFeature_C|PlanFeature[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PlanFeature|_IH_PlanFeature_C|PlanFeature[] findOrFail($id, array|string $columns = ['*'])
     * @method PlanFeature|_IH_PlanFeature_C|PlanFeature[] findOrNew($id, array|string $columns = ['*'])
     * @method PlanFeature first(array|string $columns = ['*'])
     * @method PlanFeature firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PlanFeature firstOrCreate(array $attributes = [], array $values = [])
     * @method PlanFeature firstOrFail(array|string $columns = ['*'])
     * @method PlanFeature firstOrNew(array $attributes = [], array $values = [])
     * @method PlanFeature firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PlanFeature forceCreate(array $attributes)
     * @method _IH_PlanFeature_C|PlanFeature[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PlanFeature_C|PlanFeature[] get(array|string $columns = ['*'])
     * @method PlanFeature getModel()
     * @method PlanFeature[] getModels(array|string $columns = ['*'])
     * @method _IH_PlanFeature_C|PlanFeature[] hydrate(array $items)
     * @method PlanFeature make(array $attributes = [])
     * @method PlanFeature newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PlanFeature[]|_IH_PlanFeature_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PlanFeature[]|_IH_PlanFeature_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PlanFeature sole(array|string $columns = ['*'])
     * @method PlanFeature updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PlanFeature_QB extends _BaseBuilder {}

    /**
     * @method PricePlan|null getOrPut($key, $value)
     * @method PricePlan|$this shift(int $count = 1)
     * @method PricePlan|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PricePlan|$this pop(int $count = 1)
     * @method PricePlan|null pull($key, \Closure $default = null)
     * @method PricePlan|null last(callable $callback = null, \Closure $default = null)
     * @method PricePlan|$this random(callable|int|null $number = null)
     * @method PricePlan|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PricePlan|null get($key, \Closure $default = null)
     * @method PricePlan|null first(callable $callback = null, \Closure $default = null)
     * @method PricePlan|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PricePlan|null find($key, $default = null)
     * @method PricePlan[] all()
     */
    class _IH_PricePlan_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PricePlan[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PricePlan_QB whereId($value)
     * @method _IH_PricePlan_QB whereTitle($value)
     * @method _IH_PricePlan_QB whereType($value)
     * @method _IH_PricePlan_QB whereStatus($value)
     * @method _IH_PricePlan_QB wherePrice($value)
     * @method _IH_PricePlan_QB whereFaq($value)
     * @method _IH_PricePlan_QB whereBlogPermissionFeature($value)
     * @method _IH_PricePlan_QB whereProductPermissionFeature($value)
     * @method _IH_PricePlan_QB wherePagePermissionFeature($value)
     * @method _IH_PricePlan_QB whereHasTrial($value)
     * @method _IH_PricePlan_QB whereTrialDays($value)
     * @method _IH_PricePlan_QB whereCreatedAt($value)
     * @method _IH_PricePlan_QB whereUpdatedAt($value)
     * @method _IH_PricePlan_QB whereStoragePermissionFeature($value)
     * @method PricePlan baseSole(array|string $columns = ['*'])
     * @method PricePlan create(array $attributes = [])
     * @method _IH_PricePlan_C|PricePlan[] cursor()
     * @method PricePlan|null|_IH_PricePlan_C|PricePlan[] find($id, array|string $columns = ['*'])
     * @method _IH_PricePlan_C|PricePlan[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PricePlan|_IH_PricePlan_C|PricePlan[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PricePlan|_IH_PricePlan_C|PricePlan[] findOrFail($id, array|string $columns = ['*'])
     * @method PricePlan|_IH_PricePlan_C|PricePlan[] findOrNew($id, array|string $columns = ['*'])
     * @method PricePlan first(array|string $columns = ['*'])
     * @method PricePlan firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PricePlan firstOrCreate(array $attributes = [], array $values = [])
     * @method PricePlan firstOrFail(array|string $columns = ['*'])
     * @method PricePlan firstOrNew(array $attributes = [], array $values = [])
     * @method PricePlan firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PricePlan forceCreate(array $attributes)
     * @method _IH_PricePlan_C|PricePlan[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PricePlan_C|PricePlan[] get(array|string $columns = ['*'])
     * @method PricePlan getModel()
     * @method PricePlan[] getModels(array|string $columns = ['*'])
     * @method _IH_PricePlan_C|PricePlan[] hydrate(array $items)
     * @method PricePlan make(array $attributes = [])
     * @method PricePlan newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PricePlan[]|_IH_PricePlan_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PricePlan[]|_IH_PricePlan_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PricePlan sole(array|string $columns = ['*'])
     * @method PricePlan updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PricePlan_QB extends _BaseBuilder {}

    /**
     * @method ProductReviews|null getOrPut($key, $value)
     * @method ProductReviews|$this shift(int $count = 1)
     * @method ProductReviews|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductReviews|$this pop(int $count = 1)
     * @method ProductReviews|null pull($key, \Closure $default = null)
     * @method ProductReviews|null last(callable $callback = null, \Closure $default = null)
     * @method ProductReviews|$this random(callable|int|null $number = null)
     * @method ProductReviews|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductReviews|null get($key, \Closure $default = null)
     * @method ProductReviews|null first(callable $callback = null, \Closure $default = null)
     * @method ProductReviews|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductReviews|null find($key, $default = null)
     * @method ProductReviews[] all()
     */
    class _IH_ProductReviews_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductReviews[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductReviews_QB whereId($value)
     * @method _IH_ProductReviews_QB whereProductId($value)
     * @method _IH_ProductReviews_QB whereUserId($value)
     * @method _IH_ProductReviews_QB whereRating($value)
     * @method _IH_ProductReviews_QB whereReviewText($value)
     * @method _IH_ProductReviews_QB whereCreatedAt($value)
     * @method _IH_ProductReviews_QB whereUpdatedAt($value)
     * @method ProductReviews baseSole(array|string $columns = ['*'])
     * @method ProductReviews create(array $attributes = [])
     * @method _IH_ProductReviews_C|ProductReviews[] cursor()
     * @method ProductReviews|null|_IH_ProductReviews_C|ProductReviews[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductReviews_C|ProductReviews[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductReviews|_IH_ProductReviews_C|ProductReviews[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductReviews|_IH_ProductReviews_C|ProductReviews[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductReviews|_IH_ProductReviews_C|ProductReviews[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductReviews first(array|string $columns = ['*'])
     * @method ProductReviews firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductReviews firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductReviews firstOrFail(array|string $columns = ['*'])
     * @method ProductReviews firstOrNew(array $attributes = [], array $values = [])
     * @method ProductReviews firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductReviews forceCreate(array $attributes)
     * @method _IH_ProductReviews_C|ProductReviews[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductReviews_C|ProductReviews[] get(array|string $columns = ['*'])
     * @method ProductReviews getModel()
     * @method ProductReviews[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductReviews_C|ProductReviews[] hydrate(array $items)
     * @method ProductReviews make(array $attributes = [])
     * @method ProductReviews newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductReviews[]|_IH_ProductReviews_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductReviews[]|_IH_ProductReviews_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductReviews sole(array|string $columns = ['*'])
     * @method ProductReviews updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductReviews_QB extends _BaseBuilder {}

    /**
     * @method StaticOptionCentral|null getOrPut($key, $value)
     * @method StaticOptionCentral|$this shift(int $count = 1)
     * @method StaticOptionCentral|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method StaticOptionCentral|$this pop(int $count = 1)
     * @method StaticOptionCentral|null pull($key, \Closure $default = null)
     * @method StaticOptionCentral|null last(callable $callback = null, \Closure $default = null)
     * @method StaticOptionCentral|$this random(callable|int|null $number = null)
     * @method StaticOptionCentral|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method StaticOptionCentral|null get($key, \Closure $default = null)
     * @method StaticOptionCentral|null first(callable $callback = null, \Closure $default = null)
     * @method StaticOptionCentral|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method StaticOptionCentral|null find($key, $default = null)
     * @method StaticOptionCentral[] all()
     */
    class _IH_StaticOptionCentral_C extends _BaseCollection {
        /**
         * @param int $size
         * @return StaticOptionCentral[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_StaticOptionCentral_QB whereId($value)
     * @method _IH_StaticOptionCentral_QB whereOptionName($value)
     * @method _IH_StaticOptionCentral_QB whereOptionValue($value)
     * @method _IH_StaticOptionCentral_QB whereUniqueKey($value)
     * @method _IH_StaticOptionCentral_QB whereCreatedAt($value)
     * @method _IH_StaticOptionCentral_QB whereUpdatedAt($value)
     * @method StaticOptionCentral baseSole(array|string $columns = ['*'])
     * @method StaticOptionCentral create(array $attributes = [])
     * @method _IH_StaticOptionCentral_C|StaticOptionCentral[] cursor()
     * @method StaticOptionCentral|null|_IH_StaticOptionCentral_C|StaticOptionCentral[] find($id, array|string $columns = ['*'])
     * @method _IH_StaticOptionCentral_C|StaticOptionCentral[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method StaticOptionCentral|_IH_StaticOptionCentral_C|StaticOptionCentral[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StaticOptionCentral|_IH_StaticOptionCentral_C|StaticOptionCentral[] findOrFail($id, array|string $columns = ['*'])
     * @method StaticOptionCentral|_IH_StaticOptionCentral_C|StaticOptionCentral[] findOrNew($id, array|string $columns = ['*'])
     * @method StaticOptionCentral first(array|string $columns = ['*'])
     * @method StaticOptionCentral firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StaticOptionCentral firstOrCreate(array $attributes = [], array $values = [])
     * @method StaticOptionCentral firstOrFail(array|string $columns = ['*'])
     * @method StaticOptionCentral firstOrNew(array $attributes = [], array $values = [])
     * @method StaticOptionCentral firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method StaticOptionCentral forceCreate(array $attributes)
     * @method _IH_StaticOptionCentral_C|StaticOptionCentral[] fromQuery(string $query, array $bindings = [])
     * @method _IH_StaticOptionCentral_C|StaticOptionCentral[] get(array|string $columns = ['*'])
     * @method StaticOptionCentral getModel()
     * @method StaticOptionCentral[] getModels(array|string $columns = ['*'])
     * @method _IH_StaticOptionCentral_C|StaticOptionCentral[] hydrate(array $items)
     * @method StaticOptionCentral make(array $attributes = [])
     * @method StaticOptionCentral newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|StaticOptionCentral[]|_IH_StaticOptionCentral_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|StaticOptionCentral[]|_IH_StaticOptionCentral_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method StaticOptionCentral sole(array|string $columns = ['*'])
     * @method StaticOptionCentral updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_StaticOptionCentral_QB extends _BaseBuilder {}

    /**
     * @method StaticOption|null getOrPut($key, $value)
     * @method StaticOption|$this shift(int $count = 1)
     * @method StaticOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method StaticOption|$this pop(int $count = 1)
     * @method StaticOption|null pull($key, \Closure $default = null)
     * @method StaticOption|null last(callable $callback = null, \Closure $default = null)
     * @method StaticOption|$this random(callable|int|null $number = null)
     * @method StaticOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method StaticOption|null get($key, \Closure $default = null)
     * @method StaticOption|null first(callable $callback = null, \Closure $default = null)
     * @method StaticOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method StaticOption|null find($key, $default = null)
     * @method StaticOption[] all()
     */
    class _IH_StaticOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return StaticOption[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_StaticOption_QB whereId($value)
     * @method _IH_StaticOption_QB whereOptionName($value)
     * @method _IH_StaticOption_QB whereOptionValue($value)
     * @method _IH_StaticOption_QB whereCreatedAt($value)
     * @method _IH_StaticOption_QB whereUpdatedAt($value)
     * @method StaticOption baseSole(array|string $columns = ['*'])
     * @method StaticOption create(array $attributes = [])
     * @method _IH_StaticOption_C|StaticOption[] cursor()
     * @method StaticOption|null|_IH_StaticOption_C|StaticOption[] find($id, array|string $columns = ['*'])
     * @method _IH_StaticOption_C|StaticOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method StaticOption|_IH_StaticOption_C|StaticOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StaticOption|_IH_StaticOption_C|StaticOption[] findOrFail($id, array|string $columns = ['*'])
     * @method StaticOption|_IH_StaticOption_C|StaticOption[] findOrNew($id, array|string $columns = ['*'])
     * @method StaticOption first(array|string $columns = ['*'])
     * @method StaticOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StaticOption firstOrCreate(array $attributes = [], array $values = [])
     * @method StaticOption firstOrFail(array|string $columns = ['*'])
     * @method StaticOption firstOrNew(array $attributes = [], array $values = [])
     * @method StaticOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method StaticOption forceCreate(array $attributes)
     * @method _IH_StaticOption_C|StaticOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_StaticOption_C|StaticOption[] get(array|string $columns = ['*'])
     * @method StaticOption getModel()
     * @method StaticOption[] getModels(array|string $columns = ['*'])
     * @method _IH_StaticOption_C|StaticOption[] hydrate(array $items)
     * @method StaticOption make(array $attributes = [])
     * @method StaticOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|StaticOption[]|_IH_StaticOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|StaticOption[]|_IH_StaticOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method StaticOption sole(array|string $columns = ['*'])
     * @method StaticOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_StaticOption_QB extends _BaseBuilder {}

    /**
     * @method Status|null getOrPut($key, $value)
     * @method Status|$this shift(int $count = 1)
     * @method Status|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Status|$this pop(int $count = 1)
     * @method Status|null pull($key, \Closure $default = null)
     * @method Status|null last(callable $callback = null, \Closure $default = null)
     * @method Status|$this random(callable|int|null $number = null)
     * @method Status|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Status|null get($key, \Closure $default = null)
     * @method Status|null first(callable $callback = null, \Closure $default = null)
     * @method Status|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Status|null find($key, $default = null)
     * @method Status[] all()
     */
    class _IH_Status_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Status[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Status_QB whereId($value)
     * @method _IH_Status_QB whereName($value)
     * @method _IH_Status_QB whereDeletedAt($value)
     * @method Status baseSole(array|string $columns = ['*'])
     * @method Status create(array $attributes = [])
     * @method _IH_Status_C|Status[] cursor()
     * @method Status|null|_IH_Status_C|Status[] find($id, array|string $columns = ['*'])
     * @method _IH_Status_C|Status[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Status|_IH_Status_C|Status[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Status|_IH_Status_C|Status[] findOrFail($id, array|string $columns = ['*'])
     * @method Status|_IH_Status_C|Status[] findOrNew($id, array|string $columns = ['*'])
     * @method Status first(array|string $columns = ['*'])
     * @method Status firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Status firstOrCreate(array $attributes = [], array $values = [])
     * @method Status firstOrFail(array|string $columns = ['*'])
     * @method Status firstOrNew(array $attributes = [], array $values = [])
     * @method Status firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Status forceCreate(array $attributes)
     * @method _IH_Status_C|Status[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Status_C|Status[] get(array|string $columns = ['*'])
     * @method Status getModel()
     * @method Status[] getModels(array|string $columns = ['*'])
     * @method _IH_Status_C|Status[] hydrate(array $items)
     * @method Status make(array $attributes = [])
     * @method Status newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Status[]|_IH_Status_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Status[]|_IH_Status_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Status sole(array|string $columns = ['*'])
     * @method Status updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Status_QB withTrashed()
     * @method _IH_Status_QB onlyTrashed()
     * @method _IH_Status_QB withoutTrashed()
     * @method _IH_Status_QB restore()
     */
    class _IH_Status_QB extends _BaseBuilder {}

    /**
     * @method SupportDepartment|null getOrPut($key, $value)
     * @method SupportDepartment|$this shift(int $count = 1)
     * @method SupportDepartment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SupportDepartment|$this pop(int $count = 1)
     * @method SupportDepartment|null pull($key, \Closure $default = null)
     * @method SupportDepartment|null last(callable $callback = null, \Closure $default = null)
     * @method SupportDepartment|$this random(callable|int|null $number = null)
     * @method SupportDepartment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SupportDepartment|null get($key, \Closure $default = null)
     * @method SupportDepartment|null first(callable $callback = null, \Closure $default = null)
     * @method SupportDepartment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SupportDepartment|null find($key, $default = null)
     * @method SupportDepartment[] all()
     */
    class _IH_SupportDepartment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SupportDepartment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_SupportDepartment_QB whereId($value)
     * @method _IH_SupportDepartment_QB whereName($value)
     * @method _IH_SupportDepartment_QB whereStatus($value)
     * @method _IH_SupportDepartment_QB whereCreatedAt($value)
     * @method _IH_SupportDepartment_QB whereUpdatedAt($value)
     * @method SupportDepartment baseSole(array|string $columns = ['*'])
     * @method SupportDepartment create(array $attributes = [])
     * @method _IH_SupportDepartment_C|SupportDepartment[] cursor()
     * @method SupportDepartment|null|_IH_SupportDepartment_C|SupportDepartment[] find($id, array|string $columns = ['*'])
     * @method _IH_SupportDepartment_C|SupportDepartment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SupportDepartment|_IH_SupportDepartment_C|SupportDepartment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportDepartment|_IH_SupportDepartment_C|SupportDepartment[] findOrFail($id, array|string $columns = ['*'])
     * @method SupportDepartment|_IH_SupportDepartment_C|SupportDepartment[] findOrNew($id, array|string $columns = ['*'])
     * @method SupportDepartment first(array|string $columns = ['*'])
     * @method SupportDepartment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportDepartment firstOrCreate(array $attributes = [], array $values = [])
     * @method SupportDepartment firstOrFail(array|string $columns = ['*'])
     * @method SupportDepartment firstOrNew(array $attributes = [], array $values = [])
     * @method SupportDepartment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SupportDepartment forceCreate(array $attributes)
     * @method _IH_SupportDepartment_C|SupportDepartment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SupportDepartment_C|SupportDepartment[] get(array|string $columns = ['*'])
     * @method SupportDepartment getModel()
     * @method SupportDepartment[] getModels(array|string $columns = ['*'])
     * @method _IH_SupportDepartment_C|SupportDepartment[] hydrate(array $items)
     * @method SupportDepartment make(array $attributes = [])
     * @method SupportDepartment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SupportDepartment[]|_IH_SupportDepartment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SupportDepartment[]|_IH_SupportDepartment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SupportDepartment sole(array|string $columns = ['*'])
     * @method SupportDepartment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SupportDepartment_QB extends _BaseBuilder {}

    /**
     * @method SupportTicketMessage|null getOrPut($key, $value)
     * @method SupportTicketMessage|$this shift(int $count = 1)
     * @method SupportTicketMessage|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SupportTicketMessage|$this pop(int $count = 1)
     * @method SupportTicketMessage|null pull($key, \Closure $default = null)
     * @method SupportTicketMessage|null last(callable $callback = null, \Closure $default = null)
     * @method SupportTicketMessage|$this random(callable|int|null $number = null)
     * @method SupportTicketMessage|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SupportTicketMessage|null get($key, \Closure $default = null)
     * @method SupportTicketMessage|null first(callable $callback = null, \Closure $default = null)
     * @method SupportTicketMessage|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SupportTicketMessage|null find($key, $default = null)
     * @method SupportTicketMessage[] all()
     */
    class _IH_SupportTicketMessage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SupportTicketMessage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_SupportTicketMessage_QB whereId($value)
     * @method _IH_SupportTicketMessage_QB whereMessage($value)
     * @method _IH_SupportTicketMessage_QB whereNotify($value)
     * @method _IH_SupportTicketMessage_QB whereAttachment($value)
     * @method _IH_SupportTicketMessage_QB whereType($value)
     * @method _IH_SupportTicketMessage_QB whereUserId($value)
     * @method _IH_SupportTicketMessage_QB whereSupportTicketId($value)
     * @method _IH_SupportTicketMessage_QB whereCreatedAt($value)
     * @method _IH_SupportTicketMessage_QB whereUpdatedAt($value)
     * @method SupportTicketMessage baseSole(array|string $columns = ['*'])
     * @method SupportTicketMessage create(array $attributes = [])
     * @method _IH_SupportTicketMessage_C|SupportTicketMessage[] cursor()
     * @method SupportTicketMessage|null|_IH_SupportTicketMessage_C|SupportTicketMessage[] find($id, array|string $columns = ['*'])
     * @method _IH_SupportTicketMessage_C|SupportTicketMessage[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SupportTicketMessage|_IH_SupportTicketMessage_C|SupportTicketMessage[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportTicketMessage|_IH_SupportTicketMessage_C|SupportTicketMessage[] findOrFail($id, array|string $columns = ['*'])
     * @method SupportTicketMessage|_IH_SupportTicketMessage_C|SupportTicketMessage[] findOrNew($id, array|string $columns = ['*'])
     * @method SupportTicketMessage first(array|string $columns = ['*'])
     * @method SupportTicketMessage firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportTicketMessage firstOrCreate(array $attributes = [], array $values = [])
     * @method SupportTicketMessage firstOrFail(array|string $columns = ['*'])
     * @method SupportTicketMessage firstOrNew(array $attributes = [], array $values = [])
     * @method SupportTicketMessage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SupportTicketMessage forceCreate(array $attributes)
     * @method _IH_SupportTicketMessage_C|SupportTicketMessage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SupportTicketMessage_C|SupportTicketMessage[] get(array|string $columns = ['*'])
     * @method SupportTicketMessage getModel()
     * @method SupportTicketMessage[] getModels(array|string $columns = ['*'])
     * @method _IH_SupportTicketMessage_C|SupportTicketMessage[] hydrate(array $items)
     * @method SupportTicketMessage make(array $attributes = [])
     * @method SupportTicketMessage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SupportTicketMessage[]|_IH_SupportTicketMessage_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SupportTicketMessage[]|_IH_SupportTicketMessage_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SupportTicketMessage sole(array|string $columns = ['*'])
     * @method SupportTicketMessage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SupportTicketMessage_QB extends _BaseBuilder {}

    /**
     * @method SupportTicket|null getOrPut($key, $value)
     * @method SupportTicket|$this shift(int $count = 1)
     * @method SupportTicket|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SupportTicket|$this pop(int $count = 1)
     * @method SupportTicket|null pull($key, \Closure $default = null)
     * @method SupportTicket|null last(callable $callback = null, \Closure $default = null)
     * @method SupportTicket|$this random(callable|int|null $number = null)
     * @method SupportTicket|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SupportTicket|null get($key, \Closure $default = null)
     * @method SupportTicket|null first(callable $callback = null, \Closure $default = null)
     * @method SupportTicket|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SupportTicket|null find($key, $default = null)
     * @method SupportTicket[] all()
     */
    class _IH_SupportTicket_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SupportTicket[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_SupportTicket_QB whereId($value)
     * @method _IH_SupportTicket_QB whereTitle($value)
     * @method _IH_SupportTicket_QB whereVia($value)
     * @method _IH_SupportTicket_QB whereOperatingSystem($value)
     * @method _IH_SupportTicket_QB whereUserAgent($value)
     * @method _IH_SupportTicket_QB whereDescription($value)
     * @method _IH_SupportTicket_QB whereSubject($value)
     * @method _IH_SupportTicket_QB whereStatus($value)
     * @method _IH_SupportTicket_QB wherePriority($value)
     * @method _IH_SupportTicket_QB whereDepartmentId($value)
     * @method _IH_SupportTicket_QB whereUserId($value)
     * @method _IH_SupportTicket_QB whereAdminId($value)
     * @method _IH_SupportTicket_QB whereCreatedAt($value)
     * @method _IH_SupportTicket_QB whereUpdatedAt($value)
     * @method SupportTicket baseSole(array|string $columns = ['*'])
     * @method SupportTicket create(array $attributes = [])
     * @method _IH_SupportTicket_C|SupportTicket[] cursor()
     * @method SupportTicket|null|_IH_SupportTicket_C|SupportTicket[] find($id, array|string $columns = ['*'])
     * @method _IH_SupportTicket_C|SupportTicket[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SupportTicket|_IH_SupportTicket_C|SupportTicket[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportTicket|_IH_SupportTicket_C|SupportTicket[] findOrFail($id, array|string $columns = ['*'])
     * @method SupportTicket|_IH_SupportTicket_C|SupportTicket[] findOrNew($id, array|string $columns = ['*'])
     * @method SupportTicket first(array|string $columns = ['*'])
     * @method SupportTicket firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportTicket firstOrCreate(array $attributes = [], array $values = [])
     * @method SupportTicket firstOrFail(array|string $columns = ['*'])
     * @method SupportTicket firstOrNew(array $attributes = [], array $values = [])
     * @method SupportTicket firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SupportTicket forceCreate(array $attributes)
     * @method _IH_SupportTicket_C|SupportTicket[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SupportTicket_C|SupportTicket[] get(array|string $columns = ['*'])
     * @method SupportTicket getModel()
     * @method SupportTicket[] getModels(array|string $columns = ['*'])
     * @method _IH_SupportTicket_C|SupportTicket[] hydrate(array $items)
     * @method SupportTicket make(array $attributes = [])
     * @method SupportTicket newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SupportTicket[]|_IH_SupportTicket_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SupportTicket[]|_IH_SupportTicket_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SupportTicket sole(array|string $columns = ['*'])
     * @method SupportTicket updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SupportTicket_QB extends _BaseBuilder {}

    /**
     * @method Tenant|null getOrPut($key, $value)
     * @method Tenant|$this shift(int $count = 1)
     * @method Tenant|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Tenant|$this pop(int $count = 1)
     * @method Tenant|null pull($key, \Closure $default = null)
     * @method Tenant|null last(callable $callback = null, \Closure $default = null)
     * @method Tenant|$this random(callable|int|null $number = null)
     * @method Tenant|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Tenant|null get($key, \Closure $default = null)
     * @method Tenant|null first(callable $callback = null, \Closure $default = null)
     * @method Tenant|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Tenant|null find($key, $default = null)
     * @method Tenant[] all()
     * @method $this runForEach(callable $callable)
     * @mixin TenantCollection
     */
    class _IH_Tenant_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tenant[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Tenant_QB whereId($value)
     * @method _IH_Tenant_QB whereCreatedAt($value)
     * @method _IH_Tenant_QB whereUpdatedAt($value)
     * @method _IH_Tenant_QB whereData($value)
     * @method _IH_Tenant_QB whereUserId($value)
     * @method _IH_Tenant_QB whereThemeSlug($value)
     * @method Tenant baseSole(array|string $columns = ['*'])
     * @method Tenant create(array $attributes = [])
     * @method _IH_Tenant_C|Tenant[] cursor()
     * @method Tenant|null|_IH_Tenant_C|Tenant[] find($id, array|string $columns = ['*'])
     * @method _IH_Tenant_C|Tenant[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Tenant|_IH_Tenant_C|Tenant[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tenant|_IH_Tenant_C|Tenant[] findOrFail($id, array|string $columns = ['*'])
     * @method Tenant|_IH_Tenant_C|Tenant[] findOrNew($id, array|string $columns = ['*'])
     * @method Tenant first(array|string $columns = ['*'])
     * @method Tenant firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tenant firstOrCreate(array $attributes = [], array $values = [])
     * @method Tenant firstOrFail(array|string $columns = ['*'])
     * @method Tenant firstOrNew(array $attributes = [], array $values = [])
     * @method Tenant firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tenant forceCreate(array $attributes)
     * @method _IH_Tenant_C|Tenant[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tenant_C|Tenant[] get(array|string $columns = ['*'])
     * @method Tenant getModel()
     * @method Tenant[] getModels(array|string $columns = ['*'])
     * @method _IH_Tenant_C|Tenant[] hydrate(array $items)
     * @method Tenant make(array $attributes = [])
     * @method Tenant newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tenant[]|_IH_Tenant_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tenant[]|_IH_Tenant_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tenant sole(array|string $columns = ['*'])
     * @method Tenant updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Tenant_QB extends _BaseBuilder {}

    /**
     * @method Testimonial|null getOrPut($key, $value)
     * @method Testimonial|$this shift(int $count = 1)
     * @method Testimonial|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Testimonial|$this pop(int $count = 1)
     * @method Testimonial|null pull($key, \Closure $default = null)
     * @method Testimonial|null last(callable $callback = null, \Closure $default = null)
     * @method Testimonial|$this random(callable|int|null $number = null)
     * @method Testimonial|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Testimonial|null get($key, \Closure $default = null)
     * @method Testimonial|null first(callable $callback = null, \Closure $default = null)
     * @method Testimonial|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Testimonial|null find($key, $default = null)
     * @method Testimonial[] all()
     */
    class _IH_Testimonial_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Testimonial[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Testimonial_QB whereId($value)
     * @method _IH_Testimonial_QB whereName($value)
     * @method _IH_Testimonial_QB whereDesignation($value)
     * @method _IH_Testimonial_QB whereDescription($value)
     * @method _IH_Testimonial_QB whereImage($value)
     * @method _IH_Testimonial_QB whereStatus($value)
     * @method _IH_Testimonial_QB whereCreatedAt($value)
     * @method _IH_Testimonial_QB whereUpdatedAt($value)
     * @method _IH_Testimonial_QB whereCompany($value)
     * @method Testimonial baseSole(array|string $columns = ['*'])
     * @method Testimonial create(array $attributes = [])
     * @method _IH_Testimonial_C|Testimonial[] cursor()
     * @method Testimonial|null|_IH_Testimonial_C|Testimonial[] find($id, array|string $columns = ['*'])
     * @method _IH_Testimonial_C|Testimonial[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Testimonial|_IH_Testimonial_C|Testimonial[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Testimonial|_IH_Testimonial_C|Testimonial[] findOrFail($id, array|string $columns = ['*'])
     * @method Testimonial|_IH_Testimonial_C|Testimonial[] findOrNew($id, array|string $columns = ['*'])
     * @method Testimonial first(array|string $columns = ['*'])
     * @method Testimonial firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Testimonial firstOrCreate(array $attributes = [], array $values = [])
     * @method Testimonial firstOrFail(array|string $columns = ['*'])
     * @method Testimonial firstOrNew(array $attributes = [], array $values = [])
     * @method Testimonial firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Testimonial forceCreate(array $attributes)
     * @method _IH_Testimonial_C|Testimonial[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Testimonial_C|Testimonial[] get(array|string $columns = ['*'])
     * @method Testimonial getModel()
     * @method Testimonial[] getModels(array|string $columns = ['*'])
     * @method _IH_Testimonial_C|Testimonial[] hydrate(array $items)
     * @method Testimonial make(array $attributes = [])
     * @method Testimonial newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Testimonial[]|_IH_Testimonial_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Testimonial[]|_IH_Testimonial_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Testimonial sole(array|string $columns = ['*'])
     * @method Testimonial updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Testimonial_QB extends _BaseBuilder {}

    /**
     * @method Themes|null getOrPut($key, $value)
     * @method Themes|$this shift(int $count = 1)
     * @method Themes|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Themes|$this pop(int $count = 1)
     * @method Themes|null pull($key, \Closure $default = null)
     * @method Themes|null last(callable $callback = null, \Closure $default = null)
     * @method Themes|$this random(callable|int|null $number = null)
     * @method Themes|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Themes|null get($key, \Closure $default = null)
     * @method Themes|null first(callable $callback = null, \Closure $default = null)
     * @method Themes|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Themes|null find($key, $default = null)
     * @method Themes[] all()
     */
    class _IH_Themes_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Themes[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Themes_QB whereId($value)
     * @method _IH_Themes_QB whereTitle($value)
     * @method _IH_Themes_QB whereSlug($value)
     * @method _IH_Themes_QB whereDescription($value)
     * @method _IH_Themes_QB whereStatus($value)
     * @method _IH_Themes_QB whereIsPremium($value)
     * @method _IH_Themes_QB whereCreatedAt($value)
     * @method _IH_Themes_QB whereUpdatedAt($value)
     * @method _IH_Themes_QB whereUniqueKey($value)
     * @method Themes baseSole(array|string $columns = ['*'])
     * @method Themes create(array $attributes = [])
     * @method _IH_Themes_C|Themes[] cursor()
     * @method Themes|null|_IH_Themes_C|Themes[] find($id, array|string $columns = ['*'])
     * @method _IH_Themes_C|Themes[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Themes|_IH_Themes_C|Themes[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Themes|_IH_Themes_C|Themes[] findOrFail($id, array|string $columns = ['*'])
     * @method Themes|_IH_Themes_C|Themes[] findOrNew($id, array|string $columns = ['*'])
     * @method Themes first(array|string $columns = ['*'])
     * @method Themes firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Themes firstOrCreate(array $attributes = [], array $values = [])
     * @method Themes firstOrFail(array|string $columns = ['*'])
     * @method Themes firstOrNew(array $attributes = [], array $values = [])
     * @method Themes firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Themes forceCreate(array $attributes)
     * @method _IH_Themes_C|Themes[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Themes_C|Themes[] get(array|string $columns = ['*'])
     * @method Themes getModel()
     * @method Themes[] getModels(array|string $columns = ['*'])
     * @method _IH_Themes_C|Themes[] hydrate(array $items)
     * @method Themes make(array $attributes = [])
     * @method Themes newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Themes[]|_IH_Themes_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Themes[]|_IH_Themes_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Themes sole(array|string $columns = ['*'])
     * @method Themes updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Themes_QB extends _BaseBuilder {}

    /**
     * @method TopbarInfo|null getOrPut($key, $value)
     * @method TopbarInfo|$this shift(int $count = 1)
     * @method TopbarInfo|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TopbarInfo|$this pop(int $count = 1)
     * @method TopbarInfo|null pull($key, \Closure $default = null)
     * @method TopbarInfo|null last(callable $callback = null, \Closure $default = null)
     * @method TopbarInfo|$this random(callable|int|null $number = null)
     * @method TopbarInfo|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TopbarInfo|null get($key, \Closure $default = null)
     * @method TopbarInfo|null first(callable $callback = null, \Closure $default = null)
     * @method TopbarInfo|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TopbarInfo|null find($key, $default = null)
     * @method TopbarInfo[] all()
     */
    class _IH_TopbarInfo_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TopbarInfo[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_TopbarInfo_QB whereId($value)
     * @method _IH_TopbarInfo_QB whereIcon($value)
     * @method _IH_TopbarInfo_QB whereUrl($value)
     * @method _IH_TopbarInfo_QB whereCreatedAt($value)
     * @method _IH_TopbarInfo_QB whereUpdatedAt($value)
     * @method TopbarInfo baseSole(array|string $columns = ['*'])
     * @method TopbarInfo create(array $attributes = [])
     * @method _IH_TopbarInfo_C|TopbarInfo[] cursor()
     * @method TopbarInfo|null|_IH_TopbarInfo_C|TopbarInfo[] find($id, array|string $columns = ['*'])
     * @method _IH_TopbarInfo_C|TopbarInfo[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TopbarInfo|_IH_TopbarInfo_C|TopbarInfo[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TopbarInfo|_IH_TopbarInfo_C|TopbarInfo[] findOrFail($id, array|string $columns = ['*'])
     * @method TopbarInfo|_IH_TopbarInfo_C|TopbarInfo[] findOrNew($id, array|string $columns = ['*'])
     * @method TopbarInfo first(array|string $columns = ['*'])
     * @method TopbarInfo firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TopbarInfo firstOrCreate(array $attributes = [], array $values = [])
     * @method TopbarInfo firstOrFail(array|string $columns = ['*'])
     * @method TopbarInfo firstOrNew(array $attributes = [], array $values = [])
     * @method TopbarInfo firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TopbarInfo forceCreate(array $attributes)
     * @method _IH_TopbarInfo_C|TopbarInfo[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TopbarInfo_C|TopbarInfo[] get(array|string $columns = ['*'])
     * @method TopbarInfo getModel()
     * @method TopbarInfo[] getModels(array|string $columns = ['*'])
     * @method _IH_TopbarInfo_C|TopbarInfo[] hydrate(array $items)
     * @method TopbarInfo make(array $attributes = [])
     * @method TopbarInfo newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TopbarInfo[]|_IH_TopbarInfo_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TopbarInfo[]|_IH_TopbarInfo_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TopbarInfo sole(array|string $columns = ['*'])
     * @method TopbarInfo updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TopbarInfo_QB extends _BaseBuilder {}

    /**
     * @method UserDomain|null getOrPut($key, $value)
     * @method UserDomain|$this shift(int $count = 1)
     * @method UserDomain|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserDomain|$this pop(int $count = 1)
     * @method UserDomain|null pull($key, \Closure $default = null)
     * @method UserDomain|null last(callable $callback = null, \Closure $default = null)
     * @method UserDomain|$this random(callable|int|null $number = null)
     * @method UserDomain|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserDomain|null get($key, \Closure $default = null)
     * @method UserDomain|null first(callable $callback = null, \Closure $default = null)
     * @method UserDomain|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserDomain|null find($key, $default = null)
     * @method UserDomain[] all()
     */
    class _IH_UserDomain_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserDomain[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_UserDomain_QB whereId($value)
     * @method _IH_UserDomain_QB whereDomain($value)
     * @method _IH_UserDomain_QB whereTenantId($value)
     * @method _IH_UserDomain_QB whereCreatedAt($value)
     * @method _IH_UserDomain_QB whereUpdatedAt($value)
     * @method UserDomain baseSole(array|string $columns = ['*'])
     * @method UserDomain create(array $attributes = [])
     * @method _IH_UserDomain_C|UserDomain[] cursor()
     * @method UserDomain|null|_IH_UserDomain_C|UserDomain[] find($id, array|string $columns = ['*'])
     * @method _IH_UserDomain_C|UserDomain[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserDomain|_IH_UserDomain_C|UserDomain[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserDomain|_IH_UserDomain_C|UserDomain[] findOrFail($id, array|string $columns = ['*'])
     * @method UserDomain|_IH_UserDomain_C|UserDomain[] findOrNew($id, array|string $columns = ['*'])
     * @method UserDomain first(array|string $columns = ['*'])
     * @method UserDomain firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserDomain firstOrCreate(array $attributes = [], array $values = [])
     * @method UserDomain firstOrFail(array|string $columns = ['*'])
     * @method UserDomain firstOrNew(array $attributes = [], array $values = [])
     * @method UserDomain firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserDomain forceCreate(array $attributes)
     * @method _IH_UserDomain_C|UserDomain[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserDomain_C|UserDomain[] get(array|string $columns = ['*'])
     * @method UserDomain getModel()
     * @method UserDomain[] getModels(array|string $columns = ['*'])
     * @method _IH_UserDomain_C|UserDomain[] hydrate(array $items)
     * @method UserDomain make(array $attributes = [])
     * @method UserDomain newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserDomain[]|_IH_UserDomain_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|UserDomain[]|_IH_UserDomain_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserDomain sole(array|string $columns = ['*'])
     * @method UserDomain updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserDomain_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereUsername($value)
     * @method _IH_User_QB whereHasSubdomain($value)
     * @method _IH_User_QB whereEmailVerified($value)
     * @method _IH_User_QB whereEmailVerifyToken($value)
     * @method _IH_User_QB whereMobile($value)
     * @method _IH_User_QB whereCompany($value)
     * @method _IH_User_QB whereAddress($value)
     * @method _IH_User_QB whereCity($value)
     * @method _IH_User_QB whereState($value)
     * @method _IH_User_QB whereCountry($value)
     * @method _IH_User_QB whereImage($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereApiTokenPlanText($value)
     * @method _IH_User_QB whereTempPassword($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}

    /**
     * @method Widgets|null getOrPut($key, $value)
     * @method Widgets|$this shift(int $count = 1)
     * @method Widgets|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Widgets|$this pop(int $count = 1)
     * @method Widgets|null pull($key, \Closure $default = null)
     * @method Widgets|null last(callable $callback = null, \Closure $default = null)
     * @method Widgets|$this random(callable|int|null $number = null)
     * @method Widgets|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Widgets|null get($key, \Closure $default = null)
     * @method Widgets|null first(callable $callback = null, \Closure $default = null)
     * @method Widgets|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Widgets|null find($key, $default = null)
     * @method Widgets[] all()
     */
    class _IH_Widgets_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Widgets[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Widgets_QB whereId($value)
     * @method _IH_Widgets_QB whereWidgetArea($value)
     * @method _IH_Widgets_QB whereWidgetOrder($value)
     * @method _IH_Widgets_QB whereWidgetLocation($value)
     * @method _IH_Widgets_QB whereWidgetName($value)
     * @method _IH_Widgets_QB whereWidgetContent($value)
     * @method _IH_Widgets_QB whereCreatedAt($value)
     * @method _IH_Widgets_QB whereUpdatedAt($value)
     * @method _IH_Widgets_QB whereWidgetNamespace($value)
     * @method Widgets baseSole(array|string $columns = ['*'])
     * @method Widgets create(array $attributes = [])
     * @method _IH_Widgets_C|Widgets[] cursor()
     * @method Widgets|null|_IH_Widgets_C|Widgets[] find($id, array|string $columns = ['*'])
     * @method _IH_Widgets_C|Widgets[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Widgets|_IH_Widgets_C|Widgets[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Widgets|_IH_Widgets_C|Widgets[] findOrFail($id, array|string $columns = ['*'])
     * @method Widgets|_IH_Widgets_C|Widgets[] findOrNew($id, array|string $columns = ['*'])
     * @method Widgets first(array|string $columns = ['*'])
     * @method Widgets firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Widgets firstOrCreate(array $attributes = [], array $values = [])
     * @method Widgets firstOrFail(array|string $columns = ['*'])
     * @method Widgets firstOrNew(array $attributes = [], array $values = [])
     * @method Widgets firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Widgets forceCreate(array $attributes)
     * @method _IH_Widgets_C|Widgets[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Widgets_C|Widgets[] get(array|string $columns = ['*'])
     * @method Widgets getModel()
     * @method Widgets[] getModels(array|string $columns = ['*'])
     * @method _IH_Widgets_C|Widgets[] hydrate(array $items)
     * @method Widgets make(array $attributes = [])
     * @method Widgets newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Widgets[]|_IH_Widgets_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Widgets[]|_IH_Widgets_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Widgets sole(array|string $columns = ['*'])
     * @method Widgets updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Widgets_QB extends _BaseBuilder {}
}
