<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laravel</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery-1.6.3.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-5.3.0-packed.js"></script>
<script type="text/javascript" language="javascript">
	$(function() {

		//	Scrolled by user interaction
		$('#foo2').carouFredSel({
			prev: '#prev2',
			next: '#next2',
			pagination: "#pager2",
			auto: false
		});
		
		$('#foo3').carouFredSel({
			prev: '#test_prev',
			next: '#test_next',
			auto: false
		});
		
                
                $('form img').each(function(n,e) {
                    $(e).click(function() {
                        console.log($(this).siblings('input').prop('checked', true));
                        $('form').submit();
                    });
                });
	});
</script>


</head>
<body>
<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	<div id="site_title">
        	<a href="index.html"><img src="images/laravel-logo-white.png" alt="Logo" /><span>Test Progect</span></a> 
        </div>
    </div> <!-- END of header -->
    <div id="tooplate_middle"><span class="middle_bottom_frame"></span>
        <div id="tooplate_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html" class="selected"><span></span>Home</a></li>
            </ul>
            <div class="clear"></div>
        </div> <!-- end of tooplate_menu -->

        
        <div class="list_carousel">
            <form method="POST" action="/">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <ul id="foo2">
                @foreach ($countries as $country)
                    <li><input type="radio" name="country" value="{{ $country['id'] }}"><img src="{{ $pathToFlags }}{{ $country['iso'] }}.png" alt="{{ $country['name'] }}" /></li>
                @endforeach
            </ul>
            </form>
            <a id="prev2" class="slider_nav_button prev" href="#">&lt;</a>
            <a id="next2" class="slider_nav_button next" href="#">&gt;</a>
        </div>
      
        
        <div class="clear"></div>
		
	</div> <!-- END of middle -->
    
    <div id="tooplate_main"><span class="main_frame main_top_frame"></span><span class="main_frame main_bottom_frame"></span>
<p><span>Number: </span><span>{{ $number }}</span></p>
	</div>
        
        
	<div class="content_wrapper"> 
        
        <div class="col_2 no_margin_right"> 
        </div>	
    </div>
    	
        <div class="clear"></div>
    </div>

<!-- END of tooplate_footer -->
</div> <!-- END of tooplate_wrapper -->
</body>
</html>