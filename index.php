<?php

/**
 * Simple PHP Service
 * 
 * This is a minimal PHP service example for CI/CD demonstration
 */

function greet(string $name = 'World'): string
{
    return "Hello, {$name}!";
}

function add(int $a, int $b): int
{
    return $a + $b;
}

function multiply(int $a, int $b): int
{
    return $a * $b;
}

// Health check endpoint simulation
if (php_sapi_name() === 'cli') {
    echo "PHP Service is running\n";
    echo "Version: 1.0.0\n";
    echo "Health: OK\n";
}

