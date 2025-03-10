@extends('admin.master')

@section('body')



    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="mb-0">Add Book Form</h5> <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body pt-5">
                    <p class="text-center text-success">{{session('message')}}</p>
                    <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                            <div class="col-sm-10">
                                <select name="category_id" onchange="getSubCategoryByCategory(this.value)" class="form-control" id="">
                                    <option value="">--Select Book Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Category Name</label>
                            <div class="col-sm-10">
                                <select name="sub_category_id" class="form-control" id="subCategory">
                                    <option value="">--Select Book Sub Category--</option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Publisher Name</label>
                            <div class="col-sm-10">
                                <select name="publisher_id" class="form-control" id="">
                                    <option value="">--Select Book Publisher--</option>
                                    @foreach($publishers as $publisher)
                                        <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Author Name</label>
                            <div class="col-sm-10">
                                <select name="author_id" class="form-control" id="">
                                    <option value="">--Select Book Author--</option>
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Book Series Name</label>
                            <div class="col-sm-10">
                                <select name="book_series_id" class="form-control" id="">
                                    <option value="0">None</option>
                                    @foreach($book_seriess as $book_series)
                                        <option value="{{$book_series->id}}">{{$book_series->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Language Name</label>
                            <div class="col-sm-10">
                                <select name="language_id" class="form-control" id="">
                                    <option value="">--Select Book Language--</option>
                                    @foreach($languages as $language)
                                        <option value="{{$language->id}}">{{$language->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Book Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Book Name" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Book Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="code" placeholder="Book Code" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Book Price</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="regular_price" placeholder="Regular Price" />
                                    <input type="number" class="form-control" name="selling_price" placeholder="Selling Price" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Stock Amount</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="stock" placeholder="Product Stock Amount" />
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
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Book Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Book Other Image</label>
                            <div class="col-sm-10">
                                <input type="file" multiple name="other_image[]" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Short Description</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" name="short_description" placeholder="Short Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Long Description</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" id="summernote" name="long_description" placeholder="Long Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Meta Title</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" name="meta_title" placeholder="Meta Title"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" name="meta_description" placeholder="Meta Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Tags</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" name="tags" placeholder="Enter tags, separated by commas">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Pages</label>
                            <div class="col-sm-10">
                                <input type="number"  class="form-control" name="pages" placeholder="Book Pages">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Book Published Date</label>
                            <div class="col-sm-10">
                                <input type="date"  class="form-control" name="published_date" placeholder="Book Publishe Date">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Book Format</label>
                            <div class="col-sm-10">
                                <select name="book_format" class="form-control" id="">
                                    <option value="">--Select Book Format--</option>
                                    <option value="0">Hardcover</option>
                                    <option value="1">Paperback</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Book ISBN</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" name="isbn" placeholder="Book ISBN">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Create New Book</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection

