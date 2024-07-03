<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Requests\Leads\{StoreLeadRequest, UpdateLeadRequest};
use App\Services\Leads\{GetLeadService, PostLeadService};
use Illuminate\Routing\Controllers\Middleware;

use Illuminate\Http\Request;

class LeadController extends Controller  implements \Illuminate\Routing\Controllers\HasMiddleware
{
    private  $getLeadService, $postLeadService;
    public function __construct(GetLeadService $getLeadService, PostLeadService $postLeadService)
    {
        $this->getLeadService = $getLeadService;
        $this->postLeadService = $postLeadService;
    }

    public static function middleware(): array
    {
        return [
            new Middleware(middleware: 'auth:api', except: ['store'])
        ];
    }



    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->getLeadService->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeadRequest $request)
    {
        return $this->postLeadService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
