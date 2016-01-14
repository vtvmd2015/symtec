@if($setting['view-method'] =='native')
<div class="sbox">
	<div class="sbox-title">  
		<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
			<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')">
			<i class="fa fa fa-times"></i></a>
		</h4>
	 </div>

	<div class="sbox-content"> 
@endif	

		<table class="table table-striped table-bordered" >
			<tbody>	
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Employee Name', (isset($fields['employee_id']['language'])? $fields['employee_id']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->employee_id,'employee_id','1:employee_t:employee_id:first_name|last_name') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Basic Salary', (isset($fields['basic']['language'])? $fields['basic']['language'] : array())) }}	
						</td>
						<td>{{ $row->basic }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Conveyence', (isset($fields['conveyence']['language'])? $fields['conveyence']['language'] : array())) }}	
						</td>
						<td>{{ $row->conveyence }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Other Allowence', (isset($fields['other_allowence']['language'])? $fields['other_allowence']['language'] : array())) }}	
						</td>
						<td>{{ $row->other_allowence }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Period', (isset($fields['period_id']['language'])? $fields['period_id']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->period_id,'period_id','1:account_periods_t:period_id:name') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Amount', (isset($fields['amount']['language'])? $fields['amount']['language'] : array())) }}	
						</td>
						<td>{{ $row->amount }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Salary Entry Date', (isset($fields['salary_entry_date']['language'])? $fields['salary_entry_date']['language'] : array())) }}	
						</td>
						<td>{{ $row->salary_entry_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Days', (isset($fields['days']['language'])? $fields['days']['language'] : array())) }}	
						</td>
						<td>{{ $row->days }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Total Leave', (isset($fields['total_leave']['language'])? $fields['total_leave']['language'] : array())) }}	
						</td>
						<td>{{ $row->total_leave }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Salary', (isset($fields['salary']['language'])? $fields['salary']['language'] : array())) }}	
						</td>
						<td>{{ $row->salary }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Esi Basic', (isset($fields['esi_basic']['language'])? $fields['esi_basic']['language'] : array())) }}	
						</td>
						<td>{{ $row->esi_basic }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Pf Basic', (isset($fields['pf_basic']['language'])? $fields['pf_basic']['language'] : array())) }}	
						</td>
						<td>{{ $row->pf_basic }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('OT Hrs', (isset($fields['ot_hrs']['language'])? $fields['ot_hrs']['language'] : array())) }}	
						</td>
						<td>{{ $row->ot_hrs }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('OT Amount', (isset($fields['ot_amount']['language'])? $fields['ot_amount']['language'] : array())) }}	
						</td>
						<td>{{ $row->ot_amount }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('ESI Percentage', (isset($fields['esi_percentage']['language'])? $fields['esi_percentage']['language'] : array())) }}	
						</td>
						<td>{{ $row->esi_percentage }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('PF Percentage', (isset($fields['pf_percentage']['language'])? $fields['pf_percentage']['language'] : array())) }}	
						</td>
						<td>{{ $row->pf_percentage }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Leave Amount', (isset($fields['leave_amount']['language'])? $fields['leave_amount']['language'] : array())) }}	
						</td>
						<td>{{ $row->leave_amount }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Advance', (isset($fields['advance']['language'])? $fields['advance']['language'] : array())) }}	
						</td>
						<td>{{ $row->advance }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Net Wages', (isset($fields['net_wages']['language'])? $fields['net_wages']['language'] : array())) }}	
						</td>
						<td>{{ $row->net_wages }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Payment Mode', (isset($fields['payment_mode']['language'])? $fields['payment_mode']['language'] : array())) }}	
						</td>
						<td>{{ $row->payment_mode }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Payment Reference', (isset($fields['payment_reference']['language'])? $fields['payment_reference']['language'] : array())) }}	
						</td>
						<td>{{ $row->payment_reference }} </td>
						
					</tr>
				
			</tbody>	
		</table>  
			
		 	

@if($setting['form-method'] =='native')
	</div>	
</div>	
@endif	

<script>
$(document).ready(function(){

});
</script>	