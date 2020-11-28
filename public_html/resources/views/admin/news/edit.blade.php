@extends('admin.master')

@section('title')
    Organization Edit | ShomonnoiBD
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Organization Editing</h4>
                    <form action="/admin/blog-edit/{{$single_blog->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="title"  autocomplete="off" name="title" value="{{old('title') ?? $single_blog->title}}">
                                @error('title') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="type" class="col-form-label">Type:</label>
                                <select name="type" id="type" class="form-control" name="type">
                                    <option value="news" {{$single_blog->type=='news'?'selected': ''}}>News</option>
                                    <option value="research" {{$single_blog->type=='research'?'selected': ''}}>Research</option>
                                </select>
                                @error('type') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-form-label">Description:</label>
                                <textarea type="text" class="form-control" id="editor" autocomplete="off" name="description">{{old('description') ?? $single_blog->description}}</textarea>
                                @error('description') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div>
                                <img src="{{$single_blog->image}}" alt="">
                            </div>
                            <label for="image">Image:</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" autocomplete="off" name="image" value="{{old('image') ?? $single_blog->image}}">
                                    @error('image') <p style="color: red">{{$message}}</p> @enderror
                                    <label class="custom-file-label" for="image">{{strlen($single_blog->image)>2?$single_blog->image:'Choose File'}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-form-label">Image Link:</label>
                                <input type="text" class="form-control" id="image" autocomplete="off" name="image"  value="{{old('image') ?? $single_blog->image}}">
                                @error('image') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="link" class="col-form-label">Link:</label>
                                <input type="text" id="link" class="form-control"  autocomplete="off" name="link" value="{{old('link') ?? $single_blog->link}}">

                                @error('link') <p style="color: red">{{$message}}</p> @enderror

                            </div>
                            <div class="form-group">
                                <label for="reference" class="col-form-label">Reference:</label>
                                <input type="text" class="form-control" id="reference" autocomplete="off" name="reference"  value="{{old('reference') ?? $single_blog->reference}}">
                                @error('reference') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="/admin/blog-edit" class="btn btn-secondary" data-dismiss="modal">Back</a>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('scripts')
@endsection
