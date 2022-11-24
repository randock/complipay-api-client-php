<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class MoneyInput extends AbstractInput
{
    public function __construct(int $amount, string $currencyCode)
    {
        $__data = [];
        $__data['amount'] = $amount;
        $__data['currencyCode'] = $currencyCode;

        parent::__construct($__data);
    }

    /**
     * @return int
     */
    function getAmount(): int
    {
        /** @var int $value */
        $value = $this->_getField('amount', false);

        return $value;
    }

    /**
     * @return string
     */
    function getCurrencyCode(): string
    {
        /** @var string $value */
        $value = $this->_getField('currencyCode', false);

        return $value;
    }
}
