<?php

namespace core;

class Validator {
    public static function string($value, $min = 1, $max = INF): bool {
        return trim(strlen($value)) >= $min && strlen($value) <= 100;
    }

}