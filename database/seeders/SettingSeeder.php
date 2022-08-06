<?php

namespace Database\Seeders;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             Setting::create([
            'Company_name' => Str::random(10),
            'Company_email' => Str::random(10).'@gmail.com',
            'Company_address'=>Str::random(10),
            'Company_city'=>Str::random(10),
            'Company_phone'=>Str::random(10),
            'Company_country'=>Str::random(10),
            'Company_zipcode'=>Str::random(10),
            'Company_logo'=>'https://seeklogo.com/images/B/business-company-logo-C561B48365-seeklogo.com.png'
        ]);
    }
}
