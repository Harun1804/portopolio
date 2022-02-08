<div class="container">
    <div class="row d-flex no-gutters">
        <div class="col-md-6 col-lg-6 d-flex">
            <div class="row justify-content-start pb-3">
                <div class="col-md-12">
                    <h2 class="mb-4">Skill</h2>
                    <ul class="about-info mt-4 px-md-0 px-2">
                        @if ($editMode)
                            <form wire:submit.prevent="update" method="POST">
                                @csrf
                                <li class="d-flex"><span>Name</span> <span><input type="text" name="name" placeholder="Name" class="form-control" wire:model="name" value="{{ old('name',$name) }}"></span></li>
                                <li class="d-flex">
                                    <span>Main</span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" wire:model="main">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0" wire:model="main">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </span>
                                </li>
                                <li class="d-flex"><span>Skill Presentation</span> <span><input type="number" name="nilai" placeholder="nilai" class="form-control" wire:model="nilai" value="{{ old('nilai',$nilai) }}" min="0" max="100"></span></li>
                                <li class="d-flex"><span><button type="submit" class="btn btn-primary">Change</button></span></li>
                            </form>
                        @else
                            <form wire:submit.prevent="store" method="POST">
                                @csrf
                                <li class="d-flex"><span>Name</span> <span><input type="text" name="name" placeholder="Name" class="form-control" wire:model="name" value="{{ old('name',$name) }}"></span></li>
                                <li class="d-flex">
                                    <span>Main</span>
                                    <span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" wire:model="main">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0" wire:model="main">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </span>
                                </li>
                                <li class="d-flex"><span>Skill Presentation</span> <span><input type="number" name="nilai" placeholder="nilai" class="form-control" wire:model="nilai" value="{{ old('nilai',$nilai) }}" min="0" max="100"></span></li>
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
                        <th>Main</th>
                        <th>Presentation</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($skills as $skill)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <button type="button" wire:click="edit({{ $skill->id }})" class="btn btn-sm btn-warning">Edit</button>
                                <button type="button" wire:click="destroy({{ $skill->id }})" class="btn btn-sm btn-danger">Delete</button>
                            </td>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->main }}</td>
                            <td>{{ $skill->value }}</td>
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
