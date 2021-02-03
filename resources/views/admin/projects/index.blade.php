@extends('layouts.dashboard')

@section('content')
    <a href="{{route('admin.projects.create')}}">
        <button type="button" class="btn btn-primary mb-3"><i
                class="fas fa-fw fa-plus mx-1"></i>Add Project</button>
    </a>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-6">
                <div class="card card-bordered" style="overflow: hidden">
                    <a href="{{ route('admin.projects.edit', ['project' => $project->id])}}">
                        <div class="card-block"
                             style="height: 270px;background-image: url({{@Storage::disk('public')->url('images/projects/'. $project->image)}});background-size: cover;background-position: center;">
                        </div>
                    </a>
                    <div class="p-3 card-body">
                        <div class="col">
                            <div class="align-self-center">
                                <h4 class="box-title mb-1"
                                   style="color: #313131; font-weight: 700">{{ $project->title}}</h4>
                                <div class="card-block">
                                    <p class="box-title">{{ $project->description}}</p>
                                </div>
                            </div>
                            <div class="row" dir="rtl">
                                <a href="#" class="text-danger bg-transparent delete-advert" itemid="{{$project->id}}" data-toggle="modal" data-target="#deleteModal" title="delete">
                                    <span><i class="fa fa-trash mx-2"
                                             aria-hidden="true"></i>Delete</span>
                                </a>
                                <a href="{{ route('admin.projects.edit', ['project' => $project->id])}}" class="text-primary bg-transparent px-2" title="edit">
                                    <span><i class="fa fa-edit mx-2"
                                             aria-hidden="true"></i>Edit</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body"></div>
            </div>
        @endforeach

        <!-- Delete Modal -->
            <div class="modal fade text-left" id="deleteModal" tabindex="-1" role="dialog"
                 aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title" id="mediumModalLabel" style="font-size: 18px"><b>Delete Project</b></p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Remove this project from database?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-disabled" data-dismiss="modal">Cancel</button>
                            <form id="dynForm" action="{{route('admin.projects.destroy', ['project' => 0])}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><p class="text-white">Delete project</p></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.delete-advert').click(function () {
                $('#dynForm').attr('action', $(location).attr('href') + '/' + $(this).attr('itemid'));
            });
        });
    </script>
@endsection
