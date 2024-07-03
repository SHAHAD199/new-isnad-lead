<?php 

namespace App\Services\Leads;

use App\Helpers\{JsonResponse, PerPage};
use App\Http\Resources\LeadResource;
use Spatie\QueryBuilder\QueryBuilder;
use App\Models\Lead;

class GetLeadService 
{
    public static function index($request)
    {
        try
        {
         $pagination = QueryBuilder::for(Lead::class)
                       ->allowedFilters(['name','phone','easy_downPayment',
                       'high_downPayment', 'horizontal_complex' , 'vertical_complex' , 'area_100_200',
                       'area_200_400' , 'middle_location' , 'suburbs_location' , 'out_bg_middle_cities',
                       'out_bg_south_cities', 'out_bg_kurdistan', 'purpose_purchase'
                       ])                      
                       ->paginate(PerPage::perPageFunction($request));     

         $items      = LeadResource::collection($pagination);
         return JsonResponse::respondSuccess($items, $pagination);
        }
        catch(\Exception $e)
        {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}