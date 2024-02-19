<?php

namespace Srmklive\PayPal\Traits\PayPalAPI;

trait BillingAgreements
{
    /**
     * Show details for an existing billing agreement.
     *
     * @param string $agreement_id
     *
     * @throws \Throwable
     *
     * @return array|\Psr\Http\Message\StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/payments.billing-agreements/v1/#billing-agreements_get
     */
    public function showBillingAgreementDetails(string $agreement_id)
    {
        $this->apiEndPoint = "v1/payments/billing-agreements/{$agreement_id}";

        $this->verb = 'get';

        return $this->doPayPalRequest();
    }
}
