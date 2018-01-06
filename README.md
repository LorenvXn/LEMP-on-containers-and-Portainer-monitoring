# how to build

<i>after a year of ignoring it, it's finally done! *w00p-w00p*</i>

1) Make sure docker-compose is installed

2) Build LEMP environment:
```
   docker-compose build
   docker-compose up
```

3) Populate database Alex with tables, by running script:

<i>find all passwords, users under docker-compose.yaml file</i>

```
chmod +x tables.sh
./tables.sh

```

Check if database, tables are populated: (http://localhst:8080)

![ScreenShot](https://github.com/Satanette/test/blob/master/heh.png)

Nice, website is done!

And now, for a quick view: (http://localhost:80)


//Not so much to see on 1st page, but go ahead, unleash the beast, and add buttons as much as you want to!

![ScreenShot](https://github.com/Satanette/test/blob/master/1212.png)



Checking horror genre - if you click on them, every book has a cute wikipediated presentation. 

![ScreenShot](https://github.com/Satanette/test/blob/master/33.png)


If you go over a photo, it will make it larger ^^

![ScreenShot](https://github.com/Satanette/test/blob/master/22.png)


Monitoring with Portainer! (https://localhost:9000) - don't forget to create a user before that!

![ScreenShot](https://github.com/Satanette/test/blob/master/545454.png)



Nice! xD


