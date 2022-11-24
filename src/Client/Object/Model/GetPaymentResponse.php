<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class GetPaymentResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['payment'] = isset($data['payment']) ? PaymentResponse::fromArray($data['payment']) : null;

        return new self($data);
    }

    /**
     * @return PaymentResponse
     */
    function getPayment(): PaymentResponse
    {
        /** @var PaymentResponse $value */
        $value = $this->_getField('payment', false);

        return $value;
    }
}
