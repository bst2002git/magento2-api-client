<?php
/**
 * CheckoutPaymentInformationManagementV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Krak\MagentoApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Krak\MagentoApiClient\ApiException;
use Krak\MagentoApiClient\Configuration;
use Krak\MagentoApiClient\HeaderSelector;
use Krak\MagentoApiClient\ObjectSerializer;

/**
 * CheckoutPaymentInformationManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutPaymentInformationManagementV1Api
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation checkoutPaymentInformationManagementV1GetPaymentInformationGet
     *
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface
     */
    public function checkoutPaymentInformationManagementV1GetPaymentInformationGet()
    {
        list($response) = $this->checkoutPaymentInformationManagementV1GetPaymentInformationGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation checkoutPaymentInformationManagementV1GetPaymentInformationGetWithHttpInfo
     *
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutPaymentInformationManagementV1GetPaymentInformationGetWithHttpInfo()
    {
        $returnType = '\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface';
        $request = $this->checkoutPaymentInformationManagementV1GetPaymentInformationGetRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation checkoutPaymentInformationManagementV1GetPaymentInformationGetAsync
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutPaymentInformationManagementV1GetPaymentInformationGetAsync()
    {
        return $this->checkoutPaymentInformationManagementV1GetPaymentInformationGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkoutPaymentInformationManagementV1GetPaymentInformationGetAsyncWithHttpInfo
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutPaymentInformationManagementV1GetPaymentInformationGetAsyncWithHttpInfo()
    {
        $returnType = '\Krak\MagentoApiClient\Model\CheckoutDataPaymentDetailsInterface';
        $request = $this->checkoutPaymentInformationManagementV1GetPaymentInformationGetRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'checkoutPaymentInformationManagementV1GetPaymentInformationGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkoutPaymentInformationManagementV1GetPaymentInformationGetRequest()
    {

        $resourcePath = '/V1/carts/mine/payment-information';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
     * Operation checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {
        list($response) = $this->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostWithHttpInfo($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);
        return $response;
    }

    /**
     * Operation checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostWithHttpInfo
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostWithHttpInfo($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {
        $returnType = 'int';
        $request = $this->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostRequest($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsync
     *
     * 
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsync($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {
        return $this->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsyncWithHttpInfo($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostAsyncWithHttpInfo($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {
        $returnType = 'int';
        $request = $this->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostRequest($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost'
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostRequest($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
    {

        $resourcePath = '/V1/carts/mine/payment-information';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody)) {
            $_tempBody = $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
     * Operation checkoutPaymentInformationManagementV1SavePaymentInformationPost
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody checkoutPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationPost($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {
        list($response) = $this->checkoutPaymentInformationManagementV1SavePaymentInformationPostWithHttpInfo($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody);
        return $response;
    }

    /**
     * Operation checkoutPaymentInformationManagementV1SavePaymentInformationPostWithHttpInfo
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \Krak\MagentoApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationPostWithHttpInfo($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {
        $returnType = 'int';
        $request = $this->checkoutPaymentInformationManagementV1SavePaymentInformationPostRequest($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Krak\MagentoApiClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation checkoutPaymentInformationManagementV1SavePaymentInformationPostAsync
     *
     * 
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationPostAsync($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {
        return $this->checkoutPaymentInformationManagementV1SavePaymentInformationPostAsyncWithHttpInfo($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkoutPaymentInformationManagementV1SavePaymentInformationPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationPostAsyncWithHttpInfo($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {
        $returnType = 'int';
        $request = $this->checkoutPaymentInformationManagementV1SavePaymentInformationPostRequest($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'checkoutPaymentInformationManagementV1SavePaymentInformationPost'
     *
     * @param  \Krak\MagentoApiClient\Model\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkoutPaymentInformationManagementV1SavePaymentInformationPostRequest($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody = null)
    {

        $resourcePath = '/V1/carts/mine/set-payment-information';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody)) {
            $_tempBody = $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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