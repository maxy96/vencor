<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MP;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MercadoPagoController extends Controller
{
  public function getCreatePreference()
  {

    $preferenceData = [
      'items' => [
        [
          'id' => 12,
          'category_id' => 'phones',
          'title' => 'iPhone 6',
          'description' => 'iPhone 6 de 64gb nuevo',
          'picture_url' => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone8-select-2019-family?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1550795431127",
          'quantity' => 1,
          'currency_id' => 'ARS',
          'unit_price' => 0.1       
        ],
        [
          'id' => 12,
          'category_id' => 'phones',
          'title' => 'iPhone 6',
          'description' => 'iPhone 6 de 64gb nuevo',
          'picture_url' => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone8-select-2019-family?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1550795431127",
          'quantity' => 1,
          'currency_id' => 'ARS',
          'unit_price' => 0.1       
        ],
      ],
    ];

    $preference = MP::create_preference($preferenceData);
    //dd($preference);
    //$preference->back_urls = ['success' => 'hola'];
    $preference['response']['back_urls'] = [ 'failure' => route('cart.index')];
    $a = $preference['response']['id'];
    $url = $preference['response']['sandbox_init_point'];     
    return view('contenido.prueba', compact('a'));
  }
}
