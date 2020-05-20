<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ProductTranslation
 *
 * @property int $id ID
 * @property int $product_id 商品ID
 * @property string $local 言語コード
 * @property string $name 商品名
 * @property string $description 商品説明
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereLocal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductTranslation extends Model
{
    //
}
