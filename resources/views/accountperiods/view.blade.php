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
							{{ SiteHelpers::activeLang('Period Id', (isset($fields['period_id']['language'])? $fields['period_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->period_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Month', (isset($fields['month']['language'])? $fields['month']['language'] : array())) }}	
						</td>
						<td>{{ $row->month }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Year', (isset($fields['year']['language'])? $fields['year']['language'] : array())) }}	
						</td>
						<td>{{ $row->year }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('From Date', (isset($fields['from_date']['language'])? $fields['from_date']['language'] : array())) }}	
						</td>
						<td>{{ $row->from_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('To Date', (isset($fields['to_date']['language'])? $fields['to_date']['language'] : array())) }}	
						</td>
						<td>{{ $row->to_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Name', (isset($fields['name']['language'])? $fields['name']['language'] : array())) }}	
						</td>
						<td>{{ $row->name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Quarter', (isset($fields['quarter']['language'])? $fields['quarter']['language'] : array())) }}	
						</td>
						<td>{{ $row->quarter }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Period Status', (isset($fields['period_status']['language'])? $fields['period_status']['language'] : array())) }}	
						</td>
						<td>{{ $row->period_status }} </td>
						
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