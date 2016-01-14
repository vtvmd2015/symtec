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
		<li><a href="{{ URL::to('viewaccountperiods?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'viewaccountperiods/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> VIEW_ACCOUNT_PERIODS</legend>
									
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
					  <select name='name' rows='5' id='name' class='select2 ' required  ></select> 
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
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('viewaccountperiods?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
        $("#name").jCombo("{{ URL::to('viewaccountperiods/comboselect?filter=account_periods_t:period_id:name') }}",
        {  selected_value : '{{ $row["name"] }}' });
         

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop