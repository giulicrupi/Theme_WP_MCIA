<?php get_header(); ?>

<main>
	<?php echo  do_shortcode('[rev_slider alias="slide trabalhe conosco"]') ?>

</main>
<section class="vaga-single">
	<div class="container">
		<h2 class="title">
			<?php the_title(); ?>
		</h2>
		<?php the_field('resumo_da_vaga'); ?>
		<div class="conteudo">
			<?php the_field('conteudo_da_vaga'); ?>
		</div>
	</div>
	<div class="container form-sec">
		<h2 class="title">Vamos bater um papo?</h2>
		<div class="form">
			<?php echo do_shortcode('[contact-form-7 id="406" title="Vagas"]'); ?>
		</div>
	</div>			
</section>
<section class="sect4-blog">
	<div class="container">
		
		
		<div class="row">
			<div class="col-lg-6 alinhar">
				<div class="prev-pos">
					<?php previous_post_link('%link', ' 


					<p class="pst">vaga anterior</p> 
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

					<p class="pst">próxima vaga</p> 
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
<?php get_footer(); ?>