<?php 

namespace App\Services\Users;

use App\Helpers\JsonResponse;
use App\Helpers\PerPage;
use App\Http\Resources\UserResource;
use App\Models\User;
use Spatie\QueryBuilder\QueryBuilder;

class GetUserService 
{
    public function index($request)
    {
        try
        {
         $pagination = QueryBuilder::for(User::class)
                       ->allowedFilters(['name','phone'])                      
                       ->paginate(PerPage::perPageFunction($request));     

         $items      = UserResource::collection($pagination);
         return JsonResponse::respondSuccess($items, $pagination);
        }
        catch(\Exception $e)
        {
            return JsonResponse::respondError($e->getMessage());
        }
    
    }


    public static function show($item)
    {
        try
        {
            return new UserResource($item);
        }
        catch(\Exception $e)
        {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}