<?php get_header(); ?>

<section class="sect4">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-12">
				<p class="title">blog</p>
			</div>
			<div class="col-lg-8 col-12  ">
				<div class="titulo">
					<p class="title">categorias</p>

					<p class="numero">/5</p>
					
						<div class="arrow" id="categoria-btn">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/></g></g></svg>							
						</div>
												
				</div>
				<div class="categorias">
					<div class="row text-center">
						<div class="col">
							<p>Marketing Digital</p>
						</div>
						<div class="col">
							<p>Redes Sociais</p>
						</div>
						<div class="col">
							<p>Geração de Leads</p>
						</div>	
						<div class="col">
							<p>Mercado imobiliário</p>
						</div>
						<div class="col">
							<p>Vendas</p>
						</div>																							
					</div>
				</div>				
			</div>
		</div>
	</div>
	<section class="cinza">
		<div class="container">
			<div class="row">
				<?php 
					$args = array('posts_per_page' => 3, 'post_type' => 'post');
					$query = new WP_Query( $args );
					while( $query->have_posts()) : $query->the_post();
					$imagemCardPost = get_field('imagem_destacada');

				?>				
				<div class="col-lg-4 col-12 column">
					<?php get_template_part( 'template/blog' ); ?>
				</div>
				<?php endwhile; ?>		
			</div>	
				<div class="titulo2">
					<p class="title">ver mais</p>

					<p class="numero">/<?php wpb_total_posts(); ?></p>
					
						<div class="arrow" >
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/></g></g></svg>							
						</div>
												
				</div>			
		</div>		
	</section>

</section>

<script>
	$('strong').contents().unwrap();
$('.sect4 b').contents().unwrap();
$('.sect-relacionados b').contents().unwrap();

</script>
<?php get_footer(); ?>