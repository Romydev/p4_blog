<?php

 */
class ContactController extends Controller
{
	/**
	 * Handles the contact form
	 * @param array $params Unused here
	 */
	public function process($params)
	{
		// Sets HTML meta-data
		$this->head = array(
			'title' => 'Contact form',
			'description' => 'Contact us using our email form.'
		);

		// The form has been submitted?
		if ($_POST)
		{
			try
			{
				$emailSender = new EmailSender(); // Instantiates a model
				$emailSender->sendWithAntispam($_POST['abc'], "admin@address.com", "Email from your website", $_POST['message'], $_POST['email']);
				$this->addMessage('The email was successfully sent.');
				$this->redirect('contact');
			}
			catch (UserException $ex)
			{
				$this->addMessage($ex->getMessage());
			}
		}

		// Sets the view
		$this->view = 'vueContact';
	}
}
