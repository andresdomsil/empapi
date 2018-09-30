<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'excerpt' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'linkmaps' => 'required',
            'costo' => 'required',
            'link' => 'required',
            'tlf' => 'required'

        ]);

        $event = new Event;
        $event->title = $request->get('title');
        $event->url= uniqid();
        $event->excerpt = $request->get('excerpt');
        $event->fecha = $request->get('fecha');
        $event->hora = $request->get('hora');
        $event->linkmaps = $request->get('linkmaps');
        $event->costo = $request->get('costo');
        $event->link = $request->get('link');
        $event->tlf = $request->get('tlf');
        $event->user_id = auth()->id();
        $event->save();
        return redirect()->route('admin.events.index')->with('flash', 'Evento creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {

      $event->delete();

      return back()->withFlash('El evento ha sido eliminada');
    }
}
