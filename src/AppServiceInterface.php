<?php
declare(strict_types=1);

namespace unify\contract;

/**
 * 应用接口
 * Interface AppServiceInterface
 * @package unify\contract
 */
interface AppServiceInterface
{
    /**
     * @param array $menuTree tree结构的菜单, 不满足条件的直接跳过
     * [
     *   [
     *     "name": "概览中心", "route": "root", "children": [
     *       [ "name": "系统概况", "route": "Dashboard" ]
     *      ]
     *    ]
     * ]
     * @return bool
     */
    public function menu(array $menuTree): bool;

    /**
     * 批量保存应用权限
     * @param array $permissions [ [ 'method' => '', 'route' => '', 'name' => '' ] ]
     * @return bool
     */
    public function permission(array $permissions): bool;
}

