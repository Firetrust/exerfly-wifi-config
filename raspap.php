<?php

$config = array(
    'admin_user' => 'admin',
    /*'admin_pass' => '$2y$10$YKIyWAmnQLtiJAy6QgHQ.eCpY4m.HCEbiHaTgN6.acNC6bDElzt.i'*/
    'admin_pass' => '$2y$10$qifXwfWwFiz7EGaflcaq8OvXhXcoZVgRDg4F2NBtT9QYvcCztkpRy'

);

if (file_exists(RASPI_CONFIG.'/raspap.auth')) {
    if ($auth_details = fopen(RASPI_CONFIG.'/raspap.auth', 'r')) {
        $config['admin_user'] = trim(fgets($auth_details));
        $config['admin_pass'] = trim(fgets($auth_details));
        fclose($auth_details);
    }
}
