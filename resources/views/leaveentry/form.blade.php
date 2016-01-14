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
		<li><a href="{{ URL::to('leaveentry?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'leaveentry/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> leaveentry</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Leave Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Leave Id', (isset($fields['leave_id']['language'])? $fields['leave_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('leave_id', $row['leave_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<label for="Leave Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Leave Date', (isset($fields['leave_date']['language'])? $fields['leave_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('leave_date', $row['leave_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Leave Resaon" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Leave Resaon', (isset($fields['leave_resaon']['language'])? $fields['leave_resaon']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('leave_resaon', $row['leave_resaon'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Leave Approval Status" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Leave Approval Status', (isset($fields['leave_approved']['language'])? $fields['leave_approved']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $leave_approved = explode(',',$row['leave_approved']);
					$leave_approved_opt = array( 'A' => 'Approved' ,  'R' => 'Rejected' ,  'H' => 'Hold/Pending' ,  'I' => 'Initiated' , ); ?>
					<select name='leave_approved' rows='5'   class='select2 '  > 
						<?php 
						foreach($leave_approved_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['leave_approved'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Approval Reason" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Approval Reason', (isset($fields['approval_reason']['language'])? $fields['approval_reason']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('approval_reason', $row['approval_reason'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<button type="button" onclick="location.href='{{ URL::to('leaveentry?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#employee_id").jCombo("{{ URL::to('leaveentry/comboselect?filter=employee_t:employee_id:first_name|last_name') }}",
        {  selected_value : '{{ $row["employee_id"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop