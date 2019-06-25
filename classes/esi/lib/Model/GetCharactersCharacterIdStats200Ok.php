<?php
/**
 * GetCharactersCharacterIdStats200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * GetCharactersCharacterIdStats200Ok Class Doc Comment
 *
 * @category Class
 * @description Aggregate stats for a year
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdStats200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_stats_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'character' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsCharacter',
        'combat' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsCombat',
        'industry' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsIndustry',
        'inventory' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsInventory',
        'isk' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsIsk',
        'market' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsMarket',
        'mining' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsMining',
        'module' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsModule',
        'orbital' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsOrbital',
        'pve' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsPve',
        'social' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsSocial',
        'travel' => '\Swagger\Client\Model\GetCharactersCharacterIdStatsTravel',
        'year' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'character' => null,
        'combat' => null,
        'industry' => null,
        'inventory' => null,
        'isk' => null,
        'market' => null,
        'mining' => null,
        'module' => null,
        'orbital' => null,
        'pve' => null,
        'social' => null,
        'travel' => null,
        'year' => 'int32'
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
        'character' => 'character',
        'combat' => 'combat',
        'industry' => 'industry',
        'inventory' => 'inventory',
        'isk' => 'isk',
        'market' => 'market',
        'mining' => 'mining',
        'module' => 'module',
        'orbital' => 'orbital',
        'pve' => 'pve',
        'social' => 'social',
        'travel' => 'travel',
        'year' => 'year'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'character' => 'setCharacter',
        'combat' => 'setCombat',
        'industry' => 'setIndustry',
        'inventory' => 'setInventory',
        'isk' => 'setIsk',
        'market' => 'setMarket',
        'mining' => 'setMining',
        'module' => 'setModule',
        'orbital' => 'setOrbital',
        'pve' => 'setPve',
        'social' => 'setSocial',
        'travel' => 'setTravel',
        'year' => 'setYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'character' => 'getCharacter',
        'combat' => 'getCombat',
        'industry' => 'getIndustry',
        'inventory' => 'getInventory',
        'isk' => 'getIsk',
        'market' => 'getMarket',
        'mining' => 'getMining',
        'module' => 'getModule',
        'orbital' => 'getOrbital',
        'pve' => 'getPve',
        'social' => 'getSocial',
        'travel' => 'getTravel',
        'year' => 'getYear'
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
        $this->container['character'] = isset($data['character']) ? $data['character'] : null;
        $this->container['combat'] = isset($data['combat']) ? $data['combat'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['isk'] = isset($data['isk']) ? $data['isk'] : null;
        $this->container['market'] = isset($data['market']) ? $data['market'] : null;
        $this->container['mining'] = isset($data['mining']) ? $data['mining'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['orbital'] = isset($data['orbital']) ? $data['orbital'] : null;
        $this->container['pve'] = isset($data['pve']) ? $data['pve'] : null;
        $this->container['social'] = isset($data['social']) ? $data['social'] : null;
        $this->container['travel'] = isset($data['travel']) ? $data['travel'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['year'] === null) {
            $invalidProperties[] = "'year' can't be null";
        }
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

        if ($this->container['year'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets character
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsCharacter
     */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
     * Sets character
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsCharacter $character character
     *
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->container['character'] = $character;

        return $this;
    }

    /**
     * Gets combat
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsCombat
     */
    public function getCombat()
    {
        return $this->container['combat'];
    }

    /**
     * Sets combat
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsCombat $combat combat
     *
     * @return $this
     */
    public function setCombat($combat)
    {
        $this->container['combat'] = $combat;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsIndustry
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsIndustry $industry industry
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsInventory
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsInventory $inventory inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets isk
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsIsk
     */
    public function getIsk()
    {
        return $this->container['isk'];
    }

    /**
     * Sets isk
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsIsk $isk isk
     *
     * @return $this
     */
    public function setIsk($isk)
    {
        $this->container['isk'] = $isk;

        return $this;
    }

    /**
     * Gets market
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsMarket
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsMarket $market market
     *
     * @return $this
     */
    public function setMarket($market)
    {
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets mining
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsMining
     */
    public function getMining()
    {
        return $this->container['mining'];
    }

    /**
     * Sets mining
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsMining $mining mining
     *
     * @return $this
     */
    public function setMining($mining)
    {
        $this->container['mining'] = $mining;

        return $this;
    }

    /**
     * Gets module
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsModule
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsModule $module module
     *
     * @return $this
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets orbital
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsOrbital
     */
    public function getOrbital()
    {
        return $this->container['orbital'];
    }

    /**
     * Sets orbital
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsOrbital $orbital orbital
     *
     * @return $this
     */
    public function setOrbital($orbital)
    {
        $this->container['orbital'] = $orbital;

        return $this;
    }

    /**
     * Gets pve
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsPve
     */
    public function getPve()
    {
        return $this->container['pve'];
    }

    /**
     * Sets pve
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsPve $pve pve
     *
     * @return $this
     */
    public function setPve($pve)
    {
        $this->container['pve'] = $pve;

        return $this;
    }

    /**
     * Gets social
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsSocial
     */
    public function getSocial()
    {
        return $this->container['social'];
    }

    /**
     * Sets social
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsSocial $social social
     *
     * @return $this
     */
    public function setSocial($social)
    {
        $this->container['social'] = $social;

        return $this;
    }

    /**
     * Gets travel
     *
     * @return \Swagger\Client\Model\GetCharactersCharacterIdStatsTravel
     */
    public function getTravel()
    {
        return $this->container['travel'];
    }

    /**
     * Sets travel
     *
     * @param \Swagger\Client\Model\GetCharactersCharacterIdStatsTravel $travel travel
     *
     * @return $this
     */
    public function setTravel($travel)
    {
        $this->container['travel'] = $travel;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year Gregorian year for this set of aggregates
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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


