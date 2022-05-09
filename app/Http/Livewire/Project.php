<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Project as ModelsProject;

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
    }

    public function store()
    {
        dd($this->newImage);
        Storage::disk('google')->put($this->newImage->getClientOriginalName(),file_get_contents($this->newImage->getRealPath()));

        ModelsProject::create([
            'name'      => $this->name,
            'slug'      => Str::slug($this->name),
            'tech'      => $this->tech,
            'desc'      => $this->desc,
            'thumbnail' => $this->getImage()
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
            Storage::disk('google')->put($this->newImage->getClientOriginalName(),file_get_contents($this->newImage->getRealPath()));

            $project->update([
                'name'      => $this->name,
                'slug'      => Str::slug($this->name),
                'tech'      => $this->tech,
                'desc'      => $this->desc,
                'thumbnail' => $this->getImage()
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

    public function getImage()
    {
        $files = Storage::disk('google')->allFiles();
        $firstFileName = $files[0];
        $firstFileUrl = Storage::disk('google')->url($firstFileName);
        return $firstFileUrl;
    }
}
