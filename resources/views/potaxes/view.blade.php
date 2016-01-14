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
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper">   
	   <div class="toolbar-line">
	   		<a href="{{ URL::to('potaxes?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('potaxes/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif  		   	  
		</div>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	


	
	<table class="table table-striped table-bordered" >
		<tbody>	
	
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Taxgroup Id', (isset($fields['taxgroup_id']['language'])? $fields['taxgroup_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->taxgroup_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Taxgroup Detail Id', (isset($fields['taxgroup_detail_id']['language'])? $fields['taxgroup_detail_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->taxgroup_detail_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Po Header Id', (isset($fields['po_header_id']['language'])? $fields['po_header_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->po_header_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Po Line Id', (isset($fields['po_line_id']['language'])? $fields['po_line_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->po_line_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Line Amount', (isset($fields['line_amount']['language'])? $fields['line_amount']['language'] : array())) }}	
						</td>
						<td>{{ $row->line_amount }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Tax Rate', (isset($fields['tax_rate']['language'])? $fields['tax_rate']['language'] : array())) }}	
						</td>
						<td>{{ $row->tax_rate }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Tax Amount', (isset($fields['tax_amount']['language'])? $fields['tax_amount']['language'] : array())) }}	
						</td>
						<td>{{ $row->tax_amount }} </td>
						
					</tr>
				
		</tbody>	
	</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop