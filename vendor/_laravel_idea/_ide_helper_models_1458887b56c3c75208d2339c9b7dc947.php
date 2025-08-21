<?php //53701a5045452ef0c4d06d5aab0532e6
/** @noinspection all */

namespace NotificationChannels\WebPush {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\NotificationChannels\WebPush\_IH_PushSubscription_C;
    use LaravelIdea\Helper\NotificationChannels\WebPush\_IH_PushSubscription_QB;

    /**
     * @property int $id
     * @property int $subscribable_id
     * @property string $subscribable_type
     * @property string $endpoint
     * @property string|null $public_key
     * @property string|null $auth_token
     * @property string|null $content_encoding
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $subscribable
     * @method MorphTo subscribable()
     * @method static _IH_PushSubscription_QB onWriteConnection()
     * @method _IH_PushSubscription_QB newQuery()
     * @method static _IH_PushSubscription_QB on(null|string $connection = null)
     * @method static _IH_PushSubscription_QB query()
     * @method static _IH_PushSubscription_QB with(array|string $relations)
     * @method _IH_PushSubscription_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PushSubscription_C|PushSubscription[] all()
     * @mixin _IH_PushSubscription_QB
     */
    class PushSubscription extends Model {}
}
