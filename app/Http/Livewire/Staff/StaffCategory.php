<?php

namespace App\Http\Livewire\Staff;

use App\Models\StaffCategory as ModelsStaffCategory;
use Livewire\Component;

class StaffCategory extends Component
{
    public $updateMode = false;
    public $staff_category_name;
    public $staff_category_list;
    public $staff_category_id;
    //for store date
    public function store()
    {

        //validate the data forms
        $validatedata  = $this->validate([
            'staff_category_name'=>'required|max:50|min:1',
        ]);

        //save the data on table
        ModelsStaffCategory::create($validatedata);

        //for clear the form
            $this->clear_form();
    }

    //for clear the form data
    private function clear_form()
    {
        $this->staff_category_name = '';

    }

    //edit the gallery category
    public function edit($id)
    {
        $data = ModelsStaffCategory::findOrFail($id);
        $this->staff_category_id = $id;
        $this->staff_category_name = $data->staff_category_name;
        $this->updateMode = true;

    }

    //update the gallery category name
    public function update()
    {

        //validate the data forms
        $validatedata  = $this->validate([
            'staff_category_name'=>'required|max:50|min:1',
        ]);


        //find the row the table
        $data = ModelsStaffCategory::findorFail($this->staff_category_id);
        //save the data on table
        $data->update(['staff_category_name'=>$this->staff_category_name]);

        //update mode off
        $this->updateMode = false;

        //for clear the form
            $this->clear_form();
    }

    //fetch all list of gallery category
    private function fetch_staff_category_list()
    {
        $staff_category_list= ModelsStaffCategory::all();
        return $staff_category_list;
    }

    //for delete
    public function delete($id)
    {
        ModelsStaffCategory::findorfail($id)->delete();
    }
    public function render()
    {
        $this->staff_category_list = $this->fetch_staff_category_list();
        return view('livewire.staff.staff-category');
    }
}
