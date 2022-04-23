<?php

namespace App\Services;

use Carbon\Carbon;
use Spatie\DataTransferObject\Caster;

class DateCaster implements Caster
{
    public function __construct(
        private array $types,
        private string $format = 'Y-m-d'
    ) {}

    public function cast(mixed $value): mixed
    {
        return Carbon::createFromFormat($this->format, $value);
    }
}
