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
                'answer' => "Example",
                'created_at' => now(),
                'updated_at' => now()],
            ['question' => "How can you scan a document and send it to your laptop at HZ?",
                'answer' => "Log in to a printer using your HZ student card or username and password. Select the 'scan' option and
        place the document(s) you'd like to scan on the feeder or glass plate. Select your preferred settings and
        press start. Remember to log out when finished.",
                'created_at' => now(),
                'updated_at' => now()],
            ['question' => "How can I buy something on the HZ web shop?",
                'answer' => "Example",
                'created_at' => now(),
                'updated_at' => now()],
            ['question' => "How can you book a project space?",
                'answer' => "Log into MyHZ and select the selfservice portal in the personal menu. Select 'Reservations', then 'Reserve a
        meeting or project room', and finally 'Reserve a room'. On the top left you can select the date, and the
        top row displays the time. Click and drag to select a time slot in your preferred room, click next, fill
        in your information and confirm the reservation.",
                'created_at' => now(),
                'updated_at' => now()],
            ['question' => "What are the instructions if you want to park your car at the HZ parking lot?",
                'answer' => "It is not possible to park at the Groene Woud campus. The parking lot on Kousteensedijk has a number of
        spaces for visitors, staff and students of Het Groene Woud. This car park is an 8-minute walk from the
        HZ. When you show your entry card at the JRCZ service desk, located next to the HZ building, you can get
        an exit card.",
                'created_at' => now(),
                'updated_at' => now()]
            ]);
    }
}
