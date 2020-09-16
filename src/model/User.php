<?php
declare(strict_types=1);

namespace unify\contract\model;

use unify\contract\Configure;

class User
{
    use Configure;

    /**
     * @var int 用户ID
     */
    public $id;

    /**
     * @var string 用户名
     */
    public $username;

    /**
     * @var string 用户昵称
     */
    public $nickname;

    /**
     * @var string 用户邮箱
     */
    public $email;

    /**
     * @var int 用户状态
     */
    public $status;

    /**
     * @var string 用户签名/备注
     */
    public $remark;
}
