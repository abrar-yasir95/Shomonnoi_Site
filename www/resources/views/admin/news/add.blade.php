@extends('admin.master')

@section('title')
    Organizations | ShomonnoiBD
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="modal-header">
                        <h4 class="card-title modal-title">Organization Editing</h4>
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
{{--                            <div id="toolbar-container"></div>--}}
                            <!-- This container will become the editable. -->
                            {{--                                <div id="editor">--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label for="description" class="col-form-label">Description:</label>
                                <textarea id="editor" class="form-control" autocomplete="off" name="description">
                                    {{old('description') ?? $single_blog->description}}
                                </textarea>
                                @error('description') <p style="color: red">{{$message}}</p> @enderror
                            </div>

                            <label for="image">Main Image:</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" autocomplete="off" name="image" value="{{old('image') ?? $single_blog->image}}">
                                    @error('image') <p style="color: red">{{$message}}</p> @enderror
                                    <label class="custom-file-label">Choose File</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-form-label">Main Image Link:</label>
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
                            <a href="/admin/blog-edit" class="btn btn-secondary" data-dismiss="modal">Back</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
    </div>
@endsection

@section('scripts')

{{--    <script src="{{ asset('assets/js/select2.full.min.js') }}"></script>--}}
{{--    <script src="{{  asset('assets/js/ckeditor.js') }}"></script>--}}
{{--    <script>--}}
{{--        $(function () {--}}
{{--            // Replace the <textarea id="editor1"> with a CKEditor--}}
{{--            // instance, using default configuration.--}}
{{--            CKEDITOR.replace('editor1');--}}
{{--        });--}}
{{--    </script>--}}
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $(".select2").select2();--}}
{{--        });--}}
{{--    </script>--}}
@endsection
