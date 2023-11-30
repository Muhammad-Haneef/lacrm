<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PredefineEmail;

class PredefineEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = collect(
                            [
                                [
                                    "title"=>"Initial Consultation Request",
                                    "subject"=>"Request for Initial Consultation",
                                    "matter"=>"Dear [client-name], I hope this email finds you well. My name is [your-name], and I am an attorney at [law-firm-name]. I understand you may be in need of legal assistance, and I would be happy to schedule an initial consultation to discuss your case. Please let me know your availability, and we can arrange a suitable time to meet. Feel free to provide a brief overview of your situation so that we can better prepare for our discussion. Thank you for considering [law-firm-name]. We look forward to the opportunity to assist you. Sincerely, [your-name] [your-contact-information]"
                                ],
                                [
                                    "title"=>"Case Update",
                                    "subject"=>"Update on Your Case",
                                    "matter"=>"Dear [client-name], I hope this email finds you in good health. I wanted to provide you with an update on the status of your case. If you have any questions or need further clarification, please don't hesitate to contact our office. We are committed to keeping you informed throughout the legal process. Thank you for choosing [law-firm-name]. Best regards, [your-name] [your-contact-information]"
                                ],
                                [
                                    "title"=>"Invoice and Payment Reminder",
                                    "subject"=>"Invoice #[invoice-number] - Payment Reminder",
                                    "matter"=>"Dear [client-name], I trust this email finds you well. This is a friendly reminder regarding the outstanding invoice #[invoice-number] for legal services rendered. The total amount due is $[amount]. Please submit the payment at your earliest convenience. If you have already made the payment, kindly disregard this notice. Thank you for your prompt attention to this matter. Best regards, [your-name] [your-contact-information]"
                                ],
                                [
                                    "title"=>"Meeting Confirmation",
                                    "subject"=>"Confirmation of Upcoming Meeting",
                                    "matter"=>"Dear [client-name], I hope this email finds you well. This is to confirm our upcoming meeting scheduled for [date] at [time]. If there are any changes or if you need to reschedule, please let us know as soon as possible. Looking forward to our discussion. Sincerely, [your-name] [your-contact-information]"
                                ],
                                [
                                    "title"=>"Legal Advice and Next Steps",
                                    "subject"=>"Legal Advice and Next Steps",
                                    "matter"=>"Dear [client-name], Following our recent consultation, I wanted to provide you with some legal advice and discuss the recommended next steps in your case. If you have any questions or would like to discuss this further, please feel free to reach out. Thank you for entrusting [law-firm-name] with your legal matter. Best regards, [your-name] [your-contact-information]"
                                ],
                                [
                                    "title"=>"Holiday Greetings",
                                    "subject"=>"Season's Greetings from [law-firm-name]",
                                    "matter"=>"Dear [client-name], Wishing you and your loved ones a joyful holiday season and a prosperous New Year. We appreciate your trust in [law-firm-name], and we look forward to serving you in the coming year. If you have any legal needs or questions in the new year, please do not hesitate to reach out. Warm regards, [your-name] [your-contact-information]"
                                ]
                            ]
                        );

        $data->each(function($row){
            $matter = $row['matter'];
            PredefineEmail::create([
                'title'=>$row['title'],
                'subject'=>$row['subject'],
                'matter'=>"$matter"
            ]);
        });
        
    }
}
