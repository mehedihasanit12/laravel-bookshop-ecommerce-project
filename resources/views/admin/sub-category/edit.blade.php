@extends('admin.master')

@section('body')



    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="mb-0">Edit Category Form</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body pt-5">
                    <form action="{{route('sub-category.update', ['id' => $sub_category->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category_id" id="">
                                    <option value="">--Select Option--</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" @selected($sub_category->category_id == $category->id)>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="basic-default-name" value="{{$sub_category->name}}" placeholder="Sub Category Name" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2" for="basic-default-company">Publication Status</label>
                            <div class="col-sm-10">
                                <label for=""><input type="radio" name="status" {{$sub_category->status == 1 ? 'checked' : ''}} value="1" /> Published</label>
                                <label for=""><input type="radio" name="status" {{$sub_category->status == 0 ? 'checked' : ''}} value="0" /> Unpublished</label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Sub Category Image</label>
                            <div class="col-sm-10">
                                <input type="file" id="basic-default-phone" class="form-control" name="image" />
                                <img src="{{asset($sub_category->image)}}" width="70" height="70" class="mt-3" alt="">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Sub Category Description</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-message" class="form-control" name="description" placeholder="Sub Category Description" >{{$sub_category->description}}</textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Sub Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
