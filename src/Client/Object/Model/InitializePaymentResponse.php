<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class InitializePaymentResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        if(isset($data['methods'])) {
        $array = [];
        foreach($data['methods'] as $item) {
            $array[] = PaymentMethodResponse::fromArray($item);
        }
        $data['methods'] = $array;
        }

        return new self($data);
    }

    /**
     * @return PaymentMethodResponse[]
     */
    function getMethods(): array
    {
        /** @var PaymentMethodResponse[] $value */
        $value = $this->_getField('methods', false);

        return $value;
    }
}
