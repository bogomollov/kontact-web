<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Departments extends Enum
{
    const DigitalDevelopment = 'Развитие цифровых технологий';
    const DigitalDevelopmentFinancial = 'Цифровое развитие в финансово-экономической сфере';
    const DigitalDevelopmentSocial = 'Цифровое развитие в социальной сфере';
    const DigitalDevelopmentAdministration = 'Цифровое развитие в сфере государственного управления';
    const DigitalDevelopmentLocalGovernment = 'Цифровое развитие местного самоуправления';
    const GeographicInformationSystems = 'Геоинформационные системы';
    const CommunicationsDepartment = 'Управление в сфере связи и коммуникаций';
    const PlanningFinancingGovernment = 'Планирования, финансирования и государственного заказа';
    const LegalPersonnelAnticorruption = 'Правовая, кадровая и антикоррупционная работа';
    const WorkOrganizationControl = 'Организация работы и контроля';
    const InformationSecurityManagement = 'Управление информационной безопасностью';
    const ProjectManagement = 'Управление проектной деятельностью';
}