<html>
<title>LESS DEVELOPMENT</title>
<head>
<script src="jquery-1.12.4.min.js"></script>
<script src="custom.js"></script>
</head>
<body>
<style>
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: visible;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 45;
}
.arrow-down {
  width: 0; 
  height: 0; 
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  
  border-top: 5px solid #f00;
}
element.style {
  display: inline-flex;
  float: none;
  width: 300px;
}
</style>
<!--p class='tooltip'>hello</p><span class="tooltiptext">arraow</span-->
<div id="run">Tooltip</div>
<script>
$(function() {
	// alert("");
	//$('#run').tooltip('required function','tooltip text',increase tooltip width,'change tooltip background color','change tooltip color');
	$('#run').tooltip('execute','This is the new tooltip content!',2,'#90EE90','#000000');

});



</script>
</html>

