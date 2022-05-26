<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackIdentifierType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The type of track to be performed.
 * @subpackage Enumerations
 */
class TrackIdentifierType
{
    /**
     * Constant for value 'BILL_OF_LADING'
     * @return string 'BILL_OF_LADING'
     */
    const BILL_OF_LADING = 'BILL_OF_LADING';
    /**
     * Constant for value 'COD_RETURN_TRACKING_NUMBER'
     * @return string 'COD_RETURN_TRACKING_NUMBER'
     */
    const COD_RETURN_TRACKING_NUMBER = 'COD_RETURN_TRACKING_NUMBER';
    /**
     * Constant for value 'CUSTOMER_AUTHORIZATION_NUMBER'
     * @return string 'CUSTOMER_AUTHORIZATION_NUMBER'
     */
    const CUSTOMER_AUTHORIZATION_NUMBER = 'CUSTOMER_AUTHORIZATION_NUMBER';
    /**
     * Constant for value 'CUSTOMER_REFERENCE'
     * @return string 'CUSTOMER_REFERENCE'
     */
    const CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    /**
     * Constant for value 'DEPARTMENT'
     * @return string 'DEPARTMENT'
     */
    const DEPARTMENT = 'DEPARTMENT';
    /**
     * Constant for value 'DOCUMENT_AIRWAY_BILL'
     * @return string 'DOCUMENT_AIRWAY_BILL'
     */
    const DOCUMENT_AIRWAY_BILL = 'DOCUMENT_AIRWAY_BILL';
    /**
     * Constant for value 'FREE_FORM_REFERENCE'
     * @return string 'FREE_FORM_REFERENCE'
     */
    const FREE_FORM_REFERENCE = 'FREE_FORM_REFERENCE';
    /**
     * Constant for value 'GROUND_INTERNATIONAL'
     * @return string 'GROUND_INTERNATIONAL'
     */
    const GROUND_INTERNATIONAL = 'GROUND_INTERNATIONAL';
    /**
     * Constant for value 'GROUND_SHIPMENT_ID'
     * @return string 'GROUND_SHIPMENT_ID'
     */
    const GROUND_SHIPMENT_ID = 'GROUND_SHIPMENT_ID';
    /**
     * Constant for value 'GROUP_MPS'
     * @return string 'GROUP_MPS'
     */
    const GROUP_MPS = 'GROUP_MPS';
    /**
     * Constant for value 'INVOICE'
     * @return string 'INVOICE'
     */
    const INVOICE = 'INVOICE';
    /**
     * Constant for value 'JOB_GLOBAL_TRACKING_NUMBER'
     * @return string 'JOB_GLOBAL_TRACKING_NUMBER'
     */
    const JOB_GLOBAL_TRACKING_NUMBER = 'JOB_GLOBAL_TRACKING_NUMBER';
    /**
     * Constant for value 'ORDER_GLOBAL_TRACKING_NUMBER'
     * @return string 'ORDER_GLOBAL_TRACKING_NUMBER'
     */
    const ORDER_GLOBAL_TRACKING_NUMBER = 'ORDER_GLOBAL_TRACKING_NUMBER';
    /**
     * Constant for value 'ORDER_TO_PAY_NUMBER'
     * @return string 'ORDER_TO_PAY_NUMBER'
     */
    const ORDER_TO_PAY_NUMBER = 'ORDER_TO_PAY_NUMBER';
    /**
     * Constant for value 'OUTBOUND_LINK_TO_RETURN'
     * @return string 'OUTBOUND_LINK_TO_RETURN'
     */
    const OUTBOUND_LINK_TO_RETURN = 'OUTBOUND_LINK_TO_RETURN';
    /**
     * Constant for value 'PARTNER_CARRIER_NUMBER'
     * @return string 'PARTNER_CARRIER_NUMBER'
     */
    const PARTNER_CARRIER_NUMBER = 'PARTNER_CARRIER_NUMBER';
    /**
     * Constant for value 'PART_NUMBER'
     * @return string 'PART_NUMBER'
     */
    const PART_NUMBER = 'PART_NUMBER';
    /**
     * Constant for value 'PURCHASE_ORDER'
     * @return string 'PURCHASE_ORDER'
     */
    const PURCHASE_ORDER = 'PURCHASE_ORDER';
    /**
     * Constant for value 'REROUTE_TRACKING_NUMBER'
     * @return string 'REROUTE_TRACKING_NUMBER'
     */
    const REROUTE_TRACKING_NUMBER = 'REROUTE_TRACKING_NUMBER';
    /**
     * Constant for value 'RETURNED_TO_SHIPPER_TRACKING_NUMBER'
     * @return string 'RETURNED_TO_SHIPPER_TRACKING_NUMBER'
     */
    const RETURNED_TO_SHIPPER_TRACKING_NUMBER = 'RETURNED_TO_SHIPPER_TRACKING_NUMBER';
    /**
     * Constant for value 'RETURN_MATERIALS_AUTHORIZATION'
     * @return string 'RETURN_MATERIALS_AUTHORIZATION'
     */
    const RETURN_MATERIALS_AUTHORIZATION = 'RETURN_MATERIALS_AUTHORIZATION';
    /**
     * Constant for value 'SHIPPER_REFERENCE'
     * @return string 'SHIPPER_REFERENCE'
     */
    const SHIPPER_REFERENCE = 'SHIPPER_REFERENCE';
    /**
     * Constant for value 'STANDARD_MPS'
     * @return string 'STANDARD_MPS'
     */
    const STANDARD_MPS = 'STANDARD_MPS';
    /**
     * Constant for value 'TRACKING_NUMBER_OR_DOORTAG'
     * @return string 'TRACKING_NUMBER_OR_DOORTAG'
     */
    const TRACKING_NUMBER_OR_DOORTAG = 'TRACKING_NUMBER_OR_DOORTAG';
    /**
     * Constant for value 'TRANSPORTATION_CONTROL_NUMBER'
     * @return string 'TRANSPORTATION_CONTROL_NUMBER'
     */
    const TRANSPORTATION_CONTROL_NUMBER = 'TRANSPORTATION_CONTROL_NUMBER';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::BILL_OF_LADING
     * @uses self::COD_RETURN_TRACKING_NUMBER
     * @uses self::CUSTOMER_AUTHORIZATION_NUMBER
     * @uses self::CUSTOMER_REFERENCE
     * @uses self::DEPARTMENT
     * @uses self::DOCUMENT_AIRWAY_BILL
     * @uses self::FREE_FORM_REFERENCE
     * @uses self::GROUND_INTERNATIONAL
     * @uses self::GROUND_SHIPMENT_ID
     * @uses self::GROUP_MPS
     * @uses self::INVOICE
     * @uses self::JOB_GLOBAL_TRACKING_NUMBER
     * @uses self::ORDER_GLOBAL_TRACKING_NUMBER
     * @uses self::ORDER_TO_PAY_NUMBER
     * @uses self::OUTBOUND_LINK_TO_RETURN
     * @uses self::PARTNER_CARRIER_NUMBER
     * @uses self::PART_NUMBER
     * @uses self::PURCHASE_ORDER
     * @uses self::REROUTE_TRACKING_NUMBER
     * @uses self::RETURNED_TO_SHIPPER_TRACKING_NUMBER
     * @uses self::RETURN_MATERIALS_AUTHORIZATION
     * @uses self::SHIPPER_REFERENCE
     * @uses self::STANDARD_MPS
     * @uses self::TRACKING_NUMBER_OR_DOORTAG
     * @uses self::TRANSPORTATION_CONTROL_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BILL_OF_LADING,
            self::COD_RETURN_TRACKING_NUMBER,
            self::CUSTOMER_AUTHORIZATION_NUMBER,
            self::CUSTOMER_REFERENCE,
            self::DEPARTMENT,
            self::DOCUMENT_AIRWAY_BILL,
            self::FREE_FORM_REFERENCE,
            self::GROUND_INTERNATIONAL,
            self::GROUND_SHIPMENT_ID,
            self::GROUP_MPS,
            self::INVOICE,
            self::JOB_GLOBAL_TRACKING_NUMBER,
            self::ORDER_GLOBAL_TRACKING_NUMBER,
            self::ORDER_TO_PAY_NUMBER,
            self::OUTBOUND_LINK_TO_RETURN,
            self::PARTNER_CARRIER_NUMBER,
            self::PART_NUMBER,
            self::PURCHASE_ORDER,
            self::REROUTE_TRACKING_NUMBER,
            self::RETURNED_TO_SHIPPER_TRACKING_NUMBER,
            self::RETURN_MATERIALS_AUTHORIZATION,
            self::SHIPPER_REFERENCE,
            self::STANDARD_MPS,
            self::TRACKING_NUMBER_OR_DOORTAG,
            self::TRANSPORTATION_CONTROL_NUMBER,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
