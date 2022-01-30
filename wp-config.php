<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'DS_limited' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vFfrq]6zv?y5m&v0?b*FB#hi@<>GU+Jt4ngYB8oC8ey7Su*K0L$^[4#E3%fC!GC&' );
define( 'SECURE_AUTH_KEY',  'w W5PxPJ9.^S!{EX26q}rwLy^E4By;6/mSk)5b5F>{P5Mg#8>$tiVBMnYHrWxgt?' );
define( 'LOGGED_IN_KEY',    '52gOe29M?!?APH.LS2K)^cxOG7or_A}4GsXV})faH-8t!h-n>k~Zn=$g3#iP?&}>' );
define( 'NONCE_KEY',        'vZ3rI{ZF];X8w:_<SC#mwl#ARE+$4q;AC-KT-Q@o)BMN{ >{Eig$_9Qp;LDI+5rh' );
define( 'AUTH_SALT',        'S}l,<kn0Vgo=}4(D}eSaNr`-z(^M=Gnepbh-)StDzvJdDg@(h$(b^e-)M3~JG9C(' );
define( 'SECURE_AUTH_SALT', '1Un!@)k4nB^{,4I5vnN}uI{ nxo(u?P,:jH=fcc<b6tcl]; ?aeL7xf!%3[W6F#o' );
define( 'LOGGED_IN_SALT',   's}@TgVt8d/IlTBk9@IuV?()3jFaUPNH,]O>wZ^r$QDL!3<YyIskrZlOD{dF~`Uk}' );
define( 'NONCE_SALT',       '6{Fy7$I<,EWhXh$q6V~$=D&[,@ihUHfz1nK3X;=>]uQ*m?u6es#1#y6YfvdLy=f~' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_ds698fsd87';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
