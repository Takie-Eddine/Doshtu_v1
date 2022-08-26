<?php


namespace App\Http\Enumerations;

use Spatie\Enum\Enum;

final class ClientStatus extends Enum
{
    const notPayed = 1;
    const payed = 2;
    const blocked = 3;

}
