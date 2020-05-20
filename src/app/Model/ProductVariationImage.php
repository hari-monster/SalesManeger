<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\ProductVariationImage
 *
 * @property int $id ID
 * @property int $product_variation_id 商品バリエーションID
 * @property int $image_id 画像情報ID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationImage whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationImage whereProductVariationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductVariationImage extends Model
{
    //
}
