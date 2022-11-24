<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class CustomerDto extends AbstractInput
{
    public function __construct(string $locale, ?object $taxIndicators)
    {
        $__data = [];
        $__data['locale'] = $locale;
        $__data['taxIndicators'] = $taxIndicators;

        parent::__construct($__data);
    }

    /**
     * @return string
     */
    function getLocale(): string
    {
        /** @var string $value */
        $value = $this->_getField('locale', false);

        return $value;
    }

    /**
     * @return object|null
     */
    function getTaxIndicators(): ?object
    {
        /** @var object|null $value */
        $value = $this->_getField('taxIndicators', true);
        if (null !== $value) {
            $value = json_decode(json_encode($value));
        }

        return $value;
    }
}
