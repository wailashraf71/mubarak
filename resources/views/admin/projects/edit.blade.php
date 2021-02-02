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
                              placeholder="Describe project details in here" required>{{$project->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <div class="">
                        <div class="categories mCustomScrollbar _mCS_6"
                             data-rel="scroll"
                             data-scrollheight="200">
                        </div>
                        <select id="type" name="type"
                                class="selectpicker text-left">
                            <option disabled>Please select</option>
                            <option value="Infrastructure" {{$project->type === "Infrastructure" ? 'selected' : ''}}>Infrastructure</option>
                            <option value="Mechanical" {{$project->type === "Mechanical" ? 'selected' : ''}}>Mechanical</option>
                            <option value="Electrical" {{$project->type === "Electrical" ? 'selected' : ''}}>Electrical</option>
                            <option value="Monitoring" {{$project->type === "Monitoring" ? 'selected' : ''}}>Monitoring</option>
                            <option value="Supply" {{$project->type === "Supply" ? 'selected' : ''}}>Supply</option>
                            <option value="Water Resources" {{$project->type === "Water Resources" ? 'selected' : ''}}>Water Resources</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="drop">
                        <div class="uploader">
                            <label class="drop-label">Drag and drop an image or browse image</label>
                            <input type="file" class="image-upload" id="photo" name="photo" accept="image/*">
                        </div>
                        <div id="image-preview" style="width: 350px;">
                            <img src="{{@Storage::disk('public')->url('app/public/images/projects/'. $project->image)}}" style="margin-top:20px">
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

