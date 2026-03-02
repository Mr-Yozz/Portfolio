<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Nette\Utils\Json;

class ManiController extends Controller
{
    public function home()
    {
        // 1. Calculate Experience
        $startDate = Carbon::parse('2025-09-15'); // Your start date
        $yearsDiff = $startDate->diffInDays(Carbon::now()) / 365.25;

        // Logic to round to nearest 0.5 (e.g., 0.5, 1.0, 1.5)
        $yearsExp = (ceil($yearsDiff * 2) / 2);
        $displayYears = number_format($yearsExp, 1) . '+';

        $projectCount = Project::count() . '+';

        return view('welcome', compact('displayYears', 'projectCount'));
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

    public function Project()
    {
        $projects = Project::latest()->get();
        return view('project-details', compact('projects'));
    }

    // 1. STORE (Add New Project)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($data);
        return redirect()->back()->with('success', 'Project added!');
    }

    // 2. UPDATE (Edit Existing)
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($project->image);
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);
        return redirect()->back()->with('success', 'Project updated!');
    }

    // 3. DESTROY (Delete)
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();

        return redirect()->back()->with('success', 'Project deleted!');
    }

    public function showProject($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        // Optional: Get 3 other projects for a "Recommended" section
        $relatedProjects = Project::where('slug', '!=', $slug)->take(3)->get();
        return response()->json([
            'success' => true,
            'data' => [
                'main_project' => $project,
                'recommendations' => $relatedProjects
            ]
        ], 200);
    }

    public function sendMessage(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'description' => $request->message,
            'number' => $request->number
        ]);

        $name = $request->name;
        $email = $request->email;
        $number = $request->number;
        $subject = $request->subject;
        $message = $request->message;

        $text = "New Contact Message %0A%0A"
            . "Name: $name %0A"
            . "Email: $email %0A"
            . "Subject: $subject %0A"
            . "Message: $message %0A"
            . "Call: $number";

        $phone = "918270839696"; // your whatsapp number

        return redirect("https://wa.me/$phone?text=$text");
    }
}
