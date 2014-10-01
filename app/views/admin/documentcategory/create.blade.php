@extends('_backend.master')
@section('content')
<section class="content-header">
    <h1>Dokumentum kategóriák</h1>
    {{-- HTML::decode(Breadcrumbs::render('')) --}}
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

            <div class="box box-solid box-divide">
                <div class="box-header">
                    <h3 class="box-title">Új dokumentum kategória</h3>
                </div>
                <div class="box-body">

                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">

            <div class="box box-solid box-divide">
                <div class="box-header">
                    <h3 class="box-title">Dokumentum kategóriák</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table-sortable">
                            <thead>
                                <tr>
                                    <th class="table-col-xs sorter-false filter-false"><input type="checkbox" id="checkAll"></th>
                                    <th class="table-col-xs">Az</th>
                                    <th class="table-col-xs">Sz_Az</th>
                                    <th>Név</th>
                                    <th>Létrehozva</th>
                                    <th class="table-col-xs sorter-false filter-false">Beállítások</th>
                                </tr>           
                            </thead>
                            <tbody>
                                @each('admin.documentcategory.single',$docCategories,'docCategory','admin.documentcategory.empty')
                            </tbody>
                            @include('_backend.table-footer')
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@stop