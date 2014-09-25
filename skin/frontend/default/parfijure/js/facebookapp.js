(function($) {
	/* Facebook App Initialization */
	(function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
	
	window.fbAsyncInit = function() {
        FB.init({
            //appId      : '848160798552188',
            appId	   : '852065848161683',
			status	   : true,
			xfbml      : true,
            version    : 'v2.1'
        });
		

		var clickShare = function(){
			console.log('sharing button clicked');
			$('#step1').hide();
			FB.ui(
				{
					method: 'share',
					href: 'http://www.renguangdo.com/facebook.html',
				},
				function(response) {
					if ( response && response.post_id){
						console.log('Share Success');
						console.log(response);
						shareSuccess();
					} else {
						console.log('Share Fail');
						console.log(response);
						shareFail();
					}
				}
			);
		}

		$('#btn-share').click( clickShare );
		$('#btn-share-again').click( clickShare );

		$('#btn-question-next').on("click", function(){
			var answer = $('input:radio[name=question]').filter(":checked").val();
			$('#answer').val(answer);
			$('.questions').hide();
			$('.share-wrapper').show();
		});
    };

	function shareSuccess() {
		console.log('Sharing Success, to show Contact Form');
		$('#step2').show();
		$('#intro').hide();
	}
	
	function shareFail() {
		$('#step2').show();
		$('#intro').hide();
		/*$('#intro').hide();
		$('#sharing-fail').show();*/
	}
})(jQuery);
