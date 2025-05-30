<?php
/**
 * AddonsUserAddon
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Divar\KenarApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kenar API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Divar\KenarApiClient\Model;

use \ArrayAccess;
use \Divar\KenarApiClient\ObjectSerializer;

/**
 * AddonsUserAddon Class Doc Comment
 *
 * @category Class
 * @package  Divar\KenarApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddonsUserAddon implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'addonsUserAddon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'divar_user_id' => 'string',
        'filters' => '\Divar\KenarApiClient\Model\AddonsUserAddonFilters',
        'meta_data' => '\Divar\KenarApiClient\Model\AddonsAddonMetaData',
        'phone' => 'string',
        'semantic' => 'array<string,string>',
        'semantic_data' => '\Divar\KenarApiClient\Model\AddonsAddonSemantic',
        'sensitive_semantic' => 'array<string,string>',
        'widgets' => 'object',
        'widgets_semantic' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'divar_user_id' => null,
        'filters' => null,
        'meta_data' => null,
        'phone' => null,
        'semantic' => null,
        'semantic_data' => null,
        'sensitive_semantic' => null,
        'widgets' => null,
        'widgets_semantic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'divar_user_id' => false,
        'filters' => false,
        'meta_data' => false,
        'phone' => false,
        'semantic' => false,
        'semantic_data' => false,
        'sensitive_semantic' => false,
        'widgets' => false,
        'widgets_semantic' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'divar_user_id' => 'divar_user_id',
        'filters' => 'filters',
        'meta_data' => 'meta_data',
        'phone' => 'phone',
        'semantic' => 'semantic',
        'semantic_data' => 'semantic_data',
        'sensitive_semantic' => 'sensitive_semantic',
        'widgets' => 'widgets',
        'widgets_semantic' => 'widgets_semantic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'divar_user_id' => 'setDivarUserId',
        'filters' => 'setFilters',
        'meta_data' => 'setMetaData',
        'phone' => 'setPhone',
        'semantic' => 'setSemantic',
        'semantic_data' => 'setSemanticData',
        'sensitive_semantic' => 'setSensitiveSemantic',
        'widgets' => 'setWidgets',
        'widgets_semantic' => 'setWidgetsSemantic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'divar_user_id' => 'getDivarUserId',
        'filters' => 'getFilters',
        'meta_data' => 'getMetaData',
        'phone' => 'getPhone',
        'semantic' => 'getSemantic',
        'semantic_data' => 'getSemanticData',
        'sensitive_semantic' => 'getSensitiveSemantic',
        'widgets' => 'getWidgets',
        'widgets_semantic' => 'getWidgetsSemantic'
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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('divar_user_id', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('meta_data', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('semantic', $data ?? [], null);
        $this->setIfExists('semantic_data', $data ?? [], null);
        $this->setIfExists('sensitive_semantic', $data ?? [], null);
        $this->setIfExists('widgets', $data ?? [], null);
        $this->setIfExists('widgets_semantic', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets divar_user_id
     *
     * @return string|null
     */
    public function getDivarUserId()
    {
        return $this->container['divar_user_id'];
    }

    /**
     * Sets divar_user_id
     *
     * @param string|null $divar_user_id divar_user_id
     *
     * @return self
     */
    public function setDivarUserId($divar_user_id)
    {
        if (is_null($divar_user_id)) {
            throw new \InvalidArgumentException('non-nullable divar_user_id cannot be null');
        }
        $this->container['divar_user_id'] = $divar_user_id;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Divar\KenarApiClient\Model\AddonsUserAddonFilters|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Divar\KenarApiClient\Model\AddonsUserAddonFilters|null $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return \Divar\KenarApiClient\Model\AddonsAddonMetaData|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param \Divar\KenarApiClient\Model\AddonsAddonMetaData|null $meta_data meta_data
     *
     * @return self
     */
    public function setMetaData($meta_data)
    {
        if (is_null($meta_data)) {
            throw new \InvalidArgumentException('non-nullable meta_data cannot be null');
        }
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets semantic
     *
     * @return array<string,string>|null
     */
    public function getSemantic()
    {
        return $this->container['semantic'];
    }

    /**
     * Sets semantic
     *
     * @param array<string,string>|null $semantic semantic
     *
     * @return self
     */
    public function setSemantic($semantic)
    {
        if (is_null($semantic)) {
            throw new \InvalidArgumentException('non-nullable semantic cannot be null');
        }
        $this->container['semantic'] = $semantic;

        return $this;
    }

    /**
     * Gets semantic_data
     *
     * @return \Divar\KenarApiClient\Model\AddonsAddonSemantic|null
     */
    public function getSemanticData()
    {
        return $this->container['semantic_data'];
    }

    /**
     * Sets semantic_data
     *
     * @param \Divar\KenarApiClient\Model\AddonsAddonSemantic|null $semantic_data semantic_data
     *
     * @return self
     */
    public function setSemanticData($semantic_data)
    {
        if (is_null($semantic_data)) {
            throw new \InvalidArgumentException('non-nullable semantic_data cannot be null');
        }
        $this->container['semantic_data'] = $semantic_data;

        return $this;
    }

    /**
     * Gets sensitive_semantic
     *
     * @return array<string,string>|null
     */
    public function getSensitiveSemantic()
    {
        return $this->container['sensitive_semantic'];
    }

    /**
     * Sets sensitive_semantic
     *
     * @param array<string,string>|null $sensitive_semantic sensitive_semantic
     *
     * @return self
     */
    public function setSensitiveSemantic($sensitive_semantic)
    {
        if (is_null($sensitive_semantic)) {
            throw new \InvalidArgumentException('non-nullable sensitive_semantic cannot be null');
        }
        $this->container['sensitive_semantic'] = $sensitive_semantic;

        return $this;
    }

    /**
     * Gets widgets
     *
     * @return object|null
     */
    public function getWidgets()
    {
        return $this->container['widgets'];
    }

    /**
     * Sets widgets
     *
     * @param object|null $widgets widgets
     *
     * @return self
     */
    public function setWidgets($widgets)
    {
        if (is_null($widgets)) {
            throw new \InvalidArgumentException('non-nullable widgets cannot be null');
        }
        $this->container['widgets'] = $widgets;

        return $this;
    }

    /**
     * Gets widgets_semantic
     *
     * @return object|null
     */
    public function getWidgetsSemantic()
    {
        return $this->container['widgets_semantic'];
    }

    /**
     * Sets widgets_semantic
     *
     * @param object|null $widgets_semantic widgets_semantic
     *
     * @return self
     */
    public function setWidgetsSemantic($widgets_semantic)
    {
        if (is_null($widgets_semantic)) {
            throw new \InvalidArgumentException('non-nullable widgets_semantic cannot be null');
        }
        $this->container['widgets_semantic'] = $widgets_semantic;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


