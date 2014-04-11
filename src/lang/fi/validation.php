<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => ":attribute on hyväksyttävä."/*"The :attribute must be accepted."*/,
	"active_url"       => ":attribute ei ole hyväksyttävä URL.",
	"after"            => ":attribute on oltava päivän :date jälkeen.",
	"alpha"            => ":attribute voi sisältää vain kirjaimia.",
	"alpha_dash"       => ":attribute voi sisältää vain kirjaimia, numeroita ja ajatusviivoja.",
	"alpha_num"        => ":attribute voi sisältää vain kirjaimia ja numeroita.",
	"before"           => ":attribute must be a date before :date.",
	"between"          => array(
		"numeric" => ":attribute pitää olla väliltä :min - :max.",
		"file"    => ":attribute pitää olla väliltä :min - :max kilobytes.",
		"string"  => ":attribute pitää olla :min - :max merkkiä pitkä.",
	),
	"confirmed"        => ":attribute varmistus ei täsmää.",
	"date"             => ":attribute ei ole oikea aika.",
	"date_format"      => ":attribute ei täsmää formaattiin :format.",
	"different"        => ":attribute ja :other pitää olla eri.",
	"digits"           => ":attribute pitää olla :digits numeroa.",
	"digits_between"   => ":attribute pitää olla min and :max digits.",
	"email"            => ":attribute formaatti on virheellinen.",
	"exists"           => "valittu :attribute on virheellinen.",
	"image"            => ":attribute pitää olla kuva.",
	"in"               => "selected :attribute on virheellinen.",
	"integer"          => ":attribute pitää olla numero.",
	"ip"               => ":attribute pitää olla IP-osoite.",
	"max"              => array(
		"numeric" => ":attribute ei voi olla isompi kuin :max.",
		"file"    => ":attribute ei voi olla isompi kuin :max kilobytes.",
		"string"  => ":attribute ei voi olla pidempi kuin :max merkkiä.",
	),
	"mimes"            => ":attribute pitää olla tiedosto tyyppiä: :values.",
	"min"              => array(
		"numeric" => ":attribute pitää olla vähintään :min.",
		"file"    => ":attribute pitää olla vähintään :min kilobytes.",
		"string"  => ":attribute pitää olla vähintään :min merkkiä.",
	),
	"not_in"           => "Valittu :attribute on virheellinen.",
	"numeric"          => ":attribute täytyy olla numero.",
	"regex"            => ":attribute muoto on virheellinen.",
	"required"         => ":attribute kenttä tarvitaan.",
	"required_with"    => ":attribute kenttä tarvitaan kun :values on läsnä.",
	"required_without" => ":attribute kenttä tarvitaan kun :values ei ole paikalla.",
	"same"             => ":attribute ja :other täytyy olla samat.",
	"size"             => array(
		"numeric" => ":attribute täytyy olla :size.",
		"file"    => ":attribute täytyy olla :size kilobytes.",
		"string"  => ":attribute täytyy olla :size merkkiä.",
	),
	"unique"           => ":attribute on jo varattu",
	"url"              => ":attribute formaatti on virheellinen.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
        'oldPassword' => array(
            'required' => 'Sinun on annettava vanha salasanasi.',
            'min' => 'Sinun vanhan salasanan on oltava vähintään 6 merkkiä pitkä.',
        ),
        'newPassword' => array(
            'required' => 'Sinun on annetta uusi salasana.',
            'min' => 'Sinun uuden salasanan on oltava vähintään 6 merkkiä pitkä.',
        ),
        'newPassword_confirmation' => array(
            'required' => 'Sinun on vahvistettava uusi salasanasi.',
        ),
        'minutes' => array(
            'numeric' => 'Minuuttien pitää olla numero',
            'required' => 'Sinun pitää määrittää keskeytyksen pituus minuuteissa',
        ),
    ),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
