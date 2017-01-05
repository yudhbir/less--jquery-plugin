(function( $ ){

    var methods = {
        init : function(options) {
			
        },
        show : function(){ 

		},
        hide : function(ojb){
		
			$(ojb).hide(); 
		},
        update : function(content) {

		},
        run : function(content)
		{
			
			methods.hide($(this));			
		},
		execute:function(content,width,bgcolor,color){
			var text='<span class="tooltiptext">'+content+'</span>';
			if(width){var f_width=width*$('.tooltiptext').width();}
			var bgcolor = (bgcolor) ? bgcolor : "#000000";
			var color = (color) ? color : "#000000";
			var width = (f_width) ? f_width: "200px";
			$(this).on('mouseenter',function(){
				$(this).addClass('tooltip'); 			
				$(this).append(text);
				$('.tooltiptext').css({
					'width':width,
					'background-color':bgcolor,
					'color':color
				});
			}).on("mouseleave", function(event){
				$(this).removeClass('tooltip'); 			
				$(this).find(".tooltiptext").remove();
			});
		}
    };

    $.fn.tooltip = function(methodOrOptions) {
        if ( methods[methodOrOptions] ) {
            return methods[ methodOrOptions ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof methodOrOptions === 'object' || ! methodOrOptions ) {            
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  methodOrOptions + ' does not exist on jQuery.tooltip' );
        } 		
    };


})( jQuery );