@extends('layouts.app')

@section('content')
<script type="text/javascript" src="{{ asset('sximo/js/plugins/fullcalendar/lib/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('sximo/js/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('sximo/js/plugins/fullcalendar/fullcalendar/fullcalendar.css') }}">
<!--<link rel="stylesheet" type="text/css" href="{{ asset('sximo/js/plugins/fullcalendar/fullcalendar/fullcalendar.print.css') }}">-->


<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
        </div>

        <ul class="breadcrumb">
            <li><a href="{{ URL::to('dashboard') }}"> Dashboard </a></li>
            <li class="active">{{ $pageTitle }}</li>
        </ul>	  

    </div>



    <div class="page-content-wrapper m-t">	 	

        <div class="sbox animated fadeInRight">
            <div class="sbox-title"> <h5> <i class="fa fa-table"></i> </h5>
                <div class="sbox-tools" >
                    @if(Session::get('gid') ==1)
                    <a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="btn btn-xs btn-white tips" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa fa-cog"></i></a>
                    @endif 
                </div>
            </div>
            <div class="sbox-content"> 	

                <!---  here is for employee name filter-->

                <div class="toolbar-line ">
                    <div class="form-group  " > 
                        <label for="Employee Name" class=" control-label col-md-1 text-left"> 
                            <b>Employee Name:</b>
                        </label>
                        <div class="col-md-3">
                            <select name='employee_id' rows='3' id='employee_id' class='select2 '   ></select> 
                        </div> 

                    </div> 

                    <div class="form-group  " > 
                        <label for="Month" class=" control-label col-md-1 text-left"> 
                            <b>Month:</b>
                        </label>
                        <div class="col-md-2">
                            <select name='month' rows='3' id='month' class='select2'   >
								<option value=''>--Select Month--</option>
								<option value='01' selected>Janaury</option>
								<option value='02'>February</option>
								<option value='03'>March</option>
								<option value='04'>April</option>
								<option value='05'>May</option>
								<option value='06'>June</option>
								<option value='07'>July</option>
								<option value='08'>August</option>
								<option value='09'>September</option>
								<option value='10'>October</option>
								<option value='11'>November</option>
								<option value='12'>December</option>
							</select> 
                        </div> 
                    </div>
					
					<div class="form-group  " > 
                        <label for="Year" class=" control-label col-md-1 text-left"> 
                            <b>Year:</b>
                        </label>
                        <div class="col-md-2">
                            <select name='year' rows='3' id='year' class='select2'   >
								<option value=''>--Select Year--</option>
							</select> 
                        </div> 
                    </div>
				

                    <!-- <a href="{{ URL::to('calendar?return=2') }}" class="tips btn btn-sm btn-white"  title="{{ Lang::get('core.btn_show') }}">
                    <i class="fa fa-plus-circle searid"></i>&nbsp;{{ Lang::get('core.btn_search') }}</a>
                    -->

                    <input type="button" id="searid" name="searid" value="Search" class="fc-button fc-button-agendaWeek fc-state-default" />




                </div>
                <br>
                <br><br>

                <!-- div class="toolbar-line ">
                            @if($access['is_add'] ==1)
                            <a href="{{ URL::to('calendar/update') }}" onclick="SximoModal(this.href,'Add new date'); return false;" class="tips btn btn-sm btn-white"  title="{{ Lang::get('core.btn_create') }}">
                            <i class="fa fa-plus-circle "></i>&nbsp;{{ Lang::get('core.btn_create') }}</a>
                            @endif  
                            @if($access['is_remove'] ==1)
                            <a href="javascript://ajax"  onclick="SximoDelete();" class="tips btn btn-sm btn-white" title="{{ Lang::get('core.btn_remove') }}">
                            <i class="fa fa-minus-circle "></i>&nbsp;{{ Lang::get('core.btn_remove') }}</a>
                            @endif 		
                            @if($access['is_excel'] ==1)
                            <a href="{{ URL::to('calendar/download') }}" class="tips btn btn-sm btn-white" title="{{ Lang::get('core.btn_download') }}">
                            <i class="fa fa-download"></i>&nbsp;{{ Lang::get('core.btn_download') }} </a>
                            @endif			
                     
                    </div !--> 		


                <div style="padding:10px; background:#fff;">
                    <div id='calendar' > </div>
                </div>	

            </div>
        </div>	
    </div>	 


</div>	
<script>
    $(document).ready(function () {
		$('.do-quick-search').click(function () {
        $('#SximoTable').attr('action', '{{ URL::to("calendar/multisearch")}}');
        $('#SximoTable').submit();
    });


        $("#employee_id").jCombo("{{ URL::to('attendenceentry/comboselect?filter=employee_t:employee_id:first_name|last_name') }}",
                {selected_value: '{{ "employee_id" }}'}); //here i removed $row ???

      //  $("#period_id").jCombo("{{ URL::to('viewaccountperiods/comboselect?filter=account_periods_t:period_id:name') }}",
      //          {selected_value: '{{ "period_id" }}'}); //here i removed $row ???
				var min = 1900,
					max = new Date().getFullYear(),
					select = document.getElementById('year');

				for (var i = max; i>=min; i--){
					var opt = document.createElement('option');
					opt.value = i;
					opt.innerHTML = i;
					select.appendChild(opt);
					
				}
								

				select.value = new Date().getFullYear();
				// is working but not in displayed $('#year option[value="2015"]').attr("selected", "selected");
				
				

		
		var source = 'calendar/jsondata?filter=';
		
        $('#calendar').fullCalendar({
            header: {
                left: 'today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
			events: '',
            defaultDate: '{{ date("Y-m-d")}}',
            selectable: true,
            selectHelper: true,
			eventRender: function (event, element)
        {
            element.attr('href', '#');
        }
            
        });
				
        $('#searid').click(function () {
            var filter = $('#employee_id').val();
			var month = $('#month').val();
			var year = $('#year').val();
			var newSource = 'calendar/jsondata?filter=' + filter;
			$('#calendar').fullCalendar('gotoDate',''+year+'-'+month+'-01');
			$('#calendar').fullCalendar('removeEvents');
			$('#calendar').fullCalendar('removeEventSource',source);
			$('#calendar').fullCalendar('refetchEvents');
			$('#calendar').fullCalendar('addEventSource', newSource);
			$('#calendar').fullCalendar('refetchEvents');	
			
			source = newSource;
		});
    });
</script>

<style>
    #script-warning {
        display: none;
        background: #eee;
        border-bottom: 1px solid #ddd;
        padding: 0 10px;
        line-height: 40px;
        text-align: center;
        font-weight: bold;
        font-size: 12px;
        color: red;
    }
    #loading {
        display: none;
        position: absolute;
        top: 10px;
        right: 10px;
    }

</style>			
@stop