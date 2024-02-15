<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = [
            [
            'company_name' => 'tata motors',
            'brand_title' => 'cars',
            'company_address' => 'chingrighata',
            'bank_name' => 'hdfc',
            'bank_acc_number' =>'4226555',
            'bank_ifsc' => '635656565',
            'gstin' => 'fdgd6555',
            'logo' => null,
            'status' => 'active',
            ],
            [
            'company_name' => 'honda motors',
            'brand_title' => 'bike',
            'company_address' => 'chinarpark',
            'bank_name' => 'icici',
            'bank_acc_number' =>'422655555',
            'bank_ifsc' => '6356565',
            'gstin' => 'fdgd6444',
            'logo' => null,
            'status' => 'inactive',
            ],
            
    ];
    
    foreach ($company as $entity)
    {
        Company::create($entity);
    }
    }
}
