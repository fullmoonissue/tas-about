<?php

namespace App;

use TCPDF;

abstract class TasAbout extends TCPDF
{
    public const LINKS = [
        'cover_fmiGithub' => "https://github.com/fullmoonissue",
        'cover_fmiYoutube' => "https://www.youtube.com/@fullmoonissue/videos",
        'cover_slidevGithub' => "https://github.com/slidevjs/slidev",
        'definition_bizhawkGithub' => "https://github.com/TASEmulators/BizHawk",
        'definition_libtasGithub' => "https://github.com/clementgallet/libTAS",
        'definition_bizhawkInputLog' => "https://tasvideos.org/Bizhawk/BK2Format#InputLog",
        'definition_botsAreStupid' => "https://www.youtube.com/watch?v=hUtiiITuEig",
        'definition_introductionSpeedrun' => "https://www.youtube.com/watch?v=akQuKUa-Iho",
        'definition_entretienAvecYannChauviere' => "https://www.fun-academy.fr/pourquoi-veut-on-finir-les-jeux-toujours-plus-vite-entretien-avec-yann-chauviere-de-speedgame",
        'definition_historySpeedrunning' => "https://www.youtube.com/watch?v=woTVADMFp2E",
        'definition_whatIsSpeedrunning' => "https://www.youtube.com/watch?v=fTElGPOsdd8",
        'definition_howToStartSpeedrunning' => "https://www.youtube.com/watch?v=Zxhd4tGuhf4",
        'definition_conferenceTas' => "https://www.youtube.com/watch?v=XrNrJ9G8-Do",
        'definition_howToTAS' => "https://www.youtube.com/embed/dcbdhDqBx_g?start=225&end=1252",
        'definition_tasExplained' => "https://www.youtube.com/watch?v=Ietk1-Wb7oY",
        'definition_introductionTas' => "https://www.youtube.com/watch?v=R3-ohYvi_fc",
        'category_low' => "https://www.youtube.com/watch?v=f2rvWLDlU2o",
        'category_any' => "https://www.youtube.com/watch?v=nDnJw6MyVF8",
        'category_100' => "https://www.youtube.com/watch?v=kFT5zbKo23s",
        'category_glitchless' => "https://www.youtube.com/watch?v=vjMAH3I55bk",
        'category_nmg' => "https://www.youtube.com/watch?v=ZEWnHPXEOYQ",
        'category_dlc' => "https://www.youtube.com/watch?v=1xJIJ7bjSdU",
        'category_romHack' => "https://www.youtube.com/watch?v=rg0n2Ctbuug",
        'category_gameVersion' => "https://www.youtube.com/watch?v=3VHBGoWDFR0",
        'category_patch' => "https://www.youtube.com/watch?v=LoTorn8_3C8",
        'category_rbo' => "https://www.youtube.com/watch?v=Syygh_qwaTU",
        'category_damageless' => "https://www.youtube.com/watch?v=UESSGDT-Oww",
        'category_ceCeleste' => "https://www.speedrun.com/celeste_category_extensions",
        'category_ceOutlast' => "https://www.speedrun.com/outlastmemes",
        'category_constraints' => "https://www.youtube.com/watch?v=1EOzbAHPmvM",
        'category_minimumPress' => "https://www.youtube.com/watch?v=IBDp3wnrOAo",
        'category_maximumScore' => "https://www.youtube.com/watch?v=OF2UwcIZ-DI",
        'timer_igtVsRta' => "https://www.reddit.com/r/speedrun/comments/7a8223/comment/dp88pli/",
        'timer_debate' => "https://www.speedrun.com/Speedrunning/thread/b5rk1",
        'bizhawk_consoleVerified' => "https://www.youtube.com/playlist?list=PLH-rsHQS9LqgSYzSePo9aWUX8xRjXSqK9",
        'bizhawk_luaOsd' => "https://www.youtube.com/watch?v=reDowrCmnwY",
        'bizhawk_emulationAccuracy' => "https://www.youtube.com/watch?v=060Nb7ppa-s",
        'bizhawk_tasbot' => "https://tasvideos.org/TASBot",
        'bizhawk_tasbotHistory1' => "https://www.youtube.com/watch?v=-Jo6tDW7k3Q",
        'bizhawk_tasbotHistory2' => "https://www.youtube.com/watch?v=gTF2Pih8BX8",
        'bizhawk_tasbotHistory3' => "https://www.youtube.com/watch?v=BDQXzrYUuvA",
        'bizhawk_bizHawk' => "https://tasvideos.org/BizHawk",
        'bizhawk_tasBizHawk' => "https://www.youtube.com/playlist?list=PLlJzD6wWmoXmihK13itZJ-mzjK3SD1EaM",
        'bizhawk_resourcesBizHawk' => "https://www.youtube.com/playlist?list=PLFpQiGLusn-aq-z-noMJ7rj9sG3jT3cvW",
        'bizhawk_subRedditEmulation' => "https://www.reddit.com/r/emulation/",
        'bizhawk_toolsTas' => "https://tasvideos.org/EmulatorResources",
        'vocabulary_srTasGlossary' => "https://djonepiece300.wordpress.com/2018/01/25/presentation-et-lexique-du-speedrun-et-tool-assisted-speedrun-tas/",
        'vocabulary_dictionarySpeedrun' => "https://www.youtube.com/playlist?list=PLoJVELv88dFXuhcFST45YVlDHa37dbmMe",
        'vocabulary_frenchWikiSpeedrun' => "https://wiki.lefren.ch/books/le-french-wiki/page/termes-r%C3%A9currents-du-speedrun",
        'vocabulary_speedrunningGlossary' => "https://www.speedrunslive.com/rules-faq/glossary",
        'vocabulary_glossaryTasVideos' => "https://tasvideos.org/Glossary",
        'livesplit_github' => "https://github.com/LiveSplit",
        'livesplit_configureTimer' => "https://www.youtube.com/watch?v=QWuBijoRn9U",
        'livesplit_setUpTimer' => "https://www.youtube.com/watch?v=xq2MCodtH34",
        'livesplit_loadRemover' => "https://www.youtube.com/watch?v=RKjVoErg2kc",
        'livesplit_asl' => "https://github.com/LiveSplit/LiveSplit.AutoSplitters/blob/master/README.md",
        'livesplit_richDiamond' => "https://www.youtube.com/watch?v=VS5-ZSjcBXQ",
        'livesplit_dmc4se' => "https://www.youtube.com/watch?v=KcBZLtjazHQ",
        'livesplit_autoSplit' => "https://github.com/Toufool/Auto-Split",
        'livesplit_autoSplitDemonstration' => "https://www.youtube.com/watch?v=uGZphPkrGRw&t=848s",
        'livesplit_sikuli' => "https://github.com/RaiMan/SikuliX1",
        'livesplit_sikuliDemonstration' => "https://www.youtube.com/watch?v=W4sn4yjSosA",
        'links_abyssoft' => "https://www.youtube.com/c/Abyssoft",
        'links_gladJonas' => "https://www.youtube.com/c/gladJonas",
        'links_storster' => "https://www.youtube.com/c/Storster",
        'links_lowestPercent' => "https://www.youtube.com/c/LowestPercent",
        'links_subRedditSpeedrun' => "https://www.reddit.com/r/speedrun/",
        'links_88malh' => "https://www.youtube.com/playlist?list=PLD400FA8A50319D8C",
        'links_inVinoVeritas' => "https://www.youtube.com/channel/UCUrnYqoOBrcX4WOfuNDQEgw/videos",
        'links_speedGame' => "https://www.youtube.com/playlist?list=PLymmwIRuunnacxT6lxIsHXjDrlkiMParM",
        'links_taspedia' => "https://www.youtube.com/playlist?list=PLHZhigRWkVZOeS83tX-Z-IEf45ZYu0q6q",
        'links_toolAssistedPodcastEpisodes' => "https://www.youtube.com/playlist?list=PLlJzD6wWmoXn22611vVPKvmmZ3pLWOca5",
        'links_ceciEstUnSpeedrun' => "https://www.youtube.com/playlist?list=PLdkPlOZ2GL2xnkF_8AwkLPa7h0YsjgyuZ",
        'links_gamingSpeedDating' => "https://www.youtube.com/playlist?list=PLiZQtLpCVz-givM_GpeZuIxzbAcUl1EP9",
        'links_hugoDelireLaink' => "https://www.youtube.com/playlist?list=PLqAlRNty5123ErcYqWEa2oi26Oil-SO2Y",
        'links_machOne' => "https://www.youtube.com/channel/UCHXhezW0r3Hvq4QQ6yXcYQw",
        'links_speedrunExplained' => "https://www.youtube.com/playlist?list=PLoiGRjr9BAVjXkIZNdJspBHkabRkMytxs",
        'links_devsReactToSpeedruns' => "https://www.youtube.com/playlist?list=PLraFbwCoisJA6eO7VSWtUqLaIFBQq4PCv",
        'links_broadcastTAS' => "https://www.twitch.tv/speedrunhypetv",
        'links_interviewsOfSpeedrunners' => "https://www.youtube.com/playlist?list=PLszHwNbX4a9i4duOCXTis7naLwYQoeZxJ",
        'links_subRedditTas' => "https://www.reddit.com/r/TAS/",
        'links_twitchTasTag' => "https://www.twitch.tv/directory/all/tags/TAS",
        'events_agdqSgdq' => "https://www.youtube.com/c/gamesdonequick",
        'events_asm' => "https://www.youtube.com/c/ausspeedruns",
        'events_barriereSpeedRunShow' => "https://www.youtube.com/watch?v=LEVQ74r2dvw",
        'events_calithon' => "https://www.twitch.tv/calithon",
        'events_esa' => "https://www.youtube.com/c/ESAMarathon",
        'events_forTheLoveOfGaming' => "https://www.twitch.tv/ftlgmarathon",
        'events_gsa' => "https://www.youtube.com/channel/UCaqWIVvgmt8Gme_QLN1IuEQ",
        'events_leFrenchRestream' => "https://www.youtube.com/channel/UC2nA_c97ROSnfhakjJTKaZw",
        'events_rpgLimitBreak' => "https://www.youtube.com/channel/UCJn8IWyQmWEIfpVjX7o2VnQ",
        'events_shotsFired' => "https://www.twitch.tv/shotsfiredmarathon",
        'events_speeDons' => "https://www.speedons.fr",
        'events_tasApril' => "https://tasvideos.org/HomePages/Noxxa/AprilFoolsHistory",
        'events_tasAwards' => "https://tasvideos.org/Awards",
        'events_tasBlock' => "https://www.youtube.com/playlist?list=PL56Je9SuPxBwknojTTT_KsOB3Msa54DRS",
        'events_tasGiving' => "https://www.youtube.com/playlist?list=PLzcP-azgsWrqlW8xmp6YRaHD1nzjOmj8i",
        'events_wasd' => "https://www.youtube.com/channel/UCrQLf-vqI47qzSWOeODR_6g",
        'events_zeldaSpeedRuns' => "https://www.youtube.com/c/ZSRVideos",
        'ta_ryuVsCloud' => "https://www.youtube.com/watch?v=0CsOeksvJ44",
        'ta_nessVsYoungLink' => "https://www.youtube.com/watch?v=lhE8g3fscYM",
        'ta_mortalKombat3' => "https://www.youtube.com/watch?v=Yxb0t34mW-U",
        'ta_taplayaround' => "https://www.youtube.com/watch?v=A06DjnoHRIk",
        'ta_tafp' => "https://www.youtube.com/watch?v=RxRaLTpG2VI",
        'ta_taw' => "https://www.youtube.com/watch?v=gEOIFXNlIdQ",
        'ta_tag' => "https://www.youtube.com/watch?v=mTK4n0k6HRE",
        'ta_tasMultiPlayers2' => "https://www.youtube.com/watch?v=IH4TNH0d-6k",
        'ta_tasMultiPlayers3' => "https://www.youtube.com/watch?v=Z8sp-Qnlmzo",
        'ta_tasMultiPlayers4' => "https://www.youtube.com/watch?v=uj_GnHZlDvE",
        'ta_tasMultiPlayers5' => "https://www.youtube.com/watch?v=s43GRvSibSs",
        'ta_pokemonCoopDiploma' => "https://www.youtube.com/watch?v=-ivGNZs_Mvw",
        'ta_tasSameInputs2' => "https://www.youtube.com/watch?v=pPJKMm5VrhE",
        'ta_tasSameInputs3' => "https://www.youtube.com/watch?v=To3d6XKsMcQ",
        'ta_tasSameInputs4' => "https://www.youtube.com/watch?v=SiHdBS7HPg0",
        'ta_tasSameInputs11' => "https://www.youtube.com/watch?v=CL9yGz7VVrM",
        'ta_lotad' => "https://www.youtube.com/watch?v=ki53UHJMlD4",
        'ta_humanTheoryTas' => "https://www.youtube.com/watch?v=HRqrvkU0sYQ",
        'srTA_blindfolded' => "https://www.youtube.com/watch?v=Qgrcr65BFj4",
        'srTA_oneHanded' => "https://www.youtube.com/watch?v=dy4cyS10TbE",
        'srTA_srFasterTas' => "https://www.youtube.com/watch?v=QKsRNoLyXO8&t=3170s",
        'srTA_fewLifePoints' => "https://www.youtube.com/watch?v=WhD1VvlbPLs",
        'srTA_speedrunWebsite' => "https://www.speedrun.com/",
        'srTA_tasWebsite' => "https://tasvideos.org/",
        'srTA_speedrunSM64' => "https://www.youtube.com/playlist?list=PL6P6dcko2BB7fg9h0CIN62zFeVecgV8lR",
        'srTA_tasSM64' => "https://www.youtube.com/playlist?list=PLkW-5L5VSY-YVhkBrb2be2Hi-i_nrtW-L",
        'srTA_bluekandy' => "https://www.youtube.com/c/Bluekandy/about",
        'srTA_crazyGameNerd' => "https://www.youtube.com/user/CrazyGameNerd/about",
        'srTA_gymnast86' => "https://www.youtube.com/c/gymnast86/about",
        'srTA_TomatoPhalanges' => "https://www.twitch.tv/videos/1110820951",
        'srTA_ParaLily' => "https://www.youtube.com/watch?v=XDdfSQKzTo0",
        'srTA_Walaber' => "https://www.youtube.com/watch?v=LLNx5_8FK4I",
        'skills_srm' => "https://www.youtube.com/watch?v=dNh4E_Gk8Y4",
        'glitch_alundraBombGlitch' => "https://www.youtube.com/watch?v=4pVgsyt6uXU",
        'glitch_twilightPrincessBackInTimeGlitch' => "https://www.youtube.com/watch?v=Jhfc4fyw5Wk",
        'glitch_sonOfGlitch' => "https://www.youtube.com/playlist?list=PLDBXdd2IJRvW-gaqcF2Kx0zOUkFZVdML2",
        'glitch_iceberg' => "https://www.youtube.com/watch?v=uPFMB4emQEs",
        'glitchHunting_whoFindsGlitches' => "https://www.youtube.com/watch?v=PTsnblKvfqE",
        'glitchHunting_howGlitchesFound' => "https://www.youtube.com/watch?v=yOMKljWdCIE",
        'glitchHunting_glitchHuntingGamingCoding' => "https://medium.com/@dannyb21892/speedrunning-glitch-hunting-and-the-intersections-of-gaming-and-coding-ce8be66e9029",
        'glitchHunting_speedrunningVideoGamesasAGatewayToScientificEndeavours' => "https://www.youtube.com/watch?v=nlabDCUmoTk",
        'language_advantages' => "https://www.youtube.com/watch?v=1Mtukr5v6J8",
        'language_use' => "https://www.youtube.com/watch?v=jo9PeLgDZRk",
        'language_twilightPrincessAny' => "https://www.youtube.com/watch?v=XM1UwcX1AlM",
        'language_breathOfTheWildAny' => "https://www.youtube.com/watch?v=bnhSHqWk2bM",
        'language_superMario6416Stars' => "https://www.youtube.com/watch?v=TL5UhcpQthQ",
        'menuing_residentEvil1JillAnyGlitchlessInventoryManagement' => "https://www.youtube.com/watch?v=jdZg4a4NU5k",
        'menuing_agdq2019FinalFantasyXIBlindfoldedMenuing' => "https://www.youtube.com/watch?v=46YM-7g2800",
        'routing_speedDocs' => "https://www.youtube.com/playlist?list=PLuwYJaJDViFlt1hRETxEP3dexwJG1ENNe",
        'routing_summoningSalt' => "https://www.youtube.com/playlist?list=PLMxPYcr2zEkWInMyvvxmN22gjrRR0x__u",
        'lagReduction_superMetroidLagReductionComparison' => "https://www.youtube.com/watch?v=mMtKl_P_vz0",
        'lagReduction_theBestKeptSecretInSM64' => "https://www.youtube.com/watch?v=sOetJuClTGs",
        'skip_top10BiggestSkipsInSpeedrunning1' => "https://www.youtube.com/watch?v=9N5J5_Q2miA",
        'skip_top10BiggestSkipsInSpeedrunning2' => "https://www.youtube.com/watch?v=bk90sXw696s",
        'skip_top10BiggestSkipsInSpeedrunning3' => "https://www.youtube.com/watch?v=HF4i9vebXPk",
        'dBoost_theGoonies2Any' => "https://www.youtube.com/watch?v=7-Kak8JeF1g",
        'dBoost_superMetroid100' => "https://www.youtube.com/watch?v=Sy0HrZLRq3k",
        'death_deathAbuseSpeedTech' => "https://www.youtube.com/watch?v=5BgLSAMJreM",
        'death_speedrunODT' => "https://www.youtube.com/watch?v=IRtLpYB2fnI",
        'pause_megaMan1' => "https://www.youtube.com/watch?v=-q5XYEJwdaE",
        'pause_superMario64' => "https://www.youtube.com/watch?v=IhlBrVaK7DU",
        'oob_luigiMansionChestGlitch' => "https://www.youtube.com/watch?v=7trX1fDmAXI",
        'oob_residentEvil4DitmanGlitch' => "https://www.youtube.com/watch?v=byXJ1lhNLB8",
        'oob_ghostrunnerAnyOob' => "https://www.youtube.com/watch?v=briY7IIL3Bs",
        'oob_portalAnyOob' => "https://www.youtube.com/watch?v=9v30M_pPjao",
        'luck_manipulated' => "https://tasvideos.org/LuckManipulation",
        'luck_dampeInOcarinaOfTime' => "https://www.youtube.com/watch?v=UxL2DpGASt8",
        'luck_top10LuckDependentSpeedruns' => "https://www.youtube.com/watch?v=SnQNrYOvWR4",
        'luck_tasTutorialManipulatingLuck' => "https://www.youtube.com/watch?v=ilGri-rJ-HE",
        'ace_geg' => "https://www.youtube.com/watch?v=StuzA-IRN_Y",
        'ace_demonstration' => "https://www.youtube.com/watch?v=v_KsonqcMv0",
        'ace_relatedArticle' => "https://arstechnica.com/gaming/2014/01/how-an-emulator-fueled-robot-reprogrammed-super-mario-world-on-the-fly/",
        'ace_relatedVideo' => "https://www.youtube.com/watch?v=dcbdhDqBx_g&t=1252s",
        'ace_tasMM100ACE' => "https://www.youtube.com/watch?v=o7wGpmP6YH8",
        'ace_tasCastlevaniaGEG' => "https://www.youtube.com/watch?v=FmTtRZcfH08",
    ];

    protected const X_LEFT = 20;
    protected const X_RIGHT = 150;
    protected const Y_TITLE = 10;

    protected const X_SPACE_FOR_SUB_LIST = 5;

    protected const Y_SPACE_BETWEEN_TITLE_AND_SUB_TITLE = 20;

    protected const Y_SPACE_BEFORE_SUB_TITLE = 14;
    protected const Y_SPACE_AFTER_SUB_TITLE = 14;

    protected const Y_SPACE_BEFORE_NEW_PARAGRAPH = 15;
    protected const Y_SPACE_BETWEEN_SENTENCES = 8;
    protected const Y_SPACE_BETWEEN_LIST_ELEMENTS = 10;

    private int $currentLinkCounter = 0;

    private array $orderedLinks = [];

    public function __construct()
    {
        parent::__construct('L');

        $this->SetAutoPageBreak(true, 1);
        $this->setMargins(0, 0, 0);
        $this->setFont('helvetica');
    }

    public function Header()
    {
        // Clean the page
        $this->Rect(0, 0, $this->getPageWidth(), $this->getPageHeight(), 'F', '', [255, 255, 255]);
    }

    public function Footer()
    {
        // Override Footer() method to avoid some TcPdf's shenanigans
    }

    public function pages()
    {
        $this->front();

        $this->menu();

        $this->coverSpeedrun();
        $this->pageDefinition();
        $this->pageCategory();
        $this->pageStopwatch();
        $this->pageBizHawk();

        $this->coverAppendices();
        $this->pageVocabulary();
        $this->pageLiveSplit();
        $this->pageResources();
        $this->pageEvents();
        $this->pageOtherTypes();
        $this->pageSpeedrunVsTAS();

        $this->pageSkills();
        $this->pageGlitch();
        $this->pageLanguage();
        $this->pageMenuing();
        $this->pageRouting();
        $this->pageLags();
        $this->pageSkip();
        $this->pageDamageBoost();
        $this->pageDeath();
        $this->pagePauseBuffering();
        $this->pageOutOfBounds();
        $this->pageLuck();
        $this->pageArbitraryCodeExecution();
    }

    abstract protected function front();
    abstract protected function menu();
    abstract protected function coverSpeedrun();
    abstract protected function pageDefinition();
    abstract protected function pageCategory();
    abstract protected function pageStopwatch();
    abstract protected function pageBizHawk();
    abstract protected function coverAppendices();
    abstract protected function pageVocabulary();
    abstract protected function pageLiveSplit();
    abstract protected function pageResources();
    abstract protected function pageEvents();
    abstract protected function pageOtherTypes();
    abstract protected function pageSpeedrunVsTAS();
    abstract protected function pageSkills();
    abstract protected function pageGlitch();
    abstract protected function pageLanguage();
    abstract protected function pageMenuing();
    abstract protected function pageRouting();
    abstract protected function pageLags();
    abstract protected function pageSkip();
    abstract protected function pageDamageBoost();
    abstract protected function pageDeath();
    abstract protected function pagePauseBuffering();
    abstract protected function pageOutOfBounds();
    abstract protected function pageLuck();
    abstract protected function pageArbitraryCodeExecution();

    protected function cover(string $text)
    {
        $this->h1();

        $this->html(25, floor($this->getPageHeight() / 2) - 13, $text);
    }

    protected function title(string $text, int $y, int $x)
    {
        $this->h2();

        $this->html($x, $y, $text);
    }

    protected function subTitle(string $text, int $y, int $x)
    {
        $this->h3();

        $this->html($x, $y, $text);
    }

    protected function sentence(string $text, int $y, int $x, $linkIdentifier = '')
    {
        $this->noH();

        $this->html($x, $y, $text, $linkIdentifier);
    }

    protected function list(string $text, int $y, int $x = 23, $linkIdentifier = '')
    {
        $this->sentence($text, $y, $x, $linkIdentifier);
    }

    protected function subList(string $text, int $y, int $x = 23, $linkIdentifier = '')
    {
        $this->sentence($text, $y, $x, $linkIdentifier);
    }

    private function h1(): void
    {
        $this->SetTextColor(0, 0, 0);
        $this->setFontSize(52);
        $this->setFont('helvetica');
    }

    private function h2(): void
    {
        $this->SetTextColor(0, 0, 0);
        $this->setFontSize(32);
        $this->setFont('helvetica');
    }

    private function h3(): void
    {
        $this->SetTextColor(80, 80, 80);
        $this->setFontSize(17);
        $this->setFont('helvetica', 'BU');
    }

    private function noH(): void
    {
        $this->SetTextColor(0, 0, 0);
        $this->setFontSize(15);
        $this->setFont('helvetica');
    }

    private function html(int $x, int $y, string $text, $linkIdentifier = ''): void
    {
        $text = preg_replace_callback(
            '{<Link hrefId="(?P<id>[^"]+)" content="(?P<content>[^"]+)" />}',
            function ($matches) {
                ++$this->currentLinkCounter;
                $this->orderedLinks[$this->currentLinkCounter] = self::LINKS[$matches['id']];
                return $matches['content'] . ' [' . $this->currentLinkCounter . ']';
            },
            $text
        );

        $text = trim(preg_replace('/\s{2,}/', ' ', $text));

        $this->Text($x, $y, $text, link: $linkIdentifier);
    }

    protected function setupLink(int $numPage)
    {
        $link = $this->AddLink();
        $this->SetLink($link, 0, sprintf('*%d', $numPage));

        return $link;
    }

    protected function addLinksPage()
    {
        if (empty($this->orderedLinks)) {
            return;
        }

        $this->AddPage();

        $y = 30;
        $this->displayLinks($y);
    }

    private function displayLinks(int $y): void
    {
        $this->setFontSize(13);
        foreach ($this->orderedLinks as $currentLinkCount => $link) {
            $this->x = 20;
            $this->y = $y;
            // If the link number is not into the <a>, the first one in a page list will have a shift
            $this->WriteHTML(sprintf('<a style="text-decoration: none; color: #000000;" href="%s">[%d] %s</a>', $link, $currentLinkCount, $link));

            $y += 8;
        }

        $this->orderedLinks = [];
    }
}
