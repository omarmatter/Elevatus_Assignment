<?php

use PHPUnit\Framework\TestCase;
 require  ('../src/Levenshtein.php');
class LevenshteinTest extends TestCase
{

    public function testDistance()
    {
        $dis =Levenshtein::levenshtein_dis("the is test", "this is test");
        $this->assertEquals(2, $dis);
    }
}
