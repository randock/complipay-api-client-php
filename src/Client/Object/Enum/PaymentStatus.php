<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Enum;

use Randock\Graphql\Generator\Base\AbstractEnum;

class PaymentStatus extends AbstractEnum
{
    public const OPEN = 'OPEN';
    public const CANCELED = 'CANCELED';
    public const PENDING = 'PENDING';
    public const AUTHORIZED = 'AUTHORIZED';
    public const EXPIRED = 'EXPIRED';
    public const FAILED = 'FAILED';
    public const PAID = 'PAID';
}
