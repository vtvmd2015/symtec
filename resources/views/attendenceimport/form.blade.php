
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'attendenceimport/save/'.SiteHelpers::encryptID($row['import_id']), 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'attendenceimportFormAjax')) !!}
			<div class="col-md-12">
						<fieldset><legend> ATTENDENCE_IMPORT</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Import Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Import Id', (isset($fields['import_id']['language'])? $fields['import_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('import_id', $row['import_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Emp Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Emp Name', (isset($fields['emp_name']['language'])? $fields['emp_name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <input type="text" name='emp_name' rows='5' id='emp_name' class='form-control' value='{{ $row['emp_name'] }}'/>
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Month" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Month', (isset($fields['month']['language'])? $fields['month']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $month = explode(',',$row['month']);
					$month_opt = array( 'november' => 'November' ,  'december' => 'December' , ); ?>
					<select name='month' rows='5'   class='select2 '  > 
						<?php 
						foreach($month_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['month'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Job No" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Job No', (isset($fields['job_no']['language'])? $fields['job_no']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <input type="text" name='job_no' rows='5' id='job_no' class='form-control' value='{{ $row['job_no'] }}' /> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Department" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Department', (isset($fields['department']['language'])? $fields['department']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <input type="text" name='department' rows='5' id='department' class='form-control ' value='{{ $row['department'] }}' /> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Time" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Time', (isset($fields['time']['language'])? $fields['time']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <input type="text" name='time' rows='5' id='time' class='form-control '   value='{{ $row['time'] }}' /> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('date', $row['date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Status" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<label class='radio radio-inline'>
					<input type='radio' name='status' value ='0'  @if($row['status'] == '0') checked="checked" @endif > UNSELECT </label>
					<label class='radio radio-inline'>
					<input type='radio' name='status' value ='1'  @if($row['status'] == '1') checked="checked" @endif > SELECT </label> 
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
					<button type="button" onclick="ajaxViewClose('#{{ $pageModule }}')" class="btn btn-success btn-sm close"><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
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
	var form = $('#attendenceimportFormAjax'); 
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