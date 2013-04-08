<?php
/**
 * FreeJsMin
 *
 * @copyright 2013 VIP Software Technologies Inc.
 * @license BSD-2-Clause
 */

namespace VIPSoft\FreeJsMin;

use VIPSoft\FreeJsMin\JsMin;

/**
 * Test JavaScript minifier
 *
 * @author Anthon Pang <apang@softwaredevelopment.ca>
 */
class JsMinTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test minify()
     *
     * @param string $input
     * @param string $expectedOutput
     *
     * @dataProvider provideMinify
     */
    public function testMinify($input, $expectedOutput)
    {
        $minifier = new JsMin();

        $this->assertEquals($expectedOutput, $minifier->minify($input));
    }

    /**
     * Data provider for testing minify()
     *
     * @return array
     */
    public function provideMinify()
    {
        $data = array();

	foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . "inputs/*.js") as $file) {
            $data[] = array(
                file_get_contents($file),
                file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "outputs/" . basename($file)),
            );
        }

        return $data;
    }
}
