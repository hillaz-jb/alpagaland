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
define( 'DB_NAME', 'alpagaland' );

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
define( 'AUTH_KEY',         ' g|;c~Km)53G6+p^3vx+,Dr<z[! =e#jg,uZ@5VK5dq9KwZ2o,5g(5xdVWSE,B0L' );
define( 'SECURE_AUTH_KEY',  '~d,QFw?vw[USC)QA5C/&#mN1JNo:O.-*d)vY0M|mwD+^O+cQp+c@N~l89)8+x11^' );
define( 'LOGGED_IN_KEY',    'i&P^S:7sVOnOzSzR<Fgg_yV}j>wIfqAq-7qdNb1{[Ih@hPKtHXZuPq+wmA=ux^nX' );
define( 'NONCE_KEY',        'jP58GUNS9JOn:Yemr..xdjaw24=z+Z X59bWkn+P]q=<O_}t&l6@aYm]Y)f}6g:n' );
define( 'AUTH_SALT',        '*{M;nVy,<7${qG2P9n~ZA*]IoH:YR&t$B,uc6* FWhjX=k@s|:)#U*zA[x7:fw]u' );
define( 'SECURE_AUTH_SALT', 'W(sx1CU`WiLvj/8Eu^2efn56pvfbm_LrLF>k}]i76kmptF%<z||Fu!qG@2~%&XuX' );
define( 'LOGGED_IN_SALT',   'Kq6{Dx?r]z-jKi87nVqYN$1Hl0,W9eG^5.1c6FcafpAJzuX >k&[7!#&}(T@:O[)' );
define( 'NONCE_SALT',       '.C0;RyW=|vo2wZ.Csr)4sy<xjaDJ;829![k!.EdiV)7 kC`Jse]~+r9ZOaI6`Mo=' );
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
