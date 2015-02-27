Sidequest - The (WIP) SaaS-in-a-box
===================================

Sidequest was created, and maintained by [Anders Schmidt Hansen](https://github.com/AndersSchmidtHansen), in order to provide the fastest way possible from an idea to a functional SaaS (Software as a Service) product. It focuses on more than just the developer, it focuses on the entire team behind the SaaS. It aims to become *"what I wish I had available when I first started [Pitcherific](http://pitcherific.com/)"*, and a little bit more.

Sidequest can be considered a continuation of Laravel; where it stops, this layer on top of Laravel 5 takes things a couple of steps further. While it is currently a "work-in-progress", Sidequest aims to make the following available to the technical co-founder (and the rest of his team!):

**Legend:**
- (⌚): Working on it / not yet fully complete
- (✔): Should work as intended
- (×): Not implemented / not working


1. **A complete user management flow: (⌚)**
   * Registering a new user (✔)
   * Logging in a user (✔)
   * Sending password reminders to a user (✔)
   * Differentiating between admin and non-admin users (✔)
   * Sending newly registered users a welcome email (✔)
   * more to come... 

2. **A complete [Stripe](https://stripe.com/) integration flow: (⌚)**
   * Signing a user up for a plan (✔)
   * Charging a user's credit card (✔) 
   * Sending the user a receipt email (×)
   * Updating the user's credit card (×)
   * Swapping plans and upgrading a user's plan (✔)
   * Cancelling a user's subscription (✔)
   * more to come...

3. **A complete email delivery flow: (⌚)**
   * A pre-prepared and sane standard for e-mail layouts (using a variation of the HTML5 Email Boilerplate) (✔)
   * A working integration with [Mandrill](https://mandrill.com/) (✔)
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
     * All images needed for making the site become web app enabled (using Apple Touch Images) (✔)
     * Social Media App IDs for Facebook, Twitter and Google Plus & Play (✔)
     * Company details such as the company logo, address, support e-mail etc. (✔)
     * more to come...

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
9. Exit your `ssh` (the Virtual Machine), go to your folder and run `gulp watch`.
10. You're golden.

11. (Optional): Log in with username `admin@sidequest.io` and password `secret` (remember to delete this user or change it when going online!), navigate to `admin/` and play around.

### How do I get Stripe ready?

Grab your `secret` and `publishable` API keys from your Stripe Dashboard. Add the `secret` one to your `.env` file and the `publishable` goes into the administrative panel. After hitting `Save` (and you have a subscription plan defined, of course), you should be good to go.


## For Developers

### BrowserSync 2 (Includes BrowserSync UI)

After doing `homestead up`, run `gulp watch` in the root folder to bring up
your browser window at `localhost:3000`. [BrowserSync](http://www.browsersync.io/) should now be running,
allowing you to do edit your PHP, Sass and Coffeescript and have your
application reload automatically on changes. It seriously can't get easier
than this.

To access the **BrowserSync UI**, go to [http://localhost:3001/](http://localhost:3001/).

**Remember:** Don't run `gulp watch` through a `homestead ssh` connection. That won't work. Just go to your local folder and run the command from there.

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