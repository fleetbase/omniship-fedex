<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for InternationalControlledExportType Enums
 * @subpackage Enumerations
 */
class InternationalControlledExportType
{
    /**
     * Constant for value 'DEA_036'
     * @return string 'DEA_036'
     */
    const DEA_036 = 'DEA_036';
    /**
     * Constant for value 'DEA_236'
     * @return string 'DEA_236'
     */
    const DEA_236 = 'DEA_236';
    /**
     * Constant for value 'DEA_486'
     * @return string 'DEA_486'
     */
    const DEA_486 = 'DEA_486';
    /**
     * Constant for value 'DSP_05'
     * @return string 'DSP_05'
     */
    const DSP_05 = 'DSP_05';
    /**
     * Constant for value 'DSP_61'
     * @return string 'DSP_61'
     */
    const DSP_61 = 'DSP_61';
    /**
     * Constant for value 'DSP_73'
     * @return string 'DSP_73'
     */
    const DSP_73 = 'DSP_73';
    /**
     * Constant for value 'DSP_85'
     * @return string 'DSP_85'
     */
    const DSP_85 = 'DSP_85';
    /**
     * Constant for value 'DSP_94'
     * @return string 'DSP_94'
     */
    const DSP_94 = 'DSP_94';
    /**
     * Constant for value 'DSP_LICENSE_AGREEMENT'
     * @return string 'DSP_LICENSE_AGREEMENT'
     */
    const DSP_LICENSE_AGREEMENT = 'DSP_LICENSE_AGREEMENT';
    /**
     * Constant for value 'FROM_FOREIGN_TRADE_ZONE'
     * @return string 'FROM_FOREIGN_TRADE_ZONE'
     */
    const FROM_FOREIGN_TRADE_ZONE = 'FROM_FOREIGN_TRADE_ZONE';
    /**
     * Constant for value 'WAREHOUSE_WITHDRAWAL'
     * @return string 'WAREHOUSE_WITHDRAWAL'
     */
    const WAREHOUSE_WITHDRAWAL = 'WAREHOUSE_WITHDRAWAL';
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
     * @uses self::DEA_036
     * @uses self::DEA_236
     * @uses self::DEA_486
     * @uses self::DSP_05
     * @uses self::DSP_61
     * @uses self::DSP_73
     * @uses self::DSP_85
     * @uses self::DSP_94
     * @uses self::DSP_LICENSE_AGREEMENT
     * @uses self::FROM_FOREIGN_TRADE_ZONE
     * @uses self::WAREHOUSE_WITHDRAWAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::DEA_036,
            self::DEA_236,
            self::DEA_486,
            self::DSP_05,
            self::DSP_61,
            self::DSP_73,
            self::DSP_85,
            self::DSP_94,
            self::DSP_LICENSE_AGREEMENT,
            self::FROM_FOREIGN_TRADE_ZONE,
            self::WAREHOUSE_WITHDRAWAL,
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
