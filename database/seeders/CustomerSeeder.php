<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    //seed default customer information
    public function run(): void
    {
        $customers = [
            [
                'customer_name' => 'John Doe',
                'address_1' => '123 Elm St',
                'address_2' => '',
                'city' => 'Knoxville',
                'state' => 'TN',
                'zip' => '37918',
                'phone' => '865-555-1234',
                'email' => 'john@example.com',
                'business_type' => 'LLC',
                'preferred_days' => 'M,W,F',
            ],
            [
                'customer_name' => 'Jane Smith',
                'address_1' => '456 Oak Ave',
                'address_2' => 'Suite 200',
                'city' => 'Oak Ridge',
                'state' => 'TN',
                'zip' => '37830',
                'phone' => '865-555-5678',
                'email' => 'jane@example.com',
                'business_type' => 'Corporation',
                'preferred_days' => 'T,R',
            ],
            [
                'customer_name' => 'Bob Builder',
                'address_1' => '789 Construction Blvd',
                'address_2' => '',
                'city' => 'Farragut',
                'state' => 'TN',
                'zip' => '37934',
                'phone' => '865-555-9999',
                'email' => 'bob@example.com',
                'business_type' => 'Sole Proprietor',
                'preferred_days' => 'M,T,W',
            ],
            [
                'customer_name' => 'Alice Johnson',
                'address_1' => '321 Maple Dr',
                'address_2' => 'Apt B',
                'city' => 'Maryville',
                'state' => 'TN',
                'zip' => '37801',
                'phone' => '865-555-2222',
                'email' => 'alice@example.com',
                'business_type' => 'Other',
                'preferred_days' => 'F',
            ],
            [
                'customer_name' => 'Chuck Norris',
                'address_1' => '987 Roundhouse Rd',
                'address_2' => '',
                'city' => 'Sevierville',
                'state' => 'TN',
                'zip' => '37862',
                'phone' => '865-555-0000',
                'email' => 'chuck@example.com',
                'business_type' => 'LLC',
                'preferred_days' => 'M,R',
            ],
        ];
        //loop through and create custoemrs based on data
        foreach ($customers as $data) {
            Customer::create([
                'account_number' => 'ACCT-' . strtoupper(Str::random(6)),
                ...$data
            ]);
        }
    }
}
