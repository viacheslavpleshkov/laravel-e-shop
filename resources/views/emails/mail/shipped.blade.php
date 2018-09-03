@component('mail::message')
# {{ $mail->subject}} | Contact form | E-shop

**Name:** {{ $mail->name }}

**Email:** {{ $mail->email }}

**Subject:** {{ $mail->subject }}

**Message:** {{ $mail->message }}

@endcomponent
