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
		<li><a href="{{ URL::to('taxcode?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper">   
	   <div class="toolbar-line">
	   		<a href="{{ URL::to('taxcode?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('taxcode/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif  		   	  
		</div>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	


	
	<table class="table table-striped table-bordered" >
		<tbody>	
	
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Taxcode Name', (isset($fields['taxcode_name']['language'])? $fields['taxcode_name']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->taxcode_name,'taxcode_name','1:tax_class_t:taxclass_id:taxclass_name') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Tax Class', (isset($fields['taxclass_id']['language'])? $fields['taxclass_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->taxclass_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Description', (isset($fields['description']['language'])? $fields['description']['language'] : array())) }}	
						</td>
						<td>{{ $row->description }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Tax Category', (isset($fields['taxcategory_id']['language'])? $fields['taxcategory_id']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->taxcategory_id,'taxcategory_id','1:tax_category_t:taxcategory_id:taxcategory_name') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Tax Type', (isset($fields['tax_type']['language'])? $fields['tax_type']['language'] : array())) }}	
						</td>
						<td>{{ $row->tax_type }} </td>
						
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
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Tax Precision', (isset($fields['tax_precision']['language'])? $fields['tax_precision']['language'] : array())) }}	
						</td>
						<td>{{ $row->tax_precision }} </td>
						
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