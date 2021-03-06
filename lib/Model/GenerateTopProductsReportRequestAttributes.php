<?php
/**
 * GenerateTopProductsReportRequestAttributes
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
 * GenerateTopProductsReportRequestAttributes Class Doc Comment
 *
 * @category Class
 * @description This is the message defining the query for TopProducts report
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GenerateTopProductsReportRequestAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GenerateTopProductsReportRequestAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timezone' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'advertiser_id' => 'string',
        'limit' => 'int',
        'rank_products_by' => 'string',
        'dimensions' => 'string[]',
        'metrics' => 'string[]',
        'currency' => 'string',
        'brands' => 'string[]',
        'category_ids' => 'string[]',
        'campaign_ids' => 'string[]',
        'ad_set_ids' => 'string[]',
        'ad_set_status' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'timezone' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'advertiser_id' => null,
        'limit' => 'int32',
        'rank_products_by' => null,
        'dimensions' => null,
        'metrics' => null,
        'currency' => null,
        'brands' => null,
        'category_ids' => null,
        'campaign_ids' => null,
        'ad_set_ids' => null,
        'ad_set_status' => null
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
        'timezone' => 'timezone',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'advertiser_id' => 'advertiserId',
        'limit' => 'limit',
        'rank_products_by' => 'rankProductsBy',
        'dimensions' => 'dimensions',
        'metrics' => 'metrics',
        'currency' => 'currency',
        'brands' => 'brands',
        'category_ids' => 'categoryIds',
        'campaign_ids' => 'campaignIds',
        'ad_set_ids' => 'adSetIds',
        'ad_set_status' => 'adSetStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timezone' => 'setTimezone',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'advertiser_id' => 'setAdvertiserId',
        'limit' => 'setLimit',
        'rank_products_by' => 'setRankProductsBy',
        'dimensions' => 'setDimensions',
        'metrics' => 'setMetrics',
        'currency' => 'setCurrency',
        'brands' => 'setBrands',
        'category_ids' => 'setCategoryIds',
        'campaign_ids' => 'setCampaignIds',
        'ad_set_ids' => 'setAdSetIds',
        'ad_set_status' => 'setAdSetStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timezone' => 'getTimezone',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'advertiser_id' => 'getAdvertiserId',
        'limit' => 'getLimit',
        'rank_products_by' => 'getRankProductsBy',
        'dimensions' => 'getDimensions',
        'metrics' => 'getMetrics',
        'currency' => 'getCurrency',
        'brands' => 'getBrands',
        'category_ids' => 'getCategoryIds',
        'campaign_ids' => 'getCampaignIds',
        'ad_set_ids' => 'getAdSetIds',
        'ad_set_status' => 'getAdSetStatus'
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

    const RANK_PRODUCTS_BY_CLICKS = 'Clicks';
    const RANK_PRODUCTS_BY_DISPLAYS = 'Displays';
    const RANK_PRODUCTS_BY_SALES = 'Sales';
    const DIMENSIONS_CAMPAIGN = 'Campaign';
    const DIMENSIONS_CAMPAIGN_ID = 'CampaignId';
    const DIMENSIONS_AD_SET = 'AdSet';
    const DIMENSIONS_AD_SET_ID = 'AdSetId';
    const DIMENSIONS_PRODUCT = 'Product';
    const DIMENSIONS_PRODUCT_ID = 'ProductId';
    const DIMENSIONS_CATEGORY = 'Category';
    const DIMENSIONS_CATEGORY_ID = 'CategoryId';
    const DIMENSIONS_ADVERTISER = 'Advertiser';
    const DIMENSIONS_ADVERTISER_ID = 'AdvertiserId';
    const DIMENSIONS_PRODUCT_URL = 'ProductUrl';
    const DIMENSIONS_BRAND = 'Brand';
    const METRICS_CLICKS = 'Clicks';
    const METRICS_CTR = 'Ctr';
    const METRICS_VISITS = 'Visits';
    const METRICS_SALES = 'Sales';
    const METRICS_COST = 'Cost';
    const METRICS_REVENUE = 'Revenue';
    const METRICS_DISPLAYS = 'Displays';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRankProductsByAllowableValues()
    {
        return [
            self::RANK_PRODUCTS_BY_CLICKS,
            self::RANK_PRODUCTS_BY_DISPLAYS,
            self::RANK_PRODUCTS_BY_SALES,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDimensionsAllowableValues()
    {
        return [
            self::DIMENSIONS_CAMPAIGN,
            self::DIMENSIONS_CAMPAIGN_ID,
            self::DIMENSIONS_AD_SET,
            self::DIMENSIONS_AD_SET_ID,
            self::DIMENSIONS_PRODUCT,
            self::DIMENSIONS_PRODUCT_ID,
            self::DIMENSIONS_CATEGORY,
            self::DIMENSIONS_CATEGORY_ID,
            self::DIMENSIONS_ADVERTISER,
            self::DIMENSIONS_ADVERTISER_ID,
            self::DIMENSIONS_PRODUCT_URL,
            self::DIMENSIONS_BRAND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMetricsAllowableValues()
    {
        return [
            self::METRICS_CLICKS,
            self::METRICS_CTR,
            self::METRICS_VISITS,
            self::METRICS_SALES,
            self::METRICS_COST,
            self::METRICS_REVENUE,
            self::METRICS_DISPLAYS,
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
        $this->container['timezone'] = $data['timezone'] ?? 'UTC';
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['advertiser_id'] = $data['advertiser_id'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['rank_products_by'] = $data['rank_products_by'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['metrics'] = $data['metrics'] ?? null;
        $this->container['currency'] = $data['currency'] ?? 'EUR';
        $this->container['brands'] = $data['brands'] ?? null;
        $this->container['category_ids'] = $data['category_ids'] ?? null;
        $this->container['campaign_ids'] = $data['campaign_ids'] ?? null;
        $this->container['ad_set_ids'] = $data['ad_set_ids'] ?? null;
        $this->container['ad_set_status'] = $data['ad_set_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['advertiser_id'] === null) {
            $invalidProperties[] = "'advertiser_id' can't be null";
        }
        if ($this->container['rank_products_by'] === null) {
            $invalidProperties[] = "'rank_products_by' can't be null";
        }
        $allowedValues = $this->getRankProductsByAllowableValues();
        if (!is_null($this->container['rank_products_by']) && !in_array($this->container['rank_products_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rank_products_by', must be one of '%s'",
                $this->container['rank_products_by'],
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
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone The timezone used for the report. Timezone Database format (Tz).
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param string $advertiser_id The client id.
     *
     * @return self
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit The maximum number of top products returned.
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets rank_products_by
     *
     * @return string
     */
    public function getRankProductsBy()
    {
        return $this->container['rank_products_by'];
    }

    /**
     * Sets rank_products_by
     *
     * @param string $rank_products_by The metric used to filter the top products.
     *
     * @return self
     */
    public function setRankProductsBy($rank_products_by)
    {
        $allowedValues = $this->getRankProductsByAllowableValues();
        if (!in_array($rank_products_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rank_products_by', must be one of '%s'",
                    $rank_products_by,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rank_products_by'] = $rank_products_by;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return string[]|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param string[]|null $dimensions The dimensions for the report.
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $allowedValues = $this->getDimensionsAllowableValues();
        if (!is_null($dimensions) && array_diff($dimensions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dimensions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return string[]|null
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param string[]|null $metrics The list of metrics to report.
     *
     * @return self
     */
    public function setMetrics($metrics)
    {
        $allowedValues = $this->getMetricsAllowableValues();
        if (!is_null($metrics) && array_diff($metrics, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'metrics', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency used for the report. ISO 4217 code (three-letter capitals).
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets brands
     *
     * @return string[]|null
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     *
     * @param string[]|null $brands The list of brands names.
     *
     * @return self
     */
    public function setBrands($brands)
    {


        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets category_ids
     *
     * @return string[]|null
     */
    public function getCategoryIds()
    {
        return $this->container['category_ids'];
    }

    /**
     * Sets category_ids
     *
     * @param string[]|null $category_ids The list of category ids.
     *
     * @return self
     */
    public function setCategoryIds($category_ids)
    {


        $this->container['category_ids'] = $category_ids;

        return $this;
    }

    /**
     * Gets campaign_ids
     *
     * @return string[]|null
     */
    public function getCampaignIds()
    {
        return $this->container['campaign_ids'];
    }

    /**
     * Sets campaign_ids
     *
     * @param string[]|null $campaign_ids The list of campaign ids.
     *
     * @return self
     */
    public function setCampaignIds($campaign_ids)
    {


        $this->container['campaign_ids'] = $campaign_ids;

        return $this;
    }

    /**
     * Gets ad_set_ids
     *
     * @return string[]|null
     */
    public function getAdSetIds()
    {
        return $this->container['ad_set_ids'];
    }

    /**
     * Sets ad_set_ids
     *
     * @param string[]|null $ad_set_ids The list of adSet ids.
     *
     * @return self
     */
    public function setAdSetIds($ad_set_ids)
    {


        $this->container['ad_set_ids'] = $ad_set_ids;

        return $this;
    }

    /**
     * Gets ad_set_status
     *
     * @return string[]|null
     */
    public function getAdSetStatus()
    {
        return $this->container['ad_set_status'];
    }

    /**
     * Sets ad_set_status
     *
     * @param string[]|null $ad_set_status The list of adSet status (ex: 'Active','NotRunning').
     *
     * @return self
     */
    public function setAdSetStatus($ad_set_status)
    {


        $this->container['ad_set_status'] = $ad_set_status;

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


