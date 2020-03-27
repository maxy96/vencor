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
          'picture_url' => asset('image/default.png'),
          'quantity' => 1,
          'currency_id' => 'ARS',
          'unit_price' => 0.1       
        ],
        
      ],
    ];

    $preference = MP::create_preference($preferenceData);
    //$preference->back_urls = ['success' => 'hola'];
    $preference['response']['back_urls'] = [ 'failure' => route('cart.index')];
    $a = $preference['response']['id'];
    $url = $preference['response']['sandbox_init_point'];     
    return dd($url);
    //view('contenido.prueba', compact('a'));

  }
}
