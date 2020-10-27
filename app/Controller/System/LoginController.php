<?php

declare(strict_types=1);

namespace App\Controller\System;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\View\RenderInterface;
use App\Services\AccountService;
/**
 * Class LoginController
 * @Controller()
 */
class LoginController
{
    /**
     * @Inject
     * @var RequestInterface
     */
    protected $request;

    /**
     * @Inject
     * @var RenderInterface
     */
    protected $render;

    /**
     * @Inject()
     * @var AccountService
     */
    protected $accountService;

    /**
     * @RequestMapping(path="/system/login",methods={"get","post"})
     */
    public function login()
    {
        if($this->request->isMethod('POST')){
           $input = $this->request->all();
           var_dump($input);
        }else{
            return $this->render->render('system.login');
        }
    }
}
