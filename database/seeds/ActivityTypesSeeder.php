<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            ["code" => 41, "category" => "Comm", "name" => "Advertising"],
            ["code" => 161, "category" => "Comm", "name" => "Aircraft & train spare parts trading"],
            ["code" => 159, "category" => "Comm", "name" => "Amusement Equipment & supplies trading"],
            ["code" => 144, "category" => "Comm", "name" => "Animal skin trading"],
            ["code" => 90, "category" => "Comm", "name" => "Art production"],
            ["code" => 51, "category" => "Comm", "name" => "Auto spare parts trading"],
            ["code" => 221, "category" => "Comm", "name" => "Bags, packaging materials & paper trading"],
            ["code" => 209, "category" => "Comm", "name" => "banks, finance & credit group"],
            ["code" => 204, "category" => "Comm", "name" => "beauty & baby care requisites"],
            ["code" => 109, "category" => "Comm", "name" => "Broadcasting and communications"],
            ["code" => 95, "category" => "Comm", "name" => "Building maintenance, surveillance and cleaning services"],
            ["code" => 68, "category" => "Comm", "name" => "Building materials trading"],
            ["code" => 49, "category" => "Comm", "name" => "Car rent and passenger transport"],
            ["code" => 69, "category" => "Comm", "name" => "Chemicals trading"],
            ["code" => 91, "category" => "Comm", "name" => "Cinema & theaters"],
            ["code" => 154, "category" => "Comm", "name" => "Cleaning equipment trading"],
            ["code" => 137, "category" => "Comm", "name" => "Commercial brokerage"],
            ["code" => 230, "category" => "Comm", "name" => "Consumer Stores Group"],
            ["code" => 8, "category" => "Comm", "name" => "Contracting and building works"],
            ["code" => 163, "category" => "Comm", "name" => "Cooperation Societies"],
            ["code" => 158, "category" => "Comm", "name" => "Domestic gas distribution"],
            ["code" => 61, "category" => "Comm", "name" => "Electrical trading"],
            ["code" => 59, "category" => "Comm", "name" => "Electronics group"],
            ["code" => 76, "category" => "Comm", "name" => "exchange and financial services"],
            ["code" => 89, "category" => "Comm", "name" => "Facility management"],
            ["code" => 134, "category" => "Comm", "name" => "Filling station"],
            ["code" => 146, "category" => "Comm", "name" => "Fish trading"],
            ["code" => 78, "category" => "Comm", "name" => "Floor mills"],
            ["code" => 79, "category" => "Comm", "name" => "Flowers and plants"],
            ["code" => 145, "category" => "Comm", "name" => "Fodders & animal food trading"],
            ["code" => 162, "category" => "Comm", "name" => "Foodstuff supply"],
            ["code" => 53, "category" => "Comm", "name" => "Foodstuff trading"],
            ["code" => 66, "category" => "Comm", "name" => "Fuel and petroleum products trading"],
            ["code" => 135, "category" => "Comm", "name" => "Fuel supply"],
            ["code" => 62, "category" => "Comm", "name" => "Furniture trading"],
            ["code" => 60, "category" => "Comm", "name" => "Home appliances trading"],
            ["code" => 96, "category" => "Comm", "name" => "Insurance"],
            ["code" => 97, "category" => "Comm", "name" => "Investment"],
            ["code" => 63, "category" => "Comm", "name" => "Jewellery trading"],
            ["code" => 206, "category" => "Comm", "name" => "leather trading"],
            ["code" => 142, "category" => "Comm", "name" => "Livestock trading"],
            ["code" => 98, "category" => "Comm", "name" => "Machinery and equipment rental"],
            ["code" => 155, "category" => "Comm", "name" => "Mechanical & engineering equipment trading"],
            ["code" => 149, "category" => "Comm", "name" => "Medical eye glasses trading & eyes testing services"],
            ["code" => 56, "category" => "Comm", "name" => "Medicines trading"],
            ["code" => 67, "category" => "Comm", "name" => "Metals & its products trading"],
            ["code" => 167, "category" => "Comm", "name" => "Office & electronic equipment rental"],
            ["code" => 140, "category" => "Comm", "name" => "Other Personal & trading services"],
            ["code" => 225, "category" => "Comm", "name" => "Other Rental Services"],
            ["code" => 280, "category" => "Comm", "name" => "Other Trading Activities"],
            ["code" => 52, "category" => "Comm", "name" => "Packing services"],
            ["code" => 55, "category" => "Comm", "name" => "Perfumery"],
            ["code" => 102, "category" => "Comm", "name" => "Pets nursery and trading"],
            ["code" => 108, "category" => "Comm", "name" => "Postal services"],
            ["code" => 143, "category" => "Comm", "name" => "Poultry trading"],
            ["code" => 54, "category" => "Comm", "name" => "Ready made garments group"],
            ["code" => 77, "category" => "Comm", "name" => "Real estate"],
            ["code" => 70, "category" => "Comm", "name" => "Roastry"],
            ["code" => 200, "category" => "Comm", "name" => "Separate trading activities"],
            ["code" => 160, "category" => "Comm", "name" => "Ships & boats trading"],
            ["code" => 220, "category" => "Comm", "name" => "sport equipment rental"],
            ["code" => 64, "category" => "Comm", "name" => "Sports equipment trading"],
            ["code" => 57, "category" => "Comm", "name" => "Stationary and books trading"],
            ["code" => 156, "category" => "Comm", "name" => "Supermarket"],
            ["code" => 205, "category" => "Comm", "name" => "tents & tarpaulin trading"],
            ["code" => 171, "category" => "Comm", "name" => "Time sharing"],
            ["code" => 65, "category" => "Comm", "name" => "Tobacco and smoking accessories trading"],
            ["code" => 50, "category" => "Comm", "name" => "Trading in motor vehicles and motorcycles"],
            ["code" => 48, "category" => "Comm", "name" => "Transport, shipping and storage"],
            ["code" => 235, "category" => "Comm", "name" => "Used Articles Trading"],
            ["code" => 157, "category" => "Comm", "name" => "Used auto spare parts trading"],
            ["code" => 164, "category" => "Comm", "name" => "Used electronics & furniture trading"],
            ["code" => 165, "category" => "Comm", "name" => "Used heavy equipment trading"],
            ["code" => 207, "category" => "Comm", "name" => "vending machines trading"],
            ["code" => 148, "category" => "Comm", "name" => "Veterinary equipment trading"],
            ["code" => 58, "category" => "Comm", "name" => "Video and recordings"],
            ["code" => 150, "category" => "Comm", "name" => "Waste trading"],
            ["code" => 28, "category" => "Indl", "name" => "Appliances and machinery manufacturing"],
            ["code" => 25, "category" => "Indl", "name" => "Block and building stones industry"],
            ["code" => 73, "category" => "Indl", "name" => "Bread manufacturing"],
            ["code" => 114, "category" => "Indl", "name" => "Carpet & mat manufacturing"],
            ["code" => 107, "category" => "Indl", "name" => "Casting of steel and iron"],
            ["code" => 305, "category" => "Indl", "name" => "Charcoal Production"],
            ["code" => 127, "category" => "Indl", "name" => "Coating, insulation, seals & protection materials manufacture"],
            ["code" => 115, "category" => "Indl", "name" => "Cotton & metal nets & ropes manufacturing"],
            ["code" => 27, "category" => "Indl", "name" => "Equipment and engines manufacturing"],
            ["code" => 119, "category" => "Indl", "name" => "Fish canning & freezing"],
            ["code" => 11, "category" => "Indl", "name" => "Fodder and fertilizers manufacturing"],
            ["code" => 72, "category" => "Indl", "name" => "Food industries"],
            ["code" => 10, "category" => "Indl", "name" => "Foodstuff mills and packaging"],
            ["code" => 116, "category" => "Indl", "name" => "Glass & chinaware manufacturing"],
            ["code" => 24, "category" => "Indl", "name" => "Glass industries"],
            ["code" => 128, "category" => "Indl", "name" => "Goldsmith & gold repairing"],
            ["code" => 170, "category" => "Indl", "name" => "Lenses cutting & glass repairing"],
            ["code" => 125, "category" => "Indl", "name" => "Light aircraft manufacturing & maintenance"],
            ["code" => 30, "category" => "Indl", "name" => "Lighting equipment manufacturing1"],
            ["code" => 31, "category" => "Indl", "name" => "Manufacture of batteries"],
            ["code" => 32, "category" => "Indl", "name" => "Manufacture of eyeglasses"],
            ["code" => 33, "category" => "Indl", "name" => "Manufacture of gold and precious stones cutting"],
            ["code" => 34, "category" => "Indl", "name" => "Manufacture of mats and rugs"],
            ["code" => 21, "category" => "Indl", "name" => "Manufacture of medicines"],
            ["code" => 35, "category" => "Indl", "name" => "Manufacture of motor vehicles, motorcycles & its spare parts"],
            ["code" => 19, "category" => "Indl", "name" => "Manufacture of petroleum products"],
            ["code" => 22, "category" => "Indl", "name" => "Manufacture of tyres and rubber products"],
            ["code" => 15, "category" => "Indl", "name" => "Manufacturing of bags, shoes and leather products"],
            ["code" => 20, "category" => "Indl", "name" => "Manufacturing of chemicals"],
            ["code" => 14, "category" => "Indl", "name" => "Manufacturing of garments and rugs"],
            ["code" => 17, "category" => "Indl", "name" => "Manufacturing of paper and paper products"],
            ["code" => 13, "category" => "Indl", "name" => "Manufacturing of tobacco and cigarettes"],
            ["code" => 16, "category" => "Indl", "name" => "Manufacturing of wood, wood products and Furniture"],
            ["code" => 7, "category" => "Indl", "name" => "Meat processing"],
            ["code" => 122, "category" => "Indl", "name" => "Metal containers & boxes manufacturing"],
            ["code" => 104, "category" => "Indl", "name" => "Metal home appliances manufacturing"],
            ["code" => 120, "category" => "Indl", "name" => "Other metal industries"],
            ["code" => 131, "category" => "Indl", "name" => "Oven & stove manufacturing"],
            ["code" => 106, "category" => "Indl", "name" => "Paper home appliances manufacturing"],
            ["code" => 26, "category" => "Indl", "name" => "Personal requisites manufacturing"],
            ["code" => 71, "category" => "Indl", "name" => "Petroleum and metal extraction"],
            ["code" => 29, "category" => "Indl", "name" => "Pipes and wires manufacturing"],
            ["code" => 105, "category" => "Indl", "name" => "Plastic home appliances manufacturing"],
            ["code" => 23, "category" => "Indl", "name" => "Plastic industries"],
            ["code" => 43, "category" => "Indl", "name" => "Power generation and transmission"],
            ["code" => 201, "category" => "Indl", "name" => "Separate industrial activities"],
            ["code" => 40, "category" => "Indl", "name" => "Ship building and repairing"],
            ["code" => 126, "category" => "Indl", "name" => "Stationary manufacturing"],
            ["code" => 118, "category" => "Indl", "name" => "steel tool manufacturing"],
            ["code" => 121, "category" => "Indl", "name" => "Steel workshop"],
            ["code" => 103, "category" => "Indl", "name" => "Structural steel manufacturing"],
            ["code" => 113, "category" => "Indl", "name" => "Textiles & products manufacturing"],
            ["code" => 36, "category" => "Indl", "name" => "Waste collection and treatment"],
            ["code" => 12, "category" => "Indl", "name" => "water manufacturing and bottling"],
            ["code" => 92, "category" => "Prof", "name" => "Accounts"],
            ["code" => 4, "category" => "Prof", "name" => "Agricultural"],
            ["code" => 255, "category" => "Prof", "name" => "Animal Welfare Organization"],
            ["code" => 110, "category" => "Prof", "name" => "Applied studies"],
            ["code" => 240, "category" => "Prof", "name" => "Business & Professional Organizations"],
            ["code" => 250, "category" => "Prof", "name" => "Business Aviation Association"],
            ["code" => 260, "category" => "Prof", "name" => "Business Council"],
            ["code" => 265, "category" => "Prof", "name" => "Businessmen Forum"],
            ["code" => 166, "category" => "Prof", "name" => "Car registration & transfer services"],
            ["code" => 295, "category" => "Prof", "name" => "Charity Market"],
            ["code" => 290, "category" => "Prof", "name" => "Charity Society"],
            ["code" => 212, "category" => "Prof", "name" => "Cleaning services"],
            ["code" => 42, "category" => "Prof", "name" => "Combing and upholstery"],
            ["code" => 315, "category" => "Prof", "name" => "Commercial Library"],
            ["code" => 2, "category" => "Prof", "name" => "Consultancy -A- Agriculture and Soil"],
            ["code" => 3, "category" => "Prof", "name" => "Consultancy -B- Engineering"],
            ["code" => 5, "category" => "Prof", "name" => "Consultancy -C- Petrol and Water"],
            ["code" => 6, "category" => "Prof", "name" => "Consultancy -D- management, information and marketing"],
            ["code" => 214, "category" => "Prof", "name" => "documents destroying & storage"],
            ["code" => 80, "category" => "Prof", "name" => "Education"],
            ["code" => 75, "category" => "Prof", "name" => "Event organizers"],
            ["code" => 88, "category" => "Prof", "name" => "Exhibition organizers"],
            ["code" => 223, "category" => "Prof", "name" => "Facilities Management Group"],
            ["code" => 211, "category" => "Prof", "name" => "finance consultants"],
            ["code" => 9, "category" => "Prof", "name" => "Fishing and fish farming"],
            ["code" => 130, "category" => "Prof", "name" => "Fishing cages & net manufacturing"],
            ["code" => 84, "category" => "Prof", "name" => "Gents salon"],
            ["code" => 38, "category" => "Prof", "name" => "Gents tailoring and design"],
            ["code" => 138, "category" => "Prof", "name" => "Government liaison office"],
            ["code" => 111, "category" => "Prof", "name" => "Halls and exhibition"],
            ["code" => 39, "category" => "Prof", "name" => "Handicraft workshops"],
            ["code" => 216, "category" => "Prof", "name" => "hospitals & recovery houses"],
            ["code" => 82, "category" => "Prof", "name" => "Institutes and education"],
            ["code" => 210, "category" => "Prof", "name" => "insurance consultants"],
            ["code" => 218, "category" => "Prof", "name" => "key duplicators & stamp making"],
            ["code" => 85, "category" => "Prof", "name" => "Kids Salon"],
            ["code" => 94, "category" => "Prof", "name" => "Laboratories"],
            ["code" => 169, "category" => "Prof", "name" => "Labour Supply & employment agency"],
            ["code" => 83, "category" => "Prof", "name" => "Ladies salon"],
            ["code" => 37, "category" => "Prof", "name" => "Ladies tailoring and design"],
            ["code" => 87, "category" => "Prof", "name" => "Laundry"],
            ["code" => 93, "category" => "Prof", "name" => "Legal services"],
            ["code" => 1, "category" => "Prof", "name" => "Livestock Farming"],
            ["code" => 152, "category" => "Prof", "name" => "Medical Clinic"],
            ["code" => 217, "category" => "Prof", "name" => "medical laboratories"],
            ["code" => 215, "category" => "Prof", "name" => "motor & motorcycles driving institutes"],
            ["code" => 44, "category" => "Prof", "name" => "Motor vehicle repairing"],
            ["code" => 300, "category" => "Prof", "name" => "Not Grouped"],
            ["code" => 81, "category" => "Prof", "name" => "Nursery"],
            ["code" => 245, "category" => "Prof", "name" => "Office Of International Organization"],
            ["code" => 168, "category" => "Prof", "name" => "Other engineering services"],
            ["code" => 219, "category" => "Prof", "name" => "outlet group"],
            ["code" => 208, "category" => "Prof", "name" => "personal requisites repairing"],
            ["code" => 18, "category" => "Prof", "name" => "Printing and publishing services"],
            ["code" => 86, "category" => "Prof", "name" => "Recreation halls"],
            ["code" => 141, "category" => "Prof", "name" => "Regional liaison office"],
            ["code" => 45, "category" => "Prof", "name" => "Repairing of electrical & electronic appliances"],
            ["code" => 46, "category" => "Prof", "name" => "Repairing of equipments"],
            ["code" => 139, "category" => "Prof", "name" => "Representative office"],
            ["code" => 47, "category" => "Prof", "name" => "Restaurants and coffee shops"],
            ["code" => 202, "category" => "Prof", "name" => "Separate professional activities"],
            ["code" => 99, "category" => "Prof", "name" => "Sewage and cleaning services"],
            ["code" => 270, "category" => "Prof", "name" => "Social Club"],
            ["code" => 285, "category" => "Prof", "name" => "Social Work Activities"],
            ["code" => 172, "category" => "Prof", "name" => "Special purpose Firm"],
            ["code" => 151, "category" => "Prof", "name" => "Sport Club"],
            ["code" => 222, "category" => "Prof", "name" => "studio - professional license"],
            ["code" => 101, "category" => "Prof", "name" => "studio - trade license"],
            ["code" => 203, "category" => "Prof", "name" => "technical & professional workshops"],
            ["code" => 213, "category" => "Prof", "name" => "translation group"],
            ["code" => 100, "category" => "Prof", "name" => "Typing and translation"],
            ["code" => 153, "category" => "Prof", "name" => "Veterinary clinic"],
            ["code" => 275, "category" => "Prof", "name" => "Women Club"],
            ["code" => 501, "category" => "Tour", "name" => "Tourism Activities"]
        ];

        DB::table('activity_types')->insert($activities);
    }
}
	 
     
     
     
     
     
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
