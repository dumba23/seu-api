<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $page = Page::create([
            'title' => 'რექტორის მიმართვა',
        ]);

        $page->contentComponents()->create([
            'type' => 'paragraph',
            'content' => 'ძვირფასო მეგობრებო, დიახ, მოგმართავთ როგორც მეგობრებს იმიტომ, რომ თუ თქვენ საქართველოს ეროვნული უნივერსიტეტი სეუ-ს სტუდენტი გახდებით, წლები, რომლებიც ერთად უნდა გავატაროთ, დარწმუნებული ვარ იქნება მეგობრული, საინტერესო, სასარგებლო და ნაყოფიერი.',
        ]);

        $page->contentComponents()->create([
            'type' => 'image',
            'content' => '/storage/images/rector.png',
        ]);
    }
}
