<?php

namespace Admin;

use Divide\CMS\Document;
use View;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /admin\document
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     * GET /admin\document/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /admin\document/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
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
        //
    }

}
