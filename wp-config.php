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
define( 'DB_NAME', 'wp_startbootstrap-grayscale' );

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
define( 'AUTH_KEY',         '@EQtUSKMd+ar,oSk3wFwc/>?>0,LKcr&dbAi6@(*aP+/)[^-JS}X}GuloXF>f~M2' );
define( 'SECURE_AUTH_KEY',  '*-$_<zri}N)]&qCOjK]WT_$-YVg]CLK3@L5n9p!qY`t+U{J O:G}@4zWL7_H6$BQ' );
define( 'LOGGED_IN_KEY',    'RH~ GX2nu/3Ex{d;g,Fil:UTtNvBTqp#j{bli5[OXR<SH<mn6>LY;Lc(:beYr!:s' );
define( 'NONCE_KEY',        ')[|o3=}Y+8R5q=L23h-2JU<gqdt;-|ZrCgtkt2dMgA-x0Juf~2B`C(-6n+</Ra;%' );
define( 'AUTH_SALT',        '~)VE OY13e>>_O($Esm4*L CuuTG1@_??IAnIg$Gm_^<RAU+KLo}wLvievE{U31j' );
define( 'SECURE_AUTH_SALT', 'I~q%}HP)Q{` !E.#mg9_+].rIWL?i}wm.S}2B[L%w:{+z)p0|]/(@ppV@Q*3.%gY' );
define( 'LOGGED_IN_SALT',   '|L/?WO`M0S7GM2=NinC.(:,`kr<~=tl;_+}lYzGWO 3rv.@z1E<jdGKcZ.MZ5zZ4' );
define( 'NONCE_SALT',       '-x8qJ!d-*2DAd^]VxEI(u^z`hb}?pN$nz]MsQBpO_Xw(|0=.v{m]s-/=O OwS%/3' );
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
