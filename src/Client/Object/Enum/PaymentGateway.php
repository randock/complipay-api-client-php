<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Enum;

use Randock\Graphql\Generator\Base\AbstractEnum;

class PaymentGateway extends AbstractEnum
{
    public const MOLLIE = 'MOLLIE';
    public const MULTISAFEPAY = 'MULTISAFEPAY';
    public const PAYPAL = 'PAYPAL';
    public const STRIPE = 'STRIPE';
    public const ADYEN = 'ADYEN';
}
