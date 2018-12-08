<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: wfdesings.com
$siteKey = "6Ld-EygUAAAAAO3spTxBotxPx79gXtmq9BF0CdB9";
$secretKey = "6Ld-EygUAAAAAMhUfqeA5A0pmdegnQcdxS4az7ep";

//this helps eliminate PHP date errors
date_default_timezone_set("America/Los Angeles");

$nav1["index.php"] = "Home";
$nav1["humanDiversity.php"] = "Human Diversity";
$nav1["biological.php"] = "Psychology Biological Behaivor";
$nav1["consiousness.php"] = "Consciousness";
$nav1["sp.php"] = "Sensation and Perception";
$nav1["memory.php"] = "Memory";
$nav1["personality.php"] = "Personality";
$nav1["abilities.php"] = "Cognition and Mental Abilities";
$nav1["shp.php"] = "Stess & Health";
$nav1["pd.php"] = "Psychological Disorders";
$nav1["social.php"] = "Social Psychology";


//this constant allows a page to know it's own url/name
define("THIS_PAGE", basename($_SERVER["PHP_SELF"]));

switch(THIS_PAGE)
{
    case "index.php":
        $title = "Home";
        $logo = "fa-home";
        $PageID = "Indroduction";
    break;
    case "humanDiversity.php":
        $title = "HumanDiversity";
        $PageID = "Human Diversity";
    break;
    case "biological.php":
        $title = "Biological Behavior";
        $PageID = "Psychological Biological Behavior";
    break;
    case "consiousness.php":
        $title = "Consciousness";
        $PageID = "Conciousness";
    break;
    case "sp.php":
        $title = "Sensation & Perception";
        $PageID = "Sensation & Perception";
    break;
    case "memory.php":
        $title = "Memory";
        $PageID = "Memory";
    break;
    case "personality.php":
        $title = "Personality";
        $PageID = "Personality";
    break;
    case "abilities.php":
        $title = "Abilities";
        $PageID = "Cognition & Mental Abilities";
    break;
    case "shp.php":
        $title = "Stress & Health";
        $PageID = "Stress & Health";
    break;
    case "pd.php":
        $title = "Psychological Disorders";
        $PageID = "Psychological Disorders";
    break;
    case "social.php":
        $title = "Social";
        $PageID = "Social Psychology";
    break;
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
        
}

/*

<li class="active"><a href="index.php" >Home</a></li>
                    <li><a href="AIA.php">AIA</a></li>
                    <li><a href="#">BIG</a></li>
                    <li><a href="ux.php">Google Doc (UX)</a></li>
                    <li><a href="#">Final Project</a></li>
                    <li><a href="contact.php">Contact Will</a></li>

*/

function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text)
    {
        if(THIS_PAGE == $url)
        {//Add class
           $myReturn .= '<li><a href='. $url . '"class=active">'. $text .'</a></li>';  
        }else{//no class
          $myReturn .= '<li><a href='. $url . '>'. $text .'</a></li>';  
        }   
    }
    
    return $myReturn;
}