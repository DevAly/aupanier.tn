@extends('landlord.frontend.user.dashboard.user-master')
@section('page-title')
    {{__('User Home')}}
@endsection

@section('title')
    {{__('User Home')}}
@endsection

@section('style')
    <style>
        .badge {
            font-size: 15px;
        }
    </style>
@endsection

@section('section')
    @php
        $auth_user = Auth::guard('web')->user();
    @endphp
	<style>
	
.containerlist {
}
.containerlist h2 {
  font-size:25px;
  color:#888;
  text-align:center;
}
.containerlist .list {
  margin-top:40px;
  display:flex;
  justify-content:center;
  flex-wrap:wrap;
  gap:20px;
}
.form-element {
  position:relative;
  width:200px;
  height:200px;
}
.form-element .card {
  width:100%;
  display:flex;
  flex-direction:column;
  justify-content:center;
  height:100%;
  cursor:pointer;
  border:2px solid #ddd;
  background:#fff;
  box-shadow:0px 5px 20px 2px rgba(0,0,0,0.1);
  text-align:center;
  transition:all 200ms ease-in-out;
  border-radius:5px;
}
.form-element .icon {
  margin-top:10px;
  font-size:30px;
  color:#555;
  transition:all 200ms ease-in-out;
}
.form-element .title {
  font-size:15px;
  color:#555;
  padding:5px 0px;
  transition:all 200ms ease-in-out;
}
/* Common styles for form-element a */
.form-element a.btns {
  font-size: 16px;
  background: none;
  font-family: var(--body-font);
  text-decoration: none;
  font-weight: 500;
  color: #555;
  padding: 0.5em 1em;
  border: 2px solid #ddd;
  margin: 0.25em 1em;
  border-radius: 10px;
  transition: background-color 200ms ease-in-out, color 200ms ease-in-out, border-color 200ms ease-in-out;
}

/* Hover state */
.form-element a.btns:hover {
  background-color: #000;
  color: #fff;
  border-color: #000;
  transition: background-color 200ms ease-in-out, color 200ms ease-in-out, border-color 200ms ease-in-out;
}



/* Active state */
.form-element a.btns:active {
  background-color: #666;
  color: #fff;
  border-color: #666;
  transition: background-color 200ms ease-in-out, color 200ms ease-in-out, border-color 200ms ease-in-out;
}



/* Animation for active */

.card .business{
  font-size:11px;
  position:absolute;
  top:0;
  right:0;
  background:#fae152;
  font-weight:700;
  padding:0px 5px 0px 10px;
 border-radius:0 3px 0 10px;
}

.card .Advance{
  font-size:11px;
  position:absolute;
  top:0;
  right:0;
  font-weight:700;
  padding:0px 5px 0px 10px;
 border-radius:0 3px 0 10px;
  background:#000;
  color:#fff;
}
.card.Advance{
	  border:2px solid #000;
}


.card.business{
	  border:2px solid #fae152;
}
.gradient-border {
  --borderWidth: 5px;
  background: #1D1F20;
  position: relative;
  border-radius: var(--borderWidth);
}
.gradient-border:after {
  content: '' ;
  position: absolute ;
  top: calc(-1 * var(--borderWidth)) ;
  left: calc(-1 * var(--borderWidth));
  height: calc(100% + var(--borderWidth) * 2) ;
  width: calc(100% + var(--borderWidth) * 2) ;
  background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82) ;
  border-radius: calc(2 * var(--borderWidth)) ;
  z-index: -1 ;
  animation: animatedgradient 3s ease alternate infinite ;
  background-size: 300% 300% ;
}


@keyframes animatedgradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

.reload{
vertical-align: middle;
font-size:20px;
background-color:rgb(240,20 , 0);
color:#fff;
font-weight:900;  
box-sizing: border-box;
border-radius: 16px;
position:absolute;
top:10px;
left:10px;
height:30px;
aspect-ratio:1/1;

line-height: 30px;
vertical-align: middle;
}
	</style>

    <div class="row g-4">
       {{-- <div class="col-xl-6 col-md-6 orders-child">
            <div class="single-orders">
                <div class="orders-flex-content">
                    <div class="icon">
                        <i class="las la-tasks"></i>
                    </div>
                    <div class="contents">
                        <h2 class="order-titles"> {{$package_orders ?? ''}} </h2>
                        <span class="order-para">{{__('Total Orders')}} </span>
                    </div>
                </div>
            </div>
        </div>
           <div class="col-xl-6 col-md-6 orders-child">
            <div class="single-orders">

                <div class="orders-flex-content">
                    <div class="icon">
                        <i class="las la-tasks"></i>
                    </div>
                    <div class="contents">
                        <h2 class="order-titles"> {{$support_tickets ?? ''}} </h2>
                        <span class="order-para">{{__('Support Tickets')}} </span>
                    </div>
                </div>
            </div>
        </div>  --}}
        <div class="col-md-12"> <div class="btn-wrapper mb-3 mt-2" style="float: right">
                @php
                    $price_page = get_page_slug(get_static_option('pricing_plan'));
                @endphp
                <a href="{{url($price_page)}}"
                   class="cmn-btn cmn-btn-bg-1 cmn-btn-small mx-2">{{__('Create a Website')}}</a>
            </div>
            <div class="subdomains custom_domain_wrap mt-4">
                <h4 class="custom_domain_title">{{__('Your Subdomains')}}</h4>
					{{-- <div class="payment custom_domain_table mt-4">
                    <table class="table table-bordered recent_payment_table">
                        <thead>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Site')}}</th>
                        <th>{{__('Browse')}}</th>
                        </thead>
                        <tbody class="w-100">
                        

                        @foreach($user->tenant_details ?? [] as $key => $data)
                            <tr>
                                <td id ="{{optional($data->domain)->domain}}">{{$key +1}}</td>
                                <td>
                                    {{optional($data->domain)->domain}}
                                </td>
                                <td>
                                    <a class="badge rounded bg-primary px-4 visitweb"
                                       href="{{tenant_url_with_protocol(optional($data->domain)->domain).'?aupanier_login_token='.getLoginToken($data->id)}}}">{{__('Visit Website')}}</a>
                                    <a class="badge rounded bg-danger px-4"
                                       href="{{tenant_url_with_protocol(optional($data->domain)->domain).'/admin?aupanier_login_token='.getLoginToken($data->id)}}">{{__('Visit Admin Panel')}}</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>--}}
				   <div class="form-group tenant_list" style="position:relative">
                    <div class="containerlist">
						  	  <div class="list">
							  @php
                            $user = Auth::guard('web')->user();
                        @endphp
							  @foreach($user->tenant_details->sortByDesc('created_at') ?? [] as $key => $data)
							   @php
							     if(!isset($data->payment_log)) continue;
							   @endphp
							   <div class="form-element" id ="{{optional($data->domain)->tenant_id}}">
								  
								  @if ($data?->payment_log?->package_name=='Gratuit')
									  <div class="card">
								  @else
								@if($data->payment_log?->package_name=='Advance Plan')
								  <div class="card Advance">
									  <div class="Advance">Advance</div>
								  @else  
									<div class="card business">
									  <div class="business">Business</div>
								@endif
								 @php

						// Define your start_date, end_date, and current_date here
						$bluevalue=0;
						$end_date = $data?->payment_log?->expire_date;
						$current_date = new DateTime();
						if($data->payment_log->status=="trial"){$redValue=28;$greenValue=112;$bluevalue=200;}
						else if($current_date>$end_date){$greenValue=80;$redValue=80;$bluevalue=80;}
						// Calculate the color based on the number of days
						else{
						$currentDays = $current_date->diff($end_date)->days;
						if ($currentDays>30){$greenValue=255;$redValue=0;}
						
						else{
							$redValue = round(((1/(($currentDays-35)/(50)))+10)*255/8.574);
							$greenValue = round(((1/((-$currentDays-5)/(50)))+10)*255/8.574);
						}}
						// Generate inline CSS for the button background color
						$cssColor = "rgb(" . $redValue. ", " . $greenValue . ", $bluevalue)";
					@endphp
					<a class="reload" href="{{route(route_prefix().'frontend.order.confirm',$data->payment_log->package_id)}}?domain={{$data->payment_log->tenant_id}}" style="background-color: {{ $cssColor }}"><i class="las la-redo-alt"></i></a>

								  @endif
								  
									<div class="icon">
									   <i class="las la-store-alt"></i>
									</div>
									<div class="title">
									 {{optional($data->domain)->tenant_id}}
									</div>
									 <a class="btns"
                                       href="{{tenant_url_with_protocol(optional($data->domain)->domain).'?aupanier_login_token='.getLoginToken($data->id)}}}">{{__('Website')}}</a>
                                    <a class="btns admin"
                                       href="{{tenant_url_with_protocol(optional($data->domain)->domain).'/admin?aupanier_login_token='.getLoginToken($data->id)}}">{{__('Admin')}}</a>
                               </div>
								</div>
							   @endforeach
						  </div>
					</div>
                </div>

            </div>
            <div class="custom_domain_wrap mt-4">
                <h4 class="custom_domain_title">{{__('Recent Orders')}}</h4>
                <div class="payment custom_domain_table mt-4">
                    <table class="table table-bordered recent_payment_table">
                        <thead>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Order Name')}}</th>
                        <th>{{__('Package Name')}}</th>
                        <th>{{__('Amount')}}</th>
                        <th>{{__('Payment Status')}}</th>
                        <th>{{__('Start Date')}}</th>
                        <th>{{__('Expire Date')}}</th>
                        <th>{{__('Renew Taken')}}</th>
                        </thead>
                        <tbody class="w-100">
                        @foreach($recent_logs as $key=> $data)
                            <tr>
                                <td>{{$key +1}}</td>
                                <td>{{$data?->domain?->domain ?? __('Unsuccessful Transaction')}}</td>
                                <td>{{$data->package_name}}</td>
                                <td>{{ amount_with_currency_symbol($data->package_price) }}</td>
                                <td>{{ $data->payment_status }}</td>
                                <td>{{date('d-m-Y', strtotime($data->start_date))}}</td>
                                <td>{{$data->expire_date != null ? date('d-m-Y', strtotime($data->expire_date)) : __('Lifetime')}}</td>
                                <td>{{$data->renew_status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @push('custom-scripts')
    <script>
        const domain = '{{ request('domain') }}';
        const targetElement = document.getElementById(domain);

        if (targetElement) {
            targetElement.scrollIntoView({ behavior: "smooth", block : "center" });
        }
    </script>
    @endpush
	 @stack('custom-scripts')
    @endsection





