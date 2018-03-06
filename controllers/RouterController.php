<?php

class RouterController extends Controller
{
	/**
	 * @var Controller The inner controller instance
	 */
	protected $controller;

	/**
	 * Parses the URL address using slashes and returns params as array
	 * @param string $url The URL address to be parsed
	 * @return array The URL parameters
	 */
	private function parseUrl($url)
	{
		// Parses URL parts into an associative array
		$parsedUrl = parse_url($url);
		// Removes the leading slash
		$parsedUrl["path"] = ltrim($parsedUrl["path"], "/");
		// Removes white-spaces around the address
		$parsedUrl["path"] = trim($parsedUrl["path"]);
		// Splits the address by slashes
		$explodedUrl = explode("/", $parsedUrl["path"]);
		return $explodedUrl;
	}

	/**
	 * Converts dashed controller name from URL into a CamelCase class name
	 * @param string $text The controller name using dashes like article-list
	 * @return string The class name of the controller like ArticleList
	 */
	private function dashesToCamel($text)
	{
		$text = str_replace('-', ' ', $text);
		$text = ucwords($text);
		$text = str_replace(' ', '', $text);
		return $text;
	}

	/**
	 * Parses the URL address and creates appropriate controller
	 * @param array $params The URL address as an array of a single element
	 */
	public function process($params)
	{
		$parsedUrl = $this->parseUrl($params[0]);
		// The controller name is the 1st URL parameter
		$controllerClass = $this->dashesToCamel(array_shift($parsedUrl)) . 'Controller';

		// Printing the controller class name just to be sure we're going to instantiate the right class
		echo($controllerClass);
		echo('<br />');
		print_r($parsedUrl);
		// To be continued :)
	}
}