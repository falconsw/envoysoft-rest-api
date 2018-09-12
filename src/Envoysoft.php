<?php

/**
 * Envoysoft Api
 * @author Ömer Doğan <omer_dogan@outlook.com>
 */

class Envoysoft
{
	private $baseUrl;
	private $clientId;
	private $clientSecret;
	private $userName;
	private $password;

	/**
	 * Envoysoft constructor.
	 *
	 * @param integer $clientId
	 * @param string $clientSecret
	 * @param string $userName
	 * @param string $password
	 */
	public function __construct($clientId, $clientSecret,$userName,$password)
	{
		$this->clientId = $clientId;
		$this->clientSecret = $clientSecret;
		$this->userName = $userName;
		$this->password = $password;
		$this->baseUrl = 'https://teststage.envoysoft.net/';
	}


	/**
	 * @param string $method
	 * @param array $params
	 *
	 * @return mixed|string
	 */
	private function get_call($method,$params = array())
	{
		$uri = $this->baseUrl.$method;

		$post_data = json_encode($params);

		$ch = curl_init($uri);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Content-Length: ' . strlen($post_data))
		);
		$result = curl_exec($ch);

		if (curl_errno($ch)) {
			return curl_error($ch);
		}
		$answer = json_decode($result);

		return $answer;
	}



	private function get_sess_call($method,$params = array(),$session)
	{
		$uri = $this->baseUrl.$method;
		$post_data = http_build_query($params);
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $uri);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = "Accept: application/json";
		$headers[] = "Authorization: Bearer ".$session;
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

		if (curl_errno($ch)) {
			return curl_error($ch);
		}
		$answer = json_decode($result);

		return $answer;
	}


	/**
	 * @return mixed|string
	 */
	public function getLogin(){
		return $this->get_call('oauth/token',array(
			"grant_type" => "password",
			"client_id" => $this->clientId,
			"client_secret" => $this->clientSecret,
			"username" => $this->userName,
			"password" => $this->password,
			"scope" => ""
		));

	}

	public function getBank($session){

		return $this->get_sess_call('apiv2/banks',array('method' => "envCPSelf"),$session);
	}

	public function getAmount($session,$banka){

		return $this->get_sess_call('apiv2/availableAmounts',array('bank' => $banka),$session);
	}


}