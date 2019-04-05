<?php
/**
 * Created by PhpStorm.
 * User: dusan.mikolas
 * Date: 2019-04-05
 * Time: 12:15
 */

namespace Mikolas;

class Converter
{
    protected static $conversionTable = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    /**
     * @param int $arab
     * @return string
     * @throws NegativeArgumentException
     */
    public static function arabicToRoman(int $arab): string
    {
        if ($arab < 1) {
            throw new NegativeArgumentException('Cant convert numbers lower than 1');
        }
        $roman = '';

        foreach (static::$conversionTable as $limit => $numeral) {
            while ($arab >= $limit) {
                $roman .= $numeral;
                $arab -= $limit;
            }
        }

        return $roman;
    }
}
