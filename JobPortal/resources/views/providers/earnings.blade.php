 @extends('setup_header.providers_header')
  @section('title', 'Earnings')  
 @section('content')
  
 
        
        </header>
   <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Earnings</h3>
          </div>
        </div>
       </section>

@php
    
 $neticome = App\Invoice::where('user_id',Auth::user()->id)->sum('amount');
 $withdrawn = App\AmountStatus::where('provider_id',Auth::user()->id)->where('status','cleared')->sum('amount');
 $pending_clearance = App\AmountStatus::where('provider_id',Auth::user()->id)->where('status','pending_clearance')->sum('amount');

$available = App\AmountStatus::where('provider_id',Auth::user()->id)->where('status','available')->sum('amount');
  $currency = App\Amount::first();
 
@endphp
 
 	<section class="section section-md text-center">
 	     <div class="container">
 	    <h3 class="text-left">{{ __(('Earnings')) }}</h3>
  	       <div class="row">
  	           
             <div class="card mx-auto col-sm-2">
                <div class="card-body">
               <h4>{{ __(('Net Income')) }}</h4>  
                 <h5><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>{{$neticome}}</h5>
              </div>
            </div>
            
            <div class="card mx-auto col-sm-2">
               <div class="card-body">
               <h4>{{ __(('Withdrawn')) }}</h4>  
                   <h5><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>{{$withdrawn}}</h5>
              </div>
           </div>
            <div class="card mx-auto col-sm-3">
              <div class="card-body">
                <h4>{{ __(('Pending Clearance')) }}</h4>  
                   <h5><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>{{$pending_clearance}}</h5>
              </div>
            </div>
            <div class="card mx-auto col-sm-4">
              <div class="card-body">
               <h4>{{ __(('Available For Withdrawal')) }}</h4>  
                  <h5><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>{{$available}}</h5>
              </div>
            </div>
            
            </div>
            </div>
            <div class="container">
                <div class="row">
                   
                
                 <h5 class="col-sm-6">
                 <select class="form-control" id="months" onchange="abbc_abbc__nn()">
                     <option value>{{ __(('Months'))}}</option>
                     <option value="01">{{ __(('January')) }}</option>
                     <option value="02">{{ __(('Feburary')) }}</option>
                     <option value="03">{{ __(('March')) }}</option>
                     <option value="04">{{ __(('April')) }}</option>
                     <option value="05">{{ __(('May')) }}</option>
                     <option value="06">{{ __(('June')) }}</option>
                     <option value="07">{{ __(('July')) }}</option>
                     <option value="08">{{ __(('August')) }}</option>
                     <option value="09">{{ __(('September')) }}</option>
                     <option value="10">{{ __(('Octuber')) }}</option>
                     <option value="11">{{ __(('November')) }}</option>
                     <option value="12">{{ __(('December')) }}</option>
                 </select>
                 </h5>
            </div>
             </div>
             
              <div class="container">
                <div class="row">
                
                   
            </div>
             </div>
        <div class="container">
            
          <div class="card">
           		<table class="table table-primary table-responsive-md">
           		    
		            <thead>
		              <tr>
		                <th>{{ __(('Buyer')) }}</th>
		                <th>{{ __(('Contract')) }}</th>
		                <th>{{ __(('Due On')) }}</th>
		                <th>{{ __(('Total')) }}</th>
		                <th>{{ __(('Status')) }}</th>
		              </tr>
		            </thead>
		              <center><tr style="display:none;" id="loader">
		                     <td>
		                       <div class="spinner-border text-primary" role="status">
                                <img src="https://gifimage.net/wp-content/uploads/2017/10/colorful-loader-gif-transparent-13.gif"style="width:50px;">
                            </div>
                            </td></tr></center>
		            <tbody id="data">
		            	 
		            	@if($invoices_count > 0)

		            	@foreach($invoices as $Contract)
 

					 @php
					 
					
					  	 	$contract_details = App\Contract::where('id',$Contract->contract_id)->first();
					  	 	
		                 	$contract_slug = str_replace(" ","-",$contract_details->contract_name);
                		
 		                @endphp
		            
		                  
		                <td>{{$Contract->buter_details->name}}</td>
		                <td><a href="/Providers/Contract-details/{{$contract_slug}}/{{$contract_details->order_no}}"> {{$contract_details->contract_name}}</a></td>
		                <td>{{$contract_details->due_on}}</td>
		                <td><img src="{{asset('/JobPortal/public/message_media')}}/{{$currency->currency_img}}" style="width:10px;"/>{{$Contract->amount}}</td>

		                @if($contract_details->status == "active")
		                <td><div class="badge badge-primary">Active</div></td>
		                @elseif($contract_details->status == "cancelled")
		                 <td><div class="badge badge-primary"style="background-color: yellow; color: black;">Cancelled</div></td>
		               @elseif($contract_details->status == "late")
		                 <td><div class="badge badge-primary"style="background-color: red; color: white;">Late</div></td>
		               @elseif($contract_details->status == "completed")
		                 <td><div class="badge badge-primary"style="background-color: green; color: white;">Completed</div></td>
		                  @elseif($contract_details->status == "pending")
		                 <td><div class="badge badge-primary"style="background-color: pink; color: white;">Pending</div></td>
		              
		               @endif

		              </tr>
		              @endforeach

		              @else
		              <tr><td>No earnings found.</td></tr>
		              @endif
		             
		            </tbody>
		             
		          </table>

          </div>
        </div>

</section>


 
  
<script>
    
function abbc_abbc__nn(){
 
 $('#data').empty();
 document.getElementById("loader").style.display = "block";
var selectBox = document.getElementById("months");
   
  
    $.ajax({
        url: '/Providers/earning_filter/'+selectBox.options[selectBox.selectedIndex].value+' ',
        type: 'get',
        cache: false,
        contentType: false, //must, tell jQuery not to process the data
        processData: false,
        
    success: function(response){
        
         if(response.error != 1){
        
        var table_html = '  <tr><td>'+response.buyer_name.name+'</td><td><a href="/Providers/Contract-details/'+response.contract_slug+'/'+response.data.order_no+' ">'+response.data.contract_name+'</a></td><td>'+response.data.due_on+'</td><td>$'+response.data.contract_amount+'</td></tr>';
        $('#data').append(table_html);
         document.getElementById("loader").style.display = "none";
         }
         
         else{
             var table_html = '  <tr><td>No earnings found with this filter.</td>';
              $('#data').append(table_html);
               
         document.getElementById("loader").style.display = "none";
       
         }
        console.log(response);
        
    }
        
});
    
}
</script>



  @endsection