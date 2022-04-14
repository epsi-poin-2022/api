<?php

namespace App\Enum;

use ArchTech\Enums\InvokableCases;

enum RoleEnum
{
    use InvokableCases;

    case ROLE_ADMIN;
}