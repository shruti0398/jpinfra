<?php include 'header.php';?> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">

<style>
/**********************
slick slider
***********************/


.slick-dots {
    text-align: center;
    margin: 0 0 10px 0;
    padding: 15px;
}
.slick-dots li {
  display: inline-block;
  margin-left: 4px;
  margin-right: 4px;
}
.slick-dots li.slick-active button {
	border: 1px solid #1b405b !important;
}
.slick-dots li button {
  font: 0/0 a;
  text-shadow: none;
  color: transparent;
  background-color: #486b99;
  border: none;
  width: 6px;
  height: 12px;
  border-radius: 50%;
}
/* Custom Arrow */
.prev-button-home {
    color: #999;
    position: absolute;
    top: 40%;
    left: -25px;
    font-size: 1.5em;
    background-image: url(images/arrow_2.png);
    width: 27px;
    height: 18px;
    border: none;
    background-color: transparent;
    outline: none !important;
}
.prev-button-home :hover {
  cursor: pointer;
  color: black;
}
.next-button-home {
    color: #999;
    position: absolute;
    top: 40%;
    font-size: 1.5em;
    background-image: url(images/arrow_1.png);
    right: -25px;
    width: 28px;
    height: 18px;
    border: none;
    background-color: transparent;
    outline: none !important;
}
.next-button-home :hover {
  cursor: pointer;
  color: black;
}



/*******************************
home boundries
*******************************/
img{
    width: 100%;
}
.home-boundries {
    width: 100%;
    background-color: #00000021;
    padding: 80px 0 0 0;
}
.home-boundries-img {
    width: 50%;
    float: left;
    padding-left: 93px;
}
.home-boundries-txt {
    width: 50%;
    float: left;
    padding-left: 20px;
}
.boundries-liveHead2.aos-init.aos-animate h5 {
    text-align: left;
    margin: 10px auto;
    width: 100%;
    margin-bottom: 20px;
    margin-top: 20px;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 400;
}
.boundries-liveHead2.aos-init.aos-animate p {
    text-align: left;
    width: 60%;
    margin-bottom: 20px;
    margin-top: 20px;
    text-transform: initial;
    font-size: 15px;
}
.line-homepage{
    text-align: left;
    width: 15%;
}
.boundaries-h1 h1{
    text-align:left;
    text-transform: capitalize;
    font-weight: 800;
    color: #2E5689;
    font-size:38px;
    width: 60%;
}
img.arrow_button_css{
    width: 3.5%;
    padding: 0;
    margin-top: .4rem;
    margin-left: .5rem;
    float: left;
    transform-origin: left;
    transition: transform .5s ease;
    vertical-align: middle;
    display: inline-block;
}

/*******************************
glimpse jp start
*******************************/
.glimpse-main {
    background-color: #2e568945;
    width: 100%;
    padding: 60px 0;
}
.glimpse-col{
    width:33.33%;
    float: left;
}
.glimpse-col-inner {
    width: 100%;
    padding: 10px;
}
.glimpse-col-inner img{
    width: 100%;
}
.glimpse-col-middle {
    width: 100%;
    padding: 10px 10px;
}
.glimpse-col-middle img{
    width:100%;
    height: 98.5vh;
}
.lable_line {
    text-align: center;
    width: 8%;
    margin: 0 auto;
}
.glimpse-head.aos-init.aos-animate p {
    text-align: center;
    width: 100%;
    margin: 20px 0;
    font-size: 20px;
}
.glimpse-h1 h1 {
    text-align: center;
    font-size: 34px;
    font-weight: 800;
    color: #2E5689;
    padding: 0;
    margin: 0px 0px 40px 0px;
    text-transform: capitalize;
}
.glimpse-slider{
    width:80%;
    margin: 0 auto;
}
/*******************************
media query start
*******************************/
@media only screen and (max-width:768px) {
    .home-boundries-img {
        width: 100%;
        float: none;
        padding: 10px;
    }
    .home-boundries-txt {
        width: 100%;
        float: none;
        padding-left: 20px;
        padding-top: 0px;
    }
    .boundries-liveHead2.aos-init.aos-animate p {
        text-align: left;
        width: 100%;
        margin-bottom: 20px;
        margin-top: 20px;
        text-transform: initial;
        font-size: 12px;
    }
    .boundaries-h1 h1 {
        text-align: left;
        text-transform: capitalize;
        font-weight: 800;
        color: #2E5689;
        font-size: 28px;
        width: 100%;
    }
    img.arrow_button_css {
        width: 6.5%;
    }
    .glimpse-main {
        background-color: #2e568945;
        width: 100%;
        padding: 30px 0;
    }
    .glimpse-col-middle img {
        width: 100%;
        height: auto;
    }
    .glimpse-h1 h1 {
        text-align: center;
        font-size: 28px;
        font-weight: 800;
        color: #2E5689;
        padding: 0px 0px 0px 0px;
        margin: 20px 0px;
        text-transform: capitalize;
    }
    .line-homepage {
        text-align: left;
        width: 33%;
    }
    .lable_line {
        text-align: center;
        padding-top: 0px;
        width: 27%;
    }
    .glimpse-head.aos-init.aos-animate p {
        text-align: center;
        margin: 10px auto;
        width: 80%;
        margin-bottom: 20px;
        margin-top: 20px;
        font-size: 20px;
    }

}
</style>

<!--pushing boundries start  --> 
<div class="home-boundries">
    <div class="home-boundries-img">
        <img src="images/Pushing-Boundries.png">
    </div>
    <div class="home-boundries-txt">
        <div class="line-homepage">
			<img src="img/Gray-Head-line.png" class="northimage">
		</div>
		<div class="boundries-liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
			<h5 class="left_para">building responsibly</h5>   
		</div>
		<div class="bg-3 text-center wow fadeIn boundaries-h1" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">    
			<h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">pushing boundaries</h1>
			<div class="boundries-liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
				<p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace</p>   
			</div>
        </div>
        <div class="btn_more">
			<p>KNOW MORE</p>
			<img src="img/arrow1.png" class="arrow_button_css" alt="arrow">
			<div class="clearfix"></div>
		</div>
        <div class="clearfix"></div>   
    </div>
    <div class="clearfix"></div>
</div>
<!-- pushing boundries end -->


<!-- glimpse jp desktop start -->
    <div class="glimpse-main desktop">
        <div class="lable_line">
            <img src="img/Gray-Head-line.png" class="northimage">
		</div>

        <div class="liveHead2 glimpse-head" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
			<p>At our visual best</p>   
		</div>

        <div class="glimpse-h1 container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">    
			<h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">a glimpse of jp infra</h1>
		</div>
        <!-- slider desktop start -->
        <div class="glimpse-slider desktop">
            <div class="glimpse-col">
                <div class="glimpse-col-inner">
                    <img src="images/Media-1.jpg">
                </div>
                <div class="glimpse-col-inner">
                    <img src="images/Media-2.jpg">
                </div>
                <div class="clearfix"></div> 
            </div>

            <div class="glimpse-col">
                <div class="glimpse-col-middle">
                    <img src="images/Media-Big.jpg">
                </div>    
            </div>

            <div class="glimpse-col">
                <div class="glimpse-col-inner">
                    <img src="images/Media-3.jpg">
                </div>
                <div class="glimpse-col-inner">
                    <img src="images/Media-4.jpg">
                </div>
                <div class="clearfix"></div> 
            </div>
            <div class="clearfix"></div> 
        </div>
        <!-- slider desktop end -->
        <div class="clearfix"></div> 
    </div>
    <!-- glimpse jp desktop ends -->


    <!-- glimpse jp mobile start -->
    <div class="glimpse-main mobile">
        <div class="lable_line">
            <img src="img/Gray-Head-line.png" class="northimage">
		</div>

        <div class="liveHead2 glimpse-head" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
			<p>At our visual best</p>   
		</div>

        <div class="glimpse-h1 container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">    
			<h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">a glimpse of jp infra</h1>
		</div>

        <!-- slider mobile start -->
        <div class="glimpse-slider responsivehomeproj">
            <div class="glimpse-col">
                <div class="glimpse-col-inner">
                    <img src="images/Media-1.jpg">
                </div>
            </div> 
            <div class="glimpse-col">
                <div class="glimpse-col-inner">
                    <img src="images/Media-2.jpg">
                </div>
            </div>

            <div class="glimpse-col">
                <div class="glimpse-col-inner">
                    <img src="images/Media-5.jpg">
                </div>    
            </div>

            <div class="glimpse-col">
                <div class="glimpse-col-inner">
                    <img src="images/Media-3.jpg">
                </div>
            </div>    
            <div class="glimpse-col">    
                <div class="glimpse-col-inner">
                    <img src="images/Media-4.jpg">
                </div>
            </div>
        </div>
        <!-- slider mobile ends -->
    </div>
    <!-- glimpse jp mobile end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
    <script>
	$('.responsivehomeproj').slick({
		dots: true,
		arrow: true,
		prevArrow:'<button type="button" class="prev-button-home"></button>',
        nextArrow:'<button type="button" class="next-button-home"></button>',
		infinite: false,
		autoplay: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				arrow: true,
				prevArrow:'<button type="button" class="prev-button-home"></button>',
        		nextArrow:'<button type="button" class="next-button-home"></button>',
				infinite: false,
				dots: true
			}
			},
			{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				arrow: true,
				prevArrow:'<button type="button" class="prev-button-home"></button>',
        		nextArrow:'<button type="button" class="next-button-home"></button>',
				slidesToScroll: 1
			}
			},
			{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				arrow: true,
				prevArrow:'<button type="button" class="prev-button-home"></button>',
       			nextArrow:'<button type="button" class="next-button-home"></button>',
				slidesToScroll: 1
			}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
		});
    </script>

    <div class="clearfix"></div>
<?php include 'footer.php';?>