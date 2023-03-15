<?php

/**
 * PHP version 9
 *
 * @author    Siyabonga Alexander Mnguni <alexmnguni57@gmail.com>
 * @author    Thina Taliwe <thina.taliwe2@gmail.com>
 * @copyright 2023 1Office
 * @license   MIT License
 * @link      https://github.com/alexmnguni57/1Office-GBA
 */

namespace App\Actions;

use App\Models\Address;
use App\Models\City;
use App\Models\Country;
use App\Models\Province;

/**
 * Class StoreAddress
 *
 * @package App\Actions
 */
class StoreAddress
{
    /**
     * Handle the data to store a new Address record
     *
     * @param object $data //
     *
     * @return Address
     */
    public function handle($data): Address
    {
        // Convert the country, province and city names to uppercase
        $country = strtoupper($data->Country);
        $province = strtoupper($data->Province);
        $city = strtoupper($data->City);

        // Check if country, province and city records exist, if not, add them
        $countryId = checkCountry($country);
        $provinceId = checkProvince($province, $countryId);
        $cityId = checkCity($city, $countryId, $provinceId);

        // Create a new Address instance
        $address = new Address();

        // Set the Address properties
        $address->adress_type_id = 1;
        $address->line1 = $data->Line1;
        $address->suburb = $data->TownSuburb;
        $address->city_id = $cityId;
        $address->city = $city;
        $address->ZIP = $data->PostalCode;
        $address->district = $data->Line2;
        $address->province_id = $provinceId;
        $address->province = $province;
        $address->country_id = $countryId;

        try {
            // Save the new Address record
            $address->save();
        } catch (\Exception$exception) {
            // If there was an error saving the Address record, redirect back with error message
            return redirect()->back()
                ->withInput()
                ->with('error', 'There was a problem while saving the address');
        }

        // Return the new Address record
        return $address;
    }
}
