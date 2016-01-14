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
		<li><a href="{{ URL::to('salaryentry?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'salaryentry/save?return='.$return, 'class'=>'form-vertical','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-3">
						<fieldset><legend> Salary Entry</legend>
									
				  <div class="form-group hidethis " style="display:none;">
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Salary Id', (isset($fields['salary_id']['language'])? $fields['salary_id']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('salary_id', $row['salary_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Period', (isset($fields['period_id']['language'])? $fields['period_id']['language'] : array())) !!}		
					 <span class="asterix"> * </span>  </label>									
					  <select name='period_id' rows='5' id='period_id' class='select2 ' required  ></select> 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Employee Name', (isset($fields['employee_id']['language'])? $fields['employee_id']['language'] : array())) !!}		
					 <span class="asterix"> * </span>  </label>									
					  <select name='employee_id' rows='5' id='employee_id' class='select2 vijayempid_c' required  ></select> 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Basic', (isset($fields['basic']['language'])? $fields['basic']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('basic', $row['basic'],array('class'=>'form-control vijaybasic_c', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Conveyence', (isset($fields['conveyence']['language'])? $fields['conveyence']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('conveyence', $row['conveyence'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Other Allowence', (isset($fields['other_allowence']['language'])? $fields['other_allowence']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('other_allowence', $row['other_allowence'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Amount', (isset($fields['amount']['language'])? $fields['amount']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('amount', $row['amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Additional</legend>
									
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Days', (isset($fields['days']['language'])? $fields['days']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('days', $row['days'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Total Leave', (isset($fields['total_leave']['language'])? $fields['total_leave']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('total_leave', $row['total_leave'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Salary', (isset($fields['salary']['language'])? $fields['salary']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('salary', $row['salary'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('ESI  Basic', (isset($fields['esi_basic']['language'])? $fields['esi_basic']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('esi_basic', $row['esi_basic'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('PF  Basic', (isset($fields['pf_basic']['language'])? $fields['pf_basic']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('pf_basic', $row['pf_basic'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('OT Hrs', (isset($fields['ot_hrs']['language'])? $fields['ot_hrs']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('ot_hrs', $row['ot_hrs'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('OT Amount', (isset($fields['ot_amount']['language'])? $fields['ot_amount']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('ot_amount', $row['ot_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Deduction</legend>
									
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('ESI Percentage', (isset($fields['esi_percentage']['language'])? $fields['esi_percentage']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('esi_percentage', $row['esi_percentage'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('PF Percentage', (isset($fields['pf_percentage']['language'])? $fields['pf_percentage']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('pf_percentage', $row['pf_percentage'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Leave Amount', (isset($fields['leave_amount']['language'])? $fields['leave_amount']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('leave_amount', $row['leave_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Advance', (isset($fields['advance']['language'])? $fields['advance']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('advance', $row['advance'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Payment</legend>
									
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Net Wages', (isset($fields['net_wages']['language'])? $fields['net_wages']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('net_wages', $row['net_wages'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Payment Mode', (isset($fields['payment_mode']['language'])? $fields['payment_mode']['language'] : array())) !!}		
					 <span class="asterix"> * </span>  </label>									
					  
					<?php $payment_mode = explode(',',$row['payment_mode']);
					$payment_mode_opt = array( 'CASH' => 'CASH' ,  'ONLINE' => 'ONLINE' , ); ?>
					<select name='payment_mode' rows='5' required  class='select2 '  > 
						<?php 
						foreach($payment_mode_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['payment_mode'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Payment Reference', (isset($fields['payment_reference']['language'])? $fields['payment_reference']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('payment_reference', $row['payment_reference'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Salary Entry Date', (isset($fields['salary_entry_date']['language'])? $fields['salary_entry_date']['language'] : array())) !!}		
					   </label>									
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('salary_entry_date', $row['salary_entry_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 						
				  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('salaryentry?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#period_id").jCombo("{{ URL::to('salaryentry/comboselect?filter=account_periods_t:period_id:name') }}",
        {  selected_value : '{{ $row["period_id"] }}' });
        
        $("#employee_id").jCombo("{{ URL::to('salaryentry/comboselect?filter=employee_t:employee_id:first_name|last_name') }}",
        {  selected_value : '{{ $row["employee_id"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
		
		
		$('.vijayempid_c').on('change',function(){
			
			//alert("test");
			var employee_id = $(this).val();
			alert(employee_id);
						
			//how to pass to query and get values?......				
				 jQuery.ajax({
            url:'/flyout/' + reviewID,
            type: 'GET',
            success: function( data ){
                alert('Success Alert');
                console.log(data);
            }
        });
							
			
			
			return false;
		});		
		
    
					
			
							

  
  
	});
	</script>		 
@stop