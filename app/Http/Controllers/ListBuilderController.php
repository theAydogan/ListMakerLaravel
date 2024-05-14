<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;



use Illuminate\Http\Request;

class ListBuilderController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->TPL = [];
    }
    public function displayPage(Request $request)
    {
        // Retrieve TODO list items associated with the authenticated user
        $user = Auth::user();
        $items = $user->items()->get();

        // Pass the user's name to the view
        $this->TPL["name"] = $user->name;

        $this->TPL["items"] = $items;
        $this->TPL["session_items"] = $request->session()->get('session_items', []);

        return view("listbuilder", $this->TPL);
    }

    public function newItem(Request $request)
    {
        $itemName = $request->input('item');
        $itemDescription = $request->input('description');
        $itemDueDate = $request->input('due_date');

        $user = Auth::user();

        $sessionItems = $request->session()->get('session_items', []);

        $sessionItems[] = [
            'name' => $itemName,
            'description' => $itemDescription,
            'due_date' => $itemDueDate,
        ];

        $request->session()->put('session_items', $sessionItems);

        return redirect()->route('listbuilder');
    }


    public function saveItems(Request $request)
    {
        $user = Auth::user();

        $sessionItems = $request->session()->get('session_items', []);

        foreach ($sessionItems as $itemData) {
            $item = new Item([
                'name' => $itemData['name'],
                'description' => $itemData['description'],
                'due_date' => $itemData['due_date'],
            ]);
            $user->items()->save($item);
        }

        $request->session()->forget('session_items');

        return $this->displayPage($request);
    }




    public function clearList(Request $request)
    {
        try {
            $request->session()->forget("session_items");
    
            return redirect()->route('listbuilder')->with('success', 'List cleared successfully');
        } catch (\Exception $e) {
            return back()->withError("Failed to clear list: " . $e->getMessage());
        }
    }
    
}
