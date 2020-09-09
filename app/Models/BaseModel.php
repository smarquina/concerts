<?php
/**
 * Created for concerts.
 * User: Sergio Martin Marquina
 * Email: smarquina@zenos.es
 * Date: 09/09/2020
 * Time: 13:05
 */

namespace App\Models;


use Illuminate\Database\Query\Builder;

/**
 * App\Models\BaseModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel comboList()
 */
class BaseModel extends \Eloquent {

    public $comboIdentifierField = 'name';


    /**
     * The attributes that should be mutated to dates.
     *
     * @deprecated Use the "casts" property
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Normal combo.
     *
     * @param Builder $query
     * @return mixed
     */
    public function scopeComboList($query) {
        return $query->get()->pluck($this->comboIdentifierField, 'id');
    }
}
