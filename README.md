# Appuccino Wrapper
A simple PHP wrapper for the Appuccino API. Quickly connect your CMS or existing applications to turn your projects into an Appuccino ready app service.

## Why do I need this?
If your website is running WordPress, you can use the [Appuccino WordPress plugin](https://github.com/MyAppuccino/WordPress-Plugin) - this project is meant to be used by developers to wrap existing API's and applications to make them Appuccino ready.

---

## Setting up.
To get you started we have created a simple test to output default content. We use a little tool called [Clamp](https://github.com/jide/clamp) which creates a web server for testing the project, you can get started with the demo here:

```bash
clamp apache start
> Apache server started                                                                                                                      
> You can browse to http://localhost:7000 to see your site. 
```
Now you have the server setup, you can navigate to the following URL's to access the default Appuccino app API.

```curl
/manifest.json
``` 
The manifest lists all resources, templates and partials.

```curl
/file.json
``` 
The `file.json` endpoint loads both the posts and all resource content.

---

## Post Object



