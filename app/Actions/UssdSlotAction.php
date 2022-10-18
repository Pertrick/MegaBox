<?php

namespace App\Actions;

use App\Models\UssdSlot;
use Illuminate\Http\Request;
use App\Http\Requests\UssdSlotRequest;

class UssdSlotAction{

    public function store(UssdSlotRequest $request){

        $request->validated();

        $ussdSlot = auth()->user()->ussdSlot()->create([
            'name' => $request->name,
            'description_of_service' => $request->description_of_service,
            'base_url' => $request->base_url,
            'enable_pin' => $request->enable_pin,

        ]);

        if($ussdSlot){
            return true;
        }

        return false;

    }

    public function fetchUssdSlot(){
        return UssdSlot::with('payment')->where('user_id', auth()->user()->id)->latest()->get();
    }
}