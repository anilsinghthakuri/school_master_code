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
    public $gallery_image_name;
    public $gallery_image_list;

    public function mount()
    {
        $this->fetch_gallery_album_list();
        $this->gallery_image_list = $this->fetch_all_image();

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

                'gallery_image_name'=>'image|max:1024',
            ]);

            $this->gallery_image_name = $this->gallery_image_name->store('gallery', 'public');
            ModelsGalleryimage::create([
                'gallery_album_id'=>$this->gallery_album_id,
                'gallery_image_name' => $this->gallery_image_name
                ]);

            $this->clear_image_name();
        }
    }

    //fetch all image from galleryimage table database
    public function fetch_all_image()
    {
        $image = ModelsGalleryimage::all();
        return $image;
    }

    public function render()
    {
        $this->gallery_image_list = $this->fetch_all_image();
        return view('livewire.galleryimage.galleryimage');
    }

    //fetch all list from gallery album
    private function fetch_gallery_album_list()
    {
        $this->gallery_album_list = GalleryAlbum::all();
    }

    //for clear image name
    private function clear_image_name()
    {
        $this->gallery_image_name = null;
    }
}
