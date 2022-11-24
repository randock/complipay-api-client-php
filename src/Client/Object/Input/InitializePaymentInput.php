<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class InitializePaymentInput extends AbstractInput
{
    public function __construct(CustomerDto $customer, TransactionDto $transaction)
    {
        $__data = [];
        $__data['customer'] = $customer;
        $__data['transaction'] = $transaction;

        parent::__construct($__data);
    }

    /**
     * @return CustomerDto
     */
    function getCustomer(): CustomerDto
    {
        /** @var CustomerDto $value */
        $value = $this->_getField('customer', false);

        return $value;
    }

    /**
     * @return TransactionDto
     */
    function getTransaction(): TransactionDto
    {
        /** @var TransactionDto $value */
        $value = $this->_getField('transaction', false);

        return $value;
    }
}
