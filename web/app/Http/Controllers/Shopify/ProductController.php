<?php

namespace App\Http\Controllers\Shopify;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shopify\Clients\Rest;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        $session = $request->get('shopifySession');
        $client = new Rest($session->getShop(), $session->getAccessToken());
        $result = $client->get('products');
        return response($result->getDecodedBody());
    }
}
