<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
            $this->data = $data;       //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $nama = $this->data['nama'];

        $imagePath = public_path('images/') . $this->data['image'];
        return $this->subject('Subject email')
                    ->view('email_template',compact('nama'))
                    ->attach($imagePath, [
                        'as' => 'name.png',
                    ]);
    }
}
