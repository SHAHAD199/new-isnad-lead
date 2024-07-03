<?php 

namespace App\Services\Leads;

use App\Helpers\JsonResponse;
use App\Http\Resources\LeadResource;
use App\Models\Lead;

class PostLeadService 
{
    public static function store($request)
    {
        try
        {
          $item = Lead::create($request->all());
          return JsonResponse::createResponse(new LeadResource($item));   
        }
        catch(\Exception $e)
        {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}