<?php
namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\MerchantDirectPayment as AbstractMerchantDirectPayment;

class MerchantDirectPayment extends AbstractMerchantDirectPayment
{

    public static function getOutputKey()
    {
        return 'Ds_Merchant_DirectPayment';
    }
}
