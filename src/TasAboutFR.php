<?php

namespace App;

class TasAboutFR extends TasAbout
{
    protected function front(): void
    {
        $this->AddPage();

        $y = self::Y_TITLE;
        $this->title('TAS About', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->sentence('Documentation à propos des Speedruns & Tool-Assisted Speedruns', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->sentence('Par Full Moon Issue', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->sentence('<Link hrefId="cover_fmiGithub" content="GitHub" /> - <Link hrefId="cover_fmiYoutube" content="Youtube" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function menu(): void
    {
        $this->AddPage();

        $y = self::Y_TITLE;
        $this->title('Menu', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->list('- (Tool-Assisted) Speedrun', $y, self::X_LEFT, $this->setupLink(4));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Définition', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(5));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Catégorie', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(7));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Chronomètre', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(9));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Émulateur BizHawk', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(11));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Annexes', $y, self::X_LEFT, $this->setupLink(13));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Vocabulaire', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(14));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- LiveSplit', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(16));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Ressources', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(18));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Évènements', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(20));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Autres types de Tool-Assisted', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(22));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Informations diverses', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(24));

        // Right

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->list('- Techniques', $y, self::X_RIGHT, $this->setupLink(26));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Glitch / Glitch Hunting', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(28));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Langue du jeu', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(30));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Menuing', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(32));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Routing / Route Planning', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(34));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Réduction des lags', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(36));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Sequence Break / Skip', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(38));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Damage Boost / Take damage to save time', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(40));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Death Warp / Death Abuse', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(42));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Pause Buffering', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(44));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Out of Bounds', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(46));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Manipulation de la chance', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(48));
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- Arbitrary Code Execution', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $this->setupLink(50));
    }

    protected function coverSpeedrun(): void
    {
        $this->AddPage();
        $this->cover('(Tool-Assisted) Speedrun');
    }

    protected function pageDefinition(): void
    {
        $this->AddPage();

        $this->title('Définition', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Speedrun et TAS', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Rechercher à réaliser le meilleur temps pour finir', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('un jeu est la discipline du speedrunning.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Un speedrun s\'effectue "en live" sur une console', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('ou sur un ordinateur alors qu\'un TAS s\'effectue sur', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('un ordinateur avec :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- un <Link hrefId="definition_bizhawkGithub" content="émulateur" /> pour les jeux sur console', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- un <Link hrefId="definition_libtasGithub" content="logiciel" /> pour les jeux sur ordinateur', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Un TAS est représenté par <Link hrefId="definition_bizhawkInputLog" content="un fichier" /> listant les', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('inputs (touches) appuyés à telle frame (image).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Le jeu <Link hrefId="definition_botsAreStupid" content="Bots Are Stupid" /> amène une idée de cette', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('représentation d\'un TAS.', $y, self::X_LEFT);

        // Right

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('En complément (Speedrun)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="definition_introductionSpeedrun" content="Introduction au Speedrun" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="definition_entretienAvecYannChauviere" content="Entretien avec Yann Chauvière de Speedgame" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="definition_historySpeedrunning" content="L\'histoire passionnante du Speedrunning" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="definition_whatIsSpeedrunning" content="What is Speedrunning?" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="definition_howToStartSpeedrunning" content="How To Start Speedrunning" />', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('En complément (TAS)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="definition_conferenceTas" content="Conférence sur le Tool-Assisted Speedrun" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="definition_howToTAS" content="Comment réaliser un TAS" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="definition_tasExplained" content="Introduction to TAS" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="definition_introductionTas" content="Tool-assisted speedrunning explained" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageCategory(): void
    {
        $this->AddPage();

        $this->title('Catégorie', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Critères amenant à différentes catégories', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Pourcentage de jeu réalisé', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_low" content="Low%" /> (prendre le moins d\'items possible)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_any" content="Any%" /> (catégorie par défaut, se rendre à la fin)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_100" content="100%" /> (réaliser tous les objectifs d\'un jeu)', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Utilisation de glitchs / bugs', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_glitchless" content="Glitchless" /> (liste réduite de glitchs autorisés)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_nmg" content="NMG" /> (No Major Glitch)', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Autres', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_dlc" content="DLC" /> / <Link hrefId="category_romHack" content="Rom Hack" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_gameVersion" content="Version du jeu" /> / <Link hrefId="category_patch" content="Patch (Correctif) appliqué" />', $y, self::X_LEFT);

        // Right
        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Extensions de catégorie', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('La communauté autour d\'un jeu peut proposer', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('des catégories supplémentaires.', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_rbo" content="RBO" /> (Reverse Boss Order, battre les boss dans', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->list('l\'ordre inverse du jeu)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_damageless" content="Damageless" /> (ne prendre aucun coup)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Et bien d\'autres (exemples : <Link hrefId="category_ceCeleste" content="Celeste" />, <Link hrefId="category_ceOutlast" content="Outlast" />)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Encore d\'autres catégories', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Avec <Link hrefId="category_constraints" content="contraintes multiples" /> ou encore :', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_minimumPress" content="Minimum Press" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_maximumScore" content="Maximum Score" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageStopwatch(): void
    {
        $this->AddPage();

        $this->title('Chronomètre', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('En Speedrun', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('RTA (Real Time Attack) est le temps écoulé dans la', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('vie réelle. Une fois l\'accord trouvé par la', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('communauté pour savoir quand démarrer et', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('arrêter le chronomètre, le temps écoulé entre ces', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('deux actions sera le temps du speedrun.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('IGT (In-Game Time) est le temps écoulé mais', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('calculé par le jeu. Il peut comprendre notamment', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('les temps de chargements et le temps passé dans', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('les cinématiques.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Le choix entre RTA et IGT peut se faire :', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- Suivant <Link hrefId="timer_igtVsRta" content="certains éléments de jeu" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Par le biais d\'un <Link hrefId="timer_debate" content="débat" />', $y, self::X_LEFT);

        // Right
        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('En TAS', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Le calcul du temps pour un TAS est plus simple', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('que pour un speedrun car la méthode est', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('toujours la même.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Le chronomètre démarre au moment où le jeu est', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('lancé et s\'arrête lorsque le dernier input est.', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('appuyé.', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageBizHawk(): void
    {
        $this->AddPage();

        $this->title('Émulateur BizHawk', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Présentation', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- Gère plusieurs consoles (PS1, Saturn, GB, ...)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Possède beaucoup d\'outils permettant de', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('TASer les jeux sur console', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Est Console Vérifiée (<Link hrefId="bizhawk_consoleVerified" content="exemples" />)', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->subTitle('Console Vérifiée', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Un moyen de mesurer la précision d\'un émulateur', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('est de rejouer les inputs d\'un TAS sur une console.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Pour certaines consoles (comme la GBA), un TAS', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('réalisé sous BizHawk peut être rejoué sur une', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('vraie GBA ce qui appose un haut degré de', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('précision d\'émulation (<Link hrefId="bizhawk_emulationAccuracy" content="complément" />).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('TASBot est un robot créé pour justement effectuer', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('cette vérification (<Link hrefId="bizhawk_tasbot" content="son histoire" /> : partie <Link hrefId="bizhawk_tasbotHistory1" content="1" />,', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('<Link hrefId="bizhawk_tasbotHistory2" content="2" /> et <Link hrefId="bizhawk_tasbotHistory3" content="3" />).', $y, self::X_LEFT);

        // Right

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Outils disponibles (entre autres)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- Frame Advanced (jouer image par image)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Save State (sauvegarder où l\'on veut)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- RAM Search et RAM Watch (rechercher et', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('observer des valeurs dans la mémoire)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Lua Scripting (lancer un script Lua pour, par', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('exemple, <Link hrefId="bizhawk_luaOsd" content="afficher des informations à l\'écran" />)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('En complément (BizHawk et autres outils)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="bizhawk_bizHawk" content="Page de présentation du projet BizHawk" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="bizhawk_tasBizHawk" content="Réaliser son premier TAS avec BizHawk" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="bizhawk_resourcesBizHawk" content="Quelques ressources autour de BizHawk" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="bizhawk_subRedditEmulation" content="SubReddit à propos de l\'émulation" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="bizhawk_toolsTas" content="Liste des émulateurs / outils pour TASer" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function coverAppendices(): void
    {
        $this->AddPage();

        $this->cover('Annexes');
    }

    protected function pageVocabulary(): void
    {
        $this->AddPage();

        $this->title('Annexe #1 : Vocabulaire', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Jargon', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Quelques mots appartenant au jargon du speedrun sont présents dans ce document (frame, input, run, ...).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('D\'autres termes en relation sont disponibles dans ces quelques liens :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="vocabulary_srTasGlossary" content="Présentation et lexique du Speedrun et TAS" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="vocabulary_dictionarySpeedrun" content="Le dictionnaire du Speedrun" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="vocabulary_frenchWikiSpeedrun" content="Termes récurrents du Speedrun" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="vocabulary_speedrunningGlossary" content="Speedrunning Glossary" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="vocabulary_glossaryTasVideos" content="Glossary - TASVideos" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageLiveSplit(): void
    {
        $this->AddPage();

        $this->title('Annexe #2 : LiveSplit', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Présentation', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('L\'outil majoritairement utilisé par les speedrunners', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('pour chronométrer leurs runs est <Link hrefId="livesplit_github" content="LiveSplit" />.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="livesplit_configureTimer" content="Configurer un Timer de Speedrun" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="livesplit_setUpTimer" content="How to Set Up a Speedrun Timer" />', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Load Remover', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Pour ne pas désavantager les ordinateurs moins', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('puissants lors des runs sur ordinateur, des Load', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('Remover peuvent être programmés afin que les', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('temps de chargements ne soient pas pris en ', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('compte dans le temps de la run.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="livesplit_loadRemover" content="Make Your Own Load Remover" />', $y, self::X_LEFT);

        // Right

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('AutoSplit', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Chaque splits configurés sur LiveSplit sont lancés', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('manuellement durant une run. Il est néanmoins', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('possible de les lancer de manière programmée.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- depuis un jeu sur ordinateur en "écoutant" des', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('adresses mémoire grâce à un <Link hrefId="livesplit_asl" content="fichier ASL" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- <Link hrefId="livesplit_richDiamond" content="Rich Diamond" />', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- <Link hrefId="livesplit_dmc4se" content="Devil May Cry 4 Special Edition" />', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- depuis un jeu console en comparant des', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('images', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- <Link hrefId="livesplit_autoSplit" content="Auto-Split" /> (<Link hrefId="livesplit_autoSplitDemonstration" content="Démonstration" />)', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- <Link hrefId="livesplit_sikuli" content="Sikuli" /> (<Link hrefId="livesplit_sikuliDemonstration" content="Démonstration" />)', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST);

        $this->addLinksPage();
    }

    protected function pageResources(): void
    {
        $this->AddPage();

        $this->title('Annexe #3 : Ressources', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Multiples thématiques (speedrun)', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="links_abyssoft" content="Abyssoft" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_gladJonas" content="GladJonas" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_lowestPercent" content="Lowest Percent" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_subRedditSpeedrun" content="Speedrun SubReddit" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_storster" content="Storster" />', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Émissions autour des TAS', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="links_88malh" content="88 miles à l\'heure" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_inVinoVeritas" content="In Vino VeriTAS" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_speedGame" content="Speed Game" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_taspedia" content="TASpedia" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_toolAssistedPodcastEpisodes" content="Tool-Assisted Podcast Episodes" />', $y, self::X_LEFT);

        // Right

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Speedruns commentés', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="links_ceciEstUnSpeedrun" content="Ceci est un speedrun" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_gamingSpeedDating" content="Gaming Speed Dating" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_hugoDelireLaink" content="Hugo Délire & Laink" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_machOne" content="Mach One" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_speedrunExplained" content="Speedrun explained" />', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('En complément', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="links_devsReactToSpeedruns" content="Devs React to Speedruns" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_broadcastTAS" content="Diffusion en continu de TAS" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_interviewsOfSpeedrunners" content="Interviews de Speedrunners" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_subRedditTas" content="SubReddit (TAS)" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_twitchTasTag" content="Twitch \'TAS\' tag" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageEvents(): void
    {
        $this->AddPage();

        $this->title('Annexe #4 : Évènements', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Speedrun', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="events_asm" content="Australian Speedruns" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_barriereSpeedRunShow" content="Barrière Speed Run Show" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_calithon" content="Calithon" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_esa" content="European Speedrunner Assembly" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_forTheLoveOfGaming" content="For The Love of Gaming" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_agdqSgdq" content="Games Done Quick" /> (<Link hrefId="events_leFrenchRestream" content="French Restream" />)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_gsa" content="Global Speedrun Association" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_rpgLimitBreak" content="RPG Limit Break" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_shotsFired" content="Shots Fired" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_speeDons" content="SpeeDons" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_wasd" content="Warwick\'s Awesome Speedruns & Demos" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_zeldaSpeedRuns" content="ZeldaSpeedRuns" />', $y, self::X_LEFT);

        // Right
        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('TAS', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="events_tasAwards" content="TAS Awards" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_tasBlock" content="TAS Block" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_tasApril" content="TAS soumis le 1er avril" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_tasGiving" content="TASGiving" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageOtherTypes(): void
    {
        $this->AddPage();

        $this->title('Annexe #5 : Autres types de Tool-Assisted', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Tool-Assisted Superplay', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Le divertissement d\'abord, la rapidité ensuite.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- TAS vs TAS (<Link hrefId="ta_ryuVsCloud" content="Ryu vs Cloud" />,', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('<Link hrefId="ta_nessVsYoungLink" content="Ness vs Young Link" />)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Glitchfest (<Link hrefId="ta_mortalKombat3" content="Mortal Kombat 3" />)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ta_taplayaround" content="TAP" /> (Tool-Assisted Playaround)', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Tool-Assisted Playthrough', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Gameplay, dialogues et cinématiques d\'un jeu.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="ta_tafp" content="TAFP" /> (Tool-Assisted Flawless Playthrough)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ta_taw" content="TAW" /> (Tool-Assisted Walkthrough)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ta_tag" content="TAG" /> (Tool-Assisted Gameplay)', $y, self::X_LEFT);

        // Right
        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Tool-Assisted Speedrun, multiples ...', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- ... joueurs (<Link hrefId="ta_tasMultiPlayers2" content="2" />, <Link hrefId="ta_tasMultiPlayers3" content="3" />, <Link hrefId="ta_tasMultiPlayers4" content="4" />, <Link hrefId="ta_tasMultiPlayers5" content="5" />)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- ... jeux (<Link hrefId="ta_pokemonCoopDiploma" content="Pokémon B&R : Coop Diploma" />)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- ... jeux, même inputs appuyés (<Link hrefId="ta_tasSameInputs2" content="2" />, <Link hrefId="ta_tasSameInputs3" content="3" />,', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('<Link hrefId="ta_tasSameInputs4" content="4" />, <Link hrefId="ta_tasSameInputs11" content="11" />)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('LOTAD / Human Theory TAS', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Un <Link hrefId="ta_lotad" content="LOTAD" /> (Low Optimized Tool-Assisted', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('Demonstration) est une version non optimisée', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('d\'un Tool-Assisted Speedrun.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Un <Link hrefId="ta_humanTheoryTas" content="Human Theory TAS" /> est une version réalisable', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('par un humain (non TAS-Only) ayant une très', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('bonne exécution et une bonne chance.', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageSpeedrunVsTAS(): void
    {
        $this->AddPage();

        $this->title('Annexe #6 : Informations diverses', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Différences entre Speedrun et TAS', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- Les catégories <Link hrefId="srTA_blindfolded" content="Blindfolded" /> et <Link hrefId="srTA_oneHanded" content="One Handed" /> n\'existent qu\'en speedrun', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Comme le calcul du temps est différent, <Link hrefId="srTA_srFasterTas" content="un speedrun peut apparaître comme plus rapide qu\'un TAS" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Certaines stratégies risquées ne sont viables qu\'en TAS comme n\'avoir que <Link hrefId="srTA_fewLifePoints" content="très peu de points de vie" />', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Compétitions', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- Les temps des runs sont séparés (<Link hrefId="srTA_speedrunWebsite" content="speedrun.com" /> d\'un côté et <Link hrefId="srTA_tasWebsite" content="tasvideos.org" /> de l\'autre)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Les compétitions sont séparées (exemple : Compétition Super Mario 64, <Link hrefId="srTA_speedrunSM64" content="Speedrun" /> | <Link hrefId="srTA_tasSM64" content="TAS" />)', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Personnes qui speedrun et TAS un même jeu', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="srTA_bluekandy" content="Bluekandy" /> : Mario Golf', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="srTA_crazyGameNerd" content="CrazyGameNerd" /> : F-Zero GX', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="srTA_gymnast86" content="Gymnast86" /> : Twilight Princess', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Développeur de jeu qui speedrun son propre jeu', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="srTA_TomatoPhalanges" content="TomatoPhalanges" /> : Polyphony', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="srTA_ParaLily" content="ParaLily" /> : ParaLily', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="srTA_Walaber" content="Walaber" /> : Pro Gymnast', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageSkills(): void
    {
        $this->AddPage();

        $this->title('Techniques', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->sentence('Voici une liste non exhaustive de techniques utilisées lors des speedruns / TAS qui réduisent plus ou moins', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('considérablement le temps pour finir un jeu.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('À savoir, certaines techniques peuvent être amenées à créer une nouvelle catégorie de speedrun si, par', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('exemple, elle "casse" trop le jeu (comme le <Link hrefId="skills_srm" content="SRM" /> d\'Ocarina of Time).', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageGlitch(): void
    {
        $this->AddPage();

        $this->title('Glitch', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('De manière générale, un glitch (ou bug) est une', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('défaillance dans un jeu.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Cela peut provoquer des dysfonctionnements,', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('des clips (traverser un mur), des skips', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('(outrepasser une partie d\'un niveau), ...', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="glitch_alundraBombGlitch" content="Alundra, Bomb Glitch" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="glitch_twilightPrincessBackInTimeGlitch" content="Twilight Princess, Back in Time Glitch" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="glitch_sonOfGlitch" content="Son of a Glitch" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="glitch_iceberg" content="The Speedrun Skips Iceberg Explained" />', $y, self::X_LEFT);

        // Right

        $this->title('Glitch Hunting', self::Y_TITLE, self::X_RIGHT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('La discipline qui consiste à essayer de trouver des', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('glitchs et pouvoir les exploiter est le Glitch', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('Hunting.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Tester la réaction d\'un jeu lorsque deux', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('évènements se produisent en même temps est un', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('moyen de trouver (ou pas) un potentiel glitch.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="glitchHunting_whoFindsGlitches" content="Who finds the Glitches used in Speedruns?" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="glitchHunting_howGlitchesFound" content="How are speedrun glitches found?" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="glitchHunting_glitchHuntingGamingCoding" content="Speedrunning, Glitch Hunting, Gaming and Coding" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="glitchHunting_speedrunningVideoGamesasAGatewayToScientificEndeavours" content="Video Games as Gateway to Scientific Endeavours" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageLanguage(): void
    {
        $this->AddPage();

        $this->title('Langue du jeu', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Afin d\'être sûr de pouvoir effectuer le meilleur temps sur un jeu, il faut s\'assurer de jouer avec la version', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('localisée du jeu présentant des avantages.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Quelques exemples de langue utilisée suivant le jeu speedrunné :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="language_twilightPrincessAny" content="Twilight Princess Any%" />, en Allemand', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="language_breathOfTheWildAny" content="Breath of the Wild Any%" />, en Français', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="language_superMario6416Stars" content="Super Mario 64, 16 Stars" />, en Japonais', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="language_advantages" content="Why Speedrunners Play on Japanese Releases – Version Differences" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="language_use" content="What Languages Do Speedrunners Use?" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageMenuing(): void
    {
        $this->AddPage();

        $this->title('Menuing', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Le menuing est l\'optimisation de l\'utilisation du menu pendant la run.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('L\'objectif est de réaliser le moins d\'allers-retours dans le menu en effectuant plusieurs actions (si possible)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('lors de chaque passage ainsi que de gérer de manière optimale son inventaire.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="menuing_residentEvil1JillAnyGlitchlessInventoryManagement" content="Resident Evil 1 : Jill Any% Glitchless Inventory Management" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="menuing_agdq2019FinalFantasyXIBlindfoldedMenuing" content="AGDQ 2019: Final Fantasy XI - Blindfolded Menuing" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageRouting(): void
    {
        $this->AddPage();

        $this->title('Routing / Route Planning', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Le chemin à suivre pour réaliser le meilleur temps pour finir un jeu est le Routing (ou Route Planning).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Celui-ci peut évoluer lorsque, par exemple, des nouveaux glitchs ont été trouvés.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Les vidéos "World Record Progression" sont un bon exemple pour visualiser les changements dans le', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('routing de certains jeux.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="routing_speedDocs" content="Speed Docs" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="routing_summoningSalt" content="Summoning Salt" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageLags(): void
    {
        $this->AddPage();

        $this->title('Réduction des lags', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Lorsque beaucoup d\'éléments sont affichés à l\'écran, cela peut provoquer un ralentissement du jeu.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Pour éviter ce ralentissement, quelques moyens peuvent être mis à l\'essai comme tuer plus tôt les ennemis à', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('l\'écran ou bien déplacer la caméra pour ne pas afficher certains éléments du jeu.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="lagReduction_superMetroidLagReductionComparison" content="Super Metroid - Lag Reduction comparison" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="lagReduction_theBestKeptSecretInSM64" content="The Best Kept Secret in SM64 Speedruns" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageSkip(): void
    {
        $this->AddPage();

        $this->title('Sequence Break / Skip', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Un Sequence Break (ou Skip) est un raccourci à ceci près qu\'il n\'était pas prévu par les développeurs.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Quelques vidéos d\'EZScape à propos des plus gros skips dans les speedruns :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="skip_top10BiggestSkipsInSpeedrunning1" content="Top 10 Biggest Skips In Speedrunning #1" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="skip_top10BiggestSkipsInSpeedrunning2" content="Top 10 Biggest Skips In Speedrunning #2" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="skip_top10BiggestSkipsInSpeedrunning3" content="Top 10 Biggest Skips In Speedrunning #3" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageDamageBoost(): void
    {
        $this->AddPage();

        $this->title('Damage Boost / Take damage to save time', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Parfois les ennemis, voire nos propres armes, nous permettent de nous déplacer plus rapidement lorsque', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('l\'on se fait attaquer par ceux-ci (Damage Boost ou D-Boost).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Ainsi, un équilibre sera recherché entre une somme de dégâts pris permettant de gagner du temps et les', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('points de vie restants permettant de ne pas mourir.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('"Take damage to save time" est une famille de techniques où l\'idée est de troquer des points de vie contre', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('du temps gagné dont les Damage Boost en font parti.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Exemples de TAS comportant des D-Boost :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="dBoost_theGoonies2Any" content="The Goonies II, Any%" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="dBoost_superMetroid100" content="Super Metroid, 100%" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageDeath(): void
    {
        $this->AddPage();

        $this->title('Death Warp / Death Abuse', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Dans certains jeux, mourir devient un raccourci.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('En effet, la mort peut ramener à un checkpoint antérieur permettant de gagner du temps en n\'effectuant pas', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('un chemin retour vers celui-ci.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="death_deathAbuseSpeedTech" content="Death Abuse - SpeedTech Ep. 1 - Speedrunning Tricks" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="death_speedrunODT" content="Speedrun d\'O.D.T. : Escape... Or Die Trying comportant des Death Warp" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pagePauseBuffering(): void
    {
        $this->AddPage();

        $this->title('Pause Buffering', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Dans certains jeux, la mise en pause répétée fait apparaître des situations qui ne pourraient apparaître', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('autrement.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="pause_megaMan1" content="Mega Man 1, Pause Buffering" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="pause_superMario64" content="Super Mario 64, Pause Buffering" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageOutOfBounds(): void
    {
        $this->AddPage();

        $this->title('Out of Bounds', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Certains glitchs permettent de sortir des limites du jeu, c\'est un OOB (Out of Bounds).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="oob_luigiMansionChestGlitch" content="Luigi\'s Mansion, Chest Glitch" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="oob_residentEvil4DitmanGlitch" content="Resident Evil 4, Ditman Glitch" />', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('OOB deviendra une catégorie à part entière lorsqu\'une partie du jeu est outrepassée.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="oob_ghostrunnerAnyOob" content="Ghostrunner, Any% OOB" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="oob_portalAnyOob" content="Portal, Any% OOB" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageLuck(): void
    {
        $this->AddPage();

        $this->title('Manipulation de la chance', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Certains évènements dans un jeu peuvent être assujettis à la chance (comme effectuer un coup critique lors', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('d\'un combat).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Le nom donné à la chance dans un jeu est la RNG (Random Number Generator) et elle peut être', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('représentée sous forme d\'une probabilité qu\'un évènement se passe.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Lors des TAS, cette RNG va être <Link hrefId="luck_manipulated" content="manipulée" /> afin que (si possible) des évènements désirés soient réalisés.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="luck_dampeInOcarinaOfTime" content="Dampe in Ocarina of Time Explained" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="luck_top10LuckDependentSpeedruns" content="Top 10 Luck Dependent Speedruns" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="luck_tasTutorialManipulatingLuck" content="TAS Tutorial - Manipulating Luck / RNG" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageArbitraryCodeExecution(): void
    {
        $this->AddPage();

        $this->title('Arbitrary Code Execution', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Un ACE (Arbitrary Code Execution) est un glitch qui permet d\'exécuter du code non prévu dans un jeu.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Cela peut permettre d\'aller <Link hrefId="ace_geg" content="rapidement à la fin d\'un jeu" /> (nommé "Game End Glitch") ou bien de coder un', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('jeu dans un jeu.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Exemple (Pong et Snake codés dans Super Mario World) :', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="ace_demonstration" content="Démonstration" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ace_relatedArticle" content="Article en relation" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ace_relatedVideo" content="Vidéo en relation" />', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Mentions :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="ace_tasMM100ACE" content="TAS Zelda Majora\'s Mask 100% avec ACE" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ace_tasCastlevaniaGEG" content="TAS Castlevania: Symphony of the Night \'Game End Glitch\'" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }
}