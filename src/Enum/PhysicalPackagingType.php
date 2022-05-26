<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PhysicalPackagingType Enums
 * Meta informations extracted from the WSDL
 * - documentation: This enumeration rationalizes the former FedEx Express international "admissibility package" types (based on ANSI X.12) and the FedEx Freight packaging types. The values represented are those common to both carriers.
 * @subpackage Enumerations
 */
class PhysicalPackagingType
{
    /**
     * Constant for value 'BAG'
     * @return string 'BAG'
     */
    const BAG = 'BAG';
    /**
     * Constant for value 'BARREL'
     * @return string 'BARREL'
     */
    const BARREL = 'BARREL';
    /**
     * Constant for value 'BASKET'
     * @return string 'BASKET'
     */
    const BASKET = 'BASKET';
    /**
     * Constant for value 'BOX'
     * @return string 'BOX'
     */
    const BOX = 'BOX';
    /**
     * Constant for value 'BUCKET'
     * @return string 'BUCKET'
     */
    const BUCKET = 'BUCKET';
    /**
     * Constant for value 'BUNDLE'
     * @return string 'BUNDLE'
     */
    const BUNDLE = 'BUNDLE';
    /**
     * Constant for value 'CARTON'
     * @return string 'CARTON'
     */
    const CARTON = 'CARTON';
    /**
     * Constant for value 'CASE'
     * @return string 'CASE'
     */
    const CASE = 'CASE';
    /**
     * Constant for value 'CONTAINER'
     * @return string 'CONTAINER'
     */
    const CONTAINER = 'CONTAINER';
    /**
     * Constant for value 'CRATE'
     * @return string 'CRATE'
     */
    const CRATE = 'CRATE';
    /**
     * Constant for value 'CYLINDER'
     * @return string 'CYLINDER'
     */
    const CYLINDER = 'CYLINDER';
    /**
     * Constant for value 'DRUM'
     * @return string 'DRUM'
     */
    const DRUM = 'DRUM';
    /**
     * Constant for value 'ENVELOPE'
     * @return string 'ENVELOPE'
     */
    const ENVELOPE = 'ENVELOPE';
    /**
     * Constant for value 'HAMPER'
     * @return string 'HAMPER'
     */
    const HAMPER = 'HAMPER';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'PAIL'
     * @return string 'PAIL'
     */
    const PAIL = 'PAIL';
    /**
     * Constant for value 'PALLET'
     * @return string 'PALLET'
     */
    const PALLET = 'PALLET';
    /**
     * Constant for value 'PIECE'
     * @return string 'PIECE'
     */
    const PIECE = 'PIECE';
    /**
     * Constant for value 'REEL'
     * @return string 'REEL'
     */
    const REEL = 'REEL';
    /**
     * Constant for value 'ROLL'
     * @return string 'ROLL'
     */
    const ROLL = 'ROLL';
    /**
     * Constant for value 'SKID'
     * @return string 'SKID'
     */
    const SKID = 'SKID';
    /**
     * Constant for value 'TANK'
     * @return string 'TANK'
     */
    const TANK = 'TANK';
    /**
     * Constant for value 'TUBE'
     * @return string 'TUBE'
     */
    const TUBE = 'TUBE';
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
     * @uses self::BAG
     * @uses self::BARREL
     * @uses self::BASKET
     * @uses self::BOX
     * @uses self::BUCKET
     * @uses self::BUNDLE
     * @uses self::CARTON
     * @uses self::CASE
     * @uses self::CONTAINER
     * @uses self::CRATE
     * @uses self::CYLINDER
     * @uses self::DRUM
     * @uses self::ENVELOPE
     * @uses self::HAMPER
     * @uses self::OTHER
     * @uses self::PAIL
     * @uses self::PALLET
     * @uses self::PIECE
     * @uses self::REEL
     * @uses self::ROLL
     * @uses self::SKID
     * @uses self::TANK
     * @uses self::TUBE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BAG,
            self::BARREL,
            self::BASKET,
            self::BOX,
            self::BUCKET,
            self::BUNDLE,
            self::CARTON,
            self::CASE,
            self::CONTAINER,
            self::CRATE,
            self::CYLINDER,
            self::DRUM,
            self::ENVELOPE,
            self::HAMPER,
            self::OTHER,
            self::PAIL,
            self::PALLET,
            self::PIECE,
            self::REEL,
            self::ROLL,
            self::SKID,
            self::TANK,
            self::TUBE,
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
