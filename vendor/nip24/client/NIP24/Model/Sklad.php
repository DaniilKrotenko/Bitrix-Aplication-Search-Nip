<?php
/**
 * Sklad
 *
 * PHP version 5
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * NIP24 Service
 *
 * NIP24 Service
 *
 * OpenAPI spec version: 1.3.5
 * Contact: kontakt@nip24.pl
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NIP24\Model;

use \ArrayAccess;
use \NIP24\ObjectSerializer;

/**
 * Sklad Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sklad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Sklad';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nazwisko' => '\NIP24\Model\NazwiskoOsoby',
'imiona' => '\NIP24\Model\ImionaOsoby',
'identyfikator' => '\NIP24\Model\IdentyfikatorOsoby',
'funkcja_w_organie' => 'string',
'czy_zawieszona' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nazwisko' => null,
'imiona' => null,
'identyfikator' => null,
'funkcja_w_organie' => null,
'czy_zawieszona' => null    ];

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
        'nazwisko' => 'nazwisko',
'imiona' => 'imiona',
'identyfikator' => 'identyfikator',
'funkcja_w_organie' => 'funkcjaWOrganie',
'czy_zawieszona' => 'czyZawieszona'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nazwisko' => 'setNazwisko',
'imiona' => 'setImiona',
'identyfikator' => 'setIdentyfikator',
'funkcja_w_organie' => 'setFunkcjaWOrganie',
'czy_zawieszona' => 'setCzyZawieszona'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nazwisko' => 'getNazwisko',
'imiona' => 'getImiona',
'identyfikator' => 'getIdentyfikator',
'funkcja_w_organie' => 'getFunkcjaWOrganie',
'czy_zawieszona' => 'getCzyZawieszona'    ];

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
        $this->container['nazwisko'] = isset($data['nazwisko']) ? $data['nazwisko'] : null;
        $this->container['imiona'] = isset($data['imiona']) ? $data['imiona'] : null;
        $this->container['identyfikator'] = isset($data['identyfikator']) ? $data['identyfikator'] : null;
        $this->container['funkcja_w_organie'] = isset($data['funkcja_w_organie']) ? $data['funkcja_w_organie'] : null;
        $this->container['czy_zawieszona'] = isset($data['czy_zawieszona']) ? $data['czy_zawieszona'] : null;
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
     * Gets nazwisko
     *
     * @return \NIP24\Model\NazwiskoOsoby
     */
    public function getNazwisko()
    {
        return $this->container['nazwisko'];
    }

    /**
     * Sets nazwisko
     *
     * @param \NIP24\Model\NazwiskoOsoby $nazwisko nazwisko
     *
     * @return $this
     */
    public function setNazwisko($nazwisko)
    {
        $this->container['nazwisko'] = $nazwisko;

        return $this;
    }

    /**
     * Gets imiona
     *
     * @return \NIP24\Model\ImionaOsoby
     */
    public function getImiona()
    {
        return $this->container['imiona'];
    }

    /**
     * Sets imiona
     *
     * @param \NIP24\Model\ImionaOsoby $imiona imiona
     *
     * @return $this
     */
    public function setImiona($imiona)
    {
        $this->container['imiona'] = $imiona;

        return $this;
    }

    /**
     * Gets identyfikator
     *
     * @return \NIP24\Model\IdentyfikatorOsoby
     */
    public function getIdentyfikator()
    {
        return $this->container['identyfikator'];
    }

    /**
     * Sets identyfikator
     *
     * @param \NIP24\Model\IdentyfikatorOsoby $identyfikator identyfikator
     *
     * @return $this
     */
    public function setIdentyfikator($identyfikator)
    {
        $this->container['identyfikator'] = $identyfikator;

        return $this;
    }

    /**
     * Gets funkcja_w_organie
     *
     * @return string
     */
    public function getFunkcjaWOrganie()
    {
        return $this->container['funkcja_w_organie'];
    }

    /**
     * Sets funkcja_w_organie
     *
     * @param string $funkcja_w_organie funkcja_w_organie
     *
     * @return $this
     */
    public function setFunkcjaWOrganie($funkcja_w_organie)
    {
        $this->container['funkcja_w_organie'] = $funkcja_w_organie;

        return $this;
    }

    /**
     * Gets czy_zawieszona
     *
     * @return bool
     */
    public function getCzyZawieszona()
    {
        return $this->container['czy_zawieszona'];
    }

    /**
     * Sets czy_zawieszona
     *
     * @param bool $czy_zawieszona czy_zawieszona
     *
     * @return $this
     */
    public function setCzyZawieszona($czy_zawieszona)
    {
        $this->container['czy_zawieszona'] = $czy_zawieszona;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
