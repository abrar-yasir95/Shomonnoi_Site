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
                        <input type="text" class="form-control" id="editor" autocomplete="off" name="description"  value="{{old('description') ?? $single_blog->description}}">
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
            <a href="/admin/blog-add" class="btn btn-lg btn-primary float-right">ADD
            </a>
            <div class="card" style="overflow-y: auto; max-height: 500px;">

                <div class="card-header">
                    <h4 class="card-title"> Organizations List
{{--                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"--}}
{{--                                data-target="#exampleModal">ADD--}}
{{--                        </button>--}}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-lg">
                        <table class="table justify-content-center">
                            <thead class="text-center text-primary">
                            <tr>
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
                            </tr>
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
                                    <td>
                                        <a href="{{$single_blog->image}}" target="_blank" style="width: 200px">
                                            <p style="color: transparent">ThisTextMakesTheImageLarge</p>
                                            <img src="{{$single_blog->image}}" alt="{{$single_blog->image}}" width="200px">
                                            <p style="color: transparent">ThisTextMakesTheImageLarge</p>
                                        </a>
                                    </td>
                                    <td><a href="http://shomonnoibd.com/{{$single_blog->link}}" target="_blank">{{$single_blog->link}}</a></td>
                                    <td><a href="{{$single_blog->reference}}" target="_blank">{{$single_blog->reference}}</a></td>
                                    <td class="text-info">{{$single_blog->created_at}}</td>

                                </tr>
                            @empty

                            @endforelse

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <ul class="pagination justify-content-center">{{$blog->links()}}</ul>

        </div>
    </div>
@endsection

@section('scripts')

@endsection

