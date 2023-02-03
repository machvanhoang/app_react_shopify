<?php

if (!function_exists('sendResponse')) {
    function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'result'    => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }
}

if (!function_exists('sendError')) {
    function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
}
// if (!function_exists('ValidateDomain')) {
//     // Validate shop request
//     function ValidateDomain($shop = null)
//     {
//         $domain = '.myshopify.com';
//         if (is_null($shop))
//             return false;
//         $array = explode($domain, $shop);
//         if (count($array) === 2 && $array[1] == "") {
//             return true;
//         }
//         return false;
//     }
// }
// if (!function_exists('getMedia')) {
//     // get Media Product
//     function getMedia($media)
//     {
//         $image = null;
//         if (!empty($media['edges']) && !empty($media['edges'][0]) && !empty($media['edges'][0]['node'])) {
//             $image = $media['edges'][0]['node']['preview']['image']['originalSrc'];
//         }
//         return $image;
//     }
// }