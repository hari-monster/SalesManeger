<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Model\ProductVariation
 *
 * @property int $id ID
 * @property int $product_id 商品情報ID
 * @property string $sku_id コード
 * @property float $price 価格
 * @property string $released_at 公開開始日時
 * @property string $expired_at 公開終了日時
 * @property string $sale_start_at 販売開始日時
 * @property string $sale_end_at 販売終了日時
 * @property int $sale_lower_limit 最小注文数
 * @property int $sale_upper_limit 最大注文可能数
 * @property string $registered_at 商品登録日時
 * @property int $expected_shipping_id 配送予定日ID
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereExpectedShippingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereRegisteredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereReleasedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereSaleEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereSaleLowerLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereSaleStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereSaleUpperLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereSkuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductVariation extends Model
{
    use SoftDeletes;
}
