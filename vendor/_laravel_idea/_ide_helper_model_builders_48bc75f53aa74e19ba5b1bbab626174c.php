<?php //fa434303558a70bc76d104b76d93c2d0
/** @noinspection all */

namespace LaravelIdea\Helper\NotificationChannels\WebPush {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use NotificationChannels\WebPush\PushSubscription;

    /**
     * @method PushSubscription|null getOrPut($key, $value)
     * @method PushSubscription|$this shift(int $count = 1)
     * @method PushSubscription|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PushSubscription|$this pop(int $count = 1)
     * @method PushSubscription|null pull($key, $default = null)
     * @method PushSubscription|null last(callable $callback = null, $default = null)
     * @method PushSubscription|$this random(int|null $number = null)
     * @method PushSubscription|null sole($key = null, $operator = null, $value = null)
     * @method PushSubscription|null get($key, $default = null)
     * @method PushSubscription|null first(callable $callback = null, $default = null)
     * @method PushSubscription|null firstWhere(string $key, $operator = null, $value = null)
     * @method PushSubscription|null find($key, $default = null)
     * @method PushSubscription[] all()
     */
    class _IH_PushSubscription_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PushSubscription[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PushSubscription_QB whereId($value)
     * @method _IH_PushSubscription_QB whereSubscribableId($value)
     * @method _IH_PushSubscription_QB whereSubscribableType($value)
     * @method _IH_PushSubscription_QB whereEndpoint($value)
     * @method _IH_PushSubscription_QB wherePublicKey($value)
     * @method _IH_PushSubscription_QB whereAuthToken($value)
     * @method _IH_PushSubscription_QB whereContentEncoding($value)
     * @method _IH_PushSubscription_QB whereCreatedAt($value)
     * @method _IH_PushSubscription_QB whereUpdatedAt($value)
     * @method PushSubscription baseSole(array|string $columns = ['*'])
     * @method PushSubscription create(array $attributes = [])
     * @method _IH_PushSubscription_C|PushSubscription[] cursor()
     * @method PushSubscription|null|_IH_PushSubscription_C|PushSubscription[] find($id, array $columns = ['*'])
     * @method _IH_PushSubscription_C|PushSubscription[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PushSubscription|_IH_PushSubscription_C|PushSubscription[] findOrFail($id, array $columns = ['*'])
     * @method PushSubscription|_IH_PushSubscription_C|PushSubscription[] findOrNew($id, array $columns = ['*'])
     * @method PushSubscription first(array|string $columns = ['*'])
     * @method PushSubscription firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PushSubscription firstOrCreate(array $attributes = [], array $values = [])
     * @method PushSubscription firstOrFail(array $columns = ['*'])
     * @method PushSubscription firstOrNew(array $attributes = [], array $values = [])
     * @method PushSubscription firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PushSubscription forceCreate(array $attributes)
     * @method _IH_PushSubscription_C|PushSubscription[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PushSubscription_C|PushSubscription[] get(array|string $columns = ['*'])
     * @method PushSubscription getModel()
     * @method PushSubscription[] getModels(array|string $columns = ['*'])
     * @method _IH_PushSubscription_C|PushSubscription[] hydrate(array $items)
     * @method PushSubscription make(array $attributes = [])
     * @method PushSubscription newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PushSubscription[]|_IH_PushSubscription_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PushSubscription[]|_IH_PushSubscription_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PushSubscription sole(array|string $columns = ['*'])
     * @method PushSubscription updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PushSubscription_QB extends _BaseBuilder {}
}
