<?php

declare(strict_types=1);

namespace unify\contract;

use unify\contract\model\User;

interface UserServiceInterface
{
    /**
     * 根据登录token，获取用户
     * @param string $token
     * @return User
     */
    public function user(string $token): ?User;

    /**
     * 获取用户列表
     * @param int $id
     * @return array [ 'admin' => '管理员', 'pm' => '产品经理' ]
     */
    public function role(int $id): array;

    /**
     * 获取菜单
     * @param int $uid 用户ID
     * @return mixed 菜单树
     */
    public function menu(int $uid): array;

    /**
     * 获取用户权限
     * @param int $uid
     * @return array 权限列表
     */
    public function permission(int $uid): array;
}
