<?php get_header(); ?>

<style>
	.accordion-header{
		    border: 1px solid #dadada;
    padding: 2% 0%;
    border-right: none;
    border-left: none;
    display: flex;
	}
	.accordion-header button{
    width: 50%;
    background: white;
    border: none;
    text-align: left;
	}
	.accordion-header .resumo{
width: 50%;
    padding-right: 8%;
    font-size: 15px;
	}
	.arrow{
		    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    background: transparent;
    align-items: center;
    
    transition: 0.5s;
        transform: rotate(-90deg);
        cursor: pointer;
	}
	.arrow:hover{
			background-color: transparent;
			
			
	}
	.arrow:hover svg{
		opacity: .5;
	}	
	.arrow svg{
		transition: 0.5s;
    width: 45%;
    fill: black;	

	}
	.accordion-header.collapsed .arrow{
		transform: rotate(90deg);
	}
	.accordion-body{
    padding: 5% 0% 12% 0;
    position: relative;
    font-weight: 300;
	}
	.accordion-body ul{
		padding-left: 0;
	}
	.quero{
		display: flex;
    justify-content: flex-end;
    background: transparent;
    align-items: center;
    border: none;
    width: fit-content;
    font-weight: 600;
    position: absolute;
    right: 0%;
    bottom: 5%;
	}
	.quero svg{
		    width: 3%;
    margin-left: 2%;
	}
	.modal-dialog{
		    max-width: 60%;
	}
	.modal-dialog label{
		width: 100%;
	}
	.modal-dialog label input, .modal-dialog label textarea{
		border: none;
		width: 100%;
		border-bottom: 1px solid black;
	}
	.modal-dialog label textarea{
		height: 20vh;
	}
	.vagas{
		padding: 4% 0%;
	}
	.vagas h2{
		    margin-bottom: 4%;
	}
	.btn-close{
		    background: transparent;
    color: black;
    border: 1px solid white;
   
    padding: 0.5% 1%;
    font-size: 20px;
	}
	label.pret{
		margin-top: 5%;
	}
	.modal-dialog input[type=submit]{
			    float: right;
    background: black;
    color: white;
    padding: 1% 2%;
	}

	@media(max-width: 980px){
		.accordion-header{
			align-items: center;
		}	
		.accordion-body ul {
		    padding-left: 5%;
		    padding-top: 5%;
		}
		.accordion-body{
			    padding: 5% 0% 30% 0;
		}	
		.modal-dialog {
		    max-width: 100%;
		}	
		.modal-content{
			    padding-bottom: 45%;
		}			
	}
	.accordion-button{
		color: black;
	}
</style>			


<main>
	<?php echo  do_shortcode('[rev_slider alias="slide trabalhe conosco"]') ?>

</main>
<section class="vagas">

	<div class="container">
		<h2>nossas vagas</h2>
		<div class="accordion" id="accordionExample">


			<?php

			            

			        $listagem_home = new WP_Query(array(
			    'post_type' => 'vagas',
			    
			    'posts_per_page' => -1)
			    );
			              

			              if($listagem_home->have_posts()) : 

			                while($listagem_home->have_posts()) : $listagem_home->the_post();

			                   $imgCapa = get_field('imagem_do_material');
			                   $cont ++;


			?>  

		  <div class="accordion-item">
		    <div class="accordion-header collapsed" id="heading<?php echo $cont; ?>" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $cont; ?>" aria-expanded="true" aria-controls="collapse<?php echo $cont; ?>">
		      <button class="accordion-button " >
		        <?php 	the_title(); ?>
		      </button>
		       <p class="resumo"><?php 	the_field('resumo_da_vaga'); ?></p>
				<div class="arrow" >
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/></g></g></svg>							
				</div>		       
		    </div>
		    <div id="collapse<?php echo $cont; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $cont; ?>" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		      	<div class="row">
	      			<?php if( have_rows('conteudo_da_vaga') ): ?>
					    <?php while( have_rows('conteudo_da_vaga') ): the_row(); ?>
				      		<div class="col-lg-6">
								<?php the_sub_field('coluna_1'); ?> 		      			
				      		</div>
				      		<div class="col-lg-6">
				      			<?php the_sub_field('coluna_2'); ?> 
				      		</div>						    	
					    <?php endwhile; ?>
					<?php endif; ?>   	

		      	</div>	
		      	<button class="quero" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $cont; ?>">
		      		quero essa vaga 					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 392 327"><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path d="M225,0h8c5.21,3.69,11.07,6.74,15.54,11.17Q315.1,77.26,381.16,143.82c4.33,4.36,7.26,10.09,10.84,15.18v9c-3.23,4.74-5.81,10.12-9.78,14.12q-64.5,65-129.35,129.56c-6,6-11.68,12.25-19.87,15.32h-8c-9.15-3.25-15.1-10.58-21.66-17.1-11.62-11.55-11.6-23.27-.07-34.76q38.58-38.43,77.15-76.89c1.1-1.09,2.08-2.3,3.73-4.14H23.91c-12.35,0-18.78-4.48-23.07-15.94A5.33,5.33,0,0,0,0,177V149c4.66-12.28,13.73-16.31,26.55-16.27,83.6.31,167.2.16,250.8.16H284c-11.64-11.56-22.17-22-32.63-32.43q-24.57-24.54-49-49.17c-10.24-10.35-10.2-22.71,0-33.09C209.17,11.27,215.38,3.5,225,0Z"/></g></g></svg>	
		      	</button>			
		      </div>
		    </div>
		  </div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal<?php echo $cont; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $cont; ?>" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Vaga para | <?php the_title(); ?></h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
			      </div>
			      <div class="modal-body">
			        <?php echo do_shortcode('[contact-form-7 id="406" title="Vagas"]'); ?>
			      </div>

			    </div>
			  </div>
			</div>
		<?php endwhile;
			endif;
		 ?>


		</div>		
	</div>
</section>	





<?php get_footer(); ?>