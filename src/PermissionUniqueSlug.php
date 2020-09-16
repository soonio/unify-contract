<?php

declare(strict_types=1);

namespace unify\contract;

/**
 * 请求方法和路由拼接
 * Trait PermissionStateSlug
 * @package unify\contract
 */
trait PermissionUniqueSlug
{
    /**
     * 拼接请求方法和路由
     * @param $method
     * @param $route
     * @return string
     */
    protected function slug(string $method, string $route)
    {
        return $method . '|' . $route;
    }
}
