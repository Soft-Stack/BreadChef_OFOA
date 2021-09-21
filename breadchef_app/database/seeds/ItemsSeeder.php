<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Nachos', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/Nachos.jpeg',//not updated
                'price' =>       '450' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Buffalo Wings', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/buffalo_wings.jpeg',
                'price' =>       '430' // size
            ], 
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Cheese Stick', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/cheese_sticks.jpeg',
                'price' =>       '350' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Chicken Finger', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/chicken_fingers.jpeg',
                'price' =>       '430' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Fish Finger', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/fish-finger.jpeg',
                'price' =>       '530' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Chicken Qresadillas', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/chicken_quesadilla.JPG',
                'price' =>       '400' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Beef Chilli Fries', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/beef_chilli_fries.JPG',
                'price' =>       '340' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Dynamite Prawn', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/Dynamite-Prawns.jpeg',
                'price' =>       '790' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Dynamite Wings', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/dynamite-Wings.jpeg',
                'price' =>       '440' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Captian Crunch', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/captian_crunch.jpeg',
                'price' =>       '430' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Chicken Chilli Fries', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/chicken-chilli-fries.jpeg',
                'price' =>       '340' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Baked Potato', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/baked-potato.jpeg',
                'price' =>       '150' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Mashed Potato', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/mashed-potato.jpeg',
                'price' =>       '150' // size
            ],
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'French Fries', // name
                'description' => 'None', // description
                'image'   =>     'items/appetizers/french-fries.jpeg',
                'price' =>       '250' // size
            ],
            [
                'categoryid' =>  '2', // categoryid
                'name' =>        'Chicken Cream of Mushroom Soup', // name
                'description' => 'None', // description
                'image' =>       'items/Soups/CREAM-OF-MUSHROOM.jpeg',
                'price' =>       '250' // size
            ], 
            [
                'categoryid' =>  '2', // categoryid
                'name' =>        "Hot 'n' Sour Soup", // name
                'description' => 'None', // description
                'image' =>       'items/Soups/hot-n-sour.jpeg',
                'price' =>       '250' // size
            ],
            [
                'categoryid' =>  '3', // categoryid
                'name' =>        'Ceaser Salad', // name
                'description' => 'None', // description
                'image' =>       'items/Salad/Caesar-Salad.jpeg',
                'price' =>       '450' // size
            ], 
            [
                'categoryid' =>  '3', // categoryid
                'name' =>        'Russian Salad', // name
                'description' => 'None', // description
                'image' =>       'items/Salad/Russian-salad.jpeg',
                'price' =>       '350' // size
            ], 
            [
                'categoryid' =>  '3', // categoryid
                'name' =>        'Grilled Chicken Salad', // name
                'description' => 'None', // description
                'image' =>       'items/Salad/chicken-grilled-salad.jpeg',
                'price' =>       '390' // size
            ], 
            [
                'categoryid' =>  '4', // categoryid
                'name' =>        'Triple Decker Club Sandwich', // name
                'description' => 'Grilled Chicken, Salami, Egg, Cheese, Lettuce, Tomato, Onion, Spicy Garlic Sauce, Mayonnaise', // description
                'image' =>       'items/Sandwiches/triple-decker-club-sandwich.jpeg',
                'price' =>       '595' // size
            ], 
            [
                'categoryid' =>  '4', // categoryid
                'name' =>        'Crunch Sandwich', // name
                'description' => 'Crispy fried chicken topped with cheese honey mustard and vegetables', // description
                'image' =>       'items/Sandwiches/crunch-sandwich.jpeg',
                'price' =>       '595' // size
            ], 
            [
                'categoryid' =>  '4', // categoryid
                'name' =>        'Grilled Chicken Panini Sandwich', // name
                'description' => 'Roasted beef strips topped with jalapeno and cheese, Caramelize onion, Mushroom, Jalapeno', // description
                'image' =>       'items/Sandwiches/Grilled-Chicken-panini-sandwich.jpeg',
                'price' =>       '595' // size
            ],
            [
                'categoryid' =>  '4', // categoryid
                'name' =>        'Club Sandwich', // name
                'description' => 'None', // description
                'image' =>       'items/Sandwiches/ClubSandwich.JPG',
                'price' =>       '595' // size
            ],
            [
                'categoryid' =>  '4', // categoryid
                'name' =>        'Hunter Beef Sandwich', // name
                'description' => 'None', // description
                'image' =>       'items/Sandwiches/hunter-beef-sandwich.jpeg',
                'price' =>       '595' // size
            ],
            [
                'categoryid' =>  '4', // categoryid
                'name' =>        'Panini Sandwich', // name
                'description' => 'Grilled Chicken, Salami, Egg, Cheese, Lettuce, Tomato, Onion, Spicy Garlic Sauce, Mayonnaise', // description
                'image' =>       'items/Sandwiches/',
                'price' =>       '595' // size
            ],
            [
                'categoryid' =>  '5',
                'name' =>        'Santorini Special Burger',
                'description' => 'Grilled Beef/Chicken topped with cheese mushroom capsicum onion',
                'image' =>       'items/Burgers/Santorini-special-burger.JPG',
                'price' =>       '595'
            ],
            [
                'categoryid' =>  '5', // categoryid
                'name' =>        'Jalapeno Burger', // name
                'description' => 'Grilled Chicken topped with cheese grilled tomato and Golden fried onion ring', // description
                'image' =>       'items/Burgers/jalapeno-burger.jpeg',
                'price' =>       '595' // size
            ],
            [
                'categoryid' =>  '5', // categoryid
                'name' =>        'Stuffed Chicken Burger', // name
                'description' => 'Boneless chicken breast stuffed with cheese and herbstopped with cheese', // description
                'image' =>       'items/Burgers/stuffed_chicken_burger.jpeg',
                'price' =>       '595' // size
            ],
            [
                'categoryid' =>  '5', // categoryid
                'name' =>        'Steak Burger', // name
                'description' => 'Peri Grilled Steak, Choice of Flavour', // description
                'image' =>       'items/Burgers/steakBurger.jpg',
                'price' =>       '700' // size
            ],
            [
                'categoryid' =>  '5', // categoryid
                'name' =>        'Royal Burger', // name
                'description' => 'Golden fried boneless chicken breast topped with spicy gralic sause and cheese', // description
                'image' =>       'items/Burgers/Royal-burger.jpeg',
                'price' =>       '595' // size
            ],
            [
                'categoryid' =>  '5', // categoryid
                'name' =>        'Cajun Burger', // name
                'description' => 'Grilled boneless chicken breast, marinated in spicy cajun spices topped with sauteed mushroom, onion and cheese', // description
                'image' =>       'items/Burgers/cajun_burger.jpeg',
                'price' =>       '595' // size
            ],
            [
                'categoryid' =>  '5', // categoryid
                'name' =>        'Chicken Crunch Burger', // name
                'description' => 'Crispy boneless fried chicken topped with cheese, honey mustard sause served with french fries', // description
                'image' =>       'items/Burgers/chicken_crunch_burger.jpeg',
                'price' =>       '595' // size
            ],
            [
                'categoryid' =>  '6', // categoryid
                'name' =>        'Moroccan Chicken', // name
                'description' => 'Grilled chicken marinated in exotic spices', // description
                'image' =>       'items/Special-Chicken/morrocan-chicken.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '6', // categoryid
                'name' =>        'BBQ Chicken', // name
                'description' => 'Grilled chicken topped with smoked BBQ sauce', // description
                'image' =>       'items/Special-Chicken/bbq-chicken.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '6', // categoryid
                'name' =>        'Jalapeno Chicken', // name
                'description' => 'Grilled chicken with spicy jalapeno sauce', // description
                'image' =>       'items/Special-Chicken/jalapeno-chicken.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '6', // categoryid
                'name' =>        'Chicken Supreme', // name
                'description' => 'Fried chicken breast with black olives, capsicum, mushroom and creamy cheese sauce', // description
                'image' =>       'items/Special-Chicken/Chicken-supreme.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '6', // categoryid
                'name' =>        'Chicken Parmesan', // name
                'description' => 'Golden fried chicken breast topped with black olives, mushroom, capsicum, cheese and tomato sauce served with pasta', // description
                'image' =>       'items/Special-Chicken/chicken-parmesan.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '6', // categoryid
                'name' =>        'Tarragon Chicken', // name
                'description' => "Grilled chicken with chef's special tarragon sauce", // description
                'image' =>       'items/Special-Chicken/tarrogan_chicken.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '6', // categoryid
                'name' =>        'Louisiana Chicken', // name
                'description' => 'Grilled chicken breast topped with bell pepper and olives topped with cheese and served with creamy sauce', // description
                'image' =>       'items/Special-Chicken/louisiana-chicken.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Rigi Rigi Steak', // name
                'description' => 'Grilled fillet with African spices', // description
                'image' =>       'items/Steaks/RegiRegiSpicySteak.JPG',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Santorini Special Steak', // name
                'description' => 'Grilled beef/chicken in spicy southwest marinade, served with spicy garlic herb butter', // description
                'image' =>       'items/Steaks/special-steak.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Decked Steak', // name
                'description' => 'Prime cut fillet of beef/chicken with shiitake, jalapenos and onion served with vegetables', // description
                'image' =>       'items/Steaks/decked-steak.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Peppercorn Steak', // name
                'description' => 'Grilled beef/chicken served with crack black papper sauce', // description
                'image' =>       'items/Steaks/pepper-steak.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Mushroom Steak', // name
                'description' => 'Grilled bbef/chicken served with mushroom creamy sauce', // description
                'image' =>       'items/Steaks/mushroom-steak.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'French Onion Steak', // name
                'description' => 'Grilled beef/chicken topped with crack black pepper sauce and grilled onion cheese', // description
                'image' =>       'items/Steaks/.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Twin Steak', // name
                'description' => 'Grilled beef/chicken half topped with mushroom cream sauce and half topped with black peppercorn sauce', // description
                'image' =>       'items/Steaks/twin_grill_steak.JPG',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Herb Steak', // name
                'description' => 'Grilled beef/chicken topped with chilli herb creamy sauce with mushrooms', // description
                'image' =>       'items/Steaks/HerbSteak.JPG',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Hawaiin Steak', // name
                'description' => 'Grilled beef/chicken topped with pineapple, cheese and creamy mushroom sauce', // description
                'image' =>       'items/Steaks/HawaiianSteak.JPG',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Florida Steak', // name
                'description' => 'Grilled beef/chicken topped with pineapple, cheese, and creamy mushroom sauce', // description
                'image' =>       'items/Steaks/.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Maxican Steak', // name
                'description' => 'Grilled fillet topped wth spicy maxican salsa sauce', // description
                'image' =>       'items/Steaks/MexicanSteak.JPG',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '7', // categoryid
                'name' =>        'Combo Steak', // name
                'description' => 'Grilled beef and chicken half topped with mushroom cream sauce and half topped  with black peppercorn sauce', // description
                'image' =>       'items/Steaks/ComboSteak.JPG',
                'price' =>       '990' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Penny Chicken Pesto', // name
                'description' => 'A pan grilled chicken breast with mix bell pepper served over penne pasta in pesto creamy sauce', // description
                'image' =>       'items/Pastas/penne-chicken-pesto.jpeg',
                'price' =>       '650' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Chicken Penne Arabbiata', // name
                'description' => 'Chicken strips cooked in olive oil and tomato sauce topped with Parmesan cheese', // description
                'image' =>       'items/Pastas/chicken-penne-arrabbiata.jpeg',
                'price' =>       '650' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Rolado do Polo', // name
                'description' => 'Fried chicken stuffed with mushroom spinach, Alfredo pasta cooked in creamy sauce and cherry tomato', // description
                'image' =>       'items/Pastas/Rolado do Polo.jpeg',
                'price' =>       '650' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Chicken Mushroom Lasagne', // name
                'description' => 'None', // description
                'image' =>       'items/Pastas/MushroomLasagna.JPG',
                'price' =>       '650' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Alfredo Pasta', // name
                'description' => 'A pan grilled chicken breast with fattucine pasta creamy and cheese sauce', // description
                'image' =>       'items/Pastas/alfredo-pasta.jpeg',
                'price' =>       '650' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Spicy Creamy Pasta', // name
                'description' => 'A pan grilled chicken breast with fattucine pasta southwest herb and creamy sauce', // description
                'image' =>       'items/Pastas/Spicy Creamy Pasta.jpeg',
                'price' =>       '650' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Chef Special Pasta', // name
                'description' => 'None', // description
                'image' =>       'items/Pastas/special-pasta.jpeg',
                'price' =>       '700' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Lasagne', // name
                'description' => 'None', // description
                'image' =>       'items/Pastas/lasagne.jpeg',
                'price' =>       'None' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Penny Chicken Pasta', // name
                'description' => 'None', // description
                'image' =>       'items/Pastas/penne-chicken.jpeg',
                'price' =>       'None' // size
            ],
            [
                'categoryid' =>  '8', // categoryid
                'name' =>        'Spicy Gravy Pasta', // name
                'description' => 'None', // description
                'image' =>       'items/Pastas/Spicy_Gravy_Pasta.JPG',
                'price' =>       'None' // size
            ],
            [
                'categoryid' =>  '9', // categoryid
                'name' =>        'Fajitas', // name
                'description' => 'Marinated chocken/beef strips cooked in bell peppers onions, tomatos, served with flour tortillas and sour cream', // description
                'image' =>       'items/Grand-mexico/chicken-fajita.jpeg',
                'price' =>       '899' // size
            ],
            [
                'categoryid' =>  '9', // categoryid
                'name' =>        'Chicken Nacho Platter', // name
                'description' => 'None', // description
                'image' =>       'items/Grand-mexico/chicken-nacho-platter.jpeg',
                'price' =>       '650' // size
            ],
            [
                'categoryid' =>  '9', // categoryid
                'name' =>        'Supreme Nachos', // name
                'description' => 'None', // description
                'image' =>       'items/Grand-mexico/supreme-nachos.jpeg',
                'price' =>       '---' // size
            ],
            [
                'categoryid' =>  '9', // categoryid
                'name' =>        'Combo Fajita', // name
                'description' => 'None', // description
                'image' =>       'items/Grand-mexico/Combo_FajitaSetup.JPG',
                'price' =>       '---' // size
            ],
            [
                'categoryid' =>  '10', // categoryid
                'name' =>        'Beef Chilli Dry', // name
                'description' => 'Served with egg fried rice', // description
                'image' =>       'items/wok-a-meal/beef-chilli-dry.jpeg',
                'price' =>       '750' // size
            ],
            [
                'categoryid' =>  '10', // categoryid
                'name' =>        'Chicken Chilli Dry', // name
                'description' => 'Served with egg fried ries', // description
                'image' =>       'items/wok-a-meal/chicken-chilli-dry.jpeg',
                'price' =>       '699' // size
            ],
            [
                'categoryid' =>  '10', // categoryid
                'name' =>        'Chicken Chow mein', // name
                'description' => 'None', // description
                'image' =>       'items/wok-a-meal/ChickenChowmein.JPG',
                'price' =>       '550' // size
            ],
            [
                'categoryid' =>  '10', // categoryid
                'name' =>        'Chicken Cashew Nut', // name
                'description' => 'Served with egg fried rice', // description
                'image' =>       'items/wok-a-meal/Chicken Cashew Nut.jpeg',
                'price' =>       '750' // size
            ],
            [
                'categoryid' =>  '10', // categoryid
                'name' =>        'Mongolian Chicken/Beef', // name
                'description' => 'Sliced beef cooked in creamy capsicum and mushroom sauce served with rice', // description
                'image' =>       'items/wok-a-meal/Mongolian Chicken:Beef.jpeg',
                'price' =>       '750' // size
            ],
            [
                'categoryid' =>  '10', // categoryid
                'name' =>        'Egg Fried Rice', // name
                'description' => 'None', // description
                'image' =>       'items/wok-a-meal/Egg Fried Rice.jpeg',
                'price' =>       '430' // size
            ],
            [
                'categoryid' =>  '10', // categoryid
                'name' =>        'Chicken Shashlik', // name
                'description' => 'None', // description
                'image' =>       'items/wok-a-meal/Chicken Shashlik .jpeg',
                'price' =>       '699' // size
            ],
            [
                'categoryid' =>  '10', // categoryid
                'name' =>        'Fried Rice', // name
                'description' => 'None', // description
                'image' =>       'items/wok-a-meal/fried-rice.jpeg',
                'price' =>       'None' // size
            ],
            [
                'categoryid' =>  '10', // categoryid
                'name' =>        'Manchurian Rice', // name
                'description' => 'None', // description
                'image' =>       'items/wok-a-meal/ManchurianRice.JPG',
                'price' =>       'None' // size
            ],
            [
                'categoryid' =>  '11', // categoryid
                'name' =>        'Santorini Special Fish', // name
                'description' => 'Grilled marinated fish topped home made spices', // description
                'image' =>       'items/From-Ocean/.jpeg',
                'price' =>       '950' // size
            ],
            [
                'categoryid' =>  '11', // categoryid
                'name' =>        'Cilantro Chili Fish', // name
                'description' => 'Pan grilled boneless fish fulets served with cilantro chilli sauce', // description
                'image' =>       'items/From-Ocean/Cilantro-Chili-Fish.jpeg',
                'price' =>       '950' // size
            ],
            [
                'categoryid' =>  '11', // categoryid
                'name' =>        'Fried Fish', // name
                'description' => 'Crispy Fried fish fillets served with coleslaw, cocktail sauce and fresh lemon', // description
                'image' =>       'items/From-Ocean/Fried-Fish.jpeg',
                'price' =>       '950' // size
            ],
            [
                'categoryid' =>  '11', // categoryid
                'name' =>        'Fish Aux Papiy', // name
                'description' => 'Grilled Fish with spicy chilli sauce', // description
                'image' =>       'items/From-Ocean/Fish-Aux-Papiy.jpeg',
                'price' =>       '950' // size
            ],
            [
                'categoryid' =>  '11', // categoryid
                'name' =>        'Tandoori Fish', // name
                'description' => 'Grilled Fish topped with tandoori spices', // description
                'image' =>       'items/From-Ocean/tandoori-fish.jpeg',
                'price' =>       '950' // size
            ],
            [
                'categoryid' =>  '11', // categoryid
                'name' =>        'Grilled Fish', // name
                'description' => 'Grilled Fish topped with spices and vegetables', // description
                'image' =>       'items/From-Ocean/grilled_fish.JPG',
                'price' =>       'None' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Grilled Chicken Pizza', // name
                'description' => 'Cheese, Capsisum, Mushroom, Olives and Onion', // description
                'image' =>       'items/Pizza/Grilled-Chicken-Pizza.jpeg',
                'price' =>       '780' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Chicken Tikka Pizza', // name
                'description' => 'Cheese, Mushroom, Capsicum, Onion, Olives and BBQ Chicken', // description
                'image' =>       'items/Pizza/chicken-tikka-pizza.jpeg',
                'price' =>       '780' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Sausage Pizza', // name
                'description' => 'Cahicken Sausage with Cheese, Mushroom, Onion, Capsicum and Olives', // description
                'image' =>       'items/Pizza/Sausage-Pizza.jpeg',
                'price' =>       '740' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Four Season Pizza', // name
                'description' => 'Mushroom, Chicken, Sausages, Beef Salami, Capsicum, Olives, Vehetables, Onion, Mortadella, Grill Chicken and Cheese', // description
                'image' =>       'items/Pizza/Four-Season-Pizza.jpeg',
                'price' =>       '780' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Smoked Chicken Pizza', // name
                'description' => 'Cheese, Mushroom, Capsicum, Olives, Onion and Smoked Chicken Sausage, Pepperoni, Cheese', // description
                'image' =>       'items/Pizza/Smoked-Chicken-Pizza.jpeg',
                'price' =>       '740' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Classis Stone Baked Pizza (This Curst)', // name
                'description' => 'Smoked Chicken, Mushroom, paneer, Chicken Sausages, Pepperoni, Cheese', // description
                'image' =>       'items/Pizza/Classis-Stone-Baked-Pizza-(Thin-Curst).jpeg',
                'price' =>       '740' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Chicken Chilli  Pizza', // name
                'description' => 'Cheese, Mushroom, Sauteed Onions, Olives and Grilled Chicken', // description
                'image' =>       'items/Pizza/Chicken-Chilli-Pizza.jpeg',
                'price' =>       '740' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Pepperoni Pizza', // name
                'description' => 'Pizza glazed with Tomato Sauce with Mushroom, Onion, Cheese, Olives, Capsicum and Slice of Pepperini', // description
                'image' =>       'items/Pizza/Pepperoni-Pizza .jpeg',
                'price' =>       '740' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Calzone Pizza', // name
                'description' => 'Cheese, Mushroom, Capsicum, Olives, Onion and Chicken', // description
                'image' =>       'items/Pizza/Calzone-Pizza.jpeg',
                'price' =>       '780' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Cheese & Tomato Pizza', // name
                'description' => 'Cheese, Mushroom, Capsicum and Slice of Pepperoni', // description
                'image' =>       'items/Pizza/Cheese-&-Tomato-Pizza.jpeg',
                'price' =>       '740' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Vegetarian Pizza', // name
                'description' => 'Cheese, Capsicum, Mashroom, Olives, Onion and Fresh Tomatoes', // description
                'image' =>       'items/Pizza/Vegetarian-Pizza.jpeg',
                'price' =>       '740' // size
            ],
            [
                'categoryid' =>  '12', // categoryid
                'name' =>        'Bread Chef Special Pizza', // name
                'description' => 'Special Chicken, Cheese, Mashroom, Capsicum, Sausages, Salami Special, Onions and Olives', // description
                'image' =>       'items/Pizza/Bread-Chef-Special-Pizza.jpeg',
                'price' =>       '780' // size
            ],
            [
                'categoryid' =>  '13', // categoryid
                'name' =>        'Molten Lava', // name
                'description' => 'None', // description
                'image' =>       'items/Dessert/Molten_Lava.jpeg',
                'price' =>       '425' // size
            ],
            [
                'categoryid' =>  '13', // categoryid
                'name' =>        'Fudge Brownie With Ice Cream', // name
                'description' => 'None', // description
                'image' =>       'items/Dessert/Fudge-Brownie-With-Ice-Cream.jpeg',
                'price' =>       '350' // size
            ],
            [
                'categoryid' =>  '13', // categoryid
                'name' =>        'Skillet Brownie With Ice Cream', // name
                'description' => 'None', // description
                'image' =>       'items/Dessert/Skillet-Brownie-With-Ice-Cream.jpeg',
                'price' =>       '425' // size
            ],
            [
                'categoryid' =>  '13', // categoryid
                'name' =>        'Chocolate Volcano', // name
                'description' => 'None', // description
                'image' =>       'items/Dessert/Chocolate-Volcano-cake.jpeg',
                'price' =>       '425' // size
            ],
            [
                'categoryid' =>  '13', // categoryid
                'name' =>        'Nutella Kitak', // name
                'description' => 'None', // description
                'image' =>       'items/Dessert/Nutella-Kitkat.jpeg',
                'price' =>       '350' // size
            ],
            [
                'categoryid' =>  '13', // categoryid
                'name' =>        'Lotus', // name
                'description' => 'None', // description
                'image' =>       'items/Dessert/Lotus.jpeg',
                'price' =>       '350' // size
            ],
            [
                'categoryid' =>  '13', // categoryid
                'name' =>        'Cakes Slices', // name
                'description' => 'Ask From Server', // description
                'image' =>       'items/Dessert/cake-slices.jpeg',
                'price' =>       '250' // size
            ],
            [
                'categoryid' =>  '13', // categoryid
                'name' =>        'Gulab Jaman', // name
                'description' => '4 Pcs', // description
                'image' =>       'items/Dessert/Gulab-Jaman.jpeg',
                'price' =>       '200' // size
            ],
            [
                'categoryid' =>  '14', // categoryid
                'name' =>        'Double Scoop ', // name
                'description' => '16 Flavours, Ask Flavours From Server', // description
                'image' =>       'items/Gelato/doublescoop.jpeg',
                'price' =>       '' // size
            ],

        ];

        foreach($items as $item) {
            DB::table('items')->insert($item);
        }
    }
}
