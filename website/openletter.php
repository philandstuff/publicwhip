<?php require_once "common.inc";
require_once "db.inc";

# $Id: openletter.php,v 1.1 2011/04/11 13:20:43 publicwhip Exp $

# The Public Whip, Copyright (C) 2003 Francis Irving and Julian Todd
# This is free software, and you are welcome to redistribute it under
# certain conditions.  However, it comes with ABSOLUTELY NO WARRANTY.
# For details see the file LICENSE.html in the top level of the source.
$paddingforanchors = true; $title = "Open letter to people who want to know how their MP votes"; pw_header();

$db = new DB(); 
$referrer = $_SERVER["HTTP_REFERER"];
$querystring = $_SERVER["QUERY_STRING"];
$ipnumber = $_SERVER["REMOTE_ADDR"];
if (!$referrer)
    $referrer = $_SERVER["HTTP_USER_AGENT"];
if (!isrobot())
    $db->query("INSERT INTO pw_logincoming
            (referrer, ltime, ipnumber, page, subject, url, thing_id)
    VALUES ('$referrer', NOW(), '$ipnumber', 'faq', '', '$querystring', '')");


?>

<p>Dear voter,

<p>We've been running Public Whip for almost 8 years now.

<p>It remains the only way you can easily find out how your MP voted.

<p>People use it and rely on it, it has become core infrastructure of the UK
political scene. 

<p>Luckily the bulk of the maintenance is done by <a
href="http://www.mysociety.org">mySociety</a>, who keep the Parliament Parser
running, which they also need for <a href="http://www.theyworkforyou.com/">TheyWorkForYou</a>. 
We thank them for that. But even so, there is still work that needs doing on
Public Whip itself from time to time.

<p>Yep, it's our fault for not making it sustainable. For not building an
organisation at the start that could maintain it for a long time. Foolishly we
thought that a well funded organisation like Parliament or the BBC or mabe even
an NGO might have taken it on by now. 

<p>Alas, I still can't find out how Julian's MP Louise Ellman voted on the Iraq war from <a href="http://www.parliament.uk/biographies/louise-ellman/25701">her Parliament page</a>. And the BBC's massively
well funded Democracy Live, <a href="http://news.bbc.co.uk/democracylive/hi/">has
nothing about voting at all</a>. As if MPs just turned up in Parliament like some weird 
version of Question Time that the editor hasn't cut enough, rather than having an actual
means of asserting power while they are there.

<p>There's loads of things you could do with Public Whip. It's not the difficulty
of maintaining it that is the sad thing, it is the opportunity cost of nobody
who cares about it iterating on it and improving it.

<p>If you want to know how your MP voted, you can still find out. Phone them up.
Click through zillions of pages on the Parliament website. Watch the video on
Democracy Live, maybe you'll get to see them creeping into the wrong lobby.

<p>Maybe it doesn't matter any more how your MP votes. Perhaps you should
give up and head to the <a href="http://www.dark-mountain.net/">Dark Mountain
Conference</a>, <a href="http://scraperwiki.com/">run your startup</a>, or 
<a href="http://www.freesteel.co.uk/wpblog/2011/04/another-fortnight-ticks-by/">Kayak in the sea</a>.

<p>Yeah, that's probably best. It feels like summer now anyway.

<p>Francis
<br>Spring, 2011

<p><strong>Update:</strong> Enough people seem to find it day to day useful,
that we're instead leaving it running until 27th July 2011, to give
people time to migrate. Please <a
href="http://www.publicwhip.org.uk/forum/viewtopic.php?t=2520">discuss and
suggest solutions here</a>.</p>

<?php pw_footer() ?>
