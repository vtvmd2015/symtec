
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'salaryentry/save/'.SiteHelpers::encryptID($row['salary_id']), 'class'=>'form-vertical','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'salaryentryFormAjax')) !!}
			<div class="col-md-3">
						<fieldset><legend> Salary Entry</legend>
									<div class="data"></div>
				  <div class="form-group hidethis " style="display:none;">
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Salary Id', (isset($fields['salary_id']['language'])? $fields['salary_id']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('salary_id', $row['salary_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Period', (isset($fields['period_id']['language'])? $fields['period_id']['language'] : array())) !!}		
					 <span class="asterix"> * </span>  </label>									
					  <select name='period_id' rows='5' id='period_id' class='select2 ' required  ></select> 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Employee Name', (isset($fields['employee_id']['language'])? $fields['employee_id']['language'] : array())) !!}		
					 <span class="asterix"> * </span>  </label>									
					  <select name='employee_id' rows='5' id='employee_id' class='select2 ' required  ></select> 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Basic', (isset($fields['basic']['language'])? $fields['basic']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('basic', $row['basic'],array('class'=>'form-control basic amt', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Conveyence', (isset($fields['conveyence']['language'])? $fields['conveyence']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('conveyence', $row['conveyence'],array('class'=>'form-control conveyence amt', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Other Allowence', (isset($fields['other_allowence']['language'])? $fields['other_allowence']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('other_allowence', $row['other_allowence'],array('class'=>'form-control other_allowence amt', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Amount', (isset($fields['amount']['language'])? $fields['amount']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('amount', $row['amount'],array('class'=>'form-control amount', 'placeholder'=>'', 'readonly'=>1  )) !!} 						
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Additional</legend>
									
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Days', (isset($fields['days']['language'])? $fields['days']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('days', 0,array('class'=>'form-control days', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Total Leave', (isset($fields['total_leave']['language'])? $fields['total_leave']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('total_leave', $row['total_leave'],array('class'=>'form-control total_leave', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Salary', (isset($fields['salary']['language'])? $fields['salary']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('salary', $row['salary'],array('class'=>'form-control salary', 'placeholder'=>'','readonly'=>1   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('ESI  Basic', (isset($fields['esi_basic']['language'])? $fields['esi_basic']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('esi_basic', 0,array('class'=>'form-control esi', 'placeholder'=>'', 'readonly'=>1  )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('PF  Basic', (isset($fields['pf_basic']['language'])? $fields['pf_basic']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('pf_basic', $row['pf_basic'],array('class'=>'form-control pf', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('OT Hrs', (isset($fields['ot_hrs']['language'])? $fields['ot_hrs']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('ot_hrs', 0,array('class'=>'form-control ot_hrs', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('OT Amount', (isset($fields['ot_amount']['language'])? $fields['ot_amount']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('ot_amount', $row['ot_amount'],array('class'=>'form-control ot_amount', 'placeholder'=>'','readonly'=>1    )) !!} 						
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Deduction</legend>
									
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('ESI Percentage', (isset($fields['esi_percentage']['language'])? $fields['esi_percentage']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('esi_percentage', 0,array('class'=>'form-control esi_percentage', 'placeholder'=>'', 'readonly'=>1  )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('PF Percentage', (isset($fields['pf_percentage']['language'])? $fields['pf_percentage']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('pf_percentage', $row['pf_percentage'],array('class'=>'form-control pf_percentage', 'placeholder'=>'','readonly'=>1   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Leave Amount', (isset($fields['leave_amount']['language'])? $fields['leave_amount']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('leave_amount', $row['leave_amount'],array('class'=>'form-control leave_amount', 'placeholder'=>'','readonly'=>1   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Advance', (isset($fields['advance']['language'])? $fields['advance']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('advance', $row['advance'],array('class'=>'form-control advance', 'placeholder'=>'',   )) !!} 						
				  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Payment</legend>
									
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Net Wages', (isset($fields['net_wages']['language'])? $fields['net_wages']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('net_wages', 0,array('class'=>'form-control net_wages', 'placeholder'=>'','readonly'=>1   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Payment Mode', (isset($fields['payment_mode']['language'])? $fields['payment_mode']['language'] : array())) !!}		
					 <span class="asterix"> * </span>  </label>									
					  
					<?php $payment_mode = explode(',',$row['payment_mode']);
					$payment_mode_opt = array( 'CASH' => 'CASH' ,  'ONLINE' => 'ONLINE' , ); ?>
					<select name='payment_mode' rows='5' required  class='select2 '  > 
						<?php 
						foreach($payment_mode_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['payment_mode'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Payment Reference', (isset($fields['payment_reference']['language'])? $fields['payment_reference']['language'] : array())) !!}		
					   </label>									
					  {!! Form::text('payment_reference', $row['payment_reference'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label ">
						{!! SiteHelpers::activeLang('Salary Entry Date', (isset($fields['salary_entry_date']['language'])? $fields['salary_entry_date']['language'] : array())) !!}		
					   </label>									
					  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('salary_entry_date', $row['salary_entry_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
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
	
        $("#period_id").jCombo("{{ URL::to('salaryentry/comboselect?filter=account_periods_t:period_id:name') }}",
        {  selected_value : '{{ $row["period_id"] }}' });
        
        $("#employee_id").jCombo("{{ URL::to('salaryentry/comboselect?filter=employee_t:employee_id:first_name|last_name') }}",
        {  selected_value : '{{ $row["employee_id"] }}' });
         
	 $("#employee_id").click(function () {
        var id = $("#employee_id").val();
	
		$.get( 'salaryentry/record?id='+id ,function( data ) {
			jdata = jQuery.parseJSON(data);
			$('.ajaxLoading').hide();
			
			$(".basic").val(jdata[0].BASIC);
			$(".conveyence").val(jdata[0].CONVEYANCE);
			$(".other_allowence").val(jdata[0].OTHER_ALLOWENCE);
			//$(".esi").val(jdata[0].esi_apply);
			//$(".esi_percentage").val(jdata[0].esi_percentage);
			//$(".pf").val(jdata[0].pf_apply);
			//$(".pf_percentage").val(jdata[0].pf_percentage);
			$(".ot").val(jdata[0].ot_apply);
			
			calAmount();
			calSalary();			
			calOTamount();
			});
			}
		);
		
		$(".amt").change(function(){
				calAmount();
				calLeaveAmt();
				calNetWage();
		});
		$(".amt,.days").change(function(){
				calSalary();
				calESI();
				calPF();
				calNetWage();
		});
		$(".ot_hrs").change(function(){
				calOTamount();
				calESI();
				calNetWage();
		});
		
		$(".total_leave").change(function(){
				calLeaveAmt();
		});
		$(".advance").change(function(){
				calNetWage();
		});
		
		
		function calAmount(){
			var amount = parseFloat($(".basic").val())+parseFloat($(".conveyence").val())+parseFloat($(".other_allowence").val());
			$(".amount").val(amount);
		}
		function calSalary(){
			var Wage = ($(".amount").val())/30;	
			var salary = ((Wage)*parseFloat($(".days").val()));
				$(".salary").val(salary.toFixed(2));
				return salary;
		}
		function calOTamount(){
			var Wage = ($(".amount").val())/30;
			var Wageperhour = Wage/8;	
			var OT = (Wageperhour*1.5*(parseFloat($(".ot_hrs").val())));
				$(".ot_amount").val(OT.toFixed(2));
			return OT;	
		}
        function calESI(){
			var ESIbasic = (calSalary() + calOTamount()).toFixed(2);
			$(".esi").val(ESIbasic);
			var ESI = ((ESIbasic/100)*1.75).toFixed(2);
			$(".esi_percentage").val(ESI);
			return ESI;
		}
		function calPF(){
			var PFbasic = ((parseFloat($(".basic").val())/30)*parseFloat($(".days").val())).toFixed(2);
			$(".pf").val(PFbasic);
			var PF = ((PFbasic/100)*12).toFixed(2);
			$(".pf_percentage").val(PF);
			return PF;
		}
		function calLeaveAmt(){
			var Wage = ($(".amount").val())/30;
			var leaveAmt = ((Wage * parseFloat($(".total_leave").val()))-Wage).toFixed(2);
			$(".leave_amount").val(leaveAmt);
		}
		function calNetWage(){
			var NetWage = parseFloat($(".salary").val())+parseFloat($(".ot_amount").val())-parseFloat($(".esi_percentage").val())-parseFloat($(".pf_percentage").val())-($(".advance").val());
			$(".net_wages").val(Math.round(NetWage));
		}
		
		
		
		
        
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
	var form = $('#salaryentryFormAjax'); 
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