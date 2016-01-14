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
							{{ SiteHelpers::activeLang('Line No', (isset($fields['line_no']['language'])? $fields['line_no']['language'] : array())) }}	
						</td>
						<td>{{ $row->line_no }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Products', (isset($fields['product_id']['language'])? $fields['product_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->product_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Line Description', (isset($fields['line_description']['language'])? $fields['line_description']['language'] : array())) }}	
						</td>
						<td>{{ $row->line_description }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('UOM Code', (isset($fields['uom_code']['language'])? $fields['uom_code']['language'] : array())) }}	
						</td>
						<td>{{ $row->uom_code }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Qty', (isset($fields['qty']['language'])? $fields['qty']['language'] : array())) }}	
						</td>
						<td>{{ $row->qty }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Unit Price', (isset($fields['unit_price']['language'])? $fields['unit_price']['language'] : array())) }}	
						</td>
						<td>{{ $row->unit_price }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Discount Percentage', (isset($fields['discount_perc']['language'])? $fields['discount_perc']['language'] : array())) }}	
						</td>
						<td>{{ $row->discount_perc }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Discount Rate', (isset($fields['discount_rate']['language'])? $fields['discount_rate']['language'] : array())) }}	
						</td>
						<td>{{ $row->discount_rate }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Line Amount', (isset($fields['line_amount']['language'])? $fields['line_amount']['language'] : array())) }}	
						</td>
						<td>{{ $row->line_amount }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Tax Group', (isset($fields['taxgroup_id']['language'])? $fields['taxgroup_id']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->taxgroup_id,'taxgroup_id','1:tax_groups_header_t:taxgroup_id:taxgroup_name') !!} </td>
						
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