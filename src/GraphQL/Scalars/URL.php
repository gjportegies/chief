<?php

namespace IronGate\Chief\GraphQL\Scalars;

class URL extends ValidatedStringScalar
{
    protected static $validationRule = 'url';
}
