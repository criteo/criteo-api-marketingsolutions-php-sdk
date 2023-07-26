<?php
/**
 * ProspectingCreateV1
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - MarketingSolutions
 *
 * The version of the OpenAPI document: Preview
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
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
 * ProspectingCreateV1 Class Doc Comment
 *
 * @category Class
 * @description Settings to target prospecting users to website visitors.
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProspectingCreateV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProspectingCreateV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'days_since_last_visit_min' => 'int',
        'days_since_last_visit_max' => 'int',
        'users_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'days_since_last_visit_min' => 'int32',
        'days_since_last_visit_max' => 'int32',
        'users_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'days_since_last_visit_min' => false,
		'days_since_last_visit_max' => false,
		'users_type' => false
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
        'days_since_last_visit_min' => 'daysSinceLastVisitMin',
        'days_since_last_visit_max' => 'daysSinceLastVisitMax',
        'users_type' => 'usersType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'days_since_last_visit_min' => 'setDaysSinceLastVisitMin',
        'days_since_last_visit_max' => 'setDaysSinceLastVisitMax',
        'users_type' => 'setUsersType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'days_since_last_visit_min' => 'getDaysSinceLastVisitMin',
        'days_since_last_visit_max' => 'getDaysSinceLastVisitMax',
        'users_type' => 'getUsersType'
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

    public const USERS_TYPE_PROSPECTS = 'Prospects';
    public const USERS_TYPE_PROSPECTS_OR_NON_BUYERS = 'ProspectsOrNonBuyers';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUsersTypeAllowableValues()
    {
        return [
            self::USERS_TYPE_PROSPECTS,
            self::USERS_TYPE_PROSPECTS_OR_NON_BUYERS,
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
        $this->setIfExists('days_since_last_visit_min', $data ?? [], null);
        $this->setIfExists('days_since_last_visit_max', $data ?? [], null);
        $this->setIfExists('users_type', $data ?? [], null);
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

        if ($this->container['users_type'] === null) {
            $invalidProperties[] = "'users_type' can't be null";
        }
        $allowedValues = $this->getUsersTypeAllowableValues();
        if (!is_null($this->container['users_type']) && !in_array($this->container['users_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'users_type', must be one of '%s'",
                $this->container['users_type'],
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
     * Gets days_since_last_visit_min
     *
     * @return int|null
     */
    public function getDaysSinceLastVisitMin()
    {
        return $this->container['days_since_last_visit_min'];
    }

    /**
     * Sets days_since_last_visit_min
     *
     * @param int|null $days_since_last_visit_min When non buyers are included, include users who visited your website before this number of days
     *
     * @return self
     */
    public function setDaysSinceLastVisitMin($days_since_last_visit_min)
    {
        if (is_null($days_since_last_visit_min)) {
            throw new \InvalidArgumentException('non-nullable days_since_last_visit_min cannot be null');
        }
        $this->container['days_since_last_visit_min'] = $days_since_last_visit_min;

        return $this;
    }

    /**
     * Gets days_since_last_visit_max
     *
     * @return int|null
     */
    public function getDaysSinceLastVisitMax()
    {
        return $this->container['days_since_last_visit_max'];
    }

    /**
     * Sets days_since_last_visit_max
     *
     * @param int|null $days_since_last_visit_max When non buyers are included, include users who visited your website after this number of days
     *
     * @return self
     */
    public function setDaysSinceLastVisitMax($days_since_last_visit_max)
    {
        if (is_null($days_since_last_visit_max)) {
            throw new \InvalidArgumentException('non-nullable days_since_last_visit_max cannot be null');
        }
        $this->container['days_since_last_visit_max'] = $days_since_last_visit_max;

        return $this;
    }

    /**
     * Gets users_type
     *
     * @return string
     */
    public function getUsersType()
    {
        return $this->container['users_type'];
    }

    /**
     * Sets users_type
     *
     * @param string $users_type Type of users to target
     *
     * @return self
     */
    public function setUsersType($users_type)
    {
        if (is_null($users_type)) {
            throw new \InvalidArgumentException('non-nullable users_type cannot be null');
        }
        $allowedValues = $this->getUsersTypeAllowableValues();
        if (!in_array($users_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'users_type', must be one of '%s'",
                    $users_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['users_type'] = $users_type;

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


