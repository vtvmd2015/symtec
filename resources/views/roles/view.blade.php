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
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('roles?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('roles/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Role Name</td>
						<td>{{ $row->role_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Role Description</td>
						<td>{{ $row->role_description }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	<hr />
	
	<h5> Roles Details </h5>
	
	<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
			<tr>
				<th class="number"> No </th>
					@foreach ($subgrid['tableGrid'] as $t)
					@if($t['view'] =='1')
						<th>{{ $t['label'] }}</th>
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
	
	</div>
</div>	

	</div>
</div>
	  
@stop