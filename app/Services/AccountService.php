<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/10/27 0027
 * Time: 12:35
 */

namespace App\Services;

use App\Model\Account;
use Hyperf\Di\Annotation\Inject;

class AccountService
{
    /**
     * @Inject()
     * @var Account
     */
    protected $model;

    public function add(array $data):int
    {
        return $this->model->insertGetId($data);
    }
}