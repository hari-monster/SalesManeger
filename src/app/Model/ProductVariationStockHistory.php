<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\ProductVariationStockHistory
 *
 * @property int $id ID
 * @property int $product_variation_stock_id (履歴)商品バリエーション在庫ID
 * @property int $product_variation_id (履歴)商品バリエーションID
 * @property int $quantity (履歴)在庫数
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStockHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStockHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStockHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStockHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStockHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStockHistory whereProductVariationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStockHistory whereProductVariationStockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStockHistory whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductVariationStockHistory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductVariationStockHistory extends Model
{ }
