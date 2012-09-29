// =====================================================================================================================
// Global Variables
// =====================================================================================================================





// =====================================================================================================================
// Run after DOM is ready
// =====================================================================================================================
$(function() {
	
//	setTimeout(function() {
		getUser();
		getMission();
//	}, 2000);

//	alert($('#mainWindow').outerHeight(true));
//	alert($('#mainWindow').outerWidth(true));

	$('#missions .active').on('click', '.mission', function() {
		console.log($(this).data('id'));
	});
	
});




// =====================================================================================================================
// Run on window resize
// =====================================================================================================================
$(window).resize(function() {
	
});









// =====================================================================================================================
// Get User
// - Grabs user info
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
				console.log('• ' + returnData.data.level);
				
				// Populate the user info
				$('#user .nameInfo .name').text(returnData.data.first_name);
				$('#user .basicInfo .city').text(returnData.data.city);
				
				// TEMP*****
				var level = returnData.data.level;
				
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
// Get Mission
// - Grabs active/available/completed missions
// =====================================================================================================================
function getMission(){
	$.ajax({
		type	: 'POST',
		url		: WEB_URL + 'ajax/getMission.php',
		data	: { },
		dataType: 'json',
		success	: function(returnData){
			// No error, go ahead
			if(returnData.err == false){
				console.log('Getting mission info\t\t\t\t - [SUCCESS]');
				console.log('• ' + returnData.msg);
				
				// Grab all the active missions
				var count = 1;
				for(mission in returnData.data.active)
				{
					var id = returnData.data.active[mission].id;
					var name = returnData.data.active[mission].name;
					
					// Even Row
					if (count%2 == 0){
						var mission = $('<div class="mission even">'+ name +'</div>');
					}
					// Odd Row
					else{
						var mission = $('<div class="mission odd">'+ name +'</div>');
					}
					
					mission.data('id', id);
					
					$('#missions .active .missionList').append(mission);
					count++;
				}
				// Grab all the available missions
				count = 1;
				for(mission in returnData.data.available)
				{
					var id = returnData.data.available[mission].id;
					var name = returnData.data.available[mission].name;
					
					// Even Row
					if (count%2 == 0){
						var mission = $('<div class="mission even">'+ name +'</div>');
					}
					// Odd Row
					else{
						var mission = $('<div class="mission odd">'+ name +'</div>');
					}
					
					mission.data('id', id);
					
					$('#missions .available .missionList').append(mission);
					count++;
				}
				// Grab all the completed missions
				count = 1;
				for(mission in returnData.data.completed)
				{
					var id = returnData.data.completed[mission].id;
					var name = returnData.data.completed[mission].name;
					
					// Even Row
					if (count%2 == 0){
						var mission = $('<div class="mission even">'+ name +'</div>');
					}
					// Odd Row
					else{
						var mission = $('<div class="mission odd">'+ name +'</div>');
					}
					
					mission.data('id', id);
					
					$('#missions .completed .missionList').append(mission);
					count++;
				}
				
			}
			// Display error
			else{ console.log('Getting mission info\t\t\t\t - [ERROR]\n' + '• ' + returnData.msg); }
			
		},
		error	: function(){ console.log('ERROR: ajax/getMission.php is busted!'); }
	});
}
























