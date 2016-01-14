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
		<li><a href="{{ URL::to('supplier?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'supplier/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-4">
						<fieldset><legend> Supplier</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Supplier Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Supplier Id', (isset($fields['supplier_id']['language'])? $fields['supplier_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('supplier_id', $row['supplier_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Supplier Number" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Supplier Number', (isset($fields['supplier_number']['language'])? $fields['supplier_number']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('supplier_number', $row['supplier_number'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Supplier Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Supplier Name', (isset($fields['supplier_name']['language'])? $fields['supplier_name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('supplier_name', $row['supplier_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Supplier Type" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Supplier Type', (isset($fields['supplier_type_id']['language'])? $fields['supplier_type_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='supplier_type_id' rows='5' id='supplier_type_id' class='select2 '   ></select> 
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
						<fieldset><legend> Additonal</legend>
									
				  <div class="form-group  " > 
					<label for="Supplier Status" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Supplier Status', (isset($fields['supplier_status']['language'])? $fields['supplier_status']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $supplier_status = explode(',',$row['supplier_status']);
					$supplier_status_opt = array( 'A' => 'Active' ,  'I' => 'Inactive' , ); ?>
					<select name='supplier_status' rows='5'   class='select2 '  > 
						<?php 
						foreach($supplier_status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['supplier_status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="TIN NO" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('TIN NO', (isset($fields['TIN_NO']['language'])? $fields['TIN_NO']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('TIN_NO', $row['TIN_NO'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="PAN NO" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('PAN NO', (isset($fields['PAN_NO']['language'])? $fields['PAN_NO']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('PAN_NO', $row['PAN_NO'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="SERVICE TAXREG NO" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('SERVICE TAXREG NO', (isset($fields['SERVICE_TAXREG_NO']['language'])? $fields['SERVICE_TAXREG_NO']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('SERVICE_TAXREG_NO', $row['SERVICE_TAXREG_NO'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="EXCISE DUTY NO" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('EXCISE DUTY NO', (isset($fields['EXCISE_DUTY NO']['language'])? $fields['EXCISE_DUTY NO']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <textarea name='EXCISE_DUTY NO' rows='5' id='EXCISE_DUTY NO' class='form-control '  
				           >{{ $row['EXCISE_DUTY NO'] }}</textarea> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="CREDIT PERIOD" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('CREDIT PERIOD', (isset($fields['CREDIT_PERIOD']['language'])? $fields['CREDIT_PERIOD']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('CREDIT_PERIOD', $row['CREDIT_PERIOD'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Payment Method" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Payment Method', (isset($fields['payment_method']['language'])? $fields['payment_method']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('payment_method', $row['payment_method'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Payment Terms" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Payment Terms', (isset($fields['payment_terms']['language'])? $fields['payment_terms']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('payment_terms', $row['payment_terms'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			<div class="col-md-4">
						<fieldset><legend> .</legend>
									
				  <div class="form-group  " > 
					<label for="Default Pricelist Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Default Pricelist Id', (isset($fields['default_pricelist_id']['language'])? $fields['default_pricelist_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('default_pricelist_id', $row['default_pricelist_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Validation Status" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Validation Status', (isset($fields['validation_status']['language'])? $fields['validation_status']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('validation_status', $row['validation_status'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
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
					<button type="button" onclick="location.href='{{ URL::to('supplier?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#supplier_type_id").jCombo("{{ URL::to('supplier/comboselect?filter=supplier_type_t:supplier_type_id:supplier_type') }}",
        {  selected_value : '{{ $row["supplier_type_id"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop