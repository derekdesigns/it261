<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Reasons To Leave';
$nav['list.php'] = 'Top 10 List';
$nav['contact.php'] = 'Newsletter';

// create a function for our navigation, so it is called out on our header.php page

function my_nav($nav) {
$my_return = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$my_return .= '<li><a href=" '.$key.'" class="current">'.$value.'</a></li>';
} else {
$my_return .= '<li><a href=" '.$key.' ">'.$value.'</a></li>';
} // end else
} // end foreach
return $my_return;
} // end function

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home Page of our IT261 Final Project';
    $body = 'home';
    $headline = 'Do I Want To Retire In Seattle?';
    break;

    case 'about.php':
        $title = 'About Page of our IT261 Final Project';
        $body = 'about inner';
        $headline = 'Have You ABOUT Had It Too?';
        break;

    case 'daily.php':
        $title = 'Daily Page of our IT261 Final Project';
        $body = 'daily inner';
        $headline = 'Reasons To Leave';
        break;
    
    case 'list.php':
        $title = 'List Page of our IT261 Final Project';
        // $body = 'list inner';
        $headline = 'So Where Does A Disgruntled Seattleite Turn?';
        break;

    case 'list-view.php':
        $title = 'List-View Page of our IT261 Final Project';
        // $body = 'list inner';
        // $headline = '';
        break;

    case 'contact.php':
        $title = 'Contact Page of our IT261 Final Project';
        $body = 'contact inner';
        $headline = 'Sign Up For Our Newsletter';
        break;

    case 'thx.php':
        $title = 'Thank You Page of our IT261 Final Project';
        $body = 'contact inner';
        $headline = 'Thank You For Trusting Us To Help Plan For Your Retirement!';
        break;

    case 'login.php':
        $title = 'Login Page of our IT261 Final Project';
        $body = 'login inner';
        $headline = 'Exit The Rat Race Here';
        break;

    case 'register.php':
        $title = 'Registration Page of our IT261 Final Project';
        $body = 'register inner';
        $headline = 'Is retiring in Seattle not an option for you?  Join the club!';
        break;
}

// this is the beginning of the switch!!!
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
}

switch($today) {

    case 'Monday' :
    $cliche = '<h2>Homelessness</h2>';
    $pic = 'homelessness.jpg';
    $alt = 'homelessness';
    $content= 
    '<p>Since the coronavirus first emerged in Seattle and King County, visible homelessness — encampments along greenbelts and sidewalks, RVs parked in neighborhoods and industrial zones — has grown and so, too, have frustration, fear and finger pointing over local officials’ handling of the crisis on top of a crisis.
    
    Early into the pandemic, city and county officials worked quickly to set up new shelters and to pay for hotel stays to keep people with higher health risks out of crowded shelters. At the same time, federal public health guidance encouraged local governments to let people shelter in place — whether that was in a home or outside — so encampments grew as fewer people rotated through shelters.
    
    Both Seattle and King County have recently received a surge in emergency federal aid, setting off a chain of promises to use the funds to increase emergency and permanent housing.
    
    And, as the 2021 Seattle mayoral candidates hit the campaign trail, homelessness is at the top of many candidates’ policy platforms. Whoever wins will have to work with a Regional Homelessness Authority — designed to place money and decision-making power over homelessness in King County under one roof — and its recently hired first executive director, Marc Dones.
    
    But if you cut away from the political chatter, there’s a lot to be learned from studying the raw data — like who is most affected by this crisis and why a growing region with some of the world’s most successful tech companies is also home to the nation’s third highest metro-area homeless population.
    </p>';
    break;

    case 'Tuesday' :
    $cliche = '<h2>Traffic</h2>';
    $pic = 'traffic.jpg';
    $alt = 'traffic';
    $content = '<p>A new study confirms what frustrated Seattle-area commuters already know: Traffic congestion in the Emerald City is terrible.

    The average driver in Seattle spent more time sitting in traffic in 2017 — the most recent year for which data is available — than their counterparts in almost any other city, according to the 2019 Urban Mobility Report by Texas A&M University’s Transportation Institute. Seattle ranked seventh on this metric among large urban areas, behind Los Angeles; San Francisco; Washington D.C.; New York City; San Jose, California; and Boston.</p>';
    break;

    case 'Wednesday' :
    $cliche = '<h2>Cost of Living</h2>';
    $pic = 'empty_pockets.jpg';
    $alt = 'empty_pockets';
    $content = '

    <p>The cost of living in Seattle is 56.8% higher than the national average, according to a recent report from Rent.com. 
    
    The report estimates that a person’s household income would need to be at least $82,240 a year to comfortably afford an average one-bedroom apartment and other expenses such as food, utilities, transportation and healthcare.
    
    As for why Seattle’s cost of living is much higher than normal, the report points mainly to housing costs.
    
    “Seattle\'s housing market is tight,” the report said. “Demand usually exceeds supply, so most homes sell very quickly, on average within seven days of being put on the market. The average home price in Seattle is $854,748 — this number continues to steadily increase.”
    
    And while rent prices in neighborhoods like Central District and Green Lake have dropped over the last year, residents living near Puget Sound or in downtown Seattle — like those in the Lower Queen Anne neighborhood — pay an average of $2,365 per month for rent, the report said.  
    
    Transportation prices are also driving up Seattle’s cost of living. On average, residents pay 40.8% more than the average person does for transportation, the report cited.</p>';
    break;

    case 'Thursday' :
    $cliche = '<h2>Crime</h2>';
    $pic = 'crime.jpg';
    $alt = 'crime';
    $content = '<p>After a string of recent break-ins, several North Seattle businesses located along Aurora Avenue said they are fed up with crime and are calling on city officials to do something to help curb illegal behavior.

    Surveillance video from a camera mounted at Stereo Warehouse captured a man wearing a black hoody who walked casually into the business on Wednesday evening before he brandished a weapon.
    
    “I just thought it was a normal customer,” worker Gene Decker said, adding that the man flashed a gun before making a threat. "He tells me don’t take my hands off the counter or he’ll shoot me and my co-worker.”
    
    Workers said the man fled from the store with an amplifier costing $2,000. Police said the theft is under investigation, and the suspect was described as 6-feet-3-inches tall and wore gloves during the robbery.
    
    Officials who work at a teriyaki restaurant nearby said they are is still dealing with a break-in from earlier in the week.

    It’s hard to tell what’s fueling this trend, but the pervasive assumption is that criminals think they’re not going to be arrested, and they’re not going to be prosecuted.
    </p>';
    break;

    case 'Friday' :
    $cliche = '<h2>Weather</h2>';
    $pic = 'clouds.jpg';
    $alt = 'clouds';
    $content = '<h4 class="center">Liquid vitamin D supplements are highly prescribed!!</h4>
    <p>A recent study named Seattle the No. 1 “gloomiest place in America.” The website Bestplaces.net, which ranks locations on all kinds of qualities, created a “gloom index” for the largest cities in the nation, based on weather data during the darkest months of the year.
    
    The index ranked the cities by looking at percentage of cloud cover, hours of daylight and days with precipitation.
        
    Seattle came in first, followed by Portland, Oregon, and Buffalo, New York.</p>
    ';
    break;

    case 'Saturday' :
    $cliche = '<h2>Amazon</h2>';
    $pic = 'amazon.jpg';
    $alt = 'amazon';
    $content = '<p>Amazon is looking for a home for its second headquarters. But in its current home, critics say rising house prices and growing inequality have damaged the city
        
    However they see Amazon, for good or ill, residents of the fastest-growing city in the US largely agree on the price Seattle has paid to be the home of the megacorporation: surging rents, homelessness, traffic-clogged streets, overburdened public transport, an influx of young men in polo shirts and a creeping uniformity rubbing against the city’s counterculture.
        
    Amazon has long been accused of stretching the city’s transit and education systems, and its highly paid workers have driven up prices of goods and housing.
        
    The resentful murmur recently became a roar after Amazon reacted to the city’s latest tax proposal, which would have charged large businesses an annual $275 per employee, by resorting to what critics call blackmail. In mid-June, less than a month after unanimously passing the tax, Seattle’s council abandoned it in the face of threats from the corporation. The tension has sharpened the debate about whether the city can retain its identity as one of the most progressive in the country, or is destined to be just another tech hub.</p>';
    break;

    case 'Sunday' :
    $cliche = '<h2>The Seattle Freeze</h2>';
    $pic = 'seattlefreeze.jpg';
    $alt = 'freeze';
    $content = '<p>Forget about trying to make friends here. Almost half of Pacific Northwest residents don’t even want to talk briefly to people they don’t already know.

    That’s among the results of a recent survey by Seattle-based Pemco Insurance that seems to give credence to the phenomenon known as the Seattle Freeze: Northwesterners’ reputation for making it hard to form new friendships.
    
    About 40% of the poll’s 1,200 respondents in Washington and Oregon said it’s not important for them to make new friends.
    
    “That’s almost double the number of people on the other side, who say it’s important, or very important, to make new friends,” said Derek Wing, a spokesman for Pemco, which released the results of the poll last month.
    
    “You’ve heard of FOMO (fear of missing out), right? Well, here, we see a lot of JOMO: joy of missing out,” Wing said. “People here say, ‘There’s a party I’m not going to, and I’m glad I’m not going to it."
    
    A whopping 49 percent said they don’t even want to interact with people they don’t know.</p>';
    break; 
    }   

// emailable form php!

// Cannot echo above the doctype
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have successfully logged on!';
$errors = array();

$order = '';
$menu = '';
$payment = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$order_Err = '';
$menu_Err = '';
$payment_Err = '';
$comments_Err = '';
$privacy_Err = '';
$phone_Err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
    $first_name_Err = 'Please fill out your First Name';
    } else {
        $first_name = $_POST['first_name'];
    }

if(empty($_POST['last_name'])) {
    $last_name_Err = 'Please fill out your Last Name';
    } else {
        $last_name = $_POST['last_name'];
    }

if(empty($_POST['email'])) {
    $email_Err = 'Please fill out your Email';
    unset($_POST['email']);  // invalid format
    } else {
        $email = $_POST['email'];
    }

if(empty($_POST['order'])) {
    $order_Err = 'Please check type of order';
    } else {
        $order = $_POST['order'];
    }

if(empty($_POST['menu'])) {
    $menu_Err = 'Please select at least one region';
    } else {
        $menu = $_POST['menu'];
    }

if($_POST['payment'] == NULL) {
    $payment_Err = 'Please select your method of payment';
    } else {
        $payment = $_POST['payment'];
    }

if(empty($_POST['comments'])) {
    $comments_Err = 'Please share your comments with us!';
    } else {
        $comments = $_POST['comments'];
    }

if(empty($_POST['privacy'])) {
    $privacy_Err = 'Please agree to our privacy policy.';
    } else {
        $privacy = $_POST['privacy'];
    }

if(empty($_POST['phone'])) {  // if empty, type in your number
    $phone_Err = 'Please include your phone number!';
    unset($_POST['phone']);  // invalid format
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_Err = 'Invalid format!';
    unset($_POST['phone']);  // invalid format
    } else {
    $phone = $_POST['phone'];
    }
}

// the logic is if post menu is NOT empty, then...
// we need to grab the wines and display (just like in our implode.php)

function my_menu() {
$my_return = '';
if(!empty($_POST['menu'])) {
$my_return = implode(', ', $_POST['menu'] );
}
return $my_return;

} // closes function



if(isset(
$_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['order'],
$_POST['menu'],
$_POST['payment'],
$_POST['comments'],
$_POST['privacy'],
$_POST['phone']
)) {

$to = 'murphwillsurf@gmail.com';
$subject = 'Test Email,'  .date('m/d/y') ;
$body = '
The first name is: '.$first_name.' '.PHP_EOL.'
The last name is: '.$last_name.' '.PHP_EOL.'
Order: '.$order.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Payment: '.$payment.' '.PHP_EOL.'
Menu: '.my_menu().' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';

$headers = array (
'From' => 'noreply@murphwillsurf.com',
'Reply-to' => ''.$email.'',
);

mail($to, $subject, $body, $headers);
header('Location: thx.php');

}

} // end if server request
?>

<?php
$photos = array(
    'seattle1',
    'seattle2',
    'seattle3',
    'seattle4',
    'seattle5'
);

$photos[0] = 'seattle1';
$photos[1] = 'seattle2';
$photos[2] = 'seattle3';
$photos[3] = 'seattle4';
$photos[4] = 'seattle5';

$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg';


function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}

?>