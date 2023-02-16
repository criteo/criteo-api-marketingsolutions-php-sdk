<?php
namespace criteo\api\marketingsolutions\v2023_01;

use criteo\api\marketingsolutions\v2023_01\Api\OAuthApi;
use criteo\api\marketingsolutions\v2023_01\TokenAutoRefreshClient;
use criteo\api\marketingsolutions\v2023_01\ApiException;
use criteo\api\marketingsolutions\v2023_01\ObjectSerializer;
use Jchook\AssertThrows\AssertThrows;
use PHPUnit\Framework\TestCase;

class OAuthApiTest extends TestCase
{
    use AssertThrows;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @var int
     */
    private $applicationId;

    function __construct()
    {
        parent::__construct();
        
        $this->clientId = $_SERVER["TEST_CLIENT_ID"];
        $this->clientSecret = $_SERVER["TEST_CLIENT_SECRET"];
        $this->applicationId = $_SERVER["TEST_APPLICATION_ID"];
    }

    public function testSecretEnvironmentVariables()
    {
        $this->assertNotNull($this->clientId);
        $this->assertNotNull($this->clientSecret);
        $this->assertNotNull($this->applicationId);
    }

    public function testClientCredentialsGetTokenShouldSucceedWithValidCredentials()
    {
        // Arrange
        $api = new OAuthApi();

        // Act
        $response = $api->getTokenWithHttpInfo('client_credentials', $this->clientId, $this->clientSecret);

        // Assert
        $this->assertEquals(200, $response[1]);
        $this->assertNotNull($response[0]->getAccessToken());
    }

    public function testClientCredentialsGetTokenShouldFailWithInvalidCredentials()
    {
        $this->assertThrows(ApiException::class, 
            function() {
                // Arrange
                $api = new OAuthApi();

                // Act
                $api->getTokenWithHttpInfo('client_credentials', 'invalid-client-id', 'invalid-client-secret');
            },
            function($exception) {
                $data = ObjectSerializer::deserialize(
                    $exception->getResponseBody(),
                    'criteo\api\marketingsolutions\v2023_01\Model\OAuthErrorModel',
                    $exception->getResponseHeaders()
                );

                // Assert
                $this->assertEquals(401, $exception->getCode());
                $this->assertEquals('invalid_client', $data->getError());
            }
        );
    }
}
