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
		<li><a href="{{ URL::to('employee?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper">   
	   <div class="toolbar-line">
	   		<a href="{{ URL::to('employee?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('employee/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif  		   	  
		</div>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	


	
	<table class="table table-striped table-bordered" >
		<tbody>	
	
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Employee Number', (isset($fields['employee_number']['language'])? $fields['employee_number']['language'] : array())) }}	
						</td>
						<td>{{ $row->employee_number }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('First Name', (isset($fields['first_name']['language'])? $fields['first_name']['language'] : array())) }}	
						</td>
						<td>{{ $row->first_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Last Name', (isset($fields['last_name']['language'])? $fields['last_name']['language'] : array())) }}	
						</td>
						<td>{{ $row->last_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Title', (isset($fields['Title']['language'])? $fields['Title']['language'] : array())) }}	
						</td>
						<td>{{ $row->Title }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Gender', (isset($fields['gender']['language'])? $fields['gender']['language'] : array())) }}	
						</td>
						<td>{{ $row->gender }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Emp Type Id', (isset($fields['emp_type_id']['language'])? $fields['emp_type_id']['language'] : array())) }}	
						</td>
						<td>{{ $row->emp_type_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Birth Date', (isset($fields['birth_date']['language'])? $fields['birth_date']['language'] : array())) }}	
						</td>
						<td>{{ $row->birth_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Age', (isset($fields['age']['language'])? $fields['age']['language'] : array())) }}	
						</td>
						<td>{{ $row->age }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Marital Status', (isset($fields['marital_status']['language'])? $fields['marital_status']['language'] : array())) }}	
						</td>
						<td>{{ $row->marital_status }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Country', (isset($fields['country']['language'])? $fields['country']['language'] : array())) }}	
						</td>
						<td>{{ $row->country }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Nationality', (isset($fields['nationality']['language'])? $fields['nationality']['language'] : array())) }}	
						</td>
						<td>{{ $row->nationality }} </td>
						
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
							{{ SiteHelpers::activeLang('Building Detail', (isset($fields['building_detail']['language'])? $fields['building_detail']['language'] : array())) }}	
						</td>
						<td>{{ $row->building_detail }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('State', (isset($fields['state']['language'])? $fields['state']['language'] : array())) }}	
						</td>
						<td>{{ $row->state }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Date Of Joining', (isset($fields['date_of_joining']['language'])? $fields['date_of_joining']['language'] : array())) }}	
						</td>
						<td>{{ $row->date_of_joining }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Pf No', (isset($fields['pf_no']['language'])? $fields['pf_no']['language'] : array())) }}	
						</td>
						<td>{{ $row->pf_no }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Pan No', (isset($fields['pan_no']['language'])? $fields['pan_no']['language'] : array())) }}	
						</td>
						<td>{{ $row->pan_no }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Date Of Releiving', (isset($fields['date_of_releiving']['language'])? $fields['date_of_releiving']['language'] : array())) }}	
						</td>
						<td>{{ $row->date_of_releiving }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Bank Name', (isset($fields['bank_name']['language'])? $fields['bank_name']['language'] : array())) }}	
						</td>
						<td>{{ $row->bank_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Bank Branch', (isset($fields['bank_branch']['language'])? $fields['bank_branch']['language'] : array())) }}	
						</td>
						<td>{{ $row->bank_branch }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Bank Ifsc Code', (isset($fields['bank_ifsc_code']['language'])? $fields['bank_ifsc_code']['language'] : array())) }}	
						</td>
						<td>{{ $row->bank_ifsc_code }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Bank Acc No', (isset($fields['bank_acc_no']['language'])? $fields['bank_acc_no']['language'] : array())) }}	
						</td>
						<td>{{ $row->bank_acc_no }} </td>
						
					</tr>
				
		</tbody>	
	</table>   

	 	
	@if($subgrid['access']['is_detail'] == '1')	
		<hr />	
		<h5> Employee Assignments </h5>
	
		<div class="table-responsive">
	    <table class="table table-striped ">
	        <thead>
				<tr>
					<th class="number"> No </th>
						@foreach ($subgrid['tableGrid'] as $t)
						@if($t['view'] =='1')
							<th>
								{{ SiteHelpers::activeLang($t['label'],(isset($t['language'])? $t['language'] : array())) }}
							</th>
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
	@endif
     
	
	</div>
</div>	

	</div>
</div>
	  
@stop