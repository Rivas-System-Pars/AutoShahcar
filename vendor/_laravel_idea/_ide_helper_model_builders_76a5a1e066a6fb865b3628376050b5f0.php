<?php //35a0f7bd17e9fc60c737d0d6652d6b06
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Address;
    use App\Models\Apikey;
    use App\Models\Attribute;
    use App\Models\AttributeGroup;
    use App\Models\Banner;
    use App\Models\Brand;
    use App\Models\Carrier;
    use App\Models\Cart;
    use App\Models\Category;
    use App\Models\City;
    use App\Models\Comment;
    use App\Models\Contact;
    use App\Models\Currency;
    use App\Models\Discount;
    use App\Models\Favorite;
    use App\Models\File;
    use App\Models\Filter;
    use App\Models\Filterable;
    use App\Models\Gallery;
    use App\Models\Gateway;
    use App\Models\GatewayConfig;
    use App\Models\Label;
    use App\Models\Link;
    use App\Models\Menu;
    use App\Models\OneTimeCode;
    use App\Models\Option;
    use App\Models\Order;
    use App\Models\OrderItem;
    use App\Models\Page;
    use App\Models\Permission;
    use App\Models\Post;
    use App\Models\Price;
    use App\Models\PriceChange;
    use App\Models\Product;
    use App\Models\Province;
    use App\Models\Role;
    use App\Models\Slider;
    use App\Models\Sms;
    use App\Models\Specification;
    use App\Models\SpecificationGroup;
    use App\Models\SpecType;
    use App\Models\StaticFilter;
    use App\Models\Statistics;
    use App\Models\StockNotify;
    use App\Models\Tag;
    use App\Models\Tariff;
    use App\Models\Ticket;
    use App\Models\TicketMessage;
    use App\Models\Transaction;
    use App\Models\User;
    use App\Models\UserOption;
    use App\Models\Viewer;
    use App\Models\Wallet;
    use App\Models\WalletHistory;
    use App\Models\Widget;
    use App\Models\WidgetOption;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Http\Request;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Address|null getOrPut($key, $value)
     * @method Address|$this shift(int $count = 1)
     * @method Address|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Address|$this pop(int $count = 1)
     * @method Address|null pull($key, $default = null)
     * @method Address|null last(callable $callback = null, $default = null)
     * @method Address|$this random(int|null $number = null)
     * @method Address|null sole($key = null, $operator = null, $value = null)
     * @method Address|null get($key, $default = null)
     * @method Address|null first(callable $callback = null, $default = null)
     * @method Address|null firstWhere(string $key, $operator = null, $value = null)
     * @method Address|null find($key, $default = null)
     * @method Address[] all()
     */
    class _IH_Address_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Address[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Address_QB whereId($value)
     * @method _IH_Address_QB whereProvinceId($value)
     * @method _IH_Address_QB whereCityId($value)
     * @method _IH_Address_QB wherePostalCode($value)
     * @method _IH_Address_QB whereAddress($value)
     * @method _IH_Address_QB whereUserId($value)
     * @method _IH_Address_QB whereCreatedAt($value)
     * @method _IH_Address_QB whereUpdatedAt($value)
     * @method Address baseSole(array|string $columns = ['*'])
     * @method Address create(array $attributes = [])
     * @method _IH_Address_C|Address[] cursor()
     * @method Address|null|_IH_Address_C|Address[] find($id, array $columns = ['*'])
     * @method _IH_Address_C|Address[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Address|_IH_Address_C|Address[] findOrFail($id, array $columns = ['*'])
     * @method Address|_IH_Address_C|Address[] findOrNew($id, array $columns = ['*'])
     * @method Address first(array|string $columns = ['*'])
     * @method Address firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Address firstOrCreate(array $attributes = [], array $values = [])
     * @method Address firstOrFail(array $columns = ['*'])
     * @method Address firstOrNew(array $attributes = [], array $values = [])
     * @method Address firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Address forceCreate(array $attributes)
     * @method _IH_Address_C|Address[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Address_C|Address[] get(array|string $columns = ['*'])
     * @method Address getModel()
     * @method Address[] getModels(array|string $columns = ['*'])
     * @method _IH_Address_C|Address[] hydrate(array $items)
     * @method Address make(array $attributes = [])
     * @method Address newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Address[]|_IH_Address_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Address[]|_IH_Address_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Address sole(array|string $columns = ['*'])
     * @method Address updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Address_QB extends _BaseBuilder {}

    /**
     * @method Apikey|null getOrPut($key, $value)
     * @method Apikey|$this shift(int $count = 1)
     * @method Apikey|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Apikey|$this pop(int $count = 1)
     * @method Apikey|null pull($key, $default = null)
     * @method Apikey|null last(callable $callback = null, $default = null)
     * @method Apikey|$this random(int|null $number = null)
     * @method Apikey|null sole($key = null, $operator = null, $value = null)
     * @method Apikey|null get($key, $default = null)
     * @method Apikey|null first(callable $callback = null, $default = null)
     * @method Apikey|null firstWhere(string $key, $operator = null, $value = null)
     * @method Apikey|null find($key, $default = null)
     * @method Apikey[] all()
     */
    class _IH_Apikey_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Apikey[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Apikey_QB whereId($value)
     * @method _IH_Apikey_QB whereDescription($value)
     * @method _IH_Apikey_QB whereIsActive($value)
     * @method _IH_Apikey_QB whereCreatedAt($value)
     * @method _IH_Apikey_QB whereUpdatedAt($value)
     * @method Apikey baseSole(array|string $columns = ['*'])
     * @method Apikey create(array $attributes = [])
     * @method _IH_Apikey_C|Apikey[] cursor()
     * @method Apikey|null|_IH_Apikey_C|Apikey[] find($id, array $columns = ['*'])
     * @method _IH_Apikey_C|Apikey[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Apikey|_IH_Apikey_C|Apikey[] findOrFail($id, array $columns = ['*'])
     * @method Apikey|_IH_Apikey_C|Apikey[] findOrNew($id, array $columns = ['*'])
     * @method Apikey first(array|string $columns = ['*'])
     * @method Apikey firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Apikey firstOrCreate(array $attributes = [], array $values = [])
     * @method Apikey firstOrFail(array $columns = ['*'])
     * @method Apikey firstOrNew(array $attributes = [], array $values = [])
     * @method Apikey firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Apikey forceCreate(array $attributes)
     * @method _IH_Apikey_C|Apikey[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Apikey_C|Apikey[] get(array|string $columns = ['*'])
     * @method Apikey getModel()
     * @method Apikey[] getModels(array|string $columns = ['*'])
     * @method _IH_Apikey_C|Apikey[] hydrate(array $items)
     * @method Apikey make(array $attributes = [])
     * @method Apikey newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Apikey[]|_IH_Apikey_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Apikey[]|_IH_Apikey_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Apikey sole(array|string $columns = ['*'])
     * @method Apikey updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Apikey_QB extends _BaseBuilder {}

    /**
     * @method AttributeGroup|null getOrPut($key, $value)
     * @method AttributeGroup|$this shift(int $count = 1)
     * @method AttributeGroup|null firstOrFail($key = null, $operator = null, $value = null)
     * @method AttributeGroup|$this pop(int $count = 1)
     * @method AttributeGroup|null pull($key, $default = null)
     * @method AttributeGroup|null last(callable $callback = null, $default = null)
     * @method AttributeGroup|$this random(int|null $number = null)
     * @method AttributeGroup|null sole($key = null, $operator = null, $value = null)
     * @method AttributeGroup|null get($key, $default = null)
     * @method AttributeGroup|null first(callable $callback = null, $default = null)
     * @method AttributeGroup|null firstWhere(string $key, $operator = null, $value = null)
     * @method AttributeGroup|null find($key, $default = null)
     * @method AttributeGroup[] all()
     */
    class _IH_AttributeGroup_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AttributeGroup[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_AttributeGroup_QB whereId($value)
     * @method _IH_AttributeGroup_QB whereName($value)
     * @method _IH_AttributeGroup_QB whereType($value)
     * @method _IH_AttributeGroup_QB whereOrdering($value)
     * @method _IH_AttributeGroup_QB whereDeletedAt($value)
     * @method _IH_AttributeGroup_QB whereCreatedAt($value)
     * @method _IH_AttributeGroup_QB whereUpdatedAt($value)
     * @method AttributeGroup baseSole(array|string $columns = ['*'])
     * @method AttributeGroup create(array $attributes = [])
     * @method _IH_AttributeGroup_C|AttributeGroup[] cursor()
     * @method AttributeGroup|null|_IH_AttributeGroup_C|AttributeGroup[] find($id, array $columns = ['*'])
     * @method _IH_AttributeGroup_C|AttributeGroup[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AttributeGroup|_IH_AttributeGroup_C|AttributeGroup[] findOrFail($id, array $columns = ['*'])
     * @method AttributeGroup|_IH_AttributeGroup_C|AttributeGroup[] findOrNew($id, array $columns = ['*'])
     * @method AttributeGroup first(array|string $columns = ['*'])
     * @method AttributeGroup firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AttributeGroup firstOrCreate(array $attributes = [], array $values = [])
     * @method AttributeGroup firstOrFail(array $columns = ['*'])
     * @method AttributeGroup firstOrNew(array $attributes = [], array $values = [])
     * @method AttributeGroup firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AttributeGroup forceCreate(array $attributes)
     * @method _IH_AttributeGroup_C|AttributeGroup[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AttributeGroup_C|AttributeGroup[] get(array|string $columns = ['*'])
     * @method AttributeGroup getModel()
     * @method AttributeGroup[] getModels(array|string $columns = ['*'])
     * @method _IH_AttributeGroup_C|AttributeGroup[] hydrate(array $items)
     * @method AttributeGroup make(array $attributes = [])
     * @method AttributeGroup newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AttributeGroup[]|_IH_AttributeGroup_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AttributeGroup[]|_IH_AttributeGroup_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AttributeGroup sole(array|string $columns = ['*'])
     * @method AttributeGroup updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AttributeGroup_QB extends _BaseBuilder {}

    /**
     * @method Attribute|null getOrPut($key, $value)
     * @method Attribute|$this shift(int $count = 1)
     * @method Attribute|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Attribute|$this pop(int $count = 1)
     * @method Attribute|null pull($key, $default = null)
     * @method Attribute|null last(callable $callback = null, $default = null)
     * @method Attribute|$this random(int|null $number = null)
     * @method Attribute|null sole($key = null, $operator = null, $value = null)
     * @method Attribute|null get($key, $default = null)
     * @method Attribute|null first(callable $callback = null, $default = null)
     * @method Attribute|null firstWhere(string $key, $operator = null, $value = null)
     * @method Attribute|null find($key, $default = null)
     * @method Attribute[] all()
     */
    class _IH_Attribute_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Attribute[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Attribute_QB whereId($value)
     * @method _IH_Attribute_QB whereAttributeGroupId($value)
     * @method _IH_Attribute_QB whereName($value)
     * @method _IH_Attribute_QB whereValue($value)
     * @method _IH_Attribute_QB whereDeletedAt($value)
     * @method _IH_Attribute_QB whereCreatedAt($value)
     * @method _IH_Attribute_QB whereUpdatedAt($value)
     * @method Attribute baseSole(array|string $columns = ['*'])
     * @method Attribute create(array $attributes = [])
     * @method _IH_Attribute_C|Attribute[] cursor()
     * @method Attribute|null|_IH_Attribute_C|Attribute[] find($id, array $columns = ['*'])
     * @method _IH_Attribute_C|Attribute[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Attribute|_IH_Attribute_C|Attribute[] findOrFail($id, array $columns = ['*'])
     * @method Attribute|_IH_Attribute_C|Attribute[] findOrNew($id, array $columns = ['*'])
     * @method Attribute first(array|string $columns = ['*'])
     * @method Attribute firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Attribute firstOrCreate(array $attributes = [], array $values = [])
     * @method Attribute firstOrFail(array $columns = ['*'])
     * @method Attribute firstOrNew(array $attributes = [], array $values = [])
     * @method Attribute firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Attribute forceCreate(array $attributes)
     * @method _IH_Attribute_C|Attribute[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Attribute_C|Attribute[] get(array|string $columns = ['*'])
     * @method Attribute getModel()
     * @method Attribute[] getModels(array|string $columns = ['*'])
     * @method _IH_Attribute_C|Attribute[] hydrate(array $items)
     * @method Attribute make(array $attributes = [])
     * @method Attribute newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Attribute[]|_IH_Attribute_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Attribute[]|_IH_Attribute_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Attribute sole(array|string $columns = ['*'])
     * @method Attribute updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Attribute_QB extends _BaseBuilder {}

    /**
     * @method Banner|null getOrPut($key, $value)
     * @method Banner|$this shift(int $count = 1)
     * @method Banner|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Banner|$this pop(int $count = 1)
     * @method Banner|null pull($key, $default = null)
     * @method Banner|null last(callable $callback = null, $default = null)
     * @method Banner|$this random(int|null $number = null)
     * @method Banner|null sole($key = null, $operator = null, $value = null)
     * @method Banner|null get($key, $default = null)
     * @method Banner|null first(callable $callback = null, $default = null)
     * @method Banner|null firstWhere(string $key, $operator = null, $value = null)
     * @method Banner|null find($key, $default = null)
     * @method Banner[] all()
     */
    class _IH_Banner_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Banner[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Banner_QB whereId($value)
     * @method _IH_Banner_QB whereImage($value)
     * @method _IH_Banner_QB wherePublished($value)
     * @method _IH_Banner_QB whereLink($value)
     * @method _IH_Banner_QB whereOrdering($value)
     * @method _IH_Banner_QB whereGroup($value)
     * @method _IH_Banner_QB whereCreatedAt($value)
     * @method _IH_Banner_QB whereUpdatedAt($value)
     * @method _IH_Banner_QB whereTitle($value)
     * @method _IH_Banner_QB whereDescription($value)
     * @method Banner baseSole(array|string $columns = ['*'])
     * @method Banner create(array $attributes = [])
     * @method _IH_Banner_C|Banner[] cursor()
     * @method Banner|null|_IH_Banner_C|Banner[] find($id, array $columns = ['*'])
     * @method _IH_Banner_C|Banner[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Banner|_IH_Banner_C|Banner[] findOrFail($id, array $columns = ['*'])
     * @method Banner|_IH_Banner_C|Banner[] findOrNew($id, array $columns = ['*'])
     * @method Banner first(array|string $columns = ['*'])
     * @method Banner firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Banner firstOrCreate(array $attributes = [], array $values = [])
     * @method Banner firstOrFail(array $columns = ['*'])
     * @method Banner firstOrNew(array $attributes = [], array $values = [])
     * @method Banner firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Banner forceCreate(array $attributes)
     * @method _IH_Banner_C|Banner[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Banner_C|Banner[] get(array|string $columns = ['*'])
     * @method Banner getModel()
     * @method Banner[] getModels(array|string $columns = ['*'])
     * @method _IH_Banner_C|Banner[] hydrate(array $items)
     * @method Banner make(array $attributes = [])
     * @method Banner newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Banner[]|_IH_Banner_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Banner[]|_IH_Banner_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Banner sole(array|string $columns = ['*'])
     * @method Banner updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Banner_QB extends _BaseBuilder {}

    /**
     * @method Brand|null getOrPut($key, $value)
     * @method Brand|$this shift(int $count = 1)
     * @method Brand|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Brand|$this pop(int $count = 1)
     * @method Brand|null pull($key, $default = null)
     * @method Brand|null last(callable $callback = null, $default = null)
     * @method Brand|$this random(int|null $number = null)
     * @method Brand|null sole($key = null, $operator = null, $value = null)
     * @method Brand|null get($key, $default = null)
     * @method Brand|null first(callable $callback = null, $default = null)
     * @method Brand|null firstWhere(string $key, $operator = null, $value = null)
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
     * @method _IH_Brand_QB whereName($value)
     * @method _IH_Brand_QB whereImage($value)
     * @method _IH_Brand_QB whereDescription($value)
     * @method _IH_Brand_QB whereCreatedAt($value)
     * @method _IH_Brand_QB whereUpdatedAt($value)
     * @method _IH_Brand_QB whereSlug($value)
     * @method Brand baseSole(array|string $columns = ['*'])
     * @method Brand create(array $attributes = [])
     * @method _IH_Brand_C|Brand[] cursor()
     * @method Brand|null|_IH_Brand_C|Brand[] find($id, array $columns = ['*'])
     * @method _IH_Brand_C|Brand[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOrFail($id, array $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOrNew($id, array $columns = ['*'])
     * @method Brand first(array|string $columns = ['*'])
     * @method Brand firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Brand firstOrCreate(array $attributes = [], array $values = [])
     * @method Brand firstOrFail(array $columns = ['*'])
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
     * @method LengthAwarePaginator|Brand[]|_IH_Brand_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Brand[]|_IH_Brand_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Brand sole(array|string $columns = ['*'])
     * @method Brand updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Brand_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Brand_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Brand_QB extends _BaseBuilder {}

    /**
     * @method Carrier|null getOrPut($key, $value)
     * @method Carrier|$this shift(int $count = 1)
     * @method Carrier|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Carrier|$this pop(int $count = 1)
     * @method Carrier|null pull($key, $default = null)
     * @method Carrier|null last(callable $callback = null, $default = null)
     * @method Carrier|$this random(int|null $number = null)
     * @method Carrier|null sole($key = null, $operator = null, $value = null)
     * @method Carrier|null get($key, $default = null)
     * @method Carrier|null first(callable $callback = null, $default = null)
     * @method Carrier|null firstWhere(string $key, $operator = null, $value = null)
     * @method Carrier|null find($key, $default = null)
     * @method Carrier[] all()
     */
    class _IH_Carrier_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Carrier[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Carrier_QB whereId($value)
     * @method _IH_Carrier_QB whereTitle($value)
     * @method _IH_Carrier_QB whereImage($value)
     * @method _IH_Carrier_QB whereWaitingTime($value)
     * @method _IH_Carrier_QB whereMaxPackageWeight($value)
     * @method _IH_Carrier_QB whereMinPackageWeight($value)
     * @method _IH_Carrier_QB whereExtraCost($value)
     * @method _IH_Carrier_QB whereIsActive($value)
     * @method _IH_Carrier_QB whereDescription($value)
     * @method _IH_Carrier_QB whereProvinceId($value)
     * @method _IH_Carrier_QB whereCityId($value)
     * @method _IH_Carrier_QB whereFreeShippingWeight($value)
     * @method _IH_Carrier_QB whereFreeShippingPrice($value)
     * @method _IH_Carrier_QB whereCarrigeForward($value)
     * @method _IH_Carrier_QB whereCoveredCities($value)
     * @method _IH_Carrier_QB whereDeletedAt($value)
     * @method _IH_Carrier_QB whereCreatedAt($value)
     * @method _IH_Carrier_QB whereUpdatedAt($value)
     * @method Carrier baseSole(array|string $columns = ['*'])
     * @method Carrier create(array $attributes = [])
     * @method _IH_Carrier_C|Carrier[] cursor()
     * @method Carrier|null|_IH_Carrier_C|Carrier[] find($id, array $columns = ['*'])
     * @method _IH_Carrier_C|Carrier[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Carrier|_IH_Carrier_C|Carrier[] findOrFail($id, array $columns = ['*'])
     * @method Carrier|_IH_Carrier_C|Carrier[] findOrNew($id, array $columns = ['*'])
     * @method Carrier first(array|string $columns = ['*'])
     * @method Carrier firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Carrier firstOrCreate(array $attributes = [], array $values = [])
     * @method Carrier firstOrFail(array $columns = ['*'])
     * @method Carrier firstOrNew(array $attributes = [], array $values = [])
     * @method Carrier firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Carrier forceCreate(array $attributes)
     * @method _IH_Carrier_C|Carrier[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Carrier_C|Carrier[] get(array|string $columns = ['*'])
     * @method Carrier getModel()
     * @method Carrier[] getModels(array|string $columns = ['*'])
     * @method _IH_Carrier_C|Carrier[] hydrate(array $items)
     * @method Carrier make(array $attributes = [])
     * @method Carrier newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Carrier[]|_IH_Carrier_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Carrier[]|_IH_Carrier_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Carrier sole(array|string $columns = ['*'])
     * @method Carrier updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Carrier_QB active()
     */
    class _IH_Carrier_QB extends _BaseBuilder {}

    /**
     * @method Cart|null getOrPut($key, $value)
     * @method Cart|$this shift(int $count = 1)
     * @method Cart|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Cart|$this pop(int $count = 1)
     * @method Cart|null pull($key, $default = null)
     * @method Cart|null last(callable $callback = null, $default = null)
     * @method Cart|$this random(int|null $number = null)
     * @method Cart|null sole($key = null, $operator = null, $value = null)
     * @method Cart|null get($key, $default = null)
     * @method Cart|null first(callable $callback = null, $default = null)
     * @method Cart|null firstWhere(string $key, $operator = null, $value = null)
     * @method Cart|null find($key, $default = null)
     * @method Cart[] all()
     */
    class _IH_Cart_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Cart[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Cart_QB whereId($value)
     * @method _IH_Cart_QB whereUserId($value)
     * @method _IH_Cart_QB whereCreatedAt($value)
     * @method _IH_Cart_QB whereUpdatedAt($value)
     * @method _IH_Cart_QB whereDiscountId($value)
     * @method Cart baseSole(array|string $columns = ['*'])
     * @method Cart create(array $attributes = [])
     * @method _IH_Cart_C|Cart[] cursor()
     * @method Cart|null|_IH_Cart_C|Cart[] find($id, array $columns = ['*'])
     * @method _IH_Cart_C|Cart[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Cart|_IH_Cart_C|Cart[] findOrFail($id, array $columns = ['*'])
     * @method Cart|_IH_Cart_C|Cart[] findOrNew($id, array $columns = ['*'])
     * @method Cart first(array|string $columns = ['*'])
     * @method Cart firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Cart firstOrCreate(array $attributes = [], array $values = [])
     * @method Cart firstOrFail(array $columns = ['*'])
     * @method Cart firstOrNew(array $attributes = [], array $values = [])
     * @method Cart firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Cart forceCreate(array $attributes)
     * @method _IH_Cart_C|Cart[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Cart_C|Cart[] get(array|string $columns = ['*'])
     * @method Cart getModel()
     * @method Cart[] getModels(array|string $columns = ['*'])
     * @method _IH_Cart_C|Cart[] hydrate(array $items)
     * @method Cart make(array $attributes = [])
     * @method Cart newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Cart[]|_IH_Cart_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Cart[]|_IH_Cart_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Cart sole(array|string $columns = ['*'])
     * @method Cart updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Cart_QB extends _BaseBuilder {}

    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, $default = null)
     * @method Category|null last(callable $callback = null, $default = null)
     * @method Category|$this random(int|null $number = null)
     * @method Category|null sole($key = null, $operator = null, $value = null)
     * @method Category|null get($key, $default = null)
     * @method Category|null first(callable $callback = null, $default = null)
     * @method Category|null firstWhere(string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereTitle($value)
     * @method _IH_Category_QB whereSlug($value)
     * @method _IH_Category_QB whereType($value)
     * @method _IH_Category_QB whereImage($value)
     * @method _IH_Category_QB whereCategoryId($value)
     * @method _IH_Category_QB whereOrdering($value)
     * @method _IH_Category_QB whereCreatedAt($value)
     * @method _IH_Category_QB whereUpdatedAt($value)
     * @method _IH_Category_QB whereMetaTitle($value)
     * @method _IH_Category_QB whereMetaDescription($value)
     * @method _IH_Category_QB whereBackgroundImage($value)
     * @method _IH_Category_QB whereDescription($value)
     * @method _IH_Category_QB whereFilterType($value)
     * @method _IH_Category_QB whereFilterId($value)
     * @method _IH_Category_QB whereShowInIndex($value)
     * @method _IH_Category_QB wherePublished($value)
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Category_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Category_QB getWithChilds()
     * @method _IH_Category_QB published()
     * @method _IH_Category_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Category_QB extends _BaseBuilder {}

    /**
     * @method City|null getOrPut($key, $value)
     * @method City|$this shift(int $count = 1)
     * @method City|null firstOrFail($key = null, $operator = null, $value = null)
     * @method City|$this pop(int $count = 1)
     * @method City|null pull($key, $default = null)
     * @method City|null last(callable $callback = null, $default = null)
     * @method City|$this random(int|null $number = null)
     * @method City|null sole($key = null, $operator = null, $value = null)
     * @method City|null get($key, $default = null)
     * @method City|null first(callable $callback = null, $default = null)
     * @method City|null firstWhere(string $key, $operator = null, $value = null)
     * @method City|null find($key, $default = null)
     * @method City[] all()
     */
    class _IH_City_C extends _BaseCollection {
        /**
         * @param int $size
         * @return City[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_City_QB whereId($value)
     * @method _IH_City_QB whereProvinceId($value)
     * @method _IH_City_QB whereName($value)
     * @method _IH_City_QB whereNameEn($value)
     * @method _IH_City_QB whereLatitude($value)
     * @method _IH_City_QB whereLongitude($value)
     * @method _IH_City_QB whereOrdering($value)
     * @method _IH_City_QB whereIsActive($value)
     * @method _IH_City_QB whereDeletedAt($value)
     * @method City baseSole(array|string $columns = ['*'])
     * @method City create(array $attributes = [])
     * @method _IH_City_C|City[] cursor()
     * @method City|null|_IH_City_C|City[] find($id, array $columns = ['*'])
     * @method _IH_City_C|City[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method City|_IH_City_C|City[] findOrFail($id, array $columns = ['*'])
     * @method City|_IH_City_C|City[] findOrNew($id, array $columns = ['*'])
     * @method City first(array|string $columns = ['*'])
     * @method City firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method City firstOrCreate(array $attributes = [], array $values = [])
     * @method City firstOrFail(array $columns = ['*'])
     * @method City firstOrNew(array $attributes = [], array $values = [])
     * @method City firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method City forceCreate(array $attributes)
     * @method _IH_City_C|City[] fromQuery(string $query, array $bindings = [])
     * @method _IH_City_C|City[] get(array|string $columns = ['*'])
     * @method City getModel()
     * @method City[] getModels(array|string $columns = ['*'])
     * @method _IH_City_C|City[] hydrate(array $items)
     * @method City make(array $attributes = [])
     * @method City newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|City[]|_IH_City_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|City[]|_IH_City_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method City sole(array|string $columns = ['*'])
     * @method City updateOrCreate(array $attributes, array $values = [])
     * @method _IH_City_QB active()
     * @method _IH_City_QB filter($request)
     */
    class _IH_City_QB extends _BaseBuilder {}

    /**
     * @method Comment|null getOrPut($key, $value)
     * @method Comment|$this shift(int $count = 1)
     * @method Comment|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Comment|$this pop(int $count = 1)
     * @method Comment|null pull($key, $default = null)
     * @method Comment|null last(callable $callback = null, $default = null)
     * @method Comment|$this random(int|null $number = null)
     * @method Comment|null sole($key = null, $operator = null, $value = null)
     * @method Comment|null get($key, $default = null)
     * @method Comment|null first(callable $callback = null, $default = null)
     * @method Comment|null firstWhere(string $key, $operator = null, $value = null)
     * @method Comment|null find($key, $default = null)
     * @method Comment[] all()
     */
    class _IH_Comment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Comment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Comment_QB whereId($value)
     * @method _IH_Comment_QB whereUserId($value)
     * @method _IH_Comment_QB whereCommentId($value)
     * @method _IH_Comment_QB whereBody($value)
     * @method _IH_Comment_QB whereCommentableId($value)
     * @method _IH_Comment_QB whereCommentableType($value)
     * @method _IH_Comment_QB whereStatus($value)
     * @method _IH_Comment_QB whereCreatedAt($value)
     * @method _IH_Comment_QB whereUpdatedAt($value)
     * @method Comment baseSole(array|string $columns = ['*'])
     * @method Comment create(array $attributes = [])
     * @method _IH_Comment_C|Comment[] cursor()
     * @method Comment|null|_IH_Comment_C|Comment[] find($id, array $columns = ['*'])
     * @method _IH_Comment_C|Comment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Comment|_IH_Comment_C|Comment[] findOrFail($id, array $columns = ['*'])
     * @method Comment|_IH_Comment_C|Comment[] findOrNew($id, array $columns = ['*'])
     * @method Comment first(array|string $columns = ['*'])
     * @method Comment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Comment firstOrCreate(array $attributes = [], array $values = [])
     * @method Comment firstOrFail(array $columns = ['*'])
     * @method Comment firstOrNew(array $attributes = [], array $values = [])
     * @method Comment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Comment forceCreate(array $attributes)
     * @method _IH_Comment_C|Comment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Comment_C|Comment[] get(array|string $columns = ['*'])
     * @method Comment getModel()
     * @method Comment[] getModels(array|string $columns = ['*'])
     * @method _IH_Comment_C|Comment[] hydrate(array $items)
     * @method Comment make(array $attributes = [])
     * @method Comment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Comment[]|_IH_Comment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Comment[]|_IH_Comment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Comment sole(array|string $columns = ['*'])
     * @method Comment updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Comment_QB accepted()
     * @method _IH_Comment_QB filter($request)
     */
    class _IH_Comment_QB extends _BaseBuilder {}

    /**
     * @method Contact|null getOrPut($key, $value)
     * @method Contact|$this shift(int $count = 1)
     * @method Contact|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Contact|$this pop(int $count = 1)
     * @method Contact|null pull($key, $default = null)
     * @method Contact|null last(callable $callback = null, $default = null)
     * @method Contact|$this random(int|null $number = null)
     * @method Contact|null sole($key = null, $operator = null, $value = null)
     * @method Contact|null get($key, $default = null)
     * @method Contact|null first(callable $callback = null, $default = null)
     * @method Contact|null firstWhere(string $key, $operator = null, $value = null)
     * @method Contact|null find($key, $default = null)
     * @method Contact[] all()
     */
    class _IH_Contact_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Contact[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Contact_QB whereId($value)
     * @method _IH_Contact_QB whereName($value)
     * @method _IH_Contact_QB whereEmail($value)
     * @method _IH_Contact_QB whereSubject($value)
     * @method _IH_Contact_QB whereMessage($value)
     * @method _IH_Contact_QB whereCreatedAt($value)
     * @method _IH_Contact_QB whereUpdatedAt($value)
     * @method _IH_Contact_QB whereMobile($value)
     * @method Contact baseSole(array|string $columns = ['*'])
     * @method Contact create(array $attributes = [])
     * @method _IH_Contact_C|Contact[] cursor()
     * @method Contact|null|_IH_Contact_C|Contact[] find($id, array $columns = ['*'])
     * @method _IH_Contact_C|Contact[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Contact|_IH_Contact_C|Contact[] findOrFail($id, array $columns = ['*'])
     * @method Contact|_IH_Contact_C|Contact[] findOrNew($id, array $columns = ['*'])
     * @method Contact first(array|string $columns = ['*'])
     * @method Contact firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Contact firstOrCreate(array $attributes = [], array $values = [])
     * @method Contact firstOrFail(array $columns = ['*'])
     * @method Contact firstOrNew(array $attributes = [], array $values = [])
     * @method Contact firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Contact forceCreate(array $attributes)
     * @method _IH_Contact_C|Contact[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Contact_C|Contact[] get(array|string $columns = ['*'])
     * @method Contact getModel()
     * @method Contact[] getModels(array|string $columns = ['*'])
     * @method _IH_Contact_C|Contact[] hydrate(array $items)
     * @method Contact make(array $attributes = [])
     * @method Contact newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Contact[]|_IH_Contact_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Contact[]|_IH_Contact_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Contact sole(array|string $columns = ['*'])
     * @method Contact updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Contact_QB extends _BaseBuilder {}

    /**
     * @method Currency|null getOrPut($key, $value)
     * @method Currency|$this shift(int $count = 1)
     * @method Currency|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Currency|$this pop(int $count = 1)
     * @method Currency|null pull($key, $default = null)
     * @method Currency|null last(callable $callback = null, $default = null)
     * @method Currency|$this random(int|null $number = null)
     * @method Currency|null sole($key = null, $operator = null, $value = null)
     * @method Currency|null get($key, $default = null)
     * @method Currency|null first(callable $callback = null, $default = null)
     * @method Currency|null firstWhere(string $key, $operator = null, $value = null)
     * @method Currency|null find($key, $default = null)
     * @method Currency[] all()
     */
    class _IH_Currency_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Currency[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Currency_QB whereId($value)
     * @method _IH_Currency_QB whereTitle($value)
     * @method _IH_Currency_QB whereAmount($value)
     * @method _IH_Currency_QB whereDeletedAt($value)
     * @method _IH_Currency_QB whereCreatedAt($value)
     * @method _IH_Currency_QB whereUpdatedAt($value)
     * @method Currency baseSole(array|string $columns = ['*'])
     * @method Currency create(array $attributes = [])
     * @method _IH_Currency_C|Currency[] cursor()
     * @method Currency|null|_IH_Currency_C|Currency[] find($id, array $columns = ['*'])
     * @method _IH_Currency_C|Currency[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Currency|_IH_Currency_C|Currency[] findOrFail($id, array $columns = ['*'])
     * @method Currency|_IH_Currency_C|Currency[] findOrNew($id, array $columns = ['*'])
     * @method Currency first(array|string $columns = ['*'])
     * @method Currency firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Currency firstOrCreate(array $attributes = [], array $values = [])
     * @method Currency firstOrFail(array $columns = ['*'])
     * @method Currency firstOrNew(array $attributes = [], array $values = [])
     * @method Currency firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Currency forceCreate(array $attributes)
     * @method _IH_Currency_C|Currency[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Currency_C|Currency[] get(array|string $columns = ['*'])
     * @method Currency getModel()
     * @method Currency[] getModels(array|string $columns = ['*'])
     * @method _IH_Currency_C|Currency[] hydrate(array $items)
     * @method Currency make(array $attributes = [])
     * @method Currency newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Currency[]|_IH_Currency_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Currency[]|_IH_Currency_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Currency sole(array|string $columns = ['*'])
     * @method Currency updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Currency_QB extends _BaseBuilder {}

    /**
     * @method Discount|null getOrPut($key, $value)
     * @method Discount|$this shift(int $count = 1)
     * @method Discount|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Discount|$this pop(int $count = 1)
     * @method Discount|null pull($key, $default = null)
     * @method Discount|null last(callable $callback = null, $default = null)
     * @method Discount|$this random(int|null $number = null)
     * @method Discount|null sole($key = null, $operator = null, $value = null)
     * @method Discount|null get($key, $default = null)
     * @method Discount|null first(callable $callback = null, $default = null)
     * @method Discount|null firstWhere(string $key, $operator = null, $value = null)
     * @method Discount|null find($key, $default = null)
     * @method Discount[] all()
     */
    class _IH_Discount_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Discount[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Discount_QB whereId($value)
     * @method _IH_Discount_QB whereTitle($value)
     * @method _IH_Discount_QB whereCode($value)
     * @method _IH_Discount_QB whereStartDate($value)
     * @method _IH_Discount_QB whereEndDate($value)
     * @method _IH_Discount_QB whereType($value)
     * @method _IH_Discount_QB whereAmount($value)
     * @method _IH_Discount_QB whereDiscountCeiling($value)
     * @method _IH_Discount_QB whereLeastPrice($value)
     * @method _IH_Discount_QB whereLeastProductsCount($value)
     * @method _IH_Discount_QB whereDescription($value)
     * @method _IH_Discount_QB whereOnlyFirstPurchase($value)
     * @method _IH_Discount_QB whereNotDiscountProducts($value)
     * @method _IH_Discount_QB wherePublished($value)
     * @method _IH_Discount_QB whereQuantity($value)
     * @method _IH_Discount_QB whereQuantityPerUser($value)
     * @method _IH_Discount_QB whereIncludeType($value)
     * @method _IH_Discount_QB whereExcludeType($value)
     * @method _IH_Discount_QB whereCreatedAt($value)
     * @method _IH_Discount_QB whereUpdatedAt($value)
     * @method _IH_Discount_QB whereDeletedAt($value)
     * @method Discount baseSole(array|string $columns = ['*'])
     * @method Discount create(array $attributes = [])
     * @method _IH_Discount_C|Discount[] cursor()
     * @method Discount|null|_IH_Discount_C|Discount[] find($id, array $columns = ['*'])
     * @method _IH_Discount_C|Discount[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Discount|_IH_Discount_C|Discount[] findOrFail($id, array $columns = ['*'])
     * @method Discount|_IH_Discount_C|Discount[] findOrNew($id, array $columns = ['*'])
     * @method Discount first(array|string $columns = ['*'])
     * @method Discount firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Discount firstOrCreate(array $attributes = [], array $values = [])
     * @method Discount firstOrFail(array $columns = ['*'])
     * @method Discount firstOrNew(array $attributes = [], array $values = [])
     * @method Discount firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Discount forceCreate(array $attributes)
     * @method _IH_Discount_C|Discount[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Discount_C|Discount[] get(array|string $columns = ['*'])
     * @method Discount getModel()
     * @method Discount[] getModels(array|string $columns = ['*'])
     * @method _IH_Discount_C|Discount[] hydrate(array $items)
     * @method Discount make(array $attributes = [])
     * @method Discount newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Discount[]|_IH_Discount_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Discount[]|_IH_Discount_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Discount sole(array|string $columns = ['*'])
     * @method Discount updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Discount_QB extends _BaseBuilder {}

    /**
     * @method Favorite|null getOrPut($key, $value)
     * @method Favorite|$this shift(int $count = 1)
     * @method Favorite|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Favorite|$this pop(int $count = 1)
     * @method Favorite|null pull($key, $default = null)
     * @method Favorite|null last(callable $callback = null, $default = null)
     * @method Favorite|$this random(int|null $number = null)
     * @method Favorite|null sole($key = null, $operator = null, $value = null)
     * @method Favorite|null get($key, $default = null)
     * @method Favorite|null first(callable $callback = null, $default = null)
     * @method Favorite|null firstWhere(string $key, $operator = null, $value = null)
     * @method Favorite|null find($key, $default = null)
     * @method Favorite[] all()
     */
    class _IH_Favorite_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Favorite[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Favorite_QB whereId($value)
     * @method _IH_Favorite_QB whereUserId($value)
     * @method _IH_Favorite_QB whereProductId($value)
     * @method _IH_Favorite_QB whereCreatedAt($value)
     * @method _IH_Favorite_QB whereUpdatedAt($value)
     * @method Favorite baseSole(array|string $columns = ['*'])
     * @method Favorite create(array $attributes = [])
     * @method _IH_Favorite_C|Favorite[] cursor()
     * @method Favorite|null|_IH_Favorite_C|Favorite[] find($id, array $columns = ['*'])
     * @method _IH_Favorite_C|Favorite[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Favorite|_IH_Favorite_C|Favorite[] findOrFail($id, array $columns = ['*'])
     * @method Favorite|_IH_Favorite_C|Favorite[] findOrNew($id, array $columns = ['*'])
     * @method Favorite first(array|string $columns = ['*'])
     * @method Favorite firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Favorite firstOrCreate(array $attributes = [], array $values = [])
     * @method Favorite firstOrFail(array $columns = ['*'])
     * @method Favorite firstOrNew(array $attributes = [], array $values = [])
     * @method Favorite firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Favorite forceCreate(array $attributes)
     * @method _IH_Favorite_C|Favorite[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Favorite_C|Favorite[] get(array|string $columns = ['*'])
     * @method Favorite getModel()
     * @method Favorite[] getModels(array|string $columns = ['*'])
     * @method _IH_Favorite_C|Favorite[] hydrate(array $items)
     * @method Favorite make(array $attributes = [])
     * @method Favorite newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Favorite[]|_IH_Favorite_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Favorite[]|_IH_Favorite_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Favorite sole(array|string $columns = ['*'])
     * @method Favorite updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Favorite_QB extends _BaseBuilder {}

    /**
     * @method File|null getOrPut($key, $value)
     * @method File|$this shift(int $count = 1)
     * @method File|null firstOrFail($key = null, $operator = null, $value = null)
     * @method File|$this pop(int $count = 1)
     * @method File|null pull($key, $default = null)
     * @method File|null last(callable $callback = null, $default = null)
     * @method File|$this random(int|null $number = null)
     * @method File|null sole($key = null, $operator = null, $value = null)
     * @method File|null get($key, $default = null)
     * @method File|null first(callable $callback = null, $default = null)
     * @method File|null firstWhere(string $key, $operator = null, $value = null)
     * @method File|null find($key, $default = null)
     * @method File[] all()
     */
    class _IH_File_C extends _BaseCollection {
        /**
         * @param int $size
         * @return File[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_File_QB whereId($value)
     * @method _IH_File_QB whereFile($value)
     * @method _IH_File_QB whereSize($value)
     * @method _IH_File_QB whereFileableId($value)
     * @method _IH_File_QB whereFileableType($value)
     * @method _IH_File_QB whereCreatedAt($value)
     * @method _IH_File_QB whereUpdatedAt($value)
     * @method _IH_File_QB whereTitle($value)
     * @method _IH_File_QB whereDisk($value)
     * @method _IH_File_QB whereStatus($value)
     * @method File baseSole(array|string $columns = ['*'])
     * @method File create(array $attributes = [])
     * @method _IH_File_C|File[] cursor()
     * @method File|null|_IH_File_C|File[] find($id, array $columns = ['*'])
     * @method _IH_File_C|File[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method File|_IH_File_C|File[] findOrFail($id, array $columns = ['*'])
     * @method File|_IH_File_C|File[] findOrNew($id, array $columns = ['*'])
     * @method File first(array|string $columns = ['*'])
     * @method File firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method File firstOrCreate(array $attributes = [], array $values = [])
     * @method File firstOrFail(array $columns = ['*'])
     * @method File firstOrNew(array $attributes = [], array $values = [])
     * @method File firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method File forceCreate(array $attributes)
     * @method _IH_File_C|File[] fromQuery(string $query, array $bindings = [])
     * @method _IH_File_C|File[] get(array|string $columns = ['*'])
     * @method File getModel()
     * @method File[] getModels(array|string $columns = ['*'])
     * @method _IH_File_C|File[] hydrate(array $items)
     * @method File make(array $attributes = [])
     * @method File newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|File[]|_IH_File_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|File[]|_IH_File_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method File sole(array|string $columns = ['*'])
     * @method File updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_File_QB extends _BaseBuilder {}

    /**
     * @method Filter|null getOrPut($key, $value)
     * @method Filter|$this shift(int $count = 1)
     * @method Filter|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Filter|$this pop(int $count = 1)
     * @method Filter|null pull($key, $default = null)
     * @method Filter|null last(callable $callback = null, $default = null)
     * @method Filter|$this random(int|null $number = null)
     * @method Filter|null sole($key = null, $operator = null, $value = null)
     * @method Filter|null get($key, $default = null)
     * @method Filter|null first(callable $callback = null, $default = null)
     * @method Filter|null firstWhere(string $key, $operator = null, $value = null)
     * @method Filter|null find($key, $default = null)
     * @method Filter[] all()
     */
    class _IH_Filter_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Filter[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Filter_QB whereId($value)
     * @method _IH_Filter_QB whereTitle($value)
     * @method _IH_Filter_QB whereCreatedAt($value)
     * @method _IH_Filter_QB whereUpdatedAt($value)
     * @method Filter baseSole(array|string $columns = ['*'])
     * @method Filter create(array $attributes = [])
     * @method _IH_Filter_C|Filter[] cursor()
     * @method Filter|null|_IH_Filter_C|Filter[] find($id, array $columns = ['*'])
     * @method _IH_Filter_C|Filter[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Filter|_IH_Filter_C|Filter[] findOrFail($id, array $columns = ['*'])
     * @method Filter|_IH_Filter_C|Filter[] findOrNew($id, array $columns = ['*'])
     * @method Filter first(array|string $columns = ['*'])
     * @method Filter firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Filter firstOrCreate(array $attributes = [], array $values = [])
     * @method Filter firstOrFail(array $columns = ['*'])
     * @method Filter firstOrNew(array $attributes = [], array $values = [])
     * @method Filter firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Filter forceCreate(array $attributes)
     * @method _IH_Filter_C|Filter[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Filter_C|Filter[] get(array|string $columns = ['*'])
     * @method Filter getModel()
     * @method Filter[] getModels(array|string $columns = ['*'])
     * @method _IH_Filter_C|Filter[] hydrate(array $items)
     * @method Filter make(array $attributes = [])
     * @method Filter newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Filter[]|_IH_Filter_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Filter[]|_IH_Filter_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Filter sole(array|string $columns = ['*'])
     * @method Filter updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Filter_QB extends _BaseBuilder {}

    /**
     * @method Filterable|null getOrPut($key, $value)
     * @method Filterable|$this shift(int $count = 1)
     * @method Filterable|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Filterable|$this pop(int $count = 1)
     * @method Filterable|null pull($key, $default = null)
     * @method Filterable|null last(callable $callback = null, $default = null)
     * @method Filterable|$this random(int|null $number = null)
     * @method Filterable|null sole($key = null, $operator = null, $value = null)
     * @method Filterable|null get($key, $default = null)
     * @method Filterable|null first(callable $callback = null, $default = null)
     * @method Filterable|null firstWhere(string $key, $operator = null, $value = null)
     * @method Filterable|null find($key, $default = null)
     * @method Filterable[] all()
     */
    class _IH_Filterable_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Filterable[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Filterable_QB whereId($value)
     * @method _IH_Filterable_QB whereFilterId($value)
     * @method _IH_Filterable_QB whereFilterableId($value)
     * @method _IH_Filterable_QB whereFilterableType($value)
     * @method _IH_Filterable_QB whereOrdering($value)
     * @method _IH_Filterable_QB whereActive($value)
     * @method _IH_Filterable_QB whereCreatedAt($value)
     * @method _IH_Filterable_QB whereUpdatedAt($value)
     * @method _IH_Filterable_QB whereSeparator($value)
     * @method Filterable baseSole(array|string $columns = ['*'])
     * @method Filterable create(array $attributes = [])
     * @method _IH_Filterable_C|Filterable[] cursor()
     * @method Filterable|null|_IH_Filterable_C|Filterable[] find($id, array $columns = ['*'])
     * @method _IH_Filterable_C|Filterable[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Filterable|_IH_Filterable_C|Filterable[] findOrFail($id, array $columns = ['*'])
     * @method Filterable|_IH_Filterable_C|Filterable[] findOrNew($id, array $columns = ['*'])
     * @method Filterable first(array|string $columns = ['*'])
     * @method Filterable firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Filterable firstOrCreate(array $attributes = [], array $values = [])
     * @method Filterable firstOrFail(array $columns = ['*'])
     * @method Filterable firstOrNew(array $attributes = [], array $values = [])
     * @method Filterable firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Filterable forceCreate(array $attributes)
     * @method _IH_Filterable_C|Filterable[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Filterable_C|Filterable[] get(array|string $columns = ['*'])
     * @method Filterable getModel()
     * @method Filterable[] getModels(array|string $columns = ['*'])
     * @method _IH_Filterable_C|Filterable[] hydrate(array $items)
     * @method Filterable make(array $attributes = [])
     * @method Filterable newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Filterable[]|_IH_Filterable_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Filterable[]|_IH_Filterable_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Filterable sole(array|string $columns = ['*'])
     * @method Filterable updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Filterable_QB extends _BaseBuilder {}

    /**
     * @method Gallery|null getOrPut($key, $value)
     * @method Gallery|$this shift(int $count = 1)
     * @method Gallery|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Gallery|$this pop(int $count = 1)
     * @method Gallery|null pull($key, $default = null)
     * @method Gallery|null last(callable $callback = null, $default = null)
     * @method Gallery|$this random(int|null $number = null)
     * @method Gallery|null sole($key = null, $operator = null, $value = null)
     * @method Gallery|null get($key, $default = null)
     * @method Gallery|null first(callable $callback = null, $default = null)
     * @method Gallery|null firstWhere(string $key, $operator = null, $value = null)
     * @method Gallery|null find($key, $default = null)
     * @method Gallery[] all()
     */
    class _IH_Gallery_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Gallery[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Gallery_QB whereId($value)
     * @method _IH_Gallery_QB whereImage($value)
     * @method _IH_Gallery_QB whereGalleryableId($value)
     * @method _IH_Gallery_QB whereGalleryableType($value)
     * @method _IH_Gallery_QB whereCreatedAt($value)
     * @method _IH_Gallery_QB whereUpdatedAt($value)
     * @method _IH_Gallery_QB whereOrdering($value)
     * @method Gallery baseSole(array|string $columns = ['*'])
     * @method Gallery create(array $attributes = [])
     * @method _IH_Gallery_C|Gallery[] cursor()
     * @method Gallery|null|_IH_Gallery_C|Gallery[] find($id, array $columns = ['*'])
     * @method _IH_Gallery_C|Gallery[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Gallery|_IH_Gallery_C|Gallery[] findOrFail($id, array $columns = ['*'])
     * @method Gallery|_IH_Gallery_C|Gallery[] findOrNew($id, array $columns = ['*'])
     * @method Gallery first(array|string $columns = ['*'])
     * @method Gallery firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Gallery firstOrCreate(array $attributes = [], array $values = [])
     * @method Gallery firstOrFail(array $columns = ['*'])
     * @method Gallery firstOrNew(array $attributes = [], array $values = [])
     * @method Gallery firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Gallery forceCreate(array $attributes)
     * @method _IH_Gallery_C|Gallery[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Gallery_C|Gallery[] get(array|string $columns = ['*'])
     * @method Gallery getModel()
     * @method Gallery[] getModels(array|string $columns = ['*'])
     * @method _IH_Gallery_C|Gallery[] hydrate(array $items)
     * @method Gallery make(array $attributes = [])
     * @method Gallery newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Gallery[]|_IH_Gallery_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Gallery[]|_IH_Gallery_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Gallery sole(array|string $columns = ['*'])
     * @method Gallery updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Gallery_QB extends _BaseBuilder {}

    /**
     * @method GatewayConfig|null getOrPut($key, $value)
     * @method GatewayConfig|$this shift(int $count = 1)
     * @method GatewayConfig|null firstOrFail($key = null, $operator = null, $value = null)
     * @method GatewayConfig|$this pop(int $count = 1)
     * @method GatewayConfig|null pull($key, $default = null)
     * @method GatewayConfig|null last(callable $callback = null, $default = null)
     * @method GatewayConfig|$this random(int|null $number = null)
     * @method GatewayConfig|null sole($key = null, $operator = null, $value = null)
     * @method GatewayConfig|null get($key, $default = null)
     * @method GatewayConfig|null first(callable $callback = null, $default = null)
     * @method GatewayConfig|null firstWhere(string $key, $operator = null, $value = null)
     * @method GatewayConfig|null find($key, $default = null)
     * @method GatewayConfig[] all()
     */
    class _IH_GatewayConfig_C extends _BaseCollection {
        /**
         * @param int $size
         * @return GatewayConfig[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_GatewayConfig_QB whereId($value)
     * @method _IH_GatewayConfig_QB whereGatewayId($value)
     * @method _IH_GatewayConfig_QB whereValue($value)
     * @method _IH_GatewayConfig_QB whereCreatedAt($value)
     * @method _IH_GatewayConfig_QB whereUpdatedAt($value)
     * @method GatewayConfig baseSole(array|string $columns = ['*'])
     * @method GatewayConfig create(array $attributes = [])
     * @method _IH_GatewayConfig_C|GatewayConfig[] cursor()
     * @method GatewayConfig|null|_IH_GatewayConfig_C|GatewayConfig[] find($id, array $columns = ['*'])
     * @method _IH_GatewayConfig_C|GatewayConfig[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method GatewayConfig|_IH_GatewayConfig_C|GatewayConfig[] findOrFail($id, array $columns = ['*'])
     * @method GatewayConfig|_IH_GatewayConfig_C|GatewayConfig[] findOrNew($id, array $columns = ['*'])
     * @method GatewayConfig first(array|string $columns = ['*'])
     * @method GatewayConfig firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method GatewayConfig firstOrCreate(array $attributes = [], array $values = [])
     * @method GatewayConfig firstOrFail(array $columns = ['*'])
     * @method GatewayConfig firstOrNew(array $attributes = [], array $values = [])
     * @method GatewayConfig firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method GatewayConfig forceCreate(array $attributes)
     * @method _IH_GatewayConfig_C|GatewayConfig[] fromQuery(string $query, array $bindings = [])
     * @method _IH_GatewayConfig_C|GatewayConfig[] get(array|string $columns = ['*'])
     * @method GatewayConfig getModel()
     * @method GatewayConfig[] getModels(array|string $columns = ['*'])
     * @method _IH_GatewayConfig_C|GatewayConfig[] hydrate(array $items)
     * @method GatewayConfig make(array $attributes = [])
     * @method GatewayConfig newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|GatewayConfig[]|_IH_GatewayConfig_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|GatewayConfig[]|_IH_GatewayConfig_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method GatewayConfig sole(array|string $columns = ['*'])
     * @method GatewayConfig updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_GatewayConfig_QB extends _BaseBuilder {}

    /**
     * @method Gateway|null getOrPut($key, $value)
     * @method Gateway|$this shift(int $count = 1)
     * @method Gateway|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Gateway|$this pop(int $count = 1)
     * @method Gateway|null pull($key, $default = null)
     * @method Gateway|null last(callable $callback = null, $default = null)
     * @method Gateway|$this random(int|null $number = null)
     * @method Gateway|null sole($key = null, $operator = null, $value = null)
     * @method Gateway|null get($key, $default = null)
     * @method Gateway|null first(callable $callback = null, $default = null)
     * @method Gateway|null firstWhere(string $key, $operator = null, $value = null)
     * @method Gateway|null find($key, $default = null)
     * @method Gateway[] all()
     */
    class _IH_Gateway_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Gateway[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Gateway_QB whereId($value)
     * @method _IH_Gateway_QB whereName($value)
     * @method _IH_Gateway_QB whereDescription($value)
     * @method _IH_Gateway_QB whereIsActive($value)
     * @method _IH_Gateway_QB whereOrdering($value)
     * @method _IH_Gateway_QB whereCreatedAt($value)
     * @method _IH_Gateway_QB whereUpdatedAt($value)
     * @method Gateway baseSole(array|string $columns = ['*'])
     * @method Gateway create(array $attributes = [])
     * @method _IH_Gateway_C|Gateway[] cursor()
     * @method Gateway|null|_IH_Gateway_C|Gateway[] find($id, array $columns = ['*'])
     * @method _IH_Gateway_C|Gateway[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Gateway|_IH_Gateway_C|Gateway[] findOrFail($id, array $columns = ['*'])
     * @method Gateway|_IH_Gateway_C|Gateway[] findOrNew($id, array $columns = ['*'])
     * @method Gateway first(array|string $columns = ['*'])
     * @method Gateway firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Gateway firstOrCreate(array $attributes = [], array $values = [])
     * @method Gateway firstOrFail(array $columns = ['*'])
     * @method Gateway firstOrNew(array $attributes = [], array $values = [])
     * @method Gateway firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Gateway forceCreate(array $attributes)
     * @method _IH_Gateway_C|Gateway[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Gateway_C|Gateway[] get(array|string $columns = ['*'])
     * @method Gateway getModel()
     * @method Gateway[] getModels(array|string $columns = ['*'])
     * @method _IH_Gateway_C|Gateway[] hydrate(array $items)
     * @method Gateway make(array $attributes = [])
     * @method Gateway newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Gateway[]|_IH_Gateway_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Gateway[]|_IH_Gateway_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Gateway sole(array|string $columns = ['*'])
     * @method Gateway updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Gateway_QB active()
     */
    class _IH_Gateway_QB extends _BaseBuilder {}

    /**
     * @method Label|null getOrPut($key, $value)
     * @method Label|$this shift(int $count = 1)
     * @method Label|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Label|$this pop(int $count = 1)
     * @method Label|null pull($key, $default = null)
     * @method Label|null last(callable $callback = null, $default = null)
     * @method Label|$this random(int|null $number = null)
     * @method Label|null sole($key = null, $operator = null, $value = null)
     * @method Label|null get($key, $default = null)
     * @method Label|null first(callable $callback = null, $default = null)
     * @method Label|null firstWhere(string $key, $operator = null, $value = null)
     * @method Label|null find($key, $default = null)
     * @method Label[] all()
     */
    class _IH_Label_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Label[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Label_QB whereId($value)
     * @method _IH_Label_QB whereTitle($value)
     * @method _IH_Label_QB whereCreatedAt($value)
     * @method _IH_Label_QB whereUpdatedAt($value)
     * @method Label baseSole(array|string $columns = ['*'])
     * @method Label create(array $attributes = [])
     * @method _IH_Label_C|Label[] cursor()
     * @method Label|null|_IH_Label_C|Label[] find($id, array $columns = ['*'])
     * @method _IH_Label_C|Label[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Label|_IH_Label_C|Label[] findOrFail($id, array $columns = ['*'])
     * @method Label|_IH_Label_C|Label[] findOrNew($id, array $columns = ['*'])
     * @method Label first(array|string $columns = ['*'])
     * @method Label firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Label firstOrCreate(array $attributes = [], array $values = [])
     * @method Label firstOrFail(array $columns = ['*'])
     * @method Label firstOrNew(array $attributes = [], array $values = [])
     * @method Label firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Label forceCreate(array $attributes)
     * @method _IH_Label_C|Label[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Label_C|Label[] get(array|string $columns = ['*'])
     * @method Label getModel()
     * @method Label[] getModels(array|string $columns = ['*'])
     * @method _IH_Label_C|Label[] hydrate(array $items)
     * @method Label make(array $attributes = [])
     * @method Label newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Label[]|_IH_Label_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Label[]|_IH_Label_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Label sole(array|string $columns = ['*'])
     * @method Label updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Label_QB extends _BaseBuilder {}

    /**
     * @method Link|null getOrPut($key, $value)
     * @method Link|$this shift(int $count = 1)
     * @method Link|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Link|$this pop(int $count = 1)
     * @method Link|null pull($key, $default = null)
     * @method Link|null last(callable $callback = null, $default = null)
     * @method Link|$this random(int|null $number = null)
     * @method Link|null sole($key = null, $operator = null, $value = null)
     * @method Link|null get($key, $default = null)
     * @method Link|null first(callable $callback = null, $default = null)
     * @method Link|null firstWhere(string $key, $operator = null, $value = null)
     * @method Link|null find($key, $default = null)
     * @method Link[] all()
     */
    class _IH_Link_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Link[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Link_QB whereId($value)
     * @method _IH_Link_QB whereTitle($value)
     * @method _IH_Link_QB whereLink($value)
     * @method _IH_Link_QB whereOrdering($value)
     * @method _IH_Link_QB whereLinkGroupId($value)
     * @method _IH_Link_QB whereCreatedAt($value)
     * @method _IH_Link_QB whereUpdatedAt($value)
     * @method Link baseSole(array|string $columns = ['*'])
     * @method Link create(array $attributes = [])
     * @method _IH_Link_C|Link[] cursor()
     * @method Link|null|_IH_Link_C|Link[] find($id, array $columns = ['*'])
     * @method _IH_Link_C|Link[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Link|_IH_Link_C|Link[] findOrFail($id, array $columns = ['*'])
     * @method Link|_IH_Link_C|Link[] findOrNew($id, array $columns = ['*'])
     * @method Link first(array|string $columns = ['*'])
     * @method Link firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Link firstOrCreate(array $attributes = [], array $values = [])
     * @method Link firstOrFail(array $columns = ['*'])
     * @method Link firstOrNew(array $attributes = [], array $values = [])
     * @method Link firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Link forceCreate(array $attributes)
     * @method _IH_Link_C|Link[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Link_C|Link[] get(array|string $columns = ['*'])
     * @method Link getModel()
     * @method Link[] getModels(array|string $columns = ['*'])
     * @method _IH_Link_C|Link[] hydrate(array $items)
     * @method Link make(array $attributes = [])
     * @method Link newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Link[]|_IH_Link_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Link[]|_IH_Link_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Link sole(array|string $columns = ['*'])
     * @method Link updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Link_QB extends _BaseBuilder {}

    /**
     * @method Menu|null getOrPut($key, $value)
     * @method Menu|$this shift(int $count = 1)
     * @method Menu|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Menu|$this pop(int $count = 1)
     * @method Menu|null pull($key, $default = null)
     * @method Menu|null last(callable $callback = null, $default = null)
     * @method Menu|$this random(int|null $number = null)
     * @method Menu|null sole($key = null, $operator = null, $value = null)
     * @method Menu|null get($key, $default = null)
     * @method Menu|null first(callable $callback = null, $default = null)
     * @method Menu|null firstWhere(string $key, $operator = null, $value = null)
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
     * @method _IH_Menu_QB whereType($value)
     * @method _IH_Menu_QB whereStaticType($value)
     * @method _IH_Menu_QB whereTitle($value)
     * @method _IH_Menu_QB whereLink($value)
     * @method _IH_Menu_QB whereMenuableId($value)
     * @method _IH_Menu_QB whereMenuId($value)
     * @method _IH_Menu_QB whereOrdering($value)
     * @method _IH_Menu_QB whereCreatedAt($value)
     * @method _IH_Menu_QB whereUpdatedAt($value)
     * @method _IH_Menu_QB whereChildren($value)
     * @method Menu baseSole(array|string $columns = ['*'])
     * @method Menu create(array $attributes = [])
     * @method _IH_Menu_C|Menu[] cursor()
     * @method Menu|null|_IH_Menu_C|Menu[] find($id, array $columns = ['*'])
     * @method _IH_Menu_C|Menu[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Menu|_IH_Menu_C|Menu[] findOrFail($id, array $columns = ['*'])
     * @method Menu|_IH_Menu_C|Menu[] findOrNew($id, array $columns = ['*'])
     * @method Menu first(array|string $columns = ['*'])
     * @method Menu firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Menu firstOrCreate(array $attributes = [], array $values = [])
     * @method Menu firstOrFail(array $columns = ['*'])
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
     * @method LengthAwarePaginator|Menu[]|_IH_Menu_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Menu[]|_IH_Menu_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Menu sole(array|string $columns = ['*'])
     * @method Menu updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Menu_QB extends _BaseBuilder {}

    /**
     * @method OneTimeCode|null getOrPut($key, $value)
     * @method OneTimeCode|$this shift(int $count = 1)
     * @method OneTimeCode|null firstOrFail($key = null, $operator = null, $value = null)
     * @method OneTimeCode|$this pop(int $count = 1)
     * @method OneTimeCode|null pull($key, $default = null)
     * @method OneTimeCode|null last(callable $callback = null, $default = null)
     * @method OneTimeCode|$this random(int|null $number = null)
     * @method OneTimeCode|null sole($key = null, $operator = null, $value = null)
     * @method OneTimeCode|null get($key, $default = null)
     * @method OneTimeCode|null first(callable $callback = null, $default = null)
     * @method OneTimeCode|null firstWhere(string $key, $operator = null, $value = null)
     * @method OneTimeCode|null find($key, $default = null)
     * @method OneTimeCode[] all()
     */
    class _IH_OneTimeCode_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OneTimeCode[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OneTimeCode_QB whereId($value)
     * @method _IH_OneTimeCode_QB whereUserId($value)
     * @method _IH_OneTimeCode_QB whereCode($value)
     * @method _IH_OneTimeCode_QB whereCreatedAt($value)
     * @method _IH_OneTimeCode_QB whereUpdatedAt($value)
     * @method OneTimeCode baseSole(array|string $columns = ['*'])
     * @method OneTimeCode create(array $attributes = [])
     * @method _IH_OneTimeCode_C|OneTimeCode[] cursor()
     * @method OneTimeCode|null|_IH_OneTimeCode_C|OneTimeCode[] find($id, array $columns = ['*'])
     * @method _IH_OneTimeCode_C|OneTimeCode[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method OneTimeCode|_IH_OneTimeCode_C|OneTimeCode[] findOrFail($id, array $columns = ['*'])
     * @method OneTimeCode|_IH_OneTimeCode_C|OneTimeCode[] findOrNew($id, array $columns = ['*'])
     * @method OneTimeCode first(array|string $columns = ['*'])
     * @method OneTimeCode firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method OneTimeCode firstOrCreate(array $attributes = [], array $values = [])
     * @method OneTimeCode firstOrFail(array $columns = ['*'])
     * @method OneTimeCode firstOrNew(array $attributes = [], array $values = [])
     * @method OneTimeCode firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OneTimeCode forceCreate(array $attributes)
     * @method _IH_OneTimeCode_C|OneTimeCode[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OneTimeCode_C|OneTimeCode[] get(array|string $columns = ['*'])
     * @method OneTimeCode getModel()
     * @method OneTimeCode[] getModels(array|string $columns = ['*'])
     * @method _IH_OneTimeCode_C|OneTimeCode[] hydrate(array $items)
     * @method OneTimeCode make(array $attributes = [])
     * @method OneTimeCode newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OneTimeCode[]|_IH_OneTimeCode_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OneTimeCode[]|_IH_OneTimeCode_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OneTimeCode sole(array|string $columns = ['*'])
     * @method OneTimeCode updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OneTimeCode_QB extends _BaseBuilder {}

    /**
     * @method Option|null getOrPut($key, $value)
     * @method Option|$this shift(int $count = 1)
     * @method Option|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Option|$this pop(int $count = 1)
     * @method Option|null pull($key, $default = null)
     * @method Option|null last(callable $callback = null, $default = null)
     * @method Option|$this random(int|null $number = null)
     * @method Option|null sole($key = null, $operator = null, $value = null)
     * @method Option|null get($key, $default = null)
     * @method Option|null first(callable $callback = null, $default = null)
     * @method Option|null firstWhere(string $key, $operator = null, $value = null)
     * @method Option|null find($key, $default = null)
     * @method Option[] all()
     */
    class _IH_Option_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Option[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Option_QB whereId($value)
     * @method _IH_Option_QB whereOptionName($value)
     * @method _IH_Option_QB whereOptionValue($value)
     * @method Option baseSole(array|string $columns = ['*'])
     * @method Option create(array $attributes = [])
     * @method _IH_Option_C|Option[] cursor()
     * @method Option|null|_IH_Option_C|Option[] find($id, array $columns = ['*'])
     * @method _IH_Option_C|Option[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Option|_IH_Option_C|Option[] findOrFail($id, array $columns = ['*'])
     * @method Option|_IH_Option_C|Option[] findOrNew($id, array $columns = ['*'])
     * @method Option first(array|string $columns = ['*'])
     * @method Option firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Option firstOrCreate(array $attributes = [], array $values = [])
     * @method Option firstOrFail(array $columns = ['*'])
     * @method Option firstOrNew(array $attributes = [], array $values = [])
     * @method Option firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Option forceCreate(array $attributes)
     * @method _IH_Option_C|Option[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Option_C|Option[] get(array|string $columns = ['*'])
     * @method Option getModel()
     * @method Option[] getModels(array|string $columns = ['*'])
     * @method _IH_Option_C|Option[] hydrate(array $items)
     * @method Option make(array $attributes = [])
     * @method Option newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Option[]|_IH_Option_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Option[]|_IH_Option_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Option sole(array|string $columns = ['*'])
     * @method Option updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Option_QB extends _BaseBuilder {}

    /**
     * @method OrderItem|null getOrPut($key, $value)
     * @method OrderItem|$this shift(int $count = 1)
     * @method OrderItem|null firstOrFail($key = null, $operator = null, $value = null)
     * @method OrderItem|$this pop(int $count = 1)
     * @method OrderItem|null pull($key, $default = null)
     * @method OrderItem|null last(callable $callback = null, $default = null)
     * @method OrderItem|$this random(int|null $number = null)
     * @method OrderItem|null sole($key = null, $operator = null, $value = null)
     * @method OrderItem|null get($key, $default = null)
     * @method OrderItem|null first(callable $callback = null, $default = null)
     * @method OrderItem|null firstWhere(string $key, $operator = null, $value = null)
     * @method OrderItem|null find($key, $default = null)
     * @method OrderItem[] all()
     */
    class _IH_OrderItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderItem[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OrderItem_QB whereId($value)
     * @method _IH_OrderItem_QB whereOrderId($value)
     * @method _IH_OrderItem_QB whereProductId($value)
     * @method _IH_OrderItem_QB whereTitle($value)
     * @method _IH_OrderItem_QB wherePrice($value)
     * @method _IH_OrderItem_QB whereQuantity($value)
     * @method _IH_OrderItem_QB whereDiscount($value)
     * @method _IH_OrderItem_QB whereCreatedAt($value)
     * @method _IH_OrderItem_QB whereUpdatedAt($value)
     * @method _IH_OrderItem_QB wherePriceId($value)
     * @method _IH_OrderItem_QB whereRealPrice($value)
     * @method OrderItem baseSole(array|string $columns = ['*'])
     * @method OrderItem create(array $attributes = [])
     * @method _IH_OrderItem_C|OrderItem[] cursor()
     * @method OrderItem|null|_IH_OrderItem_C|OrderItem[] find($id, array $columns = ['*'])
     * @method _IH_OrderItem_C|OrderItem[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method OrderItem|_IH_OrderItem_C|OrderItem[] findOrFail($id, array $columns = ['*'])
     * @method OrderItem|_IH_OrderItem_C|OrderItem[] findOrNew($id, array $columns = ['*'])
     * @method OrderItem first(array|string $columns = ['*'])
     * @method OrderItem firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method OrderItem firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderItem firstOrFail(array $columns = ['*'])
     * @method OrderItem firstOrNew(array $attributes = [], array $values = [])
     * @method OrderItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderItem forceCreate(array $attributes)
     * @method _IH_OrderItem_C|OrderItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderItem_C|OrderItem[] get(array|string $columns = ['*'])
     * @method OrderItem getModel()
     * @method OrderItem[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderItem_C|OrderItem[] hydrate(array $items)
     * @method OrderItem make(array $attributes = [])
     * @method OrderItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderItem[]|_IH_OrderItem_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderItem[]|_IH_OrderItem_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderItem sole(array|string $columns = ['*'])
     * @method OrderItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderItem_QB extends _BaseBuilder {}

    /**
     * @method Order|null getOrPut($key, $value)
     * @method Order|$this shift(int $count = 1)
     * @method Order|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Order|$this pop(int $count = 1)
     * @method Order|null pull($key, $default = null)
     * @method Order|null last(callable $callback = null, $default = null)
     * @method Order|$this random(int|null $number = null)
     * @method Order|null sole($key = null, $operator = null, $value = null)
     * @method Order|null get($key, $default = null)
     * @method Order|null first(callable $callback = null, $default = null)
     * @method Order|null firstWhere(string $key, $operator = null, $value = null)
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
     * @method _IH_Order_QB whereName($value)
     * @method _IH_Order_QB whereMobile($value)
     * @method _IH_Order_QB whereProvinceId($value)
     * @method _IH_Order_QB whereCityId($value)
     * @method _IH_Order_QB wherePostalCode($value)
     * @method _IH_Order_QB whereAddress($value)
     * @method _IH_Order_QB whereDescription($value)
     * @method _IH_Order_QB whereShippingCost($value)
     * @method _IH_Order_QB wherePrice($value)
     * @method _IH_Order_QB whereStatus($value)
     * @method _IH_Order_QB whereShippingStatus($value)
     * @method _IH_Order_QB whereCreatedAt($value)
     * @method _IH_Order_QB whereUpdatedAt($value)
     * @method _IH_Order_QB whereGateway($value)
     * @method _IH_Order_QB whereDiscountId($value)
     * @method _IH_Order_QB whereDiscountAmount($value)
     * @method _IH_Order_QB whereGatewayId($value)
     * @method _IH_Order_QB whereCarrierId($value)
     * @method _IH_Order_QB whereSettlementType($value)
     * @method Order baseSole(array|string $columns = ['*'])
     * @method Order create(array $attributes = [])
     * @method _IH_Order_C|Order[] cursor()
     * @method Order|null|_IH_Order_C|Order[] find($id, array $columns = ['*'])
     * @method _IH_Order_C|Order[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOrFail($id, array $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOrNew($id, array $columns = ['*'])
     * @method Order first(array|string $columns = ['*'])
     * @method Order firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Order firstOrCreate(array $attributes = [], array $values = [])
     * @method Order firstOrFail(array $columns = ['*'])
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
     * @method LengthAwarePaginator|Order[]|_IH_Order_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Order[]|_IH_Order_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Order sole(array|string $columns = ['*'])
     * @method Order updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Order_QB filter(Request $request)
     * @method _IH_Order_QB notCanceled()
     * @method _IH_Order_QB notCompleted()
     * @method _IH_Order_QB notPaid()
     * @method _IH_Order_QB paid()
     */
    class _IH_Order_QB extends _BaseBuilder {}

    /**
     * @method Page|null getOrPut($key, $value)
     * @method Page|$this shift(int $count = 1)
     * @method Page|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Page|$this pop(int $count = 1)
     * @method Page|null pull($key, $default = null)
     * @method Page|null last(callable $callback = null, $default = null)
     * @method Page|$this random(int|null $number = null)
     * @method Page|null sole($key = null, $operator = null, $value = null)
     * @method Page|null get($key, $default = null)
     * @method Page|null first(callable $callback = null, $default = null)
     * @method Page|null firstWhere(string $key, $operator = null, $value = null)
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
     * @method _IH_Page_QB wherePublished($value)
     * @method _IH_Page_QB whereContent($value)
     * @method _IH_Page_QB whereCreatedAt($value)
     * @method _IH_Page_QB whereUpdatedAt($value)
     * @method Page baseSole(array|string $columns = ['*'])
     * @method Page create(array $attributes = [])
     * @method _IH_Page_C|Page[] cursor()
     * @method Page|null|_IH_Page_C|Page[] find($id, array $columns = ['*'])
     * @method _IH_Page_C|Page[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrFail($id, array $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrNew($id, array $columns = ['*'])
     * @method Page first(array|string $columns = ['*'])
     * @method Page firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Page firstOrCreate(array $attributes = [], array $values = [])
     * @method Page firstOrFail(array $columns = ['*'])
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
     * @method LengthAwarePaginator|Page[]|_IH_Page_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Page[]|_IH_Page_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Page sole(array|string $columns = ['*'])
     * @method Page updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Page_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Page_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Page_QB extends _BaseBuilder {}

    /**
     * @method Permission|null getOrPut($key, $value)
     * @method Permission|$this shift(int $count = 1)
     * @method Permission|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Permission|$this pop(int $count = 1)
     * @method Permission|null pull($key, $default = null)
     * @method Permission|null last(callable $callback = null, $default = null)
     * @method Permission|$this random(int|null $number = null)
     * @method Permission|null sole($key = null, $operator = null, $value = null)
     * @method Permission|null get($key, $default = null)
     * @method Permission|null first(callable $callback = null, $default = null)
     * @method Permission|null firstWhere(string $key, $operator = null, $value = null)
     * @method Permission|null find($key, $default = null)
     * @method Permission[] all()
     */
    class _IH_Permission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Permission[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Permission_QB whereId($value)
     * @method _IH_Permission_QB whereName($value)
     * @method _IH_Permission_QB wherePermissionId($value)
     * @method _IH_Permission_QB whereOrdering($value)
     * @method _IH_Permission_QB whereActive($value)
     * @method _IH_Permission_QB whereTitle($value)
     * @method Permission baseSole(array|string $columns = ['*'])
     * @method Permission create(array $attributes = [])
     * @method _IH_Permission_C|Permission[] cursor()
     * @method Permission|null|_IH_Permission_C|Permission[] find($id, array $columns = ['*'])
     * @method _IH_Permission_C|Permission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrFail($id, array $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrNew($id, array $columns = ['*'])
     * @method Permission first(array|string $columns = ['*'])
     * @method Permission firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Permission firstOrCreate(array $attributes = [], array $values = [])
     * @method Permission firstOrFail(array $columns = ['*'])
     * @method Permission firstOrNew(array $attributes = [], array $values = [])
     * @method Permission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Permission forceCreate(array $attributes)
     * @method _IH_Permission_C|Permission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Permission_C|Permission[] get(array|string $columns = ['*'])
     * @method Permission getModel()
     * @method Permission[] getModels(array|string $columns = ['*'])
     * @method _IH_Permission_C|Permission[] hydrate(array $items)
     * @method Permission make(array $attributes = [])
     * @method Permission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Permission[]|_IH_Permission_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Permission[]|_IH_Permission_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Permission sole(array|string $columns = ['*'])
     * @method Permission updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Permission_QB extends _BaseBuilder {}

    /**
     * @method Post|null getOrPut($key, $value)
     * @method Post|$this shift(int $count = 1)
     * @method Post|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Post|$this pop(int $count = 1)
     * @method Post|null pull($key, $default = null)
     * @method Post|null last(callable $callback = null, $default = null)
     * @method Post|$this random(int|null $number = null)
     * @method Post|null sole($key = null, $operator = null, $value = null)
     * @method Post|null get($key, $default = null)
     * @method Post|null first(callable $callback = null, $default = null)
     * @method Post|null firstWhere(string $key, $operator = null, $value = null)
     * @method Post|null find($key, $default = null)
     * @method Post[] all()
     */
    class _IH_Post_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Post[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Post_QB whereId($value)
     * @method _IH_Post_QB whereTitle($value)
     * @method _IH_Post_QB whereCategoryId($value)
     * @method _IH_Post_QB whereSlug($value)
     * @method _IH_Post_QB whereImage($value)
     * @method _IH_Post_QB whereUserId($value)
     * @method _IH_Post_QB wherePublished($value)
     * @method _IH_Post_QB whereView($value)
     * @method _IH_Post_QB whereContent($value)
     * @method _IH_Post_QB whereCreatedAt($value)
     * @method _IH_Post_QB whereUpdatedAt($value)
     * @method _IH_Post_QB whereMetaTitle($value)
     * @method _IH_Post_QB whereMetaDescription($value)
     * @method _IH_Post_QB whereAllowComments($value)
     * @method _IH_Post_QB wherePublishDate($value)
     * @method Post baseSole(array|string $columns = ['*'])
     * @method Post create(array $attributes = [])
     * @method _IH_Post_C|Post[] cursor()
     * @method Post|null|_IH_Post_C|Post[] find($id, array $columns = ['*'])
     * @method _IH_Post_C|Post[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOrFail($id, array $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOrNew($id, array $columns = ['*'])
     * @method Post first(array|string $columns = ['*'])
     * @method Post firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Post firstOrCreate(array $attributes = [], array $values = [])
     * @method Post firstOrFail(array $columns = ['*'])
     * @method Post firstOrNew(array $attributes = [], array $values = [])
     * @method Post firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Post forceCreate(array $attributes)
     * @method _IH_Post_C|Post[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Post_C|Post[] get(array|string $columns = ['*'])
     * @method Post getModel()
     * @method Post[] getModels(array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] hydrate(array $items)
     * @method Post make(array $attributes = [])
     * @method Post newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Post[]|_IH_Post_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Post[]|_IH_Post_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Post sole(array|string $columns = ['*'])
     * @method Post updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Post_QB apiFilter()
     * @method _IH_Post_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Post_QB published()
     * @method _IH_Post_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Post_QB extends _BaseBuilder {}

    /**
     * @method PriceChange|null getOrPut($key, $value)
     * @method PriceChange|$this shift(int $count = 1)
     * @method PriceChange|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PriceChange|$this pop(int $count = 1)
     * @method PriceChange|null pull($key, $default = null)
     * @method PriceChange|null last(callable $callback = null, $default = null)
     * @method PriceChange|$this random(int|null $number = null)
     * @method PriceChange|null sole($key = null, $operator = null, $value = null)
     * @method PriceChange|null get($key, $default = null)
     * @method PriceChange|null first(callable $callback = null, $default = null)
     * @method PriceChange|null firstWhere(string $key, $operator = null, $value = null)
     * @method PriceChange|null find($key, $default = null)
     * @method PriceChange[] all()
     */
    class _IH_PriceChange_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PriceChange[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PriceChange_QB whereId($value)
     * @method _IH_PriceChange_QB wherePrice($value)
     * @method _IH_PriceChange_QB whereDiscount($value)
     * @method _IH_PriceChange_QB wherePriceId($value)
     * @method _IH_PriceChange_QB whereProductId($value)
     * @method _IH_PriceChange_QB whereCreatedAt($value)
     * @method _IH_PriceChange_QB whereUpdatedAt($value)
     * @method _IH_PriceChange_QB whereIsAvailable($value)
     * @method PriceChange baseSole(array|string $columns = ['*'])
     * @method PriceChange create(array $attributes = [])
     * @method _IH_PriceChange_C|PriceChange[] cursor()
     * @method PriceChange|null|_IH_PriceChange_C|PriceChange[] find($id, array $columns = ['*'])
     * @method _IH_PriceChange_C|PriceChange[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PriceChange|_IH_PriceChange_C|PriceChange[] findOrFail($id, array $columns = ['*'])
     * @method PriceChange|_IH_PriceChange_C|PriceChange[] findOrNew($id, array $columns = ['*'])
     * @method PriceChange first(array|string $columns = ['*'])
     * @method PriceChange firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PriceChange firstOrCreate(array $attributes = [], array $values = [])
     * @method PriceChange firstOrFail(array $columns = ['*'])
     * @method PriceChange firstOrNew(array $attributes = [], array $values = [])
     * @method PriceChange firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PriceChange forceCreate(array $attributes)
     * @method _IH_PriceChange_C|PriceChange[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PriceChange_C|PriceChange[] get(array|string $columns = ['*'])
     * @method PriceChange getModel()
     * @method PriceChange[] getModels(array|string $columns = ['*'])
     * @method _IH_PriceChange_C|PriceChange[] hydrate(array $items)
     * @method PriceChange make(array $attributes = [])
     * @method PriceChange newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PriceChange[]|_IH_PriceChange_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PriceChange[]|_IH_PriceChange_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PriceChange sole(array|string $columns = ['*'])
     * @method PriceChange updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PriceChange_QB extends _BaseBuilder {}

    /**
     * @method Price|null getOrPut($key, $value)
     * @method Price|$this shift(int $count = 1)
     * @method Price|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Price|$this pop(int $count = 1)
     * @method Price|null pull($key, $default = null)
     * @method Price|null last(callable $callback = null, $default = null)
     * @method Price|$this random(int|null $number = null)
     * @method Price|null sole($key = null, $operator = null, $value = null)
     * @method Price|null get($key, $default = null)
     * @method Price|null first(callable $callback = null, $default = null)
     * @method Price|null firstWhere(string $key, $operator = null, $value = null)
     * @method Price|null find($key, $default = null)
     * @method Price[] all()
     */
    class _IH_Price_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Price[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Price_QB whereId($value)
     * @method _IH_Price_QB wherePrice($value)
     * @method _IH_Price_QB whereProductId($value)
     * @method _IH_Price_QB whereDiscount($value)
     * @method _IH_Price_QB whereStock($value)
     * @method _IH_Price_QB whereCartMax($value)
     * @method _IH_Price_QB whereCreatedAt($value)
     * @method _IH_Price_QB whereUpdatedAt($value)
     * @method _IH_Price_QB whereDeletedAt($value)
     * @method _IH_Price_QB whereCartMin($value)
     * @method _IH_Price_QB whereDiscountExpireAt($value)
     * @method _IH_Price_QB whereOrdering($value)
     * @method _IH_Price_QB whereDiscountPrice($value)
     * @method Price baseSole(array|string $columns = ['*'])
     * @method Price create(array $attributes = [])
     * @method _IH_Price_C|Price[] cursor()
     * @method Price|null|_IH_Price_C|Price[] find($id, array $columns = ['*'])
     * @method _IH_Price_C|Price[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Price|_IH_Price_C|Price[] findOrFail($id, array $columns = ['*'])
     * @method Price|_IH_Price_C|Price[] findOrNew($id, array $columns = ['*'])
     * @method Price first(array|string $columns = ['*'])
     * @method Price firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Price firstOrCreate(array $attributes = [], array $values = [])
     * @method Price firstOrFail(array $columns = ['*'])
     * @method Price firstOrNew(array $attributes = [], array $values = [])
     * @method Price firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Price forceCreate(array $attributes)
     * @method _IH_Price_C|Price[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Price_C|Price[] get(array|string $columns = ['*'])
     * @method Price getModel()
     * @method Price[] getModels(array|string $columns = ['*'])
     * @method _IH_Price_C|Price[] hydrate(array $items)
     * @method Price make(array $attributes = [])
     * @method Price newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Price[]|_IH_Price_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Price[]|_IH_Price_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Price sole(array|string $columns = ['*'])
     * @method Price updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Price_QB inStock()
     */
    class _IH_Price_QB extends _BaseBuilder {}

    /**
     * @method Product|null getOrPut($key, $value)
     * @method Product|$this shift(int $count = 1)
     * @method Product|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Product|$this pop(int $count = 1)
     * @method Product|null pull($key, $default = null)
     * @method Product|null last(callable $callback = null, $default = null)
     * @method Product|$this random(int|null $number = null)
     * @method Product|null sole($key = null, $operator = null, $value = null)
     * @method Product|null get($key, $default = null)
     * @method Product|null first(callable $callback = null, $default = null)
     * @method Product|null firstWhere(string $key, $operator = null, $value = null)
     * @method Product|null find($key, $default = null)
     * @method Product[] all()
     */
    class _IH_Product_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Product[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Product_QB whereId($value)
     * @method _IH_Product_QB whereTitle($value)
     * @method _IH_Product_QB whereTitleEn($value)
     * @method _IH_Product_QB whereType($value)
     * @method _IH_Product_QB whereCategoryId($value)
     * @method _IH_Product_QB whereSpecTypeId($value)
     * @method _IH_Product_QB whereSlug($value)
     * @method _IH_Product_QB whereImage($value)
     * @method _IH_Product_QB whereFile($value)
     * @method _IH_Product_QB whereWeight($value)
     * @method _IH_Product_QB whereSpecial($value)
     * @method _IH_Product_QB whereDescription($value)
     * @method _IH_Product_QB whereShortDescription($value)
     * @method _IH_Product_QB whereSell($value)
     * @method _IH_Product_QB whereView($value)
     * @method _IH_Product_QB whereCreatedAt($value)
     * @method _IH_Product_QB whereUpdatedAt($value)
     * @method _IH_Product_QB wherePriceType($value)
     * @method _IH_Product_QB whereMetaTitle($value)
     * @method _IH_Product_QB whereMetaDescription($value)
     * @method _IH_Product_QB wherePublished($value)
     * @method _IH_Product_QB whereImageAlt($value)
     * @method _IH_Product_QB whereBrandId($value)
     * @method _IH_Product_QB wherePublishDate($value)
     * @method _IH_Product_QB whereUnit($value)
     * @method _IH_Product_QB whereRoundingType($value)
     * @method _IH_Product_QB whereRoundingAmount($value)
     * @method _IH_Product_QB whereCurrencyId($value)
     * @method _IH_Product_QB whereDiscountPerPurchase($value)
     * @method Product baseSole(array|string $columns = ['*'])
     * @method Product create(array $attributes = [])
     * @method _IH_Product_C|Product[] cursor()
     * @method Product|null|_IH_Product_C|Product[] find($id, array $columns = ['*'])
     * @method _IH_Product_C|Product[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrFail($id, array $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrNew($id, array $columns = ['*'])
     * @method Product first(array|string $columns = ['*'])
     * @method Product firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Product firstOrCreate(array $attributes = [], array $values = [])
     * @method Product firstOrFail(array $columns = ['*'])
     * @method Product firstOrNew(array $attributes = [], array $values = [])
     * @method Product firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product forceCreate(array $attributes)
     * @method _IH_Product_C|Product[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Product_C|Product[] get(array|string $columns = ['*'])
     * @method Product getModel()
     * @method Product[] getModels(array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] hydrate(array $items)
     * @method Product make(array $attributes = [])
     * @method Product newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Product[]|_IH_Product_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Product[]|_IH_Product_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product sole(array|string $columns = ['*'])
     * @method Product updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Product_QB apiFilter()
     * @method _IH_Product_QB available()
     * @method _IH_Product_QB customPaginate($request)
     * @method _IH_Product_QB datatableFilter(Request $request)
     * @method _IH_Product_QB discount()
     * @method _IH_Product_QB filter($request)
     * @method _IH_Product_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Product_QB frontFilter($category)
     * @method _IH_Product_QB orderByPrice($type = '')
     * @method _IH_Product_QB orderBySale($type = 'asc')
     * @method _IH_Product_QB orderByStock($type = 'desc')
     * @method _IH_Product_QB physical()
     * @method _IH_Product_QB published()
     * @method _IH_Product_QB special()
     * @method _IH_Product_QB unavailable()
     * @method _IH_Product_QB unpublished()
     * @method _IH_Product_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Product_QB extends _BaseBuilder {}

    /**
     * @method Province|null getOrPut($key, $value)
     * @method Province|$this shift(int $count = 1)
     * @method Province|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Province|$this pop(int $count = 1)
     * @method Province|null pull($key, $default = null)
     * @method Province|null last(callable $callback = null, $default = null)
     * @method Province|$this random(int|null $number = null)
     * @method Province|null sole($key = null, $operator = null, $value = null)
     * @method Province|null get($key, $default = null)
     * @method Province|null first(callable $callback = null, $default = null)
     * @method Province|null firstWhere(string $key, $operator = null, $value = null)
     * @method Province|null find($key, $default = null)
     * @method Province[] all()
     */
    class _IH_Province_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Province[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Province_QB whereId($value)
     * @method _IH_Province_QB whereName($value)
     * @method _IH_Province_QB whereNameEn($value)
     * @method _IH_Province_QB whereLatitude($value)
     * @method _IH_Province_QB whereLongitude($value)
     * @method _IH_Province_QB whereOrdering($value)
     * @method _IH_Province_QB whereIsActive($value)
     * @method _IH_Province_QB whereDeletedAt($value)
     * @method Province baseSole(array|string $columns = ['*'])
     * @method Province create(array $attributes = [])
     * @method _IH_Province_C|Province[] cursor()
     * @method Province|null|_IH_Province_C|Province[] find($id, array $columns = ['*'])
     * @method _IH_Province_C|Province[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Province|_IH_Province_C|Province[] findOrFail($id, array $columns = ['*'])
     * @method Province|_IH_Province_C|Province[] findOrNew($id, array $columns = ['*'])
     * @method Province first(array|string $columns = ['*'])
     * @method Province firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Province firstOrCreate(array $attributes = [], array $values = [])
     * @method Province firstOrFail(array $columns = ['*'])
     * @method Province firstOrNew(array $attributes = [], array $values = [])
     * @method Province firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Province forceCreate(array $attributes)
     * @method _IH_Province_C|Province[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Province_C|Province[] get(array|string $columns = ['*'])
     * @method Province getModel()
     * @method Province[] getModels(array|string $columns = ['*'])
     * @method _IH_Province_C|Province[] hydrate(array $items)
     * @method Province make(array $attributes = [])
     * @method Province newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Province[]|_IH_Province_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Province[]|_IH_Province_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Province sole(array|string $columns = ['*'])
     * @method Province updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Province_QB active()
     * @method _IH_Province_QB filter($request)
     */
    class _IH_Province_QB extends _BaseBuilder {}

    /**
     * @method Role|null getOrPut($key, $value)
     * @method Role|$this shift(int $count = 1)
     * @method Role|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Role|$this pop(int $count = 1)
     * @method Role|null pull($key, $default = null)
     * @method Role|null last(callable $callback = null, $default = null)
     * @method Role|$this random(int|null $number = null)
     * @method Role|null sole($key = null, $operator = null, $value = null)
     * @method Role|null get($key, $default = null)
     * @method Role|null first(callable $callback = null, $default = null)
     * @method Role|null firstWhere(string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereTitle($value)
     * @method _IH_Role_QB whereSlug($value)
     * @method _IH_Role_QB whereDescription($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Role_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Role_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Role_QB extends _BaseBuilder {}

    /**
     * @method Slider|null getOrPut($key, $value)
     * @method Slider|$this shift(int $count = 1)
     * @method Slider|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Slider|$this pop(int $count = 1)
     * @method Slider|null pull($key, $default = null)
     * @method Slider|null last(callable $callback = null, $default = null)
     * @method Slider|$this random(int|null $number = null)
     * @method Slider|null sole($key = null, $operator = null, $value = null)
     * @method Slider|null get($key, $default = null)
     * @method Slider|null first(callable $callback = null, $default = null)
     * @method Slider|null firstWhere(string $key, $operator = null, $value = null)
     * @method Slider|null find($key, $default = null)
     * @method Slider[] all()
     */
    class _IH_Slider_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Slider[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Slider_QB whereId($value)
     * @method _IH_Slider_QB whereTitle($value)
     * @method _IH_Slider_QB whereDescription($value)
     * @method _IH_Slider_QB whereImage($value)
     * @method _IH_Slider_QB wherePublished($value)
     * @method _IH_Slider_QB whereLink($value)
     * @method _IH_Slider_QB whereOrdering($value)
     * @method _IH_Slider_QB whereGroup($value)
     * @method _IH_Slider_QB whereCreatedAt($value)
     * @method _IH_Slider_QB whereUpdatedAt($value)
     * @method Slider baseSole(array|string $columns = ['*'])
     * @method Slider create(array $attributes = [])
     * @method _IH_Slider_C|Slider[] cursor()
     * @method Slider|null|_IH_Slider_C|Slider[] find($id, array $columns = ['*'])
     * @method _IH_Slider_C|Slider[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Slider|_IH_Slider_C|Slider[] findOrFail($id, array $columns = ['*'])
     * @method Slider|_IH_Slider_C|Slider[] findOrNew($id, array $columns = ['*'])
     * @method Slider first(array|string $columns = ['*'])
     * @method Slider firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Slider firstOrCreate(array $attributes = [], array $values = [])
     * @method Slider firstOrFail(array $columns = ['*'])
     * @method Slider firstOrNew(array $attributes = [], array $values = [])
     * @method Slider firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Slider forceCreate(array $attributes)
     * @method _IH_Slider_C|Slider[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Slider_C|Slider[] get(array|string $columns = ['*'])
     * @method Slider getModel()
     * @method Slider[] getModels(array|string $columns = ['*'])
     * @method _IH_Slider_C|Slider[] hydrate(array $items)
     * @method Slider make(array $attributes = [])
     * @method Slider newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Slider[]|_IH_Slider_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Slider[]|_IH_Slider_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Slider sole(array|string $columns = ['*'])
     * @method Slider updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Slider_QB extends _BaseBuilder {}

    /**
     * @method Sms|null getOrPut($key, $value)
     * @method Sms|$this shift(int $count = 1)
     * @method Sms|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Sms|$this pop(int $count = 1)
     * @method Sms|null pull($key, $default = null)
     * @method Sms|null last(callable $callback = null, $default = null)
     * @method Sms|$this random(int|null $number = null)
     * @method Sms|null sole($key = null, $operator = null, $value = null)
     * @method Sms|null get($key, $default = null)
     * @method Sms|null first(callable $callback = null, $default = null)
     * @method Sms|null firstWhere(string $key, $operator = null, $value = null)
     * @method Sms|null find($key, $default = null)
     * @method Sms[] all()
     */
    class _IH_Sms_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Sms[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Sms_QB whereId($value)
     * @method _IH_Sms_QB whereMobile($value)
     * @method _IH_Sms_QB whereIp($value)
     * @method _IH_Sms_QB whereType($value)
     * @method _IH_Sms_QB whereCreatedAt($value)
     * @method _IH_Sms_QB whereUpdatedAt($value)
     * @method _IH_Sms_QB whereUserId($value)
     * @method _IH_Sms_QB whereResponse($value)
     * @method _IH_Sms_QB whereProvider($value)
     * @method _IH_Sms_QB whereMessage($value)
     * @method Sms baseSole(array|string $columns = ['*'])
     * @method Sms create(array $attributes = [])
     * @method _IH_Sms_C|Sms[] cursor()
     * @method Sms|null|_IH_Sms_C|Sms[] find($id, array $columns = ['*'])
     * @method _IH_Sms_C|Sms[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Sms|_IH_Sms_C|Sms[] findOrFail($id, array $columns = ['*'])
     * @method Sms|_IH_Sms_C|Sms[] findOrNew($id, array $columns = ['*'])
     * @method Sms first(array|string $columns = ['*'])
     * @method Sms firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Sms firstOrCreate(array $attributes = [], array $values = [])
     * @method Sms firstOrFail(array $columns = ['*'])
     * @method Sms firstOrNew(array $attributes = [], array $values = [])
     * @method Sms firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Sms forceCreate(array $attributes)
     * @method _IH_Sms_C|Sms[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Sms_C|Sms[] get(array|string $columns = ['*'])
     * @method Sms getModel()
     * @method Sms[] getModels(array|string $columns = ['*'])
     * @method _IH_Sms_C|Sms[] hydrate(array $items)
     * @method Sms make(array $attributes = [])
     * @method Sms newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Sms[]|_IH_Sms_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Sms[]|_IH_Sms_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Sms sole(array|string $columns = ['*'])
     * @method Sms updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Sms_QB extends _BaseBuilder {}

    /**
     * @method SpecType|null getOrPut($key, $value)
     * @method SpecType|$this shift(int $count = 1)
     * @method SpecType|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SpecType|$this pop(int $count = 1)
     * @method SpecType|null pull($key, $default = null)
     * @method SpecType|null last(callable $callback = null, $default = null)
     * @method SpecType|$this random(int|null $number = null)
     * @method SpecType|null sole($key = null, $operator = null, $value = null)
     * @method SpecType|null get($key, $default = null)
     * @method SpecType|null first(callable $callback = null, $default = null)
     * @method SpecType|null firstWhere(string $key, $operator = null, $value = null)
     * @method SpecType|null find($key, $default = null)
     * @method SpecType[] all()
     */
    class _IH_SpecType_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SpecType[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_SpecType_QB whereId($value)
     * @method _IH_SpecType_QB whereName($value)
     * @method _IH_SpecType_QB whereCreatedAt($value)
     * @method _IH_SpecType_QB whereUpdatedAt($value)
     * @method SpecType baseSole(array|string $columns = ['*'])
     * @method SpecType create(array $attributes = [])
     * @method _IH_SpecType_C|SpecType[] cursor()
     * @method SpecType|null|_IH_SpecType_C|SpecType[] find($id, array $columns = ['*'])
     * @method _IH_SpecType_C|SpecType[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SpecType|_IH_SpecType_C|SpecType[] findOrFail($id, array $columns = ['*'])
     * @method SpecType|_IH_SpecType_C|SpecType[] findOrNew($id, array $columns = ['*'])
     * @method SpecType first(array|string $columns = ['*'])
     * @method SpecType firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SpecType firstOrCreate(array $attributes = [], array $values = [])
     * @method SpecType firstOrFail(array $columns = ['*'])
     * @method SpecType firstOrNew(array $attributes = [], array $values = [])
     * @method SpecType firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SpecType forceCreate(array $attributes)
     * @method _IH_SpecType_C|SpecType[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SpecType_C|SpecType[] get(array|string $columns = ['*'])
     * @method SpecType getModel()
     * @method SpecType[] getModels(array|string $columns = ['*'])
     * @method _IH_SpecType_C|SpecType[] hydrate(array $items)
     * @method SpecType make(array $attributes = [])
     * @method SpecType newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SpecType[]|_IH_SpecType_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SpecType[]|_IH_SpecType_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SpecType sole(array|string $columns = ['*'])
     * @method SpecType updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SpecType_QB extends _BaseBuilder {}

    /**
     * @method SpecificationGroup|null getOrPut($key, $value)
     * @method SpecificationGroup|$this shift(int $count = 1)
     * @method SpecificationGroup|null firstOrFail($key = null, $operator = null, $value = null)
     * @method SpecificationGroup|$this pop(int $count = 1)
     * @method SpecificationGroup|null pull($key, $default = null)
     * @method SpecificationGroup|null last(callable $callback = null, $default = null)
     * @method SpecificationGroup|$this random(int|null $number = null)
     * @method SpecificationGroup|null sole($key = null, $operator = null, $value = null)
     * @method SpecificationGroup|null get($key, $default = null)
     * @method SpecificationGroup|null first(callable $callback = null, $default = null)
     * @method SpecificationGroup|null firstWhere(string $key, $operator = null, $value = null)
     * @method SpecificationGroup|null find($key, $default = null)
     * @method SpecificationGroup[] all()
     */
    class _IH_SpecificationGroup_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SpecificationGroup[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_SpecificationGroup_QB whereId($value)
     * @method _IH_SpecificationGroup_QB whereName($value)
     * @method _IH_SpecificationGroup_QB whereCreatedAt($value)
     * @method _IH_SpecificationGroup_QB whereUpdatedAt($value)
     * @method SpecificationGroup baseSole(array|string $columns = ['*'])
     * @method SpecificationGroup create(array $attributes = [])
     * @method _IH_SpecificationGroup_C|SpecificationGroup[] cursor()
     * @method SpecificationGroup|null|_IH_SpecificationGroup_C|SpecificationGroup[] find($id, array $columns = ['*'])
     * @method _IH_SpecificationGroup_C|SpecificationGroup[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method SpecificationGroup|_IH_SpecificationGroup_C|SpecificationGroup[] findOrFail($id, array $columns = ['*'])
     * @method SpecificationGroup|_IH_SpecificationGroup_C|SpecificationGroup[] findOrNew($id, array $columns = ['*'])
     * @method SpecificationGroup first(array|string $columns = ['*'])
     * @method SpecificationGroup firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method SpecificationGroup firstOrCreate(array $attributes = [], array $values = [])
     * @method SpecificationGroup firstOrFail(array $columns = ['*'])
     * @method SpecificationGroup firstOrNew(array $attributes = [], array $values = [])
     * @method SpecificationGroup firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SpecificationGroup forceCreate(array $attributes)
     * @method _IH_SpecificationGroup_C|SpecificationGroup[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SpecificationGroup_C|SpecificationGroup[] get(array|string $columns = ['*'])
     * @method SpecificationGroup getModel()
     * @method SpecificationGroup[] getModels(array|string $columns = ['*'])
     * @method _IH_SpecificationGroup_C|SpecificationGroup[] hydrate(array $items)
     * @method SpecificationGroup make(array $attributes = [])
     * @method SpecificationGroup newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SpecificationGroup[]|_IH_SpecificationGroup_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SpecificationGroup[]|_IH_SpecificationGroup_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SpecificationGroup sole(array|string $columns = ['*'])
     * @method SpecificationGroup updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SpecificationGroup_QB extends _BaseBuilder {}

    /**
     * @method Specification|null getOrPut($key, $value)
     * @method Specification|$this shift(int $count = 1)
     * @method Specification|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Specification|$this pop(int $count = 1)
     * @method Specification|null pull($key, $default = null)
     * @method Specification|null last(callable $callback = null, $default = null)
     * @method Specification|$this random(int|null $number = null)
     * @method Specification|null sole($key = null, $operator = null, $value = null)
     * @method Specification|null get($key, $default = null)
     * @method Specification|null first(callable $callback = null, $default = null)
     * @method Specification|null firstWhere(string $key, $operator = null, $value = null)
     * @method Specification|null find($key, $default = null)
     * @method Specification[] all()
     */
    class _IH_Specification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Specification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Specification_QB whereId($value)
     * @method _IH_Specification_QB whereName($value)
     * @method _IH_Specification_QB whereCreatedAt($value)
     * @method _IH_Specification_QB whereUpdatedAt($value)
     * @method Specification baseSole(array|string $columns = ['*'])
     * @method Specification create(array $attributes = [])
     * @method _IH_Specification_C|Specification[] cursor()
     * @method Specification|null|_IH_Specification_C|Specification[] find($id, array $columns = ['*'])
     * @method _IH_Specification_C|Specification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Specification|_IH_Specification_C|Specification[] findOrFail($id, array $columns = ['*'])
     * @method Specification|_IH_Specification_C|Specification[] findOrNew($id, array $columns = ['*'])
     * @method Specification first(array|string $columns = ['*'])
     * @method Specification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Specification firstOrCreate(array $attributes = [], array $values = [])
     * @method Specification firstOrFail(array $columns = ['*'])
     * @method Specification firstOrNew(array $attributes = [], array $values = [])
     * @method Specification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Specification forceCreate(array $attributes)
     * @method _IH_Specification_C|Specification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Specification_C|Specification[] get(array|string $columns = ['*'])
     * @method Specification getModel()
     * @method Specification[] getModels(array|string $columns = ['*'])
     * @method _IH_Specification_C|Specification[] hydrate(array $items)
     * @method Specification make(array $attributes = [])
     * @method Specification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Specification[]|_IH_Specification_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Specification[]|_IH_Specification_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Specification sole(array|string $columns = ['*'])
     * @method Specification updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Specification_QB extends _BaseBuilder {}

    /**
     * @method StaticFilter|null getOrPut($key, $value)
     * @method StaticFilter|$this shift(int $count = 1)
     * @method StaticFilter|null firstOrFail($key = null, $operator = null, $value = null)
     * @method StaticFilter|$this pop(int $count = 1)
     * @method StaticFilter|null pull($key, $default = null)
     * @method StaticFilter|null last(callable $callback = null, $default = null)
     * @method StaticFilter|$this random(int|null $number = null)
     * @method StaticFilter|null sole($key = null, $operator = null, $value = null)
     * @method StaticFilter|null get($key, $default = null)
     * @method StaticFilter|null first(callable $callback = null, $default = null)
     * @method StaticFilter|null firstWhere(string $key, $operator = null, $value = null)
     * @method StaticFilter|null find($key, $default = null)
     * @method StaticFilter[] all()
     */
    class _IH_StaticFilter_C extends _BaseCollection {
        /**
         * @param int $size
         * @return StaticFilter[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_StaticFilter_QB whereId($value)
     * @method _IH_StaticFilter_QB whereTitle($value)
     * @method _IH_StaticFilter_QB whereType($value)
     * @method _IH_StaticFilter_QB whereOrdering($value)
     * @method _IH_StaticFilter_QB whereCreatedAt($value)
     * @method _IH_StaticFilter_QB whereUpdatedAt($value)
     * @method StaticFilter baseSole(array|string $columns = ['*'])
     * @method StaticFilter create(array $attributes = [])
     * @method _IH_StaticFilter_C|StaticFilter[] cursor()
     * @method StaticFilter|null|_IH_StaticFilter_C|StaticFilter[] find($id, array $columns = ['*'])
     * @method _IH_StaticFilter_C|StaticFilter[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method StaticFilter|_IH_StaticFilter_C|StaticFilter[] findOrFail($id, array $columns = ['*'])
     * @method StaticFilter|_IH_StaticFilter_C|StaticFilter[] findOrNew($id, array $columns = ['*'])
     * @method StaticFilter first(array|string $columns = ['*'])
     * @method StaticFilter firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method StaticFilter firstOrCreate(array $attributes = [], array $values = [])
     * @method StaticFilter firstOrFail(array $columns = ['*'])
     * @method StaticFilter firstOrNew(array $attributes = [], array $values = [])
     * @method StaticFilter firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method StaticFilter forceCreate(array $attributes)
     * @method _IH_StaticFilter_C|StaticFilter[] fromQuery(string $query, array $bindings = [])
     * @method _IH_StaticFilter_C|StaticFilter[] get(array|string $columns = ['*'])
     * @method StaticFilter getModel()
     * @method StaticFilter[] getModels(array|string $columns = ['*'])
     * @method _IH_StaticFilter_C|StaticFilter[] hydrate(array $items)
     * @method StaticFilter make(array $attributes = [])
     * @method StaticFilter newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|StaticFilter[]|_IH_StaticFilter_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|StaticFilter[]|_IH_StaticFilter_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method StaticFilter sole(array|string $columns = ['*'])
     * @method StaticFilter updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_StaticFilter_QB extends _BaseBuilder {}

    /**
     * @method Statistics|null getOrPut($key, $value)
     * @method Statistics|$this shift(int $count = 1)
     * @method Statistics|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Statistics|$this pop(int $count = 1)
     * @method Statistics|null pull($key, $default = null)
     * @method Statistics|null last(callable $callback = null, $default = null)
     * @method Statistics|$this random(int|null $number = null)
     * @method Statistics|null sole($key = null, $operator = null, $value = null)
     * @method Statistics|null get($key, $default = null)
     * @method Statistics|null first(callable $callback = null, $default = null)
     * @method Statistics|null firstWhere(string $key, $operator = null, $value = null)
     * @method Statistics|null find($key, $default = null)
     * @method Statistics[] all()
     */
    class _IH_Statistics_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Statistics[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Statistics_QB whereId($value)
     * @method _IH_Statistics_QB whereViewCount($value)
     * @method _IH_Statistics_QB whereViewerCount($value)
     * @method _IH_Statistics_QB whereCreatedAt($value)
     * @method _IH_Statistics_QB whereUpdatedAt($value)
     * @method Statistics baseSole(array|string $columns = ['*'])
     * @method Statistics create(array $attributes = [])
     * @method _IH_Statistics_C|Statistics[] cursor()
     * @method Statistics|null|_IH_Statistics_C|Statistics[] find($id, array $columns = ['*'])
     * @method _IH_Statistics_C|Statistics[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Statistics|_IH_Statistics_C|Statistics[] findOrFail($id, array $columns = ['*'])
     * @method Statistics|_IH_Statistics_C|Statistics[] findOrNew($id, array $columns = ['*'])
     * @method Statistics first(array|string $columns = ['*'])
     * @method Statistics firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Statistics firstOrCreate(array $attributes = [], array $values = [])
     * @method Statistics firstOrFail(array $columns = ['*'])
     * @method Statistics firstOrNew(array $attributes = [], array $values = [])
     * @method Statistics firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Statistics forceCreate(array $attributes)
     * @method _IH_Statistics_C|Statistics[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Statistics_C|Statistics[] get(array|string $columns = ['*'])
     * @method Statistics getModel()
     * @method Statistics[] getModels(array|string $columns = ['*'])
     * @method _IH_Statistics_C|Statistics[] hydrate(array $items)
     * @method Statistics make(array $attributes = [])
     * @method Statistics newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Statistics[]|_IH_Statistics_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Statistics[]|_IH_Statistics_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Statistics sole(array|string $columns = ['*'])
     * @method Statistics updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Statistics_QB extends _BaseBuilder {}

    /**
     * @method StockNotify|null getOrPut($key, $value)
     * @method StockNotify|$this shift(int $count = 1)
     * @method StockNotify|null firstOrFail($key = null, $operator = null, $value = null)
     * @method StockNotify|$this pop(int $count = 1)
     * @method StockNotify|null pull($key, $default = null)
     * @method StockNotify|null last(callable $callback = null, $default = null)
     * @method StockNotify|$this random(int|null $number = null)
     * @method StockNotify|null sole($key = null, $operator = null, $value = null)
     * @method StockNotify|null get($key, $default = null)
     * @method StockNotify|null first(callable $callback = null, $default = null)
     * @method StockNotify|null firstWhere(string $key, $operator = null, $value = null)
     * @method StockNotify|null find($key, $default = null)
     * @method StockNotify[] all()
     */
    class _IH_StockNotify_C extends _BaseCollection {
        /**
         * @param int $size
         * @return StockNotify[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_StockNotify_QB whereId($value)
     * @method _IH_StockNotify_QB whereName($value)
     * @method _IH_StockNotify_QB whereMobile($value)
     * @method _IH_StockNotify_QB whereEmail($value)
     * @method _IH_StockNotify_QB whereSeen($value)
     * @method _IH_StockNotify_QB whereProductId($value)
     * @method _IH_StockNotify_QB whereCreatedAt($value)
     * @method _IH_StockNotify_QB whereUpdatedAt($value)
     * @method StockNotify baseSole(array|string $columns = ['*'])
     * @method StockNotify create(array $attributes = [])
     * @method _IH_StockNotify_C|StockNotify[] cursor()
     * @method StockNotify|null|_IH_StockNotify_C|StockNotify[] find($id, array $columns = ['*'])
     * @method _IH_StockNotify_C|StockNotify[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method StockNotify|_IH_StockNotify_C|StockNotify[] findOrFail($id, array $columns = ['*'])
     * @method StockNotify|_IH_StockNotify_C|StockNotify[] findOrNew($id, array $columns = ['*'])
     * @method StockNotify first(array|string $columns = ['*'])
     * @method StockNotify firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method StockNotify firstOrCreate(array $attributes = [], array $values = [])
     * @method StockNotify firstOrFail(array $columns = ['*'])
     * @method StockNotify firstOrNew(array $attributes = [], array $values = [])
     * @method StockNotify firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method StockNotify forceCreate(array $attributes)
     * @method _IH_StockNotify_C|StockNotify[] fromQuery(string $query, array $bindings = [])
     * @method _IH_StockNotify_C|StockNotify[] get(array|string $columns = ['*'])
     * @method StockNotify getModel()
     * @method StockNotify[] getModels(array|string $columns = ['*'])
     * @method _IH_StockNotify_C|StockNotify[] hydrate(array $items)
     * @method StockNotify make(array $attributes = [])
     * @method StockNotify newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|StockNotify[]|_IH_StockNotify_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|StockNotify[]|_IH_StockNotify_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method StockNotify sole(array|string $columns = ['*'])
     * @method StockNotify updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_StockNotify_QB extends _BaseBuilder {}

    /**
     * @method Tag|null getOrPut($key, $value)
     * @method Tag|$this shift(int $count = 1)
     * @method Tag|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Tag|$this pop(int $count = 1)
     * @method Tag|null pull($key, $default = null)
     * @method Tag|null last(callable $callback = null, $default = null)
     * @method Tag|$this random(int|null $number = null)
     * @method Tag|null sole($key = null, $operator = null, $value = null)
     * @method Tag|null get($key, $default = null)
     * @method Tag|null first(callable $callback = null, $default = null)
     * @method Tag|null firstWhere(string $key, $operator = null, $value = null)
     * @method Tag|null find($key, $default = null)
     * @method Tag[] all()
     */
    class _IH_Tag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Tag_QB whereId($value)
     * @method _IH_Tag_QB whereName($value)
     * @method _IH_Tag_QB whereSlug($value)
     * @method _IH_Tag_QB whereCreatedAt($value)
     * @method _IH_Tag_QB whereUpdatedAt($value)
     * @method Tag baseSole(array|string $columns = ['*'])
     * @method Tag create(array $attributes = [])
     * @method _IH_Tag_C|Tag[] cursor()
     * @method Tag|null|_IH_Tag_C|Tag[] find($id, array $columns = ['*'])
     * @method _IH_Tag_C|Tag[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOrFail($id, array $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOrNew($id, array $columns = ['*'])
     * @method Tag first(array|string $columns = ['*'])
     * @method Tag firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Tag firstOrCreate(array $attributes = [], array $values = [])
     * @method Tag firstOrFail(array $columns = ['*'])
     * @method Tag firstOrNew(array $attributes = [], array $values = [])
     * @method Tag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tag forceCreate(array $attributes)
     * @method _IH_Tag_C|Tag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tag_C|Tag[] get(array|string $columns = ['*'])
     * @method Tag getModel()
     * @method Tag[] getModels(array|string $columns = ['*'])
     * @method _IH_Tag_C|Tag[] hydrate(array $items)
     * @method Tag make(array $attributes = [])
     * @method Tag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tag[]|_IH_Tag_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tag[]|_IH_Tag_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tag sole(array|string $columns = ['*'])
     * @method Tag updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Tag_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Tag_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Tag_QB extends _BaseBuilder {}

    /**
     * @method Tariff|null getOrPut($key, $value)
     * @method Tariff|$this shift(int $count = 1)
     * @method Tariff|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Tariff|$this pop(int $count = 1)
     * @method Tariff|null pull($key, $default = null)
     * @method Tariff|null last(callable $callback = null, $default = null)
     * @method Tariff|$this random(int|null $number = null)
     * @method Tariff|null sole($key = null, $operator = null, $value = null)
     * @method Tariff|null get($key, $default = null)
     * @method Tariff|null first(callable $callback = null, $default = null)
     * @method Tariff|null firstWhere(string $key, $operator = null, $value = null)
     * @method Tariff|null find($key, $default = null)
     * @method Tariff[] all()
     */
    class _IH_Tariff_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tariff[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Tariff_QB whereId($value)
     * @method _IH_Tariff_QB whereCarrierId($value)
     * @method _IH_Tariff_QB whereType($value)
     * @method _IH_Tariff_QB whereMaxWeight($value)
     * @method _IH_Tariff_QB whereShippingCost($value)
     * @method _IH_Tariff_QB whereCreatedAt($value)
     * @method _IH_Tariff_QB whereUpdatedAt($value)
     * @method Tariff baseSole(array|string $columns = ['*'])
     * @method Tariff create(array $attributes = [])
     * @method _IH_Tariff_C|Tariff[] cursor()
     * @method Tariff|null|_IH_Tariff_C|Tariff[] find($id, array $columns = ['*'])
     * @method _IH_Tariff_C|Tariff[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Tariff|_IH_Tariff_C|Tariff[] findOrFail($id, array $columns = ['*'])
     * @method Tariff|_IH_Tariff_C|Tariff[] findOrNew($id, array $columns = ['*'])
     * @method Tariff first(array|string $columns = ['*'])
     * @method Tariff firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Tariff firstOrCreate(array $attributes = [], array $values = [])
     * @method Tariff firstOrFail(array $columns = ['*'])
     * @method Tariff firstOrNew(array $attributes = [], array $values = [])
     * @method Tariff firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tariff forceCreate(array $attributes)
     * @method _IH_Tariff_C|Tariff[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tariff_C|Tariff[] get(array|string $columns = ['*'])
     * @method Tariff getModel()
     * @method Tariff[] getModels(array|string $columns = ['*'])
     * @method _IH_Tariff_C|Tariff[] hydrate(array $items)
     * @method Tariff make(array $attributes = [])
     * @method Tariff newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tariff[]|_IH_Tariff_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tariff[]|_IH_Tariff_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tariff sole(array|string $columns = ['*'])
     * @method Tariff updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Tariff_QB extends _BaseBuilder {}

    /**
     * @method TicketMessage|null getOrPut($key, $value)
     * @method TicketMessage|$this shift(int $count = 1)
     * @method TicketMessage|null firstOrFail($key = null, $operator = null, $value = null)
     * @method TicketMessage|$this pop(int $count = 1)
     * @method TicketMessage|null pull($key, $default = null)
     * @method TicketMessage|null last(callable $callback = null, $default = null)
     * @method TicketMessage|$this random(int|null $number = null)
     * @method TicketMessage|null sole($key = null, $operator = null, $value = null)
     * @method TicketMessage|null get($key, $default = null)
     * @method TicketMessage|null first(callable $callback = null, $default = null)
     * @method TicketMessage|null firstWhere(string $key, $operator = null, $value = null)
     * @method TicketMessage|null find($key, $default = null)
     * @method TicketMessage[] all()
     */
    class _IH_TicketMessage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TicketMessage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_TicketMessage_QB whereId($value)
     * @method _IH_TicketMessage_QB whereUserId($value)
     * @method _IH_TicketMessage_QB whereTicketId($value)
     * @method _IH_TicketMessage_QB whereMessage($value)
     * @method _IH_TicketMessage_QB whereCreatedAt($value)
     * @method _IH_TicketMessage_QB whereUpdatedAt($value)
     * @method TicketMessage baseSole(array|string $columns = ['*'])
     * @method TicketMessage create(array $attributes = [])
     * @method _IH_TicketMessage_C|TicketMessage[] cursor()
     * @method TicketMessage|null|_IH_TicketMessage_C|TicketMessage[] find($id, array $columns = ['*'])
     * @method _IH_TicketMessage_C|TicketMessage[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TicketMessage|_IH_TicketMessage_C|TicketMessage[] findOrFail($id, array $columns = ['*'])
     * @method TicketMessage|_IH_TicketMessage_C|TicketMessage[] findOrNew($id, array $columns = ['*'])
     * @method TicketMessage first(array|string $columns = ['*'])
     * @method TicketMessage firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method TicketMessage firstOrCreate(array $attributes = [], array $values = [])
     * @method TicketMessage firstOrFail(array $columns = ['*'])
     * @method TicketMessage firstOrNew(array $attributes = [], array $values = [])
     * @method TicketMessage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TicketMessage forceCreate(array $attributes)
     * @method _IH_TicketMessage_C|TicketMessage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TicketMessage_C|TicketMessage[] get(array|string $columns = ['*'])
     * @method TicketMessage getModel()
     * @method TicketMessage[] getModels(array|string $columns = ['*'])
     * @method _IH_TicketMessage_C|TicketMessage[] hydrate(array $items)
     * @method TicketMessage make(array $attributes = [])
     * @method TicketMessage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TicketMessage[]|_IH_TicketMessage_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TicketMessage[]|_IH_TicketMessage_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TicketMessage sole(array|string $columns = ['*'])
     * @method TicketMessage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TicketMessage_QB extends _BaseBuilder {}

    /**
     * @method Ticket|null getOrPut($key, $value)
     * @method Ticket|$this shift(int $count = 1)
     * @method Ticket|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Ticket|$this pop(int $count = 1)
     * @method Ticket|null pull($key, $default = null)
     * @method Ticket|null last(callable $callback = null, $default = null)
     * @method Ticket|$this random(int|null $number = null)
     * @method Ticket|null sole($key = null, $operator = null, $value = null)
     * @method Ticket|null get($key, $default = null)
     * @method Ticket|null first(callable $callback = null, $default = null)
     * @method Ticket|null firstWhere(string $key, $operator = null, $value = null)
     * @method Ticket|null find($key, $default = null)
     * @method Ticket[] all()
     */
    class _IH_Ticket_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Ticket[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Ticket_QB whereId($value)
     * @method _IH_Ticket_QB whereSubject($value)
     * @method _IH_Ticket_QB wherePriority($value)
     * @method _IH_Ticket_QB whereUserId($value)
     * @method _IH_Ticket_QB whereStatus($value)
     * @method _IH_Ticket_QB whereCreatedAt($value)
     * @method _IH_Ticket_QB whereUpdatedAt($value)
     * @method Ticket baseSole(array|string $columns = ['*'])
     * @method Ticket create(array $attributes = [])
     * @method _IH_Ticket_C|Ticket[] cursor()
     * @method Ticket|null|_IH_Ticket_C|Ticket[] find($id, array $columns = ['*'])
     * @method _IH_Ticket_C|Ticket[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Ticket|_IH_Ticket_C|Ticket[] findOrFail($id, array $columns = ['*'])
     * @method Ticket|_IH_Ticket_C|Ticket[] findOrNew($id, array $columns = ['*'])
     * @method Ticket first(array|string $columns = ['*'])
     * @method Ticket firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Ticket firstOrCreate(array $attributes = [], array $values = [])
     * @method Ticket firstOrFail(array $columns = ['*'])
     * @method Ticket firstOrNew(array $attributes = [], array $values = [])
     * @method Ticket firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Ticket forceCreate(array $attributes)
     * @method _IH_Ticket_C|Ticket[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Ticket_C|Ticket[] get(array|string $columns = ['*'])
     * @method Ticket getModel()
     * @method Ticket[] getModels(array|string $columns = ['*'])
     * @method _IH_Ticket_C|Ticket[] hydrate(array $items)
     * @method Ticket make(array $attributes = [])
     * @method Ticket newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Ticket[]|_IH_Ticket_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Ticket[]|_IH_Ticket_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Ticket sole(array|string $columns = ['*'])
     * @method Ticket updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Ticket_QB extends _BaseBuilder {}

    /**
     * @method Transaction|null getOrPut($key, $value)
     * @method Transaction|$this shift(int $count = 1)
     * @method Transaction|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Transaction|$this pop(int $count = 1)
     * @method Transaction|null pull($key, $default = null)
     * @method Transaction|null last(callable $callback = null, $default = null)
     * @method Transaction|$this random(int|null $number = null)
     * @method Transaction|null sole($key = null, $operator = null, $value = null)
     * @method Transaction|null get($key, $default = null)
     * @method Transaction|null first(callable $callback = null, $default = null)
     * @method Transaction|null firstWhere(string $key, $operator = null, $value = null)
     * @method Transaction|null find($key, $default = null)
     * @method Transaction[] all()
     */
    class _IH_Transaction_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Transaction[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Transaction_QB whereId($value)
     * @method _IH_Transaction_QB whereStatus($value)
     * @method _IH_Transaction_QB whereAmount($value)
     * @method _IH_Transaction_QB whereTransid($value)
     * @method _IH_Transaction_QB whereFactornumber($value)
     * @method _IH_Transaction_QB whereMobile($value)
     * @method _IH_Transaction_QB whereDescription($value)
     * @method _IH_Transaction_QB whereCardnumber($value)
     * @method _IH_Transaction_QB whereTracenumber($value)
     * @method _IH_Transaction_QB whereMessage($value)
     * @method _IH_Transaction_QB whereToken($value)
     * @method _IH_Transaction_QB whereTransactionableId($value)
     * @method _IH_Transaction_QB whereTransactionableType($value)
     * @method _IH_Transaction_QB whereUserId($value)
     * @method _IH_Transaction_QB whereCreatedAt($value)
     * @method _IH_Transaction_QB whereUpdatedAt($value)
     * @method _IH_Transaction_QB whereGatewayId($value)
     * @method Transaction baseSole(array|string $columns = ['*'])
     * @method Transaction create(array $attributes = [])
     * @method _IH_Transaction_C|Transaction[] cursor()
     * @method Transaction|null|_IH_Transaction_C|Transaction[] find($id, array $columns = ['*'])
     * @method _IH_Transaction_C|Transaction[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Transaction|_IH_Transaction_C|Transaction[] findOrFail($id, array $columns = ['*'])
     * @method Transaction|_IH_Transaction_C|Transaction[] findOrNew($id, array $columns = ['*'])
     * @method Transaction first(array|string $columns = ['*'])
     * @method Transaction firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Transaction firstOrCreate(array $attributes = [], array $values = [])
     * @method Transaction firstOrFail(array $columns = ['*'])
     * @method Transaction firstOrNew(array $attributes = [], array $values = [])
     * @method Transaction firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Transaction forceCreate(array $attributes)
     * @method _IH_Transaction_C|Transaction[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Transaction_C|Transaction[] get(array|string $columns = ['*'])
     * @method Transaction getModel()
     * @method Transaction[] getModels(array|string $columns = ['*'])
     * @method _IH_Transaction_C|Transaction[] hydrate(array $items)
     * @method Transaction make(array $attributes = [])
     * @method Transaction newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Transaction[]|_IH_Transaction_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Transaction[]|_IH_Transaction_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Transaction sole(array|string $columns = ['*'])
     * @method Transaction updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Transaction_QB filter($request)
     */
    class _IH_Transaction_QB extends _BaseBuilder {}

    /**
     * @method UserOption|null getOrPut($key, $value)
     * @method UserOption|$this shift(int $count = 1)
     * @method UserOption|null firstOrFail($key = null, $operator = null, $value = null)
     * @method UserOption|$this pop(int $count = 1)
     * @method UserOption|null pull($key, $default = null)
     * @method UserOption|null last(callable $callback = null, $default = null)
     * @method UserOption|$this random(int|null $number = null)
     * @method UserOption|null sole($key = null, $operator = null, $value = null)
     * @method UserOption|null get($key, $default = null)
     * @method UserOption|null first(callable $callback = null, $default = null)
     * @method UserOption|null firstWhere(string $key, $operator = null, $value = null)
     * @method UserOption|null find($key, $default = null)
     * @method UserOption[] all()
     */
    class _IH_UserOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserOption[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_UserOption_QB whereId($value)
     * @method _IH_UserOption_QB whereOptionName($value)
     * @method _IH_UserOption_QB whereOptionValue($value)
     * @method _IH_UserOption_QB whereUserId($value)
     * @method UserOption baseSole(array|string $columns = ['*'])
     * @method UserOption create(array $attributes = [])
     * @method _IH_UserOption_C|UserOption[] cursor()
     * @method UserOption|null|_IH_UserOption_C|UserOption[] find($id, array $columns = ['*'])
     * @method _IH_UserOption_C|UserOption[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method UserOption|_IH_UserOption_C|UserOption[] findOrFail($id, array $columns = ['*'])
     * @method UserOption|_IH_UserOption_C|UserOption[] findOrNew($id, array $columns = ['*'])
     * @method UserOption first(array|string $columns = ['*'])
     * @method UserOption firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method UserOption firstOrCreate(array $attributes = [], array $values = [])
     * @method UserOption firstOrFail(array $columns = ['*'])
     * @method UserOption firstOrNew(array $attributes = [], array $values = [])
     * @method UserOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserOption forceCreate(array $attributes)
     * @method _IH_UserOption_C|UserOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserOption_C|UserOption[] get(array|string $columns = ['*'])
     * @method UserOption getModel()
     * @method UserOption[] getModels(array|string $columns = ['*'])
     * @method _IH_UserOption_C|UserOption[] hydrate(array $items)
     * @method UserOption make(array $attributes = [])
     * @method UserOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserOption[]|_IH_UserOption_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|UserOption[]|_IH_UserOption_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserOption sole(array|string $columns = ['*'])
     * @method UserOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserOption_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random(int|null $number = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(string $key, $operator = null, $value = null)
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
     * @method _IH_User_QB whereFirstName($value)
     * @method _IH_User_QB whereLastName($value)
     * @method _IH_User_QB whereUsername($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereImage($value)
     * @method _IH_User_QB whereLevel($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereVerifiedAt($value)
     * @method _IH_User_QB whereForceToPasswordChange($value)
     * @method _IH_User_QB whereBio($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrFail($id, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
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
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     * @method _IH_User_QB customPaginate($request)
     * @method _IH_User_QB excludeCreator()
     * @method _IH_User_QB filter($request)
     */
    class _IH_User_QB extends _BaseBuilder {}

    /**
     * @method Viewer|null getOrPut($key, $value)
     * @method Viewer|$this shift(int $count = 1)
     * @method Viewer|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Viewer|$this pop(int $count = 1)
     * @method Viewer|null pull($key, $default = null)
     * @method Viewer|null last(callable $callback = null, $default = null)
     * @method Viewer|$this random(int|null $number = null)
     * @method Viewer|null sole($key = null, $operator = null, $value = null)
     * @method Viewer|null get($key, $default = null)
     * @method Viewer|null first(callable $callback = null, $default = null)
     * @method Viewer|null firstWhere(string $key, $operator = null, $value = null)
     * @method Viewer|null find($key, $default = null)
     * @method Viewer[] all()
     */
    class _IH_Viewer_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Viewer[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Viewer_QB whereId($value)
     * @method _IH_Viewer_QB whereIp($value)
     * @method _IH_Viewer_QB wherePath($value)
     * @method _IH_Viewer_QB whereAuth($value)
     * @method _IH_Viewer_QB whereOptions($value)
     * @method _IH_Viewer_QB whereCreatedAt($value)
     * @method _IH_Viewer_QB whereUpdatedAt($value)
     * @method _IH_Viewer_QB whereUserId($value)
     * @method Viewer baseSole(array|string $columns = ['*'])
     * @method Viewer create(array $attributes = [])
     * @method _IH_Viewer_C|Viewer[] cursor()
     * @method Viewer|null|_IH_Viewer_C|Viewer[] find($id, array $columns = ['*'])
     * @method _IH_Viewer_C|Viewer[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Viewer|_IH_Viewer_C|Viewer[] findOrFail($id, array $columns = ['*'])
     * @method Viewer|_IH_Viewer_C|Viewer[] findOrNew($id, array $columns = ['*'])
     * @method Viewer first(array|string $columns = ['*'])
     * @method Viewer firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Viewer firstOrCreate(array $attributes = [], array $values = [])
     * @method Viewer firstOrFail(array $columns = ['*'])
     * @method Viewer firstOrNew(array $attributes = [], array $values = [])
     * @method Viewer firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Viewer forceCreate(array $attributes)
     * @method _IH_Viewer_C|Viewer[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Viewer_C|Viewer[] get(array|string $columns = ['*'])
     * @method Viewer getModel()
     * @method Viewer[] getModels(array|string $columns = ['*'])
     * @method _IH_Viewer_C|Viewer[] hydrate(array $items)
     * @method Viewer make(array $attributes = [])
     * @method Viewer newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Viewer[]|_IH_Viewer_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Viewer[]|_IH_Viewer_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Viewer sole(array|string $columns = ['*'])
     * @method Viewer updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Viewer_QB extends _BaseBuilder {}

    /**
     * @method WalletHistory|null getOrPut($key, $value)
     * @method WalletHistory|$this shift(int $count = 1)
     * @method WalletHistory|null firstOrFail($key = null, $operator = null, $value = null)
     * @method WalletHistory|$this pop(int $count = 1)
     * @method WalletHistory|null pull($key, $default = null)
     * @method WalletHistory|null last(callable $callback = null, $default = null)
     * @method WalletHistory|$this random(int|null $number = null)
     * @method WalletHistory|null sole($key = null, $operator = null, $value = null)
     * @method WalletHistory|null get($key, $default = null)
     * @method WalletHistory|null first(callable $callback = null, $default = null)
     * @method WalletHistory|null firstWhere(string $key, $operator = null, $value = null)
     * @method WalletHistory|null find($key, $default = null)
     * @method WalletHistory[] all()
     */
    class _IH_WalletHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WalletHistory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_WalletHistory_QB whereId($value)
     * @method _IH_WalletHistory_QB whereWalletId($value)
     * @method _IH_WalletHistory_QB whereOrderId($value)
     * @method _IH_WalletHistory_QB whereType($value)
     * @method _IH_WalletHistory_QB whereSource($value)
     * @method _IH_WalletHistory_QB whereStatus($value)
     * @method _IH_WalletHistory_QB whereAmount($value)
     * @method _IH_WalletHistory_QB whereDescription($value)
     * @method _IH_WalletHistory_QB whereCreatedAt($value)
     * @method _IH_WalletHistory_QB whereUpdatedAt($value)
     * @method WalletHistory baseSole(array|string $columns = ['*'])
     * @method WalletHistory create(array $attributes = [])
     * @method _IH_WalletHistory_C|WalletHistory[] cursor()
     * @method WalletHistory|null|_IH_WalletHistory_C|WalletHistory[] find($id, array $columns = ['*'])
     * @method _IH_WalletHistory_C|WalletHistory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method WalletHistory|_IH_WalletHistory_C|WalletHistory[] findOrFail($id, array $columns = ['*'])
     * @method WalletHistory|_IH_WalletHistory_C|WalletHistory[] findOrNew($id, array $columns = ['*'])
     * @method WalletHistory first(array|string $columns = ['*'])
     * @method WalletHistory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method WalletHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method WalletHistory firstOrFail(array $columns = ['*'])
     * @method WalletHistory firstOrNew(array $attributes = [], array $values = [])
     * @method WalletHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WalletHistory forceCreate(array $attributes)
     * @method _IH_WalletHistory_C|WalletHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WalletHistory_C|WalletHistory[] get(array|string $columns = ['*'])
     * @method WalletHistory getModel()
     * @method WalletHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_WalletHistory_C|WalletHistory[] hydrate(array $items)
     * @method WalletHistory make(array $attributes = [])
     * @method WalletHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WalletHistory[]|_IH_WalletHistory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|WalletHistory[]|_IH_WalletHistory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WalletHistory sole(array|string $columns = ['*'])
     * @method WalletHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WalletHistory_QB extends _BaseBuilder {}

    /**
     * @method Wallet|null getOrPut($key, $value)
     * @method Wallet|$this shift(int $count = 1)
     * @method Wallet|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Wallet|$this pop(int $count = 1)
     * @method Wallet|null pull($key, $default = null)
     * @method Wallet|null last(callable $callback = null, $default = null)
     * @method Wallet|$this random(int|null $number = null)
     * @method Wallet|null sole($key = null, $operator = null, $value = null)
     * @method Wallet|null get($key, $default = null)
     * @method Wallet|null first(callable $callback = null, $default = null)
     * @method Wallet|null firstWhere(string $key, $operator = null, $value = null)
     * @method Wallet|null find($key, $default = null)
     * @method Wallet[] all()
     */
    class _IH_Wallet_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Wallet[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Wallet_QB whereId($value)
     * @method _IH_Wallet_QB whereUserId($value)
     * @method _IH_Wallet_QB whereBalance($value)
     * @method _IH_Wallet_QB whereIsActive($value)
     * @method _IH_Wallet_QB whereCreatedAt($value)
     * @method _IH_Wallet_QB whereUpdatedAt($value)
     * @method Wallet baseSole(array|string $columns = ['*'])
     * @method Wallet create(array $attributes = [])
     * @method _IH_Wallet_C|Wallet[] cursor()
     * @method Wallet|null|_IH_Wallet_C|Wallet[] find($id, array $columns = ['*'])
     * @method _IH_Wallet_C|Wallet[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Wallet|_IH_Wallet_C|Wallet[] findOrFail($id, array $columns = ['*'])
     * @method Wallet|_IH_Wallet_C|Wallet[] findOrNew($id, array $columns = ['*'])
     * @method Wallet first(array|string $columns = ['*'])
     * @method Wallet firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Wallet firstOrCreate(array $attributes = [], array $values = [])
     * @method Wallet firstOrFail(array $columns = ['*'])
     * @method Wallet firstOrNew(array $attributes = [], array $values = [])
     * @method Wallet firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Wallet forceCreate(array $attributes)
     * @method _IH_Wallet_C|Wallet[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Wallet_C|Wallet[] get(array|string $columns = ['*'])
     * @method Wallet getModel()
     * @method Wallet[] getModels(array|string $columns = ['*'])
     * @method _IH_Wallet_C|Wallet[] hydrate(array $items)
     * @method Wallet make(array $attributes = [])
     * @method Wallet newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Wallet[]|_IH_Wallet_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Wallet[]|_IH_Wallet_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Wallet sole(array|string $columns = ['*'])
     * @method Wallet updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Wallet_QB extends _BaseBuilder {}

    /**
     * @method WidgetOption|null getOrPut($key, $value)
     * @method WidgetOption|$this shift(int $count = 1)
     * @method WidgetOption|null firstOrFail($key = null, $operator = null, $value = null)
     * @method WidgetOption|$this pop(int $count = 1)
     * @method WidgetOption|null pull($key, $default = null)
     * @method WidgetOption|null last(callable $callback = null, $default = null)
     * @method WidgetOption|$this random(int|null $number = null)
     * @method WidgetOption|null sole($key = null, $operator = null, $value = null)
     * @method WidgetOption|null get($key, $default = null)
     * @method WidgetOption|null first(callable $callback = null, $default = null)
     * @method WidgetOption|null firstWhere(string $key, $operator = null, $value = null)
     * @method WidgetOption|null find($key, $default = null)
     * @method WidgetOption[] all()
     */
    class _IH_WidgetOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WidgetOption[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_WidgetOption_QB whereId($value)
     * @method _IH_WidgetOption_QB whereWidgetId($value)
     * @method _IH_WidgetOption_QB whereValue($value)
     * @method _IH_WidgetOption_QB whereCreatedAt($value)
     * @method _IH_WidgetOption_QB whereUpdatedAt($value)
     * @method WidgetOption baseSole(array|string $columns = ['*'])
     * @method WidgetOption create(array $attributes = [])
     * @method _IH_WidgetOption_C|WidgetOption[] cursor()
     * @method WidgetOption|null|_IH_WidgetOption_C|WidgetOption[] find($id, array $columns = ['*'])
     * @method _IH_WidgetOption_C|WidgetOption[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method WidgetOption|_IH_WidgetOption_C|WidgetOption[] findOrFail($id, array $columns = ['*'])
     * @method WidgetOption|_IH_WidgetOption_C|WidgetOption[] findOrNew($id, array $columns = ['*'])
     * @method WidgetOption first(array|string $columns = ['*'])
     * @method WidgetOption firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method WidgetOption firstOrCreate(array $attributes = [], array $values = [])
     * @method WidgetOption firstOrFail(array $columns = ['*'])
     * @method WidgetOption firstOrNew(array $attributes = [], array $values = [])
     * @method WidgetOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WidgetOption forceCreate(array $attributes)
     * @method _IH_WidgetOption_C|WidgetOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WidgetOption_C|WidgetOption[] get(array|string $columns = ['*'])
     * @method WidgetOption getModel()
     * @method WidgetOption[] getModels(array|string $columns = ['*'])
     * @method _IH_WidgetOption_C|WidgetOption[] hydrate(array $items)
     * @method WidgetOption make(array $attributes = [])
     * @method WidgetOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WidgetOption[]|_IH_WidgetOption_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|WidgetOption[]|_IH_WidgetOption_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WidgetOption sole(array|string $columns = ['*'])
     * @method WidgetOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WidgetOption_QB extends _BaseBuilder {}

    /**
     * @method Widget|null getOrPut($key, $value)
     * @method Widget|$this shift(int $count = 1)
     * @method Widget|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Widget|$this pop(int $count = 1)
     * @method Widget|null pull($key, $default = null)
     * @method Widget|null last(callable $callback = null, $default = null)
     * @method Widget|$this random(int|null $number = null)
     * @method Widget|null sole($key = null, $operator = null, $value = null)
     * @method Widget|null get($key, $default = null)
     * @method Widget|null first(callable $callback = null, $default = null)
     * @method Widget|null firstWhere(string $key, $operator = null, $value = null)
     * @method Widget|null find($key, $default = null)
     * @method Widget[] all()
     */
    class _IH_Widget_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Widget[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Widget_QB whereId($value)
     * @method _IH_Widget_QB whereTitle($value)
     * @method _IH_Widget_QB whereIsActive($value)
     * @method _IH_Widget_QB whereTheme($value)
     * @method _IH_Widget_QB whereOrdering($value)
     * @method _IH_Widget_QB whereCreatedAt($value)
     * @method _IH_Widget_QB whereUpdatedAt($value)
     * @method Widget baseSole(array|string $columns = ['*'])
     * @method Widget create(array $attributes = [])
     * @method _IH_Widget_C|Widget[] cursor()
     * @method Widget|null|_IH_Widget_C|Widget[] find($id, array $columns = ['*'])
     * @method _IH_Widget_C|Widget[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Widget|_IH_Widget_C|Widget[] findOrFail($id, array $columns = ['*'])
     * @method Widget|_IH_Widget_C|Widget[] findOrNew($id, array $columns = ['*'])
     * @method Widget first(array|string $columns = ['*'])
     * @method Widget firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Widget firstOrCreate(array $attributes = [], array $values = [])
     * @method Widget firstOrFail(array $columns = ['*'])
     * @method Widget firstOrNew(array $attributes = [], array $values = [])
     * @method Widget firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Widget forceCreate(array $attributes)
     * @method _IH_Widget_C|Widget[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Widget_C|Widget[] get(array|string $columns = ['*'])
     * @method Widget getModel()
     * @method Widget[] getModels(array|string $columns = ['*'])
     * @method _IH_Widget_C|Widget[] hydrate(array $items)
     * @method Widget make(array $attributes = [])
     * @method Widget newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Widget[]|_IH_Widget_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Widget[]|_IH_Widget_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Widget sole(array|string $columns = ['*'])
     * @method Widget updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Widget_QB extends _BaseBuilder {}
}
