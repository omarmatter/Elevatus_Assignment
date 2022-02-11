<?php

require  ('../src/HammingDist.php');


use PHPUnit\Framework\TestCase;

class HammingDistTest extends TestCase
{

    public function testDistance()
    {
        $dis =HammingDist::hamming_dis("acdeb", "abcde");
        $this->assertEquals(4, $dis);
    }
}
