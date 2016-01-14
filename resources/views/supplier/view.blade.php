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
		<li><a href="{{ URL::to('supplier?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper">   
	   <div class="toolbar-line">
	   		<a href="{{ URL::to('supplier?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('supplier/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif  		   	  
		</div>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	


	
	<table class="table table-striped table-bordered" >
		<tbody>	
	
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Supplier Name', (isset($fields['supplier_name']['language'])? $fields['supplier_name']['language'] : array())) }}	
						</td>
						<td>{{ $row->supplier_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Supplier Number', (isset($fields['supplier_number']['language'])? $fields['supplier_number']['language'] : array())) }}	
						</td>
						<td>{{ $row->supplier_number }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Supplier Type', (isset($fields['supplier_type_id']['language'])? $fields['supplier_type_id']['language'] : array())) }}	
						</td>
						<td>{!! SiteHelpers::gridDisplayView($row->supplier_type_id,'supplier_type_id','1:supplier_type_t:supplier_type_id:supplier_type') !!} </td>
						
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
							{{ SiteHelpers::activeLang('Area', (isset($fields['area']['language'])? $fields['area']['language'] : array())) }}	
						</td>
						<td>{{ $row->area }} </td>
						
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
							{{ SiteHelpers::activeLang('Payment Method', (isset($fields['payment_method']['language'])? $fields['payment_method']['language'] : array())) }}	
						</td>
						<td>{{ $row->payment_method }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Supplier Status', (isset($fields['supplier_status']['language'])? $fields['supplier_status']['language'] : array())) }}	
						</td>
						<td>{{ $row->supplier_status }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Payment Terms', (isset($fields['payment_terms']['language'])? $fields['payment_terms']['language'] : array())) }}	
						</td>
						<td>{{ $row->payment_terms }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('TIN NO', (isset($fields['TIN_NO']['language'])? $fields['TIN_NO']['language'] : array())) }}	
						</td>
						<td>{{ $row->TIN_NO }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('PAN NO', (isset($fields['PAN_NO']['language'])? $fields['PAN_NO']['language'] : array())) }}	
						</td>
						<td>{{ $row->PAN_NO }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('SERVICE TAXREG NO', (isset($fields['SERVICE_TAXREG_NO']['language'])? $fields['SERVICE_TAXREG_NO']['language'] : array())) }}	
						</td>
						<td>{{ $row->SERVICE_TAXREG_NO }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('EXCISE DUTY NO', (isset($fields['EXCISE_DUTY NO']['language'])? $fields['EXCISE_DUTY NO']['language'] : array())) }}	
						</td>
						<td>{{ $row->EXCISE_DUTY NO }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('CREDIT PERIOD', (isset($fields['CREDIT_PERIOD']['language'])? $fields['CREDIT_PERIOD']['language'] : array())) }}	
						</td>
						<td>{{ $row->CREDIT_PERIOD }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Default Pricelist Id', (isset($fields['default_pricelist_id']['language'])? $fields['default_pricelist_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->default_pricelist_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Validation Status', (isset($fields['validation_status']['language'])? $fields['validation_status']['language'] : array())) }}	
						</td>
						<td>{{ $row->validation_status }} </td>
						
					</tr>
				
		</tbody>	
	</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop