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
define( 'DB_NAME', 'fasocode' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'v87)Ua|hCJBki)^*l1G;suS,dj`V~3F0[,~b>j(`N`_]La6D qF_riZ^)GN;Z0hN' );
define( 'SECURE_AUTH_KEY',  'T`m&)}GG09FCx!Cq%!KPS>=:!P.+v!8Cx<1>;5v8#Y#6N }`R_Idv<Qpmx :(K(}' );
define( 'LOGGED_IN_KEY',    'Y&`3K/>VJC@22c5>9=,[xZwi}}h`Un9z:6N*u`$b{@P;,?|?]K2VT$Y#e:)dAtfv' );
define( 'NONCE_KEY',        'PJ1_lLe(C;7Gx(u0l,*qQ2NfhlaI(Ir{:L>F,J]W2H7.tG9A!===K0BbOw4)*4o9' );
define( 'AUTH_SALT',        ' |mfgG{9b#,YGqEHT^e,D<Rm4rhmR9.Z!MK|U`N*#;/|DI`10pyBCOGhL!z?<DIc' );
define( 'SECURE_AUTH_SALT', '@!aR S@a%QcJ%w5P&thn<monUS??AY,J:uv^Y5$jCx+{-BrF]%]e/*cDm9?XG%GB' );
define( 'LOGGED_IN_SALT',   'x!i9[I0K0,d(y.&pro@HF~pis6U0pUQncYi. 0=&RWC`1a{0g9U(Ih2]i?c_L 7B' );
define( 'NONCE_SALT',       'gHs&5=q,]%mh3SAl1t=v($QK5%u]5+]8/>8]|iP]}4#CpXt sb9o/;6KSVVzYm]h' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
