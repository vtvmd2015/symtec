
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'salaryreview/save/'.SiteHelpers::encryptID($row['salary_id']), 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'salaryreviewFormAjax')) !!}
			<div class="col-md-3">
						<fieldset><legend> Salary Review</legend>
									
				  <div class="form-group hidethis " style="display:none;"> 
					<label for="Salary Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Salary Id', (isset($fields['salary_id']['language'])? $fields['salary_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('salary_id', $row['salary_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Period " class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Period ', (isset($fields['period_id']['language'])? $fields['period_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('period_id', $row['period_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Employee Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Employee Name', (isset($fields['employee_id']['language'])? $fields['employee_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  <select name='employee_id' rows='5' id='employee_id' class='select2 ' required  ></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Basic" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Basic', (isset($fields['basic']['language'])? $fields['basic']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('basic', $row['basic'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Conveyence" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Conveyence', (isset($fields['conveyence']['language'])? $fields['conveyence']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('conveyence', $row['conveyence'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Other Allowence" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Other Allowence', (isset($fields['other_allowence']['language'])? $fields['other_allowence']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('other_allowence', $row['other_allowence'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Amount" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Amount', (isset($fields['amount']['language'])? $fields['amount']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('amount', $row['amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Additional</legend>
									
				  <div class="form-group  " > 
					<label for="Days" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Days', (isset($fields['days']['language'])? $fields['days']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('days', $row['days'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Total Leave" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Total Leave', (isset($fields['total_leave']['language'])? $fields['total_leave']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('total_leave', $row['total_leave'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Salary" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Salary', (isset($fields['salary']['language'])? $fields['salary']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('salary', $row['salary'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="ESI Basic" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('ESI Basic', (isset($fields['esi_basic']['language'])? $fields['esi_basic']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('esi_basic', $row['esi_basic'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="PF Basic" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('PF Basic', (isset($fields['pf_basic']['language'])? $fields['pf_basic']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('pf_basic', $row['pf_basic'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Ot Hrs" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Ot Hrs', (isset($fields['ot_hrs']['language'])? $fields['ot_hrs']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('ot_hrs', $row['ot_hrs'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Ot Amount" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Ot Amount', (isset($fields['ot_amount']['language'])? $fields['ot_amount']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('ot_amount', $row['ot_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Deduction</legend>
									
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
					<label for="Advance" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Advance', (isset($fields['advance']['language'])? $fields['advance']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('advance', $row['advance'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Leave Amount" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Leave Amount', (isset($fields['leave_amount']['language'])? $fields['leave_amount']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('leave_amount', $row['leave_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Payment</legend>
									
				  <div class="form-group  " > 
					<label for="Net Wages" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Net Wages', (isset($fields['net_wages']['language'])? $fields['net_wages']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('net_wages', $row['net_wages'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Payment Mode" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Payment Mode', (isset($fields['payment_mode']['language'])? $fields['payment_mode']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  
					<?php $payment_mode = explode(',',$row['payment_mode']);
					$payment_mode_opt = array( 'cash' => 'CASH' ,  'online' => 'ONLINE' , ); ?>
					<select name='payment_mode' rows='5' required  class='select2 '  > 
						<?php 
						foreach($payment_mode_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['payment_mode'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Payment Reference" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Payment Reference', (isset($fields['payment_reference']['language'])? $fields['payment_reference']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('payment_reference', $row['payment_reference'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Salary Entry Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Salary Entry Date', (isset($fields['salary_entry_date']['language'])? $fields['salary_entry_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('salary_entry_date', $row['salary_entry_date'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
	
        $("#employee_id").jCombo("{{ URL::to('salaryreview/comboselect?filter=employee_t:employee_id:first_name|last_name') }}",
        {  selected_value : '{{ $row["employee_id"] }}' });
         
	
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
	var form = $('#salaryreviewFormAjax'); 
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