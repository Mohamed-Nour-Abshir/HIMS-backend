<?php

namespace App\Livewire\Admin\Mission;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\MissionVision;
use Livewire\WithFileUploads;

class MissionVisionComponent extends Component
{
    use WithFileUploads;

    public $chairman_message, $chairman_image, $chairman_old_image, $md_message, $md_image, $md_old_image;
    public $mission_id;

    public function mount()
    {
        $mission_vision = MissionVision::first();
        $this->chairman_message = $mission_vision->chairman_message;
        $this->chairman_old_image = $mission_vision->chairman_image;
        $this->md_message = $mission_vision->md_message;
        $this->md_old_image = $mission_vision->md_image;
        $this->mission_id = $mission_vision->id;
    }

    public function mission_vision_update()
    {
        $this->validate([
            'chairman_message' => 'nullable|string',
            'chairman_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'md_message' => 'nullable|string',
            'md_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $mission_vision = MissionVision::find($this->mission_id);
        $mission_vision->chairman_message = $this->chairman_message;
        $mission_vision->md_message = $this->md_message;

        if ($this->chairman_image) {
            // if ($this->chairman_old_image != null) {
            //     unlink('assets/images/mission_vision/' . $this->chairman_old_image);
            // }
            $filename = Str::uuid() . '.' . $this->chairman_image->extension();
            $this->chairman_image->storeAs('mission_vision', $filename);
            $mission_vision->chairman_image = $filename;
        }

        if ($this->md_image) {
            // if ($this->md_old_image != null) {
            //     unlink('assets/images/mission_vision/' . $this->md_old_image);
            // }
            $filename = Str::uuid() . '.' . $this->md_image->extension();
            $this->md_image->storeAs('mission_vision', $filename);
            $mission_vision->md_image = $filename;
        }

        $mission_vision->update();

        session()->flash('message', 'Mission Vision Updated Successfully.');

    }

    // render.view
    public function render()
    {
        return view('livewire.admin.mission.mission-vision-component')->layout('layouts.admin');
    }
}
