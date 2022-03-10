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
namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController
 */
class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return $this->success(
            [
                'method' => $method,
                'message' => "Hello {$user}.",
            ]
        );
    }

    public function login()
    {
        $name = $this->request->input('name');
        $password = $this->request->input('password');

        return $this->success(
            [
                'name' => $name,
                'status' => $name == 'admin' && $password == 'admin',
            ]
        );
    }
}
