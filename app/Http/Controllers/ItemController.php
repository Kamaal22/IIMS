<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        // $items = Item::all();
        $categories = DB::table('categories')->get();


        // get the category names from categories table
        // foreach ($items as $item) {
        //     $category = DB::table('categories')->where('id', $item->category)->first();
        //     $item->category_name = $category->name;
        //     $item->category_id = $category->id;
        // }

        $title = "IIMS | Items";
        return view('items.index', ['title' => $title, 'categories' => $categories]);
    }

    public function create(Request $request)
    {
        $type = "";

        // Use an if statement for the quantity condition
        if ($request->quantity === 1) {
            $type = "unit";
        } else {
            $type = "bulk";
        }

        $request->validate([
            "name" => "required",
            "model" => "required",
            "brand" => "required",
            "quantity" => "required",
            // Add the min rule for description
            "description" => "required|min:3",
        ], [
            "name.required" => "The name field is required.",
            "description.required" => "The description field is required.",
            "description.min" => "The description must be at least :min characters."
        ]);

        try {
            $item = DB::table('items')->insert([
                'name' => $request->name,
                'model' => $request->model,
                'brand' => $request->brand,
                'type' => $type,
                'serial_number' => $request->serial_number,
                // 'location' => $request->location,
                'sku' => $request->sku,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'category' => $request->category
            ]);

            if ($item) {
                return redirect()->back()->with(['success' => 'Item saved to the database'])->withInput();
            } else {
                return redirect()->back()->with(['fail' => 'Something went wrong!'])->withInput();
            }
        } catch (Exception $e) {
            return redirect()->back()->with(['fail' => 'Something went wrong! <br> ' + $e->getMessage()])->withInput();
        }

        // return redirect('items');
    }

    public function view()
    {
        $items = Item::with('category')->get();

        $title = "IIMS | Items";
        return view('items.view', ['title' => $title, 'items' => $items]);
    }

    public function edit($id)
    {
        $item = Item::find($id);
        $categories = DB::table('categories')->get();



        $title = "IIMS | Edit Item";

        return view('items.edit', ['title' => $title, 'item' => $item, 'categories' => $categories]);
    }
    public function show($id)
    {
        $item = Item::findOrFail($id);

        $title = "IIMS | View Item";

        return view('items.show', ['title' => $title, 'item' => $item]);
    }
}
