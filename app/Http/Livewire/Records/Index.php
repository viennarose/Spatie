<?php

namespace App\Http\Livewire\Records;

use App\Models\User;
use App\Models\Record;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $severity="all";
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadRecords(){
        $query = Record::orderBy('illness')
            ->search($this->search);

        if($this->severity != 'all'){
            $query->where('severity', $this->severity);

        }
        $records = $query->paginate(5);
        return compact('records');
    }
    public function closeModal()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function back(){
        return redirect('/admin/patients/');
    }

    public function resetInput()
    {
        $this->illness = '';
        $this->symptoms = '';
        $this->medications = '';
        $this->severity = '';
    }
    public $illness, $symptoms, $medications, $user_id;

    public function addRecord(){
        $this->validate([
            'illness' => ['required', 'string'],
            'symptoms' => ['required', 'string'],
            'medications' => ['required', 'string'],
            'severity' => ['required', 'string'],
        ]);

        $record = Record::create([
            'user_id' => auth()->id(),
            'illness' => $this->illness,
            'symptoms' => $this->symptoms,
            'medications' => $this->medications,
            'severity' => $this->severity,
        ]);
        return redirect()->to('/admin/records');
        session()->flash('message','Record Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updateRecord(){
        $this->validate([
            'illness' => ['required', 'string'],
            'symptoms' => ['required', 'string'],
            'medications' => ['required', 'string'],
            'severity' => ['required', 'string'],

        ]);
        $treatmentrecord = Record::findOrFail($this->record_id);
        $treatmentrecord->where('id',$this->record_id)->update([
            'illness' => $this->illness,
            'symptoms' => $this->symptoms,
            'medications' => $this->medications,
            'severity' => $this->severity,

        ]);
        return redirect()->to('/admin/records');
        session()->flash('message','Record Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editTreatment(int $record_id){
        $record = Record::find($record_id);
        if($record){
            $this->record_id = $record->id;
            $this->illness = $record->illness;
            $this->symptoms = $record->symptoms;
            $this->medications = $record->medications;
            $this->severity = $record->severity;
            $this->delivery_date = $record->delivery_date;
        }else{
            return redirect()->to('/admin/records');
        }
    }
    public function deleteRecord(int $record_id)
    {
        $this->record_id = $record_id;
    }

    public function destroyRecord()
    {
        Record::find($this->record_id)->delete();
        session()->flash('message','Record Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
       $users = User::get();
        // $records = Record::where('severity', 'like', '%'.$this->search.'%')
        //     ->orWhere('symptoms', 'like', '%'.$this->search.'%')
        //     ->orWhere('medications', 'like', '%'.$this->search.'%')
        //         ->orderBy('illness', 'desc')->paginate(5);
        return view('livewire.records.index', compact('users'), $this->loadRecords());
    }
}
