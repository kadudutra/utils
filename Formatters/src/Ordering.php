<?php

declare(strict_types=1);

namespace Formatters;

/**
 * @copyright (c) 2020.
 * @link <https://github.com/kadudutra/utils.git>
 * @author Kadu Dutra <kadudutra7@gmail.com>
 */
class Ordering
{
    /**
     * Ordena array indicando uma chave do mesmo
     *
     * @param array $data
     * @param string $key
     * @return array
     */
    public static function orderArrayByKey(array $data, string $key): array
    {
        uasort($data, function ($a, $b) use ($key) {
            return $a[$key] <=> $b[$key];
        });

        return $data;
    }
}
