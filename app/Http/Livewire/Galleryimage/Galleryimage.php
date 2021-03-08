<?php

namespace App\Http\Livewire\Galleryimage;

use App\Models\GalleryAlbum;
use App\Models\Galleryimage as ModelsGalleryimage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Galleryimage extends Component
{

    use WithFileUploads;

    public $gallery_album_list;
    public $gallery_album_id;
    public $gallery_image_name = [];

    public function mount()
    {
        $this->fetch_gallery_album_list();
    }

    //store the images

    public function store()
    {
        //if album is not selected then form not submited
        if ($this->gallery_album_id == 0) {
            dd('album not selected');
        }

        else {
            $this->validate([

                'gallery_image_name.*'=>'image|max:1024',
            ]);
            foreach ($this->gallery_image_name as $key => $image) {
                $this->gallery_image_name[$key] = $image->store('images','public');
            }
            $this->gallery_image_name = json_encode($this->gallery_image_name);
            ModelsGalleryimage::create([
                'gallery_album_id'=>$this->gallery_album_id,
                'gallery_image_name' => $this->gallery_image_name
                ]);
        }



    }

    public function render()
    {
        return view('livewire.galleryimage.galleryimage');
    }

    //fetch all list from gallery album
    private function fetch_gallery_album_list()
    {
        $this->gallery_album_list = GalleryAlbum::all();
    }
}
