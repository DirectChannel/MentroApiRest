<?php
/**
 * Attivita
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
 * Attivita Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Attivita implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Attivita';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_attivita' => 'int',
        'id_regolare' => 'int',
        'id_versamenti' => 'int',
        'codice_donatore' => 'string',
        'campagna' => 'object',
        'canale' => 'object',
        'pagamento' => 'object',
        'bambino' => 'object',
        'progetto' => 'object',
        'esito' => 'object',
        'id_lascito' => 'int',
        'data_attivita' => 'string',
        'ora_attivita' => 'string',
        'utente_assegnatario' => 'string',
        'gruppo_utenti_assegnatario' => 'object',
        'id_gruppo' => 'int',
        'evento' => 'object',
        'sollecito' => 'object',
        'motivo_rifiuto_ask' => 'object',
        'tipo_incidenza' => 'object',
        'tipo' => 'object',
        'sottotipo' => 'object',
        'stato' => 'object',
        'importo' => 'float',
        'oggetto' => 'string',
        'note' => 'string',
        'data_chiusura' => 'string',
        'link' => 'string',
        'lotto' => 'string',
        'template' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_attivita' => 'int32',
        'id_regolare' => 'int32',
        'id_versamenti' => 'int32',
        'codice_donatore' => null,
        'campagna' => null,
        'canale' => null,
        'pagamento' => null,
        'bambino' => null,
        'progetto' => null,
        'esito' => null,
        'id_lascito' => 'int32',
        'data_attivita' => null,
        'ora_attivita' => null,
        'utente_assegnatario' => null,
        'gruppo_utenti_assegnatario' => null,
        'id_gruppo' => 'int32',
        'evento' => null,
        'sollecito' => null,
        'motivo_rifiuto_ask' => null,
        'tipo_incidenza' => null,
        'tipo' => null,
        'sottotipo' => null,
        'stato' => null,
        'importo' => 'float',
        'oggetto' => null,
        'note' => null,
        'data_chiusura' => null,
        'link' => null,
        'lotto' => null,
        'template' => null
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
        'id_attivita' => 'IdAttivita',
        'id_regolare' => 'IdRegolare',
        'id_versamenti' => 'IdVersamenti',
        'codice_donatore' => 'CodiceDonatore',
        'campagna' => 'Campagna',
        'canale' => 'Canale',
        'pagamento' => 'Pagamento',
        'bambino' => 'Bambino',
        'progetto' => 'Progetto',
        'esito' => 'Esito',
        'id_lascito' => 'IdLascito',
        'data_attivita' => 'DataAttivita',
        'ora_attivita' => 'OraAttivita',
        'utente_assegnatario' => 'UtenteAssegnatario',
        'gruppo_utenti_assegnatario' => 'GruppoUtentiAssegnatario',
        'id_gruppo' => 'IdGruppo',
        'evento' => 'Evento',
        'sollecito' => 'Sollecito',
        'motivo_rifiuto_ask' => 'MotivoRifiutoASK',
        'tipo_incidenza' => 'TipoIncidenza',
        'tipo' => 'Tipo',
        'sottotipo' => 'Sottotipo',
        'stato' => 'Stato',
        'importo' => 'importo',
        'oggetto' => 'Oggetto',
        'note' => 'Note',
        'data_chiusura' => 'DataChiusura',
        'link' => 'Link',
        'lotto' => 'Lotto',
        'template' => 'Template'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_attivita' => 'setIdAttivita',
        'id_regolare' => 'setIdRegolare',
        'id_versamenti' => 'setIdVersamenti',
        'codice_donatore' => 'setCodiceDonatore',
        'campagna' => 'setCampagna',
        'canale' => 'setCanale',
        'pagamento' => 'setPagamento',
        'bambino' => 'setBambino',
        'progetto' => 'setProgetto',
        'esito' => 'setEsito',
        'id_lascito' => 'setIdLascito',
        'data_attivita' => 'setDataAttivita',
        'ora_attivita' => 'setOraAttivita',
        'utente_assegnatario' => 'setUtenteAssegnatario',
        'gruppo_utenti_assegnatario' => 'setGruppoUtentiAssegnatario',
        'id_gruppo' => 'setIdGruppo',
        'evento' => 'setEvento',
        'sollecito' => 'setSollecito',
        'motivo_rifiuto_ask' => 'setMotivoRifiutoAsk',
        'tipo_incidenza' => 'setTipoIncidenza',
        'tipo' => 'setTipo',
        'sottotipo' => 'setSottotipo',
        'stato' => 'setStato',
        'importo' => 'setImporto',
        'oggetto' => 'setOggetto',
        'note' => 'setNote',
        'data_chiusura' => 'setDataChiusura',
        'link' => 'setLink',
        'lotto' => 'setLotto',
        'template' => 'setTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_attivita' => 'getIdAttivita',
        'id_regolare' => 'getIdRegolare',
        'id_versamenti' => 'getIdVersamenti',
        'codice_donatore' => 'getCodiceDonatore',
        'campagna' => 'getCampagna',
        'canale' => 'getCanale',
        'pagamento' => 'getPagamento',
        'bambino' => 'getBambino',
        'progetto' => 'getProgetto',
        'esito' => 'getEsito',
        'id_lascito' => 'getIdLascito',
        'data_attivita' => 'getDataAttivita',
        'ora_attivita' => 'getOraAttivita',
        'utente_assegnatario' => 'getUtenteAssegnatario',
        'gruppo_utenti_assegnatario' => 'getGruppoUtentiAssegnatario',
        'id_gruppo' => 'getIdGruppo',
        'evento' => 'getEvento',
        'sollecito' => 'getSollecito',
        'motivo_rifiuto_ask' => 'getMotivoRifiutoAsk',
        'tipo_incidenza' => 'getTipoIncidenza',
        'tipo' => 'getTipo',
        'sottotipo' => 'getSottotipo',
        'stato' => 'getStato',
        'importo' => 'getImporto',
        'oggetto' => 'getOggetto',
        'note' => 'getNote',
        'data_chiusura' => 'getDataChiusura',
        'link' => 'getLink',
        'lotto' => 'getLotto',
        'template' => 'getTemplate'
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
        $this->container['id_attivita'] = isset($data['id_attivita']) ? $data['id_attivita'] : null;
        $this->container['id_regolare'] = isset($data['id_regolare']) ? $data['id_regolare'] : null;
        $this->container['id_versamenti'] = isset($data['id_versamenti']) ? $data['id_versamenti'] : null;
        $this->container['codice_donatore'] = isset($data['codice_donatore']) ? $data['codice_donatore'] : null;
        $this->container['campagna'] = isset($data['campagna']) ? $data['campagna'] : null;
        $this->container['canale'] = isset($data['canale']) ? $data['canale'] : null;
        $this->container['pagamento'] = isset($data['pagamento']) ? $data['pagamento'] : null;
        $this->container['bambino'] = isset($data['bambino']) ? $data['bambino'] : null;
        $this->container['progetto'] = isset($data['progetto']) ? $data['progetto'] : null;
        $this->container['esito'] = isset($data['esito']) ? $data['esito'] : null;
        $this->container['id_lascito'] = isset($data['id_lascito']) ? $data['id_lascito'] : null;
        $this->container['data_attivita'] = isset($data['data_attivita']) ? $data['data_attivita'] : null;
        $this->container['ora_attivita'] = isset($data['ora_attivita']) ? $data['ora_attivita'] : null;
        $this->container['utente_assegnatario'] = isset($data['utente_assegnatario']) ? $data['utente_assegnatario'] : null;
        $this->container['gruppo_utenti_assegnatario'] = isset($data['gruppo_utenti_assegnatario']) ? $data['gruppo_utenti_assegnatario'] : null;
        $this->container['id_gruppo'] = isset($data['id_gruppo']) ? $data['id_gruppo'] : null;
        $this->container['evento'] = isset($data['evento']) ? $data['evento'] : null;
        $this->container['sollecito'] = isset($data['sollecito']) ? $data['sollecito'] : null;
        $this->container['motivo_rifiuto_ask'] = isset($data['motivo_rifiuto_ask']) ? $data['motivo_rifiuto_ask'] : null;
        $this->container['tipo_incidenza'] = isset($data['tipo_incidenza']) ? $data['tipo_incidenza'] : null;
        $this->container['tipo'] = isset($data['tipo']) ? $data['tipo'] : null;
        $this->container['sottotipo'] = isset($data['sottotipo']) ? $data['sottotipo'] : null;
        $this->container['stato'] = isset($data['stato']) ? $data['stato'] : null;
        $this->container['importo'] = isset($data['importo']) ? $data['importo'] : null;
        $this->container['oggetto'] = isset($data['oggetto']) ? $data['oggetto'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['data_chiusura'] = isset($data['data_chiusura']) ? $data['data_chiusura'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['lotto'] = isset($data['lotto']) ? $data['lotto'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
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
     * Gets id_attivita
     *
     * @return int
     */
    public function getIdAttivita()
    {
        return $this->container['id_attivita'];
    }

    /**
     * Sets id_attivita
     *
     * @param int $id_attivita id_attivita
     *
     * @return $this
     */
    public function setIdAttivita($id_attivita)
    {
        $this->container['id_attivita'] = $id_attivita;

        return $this;
    }

    /**
     * Gets id_regolare
     *
     * @return int
     */
    public function getIdRegolare()
    {
        return $this->container['id_regolare'];
    }

    /**
     * Sets id_regolare
     *
     * @param int $id_regolare id_regolare
     *
     * @return $this
     */
    public function setIdRegolare($id_regolare)
    {
        $this->container['id_regolare'] = $id_regolare;

        return $this;
    }

    /**
     * Gets id_versamenti
     *
     * @return int
     */
    public function getIdVersamenti()
    {
        return $this->container['id_versamenti'];
    }

    /**
     * Sets id_versamenti
     *
     * @param int $id_versamenti id_versamenti
     *
     * @return $this
     */
    public function setIdVersamenti($id_versamenti)
    {
        $this->container['id_versamenti'] = $id_versamenti;

        return $this;
    }

    /**
     * Gets codice_donatore
     *
     * @return string
     */
    public function getCodiceDonatore()
    {
        return $this->container['codice_donatore'];
    }

    /**
     * Sets codice_donatore
     *
     * @param string $codice_donatore codice_donatore
     *
     * @return $this
     */
    public function setCodiceDonatore($codice_donatore)
    {
        $this->container['codice_donatore'] = $codice_donatore;

        return $this;
    }

    /**
     * Gets campagna
     *
     * @return object
     */
    public function getCampagna()
    {
        return $this->container['campagna'];
    }

    /**
     * Sets campagna
     *
     * @param object $campagna campagna
     *
     * @return $this
     */
    public function setCampagna($campagna)
    {
        $this->container['campagna'] = $campagna;

        return $this;
    }

    /**
     * Gets canale
     *
     * @return object
     */
    public function getCanale()
    {
        return $this->container['canale'];
    }

    /**
     * Sets canale
     *
     * @param object $canale canale
     *
     * @return $this
     */
    public function setCanale($canale)
    {
        $this->container['canale'] = $canale;

        return $this;
    }

    /**
     * Gets pagamento
     *
     * @return object
     */
    public function getPagamento()
    {
        return $this->container['pagamento'];
    }

    /**
     * Sets pagamento
     *
     * @param object $pagamento pagamento
     *
     * @return $this
     */
    public function setPagamento($pagamento)
    {
        $this->container['pagamento'] = $pagamento;

        return $this;
    }

    /**
     * Gets bambino
     *
     * @return object
     */
    public function getBambino()
    {
        return $this->container['bambino'];
    }

    /**
     * Sets bambino
     *
     * @param object $bambino bambino
     *
     * @return $this
     */
    public function setBambino($bambino)
    {
        $this->container['bambino'] = $bambino;

        return $this;
    }

    /**
     * Gets progetto
     *
     * @return object
     */
    public function getProgetto()
    {
        return $this->container['progetto'];
    }

    /**
     * Sets progetto
     *
     * @param object $progetto progetto
     *
     * @return $this
     */
    public function setProgetto($progetto)
    {
        $this->container['progetto'] = $progetto;

        return $this;
    }

    /**
     * Gets esito
     *
     * @return object
     */
    public function getEsito()
    {
        return $this->container['esito'];
    }

    /**
     * Sets esito
     *
     * @param object $esito esito
     *
     * @return $this
     */
    public function setEsito($esito)
    {
        $this->container['esito'] = $esito;

        return $this;
    }

    /**
     * Gets id_lascito
     *
     * @return int
     */
    public function getIdLascito()
    {
        return $this->container['id_lascito'];
    }

    /**
     * Sets id_lascito
     *
     * @param int $id_lascito id_lascito
     *
     * @return $this
     */
    public function setIdLascito($id_lascito)
    {
        $this->container['id_lascito'] = $id_lascito;

        return $this;
    }

    /**
     * Gets data_attivita
     *
     * @return string
     */
    public function getDataAttivita()
    {
        return $this->container['data_attivita'];
    }

    /**
     * Sets data_attivita
     *
     * @param string $data_attivita data_attivita
     *
     * @return $this
     */
    public function setDataAttivita($data_attivita)
    {
        $this->container['data_attivita'] = $data_attivita;

        return $this;
    }

    /**
     * Gets ora_attivita
     *
     * @return string
     */
    public function getOraAttivita()
    {
        return $this->container['ora_attivita'];
    }

    /**
     * Sets ora_attivita
     *
     * @param string $ora_attivita ora_attivita
     *
     * @return $this
     */
    public function setOraAttivita($ora_attivita)
    {
        $this->container['ora_attivita'] = $ora_attivita;

        return $this;
    }

    /**
     * Gets utente_assegnatario
     *
     * @return string
     */
    public function getUtenteAssegnatario()
    {
        return $this->container['utente_assegnatario'];
    }

    /**
     * Sets utente_assegnatario
     *
     * @param string $utente_assegnatario utente_assegnatario
     *
     * @return $this
     */
    public function setUtenteAssegnatario($utente_assegnatario)
    {
        $this->container['utente_assegnatario'] = $utente_assegnatario;

        return $this;
    }

    /**
     * Gets gruppo_utenti_assegnatario
     *
     * @return object
     */
    public function getGruppoUtentiAssegnatario()
    {
        return $this->container['gruppo_utenti_assegnatario'];
    }

    /**
     * Sets gruppo_utenti_assegnatario
     *
     * @param object $gruppo_utenti_assegnatario gruppo_utenti_assegnatario
     *
     * @return $this
     */
    public function setGruppoUtentiAssegnatario($gruppo_utenti_assegnatario)
    {
        $this->container['gruppo_utenti_assegnatario'] = $gruppo_utenti_assegnatario;

        return $this;
    }

    /**
     * Gets id_gruppo
     *
     * @return int
     */
    public function getIdGruppo()
    {
        return $this->container['id_gruppo'];
    }

    /**
     * Sets id_gruppo
     *
     * @param int $id_gruppo id_gruppo
     *
     * @return $this
     */
    public function setIdGruppo($id_gruppo)
    {
        $this->container['id_gruppo'] = $id_gruppo;

        return $this;
    }

    /**
     * Gets evento
     *
     * @return object
     */
    public function getEvento()
    {
        return $this->container['evento'];
    }

    /**
     * Sets evento
     *
     * @param object $evento evento
     *
     * @return $this
     */
    public function setEvento($evento)
    {
        $this->container['evento'] = $evento;

        return $this;
    }

    /**
     * Gets sollecito
     *
     * @return object
     */
    public function getSollecito()
    {
        return $this->container['sollecito'];
    }

    /**
     * Sets sollecito
     *
     * @param object $sollecito sollecito
     *
     * @return $this
     */
    public function setSollecito($sollecito)
    {
        $this->container['sollecito'] = $sollecito;

        return $this;
    }

    /**
     * Gets motivo_rifiuto_ask
     *
     * @return object
     */
    public function getMotivoRifiutoAsk()
    {
        return $this->container['motivo_rifiuto_ask'];
    }

    /**
     * Sets motivo_rifiuto_ask
     *
     * @param object $motivo_rifiuto_ask motivo_rifiuto_ask
     *
     * @return $this
     */
    public function setMotivoRifiutoAsk($motivo_rifiuto_ask)
    {
        $this->container['motivo_rifiuto_ask'] = $motivo_rifiuto_ask;

        return $this;
    }

    /**
     * Gets tipo_incidenza
     *
     * @return object
     */
    public function getTipoIncidenza()
    {
        return $this->container['tipo_incidenza'];
    }

    /**
     * Sets tipo_incidenza
     *
     * @param object $tipo_incidenza tipo_incidenza
     *
     * @return $this
     */
    public function setTipoIncidenza($tipo_incidenza)
    {
        $this->container['tipo_incidenza'] = $tipo_incidenza;

        return $this;
    }

    /**
     * Gets tipo
     *
     * @return object
     */
    public function getTipo()
    {
        return $this->container['tipo'];
    }

    /**
     * Sets tipo
     *
     * @param object $tipo tipo
     *
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->container['tipo'] = $tipo;

        return $this;
    }

    /**
     * Gets sottotipo
     *
     * @return object
     */
    public function getSottotipo()
    {
        return $this->container['sottotipo'];
    }

    /**
     * Sets sottotipo
     *
     * @param object $sottotipo sottotipo
     *
     * @return $this
     */
    public function setSottotipo($sottotipo)
    {
        $this->container['sottotipo'] = $sottotipo;

        return $this;
    }

    /**
     * Gets stato
     *
     * @return object
     */
    public function getStato()
    {
        return $this->container['stato'];
    }

    /**
     * Sets stato
     *
     * @param object $stato stato
     *
     * @return $this
     */
    public function setStato($stato)
    {
        $this->container['stato'] = $stato;

        return $this;
    }

    /**
     * Gets importo
     *
     * @return float
     */
    public function getImporto()
    {
        return $this->container['importo'];
    }

    /**
     * Sets importo
     *
     * @param float $importo importo
     *
     * @return $this
     */
    public function setImporto($importo)
    {
        $this->container['importo'] = $importo;

        return $this;
    }

    /**
     * Gets oggetto
     *
     * @return string
     */
    public function getOggetto()
    {
        return $this->container['oggetto'];
    }

    /**
     * Sets oggetto
     *
     * @param string $oggetto oggetto
     *
     * @return $this
     */
    public function setOggetto($oggetto)
    {
        $this->container['oggetto'] = $oggetto;

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
     * Gets data_chiusura
     *
     * @return string
     */
    public function getDataChiusura()
    {
        return $this->container['data_chiusura'];
    }

    /**
     * Sets data_chiusura
     *
     * @param string $data_chiusura data_chiusura
     *
     * @return $this
     */
    public function setDataChiusura($data_chiusura)
    {
        $this->container['data_chiusura'] = $data_chiusura;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets lotto
     *
     * @return string
     */
    public function getLotto()
    {
        return $this->container['lotto'];
    }

    /**
     * Sets lotto
     *
     * @param string $lotto lotto
     *
     * @return $this
     */
    public function setLotto($lotto)
    {
        $this->container['lotto'] = $lotto;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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


