

 @extends('client_header.client_header')
  @section('title', 'Notification')  
   
 @section('content')
 
 
     <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Notifications</h3>
          </div>
        </div>
       </section>
      
 <style>
     @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);
 
 

.notification-ui_dd-content {
    margin-bottom: 30px;
}

.notification-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 20px;
    margin-bottom: 7px;
    background: #fff;
    -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
}

.notification-list--unread {
    border-left: 2px solid #29B6F6;
}

.notification-list .notification-list_content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.notification-list .notification-list_content .notification-list_img img {
    height: 48px;
    width: 48px;
    border-radius: 50px;
    margin-right: 20px;
}

.notification-list .notification-list_content .notification-list_detail p {
    margin-bottom: 5px;
    line-height: 1.2;
}

.notification-list .notification-list_feature-img img {
    height: 48px;
    width: 48px;
    border-radius: 5px;
    margin-left: 20px;
}
 </style>
 <br>
 <br>
 
 
 
<section class="section-50">
    <div class="container">
         <div class="notification-ui_dd-content" id="notifiy">
          
             
        </div>

        <!--<div class="text-center">-->
        <!--    <a href="#!" class="dark-link">Load more activity</a>-->
        <!--</div>-->

    </div>
</section>

 



</script>
 
 @endsection