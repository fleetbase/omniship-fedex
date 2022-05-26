<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TransitTimeType Enums
 * @subpackage Enumerations
 */
class TransitTimeType
{
    /**
     * Constant for value 'EIGHTEEN_DAYS'
     * @return string 'EIGHTEEN_DAYS'
     */
    const EIGHTEEN_DAYS = 'EIGHTEEN_DAYS';
    /**
     * Constant for value 'EIGHT_DAYS'
     * @return string 'EIGHT_DAYS'
     */
    const EIGHT_DAYS = 'EIGHT_DAYS';
    /**
     * Constant for value 'ELEVEN_DAYS'
     * @return string 'ELEVEN_DAYS'
     */
    const ELEVEN_DAYS = 'ELEVEN_DAYS';
    /**
     * Constant for value 'FIFTEEN_DAYS'
     * @return string 'FIFTEEN_DAYS'
     */
    const FIFTEEN_DAYS = 'FIFTEEN_DAYS';
    /**
     * Constant for value 'FIVE_DAYS'
     * @return string 'FIVE_DAYS'
     */
    const FIVE_DAYS = 'FIVE_DAYS';
    /**
     * Constant for value 'FOURTEEN_DAYS'
     * @return string 'FOURTEEN_DAYS'
     */
    const FOURTEEN_DAYS = 'FOURTEEN_DAYS';
    /**
     * Constant for value 'FOUR_DAYS'
     * @return string 'FOUR_DAYS'
     */
    const FOUR_DAYS = 'FOUR_DAYS';
    /**
     * Constant for value 'NINETEEN_DAYS'
     * @return string 'NINETEEN_DAYS'
     */
    const NINETEEN_DAYS = 'NINETEEN_DAYS';
    /**
     * Constant for value 'NINE_DAYS'
     * @return string 'NINE_DAYS'
     */
    const NINE_DAYS = 'NINE_DAYS';
    /**
     * Constant for value 'ONE_DAY'
     * @return string 'ONE_DAY'
     */
    const ONE_DAY = 'ONE_DAY';
    /**
     * Constant for value 'SEVENTEEN_DAYS'
     * @return string 'SEVENTEEN_DAYS'
     */
    const SEVENTEEN_DAYS = 'SEVENTEEN_DAYS';
    /**
     * Constant for value 'SEVEN_DAYS'
     * @return string 'SEVEN_DAYS'
     */
    const SEVEN_DAYS = 'SEVEN_DAYS';
    /**
     * Constant for value 'SIXTEEN_DAYS'
     * @return string 'SIXTEEN_DAYS'
     */
    const SIXTEEN_DAYS = 'SIXTEEN_DAYS';
    /**
     * Constant for value 'SIX_DAYS'
     * @return string 'SIX_DAYS'
     */
    const SIX_DAYS = 'SIX_DAYS';
    /**
     * Constant for value 'TEN_DAYS'
     * @return string 'TEN_DAYS'
     */
    const TEN_DAYS = 'TEN_DAYS';
    /**
     * Constant for value 'THIRTEEN_DAYS'
     * @return string 'THIRTEEN_DAYS'
     */
    const THIRTEEN_DAYS = 'THIRTEEN_DAYS';
    /**
     * Constant for value 'THREE_DAYS'
     * @return string 'THREE_DAYS'
     */
    const THREE_DAYS = 'THREE_DAYS';
    /**
     * Constant for value 'TWELVE_DAYS'
     * @return string 'TWELVE_DAYS'
     */
    const TWELVE_DAYS = 'TWELVE_DAYS';
    /**
     * Constant for value 'TWENTY_DAYS'
     * @return string 'TWENTY_DAYS'
     */
    const TWENTY_DAYS = 'TWENTY_DAYS';
    /**
     * Constant for value 'TWO_DAYS'
     * @return string 'TWO_DAYS'
     */
    const TWO_DAYS = 'TWO_DAYS';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const UNKNOWN = 'UNKNOWN';
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
     * @uses self::EIGHTEEN_DAYS
     * @uses self::EIGHT_DAYS
     * @uses self::ELEVEN_DAYS
     * @uses self::FIFTEEN_DAYS
     * @uses self::FIVE_DAYS
     * @uses self::FOURTEEN_DAYS
     * @uses self::FOUR_DAYS
     * @uses self::NINETEEN_DAYS
     * @uses self::NINE_DAYS
     * @uses self::ONE_DAY
     * @uses self::SEVENTEEN_DAYS
     * @uses self::SEVEN_DAYS
     * @uses self::SIXTEEN_DAYS
     * @uses self::SIX_DAYS
     * @uses self::TEN_DAYS
     * @uses self::THIRTEEN_DAYS
     * @uses self::THREE_DAYS
     * @uses self::TWELVE_DAYS
     * @uses self::TWENTY_DAYS
     * @uses self::TWO_DAYS
     * @uses self::UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::EIGHTEEN_DAYS,
            self::EIGHT_DAYS,
            self::ELEVEN_DAYS,
            self::FIFTEEN_DAYS,
            self::FIVE_DAYS,
            self::FOURTEEN_DAYS,
            self::FOUR_DAYS,
            self::NINETEEN_DAYS,
            self::NINE_DAYS,
            self::ONE_DAY,
            self::SEVENTEEN_DAYS,
            self::SEVEN_DAYS,
            self::SIXTEEN_DAYS,
            self::SIX_DAYS,
            self::TEN_DAYS,
            self::THIRTEEN_DAYS,
            self::THREE_DAYS,
            self::TWELVE_DAYS,
            self::TWENTY_DAYS,
            self::TWO_DAYS,
            self::UNKNOWN,
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
