<?php

declare(strict_types=1);

namespace Formatters;

/**
 * @copyright (c) 2020.
 * @link <https://github.com/kadudutra/utils.git>
 * @author Kadu Dutra <kadudutra7@gmail.com>
 */
class CnpjCpf
{
    /**
     * @param string $cnpj_cpf
     * @return string
     */
    public static function formatToId(string $cnpj_cpf): string
    {
        return '1' . str_pad($cnpj_cpf, 14, '0', STR_PAD_LEFT);
    }
}
