<?php

declare(strict_types=1);

namespace Randock\Complipay\Api\Client;

use Randock\Complipay\Api\Client\Object\Input\CreatePaymentInput;
use Randock\Complipay\Api\Client\Object\Input\GetPaymentInput;
use Randock\Complipay\Api\Client\Object\Input\InitializePaymentInput;
use Randock\Complipay\Api\Client\Object\Model\CreatePaymentResponse;
use Randock\Complipay\Api\Client\Object\Model\GetPaymentResponse;
use Randock\Complipay\Api\Client\Object\Model\InitializePaymentResponse;
use Randock\Graphql\Generator\Base\ApiClient as BaseApiClient;

class ApiClient extends BaseApiClient
{
    /**
     * @param array $fields
     * @param GetPaymentInput $input
     *
     * @return GetPaymentResponse
     */
    public function getPayment(array $fields, GetPaymentInput $input): GetPaymentResponse
    {
        $query = 'query getPayment($input: GetPaymentInput!){
            getPayment(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['getPayment'];

        return GetPaymentResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param InitializePaymentInput $input
     *
     * @return InitializePaymentResponse
     */
    public function initializePayment(array $fields, InitializePaymentInput $input): InitializePaymentResponse
    {
        $query = 'mutation initializePayment($input: InitializePaymentInput!){
            initializePayment(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['initializePayment'];

        return InitializePaymentResponse::fromArray($data);
    }

    /**
     * @param array $fields
     * @param CreatePaymentInput $input
     *
     * @return CreatePaymentResponse
     */
    public function createPayment(array $fields, CreatePaymentInput $input): CreatePaymentResponse
    {
        $query = 'mutation createPayment($input: CreatePaymentInput!){
            createPayment(input: $input) {
                %s
            }
        }';

        $response = $this->query(
            sprintf($query, $this->convertFields($fields)),
            ['input' => $this->convertInput($input)]
        );
        $data = $response->getData()['createPayment'];

        return CreatePaymentResponse::fromArray($data);
    }
}
