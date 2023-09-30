<?php

namespace App\Controllers;
use App\Models\ContactModel;
use App\Models\ServiceModel;
use App\Models\VisiModel;
use App\Models\MisiModel;
use App\Models\BlogModel;
use App\Models\TeamModel;
use App\Models\HomeModel;
use App\Models\ManfaatModel;

class Home extends BaseController
{
    public function index()
    {
        $contact = new ContactModel();
        $service = new ServiceModel();
        $visi = new VisiModel();
        $misi = new MisiModel();
        $blog = new BlogModel();
        $team = new TeamModel();
        $home = new HomeModel();
        $manfaat = new ManfaatModel();
        
        $allContacts = $contact->index();
        $allService = $service->all();
        $allVisi = $visi->all();
        $allMisi = $misi->all();
        $allBlog = $blog->index();
        $allTeam = $team->index();
        $allHome = $home->index();
        $allManfaat = $manfaat->index();

        $data['contacts'] = $allContacts->getResult();
        $data['service'] = $allService->getResult();
        $data['visi'] = $allVisi->getResult();
        $data['misi'] = $allMisi->getResult();
        $data['blog'] = $allBlog->getResult();
        $data['team'] = $allTeam->getResult();
        $data['home'] = $allHome->getResult();
        $data['manfaat'] = $allManfaat->getResult();

        // var_dump( $data['contacts']); die;
        return view('index',$data);
    }
}
