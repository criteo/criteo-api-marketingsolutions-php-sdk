<?php
/**
 * AdaptiveAttributes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2023_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - MarketingSolutions
 *
 * The version of the OpenAPI document: 2023-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2023_07\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2023_07\ObjectSerializer;

/**
 * AdaptiveAttributes Class Doc Comment
 *
 * @category Class
 * @description The attributes specific to Adaptive creatives
 * @package  criteo\api\marketingsolutions\v2023_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdaptiveAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdaptiveAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'layouts' => 'string[]',
        'logos' => '\criteo\api\marketingsolutions\v2023_07\Model\ImageShape[]',
        'headline_text' => 'string',
        'headline_font' => 'string',
        'description_text' => 'string',
        'description_font' => 'string',
        'calls_to_action' => 'string[]',
        'colors' => '\criteo\api\marketingsolutions\v2023_07\Model\AdaptiveColors',
        'image_sets' => '\criteo\api\marketingsolutions\v2023_07\Model\ImageSet[]',
        'image_display' => 'string',
        'videos' => '\criteo\api\marketingsolutions\v2023_07\Model\VideoDetail[]',
        'landing_page_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'layouts' => null,
        'logos' => null,
        'headline_text' => null,
        'headline_font' => null,
        'description_text' => null,
        'description_font' => null,
        'calls_to_action' => null,
        'colors' => null,
        'image_sets' => null,
        'image_display' => null,
        'videos' => null,
        'landing_page_url' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'layouts' => false,
		'logos' => false,
		'headline_text' => false,
		'headline_font' => false,
		'description_text' => false,
		'description_font' => false,
		'calls_to_action' => false,
		'colors' => false,
		'image_sets' => true,
		'image_display' => true,
		'videos' => true,
		'landing_page_url' => false
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
        'layouts' => 'layouts',
        'logos' => 'logos',
        'headline_text' => 'headlineText',
        'headline_font' => 'headlineFont',
        'description_text' => 'descriptionText',
        'description_font' => 'descriptionFont',
        'calls_to_action' => 'callsToAction',
        'colors' => 'colors',
        'image_sets' => 'imageSets',
        'image_display' => 'imageDisplay',
        'videos' => 'videos',
        'landing_page_url' => 'landingPageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'layouts' => 'setLayouts',
        'logos' => 'setLogos',
        'headline_text' => 'setHeadlineText',
        'headline_font' => 'setHeadlineFont',
        'description_text' => 'setDescriptionText',
        'description_font' => 'setDescriptionFont',
        'calls_to_action' => 'setCallsToAction',
        'colors' => 'setColors',
        'image_sets' => 'setImageSets',
        'image_display' => 'setImageDisplay',
        'videos' => 'setVideos',
        'landing_page_url' => 'setLandingPageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'layouts' => 'getLayouts',
        'logos' => 'getLogos',
        'headline_text' => 'getHeadlineText',
        'headline_font' => 'getHeadlineFont',
        'description_text' => 'getDescriptionText',
        'description_font' => 'getDescriptionFont',
        'calls_to_action' => 'getCallsToAction',
        'colors' => 'getColors',
        'image_sets' => 'getImageSets',
        'image_display' => 'getImageDisplay',
        'videos' => 'getVideos',
        'landing_page_url' => 'getLandingPageUrl'
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

    public const LAYOUTS_EDITORIAL = 'Editorial';
    public const LAYOUTS_MONTAGE = 'Montage';
    public const LAYOUTS_IN_BANNER_VIDEO = 'InBannerVideo';
    public const IMAGE_DISPLAY_SHOW_FULL_IMAGE = 'ShowFullImage';
    public const IMAGE_DISPLAY_ZOOM_ON_IMAGE = 'ZoomOnImage';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLayoutsAllowableValues()
    {
        return [
            self::LAYOUTS_EDITORIAL,
            self::LAYOUTS_MONTAGE,
            self::LAYOUTS_IN_BANNER_VIDEO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageDisplayAllowableValues()
    {
        return [
            self::IMAGE_DISPLAY_SHOW_FULL_IMAGE,
            self::IMAGE_DISPLAY_ZOOM_ON_IMAGE,
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
        $this->setIfExists('layouts', $data ?? [], null);
        $this->setIfExists('logos', $data ?? [], null);
        $this->setIfExists('headline_text', $data ?? [], null);
        $this->setIfExists('headline_font', $data ?? [], null);
        $this->setIfExists('description_text', $data ?? [], null);
        $this->setIfExists('description_font', $data ?? [], null);
        $this->setIfExists('calls_to_action', $data ?? [], null);
        $this->setIfExists('colors', $data ?? [], null);
        $this->setIfExists('image_sets', $data ?? [], null);
        $this->setIfExists('image_display', $data ?? [], null);
        $this->setIfExists('videos', $data ?? [], null);
        $this->setIfExists('landing_page_url', $data ?? [], null);
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

        if ($this->container['layouts'] === null) {
            $invalidProperties[] = "'layouts' can't be null";
        }
        if ($this->container['logos'] === null) {
            $invalidProperties[] = "'logos' can't be null";
        }
        if ($this->container['headline_text'] === null) {
            $invalidProperties[] = "'headline_text' can't be null";
        }
        if ($this->container['headline_font'] === null) {
            $invalidProperties[] = "'headline_font' can't be null";
        }
        if ($this->container['description_text'] === null) {
            $invalidProperties[] = "'description_text' can't be null";
        }
        if ($this->container['description_font'] === null) {
            $invalidProperties[] = "'description_font' can't be null";
        }
        if ($this->container['calls_to_action'] === null) {
            $invalidProperties[] = "'calls_to_action' can't be null";
        }
        if ($this->container['colors'] === null) {
            $invalidProperties[] = "'colors' can't be null";
        }
        $allowedValues = $this->getImageDisplayAllowableValues();
        if (!is_null($this->container['image_display']) && !in_array($this->container['image_display'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'image_display', must be one of '%s'",
                $this->container['image_display'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['landing_page_url'] === null) {
            $invalidProperties[] = "'landing_page_url' can't be null";
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
     * Gets layouts
     *
     * @return string[]
     */
    public function getLayouts()
    {
        return $this->container['layouts'];
    }

    /**
     * Sets layouts
     *
     * @param string[] $layouts The Adaptive layouts that are enabled.  It can contain any of the following values: \"Editorial\", “Montage“, \"InBannerVideo\".
     *
     * @return self
     */
    public function setLayouts($layouts)
    {
        if (is_null($layouts)) {
            throw new \InvalidArgumentException('non-nullable layouts cannot be null');
        }
        $allowedValues = $this->getLayoutsAllowableValues();
        if (array_diff($layouts, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'layouts', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['layouts'] = $layouts;

        return $this;
    }

    /**
     * Gets logos
     *
     * @return \criteo\api\marketingsolutions\v2023_07\Model\ImageShape[]
     */
    public function getLogos()
    {
        return $this->container['logos'];
    }

    /**
     * Sets logos
     *
     * @param \criteo\api\marketingsolutions\v2023_07\Model\ImageShape[] $logos Logo images uploaded on demostatic.criteo.com when deploying and then static.criteo.net
     *
     * @return self
     */
    public function setLogos($logos)
    {
        if (is_null($logos)) {
            throw new \InvalidArgumentException('non-nullable logos cannot be null');
        }


        $this->container['logos'] = $logos;

        return $this;
    }

    /**
     * Gets headline_text
     *
     * @return string
     */
    public function getHeadlineText()
    {
        return $this->container['headline_text'];
    }

    /**
     * Sets headline_text
     *
     * @param string $headline_text The headline text of the banner
     *
     * @return self
     */
    public function setHeadlineText($headline_text)
    {
        if (is_null($headline_text)) {
            throw new \InvalidArgumentException('non-nullable headline_text cannot be null');
        }
        $this->container['headline_text'] = $headline_text;

        return $this;
    }

    /**
     * Gets headline_font
     *
     * @return string
     */
    public function getHeadlineFont()
    {
        return $this->container['headline_font'];
    }

    /**
     * Sets headline_font
     *
     * @param string $headline_font Font of the headline  Valid supported font like \"Arial\"
     *
     * @return self
     */
    public function setHeadlineFont($headline_font)
    {
        if (is_null($headline_font)) {
            throw new \InvalidArgumentException('non-nullable headline_font cannot be null');
        }
        $this->container['headline_font'] = $headline_font;

        return $this;
    }

    /**
     * Gets description_text
     *
     * @return string
     */
    public function getDescriptionText()
    {
        return $this->container['description_text'];
    }

    /**
     * Sets description_text
     *
     * @param string $description_text The description text of the banner
     *
     * @return self
     */
    public function setDescriptionText($description_text)
    {
        if (is_null($description_text)) {
            throw new \InvalidArgumentException('non-nullable description_text cannot be null');
        }
        $this->container['description_text'] = $description_text;

        return $this;
    }

    /**
     * Gets description_font
     *
     * @return string
     */
    public function getDescriptionFont()
    {
        return $this->container['description_font'];
    }

    /**
     * Sets description_font
     *
     * @param string $description_font Font of the description  Valid supported font like \"Arial\"
     *
     * @return self
     */
    public function setDescriptionFont($description_font)
    {
        if (is_null($description_font)) {
            throw new \InvalidArgumentException('non-nullable description_font cannot be null');
        }
        $this->container['description_font'] = $description_font;

        return $this;
    }

    /**
     * Gets calls_to_action
     *
     * @return string[]
     */
    public function getCallsToAction()
    {
        return $this->container['calls_to_action'];
    }

    /**
     * Sets calls_to_action
     *
     * @param string[] $calls_to_action A Call-to-Action (CTA) is an action-driven instruction to your audience intended to provoke an immediate  response, such as “Buy now” or “Go!”.
     *
     * @return self
     */
    public function setCallsToAction($calls_to_action)
    {
        if (is_null($calls_to_action)) {
            throw new \InvalidArgumentException('non-nullable calls_to_action cannot be null');
        }


        $this->container['calls_to_action'] = $calls_to_action;

        return $this;
    }

    /**
     * Gets colors
     *
     * @return \criteo\api\marketingsolutions\v2023_07\Model\AdaptiveColors
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     *
     * @param \criteo\api\marketingsolutions\v2023_07\Model\AdaptiveColors $colors colors
     *
     * @return self
     */
    public function setColors($colors)
    {
        if (is_null($colors)) {
            throw new \InvalidArgumentException('non-nullable colors cannot be null');
        }
        $this->container['colors'] = $colors;

        return $this;
    }

    /**
     * Gets image_sets
     *
     * @return \criteo\api\marketingsolutions\v2023_07\Model\ImageSet[]|null
     */
    public function getImageSets()
    {
        return $this->container['image_sets'];
    }

    /**
     * Sets image_sets
     *
     * @param \criteo\api\marketingsolutions\v2023_07\Model\ImageSet[]|null $image_sets Multiple image sets, each image set consists of multiple images and a headline text.
     *
     * @return self
     */
    public function setImageSets($image_sets)
    {
        if (is_null($image_sets)) {
            array_push($this->openAPINullablesSetToNull, 'image_sets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_sets', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['image_sets'] = $image_sets;

        return $this;
    }

    /**
     * Gets image_display
     *
     * @return string|null
     */
    public function getImageDisplay()
    {
        return $this->container['image_display'];
    }

    /**
     * Sets image_display
     *
     * @param string|null $image_display Value can be \"ShowFullImage\" or \"ZoomOnImage\". Choose whether your image set should fit inside the allocated  space (\"ShowFullImage\") or whether it should fill that space (\"ZoomOnImage\"). If you choose ZoomOnImage, there may be some  image cropping.
     *
     * @return self
     */
    public function setImageDisplay($image_display)
    {
        if (is_null($image_display)) {
            array_push($this->openAPINullablesSetToNull, 'image_display');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_display', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getImageDisplayAllowableValues();
        if (!is_null($image_display) && !in_array($image_display, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'image_display', must be one of '%s'",
                    $image_display,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['image_display'] = $image_display;

        return $this;
    }

    /**
     * Gets videos
     *
     * @return \criteo\api\marketingsolutions\v2023_07\Model\VideoDetail[]|null
     */
    public function getVideos()
    {
        return $this->container['videos'];
    }

    /**
     * Sets videos
     *
     * @param \criteo\api\marketingsolutions\v2023_07\Model\VideoDetail[]|null $videos Multiple videos potentially in different shapes.
     *
     * @return self
     */
    public function setVideos($videos)
    {
        if (is_null($videos)) {
            array_push($this->openAPINullablesSetToNull, 'videos');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('videos', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['videos'] = $videos;

        return $this;
    }

    /**
     * Gets landing_page_url
     *
     * @return string
     */
    public function getLandingPageUrl()
    {
        return $this->container['landing_page_url'];
    }

    /**
     * Sets landing_page_url
     *
     * @param string $landing_page_url Web redirection of the landing page url
     *
     * @return self
     */
    public function setLandingPageUrl($landing_page_url)
    {
        if (is_null($landing_page_url)) {
            throw new \InvalidArgumentException('non-nullable landing_page_url cannot be null');
        }
        $this->container['landing_page_url'] = $landing_page_url;

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


