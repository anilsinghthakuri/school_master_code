<?php

namespace App\Http\Livewire\Staff;

use App\Models\Staff as ModelsStaff;
use App\Models\StaffCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
class Staff extends Component
{
    use WithFileUploads;
    public $updateMode = false;
    public $staff_category_list;
    public $staff_category_id;
    public $staff_name;
    public $staff_image;
    public $staff_designation;
    public $staff_list = [];
    public $staff_id;

    //fetch at first
    public function mount()
    {
        $this->fetch_staff_category_list();
    }

    //store the staff
    public function store()
    {
        if ($this->staff_category_id == 0) {
        toastr()->error('An error has occurred please try again later.');
        dd('staff category not selected');

        }
        else{

            if ($this->staff_image == null) {

                $this->validate([
                    'staff_name'=>'required|max:50|min:1',
                    'staff_designation'=>'required|max:50|min:1'
                ]);
                $data = new ModelsStaff;
                $data->staff_name = $this->staff_name;
                $data->staff_image  = 'staff/noprofil.png';
                $data->staff_designation = $this->staff_designation;
                $data->staff_category_id = $this->staff_category_id;
                $data->save();

            } else {

                $this->validate([
                    'staff_name'=>'required|max:50|min:1',
                    'staff_image'=>'image|max:1024|required',
                    'staff_designation'=>'required|max:50|min:1'
                ]);

                $data = new ModelsStaff;
                $data->staff_name = $this->staff_name;
                $this->staff_image = $this->staff_image->store('staff', 'public');
                $data->staff_image  = $this->staff_image;
                $data->staff_designation = $this->staff_designation;
                $data->staff_category_id = $this->staff_category_id;
                $data->save();

            }
        }
        $this->clear_form();

    }
    //view profil image
    public function view($id)
    {
        $data = ModelsStaff::findOrFail($id);
        return url('storage/'.$data->staff_image);
    }

    //edit the  staff
    public function edit($id)
    {
        $data = ModelsStaff::findOrFail($id);
        $this->staff_id = $id;
        $this->staff_name = $data->staff_name;
        $this->staff_designation = $data->staff_designation;
        $this->staff_category_id = $data->staff_category_id;
        $this->updateMode = true;

    }

    //update the staff
    public function update()
    {

        if ($this->staff_category_id == 0) {
            toastr()->error('An error has occurred please try again later.');
            dd('staff category not selected');

            }
        else{

                if ($this->staff_image == null) {

                    $this->validate([
                        'staff_name'=>'required|max:50|min:1',
                        'staff_designation'=>'required|max:50|min:1'
                    ]);
                    $data = ModelsStaff::findorFail($this->staff_id);
                    $data->staff_name = $this->staff_name;
                    $data->staff_designation = $this->staff_designation;
                    $data->staff_category_id = $this->staff_category_id;
                    $data->save();

            }
                else {

                    $this->validate([
                        'staff_name'=>'required|max:50|min:1',
                        'staff_image'=>'image|max:1024|required',
                        'staff_designation'=>'required|max:50|min:1'
                    ]);

                    $data = ModelsStaff::findorFail($this->staff_id);
                    $data->staff_name = $this->staff_name;
                    $this->staff_image = $this->staff_image->store('staff', 'public');
                    $data->staff_image  = $this->staff_image;
                    $data->staff_designation = $this->staff_designation;
                    $data->staff_category_id = $this->staff_category_id;
                    $data->save();

                }
            }

            $this->updateMode = false;
            $this->clear_form();
        }


    //for delete
    public function delete($id)
    {
        ModelsStaff::findorfail($id)->delete();
    }

    //fetch all staff data
    private function fetch_all_staff()
    {
        $staff_list = ModelsStaff::all();
        return $staff_list;
    }

    //fetch all staff category list
    private function fetch_staff_category_list()
    {
        $this->staff_category_list = StaffCategory::all();
    }

    //clear form
    public function clear_form()
    {
        $this->staff_category_id = 0;
        $this->staff_name = null;
        $this->staff_image = null;
        $this->staff_designation = null;
    }
    public function render()
    {
        $this->staff_list = $this->fetch_all_staff();
        return view('livewire.staff.staff');

    }
}
