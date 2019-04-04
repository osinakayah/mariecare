<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unicodeveloper\Paystack\Paystack;

class PaymentController extends Controller
{
    private $paystack;
    public function __construct()
    {
        $this->paystack = new Paystack();
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return $this->paystack->getAuthorizationUrl()->redirectNow();
    }
}
