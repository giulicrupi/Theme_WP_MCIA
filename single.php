<?php get_header(); ?>
<?php 

//variaveis

$audio =  get_field('audio');
$imagemDest = get_field('imagem_destacada');

 ?>
<?php if( have_posts() ) :the_post(); ?>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<?php the_field('formulario'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>
        
      </div>
    </div>
  </div>
</div>



<section class="sect1-blog">
	<div class="container text-center">
		<div class="alinhar">
			<div class="categoria">
				<?php 

					$terms = get_the_terms( $post->ID, 'category' );
					if ( !empty( $terms ) ){
					    // get the first term
					    $term = array_shift( $terms );
					      echo '<p >' . $term->name . '</p>';
					}

				 ?>				
			</div>			
		</div>
		<p class="title">
			<?php the_title(); ?>
		</p>
		<?php 

		$audio = get_field('audio', false);
			if (!empty($audio)) {
		 ?>			
		<div class="audio">
			<audio controls controlsList="nodownload">
			  
			  <source src="<?php echo $audio['url']; ?>" type="audio/mpeg">
				
			</audio>
	<?php 

		$down = get_field('formulario', false);
			if (!empty($down)) {
		 ?>				
			<a data-toggle="modal" data-target="#modalExemplo">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 383.26 408.8"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M21.57,408.8C13.65,406.54,6.63,402.85,3.13,395a30.88,30.88,0,0,1-3-11.82C-.08,349.75,0,316.37,0,283a16.74,16.74,0,0,1,.19-1.71h50.7v76.16H332.08V281.27h51.18v96.29c0,18.44-4.41,24.83-21.56,31.24Z"/><path d="M153.31,178.85V15.72C153.31,4.59,157.9,0,169.06,0h45.09C225.34,0,230,4.58,230,15.66V178.85h4.55c14.76,0,29.52.07,44.29,0,6.1,0,11.1,1.78,13.77,7.55s.67,10.75-3.32,15.31q-43.4,49.5-86.72,99.08c-6.87,7.84-14.9,7.86-21.74.05Q137.4,251.3,94.07,201.73c-4-4.55-6.07-9.48-3.4-15.3s7.63-7.65,13.74-7.61C120.5,178.92,136.59,178.85,153.31,178.85Z"/></g></g></svg>
			</a>
		<?php } ?>		
		</div>	
		<?php } ?>				
	</div>
</section>

<section class="sect2-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 ">
				<div class="conteudo-blog">
					<div class="autor">
						<?php
							$user = wp_get_current_user();
							 
							if ( $user ) :
							    ?>
							    <img src="https://secure.gravatar.com/avatar/198d40da9e4376b57bfea9770022b2cb?s=96&d=mm&r=g" class="img-fluid avatar"/>
							<?php endif; ?>
						<div class="nome">
							<p>escrito por</p>
							<p class="autor-p"><?php the_author(); ?></p>
						</div>

					</div>
					<div class="data">
						<p>publicado em</p>
						<div class="date"><?php the_date(); ?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row topico text-right">
					<div class="col-lg-6 col-6 right">
						<div class="leitura">
							<p class="t-blog">tempo de leitura:</p>
							<span><?php echo tt_reading_time(); ?></span>
						</div>						
					</div>
					<div class="col-lg-6 col-6">
						<div class="comp">
							<p class="t-blog">compartilhar</p>
							<div class="icones">
								<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>			
</section>	
<section class="sect-img">
	<div class="img-dest" style="background-image: url(<?php echo $imagemDest['url'];  ?>);">
		
	</div>
</section>

<section class="content">
	<div class="container">
		<div class="row">


			
			<div class="col">
				


					<section class="sect3-blog">
						<div class="container">
							<div class="introducao">
								<?php the_field('introducao'); ?>
							</div>
							<div class="links">
								<?php the_content(); ?>
							</div>
							<div class="conteudo">
								<?php the_field('texto_conceito'); ?>
							</div>		
						</div>
					</section>	




			</div>


			<?php 

				$materiais = get_field('materiais', false);
					if (!empty($materiais)) {
 			?>	

			<div class="col-lg-4 alinhar">
				<div class="topico-material">
				<?php if( have_rows('materiais') ): ?>
				    
				    <?php while( have_rows('materiais') ): the_row(); 
				        $material = get_sub_field('imagem_do_material');
				        ?>

				        <div class="material">
				        	<a href="<?php the_sub_field('link_para_abrir'); ?>" target="_blank">
				        		
				        		<img src="<?php echo $material['url']; ?>" alt="" class="img-fluid">

				        	</a>
				        </div>

				    <?php endwhile; ?>
				   
				<?php endif; ?>							
				</div>		
			</div>
			<?php } ?>

		</div>

	</div>

</section>
					<section class="sect4-blog">
						<div class="container">
							
							
							<div class="row">
								<div class="col-lg-6 alinhar">
									<div class="prev-pos">
										<?php previous_post_link('%link', ' 


										<p class="pst">post anterior</p> 
										<p class="title">%title</p>

													
										<div class="arrow-prev">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/></g></g></svg>							
										</div>
													
										'); ?>				
									</div>
								</div>
								<div class="col-lg-6 alinhar">
									<div class="next-pos">
										<?php next_post_link('%link', '

										<p class="pst">post seguinte</p> 
										<p class="title">%title</p>

													
										<div class="arrow-prev">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/></g></g></svg>							
										</div>



										'); ?>				
									</div>
								</div>
							</div>
						</div>	
					</section>

<!-- <section class="sect-relacionados">
	<div class="container">
		<p class="title">
			Posts Relacionados
		</p>
		<?php
		$featured_posts = get_field('posts_relacionados');
		if( $featured_posts ): ?>
		    <div class="row">
		    <?php foreach( $featured_posts as $featured_post ): 
		        $permalink = get_permalink( $featured_post->ID );
		        $title = get_the_title( $featured_post->ID );
		        $data = get_the_date('', $featured_post->ID );
		        $autor = get_the_author( $featured_post->ID );
		        
		        $imagemDest = get_field( 'imagem_destacada', $featured_post->ID );
		         $intro = get_field( 'introducao', $featured_post->ID );
		        ?>
		        <div class="col-lg-4 sep" style="margin-bottom: 3%;">		            
		            <div class="card-post">
		            	<div class="img" style="background-image: url(<?php echo $imagemDest['url']; ?>);">
		            		
		            	</div>
						<div class="conteudo">
			            	<div class="desc">
			            		<div class="row">
			            			<div class="col-lg-6">
					            		<p class="data"><?php echo $data; ?></p>
					            		<div class="categoria">
												<?php 

													$terms = get_the_terms( $post->ID, 'category' );
													if ( !empty( $terms ) ){
													    // get the first term
													    $term = array_shift( $terms );
													      echo '<p class="endereco">' . $term->name . '</p>';
													}

												 ?>			            			
					            		</div>			            				
			            			</div>
			            			<div class="col-lg-6 text-right">
			            				
										<div class="leitura">
											<p>Tempo de leitura:</p>
											<span><?php echo tt_reading_time(); ?></span>
										</div>				            				
			            			</div>
			            		</div>

			            		<p class="title-post">
			            			<?php echo $title; ?>
			            		</p>
			            		<div class="texto">
			            			<?php echo substr($intro, 0, 150);  ?>...
			            		</div>
			            	</div>
							<div class="ver-mais">
								<div class="autor">
									<?php $user = wp_get_current_user();
									 
									if ( $user ) :
									    ?>
									    <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" class="img-fluid avatar"/>
									<?php endif; ?>
									<p><?php the_author(); ?></p>								
								</div>
								<div class="link">
									<a href="<?php echo $permalink; ?>">
										<p>Ver mais</p>
									</a>
								</div>							
							</div>							
						</div>		            	
		            </div>
		        </div>
		    <?php endforeach; ?>
		    </div>
		<?php endif; ?>		
	</div>
</section>		 -->
<?php 

$relacionados = get_field('posts_relacionados', false);
	if (!empty($relacionados)) {
 ?>	
<section class="sect-relacionados">
	<div class="container t">
		<p class="title">relacionados</p>
	</div>
	<div class="container">

		<?php
		$featured_posts = get_field('posts_relacionados');
		if( $featured_posts ): ?>
		    <div class="row r-rel">
		    <?php foreach( $featured_posts as $post ): 

		        // Setup this post for WP functions (variable must be named $post).
		        setup_postdata($post); ?>


				<div class="col-lg-4 col-12 column">
					<?php get_template_part( 'template/blog' ); ?>
				</div>
		        
		    <?php endforeach; ?>
		    </div>
		    <?php 
		    // Reset the global post object so that the rest of the page works correctly.
		    wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</section>	
<?php } ?>
<?php get_template_part( 'template/news' ); ?>

<!-- <section class="comentarios">
	<div class="container">
		<p class="title">Comentários:</p>
		<?php //comments_template(); ?>		
	</div>
</section>			
 -->
 <?php endif; ?>		

<script>

$('.sect-relacionados b').contents().unwrap();

</script>
<?php get_footer(); ?>