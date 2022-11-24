<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Input;

use Randock\Complipay\Api\Client\Object\Enum\PaymentGateway;
use Randock\Complipay\Api\Client\Object\Enum\PaymentMethod;
use Randock\Graphql\Generator\Base\AbstractInput;

class CreatePaymentInput extends AbstractInput
{
    public function __construct(
        TransactionDto $transaction,
        CustomerDto $customer,
        ?PaymentMethod $method,
        ?object $methodData,
        ?PaymentGateway $gateway,
        ?string $reference,
        ?string $webhookUrl,
        ?string $redirectUrl
    ) {
        $__data = [];
        $__data['transaction'] = $transaction;
        $__data['customer'] = $customer;
        $__data['method'] = $method;
        $__data['methodData'] = $methodData;
        $__data['gateway'] = $gateway;
        $__data['reference'] = $reference;
        $__data['webhookUrl'] = $webhookUrl;
        $__data['redirectUrl'] = $redirectUrl;

        parent::__construct($__data);
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
     * @return PaymentMethod|null
     */
    function getMethod(): ?PaymentMethod
    {
        $value = $this->_getField('method', true);
        if (null !== $value) {
            $value = new PaymentMethod($value);
        }

        return $value;
    }

    /**
     * @return object|null
     */
    function getMethodData(): ?object
    {
        /** @var object|null $value */
        $value = $this->_getField('methodData', true);
        if (null !== $value) {
            $value = json_decode(json_encode($value));
        }

        return $value;
    }

    /**
     * @return PaymentGateway|null
     */
    function getGateway(): ?PaymentGateway
    {
        $value = $this->_getField('gateway', true);
        if (null !== $value) {
            $value = new PaymentGateway($value);
        }

        return $value;
    }

    /**
     * @return string|null
     */
    function getReference(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('reference', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getWebhookUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('webhookUrl', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getRedirectUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('redirectUrl', true);

        return $value;
    }
}
