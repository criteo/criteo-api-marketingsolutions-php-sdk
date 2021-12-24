<?php
/**
 * CreativeWrite
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
 * CreativeWrite Class Doc Comment
 *
 * @category Class
 * @description Entity to create or update a creative
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreativeWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreativeWrite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'ad_set_id' => 'string',
        'description' => 'string',
        'type' => 'string',
        'advertiser_id' => 'string',
        'partner_id' => 'string',
        'image_write_attributes' => '\criteo\api\marketingsolutions\preview\Model\ImageWriteAttributes',
        'third_party_html_write_attributes' => '\criteo\api\marketingsolutions\preview\Model\ThirdPartyHtmlWriteAttributes',
        'dynamic_write_attributes' => '\criteo\api\marketingsolutions\preview\Model\DynamicWriteAttributes'
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
        'ad_set_id' => null,
        'description' => null,
        'type' => null,
        'advertiser_id' => null,
        'partner_id' => null,
        'image_write_attributes' => null,
        'third_party_html_write_attributes' => null,
        'dynamic_write_attributes' => null
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
        'ad_set_id' => 'adSetId',
        'description' => 'description',
        'type' => 'type',
        'advertiser_id' => 'advertiserId',
        'partner_id' => 'partnerId',
        'image_write_attributes' => 'imageWriteAttributes',
        'third_party_html_write_attributes' => 'thirdPartyHtmlWriteAttributes',
        'dynamic_write_attributes' => 'dynamicWriteAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'ad_set_id' => 'setAdSetId',
        'description' => 'setDescription',
        'type' => 'setType',
        'advertiser_id' => 'setAdvertiserId',
        'partner_id' => 'setPartnerId',
        'image_write_attributes' => 'setImageWriteAttributes',
        'third_party_html_write_attributes' => 'setThirdPartyHtmlWriteAttributes',
        'dynamic_write_attributes' => 'setDynamicWriteAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'ad_set_id' => 'getAdSetId',
        'description' => 'getDescription',
        'type' => 'getType',
        'advertiser_id' => 'getAdvertiserId',
        'partner_id' => 'getPartnerId',
        'image_write_attributes' => 'getImageWriteAttributes',
        'third_party_html_write_attributes' => 'getThirdPartyHtmlWriteAttributes',
        'dynamic_write_attributes' => 'getDynamicWriteAttributes'
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
        $this->container['ad_set_id'] = $data['ad_set_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['advertiser_id'] = $data['advertiser_id'] ?? null;
        $this->container['partner_id'] = $data['partner_id'] ?? null;
        $this->container['image_write_attributes'] = $data['image_write_attributes'] ?? null;
        $this->container['third_party_html_write_attributes'] = $data['third_party_html_write_attributes'] ?? null;
        $this->container['dynamic_write_attributes'] = $data['dynamic_write_attributes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['advertiser_id'] === null) {
            $invalidProperties[] = "'advertiser_id' can't be null";
        }
        if ($this->container['partner_id'] === null) {
            $invalidProperties[] = "'partner_id' can't be null";
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the creative
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ad_set_id
     *
     * @return string|null
     */
    public function getAdSetId()
    {
        return $this->container['ad_set_id'];
    }

    /**
     * Sets ad_set_id
     *
     * @param string|null $ad_set_id Ad set on which Creative will be applied
     *
     * @return self
     */
    public function setAdSetId($ad_set_id)
    {
        $this->container['ad_set_id'] = $ad_set_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the creative
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the creative  You can use \"Image\", \" ThirdPartyHtml\" or \"Dynamic\"
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets advertiser_id
     *
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param string $advertiser_id Advertiser linked to the Creative
     *
     * @return self
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return string
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param string $partner_id Partner linked to the Creative
     *
     * @return self
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets image_write_attributes
     *
     * @return \criteo\api\marketingsolutions\preview\Model\ImageWriteAttributes|null
     */
    public function getImageWriteAttributes()
    {
        return $this->container['image_write_attributes'];
    }

    /**
     * Sets image_write_attributes
     *
     * @param \criteo\api\marketingsolutions\preview\Model\ImageWriteAttributes|null $image_write_attributes image_write_attributes
     *
     * @return self
     */
    public function setImageWriteAttributes($image_write_attributes)
    {
        $this->container['image_write_attributes'] = $image_write_attributes;

        return $this;
    }

    /**
     * Gets third_party_html_write_attributes
     *
     * @return \criteo\api\marketingsolutions\preview\Model\ThirdPartyHtmlWriteAttributes|null
     */
    public function getThirdPartyHtmlWriteAttributes()
    {
        return $this->container['third_party_html_write_attributes'];
    }

    /**
     * Sets third_party_html_write_attributes
     *
     * @param \criteo\api\marketingsolutions\preview\Model\ThirdPartyHtmlWriteAttributes|null $third_party_html_write_attributes third_party_html_write_attributes
     *
     * @return self
     */
    public function setThirdPartyHtmlWriteAttributes($third_party_html_write_attributes)
    {
        $this->container['third_party_html_write_attributes'] = $third_party_html_write_attributes;

        return $this;
    }

    /**
     * Gets dynamic_write_attributes
     *
     * @return \criteo\api\marketingsolutions\preview\Model\DynamicWriteAttributes|null
     */
    public function getDynamicWriteAttributes()
    {
        return $this->container['dynamic_write_attributes'];
    }

    /**
     * Sets dynamic_write_attributes
     *
     * @param \criteo\api\marketingsolutions\preview\Model\DynamicWriteAttributes|null $dynamic_write_attributes dynamic_write_attributes
     *
     * @return self
     */
    public function setDynamicWriteAttributes($dynamic_write_attributes)
    {
        $this->container['dynamic_write_attributes'] = $dynamic_write_attributes;

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

