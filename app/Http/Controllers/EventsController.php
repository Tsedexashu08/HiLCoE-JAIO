<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\event_images;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function AddEvent(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'location' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'registration_link' => 'required|string',
        ]);
        $event = Event::create([
            'title' => $request->title,
            'location' => $request->location,
            'description'=> $request->description,
            'date'=> $request->date,
            'registration_link'=> $request->registration_link,
        ]);


        // Process the uploaded images
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('event_images', 'public');
                event_images::create([
                    'event_id' => $event->id,
                    'image' => $path,
                ]);
            }
        }
    }
}
