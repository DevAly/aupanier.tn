@extends('landlord.frontend.user.dashboard.user-master')

@section('title')
    {{ __('Wallet') }}
@endsection

@section('page-title')
    {{ __('Wallet') }}
@endsection

@section('style')
    <style>
        label{
            text-transform: capitalize;
        }
    </style>
    <x-frontend-switcher-css/>
@endsection

@section('section')
    <!-- Dashboard area Starts -->
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
  width:100px;
  height:100px;
}
.form-element input {
  display:none;
}
.form-element label {
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
.form-element label:before {
  content:"✓";
  position:absolute;
  width:18px;
  height:18px;
  top:8px;
  left:8px;
  background:#0d0df1;
  color:#fff;
  text-align:center;
  line-height:18px;
  font-size:14px;
  font-weight:600;
  border-radius:50%;
  opacity:0;
  transform:scale(0.5);
  transition:all 200ms ease-in-out;
}
.form-element input:checked + label:before {
  opacity:1;
  transform:scale(1);
}
.form-element input:checked + label .icon {
  color:#0d0df1;
}
.form-element input:checked + label .title {
  color:#0d0df1;
}
.form-element input:checked + label {
  border:2px solid #0d0df1;
}
</style>
    <div class="single-orders">
        <div class="orders-flex-content">
            <div class="icon">
                <i class="las la-dollar-sign"></i>
            </div>
            <div class="contents">
                <h2 class="order-titles">
                    @if(empty($balance->balance))
                        {{ float_amount_with_currency_symbol(0.00) }}
                    @else
                        {{ float_amount_with_currency_symbol($balance->balance) }}
                    @endif
                </h2>
                <span class="order-para">{{ __('Wallet Balance') }} </span>
            </div>
        </div>
    </div>

    <div class="dashboard-settings margin-top-55 d-flex justify-content-between">
        <div>
            <h2 class="dashboards-title">{{ __('Wallet Settings') }} </h2>
        </div>
    </div>

    <div class="single-dashboard-order mt-5">
        <div class="table-responsive table-responsive--md">
            <form action="{{route('landlord.user.wallet.settings')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>{{__('Enable/Disable Package Renewal')}}</label>
                    <label class="switch ">
                        <input type="checkbox" name="renewal_using_wallet" {{!empty($settings) && $settings->renew_package ? 'checked' : ''}}>
                        <span class="slider onff"></span>
                    </label>
                </div>

                <div class="form-group tenant_list" style="position:relative">
                    <div class="containerlist">
						  	  <div class="list">
                        @php
                            $user = Auth::guard('web')->user();
                            if (!empty($user->wallet_tenant_list))
                                {
                                    $user_tenants = $user->wallet_tenant_list->pluck('tenant_id')->toArray();
                                }

                            $tenant_list = $user?->tenant_details->where('expire_date', '!=', null);
                        @endphp
                        @foreach($tenant_list as $tenant)
                        
							    <div class="form-element">
								 <input type="checkbox" name="tenants_list[]" id="{{$loop->iteration}}" class="exampleCheck1"
                                       value="{{$tenant->id}}" {{in_array($tenant->id, $user_tenants) ? 'checked' : ''}}>
								 
								    <label class="ml-1" for="{{$loop->iteration}}">
									<div class="icon">
									  <i class="las la-store-alt"></i>
									</div>
									<div class="title">
									  {{$tenant->id}}
									</div>
                                    
                                </label>
								</div>
                        @endforeach
                    
						  </div>
					</div>
                </div>

                <div class="form-group mt-3">
                    <label>{{__('Get wallet balance alert')}}</label>
                    <label class="switch ">
                        <input type="checkbox" name="wallet_balance_alert" {{!empty($settings) && $settings->wallet_alert ? 'checked' : ''}}>
                        <span class="slider onff"></span>
                    </label>
                </div>

                <div class="form-group minimum_alert_amount_wrapper">
                    <label for="name" class="label-title">{{__('Alert for Minimum amount').' ('.site_currency_symbol().')'}}</label>
                    <input type="text" class="form-control form--control" id="minimum_alert_amount" name="minimum_alert_amount" placeholder="Example 100" value="{{!empty($settings) ? $settings->minimum_amount : ''}}"/>
                </div>

                <div class="form-group mt-3">
                    <button class="btn btn-primary" type="submit">{{__('Submit')}}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/backend/js/sweetalert2.js') }}"></script>
    <x-wallet-payment-gateway-js/>
    <script>
        (function ($) {
            "use strict";

            $(document).ready(function () {
                let tenant_list = $('.tenant_list');

                @if(!empty($settings) && !$settings->renew_package)
                    tenant_list.hide();
                @endif


                let alert_minimum_amount = $('.minimum_alert_amount_wrapper');
                @if(!empty($settings) && !$settings->wallet_alert)
                    alert_minimum_amount.hide();
                @endif

                $(document).on('click', 'input[name=renewal_using_wallet]', function (e) {
                    if ($(this).is(':checked'))
                    {
                        tenant_list.fadeIn();
                    } else {
                        tenant_list.fadeOut();
                        setTimeout(()=>{
                            tenant_list.find('input').removeAttr('checked');
                        }, 500)
                    }
                });

                $(document).on('click', 'input[name=wallet_balance_alert]', function (e) {
                    if ($(this).is(':checked'))
                    {
                        alert_minimum_amount.fadeIn();
                    } else {
                        alert_minimum_amount.fadeOut();
                        setTimeout(()=>{
                            alert_minimum_amount.find('input').val('');
                        }, 500)
                    }
                });
            });

        })(jQuery);
    </script>
@endsection
