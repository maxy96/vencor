require('./bootstrap');
require('./sidebar');
window.Vue = require('vue');
//window.moment = require('moment');
Vue.component('agregar-promocion', require('./components/agregarPromocion.vue').default);

//const app = new Vue({
  //  el: '#app',
//});

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

Echo.channel('promocion')
    	.listen('PromocionNotification', (e) => {
	        Notification.requestPermission( permission => {
	              let notification = new Notification('¡Nueva promocion!', {
	                body: e.info, // content for the alert
	                icon: "https://vencor.test/favicon.ico" // optional image url
	              });

	              // link to page on clicking the notification
	              notification.onclick = () => {
	                window.open(window.location.href);
	              };
	            });
    		});




