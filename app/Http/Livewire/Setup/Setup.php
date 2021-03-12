<?php

namespace App\Http\Livewire\Setup;

use App\Models\Setup as ModelsSetup;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class Setup extends Component
{

    public $updateMode;
    public $all_setup_data ;
    public $school_name;
    public $school_adderss;
    public $school_phone;
    public $school_email;
    public $school_facebook_link;
    public $school_insta_link;

    public function mount()
    {
        $this->all_setup_data = $this->fetch_all_setup_data();
        // dd($this->all_setup_data);
        $this->check_setup_table_data();
    }

    //update setup
    public function update()
    {

    }

    //fetch all setup data
    private function fetch_all_setup_data()
    {
        $data = ModelsSetup::all();
        return $data;
    }

    //check their data on setup
    private function check_setup_table_data()
    {
        if (sizeof($this->all_setup_data) ) {
            $this->updateMode = false;
        } else {
            $this->updateMode = true;
        }

    }
    public function render()
    {
        return view('livewire.setup.setup');
    }
}
