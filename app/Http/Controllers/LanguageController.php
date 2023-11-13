<?php

// app/Http/Controllers/LanguageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        // Récupérez la langue à partir de la requête (à personnaliser selon votre configuration)
        $lang = $request->input('lang');

        // Définissez la nouvelle langue dans la session ou ailleurs selon votre configuration
        session(['locale' => $lang]);

        // Vous pouvez également enregistrer la langue dans la base de données si nécessaire

        // Retournez une réponse, par exemple, une réponse JSON indiquant que le changement de langue a réussi
        return response()->json(['success' => true]);
    }
}

