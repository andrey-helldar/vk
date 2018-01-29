# VK API

![vk api](https://cloud.githubusercontent.com/assets/10347617/24411930/19393712-1412-11e7-8dd2-9c7da9133d59.jpg)

<p align="center">
<a href="https://packagist.org/packages/andrey-helldar/vk"><img src="https://poser.pugx.org/andrey-helldar/vk/downloads?style=flat-square" alt="Total Downloads" /></a>
<a href="https://packagist.org/packages/andrey-helldar/vk"><img src="https://poser.pugx.org/andrey-helldar/vk/v/stable?format=flat-square" alt="Latest Stable Version" /></a>
<a href="https://packagist.org/packages/andrey-helldar/vk"><img src="https://poser.pugx.org/andrey-helldar/vk/v/unstable?format=flat-square" alt="Latest Unstable Version" /></a>
<a href="https://raw.githubusercontent.com/andrey-helldar/vk/master/LICENSE"><img src="https://poser.pugx.org/andrey-helldar/vk/license?format=flat-square" alt="License" /></a>
</p>

<p align="center">
<a href="https://github.com/andrey-helldar/vk"><img src="https://scrutinizer-ci.com/g/andrey-helldar/vk/badges/quality-score.png?b=master&style=flat-square" alt="Quality Score" /></a>
<a href="https://travis-ci.org/andrey-helldar/vk"><img src="https://travis-ci.org/andrey-helldar/vk.svg?branch=master&style=flat-square" alt="Build Status" /></a>
<a href="https://styleci.io/repos/82566268"><img src="https://styleci.io/repos/86432878/shield?branch=master" alt="StyleCI" /></a>
<a href="https://php-eye.com/package/andrey-helldar/vk"><img src="https://php-eye.com/badge/andrey-helldar/vk/tested.svg?style=flat-square" alt="PHP-Eye" /></a>
</p>


## Menu
* [Installation](#installation)
    * [Update package](#update-package)
* [Requests & responses](#requests--responses)
    * [Template](#template)
    * [Send request](#send-request)
    * [Get response](#get-response)
* [Available methods](#available-methods)
    * [Account](#account)
    * [Ads](#ads)
    * [Apps](#apps)
    * [Auth](#auth)
    * [Board](#board)
    * [Database](#database)
    * [Docs](#docs)
    * [Execute](#execute)
    * Fave
    * [Friends](#friends)
    * Gifts
    * Groups
    * Leads
    * [Likes](#likes)
    * Market
    * [Messages](#messages)
    * News feed
    * Notes
    * Notifications
    * Pages
    * Photos
    * Places
    * Polls
    * Search
    * Stats
    * Status
    * Storage
    * Users
    * Utils
    * Video
    * Wall
    * Widgets
* [Support](#support)
* [Copyright and License](#copyright-and-license)
* [Translation](#translation)
    

## Installation

To get the latest version of package for VK API, simply require the project using [Composer](https://getcomposer.org/):

```bash
$ composer require andrey-helldar/vk
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "andrey-helldar/vk": "5.63.*"
    }
}
```
The version of this package is based on the VK API version and has the following appearance: `x.y.z`, when:

* `x` - Major version of VK API.
* `y` - Minor version of VK API.
* `z` - Version of this package.

Once package is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key, or if you're using Laravel 5.5, this can be done via the automatic package discovery.

* `Helldar\Vk\VkServiceProvider::class,`

Next, execute:

```bash
$ php artisan vendor:publish
$ php artisan migrate
```

Add the following lines to `.env`:

```bash
VK_CLIENT_ID=
VK_CLIENT_SECRET=
VK_SECRET_KEY=
```

when:

* `VK_CLIENT_ID` - Application ID
* `VK_CLIENT_SECRET` - Secure key
* `VK_SECRET_KEY` - Service token

See more at [vk.com/dev](https://vk.com/apps?act=manage)

Alright! Use `vk()` helper.

[ [to top](#) | [to menu](#menu) ]


### Update package

During development, we sometimes make changes to the structure of the database table, so after updating to a more recent version, run the command:
```bash
$ php artisan migrate
```

[ [to top](#) | [to menu](#menu) ]


## Requests & responses

ATTENTION!

For correct work this package user must be authorized on site.

[ [to top](#) | [to menu](#menu) ]


### Template

This package using [Authorization Code Flow](https://vk.com/dev/authcode_flow_user) method to VK API (for server side of an application).

You can call the standard method for creating a button in a template:

```html
{!! vk()->authButton() !!}
```

or just use the route:
```html
{{ route('vk::auth') }}
```

[ [to top](#) | [to menu](#menu) ]


### Send request

To send a request, use the following structure:
```php
// vk()->{section}({method})->param1(value1)->param2(value2)->...->paramN+1(valueN+1)->send();
// Example:
vk()->friends('get')->userId(14)->count(20)->send();
vk()->account('banUser')->userId(14)->send();
```

[ [to top](#) | [to menu](#menu) ]


### Get response

To test and receive a response from the API, use the `get()` method:
```php
// vk()->{section}({method})->get();
// Example:
vk()->friends('get')->get();
vk()->account('banUser')->get();
```

[ [to top](#) | [to menu](#menu) ]


## Available methods

### Account
* `banUser` [(1)](#standalone) - Adds user to the banlist.
* `changePassword` [(1)](#standalone) - Changes a user password after access is successfully restored with the auth.restore method.
* `getActiveOffers` [(2)](#user-token) - Returns a list of active ads (offers) which executed by the user will bring him/her respective number of votes to his balance in the application.
* `getAppPermissions` [(2)](#user-token) - Gets settings of the user in this application.
* `getBanned` [(1)](#standalone) - Returns a user's blacklist.
* `getCounters` [(2)](#user-token) - Returns non-null values of user counters.
* `getInfo` [(1)](#standalone) - Returns current account info.
* `getProfileInfo` [(1)](#standalone) - Returns the current account info.
* `getPushSettings` [(1)](#standalone) - Gets settings of push notifications. [Access rights](https://vk.com/dev/permissions) required: **messages**.
* `lookupContacts` [(1)](#standalone) - Allows to search the VK users using phone numbers, e-mail addresses and user IDs on other services. You may get these users by [friends.getSuggestions](https://vk.com/dev/friends.getSuggestions) method as well. [Access rights](https://vk.com/dev/permissions) required: **friends**.
* `registerDevice` [(1)](#standalone) - Subscribes an iOS/Android/Windows Phone-based device to receive push notifications. [Access rights](https://vk.com/dev/permissions) required: **messages**.
* `saveProfileInfo` [(1)](#standalone) - Edits current profile info.
* `setInfo` [(1)](#standalone) - Allows to edit the current account info.
* `setNameInMenu` [(2)](#user-token) - Sets an application screen name (up to 17 characters), that is shown to the user in the left menu. This happens only in case the user added such application in the left menu from application page, from list of applications and settings.
* `setOffline` [(1)](#standalone) - Marks a current user as offline.
* `setOnline` [(1)](#standalone) - Marks the current user as online for 15 minutes.
* `setPushSettings` [(1)](#standalone) - Change push settings. [Access rights](https://vk.com/dev/permissions) required: **messages**.
* `setSilenceMode` [(1)](#standalone) - Mutes push notifications for the set period of time. [Access rights](https://vk.com/dev/permissions) required: **messages**.
* `unbanUser` [(1)](#standalone) - Deletes user from the blacklist.
* `unregisterDevice` [(1)](#standalone) - Unsubscribes a device from push notifications. [Access rights](https://vk.com/dev/permissions) required: **messages**.

See more at [VK API: Account](https://vk.com/dev/account)

[ [to top](#) | [to menu](#menu) ]


### Ads
API for **VK** advertising account is being beta tested. In case of any error or problem with API, please contact us at **api@vk.com**.

Before you can call API methods, authorize at [server](https://vk.com/dev/auth_sites) or [client](https://vk.com/dev/auth_mobile) end. After it you can make any API requests using a standard [interaction pattern](https://vk.com/dev/api_requests).  

Also, prior to start with Ads API, read [limitations and recommendations](https://vk.com/dev/ads_limits).  

Below there is a list of all methods for operations with the data of VK advertising accounts. 

[Access rights](https://vk.com/dev/permissions) required: **ads**.

* `addOfficeUsers` [(2)](#user-token) - Adds managers and/or supervisors to advertising account.
* `checkLink` [(2)](#user-token) - Allows to check the ad link.
* `createAds` [(2)](#user-token) - Creates ads. Please note! Maximum allowed number of ads created in one request is 5. Minimum size of ad audience is 50 people.
* `createCampaigns` [(2)](#user-token) - Creates advertising campaigns. Please note! Allowed number of campaigns created in one request is 50.
* `createClients` [(2)](#user-token) -  Creates clients of an advertising agency. Available only for advertising agencies. Please note! Allowed number of clients created in one request is 50.
* `createTargetGroup` [(2)](#user-token) - Creates a group to re-target ads for users who visited advertiser's site (viewed information about the product, registered, etc.).
* `deleteAds` [(2)](#user-token) - Archives ads.
* `deleteCampaigns` [(2)](#user-token) - Archives advertising campaigns.
* `deleteClients` [(2)](#user-token) - Archives clients of an advertising agency. Available only for advertising agencies.
* `deleteTargetGroup` [(2)](#user-token) - Deletes a retarget group.
* `getAccounts` [(2)](#user-token) - Returns a list of advertising accounts.
* `getAds` [(2)](#user-token) - Returns number of ads.
* `getAdsLayout` [(2)](#user-token) - Returns descriptions of ad layouts.
* `getAdsTargeting` [(2)](#user-token) - Returns ad targeting parameters.
* `getBudget` [(2)](#user-token) - Returns current budget of the advertising account.
* `getCampaigns` [(2)](#user-token) - Returns a list of campaigns in an advertising account.
* `getCategories` [(2)](#user-token) - Returns a list of possible ad categories.
* `getClients` [(2)](#user-token) - Returns a list of advertising agency's clients. Available only for advertising agencies.
* `getDemographics` [(2)](#user-token) - Returns demographics for ads or campaigns.
* `getFloodStats` [(2)](#user-token) - Returns information about current state of a counter — number of remaining runs of methods and time to the next counter nulling in seconds.
* `getOfficeUsers` [(2)](#user-token) - Returns a list of managers and supervisors of advertising account.
* `getPostsReach` [(2)](#user-token) - Returns a posts reach.
* `getRejectionReason` [(2)](#user-token) - Returns a reason of ad rejection for pre-moderation.
* `getStatistics` [(2)](#user-token) - Returns statistics of performance indicators for ads, campaigns, clients or the whole account.
* `getSuggestions` [(2)](#user-token) - Returns a set of auto-suggestions for various targeting parameters.
* `getTargetGroups` [(2)](#user-token) - Returns a list of target groups.
* `getTargetingStats` [(2)](#user-token) - Returns the size of targeting audience, and also recommended values for CPC and CPM.
* `getUploadURL` [(2)](#user-token) - Returns URL to upload an ad photo to.
* `getVideoUploadURL` [(2)](#user-token) - Returns URL to upload an ad video to.
* `importTargetContacts` [(2)](#user-token) - Imports a list of advertiser's contacts to count VK registered users against the target group. Please note! Maximum allowed number of contacts imported in one request is 1000.
* `removeOfficeUsers` [(2)](#user-token) - Removes managers and/or supervisors from advertising account.
* `updateAds` [(2)](#user-token) - Edits ads. Please note! Allowed number of ads edited in one request is 20. Minimum size of ad audience is 50 people.
* `updateCampaigns` [(2)](#user-token) - Edits advertising campaigns.
* `updateClients` [(2)](#user-token) - Edits clients of an advertising agency. Available only for advertising agencies. Please note! Maximum allowed number of clients edited in one request is 50.
* `updateTargetGroup` [(2)](#user-token) - Edits a retarget group.

See more at [VK API: Ads](https://vk.com/dev/ads)

[ [to top](#) | [to menu](#menu) ]


### Apps
* `deleteAppRequests` [(1)](#standalone) - Deletes all request notifications from the current app.
* `get` [(2)](#user-token) - Returns applications data.
* `getCatalog` [(2)](#user-token) - Returns a list of applications (apps) available to users in the App Catalog. You may call this method no more that 60 times in one minute from the same IP address or ID.
* `getFriendsList` [(2)](#user-token) [(1)](#standalone) - Creates friends list for requests and invites in current app.
* `getLeaderboard` [(2)](#user-token) - Returns players rating in the game.
* `getScore` [(2)](#user-token) - Returns user score in app.
* `sendRequest` [(1)](#standalone) - Sends a request to another user in an app that uses VK authorization.

See more at [VK API: Apps](https://vk.com/dev/apps)

[ [to top](#) | [to menu](#menu) ]


### Auth
* `checkPhone` [(3)](#service-token) - Checks a user's phone number for correctness.
* `confirm` [(3)](#service-token) - Completes a user's registration (begun with the auth.signup method) using an authorization code.
* `restore` [(2)](#user-token) - Allows to restore account access using a code received via SMS.
* `signup` [(3)](#service-token) - Registers a new user by phone number.

See more at [VK API: Auth](https://vk.com/dev/auth)

[ [to top](#) | [to menu](#menu) ]


### Board
[Access rights](https://vk.com/dev/permissions) required: **groups**.

* `addTopic` [(1)](#standalone) - Creates a new topic on a community's discussion board.
* `closeTopic` [(1)](#standalone) - Closes a topic on a community's discussion board so that comments cannot be posted.
* `createComment` [(1)](#standalone) - Adds a comment on a topic on a community's discussion board.
* `deleteComment` [(1)](#standalone) - Deletes a comment on a topic on a community's discussion board.
* `deleteTopic` [(1)](#standalone) - Deletes a topic from a community's discussion board.
* `editComment` [(1)](#standalone) - Edits a comment on a topic on a community's discussion board.
* `editTopic` [(1)](#standalone) - Edits the title of a topic on a community's discussion board.
* `fixTopic` [(1)](#standalone) - Pins a topic (fixes its place) to the top of a community's discussion board.
* `getComments` [(2)](#user-token) - Returns a list of comments on a topic on a community's discussion board.
* `getTopics` [(2)](#user-token) - Returns a list of topics on a community's discussion board.
* `openTopic` [(1)](#standalone) - Re-opens a previously closed topic on a community's discussion board.
* `restoreComment` [(1)](#standalone) - Restores a comment deleted from a topic on a community's discussion board.
* `unfixTopic` [(1)](#standalone) - Unpins a pinned topic from the top of a community's discussion board.

See more at [VK API: Board](https://vk.com/dev/board)

[ [to top](#) | [to menu](#menu) ]


### Database
These methods provide access to VK's database of educational institutions. Access to data is free and authorization is not required, but the number of requests from one IP address can be limited. If you need to execute many requests, we recommend that you call these methods from the client side using JSONP.

[Access rights](https://vk.com/dev/permissions) required: **groups**.

* `getChairs` [(2)](#user-token) - Returns list of chairs on a specified faculty.
* `getCities` [(2)](#user-token) - Returns a list of cities.
* `getCitiesById` [(2)](#user-token) - Returns information about cities by their IDs.
* `getCountries` [(2)](#user-token) - Returns a list of countries.
* `getCountriesById` [(2)](#user-token) - Returns information about countries by their IDs.
* `getFaculties` [(2)](#user-token) - Returns a list of faculties (i.e., university departments).
* `getRegions` [(2)](#user-token) - Returns a list of regions.
* `getSchoolClasses` [(2)](#user-token) - Returns a list of school classes specified for the country.
* `getSchools` [(2)](#user-token) - Returns a list of schools.
* `getStreetsById` [(2)](#user-token) - Returns information about streets by their IDs.
* `getUniversities` [(2)](#user-token) - Returns a list of higher education institutions.

See more at [VK API: Database](https://vk.com/dev/database)

[ [to top](#) | [to menu](#menu) ]


### Docs
[Access rights](https://vk.com/dev/permissions) required: **docs**.

* `add` [(2)](#user-token) - Copies a document to a user's or community's document list.
* `delete` [(2)](#user-token) - Deletes a user or community document.
* `edit` [(2)](#user-token) - Edits a document.
* `get` [(2)](#user-token) - Returns detailed information about user or community documents.
* `getById` [(2)](#user-token) - Returns information about documents by their IDs.
* `getTypes` [(2)](#user-token) - Returns documents types available for current user.
* `getUploadServer` [(2)](#user-token) - Returns the server address for document upload.
* `getWallUploadServer` [(2)](#user-token) [(4)](#community-token) - Returns the server address for document upload onto a user's or community's wall.
* `save` [(2)](#user-token) [(4)](#community-token) - Saves a document after uploading it to a server.
* `search` [(2)](#user-token) [(4)](#community-token) - Returns a list of documents matching the search criteria.

See more at [VK API: Docs](https://vk.com/dev/docs)

[ [to top](#) | [to menu](#menu) ]


### Execute
* `execute` [(2)](#user-token) [(3)](#service-token) - A universal method for calling a sequence of other methods while saving and filtering interim results.

See more at [VK API: Execute](https://vk.com/dev/execute)

[ [to top](#) | [to menu](#menu) ]


### Friends
[Access rights](https://vk.com/dev/permissions) required: **messages**.
 
* `add` [(1)](#standalone) - Approves or creates a friend request.
* `addList` [(1)](#standalone) - Creates a new friend list for the current user.
* `areFriends` [(2)](#user-token) - Checks the current user's friendship status with other specified users. Also returns information specifying whether there is an outgoing or incoming friend request (new follower).
* `delete` [(1)](#standalone) - Declines a friend request or deletes a user from the current user's friend list.
* `deleteAllRequests` [(1)](#standalone) - Marks all incoming friend requests as viewed.
* `deleteList` [(1)](#standalone) - Deletes a friend list of the current user.
* `edit` [(1)](#standalone) - Edits the friend lists of the selected user.
* `editList` [(1)](#standalone) - Edits a friend list of the current user.
* `get` [(2)](#user-token) - Returns a list of user IDs or detailed information about a user's friends.
* `getAppUsers` [(2)](#user-token) - Returns a list of IDs of the current user's friends who installed the application.
* `getByPhones` [(1)](#standalone) - Returns a list of the current user's friends whose phone numbers, validated or specified in a profile, are in a given list.
* `getLists` [(1)](#standalone) - Returns a list of the user's friend lists.
* `getMutual` [(2)](#user-token) - Returns a list of user IDs of the mutual friends of two users.
* `getOnline` [(2)](#user-token) - Returns a list of user IDs of a user's friends who are online.
* `getRecent` [(2)](#user-token) - Returns a list of user IDs of the current user's recently added friends.
* `getRequests` [(1)](#standalone) - Returns information about the current user's incoming and outgoing friend requests.
* `getSuggestions` [(1)](#standalone) - Returns a list of profiles of users whom the current user may know. For the method to return enough suggestions, method account.importContacts will be called first.
* `search` [(2)](#user-token) - Returns a list of friends matching the search criteria.

See more at [VK API: Friends](https://vk.com/dev/friends)

[ [to top](#) | [to menu](#menu) ]


### Likes
[Access rights](https://vk.com/dev/permissions) required: **wall**.

* `add` [(1)](#standalone) - Adds the specified object to the Likes list of the current user.
* `delete` [(1)](#standalone) - Deletes the specified object from the Likes list of the current user.
* `getList` [(2)](#user-token) - Returns a list of IDs of users who added the specified object to their Likes list.
* `isLiked` [(2)](#user-token) - Checks for the object in the Likes list of the specified user.

See more at [VK API: Likes](https://vk.com/dev/likes)

[ [to top](#) | [to menu](#menu) ]


### Messages
[Access rights](https://vk.com/dev/permissions) required: **messages**.

* `send` - Sends a message.

See more at [VK API: Messages](https://vk.com/dev/messages)

[ [to top](#) | [to menu](#menu) ]


<p id="standalone">(1) This method can be called with a user token received in <a href="https://vk.com/dev/standalone">Standalone-app</a> via <a href="https://vk.com/dev/implicit_flow_user">Implicit Flow</a>.</p>
<p id="user-token">(2) This method can be called with a <a href="https://vk.com/dev/access_token">user token</a>.</p>
<p id="service-token">(3) This method can be called with a <a href="https://vk.com/dev/access_token">service token</a>.</p>
<p id="community-token">(4) This method can be called with a <a href="https://vk.com/dev/access_token">community token</a>.</p>


## Support

You can donate via [Yandex Money](https://money.yandex.ru/quickpay/shop-widget?account=410012608840929&quickpay=shop&payment-type-choice=on&mobile-payment-type-choice=on&writer=seller&targets=Andrey+Helldar%3A+Open+Source+Projects&targets-hint=&default-sum=&button-text=04&mail=on&successURL=), WebMoney (Z124862854284, R343524258966).

[ [to top](#) | [to menu](#menu) ]


## Copyright and License

Vk was written by Andrey Helldar for the Laravel Framework 5.4 or later, and is licensed under [MIT License](LICENSE).

[ [to top](#) | [to menu](#menu) ]


## Translation

Translations of text and comment by Google Translate. Help with translation +1 in karma :)

Description of the VK API methods in the comments is taken from the VK API.

[ [to top](#) | [to menu](#menu) ]
