<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Album;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Gallery;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index()
    {
        return response()->json('hello world');
    }

    public function getEducation()
    {
        return response()->json(Education::all());
    }

    public function getExperience()
    {
        return response()->json(Experience::all());
    }

    public function getPortfolio()
    {
        return response()->json(Portfolio::all());
    }

    public function getAbout()
    {
        return response()->json(About::all());
    }

    public function getGallery()
    {
        return response()->json(Gallery::all());
    }

    public function addMessage()
    {
        
    }

    public function getPing()
    {
        return response()->json('pong');
    }
}
