<?php

declare(strict_types=1);

namespace unify\contract;

class Access
{
    const NAME = 'UNIFY_RPC_AUTH_NAME';

    /**
     * 生成凭证数据
     * @param int $id 应用ID
     * @param string $key 应用密钥
     * @return array
     */
    public static function credentials(int $id, string $key)
    {
        $data = [
            'id'    => $id,
            'nonce' => uniqid(),
            'time'  => time(),
        ];
        $data['sign'] = self::build($data, $key);
        return $data;
    }

    /**
     * 验证凭证
     * @param $data
     * @param $key
     * @return bool
     * @throws AccessValidateException
     */
    public static function validate(array $data, string $key)
    {
        // 数据顺序为定值
        if (array_keys($data) == ['id', 'nonce', 'time', 'sign']) {
            $sign = $data['sign'];
            unset($data['sign']);
            if (abs(time() - $data['time']) > 15) {
                throw new AccessValidateException('timestamp is timeout.');
            }
            return self::build($data, $key) == $sign;
        }
        throw new AccessValidateException('keys not exist.');
    }

    protected static function build($data, $key)
    {
        ksort($data);
        $tmp = '';
        foreach ($data as $k => $v) {
            if ($v) {
                $tmp .= "{$k}=$v&";
            }
        }
        return md5($tmp . 'key=' . $key);
    }
}
