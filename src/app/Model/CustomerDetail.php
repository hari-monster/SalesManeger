<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Model\CustomerDetail
 *
 * @property int $customers_id 会員ID
 * @property string|null $name_kana 会員名カナ
 * @property string $birthday 誕生日
 * @property string $phone
 * @property int|null $gender 性別
 * @property string $login_ip ログイン時IP
 * @property Carbon $last_login_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Customer $customer
 */
class CustomerDetail extends Model
{
    //
    use SoftDeletes;

    /**
     * @var string
     */
    protected $primaryKey = 'customers_id';

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $dates = ['last_login_at'];

    /**
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
