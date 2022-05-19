
 @extends('setup_header.providers_header')
   
 @section('content')

<link href='{{asset("/calender_css/lib/main.css")}}' rel='stylesheet' />
<script src='{{asset("/calender_css/lib/main.js")}}'></script>

  <div class="jumbotron-creative-inner">
          <div class="container">
            <div class="jumbotron-creative-main">
              <h2 class="jumbotron-creative-title">Your Work Diary</h2>
              
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
            <img class="jc-decoration-image" src="{{asset('/front_css/images/Capture.png')}}"width="748" height="528">
           </div>
        </div>
        
        </header>
      </div>




   <section class="section section-md">
         <div class="container">
           <div class="block-form">
 	<div id='calendar'></div>

</div>
</div>
</section>

<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: '{{date("Y-m-d")}}',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: false,
      dayMaxEvents: true,
      events: [
      	
      	@foreach($projects as $project)
        {
          title: '{{$project->contract_name}}',
          start: '{{$project->start_date}}',
          end: '{{$project->end_date}}'
        },

        @if($project->status == "waiting_for_provider_approval")
         {
          title: '{{$project->contract_name}} (Pending)',
          start: '{{$project->start_date}}',
          constraint: 'availableForMeeting', // defined below
          color: '#ff99cc'
        },
        @elseif($project->status == "cancelled")
         {
          title: '{{$project->contract_name}} (Cancelled)',
          start: '{{$project->start_date}}',
          constraint: 'availableForMeeting', // defined below
          color: '#d6d6c2'
        },

        @elseif($project->status == "completed")
         {
          title: '{{$project->contract_name}} (Completed)',
          start: '{{$project->start_date}}',
          constraint: 'availableForMeeting', // defined below
          color: '#00cc00'
        },
           @elseif($project->status == "decline")
         {
          title: '{{$project->contract_name}} (Decline)',
          start: '{{$project->start_date}}',
          constraint: 'availableForMeeting', // defined below
          color: '#ff3300'
        },
        @endif
        @endforeach
        
 
      ]
    });

    calendar.render();
  });

</script>



@endsection