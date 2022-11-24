<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class FieldEnumResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
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
     * @return string
     */
    function getValue(): string
    {
        /** @var string $value */
        $value = $this->_getField('value', false);

        return $value;
    }

    /**
     * @return string
     */
    function getLabel(): string
    {
        /** @var string $value */
        $value = $this->_getField('label', false);

        return $value;
    }

    /**
     * @return FieldResponse[]|null
     */
    function getFields(): ?array
    {
        /** @var FieldResponse[]|null $value */
        $value = $this->_getField('fields', true);

        return $value;
    }
}
