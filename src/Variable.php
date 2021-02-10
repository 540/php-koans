<?php


namespace koans;


class Variable
{

    const CONSTANTE = 2;

    /**
     * Variable constructor.
     */
    public function __construct()
    {
    }

    public function declareAnInt()
    {
        $intVariable = "1";

        return $intVariable;
    }

    public function declareABoolean()
    {
        $booleanVariable = "true";

        return $booleanVariable;
    }

    public function declareAFloat()
    {
        $floatVariable = "2.5";

        return $floatVariable;
    }

    public function declareAnArray()
    {
        $arrayVariable = "[1, 2 ,3]";

        return $arrayVariable;
    }

    public function declareAnIntWithNullValue()
    {
        $intVariable = (int) null;

        return $intVariable;
    }
}