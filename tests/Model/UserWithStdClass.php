<?php


namespace Nddcoder\ObjectMapper\Tests\Model;


use DateTime;
use JetBrains\PhpStorm\ArrayShape;
use Nddcoder\ObjectMapper\Attributes\JsonProperty;

class UserWithStdClass
{
    public \stdClass $tags;
}
