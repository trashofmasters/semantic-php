<?php

namespace Foo\Ns;

class Bar
{
    public $pub;
    private $pri;
    protected $pro;
    private $uninitialised; // $uninitialised: *uninitialised*
    private $string = 'helo'; // $string: string. Works
    private $partiallyQualified = new Partially\Qualified\Name(); // $partiallyQualified: Partially\Qualified\Name Works
    private $fullyQualified = new \Fully\Qualified\Name(); // $fullyQualified: Fully\Qualified\Name Works
    // private $float = 1.1 // or $int = 1; crashes the parser

    public function __construct()
    {
    }

    function impliedPublicMethod()
    {
    }

    public function publicMethod()
    {
    }

    protected function protectedMethod()
    {
    }

    private function privateMethod()
    {
    }

    public function setterWithOneArrayHintedParameter(array $arrayInput)
    {
    }

    protected function partiallyTypeHinted(Partially\Qualified\TypeHint $e)
    {
    }

    private function fullyTypeHinted(\Fully\Qualfied\TypeHint $e)
    {

    }

    static public function publicStaticFunction()
    {
    }

    public static function publicStaticFunctionAlternative()
    {
    }
}