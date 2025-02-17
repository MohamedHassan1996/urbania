<?php

namespace App\Http\Controllers\Api\Private\Reservation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reservation\CreateReservationRequest;
use App\Http\Requests\Reservation\UpdateReservationRequest;
use App\Http\Resources\Reservation\ReservationResource;
use App\Services\Reservation\ReservationService;
use Illuminate\Support\Facades\DB;


class CustomerReservationController extends Controller
{
    protected $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        //$this->middleware('auth:api');
        $this->reservationService = $reservationService;
    }


    public function create(CreateReservationRequest $createReservationRequest){

        try {

            DB::beginTransaction();

            $reservation = $this->reservationService->createReservation($createReservationRequest->validated());

            DB::commit();

            return response()->json([
                'message' => 'schedule has been created !',
                'data' => new ReservationResource($reservation)
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

    }

    public function update(UpdateReservationRequest $updateReservationRequest)
    {
        try {

            DB::beginTransaction();

            $reservation = $this->reservationService->updateReservation($updateReservationRequest->validated());

            DB::commit();

            return response()->json([
                'message' => 'schedule has been updated !',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

}
