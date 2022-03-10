<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace HyperfTest\Cases;

use HyperfTest\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class ExampleTest extends HttpTestCase
{
    public function testExample()
    {
        $this->assertTrue(true);

        $name = 'admin';
        $password = 'admin';

        $res = $this->get('/index/login', ['name' => $name, 'password' => $password]);

        $this->assertTrue(is_array($res));
        $this->assertSame(200, $res['code']);
        $this->assertSame($name, $res['data']['name']);
        $this->assertTrue($res['data']['status']);
    }
}
