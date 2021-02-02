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
                <div class="form-group">
                    <label for="type">Type</label>
                    <div class="">
                        <div class="categories mCustomScrollbar _mCS_6"
                             data-rel="scroll"
                             data-scrollheight="200">
                        </div>
                        <select id="type" name="type"
                                class="selectpicker text-left">
                            <option selected disabled>Please select</option>
                            <option value="Infrastructure">Infrastructure</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Monitoring">Monitoring</option>
                            <option value="Supply">Supply</option>
                            <option value="Water Resources">Water Resources</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="drop">
                        <div class="uploader">
                            <label class="drop-label">Drag and drop an image or browse image</label>
                            <input type="file" class="image-upload" id="photo" name="photo" accept="image/*" required>
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
