<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\UploadedFile;

use Auth;

use App\Mobile;
use App\Reparation;
use App\Client;
use App\Accessoire;
use App\Avis;
use App\Typerep;
use App\Daccessoire;
use App\Contact;
use App\Opinion;
use App\Reclamation;

class AppController extends Controller{

    /*public function __construct(){
        $this->middleware('auth');
    }*/
    
    //Ajout du mobile : Affiche Forme Ajout d'un mobile 
    public function ajoutmobile(){
        return view('admin.ajoutmobile');
    }

    //La pérsistance des données envoyées via le formulaire pour l'ajout d'un mobile 
    public function store(Request $request){
                        
                        $mobile = new Mobile(); 
                        
                        $mobile ->genre_mobile  = $request->input('genre_mobile');

                        $mobile ->marque_mobile = $request->input('marque_mobile');

                        $mobile ->type_mobile   = $request->input('type_mobile');

                        if($request->hasFile('photo_type')){
                            $mobile->photo_type = $request->photo_type->store('image');
                        }
                        
                    $mobile->save();

                    return redirect('reparation/ajoutm');
    }

    //La pérsistance des données envoyées via le formulaire pour l'ajout d'un accessoire 
    public function storeaccessoire(Request $request){
                        
        $accessoire = new Accessoire();
    
        $accessoire ->nom_accessoire  = $request->input('nom_accessoire');

        $accessoire ->prix_accessoire = $request->input('prix_accessoire');     

        $accessoire ->ancienprix_accessoire   = $request->input('ancienprix_accessoire');

        $accessoire ->reference_accessoire   = $request->input('reference_accessoire');
        
        $accessoire ->description_accessoire   = $request->input('description_accessoire');

        if($request->hasFile('photo_accessoire')){
            $accessoire->photo_accessoire = $request->photo_accessoire->store('accessoire');
        }
        
    $accessoire->save();

    session()->flash('success','Cet accessoire a été ajouté avec succès !' );

    return redirect('/ajoutaccessoire');
}


public function storeavis(Request $request){
                        
        $avis = new Avis(); 

        $avis ->libelle_avis  = $request->input('libelle_avis');

        $avis ->email_client = $request->input('email_client');     

        $avis->save();

    return redirect('/ajoutavis');
}
public function storeop(Request $request){
                        
    $opinion = new Opinion(); 

    $opinion ->libelle_opinion  = $request->input('libelle_opinion');

    $opinion ->email_client = $request->input('email_client');     

    $opinion->save();

    session()->flash('success','Votre avis a été enregistré avec succès !' );

return redirect('/ajoutop');
}


    
        
    //Séléctionner le genre du téléphone
    public function affichegenre(){
        $listgenre = DB::select('select distinct genre_mobile from mobiles');
        return view('reparation.reparation', ['mobiles' => $listgenre]);
    }

    //affiche la page des marques après le genre
    public function affichemarque($genre){
        $listmarque = DB::select('
                        select distinct marque_mobile , genre_mobile from mobiles where genre_mobile = ?', [$genre]); 
        return view('reparation.marque', ['mobiles' => $listmarque]);
    }

    //Affiche Type of mobile après la marque
    public function affichetype($genre, $marque){
        $listtype = DB::select("select * from `mobiles` where `genre_mobile` like '$genre' and `marque_mobile` like '$marque'");
                return view('reparation.type', ['mobiles' => $listtype]);
    }

    //Pour afficher les types de rréparation
    public function affichetyperep($genre, $marque , $type){
        $listrep = DB::select("select * from `typereps`
                         where `genre_mobile` like '$genre' 
                                and `marque_mobile` like '$marque'
                                        and `type_mobile` like '$type'");

        return view('reparation.typerep', ['list' => $listrep]);
    }


    //Pour remplissage du formulaire pour la réparation
    public function formrep($genre, $marque, $type){
        $listinf = DB::select("select * from `mobiles` 
            where `genre_mobile` like '$genre' 
                        and `marque_mobile` like '$marque' 
                                    and `type_mobile` like '$type'");

        return view('reparation.formulaire', ['mobiles' => $listinf]);
    }
    
    //Permet d'afficher les accessoires  ********************  Achaaaat Accesoire *********
    public function afficheaccessoire(){
        $listacc = DB::select('select * from accessoires');

        return view('accessoire.store', ['accessoires' => $listacc]);
    }

    public function affichedetailsacc($id){
        $listacc = DB::select("select * from accessoires
                                            where `id_accessoire` like '$id' ");

        return view('accessoire.details', ['accessoires' => $listacc]);
    }
    // Notification 
    public function affichenotif(){
        $listrep = DB::select("select * from reparations where `etat_reparation` = '0'");

        return view('admin.notif', ['reparations' => $listrep]);
    }

    //afficheGroup permet d'afficher Les informations sur nous (Qui sommes nous ?)
    public function affichegroup(){
        return view('accessoire.qui_nous');
    }

    //Pour remplissage du formulaire pour la réparation
    public function afficheprix($genre,$marque,$type,$typerep){
        $listinf = DB::select("select * from `typereps` 
                                            where `genre_mobile` like '$genre' 
                                                and `marque_mobile` like '$marque' 
                                                        and `type_mobile` like '$type'
                                                            and `type_typerep` like '$typerep'");
        
        return view('reparation.prixrep', ['mobiles' => $listinf]);
    }

    //page infos client formulaire infos client
    public function afficheinfos($genre,$marque,$type,$typerep,$prixrep){
        $listinf = DB::select("select * from `typereps` 
                                            where `genre_mobile` like '$genre' 
                                                and `marque_mobile` like '$marque' 
                                                        and `type_mobile` like '$type'
                                                            and `type_typerep` like '$typerep'
                                                                and `prix_typerep` like '$prixrep' ");
        
        return view('reparation.formulaireclient', ['mobiles' => $listinf]);
    }
   
    
    public function details($cin){
        $listC = DB::select("select * from `clients` 
        where `cin_client` like '$cin'"); 
                   
        return view('admin.detailsC', ['clientsD' => $listC]);
    }
    

    public function getmarquetype(){
        $listgenremarquetype = DB::select('select distinct genre_mobile,type_mobile,marque_mobile from mobiles'); 
        return view('admin.ajouttypereparation', ['mobiles' => $listgenremarquetype]);
    }
        //La pérsistance des données envoyées via le formulaire pour l'ajout d'un type de réparation 
        public function storereparation(Request $request){
                        
            $typerep = new Typerep();
        
            $typerep ->type_typerep  = $request->input('type_typerep');
            $typerep ->prix_typerep = $request->input('prix_typerep');
            $typerep ->genre_mobile = $request->input('genre_mobile');
            $typerep ->marque_mobile = $request->input('marque_mobile');
            $typerep ->type_mobile = $request->input('type_mobile');

        $typerep->save();
        return redirect('/ajouttyperep');
    }
        //La pérsistance des données envoyées via le formulaire pour les accesoiires 
    public function storedemandeaccessoire(Request $request){
        $dacc = new Daccessoire();

                $dacc->email_client = $request->input('email_client');
                $dacc ->cin_client = $request->input('cin_client');
                $dacc ->tel_client = $request->input('tel_client');
                
                $dacc ->reference_daccessoire = $request->input('reference_daccessoire');

                $dacc ->commentaire = $request->input('commentaire');

        $dacc->save();
        
        return redirect('reparation/success');
    }
//ajouter une demande de réparation *************************** Add Reparation ***************
    public function addreparation(Request $request){
        $reparation = new Reparation();
        $client = new Client();
        
            $reparation ->type_reparation   = $request->input('type_reparation');
            $reparation ->date_reparation   = $request->input('date_reparation');
            $reparation ->time_reparation   = $request->input('time_reparation');
            $reparation ->prix_reparation   = $request->input('prix_typerep');

            $reparation ->genre_mobile      = $request->input('genre_mobile');
            $reparation ->marque_mobile     = $request->input('marque_mobile');
            $reparation ->type_mobile       = $request->input('type_mobile');
            
            $reparation ->cin_client        = $request->input('cin_client');
            
            // Pour les informations du client 
            $client ->nom_client            = $request->input('nom_client'); 
            $client ->prenom_client         = $request->input('prenom_client');
            $client ->adresse_client        = $request->input('adresse_client');
            $client ->tel_client            = $request->input('tel_client');
            
            $client ->cin_client            = $request->input('cin_client');


        $reparation->save();
        $client->save();

        return redirect('reparation/accessoire');

    }
        public function formcontact(){
            return view('client.contact');
        }
        //La pérsistance des données envoyées via le formulaire contact
        public function storecontact(Request $request){
            $contact = new Contact();
                    $contact ->nom_client = $request->input('nom_client');
                    $contact ->email_client = $request->input('email_client');
                    $contact ->objet_contact = $request->input('objet_contact');
                    $contact ->message = $request->input('message');
            $contact->save();
        
        return redirect('/contact');

        }

        public function addreclam(Request $request){
            $rec = new Reclamation();
                    $rec ->cin_client = $request->input('cin_client');
                    $rec ->email_client = $request->input('email_client');
                    $rec ->tel_client = $request->input('tel_client');
                    $rec ->libelle_reclamation = $request->input('libelle_reclamation');
            $rec->save();

            session()->flash('reclamation','Votre réclamation a été envoyée  !!');
        
        return redirect('/reclamation');

        }

        /* cotééé administration ************/
        public function affichereclamation(){
            $listC = DB::select("select * from `reclamations`"); 
            return view('admin.reclamationadmin', ['listrec' => $listC]);
        }
        public function afficheopinion(){
            $listC = DB::select("select * from `opinions` 
                                                 where `etat_opinion` like '0' "); 
            return view('admin.opinionadmin', ['listop' => $listC]);
        }
        public function affichemessage(){
            $listC = DB::select("select * from `contacts`"); 
            return view('admin.contactadmin', ['listcont' => $listC]);
        }


        public function approuveravis(Request $request , $id_opinion){
                DB::table('opinions')
                        ->where('id_opinion', $id_opinion)
                        ->update(['etat_opinion' => 1]);

            session()->flash('success','Cet avis a été approuvé !' );
            return redirect('/listavis');   
        }

        public function afficheopinion1(){
            $listAC = DB::select("select * from `opinions` 
                                                 where `etat_opinion` like '1' "); 
            return view('accessoire.affichageavis', ['listavis' => $listAC]);
            
        }

        public function affichedemandeaccessoire(){
            $listAC = DB::select("select * from `daccessoires`"); 
            return view('admin.listdemandeaccessoire', ['listaccessoires' => $listAC]);
            
        }
        
        
        

}