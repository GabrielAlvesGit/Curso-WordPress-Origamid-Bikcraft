<?php
// Template Name: Single Produtos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="container produto_item animar-interno">
  <div class="grid-11">
    <img src="<?php the_field('foto_produto1'); ?>" alt="Bikcraft <?php the_title(); ?>">
    <h2><?php the_title(); ?></h2>
    <!-- 
			1 - Quando fazer dessa froma e porque ele esta pegando o nome do titulo do campo lá no WordPress dentro dentro Produtos -> Esporte

			2 - Ele esta pegando Ul Li que gerei dentro do WordPress dentro dentro Produtos -> Esporte no paragrafo

			não é muito recomendado, mas pode usar se não quiser fazer o reapeat foeld de lista
	  -->
  </div>
  <div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto'); ?>" alt="Icone <?php the_title(); ?>"></div>
  <div class="grid-8"><img src="<?php the_field('foto_produto2'); ?>" alt="Bikcraft <?php the_title(); ?>"></div>
  <div class="grid-8 produto_info">
    <?php the_content(); ?>
  </div>
</section>

<?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php"); ?>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>