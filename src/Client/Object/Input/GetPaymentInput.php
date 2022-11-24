<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class GetPaymentInput extends AbstractInput
{
    public function __construct(string $uuid)
    {
        $__data = [];
        $__data['uuid'] = $uuid;

        parent::__construct($__data);
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
}
