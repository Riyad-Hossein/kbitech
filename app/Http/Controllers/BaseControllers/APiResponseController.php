<?php

namespace App\Http\Controllers\BaseControllers;

// use App\Models\UserApiToken;

use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;

class APiResponseController extends Controller
{
    protected function successResponse(array $data, $description='Success'): \Illuminate\Http\JsonResponse
    {
        $response = array_merge([
            'status' => 200,
            'msg' => 'OK',
            'description' => $description
        ], $data);

        return response()->json($response);
    }

    protected function getPaginatedData($data) {
        return [
            'per_page' => $data->perPage(),
            'from' => $data->firstItem(),
            'to' => $data->lastItem(),
            'total' => $data->total(),
            'current_page' => $data->currentPage(),
            'last_page' => $data->lastPage(),
            'prev_page_url' => $data->previousPageUrl(),
            'first_page_url' => $data->url(1),
            'next_page_url' => $data->nextPageUrl(),
            'last_page_url' => $data->url($data->lastPage())
        ];
    }
//: \Illuminate\Http\JsonResponse
    protected function validationError(MessageBag|array $errorBag)
    {
        //make errorBag as a string with separator as line break

        if (is_array($errorBag)) {
            $errorMessages = $this->convertMultiDimentionalArrayToString($errorBag);
        } else {
            $errorMessages = implode("\n", $errorBag->all());
        }
        $response = [
            'status' => 400,
            'msg' => 'error',
            'description' => $errorMessages,
            'errors' => $errorBag
        ];
        return response()->json($response);
    }

    public function convertMultiDimentionalArrayToString($array) {
        if (count($array) == count($array, COUNT_RECURSIVE)) {
            return implode("\n", $array);
        } else {
            return implode("\n", array_map(function ($a) {
                return implode("\n", $a);
            }, $array));
        }
    }

    protected function serverError(string $msg): \Illuminate\Http\JsonResponse
    {
        $response = [
            'status' => 500,
            'msg' => 'error',
            'description' => 'Internal Server Error',
            'errors' => [$msg]
        ];
        return response()->json($response);
    }

    protected function customError(int $code, string $description, string $msg): \Illuminate\Http\JsonResponse
    {
        $response = [
            'status' => $code,
            'msg' => 'error',
            'description' => $description,
            'errors' => [$msg]
        ];
        return response()->json($response);
    }

    protected function customErrorWithData(int $code, string $description, array $errors=[], array $data=[]): \Illuminate\Http\JsonResponse
    {
        $response = [
            'status' => $code,
            'msg' => 'error',
            'description' => $description,
            'errors' => $errors,
            'data' => $data
        ];
        return response()->json($response);
    }

    protected function notFoundError(string $msg): \Illuminate\Http\JsonResponse
    {
        $response = [
            'status' => 404,
            'msg' => 'error',
            'description' => 'Not Found',
            'errors' => [$msg]
        ];
        return response()->json($response, 404);
    }

    protected  function unauthorizedResponse(): \Illuminate\Http\JsonResponse
    {
        $response = [
            'status' => 401,
            'msg' => 'error',
            'description' => 'Unauthorized',
            'errors' => ['Unauthorized']
        ];
        return response()->json($response);
    }

    // protected function checkAuth($request){
    //     $token_array = explode('&&',$request->bearerToken());
    //     $token = $token_array[0];
    //     $device_id = $token_array[1] ?? '';

    //     $mobile_auth = UserApiToken::with('user')
    //         ->where('device_id', $device_id)
    //         ->where('api_token', $token)
    //         ->where('status', 1)
    //         ->first();
    //     if (empty($mobile_auth)) {
    //         return false;
    //     }

    //     return $mobile_auth->user;
    // }
}
