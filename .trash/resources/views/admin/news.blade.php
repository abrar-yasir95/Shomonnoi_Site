@extends('admin.master')

@section('title')
    Organizations | ShomonnoiBD
@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Organization</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/blog-edit" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="title"  autocomplete="off" name="title" value="{{old('title') ?? $single_blog->title}}">
                        @error('title') <p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-form-label">Type:</label>
                        <select name="type" id="type" class="form-control" name="type">
                            <option value="news" selected>News</option>
                            <option value="research">Research</option>
                        </select>
                        @error('type') <p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description:</label>
                        <input type="text" class="form-control" id="description" autocomplete="off" name="description"  value="{{old('description') ?? $single_blog->description}}">
                        @error('description') <p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <label for="image">Image:</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" autocomplete="off" name="image" value="{{old('image') ?? $single_blog->image}}">
                            @error('image') <p style="color: red">{{$message}}</p> @enderror
                            <label class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-form-label">Image Link:</label>
                        <input type="text" class="form-control" id="image" autocomplete="off" name="image"  value="{{old('image') ?? $single_blog->image}}">
                        @error('image') <p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link" class="col-form-label">Link:</label>
                        <input type="text" class="form-control" id="link" autocomplete="off" name="link"  value="{{old('link') ?? $single_blog->link}}">
                        @error('link') <p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for="reference" class="col-form-label">Reference:</label>
                        <input type="text" class="form-control" id="reference" autocomplete="off" name="reference"  value="{{old('reference') ?? $single_blog->reference}}">
                        @error('reference') <p style="color: red">{{$message}}</p> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="overflow-y: auto; max-height: 500px;">
                <div class="card-header">
                    <h4 class="card-title"> Organizations List
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#exampleModal">ADD
                        </button>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table justify-content-center">
                            <thead class="text-center text-primary" style="font-size: 12px">
                                <th>EDIT</th>
                                <th>DELETE</th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Reference</th>
                                <th>Created</th>
                            </thead>
                            <tbody>
                            @forelse($blog as $single_blog)
                                <tr class="align-baseline" style="font-size: 12px">
                                    <td>
                                        <a href="/admin/blog-edit/{{$single_blog->id}}"
                                           class="btn btn-success">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/admin/blog-delete/{{$single_blog->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id">
                                            <br>
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                    <td>{{$single_blog->id}}</td>
                                    <td>{{$single_blog->title}}</td>
                                    <td>{{$single_blog->type}}</td>
                                    <td>{{Str::substr($single_blog->description, 0, 150)}}...</td>
                                    <td>{{$single_blog->image}}</td>
                                    <td>{{$single_blog->link}}</td>
                                    <td>{{$single_blog->reference}}</td>
                                    <td>{{$single_blog->created_at}}</td>

                                </tr>
                            @empty

                            @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection

