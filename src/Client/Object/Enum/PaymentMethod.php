<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Enum;

use Randock\Graphql\Generator\Base\AbstractEnum;

class PaymentMethod extends AbstractEnum
{
    public const IDEAL = 'IDEAL';
    public const CREDITCARD = 'CREDITCARD';
    public const PAYPAL = 'PAYPAL';
    public const BANCONTACT = 'BANCONTACT';
    public const SEPA = 'SEPA';
    public const APPLE_PAY = 'APPLE_PAY';
    public const SOFORT = 'SOFORT';
    public const EPS = 'EPS';
    public const GIROPAY = 'GIROPAY';
    public const PRZELEWY24 = 'PRZELEWY24';
}
