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
		execute:function(content){
			var text='<span class="tooltiptext">'+content+'</span>';
			$(this).on('mouseenter',function(){
				$(this).addClass('tooltip'); 			
				$(this).append(text);
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