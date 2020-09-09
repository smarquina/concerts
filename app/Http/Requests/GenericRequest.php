<?php
/**
 * Created for concerts.
 * User: Sergio Martin Marquina
 * Email: smarquina@zenos.es
 * Date: 09/09/2020
 * Time: 14:02
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

abstract class GenericRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            //
        ];
    }

    /**
     * Get attributes.
     *
     * @return array
     */
    public static function getAttributes()
    {
        return (new static)->attributes();
    }
}
