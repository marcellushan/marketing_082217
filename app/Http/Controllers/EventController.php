<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;



class EventController extends BaseController
{
    const MEDIA_NAME = "Event Aid";
    const MODEL_NAME = 'App\\Event';
    const VIEW_FOLDER = 'event';
    const TABLE_NAME = 'events';
}