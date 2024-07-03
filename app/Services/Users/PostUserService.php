<?php 

namespace App\Services\Users;

use App\Helpers\JsonResponse;
use App\Http\Resources\UserResource;
use App\Models\User;

class PostUserService 
{
    public static function store($request)
    {
        try
        {
          $item = User::create($request->all());
          return JsonResponse::createResponse(new UserResource($item));   
        }
        catch(\Exception $e)
        {
            return JsonResponse::respondError($e->getMessage());
        }
    }

    public static function update($request, $item)
    {
        try
        {
          $item->update($request->all());
          return JsonResponse::updateResponse(new UserResource($item));   
        }
        catch(\Exception $e)
        {
            return JsonResponse::respondError($e->getMessage());
        }
    }


    public function destroy($item)
    {
        try
        {
            $item->delete();
            return JsonResponse::deleteAllResponse($item->id,'id'); 
        }
        catch(\Exception $e)
        {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}