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
							{{ SiteHelpers::activeLang('From Currency', (isset($fields['from_currency']['language'])? $fields['from_currency']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->from_currency,'from_currency','1:account_currency_t:currecncy_id:currency_code') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('TO Currency', (isset($fields['to_currency']['language'])? $fields['to_currency']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->to_currency,'to_currency','1:account_currency_t:currecncy_id:currency_code') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('From Date', (isset($fields['from_date']['language'])? $fields['from_date']['language'] : array())) }}	
						</td>
						<td>{{ $row->from_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('TO Date', (isset($fields['to_date']['language'])? $fields['to_date']['language'] : array())) }}	
						</td>
						<td>{{ $row->to_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Conversion Rate', (isset($fields['conversion_rate']['language'])? $fields['conversion_rate']['language'] : array())) }}	
						</td>
						<td>{{ $row->conversion_rate }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Active', (isset($fields['active']['language'])? $fields['active']['language'] : array())) }}	
						</td>
						<td>{{ $row->active }} </td>
						
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