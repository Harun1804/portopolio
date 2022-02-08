<?php

namespace App\Http\Livewire;

use App\Models\Skill as ModelsSkill;
use Livewire\Component;

class Skill extends Component
{
    public $name,$main,$nilai,$selectedID,$editMode = false;

    public function render()
    {
        $skills = ModelsSkill::latest()->get();
        return view('livewire.skill',compact(['skills']));
    }

    public function resetInput()
    {
        $this->name     = null;
        $this->main     = null;
        $this->nilai    = null;
    }

    public function store()
    {
        ModelsSkill::create([
            'name'  => $this->name,
            'main'  => $this->main,
            'value' => $this->nilai
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $skill = ModelsSkill::findOrFail($id);
        $this->selectedID   = $skill->id;
        $this->name         = $skill->name;
        $this->main         = $skill->main;
        $this->nilai        = $skill->value;

        $this->editMode     = true;
    }

    public function update()
    {
        $skill = ModelsSkill::findOrFail($this->selectedID);
        $skill->update([
            'name'  => $this->name,
            'main'  => $this->main,
            'value' => $this->nilai
        ]);

        $this->editMode = false;
        $this->resetInput();
    }

    public function destroy($id)
    {
        ModelsSkill::destroy($id);
    }
}
