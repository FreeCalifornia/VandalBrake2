<?php
$messages = array();

$messages['en'] = array(
  'vandallogname'                      => 'Vandal log',
  'vandallogheader'                    => "This is a log of the vandal brake extension.\n" .
                                          "Automatically blocked IP addresses are not listed.\n" .
                                          "See the [[Special:VandalBin|vandal bin]] for the list of currently operational bans and blocks.",
  'vandallogparole'                    => 'paroled $1',
  'vandallogvandal'                    => 'vandal binned $1 ($2)',
  'vandallogauto'                      => 'Autoblocked because your IP address has been recently used by "[[User:$1|$1]]". The reason given for $1\'s block is: "$2" ',
  'vandalbrakenotice'                  => '\'\'\'You are unable to edit because you have been placed into the vandal bin.\'\'\' You will be able to edit again in $1 minutes.<br/>You were put in the vandal bin by $2 and the reason given was: "$3".<br/>The block ID is #$4. Please include this in any queries.',
  'vandalbrakenoticeblock'             => 'You are unable to edit because you have been placed into the vandal bin. The reason given was: "$1". You will be able to edit again in $2 minutes.',
  'vandalbrakenoticeapi'               => 'You are unable to edit because you have been placed into the vandal bin. You will be able to edit again in $1 minutes. You were put in the vandal bin by $2 and the reason given was: "$3". The block ID is #$4. Please include this in any queries.',
  'vandalbrakenoticeaccountcreation'   => 'You cannot create an account because you have been placed in the vandal bin. You were put in the vandal bin by $1 and the reason given was: "$2". The block ID is #$3. Please include this in any queries.',
  'vandalbrake'                        => 'Vandal Brake',
  'vandalbin'                          => 'Vandal binned IP addresses and usernames',
  'paroletitle'                        => 'Parole a username or IP address',
  'vandal'                             => 'Vandal',
  'parole'                             => 'Parole',
  'vandallog-fullog'                   => 'Full vandal log',
  'parole-addr'                        => 'Parole $1',
  'parole-any'                         => 'Parole a username or IP address',
  'vandalbin-addr'                     => 'View vandal bin for $1',
  'vandalbin-any'                      => 'View vandal bin',
  'vandalbin-contribs'                 => 'vandal bin',
  'vandallog-contribs'                 => 'Vandal log',
  'parolelink'                         => 'parole',
  'vandalbraketext'                    => 'Use the form below to limit a user\'s edit rate.',
  'paroletext'                         => 'Use the form below to remove the limit on a user\'s edit rate.',
  'parolelegend'                       => 'Parole a username or IP address',
  'vandalbintext'                      => 'This is a list of users currently in the vandal bin.',
  'vandalbin-legend'                   => 'Find a vandal binned user',
  'vandalbin-empty'                    => 'The vandal bin is empty.',
  'vandalbin-notfound'                 => 'The requested IP address or username is not in the vandal bin',
  'vandalsuccessub'                    => 'Vandal binning succeeded',
  'vandalsuccesstext'                  => '[[Special:Contributions/$1|$1]] has been vandal binned',
  'parolesuccessub'                    => 'Paroling succeeded',
  'parolesuccesstext'                  => '[[Special:Contributions/$1|$1]] has been paroled',
  'parolesuccesstextanon'              => 'User has been paroled',
  'vandalbinmsg'                       => '$1, $2 moved $3 to vandal bin',
  'vandalnot'                          => 'User is not a vandal',
  'vandalalready'                      => 'User is already a vandal',
  'editlimitnotice'                    => '\'\'\'You are unable to edit because of the edit rate limit.\'\'\' You will be able to edit again in $1 seconds',
  'editlimitnoticeapi'                 => 'You are unable to edit because of the edit rate limit. You will be able to edit again in $1 seconds',
  'right-vandalbin'                    => 'Put users in the vandal bin',
);
