<?php

namespace App;

use App\Controller\{DefaultController, PostController};
use Psr\Http\Message\{RequestInterface, ResponseInterface};
use DI\{ContainerBuilder, Container};
use Zend\Diactoros\Response\HtmlResponse;

class Kernel
{
    /**
     * @var Container
     */
    private $container;

    public function __construct()
    {
        $this->container = ContainerBuilder::buildDevContainer();
    }

    public function handleRequest(RequestInterface $request): ResponseInterface
    {
        $uri = $request->getUri()->getPath();
        $routes = [
            '^/$' => [DefaultController::class, 'index'],
            '^/about$' => [DefaultController::class, 'about'],
            '^/posts$' => [PostController::class, 'index'],
            '^/posts/(\d+)$' => [PostController::class, 'read'],
        ];
        foreach ($routes as $route => $controller) {
            if (preg_match('/' . str_replace('/', '\/', $route) . '/', $uri, $matches)) {
                array_shift($matches);
                $response = call_user_func_array([$this->container->get($controller[0]), $controller[1]], $matches);

                return $response;
            }
        }

        if ($uri === '/index.php') {
            return new HtmlResponse('<html><body><h1>Forbidden</h1></body></html>', 403);
        }

        return new HtmlResponse('<html><body><h1>Not Found</h1></body></html>', 404);
    }

    private function getRootDir(): string
    {
        return realpath(__DIR__ . '/..');
    }

    public function getTemplateDir(): string
    {
        return $this->getRootDir() . '/templates';
    }

    public function getPublicDir(): string
    {
        return $this->getRootDir() . '/public';
    }
}
