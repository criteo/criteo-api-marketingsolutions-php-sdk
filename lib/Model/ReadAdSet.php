<?php
/**
 * ReadAdSet
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2023_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2023-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2023_01\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2023_01\ObjectSerializer;

/**
 * ReadAdSet Class Doc Comment
 *
 * @category Class
 * @description ad set read model
 * @package  criteo\api\marketingsolutions\v2023_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReadAdSet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReadAdSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'advertiser_id' => 'string',
        'dataset_id' => 'string',
        'campaign_id' => 'string',
        'destination_environment' => 'string',
        'schedule' => '\criteo\api\marketingsolutions\v2023_01\Model\ReadAdSetSchedule',
        'bidding' => '\criteo\api\marketingsolutions\v2023_01\Model\ReadAdSetBidding',
        'targeting' => '\criteo\api\marketingsolutions\v2023_01\Model\AdSetTargeting',
        'budget' => '\criteo\api\marketingsolutions\v2023_01\Model\ReadAdSetBudget',
        'media_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'advertiser_id' => null,
        'dataset_id' => null,
        'campaign_id' => null,
        'destination_environment' => null,
        'schedule' => null,
        'bidding' => null,
        'targeting' => null,
        'budget' => null,
        'media_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'advertiser_id' => 'advertiserId',
        'dataset_id' => 'datasetId',
        'campaign_id' => 'campaignId',
        'destination_environment' => 'destinationEnvironment',
        'schedule' => 'schedule',
        'bidding' => 'bidding',
        'targeting' => 'targeting',
        'budget' => 'budget',
        'media_type' => 'mediaType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'advertiser_id' => 'setAdvertiserId',
        'dataset_id' => 'setDatasetId',
        'campaign_id' => 'setCampaignId',
        'destination_environment' => 'setDestinationEnvironment',
        'schedule' => 'setSchedule',
        'bidding' => 'setBidding',
        'targeting' => 'setTargeting',
        'budget' => 'setBudget',
        'media_type' => 'setMediaType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'advertiser_id' => 'getAdvertiserId',
        'dataset_id' => 'getDatasetId',
        'campaign_id' => 'getCampaignId',
        'destination_environment' => 'getDestinationEnvironment',
        'schedule' => 'getSchedule',
        'bidding' => 'getBidding',
        'targeting' => 'getTargeting',
        'budget' => 'getBudget',
        'media_type' => 'getMediaType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const DESTINATION_ENVIRONMENT_UNDEFINED = 'undefined';
    const DESTINATION_ENVIRONMENT_WEB = 'web';
    const DESTINATION_ENVIRONMENT_APP = 'app';
    const MEDIA_TYPE_DISPLAY = 'display';
    const MEDIA_TYPE_VIDEO = 'video';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationEnvironmentAllowableValues()
    {
        return [
            self::DESTINATION_ENVIRONMENT_UNDEFINED,
            self::DESTINATION_ENVIRONMENT_WEB,
            self::DESTINATION_ENVIRONMENT_APP,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMediaTypeAllowableValues()
    {
        return [
            self::MEDIA_TYPE_DISPLAY,
            self::MEDIA_TYPE_VIDEO,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = $data['name'] ?? null;
        $this->container['advertiser_id'] = $data['advertiser_id'] ?? null;
        $this->container['dataset_id'] = $data['dataset_id'] ?? null;
        $this->container['campaign_id'] = $data['campaign_id'] ?? null;
        $this->container['destination_environment'] = $data['destination_environment'] ?? null;
        $this->container['schedule'] = $data['schedule'] ?? null;
        $this->container['bidding'] = $data['bidding'] ?? null;
        $this->container['targeting'] = $data['targeting'] ?? null;
        $this->container['budget'] = $data['budget'] ?? null;
        $this->container['media_type'] = $data['media_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDestinationEnvironmentAllowableValues();
        if (!is_null($this->container['destination_environment']) && !in_array($this->container['destination_environment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'destination_environment', must be one of '%s'",
                $this->container['destination_environment'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($this->container['media_type']) && !in_array($this->container['media_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'media_type', must be one of '%s'",
                $this->container['media_type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the ad set
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets advertiser_id
     *
     * @return string|null
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param string|null $advertiser_id Advertiser id of the campaign this ad set belongs to
     *
     * @return self
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets dataset_id
     *
     * @return string|null
     */
    public function getDatasetId()
    {
        return $this->container['dataset_id'];
    }

    /**
     * Sets dataset_id
     *
     * @param string|null $dataset_id Dataset id of this ad set
     *
     * @return self
     */
    public function setDatasetId($dataset_id)
    {
        $this->container['dataset_id'] = $dataset_id;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string|null $campaign_id Campaign id this ad set belongs to
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets destination_environment
     *
     * @return string|null
     */
    public function getDestinationEnvironment()
    {
        return $this->container['destination_environment'];
    }

    /**
     * Sets destination_environment
     *
     * @param string|null $destination_environment The environment that an ad click will lead a user to
     *
     * @return self
     */
    public function setDestinationEnvironment($destination_environment)
    {
        $allowedValues = $this->getDestinationEnvironmentAllowableValues();
        if (!is_null($destination_environment) && !in_array($destination_environment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'destination_environment', must be one of '%s'",
                    $destination_environment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_environment'] = $destination_environment;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \criteo\api\marketingsolutions\v2023_01\Model\ReadAdSetSchedule|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \criteo\api\marketingsolutions\v2023_01\Model\ReadAdSetSchedule|null $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets bidding
     *
     * @return \criteo\api\marketingsolutions\v2023_01\Model\ReadAdSetBidding|null
     */
    public function getBidding()
    {
        return $this->container['bidding'];
    }

    /**
     * Sets bidding
     *
     * @param \criteo\api\marketingsolutions\v2023_01\Model\ReadAdSetBidding|null $bidding bidding
     *
     * @return self
     */
    public function setBidding($bidding)
    {
        $this->container['bidding'] = $bidding;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return \criteo\api\marketingsolutions\v2023_01\Model\AdSetTargeting|null
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \criteo\api\marketingsolutions\v2023_01\Model\AdSetTargeting|null $targeting targeting
     *
     * @return self
     */
    public function setTargeting($targeting)
    {
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return \criteo\api\marketingsolutions\v2023_01\Model\ReadAdSetBudget|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param \criteo\api\marketingsolutions\v2023_01\Model\ReadAdSetBudget|null $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets media_type
     *
     * @return string|null
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param string|null $media_type Media type for the ad set
     *
     * @return self
     */
    public function setMediaType($media_type)
    {
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($media_type) && !in_array($media_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'media_type', must be one of '%s'",
                    $media_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['media_type'] = $media_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


