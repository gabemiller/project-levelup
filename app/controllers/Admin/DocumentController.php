<?php

namespace Admin;

use Divide\CMS\Document;
use View;
use Validator;
use Input;
use Redirect;

class DocumentController extends \BaseController {

    protected $layout = '_backend.master';

    /**
     * Display a listing of the resource.
     * GET /admin\document
     *
     * @return Response
     */
    public function index() {
        View::share('title', 'Dokumentumok');

        $this->layout->content = View::make('admin.document.index')->with('documents', Document::all(['id', 'name', 'created_at']));
    }

    /**
     * Show the form for creating a new resource.
     * GET /admin\document/create
     *
     * @return Response
     */
    public function create() {
        View::share('title', 'Új dokumentum');

        $this->layout->content = View::make('admin.document.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /admin\document
     *
     * @return Response
     */
    public function store() {
        try {

            $rules = array(
                'name' => 'required|unique:document',
                'file' => 'required'
            );

            $validation = Validator::make(Input::all(), $rules);

            if ($validation->fails()) {
                return Redirect::back()->withInput()->withErrors($validation->messages());
            }

            $doc = new Document();

            $doc->name = Input::get('name');
            $doc->description = Input::get('description');
            
            dd($doc);
            
            $doc->path = $path;



            if ($doc->save()) {
                return Redirect::back()->with('message', 'A dokumentum feltöltése sikerült!');
            } else {
                return Redirect::back()->withInput()->withErrors('A dokumentum feltöltése nem sikerült!');
            }
        } catch (Exception $e) {
            if (Config::get('app.debug')) {
                return Redirect::back()->withInput()->withErrors($e->getMessage());
            } else {
                return Redirect::back()->withInput()->withErrors('A dokumentum feltöltése nem sikerült!');
            }
        }
    }

    /**
     * Display the specified resource.
     * GET /admin\document/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $doc = Document::find($id);

        View::share('title', 'Dokumentum: ' . $doc->name);

        $this->layout->content = View::make('admin.document.show')->with('document', $doc);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /admin\document/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $doc = Document::find($id);

        View::share('title', 'Dokumentum szerkesztése: ' . $doc->name);

        $this->layout->content = View::make('admin.document.edit')->with('document', $doc);
    }

    /**
     * Update the specified resource in storage.
     * PUT /admin\document/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /admin\document/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        try {

            $article = Dcoument::find($id);

            if ($article->delete()) {
                return Response::json(['message' => 'A(z) ' . $id . ' azonosítójú dokumentum törlése sikerült!', 'status' => true]);
            } else {
                return Response::json(['message' => 'A(z) ' . $id . ' azonosítójú dokumentum törlése nem sikerült!', 'status' => false]);
            }
        } catch (Exception $e) {
            if (Config::get('app.debug')) {
                return Response::json(['message' => $e->getMessage(), 'status' => false]);
            } else {
                return Response::json(['message' => 'A(z) ' . $id . ' azonosítójú dokumentum törlése nem sikerült!', 'status' => false]);
            }
        }
    }

}
