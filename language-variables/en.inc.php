<?php

# langfile for all
$langs['general_top'] = 'Top of Page';
$langs['httpapi_noserver']    = 'Please insert the Server-E-Mailaddress or Server-ID.';
$langs['httpapi_notvalidserver'] = 'Server-E-Mailaddress is not correct.';
$langs['httpapi_noapikey']    = 'Please insert the API-Key from the Server.';
$langs['httpapi_logs']        = 'Please insert the Logfiles, and more than 20 Signs.';
$langs['httpapi_ip']          = 'Please insert the Attacker-IP or the IP is invalid.';
$langs['httpapi_serverunknown'] = 'Error on the Server-Data, false e-mailaddress, false server-id....?';
$langs['httpapi_senderapi']   = 'The API-Key is not the Api-Key from the Server.';
$langs['httpapi_reported10']  = 'IP-Address is already reported from your Server in the last 10 Minutes.';
$langs['httpapi_noservice']   = 'Please choose the impugned service.';
$langs['httpapi_serverempty'] = 'Please add your Server-ID or Server-From-Address.';

$langs['httpapi_help']        = '
        <h2>English:</h2><br />
    Call: <strong>http://www.blocklist.de/en/httpreports.html?</strong>
    <br />
    <h3>required Variables:</h3>
    <br />
        <strong>email</strong>: string (E-Mailaddress from Server or ID)
        <br />
        <strong>apikey: </strong> string (in your Profil under SERVER)
        <br />
        <strong>ip</strong>: string (ipv4/ipv6 Address) (Attacker)
        <br />
        <strong>service: </strong> string (Service which was attacked (ssh, imap, ftp...))
        <br />
        <strong>logs</strong>: text (Logfiles)
                <br />
                <strong>format</strong>: text, json, php, xml (Error-Message/OK-Message/Return-Values format)
<br />
<br />
    Version 0.0.0.1

';




$langs['contact_daten'] = 'Insert your Sender-IP!';
$langs['contact_display'] = 'Insert your Display-Name!';
$langs['contact_email1'] = 'Insert your E-Mail-Address for Answer!';
$langs['contact_error'] = 'Error! Please check your data!';
$langs['contact_mitteilung1'] = 'Insert your Question or Data!';
$langs['contact_mitteilung2'] = 'Please enter more than 15 characters.';
$langs['contact_noip'] = 'IP address is not an valid IPv4/IPv6 address';
$langs['contact_noja'] = 'Please confirm with JA';
$langs['contact_noja2'] = 'Please insert exact JA';
$langs['contact_rid'] = 'The RID is only numeric.';
$langs['contact_sender1'] = 'Insert your Fail2Ban-From-Address!';
$langs['contact_sender2'] = 'Your Address is incorrect (correct: mailbox@domain.tld)!';
$langs['contact_server'] = 'Insert your Number of Server!';
$langs['contact_typ'] = 'Pleae select an subject!';
$langs['data_currentpwd'] = 'Please insert your current Password.';
$langs['data_currentpwd2'] = 'Your current Password is incorrect!';
$langs['data_newpwd'] = 'Please insert your new password.';
$langs['data_newpwd2'] = 'Your new Password must have more than 8 characters.';
$langs['data_newpwd3'] = 'Please confirm your new password again.';
$langs['data_newpwd4'] = 'Your new Password does not match.';
$langs['data_sucess'] = 'Your Profile has been updated.';
$langs['delete_confirm'] = 'Confirmation link to delete your account';
$langs['delist_already'] = 'The IP has already been deleted from the download list.';
$langs['delist_error'] = 'Sorry, but we could not save the entry.';
$langs['delist_errors'] = 'An error occurred.';
$langs['delist_notfound'] = 'We could not find any entries for this IP.';
$langs['delist_sucess'] = 'IP marked as fixed and cleaned and deleted from the download-list (in the next 10 Minutes).';
$langs['disable_subject'] = 'Blocking your E-Mailaddress on www.blocklist.de';
$langs['error_db'] = 'Could not enter the data into the database. Please try again!';
$langs['error_mail'] = 'Sorry, could not connect to the Mailserver. Please try again.';
$langs['error_more'] = 'There are multiple errors occurred.';
$langs['error_one'] = 'An unexpected error is occured.';
$langs['error_system'] = 'Unfortunately, the data given do not agree with the system.';
$langs['export']['all'] = 'All IP addresses that have attacked one of our customers/servers in the last 48 hours.';
$langs['export']['apache'] = 'All IP addresses which have been reported within the last 48 hours as having run attacks on the service Apache, Apache-DDOS, RFI-Attacks.';
$langs['export']['asterisk'] = 'All IP addresses that tried to login in a SIP-, VOIP- or Asterisk-Server and are inclueded in the IPs-List from <a href="https://twitter.com/#!/voipabuse" title="http://www.infiltrated.net/">http://www.infiltrated.net/</a> (Twitter).';
$langs['export']['bots'] = 'All IP addresses which have been reported within the last 48 hours as having run attacks attacks on the RFI-Attacks, REG-Bots, IRC-Bots or BadBots (BadBots = he has posted a Spam-Comment on a open Forum or Wiki).';
$langs['export']['ftp'] = 'All IP addresses which have been reported within the last 48 hours for attacks on the Service FTP.';
$langs['export']['imap'] = 'All IP addresses which have been reported within the last 48 hours for attacks on the Service imap, sasl, pop3.....';
$langs['export']['mail'] = 'All IP addresses which have been reported within the last 48 hours as having run attacks on the service Mail, Postfix.';
$langs['export']['ssh'] = 'All IP addresses which have been reported within the last 48 hours as having run attacks on the service SSH.';
$langs['export']['bruteforcelogin'] = 'All IPs which attacks Joomlas, Wordpress and other Web-Logins with Brute-Force Logins.';
$langs['export']['strongips'] = 'All IPs which are older then 2 month and have more then 5.000 attacks.';
$langs['export']['sip'] = $langs['export']['asterisk'];
$langs['export']['ircbots'] = 'All IPs which create goatse-Spam in IRC-Channels or connected them as an hacked System and get from there the new commandos.....';
$langs['insert_email'] = 'Please insert an abuse-address';
$langs['insert_emailnotyour'] = 'The Address is used by a other User';
$langs['insert_error1'] = 'Error on insert Data into the Blocklist';
$langs['insert_ip'] = @$langs['search_ip'];
$langs['insert_ipexists'] = 'IP is already in our database. Please edit your Server-Profile.';
$langs['insert_norelay'] = 'The Abuse-Address is not in relationship with the IP';
$langs['insert_notyours'] = 'This server is not associated with your account. (you silly Hacker *g*)';
$langs['insert_ok1'] = 'For the IP will be never sent Reports already to date:';
$langs['insert_ok2'] = 'For the IP and Abuse-Address we dont sent longer now Reports to date:';
$langs['insert_ok3'] = 'For the IP and Abuse-Address will be already no longer sent Reports to date:';
$langs['insert_tolate'] = 'We have no Attacks from this IP from the last 14 Days. Too old';
$langs['login_blocked'] = 'Your Account is blocked/offline; Reason:';
$langs['login_email1'] = 'Please insert your e-mail-address!';
$langs['login_email2'] = 'Your e-mail is to <strong>long</strong> (max. 100 Sign)!';
$langs['login_email3'] = 'E-Mailaddress or Password wrong!';
$langs['login_emailblocked'] = 'The E-Mailaddress/Username was blocked.';
$langs['login_nofound'] = 'No Username/E-Mail found for the data!';
$langs['login_offline'] = 'Your Account is offline, because your Address is false or other stuff:';
$langs['login_registerres1'] = 'It still runs a registry with this name (max. 7 days)';
$langs['login_registerres2'] = 'sent the Register-Mail again.';
$langs['login_subject'] = 'User-Login to your Server-Management';
$langs['password_allparams'] = 'This verification link is invalid. Please use a valid link, or request a new one.';
$langs['password_allready'] = 'This verification link was already used on {TEXTHALTER}.';
$langs['password_allready2'] = 'This verification link was already used on {TEXTHALTER} and the Address blocked/activated.';
$langs['password_confirm'] = 'Confirmation link for a new password on blocklist.de';
$langs['password_erroractive'] = 'Failed to activate the new password. Please get in touch with our support.';
$langs['password_errorid'] = 'Failed to update the data. Please contact our support with the <strong>ID: {TEXTHALTER}</strong>';
$langs['password_name1'] = 'Please insert your Username!';
$langs['password_name2'] = 'Your Username is too <strong>long</strong> (max. 100 characters)!';
$langs['password_name3'] = 'Your Username is <strong>invalid</strong> (min. 3, max. 100 characters)!';
$langs['password_nofound'] = 'The address does not match the name.';
$langs['password_nofound2'] = 'Unfortunately, no requirement to find a password with the given parameters.';
$langs['password_nofound3'] = 'Unfortunately, other parameters of the link to vote is not in accordance with the stored data';
$langs['password_regkey'] = 'Unfortunately it is the passed RegKey not match the registered.';
$langs['password_success'] = 'Your new password for your account on blocklist.de';
$langs['password_toold'] = 'Unfortunately, the email verification request has expired. Please register again to receive a new confirmation link and remember to verify it within 12 hours.';
$langs['pleasechange'] = 'Please change your password so that it can be saved with a new salting and hashing method we recently implemented. That new salting and hashing method is more dynamic and stronger.';
$langs['profil_apikey'] = 'The API-Key will be populated after you save your profile.';
$langs['profil_logout'] = 'You have been logged out.';
$langs['register_agb'] = 'Please accept the <a href="http://www.blocklist.de/de/terms.html" title="Terms and private policy" target="_blank">Terms</a>!';
$langs['register_allparams'] = 'Please call the link with all parameters, or let you resent the Confirmation-Mail.';
$langs['register_complete'] = 'Registration complete, your Login-Data for www.blocklist.de';
$langs['register_confirm'] = 'Link confirmation of registration for the account on blocklist.de';
$langs['register_emailfound'] = 'The Address is already used.';
$langs['register_name3'] = 'The Username already exists or blocked. Please use a other name.';
$langs['register_name4'] = 'A Registration with the Name is allready in process.';
$langs['register_noactive'] = 'We could not activate your Account. Please contact us with your E-Mailaddress.';
$langs['register_resend'] = 'Sent the Registration-Mail again';
$langs['register_subject'] = 'Register an account to report it from attacks.';
$langs['register_toold'] = 'Your Link is older than 7 Days. Please create a new Registration again.';
$langs['replace_error'] = 'Error: Entry could not be saved.';
$langs['replace_hacked'] = 'Feld was manipulated!';
$langs['replace_notdel'] = 'Couldn\'t delete the selected entry.';
$langs['replace_notempty'] = 'Content must not be empty or contain spaces.';
$langs['replace_notyou'] = 'The entry doesn\'t belong to your user.';
$langs['replace_saved'] = 'Settings saved successfully.';
$langs['replace_tolong'] = 'Value must be no larger than 255 characters!';
$langs['replace_tosmal'] = 'Value must be longer than 3 characters!';
$langs['resend_noregister'] = 'There is no Registration process with the name/address.';
$langs['resend_nouser'] = 'The Username does not exists.';
$langs['resend_regkey'] = 'Please insert the RegKey.';
$langs['resend_regkey2'] = 'The RegKey was only numbers.';
$langs['resend_subject'] = 'Confirmation Mail from blocklist.de (again)';
$langs['resend_tomuch'] = 'Sorry, but have allready sent a Confirmation-Mail in the last minutes. Please try again later.';
$langs['search_as'] = 'Please insert an AS-Number';
$langs['search_counterreset'] = ' <small>(only in this month)</small>';
$langs['search_counterreset2'] = '<smal>(complete time)</small>';
$langs['search_ip'] = 'Please insert an IP-address or an AS-number';
$langs['search_ip'] = 'Please insert the correct Data (RID, IP).';
$langs['search_nofound'] = 'We could not found any matches about your search string';
$langs['search_noipv4'] = 'Your IP is not correct (only ipV4).';
$langs['search_notuse'] = 'not in use';
$langs['search_takealook'] = 'Please take also a look to <a href="http://honeystats.info/glastopf_rbldnsd.zone" title="Honeystats.info RFI-Attacks">http://honeystats.info/</a> if your Search returns no matches.';
$langs['server_add'] = 'Add new Server';
$langs['server_delete'] = 'Delete your Server "{TEXTHALTER}".';
$langs['server_edit'] = 'Edit your Server "{TEXTHALTER}".';
$langs['server_ids'] = 'Please add your SERVER-ID into the Request.';
$langs['server_list'] = 'Show Attacks on your Server "{TEXTHALTER}".';
$langs['server_notyours'] = 'We could not found any Server with the Server-ID to your Customer-ID!';
$langs['server_nums'] = 'Currently, you have entered {TEXTHALTER} Server.';
$langs['server_settimezone'] = 'Please edit your Server and set a timezone!';
$langs['server_sucess'] = 'Your server was saved/deleted successful.';
$langs['server_timezone'] = 'Please choose the timezone which is set on you server.';
$langs['server_usetime'] = 'Please choose the Timezone of your Server.';
$langs['session_already'] = 'You are already logged in!';
$langs['session_nopermissions'] = 'You do not have enough permissions to access this site!';
$langs['session_notloged'] = 'You are not logged in!';
$langs['session_pleaselogin'] = 'You are not logged in. Please login!';
$langs['session_tooold'] = 'You have been inactive for too long - please log in again!';
$langs['title_allstats'] = 'www.blocklist.de -- All User on one Statistic for comparison)';
$langs['title_api'] = 'API from www.blocklist.de. Show Server- or all User-Statistics for your own Homepage/Scripts';
$langs['title_rbldns'] = 'Use the IP-List over DNS (RBLDNS) to block IPs faster';
$langs['title_httpreports'] = 'Report Attacks over GET-/POST-Request to blocklist.de without Fail2Ban or Mail';
$langs['title_contact'] = 'Contactform, ask us or sent us your Server-Data to sent Report over us.';
$langs['title_data'] = 'Change your Profile/Settings.';
$langs['title_delete'] = 'Delete your Account from www.blocklist.de.';
$langs['title_delist'] = 'Delete your IP from the 24h List earlier.';
$langs['title_downloads'] = 'Download our Reporting-Scripts to sent your Reports self (in proccess).';
$langs['title_export'] = 'www.blocklist.de -- Export all Attacker-IPs from the last 48 Hours.';
$langs['title_graph'] = 'Graphical Statistics over our Attacks (for which Service) and sum our Reports';
$langs['title_home'] = 'www.blocklist.de -- Fail2Ban-Reporting Service (we sent Reports from Attacks on Postfix, SSH, Apache-Attacks, Spambots, irc-Bots, Reg-Bots, DDos and more) from Fail2Ban via X-ARF.';
$langs['title_index'] = $langs['title_home'];
$langs['title_imprint'] = 'Imprint from www.blocklist.de';
$langs['title_insert'] = 'www.blocklist.de -- Stop Reports for a IP and E-Mail-Address for 7 Days to fix the Problem.';
$langs['title_list'] = 'Show Attacks on your Server';
$langs['title_login'] = 'Login to your Account on www.blocklist.de';
$langs['title_partners'] = 'www.blocklist.de -- our Partners, who sent us Fail2Ban-Reports';
$langs['title_password'] = 'Create a new password for your account on blocklist.de.';
$langs['title_profil'] = 'www.blocklist.de -- Your Customer-Login for your Account on blocklist.de';
$langs['title_register'] = 'Register a Account for ww.blocklist.de';
$langs['title_register1'] = 'Confirm your Registration on www.blocklist.de';
$langs['title_register2'] = 'Blocking e-mail addresses for registration on www.blocklist.de';
$langs['title_replace'] = 'www.blocklist.de -- Replace automatically Data from your Reports.';
$langs['title_reports'] = 'summary Reports from the Attacks and Reports from your Server.';
$langs['title_resend'] = 'Resent the Confirmation-Mail from blocklist.de again.';
$langs['title_server'] = 'Your entered Server on blocklist.de';
$langs['title_servergraph'] = 'Graphical Statistics over our Attacks and Server.';
$langs['title_serverstats'] = 'Graphical Statistics over your Attacks pro Server.';
$langs['title_statistics'] = 'www.blocklist.de -- Statistics about the last Attacks from IP, ASN, Country.... and more.';
$langs['title_statisticsmonth'] = 'Statistics about the Attacks from only the current month (IPs, ASN, Countrys...).';
$langs['title_terms'] = 'Terms and private Policy for an Account on blocklist.de';
$langs['title_trylater'] = 'Coming soon. Please wait a few days';
$langs['title_whitelist'] = 'Add your own IP-Address into the Whitelist from blocklist.de';
$langs['title_logs']  = 'Show Logs again from the Report.';
$langs['whitelist_error'] = 'Error: Settings could not be saved.';
$langs['whitelist_hacked'] = 'Field was manipulated!';
$langs['whitelist_notdel'] = 'Couldn\'t delete the entry.';
$langs['whitelist_notempty'] = 'Content must not be empty or contain spaces.';
$langs['whitelist_notyou'] = 'The Entry doesn\'t belong to your user.';
$langs['whitelist_saved'] = 'Settings saved successfuly.';
$langs['whitelist_tolong'] = 'Value must be no larger than 255 characters!';
$langs['whitelist_tosmal'] = 'Value must be longer than 3 characters!';

$langs['insert_ip'] = $langs['search_ip'];


$langs['utitle_home']       = 'What is www.BlockList.de?';
$langs['utitle_search']     = 'Search for IP or AS-numbers on blocklist.de';
$langs['utitle_contact']    = 'Contact us about Questions, Whishes, Bugs...';
$langs['utitle_contact_sent'] = 'Message successfully sent';
$langs['utitle_searchresult'] = 'Search-Result for IP or AS-numbers';
$langs['utitle_partners']   = 'Partners/Sponsors from www.blocklist.de';
$langs['utitle_statistics'] = 'Statistics about reported Attacks';
$langs['utitle_statisticsmonth'] = 'Statistics for the current month';
$langs['utitle_statisticsgraph'] = 'Graphical Statistics';
$langs['utitle_graph']       = 'Graphical Statistics';
$langs['utitle_insert']     = 'Stop Reports for 7 Days';
$langs['utitle_login']      = 'Login to your Profile';
$langs['utitle_register']   = $langs['title_register'];
$langs['utitle_register1']  = $langs['title_register1'];
$langs['utitle_registere']  = $langs['title_register2'];
$langs['utitle_resend']     = 'Resent the Confirmation-Mail again';
$langs['utitle_delist']     = 'Remove IP earlier from list';
$langs['utitle_api']        = 'API/RBL/DNS from www.blocklist.de';
$langs['utitle_rbldns']     = 'Using blocklist over DNS/RBL faster';
$langs['utitle_downloads']  = 'Our Reporting-Tool and other Downloads';
$langs['utitle_httpreports'] = 'Reports Attacker over GET-/POST-Requests';
$langs['utitle_export']     = 'Export all blocked IPs';
$langs['utitle_imprint']    = 'Imprint from www.blocklist.de';
$langs['utitle_userlogin']      = 'Login into your Profile';
$langs['utitle_terms']      = 'Our Terms and Privacy Policy';
$langs['utitle_register.resend']     = 'Resent the Confirmation-Mail';
$langs['utitle_register.confirm'] = 'Registration Step 2 from 2';
$langs['utitle_register.block'] = 'Registration step 2 from 2 (blocing)';
$langs['utitle_password']    = 'Create a new password';
$langs['utitle_view'] = 'View Attacks from the IP: '.htmlspecialchars(trim(@$_GET['ip'])).' ';
$langs['utitle_xarf-validator'] = 'X-ARF Validator';
$langs['utitle_xarf-validator-report'] = 'X-ARF Validator for the Yaml-Reports';


$langs['utitle_profile_replace'] = 'Replace Data from your Reports';
$langs['utitle_profile_index'] = 'Server-Management/Profile';
$langs['utitle_profile_server'] = 'Your active Server';
$langs['utitle_profile_server.edit'] = 'Add/edit your Server';
$langs['utitle_profile_server.delete'] = 'Delete a Server';
$langs['utitle_profile_whitelist'] = 'IP Whitelist';
$langs['utitle_profile_statistics'] = 'Server Statistics (Own Server)';
$langs['utitle_profile_change'] = 'Change your Profile/Settings';
$langs['utitle_profile_delete'] = 'Delete your Account';
$langs['utitle_profile_reports'] = 'daily-/weekly-/monthly- summery Reports.';
$langs['utitle_profile_server.list'] = 'Result for the Server {$serverid} Counts: {$maxcounts} complete time';
$langs['utitle_profile_allstats'] = 'Graphical Statistics all Users';
$langs['utitle_logout'] = 'You have been logged out.';
$langs['utitle_profile_logout'] = $langs['utitle_logout'];
$langs['title_profile'] = 'Your Login/Profile on blocklist.de';
$langs['utitle_profile'] = $langs['title_profile'];
$langs['utitle_error'] = 'Error: automatically logout';
$langs['utitle_error'] = 'View Logs from a report';


