<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Adilabad',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Anantapur',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Chittoor',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'East Godavari',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Guntur',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Karimnagar',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Khammam',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Krishna',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Kurnool',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Mahbubnagar',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Medak',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Nalgonda',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Nizamabad',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Prakasam',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Rangareddy',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Sri Potti Sriramulu Nellore',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Srikakulam',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Visakhapatnam',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Vizianagaram',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'West Godavari',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Y.S.R',
            ],
            [
                'state' => 'Andhra Pradesh',
                'district' => 'Warangal',
            ],



            [

                'district' => "Baksa",
                'state' => "Assam"
            ],
            [
                'district' => "Barpeta",
                'state' => "Assam"
            ],
            [

                'district' => "Bongaigaon",
                'state' => "Assam"
            ],
            [

                'district' => "Cachar",
                'state' => "Assam"
            ],
            [

                'district' => "Chirang",
                'state' => "Assam"
            ],
            [

                'district' => "Darrang",
                'state' => "Assam"
            ],
            [

                'district' => "Dhemaji",
                'state' => "Assam"
            ],
            [

                'district' => "Dhubri",

                'state' => "Assam"
            ],
            [

                'district' => "Dibrugarh",

                'state' => "Assam"
            ],
            [

                'district' => "Dima Hasao",

                'state' => "Assam"
            ],
            [

                'district' => "Goalpara",

                'state' => "Assam"
            ],
            [

                'district' => "Golaghat",

                'state' => "Assam"
            ],
            [

                'district' => "Hailakandi",

                'state' => "Assam"
            ],
            [

                'district' => "Jorhat",

                'state' => "Assam"
            ],
            [

                'district' => "Kamrup",

                'state' => "Assam"
            ],
            [

                'district' => "Kamrup Metropolitan",

                'state' => "Assam"
            ],
            [

                'district' => "Karbi Anglong",

                'state' => "Assam"
            ],
            [

                'district' => "Karimganj",

                'state' => "Assam"
            ],
            [

                'district' => "Kokrajhar",

                'state' => "Assam"
            ],
            [

                'district' => "Lakhimpur",

                'state' => "Assam"
            ],
            [

                'district' => "Marigaon",

                'state' => "Assam"
            ],
            [

                'district' => "Nagaon",

                'state' => "Assam"
            ],
            [

                'district' => "Nalbari",

                'state' => "Assam"
            ],
            [

                'district' => "Sibsagar",

                'state' => "Assam"
            ],
            [

                'district' => "Sonitpur",

                'state' => "Assam"
            ],
            [

                'district' => "Tinsukia",

                'state' => "Assam"
            ],
            [

                'district' => "Udalguri",

                'state' => "Assam"
            ],
            [

                'district' => "Araria",

                'state' => "Bihar"
            ],
            [

                'district' => "Arwal",

                'state' => "Bihar"
            ],
            [

                'district' => "Aurangabad",

                'state' => "Bihar"
            ],
            [

                'district' => "Banka",

                'state' => "Bihar"
            ],
            [

                'district' => "Begusarai",

                'state' => "Bihar"
            ],
            [

                'district' => "Bhagalpur",

                'state' => "Bihar"
            ],
            [

                'district' => "Bhojpur",

                'state' => "Bihar"
            ],
            [

                'district' => "Buxar",

                'state' => "Bihar"
            ],
            [

                'district' => "Darbhanga",

                'state' => "Bihar"
            ],
            [

                'district' => "Gaya",

                'state' => "Bihar"
            ],
            [

                'district' => "Gopalganj",

                'state' => "Bihar"
            ],
            [

                'district' => "Jamui",

                'state' => "Bihar"
            ],
            [

                'district' => "Jehanabad",

                'state' => "Bihar"
            ],
            [

                'district' => "Kaimur (Bhabua)",

                'state' => "Bihar"
            ],
            [

                'district' => "Katihar",

                'state' => "Bihar"
            ],
            [

                'district' => "Khagaria",

                'state' => "Bihar"
            ],
            [

                'district' => "Kishanganj",

                'state' => "Bihar"
            ],
            [

                'district' => "Lakhisarai",

                'state' => "Bihar"
            ],
            [

                'district' => "Madhepura",

                'state' => "Bihar"
            ],
            [

                'district' => "Madhubani",

                'state' => "Bihar"
            ],
            [

                'district' => "Munger",

                'state' => "Bihar"
            ],
            [

                'district' => "Muzaffarpur",

                'state' => "Bihar"
            ],
            [

                'district' => "Nalanda",

                'state' => "Bihar"
            ],
            [

                'district' => "Nawada",

                'state' => "Bihar"
            ],
            [

                'district' => "Pashchim Champaran",

                'state' => "Bihar"
            ],
            [

                'district' => "Patna",

                'state' => "Bihar"
            ],
            [

                'district' => "Purba Champaran",

                'state' => "Bihar"
            ],
            [

                'district' => "Purnia",

                'state' => "Bihar"
            ],
            [

                'district' => "Rohtas",

                'state' => "Bihar"
            ],
            [

                'district' => "Saharsa",

                'state' => "Bihar"
            ],
            [

                'district' => "Samastipur",

                'state' => "Bihar"
            ],
            [

                'district' => "Saran",

                'state' => "Bihar"
            ],
            [

                'district' => "Sheikhpura",

                'state' => "Bihar"
            ],
            [

                'district' => "Sheohar",

                'state' => "Bihar"
            ],
            [

                'district' => "Sitamarhi",

                'state' => "Bihar"
            ],
            [

                'district' => "Siwan",

                'state' => "Bihar"
            ],
            [

                'district' => "Supaul",

                'state' => "Bihar"
            ],
            [

                'district' => "Vaishali",

                'state' => "Bihar"
            ],
            [

                'district' => "Bastar",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Bijapur",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Bilaspur",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Dakshin Bastar Dantewada",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Dhamtari",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Durg",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Janjgir - Champa",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Jashpur",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Kabeerdham",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Korba",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Koriya",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Mahasamund",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Narayanpur",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Raigarh",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Raipur",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Rajnandgaon",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Surguja",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "Uttar Bastar Kanker",

                'state' => "Chhattisgarh"
            ],
            [

                'district' => "East",

                'state' => "Delhi"
            ],
            [

                'district' => "North",

                'state' => "Delhi"
            ],
            [

                'district' => "North East",

                'state' => "Delhi"
            ],
            [

                'district' => "North West",

                'state' => "Delhi"
            ],
            [

                'district' => "South",

                'state' => "Delhi"
            ],
            [

                'district' => "South West",

                'state' => "Delhi"
            ],
            [

                'district' => "West",

                'state' => "Delhi"
            ],
            [

                'district' => "North Goa",

                'state' => "Goa"
            ],
            [

                'district' => "South Goa",

                'state' => "Goa"
            ],
            [

                'district' => "Ahmadabad",

                'state' => "Gujarat"
            ],
            [

                'district' => "Amreli",

                'state' => "Gujarat"
            ],
            [

                'district' => "Anand",

                'state' => "Gujarat"
            ],
            [

                'district' => "Banas Kantha",

                'state' => "Gujarat"
            ],
            [

                'district' => "Bharuch",

                'state' => "Gujarat"
            ],
            [

                'district' => "Bhavnagar",

                'state' => "Gujarat"
            ],
            [

                'district' => "Dohad",

                'state' => "Gujarat"
            ],
            [

                'district' => "Gandhinagar",

                'state' => "Gujarat"
            ],
            [

                'district' => "Jamnagar",

                'state' => "Gujarat"
            ],
            [

                'district' => "Junagadh",

                'state' => "Gujarat"
            ],
            [

                'district' => "Kachchh",

                'state' => "Gujarat"
            ],
            [

                'district' => "Kheda",

                'state' => "Gujarat"
            ],
            [

                'district' => "Mahesana",

                'state' => "Gujarat"
            ],
            [

                'district' => "Narmada",

                'state' => "Gujarat"
            ],
            [

                'district' => "Navsari",

                'state' => "Gujarat"
            ],
            [

                'district' => "Panch Mahals",

                'state' => "Gujarat"
            ],
            [

                'district' => "Patan",

                'state' => "Gujarat"
            ],
            [

                'district' => "Porbandar",

                'state' => "Gujarat"
            ],
            [

                'district' => "Rajkot",

                'state' => "Gujarat"
            ],
            [

                'district' => "Sabar Kantha",

                'state' => "Gujarat"
            ],
            [

                'district' => "Surat",

                'state' => "Gujarat"
            ],
            [

                'district' => "Surendranagar",

                'state' => "Gujarat"
            ],
            [

                'district' => "Tapi",

                'state' => "Gujarat"
            ],
            [

                'district' => "The Dangs",

                'state' => "Gujarat"
            ],
            [

                'district' => "Vadodara",

                'state' => "Gujarat"
            ],
            [

                'district' => "Valsad",

                'state' => "Gujarat"
            ],
            [

                'district' => "Ambala",

                'state' => "Haryana"
            ],
            [

                'district' => "Bhiwani",

                'state' => "Haryana"
            ],
            [

                'district' => "Faridabad",

                'state' => "Haryana"
            ],
            [

                'district' => "Fatehabad",

                'state' => "Haryana"
            ],
            [

                'district' => "Gurgaon",

                'state' => "Haryana"
            ],
            [

                'district' => "Hisar",

                'state' => "Haryana"
            ],
            [

                'district' => "Jhajjar",

                'state' => "Haryana"
            ],
            [

                'district' => "Jind",

                'state' => "Haryana"
            ],
            [

                'district' => "Kaithal",

                'state' => "Haryana"
            ],
            [

                'district' => "Karnal",

                'state' => "Haryana"
            ],
            [

                'district' => "Kurukshetra",

                'state' => "Haryana"
            ],
            [

                'district' => "Mahendragarh",

                'state' => "Haryana"
            ],
            [
               
                'district' => "Mewat",

                'state' => "Haryana"
            ],
            [
               
                'district' => "Palwal",

                'state' => "Haryana"
            ],
            [
              
                'district' => "Panchkula",

                'state' => "Haryana"
            ],
            [
               
                'district' => "Panipat",

                'state' => "Haryana"
            ],
            [
                
                'district' => "Rewari",

                'state' => "Haryana"
            ],
            [
                
                'district' => "Rohtak",

                'state' => "Haryana"
            ],
            [
              
                'district' => "Sirsa",

                'state' => "Haryana"
            ],
            [
               
                'district' => "Sonipat",

                'state' => "Haryana"
            ],
            [
                
                'district' => "Yamunanagar",

                'state' => "Haryana"
            ],
            [
                
                'district' => "Bilaspur",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Chamba",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Hamirpur",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Kangra",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Kinnaur",
                
                'state' => "Himachal Pradesh"
            ],
            [
               
                'district' => "Kullu",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Lahul & Spiti",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Mandi",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Shimla",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Sirmaur",
                
                'state' => "Himachal Pradesh"
            ],
            [
               
                'district' => "Solan",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Una",
                
                'state' => "Himachal Pradesh"
            ],
            [
                
                'district' => "Anantnag",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Badgam",
                
                'state' => "Jammu & Kashmir"
            ],
            [
               
                'district' => "Bandipore",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Baramula",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Doda",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Ganderbal",
                
                'state' => "Jammu & Kashmir"
            ],
            [
               
                'district' => "Jammu",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Kargil",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Kathua",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Kishtwar",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Kulgam",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Kupwara",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Leh (Ladakh)",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Pulwama",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Punch",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Rajouri",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Ramban",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Reasi",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Samba",
                
                'state' => "Jammu & Kashmir"
            ],
            [
               
                'district' => "Shupiyan",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Srinagar",
                
                'state' => "Jammu & Kashmir"
            ],
            [
                
                'district' => "Udhampur",
                
                'state' => "Jammu & Kashmir"
            ],
            [
               
                'district' => "Bokaro",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Chatra",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Deoghar",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Dhanbad",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Dumka",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Garhwa",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Giridih",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Godda",
                
                'state' => "Jharkhand"
            ],
            [
               
                'district' => "Gumla",
                
                'state' => "Jharkhand"
            ],
            [
             
                'district' => "Hazaribagh",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Jamtara",
                
                'state' => "Jharkhand"
            ],
            [
               
                'district' => "Khunti",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Kodarma",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Latehar",
                
                'state' => "Jharkhand"
            ],
            [
               
                'district' => "Lohardaga",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Pakaur",
                
                'state' => "Jharkhand"
            ],
            [
               
                'district' => "Palamu",
                
                'state' => "Jharkhand"
            ],
            [
               
                'district' => "Pashchimi Singhbhum",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Purbi Singhbhum",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Ramgarh",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Ranchi",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Sahibganj",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Saraikela -Kharsawa",
                
                'state' => "Jharkhand"
            ],
            [
                
                'district' => "Simdega",
                
                'state' => "Jharkhand"
            ],
            [
               
                'district' => "Bagalkot",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Bangalore",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Bangalore Rural",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Belgaum",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Bellary",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Bidar",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Bijapur",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Chamarajanagar",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Chikkaballapura",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Chikmagalur",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Chitradurga",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Dakshina Kannada",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Davanagere",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Dharwad",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Gadag",
                
                'state' => "Karnataka"
            ],
            [
              
                'district' => "Gulbarga",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Hassan",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Haveri",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Kodagu",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Kolar",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Koppal",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Mandya",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Mysore",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Raichur",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Ramanagara",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Shimoga",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Tumkur",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Udupi",
                
                'state' => "Karnataka"
            ],
            [
              
                'district' => "Uttara Kannada",
                
                'state' => "Karnataka"
            ],
            [
               
                'district' => "Yadgir",
                
                'state' => "Karnataka"
            ],
            [
                
                'district' => "Alappuzha",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Ernakulam",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Idukki",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Kannur",
                
                'state' => "Kerala"
            ],
            [
               
                'district' => "Kasaragod",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Kollam",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Kottayam",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Kozhikode",
                
                'state' => "Kerala"
            ],
            [
            
                'district' => "Malappuram",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Palakkad",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Pathanamthitta",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Thiruvananthapuram",
                
                'state' => "Kerala"
            ],
            [
               
                'district' => "Thrissur",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Wayanad",
                
                'state' => "Kerala"
            ],
            [
                
                'district' => "Alirajpur",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Anuppur",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Ashoknagar",
                
                'state' => "Madhya Pradesh"
            ],
            [
               
                'district' => "Balaghat",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Barwani",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Betul",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Bhind",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Bhopal",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Burhanpur",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Chhatarpur",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Chhindwara",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Damoh",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Datia",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Dewas",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Dhar",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Dindori",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "East Nimar",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Guna",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Gwalior",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Harda",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Hoshangabad",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Indore",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Jabalpur",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Jhabua",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Katni",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Mandla",
                
                'state' => "Madhya Pradesh"
            ],
            [
               
                'district' => "Mandsaur",
                
                'state' => "Madhya Pradesh"
            ],
            [
               
                'district' => "Morena",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Narsimhapur",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Neemuch",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Panna",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Raisen",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Rajgarh",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Ratlam",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Rewa",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Sagar",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Satna",
                
                'state' => "Madhya Pradesh"
            ],
            [
               
                'district' => "Sehore",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Seoni",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Shahdol",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Shajapur",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Sheopur",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Shivpuri",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Sidhi",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Singrauli",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Tikamgarh",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Ujjain",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Umaria",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "Vidisha",
                
                'state' => "Madhya Pradesh"
            ],
            [
                
                'district' => "West Nimar",
                
                'state' => "Madhya Pradesh"
            ],
            [
               
                'district' => "Ahmadnagar",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Akola",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Amravati",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Aurangabad",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Bhandara",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Bid",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Buldana",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Chandrapur",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Dhule",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Gadchiroli",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Gondiya",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Hingoli",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Jalgaon",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Jalna",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Kolhapur",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Latur",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Nagpur",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Nanded",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Nandurbar",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Nashik",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Osmanabad",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Parbhani",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Pune",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Raigarh",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Ratnagiri",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Sangli",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Satara",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Sindhudurg",
                
                'state' => "Maharashtra"
            ],
            [
               
                'district' => "Solapur",
                
                'state' => "Maharashtra"
            ],
            [
               
                'district' => "Thane",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Wardha",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Washim",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Yavatmal",
                
                'state' => "Maharashtra"
            ],
            [
                
                'district' => "Bishnupur",
                
                'state' => "Manipur"
            ],
            [
                
                'district' => "Chandel",
                
                'state' => "Manipur"
            ],
            [
                
                'district' => "Churachandpur",
                
                'state' => "Manipur"
            ],
            [
                
                'district' => "Imphal East",
                
                'state' => "Manipur"
            ],
            [
                
                'district' => "Imphal West",
                
                'state' => "Manipur"
            ],
            [
               
                'district' => "Senapati",
                
                'state' => "Manipur"
            ],
            [
                
                'district' => "Tamenglong",
                
                'state' => "Manipur"
            ],
            [
                
                'district' => "Thoubal",
                
                'state' => "Manipur"
            ],
            [
                
                'district' => "Ukhrul",
                
                'state' => "Manipur"
            ],
            [
                
                'district' => "East Garo Hills",
                
                'state' => "Meghalaya"
            ],
            [
                
                'district' => "East Khasi Hills",
                
                'state' => "Meghalaya"
            ],
            [
                
                'district' => "Jaintia Hills",
                
                'state' => "Meghalaya"
            ],
            [
                
                'district' => "Ri Bhoi",
                
                'state' => "Meghalaya"
            ],
            [
                
                'district' => "South Garo Hills",
                
                'state' => "Meghalaya"
            ],
            [
                
                'district' => "West Garo Hills",
                
                'state' => "Meghalaya"
            ],
            [
                
                'district' => "West Khasi Hills",
                
                'state' => "Meghalaya"
            ],
            [
                
                'district' => "Aizawl",
                
                'state' => "Mizoram"
            ],
            [
                
                'district' => "Champhai",
                
                'state' => "Mizoram"
            ],
            [
                
                'district' => "Kolasib",
                
                'state' => "Mizoram"
            ],
            [
                
                'district' => "Lawngtlai",
                
                'state' => "Mizoram"
            ],
            [
                
                'district' => "Lunglei",
                
                'state' => "Mizoram"
            ],
            [
                
                'district' => "Mamit",
                
                'state' => "Mizoram"
            ],
            [
                
                'district' => "Saiha",
                
                'state' => "Mizoram"
            ],
            [
                
                'district' => "Serchhip",
                
                'state' => "Mizoram"
            ],
            [
                
                'district' => "Dimapur",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Kiphire",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Kohima",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Longleng",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Mokokchung",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Mon",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Peren",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Phek",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Tuensang",
                
                'state' => "Nagaland"
            ],
            [
               
                'district' => "Wokha",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Zunheboto",
                
                'state' => "Nagaland"
            ],
            [
                
                'district' => "Anugul",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Balangir",
                
                'state' => "Orissa"
            ],
            [
               
                'district' => "Baleshwar",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Bargarh",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Baudh",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Bhadrak",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Cuttack",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Debagarh",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Dhenkanal",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Gajapati",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Ganjam",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Jagatsinghapur",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Jajapur",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Jharsuguda",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Kalahandi",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Kandhamal",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Kendrapara",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Kendujhar",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Khordha",
                
                'state' => "Orissa"
            ],
            [
               
                'district' => "Koraput",
                
                'state' => "Orissa"
            ],
            [
               
                'district' => "Malkangiri",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Mayurbhanj",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Nabarangapur",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Nayagarh",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Nuapada",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Puri",
                
                'state' => "Orissa"
            ],
            [
               
                'district' => "Rayagada",
                
                'state' => "Orissa"
            ],
            [
               
                'district' => "Sambalpur",
                
                'state' => "Orissa"
            ],
            [
               
                'district' => "Subarnapur",
                
                'state' => "Orissa"
            ],
            [
               
                'district' => "Sundargarh",
                
                'state' => "Orissa"
            ],
            [
                
                'district' => "Amritsar",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Barnala",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Bathinda",
                
                'state' => "Punjab"
            ],
            [
               
                'district' => "Faridkot",
                
                'state' => "Punjab"
            ],
            [
               
                'district' => "Fatehgarh Sahib",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Firozpur",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Gurdaspur",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Hoshiarpur",
                
                'state' => "Punjab"
            ],
            [
               
                'district' => "Jalandhar",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Kapurthala",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Ludhiana",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Mansa",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Moga",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Muktsar",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Patiala",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Rupnagar",
                
                'state' => "Punjab"
            ],
            [
               
                'district' => "Sahibzada Ajit Singh Nagar",
                
                'state' => "Punjab"
            ],
            [
               
                'district' => "Sangrur",
                
                'state' => "Punjab"
            ],
            [
                
                'district' => "Shahid Bhagat Singh Nagar",
                
                'state' => "Punjab"
            ],
            [
               
                'district' => "Tarn Taran",
                
                'state' => "Punjab"
            ],
            [
               
                'district' => "Ajmer",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Alwar",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Banswara",
                
                'state' => "Rajasthan"
            ],
            [
               
                'district' => "Baran",
                
                'state' => "Rajasthan"
            ],
            [
               
                'district' => "Barmer",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Bharatpur",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Bhilwara",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Bikaner",
                
                'state' => "Rajasthan"
            ],
            [
               
                'district' => "Bundi",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Chittaurgarh",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Churu",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Dausa",
                
                'state' => "Rajasthan"
            ],
            [
               
                'district' => "Dhaulpur",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Dungarpur",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Ganganagar",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Hanumangarh",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Jaipur",
                
                'state' => "Rajasthan"
            ],
            [
                
                'district' => "Jaisalmer",
                
                'state' => "Rajasthan"
            ],
            [
               
                'district' => "Jalor",
                
                'state' => "Rajasthan"
            ],
            [
              
                'district' => "Jhalawar",
                
                'state' => "Rajasthan"
            ],
            [
              
                'district' => "Jhunjhunun",
                
                'state' => "Rajasthan"
            ],
            [
              
                'district' => "Jodhpur",
                
                'state' => "Rajasthan"
            ],
            [
             
                'district' => "Karauli",
                
                'state' => "Rajasthan"
            ],
            [
             
                'district' => "Kota",
                
                'state' => "Rajasthan"
            ],
            [
             
                'district' => "Nagaur",
                
                'state' => "Rajasthan"
            ],
            [
               
                'district' => "Pali",
                
                'state' => "Rajasthan"
            ],
            [
               
                'district' => "Pratapgarh",
                
                'state' => "Rajasthan"
            ],
            [
               
                'district' => "Rajsamand",
                
                'state' => "Rajasthan"
            ],
            [
              
                'district' => "Sawai Madhopur",
                
                'state' => "Rajasthan"
            ],
            [
              
                'district' => "Sikar",
                
                'state' => "Rajasthan"
            ],
            [
              
                'district' => "Sirohi",
                
                'state' => "Rajasthan"
            ],
            [
              
                'district' => "Tonk",
                
                'state' => "Rajasthan"
            ],
            [
               
                'district' => "Udaipur",
                
                'state' => "Rajasthan"
            ],
            [
             
                'district' => "East District",
                
                'state' => "Sikkim"
            ],
            [
               
                'district' => "North District",
                
                'state' => "Sikkim"
            ],
            [
               
                'district' => "South District",
                
                'state' => "Sikkim"
            ],
            [
              
                'district' => "West District",
                
                'state' => "Sikkim"
            ],
            [
                
                'district' => "Ariyalur",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Coimbatore",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Cuddalore",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Dharmapuri",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Dindigul",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Erode",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Kancheepuram",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Kanniyakumari",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Karur",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Krishnagiri",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Madurai",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Nagapattinam",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Namakkal",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Perambalur",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Pudukkottai",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Ramanathapuram",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Salem",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Sivaganga",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Thanjavur",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "The Nilgiris",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Theni",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Thiruvallur",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Thiruvarur",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Thoothukkudi",
               
                'state' => "Tamilnadu"
            ],
            [
               
                'district' => "Tiruchirappalli",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Tirunelveli",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Tiruppur",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Tiruvannamalai",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Vellore",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Viluppuram",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Virudhunagar",
               
                'state' => "Tamilnadu"
            ],
            [
                
                'district' => "Dhalai",
               
                'state' => "Tripura"
            ],
            [
                
                'district' => "North Tripura",
               
                'state' => "Tripura"
            ],
            [
               
                'district' => "South Tripura",
               
                'state' => "Tripura"
            ],
            [
                
                'district' => "West Tripura",
               
                'state' => "Tripura"
            ],
            [
               
                'district' => "Agra",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Aligarh",
                
                'state' => "Uttar Pradesh"
            ],
            [
              
                'district' => "Allahabad",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Ambedkar Nagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Auraiya",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Azamgarh",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Baghpat",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Bahraich",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Ballia",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Balrampur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Banda",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Barabanki",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Bareilly",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Basti",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Bijnor",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Budaun",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Bulandshahar",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Chandauli",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Chitrakoot",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Deoria",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Etah",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Etawah",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Faizabad",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Farrukhabad",
                
                'state' => "Uttar Pradesh"
            ],
            [
              
                'district' => "Fatehpur",
                
                'state' => "Uttar Pradesh"
            ],
            [
             
                'district' => "Firozabad",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Gautam Buddha Nagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Ghaziabad",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Ghazipur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Gonda",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Gorakhpur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Hamirpur",
                
                'state' => "Uttar Pradesh"
            ],
            [
              
                'district' => "Hardoi",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Jalaun",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Jaunpur",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Jhansi",
                
                'state' => "Uttar Pradesh"
            ],
            [
                'district' => "Jyotiba Phule Nagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Kannauj",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Kanpur Dehat",
                
                'state' => "Uttar Pradesh"
            ],
            [
              
                'district' => "Kanpur Nagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Kanshiram Nagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Kaushambi",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Kheri",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Kushinagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Lalitpur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Lucknow",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Mahamaya Nagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Mahoba",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Mahrajganj",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Mainpuri",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Mathura",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Mau",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Meerut",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Mirzapur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Moradabad",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Muzaffarnagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Pilibhit",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Pratapgarh",
                
                'state' => "Uttar Pradesh"
            ],
            [
               
                'district' => "Rae Bareli",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Rampur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Saharanpur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Sant Kabir Nagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Sant Ravidas Nagar (Bhadohi)",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Shahjahanpur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Shrawasti",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Siddharthnagar",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Sitapur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Sonbhadra",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Sultanpur",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Unnao",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Varanasi",
                
                'state' => "Uttar Pradesh"
            ],
            [
                
                'district' => "Almora",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Bageshwar",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Chamoli",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Champawat",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Dehradun",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Garhwal",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Hardwar",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Nainital",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Pithoragarh",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Rudraprayag",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Tehri Garhwal",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Udham Singh Nagar",
                
                'state' => "Uttarakhand"
            ],
            [
                
                'district' => "Uttarkashi",
                
                'state' => "Uttarakhand"
            ],
            [
               
                'district' => "Bankura",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Barddhaman",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Birbhum",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Dakshin Dinajpur",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Darjiling",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Haora",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Hugli",
                
                'state' => "West Bengal"
            ],
            [
               
                'district' => "Jalpaiguri",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Koch Bihar",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Maldah",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Murshidabad",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Nadia",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "North Twenty Four Parganas",
                
                'state' => "West Bengal"
            ],
            [
               
                'district' => "Paschim Medinipur",
                
                'state' => "West Bengal"
            ],
            [
               
                'district' => "Purba Medinipur",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Puruliya",
                
                'state' => "West Bengal"
            ],
            [
               
                'district' => "South  Twenty Four Parganas",
                
                'state' => "West Bengal"
            ],
            [
                
                'district' => "Uttar Dinajpur",
                
                'state' => "West Bengal"
            ]


        ];

        foreach($states as $state)
        {
            State::create($state);
        }
    }
}
