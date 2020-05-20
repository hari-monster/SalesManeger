<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\ProductVariationStock
 *
 * @property int $id ID
 * @property int $product_variation_id 商品バリエーションID
 * @property int $quantity 在庫数
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStock query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStock whereProductVariationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStock whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductVariationStock extends Model
{ }
