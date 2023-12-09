<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{__('Package Invoice')}}</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .invoice-header {
      background-image: url("path/to/logo.png");
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center top;
      padding: 20px;
      text-align: center;
    }
    .invoice-header h1 {
      margin: 0;
    }
    .invoice-details {
      padding: 20px;
      margin-bottom: 20px;
    }
    .invoice-details p {
      margin: 5px 0;
    }
    .invoice-table {
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
    .invoice-total {
      text-align: right;
      padding: 20px;
      font-weight: bold;
    }
    .invoice-footer {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
      position: absolute;
      bottom: 20px;
      right: 20px;
      left: 20px;
    }
    .logo-corner {
      position: absolute;
      top: 20px;
      right: 20px;
      width: 100px;
    }
    </style>
</head>
<body>
    <div class="invoice-header">
        <h1>{{__('Package Invoice')}}</h1>
      </div>
    
      <div class="invoice-details">
        <p>{{__('Order ID')}}:#<strong>{{$payment_details->id ?? ''}}</strong></p>
        <p>Date: <strong>{{date('d F Y');}}</strong></p>
        <p>{{__('Billing Name')}}: <strong>{{$payment_details->name ?? ''}}</strong></p>
        <p>{{__('Billing Email')}}:<strong>{{$payment_details->email ?? ''}}</strong></p>
        @if($payment_details->user->matricule_fiscal) 
        <p>{{__('TIN')}}: <strong>{{$payment_details->user->matricule_fiscal}}</strong></p>
        @endif
      @if($payment_details->user->code_tva) 
       <p>{{__('TVA code')}}: <strong>{{$payment_details->user->code_tva}}</strong></p>
      @endif
      </div>
    
      <div class="invoice-table">
        <table>
          <thead>
            <tr>
              <th>{{__('Package Name')}}</th>
              <th>Description</th>
              <th>{{__('Package Price')}}</th>
              <th>{{__('Package Start Date :')}}</th>
              <th>{{__('Package Expire Date :')}}</th>
              <th>{{__('Tax rate')}}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$payment_details->package_name ?? ''}}</td>
              <td>Item 1 description</td>
              <td>{{amount_with_currency_symbol($payment_details->package_price*81/100)}}</td>
              <td>{{date('d F Y',strtotime($payment_details->start_date))}}</td>
              <td>{{date('d F Y',strtotime($payment_details->expire_date))}}</td>
              <td>19%</td>
            </tr>
          </tbody>
        </table>
      </div>
    
      <div class="invoice-total">
        <p>{{__('excluding TVA:')}} {{amount_with_currency_symbol((float)($payment_details->package_price *81/100)) ?? ''}}</p>
        <h3><strong>TTC : {{amount_with_currency_symbol($payment_details->package_price ?? '')}}</strong></h3>
      </div>
    
      <div class="invoice-footer">
        <p>{{__('Thank you for your business !')}}</p>
      </div>
    
      {!! render_image_markup_by_attachment_id(get_static_option('invoice_logo'),"logo-corner") !!}

</body>
</html>
