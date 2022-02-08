<div class="container">
    <div class="row d-flex no-gutters">
        <div class="col-md-6 col-lg-6 d-flex">
            <div class="row justify-content-start pb-3">
                <div class="col-md-12">
                    <h2 class="mb-4">Education</h2>
                    <ul class="about-info mt-4 px-md-0 px-2">
                        @if ($editMode)
                            <form wire:submit.prevent="update" method="POST">
                                @csrf
                                <li class="d-flex"><span>Institution</span> <span><input type="text" name="position" placeholder="Institution" class="form-control" wire:model="institution" value="{{ old('institution',$institution) }}"></span></li>
                                <li class="d-flex"><span>Date In</span> <span><input type="date" name="in" placeholder="Date In" class="form-control" wire:model="dateIn" value="{{ old('dateIn',$dateIn) }}"></span></li>
                                <li class="d-flex"><span>Date Out</span> <span><input type="date" name="out" placeholder="Date out" class="form-control" wire:model="dateOut" value="{{ old('dateOut',$dateOut) }}"></span></li>
                                <li class="d-flex"><span>Department</span> <span><input type="text" name="department" placeholder="Department" class="form-control" wire:model="department" value="{{ old('department',$department) }}"></span></li>
                                <li class="d-flex"><span>Description</span> <span><input type="text" name="description" placeholder="Description" class="form-control" wire:model="desc" value="{{ old('desc',$desc) }}"></span></li>
                                <li class="d-flex"><span><button type="submit" class="btn btn-primary">Change</button></span></li>
                            </form>
                        @else
                            <form wire:submit.prevent="store" method="POST">
                                @csrf
                                <li class="d-flex"><span>Institution</span> <span><input type="text" name="position" placeholder="Institution" class="form-control" wire:model="institution" value="{{ old('institution',$institution) }}"></span></li>
                                <li class="d-flex"><span>Date In</span> <span><input type="date" name="in" placeholder="Date In" class="form-control" wire:model="dateIn" value="{{ old('dateIn',$dateIn) }}"></span></li>
                                <li class="d-flex"><span>Date Out</span> <span><input type="date" name="out" placeholder="Date out" class="form-control" wire:model="dateOut" value="{{ old('dateOut',$dateOut) }}"></span></li>
                                <li class="d-flex"><span>Department</span> <span><input type="text" name="department" placeholder="Department" class="form-control" wire:model="department" value="{{ old('department',$department) }}"></span></li>
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
                        <th>Institution</th>
                        <th>Department</th>
                        <th>In</th>
                        <th>Out</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($educations as $education)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <button type="button" wire:click="edit({{ $education->id }})" class="btn btn-sm btn-warning">Edit</button>
                                <button type="button" wire:click="destroy({{ $education->id }})" class="btn btn-sm btn-danger">Delete</button>
                            </td>
                            <td>{{ $education->position }}</td>
                            <td>{{ $education->subposition }}</td>
                            <td>{{ \Carbon\Carbon::parse($education->in)->year }}</td>
                            <td>{{ \Carbon\Carbon::parse($education->out)->year }}</td>
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
