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
		<li><a href="{{ URL::to('paycompoassign?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'paycompoassign/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> PAYCOMPO_ASSIGN</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Paycombonent Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Paycombonent Id', (isset($fields['paycombonent_id']['language'])? $fields['paycombonent_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('paycombonent_id', $row['paycombonent_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<label for="Compotype Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Compotype Id', (isset($fields['compotype_id']['language'])? $fields['compotype_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <textarea name='compotype_id' rows='5' id='compotype_id' class='form-control '  
				           >{{ $row['compotype_id'] }}</textarea> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Wages" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Wages', (isset($fields['wages']['language'])? $fields['wages']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('wages', $row['wages'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					{!! Form::text('start_date', $row['start_date'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
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
					{!! Form::text('end_date', $row['end_date'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
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
					<button type="button" onclick="location.href='{{ URL::to('paycompoassign?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#employee_id").jCombo("{{ URL::to('paycompoassign/comboselect?filter=employee_t:employee_id:first_name|last_name') }}",
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