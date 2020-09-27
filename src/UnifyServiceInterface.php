<?php

namespace unify\contract;

/**
 * Interface UnifyServiceInterface
 * 中台服务相关操作
 * @package unify\contract
 */
interface UnifyServiceInterface
{
    /**
     * 获取中台前端地址
     * @return string
     */
    public function front(): string;
}
