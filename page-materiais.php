<?php get_header(); ?>
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
<!-- <?php

            

       // $listagem_home = new WP_Query(array(
   // 'material-destaque' => 'sim',
    
   // 'posts_per_page' => 1)
   // );
              

             // if($listagem_home->have_posts()) : 

               // while($listagem_home->have_posts()) : $listagem_home->the_post();

                 //  $imgCapaDestque = get_field('imagem_do_material');


?>  	
	<section class="destaque-material">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 pl col-12">
					<div class="img" style="background-image: url(<?php// echo $imgCapaDestque['url']; ?>);">
						
					</div>				
				</div>
				<div class="col-lg-6 col-12 alinhar">
					<div class="conteudo">
						<div class="categoria-mat">
							<?php 

								//$terms = get_the_terms( $post->ID, 'material-categoria' );
								//if ( !empty( $terms ) ){
								//    // get the first term
								//    $term = array_shift( $terms );
								//      echo '<p >' . $term->name . '</p>';
								//}

							 ?>	
						</div>							
						<div class="conteudo-geral">
							<p class="title"><?php //the_title(); ?> </p>
							<div class="texto">
								<?php //the_field('destaque'); ?>
							</div>
							<div class="botao">
								<a href="#">
									<button>Download do material</button>
								</a>
							</div>							
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>
		<?php //endwhile;
			//endif;
		 ?>	 -->
<?php get_template_part( 'template/filtro' ); ?> 
<section class="materiais-sec">
	<div class="container">
		<div class="row">
	    <?php

	                

	            $listagem_home = new WP_Query(array(
	        'post_type' => 'material',
	        
	        'posts_per_page' => -1)
	        );
	                  

	                  if($listagem_home->have_posts()) : 

	                    while($listagem_home->have_posts()) : $listagem_home->the_post();

	                       $imgCapa = get_field('imagem_do_material');


	    ?>  			

			<div class="col-lg-3 col-12">
				<?php get_template_part( 'template/card-material' ); ?> 
			</div>
		<?php endwhile;
			endif;
		 ?>	

		</div>
		<div class="botao-mate text-center">
			<a href="<?php echo site_url(); ?>/material/destaque/todos/">
				<button>ver todos</button>
			</a>
		</div>
	</div>
</section>


<script>

	 // document.forms[0].namedItem("ofmaterial-destaque").options[0].innerHTML = "Selecione a cidade";
	//document.forms[0].ofStatus.options[0].style.display = "none";

	// $("form #ofmaterial-destaque option:nth-child(1)").html("opa");

   	// $('form #ofmaterial-destaque').val("3");
   
   	// $("#ofmaterial-destaque").val("0").delete();
   	$("#ofmaterial-destaque option[value='0']").remove();
   	$("#ofmaterial-destaque option[value='18']").remove();
   	$("#ofmaterial-destaque option[value='22']").remove();


   	// $('form #ofmaterial-destaque  option[value="val2"]').prop("selected", true);

	
	// $('form #ofmaterial-destaque option[value=val2]').attr('selected','selected');


</script>
<?php get_footer(); ?>