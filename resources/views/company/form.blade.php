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
		<li><a href="{{ URL::to('company?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'company/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> company</legend>
									
				  <div class="form-group  " > 
					<label for="Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Name', (isset($fields['name']['language'])? $fields['name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('name', $row['name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Currency Code" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Currency Code', (isset($fields['currency_code']['language'])? $fields['currency_code']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='currency_code' rows='5' id='currency_code' class='select2 ' required  ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Reporting Currency" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Reporting Currency', (isset($fields['reporting_currency']['language'])? $fields['reporting_currency']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='reporting_currency' rows='5' id='reporting_currency' class='select2 ' required  ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Company Additional Details" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Company Additional Details', (isset($fields['company_additional']['language'])? $fields['company_additional']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('company_additional', $row['company_additional'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<button type="button" onclick="location.href='{{ URL::to('company?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#currency_code").jCombo("{{ URL::to('company/comboselect?filter=account_currency_t:currecncy_id:currency_code') }}",
        {  selected_value : '{{ $row["currency_code"] }}' });
        
        $("#reporting_currency").jCombo("{{ URL::to('company/comboselect?filter=account_currency_t:currecncy_id:currency_code') }}",
        {  selected_value : '{{ $row["reporting_currency"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop