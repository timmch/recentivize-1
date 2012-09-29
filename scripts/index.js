// =====================================================================================================================
// Global Variables
// =====================================================================================================================





// =====================================================================================================================
// Run after DOM is ready
// =====================================================================================================================
$(function() {
	
//	setTimeout(function() {
		getUser();
//	}, 2000);

//	alert($('#mainWindow').outerHeight(true));
//	alert($('#mainWindow').outerWidth(true));
});




// =====================================================================================================================
// Run on window resize
// =====================================================================================================================
$(window).resize(function() {
	
});









// =====================================================================================================================
// Get Data
// - Grabs some test data
// =====================================================================================================================
function getUser(){
	$.ajax({
		type	: 'POST',
		url		: WEB_URL + 'ajax/getUser.php',
		data	: { },
		dataType: 'json',
		success	: function(returnData){
			// No error, go ahead
			if(returnData.err == false){
				console.log('Getting user info\t\t\t\t - [SUCCESS]');
				console.log('• ' + returnData.msg);
//				console.log('• ' + returnData.data.city);
				
				// Populate the user info
				$('#user .nameInfo .name').text(returnData.data.first_name);
				$('#user .basicInfo .city').text(returnData.data.city);
				
				// TEMP*****
				var level = 3;
				
				// Fill in the level indicator
				if(level >= 1){ $('#user .level1').addClass('highlight'); }
				if(level >= 2){ $('#user .level2').addClass('highlight'); }
				if(level >= 3){ $('#user .level3').addClass('highlight'); }
				if(level >= 4){ $('#user .level4').addClass('highlight'); }
				if(level >= 5){ $('#user .level5').addClass('highlight'); }
			}
			// Display error
			else{ console.log('Getting user info\t\t\t\t - [ERROR]\n' + '• ' + returnData.msg); }
			
		},
		error	: function(){ console.log('ERROR: ajax/getUser.php is busted!'); }
	});
}



// =====================================================================================================================
// Resize Containers
// - Resizes containers to fit any users screen resolution
// |	height()		= E			|	outerHeight() 		= E + P + B			|
// |	innerHeight()	= E + P		|	outerHeight(true)	= E + P + B + M		|
// =====================================================================================================================
function resizeContainers() {
	// mainWindow
	// =======================================================
//	var mainWindowHeight				= $('#mainWindow').innerHeight()
//										- $('#mainHeader').outerHeight(true);
//	$('#mainContent').height(mainContentHeight);
}




























