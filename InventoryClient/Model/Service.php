<?php
/**
 * Service
 *
 * PHP version 5
 *
 * @category Class
 * @package  InventoryClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * InventoryAPI
 *
 * Orkiv Inventory API client
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace InventoryClient\Model;

use \ArrayAccess;

/**
 * Service Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     InventoryClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Service implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'desc' => 'string',
        'price' => 'string',
        'event' => '\InventoryClient\Model\EventRequest',
        'recurpric' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'name' => 'name',
        'desc' => 'desc',
        'price' => 'price',
        'event' => 'event',
        'recurpric' => 'recurpric'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'name' => 'setName',
        'desc' => 'setDesc',
        'price' => 'setPrice',
        'event' => 'setEvent',
        'recurpric' => 'setRecurpric'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'name' => 'getName',
        'desc' => 'getDesc',
        'price' => 'getPrice',
        'event' => 'getEvent',
        'recurpric' => 'getRecurpric'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['recurpric'] = isset($data['recurpric']) ? $data['recurpric'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of service
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets desc
     * @return string
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     * @param string $desc Richtext description of item
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets price
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param string $price Upfront cost of service in hundreds
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets event
     * @return \InventoryClient\Model\EventRequest
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     * @param \InventoryClient\Model\EventRequest $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets recurpric
     * @return string
     */
    public function getRecurpric()
    {
        return $this->container['recurpric'];
    }

    /**
     * Sets recurpric
     * @param string $recurpric Recurring monthly cost of subscription
     * @return $this
     */
    public function setRecurpric($recurpric)
    {
        $this->container['recurpric'] = $recurpric;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\InventoryClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\InventoryClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


