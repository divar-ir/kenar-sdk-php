<?php
/**
 * EventsApi
 * PHP version 8.1
 *
 * @category Class
 * @package  Divar\KenarApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kenar API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Divar\KenarApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Divar\KenarApiClient\ApiException;
use Divar\KenarApiClient\Configuration;
use Divar\KenarApiClient\FormDataProcessor;
use Divar\KenarApiClient\HeaderSelector;
use Divar\KenarApiClient\ObjectSerializer;

/**
 * EventsApi Class Doc Comment
 *
 * @category Class
 * @package  Divar\KenarApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EventsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'eventsRegisterEventSubscription' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation eventsRegisterEventSubscription
     *
     * اشتراک در رویداد
     *
     * @param  \Divar\KenarApiClient\Model\EventsRegisterEventSubscriptionRequest $events_register_event_subscription_request events_register_event_subscription_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['eventsRegisterEventSubscription'] to see the possible values for this operation
     *
     * @throws \Divar\KenarApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object|\Divar\KenarApiClient\Model\GooglerpcStatus
     */
    public function eventsRegisterEventSubscription($events_register_event_subscription_request, string $contentType = self::contentTypes['eventsRegisterEventSubscription'][0])
    {
        list($response) = $this->eventsRegisterEventSubscriptionWithHttpInfo($events_register_event_subscription_request, $contentType);
        return $response;
    }

    /**
     * Operation eventsRegisterEventSubscriptionWithHttpInfo
     *
     * اشتراک در رویداد
     *
     * @param  \Divar\KenarApiClient\Model\EventsRegisterEventSubscriptionRequest $events_register_event_subscription_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['eventsRegisterEventSubscription'] to see the possible values for this operation
     *
     * @throws \Divar\KenarApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object|\Divar\KenarApiClient\Model\GooglerpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function eventsRegisterEventSubscriptionWithHttpInfo($events_register_event_subscription_request, string $contentType = self::contentTypes['eventsRegisterEventSubscription'][0])
    {
        $request = $this->eventsRegisterEventSubscriptionRequest($events_register_event_subscription_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        'object',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\Divar\KenarApiClient\Model\GooglerpcStatus',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                'object',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Divar\KenarApiClient\Model\GooglerpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation eventsRegisterEventSubscriptionAsync
     *
     * اشتراک در رویداد
     *
     * @param  \Divar\KenarApiClient\Model\EventsRegisterEventSubscriptionRequest $events_register_event_subscription_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['eventsRegisterEventSubscription'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function eventsRegisterEventSubscriptionAsync($events_register_event_subscription_request, string $contentType = self::contentTypes['eventsRegisterEventSubscription'][0])
    {
        return $this->eventsRegisterEventSubscriptionAsyncWithHttpInfo($events_register_event_subscription_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation eventsRegisterEventSubscriptionAsyncWithHttpInfo
     *
     * اشتراک در رویداد
     *
     * @param  \Divar\KenarApiClient\Model\EventsRegisterEventSubscriptionRequest $events_register_event_subscription_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['eventsRegisterEventSubscription'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function eventsRegisterEventSubscriptionAsyncWithHttpInfo($events_register_event_subscription_request, string $contentType = self::contentTypes['eventsRegisterEventSubscription'][0])
    {
        $returnType = 'object';
        $request = $this->eventsRegisterEventSubscriptionRequest($events_register_event_subscription_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'eventsRegisterEventSubscription'
     *
     * @param  \Divar\KenarApiClient\Model\EventsRegisterEventSubscriptionRequest $events_register_event_subscription_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['eventsRegisterEventSubscription'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function eventsRegisterEventSubscriptionRequest($events_register_event_subscription_request, string $contentType = self::contentTypes['eventsRegisterEventSubscription'][0])
    {

        // verify the required parameter 'events_register_event_subscription_request' is set
        if ($events_register_event_subscription_request === null || (is_array($events_register_event_subscription_request) && count($events_register_event_subscription_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $events_register_event_subscription_request when calling eventsRegisterEventSubscription'
            );
        }


        $resourcePath = '/v1/open-platform/events/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($events_register_event_subscription_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($events_register_event_subscription_request));
            } else {
                $httpBody = $events_register_event_subscription_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
