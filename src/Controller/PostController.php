<?php

namespace App\Controller;

use App\Kernel;
use App\Util\ContentUtil;
use Zend\Diactoros\Response\HtmlResponse;

class PostController
{
    /**
     * @var Kernel
     */
    private $kernel;

    /**
     * @var array
     */
    private $posts = [];

    public function __construct(Kernel $kernel)
    {
        $this->kernel = $kernel;
        $this->posts = ContentUtil::getPosts();
    }

    public function index(): HtmlResponse
    {
        ob_start();
            require_once($this->kernel->getTemplateDir() . '/post/index.php');
        $body = ob_get_contents();
        ob_end_clean();

        return new HtmlResponse($body);
    }

    public function read(string $id): HtmlResponse
    {
        if (!isset($this->posts[$id])) {
            return new HtmlResponse('<html><body><h1>Not Found</h1></body></html>', 404);
        }

        $post = $this->posts[$id];
        ob_start();
            require_once($this->kernel->getTemplateDir() . '/post/read.php');
        $body = ob_get_contents();
        ob_end_clean();

        return new HtmlResponse($body);
    }
}
