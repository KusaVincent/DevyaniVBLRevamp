<?php

namespace App\Enum;

enum Status: int
{
    case PENDING = 0;
    case PROCESSING =1;
    case PROCESSED = 2;
    case FAILED = 3;
    case ABANDONED = 4;
}
