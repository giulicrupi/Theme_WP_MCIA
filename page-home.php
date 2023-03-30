<?php 

// error_reporting(0);
// ini_set(“display_errors”, 0 );


 ?>
<?php get_header(); ?>

<main >
	<?php echo do_shortcode('[rev_slider alias="banner home"]'); ?>
</main>
<section class="sect1">
	<div class="container">
		<div class="frase">
			<p>entre em <br> nosso <br> mundo</p>
		</div>
		<div class="row">
			<div class="col-lg-3 alinhar-r">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/selo.png" alt="" class="selo img-fluid" id="reload">				
			</div>
			<div class="col-lg-8">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/circle.png" alt="" class="img-fluid ball-sobre">
			</div>
			<div class="col-lg-1"></div>
		</div>

			<div id="unlock">



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


					<div class="drop">
						
						<div class="wave"></div>

					</div>
					
				</div>
				
			</div>	
	</div>
</section>
<section class="sect2" id="sobre">

  <section class="time-line1">
  <div class="time-line">
    <h1 class="text-center">linha do tempo</h1>
    <div class="controls prev" data-direction="-1"></div>
    <div class="controls next" data-direction="1"></div>
    <div class="dates-overflow">
      
   
    <div class="dates-wrap">




      <div class="date active">
        <div class="date-year">

          <p>1995</p>
        </div>
        <div class="date-content">
          <div class="date-image"></div>
          <div class="svg text-center">


                        <img src="<?php echo  site_url(); ?>/wp-content/uploads/2022/04/ciadom2-2.png" alt="" class="img-fluid ico">            
          </div>          
          <div class="date-text"> 
          	<p>
				Nasce a CIA de comunicação da
				insatisfação de um arquiteto que
				não aguentava mais ver a mesmice
				das campanhas publicitárias do
				mercado imobiliário que não se
				identificavam com o conceito e o
				partido arquitetônico propostos
				pelos incorporadores.          		
          	</p>
          </div>
        </div> 
      </div>


   
          
      <?php if( have_rows('linha_do_tempo') ): ?>
      

          <?php while( have_rows('linha_do_tempo') ): the_row(); 
              $image = get_sub_field('imagem');
              ?>
              

                
                <div class="date ">
                  <div class="date-year">
                    <p><?php the_sub_field('ano'); ?></p>
                  </div>
                  <div class="date-content">
                    <div class="date-image"></div>
                      <div class="svg text-center">


                        <img src="<?php echo  $image['url']; ?>" alt="" class="img-fluid ico">         
                      </div>                     
                    <div class="date-text"> <?php the_sub_field('texto'); ?></div>
                  </div> 
                </div>
                        

          <?php endwhile; ?>
          
      <?php endif; ?>  

  
    </div>
      
      
    </div>
  </div>  
  </section>	
</section>

<section class="sect3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12 p-0">
				<div class="conteudo">
					<div class="titulo">
						<p class="title">serviços</p>

						<p class="numero">/8</p>
						<a href="#">
							<div class="arrow">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/></g></g></svg>							
							</div>
						</a>							
					</div>
					<hr>
					<div class="topicos">
						<div class="row">
							<div class="col-lg-6 col-6">
								<p class="link"><a href="#">branding <span>+</span></a></p>
								<p class="link"><a href="#">performace <span>+</span></a></p>
								<p class="link"><a href="#">web <span>+</span></a></p>
								<p class="link"><a href="#">motion <span>+</span></a></p>
							</div>
							<div class="col-lg-6 col-6">
								<p class="link"><a href="#">design <span>+</span></a></p>
								<p class="link"><a href="#">inbound <span>+</span></a></p>
								<p class="link"><a href="#">social <span>+</span></a></p>
								<p class="link"><a href="#">sdr <span>+</span></a></p>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12 p-0 tec" id="tecnologias">
				<div class="conteudo">
					<div class="titulo">
						<p class="title">tecnologias</p>

						<p class="numero">/7</p>
						<a href="#">
							<div class="arrow">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/></g></g></svg>							
							</div>
						</a>							
					</div>
					<hr>
					<div class="topicos">
						<div class="row">
							<div class="col-lg-6 col-6">
								<div class="wordpress imagem-div">
									<p class="link"><a href="#">wordpress <span>+</span></a></p>
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/wordpress.jpg" alt="" class="img -fluid">
								</div>
								<div class="rd imagem-div">
									<p class="link"><a href="#">rd station <span>+</span></a></p>
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/rd.jpg" alt="" class="img -fluid">
								</div>
								<div class="sharp imagem-div">
									<p class="link"><a href="#">sharpspring <span>+</span></a></p>
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/sharp.jpg" alt="" class="img -fluid">
								</div>
								<div class="sharp imagem-div">
									<p class="link"><a href="#">inteligência artificial <span>+</span></a></p>
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/IA.jpg" alt="" class="img -fluid">
								</div>								
								
							</div>
							<div class="col-lg-6 col-6">
								<div class="web imagem-div2">
									<p class="link"><a href="#">web development <span>+</span></a></p>
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/development.jpg" alt="" class="img -fluid">									
								</div>
								<div class="adobe imagem-div2">
									<p class="link"><a href="#">adobe <span>+</span></a></p>
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/photoshop.jpg" alt="" class="img -fluid">									
								</div>
								<div class="chat imagem-div2">
									<p class="link"><a href="#">chatbot <span>+</span></a></p>
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/chat-bot.jpg" alt="" class="img -fluid">									
								</div>
																
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>
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
								<p>marketing digital</p>
							</a>
						</div>
						<div class="col">
							<a href="<?php echo site_url(); ?>/category/redes-sociais">
								<p>redes sociais</p>
							</a>	
						</div>
						<div class="col">
							<a href="<?php echo site_url(); ?>/category/geracao-de-leads/">
								<p>geração de leads</p>
							</a>
						</div>	
						<div class="col">
							<a href="<?php echo site_url(); ?>/category/mercado-imobiliario/">
								<p>mercado imobiliário</p>
							</a>	
						</div>
						<div class="col">
							<a href="<?php echo site_url(); ?>/category/vendas/">
								<p>vendas</p>
							</a>	
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
					$args = array('posts_per_page' => 3);
					$query = new WP_Query( $args );
					 if($query->have_posts()) : 
					while( $query->have_posts()) : $query->the_post();
					$imagemCardPost = get_field('imagem_destacada');

				?>				
				<div class="col-lg-4 col-12 column">
					<?php get_template_part( 'template/blog' ); ?>
				</div>
				<?php endwhile; ?>	
				<?php  wp_reset_postdata(); ?>
				<?php endif; ?>		
			</div>	
				<div class="titulo2">
					<p class="title">ver mais</p>

					<p class="numero">/<?php wpb_total_posts(); ?></p>
						<a href="<?php echo site_url(); ?>/tag/post/">
							<div class="arrow" >
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/></g></g></svg>							
							</div>
						</a>
												
				</div>			
		</div>		
	</section>

</section>

<?php 

while(have_posts()) : the_post();
		$imagemCardPost = get_field('imagem_destacada');
 ?>
<section class="sect5" id="clientes">
	<div class="container">
		<p class="title">
			as recomendações <br>
dos clientes
		</p>
		<div class="row">
			<?php 
			$images = get_field('logos_parceiros');
			
			if( $images ): ?>
			    
			        <?php foreach( $images as $image_id ): ?>

			        	<div class="col-lg-2 col-4 column-parceiros">
			        		<img src="<?php echo $image_id['url']; ?>" alt="" class="img-fluid icon-par">
			        	</div>

			        <?php endforeach; ?>
			    
			<?php endif; ?>					
		</div>	
	</div>
</section>	


<?php endwhile; ?>	
<section class="sect-feed" id="feed">
	<div class="container">		
		<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
	</div>
</section>	

<script>
// index.js
window.onscroll = function () {
    scrollRotate();
};

function scrollRotate() {
    let image = document.getElementById("reload");
    image.style.transform = "rotate(" + window.pageYOffset/2 + "deg)";
}
$(function () {
  $("#unlock").sortable();
});
	
</script>

<script>
$('.cinza strong').contents().unwrap();
// $('.sect4 b').contents().unwrap();
// $('.sect-relacionados b').contents().unwrap();

</script>
<?php get_footer(); ?>












