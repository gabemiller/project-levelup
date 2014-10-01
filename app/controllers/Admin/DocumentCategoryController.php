<?php

namespace Admin;

use Divide\CMS\DocumentCategory;
use View;
use Validator;
use Input;
use Redirect;
use Config;
use Str;
use File;
use Response;

class DocumentCategoryController extends \BaseController {

    protected $layout = '_backend.master';

    /**
     * Show the form for creating a new resource.
     * GET /admin\documentcategory/create
     *
     * @return Response
     */
    public function create() {
        View::share('title', 'Dokumentum kategóriák');

        $this->layout->content = View::make('admin.documentcategory.create')->with('docCategories',  DocumentCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     * POST /admin\documentcategory
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     * GET /admin\documentcategory/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /admin\documentcategory/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /admin\documentcategory/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /admin\documentcategory/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
