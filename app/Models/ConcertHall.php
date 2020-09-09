<?php
/**
 * Created for concerts.
 * User: Sergio Martin Marquina
 * Email: smarquina@zenos.es
 * Date: 09/09/2020
 * Time: 13:24
 */

namespace App\Models;


/**
 * App\Models\ConcertHall
 *
 * @property int $id
 * @property string $name
 * @property int $rent_cost
 * @property int $ticket_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ConcertHall newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConcertHall newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConcertHall query()
 * @method static \Illuminate\Database\Eloquent\Builder|ConcertHall whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConcertHall whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConcertHall whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConcertHall whereRentCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConcertHall whereTicketPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConcertHall whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel comboList()
 */
class ConcertHall extends BaseModel {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recintos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'rent_cost',
        'ticket_price',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'         => 'string',
        'rent_cost'    => 'integer',
        'ticket_price' => 'integer',
    ];
}
