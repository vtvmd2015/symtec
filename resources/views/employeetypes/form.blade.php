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
		<li><a href="{{ URL::to('employeetypes?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'employeetypes/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> EMPLOYEE TYPES</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Emp Type Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Emp Type Id', (isset($fields['emp_type_id']['language'])? $fields['emp_type_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('emp_type_id', $row['emp_type_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="EmployeeType" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('EmployeeType', (isset($fields['emp_type']['language'])? $fields['emp_type']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('emp_type', $row['emp_type'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<label for="ESI Apply" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('ESI Apply', (isset($fields['esi_apply']['language'])? $fields['esi_apply']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $esi_apply = explode(',',$row['esi_apply']);
					$esi_apply_opt = array( 'Y' => 'Yes' ,  'N' => 'No' , ); ?>
					<select name='esi_apply' rows='5'   class='select2 '  > 
						<?php 
						foreach($esi_apply_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['esi_apply'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="ESI Percentage" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('ESI Percentage', (isset($fields['esi_percentage']['language'])? $fields['esi_percentage']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('esi_percentage', $row['esi_percentage'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="PF Apply" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('PF Apply', (isset($fields['pf_apply']['language'])? $fields['pf_apply']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $pf_apply = explode(',',$row['pf_apply']);
					$pf_apply_opt = array( 'Y' => 'Yes' ,  'N' => 'No' , ); ?>
					<select name='pf_apply' rows='5'   class='select2 '  > 
						<?php 
						foreach($pf_apply_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['pf_apply'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="PF Percentage" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('PF Percentage', (isset($fields['pf_percentage']['language'])? $fields['pf_percentage']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('pf_percentage', $row['pf_percentage'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="OT Apply" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('OT Apply', (isset($fields['ot_apply']['language'])? $fields['ot_apply']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $ot_apply = explode(',',$row['ot_apply']);
					$ot_apply_opt = array( 'Y' => 'Yes' ,  'N' => 'No' , ); ?>
					<select name='ot_apply' rows='5'   class='select2 '  > 
						<?php 
						foreach($ot_apply_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['ot_apply'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="TDS Apply" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('TDS Apply', (isset($fields['tds_apply']['language'])? $fields['tds_apply']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $tds_apply = explode(',',$row['tds_apply']);
					$tds_apply_opt = array( 'Y' => 'Yes' ,  'N' => 'No' , ); ?>
					<select name='tds_apply' rows='5'   class='select2 '  > 
						<?php 
						foreach($tds_apply_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['tds_apply'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
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
					<button type="button" onclick="location.href='{{ URL::to('employeetypes?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop