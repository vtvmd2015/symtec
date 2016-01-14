@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('potaxes?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active">{{ Lang::get('core.addedit') }} </li>
      </ul>
	  	  
    </div>
 
 	<div class="page-content-wrapper">

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'potaxes/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> potaxes</legend>
									
				  <div class="form-group  " > 
					<label for="Po Tax Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Po Tax Id', (isset($fields['po_tax_id']['language'])? $fields['po_tax_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('po_tax_id', $row['po_tax_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<label for="Po Line Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Po Line Id', (isset($fields['po_line_id']['language'])? $fields['po_line_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('po_line_id', $row['po_line_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
				  </div> 					
				  <div class="form-group  " > 
					<label for="Taxgroup Detail Id" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Taxgroup Detail Id', (isset($fields['taxgroup_detail_id']['language'])? $fields['taxgroup_detail_id']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('taxgroup_detail_id', $row['taxgroup_detail_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax Rate" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax Rate', (isset($fields['tax_rate']['language'])? $fields['tax_rate']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('tax_rate', $row['tax_rate'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> 					
				  <div class="form-group  " > 
					<label for="Tax Amount" class=" control-label col-md-4 text-left"> 
					{!! SiteHelpers::activeLang('Tax Amount', (isset($fields['tax_amount']['language'])? $fields['tax_amount']['language'] : array())) !!}	
					</label>
					<div class="col-md-6">
					  {!! Form::text('tax_amount', $row['tax_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
					 </div> 
					 <div class="col-md-2">
					 	
					 </div>
				  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('potaxes?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop