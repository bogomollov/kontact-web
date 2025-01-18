<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Roles extends Enum
{
    const Admin = 'Администратор';
    const User = 'Пользователь';
}
