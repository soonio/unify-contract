<?php

declare(strict_types=1);

namespace unify\contract;


/**
 * Interface UserServiceInterface
 * 用户相关数据的接口服务
 * @package unify\contract
 */
interface UserServiceInterface
{
    /**
     * 根据登录token，获取用户
     * @param string $token
     * @return array [ 'id' => '', 'username' => '', 'nickname' => '', 'email', 'status' => '', 'remark' => '', ]
     */
    public function user(string $token): array;

    /**
     * 获取用户列表
     * @param int $uid
     * @return array [ 'admin' => '管理员', 'pm' => '产品经理' ]
     */
    public function role(int $uid): array;

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
