<?php

namespace RiotPHP\Collections\Riot;

/**
 * Class MatchmakingQueue
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class MatchmakingQueue
{
    //ARURF Games
    const ALL_RANDOM_ULTRA_RAPID_FIRE = 900;
    const ALL_RANDOM_ULTRA_RAPID_FIRE_SNOW = 1010;    

    //ARAM Games
    const ARAM_BUTCHERS_BRIDGE_5V5 = 100;
    const ARAM_HOWLING_ABYSS_5V5 = 450;
    const ARAM_SUMMONERS_RIFT_5V5 = 325;
    const BLACK_MARKET_BRAWLERS = 313;    

    //CO-OP VS AI Games
    const COOP_VS_AI_BEGINNER_3V3 = 820;
    const COOP_VS_AI_INTERMEDIATE_3V3 = 800;
    const COOP_VS_AI_INTRO_3V3 = 810;
    const COOP_VS_AI_BEGINNER_5V5 = 840;
    const COOP_VS_AI_INTERMEDIATE_5V5 = 850;
    const COOP_VS_AI_INTRO_5V5 = 830;

    //DOOM Bots Games
    const DOOM_BOTS_VOTING = 950;
    const DOOM_BOTS_STANDARD = 960;
    const DEFINETLY_NOT_DOMINION = 317;

    //Hexakill Games
    const HEXAKILL_SUMMONERS_RIFT = 75;
    const HEXAKILL_TWISTED_TREELINE = 98;
    
    //3VS3 Games
    const NORMAL_BLIND_PICK_3V3 = 460;
    const RANKED_FLEX_3V3 = 470;

    //5VS5 Games   
    const NORMAL_BLIND_PICK_5V5 = 430;
    const NORMAL_DRAFT_PICK_5V5 = 400; 
    const RANKED_FLEX_5V5 = 440;
    const RANKED_SOLO_DUO_5V5 = 420;    

    //Odyssey Games
    const ODYSSEY_EXTRACTION_CADET = 1040;
    const ODYSSEY_EXTRACTION_CAPTAIN = 1060;
    const ODYSSEY_EXTRACTION_CREWMEMBER = 1050;
    const ODYSSEY_EXTRACTION_INTRO = 1030;   
    const ODYSSEY_EXTRACTION_ONSLAUGHT = 1070; 

    //One for All Games
    const ONE_FOR_ALL = 1020;
    const ONE_FOR_ALL_MIRROR_MODE = 78;
    
    //Showdown Games
    const SNOWDOWN_SHOWDOWN_1V1 = 72;
    const SNOWDOWN_SHOWDOWN_2V2 = 73;

    //Star Guardian Games
    const STAR_GUARDIAN_INVASION_NORMAL = 980;  
    const STAR_GUARDIAN_INVASION_ONSLAUGHT = 990;
    
    //Regular URF Games
    const ULTRA_RAPID_FIRE = 76;
    const ULTRA_RAPID_FIRE_COOP_VS_AI = 83;

    //Special uniques gamemodes
    const ASCENSION = 910;
    const BLOOD_HUNT_ASSASSIN = 600;
    const CLASH = 700;
    const CUSTOM_GAME = 0;
    const DARK_STAR_SINGULARITY = 610;
    const LEGEND_OF_THE_PORO_KING = 920;
    const NEMESIS = 310;
    const NEXUS_SIEGE = 940;
    const PROJECT_HUNTERS = 1000;
}