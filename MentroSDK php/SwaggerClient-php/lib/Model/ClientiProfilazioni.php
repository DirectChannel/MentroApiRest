<?php
/**
 * ClientiProfilazioni
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mentor.ApiRest
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
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
 * ClientiProfilazioni Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientiProfilazioni implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientiProfilazioni';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_cliente' => 'int',
        'codice' => 'string',
        'campagna' => 'string',
        'descrizione' => 'string',
        'dalla_data' => 'string',
        'alla_data' => 'string',
        'id_ranking' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_cliente' => 'int32',
        'codice' => null,
        'campagna' => null,
        'descrizione' => null,
        'dalla_data' => null,
        'alla_data' => null,
        'id_ranking' => 'int32'
    ];

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
        'id_cliente' => 'IdCliente',
        'codice' => 'Codice',
        'campagna' => 'Campagna',
        'descrizione' => 'Descrizione',
        'dalla_data' => 'DallaData',
        'alla_data' => 'AllaData',
        'id_ranking' => 'IdRanking'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_cliente' => 'setIdCliente',
        'codice' => 'setCodice',
        'campagna' => 'setCampagna',
        'descrizione' => 'setDescrizione',
        'dalla_data' => 'setDallaData',
        'alla_data' => 'setAllaData',
        'id_ranking' => 'setIdRanking'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_cliente' => 'getIdCliente',
        'codice' => 'getCodice',
        'campagna' => 'getCampagna',
        'descrizione' => 'getDescrizione',
        'dalla_data' => 'getDallaData',
        'alla_data' => 'getAllaData',
        'id_ranking' => 'getIdRanking'
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
        $this->container['id_cliente'] = isset($data['id_cliente']) ? $data['id_cliente'] : null;
        $this->container['codice'] = isset($data['codice']) ? $data['codice'] : null;
        $this->container['campagna'] = isset($data['campagna']) ? $data['campagna'] : null;
        $this->container['descrizione'] = isset($data['descrizione']) ? $data['descrizione'] : null;
        $this->container['dalla_data'] = isset($data['dalla_data']) ? $data['dalla_data'] : null;
        $this->container['alla_data'] = isset($data['alla_data']) ? $data['alla_data'] : null;
        $this->container['id_ranking'] = isset($data['id_ranking']) ? $data['id_ranking'] : null;
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
     * Gets id_cliente
     *
     * @return int
     */
    public function getIdCliente()
    {
        return $this->container['id_cliente'];
    }

    /**
     * Sets id_cliente
     *
     * @param int $id_cliente id_cliente
     *
     * @return $this
     */
    public function setIdCliente($id_cliente)
    {
        $this->container['id_cliente'] = $id_cliente;

        return $this;
    }

    /**
     * Gets codice
     *
     * @return string
     */
    public function getCodice()
    {
        return $this->container['codice'];
    }

    /**
     * Sets codice
     *
     * @param string $codice codice
     *
     * @return $this
     */
    public function setCodice($codice)
    {
        $this->container['codice'] = $codice;

        return $this;
    }

    /**
     * Gets campagna
     *
     * @return string
     */
    public function getCampagna()
    {
        return $this->container['campagna'];
    }

    /**
     * Sets campagna
     *
     * @param string $campagna campagna
     *
     * @return $this
     */
    public function setCampagna($campagna)
    {
        $this->container['campagna'] = $campagna;

        return $this;
    }

    /**
     * Gets descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->container['descrizione'];
    }

    /**
     * Sets descrizione
     *
     * @param string $descrizione descrizione
     *
     * @return $this
     */
    public function setDescrizione($descrizione)
    {
        $this->container['descrizione'] = $descrizione;

        return $this;
    }

    /**
     * Gets dalla_data
     *
     * @return string
     */
    public function getDallaData()
    {
        return $this->container['dalla_data'];
    }

    /**
     * Sets dalla_data
     *
     * @param string $dalla_data dalla_data
     *
     * @return $this
     */
    public function setDallaData($dalla_data)
    {
        $this->container['dalla_data'] = $dalla_data;

        return $this;
    }

    /**
     * Gets alla_data
     *
     * @return string
     */
    public function getAllaData()
    {
        return $this->container['alla_data'];
    }

    /**
     * Sets alla_data
     *
     * @param string $alla_data alla_data
     *
     * @return $this
     */
    public function setAllaData($alla_data)
    {
        $this->container['alla_data'] = $alla_data;

        return $this;
    }

    /**
     * Gets id_ranking
     *
     * @return int
     */
    public function getIdRanking()
    {
        return $this->container['id_ranking'];
    }

    /**
     * Sets id_ranking
     *
     * @param int $id_ranking id_ranking
     *
     * @return $this
     */
    public function setIdRanking($id_ranking)
    {
        $this->container['id_ranking'] = $id_ranking;

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


