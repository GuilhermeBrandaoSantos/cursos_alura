<?php

namespace Alura\Pdo\Domain\Model;

class Phone
{
    private $id;
    private $area_code;
    private $number;

    public function __construct(?int $id, string $area_code, string $number)
    {
        $this->id = $id;
        $this->area_code = $area_code;
        $this->number = $number;
    }

    public function formattedPhone(): string
    {
        return "($this->area_code) $this->number";
    }
}
