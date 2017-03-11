<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'dbgmi');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '=EQm_[dc2#I)Jh9KvWLkb3R#(Su:t(0Io{Y/Hu*Dvk&#[!((;3>n@%rnkQUjL;Pf');
define('SECURE_AUTH_KEY', 'j CQ$q2 U%6cmkQQaJ$B_RgTW0JV)(LAU1HJ~e@2-cLV,Pk{ @V;:.Fk6D)F}cWI');
define('LOGGED_IN_KEY', '$;4XD;W}ht$y-lcbvH/b-_S=m1HVD[bO3qp9Al<m1I7UkwhK^|kS.s4brKi&n,~B');
define('NONCE_KEY', 'l3>t+fb}r~MS#qw[USFY/|[q$NCz9V11ZBB/`*yTKEU&-?v&|k96R01B0%Z:6tJg');
define('AUTH_SALT', '~18Fc=9{Hg;GEg/pmLn!rERv:I_R5^_.HA|a|Dn#j$$ckut)h0]94Is7/se=;#[r');
define('SECURE_AUTH_SALT', '$7zw:fc<@pl,C[nk:9LPy*skMt}RAjVvN$+<@S[KcgQ{wvt893z:i~zE#H%%{ Q$');
define('LOGGED_IN_SALT', '{ONAaTw(MoPN)Nv.0VCX?#&x7@J+a<.7`paj{FMCke:=8K1Am$Di//oo+y.h3{ m');
define('NONCE_SALT', 'BiUC7lG02`{c26zV^RD<Q<kU_{2=Pv7t)-?#1:^wE-H.*oY!v0&4<1Oy.y,>E]>*');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

