<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'labb1-victorbarraza' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'root' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u)U(HRwJqooJP|A|=*NI6l%fO?#7qGjH,P^atdX$)p#T${j&qWv}y<3/`K)v/vi7' );
define( 'SECURE_AUTH_KEY',  'od6A?D5IL./GYG:`:_wN^.*W0=&I}Cb!+iHG?^Y!Olg]7u(-;cXZ;gUsdb#Eas9S' );
define( 'LOGGED_IN_KEY',    'OSs}r3U3sEL>F;k?fpWF+n.h<}2wNW9D`!LlAH#0O*gt0>seTy8MMe89vM#q_/px' );
define( 'NONCE_KEY',        '@*%Prw&V:j<V{UEb`S!]K!@do./:4+~qP=t@mB/gBeek`kD=kIrX&e<wdpa~zq !' );
define( 'AUTH_SALT',        'pWPRH5WN;m[&m=G}k0J=ioW^o*.m!zC?5o/n8=fnr{0$ONB8Kp9Cn;lRl!^Y6qpg' );
define( 'SECURE_AUTH_SALT', 'T}m5mc(&DP[kR{JgHCS5sP%Q.sRyhk`C`#NbSoS0QPx-/nIB,jb=VFnVj~@&8Nzo' );
define( 'LOGGED_IN_SALT',   'S>E0%gPT3.!cW0/;dNX,(</|}^6[za00L]4K5y|LER~:R1QgZNkeMEbR<esxdke0' );
define( 'NONCE_SALT',       'SpO2LQ/XpRo5-1}S1hsCUy< yqEFUSJD5rs5LmIz$ kMZ>?%A@%&L%tkCi47Sz;U' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', true);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');