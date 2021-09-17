<?php
/**
 * ExtReason
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eContract API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ExtReason Class Doc Comment
 *
 * @category Class
 * @description Sign reason
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtReason implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtReason';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signer_id' => 'string',
'reason_type' => 'string',
'keyword' => 'string',
'description' => 'string',
'page' => 'int',
'offset_x' => 'int',
'offset_y' => 'int',
'width' => 'int',
'height' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signer_id' => null,
'reason_type' => null,
'keyword' => null,
'description' => null,
'page' => 'int32',
'offset_x' => 'int32',
'offset_y' => 'int32',
'width' => 'int32',
'height' => 'int32'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'signer_id' => 'signerId',
'reason_type' => 'reasonType',
'keyword' => 'keyword',
'description' => 'description',
'page' => 'page',
'offset_x' => 'offsetX',
'offset_y' => 'offsetY',
'width' => 'width',
'height' => 'height'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signer_id' => 'setSignerId',
'reason_type' => 'setReasonType',
'keyword' => 'setKeyword',
'description' => 'setDescription',
'page' => 'setPage',
'offset_x' => 'setOffsetX',
'offset_y' => 'setOffsetY',
'width' => 'setWidth',
'height' => 'setHeight'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signer_id' => 'getSignerId',
'reason_type' => 'getReasonType',
'keyword' => 'getKeyword',
'description' => 'getDescription',
'page' => 'getPage',
'offset_x' => 'getOffsetX',
'offset_y' => 'getOffsetY',
'width' => 'getWidth',
'height' => 'getHeight'    ];

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
        return self::$swaggerModelName;
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
        $this->container['signer_id'] = isset($data['signer_id']) ? $data['signer_id'] : null;
        $this->container['reason_type'] = isset($data['reason_type']) ? $data['reason_type'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['offset_x'] = isset($data['offset_x']) ? $data['offset_x'] : null;
        $this->container['offset_y'] = isset($data['offset_y']) ? $data['offset_y'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets signer_id
     *
     * @return string
     */
    public function getSignerId()
    {
        return $this->container['signer_id'];
    }

    /**
     * Sets signer_id
     *
     * @param string $signer_id Reference signer id
     *
     * @return $this
     */
    public function setSignerId($signer_id)
    {
        $this->container['signer_id'] = $signer_id;

        return $this;
    }

    /**
     * Gets reason_type
     *
     * @return string
     */
    public function getReasonType()
    {
        return $this->container['reason_type'];
    }

    /**
     * Sets reason_type
     *
     * @param string $reason_type KEYWORD = \"K\" (Keyword)  FIELD = \"F\" (Keyword)  ABSOLUTE = \"A\" (Page, OffsetX, OffsetY, Width, Height)
     *
     * @return $this
     */
    public function setReasonType($reason_type)
    {
        $this->container['reason_type'] = $reason_type;

        return $this;
    }

    /**
     * Gets keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param string $keyword keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Text used for sign clause approval
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int $page Number of page of sgin reason
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets offset_x
     *
     * @return int
     */
    public function getOffsetX()
    {
        return $this->container['offset_x'];
    }

    /**
     * Sets offset_x
     *
     * @param int $offset_x Horizontal offset of sign reason from PDF origin
     *
     * @return $this
     */
    public function setOffsetX($offset_x)
    {
        $this->container['offset_x'] = $offset_x;

        return $this;
    }

    /**
     * Gets offset_y
     *
     * @return int
     */
    public function getOffsetY()
    {
        return $this->container['offset_y'];
    }

    /**
     * Sets offset_y
     *
     * @param int $offset_y Vertical offset of sign reason from PDF origin
     *
     * @return $this
     */
    public function setOffsetY($offset_y)
    {
        $this->container['offset_y'] = $offset_y;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Width of sign reason
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Height of sign reason
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}