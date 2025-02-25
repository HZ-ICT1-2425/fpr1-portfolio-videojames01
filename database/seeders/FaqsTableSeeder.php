<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            ['question' => "How can you print a document from your laptop at HZ?",
                'answer' => "Go to hz.mynetpay.nl and select 'Mobility Print'.
        Choose your current software and install the mobility print app. Select which file(s) you would like to print
        and choose the 'HZ Printer'. Find a printer and scan your student card or enter your HZ login details. Select
        'Print release', select your file, enter your preferred settings, and press print!",
                'link' => 'https://hz.mynetpay.nl',
                'created_at' => now(),
                'updated_at' => now()],
            ['question' => "How can you scan a document and send it to your laptop at HZ?",
                'answer' => "Log in to a printer using your HZ student card or username and password. Select the 'scan' option and
        place the document(s) you'd like to scan on the feeder or glass plate. Select your preferred settings and
        press start. Remember to log out when finished.",
                'link' => null,
                'created_at' => now(),
                'updated_at' => now()],
            ['question' => "How can I buy something on the HZ web shop?",
                'answer' => "Go to webshop.hz.nl and use the navigation bar to select
        between 'HZ', 'HZ Cult', and 'HZ Sport'. Scroll down
        to view the available products, and select whichever ones you would like to purchase. Once you have selected
        everything, navigate to your shopping cart,select 'checkout' and complete the payment.",
                'link' => 'https://webshop.hz.nl',
                'created_at' => now(),
                'updated_at' => now()],
            ['question' => "How can you book a project space?",
                'answer' => "Log into MyHZ and select the selfservice portal in the personal menu. Select 'Reservations', then 'Reserve a
        meeting or project room', and finally 'Reserve a room'. On the top left you can select the date, and the
        top row displays the time. Click and drag to select a time slot in your preferred room, click next, fill
        in your information and confirm the reservation.",
                'link' => null,
                'created_at' => now(),
                'updated_at' => now()],
            ['question' => "What are the instructions if you want to park your car at the HZ parking lot?",
                'answer' => "It is not possible to park at the Groene Woud campus. The parking lot on Kousteensedijk has a number of
        spaces for visitors, staff and students of Het Groene Woud. This car park is an 8-minute walk from the
        HZ. When you show your entry card at the JRCZ service desk, located next to the HZ building, you can get
        an exit card.",
                'link' => null,
                'created_at' => now(),
                'updated_at' => now()]
            ]);
    }
}
