<?php
declare(strict_types=1);

namespace Dojo;


class Calculator
{
    public function add(string $numbers): int   // '//;\n1;2'
    {
        $delimeter = $this->getDelimeter($numbers);
        $numbers = $this->stripDelimeter($numbers);

        $newString = str_replace('\n', $delimeter, $numbers);
        $explodedNumbers = explode($delimeter, $newString);
        return array_sum($explodedNumbers);
    }

    private function getDelimeter(string $numbers): string {
        if (strpos($numbers, '//') === 0) {
            return $numbers[2];
        }
        return ',';
    }

    private function stripDelimeter(string $numbers): string
    {
        if (strpos($numbers, '//') === 0) {
            $numbers = substr($numbers, 5);
        }
        return $numbers;
    }
}
