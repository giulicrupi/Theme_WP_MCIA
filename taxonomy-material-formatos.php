<?php //error_reporting(E_WARNING); ?>
<?php get_header(); ?>
	




	<?php if( have_posts() ) { ?>

<?php

            

        $listagem_home = new WP_Query(array(
    'post_type' => 'material',
    
    'posts_per_page' => 1)
    );
              

              if($listagem_home->have_posts()) : 

                while($listagem_home->have_posts()) : $listagem_home->the_post();

                   $imgCapa = get_field('imagem_do_material');


?>  

<main class="banner-materiais" style="background-image: url(<?php echo  $imgCapa['url']; ?>);">
	<div class="overlay">
		<div class="container">
			
			
			<div class="row">
				<div class="col-lg-6">
					<p class="title">ebooks, guias & mais</p>
				</div>
				<div class="col-lg-6 text-right">
					<p class="sub-title">confira os conteúdos gratuitos da <span>m/cia</span></p>	
				</div>
			</div>	
		</div>					
	</div>
</main>
<?php endwhile;
	endif;
 ?>	
<div class="filtro1" style="margin-top: 6%;">
	<?php get_template_part( 'template/filtro' ); ?> 
</div>			
<section class="materiais-sec">
			<div class="container">

				<div class="encontramos">
					<p>	Encontramos
						<?php
					   global $wp_query;
					   $not_singular = $wp_query->found_posts > 1 ? 'resultados' : 'resultado'; // if found posts is greater than one echo results(plural) else echo result (singular)
					   echo $wp_query->found_posts . " $not_singular  para a sua busca";
					?>							
					</p>	
					<hr>		
				</div>			
				<div class="row ">		

					 

					    <?php while( have_posts() ) : the_post(); ?>

								<div class="col-lg-3 col-12">
									<?php get_template_part( 'template/card-material' ); ?> 
								</div>




					    <?php endwhile;?>

					    <div class="container">
					    	<?php 
						    echo '<div class="container text-center navs-navigation">';
						    the_posts_pagination( array(
						    	'mid_size'=>3,
							 	'prev_text' => _( '« Anterior'),
							  	'next_text' => _( 'Proxima »'),
							) );
							 echo '</div>';
					    	 ?>
					    </div>



	


					</div>				
				</div>	
</section>
		    
	<?php } else{
		echo '<div class="container text-center" style="    margin-top: 19%;">';
		echo '<h2>Não possui post nessa categoria</h2>';
		echo '</div>';

	}




	 ?>











<?php get_footer(); ?>
