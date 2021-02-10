PHP koans 

Run: composer install

----

### Variables:

#### Properties:
 - A variable starts with the $ sign, followed by the name of the variable
 - A variable name must start with a letter or the underscore character
 - A variable name cannot start with a number
 - A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
 - Variable names are case-sensitive ($age and $AGE are two different variables)

#### Exercises
   - DeclareAnInt
     - An integer must have at least one digit
     - An integer must not have a decimal point
     - An integer can be either positive or negative
     - Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
   - DeclareABoolean
     - A Boolean represents two possible states: TRUE or FALSE.
   - DeclareAFloat
     - A float (floating point number) is a number with a decimal point or a number in exponential form.
   - DeclareAnArray
     - An array stores multiple values in one single variable.
   - DeclareAConstant
   - DeclareAGlobalVariable
   - DeclareAnIntWithNullValue
   - AssignAVariableValueToAnotherVariable
   - CastStringIntToBoolean

   - ###Do the same defining return types

-----

### Strings
#### Properties
- A string is a sequence of characters, like "Hello world!".

#### Exercises
- Strings definition:
  - DoubleQuotedStringsAreStrings
  - SingleQuotedStringsAreAlsoStrings
  - UseBackslashForEscapingQuotesInStrings
  - DotConcatenatesStrings
  - DotWorksWithVariables
  - DotEqualsAppendsToEndOfString -> .=

- String manipulation:
  - getTheLengthOfAString
  - CountWordsInAString
  - ReverseAString
  - SearchForATextWithinAString
  - ReplaceTextWithinAString

-----

### Operators
#### Properties
- Operators are used to perform operations on variables and values.

#### Exercises

- Arithmetic Operators:
  - Add
  - Subtract
  - Multiplicate
  - Divide
  - Module
  - Exponent
    
- AssignmentOperators:
  
  The PHP assignment operators are used with numeric values to write a value to a variable.
  The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.

  - AssignVariableToAnotherVariable
  - AddVariableToAnotherVariable
  - MultiplyVariableToAnotherVariable
  - DivideVariableByAnotherVariable
  - ModuleVariableByAnotherVariable

- Comparison Operators:

  The PHP comparison operators are used to compare two values (number or string)

  - Equal
  - Identicla
  - NotEqual
  - NotIdentical
  - GreaterThan
  - LessThan
  - GreaterThanOrEqualTo
  - LessThanOrEqualTo

