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
    if (isset($input['email'])) {
        $validationRules['email'] = ['string', 'email', 'max:255'];
    }

    Validator::make($input, $validationRules)->validate();

    // Create the user
    $user = User::create([
        'name' => $input['name'],
        'email' => $input['email'] ?? null, // Use null if email is not present
        'phone_number' => $input['phone_number'] ?? null,
        'password' => Hash::make($input['password']),
    ]);

    // Store the intended URL in the session
    session(['url.intended' => '/profile']);

    return $user;
}

}
