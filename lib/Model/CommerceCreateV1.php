<?php
/**
 * CommerceCreateV1
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: Preview
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\preview\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\preview\ObjectSerializer;

/**
 * CommerceCreateV1 Class Doc Comment
 *
 * @category Class
 * @description Settings to target users based on high shopping intents and demographics.
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CommerceCreateV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CommerceCreateV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'buying_power' => 'string[]',
        'gender' => 'string',
        'interest_ids' => 'string[]',
        'brand_ids' => 'string[]',
        'price_range' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'buying_power' => null,
        'gender' => null,
        'interest_ids' => null,
        'brand_ids' => null,
        'price_range' => null
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
        'country' => 'country',
        'buying_power' => 'buyingPower',
        'gender' => 'gender',
        'interest_ids' => 'interestIds',
        'brand_ids' => 'brandIds',
        'price_range' => 'priceRange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'buying_power' => 'setBuyingPower',
        'gender' => 'setGender',
        'interest_ids' => 'setInterestIds',
        'brand_ids' => 'setBrandIds',
        'price_range' => 'setPriceRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'buying_power' => 'getBuyingPower',
        'gender' => 'getGender',
        'interest_ids' => 'getInterestIds',
        'brand_ids' => 'getBrandIds',
        'price_range' => 'getPriceRange'
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

    const BUYING_POWER_LOW = 'Low';
    const BUYING_POWER_MEDIUM = 'Medium';
    const BUYING_POWER_HIGH = 'High';
    const BUYING_POWER_VERY_HIGH = 'VeryHigh';
    const GENDER_MALE = 'Male';
    const GENDER_FEMALE = 'Female';
    const PRICE_RANGE_LOW = 'Low';
    const PRICE_RANGE_MEDIUM = 'Medium';
    const PRICE_RANGE_HIGH = 'High';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBuyingPowerAllowableValues()
    {
        return [
            self::BUYING_POWER_LOW,
            self::BUYING_POWER_MEDIUM,
            self::BUYING_POWER_HIGH,
            self::BUYING_POWER_VERY_HIGH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceRangeAllowableValues()
    {
        return [
            self::PRICE_RANGE_LOW,
            self::PRICE_RANGE_MEDIUM,
            self::PRICE_RANGE_HIGH,
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
        $this->container['country'] = $data['country'] ?? null;
        $this->container['buying_power'] = $data['buying_power'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['interest_ids'] = $data['interest_ids'] ?? null;
        $this->container['brand_ids'] = $data['brand_ids'] ?? null;
        $this->container['price_range'] = $data['price_range'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets buying_power
     *
     * @return string[]|null
     */
    public function getBuyingPower()
    {
        return $this->container['buying_power'];
    }

    /**
     * Sets buying_power
     *
     * @param string[]|null $buying_power buying_power
     *
     * @return self
     */
    public function setBuyingPower($buying_power)
    {
        $allowedValues = $this->getBuyingPowerAllowableValues();
        if (!is_null($buying_power) && array_diff($buying_power, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'buying_power', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['buying_power'] = $buying_power;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gender', must be one of '%s'",
                    $gender,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets interest_ids
     *
     * @return string[]|null
     */
    public function getInterestIds()
    {
        return $this->container['interest_ids'];
    }

    /**
     * Sets interest_ids
     *
     * @param string[]|null $interest_ids interest_ids
     *
     * @return self
     */
    public function setInterestIds($interest_ids)
    {


        $this->container['interest_ids'] = $interest_ids;

        return $this;
    }

    /**
     * Gets brand_ids
     *
     * @return string[]|null
     */
    public function getBrandIds()
    {
        return $this->container['brand_ids'];
    }

    /**
     * Sets brand_ids
     *
     * @param string[]|null $brand_ids brand_ids
     *
     * @return self
     */
    public function setBrandIds($brand_ids)
    {


        $this->container['brand_ids'] = $brand_ids;

        return $this;
    }

    /**
     * Gets price_range
     *
     * @return string[]|null
     */
    public function getPriceRange()
    {
        return $this->container['price_range'];
    }

    /**
     * Sets price_range
     *
     * @param string[]|null $price_range price_range
     *
     * @return self
     */
    public function setPriceRange($price_range)
    {
        $allowedValues = $this->getPriceRangeAllowableValues();
        if (!is_null($price_range) && array_diff($price_range, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'price_range', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['price_range'] = $price_range;

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


