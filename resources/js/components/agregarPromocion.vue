<template>
	<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="description">Informar sobre la promocion</label>
          <textarea v-model="newPromoDesc" id="description" rows="8" class="form-control"></textarea>
        </div>
        <button @click="addPost(newPromoDesc)" 
          :class="{disabled: (!newPromoDesc)}"
          class="btn btn-block btn-primary">Submit</button>
      </div>
    </div>
  </div>
</template>
<script>
	export default {
       data() {
      return {
        newPromoDesc: "" 
      }
    },
    created() {
      this.listenForChanges();
    },
    methods: {
      addPost(promoDesc) {
        // check if entries are not empty
        if(!promoDesc)
          return;

        // make API to save post
        axios.post('/api/promocion', { 
          descripcion: promoDesc
        }).then( response => {
          if(response.data) { 
            this.newPromoDesc = "";
          }
        })
      },

      listenForChanges() {
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
        }
      } 
    }
</script>