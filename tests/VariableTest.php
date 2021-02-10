<?php

namespace Deg540\koans\Test;

use koans\Variable;
use PHPUnit\Framework\TestCase;

class VariableTest extends TestCase
{
    /**
     * @test
     **/
    public function declareAnInt()
    {
        $variable = new Variable();
        $integerValue = $variable->declareAnInt();

        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     **/
    public function declareABoolean()
    {
        $variable = new Variable();
        $booleanValue = $variable->declareABoolean();

        $this->assertIsBool($booleanValue);
    }

    /**
     * @test
     **/
    public function declareAFloat()
    {
        $variable = new Variable();
        $floatValue = $variable->declareAFloat();

        $this->assertIsFloat($floatValue);
    }

    /**
     * @test
     **/
    public function declareAnArray()
    {
        $variable = new Variable();
        $arrayValue = $variable->declareAnArray();

        $this->assertIsArray($arrayValue);
    }

    /**
     * @test
     **/
    public function declareAnIntWithNullValue()
    {
        $variable = new Variable();
        $intValue = $variable->declareAnIntWithNullValue();

        $this->assertIsInt($intValue);
        $this->assertEquals(null, $intValue);
    }


}
