@extends('layouts.app')

@section('content')
<div class="container">
    {{-- form for Post --}}
    <form action="/p" enctype="multipart/form-data" method="POST">
        {{-- laravel Protocol for session control --}}
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add new Post</h1>
                </div>
                 <div class="form-group row">
                                <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                                {{-- <div class="col-md-6"> --}}
                                    <input  id="caption"
                                            type="text"
                                            class="form-control{{ $errors->has('caption') ? 'is-invalid' : ''}}"
                                            name="caption"
                                            {{-- caption="caption" --}}
                                            value="{{ old('caption') }}"
                                            autocomplete="caption" autofocus>

                                    {{-- Error handling of Post  upload failed --}}
                                @if ($errors->has('caption'))
                                <span class="invalid-feebdback" role="alert">
                                <strong>{{ $errors->first('caption') }}</strong>
                                </span>

                                @endif
                                </div>
                                {{-- file upload or image upload --}}
                                <div class="row" type="file" class="form-control-file" id="image" name="image">
                                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                                    <input type="file" name="image" id="image" class="form-control-file">
                                   {{-- image upload failed --}}
                                    @if ($errors->has('image'))
                                <span class="invalid-feebdback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                                </span>

                                @endif
                                </div>

                                <div class="row pt-4">
                                    <button class="btn btn-primary">
                                        Add a Post
                                    </button>
                                </div>
                            </div>
            </div>
        </div>
    </form>
</div>
@endsection
