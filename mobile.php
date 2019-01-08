		<?php 
			$thispage = 'mbPage';
			include("header.php");
		?>
		<style type="text/css">
/*			#mobile_content_area{
				max-width:400px;
				min-height:300px;
				position:relative;
				overflow:hidden;
				width:100%;
				height:auto;
				margin:0 auto;
			}
			#far_back{
				background-image:url('/assets/images/pinkCirc-120px.png');
				background-repeat:no-repeat;
				width:120px;
				height:120px;
				position:absolute;
				left:0;
				right:0;
				margin:0 auto;
				top:92px;
				z-index:5;			 
			}
			#mid_back{
				background-image:url(/assets/images/yelStar-76px.png);
				background-repeat:no-repeat;
				background-position:164px 0px;
				width:100%;
				height:100%;
				position:absolute;
				left:0;
				right:0;
				margin:0 auto;
				top:115px;
				z-index:10;
			}*/
			#mobile_content_area{
				background-image:url(/assets/images/stars-bg.jpg);
				background-repeat:no-repeat;
				overflow:hidden;
				background-size:cover;
				position:relative;
				width:100%;
				height:100%;
				max-height:700px;
				margin:0 auto;
			}
			#vr_people{
				display:block;
				position:absolute;
				width:100%;
				height:auto;
				max-width:780px;
				margin:0 auto;
				left:0;
				right:0;
				bottom:0; 
			}
			@media (max-width: 500px){
				#mobile_content_area{
					max-height:400px;
				}
			}
			@media (orientation: portrait){
				#mobile_content_area{
					max-height:400px;
				}
			}
			@media (orientation: landscape){
				#vr_people{
					width:80%;
				}
			}
		</style>
			<div id="main_content" class="homepage">
				<div id="maincontain">
					<div id="home_main_content">
						<div class="wrapper" id="mobile_content_area">
							<img src="/assets/images/vr-people.png" id="vr_people" alt="Illustrations of users with VR headsets">
							<!-- <div id="far_back"></div> -->
							<!-- <div id="mid_back"></div> -->
							<!-- <div id="close_back"></div> -->
						</div>
					</div>
				</div>
			</div>
		<?php 
			include("footer.php");
		?>