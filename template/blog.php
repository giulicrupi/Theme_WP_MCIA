					<?php 

						$imagemCard = get_field('imagem_destacada');
					 ?>

					<div class="card1">
						<a href="<?php the_permalink(); ?>">
						<div class="imagem" style="background-image: url(<?php echo $imagemCard['url']; ?>);">
							
						</div>
						</a>
						<div class="content">

							<div class="row">
								<div class="col-lg-6">
									<p class="data"><?php the_date(); ?></p>
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
								<div class="col-lg-6 text-right">
									<div class="leitura">
										<p>tempo de leitura:</p>
										<span><?php echo tt_reading_time(); ?></span>
									</div>											
								</div>
							</div>
							<p class="title-post"><?php the_title(); ?></p>
							<a href="<?php the_permalink(); ?>">
							<div class="texto">
							
					          <?php 
								// $summary = get_field('introducao');
					   //        	echo mb_strimwidth("$summary", 0, 100, "...");



					           ?>
					           <?php //the_field('introducao'); ?>
					           <?php 
									$summary = get_field('introducao');
									$len=strlen($summary);

									if($len>40){
										$summary=substr($summary,0,90). '...';
									}

									echo $summary;

					            ?>
							</div>
							</a>	
							<div class="autor">
								<?php
									$user = wp_get_current_user();
									 
									if ( $user ) :
									    ?>
									    <img src="https://secure.gravatar.com/avatar/198d40da9e4376b57bfea9770022b2cb?s=96&d=mm&r=g" class="img-fluid avatar"/>
									<?php endif; ?>
								<p><?php the_author(); ?>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/right-arrow.png" alt="" class="img-fluid">
								</a>	
								 </p>

							</div>
						</div>
					</div>
				