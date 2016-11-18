<?php

use Proxy\Plugin\AbstractPlugin;
use Proxy\Event\ProxyEvent;

class FactualPlugin extends AbstractPlugin {
	public function onBeforeRequest(ProxyEvent $event) {
	}

	public function onHeadersReceived(ProxyEvent $event) {
	}

	public function onCurlWrite(ProxyEvent $event) {
	}

	public function onCompleted(ProxyEvent $event) {
		$output = $response->getContent();

    $response->setContent($output);
	}
}
