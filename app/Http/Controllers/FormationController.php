<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view(
            'formation.index',
            [
                'formations' => $formations
            ]
        );
    }
    public function liste()
    {
        $formations = Formation::all();
        return view(
            'admin.formation',
            [
                'formations' => $formations
            ]
        );
    }

    public function create()
    {

        return view('admin.createFormation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20048',
        ]);
    
        $imageName = null;
        $videoName = null;
    
        // Upload image into storage repository
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
        }
    
        // Upload video into storage repository
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '_video.' . $video->getClientOriginalExtension();
            $video->storeAs('public/videos', $videoName);
        }
    
        $formation = new Formation();
        $formation->titre = $request->titre;
        $formation->contenu = $request->contenu;
        $formation->image = $imageName; // Save the image name, not the file
        $formation->video = $videoName; // Save the video name, not the file
        $formation->user_id = auth()->user()->id;
        $formation->save();
    
        return redirect()->back()->with('success', 'Formation has been added');
    }
    

    public function indexe()
{
    $formations = Formation::all();
    return view('formation.index', compact('formations'));

}


public function show($id)
{
    $formation = Formation::findOrFail($id);
    return view('formation.show', compact('formation'));
}
}
