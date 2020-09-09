<?php
/**
 * Created for concerts.
 * User: Sergio Martin Marquina
 * Email: smarquina@zenos.es
 * Date: 09/09/2020
 * Time: 13:36
 */

namespace App\Models;


/**
 * App\Models\Concert
 *
 * @property int                                                               $id
 * @property string                                                            $name
 * @property int|null                                                          $promotor_id
 * @property int|null                                                          $recinto_id
 * @property int                                                               $num_spectators
 * @property int                                                               $profitability
 * @property \Illuminate\Support\Carbon                                        $date
 * @property \Illuminate\Support\Carbon|null                                   $created_at
 * @property \Illuminate\Support\Carbon|null                                   $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Group[] $groups
 * @property-read int|null                                                     $groups_count
 * @property-read \App\Models\ConcertHall|null                                 $hall
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null                                                     $media_count
 * @property-read \App\Models\Promoter|null                                    $promoter
 * @method static \Illuminate\Database\Eloquent\Builder|Concert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Concert newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Concert query()
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereNumSpectators($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereProfitability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert wherePromotorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereRecintoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Concert extends BaseModel {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'conciertos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'promotor_id',
        'recinto_id',
        'num_spectators',
        'date',
    ];

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
        'date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'           => 'string',
        'promotor_id'    => 'integer',
        'recinto_id'     => 'integer',
        'num_spectators' => 'integer',
    ];

    /**
     * Associated media.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function media(): \Illuminate\Database\Eloquent\Relations\BelongsToMany {
        return $this->belongsToMany(Media::class, 'medios_conciertos', 'concierto_id', 'medio_id');
    }

    /**
     * Associated groups.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function groups() {
        return $this->belongsToMany(Group::class, 'grupos_conciertos', 'concierto_id', 'grupo_id');
    }

    /**
     * Related Concert hall.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hall() {
        return $this->belongsTo(ConcertHall::class, 'recinto_id');
    }

    /**
     * Related promoter.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function promoter() {
        return $this->belongsTo(Promoter::class, 'promotor_id');
    }
}
