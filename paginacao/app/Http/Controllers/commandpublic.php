<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commandpublic extends Controller
{
      public function report(Request $request)
      {

        // REPORTE DOS CLIENTES


        //   $anunciantes = User::paginate(10);

             $data =  $request->except('_token','password_confirmation');

            // YourModel:: forceCreate($request->all());

            $reports = \App\report::forceCreate($data);



            if($reports)
            return redirect()
                     ->route('report')
                     ->with('success', 'Seu reporte foi enviado com sucesso, em breve responderemos em seu e-mail !');

            return redirect()
                     ->back()
                     ->with('error', 'Falha ao reportar ao findeela. Tente novamente mais tarde...');



      }


      public function reportAnunc(Request $request)
      {

  /// Reporte dos anunciantes        

        //   $anunciantes = User::paginate(10);

             $data =  $request->except('_token','password_confirmation');

            // YourModel:: forceCreate($request->all());

            $reports = \App\report::forceCreate($data);



            if($reports)
            return redirect()
                     ->route('reportar-anunc')
                     ->with('success', 'Seu reporte foi enviada com sucesso, em breve responderemos em seu e-mail !');

            return redirect()
                     ->back()
                     ->with('error', 'Falha ao reportar ao findeela. Tente novamente mais tarde...');



      }


}
