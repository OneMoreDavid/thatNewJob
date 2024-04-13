<?php

namespace App\Http\Controllers;

use App\Models\UserItem;
use Termwind\Components\Ul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\UseItem;

class ItemController extends Controller
{
    // show all items (index page if you will)
    
    public function index()
    {
        $myItems = UserItem::where('user_id', auth()->id())->get();
        if (count($myItems) == 0) {
            return view('items.index');
        } else {
            return view('items.mine', ['userItems' => request()->user()->items()->latest()->get()]);
        }
        
    }

    // show a single item
    public function show(UserItem $item) {

        if (auth()->id() !== (int) $item->user_id) {
            abort(403);
        }
        else
        {
            return view('items.one', [
                'item' => $item
            ]);
        }  
        
    }


    // show the CREATE new item form 
    public function create() {
        return view('items.create');
    }

    // store the new job data
    public function store(Request $request) {
        $newJobItem = $request->validate([
            "job_title" => "sometimes",
            "company_name" => "sometimes",
            "status" => "required",
            "awareness_date" => "sometimes",
            "job_description_notes" => "sometimes",
            "link_to_advert" => 'sometimes',
            "how_did_you_find_it" => 'sometimes',
            "job_type" => "sometimes",
            "salary" => 'sometimes',
            "benefits" => 'sometimes',
            "why_do_you_want_it" => 'sometimes',
            "strong_areas" => 'sometimes',
            "weak_areas" => 'sometimes',
            "applied_date" => 'sometimes',
            "telephone_interview_date" => 'sometimes',
            "first_onsite_interview_date" => 'sometimes',
            "interview_notes" => 'sometimes',
            "feedback_received" => 'sometimes',
            "offer_received_date" => 'sometimes',
            "offer_accepted_date" => 'sometimes',
        ]);

        $newJobItem['user_id'] = auth()->id();

        UserItem::create($newJobItem);

        return redirect('/')->with('message', 'Added successfully, Good Luck');
    }

    // show the EDIT item page = SHOWS
    public function edit(UserItem $item) {

        if (auth()->id() !== (int) $item->user_id) {
            abort(403);
        }
        else
        {
            return view('items.edit', ['item' => $item]);
        }  
        
    }

    // save the EDITED item = UPDATE
    public function update(Request $request, UserItem $item) {
        $newJobItem = $request->validate([
            "job_title" => "sometimes",
            "company_name" => "sometimes",
            "status" => "required",
            "awareness_date" => "sometimes",
            "job_description_notes" => "sometimes",
            "link_to_advert" => 'sometimes',
            "how_did_you_find_it" => 'sometimes',
            "job_type" => "sometimes",
            "salary" => 'sometimes',
            "benefits" => 'sometimes',
            "why_do_you_want_it" => 'sometimes',
            "strong_areas" => 'sometimes',
            "weak_areas" => 'sometimes',
            "applied_date" => 'sometimes',
            "telephone_interview_date" => 'sometimes',
            "first_onsite_interview_date" => 'sometimes',
            "interview_notes" => 'sometimes',
            "feedback_received" => 'sometimes',
            "offer_received_date" => 'sometimes',
            "offer_accepted_date" => 'sometimes',
        ]);

        $item->update($newJobItem);
        return view('items.one', ['item' => $item]); // this one works - took more  effort than I want to admit....
    }

    // DELETE an item
    public function delete(UserItem $item) {
        $item->delete(); 

        return redirect('items/manage')->with('message', 'Item has been deleted'); // ONLY THING - AT MOMENT THERE IS NO 'are you sure'
    }

    // Manage own items
    public function manage() {
        return view('items.manage', ['userItems' => request()->user()->items()->latest()->get()]);
    }

}
