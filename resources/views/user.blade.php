@extends('layout.home')

@section('content')
    <div class="container-fluid">
        <div class="side-body padding-top">

            <div id="voyager-notifications"></div>
            <div class="container-fluid">
                <div class="alert alert-info">
                    <strong>How To Use:</strong>
                    <p>You can output a menu anywhere on your site by calling <code>menu('name')</code></p>
                </div>
            </div>

            <div class="page-content container-fluid">
                <div class="alerts">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-bordered">
                            <div class="panel-body">
                                <table id="dataTable" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th class="actions text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                admin
                                            </td>
                                            <td class="no-sort no-click bread-actions">
                                                <div class="btn btn-sm btn-danger pull-right delete" data-id="1">
                                                    <i class="voyager-trash"></i> Delete
                                                </div>
                                                <a href="http://localhost/nfdc-admin/public/admin/menus/1/edit"
                                                    class="btn btn-sm btn-primary pull-right edit">
                                                    <i class="voyager-edit"></i> Edit
                                                </a>
                                                <a href="http://localhost/nfdc-admin/public/admin/menus/1/builder"
                                                    class="btn btn-sm btn-success pull-right">
                                                    <i class="voyager-list"></i> Builder
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">
                                <i class="voyager-trash"></i> Are you sure you want to delete this Menu?
                            </h4>
                        </div>
                        <div class="modal-footer">
                            <form action="#" id="delete_form" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="Gbv0TEV18QqGKgUd4ZxK3zVAgw9Q386crSoNfKiU"
                                    autocomplete="off">
                                <input type="submit" class="btn btn-danger pull-right delete-confirm"
                                    value="Yes, Delete This Menu">
                            </form>
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
