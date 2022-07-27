<?php
namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\MerchantIdentifier as AbstractMerchantIdentifier;

class MerchantIdentifier extends AbstractMerchantIdentifier
{

    public static function getOutputKey()
    {
        return 'Ds_Merchant_Identifier';
    }
}
