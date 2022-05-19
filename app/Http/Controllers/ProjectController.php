<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('projects.index',[
            'projects'=>Project::latest('id')->paginate()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        /*Solo para que retorne los campos validados.

        $fields = request()->validate([
            'title'=> 'required',
            'description'=>'required',
            'url'=>'required'
        ]);*/

        Project::create($request->validated());//tomara todos los campos validados

        //Project::create(request()->only('title','url','description'));

        /*return
            Project::create([
                'title' => request('title'),
                'url' => request('url'),
                'description' => request('description')
            ]);*/

        //Para volver a la vista de projects, es como el header location en php
        return redirect()->route('projects.index')->with('status','El proyecto ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    // Ocupando Route Model Binding
    public function show(Project $project)//Para retornar valor que corresponde al id que se selecciona.
    {

        return view('projects.show', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        //Ruta donde esta el fomulario para crear proyectos.
        return view('projects.create',[
            'project'=> new Project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        /*Para hacer actualización
        $project->update([
            'title'=>request('title'),
            'url'=>request('url'),
            'description'=>request('description')
        ]);*/

        $project->update($request->validated());

        return redirect()->route('projects.show',$project)->with('status','Proyecto actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status','Proyecto eliminado con exito');
    }

    public function edit(Project $project){

        return view('projects.edit', ['project' => $project]);
    }
}
