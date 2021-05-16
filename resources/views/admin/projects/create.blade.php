@extends('layouts.dashboard')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Add new project</h4>
            <br>
            <form action="{{route('admin.projects.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Project title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter project title"
                           required>
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5"
                              placeholder="Describe project details in here" required></textarea>
                </div>
                <input type="hidden" name="type" value="all">

                <div class="form-group">
                    <label for="photo">Photos</label>
                    <div class="drop">
                        <div class="uploader">
                            <label class="drop-label">Drag and drop images or browse images</label>
                            <input type="file" class="image-upload" id="photo" name="photo[]" accept="image/*" multiple required>
                        </div>
                        <div id="image-preview" style="width: 350px;"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><i
                        class="fa fa-fw fa-save mx-1 font-weight-bolder"></i> Save project
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
            $('.selectpicker').selectpicker();
        });
    </script>
@endsection
