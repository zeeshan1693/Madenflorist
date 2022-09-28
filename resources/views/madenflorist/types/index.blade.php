@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Types</h1>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="text-right">
                    <a href="{{ route('types.create') }}"><button type="button" class="btn btn-maden">Add Type</button></a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>English Name</th>
                                    <th>Arabic Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Anthurium</td>
                                    <td>Anthurium</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('types.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Baby Rose</td>
                                    <td>Baby Rose</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('types.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Calla</td>
                                    <td>Calla</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('types.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>Card</td>
                                    <td>Card</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('types.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-styles')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('page-script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
@stop