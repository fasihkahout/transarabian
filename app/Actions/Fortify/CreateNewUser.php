<?php
namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
 public function create(array $input): User
{
    $validationRules = [
        'name' => ['required', 'string', 'max:255'],
        'password' => $this->passwordRules(),
        'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
    ];

    // Check if email is present before adding validation rule
    if (empty($input['email'])) {
        // Generate a random email if it's empty
        $input['email'] = $this->generateRandomEmail();
    } else {
        $validationRules['email'] = ['string', 'email', 'max:255'];
    }

    // Add unique rule for phone_number
    $validationRules['phone_number'] = ['nullable', 'string', 'unique:users'];

    // Validate the input
    $validator = Validator::make($input, $validationRules);

    if ($validator->fails()) {
        // If validation fails, set an error flash message
        session()->flash('error', 'User registration failed. Please check the form.');

        // Redirect back with input and validation errors
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Create the user
    $user = User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'phone_number' => $input['phone_number'] ?? null,
        'password' => Hash::make($input['password']),
    ]);

    // Set a success flash message
    session()->flash('success', 'Your Random email is generated .. You can use this email to login in future!');

    // Store the intended URL in the session
    session(['url.intended' => '/profile']);

    // Redirect to a success page or wherever you want
    return $user;
}

private function generateRandomEmail(): string
{
    // Generate a random email using a unique identifier or any logic you prefer
    return 'random_' . uniqid() . '@example.com';
}


}
