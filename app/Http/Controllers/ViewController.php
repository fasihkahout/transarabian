<?php

namespace App\Http\Controllers;

use App\Models\apliadjob;
use App\Models\categories;
use App\Models\postjob;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            return view('index');
        }
    }

    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == 'user') {
            return view('index');
        } else {
            return view('admin.home');
        }
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function industries()
    {
        return view('industries');
    }
    public function ourachivements()
    {
        return view('ourachivements');
    }

    public function ourgallery()
    {
        return view('ourgallery');
    }
    public function ourteam()
    {
        return view('ourteam');
    }
    public function vision()
    {
        return view('vision_mission');
    }
    public function recruiter()
    {
        return view('technicalinstitute');
    }
    public function trading_contrading()
    {
        return view('trading_contrading');
    }
    public function international_recruiter()
    {
        return view('international_recruiter');
    }
    public function trading_testing()
    {
        return view('trading_testing');
    }
    public function visa_payroll()
    {
        return view('visa_payroll');
    }
    public function logistic_mobility()
    {
        return view('travell_logistic');
    }
    public function profile()
    {
        return view('profile');
    }
    public function quality()
    {
        return view('quality_statement');
    }
    public function facilities()
    {
        return view('facilities');
    }
    public function weare()
    {
        return view('who_we_are');
    }
    public function manpower()
    {
        return view('manpower');
    }
    public function ouroffice()
    {
        return view('our_office');
    }
    public function civil_contruction()
    {
        return view('Civil_Construction');
    }
    public function Petrochemical()
    {
        return view('Petrochemical ');
    }
    public function Medical_Services()
    {
        return view('Medical_Services');
    }
    public function Agriculture()
    {
        return view('Agriculture');
    }
    public function Security()
    {
        return view('Security');
    }
    public function Information_Technology()
    {
        return view('Information_Technology');
    }
    public function public_Utilities()
    {
        return view('Public_Utilities');
    }
    public function Hospitality()
    {
        return view('Hospitality');
    }
    public function Logistics()
    {
        return view('Logistics');
    }
    public function Administration()
    {
        return view('Administration');
    }
    public function dashboard1()
    {$user = auth()->user();
        $jobs = apliadjob::where('user_id', $user->id)->get();
        return view('dashboard1', compact('jobs'));
    }
    public function newpage()
    {

        return view('newpage');
    }
    public function jobs()
    {
        $categories = categories::all();

        // Get all categories from the "categories" table
        $categoryIds = $categories->pluck('category');

        // Get all jobs
        $category = postjob::all();

        $categoryJobs = [];
        foreach ($categoryIds as $categoryId) {
            // Get jobs from the "postjob" table where the "category" field matches the current category
            $filteredJobs = $category->where('category', $categoryId);
            $categoryJobs[$categoryId] = $filteredJobs;
        }

        return view('jobs', compact('category', 'categories', 'categoryJobs'));
    }

}
