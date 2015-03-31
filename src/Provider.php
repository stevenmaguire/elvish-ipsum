<?php namespace Stevenmaguire\ElvishIpsum;

use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider
{

    /**
     * Register the form builder instance.
     *
     * @return void
     */
    public function register()
    {
        $words = $this->getWords();
        $this->app->bind('Stevenmaguire\ElvishIpsum\GenerateInterface', function() use ($words)
        {
            return new Generator($words);
        });
    }

    /**
     * Get list of elvish words
     *
     * @return array
     */
    private function getWords()
    {
        return array(
            "Aaye, Aiya", "Adan", "Aelin", "Adanedhel", "Aduial", "Aglarond", "Aha", "Ai",
            "Aina", "Ainu", "Aiglos", "Alda", "Aldalómë", "Alqua", "Amandil", "Amarth",
            "Ambarona", "Amon", "Ampa", "An", "Anarya", "Anca", "And", "Ando", "Andúril",
            "Andúnë", "Anga", "Ann-thannath", "Anna", "Anod", "Anto", "Arda", "Áre", "Asca",
            "Atan, Atani", "Avari", "Áze", "Balrog", "Band", "Bar", "Barad", "Beleg",
            "Bragol", "Bregalad", "Brethil", "Brith", "Calen", "Calma", "Carca", "Celeb",
            "Certar", "Certhas", "Cirth", "Coirë", "Coranar", "Cormallen", "Cormarë",
            "Coron", "Craban, Crebain", "Cú", "Cuivie", "Dae", "Dagor", "Daro", "Del",
            "Din", "Dina", "Dol", "Dôr", "Draug", "Drego", "Dú", "Duin", "Dúnadan, Dúnedain",
            "Dûr", "Ëar", "Echor", "Echuir", "Edain", "Edhel", "Edro", "Eithel",
            "Êl, Elin, Elenath", "Eldar", "Eldarin", "Elear", "Elen, Eleni, Elenion",
            "Elenya", "Emyn", "Endari", "Endóre", "Ennor", "Enquië, Enquier", "Enyd",
            "Er", "Ered", "Ereg", "Eryn", "Esgal", "Esse", "Estel", "Estellio", "Ethuil",
            "Falas", "Faroth", "Faug", "Fëa", "Fin", "Firith", "Formen", "Forn", "Fuin",
            "Gurth", "Gaur", "Gwador", "Luin", "Laer", "Mellon", "Minas", "Mithrin",
            "Namáriëor Navaer", "Nan", "Ndengina", "Nikerym", "Nimrais", "Numen",
            "Naugrim", "Onodrim", "Orodruin", "Parma", "Pelargir", "Quendi", "Quel re",
            "Silme", "Tengwa", "Tinco", "tuilë", "thalias", "Thalin", "Tar", "Úlairi",
            "Ulaer", "Urulóki"
        );
    }
}
