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
							{{ SiteHelpers::activeLang('PO Number', (isset($fields['po_number']['language'])? $fields['po_number']['language'] : array())) }}	
						</td>
						<td>{{ $row->po_number }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('PO Date', (isset($fields['po_date']['language'])? $fields['po_date']['language'] : array())) }}	
						</td>
						<td>{{ $row->po_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Supplier', (isset($fields['supplier_id']['language'])? $fields['supplier_id']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->supplier_id,'supplier_id','1:supplier_t:supplier_id:supplier_name') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Job No', (isset($fields['job_no']['language'])? $fields['job_no']['language'] : array())) }}	
						</td>
						<td>{{ $row->job_no }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Quote', (isset($fields['quote_id']['language'])? $fields['quote_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->quote_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Buyer', (isset($fields['buyer_id']['language'])? $fields['buyer_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->buyer_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Description', (isset($fields['description']['language'])? $fields['description']['language'] : array())) }}	
						</td>
						<td>{{ $row->description }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Total Amount', (isset($fields['total_amount']['language'])? $fields['total_amount']['language'] : array())) }}	
						</td>
						<td>{{ $row->total_amount }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('PO Type', (isset($fields['po_type']['language'])? $fields['po_type']['language'] : array())) }}	
						</td>
						<td>{{ $row->po_type }} </td>
						
					</tr>
				
			</tbody>	
		</table>  
			
		 	
	@if($subgrid['access']['is_detail'] == '1')	
		<hr />	
		<h5> PO Details </h5>
	
		<div class="table-responsive">
	    <table class="table table-striped ">
	        <thead>
				<tr>
					<th class="number"> No </th>
						@foreach ($subgrid['tableGrid'] as $t)
						@if($t['view'] =='1')
							<th>
								{{ SiteHelpers::activeLang($t['label'],(isset($t['language'])? $t['language'] : array())) }}
							</th>
						@endif
					@endforeach
					
				  </tr>
	        </thead>

	        <tbody>
	            @foreach ($subgrid['rowData'] as $row)
	            <tr>
					<td width="30">  </td>		
				 @foreach ($subgrid['tableGrid'] as $field)
					 @if($field['view'] =='1' )
					 <td>					 
					 	@if($field['attribute']['image']['active'] =='1')
							{!! SiteHelpers::showUploadedFile($row->$field['field'],$field['attribute']['image']['path']) !!}
						@else	
							{{--*/ $conn = (isset($field['conn']) ? $field['conn'] : array() ) /*--}}
							{!! SiteHelpers::gridDisplay($row->$field['field'],$field['field'],$conn) !!}	
						@endif						 
					 </td>
					 @endif					 
				 
				 @endforeach
				@endforeach
				</tr> 


	        </tbody>	

	     </table>   
	     </div>
	@endif
     	

@if($setting['form-method'] =='native')
	</div>	
</div>	
@endif	

<script>
$(document).ready(function(){

});
</script>	