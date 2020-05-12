<?php

declare(strict_types=1);

namespace Formatters;

use Formatters\Enum\MoneyFormats;

/**
 * @copyright (c) 2020.
 * @link <https://github.com/kadudutra/utils.git>
 * @author Kadu Dutra <kadudutra7@gmail.com>
 */
class Money
{
    /**
     * Converte valor a partir de um prefixo para o formato monetario
     *
     * @param float $value
     * @param string $prefixMoney
     * @return string
     */
    public static function convertValueToMoney(
        float $value,
        string $prefixMoney = MoneyFormats::BR
    ): string
    {
        $formated = number_format($value, 2, ',', '.');
        $formatedWithPrefix = sprintf(
            $prefixMoney,
            $formated
        );

        return $formatedWithPrefix;
    }

    /**
     * Converte valores de um array a partir de um prefixo para o formato monetario
     *
     * @param array $data
     * @param string $prefixKey
     * @param string $prefixMoney
     * @return array
     */
    public static function convertArrayValueToMoney(
        array $data,
        string $prefixKey = 'Valor',
        string $prefixMoney = MoneyFormats::BR
    ): array
    {
        foreach ($data as $key => $value) {
            if (strpos($key, $prefixKey) !== false) {
                $data["format_${key}"] = self::convertValueToMoney((float)$value, $prefixMoney);
            }
        }

        return $data;
    }
}
