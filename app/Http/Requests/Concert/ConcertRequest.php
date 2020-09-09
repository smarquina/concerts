<?php
/**
 * Created for concerts.
 * User: Sergio Martin Marquina
 * Email: smarquina@zenos.es
 * Date: 09/09/2020
 * Time: 14:03
 */

namespace App\Http\Requests\Concert;


use App\Http\Requests\GenericRequest;

/**
 * Class ConcertRequest
 * @package App\Http\Requests\Concert
 */
class ConcertRequest extends GenericRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name'           => 'required|string|max:255|unique:conciertos',
            'promotor_id'    => 'required|exists:promotores,id',
            'recinto_id'     => 'required|exists:recintos,id',
            'num_spectators' => 'required|numeric|min:1|max:100000',
            'date'           => 'required|date',
            'groups'         => 'required|array',
            'groups.*'       => 'exists:grupos,id',
            'media'          => 'required|array',
            'media.*'        => 'exists:medios,id',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes() {
        return [
            'name'           => trans('concert.attributes.name'),
            'promotor_id'    => trans('concert.attributes.promotor_id'),
            'recinto_id'     => trans('concert.attributes.recinto_id'),
            'num_spectators' => trans('concert.attributes.num_spectators'),
            'date'           => trans('concert.attributes.date'),
            'groups'         => trans('concert.attributes.groups'),
            'media'          => trans('concert.attributes.media'),
        ];
    }
}
