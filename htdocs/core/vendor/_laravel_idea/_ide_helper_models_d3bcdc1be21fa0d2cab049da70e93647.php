<?php //91d8a99ec4239579887e0f359bf4d3b3
/** @noinspection all */

namespace Modules\Blog\Entities {

    use App\Models\Admin;
    use App\Models\MetaInfo;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Admin_QB;
    use LaravelIdea\Helper\App\Models\_IH_MetaInfo_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Modules\Blog\Entities\_IH_BlogCategory_C;
    use LaravelIdea\Helper\Modules\Blog\Entities\_IH_BlogCategory_QB;
    use LaravelIdea\Helper\Modules\Blog\Entities\_IH_BlogComment_C;
    use LaravelIdea\Helper\Modules\Blog\Entities\_IH_BlogComment_QB;
    use LaravelIdea\Helper\Modules\Blog\Entities\_IH_BlogTag_C;
    use LaravelIdea\Helper\Modules\Blog\Entities\_IH_BlogTag_QB;
    use LaravelIdea\Helper\Modules\Blog\Entities\_IH_Blog_C;
    use LaravelIdea\Helper\Modules\Blog\Entities\_IH_Blog_QB;

    /**
     * @property int $id
     * @property int|null $category_id
     * @property int|null $user_id
     * @property int|null $admin_id
     * @property string $title
     * @property string|null $slug
     * @property string $blog_content
     * @property string|null $image
     * @property string|null $author
     * @property string|null $excerpt
     * @property string|null $tags
     * @property string|null $image_gallery
     * @property string|null $views
     * @property string|null $video_url
     * @property string|null $visibility
     * @property string|null $featured
     * @property string|null $created_by
     * @property bool $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property Admin|null $admin
     * @method BelongsTo|_IH_Admin_QB admin()
     * @property BlogCategory|null $category
     * @method BelongsTo|_IH_BlogCategory_QB category()
     * @property _IH_BlogComment_C|BlogComment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_BlogComment_QB comments()
     * @property MetaInfo $metainfo
     * @method MorphToMany|_IH_MetaInfo_QB metainfo()
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Blog_QB onWriteConnection()
     * @method _IH_Blog_QB newQuery()
     * @method static _IH_Blog_QB on(null|string $connection = null)
     * @method static _IH_Blog_QB query()
     * @method static _IH_Blog_QB with(array|string $relations)
     * @method _IH_Blog_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Blog_C|Blog[] all()
     * @ownLinks category_id,\Modules\Attributes\Entities\Category,id|user_id,\App\Models\User,id|admin_id,\App\Models\Admin,id
     * @foreignLinks id,\Modules\Blog\Entities\BlogComment,blog_id
     * @mixin _IH_Blog_QB
     */
    class Blog extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string|null $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $slug
     * @property _IH_Blog_C|Blog[] $blogs
     * @property-read int $blogs_count
     * @method HasMany|_IH_Blog_QB blogs()
     * @method static _IH_BlogCategory_QB onWriteConnection()
     * @method _IH_BlogCategory_QB newQuery()
     * @method static _IH_BlogCategory_QB on(null|string $connection = null)
     * @method static _IH_BlogCategory_QB query()
     * @method static _IH_BlogCategory_QB with(array|string $relations)
     * @method _IH_BlogCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BlogCategory_C|BlogCategory[] all()
     * @mixin _IH_BlogCategory_QB
     */
    class BlogCategory extends Model {}

    /**
     * @property int $id
     * @property int $blog_id
     * @property int $user_id
     * @property int|null $parent_id
     * @property string $commented_by
     * @property string $comment_content
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $status
     * @property Blog $blog
     * @method BelongsTo|_IH_Blog_QB blog()
     * @property _IH_BlogComment_C|BlogComment[] $reply
     * @property-read int $reply_count
     * @method HasMany|_IH_BlogComment_QB reply()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_BlogComment_QB onWriteConnection()
     * @method _IH_BlogComment_QB newQuery()
     * @method static _IH_BlogComment_QB on(null|string $connection = null)
     * @method static _IH_BlogComment_QB query()
     * @method static _IH_BlogComment_QB with(array|string $relations)
     * @method _IH_BlogComment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BlogComment_C|BlogComment[] all()
     * @ownLinks blog_id,\Modules\Blog\Entities\Blog,id|user_id,\App\Models\User,id
     * @mixin _IH_BlogComment_QB
     */
    class BlogComment extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $slug
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_BlogTag_QB onWriteConnection()
     * @method _IH_BlogTag_QB newQuery()
     * @method static _IH_BlogTag_QB on(null|string $connection = null)
     * @method static _IH_BlogTag_QB query()
     * @method static _IH_BlogTag_QB with(array|string $relations)
     * @method _IH_BlogTag_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BlogTag_C|BlogTag[] all()
     * @mixin _IH_BlogTag_QB
     */
    class BlogTag extends Model {}
}
