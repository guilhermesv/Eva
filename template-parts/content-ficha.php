<?php
/**
 * Template para mostrar as fichas no arquivo das edições archive-edicoe.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eva
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('ficha'); ?>>
	<div class="campo-titulo">
    <div class="campo-rotulo">
        <?php echo esc_html__( 'Título', 'eva' ) ?>
    </div>
    <div class="campo-conteudo">
        <?php the_title(); ?>
    </div>
  </div>
  <div class="campo-resumo">
    <div class="campo-rotulo">
        <?php echo esc_html__( 'Resumo', 'eva' ) ?>
    </div>
    <div class="campo-conteudo">
        <?php eva_resumo(); ?>
    </div>
  </div>
  <div class="campo-catalogacao">
    <div class="campo-rotulo">
        <?php echo esc_html__( 'Catalogação', 'eva' ) ?>
    </div>
    <div class="campo-conteudo">
        <?php eva_categorias() ?>
    </div>
  </div>
  <div class="campo-data">
    <div class="campo-rotulo">
      <?php echo esc_html__( 'Data', 'eva' ) ?>
    </div>
    <div class="campo-conteudo">
      <?php the_date(); ?>
    </div>
  </div>
  <div class="campo-capa">
    <?php the_post_thumbnail(); ?>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->