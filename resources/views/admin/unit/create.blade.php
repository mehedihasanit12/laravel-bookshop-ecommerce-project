@extends('admin.master')

@section('body')



    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="mb-0">Add Unit Form</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body pt-5">
                    <p class="text-center text-success">{{session('message')}}</p>
                    <form action="{{route('unit.store')}}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Unit Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" name="name" placeholder="Enter Unit Name" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Unit Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" name="code" placeholder="Enter Unit Code" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2" for="basic-default-company">Publication Status</label>
                            <div class="col-sm-10">
                                <label for=""><input type="radio" name="status" checked value="1"/> Published</label>
                                <label for=""><input type="radio" name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Unit Description</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-message" class="form-control" placeholder="Unit Description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Create New Unit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection

