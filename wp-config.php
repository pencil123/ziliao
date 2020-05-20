<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'ziliaok' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'ziliaok' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'ziliaok' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9}tb2z6(=)KpO]L-{Wa4~42]bye$C7Z1/Vt`Ms}Vt&X01vXI-T8e(tKBKbY`1;rG' );
define( 'SECURE_AUTH_KEY',  'UT -akUAw],^g1!-XOQLw`>3y/$*/kde.{Vl:I@()oEFU1j}w^<UVsmn=W!>0rp*' );
define( 'LOGGED_IN_KEY',    'Qu2.}sqRig,pHTV/=P&v@]iHR-i.5p9 NXTPH}A7Ww+d~6mNL4V:-c@({Fp|Xn4o' );
define( 'NONCE_KEY',        'c2vy:a.Qfmh)oOd_geIIInOA8b-!?.#ftd]U< /ONrEp.bKH2ncT?Br[!>]B6{sD' );
define( 'AUTH_SALT',        'F7H$]^csl*3*_tG`wM83s6UmG0fI0FX,XNdztP7UB)>%,?AidY.`RFq<Xj%1<~CS' );
define( 'SECURE_AUTH_SALT', 'tw;`w.Cf)wV2EH>Gd|Q b6HnOOKFUlK;sruo.31!mD0d+lBJpth2eKZ.aCkqw &e' );
define( 'LOGGED_IN_SALT',   'QDl]+6( s<@[%It{t=HcST#${PWqXS pz*|uT6T`V87*! H~8,RdS?oi,1P7h^(<' );
define( 'NONCE_SALT',       '`P$L-7C2*r;BDg,{j,@:OQ$=6>A2=Iq;~7Qm(Z{t7TzCfP?Cdw< `,2K6}B<qK=(' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
