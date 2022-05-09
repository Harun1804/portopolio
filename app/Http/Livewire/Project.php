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
        $this->newImage = null;
    }

    public function store()
    {
        $latestProject = $this->getLatestProject();
        Storage::disk('google')->put($latestProject.".png",file_get_contents($latestProject.".png"));

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
            $latestProject = $this->getLatestProject();
            Storage::disk('google')->put($latestProject.".png",file_get_contents($latestProject."));

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

    public function getLatestProject()
    {
        $projects = ModelsProject::latest()->get()->count();

        if($projects == 0){
            return 1;
        }else{
            return $projects + 1;
        }
    }
}
