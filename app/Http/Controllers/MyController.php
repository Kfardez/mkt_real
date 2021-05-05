<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//les Models de la base de données du Voyager
use App\Partenaire;
use App\Equipe;
use App\Actualite;
use App\Galery;

class MyController extends Controller
{
    //acceuil
    public function acceuilCont()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->paginate(3);
        $partenaires = Partenaire::all();
        return view('pages.acceuil', compact('partenaires', 'actualites'));
    }
    //apropos
    public function aproposCont()
    {
        return view('pages.apropos');
    }
    //newsletter
    public function News()
    {
        return back();
    }
    //newsletter
    public function Newstraitement()
    {
        return back();
    }
    //actualité
    public function actualiteCont()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->get();
        return view('pages.actualite')->with('actualites', $actualites);
    }
    //show pages Actualité
    public function readmore(actualite $actualite)
    {
        return view('pages.actualiteShow', compact('actualite'));
    }
    //organisation
    public function reglementCont()
    {
        return view('pages.reglement');
    }
    //galerie
    public function galerieCont()
    {
        $galeries = Galery::orderBy('created_at', 'desc')->get();
        return view('pages.galerie')->with('galeries', $galeries);
    }
    //equipe
    public function organisationCont()
    {
        $equipes = Equipe::all();
        return view('pages.organisation')->with('equipes', $equipes);
    }
    //inscription
    public function inscriptionCont()
    {
        return view('pages.inscription');
    }
}
