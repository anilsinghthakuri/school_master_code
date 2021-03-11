<?php

namespace App\Http\Livewire\Notice;

use App\Models\NoticeCategory as ModelsNoticeCategory;
use Livewire\Component;

class Noticecategory extends Component
{

    public $updateMode = false;
    public $notice_category_name;
    public $notice_category_list;
    public $notice_category_id;

    //for store
    public function store()
    {
        $validatedata = $this->validate([
            'notice_category_name'=>'required|max:50|min:1'
        ]);

        ModelsNoticeCategory::create($validatedata);

        $this->clear_form();

    }

    //edit the notice category
    public function edit($id)
    {
        $data = ModelsNoticeCategory::findOrFail($id);
        $this->notice_category_id = $id;
        $this->notice_category_name = $data->notice_category_name;
        $this->updateMode = true;

    }

    //update the notice category name
    public function update()
    {

        //validate the data forms
        $validatedata  = $this->validate([
            'notice_category_name'=>'required|max:50|min:1',
        ]);


        //find the row the table
        $data = ModelsNoticeCategory::findorFail($this->notice_category_id);
        //save the data on table
        $data->update(['notice_category_name'=>$this->notice_category_name]);

        //update mode off
        $this->updateMode = false;

        //for clear the form
            $this->clear_form();
    }

    //for delete
    public function delete($id)
    {
        ModelsNoticeCategory::findorfail($id)->delete();
    }

    //fetch all notice category data
    private function fetch_all_notice_category()
    {
        $notice_category_list = ModelsNoticeCategory::all();
        return $notice_category_list;
    }

    //clear form
    private function clear_form()
    {
        $this->notice_category_name = null;
    }
    public function render()
    {
        $this->notice_category_list = $this->fetch_all_notice_category();
        return view('livewire.notice.noticecategory');
    }
}
