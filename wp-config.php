<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ashleys2_wordpress617');

/** MySQL database username */
define('DB_USER', 'ashleys2_word617');

/** MySQL database password */
define('DB_PASSWORD', 'CBjTe3hiLPhS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'UnokawH]qE)F]Qfvk]&p!Mr<jciun|>c|&M?)ggQB|taArykzBJ!Vk&|Miz+tV[=BWb_z{a*TJU%l^Qi)]GO}tM;IQpoVAfJ^RacQ|uYaxLBC;!qq_&&bxlzzC%PIVwE');
define('SECURE_AUTH_KEY', 'ijqmXNnHNN+}WdewJOc%l>EVcvhXV$RNGF(<|hXY-e!QK?F[e^gX$Aj@Q*ahcSaRx{APV]A|TIwn>{Nzg[ERkjx}!rAn$JGMw[-B?GYBxb^}nBmXLuYpijWd*Fv^=rw_');
define('LOGGED_IN_KEY', 'X|?!@}dj_R{HZ+Sg*YVCdaasjAQ<|!(mHI@D!SsFK*L-_MXvA+m;JH%Q>_k@RE(pCN*>Uk@?rgPj&xDp]V&RsxRhg_xanmo|$CDMbKjzyWyluBO^[QasLp>pF_k;&fp*');
define('NONCE_KEY', '*l@ABEl][>^]JUzSI>qN-Qz/r;l)xpBi^}rt)<BRyL;aRD-GC*%$h-upXFN>e;KznLoi(?doFfAGEJsJ>*C$^-;VZ}k;>CGU(/<c}l<pV_DN[*FrdDtjI[CHVdb=gTP!');
define('AUTH_SALT', 'ABMGNYf{nX[+B?@Xffr{KQasZn@vTGof>kGSwk]@t(Ug$XR)vY!)mefA[dW*^^l(WN>PH+j+B(s&iGOtUaAxT)[A@shHdrapypw|FxiF=)=KAB-uzfyG;uB?lLu/oKxh');
define('SECURE_AUTH_SALT', '&DbFL?)RmangA+fqq_}khxW<g<HBcKnR&msbWyz(i@@;ndZEc;Q?e<M/?+^b%G=]eNnSdy{Ku*%F&erdm/}]xStIiaz?;dFoStZznm>jXFy[OB@Xtbk{<H=%Am!M-s>n');
define('LOGGED_IN_SALT', '?){!XxpABCuZe<opceVD*WPd=p=KKe}gk%Q{J;!nhY+_DvgrTFjto%w$JVO!sgP/;*[!Nq[Sne%lPFR+a/U)}>$qzr-E%fbUkuZnh!qDTblEJygL)&TxfHnu|aj{ffH*');
define('NONCE_SALT', '^R<>bGt?VYZh;NAP%lWw|T!+aEOKPRc/$CN+s{OMEo@s]Tmk-kGI)|*A<k)WpQF)KCV/Ij[CcZaa/vUzYKEibJAJXQUZgi<ggftU!M$oioOHV}RknDezo{}pxB_fym*A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_aeqm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
