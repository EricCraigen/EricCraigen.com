<?php

namespace Database\Seeders;

use App\Models\Contact;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message = new Contact([
            'firstName' => 'Joe',
            'lastName' => 'Smith',
            'email' => 'joe.smith@gmail.com',
            'phone' => '(619)-233-3454',
            'subject' => 'In need of a website!',
            'message' => 'Hello! My name is Joe and I need a website.',
            'messageRead' => false,
            'messageStarred' => false,
            'messageSnoozed' => false,
            'messageTrashed' => false,
        ]);
        $message->save();

        $message = new Contact([
            'firstName' => 'Janet',
            'lastName' => 'Cole',
            'email' => 'j.cole@gmail.com',
            'phone' => '(619)-233-3454',
            'subject' => 'J Cole in the house!',
            'message' => 'Hello! Im Janet Cole and I need a website.',
            'messageRead' => false,
            'messageStarred' => false,
            'messageSnoozed' => false,
            'messageTrashed' => false,
        ]);
        $message->save();

        $message = new Contact([
            'firstName' => 'Zane',
            'lastName' => 'Butler',
            'email' => 'zaneb@gmail.com',
            'phone' => '(619)-233-3454',
            'subject' => 'Zane Butler\'s the name, needing a website is my game.',
            'message' => 'Hello! Please contact me, I need a website.',
            'messageRead' => false,
            'messageStarred' => false,
            'messageSnoozed' => false,
            'messageTrashed' => false,
        ]);
        $message->save();

        $message = new Contact([
            'firstName' => 'Chris',
            'lastName' => 'Lang',
            'email' => 'clang@gmail.com',
            'phone' => '(435)-455-6764',
            'subject' => 'Your portfolio looks amazing!',
            'message' => 'I\'ve seen many o\' junior dev porfolio\'s and yours is certainly among the top.',
            'messageRead' => false,
            'messageStarred' => false,
            'messageSnoozed' => true,
            'messageTrashed' => false,
        ]);
        $message->save();

        $message = new Contact([
            'firstName' => 'Jamie',
            'lastName' => 'Gould',
            'email' => 'jamie.gould890@gmail.com',
            'phone' => '(208)-946-9398',
            'subject' => 'Love You!',
            'message' => 'Psst! I LOVE you!',
            'messageRead' => true,
            'messageStarred' => true,
            'messageSnoozed' => false,
            'messageTrashed' => false,
        ]);
        $message->save();

        $message = new Contact([
            'firstName' => 'Bret',
            'lastName' => 'Dickey',
            'email' => 'digD@gmail.com',
            'phone' => '(433)-564-2332',
            'subject' => 'You actually turned out to be a great programmer.',
            'message' => 'After reviewing your portfolio, I have determined that you are indeed an outstanding developer!',
            'messageRead' => false,
            'messageStarred' => false,
            'messageSnoozed' => false,
            'messageTrashed' => true,
        ]);
        $message->save();
    }
}
