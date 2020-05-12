<?php

declare(strict_types=1);

namespace Formatters;

/**
 * @copyright (c) 2020.
 * @link <https://github.com/kadudutra/utils.git>
 * @author Kadu Dutra <kadudutra7@gmail.com>
 */
class Number
{
    /**
     * Limpa string e deixa apenas números
     *
     * @param $value
     * @return string
     */
    public static function justNumber($value): string
    {
        return preg_replace('/[^0-9]/', '', $value);
    }
}
