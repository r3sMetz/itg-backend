<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

/** Dynamic WordPress Environmental Vars */
// Production
if(file_exists(__DIR__.'/env.production.php')){
	require('env.production.php');
}
// Local
else{
	require('env.local.php');
}



/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w{f;2`T|]A?D/|C3@DY:#@SNMw8egwz]ju4k7<[nkr>x0n~S[K(f~Xa_.pKzl6=Z' );
define( 'SECURE_AUTH_KEY',  'Iesu=!rk!X6A,]Swyvu-k6:;-bXx!AO2knVk$5YZ7Q~yzOaEFN%^:YB.t>IBNh2r' );
define( 'LOGGED_IN_KEY',    'D~GO^Ph2qjTmhtX>0hh=(o247Hc{fe&+IDm~ NMB,Hw&2SbAJ$EHzFFTM%1!!Gre' );
define( 'NONCE_KEY',        'a;-))>83{#=nJgz N6>Qwiw>XmQ/d h5rPj{T8!(r.JYPdTTuOZ;w^:e9/]6OAOS' );
define( 'AUTH_SALT',        '|%XX*4nKXn8lisH [m$pTX;I,ca&3xtm)2])Tuiz!`azPJ>LF3-78Ra^^3Xm*@]^' );
define( 'SECURE_AUTH_SALT', 'Kf5S&XQgIrpyk+<PUFiax1zui)__B}J5;?x^m!=5G(t7hK$WLS:d>mz~/B3$*D88' );
define( 'LOGGED_IN_SALT',   'CL_N~s &lsY?S.SY4nd><Alxu~Jc+}k4Be:uybyX/+l.e%SYwWKb[+@)a:`m$c7 ' );
define( 'NONCE_SALT',       'r9,6QGc|XsQ`b9M4/1j{LI6 mwa+^+oIlP^N}*+qts0=M_KaoTm^eZ2QQlv)/8U$' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'hwp_grF_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once( ABSPATH . 'wp-settings.php' );
