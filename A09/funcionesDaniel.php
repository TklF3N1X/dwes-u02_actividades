<?php
/**
 * Returns the sum of two numbers.
 *
 * @param int $firstNumber First operand.
 * @param int $secondNumber Second operand.
 * @return int Sum of both operands.
 */

function suma(int $a, int $b): int {
    return $a + $b;
}

function resta(int $a, int $b): int {
    return $a - $b;
}

function multiplicacion(int $a, int $b): int {
    return $a * $b;
}

function dividir(int $a, int $b): float {
    return $a / $b;
}

function modulo(int $a): int {
    if($a < 0) return -$a;
    return $a;
}

function igualdad(int $a, int $b): bool {
    return $a == $b;
}

function esPar(int $a): bool {
    return $a % 2 == 0;
}