
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'locationsassignments/save/'.SiteHelpers::encryptID($row['locationassignment_id']), 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'locationsassignmentsFormAjax')) !!}
			<div class="col-md-12">
						<fieldset><legend> LOCATIONS_ASSIGNMENTS</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Locationassignment Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Locationassignment Id', (isset($fields['locationassignment_id']['language'])? $fields['locationassignment_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('locationassignment_id', $row['locationassignment_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Location" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Location', (isset($fields['location_id']['language'])? $fields['location_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='location_id' rows='5' id='location_id' class='select2 ' required  ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Location For" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Location For', (isset($fields['location_for']['language'])? $fields['location_for']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $location_for = explode(',',$row['location_for']);
					$location_for_opt = array( 'C' => 'CUSTOMER' ,  'S' => 'SUPPLIER' ,  'E' => 'EMPLOY/EE' , ); ?>
					<select name='location_for' rows='5' required  class='select2 '  > 
						<?php 
						foreach($location_for_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['location_for'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Location Assigned Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Location Assigned Id', (isset($fields['location_assigned_id']['language'])? $fields['location_assigned_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('location_assigned_id', $row['location_assigned_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Location Designation" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Location Designation', (isset($fields['location_designation']['language'])? $fields['location_designation']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $location_designation = explode(',',$row['location_designation']);
					$location_designation_opt = array( 'S' => 'SHIP-TO' ,  'D' => 'DELIVER-TO' , ); ?>
					<select name='location_designation' rows='5' required  class='select2 '  > 
						<?php 
						foreach($location_designation_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['location_designation'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
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
					$active_opt = array( 'Y' => 'Yes' ,  'N' => 'NO' , ); ?>
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
					<button type="submit" class="btn btn-primary btn-sm "><i class="fa  fa-save "></i>  {{ Lang::get('core.sb_save') }} </button>
					<button type="button" onclick="ajaxViewClose('#{{ $pageModule }}')" class="btn btn-success btn-sm"><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
				</div>			
			</div> 		 
			{!! Form::close() !!}


@if($setting['form-method'] =='native')
	</div>	
</div>	
@endif	

	
</div>	
			 
<script type="text/javascript">
$(document).ready(function() { 
	
        $("#location_id").jCombo("{{ URL::to('locationsassignments/comboselect?filter=locations_t:location_id:location_name') }}",
        {  selected_value : '{{ $row["location_id"] }}' });
         
	
	$('.editor').summernote();
	$('.previewImage').fancybox();	
	$('.tips').tooltip();	
	$(".select2").select2({ width:"98%"});	
	$('.date').datepicker({format:'yyyy-mm-dd',autoClose:true})
	$('.datetime').datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'}); 
	$('input[type="checkbox"],input[type="radio"]').iCheck({
		checkboxClass: 'icheckbox_square-green',
		radioClass: 'iradio_square-green',
	});			
	$('.removeCurrentFiles').on('click',function(){
		var removeUrl = $(this).attr('href');
		$.get(removeUrl,function(response){});
		$(this).parent('div').empty();	
		return false;
	});			
	var form = $('#locationsassignmentsFormAjax'); 
	form.parsley();
	form.submit(function(){
		
		if(form.parsley('isValid') == true){			
			var options = { 
				dataType:      'json', 
				beforeSubmit :  showRequest,
				success:       showResponse  
			}  
			$(this).ajaxSubmit(options); 
			return false;
						
		} else {
			return false;
		}		
	
	});

});

function showRequest()
{
	$('.ajaxLoading').show();		
}  
function showResponse(data)  {		
	
	if(data.status == 'success')
	{
		ajaxViewClose('#{{ $pageModule }}');
		ajaxFilter('#{{ $pageModule }}','{{ $pageUrl }}/data');
		notyMessage(data.message);	
		$('#sximo-modal').modal('hide');	
	} else {
		notyMessageError(data.message);	
		$('.ajaxLoading').hide();
		return false;
	}	
}			 

</script>		 