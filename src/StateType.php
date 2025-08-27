<?php

namespace App;

enum StateType: string
{
    case READY = 'Ready';
    case WAITING = 'Waiting';

    public function labelOrOtherName(): string
    {
        return match ($this) {
            self::READY => 'READYYYYYY',
            self::WAITING => 'WAITINGGGGGG'
        };
    }
}
