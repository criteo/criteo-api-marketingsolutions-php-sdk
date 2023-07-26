<?php
/**
 * ReadAdSetBidding
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2023_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - MarketingSolutions
 *
 * The version of the OpenAPI document: 2023-04
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2023_04\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2023_04\ObjectSerializer;

/**
 * ReadAdSetBidding Class Doc Comment
 *
 * @category Class
 * @description ad set bidding read model
 * @package  criteo\api\marketingsolutions\v2023_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReadAdSetBidding implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReadAdSetBidding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bid_amount' => '\criteo\api\marketingsolutions\v2023_04\Model\NillableDecimal',
        'bid_strategy' => 'string',
        'cost_controller' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bid_amount' => null,
        'bid_strategy' => null,
        'cost_controller' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bid_amount' => false,
		'bid_strategy' => false,
		'cost_controller' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bid_amount' => 'bidAmount',
        'bid_strategy' => 'bidStrategy',
        'cost_controller' => 'costController'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bid_amount' => 'setBidAmount',
        'bid_strategy' => 'setBidStrategy',
        'cost_controller' => 'setCostController'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bid_amount' => 'getBidAmount',
        'bid_strategy' => 'getBidStrategy',
        'cost_controller' => 'getCostController'
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

    public const BID_STRATEGY_ACTIONS = 'actions';
    public const BID_STRATEGY_CLICKS = 'clicks';
    public const BID_STRATEGY_CONVERSIONS = 'conversions';
    public const BID_STRATEGY_DISPLAYS = 'displays';
    public const BID_STRATEGY_INSTALLS = 'installs';
    public const BID_STRATEGY_REVENUE = 'revenue';
    public const BID_STRATEGY_STORE_CONVERSIONS = 'storeConversions';
    public const BID_STRATEGY_VALUE = 'value';
    public const BID_STRATEGY_VIEWED_IMPRESSIONS = 'viewedImpressions';
    public const BID_STRATEGY_VISITS = 'Visits';
    public const BID_STRATEGY_COMPLETED_VIDEO_VIEWS = 'completedVideoViews';
    public const COST_CONTROLLER_COS = 'COS';
    public const COST_CONTROLLER_CPC = 'CPC';
    public const COST_CONTROLLER_CPI = 'CPI';
    public const COST_CONTROLLER_CPM = 'CPM';
    public const COST_CONTROLLER_CPO = 'CPO';
    public const COST_CONTROLLER_CPSV = 'CPSV';
    public const COST_CONTROLLER_CPV = 'CPV';
    public const COST_CONTROLLER_DAILY_BUDGET = 'dailyBudget';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBidStrategyAllowableValues()
    {
        return [
            self::BID_STRATEGY_ACTIONS,
            self::BID_STRATEGY_CLICKS,
            self::BID_STRATEGY_CONVERSIONS,
            self::BID_STRATEGY_DISPLAYS,
            self::BID_STRATEGY_INSTALLS,
            self::BID_STRATEGY_REVENUE,
            self::BID_STRATEGY_STORE_CONVERSIONS,
            self::BID_STRATEGY_VALUE,
            self::BID_STRATEGY_VIEWED_IMPRESSIONS,
            self::BID_STRATEGY_VISITS,
            self::BID_STRATEGY_COMPLETED_VIDEO_VIEWS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCostControllerAllowableValues()
    {
        return [
            self::COST_CONTROLLER_COS,
            self::COST_CONTROLLER_CPC,
            self::COST_CONTROLLER_CPI,
            self::COST_CONTROLLER_CPM,
            self::COST_CONTROLLER_CPO,
            self::COST_CONTROLLER_CPSV,
            self::COST_CONTROLLER_CPV,
            self::COST_CONTROLLER_DAILY_BUDGET,
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
        $this->setIfExists('bid_amount', $data ?? [], null);
        $this->setIfExists('bid_strategy', $data ?? [], null);
        $this->setIfExists('cost_controller', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBidStrategyAllowableValues();
        if (!is_null($this->container['bid_strategy']) && !in_array($this->container['bid_strategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'bid_strategy', must be one of '%s'",
                $this->container['bid_strategy'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCostControllerAllowableValues();
        if (!is_null($this->container['cost_controller']) && !in_array($this->container['cost_controller'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cost_controller', must be one of '%s'",
                $this->container['cost_controller'],
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
     * Gets bid_amount
     *
     * @return \criteo\api\marketingsolutions\v2023_04\Model\NillableDecimal|null
     */
    public function getBidAmount()
    {
        return $this->container['bid_amount'];
    }

    /**
     * Sets bid_amount
     *
     * @param \criteo\api\marketingsolutions\v2023_04\Model\NillableDecimal|null $bid_amount bid_amount
     *
     * @return self
     */
    public function setBidAmount($bid_amount)
    {
        if (is_null($bid_amount)) {
            throw new \InvalidArgumentException('non-nullable bid_amount cannot be null');
        }
        $this->container['bid_amount'] = $bid_amount;

        return $this;
    }

    /**
     * Gets bid_strategy
     *
     * @return string|null
     */
    public function getBidStrategy()
    {
        return $this->container['bid_strategy'];
    }

    /**
     * Sets bid_strategy
     *
     * @param string|null $bid_strategy The intended optimization for the Ad Set
     *
     * @return self
     */
    public function setBidStrategy($bid_strategy)
    {
        if (is_null($bid_strategy)) {
            throw new \InvalidArgumentException('non-nullable bid_strategy cannot be null');
        }
        $allowedValues = $this->getBidStrategyAllowableValues();
        if (!in_array($bid_strategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'bid_strategy', must be one of '%s'",
                    $bid_strategy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bid_strategy'] = $bid_strategy;

        return $this;
    }

    /**
     * Gets cost_controller
     *
     * @return string|null
     */
    public function getCostController()
    {
        return $this->container['cost_controller'];
    }

    /**
     * Sets cost_controller
     *
     * @param string|null $cost_controller How spend is controlled
     *
     * @return self
     */
    public function setCostController($cost_controller)
    {
        if (is_null($cost_controller)) {
            throw new \InvalidArgumentException('non-nullable cost_controller cannot be null');
        }
        $allowedValues = $this->getCostControllerAllowableValues();
        if (!in_array($cost_controller, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cost_controller', must be one of '%s'",
                    $cost_controller,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cost_controller'] = $cost_controller;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


