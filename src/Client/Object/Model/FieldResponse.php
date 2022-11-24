<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client\Object\Model;

use Randock\Complipay\Api\Client\Object\Enum\FieldType;
use Randock\Graphql\Generator\Base\AbstractModel;

class FieldResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        if(isset($data['enum'])) {
        $array = [];
        foreach($data['enum'] as $item) {
            $array[] = FieldEnumResponse::fromArray($item);
        }
        $data['enum'] = $array;
        }

        return new self($data);
    }

    /**
     * @return string
     */
    function getIdentifier(): string
    {
        /** @var string $value */
        $value = $this->_getField('identifier', false);

        return $value;
    }

    /**
     * @return FieldType
     */
    function getType(): FieldType
    {
        $value = $this->_getField('type', false);
        if (null !== $value) {
            $value = new FieldType($value);
        }

        return $value;
    }

    /**
     * @return string
     */
    function getName(): string
    {
        /** @var string $value */
        $value = $this->_getField('name', false);

        return $value;
    }

    /**
     * @return FieldEnumResponse[]
     */
    function getEnum(): array
    {
        /** @var FieldEnumResponse[] $value */
        $value = $this->_getField('enum', false);

        return $value;
    }

    /**
     * @return string
     */
    function getDescription(): string
    {
        /** @var string $value */
        $value = $this->_getField('description', false);

        return $value;
    }
}
