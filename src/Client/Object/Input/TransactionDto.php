<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class TransactionDto extends AbstractInput
{
    public function __construct(MoneyInput $price, ?string $description)
    {
        $__data = [];
        $__data['price'] = $price;
        $__data['description'] = $description;

        parent::__construct($__data);
    }

    /**
     * @return MoneyInput
     */
    function getPrice(): MoneyInput
    {
        /** @var MoneyInput $value */
        $value = $this->_getField('price', false);

        return $value;
    }

    /**
     * @return string|null
     */
    function getDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('description', true);

        return $value;
    }
}
