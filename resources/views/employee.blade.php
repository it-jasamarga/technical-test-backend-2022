@extends('layout')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-modal" data-target="#modal-form"><i class="mdi mdi-plus"></i> New Data</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-success btn-modal" data-target="#modal-import"><i class="mdi mdi-download"></i> Import</a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-stripde table-bordered table-data">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Employee Name</th>
                                            <th>Unit</th>
                                            <th>Position</th>
                                            <th>Date of Birth</th>
                                            <th>Place of Birth</th>
                                            <th>Status</th>
                                            <th>Last Updated Date</th>
                                            <th>Updated By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10552</td>
                                            <td>Christoper R. Gracia</td>
                                            <td>Information Technology Group</td>
                                            <td>Information Technology Specialist</td>
                                            <td>20 December 1997</td>
                                            <td>Karawang</td>
                                            <td><span class="badge badge-danger">Inactive</span></td>
                                            <td>10 December 2022, 19:08</td>
                                            <td>Superadmin</td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-modal" data-target="#modal-form"><i class="mdi mdi-pencil"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>09281</td>
                                            <td>Philip E. Hall</td>
                                            <td>Accounting & Tax</td>
                                            <td>Tax Officer</td>
                                            <td>28 Febryary 1998</td>
                                            <td>Tangerang</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>4 September 2022, 19:08</td>
                                            <td>Superadmin</td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-modal" data-target="#modal-form"><i class="mdi mdi-pencil"></i> Edit</a>
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
    </div>
</div>

<div class="modal fade" id="modal-form" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add/Edit Data</h5>
            </div>
            <div class="modal-body">
                <form class="forms-sample">
                    <div class="form-group row">
                        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="NIK" id="nik">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Name" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unit" class="col-sm-3 col-form-label">Unit</label>
                        <div class="col-sm-9">
                            <select name="" id="unit" class="form-control form-control-lg select2" style="width: 100%">
                                <option value="">Information Technology Group</option>
                                <option value="">Accounting & Tax</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-sm-3 col-form-label">Position</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Position" id="position">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dob" class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" placeholder="Date of Birth" id="dob">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="place_of_birth" class="col-sm-3 col-form-label">Place of Birth</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Place of Birth" id="place_of_birth">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select name="" id="status" class="form-control form-control-lg select2" style="width: 100%">
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-import" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
            </div>
            <div class="modal-body">
                <form class="forms-sample">
                    <div class="form-group row">
                        <label for="file" class="col-sm-3 col-form-label">Select File</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="file">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="progress" style="height: 15px">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>

        let table = $('#table-data').DataTable();

        $('.btn-modal').on('click', function() {

            let modal = $(this).attr('data-target')

            $(modal).modal('show')

        })

    </script>
@endsection
