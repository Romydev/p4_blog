<?php

class EmailSender
{

	/**
	 * Sends an HTML email. You can use basic HTML tags. You have to insert
	 * new lines using <br /> or paragraphs. Uses the UTF-8 encoding.
	 * @param string $recipient The email address of the recipient
	 * @param string $subject The subject of the message
	 * @param string $message The message text
	 * @param string $from The email address of the sender
	 * @throws UserException
	 */
	public function send($recipient, $subject, $message, $from)
	{
		$header = "From: " . $from;
		$header .= "\nMIME-Version: 1.0\n";
		$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
		if (!mb_send_mail($recipient, $subject, $message, $header))
			throw new UserException('Unable to send the email.');
}

	/**
	 * Checks whether entered antispam matches the current year and sends an email
	 * @param int $year The current year (antispam)
	 * @param string $recipient The email address of the recipient
	 * @param string $subject The subject of the message
	 * @param string $message The message text
	 * @param string $from The email address of the sender
	 * @throws UserException
	 */
	public function sendWithAntispam($year, $recipient, $subject, $message, $from)
	{
		if ($year != date("Y"))
			throw new UserException('Antispam mismatch.');
		$this->send($recipient, $subject, $message, $from);
	}

}
