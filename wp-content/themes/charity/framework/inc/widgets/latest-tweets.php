<?php
/*
Plugin Name: Latest Tweets Widget
Plugin URI: http://www.skatdesign.com/
Description: A simple widget to display the latest tweets.
Version: 1.00
Author: Skat
Author URI: http://www.skatdesign.com/
*/

// The widget class
class sd_tweets_widget extends WP_Widget {
	
	// Widget Settings
	function sd_tweets_widget() {
	
		$widget_ops = array( 'classname' => 'sd_tweets_widget', 'description' => __('A widget that displays your latest tweets.', 'framework') );
		$control_ops = "";
		$this->WP_Widget( 'sd_tweets_widget', __('Latest Tweets', 'framework'), $widget_ops, $control_ops );
	}
	
	// Widget Output
	function widget($args, $instance) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$username = $instance['username'];
		$consumer_key = $instance['consumer_key'];
		$consumer_secret = $instance['consumer_secret'];
		$access_token = $instance['access_token'];
		$access_token_secret = $instance['access_token_secret'];
		$tweetscount = $instance['tweetscount'];

		// Before the widget
		echo $before_widget;

		// Display the widget title if one was input
		if ( $title )
		echo $before_title . $title . $after_title;
		
		//Twitter OAUTH
		if($username && $consumer_key && $consumer_secret && $access_token && $access_token_secret && $tweetscount) { 
		$transName = 'sd_tweet'.$args['widget_id'];
		$cacheTime = 10;
		delete_transient($transName);
		if(false === ($twitterData = get_transient($transName))) {
		     // require the twitter auth class
		     @require_once 'twitteroauth/twitteroauth.php';
		     $twitterConnection = new TwitterOAuth(
							$consumer_key,	// Consumer Key
							$consumer_secret,   	// Consumer secret
							$access_token,       // Access token
							$access_token_secret    	// Access token secret
							);
		    $twitterData = $twitterConnection->get(
							  'statuses/user_timeline',
							  array(
							    'screen_name'     => $username,
							    'count'           => $tweetscount,
							    'exclude_replies' => false
							  )
							);
		     if($twitterConnection->http_code != 200)
		     {
		          $twitterData = get_transient($transName);
		     }

		     // Save our new transient.
		     set_transient($transName, $twitterData, 60 * $cacheTime);
		};
		$twitter = get_transient($transName);
		if($twitter && is_array($twitter)) {
		// Display the latest tweets
		?>
		
        <div class="latest-tweets">
		<ul>
        	<?php foreach($twitter as $tweet): ?>
			<li><span class="tweet-icon"></span>
			<?php
				$latestTweet = $tweet->text;
				$latestTweet = preg_replace('/http:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '&nbsp;<a href="http://$1" target="_blank">http://$1</a>&nbsp;', $latestTweet);
				$latestTweet = preg_replace('/@([a-z0-9_]+)/i', '&nbsp;<a href="http://twitter.com/$1" target="_blank">@$1</a>&nbsp;', $latestTweet);
				echo $latestTweet;
			?>
			<span class="time-ago">
			<?php
				$twitterTime = strtotime($tweet->created_at);
				$timeAgo = $this->ago($twitterTime);
			?>
			<a href="http://twitter.com/<?php echo $tweet->user->screen_name; ?>/statuses/<?php echo $tweet->id_str; ?>" ><?php echo $timeAgo; ?></a>
			</span>
			</li>
			<?php endforeach; ?>
        </ul>
        </div>
		<?php 
		}}
		// After the widget
		echo $after_widget;
		
		}
	
	function ago($time)
	{
	   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
	   $lengths = array("60","60","24","7","4.35","12","10");

	   $now = time();

	       $difference     = $now - $time;
	       $tense         = "ago";

	   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	       $difference /= $lengths[$j];
	   }

	   $difference = round($difference);

	   if($difference != 1) {
	       $periods[$j].= "s";
	   }

	   return "$difference $periods[$j] ago ";
	}
	// Update the widget		
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['username'] = strip_tags( $new_instance['username'] );
		$instance['consumer_key'] = strip_tags( $new_instance['consumer_key'] );
		$instance['consumer_secret'] = strip_tags( $new_instance['consumer_secret'] );
		$instance['access_token'] = strip_tags( $new_instance['access_token'] );
		$instance['access_token_secret'] = strip_tags( $new_instance['access_token_secret'] );
		$instance['tweetscount'] = strip_tags( $new_instance['tweetscount'] );

		return $instance;
	}

	// Widget panel settings
	function form( $instance ) {

	// Default widgets settings
		$defaults = array(
		'title' => 'Twitter Feed',
		'username' => '',
		'consumer_key' => '',
		'consumer_secret' => '',
		'access_token' => '',
		'access_token_secret' => '',
		'tweetscount' => '3'
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		
		
		<p><a href="http://dev.twitter.com/apps" target="_blank">Learn more about creating a twitter APP</a></p>
		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'framework') ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- Username: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'username' ); ?>"><?php _e('Twitter Username e.g. skatdesign', 'framework') ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'username' ); ?>" name="<?php echo $this->get_field_name( 'username' ); ?>" value="<?php echo $instance['username']; ?>" />
		</p>
		
		<!-- Consumer Key: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'consumer_key' ); ?>"><?php _e('Consumer Key', 'framework') ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'consumer_key' ); ?>" name="<?php echo $this->get_field_name( 'consumer_key' ); ?>" value="<?php echo $instance['consumer_key']; ?>" />
		</p>
		
		<!-- Consumer Secret: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'consumer_secret' ); ?>"><?php _e('Consumer Secret', 'framework') ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'consumer_secret' ); ?>" name="<?php echo $this->get_field_name( 'consumer_secret' ); ?>" value="<?php echo $instance['consumer_secret']; ?>" />
		</p>
		
		<!-- Access Token: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'access_token' ); ?>"><?php _e('Access Token', 'framework') ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'access_token' ); ?>" name="<?php echo $this->get_field_name( 'access_token' ); ?>" value="<?php echo $instance['access_token']; ?>" />
		</p>
		
		<!-- Access Token Secret: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'access_token_secret' ); ?>"><?php _e('Access Token Secret', 'framework') ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'access_token_secret' ); ?>" name="<?php echo $this->get_field_name( 'access_token_secret' ); ?>" value="<?php echo $instance['access_token_secret']; ?>" />
		</p>
		
		<!-- Tweetscount: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'tweetscount' ); ?>"><?php _e('Number of tweets (max 20)', 'framework') ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'tweetscount' ); ?>" name="<?php echo $this->get_field_name( 'tweetscount' ); ?>" value="<?php echo $instance['tweetscount']; ?>" />
		</p>
		
	<?php
	}
}
// Register and load the widget
function sd_tweets_widget() {
	register_widget( 'sd_tweets_widget' );
}
add_action( 'widgets_init', 'sd_tweets_widget' );
?>