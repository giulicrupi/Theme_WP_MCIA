<?php get_header(); ?>

<?php 
	$imgApresentacao = get_field('imagem_de_apresentacao');
	$imgDesafio = get_field('imagem_do_desafio');	
  $imgRedes = get_field('imagem_das_redes_sociais'); 
  $imgSite1 = get_field('imagem_do_site_1'); 
  $imgSite2 = get_field('imagem_do_site_2');
  $imgSite3 = get_field('imagem_do_site_3');
  $imgSite4 = get_field('imagem_do_site_4');
  $imgSite5 = get_field('imagem_do_site_5'); 
  $imgLayout = get_field('imagem_do_layout');          

 ?>

<div class="slider">

  <div class="nav">
    <div class="next"></div>
    <div class="prev"></div>
    
  </div>
  <div class="item is-active">
    <div class="content">

      <div class="conteudo text-center">
        <div class="wrap2 menor">
          <hr>
          <p class="nome-proj"><?php the_title(); ?></p>
          <hr>
        </div>   
        <div class="wrap">
          
         identidade
        </div>        
      </div>
    </div>
    <div class="imgs">
      <div class="grid">

      	<?php 
			$images = get_field('identidade'); // get gallery
			$image1  = $images[0];
			$image2  = $images[1];
			$image3  = $images[2];
			$image4  = $images[3];

      	 ?>
      	<?php if( $image1 ) : ?>
        <div class="img img-1"><img src="<?php echo $image1['url']; ?>"/></div>
    	<?php endif; ?>	
    	<?php if( $image2 ) : ?>	    
        <div class="img img-2"><img src="<?php echo $image2['url']; ?>"/></div>
        <?php endif; ?>	
        <?php if( $image3 ) : ?>	
        <div class="img img-3"><img src="<?php echo $image3['url']; ?>"/></div>
        <?php endif; ?>	 
        <?php if( $image4 ) : ?>
        <div class="img img-4"><img src="<?php echo $image4['url']; ?>"/></div>
        <?php endif; ?>	 
      </div>
    </div>
  </div>
  <div class="item">
    <div class="content">
      <div class="conteudo text-center">
        <div class="wrap2 menor">
          <hr>
          <p class="nome-proj"><?php the_title(); ?></p>
          <hr>
        </div>  
        <div class="wrap">
          
         stand de vendas
        </div>        
      </div>
    </div>
    <div class="imgs">
      <div class="grid">
      	<?php 
			$imagesStand = get_field('imagens_do_stand'); // get gallery
			$stand1  = $imagesStand[0];
			$stand2  = $imagesStand[1];
			$stand3  = $imagesStand[2];
			$stand4  = $imagesStand[3];

      	 ?> 
      	<?php if( $stand1 ) : ?>      	
        <div class="img img-1"><img src="<?php echo $stand1['url']; ?>"/></div>
        <?php endif; ?>	
        <?php if( $stand2 ) : ?>  
        <div class="img img-2"><img src="<?php echo $stand2['url']; ?>"/></div>
        <?php endif; ?>	
        <?php if( $stand3 ) : ?> 
        <div class="img img-3"><img src="<?php echo $stand3['url']; ?>"/></div>
        <?php endif; ?>	
        <?php if( $stand4 ) : ?> 
        <div class="img img-4"><img src="<?php echo $stand4['url']; ?>"/></div>
        <?php endif; ?>	 
      </div>
    </div>
  </div>

</div>
<section class="sect-sobre" id="reveal2">
  <div class="container c-sobre" >
    <div class="row">

      <div class="col-lg-6">
        <div class="img" style="background-image: url(<?php echo $imgApresentacao['url']; ?>);">
          
        </div>
      </div>
      <div class="col-lg-6 alinhar">
        <div class="conteudo">
          <p class="sub">apresentação</p>
          <p class="title"><?php the_field('titulo_da_apresentacao'); ?></p>
          <div class="texto">
          	<?php the_field('texto_de_apresentacao'); ?>
          </div>      
        </div>
      </div>      
    </div>
  </div>
</section>
<section class="sect-sobre2" id="reveal3">
  <div class="container c-sobre" >
    <div class="row">
      <div class="col-lg-6 alinhar">
        <div class="conteudo">
          <p class="sub">o desafio</p>
          <p class="title">o que tinhamos que fazer</p>
          <div class="texto">
            <?php the_field('texto_do_desafio'); ?>
          </div>      
        </div>
      </div>
      <div class="col-lg-6">
        <div class="img" style="background-image: url(<?php echo $imgDesafio['url']; ?>);">
          
        </div>
      </div>
    </div>
  </div>
</section>

<section class="tecnologias" id="reveal4">
  <section class="sect3">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 p-0">
          <div class="conteudo">
            <p class="sub">Serviços utilizados</p>
            <hr>
            <div class="topicos">
              <div class="row">
                <div class="col-lg-6 col-6">
                <?php if( have_rows('servicos_utilizados_no_projeto') ): ?>
                    <?php while( have_rows('servicos_utilizados_no_projeto') ): the_row(); ?>  
                        <?php
                    if( get_sub_field('branding') ) {

                    ?>                                    
                      <p class="link">branding <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">branding <span>+</span></p>
                    <?php } ?>  

                        <?php
                    if( get_sub_field('performace') ) {

                    ?>                                    
                      <p class="link">performace <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">performace <span>+</span></p>
                    <?php } ?>  


                        <?php
                    if( get_sub_field('web') ) {

                    ?>                                    
                      <p class="link">web <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">web <span>+</span></p>
                    <?php } ?>  

                        <?php
                    if( get_sub_field('motion') ) {

                    ?>                                    
                      <p class="link">motion <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">motion <span>+</span></p>
                    <?php } ?>                                                              

                    <?php endwhile; ?>
                <?php endif; ?>                   
                </div>
                <div class="col-lg-6 col-6">
                <?php if( have_rows('servicos_utilizados_no_projeto') ): ?>
                    <?php while( have_rows('servicos_utilizados_no_projeto') ): the_row(); ?>  
                        <?php
                    if( get_sub_field('design') ) {

                    ?>                                    
                      <p class="link"><a href="#">design <span>+</span></a></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">design <span>+</span></p>
                    <?php } ?>  

                        <?php
                    if( get_sub_field('inbound') ) {

                    ?>                                    
                      <p class="link">inbound <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">inbound <span>+</span></p>
                    <?php } ?>  


                        <?php
                    if( get_sub_field('social') ) {

                    ?>                                    
                      <p class="link">social <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">social <span>+</span></p>
                    <?php } ?>  

                        <?php
                    if( get_sub_field('srk') ) {

                    ?>                                    
                      <p class="link">sdr <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">sdr <span>+</span></p>
                    <?php } ?>                                                              

                    <?php endwhile; ?>
                <?php endif; ?>                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12 p-0 tec" id="tecnologias">
          <div class="conteudo">
            <p class="sub">tecnologias utilizadas</p>
            <hr>
            <div class="topicos">
              <div class="row">
                <div class="col-lg-6 col-6">
                <?php if( have_rows('tecnologias_usadas') ): ?>
                    <?php while( have_rows('tecnologias_usadas') ): the_row(); ?>  
                        <?php
                    if( get_sub_field('wordpress') ) {

                    ?>                                    
                      <p class="link">wordpress <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">wordpress <span>+</span></p>
                    <?php } ?>  

                        <?php
                    if( get_sub_field('rd-station') ) {

                    ?>                                    
                      <p class="link">rd station <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">rd station <span>+</span></p>
                    <?php } ?>  


                        <?php
                    if( get_sub_field('sharpspring') ) {

                    ?>                                    
                      <p class="link">sharpspring <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">sharpspring <span>+</span></p>
                    <?php } ?>  
                        <?php
                    if( get_sub_field('inteligencia_artificial') ) {

                    ?>                                    
                      <p class="link">inteligência artificial<span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">inteligência artificial <span>+</span></p>
                    <?php } ?>                      
                                                          

                    <?php endwhile; ?>
                <?php endif; ?>                   
                </div>
                <div class="col-lg-6 col-6">
                <?php if( have_rows('tecnologias') ): ?>
                    <?php while( have_rows('tecnologias') ): the_row(); ?>  
                        <?php
                    if( get_sub_field('web-development') ) {

                    ?>                                    
                      <p class="link">web development <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">web development <span>+</span></p>
                    <?php } ?>  

                        <?php
                    if( get_sub_field('adobe') ) {

                    ?>                                    
                      <p class="link">adobe <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">adobe <span>+</span></p>
                    <?php } ?>  


                        <?php
                    if( get_sub_field('chatbot') ) {

                    ?>                                    
                      <p class="link">chatbot <span>+</span></p>
                    <?php }else{ ?>
                      <p class="link desabilitado">chatbot <span>+</span></p>
                    <?php } ?>  

                                                                

                    <?php endwhile; ?>
                <?php endif; ?>                 
                </div>
              </div>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>  
</section>
<!-- partial:index.partial.html -->
<section class="trigger1">
<div class="conteudo-geral">
  <div class="primeiro">
     <div class="marquee-wrapper">
      <div class="marquee">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/1.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/2.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/3.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/4.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/5.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/6.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/7.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/8.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/9.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/10.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/11.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/12.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/13.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/14.jpg">
        
      </div>
    </div> 
  </div>
  <div class="segundo">
    <div class="marquee-wrapper2">
      <div class="marquee2">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/15.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/16.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/17.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/18.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/19.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/20.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/21.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/22.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/23.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/24.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/25.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/26.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/27.jpg">
        <img src="https://mcia.digital/wp-content/uploads/2022/07/28.jpg">
      </div>
    </div>
  </div>  
</div>

<div class="container">

    <div class="left">
      <p class="title">redes sociais criadas</p>
      <p class="texto">conheça as redes:</p>
      <div class="redes">
        <p><a href="<?php the_field('link_do_facebook'); ?>"><i class="fa-brands fa-instagram"></i> instagram</p></a></p>
        <p><a href="<?php the_field('link_do_instagram'); ?>"><i class="fa-brands fa-facebook-f"></i> facebook</p></a></p>
        <p><a href="<?php the_field('link_do_tik_tok'); ?>"><i class="fa-brands fa-tiktok"></i> tiktok</p></a></p>
      </div>      
    </div>  
  
    <div class="content">
      
        <div class="imagens text-center">
          <img src="<?php echo $imgRedes['url']; ?>" alt="" class="img-fluid"> 
        </div>       
      
    </div>    
</div>
</section>       
<section class="trigger2">
    <div>
        <div class="iphone-image-wrapper">
            <div class="iphone1-text">
                <p>Site da Holos incorporadora</p>
                 <p><a href="#" style="color: white;">ir para o site</a></p>
            </div>
            <div class="iphone-image iphone1">
                <div class="inner-phone"> 

                <img class="iphone1-img" src="<?php echo $imgSite1['url']; ?>" alt=""> 
                <img class="iphone-stick" src="<?php echo $imgSite3['url']; ?>" alt=""> 
                <img class="iphone1-img-behind" src="<?php echo $imgSite4['url']; ?>" alt=""> </div>
            </div>
            <div class="iphone-image iphone2">
                <div class="inner-phone"> 
                <img class="iphone2-img" src="<?php echo $imgSite2['url']; ?>" alt=""> 
                <img class="iphone2-img-behind" src="<?php echo $imgSite5['url']; ?>" alt=""> 
                </div>
            </div>
            <div class="iphone2-text text-left">
                <p>Site do Mood Mooca</p>
                <p><a href="#" style="color: white;">ir para o site</a></p>
                
            </div>
        </div>
    </div>
</section>
				
<!-- partial:index.partial.html -->
<section class="mockup-sec" >
<div class="container cont-moc" id="reveal11">
  <h2 class="titulo-h2" >arraste para baixo e veja o site no desktop...</h2>

  <div class="mockup" >
    <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/not.png">
    <div class="artwork">
      <img src="<?php echo  $imgLayout['url'];  ?>">
    </div>
  </div>
</div>    
</section>
<!-- partial -->




<script>
	const controller = new ScrollMagic.Controller();
const tlFirstScroll = new TimelineMax();
const tlSecondScroll = new TimelineMax();

//First scroll scene
tlFirstScroll
.set('.iphone-image-wrapper', {scale: 4, transformOrigin: 'center top'})
.to('.iphone-image-wrapper', 3, {
    scale: 2.2,
    y: '-50%'
})
.to('.iphone-image-wrapper', 3, {
    scale: 1,
    y: '0%'
})

//Second scroll scene
tlSecondScroll
.to('.iphone1', 3, {x: '-50%'})
.to('.iphone2', 3, {x: '50%'}, '-=3')
.from('.iphone1-text', 0.3, {autoAlpha: 0}, '-=3')
.from('.iphone2-text', 0.3, {autoAlpha: 0}, '-=3')
.to('.iphone1-text', 3, {x: '-30%'}, '-=3')
.to('.iphone2-text', 3, {x: '30%'}, '-=3')

.set('.iphone-stick', {display: 'block'})
.to('.iphone1-img-behind', 3, {x: '-50%'})
.to('.iphone2-img-behind', 3, {x: '50%'}, '-=3')
.to('.iphone1-img', 0.3, {autoAlpha: 0}, '-=3')
.to('.iphone2-img', 0.3, {autoAlpha: 0}, '-=3')
.to('.iphone1-text', 1, {autoAlpha: 0}, '-=3')
.to('.iphone2-text', 1, {autoAlpha: 0}, '-=3')



//Scene 1
const sceneOne = new ScrollMagic.Scene({
    triggerElement: '.trigger1',
    triggerHook: 0,
    duration: '100%'
})
.setTween(tlFirstScroll)
.addTo(controller)


const sceneTwo = new ScrollMagic.Scene({
    triggerElement: '.trigger2',
    triggerHook: 0,
    duration: '100%'
})
.setTween(tlSecondScroll)
.setPin('.trigger2')
.addTo(controller)





        // build scene
 new ScrollMagic.Scene({
    triggerElement: ".cont-moc",
    triggerHook: 0.9, // show, when scrolled 10% into view
    duration: "80%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50 // move trigger to center of element
})
.setClassToggle("#reveal11", "visible") // add class to reveal

.addIndicators() // add indicators (requires plugin)
.addTo(controller);


        // build scene
 new ScrollMagic.Scene({
    triggerElement: ".sect-sobre",
    triggerHook: 0.9, // show, when scrolled 10% into view
    duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50 // move trigger to center of element
})
.setClassToggle("#reveal2", "visible") // add class to reveal

.addIndicators() // add indicators (requires plugin)
.addTo(controller);


        // build scene
 new ScrollMagic.Scene({
    triggerElement: ".sect-sobre2",
    triggerHook: 0.9, // show, when scrolled 10% into view
    duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50 // move trigger to center of element
})
.setClassToggle("#reveal3", "visible") // add class to reveal

.addIndicators() // add indicators (requires plugin)
.addTo(controller);


        // build scene
 new ScrollMagic.Scene({
    triggerElement: ".tecnologias",
    triggerHook: 0.9, // show, when scrolled 10% into view
    duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50 // move trigger to center of element
})
.setClassToggle("#reveal4", "visible") // add class to reveal

.addIndicators() // add indicators (requires plugin)
.addTo(controller);



// banner

function init() {
  const slider = document.querySelector(".slider");
  const nextBtn = slider.querySelector(".slider .nav .next");
  const prevBtn = slider.querySelector(".slider .nav .prev");
  const items = slider.querySelectorAll(".slider .item");

  let current = 0;

  items.forEach((item) => {
    const textWrapper = item.querySelector(".wrap");
    textWrapper.innerHTML = textWrapper.textContent.replace(
      /\S/g,
      "<span class='letter'>$&</span>"
    );

  });


  function anim(current, next, callback) {
    const currentImgs = current.querySelectorAll(".img");
    const currentText = current.querySelectorAll(".content .letter");
    const nextImgs = next.querySelectorAll(".img");
    const nextText = next.querySelectorAll(".content .letter");

    const t = 400;
    const offset = "-=" + t*.4;
    const imgOffset = t*.8;

    const tl = anime.timeline({
      easing: "easeInOutQuint",
      duration: t,
      complete: callback
    });

    // Add children
    tl.add({
      targets: currentText,
      translateY: [0, '-.75em'],
      /*clipPath: ['polygon(0 0, 100% 0, 100% 100%, 0% 100%)', 'polygon(0 100%, 100% 100%, 100% 100%, 0% 100%)'],*/
      opacity: [1, 0],
      easing: "easeInQuint",
      duration: t,
      delay: (el, i) => 10 * (i + 1)
    })
      .add(
        {
          targets: currentImgs[0],
          translateY: -600,
          translateZ: 0,
          rotate: [0, '-15deg'],
          opacity: [1, 0],
          easing: "easeInCubic"
        },
        offset
      )
      .add(
        {
          targets: currentImgs[1],
          translateY: -600,
          translateZ: 0,
          rotate: [0, '15deg'],
          opacity: [1, 0],
          easing: "easeInCubic"
        },
        "-=" + imgOffset
      )
      .add(
        {
          targets: currentImgs[2],
          translateY: -600,
          translateZ: 0,
          rotate: [0, '-15deg'],
          opacity: [1, 0],
          easing: "easeInCubic"
        },
        "-=" + imgOffset
      )
      .add(
        {
          targets: currentImgs[3],
          translateY: -600,
          translateZ: 0,
          rotate: [0, '15deg'],
          opacity: [1, 0],
          easing: "easeInCubic"
        },
        "-=" + imgOffset
      )
      .add({
        targets: current,
        opacity: 0,
        visibility: 'hidden',
        duration: 10,
        easing: "easeInCubic"
      })
      .add(
        {
          targets: next,
          opacity: 1,
           visibility: 'visible',
          duration: 10
        },
        offset
      )
      .add(
        {
          targets: nextImgs[0],
          translateY: [600, 0],
          translateZ: 0,
          rotate: ['15deg', 0],
          opacity: [0, 1],
          easing: "easeOutCubic"
        },
        offset
      )
      .add(
        {
          targets: nextImgs[1],
          translateY: [600, 0],
          translateZ: 0,
          rotate: ['-15deg', 0],
          opacity: [0, 1],
          easing: "easeOutCubic"
        },
        "-=" + imgOffset
      )
      .add(
        {
          targets: nextImgs[2],
          translateY: [600, 0],
          translateZ: 0,
          rotate: ['15deg', 0],
          opacity: [0, 1],
          easing: "easeOutCubic"
        },
        "-=" + imgOffset
      )
      .add(
        {
          targets: nextImgs[3],
          translateY: [600, 0],
          translateZ: 0,
          rotate: ['-15deg', 0],
          opacity: [0, 1],
          easing: "easeOutCubic"
        },
        "-=" + imgOffset
      )
      .add(
        {
          targets: nextText,
          translateY: ['.75em', 0],
          translateZ: 0,
          /*clipPath: ['polygon(0 0, 100% 0, 100% 0, 0 0)','polygon(0 0, 100% 0, 100% 100%, 0% 100%)'],*/
          opacity: [0, 1],
          easing: "easeOutQuint",
          duration: t*1.5,
          delay: (el, i) => 10 * (i + 1)
        },
        offset
      );
  }

  let isPlaying = false;

  function updateSlider(newIndex) {
    const currentItem = items[current];
    const newItem = items[newIndex];

    function callback() {
      currentItem.classList.remove("is-active");
      newItem.classList.add("is-active");
      current = newIndex;
      isPlaying = false;
    }

    anim(currentItem, newItem, callback);
  }

  function next() {
    if (isPlaying) return;
    isPlaying = true;
    const newIndex = current === items.length - 1 ? 0 : current + 1;
    updateSlider(newIndex);
  }

  function prev() {
    if (isPlaying) return;
    isPlaying = true;
    const newIndex = current === 0 ? items.length - 1 : current - 1;
    updateSlider(newIndex);
  }

  nextBtn.onclick = next;
  prevBtn.onclick = prev;
}

document.addEventListener("DOMContentLoaded", init);


// fim banner



</script>

<?php get_footer(); ?>