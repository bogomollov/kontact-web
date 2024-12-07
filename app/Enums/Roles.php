<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Roles extends Enum
{
    const Consultant = 'Консультант';
    const Chief = 'Начальник';
    const MainExpert = 'Главный специалист';
    const LeadingExpert = 'Ведущий эксперт';
    const AssistantMinister = 'Помощник министра';
    const ActingDeputyMinister = 'Исполняющий обязанности заместителя министра';
    const ActingMinister = 'Исполняющий обязанности министра';
}