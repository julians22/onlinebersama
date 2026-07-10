

function searchDomain() {
    if(window.activeFour == true){
        const callback = function () {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
            console.log('Search Called');
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-708118123/rhrHCICNr-ICEOuM1NEC',
            'event_callback': callback
        });
        return false;
    }
}

function registrationIntent() {
    if(window.activeFour == true){
        const callback = function () {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
            console.log('Register Called');
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-708118123/vEHhCK7G8uACEOuM1NEC',
            'event_callback': callback
        });
        return false;
    }
}

function articleEvent()
{
	console.log('start_event');
	if(window.activeFour==true)
	{
		const callback = function(){
			if(typeof(url) != 'undefined'){
				window.location = url;
			}
			console.log('Article Called');
		};
		console.log('event running');

		gtag('event', 'conversion', {
			'send_to': 'AW-708118123/AYvpCNCoh-ICEOuM1NEC',
			'event_callback': callback
		});
		return false;
	}else{
		console.log('Cookie Disabled');
	}

	console.log('end_event');
}


export { searchDomain, registrationIntent, articleEvent };
