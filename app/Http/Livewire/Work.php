<?php

namespace App\Http\Livewire;

use App\Models\Experience;
use Livewire\Component;

class Work extends Component
{
    public $position,$dateIn,$dateOut,$subposition,$desc,$selectedID,$editMode = false;

    public function render()
    {
        $works = Experience::whereCategory('work')->latest()->get();
        return view('livewire.work',compact('works'));
    }

    public function resetInput()
    {
        $this->position     = null;
        $this->dateIn       = null;
        $this->dateOut      = null;
        $this->subposition  = null;
        $this->desc         = null;
    }

    public function store()
    {
        Experience::create([
            'position'      => $this->position,
            'subposition'   => $this->subposition,
            'in'            => $this->dateIn,
            'out'           => $this->dateOut,
            'desc'          => $this->desc,
            'category'      => 'work',
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $exp = Experience::findOrFail($id);
        $this->selectedID   = $exp->id;
        $this->position     = $exp->position;
        $this->dateIn       = $exp->in;
        $this->dateOut      = $exp->out;
        $this->subposition  = $exp->subposition;
        $this->desc         = $exp->desc;

        $this->editMode     = true;
    }

    public function update()
    {
        $exp = Experience::findOrFail($this->selectedID);
        $exp->update([
            'position'      => $this->position,
            'subposition'   => $this->subposition,
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
