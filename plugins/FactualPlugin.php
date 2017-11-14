<?php

use Proxy\Plugin\AbstractPlugin;
use Proxy\Event\ProxyEvent;

class FactualPlugin extends AbstractPlugin {
	private $clientUrl = 'http://localhost:8000/';

	public function __construct($clientUrl) {
		if ($clientUrl) {
			$this->clientUrl = $clientUrl;
		}
	}

	public function onBeforeRequest(ProxyEvent $event) {
	}

	public function onHeadersReceived(ProxyEvent $event) {
	}

	public function onCurlWrite(ProxyEvent $event) {
	}

	public function onCompleted(ProxyEvent $event) {
		$request = $event['request'];
		$response = $event['response'];

		$url = $request->getUri();
		$cssTag = '<link rel="stylesheet" href="http://api.factual.ro/api/partner/css/factual.css" type="text/css" media="all" />';
		$scriptTag = '<script id="factual-client-script" type="text/javascript" src="' . $this->clientUrl . 'factual-client.bundle.js" data-factual-client-url="' . $url . '"></script>';
		$content = $response->getContent();
		$output = preg_replace('@<\/body.*?>@is', PHP_EOL . $cssTag . PHP_EOL . $scriptTag . PHP_EOL . '$0', $content, 1, $count);
    $response->setContent($output);
	}
}
