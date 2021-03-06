<?php
/**
 * CallRegolare
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
 * CallRegolare Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallRegolare implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallRegolare';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_regolare' => 'string',
        'codice_esito' => 'string',
        'codice_motivo_rinuncia' => 'string',
        'data_rinuncia' => 'string',
        'codice_campagna' => 'string',
        'importo' => 'string',
        'frequenza' => 'string',
        'stato' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_regolare' => null,
        'codice_esito' => null,
        'codice_motivo_rinuncia' => null,
        'data_rinuncia' => null,
        'codice_campagna' => null,
        'importo' => null,
        'frequenza' => null,
        'stato' => null
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
        'id_regolare' => 'idRegolare',
        'codice_esito' => 'codiceEsito',
        'codice_motivo_rinuncia' => 'codiceMotivoRinuncia',
        'data_rinuncia' => 'dataRinuncia',
        'codice_campagna' => 'codiceCampagna',
        'importo' => 'importo',
        'frequenza' => 'frequenza',
        'stato' => 'stato'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_regolare' => 'setIdRegolare',
        'codice_esito' => 'setCodiceEsito',
        'codice_motivo_rinuncia' => 'setCodiceMotivoRinuncia',
        'data_rinuncia' => 'setDataRinuncia',
        'codice_campagna' => 'setCodiceCampagna',
        'importo' => 'setImporto',
        'frequenza' => 'setFrequenza',
        'stato' => 'setStato'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_regolare' => 'getIdRegolare',
        'codice_esito' => 'getCodiceEsito',
        'codice_motivo_rinuncia' => 'getCodiceMotivoRinuncia',
        'data_rinuncia' => 'getDataRinuncia',
        'codice_campagna' => 'getCodiceCampagna',
        'importo' => 'getImporto',
        'frequenza' => 'getFrequenza',
        'stato' => 'getStato'
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
        $this->container['id_regolare'] = isset($data['id_regolare']) ? $data['id_regolare'] : null;
        $this->container['codice_esito'] = isset($data['codice_esito']) ? $data['codice_esito'] : null;
        $this->container['codice_motivo_rinuncia'] = isset($data['codice_motivo_rinuncia']) ? $data['codice_motivo_rinuncia'] : null;
        $this->container['data_rinuncia'] = isset($data['data_rinuncia']) ? $data['data_rinuncia'] : null;
        $this->container['codice_campagna'] = isset($data['codice_campagna']) ? $data['codice_campagna'] : null;
        $this->container['importo'] = isset($data['importo']) ? $data['importo'] : null;
        $this->container['frequenza'] = isset($data['frequenza']) ? $data['frequenza'] : null;
        $this->container['stato'] = isset($data['stato']) ? $data['stato'] : null;
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
     * Gets id_regolare
     *
     * @return string
     */
    public function getIdRegolare()
    {
        return $this->container['id_regolare'];
    }

    /**
     * Sets id_regolare
     *
     * @param string $id_regolare id_regolare
     *
     * @return $this
     */
    public function setIdRegolare($id_regolare)
    {
        $this->container['id_regolare'] = $id_regolare;

        return $this;
    }

    /**
     * Gets codice_esito
     *
     * @return string
     */
    public function getCodiceEsito()
    {
        return $this->container['codice_esito'];
    }

    /**
     * Sets codice_esito
     *
     * @param string $codice_esito codice_esito
     *
     * @return $this
     */
    public function setCodiceEsito($codice_esito)
    {
        $this->container['codice_esito'] = $codice_esito;

        return $this;
    }

    /**
     * Gets codice_motivo_rinuncia
     *
     * @return string
     */
    public function getCodiceMotivoRinuncia()
    {
        return $this->container['codice_motivo_rinuncia'];
    }

    /**
     * Sets codice_motivo_rinuncia
     *
     * @param string $codice_motivo_rinuncia codice_motivo_rinuncia
     *
     * @return $this
     */
    public function setCodiceMotivoRinuncia($codice_motivo_rinuncia)
    {
        $this->container['codice_motivo_rinuncia'] = $codice_motivo_rinuncia;

        return $this;
    }

    /**
     * Gets data_rinuncia
     *
     * @return string
     */
    public function getDataRinuncia()
    {
        return $this->container['data_rinuncia'];
    }

    /**
     * Sets data_rinuncia
     *
     * @param string $data_rinuncia data_rinuncia
     *
     * @return $this
     */
    public function setDataRinuncia($data_rinuncia)
    {
        $this->container['data_rinuncia'] = $data_rinuncia;

        return $this;
    }

    /**
     * Gets codice_campagna
     *
     * @return string
     */
    public function getCodiceCampagna()
    {
        return $this->container['codice_campagna'];
    }

    /**
     * Sets codice_campagna
     *
     * @param string $codice_campagna codice_campagna
     *
     * @return $this
     */
    public function setCodiceCampagna($codice_campagna)
    {
        $this->container['codice_campagna'] = $codice_campagna;

        return $this;
    }

    /**
     * Gets importo
     *
     * @return string
     */
    public function getImporto()
    {
        return $this->container['importo'];
    }

    /**
     * Sets importo
     *
     * @param string $importo importo
     *
     * @return $this
     */
    public function setImporto($importo)
    {
        $this->container['importo'] = $importo;

        return $this;
    }

    /**
     * Gets frequenza
     *
     * @return string
     */
    public function getFrequenza()
    {
        return $this->container['frequenza'];
    }

    /**
     * Sets frequenza
     *
     * @param string $frequenza frequenza
     *
     * @return $this
     */
    public function setFrequenza($frequenza)
    {
        $this->container['frequenza'] = $frequenza;

        return $this;
    }

    /**
     * Gets stato
     *
     * @return string
     */
    public function getStato()
    {
        return $this->container['stato'];
    }

    /**
     * Sets stato
     *
     * @param string $stato stato
     *
     * @return $this
     */
    public function setStato($stato)
    {
        $this->container['stato'] = $stato;

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


