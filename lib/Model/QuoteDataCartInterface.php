<?php
/**
 * QuoteDataCartInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Krak\MagentoApiClient\Model;

use \ArrayAccess;
use \Krak\MagentoApiClient\ObjectSerializer;

/**
 * QuoteDataCartInterface Class Doc Comment
 *
 * @category Class
 * @description Interface CartInterface
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataCartInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-cart-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'convertedAt' => 'string',
        'isActive' => 'bool',
        'isVirtual' => 'bool',
        'items' => '\Krak\MagentoApiClient\Model\QuoteDataCartItemInterface[]',
        'itemsCount' => 'int',
        'itemsQty' => 'float',
        'customer' => '\Krak\MagentoApiClient\Model\CustomerDataCustomerInterface',
        'billingAddress' => '\Krak\MagentoApiClient\Model\QuoteDataAddressInterface',
        'reservedOrderId' => 'int',
        'origOrderId' => 'int',
        'currency' => '\Krak\MagentoApiClient\Model\QuoteDataCurrencyInterface',
        'customerIsGuest' => 'bool',
        'customerNote' => 'string',
        'customerNoteNotify' => 'bool',
        'customerTaxClassId' => 'int',
        'storeId' => 'int',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\QuoteDataCartExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'convertedAt' => null,
        'isActive' => null,
        'isVirtual' => null,
        'items' => null,
        'itemsCount' => null,
        'itemsQty' => null,
        'customer' => null,
        'billingAddress' => null,
        'reservedOrderId' => null,
        'origOrderId' => null,
        'currency' => null,
        'customerIsGuest' => null,
        'customerNote' => null,
        'customerNoteNotify' => null,
        'customerTaxClassId' => null,
        'storeId' => null,
        'extensionAttributes' => null
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
        'id' => 'id',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'convertedAt' => 'converted_at',
        'isActive' => 'is_active',
        'isVirtual' => 'is_virtual',
        'items' => 'items',
        'itemsCount' => 'items_count',
        'itemsQty' => 'items_qty',
        'customer' => 'customer',
        'billingAddress' => 'billing_address',
        'reservedOrderId' => 'reserved_order_id',
        'origOrderId' => 'orig_order_id',
        'currency' => 'currency',
        'customerIsGuest' => 'customer_is_guest',
        'customerNote' => 'customer_note',
        'customerNoteNotify' => 'customer_note_notify',
        'customerTaxClassId' => 'customer_tax_class_id',
        'storeId' => 'store_id',
        'extensionAttributes' => 'extension_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'convertedAt' => 'setConvertedAt',
        'isActive' => 'setIsActive',
        'isVirtual' => 'setIsVirtual',
        'items' => 'setItems',
        'itemsCount' => 'setItemsCount',
        'itemsQty' => 'setItemsQty',
        'customer' => 'setCustomer',
        'billingAddress' => 'setBillingAddress',
        'reservedOrderId' => 'setReservedOrderId',
        'origOrderId' => 'setOrigOrderId',
        'currency' => 'setCurrency',
        'customerIsGuest' => 'setCustomerIsGuest',
        'customerNote' => 'setCustomerNote',
        'customerNoteNotify' => 'setCustomerNoteNotify',
        'customerTaxClassId' => 'setCustomerTaxClassId',
        'storeId' => 'setStoreId',
        'extensionAttributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'convertedAt' => 'getConvertedAt',
        'isActive' => 'getIsActive',
        'isVirtual' => 'getIsVirtual',
        'items' => 'getItems',
        'itemsCount' => 'getItemsCount',
        'itemsQty' => 'getItemsQty',
        'customer' => 'getCustomer',
        'billingAddress' => 'getBillingAddress',
        'reservedOrderId' => 'getReservedOrderId',
        'origOrderId' => 'getOrigOrderId',
        'currency' => 'getCurrency',
        'customerIsGuest' => 'getCustomerIsGuest',
        'customerNote' => 'getCustomerNote',
        'customerNoteNotify' => 'getCustomerNoteNotify',
        'customerTaxClassId' => 'getCustomerTaxClassId',
        'storeId' => 'getStoreId',
        'extensionAttributes' => 'getExtensionAttributes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['convertedAt'] = isset($data['convertedAt']) ? $data['convertedAt'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['isVirtual'] = isset($data['isVirtual']) ? $data['isVirtual'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['itemsCount'] = isset($data['itemsCount']) ? $data['itemsCount'] : null;
        $this->container['itemsQty'] = isset($data['itemsQty']) ? $data['itemsQty'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['reservedOrderId'] = isset($data['reservedOrderId']) ? $data['reservedOrderId'] : null;
        $this->container['origOrderId'] = isset($data['origOrderId']) ? $data['origOrderId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customerIsGuest'] = isset($data['customerIsGuest']) ? $data['customerIsGuest'] : null;
        $this->container['customerNote'] = isset($data['customerNote']) ? $data['customerNote'] : null;
        $this->container['customerNoteNotify'] = isset($data['customerNoteNotify']) ? $data['customerNoteNotify'] : null;
        $this->container['customerTaxClassId'] = isset($data['customerTaxClassId']) ? $data['customerTaxClassId'] : null;
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['storeId'] === null) {
            $invalidProperties[] = "'storeId' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['customer'] === null) {
            return false;
        }
        if ($this->container['storeId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Cart/quote ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string $createdAt Cart creation date and time. Otherwise, null.
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param string $updatedAt Cart last update date and time. Otherwise, null.
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets convertedAt
     *
     * @return string
     */
    public function getConvertedAt()
    {
        return $this->container['convertedAt'];
    }

    /**
     * Sets convertedAt
     *
     * @param string $convertedAt Cart conversion date and time. Otherwise, null.
     *
     * @return $this
     */
    public function setConvertedAt($convertedAt)
    {
        $this->container['convertedAt'] = $convertedAt;

        return $this;
    }

    /**
     * Gets isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool $isActive Active status flag value. Otherwise, null.
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets isVirtual
     *
     * @return bool
     */
    public function getIsVirtual()
    {
        return $this->container['isVirtual'];
    }

    /**
     * Sets isVirtual
     *
     * @param bool $isVirtual Virtual flag value. Otherwise, null.
     *
     * @return $this
     */
    public function setIsVirtual($isVirtual)
    {
        $this->container['isVirtual'] = $isVirtual;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Krak\MagentoApiClient\Model\QuoteDataCartItemInterface[] $items Array of items. Otherwise, null.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets itemsCount
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->container['itemsCount'];
    }

    /**
     * Sets itemsCount
     *
     * @param int $itemsCount Number of different items or products in the cart. Otherwise, null.
     *
     * @return $this
     */
    public function setItemsCount($itemsCount)
    {
        $this->container['itemsCount'] = $itemsCount;

        return $this;
    }

    /**
     * Gets itemsQty
     *
     * @return float
     */
    public function getItemsQty()
    {
        return $this->container['itemsQty'];
    }

    /**
     * Sets itemsQty
     *
     * @param float $itemsQty Total quantity of all cart items. Otherwise, null.
     *
     * @return $this
     */
    public function setItemsQty($itemsQty)
    {
        $this->container['itemsQty'] = $itemsQty;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Krak\MagentoApiClient\Model\CustomerDataCustomerInterface $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \Krak\MagentoApiClient\Model\QuoteDataAddressInterface
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \Krak\MagentoApiClient\Model\QuoteDataAddressInterface $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets reservedOrderId
     *
     * @return int
     */
    public function getReservedOrderId()
    {
        return $this->container['reservedOrderId'];
    }

    /**
     * Sets reservedOrderId
     *
     * @param int $reservedOrderId Reserved order ID. Otherwise, null.
     *
     * @return $this
     */
    public function setReservedOrderId($reservedOrderId)
    {
        $this->container['reservedOrderId'] = $reservedOrderId;

        return $this;
    }

    /**
     * Gets origOrderId
     *
     * @return int
     */
    public function getOrigOrderId()
    {
        return $this->container['origOrderId'];
    }

    /**
     * Sets origOrderId
     *
     * @param int $origOrderId Original order ID. Otherwise, null.
     *
     * @return $this
     */
    public function setOrigOrderId($origOrderId)
    {
        $this->container['origOrderId'] = $origOrderId;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Krak\MagentoApiClient\Model\QuoteDataCurrencyInterface
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Krak\MagentoApiClient\Model\QuoteDataCurrencyInterface $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customerIsGuest
     *
     * @return bool
     */
    public function getCustomerIsGuest()
    {
        return $this->container['customerIsGuest'];
    }

    /**
     * Sets customerIsGuest
     *
     * @param bool $customerIsGuest For guest customers, false for logged in customers
     *
     * @return $this
     */
    public function setCustomerIsGuest($customerIsGuest)
    {
        $this->container['customerIsGuest'] = $customerIsGuest;

        return $this;
    }

    /**
     * Gets customerNote
     *
     * @return string
     */
    public function getCustomerNote()
    {
        return $this->container['customerNote'];
    }

    /**
     * Sets customerNote
     *
     * @param string $customerNote Notice text
     *
     * @return $this
     */
    public function setCustomerNote($customerNote)
    {
        $this->container['customerNote'] = $customerNote;

        return $this;
    }

    /**
     * Gets customerNoteNotify
     *
     * @return bool
     */
    public function getCustomerNoteNotify()
    {
        return $this->container['customerNoteNotify'];
    }

    /**
     * Sets customerNoteNotify
     *
     * @param bool $customerNoteNotify Customer notification flag
     *
     * @return $this
     */
    public function setCustomerNoteNotify($customerNoteNotify)
    {
        $this->container['customerNoteNotify'] = $customerNoteNotify;

        return $this;
    }

    /**
     * Gets customerTaxClassId
     *
     * @return int
     */
    public function getCustomerTaxClassId()
    {
        return $this->container['customerTaxClassId'];
    }

    /**
     * Sets customerTaxClassId
     *
     * @param int $customerTaxClassId Customer tax class ID.
     *
     * @return $this
     */
    public function setCustomerTaxClassId($customerTaxClassId)
    {
        $this->container['customerTaxClassId'] = $customerTaxClassId;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param int $storeId Store identifier
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\QuoteDataCartExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\QuoteDataCartExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

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


