<?php
/**
 * AudienceApi
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2021_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2021-10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\v2021_10\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use criteo\api\retailmedia\v2021_10\ApiException;
use criteo\api\retailmedia\v2021_10\Configuration;
use criteo\api\retailmedia\v2021_10\HeaderSelector;
use criteo\api\retailmedia\v2021_10\ObjectSerializer;

/**
 * AudienceApi Class Doc Comment
 *
 * @category Class
 * @package  criteo\api\retailmedia\v2021_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AudienceApi
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

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
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
     * Operation createAudience
     *
     * @param  string $account_id ID of the account to which this audience belongs. (required)
     * @param  \criteo\api\retailmedia\v2021_10\Model\CreateAudienceRequest $create_audience_request create_audience_request (required)
     *
     * @throws \criteo\api\retailmedia\v2021_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \criteo\api\retailmedia\v2021_10\Model\CreateRetailMediaAudienceResponse
     */
    public function createAudience($account_id, $create_audience_request)
    {
        list($response) = $this->createAudienceWithHttpInfo($account_id, $create_audience_request);
        return $response;
    }

    /**
     * Operation createAudienceWithHttpInfo
     *
     * @param  string $account_id ID of the account to which this audience belongs. (required)
     * @param  \criteo\api\retailmedia\v2021_10\Model\CreateAudienceRequest $create_audience_request (required)
     *
     * @throws \criteo\api\retailmedia\v2021_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \criteo\api\retailmedia\v2021_10\Model\CreateRetailMediaAudienceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAudienceWithHttpInfo($account_id, $create_audience_request)
    {
        $request = $this->createAudienceRequest($account_id, $create_audience_request);

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
            }

            $statusCode = $response->getStatusCode();

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

            switch($statusCode) {
                case 201:
                    if ('\criteo\api\retailmedia\v2021_10\Model\CreateRetailMediaAudienceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\retailmedia\v2021_10\Model\CreateRetailMediaAudienceResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\criteo\api\retailmedia\v2021_10\Model\CreateRetailMediaAudienceResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\retailmedia\v2021_10\Model\CreateRetailMediaAudienceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createAudienceAsync
     *
     * @param  string $account_id ID of the account to which this audience belongs. (required)
     * @param  \criteo\api\retailmedia\v2021_10\Model\CreateAudienceRequest $create_audience_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAudienceAsync($account_id, $create_audience_request)
    {
        return $this->createAudienceAsyncWithHttpInfo($account_id, $create_audience_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createAudienceAsyncWithHttpInfo
     *
     * @param  string $account_id ID of the account to which this audience belongs. (required)
     * @param  \criteo\api\retailmedia\v2021_10\Model\CreateAudienceRequest $create_audience_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAudienceAsyncWithHttpInfo($account_id, $create_audience_request)
    {
        $returnType = '\criteo\api\retailmedia\v2021_10\Model\CreateRetailMediaAudienceResponse';
        $request = $this->createAudienceRequest($account_id, $create_audience_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'createAudience'
     *
     * @param  string $account_id ID of the account to which this audience belongs. (required)
     * @param  \criteo\api\retailmedia\v2021_10\Model\CreateAudienceRequest $create_audience_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createAudienceRequest($account_id, $create_audience_request)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling createAudience'
            );
        }
        // verify the required parameter 'create_audience_request' is set
        if ($create_audience_request === null || (is_array($create_audience_request) && count($create_audience_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_audience_request when calling createAudience'
            );
        }

        $resourcePath = '/2021-10/retail-media/accounts/{accountId}/audiences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($create_audience_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_audience_request));
            } else {
                $httpBody = $create_audience_request;
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAudiencesByAccountId
     *
     * @param  string $account_id External account ID which owns audience. (required)
     * @param  string[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed (optional)
     *
     * @throws \criteo\api\retailmedia\v2021_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \criteo\api\retailmedia\v2021_10\Model\GetPageOfAudiencesByAccountIdResponse
     */
    public function getAudiencesByAccountId($account_id, $limit_to_id = null, $page_size = null, $page_index = null)
    {
        list($response) = $this->getAudiencesByAccountIdWithHttpInfo($account_id, $limit_to_id, $page_size, $page_index);
        return $response;
    }

    /**
     * Operation getAudiencesByAccountIdWithHttpInfo
     *
     * @param  string $account_id External account ID which owns audience. (required)
     * @param  string[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed (optional)
     *
     * @throws \criteo\api\retailmedia\v2021_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \criteo\api\retailmedia\v2021_10\Model\GetPageOfAudiencesByAccountIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAudiencesByAccountIdWithHttpInfo($account_id, $limit_to_id = null, $page_size = null, $page_index = null)
    {
        $request = $this->getAudiencesByAccountIdRequest($account_id, $limit_to_id, $page_size, $page_index);

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
            }

            $statusCode = $response->getStatusCode();

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

            switch($statusCode) {
                case 200:
                    if ('\criteo\api\retailmedia\v2021_10\Model\GetPageOfAudiencesByAccountIdResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\retailmedia\v2021_10\Model\GetPageOfAudiencesByAccountIdResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\criteo\api\retailmedia\v2021_10\Model\GetPageOfAudiencesByAccountIdResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\retailmedia\v2021_10\Model\GetPageOfAudiencesByAccountIdResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAudiencesByAccountIdAsync
     *
     * @param  string $account_id External account ID which owns audience. (required)
     * @param  string[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAudiencesByAccountIdAsync($account_id, $limit_to_id = null, $page_size = null, $page_index = null)
    {
        return $this->getAudiencesByAccountIdAsyncWithHttpInfo($account_id, $limit_to_id, $page_size, $page_index)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAudiencesByAccountIdAsyncWithHttpInfo
     *
     * @param  string $account_id External account ID which owns audience. (required)
     * @param  string[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAudiencesByAccountIdAsyncWithHttpInfo($account_id, $limit_to_id = null, $page_size = null, $page_index = null)
    {
        $returnType = '\criteo\api\retailmedia\v2021_10\Model\GetPageOfAudiencesByAccountIdResponse';
        $request = $this->getAudiencesByAccountIdRequest($account_id, $limit_to_id, $page_size, $page_index);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'getAudiencesByAccountId'
     *
     * @param  string $account_id External account ID which owns audience. (required)
     * @param  string[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAudiencesByAccountIdRequest($account_id, $limit_to_id = null, $page_size = null, $page_index = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling getAudiencesByAccountId'
            );
        }

        $resourcePath = '/2021-10/retail-media/accounts/{accountId}/audiences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit_to_id !== null) {
            if('form' === 'form' && is_array($limit_to_id)) {
                foreach($limit_to_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limitToId'] = $limit_to_id;
            }
        }
        // query params
        if ($page_size !== null) {
            if('form' === 'form' && is_array($page_size)) {
                foreach($page_size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['pageSize'] = $page_size;
            }
        }
        // query params
        if ($page_index !== null) {
            if('form' === 'form' && is_array($page_index)) {
                foreach($page_index as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['pageIndex'] = $page_index;
            }
        }


        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
}