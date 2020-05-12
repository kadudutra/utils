<?php

declare(strict_types=1);

namespace Formatters;

use Formatters\Enum\DateFormats;

/**
 * @copyright (c) 2020.
 * @link <https://github.com/kadudutra/utils.git>
 * @author Kadu Dutra <kadudutra7@gmail.com>
 */
class Date
{
    /**
     * Formata uma data de um formato para outro
     *
     * @param string $date
     * @param string $originFormat
     * @param string $toFormat
     * @return string
     */
    public static function convertDate(
        string $date,
        string $originFormat = DateFormats::DATE_BR,
        string $toFormat = DateFormats::DATE_BR
    ): string
    {
        $newDate = \DateTime::createFromFormat($originFormat, $date);
        return $newDate->format($toFormat);
    }
}
