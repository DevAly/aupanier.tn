@extends(route_prefix().'admin.admin-master')
@section('title')
    {{__('All Orders')}}
@endsection
@section('style')
    <x-media-upload.css/>
    <x-datatable.css/>
    <x-summernote.css/>
    <style>
        .filter-order-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 0 15px;
            align-items: center;
            justify-content: space-between;
        }
		.table th, .table td,{
		font-size:12px !important;
		}
		.table .act{
			display:flex;
			flex-direction:row;
		}
		.table .act > *,.table .act >form> * {
			margin:2px;
			padding:8px;
			height:30px;
        vertical-align: middle;
			}
		.table .act > form {
			margin:0;
			padding:0;
			}
			
		.btn.btn-sm, .btn-group-sm > .btn{
			
		font-size:12px !important;
		padding: 0.3rem 0.5rem;
		
		}
.btn.maj{
			
		padding: 8px;
		
		
		}
table.table-bordered.dataTable th, table.table-bordered.dataTable td {
    border-left-width: 0;
    min-width: 30px;
	padding: 0 10px;
	height: 35px;
}

.flexy {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.status-btn.btn.btn-primary.btn-sm {
    display: flex;
    align-items: center;
    flex: 1;
    background-color: #eee;
    color: black;
    border-radius: 0;
    margin: 1em 0;
    text-align: left;
    padding: 10px;
    justify-content: space-between;
}

.status-btn.btn.btn-primary.btn-sm i {
    margin-left: 10px; /* Adjust the spacing between text and icon */
	font-size:30px;
}

.status-btn.btn.btn-primary.btn-sm:not(:first-child) {
    border-left: 0;
}
 .text-capitalize{
 padding: 6px !important;
 background-color:transparent;
 
 }
 .alert-danger {

	border :0;
border-left: 5px solid red!important;
}
.status-btn.btn.btn-primary.btn-sm.active {
    background-color: #b66dff;
    color: white;
}
.alert-info {
	
	border-left: 5px solid orange!important;
}


    </style>
@endsection
@section('title')
    {{__('All orders')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12">
        <div class="row g-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <x-error-msg/>
                        <x-flash-msg/>
                       <h4 class="header-title mb-4">{{__('All Orders')}}</h4>
					
                        <div class="table-wrap table-responsive ">
                                <div class="flexy">
                                    <button class="status-btn btn btn-primary btn-sm {{ request()->filter == 'all' ? 'active' : '' }}" data-filter="all">{{ __('All Order') }} <i class="las la-boxes"></i></button>
                                    <button class="status-btn btn btn-primary btn-sm {{ request()->filter == 'pending' ? 'active' : '' }}" data-filter="pending">{{ __('Pending') }} <i class="las la-exclamation"></i></button>
                                    <button class="status-btn btn btn-primary btn-sm {{ request()->filter == 'in_progress' ? 'active' : '' }}" data-filter="in_progress">{{ __('In Progress') }} <i class="las la-shipping-fast"></i></button>
                                    <button class="status-btn btn btn-primary btn-sm {{ request()->filter == 'complete' ? 'active' : '' }}" data-filter="complete">{{ __('Complete') }} <i class="las la-check-double"></i></button>
                                    <button class="status-btn btn btn-primary btn-sm {{ request()->filter == 'cancel' ? 'active' : '' }}" data-filter="cancel">{{ __('Cancel') }} <i class="las la-times"></i></button>
                                    </div>
                            <table class="table table-default table-striped table-bordered sml-fontsize">
                                <thead class="text-white" style="background-color: #b66dff">
                                <tr >
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Billing Name')}}</th>
										<!--   <th>{{__('Billing Email')}}</th> -->
                                    <th>{{__('Total')}}</th>
                                  <!--   <th>{{__('Payment Gateway')}}</th> -->
                                    <th>{{__('Payment Status')}}</th>
                                    <th>{{__('Order Status')}}</th>
                                    <th>{{__('Date')}}</th>
                                    <th>{{__('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_orders as $data)
                                    <tr>
                                        <td class="text-center">{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        	<!-- <td>{{$data->email}}</td>-->
                                        <td>{{amount_with_currency_symbol($data->total_amount)}}</td>
                                        <!-- <td class="text-capitalize">{{$data->checkout_type !== 'cod' ? __($data->payment_gateway) : __('Cash On Delivery')}}</td> -->
                                        <td>
                                            @if($data->payment_status === 'success')
                                                <span
                                                    class="alert alert-success text-capitalize">{{__($data->payment_status)}}</span>
                                            @else
                                                <span
                                                    class="alert alert-warning text-capitalize">{{__($data->payment_status) ?? __('Pending')}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($data->status == 'pending')
                                                <span
                                                    class="alert alert-warning text-capitalize" >{{__($data->status)}}</span>
                                            @elseif($data->status == 'cancel')
                                                <span
                                                    class="alert alert-danger text-capitalize">{{__($data->status)}}</span>
                                            @elseif($data->status == 'in_progress')
                                                <span 
                                                    class="alert alert-info text-capitalize">{{__(str_replace('_', ' ',ucwords($data->status)))}}</span>
                                            @else
                                                <span
                                                    class="alert alert-success text-capitalize">{{__($data->status)}}</span>
                                            @endif
                                        </td>
                                        <td>{{$data->created_at->format('d M Y')}}</td>
                                        <td class="act">
                                            <a href="#"
                                               data-bs-toggle="modal"
                                               data-bs-target="#user_edit_modal"
                                               class="btn btn-lg btn-info btn-sm mb-3 mr-1 user_edit_btn"
                                            >
                                                <i class="las la-envelope"></i>
                                            </a>
                                            <a href="{{route('tenant.admin.product.order.manage.view',$data->id)}}"
                                               class="btn btn-lg btn-primary btn-sm mb-3 mr-1 view_order_details_btn">
                                                <i class="las la-eye"></i>
                                            </a>

                                            @if($data->status !== 'cancel')
                                                <a href="#"
                                                   data-id="{{$data->id}}"
                                                   data-status="{{$data->status}}"
                                                   data-payment_status="{{$data->payment_status}}"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#order_status_change_modal"
                                                   class="btn btn-lg btn-info btn-sm mb-3 mr-1 order_status_change_btn maj"
                                                >{{__("Update Status")}}</a>
                                            @endif

                                            @if(!empty($data->user_id) && $data->payment_status == 'pending' || $data->payment_status == null)
                                                <form action="{{route(route_prefix().'admin.product.order.reminder')}}"
                                                      method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$data->id}}">
                                                    <button class="btn btn-secondary mb-2 btn-sm" type="submit"><i
                                                            class="las la-bell"></i></button>
                                                </form>
                                            @endif
                                            <form action="{{route(route_prefix().'admin.order.invoice.generate')}}"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                <button class="btn btn-dark btn-sm"
                                                        type="submit">{{__('Invoice')}}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('tenant.admin.product-order-manage.portion.status-and-mail-send')

    <x-media-upload.markup/>
@endsection

@section('scripts')
    <x-datatable.js/>
    <x-media-upload.js/>
    <x-summernote.js/>
    <x-bulk-action-js :url="route( route_prefix().'admin.product.order.bulk.action')" />

    <script>
        $(document).on('click', '.order_status_change_btn', function (e) {
            e.preventDefault();
            var el = $(this);
            var form = $('#order_status_change_modal');
            form.find('#order_id').val(el.data('id'));

            if (el.data('payment_status') === 'success') {
                form.find('#payment_status').parent().hide();
                form.find('#payment_status').removeAttr('name');
            } else {
                form.find('#payment_status').parent().show();
                form.find('#payment_status').attr('name', 'payment_status');
            }
            form.find('#payment_status option[value="' + el.data('payment_status') + '"]').attr('selected', true);
            form.find('#order_status option[value="' + el.data('status') + '"]').attr('selected', true);
        });

        (function ($) {
            "use strict";
            $(document).ready(function () {

                $(document).on('click', '.order_status_change_btn', function (e) {
                    e.preventDefault();
                    var el = $(this);
                    var form = $('#order_status_change_modal');
                    form.find('#order_id').val(el.data('id'));

                    if (el.data('payment_status') === 'success') {
                        form.find('#payment_status').parent().hide();
                        form.find('#payment_status').removeAttr('name');
                    } else {
                        form.find('#payment_status').parent().show();
                        form.find('#payment_status').attr('name', 'payment_status');
                    }
                    form.find('#payment_status option[value="' + el.data('payment_status') + '"]').attr('selected', true);
                    form.find('#order_status option[value="' + el.data('status') + '"]').attr('selected', true);
                });

                $('#all_user_table').DataTable({
                    "order": [[1, "desc"]],
                    'columnDefs': [{
                        'targets': 'no-sort',
                        'orderable': false
                    }]
                });
                $('.summernote').summernote({
                    height: 250,   //set editable area's height
                    codemirror: { // codemirror options
                        theme: 'monokai'
                    },
                    callbacks: {
                        onChange: function (contents, $editable) {
                            $(this).prev('input').val(contents);
                        }
                    }
                });


                $(document).on('click', '#filter_btn', function () {
                    let type = $('#filter_order').val();

                    location.href = '{{route('tenant.admin.product.order.manage.all').'?filter='}}' + type;
                });
            });
        })(jQuery);
    </script>
	
<script>
    // Get all elements with the class "my-button"
    var buttons = document.querySelectorAll('.status-btn');
    
    // Add a click event listener to each button
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Get the value assigned to the button
            var value = button.getAttribute('data-filter');
            
             location.href = '{{route('tenant.admin.product.order.manage.all').'?filter='}}' + value;
            // You can add your desired functionality here
        });
    });
</script>
@endsection
