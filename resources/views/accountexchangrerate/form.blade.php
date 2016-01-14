
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'accountexchangrerate/save/'.SiteHelpers::encryptID($row['exchangerate_id']), 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'accountexchangrerateFormAjax')) !!}
			<div class="col-md-12">
						<fieldset><legend> ACCOUNT_EXCHANGRERATE</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Exchangerate Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Exchangerate Id', (isset($fields['exchangerate_id']['language'])? $fields['exchangerate_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('exchangerate_id', $row['exchangerate_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="From Currency" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('From Currency', (isset($fields['from_currency']['language'])? $fields['from_currency']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='from_currency' rows='5' id='from_currency' class='select2 '   ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="To Currency" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('To Currency', (isset($fields['to_currency']['language'])? $fields['to_currency']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='to_currency' rows='5' id='to_currency' class='select2 '   ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="From Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('From Date', (isset($fields['from_date']['language'])? $fields['from_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('from_date', $row['from_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="To Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('To Date', (isset($fields['to_date']['language'])? $fields['to_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('to_date', $row['to_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Conversion Rate" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Conversion Rate', (isset($fields['conversion_rate']['language'])? $fields['conversion_rate']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('conversion_rate', $row['conversion_rate'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
	
        $("#from_currency").jCombo("{{ URL::to('accountexchangrerate/comboselect?filter=account_currency_t:currecncy_id:currency_code') }}",
        {  selected_value : '{{ $row["from_currency"] }}' });
        
        $("#to_currency").jCombo("{{ URL::to('accountexchangrerate/comboselect?filter=account_currency_t:currecncy_id:currency_code') }}",
        {  selected_value : '{{ $row["to_currency"] }}' });
         
	
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
	var form = $('#accountexchangrerateFormAjax'); 
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