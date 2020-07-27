<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura_intercambios' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hDb2]Ke]D4F.c{@ 8~Z:[t:R,z;OC 42{t8 v#}@?hsA(DEjcy6rQ8W?hVeVg^*F' );
define( 'SECURE_AUTH_KEY',  'jbb&+EiP/C+?^ti3F{(#9CD6{^k<WD=8%1rM$y1)PFvf<d@j&BF|RkJ=/{.vTa8N' );
define( 'LOGGED_IN_KEY',    '%Rx!{v()//J~l%LR&1O^J@a`3r|Wi+dB=d:N$DSjoELvb[G_4w/6GG=2Qf!`W%,O' );
define( 'NONCE_KEY',        'Szd:fUv|6FT$Ej;#7%u!0`$g-8dT=vX!}=:yEldCX<mGQEqORhO(@|SJxl@PmxSX' );
define( 'AUTH_SALT',        '2ka1tE8zF3]Cu;*SVw+wR.MI/7<|F;+4d$u%BtM1 ;>L06i}V0votK-bL9nRiC7;' );
define( 'SECURE_AUTH_SALT', 'd^;;&pl]!UY72(#/qYv<ZXs@4Ue ]2$m>R:[j,tEm^8FA6M93ksIo$RhdD%8h g/' );
define( 'LOGGED_IN_SALT',   '#zaTl2*vWk <Sw;9[~%bsYyfn>BxSEFB2uQOV5gV,Ort1bm~~?4A|v^0)fHv~|uJ' );
define( 'NONCE_SALT',       'e3^$|ofTJ<;xa<]Aw-iZuIKBa.l/cF&.0Zl}GC,B#G@?8r}viQpE_3-RrWRPJ3r|' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
