<?php
/**
 * ExtSigner
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
 * ExtSigner Class Doc Comment
 *
 * @category Class
 * @description Signer personal data
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtSigner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtSigner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signer_type_code' => 'string',
'id' => 'string',
'surname' => 'string',
'name' => 'string',
'tax_code' => 'string',
'sex' => 'string',
'phone' => 'string',
'mail' => 'string',
'citizenship' => 'string',
'birth_date' => '\DateTime',
'birth_province' => 'string',
'birth_city' => 'string',
'birth_country' => 'string',
'residence_province' => 'string',
'residence_city' => 'string',
'residence_address' => 'string',
'residence_address_number' => 'string',
'residence_cap' => 'string',
'residence_country' => 'string',
'identification_doc_type' => 'string',
'identification_doc_number' => 'string',
'identification_doc_release_authority' => 'string',
'identification_doc_country' => 'string',
'identification_doc_city_release' => 'string',
'identification_doc_province_release' => 'string',
'identification_doc_release_date' => '\DateTime',
'identification_doc_expiration_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signer_type_code' => null,
'id' => null,
'surname' => null,
'name' => null,
'tax_code' => null,
'sex' => null,
'phone' => null,
'mail' => null,
'citizenship' => null,
'birth_date' => 'date-time',
'birth_province' => null,
'birth_city' => null,
'birth_country' => null,
'residence_province' => null,
'residence_city' => null,
'residence_address' => null,
'residence_address_number' => null,
'residence_cap' => null,
'residence_country' => null,
'identification_doc_type' => null,
'identification_doc_number' => null,
'identification_doc_release_authority' => null,
'identification_doc_country' => null,
'identification_doc_city_release' => null,
'identification_doc_province_release' => null,
'identification_doc_release_date' => 'date-time',
'identification_doc_expiration_date' => 'date-time'    ];

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
        'signer_type_code' => 'signerTypeCode',
'id' => 'id',
'surname' => 'surname',
'name' => 'name',
'tax_code' => 'taxCode',
'sex' => 'sex',
'phone' => 'phone',
'mail' => 'mail',
'citizenship' => 'citizenship',
'birth_date' => 'birthDate',
'birth_province' => 'birthProvince',
'birth_city' => 'birthCity',
'birth_country' => 'birthCountry',
'residence_province' => 'residenceProvince',
'residence_city' => 'residenceCity',
'residence_address' => 'residenceAddress',
'residence_address_number' => 'residenceAddressNumber',
'residence_cap' => 'residenceCap',
'residence_country' => 'residenceCountry',
'identification_doc_type' => 'identificationDocType',
'identification_doc_number' => 'identificationDocNumber',
'identification_doc_release_authority' => 'identificationDocReleaseAuthority',
'identification_doc_country' => 'identificationDocCountry',
'identification_doc_city_release' => 'identificationDocCityRelease',
'identification_doc_province_release' => 'identificationDocProvinceRelease',
'identification_doc_release_date' => 'identificationDocReleaseDate',
'identification_doc_expiration_date' => 'identificationDocExpirationDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signer_type_code' => 'setSignerTypeCode',
'id' => 'setId',
'surname' => 'setSurname',
'name' => 'setName',
'tax_code' => 'setTaxCode',
'sex' => 'setSex',
'phone' => 'setPhone',
'mail' => 'setMail',
'citizenship' => 'setCitizenship',
'birth_date' => 'setBirthDate',
'birth_province' => 'setBirthProvince',
'birth_city' => 'setBirthCity',
'birth_country' => 'setBirthCountry',
'residence_province' => 'setResidenceProvince',
'residence_city' => 'setResidenceCity',
'residence_address' => 'setResidenceAddress',
'residence_address_number' => 'setResidenceAddressNumber',
'residence_cap' => 'setResidenceCap',
'residence_country' => 'setResidenceCountry',
'identification_doc_type' => 'setIdentificationDocType',
'identification_doc_number' => 'setIdentificationDocNumber',
'identification_doc_release_authority' => 'setIdentificationDocReleaseAuthority',
'identification_doc_country' => 'setIdentificationDocCountry',
'identification_doc_city_release' => 'setIdentificationDocCityRelease',
'identification_doc_province_release' => 'setIdentificationDocProvinceRelease',
'identification_doc_release_date' => 'setIdentificationDocReleaseDate',
'identification_doc_expiration_date' => 'setIdentificationDocExpirationDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signer_type_code' => 'getSignerTypeCode',
'id' => 'getId',
'surname' => 'getSurname',
'name' => 'getName',
'tax_code' => 'getTaxCode',
'sex' => 'getSex',
'phone' => 'getPhone',
'mail' => 'getMail',
'citizenship' => 'getCitizenship',
'birth_date' => 'getBirthDate',
'birth_province' => 'getBirthProvince',
'birth_city' => 'getBirthCity',
'birth_country' => 'getBirthCountry',
'residence_province' => 'getResidenceProvince',
'residence_city' => 'getResidenceCity',
'residence_address' => 'getResidenceAddress',
'residence_address_number' => 'getResidenceAddressNumber',
'residence_cap' => 'getResidenceCap',
'residence_country' => 'getResidenceCountry',
'identification_doc_type' => 'getIdentificationDocType',
'identification_doc_number' => 'getIdentificationDocNumber',
'identification_doc_release_authority' => 'getIdentificationDocReleaseAuthority',
'identification_doc_country' => 'getIdentificationDocCountry',
'identification_doc_city_release' => 'getIdentificationDocCityRelease',
'identification_doc_province_release' => 'getIdentificationDocProvinceRelease',
'identification_doc_release_date' => 'getIdentificationDocReleaseDate',
'identification_doc_expiration_date' => 'getIdentificationDocExpirationDate'    ];

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
        $this->container['signer_type_code'] = isset($data['signer_type_code']) ? $data['signer_type_code'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['mail'] = isset($data['mail']) ? $data['mail'] : null;
        $this->container['citizenship'] = isset($data['citizenship']) ? $data['citizenship'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['birth_province'] = isset($data['birth_province']) ? $data['birth_province'] : null;
        $this->container['birth_city'] = isset($data['birth_city']) ? $data['birth_city'] : null;
        $this->container['birth_country'] = isset($data['birth_country']) ? $data['birth_country'] : null;
        $this->container['residence_province'] = isset($data['residence_province']) ? $data['residence_province'] : null;
        $this->container['residence_city'] = isset($data['residence_city']) ? $data['residence_city'] : null;
        $this->container['residence_address'] = isset($data['residence_address']) ? $data['residence_address'] : null;
        $this->container['residence_address_number'] = isset($data['residence_address_number']) ? $data['residence_address_number'] : null;
        $this->container['residence_cap'] = isset($data['residence_cap']) ? $data['residence_cap'] : null;
        $this->container['residence_country'] = isset($data['residence_country']) ? $data['residence_country'] : null;
        $this->container['identification_doc_type'] = isset($data['identification_doc_type']) ? $data['identification_doc_type'] : null;
        $this->container['identification_doc_number'] = isset($data['identification_doc_number']) ? $data['identification_doc_number'] : null;
        $this->container['identification_doc_release_authority'] = isset($data['identification_doc_release_authority']) ? $data['identification_doc_release_authority'] : null;
        $this->container['identification_doc_country'] = isset($data['identification_doc_country']) ? $data['identification_doc_country'] : null;
        $this->container['identification_doc_city_release'] = isset($data['identification_doc_city_release']) ? $data['identification_doc_city_release'] : null;
        $this->container['identification_doc_province_release'] = isset($data['identification_doc_province_release']) ? $data['identification_doc_province_release'] : null;
        $this->container['identification_doc_release_date'] = isset($data['identification_doc_release_date']) ? $data['identification_doc_release_date'] : null;
        $this->container['identification_doc_expiration_date'] = isset($data['identification_doc_expiration_date']) ? $data['identification_doc_expiration_date'] : null;
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
     * Gets signer_type_code
     *
     * @return string
     */
    public function getSignerTypeCode()
    {
        return $this->container['signer_type_code'];
    }

    /**
     * Sets signer_type_code
     *
     * @param string $signer_type_code Required, it identifies the type of signer. The list of possible values will be provided by Sixtema.
     *
     * @return $this
     */
    public function setSignerTypeCode($signer_type_code)
    {
        $this->container['signer_type_code'] = $signer_type_code;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname surname
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string $tax_code tax_code
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
     * Sets sex
     *
     * @param string $sex sex
     *
     * @return $this
     */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->container['mail'];
    }

    /**
     * Sets mail
     *
     * @param string $mail mail
     *
     * @return $this
     */
    public function setMail($mail)
    {
        $this->container['mail'] = $mail;

        return $this;
    }

    /**
     * Gets citizenship
     *
     * @return string
     */
    public function getCitizenship()
    {
        return $this->container['citizenship'];
    }

    /**
     * Sets citizenship
     *
     * @param string $citizenship citizenship
     *
     * @return $this
     */
    public function setCitizenship($citizenship)
    {
        $this->container['citizenship'] = $citizenship;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime $birth_date birth_date
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets birth_province
     *
     * @return string
     */
    public function getBirthProvince()
    {
        return $this->container['birth_province'];
    }

    /**
     * Sets birth_province
     *
     * @param string $birth_province birth_province
     *
     * @return $this
     */
    public function setBirthProvince($birth_province)
    {
        $this->container['birth_province'] = $birth_province;

        return $this;
    }

    /**
     * Gets birth_city
     *
     * @return string
     */
    public function getBirthCity()
    {
        return $this->container['birth_city'];
    }

    /**
     * Sets birth_city
     *
     * @param string $birth_city birth_city
     *
     * @return $this
     */
    public function setBirthCity($birth_city)
    {
        $this->container['birth_city'] = $birth_city;

        return $this;
    }

    /**
     * Gets birth_country
     *
     * @return string
     */
    public function getBirthCountry()
    {
        return $this->container['birth_country'];
    }

    /**
     * Sets birth_country
     *
     * @param string $birth_country birth_country
     *
     * @return $this
     */
    public function setBirthCountry($birth_country)
    {
        $this->container['birth_country'] = $birth_country;

        return $this;
    }

    /**
     * Gets residence_province
     *
     * @return string
     */
    public function getResidenceProvince()
    {
        return $this->container['residence_province'];
    }

    /**
     * Sets residence_province
     *
     * @param string $residence_province residence_province
     *
     * @return $this
     */
    public function setResidenceProvince($residence_province)
    {
        $this->container['residence_province'] = $residence_province;

        return $this;
    }

    /**
     * Gets residence_city
     *
     * @return string
     */
    public function getResidenceCity()
    {
        return $this->container['residence_city'];
    }

    /**
     * Sets residence_city
     *
     * @param string $residence_city residence_city
     *
     * @return $this
     */
    public function setResidenceCity($residence_city)
    {
        $this->container['residence_city'] = $residence_city;

        return $this;
    }

    /**
     * Gets residence_address
     *
     * @return string
     */
    public function getResidenceAddress()
    {
        return $this->container['residence_address'];
    }

    /**
     * Sets residence_address
     *
     * @param string $residence_address residence_address
     *
     * @return $this
     */
    public function setResidenceAddress($residence_address)
    {
        $this->container['residence_address'] = $residence_address;

        return $this;
    }

    /**
     * Gets residence_address_number
     *
     * @return string
     */
    public function getResidenceAddressNumber()
    {
        return $this->container['residence_address_number'];
    }

    /**
     * Sets residence_address_number
     *
     * @param string $residence_address_number residence_address_number
     *
     * @return $this
     */
    public function setResidenceAddressNumber($residence_address_number)
    {
        $this->container['residence_address_number'] = $residence_address_number;

        return $this;
    }

    /**
     * Gets residence_cap
     *
     * @return string
     */
    public function getResidenceCap()
    {
        return $this->container['residence_cap'];
    }

    /**
     * Sets residence_cap
     *
     * @param string $residence_cap residence_cap
     *
     * @return $this
     */
    public function setResidenceCap($residence_cap)
    {
        $this->container['residence_cap'] = $residence_cap;

        return $this;
    }

    /**
     * Gets residence_country
     *
     * @return string
     */
    public function getResidenceCountry()
    {
        return $this->container['residence_country'];
    }

    /**
     * Sets residence_country
     *
     * @param string $residence_country residence_country
     *
     * @return $this
     */
    public function setResidenceCountry($residence_country)
    {
        $this->container['residence_country'] = $residence_country;

        return $this;
    }

    /**
     * Gets identification_doc_type
     *
     * @return string
     */
    public function getIdentificationDocType()
    {
        return $this->container['identification_doc_type'];
    }

    /**
     * Sets identification_doc_type
     *
     * @param string $identification_doc_type identification_doc_type
     *
     * @return $this
     */
    public function setIdentificationDocType($identification_doc_type)
    {
        $this->container['identification_doc_type'] = $identification_doc_type;

        return $this;
    }

    /**
     * Gets identification_doc_number
     *
     * @return string
     */
    public function getIdentificationDocNumber()
    {
        return $this->container['identification_doc_number'];
    }

    /**
     * Sets identification_doc_number
     *
     * @param string $identification_doc_number identification_doc_number
     *
     * @return $this
     */
    public function setIdentificationDocNumber($identification_doc_number)
    {
        $this->container['identification_doc_number'] = $identification_doc_number;

        return $this;
    }

    /**
     * Gets identification_doc_release_authority
     *
     * @return string
     */
    public function getIdentificationDocReleaseAuthority()
    {
        return $this->container['identification_doc_release_authority'];
    }

    /**
     * Sets identification_doc_release_authority
     *
     * @param string $identification_doc_release_authority identification_doc_release_authority
     *
     * @return $this
     */
    public function setIdentificationDocReleaseAuthority($identification_doc_release_authority)
    {
        $this->container['identification_doc_release_authority'] = $identification_doc_release_authority;

        return $this;
    }

    /**
     * Gets identification_doc_country
     *
     * @return string
     */
    public function getIdentificationDocCountry()
    {
        return $this->container['identification_doc_country'];
    }

    /**
     * Sets identification_doc_country
     *
     * @param string $identification_doc_country identification_doc_country
     *
     * @return $this
     */
    public function setIdentificationDocCountry($identification_doc_country)
    {
        $this->container['identification_doc_country'] = $identification_doc_country;

        return $this;
    }

    /**
     * Gets identification_doc_city_release
     *
     * @return string
     */
    public function getIdentificationDocCityRelease()
    {
        return $this->container['identification_doc_city_release'];
    }

    /**
     * Sets identification_doc_city_release
     *
     * @param string $identification_doc_city_release identification_doc_city_release
     *
     * @return $this
     */
    public function setIdentificationDocCityRelease($identification_doc_city_release)
    {
        $this->container['identification_doc_city_release'] = $identification_doc_city_release;

        return $this;
    }

    /**
     * Gets identification_doc_province_release
     *
     * @return string
     */
    public function getIdentificationDocProvinceRelease()
    {
        return $this->container['identification_doc_province_release'];
    }

    /**
     * Sets identification_doc_province_release
     *
     * @param string $identification_doc_province_release identification_doc_province_release
     *
     * @return $this
     */
    public function setIdentificationDocProvinceRelease($identification_doc_province_release)
    {
        $this->container['identification_doc_province_release'] = $identification_doc_province_release;

        return $this;
    }

    /**
     * Gets identification_doc_release_date
     *
     * @return \DateTime
     */
    public function getIdentificationDocReleaseDate()
    {
        return $this->container['identification_doc_release_date'];
    }

    /**
     * Sets identification_doc_release_date
     *
     * @param \DateTime $identification_doc_release_date identification_doc_release_date
     *
     * @return $this
     */
    public function setIdentificationDocReleaseDate($identification_doc_release_date)
    {
        $this->container['identification_doc_release_date'] = $identification_doc_release_date;

        return $this;
    }

    /**
     * Gets identification_doc_expiration_date
     *
     * @return \DateTime
     */
    public function getIdentificationDocExpirationDate()
    {
        return $this->container['identification_doc_expiration_date'];
    }

    /**
     * Sets identification_doc_expiration_date
     *
     * @param \DateTime $identification_doc_expiration_date identification_doc_expiration_date
     *
     * @return $this
     */
    public function setIdentificationDocExpirationDate($identification_doc_expiration_date)
    {
        $this->container['identification_doc_expiration_date'] = $identification_doc_expiration_date;

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
