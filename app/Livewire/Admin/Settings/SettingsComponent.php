<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class SettingsComponent extends Component
{
    use WithFileUploads;
    public $web_name;
    public $web_email;
    public $web_phone;
    public $address;
    public $working_hours_days;
    public $facebook_link;
    public $twitter_link;
    public $linkedin_link;
    public $map_link;
    public $web_logo;
    public $web_favicon;
    public $web_newLogo;
    public $web_newFavicon;
    public $settings_id;

    public function mount(){
        $settings = Setting::find(1);
        $this->web_name = $settings->web_name;
        $this->web_email = $settings->web_email;
        $this->web_phone = $settings->web_phone;
        $this->address = $settings->address;
        $this->working_hours_days = $settings->working_hours_days;
        $this->facebook_link = $settings->facebook_link;
        $this->twitter_link = $settings->twitter_link;
        $this->linkedin_link = $settings->linkedin_link;
        $this->map_link = $settings->map_link;
        $this->web_logo = $settings->web_logo;
        $this->web_favicon = $settings->web_favicon;
        $this->settings_id = $settings->id;
    }

    public function updateSettings(){
        $settings = Setting::find(1);
        $settings->web_name = $this->web_name;
        $settings->web_email = $this->web_email;
        $settings->web_phone = $this->web_phone;
        $settings->address = $this->address;
        $settings->working_hours_days = $this->working_hours_days;
        $settings->facebook_link = $this->facebook_link;
        $settings->twitter_link = $this->twitter_link;
        $settings->linkedin_link = $this->linkedin_link;
        $settings->map_link = $this->map_link;
        if($this->web_newLogo){
            $imagename = Carbon::now()->timestamp. 'Logo' .'.'.$this->web_newLogo->extension();
            $this->web_newLogo->storeAs('Settings', $imagename);
            $settings->web_logo = $imagename;
        }
        if($this->web_newFavicon){
            $imagename = Carbon::now()->timestamp. 'Favicon' .'.'.$this->web_newFavicon->extension();
            $this->web_newFavicon->storeAs('Settings', $imagename);
            $settings->web_favicon = $imagename;
        }
        $settings->save();
        session()->flash('message', 'Settings updated successfully');
        return redirect()->route('settings');
    }
    public function render()
    {
        return view('livewire.admin.settings.settings-component')->layout('layouts.admin');
    }
}
