<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Codebase Name
    |--------------------------------------------------------------------------
    |
    | Name of Codebase
    |
    */

    'codebase' => 'UNIT3D Community Edition (Nex-Gen Torrent Tracker) v5.2.0',

    /*
    |--------------------------------------------------------------------------
    | Site title
    |--------------------------------------------------------------------------
    |
    | Title of Site
    |
    */

    'title' => 'Riff.CC Alpha',

    /*
    |--------------------------------------------------------------------------
    | Site SubTitle
    |--------------------------------------------------------------------------
    |
    | SubTitle
    |
    */

    'subTitle' => 'Free the world\'s culture.',

    /*
    |--------------------------------------------------------------------------
    | Site email
    |--------------------------------------------------------------------------
    |
    | Email address to send emails
    |
    */

    'email' => env('DEFAULT_OWNER_EMAIL', 'benjamin@riff.cc'),

    /*
    |--------------------------------------------------------------------------
    | Meta description
    |--------------------------------------------------------------------------
    |
    | Default meta description content
    |
    */

    'meta_description' => 'Free the world\'s culture.',

    /*
    |--------------------------------------------------------------------------
    | Site Birthdate
    |--------------------------------------------------------------------------
    |
    | Date Site Was Born
    |
    */
    'birthdate' => 'December 17th 2020',

    /*
    |--------------------------------------------------------------------------
    | Freelech State
    |--------------------------------------------------------------------------
    |
    | Global Freeleech
    |
    */
    'freeleech' => false,

    'freeleech_until' => '12/23/2017 3:00 PM EST',

    /*
    |--------------------------------------------------------------------------
    | Double Upload State
    |--------------------------------------------------------------------------
    |
    | Global Double Upload
    |
    */
    'doubleup' => false,

    /*
    |--------------------------------------------------------------------------
    | Min Ratio
    |--------------------------------------------------------------------------
    |
    | Minimum Ratio To Download
    |
    */

    'ratio' => 0,

    /*
    |--------------------------------------------------------------------------
    | Invite only
    |--------------------------------------------------------------------------
    |
    | Invite System On/Off (Open Reg / Closed)
    | Expire time in days
    |
    | Restricted mode for invites. If set to true, invites will be restricted
    | Exempt these groups from the invite restrictions
    */
    'invite-only'   => true,
    'invite_expire' => '14',

    'invites_restriced' => false,
    'invite_groups'     => [
        'Administrator',
        'Owner',
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Users Stats
    |--------------------------------------------------------------------------
    |
    | This will be the upload and download given to new members. (In Bytes!)
    | Default: 50GiB Upload and 1GiB Download
    */
    'default_upload'   => '0',
    'default_download' => '0',

    /*
    |--------------------------------------------------------------------------
    | Default Site Style
    |--------------------------------------------------------------------------
    | 0 = Light Theme
    | 1 = Galactic Theme
    | 2 = Dark Blue Theme
    | 3 = Dark Green Theme
    | 4 = Dark Pink Theme
    | 5 = Dark Purple Theme
    | 6 = Dark Red Theme
    | 7 = Dark Teal Theme
    | 8 = Dark Yellow Theme
    */
    'default_style' => 2,

    /*
    |--------------------------------------------------------------------------
    | Default Font Awesome Style
    |--------------------------------------------------------------------------
    | fas = Solid
    | far = Regular
    | fal = Light
    */
    'font-awesome' => 'fas',

    /*
    |--------------------------------------------------------------------------
    | Application Signups
    |--------------------------------------------------------------------------
    | True/1 = Enabled
    | False/0 = Disabled
    */
    'application_signups' => false,

    /*
    |--------------------------------------------------------------------------
    | Rules Page URL
    |--------------------------------------------------------------------------
    | Example: 1
    */
    'rules_url' => 'https://'.parse_url(env('APP_URL'), PHP_URL_HOST).'/pages/1',

    /*
    |--------------------------------------------------------------------------
    | FAQ Page URL
    |--------------------------------------------------------------------------
    | Example: 2
    */
    'faq_url' => 'https://docs.riff.cc/faq',

    /*
    |--------------------------------------------------------------------------
    | Upload Guide Page URL For Upload Page
    |--------------------------------------------------------------------------
    | Example: 4
    */
    'upload-guide_url' => 'https://'.parse_url(env('APP_URL'), PHP_URL_HOST).'/pages/4',

    /*
    |--------------------------------------------------------------------------
    | Hide Staff Area Forum Posts From Chat
    |--------------------------------------------------------------------------
    | 1 = Enabled
    | 0 = Disabled
    | If enabled, Staff members get notifications instead of posting being announced in chat.
    */
    'staff-forum-notify' => '0',

    /*
    |--------------------------------------------------------------------------
    | Staff Forum Id
    |--------------------------------------------------------------------------
    | Example: 2
    | The ID value of staff forum area. Should be the main / parent ID.
    */
    'staff-forum-id' => '',

];
