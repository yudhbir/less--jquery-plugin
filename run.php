<html>
<title>LESS DEVELOPMENT</title>
<head>
<script src="jquery-1.12.4.min.js"></script>
</head>
<body>
<div class="directional_Slider">
	<ul id="slider">
		<li class="active"><a href="index.html">index</a></li>
		<li><a href="index1.html">index1</a></li>
		<li><a href="index2.html">index2</a></li>
		<li><a href="index3.html">index3</a></li>
	</ul>
	<div class="left"><a href="javascript:void(0);"><<</a></div>
	<div class="right"><a href="javascript:void(0);">>></a></div>
</div>
</body>
<style>
ul{display:block;position:relative;}
ul li {list-style:none;float:left;padding:0 16px;}
.directional_Slider{width:100%;position:relative; height:100px;}
.left {
  clear: both;
  float: left;
  position: absolute;
  top: 2px;
}
.right {
  float: right;
  position: absolute;
  right: 0;
}
</style>
<script>
$(function() {
	// alert("");
	$('.left').on('click', function() {
		  console.log($("#slider li:eq(0)").html());
		 // $("#slider li").each(function() {
			 // $('html, body').animate({scrollLeft:'-'+$(this).offset().left}, 800);
		 // });
		 var offset=$("#slider li:eq(0)").offset().left;		 
		 $('html, body').animate({scrollLeft:'-'+offset}, 800);
		 //console.log($("#slider>li").offset().left);
    });

});



</script>
</html>

