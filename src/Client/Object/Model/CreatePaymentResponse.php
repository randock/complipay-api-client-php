<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class CreatePaymentResponse extends AbstractModel
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
     * @return string
     */
    function getRedirectUrl(): string
    {
        /** @var string $value */
        $value = $this->_getField('redirectUrl', false);

        return $value;
    }
}
