<div class="container">
    <div class="row d-flex no-gutters">
        <div class="col-md-6 col-lg-6 d-flex">
            <div class="row justify-content-start pb-3">
                <div class="col-md-12">
                    <h2 class="mb-4">Project</h2>
                    <ul class="about-info mt-4 px-md-0 px-2">
                        @if ($editMode)
                            <form wire:submit.prevent="update" method="POST" enctype="multipart/form-data">
                                @csrf
                                <li class="d-flex"><span>Name</span> <span><input type="text" name="name" placeholder="Name" class="form-control" wire:model="name" value="{{ old('name',$name) }}"></span></li>
                                <li class="d-flex"><span>Tech</span> <span><input type="text" name="tech" placeholder="Tech" class="form-control" wire:model="tech" value="{{ old('tech',$tech) }}"></span></li>
                                <li class="d-flex"><span>Desc</span> <span><input type="text" name="desc" placeholder="desc" class="form-control" wire:model="desc" value="{{ old('desc',$desc) }}"></span></li>
                                <li class="d-flex"><span>Thumbnail</span> <span><input type="file" name="newImage" placeholder="newImage" class="form-control" wire:model="newImage" value="{{ old('newImage',$newImage) }}"></span></li>
                                <li class="d-flex"><span><button type="submit" class="btn btn-primary">Change</button></span></li>
                            </form>
                        @else
                            <form wire:submit.prevent="store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <li class="d-flex"><span>Name</span> <span><input type="text" name="name" placeholder="Name" class="form-control" wire:model="name" value="{{ old('name',$name) }}"></span></li>
                                <li class="d-flex"><span>Tech</span> <span><input type="text" name="tech" placeholder="Tech" class="form-control" wire:model="tech" value="{{ old('tech',$tech) }}"></span></li>
                                <li class="d-flex"><span>Desc</span> <span><input type="text" name="desc" placeholder="desc" class="form-control" wire:model="desc" value="{{ old('desc',$desc) }}"></span></li>
                                <li class="d-flex"><span>Thumbnail</span> <span><input type="file" name="newImage" placeholder="newImage" class="form-control" wire:model="newImage" value="{{ old('newImage',$newImage) }}"></span></li>
                                <li class="d-flex"><span><button type="submit" class="btn btn-primary">Add</button></span></li>
                            </form>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 pl-md-5 py-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Tech</th>
                        <th>Desc</th>
                        <th>Thumbnail</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <button type="button" wire:click="edit({{ $project->id }})" class="btn btn-sm btn-warning">Edit</button>
                                <button type="button" wire:click="destroy({{ $project->id }})" class="btn btn-sm btn-danger">Delete</button>
                            </td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->tech }}</td>
                            <td>{{ $project->desc }}</td>
                            <td>
                                <img src="{{ url($project->thumbnail) }}" width="50px" alt="img" class="img img-fluid">
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center">No Data Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
