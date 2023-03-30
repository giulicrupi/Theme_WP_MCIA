<?php get_header(); ?>
<style>
	.cronograma{
		height: 100vh;
		background-size: cover;
		background-position: center;
		overflow: hidden;
		position: relative;
		
	}
	.overlay{
	    height: 100%;
	    background: linear-gradient(45deg, #00000061, #00000021);		
	}
	.topico{
position: absolute;
    top: 39%;
    left: 33.2%;
    background: linear-gradient(0deg,#000000, #353535, #121212);
    width: 33.4%;
    height: 22vh;
    display: flex;
    color: white;
    justify-content: center;
    align-items: center;
    padding: 0 1%;
    z-index: 13;
  /*  border-radius: 20px;*/
    box-shadow: 0px 0px 50px #ffffffc9; 
	}
	.topico .cronometro{
		width: 100%;
		position: relative;
	}
	.cronometro hr{
    position: absolute;
    top: 26%;
    width: 95.4%;
    left: 2%;
    border: 1px solid #444444b8;		
	}
	.flex{
		display: none!important;
	}
	.linha{
	    display: flex;
	    justify-content: center;
	    align-items: center;		
	}
	.linha .column{
		width: 25%;
	}
	.maior {
margin: 8%;
    background: white;
    color: black;
    padding: 5% 0%;
    border-radius: 0px;
    font-size: 40px;
	    font-size: 40px;
	}	
	.menor{
	    color: #ffffff;
	    text-transform: uppercase;
	    font-size: 12px;
	    letter-spacing: 1px;		
	}
	nav{
		display: none!important;
	}
	.superman{
	    position: absolute;
	    width: 10%;
	    left: -30%;	
	    animation:   rightt 18s infinite ease-in-out;	
		    transform: rotatey(360deg);
	    transition: .5s;
	    z-index: 12;
	    filter: drop-shadow(22px 200px 21px #000000c9);
	}
	@keyframes rightt{
		0%{
			 left: -30%;	
			 top: 0%;
		}
		20%{
			 left: 140%;	
			 top: 80%;
		}

		30%{
			left: -30%;
			top: 10%;
		    transform: rotatey(180deg);	
		    width: 30%;
		    z-index: 15;
		    filter: drop-shadow(0px 0px 0px #000000c9);
		}

	}

.pyro > .before, .pyro > .after {
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  box-shadow: 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff;
  -moz-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -webkit-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -o-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -ms-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
}

.pyro > .after {
  -moz-animation-delay: 1.25s, 1.25s, 1.25s;
  -webkit-animation-delay: 1.25s, 1.25s, 1.25s;
  -o-animation-delay: 1.25s, 1.25s, 1.25s;
  -ms-animation-delay: 1.25s, 1.25s, 1.25s;
  animation-delay: 1.25s, 1.25s, 1.25s;
  -moz-animation-duration: 1.25s, 1.25s, 6.25s;
  -webkit-animation-duration: 1.25s, 1.25s, 6.25s;
  -o-animation-duration: 1.25s, 1.25s, 6.25s;
  -ms-animation-duration: 1.25s, 1.25s, 6.25s;
  animation-duration: 1.25s, 1.25s, 6.25s;
}

@-webkit-keyframes bang {
  to {
    box-shadow: -25px -148.6666666667px fuchsia, 95px -326.6666666667px #00fffb, 188px -6.6666666667px #ff1a00, -230px -8.6666666667px #00aaff, -16px -100.6666666667px #dd00ff, -171px -80.6666666667px #00eaff, -88px -391.6666666667px #00ff3c, 91px -350.6666666667px #00ff48, 176px -386.6666666667px #ddff00, 155px -157.6666666667px #0022ff, 145px -52.6666666667px #7bff00, -34px -22.6666666667px #0091ff, -114px -156.6666666667px #00ff9d, 153px -294.6666666667px #ff0088, 218px -145.6666666667px #2bff00, -247px -27.6666666667px #ff8000, 36px 0.3333333333px #00ff51, -90px -408.6666666667px #ffd500, 192px -284.6666666667px #00eeff, 47px -134.6666666667px #ff009d, 187px -378.6666666667px #ff0044, 200px 45.3333333333px #ff7b00, 179px -186.6666666667px #d000ff, -45px -53.6666666667px #e1ff00, 135px -213.6666666667px #00eaff, 12px -209.6666666667px #ff0040, -85px -295.6666666667px #e6ff00, 240px -28.6666666667px #eeff00, 36px -413.6666666667px #ff0015, -235px -307.6666666667px #1eff00, -70px -191.6666666667px #0088ff, -86px -265.6666666667px #00ff1a, -178px -104.6666666667px #73ff00, 195px -169.6666666667px #00d5ff, 78px -331.6666666667px #ff9d00, -66px 5.3333333333px darkorange, 232px -208.6666666667px #0059ff, -237px 73.3333333333px #00ffae, 152px -30.6666666667px #ff1a00, -144px -53.6666666667px #00ff6a, -145px -369.6666666667px #00ff5e, 242px -398.6666666667px #ffc400, 200px -154.6666666667px #ffdd00, 35px -397.6666666667px #0066ff, 75px -279.6666666667px #00ddff, -6px -80.6666666667px #3cff00, -30px -253.6666666667px #91ff00, 198px 7.3333333333px #f700ff, -122px 24.3333333333px #ff00cc, -132px -256.6666666667px #8c00ff, -146px -266.6666666667px #00c8ff;
  }
}
@-moz-keyframes bang {
  to {
    box-shadow: -25px -148.6666666667px fuchsia, 95px -326.6666666667px #00fffb, 188px -6.6666666667px #ff1a00, -230px -8.6666666667px #00aaff, -16px -100.6666666667px #dd00ff, -171px -80.6666666667px #00eaff, -88px -391.6666666667px #00ff3c, 91px -350.6666666667px #00ff48, 176px -386.6666666667px #ddff00, 155px -157.6666666667px #0022ff, 145px -52.6666666667px #7bff00, -34px -22.6666666667px #0091ff, -114px -156.6666666667px #00ff9d, 153px -294.6666666667px #ff0088, 218px -145.6666666667px #2bff00, -247px -27.6666666667px #ff8000, 36px 0.3333333333px #00ff51, -90px -408.6666666667px #ffd500, 192px -284.6666666667px #00eeff, 47px -134.6666666667px #ff009d, 187px -378.6666666667px #ff0044, 200px 45.3333333333px #ff7b00, 179px -186.6666666667px #d000ff, -45px -53.6666666667px #e1ff00, 135px -213.6666666667px #00eaff, 12px -209.6666666667px #ff0040, -85px -295.6666666667px #e6ff00, 240px -28.6666666667px #eeff00, 36px -413.6666666667px #ff0015, -235px -307.6666666667px #1eff00, -70px -191.6666666667px #0088ff, -86px -265.6666666667px #00ff1a, -178px -104.6666666667px #73ff00, 195px -169.6666666667px #00d5ff, 78px -331.6666666667px #ff9d00, -66px 5.3333333333px darkorange, 232px -208.6666666667px #0059ff, -237px 73.3333333333px #00ffae, 152px -30.6666666667px #ff1a00, -144px -53.6666666667px #00ff6a, -145px -369.6666666667px #00ff5e, 242px -398.6666666667px #ffc400, 200px -154.6666666667px #ffdd00, 35px -397.6666666667px #0066ff, 75px -279.6666666667px #00ddff, -6px -80.6666666667px #3cff00, -30px -253.6666666667px #91ff00, 198px 7.3333333333px #f700ff, -122px 24.3333333333px #ff00cc, -132px -256.6666666667px #8c00ff, -146px -266.6666666667px #00c8ff;
  }
}
@-o-keyframes bang {
  to {
    box-shadow: -25px -148.6666666667px fuchsia, 95px -326.6666666667px #00fffb, 188px -6.6666666667px #ff1a00, -230px -8.6666666667px #00aaff, -16px -100.6666666667px #dd00ff, -171px -80.6666666667px #00eaff, -88px -391.6666666667px #00ff3c, 91px -350.6666666667px #00ff48, 176px -386.6666666667px #ddff00, 155px -157.6666666667px #0022ff, 145px -52.6666666667px #7bff00, -34px -22.6666666667px #0091ff, -114px -156.6666666667px #00ff9d, 153px -294.6666666667px #ff0088, 218px -145.6666666667px #2bff00, -247px -27.6666666667px #ff8000, 36px 0.3333333333px #00ff51, -90px -408.6666666667px #ffd500, 192px -284.6666666667px #00eeff, 47px -134.6666666667px #ff009d, 187px -378.6666666667px #ff0044, 200px 45.3333333333px #ff7b00, 179px -186.6666666667px #d000ff, -45px -53.6666666667px #e1ff00, 135px -213.6666666667px #00eaff, 12px -209.6666666667px #ff0040, -85px -295.6666666667px #e6ff00, 240px -28.6666666667px #eeff00, 36px -413.6666666667px #ff0015, -235px -307.6666666667px #1eff00, -70px -191.6666666667px #0088ff, -86px -265.6666666667px #00ff1a, -178px -104.6666666667px #73ff00, 195px -169.6666666667px #00d5ff, 78px -331.6666666667px #ff9d00, -66px 5.3333333333px darkorange, 232px -208.6666666667px #0059ff, -237px 73.3333333333px #00ffae, 152px -30.6666666667px #ff1a00, -144px -53.6666666667px #00ff6a, -145px -369.6666666667px #00ff5e, 242px -398.6666666667px #ffc400, 200px -154.6666666667px #ffdd00, 35px -397.6666666667px #0066ff, 75px -279.6666666667px #00ddff, -6px -80.6666666667px #3cff00, -30px -253.6666666667px #91ff00, 198px 7.3333333333px #f700ff, -122px 24.3333333333px #ff00cc, -132px -256.6666666667px #8c00ff, -146px -266.6666666667px #00c8ff;
  }
}
@-ms-keyframes bang {
  to {
    box-shadow: -25px -148.6666666667px fuchsia, 95px -326.6666666667px #00fffb, 188px -6.6666666667px #ff1a00, -230px -8.6666666667px #00aaff, -16px -100.6666666667px #dd00ff, -171px -80.6666666667px #00eaff, -88px -391.6666666667px #00ff3c, 91px -350.6666666667px #00ff48, 176px -386.6666666667px #ddff00, 155px -157.6666666667px #0022ff, 145px -52.6666666667px #7bff00, -34px -22.6666666667px #0091ff, -114px -156.6666666667px #00ff9d, 153px -294.6666666667px #ff0088, 218px -145.6666666667px #2bff00, -247px -27.6666666667px #ff8000, 36px 0.3333333333px #00ff51, -90px -408.6666666667px #ffd500, 192px -284.6666666667px #00eeff, 47px -134.6666666667px #ff009d, 187px -378.6666666667px #ff0044, 200px 45.3333333333px #ff7b00, 179px -186.6666666667px #d000ff, -45px -53.6666666667px #e1ff00, 135px -213.6666666667px #00eaff, 12px -209.6666666667px #ff0040, -85px -295.6666666667px #e6ff00, 240px -28.6666666667px #eeff00, 36px -413.6666666667px #ff0015, -235px -307.6666666667px #1eff00, -70px -191.6666666667px #0088ff, -86px -265.6666666667px #00ff1a, -178px -104.6666666667px #73ff00, 195px -169.6666666667px #00d5ff, 78px -331.6666666667px #ff9d00, -66px 5.3333333333px darkorange, 232px -208.6666666667px #0059ff, -237px 73.3333333333px #00ffae, 152px -30.6666666667px #ff1a00, -144px -53.6666666667px #00ff6a, -145px -369.6666666667px #00ff5e, 242px -398.6666666667px #ffc400, 200px -154.6666666667px #ffdd00, 35px -397.6666666667px #0066ff, 75px -279.6666666667px #00ddff, -6px -80.6666666667px #3cff00, -30px -253.6666666667px #91ff00, 198px 7.3333333333px #f700ff, -122px 24.3333333333px #ff00cc, -132px -256.6666666667px #8c00ff, -146px -266.6666666667px #00c8ff;
  }
}
@keyframes bang {
  to {
    box-shadow: -25px -148.6666666667px fuchsia, 95px -326.6666666667px #00fffb, 188px -6.6666666667px #ff1a00, -230px -8.6666666667px #00aaff, -16px -100.6666666667px #dd00ff, -171px -80.6666666667px #00eaff, -88px -391.6666666667px #00ff3c, 91px -350.6666666667px #00ff48, 176px -386.6666666667px #ddff00, 155px -157.6666666667px #0022ff, 145px -52.6666666667px #7bff00, -34px -22.6666666667px #0091ff, -114px -156.6666666667px #00ff9d, 153px -294.6666666667px #ff0088, 218px -145.6666666667px #2bff00, -247px -27.6666666667px #ff8000, 36px 0.3333333333px #00ff51, -90px -408.6666666667px #ffd500, 192px -284.6666666667px #00eeff, 47px -134.6666666667px #ff009d, 187px -378.6666666667px #ff0044, 200px 45.3333333333px #ff7b00, 179px -186.6666666667px #d000ff, -45px -53.6666666667px #e1ff00, 135px -213.6666666667px #00eaff, 12px -209.6666666667px #ff0040, -85px -295.6666666667px #e6ff00, 240px -28.6666666667px #eeff00, 36px -413.6666666667px #ff0015, -235px -307.6666666667px #1eff00, -70px -191.6666666667px #0088ff, -86px -265.6666666667px #00ff1a, -178px -104.6666666667px #73ff00, 195px -169.6666666667px #00d5ff, 78px -331.6666666667px #ff9d00, -66px 5.3333333333px darkorange, 232px -208.6666666667px #0059ff, -237px 73.3333333333px #00ffae, 152px -30.6666666667px #ff1a00, -144px -53.6666666667px #00ff6a, -145px -369.6666666667px #00ff5e, 242px -398.6666666667px #ffc400, 200px -154.6666666667px #ffdd00, 35px -397.6666666667px #0066ff, 75px -279.6666666667px #00ddff, -6px -80.6666666667px #3cff00, -30px -253.6666666667px #91ff00, 198px 7.3333333333px #f700ff, -122px 24.3333333333px #ff00cc, -132px -256.6666666667px #8c00ff, -146px -266.6666666667px #00c8ff;
  }
}
@-webkit-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0;
  }
}
@-moz-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0;
  }
}
@-o-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0;
  }
}
@-ms-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0;
  }
}
@keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0;
  }
}
@-webkit-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%;
  }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%;
  }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%;
  }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%;
  }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%;
  }
}
@-moz-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%;
  }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%;
  }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%;
  }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%;
  }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%;
  }
}
@-o-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%;
  }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%;
  }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%;
  }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%;
  }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%;
  }
}
@-ms-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%;
  }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%;
  }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%;
  }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%;
  }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%;
  }
}
@keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%;
  }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%;
  }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%;
  }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%;
  }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%;
  }
}	
.pyro{
	transition: 0.5s;
	animation: 30s aparece infinite;
	opacity: 0;
}
@keyframes aparece{
	0%{
		opacity: 0;
	}
	30%{
		opacity: 1;
	}
	40%{
		opacity: 0;
	}
}
</style>
<!-- partial:index.partial.html -->
<div class="pyro" style="    position: relative;
    z-index: 1050;">
  <div class="before"></div>
  <div class="after"></div>
</div>
<!-- partial -->
	<section class="cronograma" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/12/contador.jpg);">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/12/superman.png" alt="" class="img-fluid superman">
		<div class="overlay">
			<div class="container">
				<div class="topico">
						<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" charset="utf-8"></script>
						
						
						<div class="cronometro" >
							<hr>
							<div class="linha text-center" data-countdown="2022/12/15 19:00:00">
								
							</div>
	<!-- 						<div class="row text-center">
								<div class="col-lg-3">Dias</div>
								<div class="col-lg-3">Horas</div>
								<div class="col-lg-3">Minutos</div>
								<div class="col-lg-3">Segundos</div>
							</div> -->
							 				
						</div>		
						<script>
						  $('[data-countdown]').each(function() {
						    var $this = $(this), finalDate = $(this).data('countdown');
						    $this.countdown(finalDate, function(event) {
						      $this.html(event.strftime('<div class="column"><div class="maior">%D</div><p class="menor">dias</p></div> <div class="column"><div class="maior">%H</div><p class="menor">Horas</p></div> <div class="column"><div class="maior">%M</div><p class="menor">Minutos</p></div> <div class="column"><div class="maior">%S</div><p class="menor">Segundos</p></div>'));
						    });
						  });
						</script>					
				</div>			
			</div>			
		</div>
	</section>
<?php get_footer(); ?>