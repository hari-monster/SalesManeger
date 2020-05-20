<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\ProductImage
 *
 * @property int $id ID
 * @property int $product_id 商品情報ID
 * @property int $image_id 画像情報ID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductImage whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductImage whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductImage extends Model
{
    //
}
