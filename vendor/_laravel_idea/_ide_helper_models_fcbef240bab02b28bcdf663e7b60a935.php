<?php //f7310b477e4117922ea0370048a71742
/** @noinspection all */

namespace App\Models {

    use Database\Factories\ProductFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasManyThrough;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\App\Models\_IH_Address_C;
    use LaravelIdea\Helper\App\Models\_IH_Address_QB;
    use LaravelIdea\Helper\App\Models\_IH_Apikey_C;
    use LaravelIdea\Helper\App\Models\_IH_Apikey_QB;
    use LaravelIdea\Helper\App\Models\_IH_AttributeGroup_C;
    use LaravelIdea\Helper\App\Models\_IH_AttributeGroup_QB;
    use LaravelIdea\Helper\App\Models\_IH_Attribute_C;
    use LaravelIdea\Helper\App\Models\_IH_Attribute_QB;
    use LaravelIdea\Helper\App\Models\_IH_Banner_C;
    use LaravelIdea\Helper\App\Models\_IH_Banner_QB;
    use LaravelIdea\Helper\App\Models\_IH_Brand_C;
    use LaravelIdea\Helper\App\Models\_IH_Brand_QB;
    use LaravelIdea\Helper\App\Models\_IH_Carrier_C;
    use LaravelIdea\Helper\App\Models\_IH_Carrier_QB;
    use LaravelIdea\Helper\App\Models\_IH_Cart_C;
    use LaravelIdea\Helper\App\Models\_IH_Cart_QB;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_City_C;
    use LaravelIdea\Helper\App\Models\_IH_City_QB;
    use LaravelIdea\Helper\App\Models\_IH_Comment_C;
    use LaravelIdea\Helper\App\Models\_IH_Comment_QB;
    use LaravelIdea\Helper\App\Models\_IH_Contact_C;
    use LaravelIdea\Helper\App\Models\_IH_Contact_QB;
    use LaravelIdea\Helper\App\Models\_IH_Currency_C;
    use LaravelIdea\Helper\App\Models\_IH_Currency_QB;
    use LaravelIdea\Helper\App\Models\_IH_Discount_C;
    use LaravelIdea\Helper\App\Models\_IH_Discount_QB;
    use LaravelIdea\Helper\App\Models\_IH_Favorite_C;
    use LaravelIdea\Helper\App\Models\_IH_Favorite_QB;
    use LaravelIdea\Helper\App\Models\_IH_File_C;
    use LaravelIdea\Helper\App\Models\_IH_File_QB;
    use LaravelIdea\Helper\App\Models\_IH_Filterable_C;
    use LaravelIdea\Helper\App\Models\_IH_Filterable_QB;
    use LaravelIdea\Helper\App\Models\_IH_Filter_C;
    use LaravelIdea\Helper\App\Models\_IH_Filter_QB;
    use LaravelIdea\Helper\App\Models\_IH_Gallery_C;
    use LaravelIdea\Helper\App\Models\_IH_Gallery_QB;
    use LaravelIdea\Helper\App\Models\_IH_GatewayConfig_C;
    use LaravelIdea\Helper\App\Models\_IH_GatewayConfig_QB;
    use LaravelIdea\Helper\App\Models\_IH_Gateway_C;
    use LaravelIdea\Helper\App\Models\_IH_Gateway_QB;
    use LaravelIdea\Helper\App\Models\_IH_Label_C;
    use LaravelIdea\Helper\App\Models\_IH_Label_QB;
    use LaravelIdea\Helper\App\Models\_IH_Link_C;
    use LaravelIdea\Helper\App\Models\_IH_Link_QB;
    use LaravelIdea\Helper\App\Models\_IH_Menu_C;
    use LaravelIdea\Helper\App\Models\_IH_Menu_QB;
    use LaravelIdea\Helper\App\Models\_IH_OneTimeCode_C;
    use LaravelIdea\Helper\App\Models\_IH_OneTimeCode_QB;
    use LaravelIdea\Helper\App\Models\_IH_Option_C;
    use LaravelIdea\Helper\App\Models\_IH_Option_QB;
    use LaravelIdea\Helper\App\Models\_IH_OrderItem_C;
    use LaravelIdea\Helper\App\Models\_IH_OrderItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_Order_C;
    use LaravelIdea\Helper\App\Models\_IH_Order_QB;
    use LaravelIdea\Helper\App\Models\_IH_Page_C;
    use LaravelIdea\Helper\App\Models\_IH_Page_QB;
    use LaravelIdea\Helper\App\Models\_IH_Permission_C;
    use LaravelIdea\Helper\App\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\App\Models\_IH_Post_C;
    use LaravelIdea\Helper\App\Models\_IH_Post_QB;
    use LaravelIdea\Helper\App\Models\_IH_PriceChange_C;
    use LaravelIdea\Helper\App\Models\_IH_PriceChange_QB;
    use LaravelIdea\Helper\App\Models\_IH_Price_C;
    use LaravelIdea\Helper\App\Models\_IH_Price_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\_IH_Province_C;
    use LaravelIdea\Helper\App\Models\_IH_Province_QB;
    use LaravelIdea\Helper\App\Models\_IH_Role_C;
    use LaravelIdea\Helper\App\Models\_IH_Role_QB;
    use LaravelIdea\Helper\App\Models\_IH_Slider_C;
    use LaravelIdea\Helper\App\Models\_IH_Slider_QB;
    use LaravelIdea\Helper\App\Models\_IH_Sms_C;
    use LaravelIdea\Helper\App\Models\_IH_Sms_QB;
    use LaravelIdea\Helper\App\Models\_IH_SpecificationGroup_C;
    use LaravelIdea\Helper\App\Models\_IH_SpecificationGroup_QB;
    use LaravelIdea\Helper\App\Models\_IH_Specification_C;
    use LaravelIdea\Helper\App\Models\_IH_Specification_QB;
    use LaravelIdea\Helper\App\Models\_IH_SpecType_C;
    use LaravelIdea\Helper\App\Models\_IH_SpecType_QB;
    use LaravelIdea\Helper\App\Models\_IH_StaticFilter_C;
    use LaravelIdea\Helper\App\Models\_IH_StaticFilter_QB;
    use LaravelIdea\Helper\App\Models\_IH_Statistics_C;
    use LaravelIdea\Helper\App\Models\_IH_Statistics_QB;
    use LaravelIdea\Helper\App\Models\_IH_StockNotify_C;
    use LaravelIdea\Helper\App\Models\_IH_StockNotify_QB;
    use LaravelIdea\Helper\App\Models\_IH_Tag_C;
    use LaravelIdea\Helper\App\Models\_IH_Tag_QB;
    use LaravelIdea\Helper\App\Models\_IH_Tariff_C;
    use LaravelIdea\Helper\App\Models\_IH_Tariff_QB;
    use LaravelIdea\Helper\App\Models\_IH_TicketMessage_C;
    use LaravelIdea\Helper\App\Models\_IH_TicketMessage_QB;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_C;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_QB;
    use LaravelIdea\Helper\App\Models\_IH_Transaction_C;
    use LaravelIdea\Helper\App\Models\_IH_Transaction_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserOption_C;
    use LaravelIdea\Helper\App\Models\_IH_UserOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\App\Models\_IH_Viewer_C;
    use LaravelIdea\Helper\App\Models\_IH_Viewer_QB;
    use LaravelIdea\Helper\App\Models\_IH_WalletHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_WalletHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_Wallet_C;
    use LaravelIdea\Helper\App\Models\_IH_Wallet_QB;
    use LaravelIdea\Helper\App\Models\_IH_WidgetOption_C;
    use LaravelIdea\Helper\App\Models\_IH_WidgetOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_Widget_C;
    use LaravelIdea\Helper\App\Models\_IH_Widget_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;
    use LaravelIdea\Helper\NotificationChannels\WebPush\_IH_PushSubscription_C;
    use LaravelIdea\Helper\NotificationChannels\WebPush\_IH_PushSubscription_QB;
    use NotificationChannels\WebPush\PushSubscription;

    /**
     * @property int $id
     * @property int $province_id
     * @property int $city_id
     * @property string $postal_code
     * @property string $address
     * @property int $user_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property City $city
     * @method BelongsTo|_IH_City_QB city()
     * @property Province $province
     * @method BelongsTo|_IH_Province_QB province()
     * @method static _IH_Address_QB onWriteConnection()
     * @method _IH_Address_QB newQuery()
     * @method static _IH_Address_QB on(null|string $connection = null)
     * @method static _IH_Address_QB query()
     * @method static _IH_Address_QB with(array|string $relations)
     * @method _IH_Address_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Address_C|Address[] all()
     * @ownLinks province_id,\App\Models\Province,id|city_id,\App\Models\City,id|user_id,\App\Models\User,id
     * @mixin _IH_Address_QB
     */
    class Address extends Model {}

    /**
     * @property int $id
     * @property string $key
     * @property string|null $description
     * @property bool $is_active
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Apikey_QB onWriteConnection()
     * @method _IH_Apikey_QB newQuery()
     * @method static _IH_Apikey_QB on(null|string $connection = null)
     * @method static _IH_Apikey_QB query()
     * @method static _IH_Apikey_QB with(array|string $relations)
     * @method _IH_Apikey_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Apikey_C|Apikey[] all()
     * @mixin _IH_Apikey_QB
     */
    class Apikey extends Model {}

    /**
     * @property int $id
     * @property int $attribute_group_id
     * @property string $name
     * @property string|null $value
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property AttributeGroup $group
     * @method BelongsTo|_IH_AttributeGroup_QB group()
     * @method static _IH_Attribute_QB onWriteConnection()
     * @method _IH_Attribute_QB newQuery()
     * @method static _IH_Attribute_QB on(null|string $connection = null)
     * @method static _IH_Attribute_QB query()
     * @method static _IH_Attribute_QB with(array|string $relations)
     * @method _IH_Attribute_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Attribute_C|Attribute[] all()
     * @ownLinks attribute_group_id,\App\Models\AttributeGroup,id
     * @foreignLinks
     * @mixin _IH_Attribute_QB
     */
    class Attribute extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $type
     * @property int|null $ordering
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Filter_C|Filter[] $filters
     * @property-read int $filters_count
     * @method MorphToMany|_IH_Filter_QB filters()
     * @property _IH_Attribute_C|Attribute[] $get_attributes
     * @property-read int $get_attributes_count
     * @method HasMany|_IH_Attribute_QB get_attributes()
     * @method static _IH_AttributeGroup_QB onWriteConnection()
     * @method _IH_AttributeGroup_QB newQuery()
     * @method static _IH_AttributeGroup_QB on(null|string $connection = null)
     * @method static _IH_AttributeGroup_QB query()
     * @method static _IH_AttributeGroup_QB with(array|string $relations)
     * @method _IH_AttributeGroup_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AttributeGroup_C|AttributeGroup[] all()
     * @foreignLinks id,\App\Models\Attribute,attribute_group_id
     * @mixin _IH_AttributeGroup_QB
     */
    class AttributeGroup extends Model {}

    /**
     * @property int $id
     * @property string|null $image
     * @property bool $published
     * @property string|null $link
     * @property int|null $ordering
     * @property string $group
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $title
     * @property string|null $description
     * @method static _IH_Banner_QB onWriteConnection()
     * @method _IH_Banner_QB newQuery()
     * @method static _IH_Banner_QB on(null|string $connection = null)
     * @method static _IH_Banner_QB query()
     * @method static _IH_Banner_QB with(array|string $relations)
     * @method _IH_Banner_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Banner_C|Banner[] all()
     * @mixin _IH_Banner_QB
     */
    class Banner extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $image
     * @property string|null $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $slug
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @method static _IH_Brand_QB onWriteConnection()
     * @method _IH_Brand_QB newQuery()
     * @method static _IH_Brand_QB on(null|string $connection = null)
     * @method static _IH_Brand_QB query()
     * @method static _IH_Brand_QB with(array|string $relations)
     * @method _IH_Brand_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Brand_C|Brand[] all()
     * @foreignLinks id,\App\Models\Product,brand_id
     * @mixin _IH_Brand_QB
     */
    class Brand extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string|null $image
     * @property string|null $waiting_time
     * @property int|null $max_package_weight
     * @property int|null $min_package_weight
     * @property int|null $extra_cost
     * @property bool $is_active
     * @property string|null $description
     * @property int $province_id
     * @property int $city_id
     * @property int|null $free_shipping_weight
     * @property int|null $free_shipping_price
     * @property bool $carrige_forward
     * @property string $covered_cities
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_City_C|City[] $cities
     * @property-read int $cities_count
     * @method BelongsToMany|_IH_City_QB cities()
     * @property City $city
     * @method BelongsTo|_IH_City_QB city()
     * @property Province $province
     * @method BelongsTo|_IH_Province_QB province()
     * @property _IH_Tariff_C|Tariff[] $tariffs
     * @property-read int $tariffs_count
     * @method HasMany|_IH_Tariff_QB tariffs()
     * @method static _IH_Carrier_QB onWriteConnection()
     * @method _IH_Carrier_QB newQuery()
     * @method static _IH_Carrier_QB on(null|string $connection = null)
     * @method static _IH_Carrier_QB query()
     * @method static _IH_Carrier_QB with(array|string $relations)
     * @method _IH_Carrier_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Carrier_C|Carrier[] all()
     * @ownLinks province_id,\App\Models\Province,id|city_id,\App\Models\City,id
     * @foreignLinks id,\App\Models\Tariff,carrier_id|id,\App\Models\Order,carrier_id
     * @mixin _IH_Carrier_QB
     */
    class Carrier extends Model {}

    /**
     * @property int $id
     * @property int|null $user_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $discount_id
     * @property-read float|int $price attribute
     * @property-read int $quantity attribute
     * @property Discount|null $discount
     * @method BelongsTo|_IH_Discount_QB discount()
     * @property _IH_Price_C|Price[] $prices
     * @property-read int $prices_count
     * @method BelongsToMany|_IH_Price_QB prices()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @method static _IH_Cart_QB onWriteConnection()
     * @method _IH_Cart_QB newQuery()
     * @method static _IH_Cart_QB on(null|string $connection = null)
     * @method static _IH_Cart_QB query()
     * @method static _IH_Cart_QB with(array|string $relations)
     * @method _IH_Cart_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Cart_C|Cart[] all()
     * @ownLinks user_id,\App\Models\User,id|discount_id,\App\Models\Discount,id
     * @foreignLinks
     * @mixin _IH_Cart_QB
     */
    class Cart extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $slug
     * @property string $type
     * @property string|null $image
     * @property int|null $category_id
     * @property int|null $ordering
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $meta_title
     * @property string|null $meta_description
     * @property string|null $background_image
     * @property string|null $description
     * @property string $filter_type
     * @property int|null $filter_id
     * @property bool $show_in_index
     * @property bool $published
     * @property-read $full_title attribute
     * @property-read $get_tags attribute
     * @property-read $link attribute
     * @property _IH_Category_C|Category[] $categories
     * @property-read int $categories_count
     * @method HasMany|_IH_Category_QB categories()
     * @property _IH_Category_C|Category[] $childrenCategories
     * @property-read int $children_categories_count
     * @method HasMany|_IH_Category_QB childrenCategories()
     * @property Filter|null $filter
     * @method BelongsTo|_IH_Filter_QB filter()
     * @property _IH_Category_C|Category[] $getCategories
     * @property-read int $get_categories_count
     * @method HasMany|_IH_Category_QB getCategories()
     * @property _IH_Category_C|Category[] $getCategoriesCount
     * @property-read int $get_categories_count_count
     * @method HasMany|_IH_Category_QB getCategoriesCount()
     * @property _IH_Tag_C|Tag[] $getGetTagsAttribute
     * @property-read int $get_get_tags_attribute_count
     * @method MorphToMany|_IH_Tag_QB getGetTagsAttribute()
     * @property _IH_Menu_C|Menu[] $menus
     * @property-read int $menus_count
     * @method BelongsToMany|_IH_Menu_QB menus()
     * @property Category|null $parent
     * @method BelongsTo|_IH_Category_QB parent()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method MorphToMany|_IH_Tag_QB tags()
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @ownLinks category_id,\App\Models\Category,id|filter_id,\App\Models\Filter,id
     * @foreignLinks id,\App\Models\Category,category_id|id,\Cviebrock\EloquentSluggable\Tests\Models\PostNotSluggable,category_id|id,\App\Models\Product,category_id
     * @mixin _IH_Category_QB
     */
    class Category extends Model {}

    /**
     * @property int $id
     * @property int $province_id
     * @property string $name
     * @property string|null $name_en
     * @property string|null $latitude
     * @property string|null $longitude
     * @property int|null $ordering
     * @property bool $is_active
     * @property Carbon|null $deleted_at
     * @property Province $province
     * @method BelongsTo|_IH_Province_QB province()
     * @method static _IH_City_QB onWriteConnection()
     * @method _IH_City_QB newQuery()
     * @method static _IH_City_QB on(null|string $connection = null)
     * @method static _IH_City_QB query()
     * @method static _IH_City_QB with(array|string $relations)
     * @method _IH_City_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_City_C|City[] all()
     * @ownLinks province_id,\App\Models\Province,id
     * @foreignLinks id,\App\Models\Order,city_id|id,\App\Models\Address,city_id|id,\App\Models\Order,city_id|id,\App\Models\Carrier,city_id
     * @mixin _IH_City_QB
     */
    class City extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $comment_id
     * @property string $body
     * @property int $commentable_id
     * @property string $commentable_type
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $commentable
     * @method MorphTo commentable()
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Comment_QB onWriteConnection()
     * @method _IH_Comment_QB newQuery()
     * @method static _IH_Comment_QB on(null|string $connection = null)
     * @method static _IH_Comment_QB query()
     * @method static _IH_Comment_QB with(array|string $relations)
     * @method _IH_Comment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Comment_C|Comment[] all()
     * @ownLinks user_id,\App\Models\User,id|comment_id,\App\Models\Comment,id
     * @foreignLinks id,\App\Models\Comment,comment_id
     * @mixin _IH_Comment_QB
     */
    class Comment extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $email
     * @property string $subject
     * @property string $message
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $mobile
     * @method static _IH_Contact_QB onWriteConnection()
     * @method _IH_Contact_QB newQuery()
     * @method static _IH_Contact_QB on(null|string $connection = null)
     * @method static _IH_Contact_QB query()
     * @method static _IH_Contact_QB with(array|string $relations)
     * @method _IH_Contact_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Contact_C|Contact[] all()
     * @mixin _IH_Contact_QB
     */
    class Contact extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property float $amount
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Price_C|Price[] $prices
     * @property-read int $prices_count
     * @method HasManyThrough|_IH_Price_QB prices()
     * @method static _IH_Currency_QB onWriteConnection()
     * @method _IH_Currency_QB newQuery()
     * @method static _IH_Currency_QB on(null|string $connection = null)
     * @method static _IH_Currency_QB query()
     * @method static _IH_Currency_QB with(array|string $relations)
     * @method _IH_Currency_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Currency_C|Currency[] all()
     * @foreignLinks id,\App\Models\Product,currency_id
     * @mixin _IH_Currency_QB
     */
    class Currency extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $code
     * @property Carbon|null $start_date
     * @property Carbon|null $end_date
     * @property string $type
     * @property float $amount
     * @property int|null $discount_ceiling
     * @property int|null $least_price
     * @property int|null $least_products_count
     * @property string|null $description
     * @property bool $only_first_purchase
     * @property bool $not_discount_products
     * @property bool $published
     * @property int|null $quantity
     * @property int|null $quantity_per_user
     * @property string $include_type
     * @property string $exclude_type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property _IH_Category_C|Category[] $excludeCategories
     * @property-read int $exclude_categories_count
     * @method BelongsToMany|_IH_Category_QB excludeCategories()
     * @property _IH_Product_C|Product[] $excludeProducts
     * @property-read int $exclude_products_count
     * @method BelongsToMany|_IH_Product_QB excludeProducts()
     * @property _IH_Category_C|Category[] $includeCategories
     * @property-read int $include_categories_count
     * @method BelongsToMany|_IH_Category_QB includeCategories()
     * @property _IH_Product_C|Product[] $includeProducts
     * @property-read int $include_products_count
     * @method BelongsToMany|_IH_Product_QB includeProducts()
     * @property _IH_Order_C|Order[] $orders
     * @property-read int $orders_count
     * @method HasMany|_IH_Order_QB orders()
     * @property _IH_User_C|User[] $users
     * @property-read int $users_count
     * @method BelongsToMany|_IH_User_QB users()
     * @method static _IH_Discount_QB onWriteConnection()
     * @method _IH_Discount_QB newQuery()
     * @method static _IH_Discount_QB on(null|string $connection = null)
     * @method static _IH_Discount_QB query()
     * @method static _IH_Discount_QB with(array|string $relations)
     * @method _IH_Discount_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Discount_C|Discount[] all()
     * @foreignLinks id,\App\Models\Cart,discount_id|id,\App\Models\Order,discount_id
     * @mixin _IH_Discount_QB
     */
    class Discount extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $product_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Favorite_QB onWriteConnection()
     * @method _IH_Favorite_QB newQuery()
     * @method static _IH_Favorite_QB on(null|string $connection = null)
     * @method static _IH_Favorite_QB query()
     * @method static _IH_Favorite_QB with(array|string $relations)
     * @method _IH_Favorite_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Favorite_C|Favorite[] all()
     * @ownLinks user_id,\App\Models\User,id|product_id,\App\Models\Product,id
     * @mixin _IH_Favorite_QB
     */
    class Favorite extends Model {}

    /**
     * @property int $id
     * @property string $file
     * @property string|null $size
     * @property int $fileable_id
     * @property string $fileable_type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $title
     * @property string $disk
     * @property string $status
     * @property Model $fileable
     * @method MorphTo fileable()
     * @method static _IH_File_QB onWriteConnection()
     * @method _IH_File_QB newQuery()
     * @method static _IH_File_QB on(null|string $connection = null)
     * @method static _IH_File_QB query()
     * @method static _IH_File_QB with(array|string $relations)
     * @method _IH_File_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_File_C|File[] all()
     * @mixin _IH_File_QB
     */
    class File extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $filterable
     * @method MorphTo filterable()
     * @property _IH_Filterable_C|Filterable[] $related
     * @property-read int $related_count
     * @method HasMany|_IH_Filterable_QB related()
     * @method static _IH_Filter_QB onWriteConnection()
     * @method _IH_Filter_QB newQuery()
     * @method static _IH_Filter_QB on(null|string $connection = null)
     * @method static _IH_Filter_QB query()
     * @method static _IH_Filter_QB with(array|string $relations)
     * @method _IH_Filter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Filter_C|Filter[] all()
     * @foreignLinks id,\App\Models\Filterable,filter_id|id,\App\Models\Category,filter_id
     * @mixin _IH_Filter_QB
     */
    class Filter extends Model {}

    /**
     * @property int $id
     * @property int $filter_id
     * @property int $filterable_id
     * @property string $filterable_type
     * @property int|null $ordering
     * @property bool $active
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $separator
     * @property Model $filterable
     * @method MorphTo filterable()
     * @method static _IH_Filterable_QB onWriteConnection()
     * @method _IH_Filterable_QB newQuery()
     * @method static _IH_Filterable_QB on(null|string $connection = null)
     * @method static _IH_Filterable_QB query()
     * @method static _IH_Filterable_QB with(array|string $relations)
     * @method _IH_Filterable_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Filterable_C|Filterable[] all()
     * @ownLinks filter_id,\App\Models\Filter,id
     * @mixin _IH_Filterable_QB
     */
    class Filterable extends Model {}

    /**
     * @property int $id
     * @property string $image
     * @property int $galleryable_id
     * @property string $galleryable_type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $ordering
     * @property Model $galleryable
     * @method MorphTo galleryable()
     * @method static _IH_Gallery_QB onWriteConnection()
     * @method _IH_Gallery_QB newQuery()
     * @method static _IH_Gallery_QB on(null|string $connection = null)
     * @method static _IH_Gallery_QB query()
     * @method static _IH_Gallery_QB with(array|string $relations)
     * @method _IH_Gallery_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Gallery_C|Gallery[] all()
     * @mixin _IH_Gallery_QB
     */
    class Gallery extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $key
     * @property string|null $description
     * @property bool $is_active
     * @property int|null $ordering
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_GatewayConfig_C|GatewayConfig[] $configs
     * @property-read int $configs_count
     * @method HasMany|_IH_GatewayConfig_QB configs()
     * @method static _IH_Gateway_QB onWriteConnection()
     * @method _IH_Gateway_QB newQuery()
     * @method static _IH_Gateway_QB on(null|string $connection = null)
     * @method static _IH_Gateway_QB query()
     * @method static _IH_Gateway_QB with(array|string $relations)
     * @method _IH_Gateway_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Gateway_C|Gateway[] all()
     * @foreignLinks id,\App\Models\GatewayConfig,gateway_id|id,\App\Models\Order,gateway_id|id,\App\Models\Transaction,gateway_id
     * @mixin _IH_Gateway_QB
     */
    class Gateway extends Model {}

    /**
     * @property int $id
     * @property int $gateway_id
     * @property string $key
     * @property string|null $value
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_GatewayConfig_QB onWriteConnection()
     * @method _IH_GatewayConfig_QB newQuery()
     * @method static _IH_GatewayConfig_QB on(null|string $connection = null)
     * @method static _IH_GatewayConfig_QB query()
     * @method static _IH_GatewayConfig_QB with(array|string $relations)
     * @method _IH_GatewayConfig_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_GatewayConfig_C|GatewayConfig[] all()
     * @ownLinks gateway_id,\App\Models\Gateway,id
     * @mixin _IH_GatewayConfig_QB
     */
    class GatewayConfig extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Label_QB onWriteConnection()
     * @method _IH_Label_QB newQuery()
     * @method static _IH_Label_QB on(null|string $connection = null)
     * @method static _IH_Label_QB query()
     * @method static _IH_Label_QB with(array|string $relations)
     * @method _IH_Label_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Label_C|Label[] all()
     * @foreignLinks
     * @mixin _IH_Label_QB
     */
    class Label extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $link
     * @property int|null $ordering
     * @property string $link_group_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Link_QB onWriteConnection()
     * @method _IH_Link_QB newQuery()
     * @method static _IH_Link_QB on(null|string $connection = null)
     * @method static _IH_Link_QB query()
     * @method static _IH_Link_QB with(array|string $relations)
     * @method _IH_Link_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Link_C|Link[] all()
     * @mixin _IH_Link_QB
     */
    class Link extends Model {}

    /**
     * @property int $id
     * @property string $type
     * @property string|null $static_type
     * @property string|null $title
     * @property string|null $link
     * @property int|null $menuable_id
     * @property int|null $menu_id
     * @property int|null $ordering
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property bool|null $children
     * @property-read string $full_title attribute
     * @property Category|null $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Menu_C|Menu[] $childrenmenus
     * @property-read int $childrenmenus_count
     * @method HasMany|_IH_Menu_QB childrenmenus()
     * @property _IH_Menu_C|Menu[] $menus
     * @property-read int $menus_count
     * @method HasMany|_IH_Menu_QB menus()
     * @method static _IH_Menu_QB onWriteConnection()
     * @method _IH_Menu_QB newQuery()
     * @method static _IH_Menu_QB on(null|string $connection = null)
     * @method static _IH_Menu_QB query()
     * @method static _IH_Menu_QB with(array|string $relations)
     * @method _IH_Menu_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Menu_C|Menu[] all()
     * @ownLinks menu_id,\App\Models\Menu,id
     * @foreignLinks id,\App\Models\Menu,menu_id
     * @mixin _IH_Menu_QB
     */
    class Menu extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property string $code
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_OneTimeCode_QB onWriteConnection()
     * @method _IH_OneTimeCode_QB newQuery()
     * @method static _IH_OneTimeCode_QB on(null|string $connection = null)
     * @method static _IH_OneTimeCode_QB query()
     * @method static _IH_OneTimeCode_QB with(array|string $relations)
     * @method _IH_OneTimeCode_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OneTimeCode_C|OneTimeCode[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_OneTimeCode_QB
     */
    class OneTimeCode extends Model {}

    /**
     * @property int $id
     * @property string $option_name
     * @property string|null $option_value
     * @method static _IH_Option_QB onWriteConnection()
     * @method _IH_Option_QB newQuery()
     * @method static _IH_Option_QB on(null|string $connection = null)
     * @method static _IH_Option_QB query()
     * @method static _IH_Option_QB with(array|string $relations)
     * @method _IH_Option_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Option_C|Option[] all()
     * @mixin _IH_Option_QB
     */
    class Option extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property string $name
     * @property string $mobile
     * @property int|null $province_id
     * @property int|null $city_id
     * @property string|null $postal_code
     * @property string|null $address
     * @property string|null $description
     * @property int $shipping_cost
     * @property int $price
     * @property string $status
     * @property string $shipping_status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string $gateway
     * @property int|null $discount_id
     * @property int|null $discount_amount
     * @property int|null $gateway_id
     * @property int|null $carrier_id
     * @property string $settlement_type
     * @property-read string $ship_status attribute
     * @property Carrier|null $carrier
     * @method BelongsTo|_IH_Carrier_QB carrier()
     * @property City|null $city
     * @method BelongsTo|_IH_City_QB city()
     * @property Discount|null $discount
     * @method BelongsTo|_IH_Discount_QB discount()
     * @property Gateway|null $gatewayRelation
     * @method BelongsTo|_IH_Gateway_QB gatewayRelation()
     * @property _IH_Product_C|Product[] $hasPhysicalItem
     * @property-read int $has_physical_item_count
     * @method BelongsToMany|_IH_Product_QB hasPhysicalItem()
     * @property _IH_OrderItem_C|OrderItem[] $items
     * @property-read int $items_count
     * @method HasMany|_IH_OrderItem_QB items()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @property Province|null $province
     * @method BelongsTo|_IH_Province_QB province()
     * @property _IH_Transaction_C|Transaction[] $transactions
     * @property-read int $transactions_count
     * @method MorphToMany|_IH_Transaction_QB transactions()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @property WalletHistory $walletHistory
     * @method HasOne|_IH_WalletHistory_QB walletHistory()
     * @method static _IH_Order_QB onWriteConnection()
     * @method _IH_Order_QB newQuery()
     * @method static _IH_Order_QB on(null|string $connection = null)
     * @method static _IH_Order_QB query()
     * @method static _IH_Order_QB with(array|string $relations)
     * @method _IH_Order_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Order_C|Order[] all()
     * @ownLinks user_id,\App\Models\User,id|province_id,\App\Models\Province,id|city_id,\App\Models\City,id|discount_id,\App\Models\Discount,id|gateway_id,\App\Models\Gateway,id|province_id,\App\Models\Province,id|city_id,\App\Models\City,id|carrier_id,\App\Models\Carrier,id
     * @foreignLinks id,\App\Models\OrderItem,order_id|id,\App\Models\WalletHistory,order_id
     * @mixin _IH_Order_QB
     */
    class Order extends Model {}

    /**
     * @property int $id
     * @property int $order_id
     * @property int|null $product_id
     * @property string $title
     * @property int $price
     * @property int $quantity
     * @property int|null $discount
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $price_id
     * @property int $real_price
     * @property Price|null $get_price
     * @method BelongsTo|_IH_Price_QB get_price()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_OrderItem_QB onWriteConnection()
     * @method _IH_OrderItem_QB newQuery()
     * @method static _IH_OrderItem_QB on(null|string $connection = null)
     * @method static _IH_OrderItem_QB query()
     * @method static _IH_OrderItem_QB with(array|string $relations)
     * @method _IH_OrderItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderItem_C|OrderItem[] all()
     * @ownLinks order_id,\App\Models\Order,id|product_id,\App\Models\Product,id|price_id,\App\Models\Price,id
     * @mixin _IH_OrderItem_QB
     */
    class OrderItem extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $slug
     * @property bool $published
     * @property string|null $content
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read $get_tags attribute
     * @property _IH_Tag_C|Tag[] $getGetTagsAttribute
     * @property-read int $get_get_tags_attribute_count
     * @method MorphToMany|_IH_Tag_QB getGetTagsAttribute()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method MorphToMany|_IH_Tag_QB tags()
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
     * @property string $name
     * @property int|null $permission_id
     * @property int|null $ordering
     * @property bool $active
     * @property string|null $title
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method HasMany|_IH_Permission_QB permissions()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method BelongsToMany|_IH_Role_QB roles()
     * @method static _IH_Permission_QB onWriteConnection()
     * @method _IH_Permission_QB newQuery()
     * @method static _IH_Permission_QB on(null|string $connection = null)
     * @method static _IH_Permission_QB query()
     * @method static _IH_Permission_QB with(array|string $relations)
     * @method _IH_Permission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Permission_C|Permission[] all()
     * @ownLinks permission_id,\App\Models\Permission,id
     * @foreignLinks id,\App\Models\Permission,permission_id
     * @mixin _IH_Permission_QB
     */
    class Permission extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property int|null $category_id
     * @property string $slug
     * @property string|null $image
     * @property int|null $user_id
     * @property bool $published
     * @property int $view
     * @property string|null $content
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $meta_title
     * @property string|null $meta_description
     * @property string $allow_comments
     * @property Carbon|null $publish_date
     * @property-read $get_tags attribute
     * @property-read $short_content attribute
     * @property Category|null $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method MorphToMany|_IH_Comment_QB comments()
     * @property _IH_Tag_C|Tag[] $getGetTagsAttribute
     * @property-read int $get_get_tags_attribute_count
     * @method MorphToMany|_IH_Tag_QB getGetTagsAttribute()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method MorphToMany|_IH_Tag_QB tags()
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Post_QB onWriteConnection()
     * @method _IH_Post_QB newQuery()
     * @method static _IH_Post_QB on(null|string $connection = null)
     * @method static _IH_Post_QB query()
     * @method static _IH_Post_QB with(array|string $relations)
     * @method _IH_Post_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Post_C|Post[] all()
     * @ownLinks category_id,\App\Models\Category,id|user_id,\App\Models\User,id
     * @mixin _IH_Post_QB
     */
    class Post extends Model {}

    /**
     * @property int $id
     * @property float $price
     * @property int $product_id
     * @property int|null $discount
     * @property int|null $stock
     * @property int|null $cart_max
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property int|null $cart_min
     * @property Carbon|null $discount_expire_at
     * @property int|null $ordering
     * @property int|null $discount_price
     * @property _IH_PriceChange_C|PriceChange[] $changes
     * @property-read int $changes_count
     * @method HasMany|_IH_PriceChange_QB changes()
     * @property File $file
     * @method MorphToMany|_IH_File_QB file()
     * @property _IH_Attribute_C|Attribute[] $get_attributes
     * @property-read int $get_attributes_count
     * @method BelongsToMany|_IH_Attribute_QB get_attributes()
     * @property _IH_OrderItem_C|OrderItem[] $orderItems
     * @property-read int $order_items_count
     * @method HasMany|_IH_OrderItem_QB orderItems()
     * @property _IH_OrderItem_C|OrderItem[] $pendingToSend
     * @property-read int $pending_to_send_count
     * @method HasMany|_IH_OrderItem_QB pendingToSend()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_Price_QB onWriteConnection()
     * @method _IH_Price_QB newQuery()
     * @method static _IH_Price_QB on(null|string $connection = null)
     * @method static _IH_Price_QB query()
     * @method static _IH_Price_QB with(array|string $relations)
     * @method _IH_Price_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Price_C|Price[] all()
     * @ownLinks product_id,\App\Models\Product,id
     * @foreignLinks id,\App\Models\PriceChange,price_id|id,\App\Models\OrderItem,price_id
     * @mixin _IH_Price_QB
     */
    class Price extends Model {}

    /**
     * @property int $id
     * @property int $price
     * @property int|null $discount
     * @property int|null $price_id
     * @property int $product_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property bool $is_available
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_PriceChange_QB onWriteConnection()
     * @method _IH_PriceChange_QB newQuery()
     * @method static _IH_PriceChange_QB on(null|string $connection = null)
     * @method static _IH_PriceChange_QB query()
     * @method static _IH_PriceChange_QB with(array|string $relations)
     * @method _IH_PriceChange_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PriceChange_C|PriceChange[] all()
     * @ownLinks price_id,\App\Models\Price,id|product_id,\App\Models\Product,id
     * @mixin _IH_PriceChange_QB
     */
    class PriceChange extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string|null $title_en
     * @property string $type
     * @property int|null $category_id
     * @property int|null $spec_type_id
     * @property string $slug
     * @property string|null $image
     * @property string|null $file
     * @property int|null $weight
     * @property bool $special
     * @property string|null $description
     * @property string|null $short_description
     * @property int $sell
     * @property int $view
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string $price_type
     * @property string|null $meta_title
     * @property string|null $meta_description
     * @property bool $published
     * @property string|null $image_alt
     * @property int|null $brand_id
     * @property Carbon|null $publish_date
     * @property string $unit
     * @property string $rounding_type
     * @property string $rounding_amount
     * @property int|null $currency_id
     * @property array|null $discount_per_purchase
     * @property-read null $discount attribute
     * @property-read float|int $discount_price attribute
     * @property-read $get_tags attribute
     * @property Brand|null $brand
     * @method BelongsTo|_IH_Brand_QB brand()
     * @property _IH_Cart_C|Cart[] $carts
     * @property-read int $carts_count
     * @method BelongsToMany|_IH_Cart_QB carts()
     * @property _IH_Category_C|Category[] $categories
     * @property-read int $categories_count
     * @method BelongsToMany|_IH_Category_QB categories()
     * @property Category|null $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method MorphToMany|_IH_Comment_QB comments()
     * @property Currency|null $currency
     * @method BelongsTo|_IH_Currency_QB currency()
     * @property _IH_File_C|File[] $files
     * @property-read int $files_count
     * @method HasManyThrough|_IH_File_QB files()
     * @property _IH_Gallery_C|Gallery[] $gallery
     * @property-read int $gallery_count
     * @method MorphToMany|_IH_Gallery_QB gallery()
     * @property _IH_Tag_C|Tag[] $getGetTagsAttribute
     * @property-read int $get_get_tags_attribute_count
     * @method MorphToMany|_IH_Tag_QB getGetTagsAttribute()
     * @property _IH_Label_C|Label[] $getLabels
     * @property-read int $get_labels_count
     * @method MorphToMany|_IH_Label_QB getLabels()
     * @property _IH_Price_C|Price[] $getPrices
     * @property-read int $get_prices_count
     * @method HasMany|_IH_Price_QB getPrices()
     * @property _IH_Price_C|Price[] $isSinglePrice
     * @property-read int $is_single_price_count
     * @method HasMany|_IH_Price_QB isSinglePrice()
     * @property _IH_Label_C|Label[] $labels
     * @property-read int $labels_count
     * @method MorphToMany|_IH_Label_QB labels()
     * @property Price $lowestPrice
     * @method HasOne|_IH_Price_QB lowestPrice()
     * @property _IH_Order_C|Order[] $orders
     * @property-read int $orders_count
     * @method BelongsToMany|_IH_Order_QB orders()
     * @property _IH_PriceChange_C|PriceChange[] $priceChanges
     * @property-read int $price_changes_count
     * @method HasMany|_IH_PriceChange_QB priceChanges()
     * @property _IH_Price_C|Price[] $prices
     * @property-read int $prices_count
     * @method HasMany|_IH_Price_QB prices()
     * @property SpecType|null $specType
     * @method BelongsTo|_IH_SpecType_QB specType()
     * @property _IH_Specification_C|Specification[] $specialSpecifications
     * @property-read int $special_specifications_count
     * @method BelongsToMany|_IH_Specification_QB specialSpecifications()
     * @property _IH_SpecificationGroup_C|SpecificationGroup[] $specificationGroups
     * @property-read int $specification_groups_count
     * @method BelongsToMany|_IH_SpecificationGroup_QB specificationGroups()
     * @property _IH_Specification_C|Specification[] $specifications
     * @property-read int $specifications_count
     * @method BelongsToMany|_IH_Specification_QB specifications()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method MorphToMany|_IH_Tag_QB tags()
     * @method static _IH_Product_QB onWriteConnection()
     * @method _IH_Product_QB newQuery()
     * @method static _IH_Product_QB on(null|string $connection = null)
     * @method static _IH_Product_QB query()
     * @method static _IH_Product_QB with(array|string $relations)
     * @method _IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @ownLinks category_id,\App\Models\Category,id|spec_type_id,\App\Models\SpecType,id|brand_id,\App\Models\Brand,id|currency_id,\App\Models\Currency,id
     * @foreignLinks id,\App\Models\OrderItem,product_id|id,\App\Models\StockNotify,product_id|id,\App\Models\Price,product_id|id,\App\Models\PriceChange,product_id|id,\App\Models\Favorite,product_id
     * @mixin _IH_Product_QB
     * @method static ProductFactory factory(...$parameters)
     */
    class Product extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $name_en
     * @property string|null $latitude
     * @property string|null $longitude
     * @property int|null $ordering
     * @property bool $is_active
     * @property Carbon|null $deleted_at
     * @property _IH_City_C|City[] $cities
     * @property-read int $cities_count
     * @method HasMany|_IH_City_QB cities()
     * @method static _IH_Province_QB onWriteConnection()
     * @method _IH_Province_QB newQuery()
     * @method static _IH_Province_QB on(null|string $connection = null)
     * @method static _IH_Province_QB query()
     * @method static _IH_Province_QB with(array|string $relations)
     * @method _IH_Province_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Province_C|Province[] all()
     * @foreignLinks id,\App\Models\City,province_id|id,\App\Models\Order,province_id|id,\App\Models\Address,province_id|id,\App\Models\Order,province_id|id,\App\Models\Carrier,province_id
     * @mixin _IH_Province_QB
     */
    class Province extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $slug
     * @property string|null $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method BelongsToMany|_IH_Permission_QB permissions()
     * @property _IH_User_C|User[] $users
     * @property-read int $users_count
     * @method BelongsToMany|_IH_User_QB users()
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @foreignLinks
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}

    /**
     * @property int $id
     * @property string|null $title
     * @property string|null $description
     * @property string $image
     * @property bool $published
     * @property string|null $link
     * @property int|null $ordering
     * @property string $group
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Slider_QB onWriteConnection()
     * @method _IH_Slider_QB newQuery()
     * @method static _IH_Slider_QB on(null|string $connection = null)
     * @method static _IH_Slider_QB query()
     * @method static _IH_Slider_QB with(array|string $relations)
     * @method _IH_Slider_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Slider_C|Slider[] all()
     * @mixin _IH_Slider_QB
     */
    class Slider extends Model {}

    /**
     * @property int $id
     * @property string $mobile
     * @property string $ip
     * @property string|null $type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $user_id
     * @property string|null $response
     * @property string $provider
     * @property string|null $message
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Sms_QB onWriteConnection()
     * @method _IH_Sms_QB newQuery()
     * @method static _IH_Sms_QB on(null|string $connection = null)
     * @method static _IH_Sms_QB query()
     * @method static _IH_Sms_QB with(array|string $relations)
     * @method _IH_Sms_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Sms_C|Sms[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_Sms_QB
     */
    class Sms extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_SpecificationGroup_C|SpecificationGroup[] $specificationGroups
     * @property-read int $specification_groups_count
     * @method BelongsToMany|_IH_SpecificationGroup_QB specificationGroups()
     * @property _IH_Specification_C|Specification[] $specifications
     * @property-read int $specifications_count
     * @method BelongsToMany|_IH_Specification_QB specifications()
     * @method static _IH_SpecType_QB onWriteConnection()
     * @method _IH_SpecType_QB newQuery()
     * @method static _IH_SpecType_QB on(null|string $connection = null)
     * @method static _IH_SpecType_QB query()
     * @method static _IH_SpecType_QB with(array|string $relations)
     * @method _IH_SpecType_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SpecType_C|SpecType[] all()
     * @foreignLinks id,\App\Models\Product,spec_type_id
     * @mixin _IH_SpecType_QB
     */
    class SpecType extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Filter_C|Filter[] $filters
     * @property-read int $filters_count
     * @method MorphToMany|_IH_Filter_QB filters()
     * @property _IH_SpecificationGroup_C|SpecificationGroup[] $group
     * @property-read int $group_count
     * @method BelongsToMany|_IH_SpecificationGroup_QB group()
     * @method static _IH_Specification_QB onWriteConnection()
     * @method _IH_Specification_QB newQuery()
     * @method static _IH_Specification_QB on(null|string $connection = null)
     * @method static _IH_Specification_QB query()
     * @method static _IH_Specification_QB with(array|string $relations)
     * @method _IH_Specification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Specification_C|Specification[] all()
     * @foreignLinks
     * @mixin _IH_Specification_QB
     */
    class Specification extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Specification_C|Specification[] $specifications
     * @property-read int $specifications_count
     * @method BelongsToMany|_IH_Specification_QB specifications()
     * @method static _IH_SpecificationGroup_QB onWriteConnection()
     * @method _IH_SpecificationGroup_QB newQuery()
     * @method static _IH_SpecificationGroup_QB on(null|string $connection = null)
     * @method static _IH_SpecificationGroup_QB query()
     * @method static _IH_SpecificationGroup_QB with(array|string $relations)
     * @method _IH_SpecificationGroup_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SpecificationGroup_C|SpecificationGroup[] all()
     * @foreignLinks
     * @mixin _IH_SpecificationGroup_QB
     */
    class SpecificationGroup extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $type
     * @property int|null $ordering
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Filter_C|Filter[] $filters
     * @property-read int $filters_count
     * @method MorphToMany|_IH_Filter_QB filters()
     * @method static _IH_StaticFilter_QB onWriteConnection()
     * @method _IH_StaticFilter_QB newQuery()
     * @method static _IH_StaticFilter_QB on(null|string $connection = null)
     * @method static _IH_StaticFilter_QB query()
     * @method static _IH_StaticFilter_QB with(array|string $relations)
     * @method _IH_StaticFilter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_StaticFilter_C|StaticFilter[] all()
     * @mixin _IH_StaticFilter_QB
     */
    class StaticFilter extends Model {}

    /**
     * @property int $id
     * @property Carbon $date
     * @property int $view_count
     * @property int $viewer_count
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Statistics_QB onWriteConnection()
     * @method _IH_Statistics_QB newQuery()
     * @method static _IH_Statistics_QB on(null|string $connection = null)
     * @method static _IH_Statistics_QB query()
     * @method static _IH_Statistics_QB with(array|string $relations)
     * @method _IH_Statistics_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Statistics_C|Statistics[] all()
     * @mixin _IH_Statistics_QB
     */
    class Statistics extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $mobile
     * @property string|null $email
     * @property bool $seen
     * @property int $product_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_StockNotify_QB onWriteConnection()
     * @method _IH_StockNotify_QB newQuery()
     * @method static _IH_StockNotify_QB on(null|string $connection = null)
     * @method static _IH_StockNotify_QB query()
     * @method static _IH_StockNotify_QB with(array|string $relations)
     * @method _IH_StockNotify_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_StockNotify_C|StockNotify[] all()
     * @ownLinks product_id,\App\Models\Product,id
     * @mixin _IH_StockNotify_QB
     */
    class StockNotify extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method MorphToMany|_IH_Tag_QB tags()
     * @method static _IH_Tag_QB onWriteConnection()
     * @method _IH_Tag_QB newQuery()
     * @method static _IH_Tag_QB on(null|string $connection = null)
     * @method static _IH_Tag_QB query()
     * @method static _IH_Tag_QB with(array|string $relations)
     * @method _IH_Tag_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tag_C|Tag[] all()
     * @foreignLinks
     * @mixin _IH_Tag_QB
     */
    class Tag extends Model {}

    /**
     * @property int $id
     * @property int $carrier_id
     * @property string $type
     * @property int $max_weight
     * @property int $shipping_cost
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carrier $carrier
     * @method BelongsTo|_IH_Carrier_QB carrier()
     * @method static _IH_Tariff_QB onWriteConnection()
     * @method _IH_Tariff_QB newQuery()
     * @method static _IH_Tariff_QB on(null|string $connection = null)
     * @method static _IH_Tariff_QB query()
     * @method static _IH_Tariff_QB with(array|string $relations)
     * @method _IH_Tariff_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tariff_C|Tariff[] all()
     * @ownLinks carrier_id,\App\Models\Carrier,id
     * @mixin _IH_Tariff_QB
     */
    class Tariff extends Model {}

    /**
     * @property int $id
     * @property string $subject
     * @property string $priority
     * @property int $user_id
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_TicketMessage_C|TicketMessage[] $messages
     * @property-read int $messages_count
     * @method HasMany|_IH_TicketMessage_QB messages()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Ticket_QB onWriteConnection()
     * @method _IH_Ticket_QB newQuery()
     * @method static _IH_Ticket_QB on(null|string $connection = null)
     * @method static _IH_Ticket_QB query()
     * @method static _IH_Ticket_QB with(array|string $relations)
     * @method _IH_Ticket_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ticket_C|Ticket[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks id,\App\Models\TicketMessage,ticket_id
     * @mixin _IH_Ticket_QB
     */
    class Ticket extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property int $ticket_id
     * @property string $message
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_File_C|File[] $files
     * @property-read int $files_count
     * @method MorphToMany|_IH_File_QB files()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_TicketMessage_QB onWriteConnection()
     * @method _IH_TicketMessage_QB newQuery()
     * @method static _IH_TicketMessage_QB on(null|string $connection = null)
     * @method static _IH_TicketMessage_QB query()
     * @method static _IH_TicketMessage_QB with(array|string $relations)
     * @method _IH_TicketMessage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TicketMessage_C|TicketMessage[] all()
     * @ownLinks user_id,\App\Models\User,id|ticket_id,\App\Models\Ticket,id
     * @mixin _IH_TicketMessage_QB
     */
    class TicketMessage extends Model {}

    /**
     * @property int $id
     * @property bool $status
     * @property int|null $amount
     * @property string|null $transId
     * @property string|null $factorNumber
     * @property string|null $mobile
     * @property string|null $description
     * @property string|null $cardNumber
     * @property string|null $traceNumber
     * @property string|null $message
     * @property string $token
     * @property int $transactionable_id
     * @property string $transactionable_type
     * @property int|null $user_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $gateway_id
     * @property Model $transactionable
     * @method MorphTo transactionable()
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Transaction_QB onWriteConnection()
     * @method _IH_Transaction_QB newQuery()
     * @method static _IH_Transaction_QB on(null|string $connection = null)
     * @method static _IH_Transaction_QB query()
     * @method static _IH_Transaction_QB with(array|string $relations)
     * @method _IH_Transaction_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Transaction_C|Transaction[] all()
     * @ownLinks user_id,\App\Models\User,id|gateway_id,\App\Models\Gateway,id
     * @mixin _IH_Transaction_QB
     */
    class Transaction extends Model {}

    /**
     * @property int $id
     * @property string $first_name
     * @property string $last_name
     * @property string $username
     * @property string|null $email
     * @property string|null $image
     * @property string $level
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $verified_at
     * @property bool $force_to_password_change
     * @property string|null $bio
     * @property-read string $fullname attribute
     * @property-read $image_url attribute
     * @property-read $profile_photo_url attribute
     * @property Address $address
     * @method HasOne|_IH_Address_QB address()
     * @property Cart $cart
     * @method HasOne|_IH_Cart_QB cart()
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property _IH_Product_C|Product[] $favoriteProducts
     * @property-read int $favorite_products_count
     * @method BelongsToMany|_IH_Product_QB favoriteProducts()
     * @property _IH_Favorite_C|Favorite[] $favorites
     * @property-read int $favorites_count
     * @method HasMany|_IH_Favorite_QB favorites()
     * @property Cart $getCart
     * @method HasOne|_IH_Cart_QB getCart()
     * @property Wallet $getWallet
     * @method HasOne|_IH_Wallet_QB getWallet()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_OrderItem_C|OrderItem[] $orderItems
     * @property-read int $order_items_count
     * @method HasManyThrough|_IH_OrderItem_QB orderItems()
     * @property _IH_Order_C|Order[] $orders
     * @property-read int $orders_count
     * @method HasMany|_IH_Order_QB orders()
     * @property _IH_PushSubscription_C|PushSubscription[] $pushSubscriptions
     * @property-read int $push_subscriptions_count
     * @method MorphToMany|_IH_PushSubscription_QB pushSubscriptions()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method BelongsToMany|_IH_Role_QB roles()
     * @property _IH_PersonalAccessToken_C|PersonalAccessToken[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB tokens()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @property _IH_Viewer_C|Viewer[] $views
     * @property-read int $views_count
     * @method HasMany|_IH_Viewer_QB views()
     * @property Wallet $wallet
     * @method HasOne|_IH_Wallet_QB wallet()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\Cviebrock\EloquentSluggable\Tests\Models\PostNotSluggable,user_id|id,\App\Models\Cart,user_id|id,\App\Models\Order,user_id|id,\App\Models\Transaction,user_id|id,\App\Models\Address,user_id|id,\App\Models\Comment,user_id|id,\App\Models\Viewer,user_id|id,\App\Models\Favorite,user_id|id,\App\Models\UserOption,user_id|id,\App\Models\Ticket,user_id|id,\App\Models\TicketMessage,user_id|id,\App\Models\OneTimeCode,user_id|id,\App\Models\Sms,user_id|id,\App\Models\Wallet,user_id
     * @mixin _IH_User_QB
     */
    class User extends Model {}

    /**
     * @property int $id
     * @property string $option_name
     * @property string|null $option_value
     * @property int $user_id
     * @method static _IH_UserOption_QB onWriteConnection()
     * @method _IH_UserOption_QB newQuery()
     * @method static _IH_UserOption_QB on(null|string $connection = null)
     * @method static _IH_UserOption_QB query()
     * @method static _IH_UserOption_QB with(array|string $relations)
     * @method _IH_UserOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserOption_C|UserOption[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_UserOption_QB
     */
    class UserOption extends Model {}

    /**
     * @property int $id
     * @property string|null $ip
     * @property string|null $path
     * @property bool $auth
     * @property string|null $options
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $user_id
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Viewer_QB onWriteConnection()
     * @method _IH_Viewer_QB newQuery()
     * @method static _IH_Viewer_QB on(null|string $connection = null)
     * @method static _IH_Viewer_QB query()
     * @method static _IH_Viewer_QB with(array|string $relations)
     * @method _IH_Viewer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Viewer_C|Viewer[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_Viewer_QB
     */
    class Viewer extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property float $balance
     * @property bool $is_active
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read int $balance_count
     * @method HasMany|_IH_WalletHistory_QB balance()
     * @property _IH_WalletHistory_C|WalletHistory[] $histories
     * @property-read int $histories_count
     * @method HasMany|_IH_WalletHistory_QB histories()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Wallet_QB onWriteConnection()
     * @method _IH_Wallet_QB newQuery()
     * @method static _IH_Wallet_QB on(null|string $connection = null)
     * @method static _IH_Wallet_QB query()
     * @method static _IH_Wallet_QB with(array|string $relations)
     * @method _IH_Wallet_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Wallet_C|Wallet[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks id,\App\Models\WalletHistory,wallet_id
     * @mixin _IH_Wallet_QB
     */
    class Wallet extends Model {}

    /**
     * @property int $id
     * @property int $wallet_id
     * @property int|null $order_id
     * @property string $type
     * @property string $source
     * @property string $status
     * @property float $amount
     * @property string|null $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Order|null $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property Transaction $transaction
     * @method MorphToMany|_IH_Transaction_QB transaction()
     * @property Wallet $wallet
     * @method BelongsTo|_IH_Wallet_QB wallet()
     * @method static _IH_WalletHistory_QB onWriteConnection()
     * @method _IH_WalletHistory_QB newQuery()
     * @method static _IH_WalletHistory_QB on(null|string $connection = null)
     * @method static _IH_WalletHistory_QB query()
     * @method static _IH_WalletHistory_QB with(array|string $relations)
     * @method _IH_WalletHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WalletHistory_C|WalletHistory[] all()
     * @ownLinks wallet_id,\App\Models\Wallet,id|order_id,\App\Models\Order,id
     * @mixin _IH_WalletHistory_QB
     */
    class WalletHistory extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $key
     * @property bool $is_active
     * @property string $theme
     * @property int|null $ordering
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_WidgetOption_C|WidgetOption[] $options
     * @property-read int $options_count
     * @method HasMany|_IH_WidgetOption_QB options()
     * @method static _IH_Widget_QB onWriteConnection()
     * @method _IH_Widget_QB newQuery()
     * @method static _IH_Widget_QB on(null|string $connection = null)
     * @method static _IH_Widget_QB query()
     * @method static _IH_Widget_QB with(array|string $relations)
     * @method _IH_Widget_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Widget_C|Widget[] all()
     * @foreignLinks id,\App\Models\WidgetOption,widget_id
     * @mixin _IH_Widget_QB
     */
    class Widget extends Model {}

    /**
     * @property int $id
     * @property int $widget_id
     * @property string $key
     * @property string|null $value
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Category_C|Category[] $categories
     * @property-read int $categories_count
     * @method BelongsToMany|_IH_Category_QB categories()
     * @method static _IH_WidgetOption_QB onWriteConnection()
     * @method _IH_WidgetOption_QB newQuery()
     * @method static _IH_WidgetOption_QB on(null|string $connection = null)
     * @method static _IH_WidgetOption_QB query()
     * @method static _IH_WidgetOption_QB with(array|string $relations)
     * @method _IH_WidgetOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WidgetOption_C|WidgetOption[] all()
     * @ownLinks widget_id,\App\Models\Widget,id
     * @foreignLinks
     * @mixin _IH_WidgetOption_QB
     */
    class WidgetOption extends Model {}
}
