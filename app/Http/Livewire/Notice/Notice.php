<?php

namespace App\Http\Livewire\Notice;

use App\Models\Notice as ModelsNotice;
use App\Models\NoticeCategory;
use App\Models\NoticeType;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;
use Livewire\WithFileUploads;

class Notice extends Component
{
    use WithFileUploads;

    public $updateMode = false;
    public $notice_category_list;
    public $notice_type_list;
    public $notice_category_id;
    public $notice_heading;
    public $notice_description;
    public $notice_type_id;
    public $notice_file;
    public $notice_list = [];
    public $notice_id;

    //inital data
    public function mount()
    {
        $this->notice_category_list  = $this->fetch_all_notice_category();
        $this->notice_type_list  = $this->fetch_notice_type();
    }

    //for store
    public function store()
    {
        if ($this->notice_category_id == 0) {
            dd('choose notice category');
        }

        else {

            if ($this->notice_type_id == 0) {
                dd('choose notice type');
            }
            else {
                if ($this->notice_type_id == 1) {

                    if ($this->notice_description != null) {

                        $validated = $this->validate([
                            'notice_heading'=>'required|max:50|min:1',
                            'notice_description'=>'required|max:50|min:1',
                            'notice_file'=>'image|required|max:1024',
                        ]);

                        $data = new ModelsNotice();
                        $data->notice_category_id = $this->notice_category_id;
                        $data->notice_heading = $this->notice_heading;
                        $data->notice_description = $this->notice_description;
                        $data->notice_type_id = $this->notice_type_id;
                        $this->notice_file = $this->notice_file->store('notice', 'public');
                        $data->notice_file = $this->notice_file;
                        $data->save();

                    }
                    else {
                        $validated = $this->validate([
                            'notice_heading'=>'required|max:50|min:1',
                            'notice_file'=>'image|required|max:1024',
                        ]);

                        $data = new ModelsNotice();
                        $data->notice_category_id = $this->notice_category_id;
                        $data->notice_heading = $this->notice_heading;
                        $data->notice_type_id = $this->notice_type_id;
                        $this->notice_file = $this->notice_file->store('notice', 'public');
                        $data->notice_file = $this->notice_file;
                        $data->save();
                    }

                }
                else {
                    if ($this->notice_description != null) {

                        $validated = $this->validate([
                            'notice_heading'=>'required|max:50|min:1',
                            'notice_description'=>'required|max:50|min:1',
                            'notice_file'=>'required|mimes:pdf|max:1000',
                        ]);

                        $data = new ModelsNotice();
                        $data->notice_category_id = $this->notice_category_id;
                        $data->notice_heading = $this->notice_heading;
                        $data->notice_description = $this->notice_description;
                        $data->notice_type_id = $this->notice_type_id;
                        $this->notice_file = $this->notice_file->store('notice', 'public');
                        $data->notice_file = $this->notice_file;
                        $data->save();


                    }
                    else {
                        $validated = $this->validate([
                            'notice_heading'=>'required|max:50|min:1',
                            'notice_file'=>'required|mimes:pdf|max:1000',
                        ]);

                        $data = new ModelsNotice();
                        $data->notice_category_id = $this->notice_category_id;
                        $data->notice_heading = $this->notice_heading;
                        $data->notice_type_id = $this->notice_type_id;
                        $this->notice_file = $this->notice_file->store('notice', 'public');
                        $data->notice_file = $this->notice_file;
                        $data->save();
                    }

                }
            }
            $this->clear_form();
        }

    }

    //edit the  notice
    public function edit($id)
    {
        $data = ModelsNotice::findOrFail($id);
        $this->notice_id = $id;
        $this->notice_category_id = $data->notice_category_id;
        $this->notice_heading = $data->notice_heading;
        $this->notice_description = $data->notice_description;
        $this->notice_type_id = $data->notice_type_id;
        $this->updateMode = true;

    }

    //for update
     //for store
     public function update()
     {
         if ($this->notice_category_id == 0) {
             dd('choose notice category');
         }

         else {

             if ($this->notice_type_id == 0) {
                 dd('choose notice type');
             }
             else {
                 if ($this->notice_type_id == 1) {

                     if ($this->notice_description != null) {

                        if ($this->notice_file == null) {
                            $validated = $this->validate([
                                'notice_heading'=>'required|max:50|min:1',
                                'notice_description'=>'required|max:50|min:1',
                            ]);

                            $data = ModelsNotice::findorFail($this->notice_id);
                            $data->notice_category_id = $this->notice_category_id;
                            $data->notice_heading = $this->notice_heading;
                            $data->notice_description = $this->notice_description;
                            $data->notice_type_id = $this->notice_type_id;
                            $data->save();
                        } else {

                            $validated = $this->validate([
                                'notice_heading'=>'required|max:50|min:1',
                                'notice_description'=>'required|max:50|min:1',
                                'notice_file'=>'image|required|max:1024',
                            ]);

                            $data = ModelsNotice::findorFail($this->notice_id);
                            $data->notice_category_id = $this->notice_category_id;
                            $data->notice_heading = $this->notice_heading;
                            $data->notice_description = $this->notice_description;
                            $data->notice_type_id = $this->notice_type_id;
                            $this->notice_file = $this->notice_file->store('notice', 'public');
                            $data->notice_file = $this->notice_file;
                            $data->save();
                        }

                     }
                     else {

                         if ($this->notice_file == null) {

                            $validated = $this->validate([
                                'notice_heading'=>'required|max:50|min:1',
                            ]);

                            $data = ModelsNotice::findorFail($this->notice_id);
                            $data->notice_category_id = $this->notice_category_id;
                            $data->notice_heading = $this->notice_heading;
                            $data->notice_type_id = $this->notice_type_id;
                            $data->save();
                         }
                         else {

                            if ($this->notic_file == null) {

                            $validated = $this->validate([
                                'notice_heading'=>'required|max:50|min:1',
                            ]);

                            $data = ModelsNotice::findorFail($this->notice_id);
                            $data->notice_category_id = $this->notice_category_id;
                            $data->notice_heading = $this->notice_heading;
                            $data->notice_type_id = $this->notice_type_id;
                            $data->save();
                            }
                            else {

                            $validated = $this->validate([
                                'notice_heading'=>'required|max:50|min:1',
                                'notice_file'=>'image|required|max:1024',
                            ]);

                            $data = ModelsNotice::findorFail($this->notice_id);
                            $data->notice_category_id = $this->notice_category_id;
                            $data->notice_heading = $this->notice_heading;
                            $data->notice_type_id = $this->notice_type_id;
                            $this->notice_file = $this->notice_file->store('notice', 'public');
                            $data->notice_file = $this->notice_file;
                            $data->save();
                            }

                         }

                     }

                 }
                 else {
                     if ($this->notice_description != null) {

                        if ($this->notice_file == null) {

                            $validated = $this->validate([
                                'notice_heading'=>'required|max:50|min:1',
                                'notice_description'=>'required|max:50|min:1',
                            ]);

                            $data = ModelsNotice::findorFail($this->notice_id);
                            $data->notice_category_id = $this->notice_category_id;
                            $data->notice_heading = $this->notice_heading;
                            $data->notice_description = $this->notice_description;
                            $data->notice_type_id = $this->notice_type_id;
                            $data->save();

                        }
                        else {

                            $validated = $this->validate([
                                'notice_heading'=>'required|max:50|min:1',
                                'notice_description'=>'required|max:50|min:1',
                                'notice_file'=>'required|mimes:pdf|max:1000',
                            ]);

                            $data = ModelsNotice::findorFail($this->notice_id);
                            $data->notice_category_id = $this->notice_category_id;
                            $data->notice_heading = $this->notice_heading;
                            $data->notice_description = $this->notice_description;
                            $data->notice_type_id = $this->notice_type_id;
                            $this->notice_file = $this->notice_file->store('notice', 'public');
                            $data->notice_file = $this->notice_file;
                            $data->save();
                        }

                     }
                     else {

                        if ($this->notice_file == null) {

                            $validated = $this->validate([
                                'notice_heading'=>'required|max:50|min:1',
                            ]);

                            $data = ModelsNotice::findorFail($this->notice_id);
                            $data->notice_category_id = $this->notice_category_id;
                            $data->notice_heading = $this->notice_heading;
                            $data->notice_type_id = $this->notice_type_id;
                            $data->save();
                        }
                        else {
                            $validated = $this->validate([
                                'notice_heading'=>'required|max:50|min:1',
                                'notice_file'=>'required|mimes:pdf|max:1000',
                            ]);

                            $data = ModelsNotice::findorFail($this->notice_id);
                            $data->notice_category_id = $this->notice_category_id;
                            $data->notice_heading = $this->notice_heading;
                            $data->notice_type_id = $this->notice_type_id;
                            $this->notice_file = $this->notice_file->store('notice', 'public');
                            $data->notice_file = $this->notice_file;
                            $data->save();
                        }

                     }

                 }
             }
             $this->updateMode = false;
             $this->clear_form();
         }

     }

    //for delete
    public function delete($id)
    {
        ModelsNotice::findorfail($id)->delete();
    }

    //for fetch all notice
    private function fetch_all_notice()
    {
        $data = ModelsNotice::all();
        return $data;
    }

    //for fetch all notice category list
    private function fetch_all_notice_category()
    {
        $data = NoticeCategory::all();
        return $data;
    }

    //for fetch notice file type
    private function fetch_notice_type()
    {
        $data = NoticeType::all();
        return $data;
    }

    //for clear form
    private function clear_form()
    {
        $this->notice_category_id = 0;
        $this->notice_heading = null;
        $this->notice_description = null;
        $this->notice_type_id = null;
        $this->notice_file = null;
    }

    public function render()
    {
        $this->notice_list = $this->fetch_all_notice();
        return view('livewire.notice.notice');
    }
}
