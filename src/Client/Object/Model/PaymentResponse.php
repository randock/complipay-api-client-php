<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Model;

use Randock\Complipay\Api\Client\Object\Enum\PaymentMethod;
use Randock\Complipay\Api\Client\Object\Enum\PaymentStatus;
use Randock\Graphql\Generator\Base\AbstractModel;

class PaymentResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        return new self($data);
    }

    /**
     * @return string
     */
    function getUuid(): string
    {
        /** @var string $value */
        $value = $this->_getField('uuid', false);

        return $value;
    }

    /**
     * @return PaymentStatus
     */
    function getStatus(): PaymentStatus
    {
        $value = $this->_getField('status', false);
        if (null !== $value) {
            $value = new PaymentStatus($value);
        }

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
    function getMethodDetails(): ?object
    {
        /** @var object|null $value */
        $value = $this->_getField('methodDetails', true);
        if (null !== $value) {
            $value = json_decode(json_encode($value));
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
}
