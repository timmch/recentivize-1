// =====================================================================================================================
// Global Variables
// =====================================================================================================================
var missionCountdownInterval;




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

	$('#missions').on('click', '.mission', function() {
		var id = $(this).data('id');
		$('#profilePage').hide('slide', {direction: 'left', easing: 'easeOutExpo'}, 500, function () {
			$('#missionPage').show('slide', {direction: 'left', easing: 'easeOutExpo'}, 500);
			$('#navigationHeader .backButton').fadeIn(500);
			
			viewMission(id);
		});

	});
	
	$('#navigationHeader .backButton').on('click', function() {
		$('#missionPage').hide('slide', {direction: 'left', easing: 'easeOutExpo'}, 500, function () {
			// Clear all the values
			clearInterval(missionCountdownInterval);
			$('#missionInfo .name').text('');
			$('#missionInfo .description').text('');
			$('#missionInfo .badgeTitle').text('');
			$('#missionInfo .reward').text('');
			$('#missionInfo .timeLeft').text('');
			
			$('#mapInfo .addressInfo .address').text('');
			$('#mapCanvas').html('');
			
			$('#profilePage').show('slide', {direction: 'left', easing: 'easeOutExpo'}, 500);
			$('#navigationHeader .backButton').fadeOut(500);
		});
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
				
				// Populate the user info
				$('#user .nameInfo .name').text(returnData.data.first_name);
				$('#user .basicInfo .city').text(returnData.data.city);
				$('#user .goldInfo .gold').text(returnData.data.coins);
				
				// Fill in the level indicator & title
				var level1Tooltip = returnData.data.level_title_1;
				var level2Tooltip = returnData.data.level_title_2;
				var level3Tooltip = returnData.data.level_title_3;
				var level4Tooltip = returnData.data.level_title_4;
				var level5Tooltip = returnData.data.level_title_5;
				
				var level = returnData.data.level;
				if(level >= 1){ $('#user .level1').addClass('highlight'); $('#user .levelTitle').text('('+level1Tooltip+')'); }
				if(level >= 2){ $('#user .level2').addClass('highlight'); $('#user .levelTitle').text('('+level2Tooltip+')'); }
				if(level >= 3){ $('#user .level3').addClass('highlight'); $('#user .levelTitle').text('('+level3Tooltip+')'); }
				if(level >= 4){ $('#user .level4').addClass('highlight'); $('#user .levelTitle').text('('+level4Tooltip+')'); }
				if(level >= 5){ $('#user .level5').addClass('highlight'); $('#user .levelTitle').text('('+level5Tooltip+')'); }
				
				
				
				$('#user .level1').qtip({
					overwrite: false,		// Make sure the tooltip won't be overridden once created
					content: {
						text: level1Tooltip,
					},
					style: {
						classes: 'ui-tooltip-rounded ui-tooltip-tipsy ui-tooltip-shadow',
						tip: true,
						width: '150px',
					},
					position: {
						my: 'bottom left', 
						at: 'top center'
					},
					show: {
						event: 'mouseover',
					},
				}, event); // Pass through our original event to qTip
				$('#user .level2').qtip({
					overwrite: false,		// Make sure the tooltip won't be overridden once created
					content: {
						text: level2Tooltip,
					},
					style: {
						classes: 'ui-tooltip-rounded ui-tooltip-tipsy ui-tooltip-shadow',
						tip: true,
						width: '150px',
					},
					position: {
						my: 'bottom left', 
						at: 'top center'
					},
					show: {
						event: 'mouseover',
					},
				}, event); // Pass through our original event to qTip
				$('#user .level3').qtip({
					overwrite: false,		// Make sure the tooltip won't be overridden once created
					content: {
						text: level3Tooltip,
					},
					style: {
						classes: 'ui-tooltip-rounded ui-tooltip-tipsy ui-tooltip-shadow',
						tip: true,
						width: '150px',
					},
					position: {
						my: 'bottom left', 
						at: 'top center'
					},
					show: {
						event: 'mouseover',
					},
				}, event); // Pass through our original event to qTip
				$('#user .level4').qtip({
					overwrite: false,		// Make sure the tooltip won't be overridden once created
					content: {
						text: level4Tooltip,
					},
					style: {
						classes: 'ui-tooltip-rounded ui-tooltip-tipsy ui-tooltip-shadow',
						tip: true,
						width: '150px',
					},
					position: {
						my: 'bottom left', 
						at: 'top center'
					},
					show: {
						event: 'mouseover',
					},
				}, event); // Pass through our original event to qTip
				$('#user .level5').qtip({
					overwrite: false,		// Make sure the tooltip won't be overridden once created
					content: {
						text: level5Tooltip,
					},
					style: {
						classes: 'ui-tooltip-rounded ui-tooltip-tipsy ui-tooltip-shadow',
						tip: true,
						width: '150px',
					},
					position: {
						my: 'bottom left', 
						at: 'top center'
					},
					show: {
						event: 'mouseover',
					},
				}, event); // Pass through our original event to qTip
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
console.log('yep');
	
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

// =====================================================================================================================
// View Mission
// - Grabs selected mission
// =====================================================================================================================
function viewMission(id){
	$.ajax({
		type	: 'POST',
		url		: WEB_URL + 'ajax/viewMission.php',
		data	: { id: id },
		dataType: 'json',
		success	: function(returnData){
			// No error, go ahead
			if(returnData.err == false){
				console.log('Getting selected mission details\t\t\t\t - [SUCCESS]');
//				console.log('• ' + returnData.msg);
				
				// Grab all the mission details
				var id = returnData.id;
				var name = returnData.name;
				var street = returnData.street;
				var city = returnData.city;
				var zipcode = returnData.zipcode;
				var description = returnData.description;
//				var startDate = returnData.start_date;
//				var endDate = returnData.end_date;
				var badgeTitle = returnData.badge_title;
				var reward = returnData.reward;
				var status = returnData.status;
				console.log(status);
				
				$('#missionInfo .name').text(name);
				$('#missionInfo .description').text(description);
				$('#missionInfo .badgeTitle').text(badgeTitle);
				$('#missionInfo .reward').text(reward);
				
				$('#missionInfo .badge').css({'background': 'url(' + WEB_URL + '/images/badges/' + id + '.png)',
											'-webkit-background-size': '100% 100%', '-moz-background-size': '100% 100%',
											'-o-background-size': '100% 100%', 'background-size': '100% 100%', });
				
				
				// Setup countdown
				var startDate = new Date(returnData.start_date);
				var endDate = new Date(returnData.end_date);
				
				$('#missionInfo .timeLeft').text(missionCountdown(endDate));
				missionCountdownInterval = setInterval(function() {
					$('#missionInfo .timeLeft').text(missionCountdown(endDate));
				}, 1000);
				
				
				// Setup map and address
				var address = street + ' ' + zipcode;
				$('#mapInfo .addressInfo .address').text(address);
				
				var mapOptions = {
					center: new google.maps.LatLng(29.6516344, -82.3248262),
					zoom: 8,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
				
				var geocoder;
				var markers = new Array();
				var firstLoc;
				
				geocoder = new google.maps.Geocoder();
				
				geocoder.geocode( {'address': address },
					function(results, status) {
						if (status == google.maps.GeocoderStatus.OK) {
							firstLoc = results[0].geometry.location;
							map = new google.maps.Map(document.getElementById("mapCanvas"),
							{
								center: firstLoc,
								zoom: 15,
								mapTypeId: google.maps.MapTypeId.ROADMAP
							});

							var marker = new google.maps.Marker({
							    position: firstLoc,
							    map: map,
							});
							marker.setMap(map);
						} 
						else { console.log(status); }
					}
				);
				

			}
			// Display error
			else{ console.log('Getting selected mission details\t\t\t\t - [ERROR]\n' + '• ' + returnData.msg); }
			
		},
		error	: function(){ console.log('ERROR: ajax/viewMission.php is busted!'); }
	});
}






function missionCountdown(endDate) {
	var epocSeconds = new Date().getTime() / 1000;				
	
	var endDateSeconds = endDate.getTime()/1000;
	
	timeLeftSeconds = endDateSeconds - epocSeconds;
	
	var days	= Math.floor(timeLeftSeconds / 86400);
	var hours   = Math.floor((timeLeftSeconds - (days * 86400)) / 3600);
	var minutes = Math.floor((timeLeftSeconds - (days * 86400) - (hours * 3600)) / 60);
	var seconds = Math.floor(timeLeftSeconds - (days * 86400) - (hours * 3600) - (minutes * 60));
	
	if (days	< 10) {days	   = "0"+days;}
	if (hours   < 10) {hours   = "0"+hours;}
	if (minutes < 10) {minutes = "0"+minutes;}
	if (seconds < 10) {seconds = "0"+seconds;}
	var timeLeft = days+' days ' + hours + ':' + minutes + ':' + seconds;

	return timeLeft;
}















