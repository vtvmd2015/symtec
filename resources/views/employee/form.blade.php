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
		<li><a href="{{ URL::to('employee?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'employee/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-3">
						<fieldset><legend> Employee</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Employee Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Employee Id', (isset($fields['employee_id']['language'])? $fields['employee_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('employee_id', $row['employee_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Employee Number" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Employee Number', (isset($fields['employee_number']['language'])? $fields['employee_number']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('employee_number', $row['employee_number'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="First Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('First Name', (isset($fields['first_name']['language'])? $fields['first_name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('first_name', $row['first_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Last Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Last Name', (isset($fields['last_name']['language'])? $fields['last_name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('last_name', $row['last_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Title" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Title', (isset($fields['Title']['language'])? $fields['Title']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('Title', $row['Title'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Gender" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Gender', (isset($fields['gender']['language'])? $fields['gender']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $gender = explode(',',$row['gender']);
					$gender_opt = array( 'M' => 'Male' ,  'F' => 'Female' , ); ?>
					<select name='gender' rows='5'   class='select2 '  > 
						<?php 
						foreach($gender_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['gender'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	<a href="#" data-toggle="tooltip" placement="left" class="tips" title="Please Select Gender Type"><i class="icon-question2"></i></a>
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Emp Type Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Emp Type Id', (isset($fields['emp_type_id']['language'])? $fields['emp_type_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <textarea name='emp_type_id' rows='5' id='emp_type_id' class='form-control '  
				           >{{ $row['emp_type_id'] }}</textarea> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Birth Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Birth Date', (isset($fields['birth_date']['language'])? $fields['birth_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('birth_date', $row['birth_date'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Age" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Age', (isset($fields['age']['language'])? $fields['age']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('age', $row['age'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Additional</legend>
									
				  <div class="form-group  " > 
					<label for="Marital Status" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Marital Status', (isset($fields['marital_status']['language'])? $fields['marital_status']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $marital_status = explode(',',$row['marital_status']);
					$marital_status_opt = array( 'M' => 'Married' ,  'S' => 'Single' , ); ?>
					<select name='marital_status' rows='5'   class='select2 '  > 
						<?php 
						foreach($marital_status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['marital_status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	<a href="#" data-toggle="tooltip" placement="left" class="tips" title="Please Select Marital Status"><i class="icon-question2"></i></a>
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Country" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Country', (isset($fields['country']['language'])? $fields['country']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('country', $row['country'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Nationality" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Nationality', (isset($fields['nationality']['language'])? $fields['nationality']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('nationality', $row['nationality'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Street" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Street', (isset($fields['street']['language'])? $fields['street']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('street', $row['street'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Area" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Area', (isset($fields['area']['language'])? $fields['area']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('area', $row['area'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="City" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('City', (isset($fields['city']['language'])? $fields['city']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('city', $row['city'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Building Detail" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Building Detail', (isset($fields['building_detail']['language'])? $fields['building_detail']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('building_detail', $row['building_detail'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="State" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('State', (isset($fields['state']['language'])? $fields['state']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('state', $row['state'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> .</legend>
									
				  <div class="form-group  " > 
					<label for="Date Of Joining" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Date Of Joining', (isset($fields['date_of_joining']['language'])? $fields['date_of_joining']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('date_of_joining', $row['date_of_joining'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Pf No" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Pf No', (isset($fields['pf_no']['language'])? $fields['pf_no']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('pf_no', $row['pf_no'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Pan No" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Pan No', (isset($fields['pan_no']['language'])? $fields['pan_no']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('pan_no', $row['pan_no'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Date Of Releiving" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Date Of Releiving', (isset($fields['date_of_releiving']['language'])? $fields['date_of_releiving']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('date_of_releiving', $row['date_of_releiving'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> .</legend>
									
				  <div class="form-group  " > 
					<label for="Bank Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Bank Name', (isset($fields['bank_name']['language'])? $fields['bank_name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('bank_name', $row['bank_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Bank Branch" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Bank Branch', (isset($fields['bank_branch']['language'])? $fields['bank_branch']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('bank_branch', $row['bank_branch'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Bank Ifsc Code" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Bank Ifsc Code', (isset($fields['bank_ifsc_code']['language'])? $fields['bank_ifsc_code']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('bank_ifsc_code', $row['bank_ifsc_code'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Bank Acc No" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Bank Acc No', (isset($fields['bank_acc_no']['language'])? $fields['bank_acc_no']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('bank_acc_no', $row['bank_acc_no'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			

			

	@if($subgrid['access']['is_add'] == '1')				
	<hr /><div class="clr clear"></div>	
	
	<h5> Employee Assignments </h5>
	
	<div class="table-responsive">
	    <table class="table table-striped ">
	        <thead>
				<tr>
					@foreach ($subgrid['tableGrid'] as $t)
						@if($t['view'] =='1' && $t['field'] !='employee_id')
							<th>
							{{ SiteHelpers::activeLang($t['label'],(isset($t['language'])? $t['language'] : array())) }}
							</th>
						@endif
					@endforeach
					<th></th>	
				  </tr>

	        </thead>

        <tbody>
        @if(count($subgrid['rowData'])>=1)
            @foreach ($subgrid['rowData'] as $rows)
	            <tr class="clone clonedInput">									
					 @foreach ($subgrid['tableGrid'] as $field)
						 @if($field['view'] =='1' && $field['field'] !='employee_id')
						 <td>					 
						 	{!! SiteHelpers::bulkForm($field['field'] , $subgrid['tableForm'] , $rows->$field['field']) !!}							 
						 </td>
						 @endif					 
					 
					 @endforeach
					 <td>
					 	<a onclick=" $(this).parents('.clonedInput').remove(); return false" href="#" class="remove btn btn-xs btn-danger">-</a>
					 	<input type="hidden" name="counter[]">
					 </td>
				</tr>  
			@endforeach
			

		@else

            <tr class="clone clonedInput">								
			 @foreach ($subgrid['tableGrid'] as $field)

				 @if($field['view'] =='1' && $field['field'] !='employee_id')
				 <td>					 
				 	{!! SiteHelpers::bulkForm($field['field'] , $subgrid['tableForm'] ) !!}							 
				 </td>
				 @endif					 
			 
			 @endforeach
				 <td>
				 	<a onclick=" $(this).parents('.clonedInput').remove(); return false" href="#" class="remove btn btn-xs btn-danger">-</a>
				 	<input type="hidden" name="counter[]">
				 </td>
			
			</tr> 	
		@endif	


        </tbody>	

     	</table>  
    	<input type="hidden" name="enable-masterdetail" value="true">
    </div><br /><br />
     
     <a href="javascript:void(0);" class="addC btn btn-xs btn-info" rel=".clone"><i class="fa fa-plus"></i> New Item</a>
     <hr />		
	@endif
     
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('employee?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		$('.addC').relCopy({});
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop