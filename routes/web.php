

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('fixbus.1');
});
Route::get('/2', function () {
    return view('fixbus.2');
});

Route::get('/dyali', function () {
    return view('layouts.dyali');
});

Route::group(['middleware' => ['auth' , 'admin']], function () {
    Route::get('/dash', function () {
        return view('admin.dashbord');
    })->name('dash');
});

/*************************Coté clieeeeeeeeeeeeeeeeeeeeeeeeent */


/******************************Fin coté client ********************************** */



/******************************** */
Route::get('/ajoutdemande', function () {
    return view('accessoire.test');
});
Route::post('test', 'AppController@test'); //store accessoire
//Route::get('/test', 'AppController@afficheaccessoire'); //Accessoire


/************************************* */
/* paaaaaaaaaaaage d'accueil ******************/ 

Route::get('/services', function () {
    return view('accessoire.services');
});

/************************************************ */
//
Route::get('/biz', function () {
    return view('layouts.biz')->name('layout_principale');
});

//Foooooooooooooter
Route::get('/footer', function () {
    return view('layouts.footer');
});

Route::get('/ava', function () {
    return view('layouts.achraf');
});


Route::get('/details', function () {
    return view('accessoire.details');
});





//lay
Route::get('/lay', function () {
    return view('layouts.lay'); 
});

Route::get('/4', function () {
    return view('fixbus.500'); 
});
Route::get('/5', function () {
    return view('fixbus.datetime'); 
});

Route::get('reparation/accessoire', function () {
    return view('reparation.formaccessoire'); 
});

Route::get('reparation/success', function () {
    return view('reparation.success'); 
});

Route::get('accessoire/{id}/details', 'AppController@affichedetailsacc'); //afficher les types de réparation


Route::get('reparation/rep', 'AppController@affichegenre'); //soit tablette or telephone

Route::get('reparation/{genre}/marque', 'AppController@affichemarque'); //afficher les marques 

Route::get('reparation/{genre}/{marque}/type', 'AppController@affichetype'); //afficher les types 

Route::get('reparation/{genre}/{marque}/{type}/typerep', 'AppController@affichetyperep'); //afficher les types de réparation

//Route::get('reparation/{genre}/{marque}/{type}/formrep', 'AppController@formrep'); //affiche le formulaire

Route::get('reparation/{genre}/{marque}/{type}/{typerep}/prixrep', 'AppController@afficheprix'); //Affichage du prix

Route::get('reparation/{genre}/{marque}/{type}/{typerep}/{prixrep}/infosC', 'AppController@afficheinfos')->name('rout'); //Affichage des infos de client



Route::post('demandeaccessoire', 'AppController@storedemandeaccessoire'); //infos envoyés via le formulaire des accessoires

Route::post('demanderep', 'AppController@store_formreparation'); //infos envoyés via le formulaire

Route::post('addreparationall', 'AppController@addreparation'); //infos envoyés via le formulaire de réparation


/* ***************** EssaaaaaaaaaaaaaaaaaaaY */ 
Route::post('addrep', 'AppController@addrep'); //infos envoyés via le formulaire
//affiche le formulaire
Route::get('reparation/{genre}/{marque}/{type}/formrep', 'AppController@formrep'); //affiche le formulaire
/* *****************  */ 



/***********************************espace client */
Route::get('/contact', 'AppController@formcontact'); //Affichage le formilaire de contact

Route::post('addcontact', 'AppController@storecontact'); //infos envoyés via le formulaire



/*********************************Fin espaaace clieeent  */



Route::get('/store', 'AppController@afficheaccessoire'); //Les accessoires

Route::get('reparation/qui_nous', 'AppController@affichegroup'); 


/* ********************** Partie Administration ********************************/
Route::get('admin/dash', 'AppController@showdash');  //DashBord admin 
Route::get('reparation/ajoutm', 'AppController@ajoutmobile'); //Création d'un nouveau mobile par l'admin
Route::post('addmobile', 'AppController@store'); //store d'ajout de mobile

 /* ********************* Accessoire ****************************/
//Création d'un nouveau accesoire par l'admin
Route::get('/ajoutaccessoire', function () {
    return view('admin.ajoutaccess');
}); 
Route::post('addaccessoire', 'AppController@storeaccessoire'); //store accessoire
Route::get('/accessoire', 'AppController@afficheaccessoire'); //Accessoire
/* ***************************************************************/


/* ******************* Avis *********************************** */
Route::get('/ajoutop', function () {
    return view('client.ajoutop');
});
Route::post('addop', 'AppController@storeop'); //store Avis

/* *************************************************************** */
/* ******************* Reclamation *********************************** */
Route::get('/reclamation', function () {
    return view('client.reclamation');
});
Route::post('addreclamation', 'AppController@addreclam'); //store Avis

/* *************************************************************** */


//Layouts de dashboard
Route::get('/admin', function () {
    return view('layouts.administration');
});

Route::get('/fixbus', function () {
    return view('layouts.fixbus');
});
Route::get('/navbarr', function () {
    return view('layouts.navbarwith');
});


Route::get('/user', function () {
    return view('admin.user');
});

Route::get('/demandeaccess', function () {
    return view('client.demandeaccessoire');
});


Route::get('/notif', 'AppController@affichenotif');  //notifications dashboard


Route::get('reparation/{cin}/client', 'AppController@details');


Route::get('/ajouttyperep', 'AppController@getmarquetype');
Route::post('addrep', 'AppController@storereparation'); //store reparation



/* Axios 
Route::get('/getDetails', 'AppController@getdetails');**/


/* Cottttttttté admin **************/
Route::get('/listreclamation', 'AppController@affichereclamation');
Route::get('/listavis', 'AppController@afficheopinion');
Route::get('/listcontact', 'AppController@affichemessage');

Route::put('approuver/{id}', 'AppController@approuveravis');

//les avis
//Route::get('/listavis1', 'AppController@afficheopinion1');

Route::get('/allavis', 'AppController@afficheopinion1');

Route::get('/demandeaccessoire', 'AppController@affichedemandeaccessoire');





