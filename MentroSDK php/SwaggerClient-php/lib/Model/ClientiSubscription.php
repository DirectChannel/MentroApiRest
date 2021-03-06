<?php
/**
 * ClientiSubscription
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
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
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
 * ClientiSubscription Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientiSubscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientiSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_cliente' => 'int',
        'codice_argomento' => 'string',
        'descrizione_argomento' => 'string',
        'codice_gruppo' => 'string',
        'descrizione_gruppo' => 'string',
        'attiva' => 'bool',
        'data_iscrizione' => 'string',
        'data_disiscrizione' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_cliente' => 'int32',
        'codice_argomento' => null,
        'descrizione_argomento' => null,
        'codice_gruppo' => null,
        'descrizione_gruppo' => null,
        'attiva' => null,
        'data_iscrizione' => null,
        'data_disiscrizione' => null
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
        'codice_argomento' => 'CodiceArgomento',
        'descrizione_argomento' => 'DescrizioneArgomento',
        'codice_gruppo' => 'CodiceGruppo',
        'descrizione_gruppo' => 'DescrizioneGruppo',
        'attiva' => 'Attiva',
        'data_iscrizione' => 'DataIscrizione',
        'data_disiscrizione' => 'DataDisiscrizione'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_cliente' => 'setIdCliente',
        'codice_argomento' => 'setCodiceArgomento',
        'descrizione_argomento' => 'setDescrizioneArgomento',
        'codice_gruppo' => 'setCodiceGruppo',
        'descrizione_gruppo' => 'setDescrizioneGruppo',
        'attiva' => 'setAttiva',
        'data_iscrizione' => 'setDataIscrizione',
        'data_disiscrizione' => 'setDataDisiscrizione'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_cliente' => 'getIdCliente',
        'codice_argomento' => 'getCodiceArgomento',
        'descrizione_argomento' => 'getDescrizioneArgomento',
        'codice_gruppo' => 'getCodiceGruppo',
        'descrizione_gruppo' => 'getDescrizioneGruppo',
        'attiva' => 'getAttiva',
        'data_iscrizione' => 'getDataIscrizione',
        'data_disiscrizione' => 'getDataDisiscrizione'
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
        $this->container['codice_argomento'] = isset($data['codice_argomento']) ? $data['codice_argomento'] : null;
        $this->container['descrizione_argomento'] = isset($data['descrizione_argomento']) ? $data['descrizione_argomento'] : null;
        $this->container['codice_gruppo'] = isset($data['codice_gruppo']) ? $data['codice_gruppo'] : null;
        $this->container['descrizione_gruppo'] = isset($data['descrizione_gruppo']) ? $data['descrizione_gruppo'] : null;
        $this->container['attiva'] = isset($data['attiva']) ? $data['attiva'] : null;
        $this->container['data_iscrizione'] = isset($data['data_iscrizione']) ? $data['data_iscrizione'] : null;
        $this->container['data_disiscrizione'] = isset($data['data_disiscrizione']) ? $data['data_disiscrizione'] : null;
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
     * Gets codice_argomento
     *
     * @return string
     */
    public function getCodiceArgomento()
    {
        return $this->container['codice_argomento'];
    }

    /**
     * Sets codice_argomento
     *
     * @param string $codice_argomento codice_argomento
     *
     * @return $this
     */
    public function setCodiceArgomento($codice_argomento)
    {
        $this->container['codice_argomento'] = $codice_argomento;

        return $this;
    }

    /**
     * Gets descrizione_argomento
     *
     * @return string
     */
    public function getDescrizioneArgomento()
    {
        return $this->container['descrizione_argomento'];
    }

    /**
     * Sets descrizione_argomento
     *
     * @param string $descrizione_argomento descrizione_argomento
     *
     * @return $this
     */
    public function setDescrizioneArgomento($descrizione_argomento)
    {
        $this->container['descrizione_argomento'] = $descrizione_argomento;

        return $this;
    }

    /**
     * Gets codice_gruppo
     *
     * @return string
     */
    public function getCodiceGruppo()
    {
        return $this->container['codice_gruppo'];
    }

    /**
     * Sets codice_gruppo
     *
     * @param string $codice_gruppo codice_gruppo
     *
     * @return $this
     */
    public function setCodiceGruppo($codice_gruppo)
    {
        $this->container['codice_gruppo'] = $codice_gruppo;

        return $this;
    }

    /**
     * Gets descrizione_gruppo
     *
     * @return string
     */
    public function getDescrizioneGruppo()
    {
        return $this->container['descrizione_gruppo'];
    }

    /**
     * Sets descrizione_gruppo
     *
     * @param string $descrizione_gruppo descrizione_gruppo
     *
     * @return $this
     */
    public function setDescrizioneGruppo($descrizione_gruppo)
    {
        $this->container['descrizione_gruppo'] = $descrizione_gruppo;

        return $this;
    }

    /**
     * Gets attiva
     *
     * @return bool
     */
    public function getAttiva()
    {
        return $this->container['attiva'];
    }

    /**
     * Sets attiva
     *
     * @param bool $attiva attiva
     *
     * @return $this
     */
    public function setAttiva($attiva)
    {
        $this->container['attiva'] = $attiva;

        return $this;
    }

    /**
     * Gets data_iscrizione
     *
     * @return string
     */
    public function getDataIscrizione()
    {
        return $this->container['data_iscrizione'];
    }

    /**
     * Sets data_iscrizione
     *
     * @param string $data_iscrizione data_iscrizione
     *
     * @return $this
     */
    public function setDataIscrizione($data_iscrizione)
    {
        $this->container['data_iscrizione'] = $data_iscrizione;

        return $this;
    }

    /**
     * Gets data_disiscrizione
     *
     * @return string
     */
    public function getDataDisiscrizione()
    {
        return $this->container['data_disiscrizione'];
    }

    /**
     * Sets data_disiscrizione
     *
     * @param string $data_disiscrizione data_disiscrizione
     *
     * @return $this
     */
    public function setDataDisiscrizione($data_disiscrizione)
    {
        $this->container['data_disiscrizione'] = $data_disiscrizione;

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


