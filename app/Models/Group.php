<?php
/**
 * Created for concerts.
 * User: Sergio Martin Marquina
 * Email: smarquina@zenos.es
 * Date: 09/09/2020
 * Time: 13:04
 */

namespace App\Models;


/**
 * App\Models\Group
 *
 * @property int $id
 * @property string $name
 * @property int $cache
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCache($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel comboList()
 */
class Group extends BaseModel {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'grupos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cache',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'  => 'string',
        'cache' => 'integer',
    ];


}
