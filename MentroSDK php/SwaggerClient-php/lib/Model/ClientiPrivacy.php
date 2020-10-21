<?php
/**
 * ClientiPrivacy
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
 * ClientiPrivacy Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientiPrivacy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientiPrivacy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_cliente' => 'int',
        'codice' => 'string',
        'descrizione' => 'string',
        'concesso' => 'bool',
        'data_consenso' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_cliente' => 'int32',
        'codice' => null,
        'descrizione' => null,
        'concesso' => null,
        'data_consenso' => null
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
        'descrizione' => 'Descrizione',
        'concesso' => 'Concesso',
        'data_consenso' => 'DataConsenso'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_cliente' => 'setIdCliente',
        'codice' => 'setCodice',
        'descrizione' => 'setDescrizione',
        'concesso' => 'setConcesso',
        'data_consenso' => 'setDataConsenso'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_cliente' => 'getIdCliente',
        'codice' => 'getCodice',
        'descrizione' => 'getDescrizione',
        'concesso' => 'getConcesso',
        'data_consenso' => 'getDataConsenso'
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
        $this->container['descrizione'] = isset($data['descrizione']) ? $data['descrizione'] : null;
        $this->container['concesso'] = isset($data['concesso']) ? $data['concesso'] : null;
        $this->container['data_consenso'] = isset($data['data_consenso']) ? $data['data_consenso'] : null;
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
     * Gets concesso
     *
     * @return bool
     */
    public function getConcesso()
    {
        return $this->container['concesso'];
    }

    /**
     * Sets concesso
     *
     * @param bool $concesso concesso
     *
     * @return $this
     */
    public function setConcesso($concesso)
    {
        $this->container['concesso'] = $concesso;

        return $this;
    }

    /**
     * Gets data_consenso
     *
     * @return string
     */
    public function getDataConsenso()
    {
        return $this->container['data_consenso'];
    }

    /**
     * Sets data_consenso
     *
     * @param string $data_consenso data_consenso
     *
     * @return $this
     */
    public function setDataConsenso($data_consenso)
    {
        $this->container['data_consenso'] = $data_consenso;

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


