
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'polines/save/'.SiteHelpers::encryptID($row['po_lines_id']), 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'polinesFormAjax')) !!}
			<div class="col-md-12">
						<fieldset><legend> PO_LINES</legend>
									
				  <div class="form-group  " > 
					<label for="Po Lines Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Po Lines Id', (isset($fields['po_lines_id']['language'])? $fields['po_lines_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('po_lines_id', $row['po_lines_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Po Header Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Po Header Id', (isset($fields['po_header_id']['language'])? $fields['po_header_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('po_header_id', $row['po_header_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Line No" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Line No', (isset($fields['line_no']['language'])? $fields['line_no']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('line_no', $row['line_no'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Product Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Product Id', (isset($fields['product_id']['language'])? $fields['product_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('product_id', $row['product_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Line Description" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Line Description', (isset($fields['line_description']['language'])? $fields['line_description']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('line_description', $row['line_description'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Uom Code" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Uom Code', (isset($fields['uom_code']['language'])? $fields['uom_code']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('uom_code', $row['uom_code'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Qty" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Qty', (isset($fields['qty']['language'])? $fields['qty']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('qty', $row['qty'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Unit Price" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Unit Price', (isset($fields['unit_price']['language'])? $fields['unit_price']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('unit_price', $row['unit_price'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Discount Perc" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Discount Perc', (isset($fields['discount_perc']['language'])? $fields['discount_perc']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('discount_perc', $row['discount_perc'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Discount Rate" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Discount Rate', (isset($fields['discount_rate']['language'])? $fields['discount_rate']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('discount_rate', $row['discount_rate'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Line Amount" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Line Amount', (isset($fields['line_amount']['language'])? $fields['line_amount']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('line_amount', $row['line_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Taxgroup Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Taxgroup Id', (isset($fields['taxgroup_id']['language'])? $fields['taxgroup_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('taxgroup_id', $row['taxgroup_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
	var form = $('#polinesFormAjax'); 
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