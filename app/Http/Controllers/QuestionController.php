<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function jouer()
    {
        $questions = Question::all()->random(5);
         // dd($questions);
        return view('questions/jouer', ['questions' => $questions]);
    }

    public function contribuer()
    {
        $question = new Question();
        return view('questions/contribuer', ["question" => $question]);
    }

    public function recuperer_tout()
    {
        $questions = Question::get();
        return view('questions/affichage', ["questions" => $questions]);
    }

    public function recuperer_question($id)
    {
        if($id != null)
        {
            $question = Question::find($id);
            return view('questions/affichage', ["question" => $question]);
        }
    }

    public function editer($id)
    {
        if($id != null)
        {
            $question = Question::find($id);

            if($question == null) 
            {
                $errorMsg = "<h1>Cet id n'existe pas ! Voulez vous <a href=\"{{ route('questions.contribuer') }}\">ajouter des questions ?</a> ou <a href=\"{{ route('questions.jouer') }}\">jouer à notre quiz ?</a></h1>";
                return view('questions/error', ["errorMsg" => $errorMsg]);
            }
            else
            {
                return view('questions/contribuer', ["question" => $question]);
            }
        }
    }

    public function supprimer($id)
    {
        if($id != null)
        {
            $question = Question::find($id);

            if($question == null) 
            {
                $errorMsg = "<h1>Cet id n'existe pas ! Voulez vous <a href=\"{{ route('questions.contribuer') }}\">ajouter des questions ?</a> ou <a href=\"{{ route('questions.jouer') }}\">jouer à notre quiz ?</a></h1>";
                return view('questions/error', ["errorMsg" => $errorMsg]);
            }
            else
            {
                Question::destroy($id);
                return redirect('/questions/affichage');
            }
        }
    }

    public function valider($id)
    {
        if($id != null)
        {
            $question = Question::find($id);

            if($question == null) 
            {
                $errorMsg = "<h1>Cet id n'existe pas ! Voulez vous <a href=\"{{ route('questions.contribuer') }}\">ajouter des questions ?</a> ou <a href=\"{{ route('questions.jouer') }}\">jouer à notre quiz ?</a></h1>";
                return view('questions/error', ["errorMsg" => $errorMsg]);
            }
            else
            {
                if($question->validee == true)
                    $question->validee = false;
                else
                    $question->validee = true;

                $question->save();
                return redirect('/questions/affichage');
            }
        }
    }

    public function resultats()
    {
        $reponsesDonnees = [ 
            [
                "idQuestion" => 5,
                "reponsesDonnee" => 'C'
            ],
            [
                "idQuestion" => 6,
                "reponsesDonnee" => 'C'
            ],
            [
                "idQuestion" => 7,
                "reponsesDonnee" => 'C'
            ],
            [
                "idQuestion" => 8,
                "reponsesDonnee" => 'C'
            ],
            [
                "idQuestion" => 9,
                "reponsesDonnee" => 'C'
            ]
        ];

        // echo "<pre>" . var_dump($reponsesDonnees) . "</pre>";

        $nombreDeBonnesReponses = 0;

        $questions = Question::whereIn('id', [$reponsesDonnees[0]["idQuestion"], $reponsesDonnees[1]["idQuestion"], $reponsesDonnees[2]["idQuestion"]])->get();
        
        $compteurQuestions = 0;
        foreach ($questions as $question)
        {
            if($question->bonne_reponse == $reponsesDonnees[$compteurQuestions]["reponsesDonnee"])
                $nombreDeBonnesReponses++;

            $compteurQuestions++;
        }

        echo "<h1>Vous avez un total de $nombreDeBonnesReponses bonnes réponses !</h1>";
    }

    public function ajouter(Request $request)
    {
        if($request->id == null)
        {
            $question = new Question();

            $question->intitule = $request->intitule;
            $question->reponse_a = $request->reponse_a;
            $question->reponse_b = $request->reponse_b;
            $question->reponse_c = $request->reponse_c;
            $question->reponse_d = $request->reponse_d;
            $question->bonne_reponse = $request->bonne_reponse;
            $question->explication = $request->explication;
            $question->validee = false;
            
            $question->save();
        }
        //dd($request);
        else
        {
            $question = Question::where('id', $request->id);

            $question->update([
                'id' => $request->id,
                'intitule' => $request->intitule,
                'reponse_a' => $request->reponse_a,
                'reponse_b' => $request->reponse_b,
                'reponse_c' => $request->reponse_c,
                'reponse_d' => $request->reponse_d,
                'bonne_reponse' => $request->bonne_reponse,
                'explication' => $request->explication
            ]);
        }

        return redirect('/questions/affichage');
    }
}
