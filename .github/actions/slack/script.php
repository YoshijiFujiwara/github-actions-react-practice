<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

var_dump($argv);
var_dump($_ENV);

// $response = Requests::post(
//   'https://hooks.slack.com/services/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',
//   array(
//     'Content-type' => 'application/json'
//   ),
//   json_encode(array(

//     'blocks' =>
//     array(
//       0 =>
//       array(
//         'type' => 'section',
//         'text' =>
//         array(
//           'type' => 'mrkdwn',
//           'text' => 'You have a new request:
//     *<fakeLink.toEmployeeProfile.com|Fred Enriquez - New device request>*',
//         ),
//       ),
//       1 =>
//       array(
//         'type' => 'section',
//         'fields' =>
//         array(
//           0 =>
//           array(
//             'type' => 'mrkdwn',
//             'text' => '*Type:*
//     Computer (laptop)',
//           ),
//           1 =>
//           array(
//             'type' => 'mrkdwn',
//             'text' => '*When:*
//     Submitted Aut 10',
//           ),
//           2 =>
//           array(
//             'type' => 'mrkdwn',
//             'text' => '*Last Update:*
//     Mar 10, 2015 (3 years, 5 months)',
//           ),
//           3 =>
//           array(
//             'type' => 'mrkdwn',
//             'text' => '*Reason:*
//     All vowel keys aren\'t working.',
//           ),
//           4 =>
//           array(
//             'type' => 'mrkdwn',
//             'text' => '*Specs:*
//     "Cheetah Pro 15" - Fast, really fast"',
//           ),
//         ),
//       ),
//       2 =>
//       array(
//         'type' => 'actions',
//         'elements' =>
//         array(
//           0 =>
//           array(
//             'type' => 'button',
//             'text' =>
//             array(
//               'type' => 'plain_text',
//               'emoji' => true,
//               'text' => 'Approve',
//             ),
//             'style' => 'primary',
//             'value' => 'click_me_123',
//           ),
//           1 =>
//           array(
//             'type' => 'button',
//             'text' =>
//             array(
//               'type' => 'plain_text',
//               'emoji' => true,
//               'text' => 'Deny',
//             ),
//             'style' => 'danger',
//             'value' => 'click_me_123',
//           ),
//         ),
//       ),
//     ),

//   ))
// );

// var_dump($response);

// if (!$response->success) {
//   echo $respnose->body;
// }
