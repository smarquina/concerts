<?php
/**
 * Created for concerts.
 * User: Sergio Martin Marquina
 * Email: smarquina@zenos.es
 * Date: 09/09/2020
 * Time: 14:23
 */

namespace App\Http\Services\Concert;


use App\Models\Concert;
use App\Models\Group;

class ConcertService {

    /**
     * Set profitability and send mail to promoter
     * @param Concert $concert
     *
     * @see https://laravel.com/docs/7.x/notifications
     */
    public function newConcertStored(Concert $concert) {
        $concert->profitability = $this->getProfitability($concert);
        $concert->save();

        //TODO: Notification
    }

    /**
     * Calculate profitability.
     *
     * @param Concert $concert
     * @return int
     */
    private function getProfitability(Concert $concert): int {
        //Inputs
        $attendeesInput = $concert->num_spectators * $concert->hall->ticket_price;

        //Outputs
        $groupMargin     = $attendeesInput * (int)config('concert.group_profit_margin') / 100;
        $accumulatedCost = 0;
        $concert->groups->each(static function (Group $group) use (&$accumulatedCost, $groupMargin) {
            $accumulatedCost += $group->cache + $groupMargin;
        });

        return $attendeesInput - $groupMargin - $concert->hall->rent_cost - $accumulatedCost;
    }
}
