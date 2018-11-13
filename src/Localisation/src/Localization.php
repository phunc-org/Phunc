<?php

namespace Phunc\Local;

use Illuminate\Database\Eloquent\Model;
use \Phunc\Commands\ParseJsonTrait;
use \Phunc\JsonInterface;
use \Phunc\Json;
/**
 * columns in DB: id, json, lead_id, created_at, updated_at
 *
 * @package Phunc
 */
class Localization extends Model implements \Phunc\JsonInterface
{
    use ParseJsonTrait;

    /** @var string */
    protected $table = 'localizations';

    /** @var array */
    protected $fillable = [
        'json',
    ];

    /**
     * @return mixed
     */
    public function client()
    {
        return $this->belongsToOne(\Phunc\Client::class);
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getPDF()
    {
        return $this->getJson()->getParameter("pdf");
    }

    /**
     * @return Json
     */
    public function getJson()
    {
        return new Json($this);
    }

    /**
     * @param Json $json
     */
    public function setJson(Json $json)
    {
        $this->json = $json->getJson();
    }
}