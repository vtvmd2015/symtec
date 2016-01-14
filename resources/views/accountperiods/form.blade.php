
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'accountperiods/save/'.SiteHelpers::encryptID($row['period_id']), 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'accountperiodsFormAjax')) !!}
			<div class="col-md-12">
						<fieldset><legend> ACCOUNT_PERIODS</legend>
									
				  <div class="form-group  " > 
					<label for="Period Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Period Id', (isset($fields['period_id']['language'])? $fields['period_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('period_id', $row['period_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Month" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Month', (isset($fields['month']['language'])? $fields['month']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('month', $row['month'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Year" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Year', (isset($fields['year']['language'])? $fields['year']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('year', $row['year'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="From Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('From Date', (isset($fields['from_date']['language'])? $fields['from_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('from_date', $row['from_date'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="To Date" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('To Date', (isset($fields['to_date']['language'])? $fields['to_date']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('to_date', $row['to_date'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Name" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Name', (isset($fields['name']['language'])? $fields['name']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('name', $row['name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Quarter" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Quarter', (isset($fields['quarter']['language'])? $fields['quarter']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('quarter', $row['quarter'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Period Status" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Period Status', (isset($fields['period_status']['language'])? $fields['period_status']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('period_status', $row['period_status'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
	var form = $('#accountperiodsFormAjax'); 
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