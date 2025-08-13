<?php

if (! function_exists('formatPhoneNumber')) {
    function formatPhoneNumber(?string $number, bool $removePlusForWaLink = true): ?string
    {
        if (empty($number)) {
            return null;
        }

        $cleaned = preg_replace('/[^\d+]/', '', preg_replace('/\s+/', '', $number));

        if (preg_match('/^\+1+(\d+)/', $cleaned, $matches)) {
            $cleaned = '+1'.$matches[1];
        }

        return $removePlusForWaLink ? ltrim($cleaned, '+') : $cleaned;
    }
}
