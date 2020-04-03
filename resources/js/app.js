require('./bootstrap');
function checkCookieLaw()
{
	if ( window.localStorage.getItem('cookieLawKeyMiWeb') )
	{
		$('#avisoCookies').hide();
	}
}
checkCookieLaw();
$('#aceptarCookies').on( "click", function(){
	window.localStorage.setItem('cookieLawKeyMiWeb', true);
	$('#avisoCookies').hide();
});
