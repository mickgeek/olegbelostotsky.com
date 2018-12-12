<?php

namespace App\Controller;

use App\Kernel;
use Zend\Diactoros\Response\HtmlResponse;

class DefaultController
{
    /**
     * @var Kernel
     */
    private $kernel;

    public function __construct(Kernel $kernel)
    {
        $this->kernel = $kernel;
    }

    public function index(): HtmlResponse
    {
        ob_start();
            require_once($this->kernel->getTemplateDir() . '/default/index.php');
        $body = ob_get_contents();
        ob_end_clean();

        return new HtmlResponse($body);
    }

    public function about(): HtmlResponse
    {
        ob_start();
            require_once($this->kernel->getTemplateDir() . '/default/about.php');
        $body = ob_get_contents();
        ob_end_clean();

        return new HtmlResponse($body);
    }
}
