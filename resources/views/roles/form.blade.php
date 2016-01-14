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
		<li><a href="{{ URL::to('roles?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'roles/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> ROLES</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="Role Id" class=" control-label col-md-4 text-left"> Role Id </label>
									<div class="col-md-6">
									  {!! Form::text('role_id', $row['role_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Role Name" class=" control-label col-md-4 text-left"> Role Name </label>
									<div class="col-md-6">
									  {!! Form::text('role_name', $row['role_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Role Description" class=" control-label col-md-4 text-left"> Role Description </label>
									<div class="col-md-6">
									  {!! Form::text('role_description', $row['role_description'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			

					
	<hr />
	<div class="clr clear"></div>
	
	<h5> Roles Details </h5>
	
	<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
			<tr>
				@foreach ($subgrid['tableGrid'] as $t)
					@if($t['view'] =='1' && $t['field'] !='role_id')
						<th>{{ $t['label'] }}</th>
					@endif
				@endforeach
				<th></th>	
			  </tr>

        </thead>

        <tbody>
        @if(count($subgrid['rowData'])>=1)
            @foreach ($subgrid['rowData'] as $rows)
            <tr class="clone clonedInput">
									
			 @foreach ($subgrid['tableGrid'] as $field)
				 @if($field['view'] =='1' && $field['field'] !='role_id')
				 <td>					 
				 	{!! SiteHelpers::bulkForm($field['field'] , $subgrid['tableForm'] , $rows->$field['field']) !!}							 
				 </td>
				 @endif					 
			 
			 @endforeach
			 <td>
			 	<a onclick=" $(this).parents('.clonedInput').remove(); return false" href="#" class="remove btn btn-xs btn-danger">-</a>
			 	<input type="hidden" name="counter[]">
			 </td>
			@endforeach
			</tr> 

		@else
            <tr class="clone clonedInput">
									
			 @foreach ($subgrid['tableGrid'] as $field)

				 @if($field['view'] =='1' && $field['field'] !='role_id')
				 <td>					 
				 	{!! SiteHelpers::bulkForm($field['field'] , $subgrid['tableForm'] ) !!}							 
				 </td>
				 @endif					 
			 
			 @endforeach
			 <td>
			 	<a onclick=" $(this).parents('.clonedInput').remove(); return false" href="#" class="remove btn btn-xs btn-danger">-</a>
			 	<input type="hidden" name="counter[]">
			 </td>
			
			</tr> 

		
		@endif	


        </tbody>	

     </table>  
     <input type="hidden" name="enable-masterdetail" value="true">
     </div>
	<br /><br />
     
     <a href="javascript:void(0);" class="addC btn btn-xs btn-info" rel=".clone"><i class="fa fa-plus"></i> New Item</a>
     <hr />
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('roles?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		$('.addC').relCopy({});
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop