 @extends('setup_header.providers_header')
   
 @section('content')

 <style type="text/css">
 	 .stretch-card>.card {
     width: 100%;
     min-width: 100%
 }

 body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 3rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #3da5f;
     border-radius: 0
 }

 .card .card-body {
     padding: 1.25rem 1.75rem
 }

 .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .card .card-description {
     margin-bottom: .875rem;
     font-weight: 400;
     color: #76838f
 }

 .btn.btn-social-icon {
     width: 50px;
     height: 50px;
     padding: 0
 }

 .template-demo>.btn {
     margin-right: 0.5rem !important
 }

 .template-demo {
     margin-top: 0.5rem !important
 }

 .btn.btn-rounded {
     border-radius: 50px
 }

 .btn-outline-facebook {
     border: 1px solid #3b579d;
     color: #3b579d
 }

 .btn-outline-facebook:hover {
     background: #3b579d;
     color: #ffffff
 }

 .btn-outline-youtube {
     border: 1px solid #e52d27;
     color: #e52d27
 }

 .btn-outline-twitter {
     border: 1px solid #2caae1;
     color: #2caae1
 }

 .btn-outline-dribbble {
     border: 1px solid #ea4c89;
     color: #ea4c89
 }

 .btn-outline-linkedin {
     border: 1px solid #0177b5;
     color: #0177b5
 }

 .btn-outline-instagram {
     border: 1px solid #dc4a38;
     color: #dc4a38
 }

 .btn-outline-twitter:hover {
     background: #2caae1;
     color: #ffffff
 }

 .btn-outline-linkedin:hover {
     background: #0177b5;
     color: #ffffff
 }

 .btn-outline-youtube:hover {
     background: #e52d27;
     color: #ffffff
 }

 .btn-outline-instagram:hover {
     background: #e52d27;
     color: #ffffff
 }

 .btn-facebook {
     background: #3b579d;
     color: #ffffff
 }

 .btn-youtube {
     background: #e52d27;
     color: #ffffff
 }

 .btn-twitter {
     background: #2caae1;
     color: #ffffff
 }

 .btn-dribbble {
     background: #ea4c89;
     color: #ffffff
 }

 .btn-linkedin {
     background: #0177b5;
     color: #ffffff
 }

 .btn-instagram {
     background: #dc4a38;
     color: #ffffff
 }

 .btn-facebook:hover,
 .btn-facebook:focus {
     background: #2d4278;
     color: #ffffff
 }

 .btn-youtube:hover,
 .btn-youtube:focus {
     background: #c21d17;
     color: #ffffff
 }

 .btn-twitter:hover,
 .btn-twitter:focus {
     background: #1b8dbf;
     color: #ffffff
 }

 .btn-dribbble:hover,
 .btn-dribbble:focus {
     background: #e51e6b;
     color: #ffffff
 }

 .btn-linkedin:hover,
 .btn-linkedin:focus {
     background: #015682;
     color: #ffffff
 }

 .btn-instagram:hover,
 .btn-instagram:focus {
     background: #bf3322;
     color: #ffffff
 }
 </style>

 <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Invite friends and earn money</h2>
              
             </div>
          </div>
          <div class="jc-decoration">
            <div class="jc-decoration-item jc-decoration-item-1">
              <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970" preserveAspectRatio="none">
                <path d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
              </svg>
            </div>
            <div class="jc-decoration-item jc-decoration-item-2">
              <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970" preserveAspectRatio="none">
                <path d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
              </svg>
            </div>
            <img class="jc-decoration-image" src="{{asset('/front_css/images/4813-removebg-preview.png')}}"width="748"height="528">

           </div>
        </div>
        
        </header>
    </div>




    <section class="section section-md bg-default text-center">
        <div class="container">
        		<img src="{{Auth::user()->profile_image}}" style="width:150px;border-radius: 100px;" class="img-thumbnail">
          <h3>{{Auth::user()->name}} Invite your friends in <span class="text-primary">Handy</span>Services</h3>
          <p class="text-spacing-05">& You Both Get Up To $100. Introduce your friends to the easiest way to get things done

</p>
          <div class="row row-50 justify-content-center align-items-center text-left">

          	<form method="post" class="form-group" action="/Providers/invitation">
          		@csrf
          			
          			<div class="row">
          				<div class="container col-sm-12">
          			<input type="email" placeholder="enter your friend email" autocomplete="off" class="form-control justify-content-center" name="email" required="" style="width: 1000px;"><br>
          			 @if (session('status'))
                            <div class="alert alert-danger" style="background-color: red; color: white;">
                                {{ session('status') }}
                            </div>
                            @endif
          			<center><button class="btn btn-primary">Send Invitation</button></center>
          				</div>
 
          		</div>
          		<br>

<!-- 	<div class="page-content page-container" id="page-content">
	  <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-md-50 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Share Via Social</h4>
                         <div class="template-demo">
                         <button type="button" class="btn btn-social-icon btn-outline-facebook" style="border-radius: 50px;">
                        	<i class="fa fa-facebook"></i></button>
 
                        	 	<button type="button" class="btn btn-social-icon btn-outline-twitter"  style="border-radius: 50px;"><i class="fa fa-twitter"></i></button> 
 

                        	 	<label class="card-description">Or</label> <input type="text"  name=""> <button type="button" class="btn btn-primary">Copy Your Link </button> 

                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

          	</form>
            
           </div>
        </div>
    </section>


    @if($invite_count > 0)
    <section class="section section-md bg-default text-center">
        <div class="container col-sm-7">
        	<h3>Track Your Referrals</h3>
       <table class="table table-primary table-responsive-md">
		            <thead>
		              <tr>
		                <th>Email</th>
		                <th>Status</th>
		                <th>Date</th>
 		              </tr>
		            </thead>
		            <tbody>
		            	
		            @foreach($invite as $invites)					  
		              <tr>
		                <td>{{$invites->email}}</td>
		                @if($invites->status == "sent")
		                <td><div class="badge badge-primary"style="background-color: yellow; color: black;">Sent</div></td>
		                @elseif($invites->status == "join")
		                 <td><div class="badge badge-primary">Join</div></td>
		                @elseif($invites->status == "job_completed")
		                 <td><div class="badge badge-primary"style="background-color: green; color: white;">Your Referral Earn Money</div></td>
		                @endif

		               <td>{{$invites->created_at}}</td>

		              </tr>
		            
		            @endforeach
 					
		             
		            </tbody>
		             
		          </table>
		      </div>
		  </section>

		           @endif




    <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-center text-left">
 					
 						<div class="container col-sm-10">
          			
          			<div class="row">
          			 
          			 	<div class="card mx-auto" style="width:300px;">

          			 		<div class="card-body">
          			 			
          			 			Spread the word by email or with your link via social sharing


          			 		</div>
          			 	</div>
          			
          			 	<div class="card mx-auto" style="width:300px;">
          			 		<div class="card-body">
          			 			Your friend signs up to Handyservices & gets 20% off their first purchase


          			 		</div>
          			 	</div>


          			 	<div class="card mx-auto" style="width:300px;">
          			 		<div class="card-body">
          			 			You get 20% of their first order amount, up to $100


          			 		</div>
          			 	</div>
          			</div>
 
          		</div>
          		 
		</form>
	 </div>
  </div>
</section>



    <section class="section section-md bg-default text-center">
        <div class="container">
        	 <bold><h2 class="jumbotron-creative-title">Don't Let Your Friends Waste Another Minute</h2></bold>
            
          <div class="row row-50 justify-content-center align-items-center text-left">
  			 <div class="container col-sm-10"> 

  			 	<strong><p>Nobody likes to waste time. That's why HandyService empowers entrepreneurs to connect with pros who can help them do more with less. You've experienced this power. Now, you can share it and earn up to $100 for every friend who signs up and makes their first order.</p></strong>
 				
           </div>
  	  </div>
   </div>
</section>

@endsection