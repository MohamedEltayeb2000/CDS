<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'title' => 'Detection Online is now
                much easier.',
                'slug' => 'Detection Online is now
                much easier.',
                'image' => 'home.png',
                'description' => '
                In late February, I fell ill with a fever and a cough. As a biochemist who teaches a class on viruses, I’d been tracking the outbreak of COVID-19 in China. Inevitably I wondered: Did I have COVID-19, or did I have the flu?

                At the time, COVID-19 testing was very restricted but I knew I could get quickly tested for the flu. I drove myself to an urgent care clinic, the nurse easily checked my temperature and took a throat swab and 30 minutes later I got the results: positive for influenza.
                
                The flu test I took is a type of viral screening called a rapid antigen test that looks for viral proteins. For the flu, these antigen tests are easy to administer, decently accurate and give results almost immediately.
                
                Widespread testing for SARS–CoV–2, the virus that causes COVID-19, is critical to knowing if, when and how people can start to return to their normal lives. An antigen test for the coronavirus could be a huge help in expanding testing.',
                'created_at'=>\Illuminate\Support\Carbon::now()->toDateTimeLocalString(),
                'updated_at'=>\Illuminate\Support\Carbon::now()->toDateTimeLocalString(),

            ],

            [
                'title' => 'Medicine Marble statue of Asclephius on a pedestal status',
                'slug' => 'Medicine-Marble-statue-of-Asclephius-on-a-pedestal-status',
                'image' => 'banner3.jpeg',
                'description' => '
Medicine
Marble statue of Asclephius on a pedestal, symbol of medicine in Western medicine
Statue of Asclepius, the Greek god of medicine, holding the symbolic Rod of Asclepius with its coiled serpent
Specialist	Medical specialty
Glossary	Glossary of medicine
Medicine is the science and practice of establishing the diagnosis, prognosis, treatment, and prevention of disease. Medicine encompasses a variety of health care practices evolved to maintain and restore health by the prevention and treatment of illness. Contemporary medicine applies biomedical sciences, biomedical research, genetics, and medical technology to diagnose, treat, and prevent injury and disease, typically through pharmaceuticals or surgery, but also through therapies as diverse as psychotherapy, external splints and traction, 
medical devices, biologics, and ionizing radiation, amongst others',
                'created_at'=>\Illuminate\Support\Carbon::now()->toDateTimeLocalString(),
                'updated_at'=>\Illuminate\Support\Carbon::now()->toDateTimeLocalString(),

                ]

        ]);
    }
}
