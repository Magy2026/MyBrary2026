<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Creative;
use App\Models\Page;

class CreativeController extends Controller
{
 
public function store(Request $request)
    {
        $creative = Creative::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
        ]);

        $content = $request->content;

        $pages = str_split($content, 1000);

        foreach ($pages as $index => $pageContent) {
            Page::create([
                'creative_id' => $creative->id,
                'page_number' => $index + 1,
                'content' => $pageContent,
            ]);
        }

        return redirect()->route('creative.index');
    }
    public function create()
    {
        return view('creative.create');
    }


    public function index()
{
    $creatives = auth()->user()->creatives()->latest()->get();

    return view('creative.index', compact('creatives'));
}

    public function show(Creative $creative)
{
    $creative->load('pages');

    return view('creative.show', compact('creative'));
}


    public function edit(Creative $creative)
{
      $fullContent=$creative->pages->pluck('content')->implode(" ");
     return view('creative.edit', compact('creative', 'fullContent'));
}


     public function update(Request $request, Creative $creative)
{
      $creative->update([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return redirect()->route('creative.show', $creative);
}

     public function destroy(Creative $creative)
{
       $creative->delete();

    return redirect()->route('creative.index')->with('success', 'Deleted successfilly');
}
   public function all()
{
    $creatives = Creative::with('user')
        ->orderBy('title', 'asc')
        ->get();

    return view('static.all-creatives', compact('creatives'));
}
   public function publicShow(Creative $creative)
{
    $creative->load('user','pages');

    return view('creative.public-show', compact('creative'));
}

}

