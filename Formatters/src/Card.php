<?php

declare(strict_types=1);

namespace Formatters;

/**
 * @copyright (c) 2020
 * @link <https://github.com/kadudutra/utils.git>
 * @author Kadu Dutra <kadudutra7@gmail.com>
 */
class Card
{
    /**
     * Adiciona máscara ao cartão de crédito
     *
     * @param string $card
     * @return string
     */
    public static function addMask(string $card): string
    {
        return substr_replace(trim($card), "******", 6, 6);
    }
}
