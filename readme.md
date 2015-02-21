Sidequest - The (WIP) SaaS-in-a-box
======================================================



## For Developers

### BrowserSync 2 (Includes BrowserSync UI)

After doing `homestead up`, run `gulp watch` in the root folder to bring up
your browser window at `localhost:3000`. [BrowserSync](http://www.browsersync.io/) should now be running,
allowing you to do edit your PHP, Sass and Coffeescript and have your
application reload automatically on changes. It seriously can't get easier
than this.

To access the **BrowserSync UI**, go to [http://localhost:3001/](http://localhost:3001/).

**Remember:** Don't run `gulp watch` through a `homestead ssh` connection. That won't work. Just go to your local folder and run the command from there.