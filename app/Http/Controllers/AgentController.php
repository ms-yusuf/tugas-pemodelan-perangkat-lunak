<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Agent;

class AgentController extends Controller
{
  public function index()
  {
    $items = Agent::latest('updated_at')->get();

    return view('admin.agents.index', compact('items'));
  }

  public function create()
  {
    return view('admin.agents.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, Agent::rules());

    Agent::create($request->all());

    return back()->withSuccess(trans('app.success_store'));
  }

  public function edit($id)
  {
    $item = Agent::findOrFail($id);

    return view('admin.agents.edit', compact('item'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, Agent::rules(true, $id));

    $item = Agent::findOrFail($id);

    $item->update($request->all());

    return redirect()->route(ADMIN . '.agents.index')->withSuccess(trans('app.success_update'));
  }
  
  public function destroy($id)
  {
    Agent::destroy($id);

    return back()->withSuccess(trans('app.success_destroy'));
  }
}

