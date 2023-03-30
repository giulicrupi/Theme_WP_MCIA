<?php 
// archive.php
get_header();
?>
	



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
							<a href="<?php echo site_url(); ?>/category/mercado-imobiliario/">
								<p>Marketing Digital</p>
							</a>
						</div>
						<div class="col">
							<a href="<?php echo site_url(); ?>/category/redes-sociais">
								<p>Redes Sociais</p>
							</a>	
						</div>
						<div class="col">
							<a href="<?php echo site_url(); ?>/category/geracao-de-leads/">
								<p>Geração de Leads</p>
							</a>
						</div>	
						<div class="col">
							<a href="<?php echo site_url(); ?>/category/mercado-imobiliario/">
								<p>Mercado imobiliário</p>
							</a>	
						</div>
						<div class="col">
							<a href="<?php echo site_url(); ?>/category/vendas/">
								<p>Vendas</p>
							</a>	
						</div>																							
					</div>
				</div>				
			</div>
		</div>
	</div>	
	<section class="cinza">
		<div class="container">
				<!-- <div class="row card3">	 -->


					<?php echo do_shortcode('[ajax_load_more archive="true" loading_style="grey"  button_label="ver mais"   post_type="post" posts_per_page="3" no_results_text="não possui posts nessa categoria"]
					'); ?>
				<!-- </div> -->
		</div>	
	</section>	   				


</section>
<?php get_template_part( 'template/news' ); ?>
<section class="arch-projetos" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/04/banner-bg2.jpg); display: none;">
	<div class="overlay">
		<div class="container text-center">

				<p class="title">projetos</p>
			
				<div id="unlock2">



					<div class="content">

						<div class="drag">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/><path d="M0,177a5.33,5.33,0,0,1,.84,1.16c4.29,11.46,10.72,15.94,23.07,15.94H284.15c-1.65,1.84-2.63,3-3.73,4.14q-38.56,38.46-77.15,76.89c-11.53,11.49-11.55,23.21.07,34.76,6.56,6.52,12.51,13.85,21.66,17.1H0Z" style="fill:#fff"/><path d="M225,0c-9.62,3.5-15.83,11.27-22.67,18.2-10.24,10.38-10.28,22.74,0,33.09q24.41,24.69,49,49.17c10.46,10.46,21,20.87,32.63,32.43h-6.61c-83.6,0-167.2.15-250.8-.16-12.82,0-21.89,4-26.55,16.27V0Z" style="fill:#fff"/><path d="M392,159c-3.58-5.09-6.51-10.82-10.84-15.18Q315.1,77.27,248.54,11.17C244.07,6.74,238.21,3.69,233,0H392Z" style="fill:#fff"/><path d="M233,327c8.19-3.07,13.89-9.33,19.87-15.32q64.68-64.77,129.35-129.56c4-4,6.55-9.38,9.78-14.12V327Z" style="fill:#fff"/></g></g></svg>
						</div>

						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
						<!-- <div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div> -->

						<div class="drop">
							
							<div class="wave"></div>

						</div>
						
					</div>
					
				</div>			
		</div>		
	</div>		

</section>
<script>
	$('strong').contents().unwrap();
$('.sect4 b').contents().unwrap();
$('.sect-relacionados b').contents().unwrap();

</script>
<?php get_footer(); ?>