# All contributions are welcome
Sidequest was built with an "everyone's invited" mindset, so please don't hesitate to submit pull requests, write issues and comments. Everyone is welcome to chip in and hack along. Let's work together as friends and likeminds on making a helpful project. :)

Also, @tshafer has forked Sidequest into an [alternative direction](https://github.com/tshafer/platform), so don't forget to check out what he's doing too. Might also be helpful!

Sidequest - The (WIP) SaaS-in-a-box
===================================

[![Latest Version](https://img.shields.io/github/release/AndersSchmidtHansen/LaravelSidequest.svg?style=flat-square)](https://github.com/AndersSchmidtHansen/LaravelSidequest/releases) [![Is it ready?](https://img.shields.io/badge/ready%20for%20production-nope%20nope%20nope-red.svg?style=flat-square)](https://img.shields.io/badge/ready%20for%20production-nope%20nope%20nope-red.svg?style=flat-square)

Sidequest was created, and actively maintained by [Anders Schmidt Hansen](https://github.com/AndersSchmidtHansen), in order to provide the fastest way possible from an idea to a functional SaaS (Software as a Service) product. It focuses on more than just the developer, it focuses on the entire team behind the SaaS. It aims to become *"what I wish I had available when I first started [Pitcherific](http://pitcherific.com/)"*, and a little bit more.

**Too long, don't wanna read? Watch a (somewhat random) video tour of a few parts of Sidequest. No Audio!**

[<img src="http://i57.tinypic.com/xpo96q.png">](https://www.youtube.com/watch?v=J9BAX9E2QvI&feature=youtu.be)

Sidequest can be considered a continuation of Laravel; where it stops, this layer on top of Laravel 5 takes things a couple of steps further. While it is currently a "work-in-progress", Sidequest aims to make the following available to the technical co-founder (and the rest of his team!):

**Legend:**
- :bulb: = Proposed idea or enhancement
- (⌚) = Working on it or not yet fully complete
- (✔) = Should work as intended
- (×) = Not implemented or not working as it should (yet)


1. **A complete user management flow: (⌚)**
   * Registering a new user (✔)
   * Logging in a user (✔)
   * Sending password reminders to a user (✔)
   * Differentiating between admin and non-admin users (✔)
   * Sending newly registered users a welcome email (✔)
   * Easily turn some users into testers (can access paywalled features freely for a limited time period) (✔)
   * more to come... 

2. **A complete [Stripe](https://stripe.com/) integration flow: (⌚)**
   * Signing a user up for a plan (✔)
   * Charging a user's credit card (✔) 
   * Sending the user a receipt email via Stripe that are also recurrent (✔, [see setup guide](https://github.com/AndersSchmidtHansen/LaravelSidequest/wiki/Setting-up-Stripe-Emails))
   * Updating the user's credit card (✔)
   * Swapping plans and upgrading a user's plan (✔)
   * Cancelling a user's subscription, leaving them on a grace period (✔)
   * Simple coupon / discount / "get a month free" handling (:bulb:)
   * more to come...

3. **A complete email delivery & communications flow: (⌚)**
   * A pre-prepared and sane standard for e-mail layouts (using a variation of the HTML5 Email Boilerplate) (✔)
   * A working integration with [Mandrill](https://mandrill.com/) for transactional emails (✔)
   * Signing a new user up for a Mailchimp List (✔) 
   * Sending bulk email updates with Mailchimp (✔)
   * Easily update users on new feature changes (will either be with transactional emails or push notifications) (:bulb:)
   * more to come...

4. **A complete administrative flow: (⌚)**
   * A clean, administrative panel for maintaining the application (✔)
   * A great place to have non-technical founders help out with stuff you as a technical co-founder shouldn't waste your time with (✔)
   * An application settings area where one can set and change...
     * Application Name (✔)
     * Shortcut icons & Favicon (✔)
     * Publishable Stripe API key (✔)
     * Google Analytics API key (✔)
     * Google Site Verification Key (✔)
     * Heap Analytics API key (✔)
     * Olark (Customer Support) API key (✔)
     * Keen.io API keys (✔)
     * All images needed for making the site become web app enabled (using Apple Touch Images) (✔)
     * Social Media App IDs for Facebook, Twitter and Google Plus & Play (✔)
     * Company details such as the company logo, address, support e-mail etc. (✔)
     * more to come...

   * A "Users" area where you can...
     * Get a paginated list of all your users (✔)
     * View basic statistics of how many users you've got, how many that are plan subscribers and how many that are not (✔)

   * A "Plans" area where you can...
     * quickly get an overview of your plans (great for your non-technical co-founders!) (✔)
     * import subscription plans from Stripe (✔)
     * cache the plans in your database to quickly and easily display them on your "/pricing" page (✔)
     * add descriptions to plans (✔)
     * add features to plans (✔)
     * delete plans from cache (✔)
     * delete plans from Stripe (which also deletes them from the cache) (✔)
     * more to come...

   * A "Developer Zone" where you can...
     * view production mode error logs (and clear the *laravel.log* file too) (✔)
     * have production and staging errors sent to [Bugsnag](https://bugsnag.com) (✔)
     * more to come...

5. **A complete social sharing flow: (⌚)**
   * Facebook Open Graph meta tags ready (✔)
   * Twitter Card meta tags ready (✔)
   * Google Play meta tags ready (✔)
   * Site description meta tags ready (✔)
   * Site image meta tags ready (if images have been uploaded) (✔)
   * more to come...

6. **A complete web app enhanced experience: (⌚)**
   * `apple-mobile-web-app-capable` and `mobile-web-app-capable` ready (✔)
   * `app-title` ready and `app-status-bar` is set to be transparent (✔)
   * Mandatory Apple Touch Images and Icons are loaded (✔)
   * more to come...

7. **A complete "oh right, those legal pages..." flow**: (⌚)
   * A basic Privacy Policy page (✔)
   * A basic Terms of Use page (✔)
   * A cookie policy notice that appears (and disappears) when a guest first visits the site (✔)
   * Editing of Privacy Policy and Terms of Use content in the Administration Panel (✔)
   * more to come...

8. **Relevant analytics for SaaS startups:** (⌚)
   * An integration with the awesome [Keen.io](https://keen.io/), enabling... (✔)
   * an Analytics page on the Admin Dashboard with... (✔, see [the setup guide here](https://github.com/AndersSchmidtHansen/LaravelSidequest/wiki/Setting-up-Keen.io-(with-Stripe)))
   * a "Weekly Growth rate" metric based on the weekly growth in revenue since the past week (✔)
   * a "New Paying Customers" graph over the last 2 months (✔)
   * a "Revenue per month" graph (✔)
   * a "Today's revenue" metric (✔)
   * a "Last 30 days' revenue" metric (✔)
   * a "Total paying customers" metric (✔)

## Installation (Currently only for testing, NOT PRODUCTION!)

Getting started is straight-forward, especially if you have [Laravel Homestead](http://laravel.com/docs/master/homestead) installed. So assuming that you've got it set up, just do the following:

1. Create a new project folder in your `Code` folder (or whatever you've made when you set up Homestead).
2. `cd` into the folder and clone Sidequest from GitHub: `git clone git@github.com:LaravelSidequest.git .`
3. With the Sidequest content in place, run `homestead ssh` and navigate to your folder.
4. Run `npm install` to get the necessary `node_modules`.
5. Run `composer install`.
6. Run `php artisan migrate`.
7. Run `php artisan db:seed`.
8. Run `php artisan key:generate`.
9. Rename `.env.example` to `.env`.
10. Exit your `ssh` (the Virtual Machine), go to your folder and run `gulp watch`.
11. You're golden.


### Steps before configuring your project (holy moses...)

1. Get a [Stripe account](https://dashboard.stripe.com/register).
2. Get a [Heap Analytics account](https://heapanalytics.com/). *Remember to grab the development-version key, by clicking on the "click here" link at the install page*
3. Get a [Keen.io account](https://keen.io/signup). **Note:** I recommend creating a new project called **development** to keep this separate from **production** when testing.
4. Get a [Mandrill account](https://mandrill.com/signup/).
5. Get a [Bugsnag account](https://bugsnag.com/user/new).


### Configuring the development version of your project (hold on to your hats...)

1. Log in with username `admin@sidequest.io` and password `secret` (remember to delete this user or change it when going online!), navigate to [http://localhost:3000/admin](http://localhost:3000/admin).
2. Now it's time to fill out your **Application Settings**...
3. Click on "General Settings" and change the **Application Name** to whatever your project is named.
4. IF you already have Shortcut Icons and Favicons ready in the needed dimensions, upload those. Otherwise, continue.
5. Go to the "Engine Room" page and start out by adding your **Publishable Stripe API key**. [How do I find this?](https://support.stripe.com/questions/where-do-i-find-my-api-keys)
6. Next, add your development-version **Heap Analytics API key**.
7. Finally, add your **Keen.io Project ID** and **Keen.io Read Key**. [How do I find this?](https://keen.io/docs/getting-started-guide/#project-setup)
8. Hit the green "Save" button.
9. Open "Company Details" and fill out your address and support email. If you already have a logo, great, upload it and hit "Save" again.
10. Open your local `.env` file and fill out your "Stripe Secret Key", your "MAIL" details (from Mandrill) and "Mandrill Secret Key", and finally your "Bugsnag Secret Key".
11. The development version of your project should now be ready. You can fill out further details if you want, but this should be enough to get you started.


### Steps after you're ready to push a live version

1. Get a [Google Analytics account](http://www.google.com/analytics/).
2. Get an [Olark account](https://www.olark.com/signup/create_new_account/).
3. more to come...

**Important:** Test, test, test and test again. Check everything.


### Getting your project online (the dreaded production version)
To be honest, the simplest way to get this kind of Laravel project online is to host it on [Laravel Forge](https://forge.laravel.com/). This isn't an ad or anything, honestly, but unless you're very comfortable at setting a Laravel project up on a server, I'd strongly recommend just following [this series of setup guides](https://laracasts.com/series/server-management-with-forge) and get things out there.

**Important:** Test, test, test and test again. Check everything (again).


### How do I get Stripe ready for live transactions?

After being authenticated by Stripe, grab your live `secret` and `publishable` API keys from your Stripe Dashboard. Add the `secret` one to your `.env` file and the `publishable` goes into the administrative panel. After hitting `Save` (and you have a subscription plan defined, of course), you should be good to go.

Note, this is not necessary in development.

**Important:** You need SSL for your site when charging customers. It also sends a serious signal to your potential customers that your site is secure. [Laravel Forge](https://forge.laravel.com/) makes this super easy, so if you just want to get going, then use that solution.


## For Developers

### BrowserSync 2 (Includes BrowserSync UI)

After doing `homestead up`, run `gulp watch` in the root folder to bring up
your browser window at `localhost:3000`. [BrowserSync](http://www.browsersync.io/) should now be running,
allowing you to do edit your PHP, Sass and Coffeescript and have your
application reload automatically on changes. It seriously can't get easier
than this.

To access the **BrowserSync UI**, go to [http://localhost:3001/](http://localhost:3001/).

**Remember:** Don't run `gulp watch` through a `homestead ssh` connection. That won't work. Just go to your local folder and run the command from there.

### Twitter Bootstrap
Both the consumer-facing and admin-facing ends of Sidequest includes Twitter Bootstrap. Some things have already been set up. Mind you, given the fact that it's an impossible task to pre-prepare a front-end and at the same time not force the developer / front-ender to strip all of it away, I've decided to pre-style a few modules and add more utility classes instead of supplying a ready-to-use front-end (which doesn't really exist in reality).

### Jeffrey Way's Laravel 5 Generators

I'm a huge fan of Way's generators for Laravel 5 and Sidequest would be lacking something if these were not also included right from the get-go. Read more about the "[Laravel 5 Generators - Extended here]"(https://github.com/laracasts/Laravel-5-Generators-Extended).

### [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)

Sidequest includes [Barry vd. Heuvel's](https://github.com/barryvdh) "Laravel Debugbar" to make debugging Laravel a bit easier. You can read more about it at the project's own page.

### Sass, Coffeescript & Laravel Elixir

Sidequest utilizes the excellent Laravel Elixir module that comes baked into Laravel 5, which makes pre-processing Sass and Coffeescript (and PHPUnit and much more) a walk in the park.

The project comes with a well-architectured Sass folder structure based on [Hugo Giraudel's](https://github.com/HugoGiraudel) "7-1 Pattern", which you can [read more about here](http://sass-guidelin.es/#the-7-1-pattern). The architecture is well-documented and you import all your components into the `app.scss` file.

Mind you, it is only the architecture that is set up. You will find **no pre-defined stylings** that you first have to remove before you can get going. You simply go do your front-end thing.


## What if I don't want X, Y, Z thing?

Your mileage will probably vary, and that's cool, but Sidequest is not meant to cover everything. It will always be a Laravel thing with a Stripe integration, which is not for everyone. Feel free to fork the project though, morph it into what you prefer.

## Can I help out?

Of course you can! Anyone interested can help out, especially if you're a part of the digital startup scene (technical and non-technical founders) and a developer, front-ender, designer, marketer and so forth. Drop me a note on Twitter ([@lichine](https://twitter.com/lichine)) and let's talk about it.
