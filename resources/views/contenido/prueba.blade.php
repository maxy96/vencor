@extends('layouts.app')
@section('content')
<form action="/procesar-pago" method="POST">
                      <script
                       src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                       data-preference-id="{{ $preference->response->id ?? ''}}">
                      </script>
</form>
@endsection