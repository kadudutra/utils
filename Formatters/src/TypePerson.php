<?php

declare(strict_types=1);

namespace Formatters;

use Formatters\Enum\TypesPerson;

/**
 * @copyright (c) 2020.
 * @link <https://github.com/kadudutra/utils.git>
 * @author Kadu Dutra <kadudutra7@gmail.com>
 */
class TypePerson
{
    /**
     * @param string $cnpj_cpf
     * @return int
     */
    public static function verify(string $cnpj_cpf): int
    {
        return strlen($cnpj_cpf) === 11 ? TypesPerson::PHYSICAL_PERSON : TypesPerson::LEGAL_PERSON;
    }
}
