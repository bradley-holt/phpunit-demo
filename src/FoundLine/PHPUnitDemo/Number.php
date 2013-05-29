<?php

namespace FoundLine\PHPUnitDemo;

final class Number
{
    /**
     * @var string
     */
    protected $operand;

    /**
     * @var integer
     */
    private $scale;

    public function __construct($operand = '')
    {
        if (!is_numeric($operand)) {
            throw new \InvalidArgumentException('Operand must be numeric');
        }
        $this->operand = (string) $operand;
        $this->scale = strlen($this->operand) - strpos($this->operand, '.') - 1;
    }

    public function __toString()
    {
        return $this->operand;
    }

    public function add(Number $value)
    {
        return new Number(bcadd($this->operand, $value->operand, max($this->scale, $value->scale)));
    }

    public function sub(Number $value)
    {
        return new Number(bcsub($this->operand, $value->operand, max($this->scale, $value->scale)));
    }

    public function mul(Number $value)
    {
        return new Number(bcmul($this->operand, $value->operand, $this->scale + $value->scale));
    }

    public function div(Number $value)
    {
        return new Number(bcdiv($this->operand, $value->operand, $this->scale + $value->scale));
    }
}
