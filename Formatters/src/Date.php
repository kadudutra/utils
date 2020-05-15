<?php

declare(strict_types=1);

namespace Formatters;

use Formatters\Enum\DateFormats;
use Formatters\Enum\TypesTime;

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

    /**
     * Cria uma data atual em um formato especifico
     *
     * @param string $responseFormat
     * @return string
     */
    public static function createDateNow($responseFormat = DateFormats::DATE_US): string
    {
        $now = (new \DateTime())->format(DateFormats::DATE_BR);
        return self::convertDate($now, DateFormats::DATE_BR, $responseFormat);
    }

    /**
     * Adicionar dias em uma data
     *
     * @param string $date
     * @param int $days
     * @param string $responseFormat
     * @return string
     */
    public static function addDaysToDate(
        string $date,
        int $days,
        string $responseFormat = DateFormats::DATE_BR
    ): string
    {
        return self::operationTimeToDate($date, $days, 'add', TypesTime::DAY, $responseFormat);
    }

    /**
     * Remove dias em uma data
     *
     * @param string $date
     * @param int $days
     * @param string $responseFormat
     * @return string
     */
    public static function removeDaysToDate(
        string $date,
        int $days,
        string $responseFormat = DateFormats::DATE_BR
    ): string
    {
        return self::operationTimeToDate($date, $days, 'sub', TypesTime::DAY, $responseFormat);
    }

    /**
     * @param string $date
     * @param int $quantity
     * @param string $typeTime
     * @param string $operation
     * @param string $responseFormat
     * @return string
     */
    private static function operationTimeToDate(
        string $date,
        int $quantity,
        string $operation,
        string $typeTime,
        string $responseFormat
    ): string
    {
        $date = \DateTime::createFromFormat($responseFormat, $date);
        $dateInterval = self::dateInterval($quantity, $typeTime);
        $date->$operation($dateInterval);
        return $date->format($responseFormat);
    }

    private static function dateInterval(int $quantity, string $typeTime): \DateInterval
    {
        $paramDateInterval = sprintf(
            "P%s%s",
            $quantity,
            $typeTime
        );
        return new \DateInterval($paramDateInterval);
    }
}
