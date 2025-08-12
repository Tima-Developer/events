<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Event\ListRequest;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Список мероприятий
     * 
     * @param  ListRequest  $request
     * @return JsonResponse
     */
    public function list(ListRequest $request): JsonResponse
    {
        $builder = Event::query();
        $perPage = $request->get('per_page', 10);

        if (isset($request->search)) {
            $builder->where('title', 'like', "%$request->search%");
        }

        if (isset($request->date_start)) {
            $builder->whereDate('event_date', '>=', $request->date_start);
        }

        if (isset($request->date_end)) {
            $builder->whereDate('event_date', '<=', $request->date_end);
        }

        $events = $builder->orderBy('created_at', 'desc')->paginate($perPage);

        return response()->json(EventResource::collection($events));
    }

    /**
     * Детальные данные ивента
     * 
     * @param  mixed        $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $event = Event::where('id', $id)->first();

        if (!$event instanceof Event) {
            return response()->json([
                'message' => 'Событие не найдено',
            ], 400);
        }

        return response()->json(new EventResource($event));
    }
}
