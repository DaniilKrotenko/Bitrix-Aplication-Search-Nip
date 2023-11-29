<?php
/**
 * Kurator
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
 * Kurator Class Doc Comment
 *
 * @category Class
 * @package  NIP24
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Kurator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Kurator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nazwisko' => '\NIP24\Model\NazwiskoOsoby',
'imiona' => '\NIP24\Model\ImionaOsoby',
'identyfikator' => '\NIP24\Model\IdentyfikatorOsoby',
'podstawa_powolania_zakres_dzialania' => 'string',
'data_powolania' => 'string',
'data_do_ktorej_ma_dzialac' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nazwisko' => null,
'imiona' => null,
'identyfikator' => null,
'podstawa_powolania_zakres_dzialania' => null,
'data_powolania' => null,
'data_do_ktorej_ma_dzialac' => null    ];

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
'podstawa_powolania_zakres_dzialania' => 'podstawaPowolaniaZakresDzialania',
'data_powolania' => 'dataPowolania',
'data_do_ktorej_ma_dzialac' => 'dataDoKtorejMaDzialac'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nazwisko' => 'setNazwisko',
'imiona' => 'setImiona',
'identyfikator' => 'setIdentyfikator',
'podstawa_powolania_zakres_dzialania' => 'setPodstawaPowolaniaZakresDzialania',
'data_powolania' => 'setDataPowolania',
'data_do_ktorej_ma_dzialac' => 'setDataDoKtorejMaDzialac'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nazwisko' => 'getNazwisko',
'imiona' => 'getImiona',
'identyfikator' => 'getIdentyfikator',
'podstawa_powolania_zakres_dzialania' => 'getPodstawaPowolaniaZakresDzialania',
'data_powolania' => 'getDataPowolania',
'data_do_ktorej_ma_dzialac' => 'getDataDoKtorejMaDzialac'    ];

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
        $this->container['podstawa_powolania_zakres_dzialania'] = isset($data['podstawa_powolania_zakres_dzialania']) ? $data['podstawa_powolania_zakres_dzialania'] : null;
        $this->container['data_powolania'] = isset($data['data_powolania']) ? $data['data_powolania'] : null;
        $this->container['data_do_ktorej_ma_dzialac'] = isset($data['data_do_ktorej_ma_dzialac']) ? $data['data_do_ktorej_ma_dzialac'] : null;
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
     * Gets podstawa_powolania_zakres_dzialania
     *
     * @return string
     */
    public function getPodstawaPowolaniaZakresDzialania()
    {
        return $this->container['podstawa_powolania_zakres_dzialania'];
    }

    /**
     * Sets podstawa_powolania_zakres_dzialania
     *
     * @param string $podstawa_powolania_zakres_dzialania podstawa_powolania_zakres_dzialania
     *
     * @return $this
     */
    public function setPodstawaPowolaniaZakresDzialania($podstawa_powolania_zakres_dzialania)
    {
        $this->container['podstawa_powolania_zakres_dzialania'] = $podstawa_powolania_zakres_dzialania;

        return $this;
    }

    /**
     * Gets data_powolania
     *
     * @return string
     */
    public function getDataPowolania()
    {
        return $this->container['data_powolania'];
    }

    /**
     * Sets data_powolania
     *
     * @param string $data_powolania data_powolania
     *
     * @return $this
     */
    public function setDataPowolania($data_powolania)
    {
        $this->container['data_powolania'] = $data_powolania;

        return $this;
    }

    /**
     * Gets data_do_ktorej_ma_dzialac
     *
     * @return string
     */
    public function getDataDoKtorejMaDzialac()
    {
        return $this->container['data_do_ktorej_ma_dzialac'];
    }

    /**
     * Sets data_do_ktorej_ma_dzialac
     *
     * @param string $data_do_ktorej_ma_dzialac data_do_ktorej_ma_dzialac
     *
     * @return $this
     */
    public function setDataDoKtorejMaDzialac($data_do_ktorej_ma_dzialac)
    {
        $this->container['data_do_ktorej_ma_dzialac'] = $data_do_ktorej_ma_dzialac;

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
