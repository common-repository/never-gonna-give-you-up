<?php
/*
Plugin Name: Never Gonna Give You Up
Plugin URI: http://greeney.x10hosting.com/posts/19
Description: A slight modification of the "Hello, Dolly" plugin that comes with Wordpress. Displays the lyrics to the Rick Astley song "Never Gonna Give You Up", which has become an internet phenomenon, in the top right corner of the admin panel.
Author: Shannon Green
Version: 1.0
Author URI: http://greeney.x10hosting.com
*/

// The lyrics
$thesong = "We're no strangers to love
You know the rules and so do I
A full commitment's what's I'm thinking of
You wouldn't get this from any other guy
I just wanna tell you how I'm feeling
Gotta make you understand
Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye
Never gonna tell a lie and hurt you
We've known each other for so long
Your heart's been aching
But you're too shy to say it
Inside we both know what's been going on
We know the game and we're gonna play it
And if you ask me how I'm feeling
Don't tell me you're too blind to see
Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye
Never gonna tell a lie and hurt you
Give you up, give you up
Give you up, give you up
Never gonna give, give you up
Never gonna give, give you up";
// This splits up each line
$thesong = explode("\n", $thesong);
// This chooses a random line
$theline = wptexturize($thesong[mt_rand(0, count($thesong) - 1)]);

function never_gonna_give_you_up() {
	global $theline;
	echo "<p id='astley'>$theline</p>";
}

add_action('admin_footer', 'never_gonna_give_you_up');

/* If you want to change the colour, you can modify the hex value below. */
/* If you want to make it co-operate with "Hello, Dolly" then increase (or decrease)
the "top:" spacing by 1.0em. */
function astley_css() {
	echo "
	<style type='text/css'>
	#astley {
		position: absolute;
		top: 2.3em;
		margin: 0;
		padding: 0;
		right: 10px;
		font-size: 16px;
		color: #d54e21;
	}
	</style>
	";
}

add_action('admin_head', 'astley_css');

?>