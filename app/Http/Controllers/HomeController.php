<?php
namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function addJob(Request $request)
    {
        $validatedData = $request->validate([
            // Validation rules...
            'firstname' => 'required',
            'lastName' => 'required',
            'cityname' => 'required',
            'company_worked' => 'required|array|min:1',
            'other_company' => 'required',
            'badge_no' => 'required',
            'mobileno' => 'required|numeric',
            'mobile_otp' => 'nullable',
            'whatsappNo' => 'required',
            'newsletter' => 'required',
            'terms_condition' => 'required',
            'email' => 'required|email',
            'expyear' => 'required',
            'overexyear' => 'required',
            'tradeName' => 'required',
            'industrytype' => 'required',
            'source' => 'required',
            'passportNo' => 'required',

        ]);

        // Generate OTP as a string
        $otp = strval(rand(100000, 999999));
        // Send OTP via email
        Mail::raw("Your OTP is: $otp", function ($message) use ($validatedData) {
            $message->to($validatedData['email'])
                ->subject('OTP for Form Submission');
        });

        // Store the OTP in the session for verification
        $validatedData['mobile_otp'] = $otp;
        session()->put('job_otp', $otp);
        session()->put('job_data', $validatedData);

        return redirect()->route('verifyJobOtp');
    }

    public function submitJob(Request $request)
    {
        $user = Auth::user();
        $submittedOtp = $request->input('otp');
        $otp = session('job_otp');
        $validatedData = session('job_data');

        if ($submittedOtp == $otp) {
            // OTP verified, submit the job form
            $job = new Job;
            // Set job attributes...
            $job->firstname = $validatedData['firstname'];
            $job->lastname = $validatedData['lastName'];
            $job->cityname = $validatedData['cityname'];
            $companyWorked = implode(', ', $validatedData['company_worked']);
            $job->company_worked = $companyWorked;
            $job->other_company = $validatedData['other_company'];
            $job->badge_no = $validatedData['badge_no'];
            $job->mobileno = $validatedData['mobileno'];
            $job->mobile_otp = $validatedData['mobile_otp'];
            $job->whatsappNo = $validatedData['whatsappNo'];
            $job->newsletter = $validatedData['newsletter'];
            $job->terms_condition = $validatedData['terms_condition'];
            $job->email = $validatedData['email'];
            $job->expyear = $validatedData['expyear'];
            $job->overexyear = $validatedData['overexyear'];
            $job->tradename = $validatedData['tradeName'];
            $job->industrytype = $validatedData['industrytype'];
            $job->source = $validatedData['source'];
            $job->passportno = $validatedData['passportNo'];
            $job->user_id = $user->id;

            // Handle file upload and storage
            if ($request->hasFile('resume')) {
                $resume = $request->file('resume');
                if ($resume->isValid()) {
                    $imagename = time() . '.' . $resume->getClientOriginalExtension();
                    $resume->move('jobimage', $imagename);
                    $job->resume = $imagename;
                } else {
                    // Handle the case when the uploaded file is not valid
                }
            } else {
                // Handle the case when no file was uploaded
            }

            $job->save();

            // Clear the OTP and form data from the session
            session()->forget(['job_otp', 'job_data']);

            return redirect('index')->with('success', 'Job added successfully!');
        } else {
            return redirect()->back()->with('error', 'Invalid OTP');
        }
    }

    public function verifyJobOtp()
    {
        return view('verify_job_otp');
    }

}
