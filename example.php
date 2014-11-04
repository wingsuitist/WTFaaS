<?php

$WTFaaS = array (
	'WTFaaS initializing',
	'With The Force as a Service will be loaded soon',
	'WTF as a Service will overcome SaaS, MaaS and BAaas or even DBaaS, just wait a second',
	'WTFaaS is booting buzzword infrastructure',
	'New buzzword is soon ready Just a second for WTFaaS',
	'It seams SaaS and WTFaaS are slowed down by MYaaS'
);

while(true) {
	sleep(1);
	echo "\n".$WTFaaS[rand(0,(count($WTFaaS)-1))];
	for($i=0; $i<5; $i++) {
		sleep(1);
		echo '.';
	}
}
