<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
$cocktails = array(
    array(
        "nome" => "Margarita",
        "ingredienti" => array(
            "Tequila",
            "Triple Sec",
            "Succo di lime",
            "Sale",
            "Ghiaccio"
        ),
        "decorazione" => "Fetta di lime e sale sul bordo del bicchiere",
        "preparazione" => "Bagnare il bordo del bicchiere con una fetta di lime, quindi rivestire con il sale. Agitare la tequila, il Triple Sec e il succo di lime con ghiaccio, filtrare nel bicchiere e decorare con una fetta di lime."
    ),
    array(
        "nome" => "Negroni",
        "ingredienti" => array(
            "Gin",
            "Vermouth rosso",
            "Bitter",
            "Ghiaccio"
        ),
        "decorazione" => "Fetta d'arancia",
        "preparazione" => "Mescolare il gin, il vermouth rosso e il bitter con ghiaccio, filtrare in un bicchiere basso con cubetti di ghiaccio e decorare con una fetta d'arancia."
    ),
    array(
        "nome" => "Piña Colada",
        "ingredienti" => array(
            "Rum bianco",
            "Cocco cremoso",
            "Succo d'ananas",
            "Ghiaccio"
        ),
        "decorazione" => "Fetta di ananas e ciliegina",
        "preparazione" => "Agitare il rum, il cocco cremoso e il succo d'ananas con ghiaccio, filtrare in un bicchiere alto con cubetti di ghiaccio e decorare con una fetta di ananas e una ciliegina."
    ),
    array(
        "nome" => "Bloody Mary",
        "ingredienti" => array(
            "Vodka",
            "Succo di pomodoro",
            "Succo di limone",
            "Salsa Worcestershire",
            "Tabasco",
            "Sale e pepe",
            "Ghiaccio"
        ),
        "decorazione" => "Fetta di limone e gambo di sedano",
        "preparazione" => "Agitare tutti gli ingredienti con ghiaccio, filtrare in un bicchiere alto con cubetti di ghiaccio e decorare con una fetta di limone e un gambo di sedano."
    ),
    array(
        "nome" => "Daiquiri",
        "ingredienti" => array(
            "Rum bianco",
            "Sciroppo di zucchero",
            "Succo di lime",
            "Ghiaccio"
        ),
        "decorazione" => "Fetta di lime",
        "preparazione" => "Agitare il rum, lo sciroppo di zucchero e il succo di lime con ghiaccio, filtrare in una coppetta da cocktail ghiacciata e decorare con una fetta di lime."
    )
);
    }
}
