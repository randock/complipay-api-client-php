<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Model;

use Randock\Complipay\Api\Client\Object\Enum\PaymentGateway;
use Randock\Complipay\Api\Client\Object\Enum\PaymentMethod;
use Randock\Graphql\Generator\Base\AbstractModel;

class PaymentMethodResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        if(isset($data['issuers'])) {
        $array = [];
        foreach($data['issuers'] as $item) {
            $array[] = PaymentMethodIssuerResponse::fromArray($item);
        }
        $data['issuers'] = $array;
        }

        if(isset($data['fields'])) {
        $array = [];
        foreach($data['fields'] as $item) {
            $array[] = FieldResponse::fromArray($item);
        }
        $data['fields'] = $array;
        }

        return new self($data);
    }

    /**
     * @return PaymentMethod
     */
    function getMethod(): PaymentMethod
    {
        $value = $this->_getField('method', false);
        if (null !== $value) {
            $value = new PaymentMethod($value);
        }

        return $value;
    }

    /**
     * @return string
     */
    function getTitle(): string
    {
        /** @var string $value */
        $value = $this->_getField('title', false);

        return $value;
    }

    /**
     * @return PaymentGateway
     */
    function getGateway(): PaymentGateway
    {
        $value = $this->_getField('gateway', false);
        if (null !== $value) {
            $value = new PaymentGateway($value);
        }

        return $value;
    }

    /**
     * @return PaymentMethodIssuerResponse[]
     */
    function getIssuers(): array
    {
        /** @var PaymentMethodIssuerResponse[] $value */
        $value = $this->_getField('issuers', false);

        return $value;
    }

    /**
     * @return FieldResponse[]
     */
    function getFields(): array
    {
        /** @var FieldResponse[] $value */
        $value = $this->_getField('fields', false);

        return $value;
    }
}
