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
		<li><a href="{{ URL::to('currencyentry?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper">   
	   <div class="toolbar-line">
	   		<a href="{{ URL::to('currencyentry?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('currencyentry/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif  		   	  
		</div>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	


	
	<table class="table table-striped table-bordered" >
		<tbody>	
	
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Currecncy Id', (isset($fields['currecncy_id']['language'])? $fields['currecncy_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->currecncy_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Company Id', (isset($fields['company_id']['language'])? $fields['company_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->company_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Currency Code', (isset($fields['currency_code']['language'])? $fields['currency_code']['language'] : array())) }}	
						</td>
						<td>{{ $row->currency_code }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Start Date', (isset($fields['start_date']['language'])? $fields['start_date']['language'] : array())) }}	
						</td>
						<td>{{ $row->start_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('End Date', (isset($fields['end_date']['language'])? $fields['end_date']['language'] : array())) }}	
						</td>
						<td>{{ $row->end_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Active', (isset($fields['active']['language'])? $fields['active']['language'] : array())) }}	
						</td>
						<td>{{ $row->active }} </td>
						
					</tr>
				
		</tbody>	
	</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop