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
		<li><a href="{{ URL::to('accountcategory?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'accountcategory/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> ACCOUNT_CATEGORY</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Accountcategory Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Accountcategory Id', (isset($fields['accountcategory_id']['language'])? $fields['accountcategory_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('accountcategory_id', $row['accountcategory_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Account Class" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Account Class', (isset($fields['accountclass_id']['language'])? $fields['accountclass_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='accountclass_id' rows='5' id='accountclass_id' class='select2 '   ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Accountcategory Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Accountcategory Name', (isset($fields['accountcategory_name']['language'])? $fields['accountcategory_name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('accountcategory_name', $row['accountcategory_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<button type="button" onclick="location.href='{{ URL::to('accountcategory?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#accountclass_id").jCombo("{{ URL::to('accountcategory/comboselect?filter=account_class_t:accountclass_id:accountclass_name') }}",
        {  selected_value : '{{ $row["accountclass_id"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop