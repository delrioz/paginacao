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
// conex routes



Route::get('/iframe', function (){

        return view ('iframeInicial');

});





// Rotas para o contato

Route::get('contato', 'ContatoController@index');
Route::post('contato', 'ContatoController@enviaEmail');




/** teste */


Route::get('/', function () {

        return view ('welcome');
});


Route::post('upload','UploadController@upload');


Route::get('/multiUpload', function(){

        return view ('multiUpload');

});



Route::get('/sobre', function () {

        return view ('sobre');
});




Route::get('/index', function () {


    $anuncios = App\Anuncio::paginate(3);
    //   $anuncios = Anuncio::paginate($this->totalPage);
    return view('index', compact('anuncios'));


});


   Route::get('/registertesteanunciante', function () {

        return view('auth.registertesteanunciante');

});


Route::get('/sidebar', function () {

          return view('layouts.sidebaradmin');

});



// --------------------PAINEL ADMINISTRADOR VENDEDORES ------------------------------

Route::group(['middleware' => 'auth:web'], function () {

Route::get('/painelvendedor', function () {
    return view('paineladministrador.indexpainel');
})->name('paineladmvendedor');








Route::get('/paineladministrador', function () {
    return view('paineladministrador.indexpainel');
});


Route::get('/Userlogout', 'Admin\UserController@Userlogout');

Route::resource('/meuservicos', 'ControladorMeusServicos' ); //index dos servicos
Route::get('/meuservicos', 'ControladorMeusServicos@index' )->name('servicosindex');
Route::get('/meuservicos/editar/{id}', 'ControladorMeusServicos@edit');
Route::post('/meuservicos/{id}', 'ControladorMeusServicos@update');
Route::get('/meuservicos/apagar/{id}', 'ControladorMeusServicos@destroy');
Route::get('/meuservicosPainel', 'ControladorMeusServicos@chamarPainel');
Route::get('/meusfeedbackspainel', 'ControladorMeusServicos@indexMeusFeedbacks');
Route::get('/anuncios/feed/{id}', 'ControladorMeusServicos@VerPostagens');


/*relatorios*/
Route::get('/myviews', 'ControladorMeusServicos@myviews');
Route::get('/anunciosemalta', 'ControladorMeusServicos@anunciosemalta');
Route::get('/catsemalta', 'ControladorMeusServicos@catsemalta');
Route::get('/acessos','ControladorMeusServicos@acessos');


/*fim dos relatorios*/


// Route::get('/meuservicos/newpost','ControladorMeusServicos@newpost');
Route::get('/cadastrarservico', function () {

        $categoria = App\Categoria::all();
        return view('paineladministrador.anunciarpostspainel', compact('categoria'));

});

Route::get('/Newcadastrarservico', function () {

        $categoria = App\Categoria::all();
        return view('paineladministrador.Newcreatepainelanuncio', compact('categoria'));

});

// --------------------END_OF_PAINEL VENDEDORES ---------------------------------------

// /** pagina inicial anuncios vendedores */
//  Route::get('/index', 'ControladorAnuncio@index');
Route::get('/index', 'ControladorAnuncioVendedor@index')->name('index');
Route::get('/index', 'ControladorAnuncioVendedor@index')->name('indexvendedores');



/**  MEU PERFIL VENDEDOR E ATUALIZAR MEU PERFIL */
Route::post('atualizar-perfil', 'Admin\UserController@profileUpdate')->name('profile.update')->middleware('auth');
Route::get('meu-perfil', 'Admin\UserController@profile')->name('profile')->middleware('auth');



Route::get('/teste/anunciante/{id}', 'ControladorAnuncio@whoanuncia');
Route::get('perfilvendedor', 'Admin\UserController@profilevendedor')->name('perfil.update');
Route::post('perfilvendedor','Admin\UserController@atualizarprofilevendedor')->name('perfil.saveupdate');

//-------------------------END OF MEU PERIFIL VENDEDOR -----------------------------------------


/** BAIXAR PDF  */


/* -------------------------------------anuncios vendedores  ------------------------------*/

Route::get('/anuncios', 'ControladorAnuncioVendedor@index');
Route::get('/anuncios/{id}', 'ControladorAnuncioVendedor@edit')->middleware('acessosAnuncios');
Route::post('/anuncios/avaliar', 'ControladorAnuncioVendedor@avaliar');
Route::get('/portifolio/{id}', 'ControladorAnuncioVendedor@whoanuncia');
Route::get('/contatos/{id}', 'ControladorAnuncioVendedor@whoanunciacontacts');
Route::get('/listarcategorias', 'ControladorAnuncioVendedor@listarcategorias');
Route::post('/listarcategorias/enviar', 'ControladorAnuncioVendedor@enviarcategoriasugerida');
Route::get('/listarcategorias', 'ControladorAnuncioVendedor@listarcategorias')->name('cats');

Route::post('/vendedoresAnuncios/filtragem', 'ControladorAnuncioVendedor@filtragem'); // busca por titulo

Route::post('/vendedoresAnuncios/filtragemPainel', 'ControladorAnuncioVendedor@filtragem'); // busca NO PAINEL DE BUSCAS


Route::any('/VendedorAnuncios/search', 'ControladorAnuncioVendedor@search'); // busca por titulo


Route::get('todosanunciosvend','ControladorAnuncioVendedor@indextodosanunciosvendedor')
                                ->middleware('searchClientes');


Route::any('/todosanunciosvend-search', 'ControladorAnuncioVendedor@filtragem2')->name('anunciosvend-search')
                                        ->middleware('searchClientes');



// categoria

Route::get('/categoria/{name}', 'ControladorAnuncioVendedor@categoria')->middleware('catsrequisitadas');





// Route::get('/listarcategorias', function () {

//           return view('listarcategorias');

// });





});

//  ----------------------------------END OF----------------------------------------


Auth::routes();



Route::group(['middleware' => 'web'], function () {
      Route::group(['middleware' => 'auth:admin'], function () {
      Route::get('/admin',  'AdminController@index')->middleware();
      });
      Route::get('/admin/login', 'AdminController@login')->name('loginadmin');
      Route::post('/admin/login', 'AdminController@postLogin')->name('2');
      Route::get('/admin/logout', 'AdminController@logout');
      });//
      
      Route::get('/admindashboard', 'AdminController@indexadmin');
    //   Route::get('home2', 'Auth\AdminLoginController@index');



        // é daqui

        Route::get('/admin', 'AdminController@indexadmin')->name('admin.dashboard');

        Route::get('/admin', 'AdminController@indexadmin')->name('admin.dashboard');

        Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');

        Route::post('/admin/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');

        Route::get('/homeAdmin', 'AdminController@indexadmin')->name('homeAdmin');




        Route::get('/admin/acessarclientes', 'AdminController@acessarclientes')->name('admin.acessar.clientes');

        Route::get('/admin/acessarvendedores', 'AdminController@acessarvendedores')->name('admin.acessar.vendedores');

        Route::get('/admin/acessartemassugeridos', 'AdminController@acessartemassugeridos')->name('admin.acessar.temassugeridos');

        Route::get('/admin/navegando', 'AdminController@navegando')->name('admin.acessar.anuncios');

        // deletando , editando CLIENTES

        Route::get('/admin/acessarclientes/apagar/{id}', 'AdminController@destroyclientes');

        Route::get('/admin/acessarclientes/editar/{id}', 'AdminController@editclientes');

        Route::post('/admin/acessarclientesviaadmin/salvar/{id}', 'AdminController@updateclientes');

        Route::post('/admin/acessarclientes/criar', 'AdminController@storeclientes');

        // deletando , editando CLIENTES

        Route::get('/admin/acessaranunciantes/apagar/{id}', 'AdminController@destroyanunciantes');


        // Route::post('/admin/acessarclientes/salvar/{id}', 'AdminController@updateclientes');

        Route::get('/admin/acessaranunciantes/novoanunciante', 'AdminController@novoanunciante');

        Route::post('/admin/acessaranunciantes/criar', 'AdminController@storeanunciantes');

        Route::get('/admin/acessaranunciantes/visualizar/{id}', 'AdminController@visualizaranunciantes');


        Route::post('/admin/acessaranunciantesviaadmin/salvar/{id}', 'AdminController@updateanunciantes');





        Route::get('/admin/acessaranunciantes/cadastrar/{id}', 'AdminController@cadastraranunciantes')->name('anuncianteprofile');



                /** BAIXAR PDF  */

        Route::get('/Cdownload/{file_name}','ClienteController@download');



        /** anuncios */

        Route::get('/admin/acessaranuncios/apagar/{id}', 'AdminController@destroyanuncios');

        Route::get('/admin/acessaranuncios/editar/{id}', 'AdminController@editanuncios');

        Route::post('/anuncios/{id}', 'AdminController@update');

        Route::get('/admin/acessaranuncios/new/', 'AdminController@newanuncio');


        Route::post('/admin/acessaranuncios/new/', 'AdminController@store')->name('adminanuncios.store');




         /** sugestoes */


        Route::get(' /admin/acessarsugestoes/apagar/{id}', 'AdminController@destroySugestao');

        Route::get('/admin/acessarsugestoes/visualizar/{id}', 'AdminController@visualizarsugestoes');


//         Route::get('/homeAdmin', function () {

//           return view('homeAdmin')->name('homeAdmin');


//* comandos sobre novos administradores//
        Route::post('/admin/novoadmin/criar', 'AdminController@storeadmin');
        Route::get('/admin/novoadmin/new/', 'AdminController@newadmin');

        Route::get('/admin/novoadmin', 'AdminController@acessaradmin')->name('admin.acessar.admin');
        Route::get('/admin/novoadmin/apagar/{id}', 'AdminController@destroyadmins');

        Route::get('/admin/novoadmin/editar/{id}', 'AdminController@editadmins');

        Route::post('/admin/novoadmin/salvar/{id}', 'AdminController@updateadmins');



        /* comandos sobre categorias */

        Route::get('/admin/categorias', 'AdminController@acessarcats')->name('admin.acessar.cats');

        Route::get('/admin/categorias/apagar/{id}', 'AdminController@destroycats');

        Route::get('/admin/categorias/editar/{id}', 'AdminController@editcats');

        Route::post('/admin/categorias/salvar/{id}', 'AdminController@updatecats');

        Route::post('/admin/categorias/criar', 'AdminController@storecats');

        Route::any('/admin/reports', 'AdminController@acessarreports')->name('admin.acessar.reports');

        Route::any('/admin/reports/editar/{id}', 'AdminController@editreports');



        /*relatorio */


        Route::get('/anuntop','AdminController@anuntop');
        Route::get('/anuntopOrderbyAnunciantes','AdminController@anunciantesOrderBy');
        Route::get('/oqusuariosprocuram', 'AdminController@oqusuariosprocuram');
        Route::get('/Ngerais','AdminController@Ngerais');
        Route::get('/qtMei','AdminController@qtMei');
        Route::get('/Pregiao','AdminController@Pregiao');
        Route::any('/Pregiao-search','AdminController@PregiaoSearch')->name('Pregiao-search');



        // Route::any('/todosanunciosvend-search', 'ControladorAnuncioVendedor@filtragem2')->name('anunciosvend-search')
        //                                         ->middleware('searchClientes');



// });
// =============================================end of admin ======================



/*ver qnts cadstrados tem*/


Route::get('/admin/qtsCadastrados', 'AdminController@qtsCadastrados');







//------------------------------------ CLIENTES -----------------------------------------------------



// index que é redirecionado e página de login
Route::get('/cliente', 'ClienteController@index')->name('cliente.dashboard'); //index

Route::get('/cliente/login', 'Auth\ClienteLoginController@index')->name('cliente.login');

Route::post('/cliente/login', 'Auth\ClienteLoginController@login')->name('cliente.login.submit');

// Route::get('/cliente/cadastrandocli', 'Auth\ClienteLoginController@cadastrandocli')->name('cliente.cadastrandocli');



     Route::get('/cliente/cadastrandocli', function () {

          return view('cliente.login.cadastroclientes');

});


/* Index dos anuncios - clientes e buscas/ filtragens*/
Route::get('todosanuncioscli','ClienteController@indextodosanuncioscliente');

Route::any('/todosanuncioscli-search', 'ClienteController@filtragem2cli')->name('anuncioscli-search');

Route::any('/todosanuncioscli-search', 'ClienteController@filtragem2cli')->name('anuncioscli-search')
                                        ->middleware('searchClientes');



Route::get('/clienteAnuncios/searchAny', 'ClienteController@filtragem3cli'); // busca por titulo
Route::any('/clienteAnuncios/searchAny', 'ClienteController@search'); // busca por titulo



// Route::get('todosanunciosvend','ControladorAnuncioVendedor@indextodosanunciosvendedor');
// Route::any('/todosanunciosvend-search', 'ControladorAnuncioVendedor@filtragem2')->name('anunciosvend-search');







Route::get('/listarcategoriascli', 'ClienteController@listarcategoriascli');

// categoria

Route::get('/categoriacli/{name}', 'ClienteController@categoria')->middleware('catsrequisitadas');

//sugerindo categoria
Route::post('/listarcategoriascli/enviar', 'ClienteController@enviarcategoriasugerida');
Route::get('/listarcategoriascli', 'ClienteController@listarcategoriascli')->name('catscli');




/** nao sei ainda */
Route::any('/clienteAnuncios/search', 'ClienteController@search'); // busca por titulo





Route::post('/clienteAnuncios/filtragem', 'ClienteController@filtragem'); // busca por titulo



/** */



// portifolio e mais informacoes
Route::get('/Canuncios/{id}', 'ClienteController@edit') ->middleware('acessosAnuncios'); // area sobre anuncio
Route::post('/Canuncios/avaliar', 'ClienteController@avaliar'); // avaliar
Route::get('/Cportifolio/{id}', 'ClienteController@whoanuncia'); // area portifolio
Route::get('/Ccontatos/{id}', 'ClienteController@whoanunciacontacts') // area contatos
                        ->middleware('contatos');

Route::post('/contactarAnunciante', 'ClienteController@contactarAnunciante');

Route::get('/Canuncios2/{id}', 'ClienteController@acessar'); // area sobre anuncio




/** painel-administrador */


Route::get('/Cpaineladministrador', 'ControladorMinhasAtividades@index')->name('clientepainel'); // area do painel
Route::get('/Cmeuscomentarios', 'ControladorMinhasAtividades@meuscomentarios');// area meus coment
Route::get('/Canuncios/feed/{id}', 'ControladorMinhasAtividades@VerPostagens'); // ver post comentado

Route::get('/Canuncio/feed/{id}', 'ControladorMinhasAtividades@VerPostagens'); // ver post comentado



Route::get('/CComentarios/apagar/{id}', 'ControladorMinhasAtividades@destroy');// deletar comentario
Route::get('/CComentarios/editar/{id}', 'ControladorMinhasAtividades@edit');// form p editar coment
Route::post('/Comentariosupdate/{id}', 'ControladorMinhasAtividades@update');// editar comentario






/**meu perfil e atualizando meu perfil */
Route::post('atualizar-perfilCliente', 'Admin\ClienteController@profileUpdate')->name('Clienteprofile.update');
Route::get('meu-perfilCliente', 'Admin\ClienteController@profile')->name('cliente');




/*chamar painel diretamente dos serviços avaliados*/

Route::get('/Canuncios/feed/{id}', 'Admin\ClienteController@VerPostagens');



///



// criando usuário

//routes temporarias

Route::post('inserir_cliente', 'Admin\ClienteController@InserirCliente')->name('inserir_cliente');


//------------------------------------ END_OF_CLIENTES -----------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







// comum

Route::get('/reportar', function(){

  return view('report');


})->name('report');


Route::post('/report-enviar', 'commandpublic@report');






Route::get('/reportar-anunc', function(){

  return view('paineladministrador.reportar-anunc');

})->name('reportar-anunc');



Route::post('/reportanunc-enviar', 'commandpublic@reportAnunc');

