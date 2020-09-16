<?php

declare(strict_types=1);

namespace unify\contract;

use ReflectionException;

trait Configure
{
    /**
     * 加载属性到当前对象
     * @param array $attributes
     */
    public function load(array $attributes = [])
    {
        try {
            $rc = new \ReflectionClass($this);
            $publicProperties = $rc->getProperties(\ReflectionProperty::IS_PUBLIC);
            foreach ($publicProperties as $property) {
                $key = $property->name;
                if (array_key_exists($key, $attributes)) {
                    $this->$key = $attributes[$key];
                }
            }
        } catch (ReflectionException $e) {
            // 不做处理，不会抛出异常
        }
    }
}
