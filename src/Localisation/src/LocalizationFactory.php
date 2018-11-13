<?php

namespace Phunc\Local;

/**
 * columns in DB: id, json, lead_id, created_at, updated_at
 *
 * @package Phunc
 */
class LocalizationFactory
{
    protected $client = NULL;


    public function __construct(\Phunc\Client $client)
    {
        $this->client = $client;
    }

    public function getActualLocalizations($id = NULL)
    {
        if ($id) {
            $localization = $this->client->localizations()->where('id', $id)->first();
            if ($localization->lang == 'DE') {
                $locEN = $this->getActualLocalization('EN');
                $localizations = ["DE" => $localization, "EN" => $locEN];
            } else {
                $locDE = $this->getActualLocalization('DE');
                $localizations = ["DE" => $locDE, "EN" => $localization];
            }
        } else {
            $locDE = $this->getActualLocalization('DE');
            $locEN = $this->getActualLocalization('EN');

            $localizations = ["DE" => $locDE, "EN" => $locEN];
        }
        return $localizations;
    }

    public function getActualLocalization($language)
    {
        return $this->client->localizations()->where('lang', $language)->orderBy('id', 'desc')->first();
    }

    public function getLocalizationsHistory($language)
    {
        return $this->client->localizations()->where('lang', $language)->orderBy('id', 'desc')->pluck('created_at', 'id');
    }

    public function canCreateLocalization($language, $inputLocalization)
    {
        if ($this->isValidJson($inputLocalization)) {
            $this->createLocalization($language, $inputLocalization);
            return true;
        }
        return false;
    }

    protected function createLocalization($language, $json)
    {
        $localization = new Localization();
        $localization->lang = $language;
        $localization->json = $json;
        $this->client->localizations()->save($localization);
    }

    protected function isValidJson($json)
    {
        json_decode($json);
        return (!json_last_error());
    }
}