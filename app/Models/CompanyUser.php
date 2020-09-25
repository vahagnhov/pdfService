<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CompanyUser
 *
 * @property int $id
 * @property int $company_id
 * @property int $user_id
 * @property string $associated_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereAssociatedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyUser whereUserId($value)
 * @mixin \Eloquent
 */
class CompanyUser extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'company_user';
    protected $primaryKey = 'id';
    public $incrementing = true;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'user_id', 'associated_date'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];
}
