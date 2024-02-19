<?php

namespace Srmklive\PayPal\Traits\PayPalAPI;

trait PaymentCapturesV1
{
    /**
     * Show details for a captured payment.
     *
     * @param string $capture_id
     *
     * @throws \Throwable
     *
     * @return array|\Psr\Http\Message\StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/payments/v1/#capture_get
     */
    public function showCapturedPaymentV1Details(string $capture_id)
    {
        $this->apiEndPoint = "v1/payments/captures/{$capture_id}";

        $this->verb = 'get';

        return $this->doPayPalRequest();
    }
}
