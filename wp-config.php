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
define( 'DB_NAME', 'FumesBRS' );

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
define( 'AUTH_KEY',         ')0FF|h@vC3*EMEu,*o%Ha8fZW2dX~WjE?Vk>sinD<.>2LT,uIg%*8SFSHE:{n;|y' );
define( 'SECURE_AUTH_KEY',  'N)LF8T_j^7V0V:J)afmw&EEHOg$:7M>ZK)4N2HC8avCeNA2wDUo+vL>0D]0HfFoU' );
define( 'LOGGED_IN_KEY',    'q)rlb/Lqb$!GT$AD*{$k5i^cj;I<8YnT+9irm}__I:=de11n>j%]UO]L1%QYQ ZD' );
define( 'NONCE_KEY',        'b6Ij!0`xn5[*ul /Y{D,_|qSSYMY&m=/,|-Bb^^HN{e{[8nQtZ_#4DMUNaNxnaMs' );
define( 'AUTH_SALT',        'P=ozh>EZPzML[($QYTD_}nKLfPoQLI&*OS8oAVRgeO:jH(b*+S<cc&`-_.07vt)O' );
define( 'SECURE_AUTH_SALT', '3;J,]?wo>S4H6#]}iC![<i$~{Oq0Ns4mK,v|,Wy@8GX9] CBQ>J]@1~xEV+@$(0s' );
define( 'LOGGED_IN_SALT',   'O*RCc64nlYu>:2WzaUjRv<rfXR-:FLh5vHRJnQ0Qk[|f~D[#PetP^&`wDsb2^Wvp' );
define( 'NONCE_SALT',       '$-c6j%riQeLbaV:8a~d8WfM,}t<d<J|x09S$`VKU633r4t9^k(R?5NC YkQRssA[' );

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
