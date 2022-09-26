@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Categories</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <table id="example" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>English Name</th>
                                    <th>Arabic Name</th>
                                    <th>Seperate</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches11" checked>
                                            <label class="custom-control-label" for="customSwitches11">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches10">
                                            <label class="custom-control-label" for="customSwitches10">Banned</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches1" checked>
                                            <label class="custom-control-label" for="customSwitches1">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches2" checked>
                                            <label class="custom-control-label" for="customSwitches2">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches3" checked>
                                            <label class="custom-control-label" for="customSwitches3">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches4" checked>
                                            <label class="custom-control-label" for="customSwitches4">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches5" checked>
                                            <label class="custom-control-label" for="customSwitches5">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches6" checked>
                                            <label class="custom-control-label" for="customSwitches6">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches7" checked>
                                            <label class="custom-control-label" for="customSwitches7">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches8" checked>
                                            <label class="custom-control-label" for="customSwitches8">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches9" checked>
                                            <label class="custom-control-label" for="customSwitches9">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button>
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