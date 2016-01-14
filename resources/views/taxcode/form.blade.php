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
		<li><a href="{{ URL::to('taxcode?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'taxcode/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> TAX_CODE</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Taxcode Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Taxcode Id', (isset($fields['taxcode_id']['language'])? $fields['taxcode_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('taxcode_id', $row['taxcode_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax Class" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax Class', (isset($fields['taxclass_id']['language'])? $fields['taxclass_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='taxclass_id' rows='5' id='taxclass_id' class='select2 ' required  ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Taxcategory Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Taxcategory Id', (isset($fields['taxcategory_id']['language'])? $fields['taxcategory_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='taxcategory_id' rows='5' id='taxcategory_id' class='select2 ' required  ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Taxcode Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Taxcode Name', (isset($fields['taxcode_name']['language'])? $fields['taxcode_name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('taxcode_name', $row['taxcode_name'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Description" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Description', (isset($fields['description']['language'])? $fields['description']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('description', $row['description'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax Type" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax Type', (isset($fields['tax_type']['language'])? $fields['tax_type']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<label class='radio radio-inline'>
					<input type='radio' name='tax_type' value ='PC' required @if($row['tax_type'] == 'PC') checked="checked" @endif > Percentage </label>
					<label class='radio radio-inline'>
					<input type='radio' name='tax_type' value ='FX' required @if($row['tax_type'] == 'FX') checked="checked" @endif > Fixed Amount </label> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax Rate" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax Rate', (isset($fields['tax_rate']['language'])? $fields['tax_rate']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('tax_rate', $row['tax_rate'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax Precision" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax Precision', (isset($fields['tax_precision']['language'])? $fields['tax_precision']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('tax_precision', $row['tax_precision'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax Amount" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax Amount', (isset($fields['tax_amount']['language'])? $fields['tax_amount']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('tax_amount', $row['tax_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Start Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Start Date', (isset($fields['start_date']['language'])? $fields['start_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('start_date', $row['start_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="End Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('End Date', (isset($fields['end_date']['language'])? $fields['end_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('end_date', $row['end_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Active" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Active', (isset($fields['active']['language'])? $fields['active']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $active = explode(',',$row['active']);
					$active_opt = array( 'Y' => 'Yes' ,  'N' => 'No' , ); ?>
					<select name='active' rows='5' required  class='select2 '  > 
						<?php 
						foreach($active_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['active'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
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
					<button type="button" onclick="location.href='{{ URL::to('taxcode?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#taxclass_id").jCombo("{{ URL::to('taxcode/comboselect?filter=tax_class_t:taxclass_id:taxclass_name') }}",
        {  selected_value : '{{ $row["taxclass_id"] }}' });
        
        $("#taxcategory_id").jCombo("{{ URL::to('taxcode/comboselect?filter=tax_category_t:taxcategory_id:taxcategory_name') }}",
        {  selected_value : '{{ $row["taxcategory_id"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop