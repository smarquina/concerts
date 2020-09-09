<?php
/**
 * Created for concerts.
 * User: Sergio Martin Marquina
 * Email: smarquina@zenos.es
 * Date: 09/09/2020
 * Time: 14:00
 */

namespace App\Http\Controllers\Concert;


use App\Http\Controllers\Controller;
use App\Http\Enums\FlashStatus;
use App\Http\Requests\Concert\ConcertRequest;
use App\Http\Services\Concert\ConcertService;
use App\Models\Concert;
use Illuminate\View\View;

class ConcertController extends Controller {


    public function index() {
        return view('concert');
    }

    /**
     * @param ConcertRequest $request
     * @param ConcertService $service
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function store(ConcertRequest $request, ConcertService $service) {
        try {
            \DB::beginTransaction();

            $concert = new Concert($request->validated());
            $concert->groups()->sync($request->input('groups'));
            $concert->media()->sync($request->input('media'));
            $concert->save();

            $service->newConcertStored($concert);

            \DB::commit();
            return redirect()->back()->with(FlashStatus::SUCCESS, trans('general.reponse.correct'));

        } catch (\Exception $exception) {
            \DB::rollBack();
            \Log::error($exception->getMessage());

            $msg = config('app.debug') ? $exception->getMessage() : trans('general.reponse.error');
            return redirect()->back()->withInput()->with(FlashStatus::WARNING, $msg);
        }
    }
}
