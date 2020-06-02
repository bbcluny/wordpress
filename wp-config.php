<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Amenofis' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9%id[7E+lugg-#B[e-^A<^0uR 4K_=s.v~966..vS!RvS)N$r?/$)c]Z3YOYQvA0' );
define( 'SECURE_AUTH_KEY',  'tPsMBUkf6W@pwuSc3>/q`~LXmE7i`;4>4@i#4YF`cp^;?I]v=,6r89,y3hq,L_sf' );
define( 'LOGGED_IN_KEY',    'dWDJTj=(,}Vp*ZUFqNx&qoM%qqLX(:_^)fVK^}+7d>Y6hKD85^.{.m}b^@^H$vD*' );
define( 'NONCE_KEY',        'Gq|~==/UB7}iFiw9d`G>{hZPur]5/20t{NAJYNuq3Y?%9]UwPwv`?buc+b<(T+ca' );
define( 'AUTH_SALT',        '1[aud%Y9.O`S+zDtGya;]7t8^>08#Sr&.(mlaUP?YN:|0Qnd*)Xk32v?$Np#O@W7' );
define( 'SECURE_AUTH_SALT', 'p,B;h6ENl*!+?fdjj?23-G4L8Hpv*Z T#kwV/ByX--PK!{6y1u%`S0.AQ^>.H@v=' );
define( 'LOGGED_IN_SALT',   'Xa@~r#vl}+@11CVPh^_+t|N={&F|`+ziE#9QSwf>6N)O<n7L}0<m!G#&vjSKosdG' );
define( 'NONCE_SALT',       'q0kK>,5L.mbB:!1@`VP8E5a7Z9>aaXK~um{g>@CJ dcDdD`I&T<D{.dwEikI!dC4' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');
