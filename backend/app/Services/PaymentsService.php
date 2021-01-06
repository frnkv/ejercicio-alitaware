<?php


namespace App\Services;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Collection;

class PaymentsService
{
    /**
     * @param array $with
     * @return Collection
     */
    public function getAll(array $with): Collection
    {
        return Payment::query()
            ->with($with)
            ->get();
    }
}
