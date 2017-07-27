<?php

require_once 'lang.php';

class Config {
    public static $password = array(
        'rules' => array(
            'length' => array(
                '/[\s\S]{6,36}/', '口令长度限制为6-36位'
            ),
            'number' => array(
                '/[0-9]+/', '口令需要至少一位数字'
            ),
            'chars' => array(
                '/[a-zA-Z]+/', '口令需要至少一个英文字母'
            )
        )
    );
    public static $uploadRoot = "/var/www/upload";
    public static $debugLogFile = '/tmp/cucCloudPan.log';
    public static $symmetricEncKeyLen = 32;
    public static $sessionTimeout = 60 * 10; // 10分钟没有活动就自动登出
    public static $pageSize = 3;
    public static $visiblePages = 5;
}
