<?php //b17baafd59c3f1929c918fd29de5c7f3
/** @noinspection all */

namespace LaravelIdea\Helper\Modules\Blog\Entities {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Modules\Blog\Entities\Blog;
    use Modules\Blog\Entities\BlogCategory;
    use Modules\Blog\Entities\BlogComment;
    use Modules\Blog\Entities\BlogTag;

    /**
     * @method BlogCategory|null getOrPut($key, $value)
     * @method BlogCategory|$this shift(int $count = 1)
     * @method BlogCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BlogCategory|$this pop(int $count = 1)
     * @method BlogCategory|null pull($key, \Closure $default = null)
     * @method BlogCategory|null last(callable $callback = null, \Closure $default = null)
     * @method BlogCategory|$this random(callable|int|null $number = null)
     * @method BlogCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BlogCategory|null get($key, \Closure $default = null)
     * @method BlogCategory|null first(callable $callback = null, \Closure $default = null)
     * @method BlogCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BlogCategory|null find($key, $default = null)
     * @method BlogCategory[] all()
     */
    class _IH_BlogCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BlogCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_BlogCategory_QB whereId($value)
     * @method _IH_BlogCategory_QB whereTitle($value)
     * @method _IH_BlogCategory_QB whereStatus($value)
     * @method _IH_BlogCategory_QB whereCreatedAt($value)
     * @method _IH_BlogCategory_QB whereUpdatedAt($value)
     * @method _IH_BlogCategory_QB whereSlug($value)
     * @method BlogCategory baseSole(array|string $columns = ['*'])
     * @method BlogCategory create(array $attributes = [])
     * @method _IH_BlogCategory_C|BlogCategory[] cursor()
     * @method BlogCategory|null|_IH_BlogCategory_C|BlogCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_BlogCategory_C|BlogCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BlogCategory|_IH_BlogCategory_C|BlogCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogCategory|_IH_BlogCategory_C|BlogCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method BlogCategory|_IH_BlogCategory_C|BlogCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method BlogCategory first(array|string $columns = ['*'])
     * @method BlogCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method BlogCategory firstOrFail(array|string $columns = ['*'])
     * @method BlogCategory firstOrNew(array $attributes = [], array $values = [])
     * @method BlogCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BlogCategory forceCreate(array $attributes)
     * @method _IH_BlogCategory_C|BlogCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BlogCategory_C|BlogCategory[] get(array|string $columns = ['*'])
     * @method BlogCategory getModel()
     * @method BlogCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_BlogCategory_C|BlogCategory[] hydrate(array $items)
     * @method BlogCategory make(array $attributes = [])
     * @method BlogCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BlogCategory[]|_IH_BlogCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BlogCategory[]|_IH_BlogCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogCategory sole(array|string $columns = ['*'])
     * @method BlogCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BlogCategory_QB extends _BaseBuilder {}

    /**
     * @method BlogComment|null getOrPut($key, $value)
     * @method BlogComment|$this shift(int $count = 1)
     * @method BlogComment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BlogComment|$this pop(int $count = 1)
     * @method BlogComment|null pull($key, \Closure $default = null)
     * @method BlogComment|null last(callable $callback = null, \Closure $default = null)
     * @method BlogComment|$this random(callable|int|null $number = null)
     * @method BlogComment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BlogComment|null get($key, \Closure $default = null)
     * @method BlogComment|null first(callable $callback = null, \Closure $default = null)
     * @method BlogComment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BlogComment|null find($key, $default = null)
     * @method BlogComment[] all()
     */
    class _IH_BlogComment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BlogComment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_BlogComment_QB whereId($value)
     * @method _IH_BlogComment_QB whereBlogId($value)
     * @method _IH_BlogComment_QB whereUserId($value)
     * @method _IH_BlogComment_QB whereParentId($value)
     * @method _IH_BlogComment_QB whereCommentedBy($value)
     * @method _IH_BlogComment_QB whereCommentContent($value)
     * @method _IH_BlogComment_QB whereCreatedAt($value)
     * @method _IH_BlogComment_QB whereUpdatedAt($value)
     * @method _IH_BlogComment_QB whereStatus($value)
     * @method BlogComment baseSole(array|string $columns = ['*'])
     * @method BlogComment create(array $attributes = [])
     * @method _IH_BlogComment_C|BlogComment[] cursor()
     * @method BlogComment|null|_IH_BlogComment_C|BlogComment[] find($id, array|string $columns = ['*'])
     * @method _IH_BlogComment_C|BlogComment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BlogComment|_IH_BlogComment_C|BlogComment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogComment|_IH_BlogComment_C|BlogComment[] findOrFail($id, array|string $columns = ['*'])
     * @method BlogComment|_IH_BlogComment_C|BlogComment[] findOrNew($id, array|string $columns = ['*'])
     * @method BlogComment first(array|string $columns = ['*'])
     * @method BlogComment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogComment firstOrCreate(array $attributes = [], array $values = [])
     * @method BlogComment firstOrFail(array|string $columns = ['*'])
     * @method BlogComment firstOrNew(array $attributes = [], array $values = [])
     * @method BlogComment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BlogComment forceCreate(array $attributes)
     * @method _IH_BlogComment_C|BlogComment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BlogComment_C|BlogComment[] get(array|string $columns = ['*'])
     * @method BlogComment getModel()
     * @method BlogComment[] getModels(array|string $columns = ['*'])
     * @method _IH_BlogComment_C|BlogComment[] hydrate(array $items)
     * @method BlogComment make(array $attributes = [])
     * @method BlogComment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BlogComment[]|_IH_BlogComment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BlogComment[]|_IH_BlogComment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogComment sole(array|string $columns = ['*'])
     * @method BlogComment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BlogComment_QB extends _BaseBuilder {}

    /**
     * @method BlogTag|null getOrPut($key, $value)
     * @method BlogTag|$this shift(int $count = 1)
     * @method BlogTag|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BlogTag|$this pop(int $count = 1)
     * @method BlogTag|null pull($key, \Closure $default = null)
     * @method BlogTag|null last(callable $callback = null, \Closure $default = null)
     * @method BlogTag|$this random(callable|int|null $number = null)
     * @method BlogTag|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BlogTag|null get($key, \Closure $default = null)
     * @method BlogTag|null first(callable $callback = null, \Closure $default = null)
     * @method BlogTag|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BlogTag|null find($key, $default = null)
     * @method BlogTag[] all()
     */
    class _IH_BlogTag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BlogTag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_BlogTag_QB whereId($value)
     * @method _IH_BlogTag_QB whereTitle($value)
     * @method _IH_BlogTag_QB whereSlug($value)
     * @method _IH_BlogTag_QB whereCreatedAt($value)
     * @method _IH_BlogTag_QB whereUpdatedAt($value)
     * @method BlogTag baseSole(array|string $columns = ['*'])
     * @method BlogTag create(array $attributes = [])
     * @method _IH_BlogTag_C|BlogTag[] cursor()
     * @method BlogTag|null|_IH_BlogTag_C|BlogTag[] find($id, array|string $columns = ['*'])
     * @method _IH_BlogTag_C|BlogTag[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BlogTag|_IH_BlogTag_C|BlogTag[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogTag|_IH_BlogTag_C|BlogTag[] findOrFail($id, array|string $columns = ['*'])
     * @method BlogTag|_IH_BlogTag_C|BlogTag[] findOrNew($id, array|string $columns = ['*'])
     * @method BlogTag first(array|string $columns = ['*'])
     * @method BlogTag firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogTag firstOrCreate(array $attributes = [], array $values = [])
     * @method BlogTag firstOrFail(array|string $columns = ['*'])
     * @method BlogTag firstOrNew(array $attributes = [], array $values = [])
     * @method BlogTag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BlogTag forceCreate(array $attributes)
     * @method _IH_BlogTag_C|BlogTag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BlogTag_C|BlogTag[] get(array|string $columns = ['*'])
     * @method BlogTag getModel()
     * @method BlogTag[] getModels(array|string $columns = ['*'])
     * @method _IH_BlogTag_C|BlogTag[] hydrate(array $items)
     * @method BlogTag make(array $attributes = [])
     * @method BlogTag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BlogTag[]|_IH_BlogTag_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BlogTag[]|_IH_BlogTag_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogTag sole(array|string $columns = ['*'])
     * @method BlogTag updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BlogTag_QB extends _BaseBuilder {}

    /**
     * @method Blog|null getOrPut($key, $value)
     * @method Blog|$this shift(int $count = 1)
     * @method Blog|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Blog|$this pop(int $count = 1)
     * @method Blog|null pull($key, \Closure $default = null)
     * @method Blog|null last(callable $callback = null, \Closure $default = null)
     * @method Blog|$this random(callable|int|null $number = null)
     * @method Blog|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Blog|null get($key, \Closure $default = null)
     * @method Blog|null first(callable $callback = null, \Closure $default = null)
     * @method Blog|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Blog|null find($key, $default = null)
     * @method Blog[] all()
     */
    class _IH_Blog_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Blog[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Blog_QB whereId($value)
     * @method _IH_Blog_QB whereCategoryId($value)
     * @method _IH_Blog_QB whereUserId($value)
     * @method _IH_Blog_QB whereAdminId($value)
     * @method _IH_Blog_QB whereTitle($value)
     * @method _IH_Blog_QB whereSlug($value)
     * @method _IH_Blog_QB whereBlogContent($value)
     * @method _IH_Blog_QB whereImage($value)
     * @method _IH_Blog_QB whereAuthor($value)
     * @method _IH_Blog_QB whereExcerpt($value)
     * @method _IH_Blog_QB whereTags($value)
     * @method _IH_Blog_QB whereImageGallery($value)
     * @method _IH_Blog_QB whereViews($value)
     * @method _IH_Blog_QB whereVideoUrl($value)
     * @method _IH_Blog_QB whereVisibility($value)
     * @method _IH_Blog_QB whereFeatured($value)
     * @method _IH_Blog_QB whereCreatedBy($value)
     * @method _IH_Blog_QB whereStatus($value)
     * @method _IH_Blog_QB whereCreatedAt($value)
     * @method _IH_Blog_QB whereUpdatedAt($value)
     * @method _IH_Blog_QB whereDeletedAt($value)
     * @method Blog baseSole(array|string $columns = ['*'])
     * @method Blog create(array $attributes = [])
     * @method _IH_Blog_C|Blog[] cursor()
     * @method Blog|null|_IH_Blog_C|Blog[] find($id, array|string $columns = ['*'])
     * @method _IH_Blog_C|Blog[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Blog|_IH_Blog_C|Blog[] findOrFail($id, array|string $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOrNew($id, array|string $columns = ['*'])
     * @method Blog first(array|string $columns = ['*'])
     * @method Blog firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Blog firstOrCreate(array $attributes = [], array $values = [])
     * @method Blog firstOrFail(array|string $columns = ['*'])
     * @method Blog firstOrNew(array $attributes = [], array $values = [])
     * @method Blog firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Blog forceCreate(array $attributes)
     * @method _IH_Blog_C|Blog[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Blog_C|Blog[] get(array|string $columns = ['*'])
     * @method Blog getModel()
     * @method Blog[] getModels(array|string $columns = ['*'])
     * @method _IH_Blog_C|Blog[] hydrate(array $items)
     * @method Blog make(array $attributes = [])
     * @method Blog newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Blog[]|_IH_Blog_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Blog[]|_IH_Blog_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Blog sole(array|string $columns = ['*'])
     * @method Blog updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Blog_QB extends _BaseBuilder {}
}
