<?php
/**
 * 設定
 */
define( 'LOG_FILE', dirname( __FILE__ ) . '/hook.log' );
define( 'LOG_ERR', dirname( __FILE__ ) . '/hook-error.log' );
define( 'SECRET_KEY', 'password' );

/**
 * 実行するコマンド
 */
$commands = array(
  'dev' => 'git pull origin dev',
  'prod' => 'git pull origin prod',
  'main'  => 'git pull origin main'
);