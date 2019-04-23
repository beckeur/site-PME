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
define( 'DB_NAME', 'db_pme' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'IXKJT|+5IkfSZ %bKA0!&q6ac%fRjc^qR`88Uy$p`c$WQeh[dN|{_E+B@NiQg%w^' );
define( 'SECURE_AUTH_KEY',  '@Oj(%= xAF[7dLs)?OveSYeO]#`5FBmc>c0rijh}qePat3q@R}tH u]jbxD@0%/(' );
define( 'LOGGED_IN_KEY',    '&$fmIba}Jeff9WaKCl=X$`io?3h<STpWwIQLB)7QsYKY2GgekN1!K_a{bo#x(0G4' );
define( 'NONCE_KEY',        'n4dQRgF^yDD!2f+n!>DXXubLD2$]ylm/O7=<QkcyXrq91D^JC2tnb.f0f/k9Zl?y' );
define( 'AUTH_SALT',        'x+=Ub?:}v&$[l>N: oaBT~>zq2qK^oo2i,JkN{u$2Uzi |_N2{YN*hBJi;4XUN!4' );
define( 'SECURE_AUTH_SALT', 'PkT)kbeLwKdWMww(087cu,cVZQ<)B,U 9d8Wi|_.Bh+$(zfHf$GFd-KMCUohxR!.' );
define( 'LOGGED_IN_SALT',   'X4s/^W<^I_l#i1H9F#f9J N*crRR}b^|s4-.yC^m5xd6T[tqD]Hz:APn!i2x*@[Y' );
define( 'NONCE_SALT',       '}O^j*;Nnpc-bb.ON!B~^T0x37_w4ijfxP*fZW:zX@z;w#q[4={NAq7|iDsCqH[%C' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
