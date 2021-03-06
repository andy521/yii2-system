<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

/**
 * 获取环境变量
 * @param string $key
 * @param null|string|int $default
 * @return null|string|int
 */
if (!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key);
        if ($value === false) {
            return $default;
        }
        return $value;
    }
}

/**
 * 提取两个字符串之间的值，不包括分隔符
 *
 * @param string $string 待提取的只付出
 * @param string $start 开始字符串
 * @param string|null $end 结束字符串，省略将返回所有的。
 * @return bool string substring between $start and $end or false if either string is not found
 */
if (!function_exists('between_substr')) {
    function between_substr($string, $start, $end = null)
    {
        if (($start_pos = strpos($string, $start)) !== false) {
            if ($end) {
                if (($end_pos = strpos($string, $end, $start_pos + strlen($start))) !== false) {
                    return substr($string, $start_pos + strlen($start), $end_pos - ($start_pos + strlen($start)));
                }
            } else {
                return substr($string, $start_pos);
            }
        }
        return false;
    }
}
/**
 * 将时间戳格式化
 */
if (!function_exists('timestamp_format')) {
    function timestamp_format($timestamp)
    {
        return Yii::$app->formatter->asRelativeTime($timestamp);
    }
}

