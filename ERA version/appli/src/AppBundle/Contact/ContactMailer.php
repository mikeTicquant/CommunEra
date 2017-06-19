<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 10/05/2017
 * Time: 10:18
 */

namespace AppBundle\Contact;


class ContactMailer
{
    /**
     * @var  \Twig_Environment
     */

    private $twig;


    private $from;

    private $to;


    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    public function __construct($twig, $mailer, $from, $to)
    {
        $this->twig   = $twig;
        $this->mailer = $mailer;
        $this->from   = $from;
        $this->to     = $to;
    }

    public function send(array $contat)
    {
        $bodyTxt = $this->twig->render('contact/email.txt.twig',[
            'contact' => $contact
        ]);

        $bodyHtml= $this->twig->render('contact/email.html.twig', [
            'contact' => $contact,
        ]);

        $message = \Swift_Message::newInstance()
            ->setTo($this->to)
            ->setFrom($this->from)
            ->setSubject($contact['subject'])
            ->setBody($bodyTxt, 'text/plain')
            ->addPart($bodyHtml, 'text/html');

        $pdf = \Swift_Attachment::fromPath(__DIR__ . '/../../../../dari-clean/RABI_Soussi-Hitema.pdf', 'application/pdf');
        $pdf->setFilename('CV_SOUSSI-RABI.pdf');
        $message->attach($pdf);


        return $this->mailer->send($message);

    }

}