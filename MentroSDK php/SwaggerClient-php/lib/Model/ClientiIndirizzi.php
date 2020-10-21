<?php
/**
 * ClientiIndirizzi
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
 * ClientiIndirizzi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientiIndirizzi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientiIndirizzi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_cliente' => 'int',
        'tipo_indirizzo' => 'string',
        'descrizione_tipo_indirizzo' => 'string',
        'nome' => 'string',
        'dug' => 'string',
        'indirizzo' => 'string',
        'civico' => 'string',
        'altro_civico' => 'string',
        'frazione' => 'string',
        'presso' => 'string',
        'codice_nazione' => 'string',
        'cap' => 'string',
        'localita' => 'string',
        'provincia' => 'string',
        'telefono' => 'string',
        'telefono2' => 'string',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_cliente' => 'int32',
        'tipo_indirizzo' => null,
        'descrizione_tipo_indirizzo' => null,
        'nome' => null,
        'dug' => null,
        'indirizzo' => null,
        'civico' => null,
        'altro_civico' => null,
        'frazione' => null,
        'presso' => null,
        'codice_nazione' => null,
        'cap' => null,
        'localita' => null,
        'provincia' => null,
        'telefono' => null,
        'telefono2' => null,
        'note' => null
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
        'tipo_indirizzo' => 'TipoIndirizzo',
        'descrizione_tipo_indirizzo' => 'DescrizioneTipoIndirizzo',
        'nome' => 'Nome',
        'dug' => 'Dug',
        'indirizzo' => 'Indirizzo',
        'civico' => 'Civico',
        'altro_civico' => 'AltroCivico',
        'frazione' => 'Frazione',
        'presso' => 'Presso',
        'codice_nazione' => 'CodiceNazione',
        'cap' => 'Cap',
        'localita' => 'Localita',
        'provincia' => 'Provincia',
        'telefono' => 'Telefono',
        'telefono2' => 'Telefono2',
        'note' => 'Note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_cliente' => 'setIdCliente',
        'tipo_indirizzo' => 'setTipoIndirizzo',
        'descrizione_tipo_indirizzo' => 'setDescrizioneTipoIndirizzo',
        'nome' => 'setNome',
        'dug' => 'setDug',
        'indirizzo' => 'setIndirizzo',
        'civico' => 'setCivico',
        'altro_civico' => 'setAltroCivico',
        'frazione' => 'setFrazione',
        'presso' => 'setPresso',
        'codice_nazione' => 'setCodiceNazione',
        'cap' => 'setCap',
        'localita' => 'setLocalita',
        'provincia' => 'setProvincia',
        'telefono' => 'setTelefono',
        'telefono2' => 'setTelefono2',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_cliente' => 'getIdCliente',
        'tipo_indirizzo' => 'getTipoIndirizzo',
        'descrizione_tipo_indirizzo' => 'getDescrizioneTipoIndirizzo',
        'nome' => 'getNome',
        'dug' => 'getDug',
        'indirizzo' => 'getIndirizzo',
        'civico' => 'getCivico',
        'altro_civico' => 'getAltroCivico',
        'frazione' => 'getFrazione',
        'presso' => 'getPresso',
        'codice_nazione' => 'getCodiceNazione',
        'cap' => 'getCap',
        'localita' => 'getLocalita',
        'provincia' => 'getProvincia',
        'telefono' => 'getTelefono',
        'telefono2' => 'getTelefono2',
        'note' => 'getNote'
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
        $this->container['tipo_indirizzo'] = isset($data['tipo_indirizzo']) ? $data['tipo_indirizzo'] : null;
        $this->container['descrizione_tipo_indirizzo'] = isset($data['descrizione_tipo_indirizzo']) ? $data['descrizione_tipo_indirizzo'] : null;
        $this->container['nome'] = isset($data['nome']) ? $data['nome'] : null;
        $this->container['dug'] = isset($data['dug']) ? $data['dug'] : null;
        $this->container['indirizzo'] = isset($data['indirizzo']) ? $data['indirizzo'] : null;
        $this->container['civico'] = isset($data['civico']) ? $data['civico'] : null;
        $this->container['altro_civico'] = isset($data['altro_civico']) ? $data['altro_civico'] : null;
        $this->container['frazione'] = isset($data['frazione']) ? $data['frazione'] : null;
        $this->container['presso'] = isset($data['presso']) ? $data['presso'] : null;
        $this->container['codice_nazione'] = isset($data['codice_nazione']) ? $data['codice_nazione'] : null;
        $this->container['cap'] = isset($data['cap']) ? $data['cap'] : null;
        $this->container['localita'] = isset($data['localita']) ? $data['localita'] : null;
        $this->container['provincia'] = isset($data['provincia']) ? $data['provincia'] : null;
        $this->container['telefono'] = isset($data['telefono']) ? $data['telefono'] : null;
        $this->container['telefono2'] = isset($data['telefono2']) ? $data['telefono2'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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
     * Gets tipo_indirizzo
     *
     * @return string
     */
    public function getTipoIndirizzo()
    {
        return $this->container['tipo_indirizzo'];
    }

    /**
     * Sets tipo_indirizzo
     *
     * @param string $tipo_indirizzo tipo_indirizzo
     *
     * @return $this
     */
    public function setTipoIndirizzo($tipo_indirizzo)
    {
        $this->container['tipo_indirizzo'] = $tipo_indirizzo;

        return $this;
    }

    /**
     * Gets descrizione_tipo_indirizzo
     *
     * @return string
     */
    public function getDescrizioneTipoIndirizzo()
    {
        return $this->container['descrizione_tipo_indirizzo'];
    }

    /**
     * Sets descrizione_tipo_indirizzo
     *
     * @param string $descrizione_tipo_indirizzo descrizione_tipo_indirizzo
     *
     * @return $this
     */
    public function setDescrizioneTipoIndirizzo($descrizione_tipo_indirizzo)
    {
        $this->container['descrizione_tipo_indirizzo'] = $descrizione_tipo_indirizzo;

        return $this;
    }

    /**
     * Gets nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->container['nome'];
    }

    /**
     * Sets nome
     *
     * @param string $nome nome
     *
     * @return $this
     */
    public function setNome($nome)
    {
        $this->container['nome'] = $nome;

        return $this;
    }

    /**
     * Gets dug
     *
     * @return string
     */
    public function getDug()
    {
        return $this->container['dug'];
    }

    /**
     * Sets dug
     *
     * @param string $dug dug
     *
     * @return $this
     */
    public function setDug($dug)
    {
        $this->container['dug'] = $dug;

        return $this;
    }

    /**
     * Gets indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->container['indirizzo'];
    }

    /**
     * Sets indirizzo
     *
     * @param string $indirizzo indirizzo
     *
     * @return $this
     */
    public function setIndirizzo($indirizzo)
    {
        $this->container['indirizzo'] = $indirizzo;

        return $this;
    }

    /**
     * Gets civico
     *
     * @return string
     */
    public function getCivico()
    {
        return $this->container['civico'];
    }

    /**
     * Sets civico
     *
     * @param string $civico civico
     *
     * @return $this
     */
    public function setCivico($civico)
    {
        $this->container['civico'] = $civico;

        return $this;
    }

    /**
     * Gets altro_civico
     *
     * @return string
     */
    public function getAltroCivico()
    {
        return $this->container['altro_civico'];
    }

    /**
     * Sets altro_civico
     *
     * @param string $altro_civico altro_civico
     *
     * @return $this
     */
    public function setAltroCivico($altro_civico)
    {
        $this->container['altro_civico'] = $altro_civico;

        return $this;
    }

    /**
     * Gets frazione
     *
     * @return string
     */
    public function getFrazione()
    {
        return $this->container['frazione'];
    }

    /**
     * Sets frazione
     *
     * @param string $frazione frazione
     *
     * @return $this
     */
    public function setFrazione($frazione)
    {
        $this->container['frazione'] = $frazione;

        return $this;
    }

    /**
     * Gets presso
     *
     * @return string
     */
    public function getPresso()
    {
        return $this->container['presso'];
    }

    /**
     * Sets presso
     *
     * @param string $presso presso
     *
     * @return $this
     */
    public function setPresso($presso)
    {
        $this->container['presso'] = $presso;

        return $this;
    }

    /**
     * Gets codice_nazione
     *
     * @return string
     */
    public function getCodiceNazione()
    {
        return $this->container['codice_nazione'];
    }

    /**
     * Sets codice_nazione
     *
     * @param string $codice_nazione codice_nazione
     *
     * @return $this
     */
    public function setCodiceNazione($codice_nazione)
    {
        $this->container['codice_nazione'] = $codice_nazione;

        return $this;
    }

    /**
     * Gets cap
     *
     * @return string
     */
    public function getCap()
    {
        return $this->container['cap'];
    }

    /**
     * Sets cap
     *
     * @param string $cap cap
     *
     * @return $this
     */
    public function setCap($cap)
    {
        $this->container['cap'] = $cap;

        return $this;
    }

    /**
     * Gets localita
     *
     * @return string
     */
    public function getLocalita()
    {
        return $this->container['localita'];
    }

    /**
     * Sets localita
     *
     * @param string $localita localita
     *
     * @return $this
     */
    public function setLocalita($localita)
    {
        $this->container['localita'] = $localita;

        return $this;
    }

    /**
     * Gets provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->container['provincia'];
    }

    /**
     * Sets provincia
     *
     * @param string $provincia provincia
     *
     * @return $this
     */
    public function setProvincia($provincia)
    {
        $this->container['provincia'] = $provincia;

        return $this;
    }

    /**
     * Gets telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->container['telefono'];
    }

    /**
     * Sets telefono
     *
     * @param string $telefono telefono
     *
     * @return $this
     */
    public function setTelefono($telefono)
    {
        $this->container['telefono'] = $telefono;

        return $this;
    }

    /**
     * Gets telefono2
     *
     * @return string
     */
    public function getTelefono2()
    {
        return $this->container['telefono2'];
    }

    /**
     * Sets telefono2
     *
     * @param string $telefono2 telefono2
     *
     * @return $this
     */
    public function setTelefono2($telefono2)
    {
        $this->container['telefono2'] = $telefono2;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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


