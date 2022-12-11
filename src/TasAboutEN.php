<?php

namespace App;

class TasAboutEN extends TasAbout
{
    protected function front(): void
    {
        $this->AddPage();

        $y = self::Y_TITLE;
        $this->title('TAS About', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->sentence('Documentation about Speedruns & Tool-Assisted Speedruns', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->sentence('By Full Moon Issue', $y, self::X_LEFT);

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
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*4');
        $this->list('- (Tool-Assisted) Speedrun', $y, self::X_LEFT, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*5');
        $this->subList('- Definition', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*7');
        $this->subList('- Category', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*9');
        $this->subList('- Timer', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*11');
        $this->subList('- BizHawk emulator', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*13');
        $this->list('- Appendices', $y, self::X_LEFT, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*14');
        $this->subList('- Vocabulary', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*16');
        $this->subList('- LiveSplit', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*18');
        $this->subList('- Resources', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*20');
        $this->subList('- Events', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*22');
        $this->subList('- Other kind of Tool-Assisted', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*24');
        $this->subList('- Miscellaneous', $y, self::X_LEFT + self::X_SPACE_FOR_SUB_LIST, $link);

        // Right

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*26');
        $this->list('- Skills', $y, self::X_RIGHT, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*28');
        $this->subList('- Glitch / Glitch Hunting', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*30');
        $this->subList('- Language of the game', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*32');
        $this->subList('- Menuing', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*34');
        $this->subList('- Routing / Route Planning', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*36');
        $this->subList('- Lag reduction', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*38');
        $this->subList('- Sequence Break / Skip', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*40');
        $this->subList('- Damage Boost / Take damage to save time', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*42');
        $this->subList('- Death Warp / Death Abuse', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*44');
        $this->subList('- Pause Buffering', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*46');
        $this->subList('- Out of Bounds', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*48');
        $this->subList('- Luck manipulation', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $link = $this->AddLink();
        $this->SetLink($link, 0, '*50');
        $this->subList('- Arbitrary Code Execution', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST, $link);
    }

    protected function coverSpeedrun(): void
    {
        $this->AddPage();
        $this->cover('(Tool-Assisted) Speedrun');
    }

    protected function pageDefinition(): void
    {
        $this->AddPage();

        $this->title('Definition', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Speedrun and TAS', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('The aim of speedrunning is to get the best time to', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('end a game.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('A speedrun is played "live" on a console or a', $y, self::X_LEFT);

        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('computer when a TAS is made on a computer with', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- an <Link hrefId="definition_bizhawkGithub" content="emulator" /> for console games', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- a <Link hrefId="definition_libtasGithub" content="software" /> for computer games', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('A TAS is represented by <Link hrefId="definition_bizhawkInputLog" content="a file" /> which list inputs', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('(buttons) pushed on a particular frame (picture).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('The game <Link hrefId="definition_botsAreStupid" content="Bots Are Stupid" /> brings a form of view', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('about what a TAS could look like.', $y, self::X_LEFT);

        // Right

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Additionally (Speedrun)', $y, self::X_RIGHT);

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
        $this->subTitle('Additionally (TAS)', $y, self::X_RIGHT);

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

        $this->title('Category', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Criteria leading to different categories', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Percentage finished of a game', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_low" content="Low%" /> (less items possible)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_any" content="Any%" /> (default category, go to the end)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_100" content="100%" /> (all game\'s objectives made)', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Use of glitches / bugs', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_glitchless" content="Glitchless" /> (none or some glitches allowed)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_nmg" content="NMG" /> (No Major Glitch)', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Others', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_dlc" content="DLC" /> / <Link hrefId="category_romHack" content="Rom Hack" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_gameVersion" content="Version of the game" /> / <Link hrefId="category_patch" content="Patch applied" />', $y, self::X_LEFT);

        // Right
        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Category extensions', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('The community of a game may suggest some', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('extra categories.', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_rbo" content="RBO" /> (Reverse Boss Order, defeat bosses in the', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->list('inverted order)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_damageless" content="Damageless" /> (take no damage)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- And many others (examples: <Link hrefId="category_ceCeleste" content="Celeste" />, <Link hrefId="category_ceOutlast" content="Outlast" />)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('More categories', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('With <Link hrefId="category_constraints" content="multiple constraints" /> or:', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="category_minimumPress" content="Minimum Press" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="category_maximumScore" content="Maximum Score" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageStopwatch(): void
    {
        $this->AddPage();

        $this->title('Timer', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('In Speedrun', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('RTA (Real Time Attack) is the time spent in real life.', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('Once the agreement found about when to start', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('and stop the timer, the time spent between those', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('two actions will be the speedrun time.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('IGT (In-Game Time) is the time spent but', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('computed by the game. It can contain loading', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('times and the time spent in cutscenes.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('The choice between RTA and IGT may be done:', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- Switch <Link hrefId="timer_igtVsRta" content="some game characteristics" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Through a <Link hrefId="timer_debate" content="debate" />', $y, self::X_LEFT);

        // Right
        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('In TAS', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('The computed time for a TAS is simpler than for a', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('speedrun because it\'s always the same way.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('The timer starts when the game is launched, and it', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('stops when the last input is pushed.', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageBizHawk(): void
    {
        $this->AddPage();

        $this->title('BizHawk emulator', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Characteristics', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- Manage many consoles (PS1, Saturn, GB, ...)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Have a lot of tools allowing game TASing', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Is Console Verified (<Link hrefId="bizhawk_consoleVerified" content="examples" />)', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->subTitle('Console Verified', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('A way to measure the accuracy of an emulator is', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('to replay the TAS\' inputs back on a real console.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('A TAS of a GBA game made with BizHawk can be', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('replayed on a real GBA which reveal a high', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('accuracy of emulation (<Link hrefId="bizhawk_emulationAccuracy" content="additionally" />).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('TASBot is a robot created to do this verification', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('(<Link hrefId="bizhawk_tasbot" content="his history" />: part <Link hrefId="bizhawk_tasbotHistory1" content="1" />, <Link hrefId="bizhawk_tasbotHistory2" content="2" />, and <Link hrefId="bizhawk_tasbotHistory3" content="3" />).', $y, self::X_LEFT);

        // Right

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Available tools (among others)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- Frame Advanced (play frame by frame)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Save State (save anywhere)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- RAM Search and RAM Watch (search and watch', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('values in the memory)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Lua Scripting (launch a lua script to, for', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('instance, <Link hrefId="bizhawk_luaOsd" content="display data on the screen" />)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Additionally (BizHawk and other tools)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="bizhawk_bizHawk" content="Detailed page about BizHawk" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="bizhawk_tasBizHawk" content="First TAS with BizHawk" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="bizhawk_resourcesBizHawk" content="Some resources about BizHawk" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="bizhawk_subRedditEmulation" content="SubReddit about emulation" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="bizhawk_toolsTas" content="List of emulators / tools to TAS" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function coverAppendices(): void
    {
        $this->AddPage();

        $this->cover('Appendices');
    }

    protected function pageVocabulary(): void
    {
        $this->AddPage();

        $this->title('Appendix #1: Vocabulary', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Technical words', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Related vocabulary about speedrun is present in these links:', $y, self::X_LEFT);

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

        $this->title('Appendix #2: LiveSplit', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Introduction', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('The main tool used by speedrunners to time their', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('runs is <Link hrefId="livesplit_github" content="LiveSplit" />.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="livesplit_configureTimer" content="Configurer un Timer de Speedrun" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="livesplit_setUpTimer" content="How to Set Up a Speedrun Timer" />', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Load Remover', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('To not penalize less powerful computers when', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('runs on computers are made, Load Removers can', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('be coded to remove loading times from the final', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('time of the run.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="livesplit_loadRemover" content="Make Your Own Load Remover" />', $y, self::X_LEFT);

        // Right

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('AutoSplit', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('All splits configured on LiveSplit are launched', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('manually during a run. However, it is possible to', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('launch them automatically.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- from a computer game by "listening" memory', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('addresses thanks to an <Link hrefId="livesplit_asl" content="ASL file" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- <Link hrefId="livesplit_richDiamond" content="Rich Diamond" />', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- <Link hrefId="livesplit_dmc4se" content="Devil May Cry 4 Special Edition" />', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- from a console game by comparing images', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- <Link hrefId="livesplit_autoSplit" content="Auto-Split" /> (<Link hrefId="livesplit_autoSplitDemonstration" content="Demonstration" />)', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->subList('- <Link hrefId="livesplit_sikuli" content="Sikuli" /> (<Link hrefId="livesplit_sikuliDemonstration" content="Demonstration" />)', $y, self::X_RIGHT + self::X_SPACE_FOR_SUB_LIST);

        $this->addLinksPage();
    }

    protected function pageResources(): void
    {
        $this->AddPage();

        $this->title('Appendix #3 : Resources', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Multiple themes (speedrun)', $y, self::X_LEFT);

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
        $this->subTitle('Shows about TAS', $y, self::X_LEFT);

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
        $this->subTitle('Commented Speedruns', $y, self::X_RIGHT);

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
        $this->subTitle('Additionally', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="links_devsReactToSpeedruns" content="Devs React to Speedruns" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_broadcastTAS" content="TAS continuous broadcast" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_interviewsOfSpeedrunners" content="Interviews of Speedrunners" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_subRedditTas" content="SubReddit (TAS)" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="links_twitchTasTag" content="Twitch \'TAS\' tag" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageEvents(): void
    {
        $this->AddPage();

        $this->title('Appendix #4: Events', self::Y_TITLE, self::X_LEFT);

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
        $this->list('- <Link hrefId="events_tasApril" content="TAS submitted on April 1st" />', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="events_tasGiving" content="TASGiving" />', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageOtherTypes(): void
    {
        $this->AddPage();

        $this->title('Appendix #5 : Other kind of Tool-Assisted', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Tool-Assisted Superplay', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('Entertainment over speed.', $y, self::X_LEFT);

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
        $this->sentence('Gameplay, dialogues, and cutscenes of a game.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="ta_tafp" content="TAFP" /> (Tool-Assisted Flawless Playthrough)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ta_taw" content="TAW" /> (Tool-Assisted Walkthrough)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ta_tag" content="TAG" /> (Tool-Assisted Gameplay)', $y, self::X_LEFT);

        // Right
        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Tool-Assisted Speedrun, multiple ...', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- ... players (<Link hrefId="ta_tasMultiPlayers2" content="2" />, <Link hrefId="ta_tasMultiPlayers3" content="3" />, <Link hrefId="ta_tasMultiPlayers4" content="4" />, <Link hrefId="ta_tasMultiPlayers5" content="5" />)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- ... games (<Link hrefId="ta_pokemonCoopDiploma" content="Pokémon B&R : Coop Diploma" />)', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- ... games, same inputs (<Link hrefId="ta_tasSameInputs2" content="2" />, <Link hrefId="ta_tasSameInputs3" content="3" />,', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('<Link hrefId="ta_tasSameInputs4" content="4" />, <Link hrefId="ta_tasSameInputs11" content="11" />)', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('LOTAD / Human Theory TAS', $y, self::X_RIGHT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('A <Link hrefId="ta_lotad" content="LOTAD" /> (Low Optimized Tool-Assisted', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('Demonstration) is an unoptimized version of', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('a Tool-Assisted Speedrun.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('A <Link hrefId="ta_humanTheoryTas" content="Human Theory TAS" /> is a doable version by a', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('human (without using TAS-Only strategies) with a', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('very good execution and luck.', $y, self::X_RIGHT);

        $this->addLinksPage();
    }

    protected function pageSpeedrunVsTAS(): void
    {
        $this->AddPage();

        $this->title('Appendix #6 : Miscellaneous', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Differences between Speedrun and TAS', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- The categories <Link hrefId="srTA_blindfolded" content="Blindfolded" /> and <Link hrefId="srTA_oneHanded" content="One Handed" /> exist only in speedrun', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Because time is not computed the same way, <Link hrefId="srTA_srFasterTas" content="a speedrun can appear faster than a TAS" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Some risky strategies are only viable in TAS like having only <Link hrefId="srTA_fewLifePoints" content="few life points" />', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Competitions', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- Run times are split (<Link hrefId="srTA_speedrunWebsite" content="speedrun.com" /> on the one hand and <Link hrefId="srTA_tasWebsite" content="tasvideos.org" /> on the other hand)', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- Competitions are split (example: Super Mario 64 Competition, <Link hrefId="srTA_speedrunSM64" content="Speedrun" /> | <Link hrefId="srTA_tasSM64" content="TAS" />)', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('People who are speedrunner and TASer of a same game', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->list('- <Link hrefId="srTA_bluekandy" content="Bluekandy" /> : Mario Golf', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="srTA_crazyGameNerd" content="CrazyGameNerd" /> : F-Zero GX', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="srTA_gymnast86" content="Gymnast86" /> : Twilight Princess', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_SUB_TITLE;
        $this->subTitle('Game developer who is speedrunning their own game', $y, self::X_LEFT);

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

        $this->title('Skills', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->sentence('Here is a non-exhaustive list of skills used during speedruns / TAS which reduce more or less the time to end', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('a game.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Some of these skills can lead to the creation of a new speedrun category if, for example, it "brakes" too', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('much a game (like the <Link hrefId="skills_srm" content="SRM" /> in Ocarina of Time).', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageGlitch(): void
    {
        $this->AddPage();

        $this->title('Glitch', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('In general, a glitch (or bug) is a failure in a game.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Malfunctions can occur like clips (go through', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('a wall), skips, ...', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

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
        $this->sentence('Glitch Hunting is the process to search for glitches', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('and exploit them.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Testing how the game reacts when two events', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('occur at the same time is one way to find some', $y, self::X_RIGHT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('potential glitches.', $y, self::X_RIGHT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_RIGHT);

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

        $this->title('Language of the game', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('To be sure to get the best time in a game, playing with the most advantaged localized version of the game is', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('a must.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Here are some examples of language used switch the speedrunned game:', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="language_twilightPrincessAny" content="Twilight Princess Any%" />, in German', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="language_breathOfTheWildAny" content="Breath of the Wild Any%" />, in French', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="language_superMario6416Stars" content="Super Mario 64, 16 Stars" />, in Japanese', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

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
        $this->sentence('Menuing is the optimisation of the use of the menu during a run.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('The goal is to do the less count of back-and-forth into the menu by doing multiple actions (if possible) when', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('opening it and having a good inventory management.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

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
        $this->sentence('The path to follow in order to retrieve the best time to finish a game is the Routing (or Route Planning).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('It can evolve when, for instance, new glitches are found.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('The videos "World Record Progression" are good examples to see changes in the routing of some games.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="routing_speedDocs" content="Speed Docs" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="routing_summoningSalt" content="Summoning Salt" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }

    protected function pageLags(): void
    {
        $this->AddPage();

        $this->title('Lag reduction', self::Y_TITLE, self::X_LEFT);

        $y = self::Y_TITLE + self::Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE;
        $this->subTitle('Description', $y, self::X_LEFT);

        $y += self::Y_SPACE_AFTER_SUB_TITLE;
        $this->sentence('When too many elements are displayed on the screen, the speed of a game can decrease.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('To avoid that, some tricks can be tested like killing enemies sooner or move the camera to not display some', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('elements on screen.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

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
        $this->sentence('A Sequence Break (or Skip) is a shortcut but not intended by the game developers.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Some videos of EZScape about the biggest skips in speedruns:', $y, self::X_LEFT);

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
        $this->sentence('Sometimes, enemies, even our own weapons, allow us to move faster when being hit by them (it\'s a Damage', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('Boost or D-Boost).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Thus, a balance will be searched between a bunch of damage taken to save time and remaining life points to', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('not die.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Damage Boost is a part of the "Take damage to save time" family which gathers skills allowing to trade some', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('life points for time saved.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('TAS examples containing some D-Boost:', $y, self::X_LEFT);

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
        $this->sentence('In some games, death becomes a shortcut.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Indeed, death can take back to a previous checkpoint without doing strictly speaking this return manually.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

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
        $this->sentence('In some games, repeated pause can cause effects that can\'t append in another way.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

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
        $this->sentence('Some glitches allow getting outside the boundaries of the game, it\'s an OOB (out of bounds).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="oob_luigiMansionChestGlitch" content="Luigi\'s Mansion, Chest Glitch" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="oob_residentEvil4DitmanGlitch" content="Resident Evil 4, Ditman Glitch" />', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('OOB will become an other category when too many fragments of the game are skipped.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

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
        $this->sentence('Some events in a game can be subject to the luck (like doing a critical hit during a fight).', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('The name given to the luck in a game is the RNG (Random Number Generator) and can be represented as a', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_SENTENCES;
        $this->sentence('probability that an event occurs.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('When TASing, this RNG will be <Link hrefId="luck_manipulated" content="manipulated" /> to get (if possible) some desired events.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References:', $y, self::X_LEFT);

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
        $this->sentence('An ACE (Arbitrary Code Execution) is a glitch that allows to execute unintended code in a game.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('This allows to go <Link hrefId="ace_geg" content="quickly to the end of a game" /> (named Game End Glitch) or to code a game into a game.', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('Example (Pong and Snake coded in Super Mario World):', $y, self::X_LEFT);
        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="ace_demonstration" content="Demonstration" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ace_relatedArticle" content="Related article" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ace_relatedVideo" content="Related video" />', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->sentence('References :', $y, self::X_LEFT);

        $y += self::Y_SPACE_BEFORE_NEW_PARAGRAPH;
        $this->list('- <Link hrefId="ace_tasMM100ACE" content="TAS Zelda Majora\'s Mask 100% with ACE" />', $y, self::X_LEFT);
        $y += self::Y_SPACE_BETWEEN_LIST_ELEMENTS;
        $this->list('- <Link hrefId="ace_tasCastlevaniaGEG" content="TAS Castlevania: Symphony of the Night \'Game End Glitch\'" />', $y, self::X_LEFT);

        $this->addLinksPage();
    }
}