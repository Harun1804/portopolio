<?php

namespace App\Http\Livewire;

use App\Models\Experience;
use Livewire\Component;

class Education extends Component
{
    public $institution,$dateIn,$dateOut,$department,$desc,$selectedID,$editMode = false;

    public function render()
    {
        $educations = Experience::whereCategory('education')->latest()->get();
        return view('livewire.education',compact('educations'));
    }

    public function resetInput()
    {
        $this->institution  = null;
        $this->dateIn       = null;
        $this->dateOut      = null;
        $this->department   = null;
        $this->desc         = null;
    }

    public function store()
    {
        Experience::create([
            'position'      => $this->institution,
            'subposition'   => $this->department,
            'in'            => $this->dateIn,
            'out'           => $this->dateOut,
            'desc'          => $this->desc,
            'category'      => 'education',
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $exp = Experience::findOrFail($id);
        $this->selectedID   = $exp->id;
        $this->institution  = $exp->position;
        $this->dateIn       = $exp->in;
        $this->dateOut      = $exp->out;
        $this->department   = $exp->subposition;
        $this->desc         = $exp->desc;

        $this->editMode     = true;
    }

    public function update()
    {
        $exp = Experience::findOrFail($this->selectedID);
        $exp->update([
            'position'      => $this->institution,
            'subposition'   => $this->department,
            'in'            => $this->dateIn,
            'out'           => $this->dateOut,
            'desc'          => $this->desc,
        ]);

        $this->editMode     = false;
        $this->resetInput();
    }

    public function destroy($id)
    {
        Experience::destroy($id);
    }
}
