<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membership>
 */
class MembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $fname =  $this->faker->firstName(); 
        $Sname = $this->faker->lastName();

        return [
            
        'membership_code' => $this->faker->randomNumber(),
        'name' => $fname,
        'initials' => substr($fname, 0, 1).".".ucfirst(substr($Sname, 0, 1)),
        'surname' => $Sname,
        'id_number' => $this->faker->numerify('#############'),
        'join_date' => Carbon::now()->toDateTimeString(),
        'end_date' => Carbon::now()->addYears(4)->toDateTimeString(),
        // 'end_reason' => $request->input(''),
        'gender_id' => $this->faker->randomElement(['M','F']),
        'bu_membership_type_id' => 1,
        'bu_membership_region_id' => 1,
        'bu_membership_status_id' => 1,
        'language_id' => $this->faker->numberBetween(1, 2),
        // 'person_id' => ,
        // 'previous_membership_id' => 1,
        
        'primary_contact_number' => '0'.$this->faker->numerify('#########'),
        'secondaty_contact_number' => '0'.$this->faker->numerify('#########'),
        'terciary_contact_number' => '0'.$this->faker->numerify('#########'),
        'sms_number' => '0'.$this->faker->numerify('#########'),
        'primary_e_mail_address' => $this->faker->email(),
        'secondary_e_mail_address' => $this->faker->email(),
        // 'membership_fee' => $request->input('email'),
        'fee_currency_id' => 149,
        // 'last_payment_date' => $request->input('email'),
        //'paid_till_date' => $request->input('email'),
        ];
    }
}
