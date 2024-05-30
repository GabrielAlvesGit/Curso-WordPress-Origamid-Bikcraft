<?php
// Template Name: Produtos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

<!-- É para puxar todas a paginas de Produto Post e puxar seu campos como Esporte,
Pordutos e Retro -->
<?php 
	$argc = array(
		'post_type' => 'produtos',
		'order' => 'ASC',
	);
	$the_query = new WP_Query( $argc );
?>

<?php if( $the_query->have_posts()) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>


<section class="container produto_item animar-interno">

  <!-- Usado para passar um href e direcionar para cada post, Esporte, Passeio e etc.. -->
  <a href="<?php the_permalink(); ?>">
    <div class="grid-11">

      <img src="<?php the_field('foto_produto1'); ?>" alt="Bikcraft <?php the_title(''); ?>">
      <h2><?php the_title(''); ?></h2>
    </div>
    <div class="grid-5 produto_icone">
      <!-- <#?php echo get_template_directory_uri(); ?>/img/produtos/passeio.png" -->
      <img src="<?php the_field('icone_produto'); ?>" alt="Icone <?php the_title(''); ?>">
    </div>
  </a>
</section>
<?php endwhile; else: endif; ?>
<!-- Reset (TENHO QUE RESETAR PRA QUE MINHA OUTRAS INFORMAÇÕES FUNCIONE SO QUANDO USAR O WP Query) ai ele vai exbir o texto clique aqui e veja os detalhes dos produtos -->
<?php wp_reset_query(); wp_reset_postdata();  ?>
<?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php") ?>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>