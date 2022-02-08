<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Project as ModelsProject;
use Livewire\WithFileUploads;

class Project extends Component
{
    use WithFileUploads;

    public $name,$tech,$desc,$newImage,$oldImage,$selectedID,$editMode = false;

    public function render()
    {
        $projects = ModelsProject::latest()->get();
        return view('livewire.project',compact('projects'));
    }

    public function resetInput()
    {
        $this->name     = null;
        $this->tech     = null;
        $this->desc     = null;
        $this->newImage = null;
    }

    public function store()
    {
        $imageFile = $this->newImage->store('img/projects','public');

        ModelsProject::create([
            'name'      => $this->name,
            'slug'      => Str::slug($this->name),
            'tech'      => $this->tech,
            'desc'      => $this->desc,
            'thumbnail' => $imageFile
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $project        = ModelsProject::findOrFail($id);
        $this->name     = $project->name;
        $this->tech     = $project->tech;
        $this->desc     = $project->desc;
        $this->oldImage = $project->thumbnail;

        $this->selectedID = $project->id;
        $this->editMode   = true;
    }

    public function update()
    {
        $project = ModelsProject::findOrFail($this->selectedID);
        if ($this->newImage) {
            $imageFile = $this->newImage->store('img/projects','public');

            $project->update([
                'name'      => $this->name,
                'slug'      => Str::slug($this->name),
                'tech'      => $this->tech,
                'desc'      => $this->desc,
                'thumbnail' => $imageFile
            ]);
        }

        $project->update([
            'name'      => $this->name,
            'slug'      => Str::slug($this->name),
            'tech'      => $this->tech,
            'desc'      => $this->desc
        ]);

        $this->resetInput();
        $this->editMode = false;
    }

    public function destroy($id)
    {
        ModelsProject::destroy($id);
    }
}
