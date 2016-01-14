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
		<li><a href="{{ URL::to('taxgroupsdetails?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'taxgroupsdetails/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> TAX_GROUPS_DETAILS</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Taxgroupdetail Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Taxgroupdetail Id', (isset($fields['taxgroupdetail_id']['language'])? $fields['taxgroupdetail_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('taxgroupdetail_id', $row['taxgroupdetail_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Taxgroup Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Taxgroup Id', (isset($fields['taxgroup_id']['language'])? $fields['taxgroup_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('taxgroup_id', $row['taxgroup_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax Transaction Class" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax Transaction Class', (isset($fields['taxclass_id']['language'])? $fields['taxclass_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='taxclass_id' rows='5' id='taxclass_id' class='select2 '   ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax Category" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax Category', (isset($fields['taxcategory_id']['language'])? $fields['taxcategory_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='taxcategory_id' rows='5' id='taxcategory_id' class='select2 '   ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax  Slab%" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax  Slab%', (isset($fields['taxcode_id']['language'])? $fields['taxcode_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='taxcode_id' rows='5' id='taxcode_id' class='select2 '   ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Seq Apply" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Seq Apply', (isset($fields['seq_apply']['language'])? $fields['seq_apply']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('seq_apply', $row['seq_apply'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Start Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Start Date', (isset($fields['start_date']['language'])? $fields['start_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('start_date', $row['start_date'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="End Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('End Date', (isset($fields['end_date']['language'])? $fields['end_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('end_date', $row['end_date'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<select name='active' rows='5'   class='select2 '  > 
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
					<button type="button" onclick="location.href='{{ URL::to('taxgroupsdetails?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#taxclass_id").jCombo("{{ URL::to('taxgroupsdetails/comboselect?filter=tax_class_t:taxclass_id:taxclass_name') }}",
        {  selected_value : '{{ $row["taxclass_id"] }}' });
        
        $("#taxcategory_id").jCombo("{{ URL::to('taxgroupsdetails/comboselect?filter=tax_category_t:taxcategory_id:taxcategory_name') }}",
        {  selected_value : '{{ $row["taxcategory_id"] }}' });
        
        $("#taxcode_id").jCombo("{{ URL::to('taxgroupsdetails/comboselect?filter=tax_code_t:taxcode_id:taxcode_name') }}",
        {  selected_value : '{{ $row["taxcode_id"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop