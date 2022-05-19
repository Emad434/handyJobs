
 @extends('setup_header.providers_header')
    @section('title', 'Work-Diary')  
 @section('content')

<link href='{{asset("/calender_css/lib/main.css")}}' rel='stylesheet' />
<script src='{{asset("/calender_css/lib/main.js")}}'></script>

<section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">{{ __(('Your Work Diary')) }}</h3>
          </div>
        </div>
       </section>



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
      editable: false,
      selectable: false,
      dayMaxEvents: false,
      events: [
      	
      @foreach($projects as $project)
      	
      	@if($project->status == "active")
      	 
         {
          title: '{{$project->contract_name}} (Active)',
          start: '{{$project->start_date}}',
          end: '{{$project->end_date}}',
          
         },
        @elseif($project->status == "waiting_for_provider_approval")
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
           @elseif($project->status == "decline"){
               
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