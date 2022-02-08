<div class="container">
    <div class="row d-flex no-gutters">
        <div class="col-md-6 col-lg-6 d-flex">
            <div class="row justify-content-start pb-3">
                <div class="col-md-12">
                    <h2 class="mb-4">Work</h2>
                    <ul class="about-info mt-4 px-md-0 px-2">
                        @if ($editMode)
                            <form wire:submit.prevent="update" method="POST">
                                @csrf
                                <li class="d-flex"><span>Position</span> <span><input type="text" name="position" placeholder="Position" class="form-control" wire:model="position" value="{{ old('position',$position) }}"></span></li>
                                <li class="d-flex"><span>Date In</span> <span><input type="date" name="in" placeholder="Date In" class="form-control" wire:model="dateIn" value="{{ old('dateIn',$dateIn) }}"></span></li>
                                <li class="d-flex"><span>Date Out</span> <span><input type="date" name="out" placeholder="Date out" class="form-control" wire:model="dateOut" value="{{ old('dateOut',$dateOut) }}"></span></li>
                                <li class="d-flex"><span>Subposition</span> <span><input type="text" name="subposition" placeholder="subposition" class="form-control" wire:model="subposition" value="{{ old('subposition',$subposition) }}"></span></li>
                                <li class="d-flex"><span>Description</span> <span><input type="text" name="description" placeholder="Description" class="form-control" wire:model="desc" value="{{ old('desc',$desc) }}"></span></li>
                                <li class="d-flex"><span><button type="submit" class="btn btn-primary">Change</button></span></li>
                            </form>
                        @else
                            <form wire:submit.prevent="store" method="POST">
                                @csrf
                                <li class="d-flex"><span>Position</span> <span><input type="text" name="position" placeholder="Position" class="form-control" wire:model="position" value="{{ old('position',$position) }}"></span></li>
                                <li class="d-flex"><span>Date In</span> <span><input type="date" name="in" placeholder="Date In" class="form-control" wire:model="dateIn" value="{{ old('dateIn',$dateIn) }}"></span></li>
                                <li class="d-flex"><span>Date Out</span> <span><input type="date" name="out" placeholder="Date out" class="form-control" wire:model="dateOut" value="{{ old('dateOut',$dateOut) }}"></span></li>
                                <li class="d-flex"><span>Subposition</span> <span><input type="text" name="subposition" placeholder="subposition" class="form-control" wire:model="subposition" value="{{ old('subposition',$subposition) }}"></span></li>
                                <li class="d-flex"><span>Description</span> <span><input type="text" name="description" placeholder="Description" class="form-control" wire:model="desc" value="{{ old('desc',$desc) }}"></span></li>
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
                        <th>Position</th>
                        <th>Subposition</th>
                        <th>In</th>
                        <th>Out</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($works as $work)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <button type="button" wire:click="edit({{ $work->id }})" class="btn btn-sm btn-warning">Edit</button>
                                <button type="button" wire:click="destroy({{ $work->id }})" class="btn btn-sm btn-danger">Delete</button>
                            </td>
                            <td>{{ $work->position }}</td>
                            <td>{{ $work->subposition }}</td>
                            <td>{{ \Carbon\Carbon::parse($work->in)->year }}</td>
                            <td>{{ \Carbon\Carbon::parse($work->out)->year }}</td>
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
