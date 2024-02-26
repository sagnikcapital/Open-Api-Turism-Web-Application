<?php

namespace App\Services;
use App\Models\User;
use App\Models\Booking;
use App\Contracts\BookingContract;
use App\Services\PaymentService;

class BookingService {
  public $model;

  /**
   * Initiate all models
   *
   * @param Booking $model
   */
  public function __construct(Booking $model, PaymentService $payment)
  {
    $this->model = $model;
    $this->auth = service('authentication');
    $this->payment = $payment;
  }

  /**
   * List of Customer bookings
   *
   * @return void
   */
  public function myTrips()
  {
    return $this->auth->user()->bookings();
  }

  /**
   * Confirm a trip after payment
   *
   * @param [type] $request
   * @return void
   */
  public function confirmTrip($request)
  {
    s
  }

  /**
   * Cancel the trip and refund
   *
   * @param [type] $request
   * @return void
   */
  public function cancelTrip($request)
  {
    return $this->payment->refundInitiate($request, $request['invoiceNumber']);
  }

  /**
   * Fetch Booking details
   *
   * @return void
   */
  public function bookingDetails($bookingNumber)
  {
    return $this->model->where('booking_number', $bookingNumber)->first();
  }
}