@extends('layouts.dashboard')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Edit Project <i class="fa fa-edit mx-2"></i></h4>
            <br>
            <form action="{{route('admin.projects.update', ['project' => $project->id])}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Project title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter project title"
                           required value="{{$project->title}}">
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5"
                              placeholder="Describe project details in here"
                              required>{{$project->description}}</textarea>
                </div>
                <input type="hidden" name="type" value="all">
                <div class="form-group">
                    <label for="photo">Photos</label>
                    <div class="drop">
                        <div class="uploader">
                            <label class="drop-label">Drag and drop images or browse images</label>
                            <input type="file" class="image-upload" id="photo" name="photo[]" multiple accept="image/*">
                        </div>
                        <div id="image-preview" style="width: 350px;">
                            @foreach(json_decode($project->image) as $image)
                                <img src="{{@Storage::disk('public')->url('images/projects/'. $image)}}"
                                     style="margin-top:20px">
                            @endforeach
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><i
                        class="fa fa-save mx-1 font-weight-bolder"></i> Save project
                </button>
            </form>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#photo').imageReader({
                onload: function (img) {
                    $(img).css('margin-top', '20px');
                }
            });
        });
    </script>
@endsection
@section('meta')
    <meta http-equiv="Pragma" content=”no-cache”>
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
@endsection

