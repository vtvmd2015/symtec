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
							{{ SiteHelpers::activeLang('Emp Name', (isset($fields['emp_name']['language'])? $fields['emp_name']['language'] : array())) }}	
						</td>
						<td>{{ $row->emp_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Month', (isset($fields['month']['language'])? $fields['month']['language'] : array())) }}	
						</td>
						<td>{{ $row->month }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Job No', (isset($fields['job_no']['language'])? $fields['job_no']['language'] : array())) }}	
						</td>
						<td>{{ $row->job_no }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Department', (isset($fields['department']['language'])? $fields['department']['language'] : array())) }}	
						</td>
						<td>{{ $row->department }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) }}	
						</td>
						<td>{{ $row->date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Time', (isset($fields['time']['language'])? $fields['time']['language'] : array())) }}	
						</td>
						<td>{{ $row->time }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}	
						</td>
						<td>{{ $row->status }} </td>
						
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