<?php
/**
 * CreativeWrite
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
 * The version of the OpenAPI document: preview
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
 * CreativeWrite Class Doc Comment
 *
 * @category Class
 * @description Entity to create or update a creative
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
        'description' => 'string',
        'format' => 'string',
        'dataset_id' => 'string',
        'image_write_attributes' => '\criteo\api\marketingsolutions\preview\Model\ImageWriteAttributes',
        'html_tag_write_attributes' => '\criteo\api\marketingsolutions\preview\Model\HtmlTagWriteAttributes',
        'dynamic_write_attributes' => '\criteo\api\marketingsolutions\preview\Model\DynamicWriteAttributes',
        'adaptive_write_attributes' => '\criteo\api\marketingsolutions\preview\Model\AdaptiveWriteAttributes'
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
        'description' => null,
        'format' => null,
        'dataset_id' => null,
        'image_write_attributes' => null,
        'html_tag_write_attributes' => null,
        'dynamic_write_attributes' => null,
        'adaptive_write_attributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'description' => true,
		'format' => false,
		'dataset_id' => false,
		'image_write_attributes' => false,
		'html_tag_write_attributes' => false,
		'dynamic_write_attributes' => false,
		'adaptive_write_attributes' => false
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
        'name' => 'name',
        'description' => 'description',
        'format' => 'format',
        'dataset_id' => 'datasetId',
        'image_write_attributes' => 'imageWriteAttributes',
        'html_tag_write_attributes' => 'htmlTagWriteAttributes',
        'dynamic_write_attributes' => 'dynamicWriteAttributes',
        'adaptive_write_attributes' => 'adaptiveWriteAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'format' => 'setFormat',
        'dataset_id' => 'setDatasetId',
        'image_write_attributes' => 'setImageWriteAttributes',
        'html_tag_write_attributes' => 'setHtmlTagWriteAttributes',
        'dynamic_write_attributes' => 'setDynamicWriteAttributes',
        'adaptive_write_attributes' => 'setAdaptiveWriteAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'format' => 'getFormat',
        'dataset_id' => 'getDatasetId',
        'image_write_attributes' => 'getImageWriteAttributes',
        'html_tag_write_attributes' => 'getHtmlTagWriteAttributes',
        'dynamic_write_attributes' => 'getDynamicWriteAttributes',
        'adaptive_write_attributes' => 'getAdaptiveWriteAttributes'
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

    public const FORMAT_IMAGE = 'Image';
    public const FORMAT_HTML_TAG = 'HtmlTag';
    public const FORMAT_DYNAMIC = 'Dynamic';
    public const FORMAT_ADAPTIVE = 'Adaptive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_IMAGE,
            self::FORMAT_HTML_TAG,
            self::FORMAT_DYNAMIC,
            self::FORMAT_ADAPTIVE,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('dataset_id', $data ?? [], null);
        $this->setIfExists('image_write_attributes', $data ?? [], null);
        $this->setIfExists('html_tag_write_attributes', $data ?? [], null);
        $this->setIfExists('dynamic_write_attributes', $data ?? [], null);
        $this->setIfExists('adaptive_write_attributes', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['dataset_id'] === null) {
            $invalidProperties[] = "'dataset_id' can't be null";
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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

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
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format The format of the creative  You can use \"Image\", \" HtmlTag\", \"Dynamic\" or \"Adaptive\"
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets dataset_id
     *
     * @return string
     */
    public function getDatasetId()
    {
        return $this->container['dataset_id'];
    }

    /**
     * Sets dataset_id
     *
     * @param string $dataset_id Dataset linked to the Creative
     *
     * @return self
     */
    public function setDatasetId($dataset_id)
    {
        if (is_null($dataset_id)) {
            throw new \InvalidArgumentException('non-nullable dataset_id cannot be null');
        }
        $this->container['dataset_id'] = $dataset_id;

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
        if (is_null($image_write_attributes)) {
            throw new \InvalidArgumentException('non-nullable image_write_attributes cannot be null');
        }
        $this->container['image_write_attributes'] = $image_write_attributes;

        return $this;
    }

    /**
     * Gets html_tag_write_attributes
     *
     * @return \criteo\api\marketingsolutions\preview\Model\HtmlTagWriteAttributes|null
     */
    public function getHtmlTagWriteAttributes()
    {
        return $this->container['html_tag_write_attributes'];
    }

    /**
     * Sets html_tag_write_attributes
     *
     * @param \criteo\api\marketingsolutions\preview\Model\HtmlTagWriteAttributes|null $html_tag_write_attributes html_tag_write_attributes
     *
     * @return self
     */
    public function setHtmlTagWriteAttributes($html_tag_write_attributes)
    {
        if (is_null($html_tag_write_attributes)) {
            throw new \InvalidArgumentException('non-nullable html_tag_write_attributes cannot be null');
        }
        $this->container['html_tag_write_attributes'] = $html_tag_write_attributes;

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
        if (is_null($dynamic_write_attributes)) {
            throw new \InvalidArgumentException('non-nullable dynamic_write_attributes cannot be null');
        }
        $this->container['dynamic_write_attributes'] = $dynamic_write_attributes;

        return $this;
    }

    /**
     * Gets adaptive_write_attributes
     *
     * @return \criteo\api\marketingsolutions\preview\Model\AdaptiveWriteAttributes|null
     */
    public function getAdaptiveWriteAttributes()
    {
        return $this->container['adaptive_write_attributes'];
    }

    /**
     * Sets adaptive_write_attributes
     *
     * @param \criteo\api\marketingsolutions\preview\Model\AdaptiveWriteAttributes|null $adaptive_write_attributes adaptive_write_attributes
     *
     * @return self
     */
    public function setAdaptiveWriteAttributes($adaptive_write_attributes)
    {
        if (is_null($adaptive_write_attributes)) {
            throw new \InvalidArgumentException('non-nullable adaptive_write_attributes cannot be null');
        }
        $this->container['adaptive_write_attributes'] = $adaptive_write_attributes;

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

