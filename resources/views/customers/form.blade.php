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
		<li><a href="{{ URL::to('customers?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'customers/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-4">
						<fieldset><legend> customers</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Customer Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Customer Id', (isset($fields['customer_id']['language'])? $fields['customer_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('customer_id', $row['customer_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Customer Number" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Customer Number', (isset($fields['customer_number']['language'])? $fields['customer_number']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <textarea name='customer_number' rows='5' id='customer_number' class='form-control '  
				           >{{ $row['customer_number'] }}</textarea> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Customer Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Customer Name', (isset($fields['customer_name']['language'])? $fields['customer_name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('customer_name', $row['customer_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Customer Type" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Customer Type', (isset($fields['customer_type_id']['language'])? $fields['customer_type_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='customer_type_id' rows='5' id='customer_type_id' class='select2 '   ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Address1" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Address1', (isset($fields['address1']['language'])? $fields['address1']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('address1', $row['address1'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<label for="State" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('State', (isset($fields['state']['language'])? $fields['state']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('state', $row['state'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
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
				  </div> </fieldset>
			</div>
			
			<div class="col-md-4">
						<fieldset><legend> Additional</legend>
									
				  <div class="form-group  " > 
					<label for="Status" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $status = explode(',',$row['status']);
					$status_opt = array( 'A' => 'Active' ,  'I' => 'Inactive' , ); ?>
					<select name='status' rows='5'   class='select2 '  > 
						<?php 
						foreach($status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Billing Limit" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Billing Limit', (isset($fields['billing_limit']['language'])? $fields['billing_limit']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <textarea name='billing_limit' rows='5' id='billing_limit' class='form-control '  
				           >{{ $row['billing_limit'] }}</textarea> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Pay Atten" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Pay Atten', (isset($fields['pay_atten']['language'])? $fields['pay_atten']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('pay_atten', $row['pay_atten'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			<div class="col-md-4">
						<fieldset><legend> .</legend>
									
				  <div class="form-group  " > 
					<label for="Contact Email" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Contact Email', (isset($fields['contact_email']['language'])? $fields['contact_email']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('contact_email', $row['contact_email'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Contact Phone" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Contact Phone', (isset($fields['contact_phone']['language'])? $fields['contact_phone']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('contact_phone', $row['contact_phone'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<button type="button" onclick="location.href='{{ URL::to('customers?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#customer_type_id").jCombo("{{ URL::to('customers/comboselect?filter=customer_types_t:customer_type_id:customer_type') }}",
        {  selected_value : '{{ $row["customer_type_id"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop