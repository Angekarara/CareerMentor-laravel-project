<?php

namespace App\Http\Controllers;
use App\Models\Mentee;
use App\Models\Mentor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class MenteeController extends Controller
{
    function addmentee(){
        return view('menteedashboard');
    }

    
    public function menteePost(Request $request)
    {
        $request->validate([
            'mentee_name' => 'required|string',
            'description' => 'required|string',
        ]);
    
        $existingMentee = Mentee::where('mentee_name', $request->input('mentee_name'))->first();
    
        if ($existingMentee) {

            return redirect('/menteedashboard')->with('error', 'We already have your description');
        }
    
        Mentee::create([
            'mentee_name' => $request->input('mentee_name'),
            'description' => $request->input('description'),
        ]);
    
        return redirect('/menteedashboard')->with('success', 'Data has been successfully stored.');
    }
    

   
//     public function menteePost(Request $request)
//     {
//         $request->validate([
//             'mentee_name' => 'required|string',
//             'description' => 'required|string',
//         ]);
    
//         Mentee::create([
//             'mentee_name' => $request->input('mentee_name'),
//             'description' => $request->input('description'),
//         ]);
    
//         $menteeDescription = $request->input('description');
//         $matchingMentors = $this->findMatchingMentors($menteeDescription);
    
//         return redirect('/menteedashboard')
//             ->with('success', 'Data has been successfully stored.')
//             ->with('matchingMentors', $matchingMentors);
//     }
    

    

// private function findMatchingMentors($menteeDescription)
// {
//     $mentors = Mentor::all();
//     $matchingMentors = [];

//     foreach ($mentors as $mentor) {
//         if (strpos($mentor->description, $menteeDescription) !== false) {
//             $matchingMentors[] = $mentor;
//         }
//     }
//     dd($matchingMentors);
//     return $matchingMentors;
// }


     public function adminDashboard()
    {
        $mentees = Mentee::all();

        return view('admindashboard', compact('mentees'));
    }
}

