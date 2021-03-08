<?php

namespace App\Http\Livewire\Gallery;

use App\Models\GalleryAlbum;
use Livewire\Component;

class Gallerycategory extends Component
{

    public $gallery_album_name;
    public $gallery_album_id;
    public $updateMode = false;
    public $status = [];
    public $gallery_album_list;


    //for store date
    public function store()
    {

        //validate the data forms
        $validatedata  = $this->validate([
            'gallery_album_name'=>'required|max:50|min:1',
        ]);

        //save the data on table
        GalleryAlbum::create($validatedata);

        //for clear the form
            $this->clear_form();
    }

    //edit the gallery category
    public function edit($id)
    {
        $data = GalleryAlbum::findOrFail($id);
        $this->gallery_album_id = $id;
        $this->gallery_album_name = $data->gallery_album_name;
        $this->updateMode = true;

    }

    //update the gallery category name
    public function update()
    {

        //validate the data forms
        $validatedata  = $this->validate([
            'gallery_album_name'=>'required|max:50|min:1',
        ]);


        //find the row the table
        $data = GalleryAlbum::findorFail($this->gallery_album_id);
        //save the data on table
        $data->update(['gallery_album_name'=>$this->gallery_album_name]);

        //update mode off
        $this->updateMode = false;

        //for clear the form
            $this->clear_form();
    }

    //for clear the form data
    private function clear_form()
    {
        $this->gallery_album_name = '';

    }

    //fetch all list of gallery category
    private function fetch_gallery_category_list()
    {
        $gallery_album= GalleryAlbum::all();
        return $gallery_album;
    }

    //for delete
    public function delete($id)
    {
        GalleryAlbum::findorfail($id)->delete();
    }
    public function render()
    {
        $this->gallery_album_list = $this->fetch_gallery_category_list();
        return view('livewire.gallery.gallerycategory');
    }
}
