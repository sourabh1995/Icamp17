<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<style type="text/css">
	

	.main-banner{height:700px; position:relative}
.main-banner a{display:block; position:absolute; z-index:100; background:url(images/background.jpg)}
.main-banner a:hover{ opacity:0.1; background:#fff}
.main-banner a.advertisement{width:150px; height:100px; left:192px; top:243px}
.main-banner a.menu{width:114px; height:35px; left:135px; top:119px}
.main-banner a.great-deals{width:57px; height:40px; left:62px; top:347px}
.main-banner a.contact-us{width:58px; height:33px; left:34px; top:412px}
.main-banner a.investers{width:74px; height:31px; left:167px; top:410px}
.main-banner a.locations{width:119px; height:44px; left:302px; top:421px}
.main-banner a.gift-vouchers{width:62px; height:55px; left:503px; top:421px}
.main-banner a.about-us{width:78px; height:26px; left:425px; top:377px}
.main-banner a.blog{width:47px; height:34px; left:646px; top:302px}

#thumbs{position:relative; width:100%; height:100%; background:url(images/background.jpg) no-repeat 50%;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;}
#thumbs div{position:absolute}
#thumbs div.advertising{left:18%; top:26%}
#thumbs div.menu{left:16%; top:17%}
#thumbs div.great-deals{left:58%; top:26%}
#thumbs div.contact{left:78%; top:32%}
#thumbs div.investor{left:59%; top:80%}
#thumbs div.location{left:74%; top:48%}
#thumbs div.about{left:36.5%; top:56%}
#thumbs div.voucher{left:22%; top:85%}
#thumbs div.blog{left:46.5%; top:39%}
#thumbs div:hover img{cursor:pointer}

    @media only screen and (min-width:2000px){
        /* for sumo sized (mac) screens */
    }
    
    @media only screen and (min-device-width: 200px) and (max-device-width: 1024px) and (orientation:portrait) {
      /* For portrait layouts only */
       #thumbs div.advertising{left:13%; top:26%}
    }
span.text-content {
  background: rgba(0,0,0,0.5);
  color: white;
  cursor: pointer;
  display: table;
  height: 0px;
  left: 0;
  position: absolute;
  top: 0;
  width: 0px;
  opacity: 0;
  -webkit-transition: opacity 500ms;
  -moz-transition: opacity 500ms;
  -o-transition: opacity 500ms;
  transition: opacity 500ms;
}

.advertising img{
	-moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.advertising:hover img{
	-moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.advertising:hover span.text-content {
  opacity: 1;
}
.great-deals img{
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.great-deals:hover img{
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.great-deals:hover span.text-content {
  opacity: 1;
}
.about img{
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.about:hover img{
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.about:hover span.text-content {
  opacity: 1;
}
.blog img{
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.blog:hover img{
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.blog:hover span.text-content {
  opacity: 1;
}
.contact img{
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.contact:hover img{
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.contact:hover span.text-content {
  opacity: 1;
}
.voucher img{
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.voucher:hover img{
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.voucher:hover span.text-content {
  opacity: 1;
}
.investor img{
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.investor:hover img{
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.investor:hover span.text-content {
  opacity: 1;
}
.location img{
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.location:hover img{
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.location:hover span.text-content {
  opacity: 1;
}
@-webkit-keyframes rotate-right {
  from {
    -webkit-transform: rotate(0deg);
    
    opacity: 1;
  }
  to {
    -webkit-transform: rotate(4deg);
    
    opacity: 0.1;
  }
}
#animate {
  -webkit-transform: translate3d(0, 0, 0);
  /*-webkit-transform-origin: 200px 200px;*/
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-animation: rotate-right 4s ease-in 0s infinite alternate;
}
@-webkit-keyframes rotate-hokka {
  from {
    
    -webkit-transform: rotate(0);
    opacity: 1;
  }
  to {
    
    -webkit-transform: rotate(30deg);
    opacity: 0.7;
  }
}
#hokka {
  -webkit-transform: translate3d(0, 0, 0);
  /*-webkit-transform-origin: 200px 200px;*/
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-animation: rotate-hokka 2s ease-in 0s infinite alternate;
}
</style>
<body>

<div class="main-banner">
        <div id="thumbs">
            <div  class="advertising"><img src="images/frame2.png" width="203" height="152" data-link="http://www.dominos.co.in/advertisement" alt="advertising"/>
            <span class="text-content"><span>Discussion</span></span></div>
            <!--<div class="advertising"><img src="http://www.dominos.co.in/theme/front/images/advertisement.png" width="108" height="119" data-link="http://www.dominos.co.in/advertisement"/></div>
            <div class="menu"><img src="http://www.dominos.co.in/theme/front/images/menu.png" onmouseover="this.src='http://www.dominos.co.in/theme/front/images/menu1.png'" onmouseout="this.src='http://www.dominos.co.in/theme/front/images/menu.png'" width="104" height="46" data-link="http://www.dominos.co.in/menu"  alt="menu" /></div>-->
            <!--<div class="menu"><img src="http://www.dominos.co.in/theme/front/images/menu.png" width="104" height="46" data-link="http://www.dominos.co.in/menu"   /></div>-->
            <div  class="great-deals"><img src="images/frame.png" width="203" height="152" data-link="http://www.dominos.co.in/great-deals" alt="great deals"/>
            <span class="text-content"><span>Survey</span></span></div>
            <div id="hokka" class="about"><img src="images/hokka.png" width="85" height="125" data-link="http://www.dominos.co.in/about-us" alt="about us"/>
              <span class="text-content"><span>Polls</span></span>
            </div>
            <div id="animate" class="blog"><img src="images/mac.png" width="145" height="135" data-link="http://dominos.co.in/blog/" alt="blog"  />
            <span class="text-content"><span>Hot Or Not</span></span>
            </div>
            <div id="animate" class="contact"><img src="images/tv.png" width="210" height="210" data-link="http://www.dominos.co.in/feedback" alt="contact" />
            <span class="text-content"><span>Blogs</span></span>
            </div>
            <div id="animate" class="voucher"><img src="images/disk.png" width="156" height="73" data-link="http://www.dominos.co.in/great-deals/gift-vouchers"  alt="voucher" />
            <span class="text-content"><span>Points</span></span>
            </div>
            <!--<div class="online-ordering"><img src="images/map.png" alt="Online order"  width="105" height="100" data-link="http://pizzaonline.dominos.co.in/?src=brand"/></div>-->
            <div id="animate" class="investor"><img src="images/map.png" width="184" height="47" data-link="http://www.jubilantfoodworks.com/investors" alt="investor"/>
            <span class="text-content"><span>Graphs</span></span>
            </div>
            <div id="animate" class="location"><img id="dom_locator" src="images/xbox.png" width="60" height="85" data-link="http://pizza-restaurants.dominos.co.in" alt="pizza-restaurents"  />
            <span class="text-content"><span>Logout</span></span>
            </div>
        </div>
    </div>
</body>
</html>