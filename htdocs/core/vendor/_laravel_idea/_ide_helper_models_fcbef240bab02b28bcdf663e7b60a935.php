<?php //a3948af566eb6e07f7fa7714e37774c9
/** @noinspection all */

namespace App\Models {

    use Database\Factories\AdminFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Admin_C;
    use LaravelIdea\Helper\App\Models\_IH_Admin_QB;
    use LaravelIdea\Helper\App\Models\_IH_Brand_C;
    use LaravelIdea\Helper\App\Models\_IH_Brand_QB;
    use LaravelIdea\Helper\App\Models\_IH_ContactMessage_C;
    use LaravelIdea\Helper\App\Models\_IH_ContactMessage_QB;
    use LaravelIdea\Helper\App\Models\_IH_CustomDomain_C;
    use LaravelIdea\Helper\App\Models\_IH_CustomDomain_QB;
    use LaravelIdea\Helper\App\Models\_IH_FormBuilder_C;
    use LaravelIdea\Helper\App\Models\_IH_FormBuilder_QB;
    use LaravelIdea\Helper\App\Models\_IH_Language_C;
    use LaravelIdea\Helper\App\Models\_IH_Language_QB;
    use LaravelIdea\Helper\App\Models\_IH_MediaUploader_C;
    use LaravelIdea\Helper\App\Models\_IH_MediaUploader_QB;
    use LaravelIdea\Helper\App\Models\_IH_Menu_C;
    use LaravelIdea\Helper\App\Models\_IH_Menu_QB;
    use LaravelIdea\Helper\App\Models\_IH_MetaInfo_C;
    use LaravelIdea\Helper\App\Models\_IH_MetaInfo_QB;
    use LaravelIdea\Helper\App\Models\_IH_Newsletter_C;
    use LaravelIdea\Helper\App\Models\_IH_Newsletter_QB;
    use LaravelIdea\Helper\App\Models\_IH_Order_C;
    use LaravelIdea\Helper\App\Models\_IH_Order_QB;
    use LaravelIdea\Helper\App\Models\_IH_PageBuilder_C;
    use LaravelIdea\Helper\App\Models\_IH_PageBuilder_QB;
    use LaravelIdea\Helper\App\Models\_IH_Page_C;
    use LaravelIdea\Helper\App\Models\_IH_Page_QB;
    use LaravelIdea\Helper\App\Models\_IH_PaymentGateway_C;
    use LaravelIdea\Helper\App\Models\_IH_PaymentGateway_QB;
    use LaravelIdea\Helper\App\Models\_IH_PaymentLogs_C;
    use LaravelIdea\Helper\App\Models\_IH_PaymentLogs_QB;
    use LaravelIdea\Helper\App\Models\_IH_PlanFeature_C;
    use LaravelIdea\Helper\App\Models\_IH_PlanFeature_QB;
    use LaravelIdea\Helper\App\Models\_IH_PricePlan_C;
    use LaravelIdea\Helper\App\Models\_IH_PricePlan_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductReviews_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductReviews_QB;
    use LaravelIdea\Helper\App\Models\_IH_StaticOptionCentral_C;
    use LaravelIdea\Helper\App\Models\_IH_StaticOptionCentral_QB;
    use LaravelIdea\Helper\App\Models\_IH_StaticOption_C;
    use LaravelIdea\Helper\App\Models\_IH_StaticOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_Status_C;
    use LaravelIdea\Helper\App\Models\_IH_Status_QB;
    use LaravelIdea\Helper\App\Models\_IH_SupportDepartment_C;
    use LaravelIdea\Helper\App\Models\_IH_SupportDepartment_QB;
    use LaravelIdea\Helper\App\Models\_IH_SupportTicketMessage_C;
    use LaravelIdea\Helper\App\Models\_IH_SupportTicketMessage_QB;
    use LaravelIdea\Helper\App\Models\_IH_SupportTicket_C;
    use LaravelIdea\Helper\App\Models\_IH_SupportTicket_QB;
    use LaravelIdea\Helper\App\Models\_IH_Tenant_C;
    use LaravelIdea\Helper\App\Models\_IH_Tenant_QB;
    use LaravelIdea\Helper\App\Models\_IH_Testimonial_C;
    use LaravelIdea\Helper\App\Models\_IH_Testimonial_QB;
    use LaravelIdea\Helper\App\Models\_IH_Themes_C;
    use LaravelIdea\Helper\App\Models\_IH_Themes_QB;
    use LaravelIdea\Helper\App\Models\_IH_TopbarInfo_C;
    use LaravelIdea\Helper\App\Models\_IH_TopbarInfo_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserDomain_C;
    use LaravelIdea\Helper\App\Models\_IH_UserDomain_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\App\Models\_IH_Widgets_C;
    use LaravelIdea\Helper\App\Models\_IH_Widgets_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_QB;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_Domain_C;
    use LaravelIdea\Helper\Stancl\Tenancy\Database\Models\_IH_Domain_QB;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role;
    use Stancl\Tenancy\Database\Models\Domain;

    /**
     * @property int $id
     * @property string $name
     * @property string $username
     * @property int $email_verified
     * @property string|null $email_verify_token
     * @property string|null $mobile
     * @property string $email
     * @property int|null $image
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method MorphToMany|_IH_Permission_QB permissions()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method MorphToMany|_IH_Role_QB roles()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_Admin_QB onWriteConnection()
     * @method _IH_Admin_QB newQuery()
     * @method static _IH_Admin_QB on(null|string $connection = null)
     * @method static _IH_Admin_QB query()
     * @method static _IH_Admin_QB with(array|string $relations)
     * @method _IH_Admin_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Admin_C|Admin[] all()
     * @foreignLinks id,\Modules\Campaign\Entities\Campaign,admin_id|id,\App\Models\SupportTicket,admin_id|id,\Modules\Blog\Entities\Blog,admin_id
     * @mixin _IH_Admin_QB
     * @method static AdminFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Admin extends Model {}

    /**
     * @property int $id
     * @property string|null $url
     * @property string|null $image
     * @property int|null $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string $name
     * @property string $slug
     * @property int $image_id
     * @property int $banner_id
     * @property string|null $title
     * @property Carbon|null $deleted_at
     * @property MediaUploader $getImage
     * @method HasOne|_IH_MediaUploader_QB getImage()
     * @method static _IH_Brand_QB onWriteConnection()
     * @method _IH_Brand_QB newQuery()
     * @method static _IH_Brand_QB on(null|string $connection = null)
     * @method static _IH_Brand_QB query()
     * @method static _IH_Brand_QB with(array|string $relations)
     * @method _IH_Brand_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Brand_C|Brand[] all()
     * @foreignLinks id,\Modules\Product\Entities\Product,brand_id
     * @mixin _IH_Brand_QB
     */
    class Brand extends Model {}

    /**
     * @property int $id
     * @property int $form_builder_id
     * @property string|null $fields
     * @property string|null $attachment
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property FormBuilder $form
     * @method BelongsTo|_IH_FormBuilder_QB form()
     * @method static _IH_ContactMessage_QB onWriteConnection()
     * @method _IH_ContactMessage_QB newQuery()
     * @method static _IH_ContactMessage_QB on(null|string $connection = null)
     * @method static _IH_ContactMessage_QB query()
     * @method static _IH_ContactMessage_QB with(array|string $relations)
     * @method _IH_ContactMessage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ContactMessage_C|ContactMessage[] all()
     * @ownLinks form_builder_id,\App\Models\FormBuilder,id
     * @mixin _IH_ContactMessage_QB
     */
    class ContactMessage extends Model {}

    /**
     * @property int $id
     * @property int|null $user_id
     * @property string|null $custom_domain
     * @property string|null $custom_domain_status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $unique_key
     * @property string|null $old_domain
     * @property Tenant|null $tenant
     * @method BelongsTo|_IH_Tenant_QB tenant()
     * @property _IH_Tenant_C|Tenant[] $tenants
     * @property-read int $tenants_count
     * @method BelongsToMany|_IH_Tenant_QB tenants()
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_CustomDomain_QB onWriteConnection()
     * @method _IH_CustomDomain_QB newQuery()
     * @method static _IH_CustomDomain_QB on(null|string $connection = null)
     * @method static _IH_CustomDomain_QB query()
     * @method static _IH_CustomDomain_QB with(array|string $relations)
     * @method _IH_CustomDomain_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CustomDomain_C|CustomDomain[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_CustomDomain_QB
     */
    class CustomDomain extends Model {}

    /**
     * @property int $id
     * @property string|null $title
     * @property string|null $email
     * @property string|null $button_text
     * @property string|null $fields
     * @property string|null $success_message
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_FormBuilder_QB onWriteConnection()
     * @method _IH_FormBuilder_QB newQuery()
     * @method static _IH_FormBuilder_QB on(null|string $connection = null)
     * @method static _IH_FormBuilder_QB query()
     * @method static _IH_FormBuilder_QB with(array|string $relations)
     * @method _IH_FormBuilder_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FormBuilder_C|FormBuilder[] all()
     * @foreignLinks id,\App\Models\ContactMessage,form_builder_id
     * @mixin _IH_FormBuilder_QB
     */
    class FormBuilder extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property int $direction
     * @property int $status
     * @property int $default
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Language_QB onWriteConnection()
     * @method _IH_Language_QB newQuery()
     * @method static _IH_Language_QB on(null|string $connection = null)
     * @method static _IH_Language_QB query()
     * @method static _IH_Language_QB with(array|string $relations)
     * @method _IH_Language_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Language_C|Language[] all()
     * @mixin _IH_Language_QB
     */
    class Language extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $path
     * @property string|null $alt
     * @property string|null $size
     * @property int $user_type
     * @property int $user_id
     * @property string|null $dimensions
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_MediaUploader_QB onWriteConnection()
     * @method _IH_MediaUploader_QB newQuery()
     * @method static _IH_MediaUploader_QB on(null|string $connection = null)
     * @method static _IH_MediaUploader_QB query()
     * @method static _IH_MediaUploader_QB with(array|string $relations)
     * @method _IH_MediaUploader_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MediaUploader_C|MediaUploader[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_MediaUploader_QB
     */
    class MediaUploader extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string|null $content
     * @property string|null $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Menu_QB onWriteConnection()
     * @method _IH_Menu_QB newQuery()
     * @method static _IH_Menu_QB on(null|string $connection = null)
     * @method static _IH_Menu_QB query()
     * @method static _IH_Menu_QB with(array|string $relations)
     * @method _IH_Menu_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Menu_C|Menu[] all()
     * @mixin _IH_Menu_QB
     */
    class Menu extends Model {}

    /**
     * @property int $id
     * @property string|null $title
     * @property string|null $description
     * @property string|null $image
     * @property string|null $fb_title
     * @property string|null $fb_description
     * @property string|null $fb_image
     * @property string|null $tw_title
     * @property string|null $tw_description
     * @property string|null $tw_image
     * @property int $metainfoable_id
     * @property string $metainfoable_type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $metainfoable
     * @method MorphTo metainfoable()
     * @method static _IH_MetaInfo_QB onWriteConnection()
     * @method _IH_MetaInfo_QB newQuery()
     * @method static _IH_MetaInfo_QB on(null|string $connection = null)
     * @method static _IH_MetaInfo_QB query()
     * @method static _IH_MetaInfo_QB with(array|string $relations)
     * @method _IH_MetaInfo_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MetaInfo_C|MetaInfo[] all()
     * @mixin _IH_MetaInfo_QB
     */
    class MetaInfo extends Model {}

    /**
     * @property int $id
     * @property string $email
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $token
     * @property string|null $verified
     * @method static _IH_Newsletter_QB onWriteConnection()
     * @method _IH_Newsletter_QB newQuery()
     * @method static _IH_Newsletter_QB on(null|string $connection = null)
     * @method static _IH_Newsletter_QB query()
     * @method static _IH_Newsletter_QB with(array|string $relations)
     * @method _IH_Newsletter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Newsletter_C|Newsletter[] all()
     * @mixin _IH_Newsletter_QB
     */
    class Newsletter extends Model {}

    /**
     * @property int $id
     * @property int|null $user_id
     * @property string|null $checkout_type
     * @property string $status
     * @property string $payment_status
     * @property string|null $package_id
     * @property string|null $package_name
     * @property string|null $package_price
     * @property string|null $custom_fields
     * @property string|null $attachment
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property PricePlan|null $package
     * @method HasOne|_IH_PricePlan_QB package()
     * @property PaymentLogs $paymentlog
     * @method HasOne|_IH_PaymentLogs_QB paymentlog()
     * @property User|null $user
     * @method HasOne|_IH_User_QB user()
     * @method static _IH_Order_QB onWriteConnection()
     * @method _IH_Order_QB newQuery()
     * @method static _IH_Order_QB on(null|string $connection = null)
     * @method static _IH_Order_QB query()
     * @method static _IH_Order_QB with(array|string $relations)
     * @method _IH_Order_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Order_C|Order[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_Order_QB
     */
    class Order extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $slug
     * @property string|null $page_content
     * @property int $visibility
     * @property int $breadcrumb
     * @property int $page_builder
     * @property int $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property MetaInfo $metainfo
     * @method MorphToMany|_IH_MetaInfo_QB metainfo()
     * @method static _IH_Page_QB onWriteConnection()
     * @method _IH_Page_QB newQuery()
     * @method static _IH_Page_QB on(null|string $connection = null)
     * @method static _IH_Page_QB query()
     * @method static _IH_Page_QB with(array|string $relations)
     * @method _IH_Page_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Page_C|Page[] all()
     * @mixin _IH_Page_QB
     */
    class Page extends Model {}

    /**
     * @property int $id
     * @property string|null $addon_name
     * @property string|null $addon_type
     * @property string|null $addon_location
     * @property int|null $addon_order
     * @property int|null $addon_page_id
     * @property string|null $addon_page_type
     * @property string|null $addon_settings
     * @property string|null $addon_namespace
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_PageBuilder_QB onWriteConnection()
     * @method _IH_PageBuilder_QB newQuery()
     * @method static _IH_PageBuilder_QB on(null|string $connection = null)
     * @method static _IH_PageBuilder_QB query()
     * @method static _IH_PageBuilder_QB with(array|string $relations)
     * @method _IH_PageBuilder_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PageBuilder_C|PageBuilder[] all()
     * @mixin _IH_PageBuilder_QB
     */
    class PageBuilder extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $image
     * @property string|null $description
     * @property int $status
     * @property int $test_mode
     * @property string $credentials
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_PaymentGateway_QB onWriteConnection()
     * @method _IH_PaymentGateway_QB newQuery()
     * @method static _IH_PaymentGateway_QB on(null|string $connection = null)
     * @method static _IH_PaymentGateway_QB query()
     * @method static _IH_PaymentGateway_QB with(array|string $relations)
     * @method _IH_PaymentGateway_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PaymentGateway_C|PaymentGateway[] all()
     * @mixin _IH_PaymentGateway_QB
     */
    class PaymentGateway extends Model {}

    /**
     * @property int $id
     * @property string|null $email
     * @property string|null $name
     * @property string|null $package_name
     * @property string|null $package_price
     * @property string|null $package_gateway
     * @property string|null $package_id
     * @property int|null $user_id
     * @property string|null $status
     * @property string|null $payment_status
     * @property string|null $transaction_id
     * @property string|null $attachments
     * @property string|null $custom_fields
     * @property string|null $track
     * @property string|null $renew_status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $start_date
     * @property Carbon|null $expire_date
     * @property int|null $is_renew
     * @property string|null $tenant_id
     * @property Domain|null $domain
     * @method BelongsTo|_IH_Domain_QB domain()
     * @property PricePlan|null $package
     * @method BelongsTo|_IH_PricePlan_QB package()
     * @property _IH_PricePlan_C|PricePlan[] $price_plan
     * @property-read int $price_plan_count
     * @method HasMany|_IH_PricePlan_QB price_plan()
     * @property Tenant|null $tenant
     * @method BelongsTo|_IH_Tenant_QB tenant()
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_PaymentLogs_QB onWriteConnection()
     * @method _IH_PaymentLogs_QB newQuery()
     * @method static _IH_PaymentLogs_QB on(null|string $connection = null)
     * @method static _IH_PaymentLogs_QB query()
     * @method static _IH_PaymentLogs_QB with(array|string $relations)
     * @method _IH_PaymentLogs_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PaymentLogs_C|PaymentLogs[] all()
     * @ownLinks user_id,\App\Models\User,id|tenant_id,\App\Models\Tenant,id
     * @mixin _IH_PaymentLogs_QB
     */
    class PaymentLogs extends Model {}

    /**
     * @property int $id
     * @property int $plan_id
     * @property string $feature_name
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property PricePlan $plan
     * @method BelongsTo|_IH_PricePlan_QB plan()
     * @method static _IH_PlanFeature_QB onWriteConnection()
     * @method _IH_PlanFeature_QB newQuery()
     * @method static _IH_PlanFeature_QB on(null|string $connection = null)
     * @method static _IH_PlanFeature_QB query()
     * @method static _IH_PlanFeature_QB with(array|string $relations)
     * @method _IH_PlanFeature_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PlanFeature_C|PlanFeature[] all()
     * @mixin _IH_PlanFeature_QB
     */
    class PlanFeature extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property int|null $type
     * @property int $status
     * @property float $price
     * @property string|null $faq
     * @property int|null $blog_permission_feature
     * @property int|null $product_permission_feature
     * @property int|null $page_permission_feature
     * @property bool $has_trial
     * @property int|null $trial_days
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $storage_permission_feature
     * @property _IH_PlanFeature_C|PlanFeature[] $plan_features
     * @property-read int $plan_features_count
     * @method HasMany|_IH_PlanFeature_QB plan_features()
     * @method static _IH_PricePlan_QB onWriteConnection()
     * @method _IH_PricePlan_QB newQuery()
     * @method static _IH_PricePlan_QB on(null|string $connection = null)
     * @method static _IH_PricePlan_QB query()
     * @method static _IH_PricePlan_QB with(array|string $relations)
     * @method _IH_PricePlan_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PricePlan_C|PricePlan[] all()
     * @mixin _IH_PricePlan_QB
     */
    class PricePlan extends Model {}

    /**
     * @property int $id
     * @property int|null $product_id
     * @property int|null $user_id
     * @property int|null $rating
     * @property string|null $review_text
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_ProductReviews_QB onWriteConnection()
     * @method _IH_ProductReviews_QB newQuery()
     * @method static _IH_ProductReviews_QB on(null|string $connection = null)
     * @method static _IH_ProductReviews_QB query()
     * @method static _IH_ProductReviews_QB with(array|string $relations)
     * @method _IH_ProductReviews_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductReviews_C|ProductReviews[] all()
     * @ownLinks product_id,\Modules\Product\Entities\Product,id|user_id,\App\Models\User,id
     * @mixin _IH_ProductReviews_QB
     */
    class ProductReviews extends Model {}

    /**
     * @property int $id
     * @property string $option_name
     * @property string|null $option_value
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_StaticOption_QB onWriteConnection()
     * @method _IH_StaticOption_QB newQuery()
     * @method static _IH_StaticOption_QB on(null|string $connection = null)
     * @method static _IH_StaticOption_QB query()
     * @method static _IH_StaticOption_QB with(array|string $relations)
     * @method _IH_StaticOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_StaticOption_C|StaticOption[] all()
     * @mixin _IH_StaticOption_QB
     */
    class StaticOption extends Model {}

    /**
     * @property int $id
     * @property string $option_name
     * @property string|null $option_value
     * @property string|null $unique_key
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Tenant_C|Tenant[] $tenants
     * @property-read int $tenants_count
     * @method BelongsToMany|_IH_Tenant_QB tenants()
     * @method static _IH_StaticOptionCentral_QB onWriteConnection()
     * @method _IH_StaticOptionCentral_QB newQuery()
     * @method static _IH_StaticOptionCentral_QB on(null|string $connection = null)
     * @method static _IH_StaticOptionCentral_QB query()
     * @method static _IH_StaticOptionCentral_QB with(array|string $relations)
     * @method _IH_StaticOptionCentral_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_StaticOptionCentral_C|StaticOptionCentral[] all()
     * @mixin _IH_StaticOptionCentral_QB
     */
    class StaticOptionCentral extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $deleted_at
     * @method static _IH_Status_QB onWriteConnection()
     * @method _IH_Status_QB newQuery()
     * @method static _IH_Status_QB on(null|string $connection = null)
     * @method static _IH_Status_QB query()
     * @method static _IH_Status_QB with(array|string $relations)
     * @method _IH_Status_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Status_C|Status[] all()
     * @foreignLinks id,\Modules\Product\Entities\Product,status_id|id,\Modules\Attributes\Entities\Category,status_id|id,\Modules\Attributes\Entities\SubCategory,status_id|id,\Modules\Attributes\Entities\ChildCategory,status_id
     * @mixin _IH_Status_QB
     */
    class Status extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read mixed[] $translations attribute
     * @method static _IH_SupportDepartment_QB onWriteConnection()
     * @method _IH_SupportDepartment_QB newQuery()
     * @method static _IH_SupportDepartment_QB on(null|string $connection = null)
     * @method static _IH_SupportDepartment_QB query()
     * @method static _IH_SupportDepartment_QB with(array|string $relations)
     * @method _IH_SupportDepartment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SupportDepartment_C|SupportDepartment[] all()
     * @mixin _IH_SupportDepartment_QB
     */
    class SupportDepartment extends Model {}

    /**
     * @property int $id
     * @property string|null $title
     * @property string|null $via
     * @property string|null $operating_system
     * @property string|null $user_agent
     * @property string|null $description
     * @property string|null $subject
     * @property string|null $status
     * @property string|null $priority
     * @property int|null $department_id
     * @property int|null $user_id
     * @property int|null $admin_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Admin|null $admin
     * @method BelongsTo|_IH_Admin_QB admin()
     * @property SupportDepartment|null $department
     * @method BelongsTo|_IH_SupportDepartment_QB department()
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_SupportTicket_QB onWriteConnection()
     * @method _IH_SupportTicket_QB newQuery()
     * @method static _IH_SupportTicket_QB on(null|string $connection = null)
     * @method static _IH_SupportTicket_QB query()
     * @method static _IH_SupportTicket_QB with(array|string $relations)
     * @method _IH_SupportTicket_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SupportTicket_C|SupportTicket[] all()
     * @ownLinks user_id,\App\Models\User,id|admin_id,\App\Models\Admin,id
     * @foreignLinks id,\App\Models\SupportTicketMessage,support_ticket_id
     * @mixin _IH_SupportTicket_QB
     */
    class SupportTicket extends Model {}

    /**
     * @property int $id
     * @property string|null $message
     * @property string|null $notify
     * @property string|null $attachment
     * @property string|null $type
     * @property int|null $user_id
     * @property int|null $support_ticket_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_SupportTicketMessage_QB onWriteConnection()
     * @method _IH_SupportTicketMessage_QB newQuery()
     * @method static _IH_SupportTicketMessage_QB on(null|string $connection = null)
     * @method static _IH_SupportTicketMessage_QB query()
     * @method static _IH_SupportTicketMessage_QB with(array|string $relations)
     * @method _IH_SupportTicketMessage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SupportTicketMessage_C|SupportTicketMessage[] all()
     * @ownLinks user_id,\App\Models\User,id|support_ticket_id,\App\Models\SupportTicket,id
     * @mixin _IH_SupportTicketMessage_QB
     */
    class SupportTicketMessage extends Model {}

    /**
     * @property string $id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property array|null $data
     * @property int|null $user_id
     * @property string|null $theme_slug
     * @property CustomDomain $custom_domain
     * @method HasOne|_IH_CustomDomain_QB custom_domain()
     * @property UserDomain $domain
     * @method HasOne|_IH_UserDomain_QB domain()
     * @property _IH_Domain_C|Domain[] $domains
     * @property-read int $domains_count
     * @method HasMany|_IH_Domain_QB domains()
     * @property PaymentLogs $payment_log
     * @method HasOne|_IH_PaymentLogs_QB payment_log()
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Tenant_QB onWriteConnection()
     * @method _IH_Tenant_QB newQuery()
     * @method static _IH_Tenant_QB on(null|string $connection = null)
     * @method static _IH_Tenant_QB query()
     * @method static _IH_Tenant_QB with(array|string $relations)
     * @method _IH_Tenant_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tenant_C|Tenant[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks id,\Stancl\Tenancy\Database\Models\Domain,tenant_id|id,\App\Models\PaymentLogs,tenant_id
     * @mixin _IH_Tenant_QB
     */
    class Tenant extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $designation
     * @property string $description
     * @property string|null $image
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $company
     * @method static _IH_Testimonial_QB onWriteConnection()
     * @method _IH_Testimonial_QB newQuery()
     * @method static _IH_Testimonial_QB on(null|string $connection = null)
     * @method static _IH_Testimonial_QB query()
     * @method static _IH_Testimonial_QB with(array|string $relations)
     * @method _IH_Testimonial_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Testimonial_C|Testimonial[] all()
     * @mixin _IH_Testimonial_QB
     */
    class Testimonial extends Model {}

    /**
     * @property int $id
     * @property string|null $title
     * @property string $slug
     * @property string|null $description
     * @property bool $status
     * @property bool $is_premium
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $unique_key
     * @property _IH_Tenant_C|Tenant[] $tenants
     * @property-read int $tenants_count
     * @method BelongsToMany|_IH_Tenant_QB tenants()
     * @method static _IH_Themes_QB onWriteConnection()
     * @method _IH_Themes_QB newQuery()
     * @method static _IH_Themes_QB on(null|string $connection = null)
     * @method static _IH_Themes_QB query()
     * @method static _IH_Themes_QB with(array|string $relations)
     * @method _IH_Themes_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Themes_C|Themes[] all()
     * @mixin _IH_Themes_QB
     */
    class Themes extends Model {}

    /**
     * @property int $id
     * @property string|null $icon
     * @property string|null $url
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_TopbarInfo_QB onWriteConnection()
     * @method _IH_TopbarInfo_QB newQuery()
     * @method static _IH_TopbarInfo_QB on(null|string $connection = null)
     * @method static _IH_TopbarInfo_QB query()
     * @method static _IH_TopbarInfo_QB with(array|string $relations)
     * @method _IH_TopbarInfo_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TopbarInfo_C|TopbarInfo[] all()
     * @mixin _IH_TopbarInfo_QB
     */
    class TopbarInfo extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property string $username
     * @property bool $has_subdomain
     * @property int $email_verified
     * @property string|null $email_verify_token
     * @property string|null $mobile
     * @property string|null $company
     * @property string|null $address
     * @property string|null $city
     * @property string|null $state
     * @property string|null $country
     * @property int|null $image
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $api_token_plan_text
     * @property string|null $temp_password
     * @property _IH_CustomDomain_C|CustomDomain[] $custom_domains
     * @property-read int $custom_domains_count
     * @method HasMany|_IH_CustomDomain_QB custom_domains()
     * @property _IH_UserDomain_C|UserDomain[] $domains
     * @property-read int $domains_count
     * @method HasMany|_IH_UserDomain_QB domains()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_PaymentLogs_C|PaymentLogs[] $payment_log
     * @property-read int $payment_log_count
     * @method HasMany|_IH_PaymentLogs_QB payment_log()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Tenant_C|Tenant[] $tenant_details
     * @property-read int $tenant_details_count
     * @method HasMany|_IH_Tenant_QB tenant_details()
     * @property Tenant $tenant_info
     * @method BelongsTo|_IH_Tenant_QB tenant_info()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\App\Models\ProductReviews,user_id|id,\App\Models\Tenant,user_id|id,\App\Models\Order,user_id|id,\App\Models\PaymentLogs,user_id|id,\App\Models\SupportTicket,user_id|id,\App\Models\SupportTicketMessage,user_id|id,\Modules\Blog\Entities\BlogComment,user_id|id,\App\Models\MediaUploader,user_id|id,\Modules\Blog\Entities\Blog,user_id|id,\App\Models\CustomDomain,user_id
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}

    /**
     * @property int $id
     * @property string $domain
     * @property string $tenant_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_UserDomain_QB onWriteConnection()
     * @method _IH_UserDomain_QB newQuery()
     * @method static _IH_UserDomain_QB on(null|string $connection = null)
     * @method static _IH_UserDomain_QB query()
     * @method static _IH_UserDomain_QB with(array|string $relations)
     * @method _IH_UserDomain_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserDomain_C|UserDomain[] all()
     * @ownLinks tenant_id,\App\Models\Tenant,id
     * @mixin _IH_UserDomain_QB
     */
    class UserDomain extends Model {}

    /**
     * @property int $id
     * @property string|null $widget_area
     * @property int|null $widget_order
     * @property string|null $widget_location
     * @property string $widget_name
     * @property string $widget_content
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $widget_namespace
     * @method static _IH_Widgets_QB onWriteConnection()
     * @method _IH_Widgets_QB newQuery()
     * @method static _IH_Widgets_QB on(null|string $connection = null)
     * @method static _IH_Widgets_QB query()
     * @method static _IH_Widgets_QB with(array|string $relations)
     * @method _IH_Widgets_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Widgets_C|Widgets[] all()
     * @mixin _IH_Widgets_QB
     */
    class Widgets extends Model {}
}
