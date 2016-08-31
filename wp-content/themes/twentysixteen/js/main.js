(function($, window, document) {

    // The $ is now locally scoped 

   // Listen for the jQuery ready event on the document
   $(function() {

     // The DOM is ready!
    // Sidebar Toggle 
    	var sideBarMenu = function(){
    		$('.wrapper').toggleClass('toggle');
    	}
    	 $('#SideToggle').on('click', sideBarMenu );
   });

   // The rest of the code goes here!

}(window.jQuery, window, document));