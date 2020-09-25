<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pdf
 *
 * @property int $id
 * @property string $name
 * @property int $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pdf extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pdfs';
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
    protected $fillable = ['id', 'name', 'size'];
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
        'name' => 'string',
    ];
}
