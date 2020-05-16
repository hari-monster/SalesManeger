<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;


/**
 * App\Model\Customer
 *
 * @property int $id ID
 * @property string $uuid UUID
 * @property string $name 名前
 * @property string $email メールアドレス
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Customer extends Model
{

    use SoftDeletes;
}
