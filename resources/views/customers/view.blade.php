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
		<li><a href="{{ URL::to('customers?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper">   
	   <div class="toolbar-line">
	   		<a href="{{ URL::to('customers?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('customers/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif  		   	  
		</div>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	


	
	<table class="table table-striped table-bordered" >
		<tbody>	
	
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Customer Name', (isset($fields['customer_name']['language'])? $fields['customer_name']['language'] : array())) }}	
						</td>
						<td>{{ $row->customer_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Customer Number', (isset($fields['customer_number']['language'])? $fields['customer_number']['language'] : array())) }}	
						</td>
						<td>{{ $row->customer_number }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Customer Type', (isset($fields['customer_type_id']['language'])? $fields['customer_type_id']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->customer_type_id,'customer_type_id','1:customer_types_t:customer_type_id:customer_type') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Address1', (isset($fields['address1']['language'])? $fields['address1']['language'] : array())) }}	
						</td>
						<td>{{ $row->address1 }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Street', (isset($fields['street']['language'])? $fields['street']['language'] : array())) }}	
						</td>
						<td>{{ $row->street }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('City', (isset($fields['city']['language'])? $fields['city']['language'] : array())) }}	
						</td>
						<td>{{ $row->city }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('State', (isset($fields['state']['language'])? $fields['state']['language'] : array())) }}	
						</td>
						<td>{{ $row->state }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Country', (isset($fields['country']['language'])? $fields['country']['language'] : array())) }}	
						</td>
						<td>{{ $row->country }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}	
						</td>
						<td>{{ $row->status }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Contact Email', (isset($fields['contact_email']['language'])? $fields['contact_email']['language'] : array())) }}	
						</td>
						<td>{{ $row->contact_email }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Contact Phone', (isset($fields['contact_phone']['language'])? $fields['contact_phone']['language'] : array())) }}	
						</td>
						<td>{{ $row->contact_phone }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Pay Atten', (isset($fields['pay_atten']['language'])? $fields['pay_atten']['language'] : array())) }}	
						</td>
						<td>{{ $row->pay_atten }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Billing Limit', (isset($fields['billing_limit']['language'])? $fields['billing_limit']['language'] : array())) }}	
						</td>
						<td>{{ $row->billing_limit }} </td>
						
					</tr>
				
		</tbody>	
	</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop