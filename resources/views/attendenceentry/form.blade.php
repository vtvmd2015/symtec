@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('attendenceentry?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active">{{ Lang::get('core.addedit') }} </li>
      </ul>
	  	  
    </div>
 
 	<div class="page-content-wrapper">

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'attendenceentry/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> ATTENDENCE_ENTRY</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Attendence Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Attendence Id', (isset($fields['attendence_id']['language'])? $fields['attendence_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('attendence_id', $row['attendence_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Employee Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Employee Name', (isset($fields['employee_id']['language'])? $fields['employee_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='employee_id' rows='5' id='employee_id' class='select2 '   ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Period Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Period Id', (isset($fields['period_id']['language'])? $fields['period_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='period_id' rows='5' id='period_id' class='select2 ' required  ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Entry Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Entry Date', (isset($fields['entry_date']['language'])? $fields['entry_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('entry_date', $row['entry_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Entry Time" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Entry Time', (isset($fields['entry_time']['language'])? $fields['entry_time']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('entry_time', $row['entry_time'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Include Payroll" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Include Payroll', (isset($fields['include_payroll']['language'])? $fields['include_payroll']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<label class='radio radio-inline'>
					<input type='radio' name='include_payroll' value ='F'  @if($row['include_payroll'] == 'F') checked="checked" @endif > Full Day </label>
					<label class='radio radio-inline'>
					<input type='radio' name='include_payroll' value ='H'  @if($row['include_payroll'] == 'H') checked="checked" @endif > Half Day </label> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Onduty" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Onduty', (isset($fields['onduty']['language'])? $fields['onduty']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <?php $onduty = explode(",",$row['onduty']); ?>
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='onduty[]' value ='Y'   class='' 
					@if(in_array('Y',$onduty))checked @endif 
					 /> Yes </label>  
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('attendenceentry?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#employee_id").jCombo("{{ URL::to('attendenceentry/comboselect?filter=employee_t:employee_id:first_name|last_name') }}",
        {  selected_value : '{{ $row["employee_id"] }}' });
        
        $("#period_id").jCombo("{{ URL::to('attendenceentry/comboselect?filter=account_periods_t:period_id:name') }}",
        {  selected_value : '{{ $row["period_id"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop